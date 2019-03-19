<?php

class Guru extends CI_Controller
{

    public function index(Type $var = null)
    {
        $data['judul']  =   'Halaman Guru';
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar');
        $this->load->view('guru/index');
        //$this->load->view('templates/content');
        $this->load->view('templates/footer');
    }
}
