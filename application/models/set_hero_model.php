<?php
    class Set_hero_model extends CI_Model{
        public function set_hero(){
            return $this->db->get('set_hero');
        }
        
        public function edit_hero($where, $table){
            return $this->db->get_where($table, $where);
        }

        public function update_hero($where, $data, $table){
            $this->db->where($where);
            $this->db->update($table, $data);
        }
    }