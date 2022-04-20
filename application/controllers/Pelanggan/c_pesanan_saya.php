<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_pesanan_saya extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pesanan_pelanggan');
    }
    public function index()
    {
        $this->pelanggan_login->cek_halaman();
        $data = array(
            'pesanan' => $this->m_pesanan_pelanggan->status_pemesanan()
        );
        $this->load->view('Pelanggan/head');
        $this->load->view('Pelanggan/header');
        $this->load->view('Pelanggan/vpesanan_saya', $data);
        $this->load->view('Pelanggan/footer');
    }
    public function bayar()
    {
        $config['upload_path']          = './asset/pembayaran/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 3000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('bayar')) {
            $data = array(
                'pesanan' => $this->m_pesanan_pelanggan->status_pemesanan()
            );
            $this->load->view('Pelanggan/head');
            $this->load->view('Pelanggan/header');
            $this->load->view('Pelanggan/vpesanan_saya', $data);
            $this->load->view('Pelanggan/footer');
        } else {
            $upload_data = $this->upload->data();
            $data = array(
                'id_transaksi' => $this->input->post('id_transaksi'),
                'status_pembayaran' => '1',
                'status_order' => '0',
                'bukti_bayar' => $upload_data['file_name']
            );
            $this->db->where('id_transaksi', $data['id_transaksi']);
            $this->db->update('transaksi', $data);
            $this->session->set_flashdata('pesan', 'Bukti Pembayaran Berhasil Ditambahkan!!! Silahkan Menunggu Konfirmasi');
            redirect('Pelanggan/c_pesanan_saya');
        }
    }
}
