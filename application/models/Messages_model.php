<?php
/**
 * Created by IntelliJ IDEA.
 * User: Simon
 * Date: 09/04/15
 * Time: 10:23
 */

class Messages_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function getDerniersMessages()
    {
        $query =

        $this->db->select('Auteur, Message, URLPhoto');
        $this->db->from('Messages');
        $this->db->where('ValidationMessage' => TRUE);
        $this->db->orderby('DateMessage', '')


        return $query->result_array();
    }