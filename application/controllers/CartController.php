<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class CartController extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ProductModel');
		$this->load->model('CartModel');
	}
 
	public function index(){
		$UID = $_SESSION['user_id'];
		$data['product'] = $this->CartModel->GetAllProduct_aa("Active", $UID);
		$this->load->view('users/buyerside/cartsec', $data);
	}
 
	public function addnew(){
		$this->load->view('ProductViews/ProductAdd.php');
	}
 
	public function insert(){
		$product['product_name'] = $this->input->post('product_name');
		$product['product_description'] = $this->input->post('product_description');
		$product['product_price'] = $this->input->post('product_price');
		$product['product_category'] = $this->input->post('product_category');
		$product['product_sellerid'] = $this->input->post('product_sellerid');

		$UID = $_SESSION['user_id'];
		$product['product_buyerid']= $_SESSION['user_id'];
		$product['product_quantity'] = $this->input->post('product_quantity');
		$query = $this->CartModel->InsertProduct($product);

        redirect("CartControllerSeller/index");
		
 
	}
 
	public function edit($product_id){
		$data['product'] = $this->ProductModel-> GetProduct($product_id);
		$UID = $_SESSION['user_id'];
		//$data['product'] = $this->CartModel-> GetProduct($product_id);
		$this->load->view('cart/ProductEdit', $data);
	}
 
	public function update($product_id){
		$product['product_name'] = $this->input->post('product_name');
		$product['product_description'] = $this->input->post('product_description');
		$product['product_price'] = $this->input->post('product_price');
		$product['product_category'] = $this->input->post('product_category');
 
		$query = $this->CartModel->UpdateProduct($product, $product_id);
		//$query = $this->ProductModel->CartProduct($product, $product_id);
        redirect("ProductControllerSeller/index");
		// if($query){
		// 	header('location:'.base_url().$this->index());
		// }
	}
	public function delete($product_id){
		$query = $this->ProductModel->DeleteProduct($product_id);
		//$query = $this->CartModel->DeleteProduct($product_id);
		redirect("ProductControllerSeller/index");
		// if($query){
		// 	header('location:'.base_url().$this->index());
		// }
	}
}
 
 
?>