<?php
class Home extends CI_Controller
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
		$this->load->model('Home_model', 'home');
		$data['judul'] = 'Kamus Sunda-Indonesia';

		// pagination
		$this->load->library('pagination');

		$config['base_url'] = 'http://localhost/kamus_sunda_indonesia/home/index';

		// ambil data huruf
		if ($this->input->post('abjad')) {
			$data['huruf'] = $this->input->post('huruf');
			$this->session->set_userdata('huruf', $data['huruf']);
		} else {
			$data['huruf'] = $this->session->userdata('huruf');
		}

		// configurasi pagination
		$this->db->like('words', $data['huruf'], 'before');
		$this->db->from('vocabulary');
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 10;

		// inisialisasi  pagination
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['abjad'] = $this->home->getHurufAwal($config['per_page'], $data['start'], $data['huruf']);

		// Indonesia ==>> Sunda
		if ($this->input->post('indosunda')) {
			$data['insun'] = $this->input->post('insun');
		} else {
			$data['insun'] = null;
		}

		$data['sunda'] = $this->home->getIndoSunda($data['insun']);

		// Sunda ==>> Indonesia
		if ($this->input->post('sundaindo')) {
			$data['sunin'] = $this->input->post('sunin');
		} else {
			$data['sunin'] = null;
		}

		$data['indo'] = $this->home->getSundaIndo($data['sunin']);

		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}

	public function help()
	{
		$data['judul'] = 'Halaman Bantuan';
		$this->load->view('home/help', $data);
	}

	public function about()
	{
		$data['judul'] = 'Tentag Kami';
		$this->load->view('home/about', $data);
	}
}
