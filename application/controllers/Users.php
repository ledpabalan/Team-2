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
			$_SESSION['info'] = $data;
			$_SESSION['user_type'] = $user_type;
			
			//$id = $this->user_model->createUser($data,$user_type);

			    /*$return = $this->user_model->login($data['user_username'], $data['user_password']);

				$this->session->set_userdata($data);


				if($return[0]['user_type'] == 'Buyer')
				{
					$this->session->set_userdata($return[0]);

					redirect('/Homepage/buyerside'); //User Buyer LoggedIn Interface
		 		}
					else
				{
					$this->session->set_userdata($return[0]);
					redirect('/Homepage/sellerside');
				}
						*/
				redirect('users/emailsent');
	
		} 

		// echo $user_type;

		$this->load->view('users/signdown'); //AddUser
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

/* 	public function sent()
	{
		$this -> load -> model('user_model');

		$this -> user_model -> send_validation_email ();

      $this->load->view('EmailVer/sent');
	} */


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

			$subject = 'tae';
			$header_message = "<html><head><title>".$subject."</title></head><body>";
			$footer_message = "</body></html>";
			$input_msg = '<center><h3>To complete the registration, kindly confirm your email address below:</h3></center>
			<div>
			<center><a href="'.base_url().'users/verify?code='.$enc_code.'&id='.$enc_id.'&user_type='.$user_type.'"><button>Confirm</button></a></center>
			</div>';
			$msg = $header_message.$input_msg.$footer_message;

			$this->email->subject('try');
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
			$this->load->view('users/verifyfail');
		}
		
		
	}
	
	// public function forgotpassword()
	// {
	// 	$this -> load -> model ('user_model');
	// 	if($_SERVER['REQUEST_METHOD']=='POST')
	// 	{
	// 		//$this -> form_validation -> set_rules('user_email', 'User_Email', 'required');
	// 		//if($this->form_validation->run()==TRUE)
			
	// 			$user_email = $this -> input -> post ('user_email');
	// 			$validateEmail = $this->user_model->validateEmail($user_email);
	// 			if($validateEmail!=false)
	// 			{
	// 				$row = $validateEmail;
	// 				$user_id = $row -> user_id;

	// 				$string = time().$user_id.$user_email;
	// 				$hash_string = hash('sha256',$string);
	// 				$currentDate = date('Y-m-d H:i');
	// 				$hash_expiry = date('Y-m-d H:i', strtotime($currentDate. '1 days'));
	// 				$data = array(
	// 					'hash_key'=>$hash_string,
	// 					'hash_expiry'=>$hash_expiry,
	// 				);
					
	// 				$resetLink = base_url().'reset/password?hash='.$hash_string;
	// 				$message = '<p> Your Reset Password link is here: </p>'.$resetLink;
	// 				$subject = "Password Reset Link";
	// 				$sentStatus = $this-> SendEmail($user_email,$subject,$message);
	// 				if($sentStatus==true)
	// 				{
	// 					$this -> user_model -> UpdatePasswordhash($data,$user_email);
	// 					$this -> session -> set_flashdata('Success', 'Reset password link successfully sent');
	// 					redirect(base_url('users/forgotpassword'));
	// 				}
	// 				else
	// 				{
	// 					$this -> session -> set_flashdata('Error', 'Email sending error');
	// 					$this->load->view('users/forgot');
	// 				}
	// 			}
	// 			else 
	// 			{
	// 				$this -> session -> set_flashdata('Error', 'Invalid Email');
	// 				$this->load->view('users/forgot');
	// 			}
	// 		}
	// 		else 
	// 		{
	// 			$this->load->view('users/forgot');
	// 		}
		
	// 	// else 
	// 	// {
	// 	// 	$this->load->view('users/forgot');
	// 	// }
		
		
	// }

	// public function SendEmail($user_email,$subject,$message){
	// 	$config['protocol'] = 'smtp';
	// 	$config['smtp_host'] = 'smtp.gmail.com';
	// 	$config['smtp_user'] = 'thenewtayuman@gmail.com';
	// 	$config['smtp_pass'] = 'oehnodjuckbeoplu';
	// 	$config['smtp_port'] = '587';
	// 	$config['smtp_crypto'] = 'tls';
	// 	$config['starttls'] = true;
	// 	$config['newline'] = '\r\n';
	// 	$config['mailtype'] = 'html';

	// }

	// public function reset_password(){
	// 	$data = array();
	// 	$data = $this->input->get();
	// 	//get user uid by GET method
	// 	$uid = $data['uid'];

	// 	//generate code
	// 	$code = $this->uniqidReal(8);
	// 	$code = strtoupper($code);
	// 	$enc_code = $this->encryption->encrypt($code);
	// 	//encrypt uid
	// 	$enc_uid = $this->encryption->encrypt($uid);

	// 	//check if may existing reset password case db
	// 	$this->load->model('reset_user_model');
	// 	$result = $this->reset_user_model->getUser($uid);

	// 	if(count($result) != 0){
	// 		//if may nagmatch, delete and create new
	// 		$this->reset_user_model->deleteUser($result[0]['id'], $result[0]['user_uid']);
	// 		$datas['user_uid'] = $uid;
	// 		$datas['code_generated'] = $code;
	// 		$datas['time_valid'] = strtotime('+1 day');
	// 		$user = $this->reset_user_model->createUser($datas);
	// 	}else{
	// 		$datas['user_uid'] = $uid;
	// 		$datas['code_generated'] = $code;
	// 		$datas['time_valid'] = strtotime('+1 day');
	// 		$user = $this->reset_user_model->createUser($datas);
	// 	}
	// 	//get user to user table to get the email
	// 	$this->load->model('user_model');
	// 	$result1 = $this->user_model->getUser(Null, $uid);

	// 	//send email
	// 		$config['protocol'] = 'smtp';
	// 		$config['smtp_host'] = 'smtp.gmail.com';
	//  		$config['smtp_user'] = 'thenewtayuman@gmail.com';
	// 	 	$config['smtp_pass'] = 'oehnodjuckbeoplu';
	// 		$config['smtp_port'] = '587';
	// 		$config['smtp_crypto'] = 'tls';
	// 		$config['starttls'] = true;
	// 		$config['newline'] = '\r\n';
	// 		$config['mailtype'] = 'html';

	// 		$this->load->library('email', $config);
	// 		$this->email->set_newline("\r\n");

	// 		$subject = 'Reset Password';
	// 		$header_message = "<html><head><title>".$subject."</title></head><body>";
	// 		$footer_message = "</body></html>";
	// 		$input_msg = '<center><h3>You have requested to reset your password. You may reset your password here:</h3></center>
	// 		<div>
	// 		<center><a href="'.base_url().'user/reset_pwd_form?code='.$enc_code.'&uid='.$enc_uid.'"><button>Confirm</button></a></center>
	// 		</div>';
	// 		$msg = $header_message.$input_msg.$footer_message;

	// 		$this->email->subject('try');
	// 		$this->email->to($result1[0]['user_email']);
	// 		$this->email->from('no-reply@gmail.com');
	// 		$this->email->message($msg);
	// 		$this->email->send();
	// 		echo $this->email->print_debugger();

	// 		redirect(base_url()."user/login/$uid/true?code=$code");
	// }

	// public function reset_pwd_form(){
	// 	$data = array();
	// 	$data = $this->input->get();
	// 	//replace spaces with +
	// 	$data['enc_code'] = str_replace(' ', '+', $data['code']);
	// 	$data['enc_uid'] = str_replace(' ', '+', $data['uid']);
	// 	//decryption
	// 	$dec_code = $this->encryption->decrypt($data['enc_code']);
	// 	$dec_uid = $this->encryption->decrypt($data['enc_uid']);
	// 	//guide
	// 	echo "Dec_code: ".$dec_code."<br>";
	// 	echo "Dec_UID: ".$dec_uid."<br>";
		
	// 	//load models
	// 	$this->load->model('user_model');
	// 	$this->load->model('reset_user_model');

	// 	//check if data in vat data is in reset_user table
	// 	//else failed reset
	// 	$result = $this->reset_user_model->getUser(null, $dec_uid);
	// 	if(count($result) != 0){
	// 		if($result[0]['time_valid'] >= strtotime('now') && $dec_code == $result[0]['code_generated']){
	// 			$output = array();
	// 			//if may nagmatch sa uid
	// 			$input = $this->input->post();
	// 			print_r($input);
	// 			echo "<br>";

	// 			//trigger submit
	// 			$trigger = false;
	// 			if(isset($input['trigger'])){
	// 				$trigger = $input['trigger'];
	// 				unset($input['trigger']);
	// 			}
	// 			else{
	// 				$trigger = false;
	// 			}

	// 			if(isset($input['user_password']) && isset($input['user_pwdRepeat'])){
	// 				if($input['user_password'] == $input['user_pwdRepeat'] && $trigger = true){
	// 					$this->load->model('user_model');
	// 					//get and update user table
	// 					$user = $this->user_model->getUSer(null, $dec_uid);
	// 					$user[0]['user_password'] = $input['user_password'];
	// 					$this->user_model->updateUser($user[0]);
	// 					//delete reset user row
	// 					$this->reset_user_model->deleteUser(null, $dec_uid);
	// 					redirect(base_url());
	// 				}else{
	// 					$output['error'] = "Passwords do not match!";
	// 				}
	// 			}

	// 			$this->load->view('users/reset_password-login', $output);
	// 		}else{
	// 			$this->load->view('users/resetpwd_failed');
	// 		}
	// 	}else{
	// 		$this->load->view('users/resetpwd_failed');
	// 	}

		
		
	// }
}
