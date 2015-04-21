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
        $this->db->select('IDMessage, Auteur, Message, URLPhoto');
        $this->db->where('IDEvenement', $idevenement);
        $this->db->order_by('DateMessage', 'ASC');

        $query = $this->db->get('Messages');
        return $query->result_array();
    }

    public function twitterConnect()
    {
        define('CONSUMER_KEY', 'FUTulGUOBPBFFXnfGHu0EiXXX');
        define('CONSUMER_SECRET', 'qXdKaiVc5tKjsgyJMhukxrd7teMSvG0GWdSmwooswniyaV7T1N');
        define('OAUTH_CALLBACK', '/messages/index/gala');

        $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
        $request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));

        $_SESSION['oauth_token'] = $request_token['oauth_token'];
        $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
    }



    public function getTweets()
    {
        $content = $connection->get("account/verify_credentials");

        $statuses = $connection->get("search/tweets", array("q" => "%23galamiagebdx"));

        var_dump($_SESSION);
        echo "<br/><br/><br/>";
        var_dump($content);
        echo "<br/><br/><br/>";
        var_dump($statuses);

    }

    public function getEventHashtag($idevenement){
        var_dump($idevenement);
        $this->db->select('HashtagASuivre');
        $this->db->where('IDEvenement', $idevenement);
        $this->db->limit(1);

        $query = $this->db->get('ParametresEvenement');
        return $query->row_array();
    }

}