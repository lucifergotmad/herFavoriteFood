<?php

class Makanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Makanan_model');
    }
    public function index()
    {

        $data['makanan'] = $this->Makanan_model->getAllMakanan();
        $this->load->view('templates/header');
        $this->load->view('makanan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        echo "Makanan/tambah";
    }
}
