<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function index()
	{
      $this->load->view('welcome_message');
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
			   print_r($return);
			 }
		
			}
	}

	public function viewUser($user_id = null){
		$this-> load -> model ('user_model');

		$user = $this -> user_model ->getUsers($user_id);

		$output['user'] = $user[0];

		$this->load->view('users/viewUser', $output);
	}

	public function updateUser(){
		$data = array();
		$data = $this->input->post();
		 if(isset($data) && $data != null) {
			$this->load->model('user_model');

			print_r($data);
			exit;
			}
	}
}

