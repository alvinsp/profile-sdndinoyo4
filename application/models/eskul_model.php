<?php
class Eskul_model extends CI_Model
{
	public function view_eskul()
	{
		return $this->db->get('ekstrakulikuler');
	}

	public function detail_data($id_eskul = NULL)
	{
		$query = $this->db->get_where('ekstrakulikuler', array('id_eskul' => $id_eskul))->row();
		return $query;
	}


}
