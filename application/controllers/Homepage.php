<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {


    public function __construct()
    {
        parent::__construct();

        $id = $this->session->userdata('user_id');
        if(!isset($id) && $id == null) {
            redirect('/login');
        }
    }

    public function index()
	{
        redirect('/logout');
    // $this->load->view('homepage_index');
	}


	public function buyerside()
	{
      $this->load->view('users/buyerside/homepage');
	}

    public function sellerside()
	{
      $this->load->view('users/sellerside/homepage');
	}


}