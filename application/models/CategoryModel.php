<?php
	class CategoryModel extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
 
		public function GetAllProduct(){
			$query = $this->db->get('product');
			return $query->result(); 
		}

		public function GetAllProduct_a($product_category, $product_status){
			$this->db->where('product_category', $product_category);
			$this->db->where('product_status', $product_status);
			$query = $this->db->get('product');
			return $query->result(); 
		}
 
 
	}
?>