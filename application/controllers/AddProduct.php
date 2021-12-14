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
			'product_price'     => $this->input->post('product_name'),
		);
         
		$this->db->insert('product',$data);  
		redirect("AddProduct/index");
		
    }
}

