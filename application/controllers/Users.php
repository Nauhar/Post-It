<?php

//session_start();

class Users extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('users_model');
                // Load form helper library
                $this->load->helper('form');

                // Load form validation library
                $this->load->library('form_validation');

                // Load session library
                $this->load->library('session');
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

        public function login()
        {
            $this->load->view('utilisateurs/login');
        }

        public function inscription()
        {
            $this->load->view('utilisateurs/inscription');
        }

        // Validate and store registration data in database
        public function new_user_registration() {

        // Check validation for user input in SignUp form
            $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('inscription');
            } else {
                $data = array(
                    'name' => $this->input->post('name'),
                    'user_name' => $this->input->post('username'),
                    'user_email' => $this->input->post('email_value'),
                    'user_password' => $this->input->post('password')
                );
                $result = $this->users_model->registration_insert($data) ;
                if ($result == TRUE) {
                    $data['message_display'] = 'Registration Successfully !';
                    $this->load->view('login', $data);
                } else {
                    $data['message_display'] = 'Username already exist!';
                    $this->load->view('inscription', $data);
                }
            }
        }

        // Check for user login process
        public function user_login_process() {

            $this->form_validation->set_rules('mail', 'Mail', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $this->load->view('utilisateurs/login');
            } else {
                $data = array(
                    'mail' => $this->input->post('mail'),
                    'password' => $this->input->post('password')
                );

                //DEBUG
                echo $data['mail'];
                echo $data['password'];
                //FIN DEBUG


                $result = $this->users_model->login($data);
                if($result == TRUE){
                    $sess_array = array(
                        'mail' => $this->input->post('mail')
                    );

                     // Add user data in session
                    $this->session->set_userdata('logged_in', $sess_array);
                    $result = $this->users_model->read_user_information($sess_array);


                    if($result != false){
                        echo "OK";

                        $data = array(
                            'IDUtilisateur' => $result[0]->IDUtilisateur,
                            'NomUtilisateur' => $result[0]->NomUtilisateur,
                            'PrenomUtilisateur' => $result[0]->PrenomUtilisateur,
                            'DateNaissance' => $result[0]->DateNaissance,
                            'Organisation' => $result[0]->Organisation,
                            'Mail' => $result[0]->Mail,
                            'VilleUtilisateur' => $result[0]->VilleUtilisateur,
                            'PaysUtilisateur' => $result[0]->PaysUtilisateur,
                            'DateInscription' => $result[0]->DateInscription
                        );

                        $this->session->set_userdata($data);

                        //$this->load->view('admin_page', $data);

                    }
                }else{
                    $data = array(
                        'error_message' => 'Invalid Username or Password'
                    );
                    $this->load->view('utilisateurs/login', $data);
                }
            }
        }

        // Logout from admin page
        public function logout() {

        // Removing session data
            $sess_array = array(
                'mail' => ''
            );
            $this->session->unset_userdata('logged_in', $sess_array);
            $data['message_display'] = 'Successfully Logout';
            $this->load->view('utilisateurs/login', $data);
        }

}