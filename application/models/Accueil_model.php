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