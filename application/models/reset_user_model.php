<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reset_user_model extends CI_Model {

	private $table = "reset_user";

	public function __construct(){
		parent::__construct();
	}

	public function createUser($data){
			$this->db->insert($this->table, $data);
			$last_id = $this->db->insert_id();
			return $last_id;
	}

	public function deleteUser($id = null, $uid = null){
		if(isset($id) && $id != null){
			$this->db->where('id', $id); 
             
		}
		if(isset($uid) && $uid != null){
			$this->db->where('user_uid', $uid);
		}
		$this->db->delete($this->table);
	}


	public function getUser($id = null, $uid = null){
		if(isset($id) && $id != null){
			$this->db->where('id', $id);
		}
		if(isset($uid) && $uid != null){
			$this->db->where('user_uid', $uid);
		}
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

    

	
	
}