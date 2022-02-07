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

    }

	public function select()  
	{  
	   //data retrieve sa query  
	   $query = $this->db->get('product');  
	   return $query;  
	}  
   
    public function Getitem($itemid = null) {
        if(isset($itemid) && $itemid != null) {
           $this->db->where('product_id',$itemid);
        }
       $query = $this->db->get($this->table);
       return $query->result_array();
    }

    public function updateitem($item = null){
        $this->db->where('product_id',$item['product_id']);
        unset($item['product_id']);
        $this->db->update($this->table,$item);
        echo $this->db->last_query();
       // exit;
    }





}