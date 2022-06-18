<?php
class Tabel extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('username')) {
      redirect('admin');
    }
    $this->load->model('Tabel_model', 'tabel');
  }

  public function index()
  {
    $data['judul'] = 'Tabel Kata';

    // pagination
    $this->load->library('pagination');

    $config['base_url'] = 'http://localhost/kamus_sunda_indonesia/tabel/index';

    // ambil data keyword
    if ($this->input->post('cari')) {
      $data['keyword'] = $this->input->post('keyword');
      $this->session->set_userdata('keyword', $data['keyword']);
    } else {
      $data['keyword'] = $this->session->userdata('keyword');
    }

    // configurasi pagination
    $this->db->like('words', $data['keyword']);
    $this->db->or_like('arti_bahasa', $data['keyword']);
    $this->db->from('vocabulary');
    $config['total_rows'] = $this->db->count_all_results();
    $config['per_page'] = 25;

    // inisialisasi  pagination
    $this->pagination->initialize($config);

    $data['start'] = $this->uri->segment(3);
    $data['tabel'] = $this->tabel->getGroupKata($config['per_page'], $data['start'], $data['keyword']);

    $this->load->view('templates/header', $data);
    $this->load->view('tabel/index', $data);
    $this->load->view('templates/footer');
  }
}
