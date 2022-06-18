<?php

class Registrasi extends CI_Controller
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
    $this->load->model('Regist_model', 'regist');

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[admin.email]');
    $this->form_validation->set_rules('nohp', 'No. HP', 'trim|required|numeric');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[admin.username]');
    $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[4]|matches[password2]');
    $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'trim|required|matches[password1]');

    if ($this->form_validation->run() == false) {
      $data['judul'] = 'Halaman Registrasi';
      $this->load->view('registrasi/index', $data);
    } else {
      $this->regist->jadiAdmin();
    }
  }
}
