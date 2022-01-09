<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    private $table = "users";

    public function __construct()
    {
        parent::__construct();
    }

    private $email_code;

    public function createUser($data){
        if(!$this -> checkUsernameIfExists($data['user_username'])){
            $data['user_password'] = md5($data['user_password']); //hashing password using m5 algo
            // $data['user_pwdRepeat'] = md5($data['user_password']); //hashing password using m5 algo
             $data['user_acc_status'] = "Active";
             
            
            $this -> db -> insert($this -> table, $data);

            $id = $this->db->insert_id();

            if (isset($id) && $id != null)
            
                return $id;
            
        }
            
        return false;
    }
////////////////////////////////////////////////////////////////////////////////////////////////

    public function checkUsernameIfExists($user_username){
        if(isset($user_username) && $user_username != null){
            $this->db->where('user_username', $user_username);
        }

        $query = $this -> db -> get($this -> table); 
        $return = $query -> result_array();

        //print_r($return);

        if(count($return) > 0 )
            return true;
           

        return false;
        
    }
/////////////////////////////////////////////////////////////////////////////////////////////////

    public function login($user_username, $user_password) {
        $this->db->where( 'user_username', $user_username);
        $this->db->where( 'user_password', md5($user_password));
        
        $query = $this->db->get ($this->table);
        $return = $query->result_array();
        if(count($return) > 0 && $return[0]['user_acc_status'] == 'Active')
            return $return;
        
        return false;
    }

 ////////////////////////////////////////////////////////////////////////////////////////////////

    public function getUsers($user_id = null, $user_acc_status = null){
        if(isset($user_id) && $user_id != null){
            $this->db->where('user_id', $user_id);
        }

        if (isset($user_acc_status) && $user_acc_status != null){
            $this -> db -> where ('user_acc_status', $user_acc_status);
        }

        $query = $this -> db -> get($this -> table); 
        return $query -> result_array();
    }

/////////////////////////////////////////////////////////////////////////////////////////////////

    public function updateUser($data){
        $this->db->where('user_id', $data['user_id']);

        unset($data['user_id']);
        //unset($data['user_pwdRepeat']);

        $data['user_password'] = md5($data['user_password']); //md5
        $data['user_pwdRepeat'] = md5($data['user_pwdRepeat']);
    

        $this->db->update($this->table, $data);                     
        return;                                                              

    }

    /////////////////////////////////////////////////////////////////////////////////////////////////
    
    public function updateUserStatus($user_id, $user_acc_status){
        $this->db->where('user_id', $user_id);
        
        $data ['user_acc_status'] = $user_acc_status;

        $this->db->update($this->table, $data);    
        return;

    }
    /////////////////////////////////////////////////////////////////////////////////////////////////

    public function send_validation_email(){

        $this -> load -> library('email');
        $email = $this -> session -> data('email');
        $email_code = $this -> email_code;

        $this -> email -> set_mailtype('html');
        $this -> email -> from($this -> config -> item('bot_email'), 'The New Tayuman');
        $this -> email -> to('johnedward1436@gmail.com'); // email ko muna to test it out so kung gusto nyo itry palitan nyo muna ng inyo tong bandang to hehez
        $this -> email -> subject('Please Activate your Account at The New Tayuman');

        $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        </head><body>';
        $message .= '<p> Dear'. $this -> session -> data('user_name') . ', </p>';
        $message .= '<p> Thanks for registering on The New Tayuman! Please <strong><a href="' . base_url() .'/users/sent' . $email . '/'.
        $email_code. '">CLICK HERE! </a></strong> to activate your account. After you activated your account, you will now able to log in into The New Tayuman and Start using our website!</p>';
        $message .= '<p> Thank you! </p>';
        $message .= '<p> The Team of The New Tayuman </p>';
        $message .= '</body> </html>';

        $this->email->message($message);
        $this->email->send();
    }
}

