<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    private $table = "user";

    public function __construct()
    {
        parent::__construct();
    }

    public function createUser($data){
        $data['status'] = "Active";
        $data['dataCreated'] = time();

        $this -> db -> insert("users", $data);

        echo $this->db->last_query();

        return;
    }


    public function getUsers($id = null){
        if(isset($id) && $id != null){
            $this->db->where('id', $id);
        }

        $query = $this -> db -> get($this -> table); 

        return $query -> result_array();
    }


}
