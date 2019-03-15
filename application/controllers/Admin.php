<?php

class Admin extends CI_Controller
{

    public function index(Type $var = null)
    {

        $data['judul']  =   'Welcome To Administrator';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/content');
        $this->load->view('templates/footer');
    }

    public function nilai(Type $var = null)
    {
        $data['judul']  =   'Nilai Siswa';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('admin/form_nilai_siswa');
        $this->load->view('templates/footer');
    }
}
