<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data['judul']  = 'Login Page';

            $this->load->view('auth/header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/footer');
        } else {
            // validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $username   =   $this->input->post('username');
        $password   =   $this->input->post('password');

        $user       =   $this->db->get_where(
            'admin',
            ['username' => $username]
        )->row_array();

        if ($user) {

            if (password_verify($password, $user['password'])) {
                $data   =   [
                    'username' => $user['email'],
                    'status' => $user['status']
                ];
                $this->session->set_userdata($data);
                redirect('user');
            } else { }
        } else {
            // USERNAME TIDAK ADA
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username tidak ada.
            </div>');
            redirect('login');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.email]', [
            'is_unique' => 'Email sudah terdaftar'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak sama',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['judul']  = 'Registration';

            $this->load->view('auth/header', $data);
            $this->load->view('auth/register');
            $this->load->view('auth/footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'foto_profil' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'status' => 1
            ];
            $this->db->insert('admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil dibuat! Silahkan login.
            </div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('status');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil logout.
            </div>');
        redirect('login');
    }
}
