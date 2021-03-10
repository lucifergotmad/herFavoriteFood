<?php

class Foods extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Foods_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Foods";
        $data['foods'] = $this->Foods_model->getAllFoods();
        $this->load->view('templates/header', $data);
        $data['foods'] ? $this->load->view('foods/index', $data) : $this->load->view('foods/404');
        $this->load->view('templates/footer');
    }
    public function add()
    {
        $data['judul'] = "Foods";
        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('foods/foods');
            $this->load->view('templates/footer');
        } else {
            $this->Foods_model->addFood();
            redirect('foods');
        }
    }
    public function delete($id)
    {
        $this->Foods_model->deleteFood($id);
        redirect('foods');
    }
}
