<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class ProductControllerSeller extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ProductModel');
	}
 
	public function index(){
		$UID = $_SESSION['user_id'];
		$data['product'] = $this->ProductModel->GetAllProduct_aa("Active", $UID);
		$this->load->view('users/sellerside/productsec.php', $data);
	}
 
	public function addnew(){
		$this->load->view('ProductViews/ProductAdd.php');
	}
 
	public function insert(){
		
		$product['product_name'] = $this->input->post('product_name');
		$product['product_description'] = $this->input->post('product_description');
		$product['product_price'] = $this->input->post('product_price');
		$product['product_sellerid']= $_SESSION['user_id'];
 
		$query = $this->ProductModel->InsertProduct($product);
        redirect("ProductControllerSeller/index");
		
 
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
        redirect("ProductControllerSeller/index");
		// if($query){
		// 	header('location:'.base_url().$this->index());
		// }
	}
 
	public function delete($product_id){
		$query = $this->ProductModel->DeleteProduct($product_id);
		redirect("ProductControllerSeller/index");
		// if($query){
		// 	header('location:'.base_url().$this->index());
		// }
	}
}
 
 
?>