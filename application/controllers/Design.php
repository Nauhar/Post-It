<?php
/**
 * Created by IntelliJ IDEA.
 * User: Xavier
 * Date: 21/04/2015
 * Time: 16:11
 */


class Design extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('');

        // Load session library
        $this->load->library('session');

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->load->helper('url');
    }

    /**
     * Fonction de base du controller
     *
     *
     */
    public function design_index()
    {
        $data['title'] = "Design";
        $this->load->view('templates/header', $data);
        $this->load->view('evenements/Design');
        $this->load->view('templates/footer');

    }
}
