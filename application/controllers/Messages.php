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
    }

    public function index($urlevenement)
    {
        $data['Messages'] = $this->messages_model->getDerniersMessages($urlevenement);

        $data['title'] = "Liste des messages a afficher";

        $this->load->view('templates/header', $data);
        $this->load->view('messages/index', $data);
        $this->load->view('templates/footer');

    }

    public function post($urlevenement)
    {

        $data['title'] = "Postez votre message";
        $data['nom'] = "";
        $data['urlevenement'] = $urlevenement;

        $this->load->view('templates/header', $data);
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        if($this->input->post('submit')){
            //$this->books_model->entry_insert();
            echo $this->input->post('nom');
            echo $this->input->post('message');

            //On récupère l'ID de l'évenement grace a son URL
            $IDEvenement = $this->messages_model->getIDFromURL($urlevenement);
            echo $IDEvenement['IDEvenement'];

            //$this->load->view('messages/post'.$urlevenement, $data);

            //On insère le message
            $this->messages_model->postMessage($IDEvenement['IDEvenement'], $this->input->post('nom'), $this->input->post('message'));


        }
/*
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('messages/post',$data);
        }
        else
        {
            $this->load->view('messages/post/'.$urlevenement,$data);
        }
*/

        $this->load->view('messages/post',$data);
        $this->load->view('templates/footer');

    }


}