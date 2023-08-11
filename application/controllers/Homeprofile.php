<?php
class Homeprofile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('index_home');
		// $this->load->model('eskul_model');
	}

	public function index()
	{
		// $this->load->library('../controllers/Ekstrakurikuler.php');
		// $detail = $this->eskul_model->detail_data($id);
		// $data['detail'] = $detail;
		$data['kalimat'] = $this->index_home->tampil_kalimat()->result();
		$this->load->view('template/website/header');
		$this->load->view('website/index', $data);
		// $this->load->view('website/eskul', $data);
		$this->load->view('template/website/footer');
	}

	public function view_staff()
	{
		$this->load->view('template/website/header');
		$this->load->view('website/staff');
		$this->load->view('template/website/footer');
	}
	public function view_foto()
	{
		$this->load->view('template/website/header');
		$this->load->view('website/foto');
		$this->load->view('template/website/footer');
	}
	public function view_about()
	{
		$this->load->view('template/website/header');
		$this->load->view('website/about');
		$this->load->view('template/website/footer');
	}
	public function view_contact()
	{
		$this->load->view('template/homeprofile/header');
		$this->load->view('homeprofile/contact');
		$this->load->view('templates/homeprofile/footer');
	}


}
