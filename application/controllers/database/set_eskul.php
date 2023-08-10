<?php
class Set_eskul extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('database_model');
        $this->load->model('set_eskul_model');
    }
    public function index()
    {

        $data['set_hero_db'] = $this->database_model->set_hero_db()->result();
        $data_set_eskul['set_eskul_model'] = $this->set_eskul_model->set_eskul()->result();
		
        $this->load->view('template/database/header', $data);
        $this->load->view('template/database/sidebar', $data);
        $this->load->view('database/set_eskul', $data_set_eskul);
        $this->load->view('template/database/footer');
    }
}
