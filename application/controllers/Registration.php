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
			if (!is_bool($id)) 
			{
				$data['user_id'] = $id;
				$this->load->model('user_model');
			    $return = $this->user_model->login($data['user_username'], $data['user_password']);
				$this->session->set_userdata($data);
				if($return[0]['user_type'] == 'Buyer')
					{
					$this->session->set_userdata($return[0]);
					redirect('/Homepage/buyerside'); //User Buyer LoggedIn Interface
					}
				else{
					$this->session->set_userdata($return[0]);
					redirect('/Homepage/sellerside');
					}
			} 
			else
			{ 
				redirect('/users/login');
			}		
		}
		
		if($user_type == "Buyer"){
			$this->load->view('users/Registration/signdown');
		}
		else{
			$this->load->view('users/Registration/sellersignup');
		}
    }
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////
	
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
            $this->form_validation->set_rules('user_pwdRepeat', 'Confirm Password', 'required|matches[password]|min_length[8]|max_length[32]', array('matches[user_password]' => "Password does not match"));    

            if($this->form_validation->run())   #If no error,
            {
                // $verifcode = random_string('numeric', 6);    
				// $this->set_userdata('verifcode', 'verifcode' );           
                // $this->useremailver();
				$this-> load -> view('Homepage/buyerside');
            }
            else    #If there is error,
            {
				$this -> load-> view('users/registration/signdown');       
            }
			
        }
        
		
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

			// if ($this->form_validation->run())
			// {
			// 	$validkey = random_string('numeric', 6);
			
			// }
            $this->load->view('users/registration/sellersignup');
        }
	/////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function useremailver()
	{
		$code = $this->session->userdata('verifcode');
		$name = $this->session->userdata('user_name');
		$subject = "Verify your email";
		$message = "
		Dear ".$name."!
		
			Welcome and thank you for joining The New Tayuman! This code below is to verify your account! 
			If this wasn't you, please ignore this email!
		
		".$code."

		";
		$to = $this->input->post('user_email');

		// $to = 'lxedpabalan@gmail.com';

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


