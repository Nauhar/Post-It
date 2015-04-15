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


        //}

        $this->load->view('templates/header', $data);
        $this->load->view('Accueil', $data);
        $this->load->view('templates/footer');

    }

//fonction qui recherche l'evenement
        public function recherche_evenement()
    {
        $evenement = $this->input->post('recherche_livewall');
    }
}
