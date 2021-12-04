<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function index()
	{
      $this->load->view('index');
	}

	public function register() 
	{
		$data = array();
		$data = $this -> input ->  post();
		if(isset($data) && $data != null){
			redirect('/users/register2/'.$data['user_type']); //passing data into another function
			
		}

		$this->load->view('users/signup');
    }

	public function register2 ($user_type) 
	{
		$data = $this -> input ->  post();
		if(isset($data) && $data != null){
			$this->load->model('user_model');
			$this->user_model->createUser($data);
		}

		echo $user_type;

		$this->load->view('users/signdown'); //AddUser
		//redirect(base_url());
    }







	public function login() {
		$data = array();
		$data = $this->input->post();
		$this->load->view('users/login');
		 if(isset($data) && $data != null) {
			$this->load->model('user_model');
			$return = $this->user_model->login($data['user_username'], $data['user_password']);
			if(is_bool($return)) {
			   echo "login error";
			 } 
			 else {
				$_SESSION['user_id'] = $return[0]['user_id'];
                $_SESSION['user_username'] = $return[0]['user_username'];
              
				redirect(base_url()); //UserLoggedIn Interface
				//$this->load->view('index');//UserLoggedIn Interface
			 }
		
			}
}
	public function logout(){
		session_unset('user_id');
		session_unset('user_uid');
		session_destroy();
		redirect(base_url());
}
}