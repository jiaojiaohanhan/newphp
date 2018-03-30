<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User_model extends CI_Model{
		public function reg_data($account,$pass,$name){
			$arr=array(
				'ACCOUNT'=>$account,
				'PASSWORD'=>$pass,
				'NAME'=>$name,
			);
			
			$query=$this->db->insert('t_users',$arr);
			return $query;
		}
		
		public function sel_name($name,$pass){
			$this->db->where('ACCOUNT', $name);
			$this->db->where('PASSWORD', $pass);
			$query=$this->db->get('t_users');
			return $query->row();
		}
	}


?>