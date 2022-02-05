<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PendingModel extends CI_Model {

	private $table = "emailvrfy";

	public function __construct(){
		parent::__construct();
	}

	public function createUser($data){
			unset($data['user_pwdRepeat']);
			$this->db->insert($this->table, $data);
			$last_id = $this->db->insert_id();
			return $last_id;
	}

    public function getUser($id = null, $keywords = null){
		if(isset($id) && $id != null){
			$this->db->where('user_id', $id);
		}
		if(isset($keywords) && $keywords != null){
			$seperated_keywords = explode(" ",$keywords);
			$this->db->where_in('user_firstName', $seperated_keywords);
			$this->db->or_where_in('user_lastName', $seperated_keywords);
			$this->db->or_like('user_firstName', $keywords);
			$this->db->or_like('user_lastName', $keywords);
			$this->db->or_like('user_id', $keywords);
		}
		$query = $this->db->get($this->table);
		return $query->result_array();

	}

    public function deleteUser($id, $code, $uid)
    {
		$this->db->where('user_id', $id);
		$this->db->where('code_generated', $code);
		$this->db->where('user_username', $uid);
		$this->db->delete($this->table);
	}

}