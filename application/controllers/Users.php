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

		$this->load->view('users/Registration/signup');


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

		//echo $user_type;
		
		//$this->load->view('users/Registration/signdown'); //AddUser
		
		if($user_type == "Buyer"){
			$this->load->view('users/Registration/signdown');
		}
		else{
			$this->load->view('users/Registration/sellersignup');
		}
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
	// Form Validation
	public function customervalidation($data)
        {   
            #Form Validation for customer's first name (matches required length and no other characters are used aside from the alphabet)
            $this->form_validation->set_rules('customer_firstname', 'First Name', 'required|trim|min_length[3]|max_length[15]|alpha');
           
            #Form Validation for customer's last name (matches required length and no other characters are used aside from the alphabet)
            $this->form_validation->set_rules('customer_lastname', 'Last Name', 'required|trim|min_length[2]|max_length[15]|alpha');

            #Form Validation for customer's username (matches required length, no special characters, is unique)
            $this->form_validation->set_rules('customer_username', 'Username', 'required|trim|min_length[4]|max_length[15]|alpha_dash|is_unique[customer.customer_username]',
                array('is_unique'     => 'This %s already exists.')); #Error message when username already exists 

            #Form Validation for customer's email (entered email is unique)
            $this->form_validation->set_rules('customer_email', 'E-mail Address', 'required|trim|valid_email|is_unique[customer_email]',
                array('is_unique'     => 'This %s already exists.')); #Error message when username already exists
             
            #Form Validation for customer's password
            $this->form_validation->set_rules('customer_password', 'Password', 'required|min_length[8]|max_length[32]');

            #Form Validation for customer's password confirmation (matches first password)
            $this->form_validation->set_rules('customer_passwordconfirmation', 'Confirm Password', 'required|matches[password]|min_length[8]|max_length[32]');    

            
        }

	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////
	// Form Validation
	public function vendorvalidation($data)
        {   
            #Form Validation for Shop's first name (matches required length and no other characters are used aside from the alphabet)
            $this->form_validation->set_rules('shop_name', 'Shop Name', 'required|trim|min_length[4]|max_length[15]|alpha');
           
            #Form Validation for shop's username (matches required length, no special characters, is unique)
            $this->form_validation->set_rules('shop_username', 'Username', 'required|trim|min_length[4]|max_length[15]|alpha_dash|is_unique[customer.customer_username]',
                array('is_unique'     => 'This %s already exists.')); #Error message when username already exists 

            #Form Validation for shop's email (entered email is unique)
            $this->form_validation->set_rules('shop_email', 'E-mail Address', 'required|trim|valid_email|is_unique[customer_email]',
                array('is_unique'     => 'This %s already exists.')); #Error message when username already exists
             
            #Form Validation for customer's password
            $this->form_validation->set_rules('shop_password', 'Password', 'required|min_length[8]|max_length[32]');

            #Form Validation for customer's password confirmation (matches first password)
            $this->form_validation->set_rules('shop_passwordconfirmation', 'Confirm Password', 'required|matches[password]|min_length[8]|max_length[32]');    

			if ($this->form_validation->run())
			{
				$validkey = random_string('numeric', 6);
			
			}
            $this->load->view('users/registration/sellersignup');
        }
	/////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function useremailver()
	{
		// $key = $this->session->userdata('verification_Key');
		// $name = $this->session->userdata('userName');
		$key = '7493902';
		$name = 'chyna';
		$subject = "Verify your email";
		$message = "
		Dear ".$name."!
		
			Welcome and thank you for joining The New Tayuman! This code below is to verify your account! 
			If this wasn't you, please ignore this email!
		
		".$key."

		";
		// $to = $this->input->post('customer_email');

		$to = 'lxedpabalan@gmail.com';

		$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'smtp.googlemail.com',
			'smtp_crypto' => 'tls',
			'smtp_port' =>  587,
			'smtp_user' => 'theNewTayuman@gmail.com',
			'smtp_pass' => 'ymtqysxbxeanfrnn',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from('theNewTayuman@gmail.com', 'The New Tayuman');
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
		$send = $this->email->send();

		
	}
    ///////////////////////////////////////////////////////////////////////////////////////////////////////

	

}


