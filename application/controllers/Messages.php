<?php
/**
 * Created by IntelliJ IDEA.
 * User: Simon
 * Date: 09/04/15
 * Time: 10:01
 */
class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('messages_model');
    }

    public function index($urlevenement)
    {
        $data['Messages'] = $this->messages_model->getDerniersMessages();


    }