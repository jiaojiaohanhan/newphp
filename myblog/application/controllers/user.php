<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('captcha');
    }
    public function captcha(){
        $vals = array(
            'word'      => rand(1000,9999),
            'img_path'  => './captcha/',
            'img_url'   => base_url().'captcha/',
            'img_width' => '150',
            'img_height'    => 30,
            'expiration'    => 7200,
            'word_length'   => 8,
            'font_size' => 16,
            'colors'    => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );

        $cap = create_captcha($vals);
        echo $cap['time'];
//        echo $cap['image'];
//        echo $cap['word'];

        header('content-type:application:json;charset=utf8');
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET,OPTION');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
    }
    public function reg(){
        $this->load->view("reg");
    }
    public function check_name(){
        $name = $this->input->get("uname");

        $this->load->model("user_model");
        $result = $this->user_model->get_by_name($name);
        if($result){
            echo "fail";
        }else{
            echo "success";
        }
    }
    public function do_reg(){
//        $email = htmlspecialchars($this->input->post("email"));
        $email = $this->input->post("email");
        $name = $this->input->post("uname");
        $pass = $this->input->post("pwd");
        $gender = $this->input->post("gender");

        $this->load->model("user_model");
        $result = $this->user_model->save_user($email,$name,$pass,$gender);
        if($result){
            redirect("user/login");
        }else{
            redirect("user/reg");
        }
    }
    public function login()
    {
        $this->load->view("login");
    }
    public function check_login(){
        $username = $this->input->post("uname");
        $password = $this->input->post("pwd");

        $this->load->model("user_model");
        $result = $this->user_model->get_by_name_pwd($username,$password);
        if($result){
            $this->session->set_userdata("loginedUser",$result);
            redirect("user/index");
        }else{
            echo "fail";
        }
    }
    public function unlogin(){
        $this->session->unset_userdata("loginedUser");
        redirect("user/login");
    }
    public function index(){
        $loginedUser = $this->session->userdata("loginedUser");
        $this->load->model("article_model");
        $articles = $this->article_model->get_articles_by_user($loginedUser->user_id);
        $types = $this->article_model->get_types_by_user($loginedUser->user_id);
        $this->load->view("index",array(
            "articles"=>$articles,
            "types"=>$types
        ));
    }
}