<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class CategoryController extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('CategoryModel');
	}
 
	public function TopFood(){
		$data['product'] = $this->CategoryModel->GetAllProduct_a("Top Food");
		$this->load->view('users/category/category.php', $data);
	}

	public function index(){
		$data['product'] = $this->CategoryModel->GetAllProduct_a("Top Food");
		$this->load->view('users/category/category.php', $data);
	}
 
}
 
 
?>