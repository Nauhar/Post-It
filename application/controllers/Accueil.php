<?php




class Accueil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //$this->load->model('accueil_model');

        // Load session library
        $this->load->library('session');

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
    }

    /**
     * Fonction de base du controller
     *
     *
     */
    public function index()
    {
        $data['title'] = "Page d'Accueil";

        echo "toto";

        $this->load->view('templates/header', $data);
        $this->load->view('Accueil', $data);
        $this->load->view('templates/footer');

    }
}