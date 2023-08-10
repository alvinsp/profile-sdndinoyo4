<?php
class Set_eskul_model extends CI_Model
{
    public function set_eskul()
    {
        return $this->db->get('ekstrakulikuler');
    }
}
