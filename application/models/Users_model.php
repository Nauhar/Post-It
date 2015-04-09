<?php
class Users_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_Utilisateurs($idutilisateur = FALSE)
		{
	        if ($idutilisateur === FALSE)
        	{
                $query = $this->db->get('Utilisateurs');
                return $query->result_array();
        	}

        $query = $this->db->get_where('Utilisateurs', array('IDUtilisateur' => $idutilisateur));
        return $query->row_array(); 
		}
}