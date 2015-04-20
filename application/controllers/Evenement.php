<?php

class Evenement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('evenement_model');

        // Load session library
        $this->load->library('session');

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->load->helper('url');
    }

    public function index()
    {
        if ($this->session->userdata['IDUtilisateur'] !== null)
        {
            $data['title'] = "Liste des evenements";

            //requete récuperer evenements de l'utilisateurs
            $data['evenements'] = $this->evenement_model->getEvenementUtilisateur($this->session->userdata['IDUtilisateur']);


            //affichage


            $this->load->view('templates/header', $data);
            //echo $this->session->userdata['IDUtilisateur'];
            $this->load->view('evenements/liste_evenements', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            redirect('users/login');
        }
    }
}
