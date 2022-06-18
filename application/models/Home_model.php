<?php

class Home_model extends CI_model
{
  public function getHurufAwal($limit, $start, $huruf = null)
  {
    if ($huruf) {
      $this->db->like('words', $huruf, 'after');
    }
    return $this->db->get('vocabulary', $limit, $start)->result_array();
  }

  public function getIndoSunda($insun)
  {
    if ($insun) {
      $this->db->like('arti_bahasa', $insun, 'after');
    }
    $this->db->order_by('arti_bahasa', 'ASC');
    return $this->db->get('vocabulary')->result_array();
  }

  public function getSundaIndo($sunin)
  {
    if ($sunin) {
      $this->db->like('words', $sunin);
    }
    $this->db->order_by('words', 'ASC');
    return $this->db->get('vocabulary')->result_array();
  }
}
