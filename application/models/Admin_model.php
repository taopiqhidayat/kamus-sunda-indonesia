<?php

class Admin_model extends CI_Model
{
  public function getGroupKata($limit, $start, $keyword = null)
  {
    if ($keyword) {
      $this->db->like('words', $keyword);
      $this->db->or_like('arti_bahasa', $keyword);
    }
    $this->db->order_by('words', 'ASC');
    return $this->db->get('vocabulary', $limit, $start)->result_array();
  }

  public function tambahDataKata()
  {
    $data = [
      'words' => $this->input->post('kata', true),
      'arti_bahasa' => $this->input->post('artikata', true)
    ];

    $this->db->insert('vocabulary', $data);
  }

  public function hapusDataKata($id)
  {
    // $this->db->where('id_vocab', $id);
    $this->db->delete('vocabulary', ['id_vocab' => $id]);
  }

  public function getDatabyId($id)
  {
    return $this->db->get_where('vocabulary', ['id_vocab' => $id])->row_array();
  }

  public function ubahDataKata()
  {
    $data = [
      'words' => $this->input->post('kata', true),
      'arti_bahasa' => $this->input->post('artikata', true)
    ];

    $this->db->where('id_vocab', $this->input->post('id'));
    $this->db->update('vocabulary', $data);
  }

  public function getDataAdmin()
  {
    $username = $this->session->userdata('username');
    return $this->db->get_where('admin', ['username' => $username])->row_array();
  }
}
