<?php
class Set_eskul_model extends CI_Model
{
	public function set_eskul()
	{
		return $this->db->get('ekstrakulikuler');
	}

	public function input_data($data)
	{
		$this->db->insert('ekstrakulikuler', $data);
	}
	public function edit_eskul($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_eskul($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function get_gambar_by_id($id_eskul)
	{
		$this->db->select('foto_kegiatan');

		$this->db->where('id_eskul', $id_eskul);
		$query = $this->db->get('ekstrakulikuler');

		if ($query->num_rows() > 0) {
			$row = $query->row();
			return $row->foto_kegiatan;
		} else {
			return '';
		}
	}
	public function get_icon_by_id($id_eskul)
	{
		$this->db->select('icon_eskul');

		$this->db->where('id_eskul', $id_eskul);
		$query = $this->db->get('ekstrakulikuler');

		if ($query->num_rows() > 0) {
			$row = $query->row();
			return $row->icon_eskul;
		} else {
			return '';
		}
	}
}
