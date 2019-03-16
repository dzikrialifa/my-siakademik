<?php

class Home extends CI_Controller
{

    public function index()
    {
        $data['judul']  = 'Welcome Home Admin';

        $this->load->view('home/index', $data);
    }

    public function login()
    {
        $data['judul']  = 'Login Please';

        $this->load->view('login/header', $data);
        $this->load->view('login/index');
        $this->load->view('login/footer');
    }
}
