<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul']  = 'Welcome Home Admin';
        $this->load->view('home/index', $data);
    }
}
