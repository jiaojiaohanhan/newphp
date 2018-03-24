<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class User_model extends CI_Model{
        public function save($uname,$pwd){
            $this->db->insert("user",array(
                "uname" => $uname,
                "pass" => $pwd
            ));
            return $this->db->affected_rows();
        }
        public function get_by_name_pwd($name,$pwd){
            $query = $this->db->get_where("user",array(
                "uname" => $name,
                "pass" => $pwd
            ));
            return $query->row();
        }
    }
?>