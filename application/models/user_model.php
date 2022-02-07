<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    private $table = "users";
    

    public function __construct()
    {
        parent::__construct();
    }

    
    public function checkCreateUser($data){
		
		if($this->usernameExist($data['user_username'])){
        
			return "This username is already taken";
		}
		else if(strlen($data['user_username']) > 30){
        
			return "Long username. Atmost 30 characters";
		}
		else if(strlen($data['user_username']) < 6){
        
			return "Short username. Atleast 6 characters";
		}
		else if(preg_match('/\s/',$data['user_username'])){
        
			return "Spaces are not allowed";
		}
		else if($this->emailExist($data['user_email'])){
        
			return "This email is already in used";
		}
		else if($this->pwdMatch($data['user_password'], $data['user_pwdRepeat'])){
        
			return "Passwords do not match";
		}
		else{
			return false;
		}
    }
    public function usernameExist($user_username){
		if(isset($user_username) && $user_username != null){
			$this->db->where('user_username', $user_username);
		}

		$query = $this->db->get($this->table);
		$return = $query->result_array();

		if(count($return) != 0){
			return $return;
		}

		return false;
	}

	public function emailExist($user_email){
		if(isset($user_email) && $user_email != null){
			$this->db->where('user_email', $user_email);
		}

		$query = $this->db->get($this->table);
		$return = $query->result_array();

		if(count($return) != 0){
			return $return;
		}

		return false;
	}

    public function pwdMatch($user_password, $user_pwdRepeat){
		if($user_password !== $user_pwdRepeat){
			return true;
		}
		else{
			return false;
		}
	}

    public function createUser($data, $user_type){
        if(!$this -> checkUsernameIfExists($data['user_username'])){
            $data['user_password'] = md5($data['user_password']); //hashing password using m5 algo
            $data['user_pwdRepeat'] = md5($data['user_password']); //hashing password using m5 algo
             $data['user_acc_status'] = "Active";
             $data['user_type'] = $user_type;
             
            
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
        $this->db->where('user_id', $data['user_id']); # ETO NA ATA

        unset($data['user_id']);
        //unset($data['user_pwdRepeat']);
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

    // public function validateEmail($user_email){

    //     $query = $this -> db -> query ("SELECT * FROM users WHERE user_email='$user_email'");
    //     if($query -> num_rows() == 1)
    //     {
    //         return $query -> row();
    //     }
    //     else
    //     {
    //         return  false; 
    //     }
    // }

    // public function UpdatePasswordhash($data,$user_email){
    //     $this -> db -> where ('user_email' , $user_email);
    //     $this -> db -> update('users',$data);
    // }

    ////////////////////////////////////////////////////////////////////////////////////////////////////

    public function addPin($user_password){

        $pinnum['user_password']=$user_password;
       

        $this->db->insert($this->table, $pinnum);
        return $this->db->insert_id();
    }
}

