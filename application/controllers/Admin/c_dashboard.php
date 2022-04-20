<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard');
        $this->load->model('m_chatting');
    }
    public function index()
    {
        $this->admin_login->cek_halaman();
        $data = array(
            'transaksi' => $this->m_dashboard->transaksi(),
            'kategori' => $this->m_dashboard->kategori(),
            'chat' => $this->m_chatting->chat()
        );
        $this->admin_login->cek_halaman();
        $this->load->view('Admin/head');
        $this->load->view('Admin/nav');
        $this->load->view('Admin/vdashboard', $data);
        $this->load->view('Admin/footer');
    }
}
