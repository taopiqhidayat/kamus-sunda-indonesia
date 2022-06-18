<?php

class Regist_model extends CI_Model
{
  public function jadiAdmin()
  {
    $data = [
      'username' => htmlspecialchars($this->input->post('username')),
      'nama' => htmlspecialchars($this->input->post('nama')),
      'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      'image' => 'sttg.png',
      'email' => htmlspecialchars($this->input->post('email')),
      'no_hp' => htmlspecialchars($this->input->post('nohp'))
    ];

    $this->db->insert('admin', $data);
    redirect('login');
  }
}
