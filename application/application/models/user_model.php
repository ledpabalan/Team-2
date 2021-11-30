<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    private $table = "users";

    public function __construct()
    {
        parent::__construct();
    }

    public function createUser($data){

        $this -> checkUsernameIfExists($data['user_username']);
        $data['user_password'] = md5($data['user_password']);
       // $data['user_acc.status'] = "Active";
       // $data['user_acc.createddate'] = time();

        $this -> db -> insert("users", $data);

        echo $this->db->last_query();

        return;
    }

    public function checkUsernameIfExists($user_username){
        if(isset($user_username) && $user_username != null){
            $this->db->where('user_username', $user_username);
        }

        $query = $this -> db -> get($this -> table); 

       // $this->db->select(*)
         //           ->from($this->table)
          //          ->where('username', $username);

        //$this->db->get();

        echo $this->db->last_query();
        exit;


        return $query -> result_array();
    }


    public function getUsers($id = null){
        if(isset($id) && $id != null){
            $this->db->where('id', $id);
        }

        $query = $this -> db -> get($this -> table); 

        return $query -> result_array();
    }


}
