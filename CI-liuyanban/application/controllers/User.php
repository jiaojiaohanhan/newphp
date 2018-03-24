<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class User extends CI_Controller{
        public function __construct(){
            parent::__construct();
//            $this->load->helper('url');
//            $this->load->libraries('session');
        }
        public function index(){
            $this->load->view('index.php');
        }
        public function reg(){
            $this->load->view('reg.php');
        }
        public function do_reg(){
            $uname = $this->input->post('name');
            $pass = $this->input->post('pass');
            $rep = $this->input->post('repass');
            if($pass!=$rep){
//                echo '<script>alert("两次密码输入不一致")</script>';
                redirect("User/reg");
            }else{
                $this->load->model('User_model');
                $rows = $this->User_model->save($uname,$pass);
            };
            if($rows){
                redirect("User/log");
            }else{
                echo "error";
            }
        }
        public function log(){
            $this->load->view('log.php');
        }
        public function do_log(){
            $uname = $this->input->post('name');
            $pass = $this->input->post('pass');
            if($uname==""||$pass==""){
                redirect("User/log");
            }else{
                $this->load->model('User_model');
                $rows = $this->User_model->get_by_name_pwd($uname,$pass);
                if($rows){
                    echo "success";
                }else{
                    echo "error";
                }
            };
        }
    }
?>