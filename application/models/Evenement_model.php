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

    // Insérer l'évenement dans la table évènement
    public function evenement_insert($data) {

        // On vérifie que l'url choisie n'existe pas dans la base de données
        $condition = "URLEvenement =" . "'" . $data['URLEvenement'] . "'";
        $this->db->select('*');
        $this->db->from('Evenements');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            // Query to insert data in database
            $this->db->insert('Evenements', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }

    // Insérer les paramètres de l'évenement dans la base de données
    public function paramevenements_insert($data2) {
        // Query to insert data in database
        $data2['PasswordModeration'] = md5($data2['PasswordModeration']);
        $this->db->insert('ParametresEvenement', $data2);
    }

    public function getIDFromURL($urlevenement)
    {
        $this->db->select('IDEvenement');
        $this->db->where('URLEvenement', $urlevenement);
        $query = $this->db->get('Evenements');

        return $query->row_array();
    }

}