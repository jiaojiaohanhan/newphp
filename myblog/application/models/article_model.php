<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model{
    public function get_articles_by_user($user_id){
        $this->db->select("a.*,t.type_name");
        $this->db->from("t_article a");
        $this->db->join("t_article_type t","a.type_id=t.type_id","t.user_id=$user_id");
        return $this->db->get()->result();
    }
    public function get_types_by_user($user_id){
        $sql = "select t.*,(select count(*) from t_article a where a.type_id=t.type_id) num from t_article_type t where t.user_id=$user_id";
        return $this->db->query($sql)->result();
    }
}