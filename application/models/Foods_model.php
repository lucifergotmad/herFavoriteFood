<?php

class Foods_model extends CI_Model
{
    public function getAllFoods()
    {
        return $this->db->get('foods')->result_array();
    }
    public function addFood()
    {
        $data = array(
            'name' => $this->input->post('name'),
        );
        $this->db->insert('foods', $data);
    }
    public function deleteFood($id)
    {
        $this->db->delete('foods', array('id' => $id));
    }
}
