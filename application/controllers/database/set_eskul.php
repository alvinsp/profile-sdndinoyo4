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

	public function tambah_aksi()
	{
		$nama_eskul = $this->input->post('nama_eskul');
		$icon_eskul = $_FILES['icon_eskul']['name'];
		$deskripsi_eskul = $this->input->post('deskripsi_eskul');
		$foto_kegiatan = $_FILES['foto_kegiatan']['name'];

		// Process icon_eskul
		if ($_FILES['foto_kegiatan']['error'] !== UPLOAD_ERR_NO_FILE) {
			$config['upload_path'] = './assets/database/img/foto_kegiatan_eskul/';
			$config['allowed_types'] = 'jpg|png';

			$this->load->library('upload', $config);

			$existing_foto_kegiatan = $config['upload_path'] . $foto_kegiatan;
			if (file_exists($existing_foto_kegiatan)) {
				// File already exists, no need to upload again
			} elseif (!$this->upload->do_upload('foto_kegiatan')) {
				echo 'upload gagal';
				die();
			} else {
				// If successfully uploaded, update the new foto_kegiatan name
				$foto_kegiatan = $this->upload->data('file_name');
				if ($gambar_sebelumnya !== '' && $gambar_sebelumnya !== $foto_kegiatan && file_exists($config['upload_path'] . $gambar_sebelumnya)) {
					unlink($config['upload_path'] . $gambar_sebelumnya);
				}
			}
		} else {
			// If foto_kegiatan is not uploaded, keep the previous foto_kegiatan
			$foto_kegiatan = $gambar_sebelumnya;
		}

		// Process icon_eskul
		if ($_FILES['icon_eskul']['error'] !== UPLOAD_ERR_NO_FILE) {
			$config['upload_path'] = './assets/database/img/icon_eskul/';
			$config['allowed_types'] = 'jpg|png';

			$this->load->library('upload', $config);

			$existing_icon_eskul = $config['upload_path'] . $icon_eskul;
			if (file_exists($existing_icon_eskul)) {
				// File already exists, no need to upload again
			} elseif (!$this->upload->do_upload('icon_eskul')) {
				echo 'upload gagal';
				die();
			} else {
				// If successfully uploaded, update the new icon_eskul name
				$icon_eskul = $this->upload->data('file_name');
				if ($icon_sebelumnya !== '' && $icon_sebelumnya !== $icon_eskul && file_exists($config['upload_path'] . $icon_sebelumnya)) {
					unlink($config['upload_path'] . $icon_sebelumnya);
				}
			}
		} else {
			// If icon_eskul is not uploaded, keep the previous icon_eskul
			$icon_eskul = $icon_sebelumnya;
		}

		// Create data array
		$data = array(
			'nama_eskul' => $nama_eskul,
			'icon_eskul' => $icon_eskul,
			'deskripsi_eskul' => $deskripsi_eskul,
			'foto_kegiatan' => $foto_kegiatan,
		);

		// Insert data to model
		$this->set_eskul_model->input_data($data);
		redirect('database/set_eskul/index');
	}




	public function edit($id)
	{
		$data['set_hero_db'] = $this->database_model->set_hero_db()->result();

		$where = array('id_eskul' => $id);
		$edit_eskul['ekstrakurikuler'] = $this->set_eskul_model->edit_eskul($where, 'ekstrakulikuler')->result();

		$this->load->view('template/database/header', $data);
		$this->load->view('template/database/sidebar', $data);
		$this->load->view('database/edit_eskul', $edit_eskul);
		$this->load->view('template/database/footer');
	}

	public function update()
	{
		$id_eskul = $this->input->post('id_eskul');
		$nama_eskul = $this->input->post('nama_eskul');
		$icon_eskul = $_FILES['icon_eskul']['name'];
		$deskripsi_eskul = $this->input->post('deskripsi_eskul');
		$foto_kegiatan = $_FILES['foto_kegiatan']['name'];

		// Get previous images from the database
		$gambar_sebelumnya = $this->set_eskul_model->get_gambar_by_id($id_eskul); // Replace with the appropriate method from your model
		$icon_sebelumnya = $this->set_eskul_model->get_icon_by_id($id_eskul); // Replace with the appropriate method from your model

		// Process foto_kegiatan
		if ($_FILES['foto_kegiatan']['error'] !== UPLOAD_ERR_NO_FILE) {
			$config['upload_path'] = './assets/database/img/foto_kegiatan_eskul/';
			$config['allowed_types'] = 'jpg|png';

			$this->load->library('upload', $config);

			$existing_foto_kegiatan = $config['upload_path'] . $foto_kegiatan;
			if (file_exists($existing_foto_kegiatan)) {
				// File already exists, no need to upload again
			} elseif (!$this->upload->do_upload('foto_kegiatan')) {
				echo 'upload gagal';
				die();
			} else {
				// If successfully uploaded, update the new foto_kegiatan name
				$foto_kegiatan = $this->upload->data('file_name');
				if ($gambar_sebelumnya !== '' && $gambar_sebelumnya !== $foto_kegiatan && file_exists($config['upload_path'] . $gambar_sebelumnya)) {
					unlink($config['upload_path'] . $gambar_sebelumnya);
				}
			}
		} else {
			// If foto_kegiatan is not uploaded, keep the previous foto_kegiatan
			$foto_kegiatan = $gambar_sebelumnya;
		}

		// Process icon_eskul
		if ($_FILES['icon_eskul']['error'] !== UPLOAD_ERR_NO_FILE) {
			$config['upload_path'] = './assets/database/img/icon_eskul/';
			$config['allowed_types'] = 'jpg|png';

			$this->load->library('upload', $config);

			$existing_icon_eskul = $config['upload_path'] . $icon_eskul;
			if (file_exists($existing_icon_eskul)) {
				// File already exists, no need to upload again
			} elseif (!$this->upload->do_upload('icon_eskul')) {
				echo 'upload gagal';
				die();
			} else {
				// If successfully uploaded, update the new icon_eskul name
				$icon_eskul = $this->upload->data('file_name');
				if ($icon_sebelumnya !== '' && $icon_sebelumnya !== $icon_eskul && file_exists($config['upload_path'] . $icon_sebelumnya)) {
					unlink($config['upload_path'] . $icon_sebelumnya);
				}
			}
		} else {
			// If icon_eskul is not uploaded, keep the previous icon_eskul
			$icon_eskul = $icon_sebelumnya;
		}

		// Update data in the database
		$data = array(
			'nama_eskul' => $nama_eskul,
			'icon_eskul' => $icon_eskul,
			'deskripsi_eskul' => $deskripsi_eskul,
			'foto_kegiatan' => $foto_kegiatan,
		);

		$where = array(
			'id_eskul' => $id_eskul
		);

		$this->set_eskul_model->update_eskul($where, $data, 'ekstrakulikuler');
		redirect('database/set_eskul/index');
	}
}
