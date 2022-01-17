<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class ProductControllerBuyer extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ProductModel');
	}
 
	public function index(){
		$data['product'] = $this->ProductModel->GetAllProduct_a("Active");
		$this->load->view('users/buyerside/productsec.php', $data);
	}
 
	public function addnew(){
		$this->load->view('ProductViews/ProductAdd.php');
	}
 
	public function insert(){
		
		$product['product_name'] = $this->input->post('product_name');
		$product['product_description'] = $this->input->post('product_description');
		$product['product_price'] = $this->input->post('product_price');
 
		$query = $this->ProductModel->InsertProduct($product);
        redirect("ProductController/index");
		
 
	}
 
	public function edit($product_id){
		$data['product'] = $this->ProductModel-> GetProduct($product_id);
		$this->load->view('ProductViews/ProductEdit', $data);
	}
 
	public function update($product_id){
		$product['product_name'] = $this->input->post('product_name');
		$product['product_description'] = $this->input->post('product_description');
		$product['product_price'] = $this->input->post('product_price');
 
		$query = $this->ProductModel->UpdateProduct($product, $product_id);
        redirect("ProductController/index");
		// if($query){
		// 	header('location:'.base_url().$this->index());
		// }
	}
 
	public function delete($product_id){
		$query = $this->ProductModel->DeleteProduct($product_id);
		redirect("ProductController/index");
		// if($query){
		// 	header('location:'.base_url().$this->index());
		// }
	}
}
 
 
?>