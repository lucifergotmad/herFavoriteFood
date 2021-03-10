<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Time_model');
    }
    public function index()
    {
        $data['greeting'] = $this->Time_model->getGreetingTime();
        $data['title'] = "Homepage";
        $data['name'] = "Virginia Mutiara Putri Dermawan";
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
