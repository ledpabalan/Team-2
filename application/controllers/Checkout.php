<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Checkout extends CI_Controller {
 
	function __construct(){
		parent::__construct();
        $this-> load -> model ('user_model');
		$this->load->helper('url');
		$this->load->model('ProductModel');
	}

    public function index(){
        $this-> load -> model ('user_model');
        $this-> load -> model ('ProductModel');

		$user = $this -> user_model ->getUsers($_SESSION['user_id']);
        
        // $product['product_name'] = $this->input->post('product_name');
		// $product['product_description'] = $this->input->post('product_description');
		// $product['product_price'] = $this->input->post('product_price');

		$output['user'] = $user[0];

		//$data['product'] = $this->ProductModel-> GetProduct($product_id);
		$this->load->view('Checkout/check.php', $output);
	}

	public function checkoutproduct(){
		$this-> load -> model ('ProductModel');

		$user = $this -> user_model ->UpdateProduct($_SESSION['product_id']);


		$data = array();
		$data = $this->input->post();
		if(isset($data) && $data != null) {											
			$this -> load -> model('ProductModel');
			redirect('/checkout');
		}
}
}