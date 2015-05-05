<?php

class Design_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }


    public function getArguments($urlevenement)
    {

        $this->db->select('*');
        $this->db->from('designevenement');
        $this->db->join('Evenements', 'Evenements.IDEvenement = Designevenement.IDEvenement');
        $this->db->where('URLEvenement', $urlevenement);
        $query = $this->db->get();

        return $query->row_array();
    }

    public function getIDFromURL($urlevenement)
    {
        $this->db->select('IDEvenement');
        $this->db->where('URLEvenement', $urlevenement);
        $query = $this->db->get('Evenements');

        return $query->row_array();
    }
}

?>