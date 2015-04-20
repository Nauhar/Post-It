<?php

class Evenement_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getEvenementUtilisateur($iduser){

        $this->db->select('*');
        $this->db->from('Evenements');
        $this->db->where('IDUtilisateur', $iduser);
        $this->db->order_by('DateEvenement', 'DESC');

        $query = $this->db->get();
        return $query->result_array();
    }

}