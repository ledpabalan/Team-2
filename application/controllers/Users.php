<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {



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
			$id = $this->user_model->createUser($data);

			if (!is_bool($id)) {
				$data['user_id'] = $id;

				$this->session->set_userdata($data);

				redirect('/Homepage');
			} else{ 
				redirect('/users/login');
			}		
		}

		// echo $user_type;

		$this->load->view('users/signdown'); //AddUser
    }

	///////////////////////////////////////////////////////////////////////////////////////////////////////

	public function login() {

		$id = $this->session->userdata('user_id');

        if(isset($id) && $id != null) {
            redirect('/Homepage');
        }

		$data = array();
		$data = $this->input->post();
		
		 if(isset($data) && $data != null) {
			$this->load->model('user_model');
			$return = $this->user_model->login($data['user_username'], $data['user_password']);

			if(is_bool($return)) {
			   echo "<br/>[    login error   ] <br/><br/>";
			   echo "Incorrect Username and/or Password "; 
			 } 
			 else {
				// var_dump($return[0]);
				// exit;
				$this->session->set_userdata($return[0]);
              
				redirect('/Homepage'); //UserLoggedIn Interface
				//$this->load->view('index');//UserLoggedIn Interface
			 }
		
			}

		$this->load->view('users/login');
	}
    
	///////////////////////////////////////////////////////////////////////////////////////////////////////UPDATEUSER

	public function viewUser(){
		$this-> load -> model ('user_model');

		$user = $this -> user_model ->getUsers($_SESSION['user_id']);

		$output['user'] = $user[0];

		$data = array();
		$data = $this->input->post();
		$data['user_id'] = $_SESSION['user_id'];
		if(isset($data) && $data != null) {
			$this -> load -> model('user_model');
			$this -> user_model->updateUser($data);
		}

		$this->load->view('users/profile', $output);
		redirect('/Homepage');
	}



	///////////////////////////////////////////////////////////////////////////////////////////////////////OPTIONAL

	public function updateUser(){
		$data = array();

		$data = $this->input->post();
		 if(isset($data) && $data != null) {
			$this->load->model('user_model');
			$this -> user_model -> updateUser($data);
			}
			redirect('/Homepage');
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////
	
	public function updatestatus ($user_id, $user_acc_status){
		$this -> load -> model('user_model');

		$this -> user_model -> updateUserStatus ($user_id, $user_acc_status);

		redirect('/users/admin');
	}

	public function logout(){
		$this->session->sess_destroy();				
		redirect('/login');
	}

}

