<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_shopgrid extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_halaman_utama');
    }
    public function index()
    {
        $data = array(
            'produk' => $this->m_halaman_utama->select(),
            'kategori' => $this->m_halaman_utama->kategori()
        );
        $this->load->view('Pelanggan/head');
        $this->load->view('Pelanggan/header');
        $this->load->view('Pelanggan/vshopgrid', $data);
        $this->load->view('Pelanggan/footer');
    }
    public function shop_kategori($id_kategori)
    {
        $data = array(
            'produk' => $this->m_halaman_utama->select_kategori($id_kategori),
            'kategori' => $this->m_halaman_utama->kategori()
        );
        $this->load->view('Pelanggan/head');
        $this->load->view('Pelanggan/header');
        $this->load->view('Pelanggan/vshopgrid', $data);
        $this->load->view('Pelanggan/footer');
    }
}
