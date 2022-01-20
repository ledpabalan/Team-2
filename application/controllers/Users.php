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
			
		}

		$this->load->view('users/signup');
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////

	public function register2 ($user_type) 
	{
		$data = $this -> input ->  post();
		if(isset($data) && $data != null){
			$this->load->model('user_model');
			$id = $this->user_model->createUser($data,$user_type);

			if (!is_bool($id)) {
				$data['user_id'] = $id;
				$this->load->model('user_model');
			    $return = $this->user_model->login($data['user_username'], $data['user_password']);

				$this->session->set_userdata($data);
///

if($return[0]['user_type'] == 'Buyer'){
	$this->session->set_userdata($return[0]);
	redirect('/Homepage/buyerside'); //User Buyer LoggedIn Interface
	 }
	else{

		$this->session->set_userdata($return[0]);
		redirect('/Homepage/sellerside');
	}

///
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
			   echo '<script>alert("Please type correct username or password")</script>';
			 } 
			 else {
				 if($return[0]['user_type'] == 'Buyer'){
				$this->session->set_userdata($return[0]);
              
				redirect('/Homepage/buyerside'); //User Buyer LoggedIn Interface
				//$this->load->view('index');//UserLoggedIn Interface
				 }
				else{

					$this->session->set_userdata($return[0]);
					redirect('/Homepage/sellerside');
				}
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
		//$data['user_id'] = $_SESSION['user_id'];
		if(isset($data) && $data != null) {
			$this -> load -> model('user_model');
			$this -> user_model->updateUser($data);
		}

		$this->load->view('users/profile', $output);
		//redirect('/Homepage');
	}

	public function editUser(){
		$this-> load -> model ('user_model');

		$user = $this -> user_model ->getUsers($_SESSION['user_id']);

		$output['user'] = $user[0];

		$data = array();
		$data = $this->input->post();
		//$data['user_id'] = $_SESSION['user_id'];                       	edit user controller
		if(isset($data) && $data != null) {											
			$this -> load -> model('user_model');
			$this -> user_model->updateUser($data);
			redirect('/users/viewuser');
		}

		$this->load->view('users/edituser', $output);
		
		
	}

	public function changepass(){
		$this-> load -> model ('user_model');

		$user = $this -> user_model ->getUsers($_SESSION['user_id']);

		$output['user'] = $user[0];

		$data = array();
		$data = $this->input->post();
		if(isset($data) && $data != null) {											
			$this -> load -> model('user_model');
			$this -> user_model->updateUser($data);
			redirect('Homepage');
		
		}

		$this->load->view('users/changepass', $output);
		
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

		redirect('/users/logout');
	}

	public function logout(){
		$this->session->sess_destroy();				
		redirect('/login');
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////////

	// HEADER THINGS // 

	public function featuresec()
	{
      $this->load->view('users/featuresec');
	}

	public function shopsec()
	{
      $this->load->view('users/shopsec');
	}

	public function productsec()
	{
      $this->load->view('users/productsec');
	}

	public function catsec()
	{
      $this->load->view('users/catsec');
	}

	public function devsec()
	{
      $this->load->view('users/devsec');
	}
	/* si carlo naglagay dito, para to sa delete profile, di ko alam saan lalagay hehe*/
	public function userdelprofile()
	{
      $this->load->view('users/userdelprofile');
	}
	/* si carlo naglagay dito, para to maview yung shop sa shop section, di ko alam saan lalagay hehe*/
	public function usershop()
	{
      $this->load->view('users/usershop');
	}
	/* si carlo naglagay dito hanggang trpurchases, para to maview yung sa purches, di ko alam saan lalagay hehe*/
	public function allpurchases()
	{
      $this->load->view('users/allpurchases');
	}
	public function recpurchases()
	{
      $this->load->view('users/recpurchases');
	}
	public function compurchases()
	{
      $this->load->view('users/compurchases');
	}
	public function trpurchases()
	{
      $this->load->view('users/trpurchases');
	}



	/////////////////////////////////////////////////////////////////////////////////////////////////////////
}

