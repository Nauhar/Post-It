<?php
class Users extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('users_model');
        }

        public function index()
        {
                $data['Utilisateurs'] = $this->users_model->get_Utilisateurs();

                $data['title'] = 'Liste utilisateurs';

                $this->load->view('templates/header', $data);
                $this->load->view('users/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($idutilisateur = NULL)
        {
                $data['Utilisateur'] = $this->users_model->get_Utilisateurs($idutilisateur);
        }
}