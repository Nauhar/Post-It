<?php
/**
 * Created by IntelliJ IDEA.
 * User: Simon
 * Date: 09/04/15
 * Time: 10:23
 */
require_once "application/libraries/twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

class Messages_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getDerniersMessages($urlevenement)
    {

        $this->db->select('Auteur, Message, URLPhoto');
        $this->db->from('Messages');
        $this->db->join('Evenements', 'Evenements.IDEvenement = Messages.IDEvenement');
        $this->db->where('ValidationMessage', TRUE);
        $this->db->where('URLEvenement', $urlevenement);
        $this->db->limit(8);
        $this->db->order_by('DateMessage', 'DESC');

        $query = $this->db->get();


        return $query->result_array();
    }

    public function getIDFromURL($urlevenement)
    {
        $this->db->select('IDEvenement');
        $this->db->where('URLEvenement', $urlevenement);
        $query = $this->db->get('Evenements');

        return $query->row_array();
    }

    public function postMessage($idevenement, $nom, $message)
    {
        $data = array(
            'IDMessage' => '',
            'Auteur' => $nom,
            'Message' => $message,
            'URLPhoto' => '',
            'ValidationMessage' => 'FALSE',
            'IDEvenement' => $idevenement
        );

        $this->db->insert('Messages', $data);
    }

    public function messagesAModérer($idevenement)
    {
        $this->db->select('IDMessage, Auteur, Message, URLPhoto, DateMessage');
        $this->db->where('IDEvenement', $idevenement);
        $this->db->where('ValidationMessage', 0);
        $this->db->order_by('DateMessage', 'ASC');

        $query = $this->db->get('Messages');
        return $query->result_array();
    }

    public function getTweets($hashtag)
    {
        define('CONSUMER_KEY', 'FUTulGUOBPBFFXnfGHu0EiXXX');
        define('CONSUMER_SECRET', 'qXdKaiVc5tKjsgyJMhukxrd7teMSvG0GWdSmwooswniyaV7T1N');
        define('OAUTH_CALLBACK', '/messages/index/gala');

        $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
        $request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));

        $_SESSION['oauth_token'] = $request_token['oauth_token'];
        $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

        $statuses = $connection->get("search/tweets", array("q" => "%23".$hashtag));

        return $statuses;

    }

    public function getEventHashtag($idevenement){
        $this->db->select('HashtagASuivre');
        $this->db->where('IDEvenement', $idevenement);
        $this->db->limit(1);

        $query = $this->db->get('ParametresEvenement');
        return $query->row_array();
    }

    public function postTweet($idevenement, $nom, $message, $photo, $idtweet)
    {

        $this->db->select('*');
        $this->db->from('Messages');
        $this->db->where('IDMessage', intval($idtweet));
        $this->db->limit(1);

        $query = $this->db->get();


        if ($query->num_rows() == 0) {
            // Query to insert data in database
            $data = array(
                'IDMessage' => intval($idtweet),
                'Auteur' => $nom,
                'Message' => $message,
                'URLPhoto' => $photo,
                'ValidationMessage' => 'FALSE',
                'IDEvenement' => $idevenement
            );

            echo "data['IDMessage'] : ".$data['IDMessage'];

            $this->db->insert('Messages', $data);
        }
    }
}