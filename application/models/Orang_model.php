<?php

class Orang_model extends CI_Model
{
    public function getPerson()
    {
        // $nama = "Virginia Mutiara Putri Dermawan";
        return $this->db->get('persons')->result_array();
    }
}
