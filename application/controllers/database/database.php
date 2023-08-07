<?php
    class database extends CI_Controller{
        public function index(){
            $this->load->model('database_model');
            $data['set_hero_db'] = $this->database_model->set_hero_db()->result();
            $this->load->view('template/database/header', $data);
            $this->load->view('template/database/sidebar', $data);
            $this->load->view('database/index', $data);
            $this->load->view('template/database/footer');
        }
    }