<?php
/**
 * Created by IntelliJ IDEA.
 * User: Simon
 * Date: 09/04/15
 * Time: 10:01
 */
class Messages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('messages_model');

        // Load session library
        $this->load->library('session');
    }

    /**
     * Fonction de base du controller, affiche les derniers messages
     *
     * @param $urlevenement
     */
    public function index($urlevenement)
    {
        $data['Messages'] = $this->messages_model->getDerniersMessages($urlevenement);
        $data['URLEvenement'] = $urlevenement;
        $data['title'] = "Liste des messages a afficher";

        $this->load->view('templates/header', $data);
        $this->load->view('messages/index', $data);
        $this->load->view('templates/footer');

    }

    /**
     * Fonction permettant de poster un nouveau message
     *
     * @param $urlevenement
     */
    public function post($urlevenement)
    {

        $data['title'] = "Postez votre message";
        $data['nom'] = "";
        $data['urlevenement'] = $urlevenement;

        //Charge les modules pour les formulaires et leur validation
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        //Si on a soumis le formulaire
        if($this->input->post('submit')){

            //On récupère l'ID de l'évenement grace a son URL
            $IDEvenement = $this->messages_model->getIDFromURL($urlevenement);

            //On insère le message
            $this->messages_model->postMessage($IDEvenement['IDEvenement'], $this->input->post('nom'), $this->input->post('message'));


        }

        $this->load->view('templates/header', $data);
        $this->load->view('messages/post',$data);
        $this->load->view('templates/footer');
    }

    public function getMessages($urlevenement){
        $all = $this->messages_model->getDerniersMessages($urlevenement);
        echo json_encode($all);
    }

    public function twitter($urlevenement){

        $IDevent = $this->messages_model->getIDFromURL($urlevenement);

        $hashtag = $this->messages_model->getEventHashtag($IDevent['IDEvenement']);

        if(isset($hashtag['HashtagASuivre'])) {
            //On récupère les tweets du hashtag a suivre
            $tweets = $this->messages_model->getTweets($hashtag['HashtagASuivre']);

            foreach ($tweets->statuses as $status) {
                $idTweet = $status->id_str;
                $nom = $status->user->screen_name;
                $message = $status->text;

                if (isset($status->entities->media[0]->media_url)) {
                    $photo = $status->entities->media[0]->media_url;
                } else {
                    $photo = '';
                }

                $this->messages_model->postTweet($IDevent['IDEvenement'], $nom, $message, $photo, $idTweet);
            }

        }

    }

    public function moderation_msg($urlevenement){
        //requete permettant de récuperer les messages liés à un evenement
        $id = $this->messages_model->getIDFromURL($urlevenement);
        $msg['moderationmessages'] = $this->messages_model->messagesAModérer($id['IDEvenement']);

        $this->load->view('templates/header');
        $this->load->view('messages/moderation',$msg);
        $this->load->view('templates/footer');
    }
}