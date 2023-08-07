<?php
class Set_hero extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('database_model');
        $this->load->model('set_hero_model');
    }
    public function index()
    {

        $data['set_hero_db'] = $this->database_model->set_hero_db()->result();


        $data_set_hero['set_hero_model'] = $this->set_hero_model->set_hero()->result();

        $this->load->view('template/database/header', $data);
        $this->load->view('template/database/sidebar', $data);
        $this->load->view('database/set_hero', $data_set_hero);
        $this->load->view('template/database/footer');
    }

    public function edit($id)
    {
        $data['set_hero_db'] = $this->database_model->set_hero_db()->result();

        $where = array('id_kalimat' => $id);
        $edit_hero['set_hero'] = $this->set_hero_model->edit_hero($where, 'set_hero')->result();

        $this->load->view('template/database/header', $data);
        $this->load->view('template/database/sidebar', $data);
        $this->load->view('database/edit_hero', $edit_hero);
        $this->load->view('template/database/footer');
    }

    public function update()
    {
        $id_kalimat     = $this->input->post('id_kalimat');
        $kalimat        = $this->input->post('kalimat');
        $gambar         = $this->input->post('gambar');

        $data = array(
            'kalimat' => $kalimat,
            'gambar'  => $gambar
        );

        $where = array(
            'id_kalimat' => $id_kalimat
        );

        $this->set_hero_model->update_hero($where, $data, 'set_hero');
        redirect('database/set_hero/index');
    }
}
