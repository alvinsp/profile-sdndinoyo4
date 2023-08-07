<?php
    class Database_model extends CI_Model{
        public function set_hero_db(){
            return $this->db->get('set_hero_db');
        }
    }