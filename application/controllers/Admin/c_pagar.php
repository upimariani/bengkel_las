<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_pagar extends CI_Controller
{

    public function index()
    {
        $this->load->view('Admin/head');
        $this->load->view('Admin/nav');
        $this->load->view('Admin/vpagar');
        $this->load->view('Admin/footer');
    }
}

/* End of file c_pagar.php */
