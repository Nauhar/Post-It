<?php
/**
 * Created by IntelliJ IDEA.
 * User: Xavier
 * Date: 05/05/2015
 * Time: 15:53
 */
public function getArguments($urlevenement)
{

    $this->db->select('*');
    $this->db->from('designevenements');
    $this->db->join('Evenements', 'Evenements.IDEvenement = Messages.IDEvenement');
    $this->db->where('ValidationMessage', TRUE);
    $this->db->where('URLEvenement', $urlevenement);
    $this->db->limit(8);
    $this->db->order_by('DateMessage', 'DESC');

    $query = $this->db->get();


    return $query->result_array();
}

public function getIDFromURL($urlevenement)
{
    $this->db->select('IDEvenement');
    $this->db->where('URLEvenement', $urlevenement);
    $query = $this->db->get('Evenements');

    return $query->row_array();
}