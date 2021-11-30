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
			$this->load->model('user_model');

			$this->user_model->createUser($data);

		}

		$this->load->view('users/AddUser');
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
                redirect(base_url());
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