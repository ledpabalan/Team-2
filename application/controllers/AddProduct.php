<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class AddProduct extends CI_Controller {
	public function index()  
    {  
        $this->load->view("vendor/addprod");  
    }  
	
public function addprod() 
	{

			$data = array(
			'product_name'     => $this->input->post('product_name'),
			'product_description'     => $this->input->post('product_description'),
			'product_price'     => $this->input->post('product_price'),
		    );
			$this->load->model('vendor_model');
			$this->vendor_model->addproduct($data);
		    redirect("AddProduct/index");

		
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
		
		 //redirect('/Homepage');


	}

}


