<?php

class Home extends CI_Controller
{

    public function index()
    {
        $data['judul']  = 'Welcome Home Admin';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    public function login()
    {
        $data['judul']  = 'Login Please';

        $this->load->view('templates/header', $data);
        $this->load->view('home/login');
        $this->load->view('templates/footer');
    }
}
