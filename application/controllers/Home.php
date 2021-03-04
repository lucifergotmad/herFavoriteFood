<?php

class Home extends CI_Controller
{
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
        $data['nama'] = "Virginia Mutiara Putri Dermawan";
        $data['salam'] = $salam;
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
