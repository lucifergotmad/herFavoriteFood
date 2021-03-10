<?php

class Foods extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('foods/index');
        $this->load->view('templates/footer');
    }
}
