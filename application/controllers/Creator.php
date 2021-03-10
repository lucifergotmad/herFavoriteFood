<?php

class Creator extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('creator/index');
        $this->load->view('templates/footer');
    }
}
