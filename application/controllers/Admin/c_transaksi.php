<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_transaksi');
    }
    public function index()
    {
        $this->admin_login->cek_halaman();
        $data = array(
            'pesanan_masuk' => $this->m_transaksi->pesanan_masuk(),
            'konfirmasi' => $this->m_transaksi->konfirmasi_pesanan(),
            'diproses' => $this->m_transaksi->diproses(),
            'dikirim' => $this->m_transaksi->dikirim(),
            'selesai' => $this->m_transaksi->selesai()
        );
        $this->admin_login->cek_halaman();
        $this->load->view('Admin/head');
        $this->load->view('Admin/nav');
        $this->load->view('Admin/vtransaksi', $data);
        $this->load->view('Admin/footer');
    }
    public function detail_pemesanan($id_transaksi)
    {
        $data = array(
            'pemesanan' => $this->m_transaksi->detail_pemesanan($id_transaksi)
        );
        $this->load->view('Admin/head');
        $this->load->view('Admin/nav');
        $this->load->view('Admin/vdetail_pemesanan', $data);
        $this->load->view('Admin/footer');
    }
    public function konfirmasi_pesanan($id_transaksi)
    {
        $data = array(
            'status_order' => '2'
        );
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi', $data);
        $this->session->set_flashdata('pesan', 'Pesanan Berhasil Dikonfirmasi!!!');
        redirect('admin/c_transaksi', 'refresh');
    }
    public function kirim($id_transaksi)
    {
        $data = array(
            'status_order' => '3'
        );
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi', $data);
        $this->session->set_flashdata('pesan', 'Pesanan Akan Dikirim!!!');
        redirect('admin/c_transaksi', 'refresh');
    }
    public function selesai($id_transaksi)
    {
        $data = array(
            'status_order' => '4'
        );
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->update('transaksi', $data);
        $this->session->set_flashdata('pesan', 'Pesanan Telah Selesai!!!');
        redirect('admin/c_transaksi', 'refresh');
    }
}
