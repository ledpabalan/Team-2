<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	///////////////////////////////////////////////////////////////////////////////////////////////////////
	public function index()
	{
      $this->load->view('index');
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////

	public function admin()
	{
	  $this->load->model('user_model');

	  $users = $this->user_model->getUsers(null, "Active");

	  $output['users'] = $users;

      $this->load->view('users/getUser', $output);
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////

	public function ViewInactive()
	{
	  $this->load->model('user_model');

	  $users = $this->user_model->getUsers(null, "Inactive");

	  $output['users'] = $users;

      $this->load->view('users/getUser', $output);
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////

	public function register() 
	{
		$data = array();
		$data = $this -> input ->  post();
		if(isset($data) && $data != null){
			redirect('/users/register2/'.$data['user_type']); //passing data into another function
			echo " 1.) data = ".print_r($data, true);//
		}

		$this->load->view('users/signup');
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////

	public function register2 ($user_type) 
	{
		$data = $this -> input ->  post();
		if(isset($data) && $data != null){
			$this->load->model('user_model');
			$this->user_model->createUser($data);
		}

		// echo $user_type;

		$this->load->view('users/signdown'); //AddUser
		//redirect(base_url());
    }

	///////////////////////////////////////////////////////////////////////////////////////////////////////

	public function login() {
		$data = array();
		$data = $this->input->post();
		$this->load->view('users/login');
		 if(isset($data) && $data != null) {
			$this->load->model('user_model');
			$return = $this->user_model->login($data['user_username'], $data['user_password']);
			if(is_bool($return)) {
			   echo "<br/>[    login error   ] <br/><br/>";
			   echo "Incorrect Username and/or Password "; 
			 } 
			 else {
				$_SESSION['user_id'] = $return[0]['user_id'];
                $_SESSION['user_username'] = $return[0]['user_username'];
              
				redirect(base_url()); //UserLoggedIn Interface
				//$this->load->view('index');//UserLoggedIn Interface
			 }
		
			}
	}
    
	///////////////////////////////////////////////////////////////////////////////////////////////////////

	public function viewUser($user_id = null){
		$this-> load -> model ('user_model');

		$user = $this -> user_model ->getUsers($user_id);

		$output['user'] = $user[0];

		$this->load->view('users/viewUser', $output);
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////

	public function updateUser(){
		$data = array();
		$data = $this->input->post();
		 if(isset($data) && $data != null) {
			$this->load->model('user_model');
			$this -> user_model -> updateUser($data);
			}
			redirect('/users');
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////
	
	public function updatestatus ($user_id, $user_acc_status){
		$this -> load -> model('user_model');

		$this -> user_model -> updateUserStatus ($user_id, $user_acc_status);

		redirect('/users/admin');
	}

}
	//public function logout(){
	//	session_unset('user_id');
	//	session_unset('user_uid');
	//	session_destroy();				tinanggal ko muna to di ko alam pano mafifix hahaha para din maka usad ako sa ginaagawa ko :)))
	//	redirect(base_url());
//}


