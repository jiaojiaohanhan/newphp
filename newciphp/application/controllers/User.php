<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper('captcha');
		}
		
		
		public function index(){
			//echo base_url();
			
			$vals = array(
			    'word'      => rand(1000,9999),
			    'img_path'  => './captcha/',
			    'img_url'   => base_url().'captcha/',
			    //'font_path' => './path/to/fonts/texb.ttf',
			    'img_width' => '150',
			    'img_height'    => 30,
			    'expiration'    => 7200,
			    'word_length'   => 8,
			    'font_size' => 16,
			    //'img_id'    => 'Imageid',
			    //'pool'      => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
			
			    // White background and border, black text and red grid
			    'colors'    => array(
			        'background' => array(255, 255, 255),
			        'border' => array(255, 255, 255),
			        'text' => array(0, 0, 0),
			        'grid' => array(255, 40, 40)
			    )
			);
			
			/*array(4) { ["word"]=> string(4) "1020" 
			 * ["time"]=> float(1521959643.3462) 
			 * ["image"]=> string(115) " " 
			 * 
			["filename"]=> string(19) "1521959643.3462.jpg" } */
			
			$cap = create_captcha($vals);
			$data['capt']=$cap;
			/*
			$arr=array(
				'word'=>$cap['word'],
				'filename'=>$cap['filename']
			);*/
			//$this->session->set_userdata($array);
			//$_SESSION['word']=$cap['word'];
			//$_SESSION['filename']=$cap['filename'];
			if(isset($_GET['name'])){
				$_SESSION['word']=$cap['word'];
				echo json_encode($cap);
			}else{
				$this->load->view('reg.php',$data);
			}
			
			//var_dump($cap);
			//echo $cap['image'];
		}
		
		public function checkcode(){
			$code=$this->input->post('code');
			if($code != $_SESSION['word']){
				echo "error";
			}else{
				echo "success";
			}
		}
		
		
		public function reg(){
			$this->load->view('reg.php');
		}
		
		public function do_reg(){
			$account=$this->input->post('email');
			$pass=$this->input->post('pwd');
			$name=$this->input->post('name');
			
			$this->load->model('User_model');
			$result=$this->User_model->reg_data($account,$pass,$name);
			if($result){
				redirect('User/login');
			}
		}

		public function do_login(){
			$name=$this->input->post('email');
			$pass=$this->input->post('pwd');
			$this->load->model('User_model');
			$result=$this->User_model->sel_name($name,$pass);
			if($result){
				
				$array=array(
					'uid'=>$result->USER_ID,
					'name'=>$result->NAME,
				);
				$this->session->set_userdata($array);
				redirect('Blog/index');
			}
		}
		
		public function unlogin(){
			unset($_SESSION['uid']);
			unset($_SESSION['name']);
			redirect('User/unindex');
		}
		
		public function unindex(){
			$this->load->view('unindex.php');
		}

		public function login(){
			$this->load->view('login.php');
		}
	}


?>