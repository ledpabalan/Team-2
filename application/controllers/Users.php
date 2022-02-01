<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');    #preload form_validation library
            $this->load->model('user_model');       #preload Registration_model for registration
            // $this->load->model('UpdateProfile_model');    
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
	public function customervalidation()
        {   
            #Form Validation for customer's first name (matches required length and no other characters are used aside from the alphabet)
            $this->form_validation->set_rules('user_firstname', 'First Name', 'required|trim|min_length[2]|max_length[15]|alpha', 
			array('less_than[2]'=> 'Name should be at least 2 letters')); #Error message when first name is less than 2
			
            #Form Validation for customer's last name (matches required length and no other characters are used aside from the alphabet)
            $this->form_validation->set_rules('user_lastname', 'Last Name', 'required|trim|min_length[2]|max_length[15]|alpha', 
			array('less_than[2]'=> 'Name should be at least 2 letters')); #Error message when first name is less than 2);
            
            #Form Validation for customer's email (entered email is unique)
            $this->form_validation->set_rules('user_email', 'E-mail Address', 'required|trim|valid_email|is_unique[users.user_email]',
                array('is_unique' => 'This %s already exists.')); #Error message when email already exists

         	#Form Validation for customer's username (matches required length, no special characters, is unique)
            $this->form_validation->set_rules('user_username', 'Username', 'required|trim|min_length[4]|max_length[15]|alpha_dash|is_unique[users.user_username]',
				array('is_unique', 'less_than[4]'=> 'This %s already exists.')); #Error message when username already exists 

            #Form Validation for customer's password
            $this->form_validation->set_rules('user_password', 'Password', 'required|min_length[8]|max_length[32]');

            #Form Validation for customer's password confirmation (matches first password)
            $this->form_validation->set_rules('user_pwdRepeat', 'Confirm Password', 'required|matches[password]|min_length[8]|max_length[32]');    

            if($this->form_validation->run())   #If no error,
            {
                $verification_key = random_string('numeric', 6);                #create random string for verification,
                $encrypted_password = md5($this->input->post('user_password'));      #create hash value for password,
                $this->createUser($verification_key, $encrypted_password);         #then proceed to addUser function.
            }
            else    #If there is error,
            {
				$data = 'signdown';
				$this -> load-> view('users/registration/signdown', $data);        #load registration page again with error messages.
            }

        }
        
		//////////////////////////////////////////////////////////////////////////////
		public function createUser($verification_key, $encrypted_password)
        {          
            // $data['navbar'] = 'registration';
            // $this->sitelayout->loadTemplate('pages/registration/verification', $data); 
            // $var = $this->input->post();

            if(isset($var) && $var != null)
            {
                #create $data variable for array containing keys(userName, displayName, etc.) with assigned values
                $userdata = array(
					'user_firstname' => $this->input->post('user_firstname'),
                    'user_lastname' => $this->input->post('user_lastname'),
                    'user_email' => $this->input->post('user_email'),
                    'user_username' => $this->input->post('user_username'),
                    'password' => $encrypted_password,
                    'user_acc_status'   => 'Pending',
                    'verification_Key' => $verification_key
                );
                
                #get a response from Registration_model if insert to database is succesful
                #pass $data array to model
                $response = $this->Registration_model->addNewUser($userdata);

                
            }
            //$data['navbar'] = 'registration';
            //$this->sitelayout->loadTemplate('pages/registration/registration', $data);
			$this->load->view('users/homepage_buyer');
		}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////
	// Form Validation
	public function vendorvalidation()
        {   

			$action = $this->input->post('action');

            #Form Validation for Shop's first name (matches required length and no other characters are used aside from the alphabet)
            $this->form_validation->set_rules('shop_name', 'Shop Name', 'required|trim|min_length[4]|max_length[15]|alpha');
           
            #Form Validation for shop's username (matches required length, no special characters, is unique)
            $this->form_validation->set_rules('shop_username', 'Username', 'required|trim|min_length[4]|max_length[15]|alpha_dash|is_unique[customer.customer_username]',
                array('is_unique'     => 'This %s already exists.')); #Error message when username already exists 

            #Form Validation for shop's email (entered email is unique)
            $this->form_validation->set_rules('shop_email', 'E-mail Address', 'required|trim|valid_email|is_unique[shop_email]',
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


