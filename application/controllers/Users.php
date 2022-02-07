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
		session_unset();
		$data = array();
		$output = array();
		$data = $this -> input ->  post();
		

		//trigger submit
		$trigger = false;
		if(isset($data['trigger'])){
			$trigger = $data['trigger'];
			unset($data['trigger']);
		}
		else{
			$trigger = false;
		}

		if($data != null && $trigger == true){
			$this->load->model('user_model');
			if($output['error'] = $this->user_model->checkCreateUser($data)){
				$data['trigger'] = false;
			}
			else{
	
				$_SESSION['info'] = $data;
				$_SESSION['user_type'] = $user_type;
	
					redirect('users/emailsent');
			}
		}

		$this->load->view('users/signdown' , $output); //AddUser
	}

	public function emailholder()
	{
		$this->load->view('users/emailholder'); //AddUser
		
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
  
	///////////////////////////////////////////////////////////////////////////////////////////////////////

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
	////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function deactivate($user_id, $user_acc_status)
	{
		$this -> load -> model('DeactivateProfile');
		
		$data = $this->input->post();
		 if(isset($data) && $data != null) {
			$this->load->model('DeactivateProfile');
			$this -> user_model -> deactivateprofile($data);
			}


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
	function uniqidReal($lenght = 13) 
	{
		// uniqid gives 13 chars, but you could adjust it to your needs.
		if (function_exists("random_bytes")) {
			$bytes = random_bytes(ceil($lenght / 2));
		} elseif (function_exists("openssl_random_pseudo_bytes")) {
			$bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
		} else {
			throw new Exception("no cryptographically secure random function available");
		}
		return substr(bin2hex($bytes), 0, $lenght);
	}

	public function emailSent(){
		
		$output = array();
		if(isset($_SESSION['info'])){
			//passing of data
			$data = $_SESSION['info'];
			$user_type = $_SESSION['user_type'];
			session_unset();
			//print_r($data);
		}

		if($data['user_email']!=NULL){
			$code = $this->uniqidReal(8);
			$code = strtoupper($code);
			$enc_code = $this->encryption->encrypt($code);

			$this->load->model('pendingModel');
			$data['code_generated'] = $code;
			$data['time_valid'] = strtotime('+1 day');
			$id = $this->pendingModel->createUser($data);
			
			$enc_id = $this->encryption->encrypt($id);
			/*
			echo "Code: ".$code."<br>";
			echo "Enc Code: ".$enc_code."<br>";
			echo "ID: ".$id."<br>";
			echo "Enc ID: ".$enc_id."<br>";
			*/
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'smtp.gmail.com';
			$config['smtp_user'] = 'thenewtayuman@gmail.com';
			$config['smtp_pass'] = 'oehnodjuckbeoplu';
			$config['smtp_port'] = '587';
			$config['smtp_crypto'] = 'tls';
			$config['starttls'] = true;
			$config['newline'] = '\r\n';
			$config['mailtype'] = 'html';

			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");

			$subject = 'Email Verification';
			$header_message = "<html><head><title>".$subject."</title></head><body>";
			$footer_message = "</body></html>";
			$input_msg = '<center><h3>To complete the registration, kindly confirm your email address below:</h3></center>
			<div>
				<center><a href="'.base_url().'users/verify?code='.$enc_code.'&id='.$enc_id.'&user_type='.$user_type.'"><button>Confirm</button></a></center>
			</div>';
			$msg = $header_message.$input_msg.$footer_message;
			$this->email->subject($subject);
			$this->email->to($data['user_email']);
			$this->email->from('no-reply@gmail.com');
			$this->email->message($msg);
			$this->email->send();
			echo $this->email->print_debugger();

			$this->load->view('users/emailholder', $output);
		}else{
			redirect(base_url());
		}
		
	}


	public function verify(){
		$data = array();
		$data = $this->input->get();
		$this->load->model('pendingModel');
		$this->load->model('user_model');

		//replace spaces with +
		$data['code'] = str_replace(' ', '+', $data['code']);
		$data['id'] = str_replace(' ', '+', $data['id']);
		//decryption
		$dec_code = $this->encryption->decrypt($data['code']);
		$dec_id = $this->encryption->decrypt($data['id']);
		//guide
		/*
		echo "Dec_code: ".$dec_code."<br>";
		echo "Dec_ID: ".$dec_id."<br>";
		echo strtotime('+1 day')."<br>";
		*/
		//get user to db
		
		$result = $this->pendingModel->getUser($dec_id);

		

		if(count($result) != 0){
			$user = $result[0];
			//actual magic after success verify
			if(strtotime('now') <= $user['time_valid']){
				//unset indexes for insertion in user table
				unset($user['code_generated']);
				unset($user['time_valid']);
				unset($user['user_id']);
				$this->user_model->createUser($user, $data['user_type']);
				$this->session->set_userdata($data);
				//deletion of row on pending_user table
				$this->pendingModel->deleteUser($dec_id,$dec_code,$user['user_username']);
				$return = $this->user_model->login($user['user_username'], $user['user_password']);

				
				//redirection in view to homepage/base_url
				$this->load->view('users/verifysuc');
			}else{
				$this->load->view('users/verifyfail');
			}
		}else{
			$this->load->view('start/verifyfail');
		}
		
		
	}
}



	

