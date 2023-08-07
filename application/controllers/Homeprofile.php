<?php
class Homeprofile extends CI_Controller
{
    public function index()
    {
        $this->load->model('index_home');
        $data['kalimat'] = $this->index_home->tampil_kalimat()->result();
        $this->load->view('template/website/header');
        $this->load->view('website/index', $data);
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
        $this->load->view('_templates/homeprofile/header');
        $this->load->view('homeprofile/contact');
        $this->load->view('_templates/homeprofile/footer');
    }
}
