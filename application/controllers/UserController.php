<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {
############################################################

public function GetId(){
	$this-> load -> model ('UserModel');

	$user = $this -> UserModel ->getUsers($_SESSION['user_id']);
	$output['user'] = $user[0];
	$UID = $_SESSION['user_id'];
	print_r($UID);



	$data = array();
	$data = $this->input->post();
	if(isset($data) && $data != null) {
		$this -> load -> model('user_model');
		$this -> user_model->updateUser($data);
	}

	$this->load->view('users/buyerside/profile', $output);
}

############################################################

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
			redirect('/usersbuyerside/viewUser');
		}

		$this->load->view('users/buyerside/editUser', $output);
		
		
	}

	public function changepassword(){
		$this-> load -> model ('user_model');

		$user = $this -> user_model ->getUsers($_SESSION['user_id']);

		$output['user'] = $user[0];

		$data = array();
		$data = $this->input->post();
		if(isset($data) && $data != null) {											
			$this -> load -> model('user_model');
			$data['user_password'] = sha1($data['user_password']); //sha1
			$data['user_pwdRepeat'] = sha1($data['user_pwdRepeat']);
			$this -> user_model->updateUser($data);
			redirect('/Usersbuyerside/viewUser'); 
														// binalik ko sa view user lang para after mag changepass don lang sya pupunta
		}

		$this->load->view('users/buyerside/changepass', $output);
		
	}


	/////////////////////////////////////////////////////////////////////////////////////////////////////////
}
