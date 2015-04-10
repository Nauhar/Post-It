<?php
/**
 * Created by IntelliJ IDEA.
 * User: Simon
 * Date: 09/04/15
 * Time: 10:23
 */

class Messages_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getDerniersMessages($urlevenement)
    {

        $this->db->select('Auteur, Message, URLPhoto');
        $this->db->from('Messages');
        $this->db->join('Evenements', 'Evenements.IDEvenement = Messages.IDEvenement');
        $this->db->where('ValidationMessage', TRUE);
        $this->db->where('URLEvenement', $urlevenement);
        $this->db->order_by('DateMessage', 'DESC');

        $query = $this->db->get();


        return $query->result_array();
    }
}