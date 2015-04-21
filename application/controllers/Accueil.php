<?php


class Accueil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('accueil_model');

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
    public function index()
    {
        $data['title'] = "Page d'Accueil";

        $this->load->view('templates/navigation');

        //}

        $this->load->view('templates/header', $data);
        $this->load->view('Accueil', $data);
        $this->load->view('templates/footer');

    }

//fonction qui recherche l'evenement
        public function recherche_evenement()
    {
        $data['title'] = "Recherche de l'evenement dans la base";
        $evenement = $this->input->post('recherche_livewall');
        //echo $evenement;
        $data['evenement'] = $evenement;
        if ($this->accueil_model->verifEvenement($evenement) == true)
            //si l'evenement existe on redirige vers la page de l'evenement
            //$this->load->view('messages/index', $evenement);  // a verifier
            redirect('messages/post/'.$evenement);
        else
            redirect('accueil/index');
        $this->load->view('templates/header', $data);
        //$this->load->view('Accueil', $data);
        $this->load->view('messages/index', $data);
        $this->load->view('templates/footer');
    }
}
