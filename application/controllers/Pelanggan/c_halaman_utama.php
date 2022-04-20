<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_halaman_utama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_halaman_utama');
    }
    public function index()
    {
        $data = array(
            // 'produk' => $this->m_halaman_utama->select(),
            // 'kategori' => $this->m_halaman_utama->kategori()
            'pagar' => $this->m_halaman_utama->pagar()
        );
        $this->load->view('Pelanggan/head');
        $this->load->view('Pelanggan/header');
        $this->load->view('Pelanggan/vhalaman_utama', $data);
        $this->load->view('Pelanggan/footer');
    }
    public function detail_produk($id_produk)
    {
        $data = array(
            'detail' => $this->m_halaman_utama->detail_produk($id_produk)
        );
        $this->load->view('Pelanggan/head');
        $this->load->view('Pelanggan/header');
        $this->load->view('Pelanggan/vdetail_produk', $data);
        $this->load->view('Pelanggan/footer');
    }
    public function add()
    {
        $this->pelanggan_login->cek_halaman();
        $data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'qty' => $this->input->post('qty'),
            'picture' => $this->input->post('picture'),
            'stok' => $this->input->post('stok')
        );
        $this->cart->insert($data);
        redirect('Pelanggan/c_shopgrid');
    }
}
