<?php
/**
 * Created by IntelliJ IDEA.
 * User: Simon
 * Date: 09/04/15
 * Time: 10:23
 */

class Accueil_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    //creer la fonction qui vérifier si un évenement existe par rapport au nom entré


    public function verifEvenement($evenement)
    {
        $condition = "URLEvenement =" . "'" . $evenement . "'";
        $this->db->select('*');
        $this->db->from('Evenements');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        }
        else
            return true;
            }

}