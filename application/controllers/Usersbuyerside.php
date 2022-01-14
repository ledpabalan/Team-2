<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Usersbuyerside extends CI_Controller {
// HEADER THINGS FOTR BUYER SIDE // 

    public function homepage()
    {
     $this->load->view('users/buyerside/homepage');
    }

	public function featuresec()
	{
      $this->load->view('users/buyerside/featuresec');
	}

	public function shopsec()
	{
      $this->load->view('users/buyerside/shopsec');
	}

	public function productsec()
	{
      $this->load->view('users/buyerside/productsec');
	}

	public function catsec()
	{
      $this->load->view('users/buyerside/catsec');
	}

	public function devsec()
	{
      $this->load->view('users/devsec');
	}
	/* si carlo naglagay dito, para to sa delete profile, di ko alam saan lalagay hehe*/
	public function userdelprofile()
	{
      $this->load->view('users/userdelprofile');
	}
	/* si carlo naglagay dito, para to maview yung shop sa shop section, di ko alam saan lalagay hehe*/
	public function usershop()
	{
      $this->load->view('users/usershop');
	}
	/* si carlo naglagay dito hanggang trpurchases, para to maview yung sa purches, di ko alam saan lalagay hehe*/
	public function allpurchases()
	{
      $this->load->view('users/allpurchases');
	}
	public function recpurchases()
	{
      $this->load->view('users/recpurchases');
	}
	public function compurchases()
	{
      $this->load->view('users/compurchases');
	}
	public function trpurchases()
	{
      $this->load->view('users/trpurchases');
	}



	/////////////////////////////////////////////////////////////////////////////////////////////////////////
}
