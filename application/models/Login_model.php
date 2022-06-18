<?php

class Login_model extends CI_Model
{
  public function getAdmin()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->db->get_where('admin', ['username' => $username])->row_array();

    if ($user != null) {
      if (password_verify($password, $user['password'])) {
        $data = [
          'username' => $user['username']
        ];
        $this->session->set_userdata($data);
        redirect('admin');
      } else {
        $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert"<strong>Password</strong> salah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('login');
      }
    } else {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert"<strong>Username</strong> tidak tersedia!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
      redirect('login');
    }
  }
}
