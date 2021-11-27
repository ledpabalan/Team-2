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

	public function login(){
		$this->load->view('users/login');

	}

}
