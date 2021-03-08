<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Orang_model');
    }
    public function index()
    {
        date_default_timezone_set("Asia/Jakarta");
        $jamBerapa = date("H");

        if ($jamBerapa > 0 && $jamBerapa < 12) {
            $salam = "Pagi";
        } else if ($jamBerapa >= 12 && $jamBerapa < 15) {
            $salam = "Siang";
        } else if ($jamBerapa >= 15 && $jamBerapa <= 18) {
            $salam = "Sore";
        } else {
            $salam = "Malam";
        }
        $data['salam'] = $salam;
        $data['orang'] = $this->Orang_model->getPerson()[0];

        $this->load->view('templates/header');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
