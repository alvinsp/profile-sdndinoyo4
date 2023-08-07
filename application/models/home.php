<?php
    class Home extends CI_Model{
        public function tampil_logo(){
            return $this->db->get('logo_sekolah');
        }
    }