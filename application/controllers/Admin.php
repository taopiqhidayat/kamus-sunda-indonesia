<?php

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('home');
		}
		$this->load->model('Admin_model', 'admin');
	}

	public function index()
	{
		$data['judul'] = 'Halaman Admin';
		$this->load->view('templates/admheader', $data);
		$this->load->view('admin/index');
		$this->load->view('templates/footer');
	}

	public function profil()
	{
		$data['admin'] = $this->admin->getDataAdmin();
		$data['judul'] = 'Halaman Profil';
		$this->load->view('templates/admheader', $data);
		$this->load->view('admin/profil', $data);
		$this->load->view('templates/footer');
	}

	public function tabel()
	{
		$data['judul'] = 'Tabel Kata';

		// pagination
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/kamus_sunda_indonesia/admin/tabel';

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
		$data['tabel'] = $this->admin->getGroupKata($config['per_page'], $data['start'], $data['keyword']);

		$this->load->view('templates/admheader', $data);
		$this->load->view('admin/tabel', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('kata', 'Kata', 'trim|required');
		$this->form_validation->set_rules('artikata', 'Arti Kata', 'required');

		$data['judul'] = 'Halaman Tambah Kata';
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admheader', $data);
			$this->load->view('admin/tambah');
			$this->load->view('templates/footer');
		} else {
			$this->admin->tambahDataKata();
			$this->session->set_flashdata('msg', 'Ditambahkan');
			redirect('admin/tabel');
		}
	}

	public function hapus($id)
	{
		$this->admin->hapusDataKata($id);
		$this->session->set_flashdata('msg', 'Dihapus');
		redirect('admin/tabel');
	}

	public function ubah($id)
	{
		$this->form_validation->set_rules('kata', 'Kata', 'trim|required');
		$this->form_validation->set_rules('artikata', 'Arti Kata', 'required');

		$data['judul'] = 'Halaman Ubah Kata';
		$data['kata'] = $this->admin->getDatabyId($id);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admheader', $data);
			$this->load->view('admin/ubah', $data);
			$this->load->view('templates/footer');
		} else {
			$this->admin->ubahDataKata();
			$this->session->set_flashdata('msg', 'Diubah');
			redirect('admin/tabel');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert"<strong>Anda</strong> telah logout!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('login');
	}

	public function help()
	{
		$data['judul'] = 'Halaman Bantuan';
		$this->load->view('admin/help', $data);
	}

	public function about()
	{
		$data['judul'] = 'Tentag Kami';
		$this->load->view('admin/about', $data);
	}
}
