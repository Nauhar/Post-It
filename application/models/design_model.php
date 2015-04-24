<?php
/**
 * Created by IntelliJ IDEA.
 * User: Xavier
 * Date: 24/04/2015
 * Time: 11:21
 */
<?php

class Design_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    // Insérer l'évenement dans la table évènement
    public function design_insert($data) {

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
}