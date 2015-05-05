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

            //requete permettant de récuperer les evenements de l'utilisateur
            $data['evenements'] = $this->evenement_model->getEvenementUtilisateur($this->session->userdata['IDUtilisateur']);


            //affichage
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navigation');
            $this->load->view('evenements/liste_evenements', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            redirect('users/login');
        }
    }

    public function creation_evenement()
{
    //var_dump($this->session->userdata['IDUtilisateur']);
    if (isset($this->session->userdata['IDUtilisateur'])){
        $data['title'] = "Créer un evenement";
        $data['message_display'] = $this->session->flashdata('message_display');

        $this->load->view('templates/header', $data);
        //echo $this->session->userdata['IDUtilisateur'];
        $this->load->view('evenements/formulaire_evenement', $data);
        $this->load->view('templates/footer');

    }else{
        $this->session->set_flashdata('message_display', 'Veuillez vous connecter');
        redirect('users/login');
    }

}

    public function validation_evenement()
    {
        // Check validation for user input in SignUp form
        $this->form_validation->set_rules('nomevents', 'Nom', 'trim|required');
        $this->form_validation->set_rules('urlevents', 'URL', 'trim|required');
        $this->form_validation->set_rules('lieuevents', 'Lieu', 'trim|required');
        $this->form_validation->set_rules('villeevents', 'Ville', 'trim|required');
        $this->form_validation->set_rules('paysevents', 'Pays', 'trim|required');
        $this->form_validation->set_rules('nbparticipant', 'Nombre de participants', 'trim|required');
        $this->form_validation->set_rules('typeevents', 'Type de l\'évènement', 'trim|required');
        $this->form_validation->set_rules('dateevents', 'Date de l\'évenement', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('evenements/formulaire_evenement');
        } else {
            $data = array(
                'IDEvenement' => '',
                'NomEvenement' => $this->input->post('nomevents'),
                'URLEvenement' => $this->input->post('urlevents'),
                'Lieu' => $this->input->post('lieuevents'),
                'VilleEvenement' => $this->input->post('villeevents'),
                'PaysEvenement' => $this->input->post('paysevents'),
                'NbParticipants' => $this->input->post('nbparticipant'),
                'TypeEvenement' => $this->input->post('typeevents'),
                'IDUtilisateur' => $this->session->userdata('IDUtilisateur'),
                'DateEvenement' => $this->input->post('dateevents')
            );

            $result = $this->evenement_model->evenement_insert($data) ;
            if ($result == TRUE) {

                //récupération ID evenement
                $id = $this->evenement_model->getIDFromURL($data['URLEvenement']);
                //var_dump($data['URLEvenement']);
                //var_dump($id);
                //insertion params
                $this->form_validation->set_rules('passwordmoderation', 'Mot de passe de modération', 'trim');

                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('evenements/formulaire_evenement');
                } else {
                    $data2 = array(
                        'IDEvenement' => $id['IDEvenement'],
                        'HashtagASuivre' => $this->input->post('hastag'),
                        'ModerationTexte' => $this->input->post('moderationtxt'),
                        'ModerationImage' => $this->input->post('moderationimage'),
                        'PasswordModeration' => $this->input->post('passwordmoderation'),
                        'FiltreObscenite' => $this->input->post('motinterdit')
                    );
                    if ($data2['ModerationTexte'] == null)
                        $data2['ModerationTexte'] = false;
                    $resultat = $this->evenement_model->paramevenements_insert($data2) ;

                    //$data['message_display'] = 'Evènement créé avec succès !';
                    redirect('evenement/design_index/'.$data['URLEvenement']);
                    //$this->load->view('evenements/design', $data);

                }

            } else {
                $this->session->set_flashdata('message_display', 'L\'url choisie existe déjà');
                redirect('evenement/creation_evenement');
                //$this->load->view('evenements/formulaire_evenement', $data);
            }

        }
    }

    public function design_index($urlevenement)
    {
        $id = $this->evenement_model->getIDFromURL($urlevenement);
        //$data['Design'] = $this->design_model->getArguments($id);
        $data['URLEvenement'] = $urlevenement;

        $data['title'] = "Design";

        $this->load->view('templates/header', $data);
        $this->load->view('evenements/Design', $data);
        $this->load->view('templates/footer');
    }


    public function validation_design($urlevenement){

        $id = $this->evenement_model->getIDFromURL($urlevenement);
        $data = array(
            'IDEvenement' => $id['IDEvenement'],
            'Logo' => $this->input->post('logo_page'),
            'TexteBandeau' => $this->input->post('text_bandeau'),
            'CouleurFondBandeau' => $this->input->post('color_fond_bandeau'),
            'CouleurTexteBandeau' => $this->input->post('color_text_bandeau'),
            'CouleurFondPage' => $this->input->post('color_page'),
            'CouleurMessage' => $this->input->post('color_message'),
            'CouleurPseudo' => $this->input->post('color_pseudo'),
            'ImageDeFond' => $this->input->post('image_page'),
            'LogosPartenaires' => $this->input->post('logo_partenaires'),
            'TaillePoliceMessage' => $this->input->post('size_message'),
            'TaillePolicePseudo' => $this->input->post('size_pseudo'),
            'Police' => $this->input->post('police_page'),
            'AfficherImages' => '1',
            'DelaiRafraichissement' =>'6'
        );

        $result = $this->db->insert('Designevenement', $data);
        if ($result == TRUE) {
            $data['message_display'] = 'Evènement créé avec succès !';
            redirect('evenement/index');
            //$this->load->view('evenements/liste_evenements', $data);
        } else {
            $this->load->view('evenements/Design', $data);
        }

    }

    public function supprimer($idevenement)
    {
        $tmp = $this->evenement_model->supprimer_evenement($idevenement);
        return $tmp;
    }
}

