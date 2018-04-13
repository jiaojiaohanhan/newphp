<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    public function get_by_name_pwd($name,$pass){
        $query = $this->db->get_where("t_user",array(
            "username"=>$name,
            "password"=>$pass
        ));
        return $query->row();
    }
    public function get_by_name($name){
        return $this->db->get_where("t_user",array("username"=>$name))->row();
    }
    public function save_user($email,$name,$pass,$gender){
        $this->db->insert("t_user",array(
            "email" => $email,
            "username" => $name,
            "password" => $pass,
            "sex" => $gender
        ));
        return $this->db->affected_rows();
    }
}