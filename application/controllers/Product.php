<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function index()  
    {  
        $this->load->view("vendor/vendoritem");  
    }  

	public function addprod1() 
	{
		$this->load->view("vendor/addprod");  

		
	}
	
public function addprod2() 
	{
		   
			$data = array(
			'product_name'   => $this->input->post('product_name'),
			'product_description'   => $this->input->post('product_description'),
			'product_price'     => $this->input->post('product_name'),
		    );
			$this->load->model('vendor_model');
			$this->vendor_model->addproduct($data);
		    redirect("Product/viewprod");

		
	}


public function viewprod() 
	{
         //load the database  
         $this->load->database();  
         //load the model  
         $this->load->model('vendor_model');  
         //load the method of model  
         $data['h']=$this->vendor_model->select();  
         //return the data in view  
         $this->load->view('vendor/itemview', $data);  

	}

	// public function updateprod() 
	// {
		 
    //      $this->load->database();  
    //      $this->load->model('vendor_model');  
    //      $data['i']=$this->vendor_model->select();   
    //      $this->load->view('vendor/editprod', $data);  

	// }

   
}


