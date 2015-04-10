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


}