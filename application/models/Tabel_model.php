<?php

class Tabel_model extends CI_Model
{
  public function getGroupKata($limit, $start, $keyword = null)
  {
    if ($keyword) {
      $this->db->like('words', $keyword);
      $this->db->or_like('arti_bahasa', $keyword);
    }
    return $this->db->get('vocabulary', $limit, $start)->result_array();
  }
}
