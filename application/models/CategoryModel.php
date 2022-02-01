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

		public function GetAllProduct_a($product_category){
			$this->db->where('product_category', $product_category);
			$query = $this->db->get('product');
			return $query->result(); 
		}
 
		public function InsertProduct($product){
			return $this->db->insert('product', $product);
		}
 
		public function GetProduct($product_id){
			$query = $this->db->get_where('product',array('product_id'=>$product_id));
			return $query->row_array();
		}
 
		public function UpdateProduct($product, $product_id){
			$this->db->where('product_id', $product_id);
			return $this->db->update('product', $product);
		}
 
		public function DeleteProduct($product_id){
			$this->db->where('product_id', $product_id);
			$product['product_status'] = "Inactive";
			return $this->db->update('product', $product);
			// return $this->db->delete('product');
		}
 
	}
?>