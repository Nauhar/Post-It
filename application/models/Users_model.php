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

        // Insert registration data in database
        public function registration_insert($data) {

            // Query to check whether username already exist or not
            $condition = "Mail =" . "'" . $data['Mail'] . "'";
            $this->db->select('*');
            $this->db->from('Utilisateurs');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 0) {
                $data['PasswordUtilisateur'] = md5($data['PasswordUtilisateur']);
            // Query to insert data in database
                $this->db->insert('Utilisateurs', $data);
                if ($this->db->affected_rows() > 0) {
                    return true;
                }
            } else {
                return false;
            }
        }

        // Read data using username and password
        public function login($data) {
            $pass = md5($data['password']);

            $condition = "Mail =" . "'" . $data['mail'] . "' AND " . "PasswordUtilisateur =" . "'" . $pass . "'";
            $this->db->select('*');
            $this->db->from('Utilisateurs');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() == 1) {
                return true;
            } else {
                return false;
            }
        }

        // Read data from database to show data in admin page
        public function read_user_information($sess_array) {

            $condition = "Mail =" . "'" . $sess_array['mail'] . "'";
            $this->db->select('*');
            $this->db->from('Utilisateurs');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() == 1) {
                return $query->result();
            } else {
                return false;
            }
        }
}