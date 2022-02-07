<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    private $table = "users";

    public function __construct()
    {
        parent::__construct();
    }


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

        $this->db->update($this->table, $data);                     
        return;                                                              

    }

    /////////////////////////////////////////////////////////////////////////////////////////////////
    
    public function updateUserStatus($user_id, $user_acc_status){
        $this->db->where('user_id', $user_id);
        
        $data ['user_acc_status'] = $user_acc_status;

        $this->db->update($this->table, $data);
        redirect('/users/logout');    
        return;

    }
    /////////////////////////////////////////////////////////////////////////////////////////////////

 
}

