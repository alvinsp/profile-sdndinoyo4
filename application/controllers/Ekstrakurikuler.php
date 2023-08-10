<?php
class Ekstrakurikuler extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('eskul_model');
	}

	public function extra()
	{
		$data['eskul_model'] = $this->eskul_model->view_eskul()->result();
		$this->load->view('template/website/header');
		$this->load->view('website/ekstrakurikuler', $data);
		$this->load->view('template/website/footer');
	}

	public function detail($id)
	{
		$detail = $this->eskul_model->detail_data($id);
		$data['detail'] = $detail;

		$this->load->view('template/website/header');
		$this->load->view('website/eskul', $data);
		$this->load->view('template/website/footer');
	}
}
