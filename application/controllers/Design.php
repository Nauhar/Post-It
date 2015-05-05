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



    public function validation_design(){

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('evenements/design');
        } else {
            $data = array(
                'IDEvenement' => '',
                'Logo' => $this->input->post('logo'),
                'TexteBandeau' => $this->input->post('text_bandeau'),
                'CouleurFondBandeau' => $this->input->post('fond_bandeau'),
                'CouleurTexteBandeau' => $this->input->post('color_text_bandeau'),
                'CouleurFondPage' => $this->input->post('fond_ecran'),
                'CouleurMessage' => $this->input->post('color_message'),
                'CouleurPseudo' => $this->input->post('color_pseudo'),
                'ImageDeFond' => $this->session->userdata('image'),
                'LogosPartenaires' => $this->input->post(''),
                'TaillePoliceMessage' => $this->input->post('size_police_message'),
                'TaillePolicePseudo' => $this->input->post('size_police_pseudo'),
                'Police' => $this->session->userdata('police'),
                'AfficherImages' => $this->input->post(''),
                'DelaiRafraichissement' => $this->input->post('')
            );

            $result = $this->db->insert('Designevenement', $data);
            if ($result == TRUE) {
                $data['message_display'] = 'Evènement créé avec succès !';
                $this->load->view('evenements/page_generee', $data);
            } else {
                $data['message_display'] = 'L\'url choisie existe déjà';
                $this->load->view('evenements/Design', $data);
            }


        }

    }
    /**
     *
     */
    /*public function color_recup()
    {
        $chosen_color11 = $_POST['chosen_color11'];
        //echo ($chosen_color11);
        var_dump($chosen_color11);
    }
*/
}