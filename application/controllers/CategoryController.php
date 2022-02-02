<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class CategoryController extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('CategoryModel');
	}
 
	public function TopFood(){
		$data['product'] = $this->CategoryModel->GetAllProduct_a("Top Food", "Active");
		$this->load->view('users/category/category.php', $data);
	}

	public function Classics(){
		$data['product'] = $this->CategoryModel->GetAllProduct_a("Classics", "Active");
		$this->load->view('users/category/category.php', $data);
	}

	public function BudgetMeal(){
		$data['product'] = $this->CategoryModel->GetAllProduct_a("Budget Meal", "Active");
		$this->load->view('users/category/category.php', $data);
	}

	public function Refreshers(){
		$data['product'] = $this->CategoryModel->GetAllProduct_a("Refreshers", "Active");
		$this->load->view('users/category/category.php', $data);
	}

	public function SweetandDesserts(){
		$data['product'] = $this->CategoryModel->GetAllProduct_a("Sweet & Dessert", "Active");
		$this->load->view('users/category/category.php', $data);
	}

	//////////////////
	public function TopFooda(){
		$data['product'] = $this->CategoryModel->GetAllProduct_a("Top Food", "Active");
		$this->load->view('users/category/categoryseller.php', $data);
	}

	public function Classicsa(){
		$data['product'] = $this->CategoryModel->GetAllProduct_a("Classics", "Active");
		$this->load->view('users/category/categoryseller.php', $data);
	}

	public function BudgetMeala(){
		$data['product'] = $this->CategoryModel->GetAllProduct_a("Budget Meal", "Active");
		$this->load->view('users/category/categoryseller.php', $data);
	}

	public function Refreshersa(){
		$data['product'] = $this->CategoryModel->GetAllProduct_a("Refreshers", "Active");
		$this->load->view('users/category/categoryseller.php', $data);
	}

	public function SweetandDessertsa(){
		$data['product'] = $this->CategoryModel->GetAllProduct_a("Sweet & Dessert", "Active");
		$this->load->view('users/category/categoryseller.php', $data);
	}
 
}
 
 
?>