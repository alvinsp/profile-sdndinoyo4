<?php
class Home extends CI_Controller
{
    public function logo_sekolah()
    {
        $data['logo'] = $this->home->tampil_logo()->result;
        $this->load->model('index_home');
        $this->load->view('template/website/header');
        $this->load->view('website/index', $data);
        $this->load->view('template/website/footer');
    }
}
