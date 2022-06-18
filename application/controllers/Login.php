<?php

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('username')) {
      redirect('admin');
    }
  }

  public function index()
  {
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      $data['judul'] = 'Halaman Login';
      $this->load->view('login/index', $data);
    } else {
      //validasi sukses
      $this->_login();
    }
  }

  private function _login()
  {
    $this->load->model('Login_model', 'login');
    $this->login->getAdmin();
  }
}
