<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class vendor_model extends CI_Model {

    private $table = "product";

    public function __construct()
    {
        parent::__construct();
    }

    public function addproduct($data){

            $this -> db -> insert($this -> table, $data);
            return true;

           // $id = $this->db->insert_id();
    }


}