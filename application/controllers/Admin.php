<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function adminlogin()
    {
        if($this->session->userdata('username') == 'admin')
        {
            redirect('/Homepage/sellerside');
        }

        $this-> load -> view('Admin/AdminLogin');
    }
}

