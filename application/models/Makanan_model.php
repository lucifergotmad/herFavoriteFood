<?php

class Makanan_model extends CI_Model
{
    public function getAllMakanan()
    {
        return $this->db->get('foods')->result_array();
    }
}
