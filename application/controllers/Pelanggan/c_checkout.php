<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_checkout extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_checkout');
    }

    public function index()
    {
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s Harus Diisi!!'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Pelanggan/vchekout');
        } else {
            $data = array(
                'id_transaksi' => $this->input->post('id_transaksi'),
                'id_pelanggan' => $this->session->userdata('id_pelanggan'),
                'atas_nama' => $this->input->post('atas_nama'),
                'id_desa' => $this->input->post('desa'),
                'alamat' => $this->input->post('alamat'),
                'total_bayar' => $this->input->post('total_bayar'),
                'ongkir' => $this->input->post('ongkir'),
                'status_pembayaran' => '0',
                'status_order' => '0',
            );
            $this->db->insert('transaksi', $data);

            $i = 1;
            foreach ($this->cart->contents() as $key => $value) {
                $stok = 0;
                $jml = $this->input->post('qty' . $i++);
                $stok = $value['stok'] - $jml;
                $data = array(
                    'stok' => $stok
                );
                $this->db->where('id_produk', $value['id']);
                $this->db->update('produk', $data);
            }

            $i = 1;
            foreach ($this->cart->contents() as $key => $value) {
                $data = array(
                    'id_transaksi' => $this->input->post('id_transaksi'),
                    'id_produk' => $value['id'],
                    'qty' => $this->input->post('qty' . $i++)
                );
                $this->db->insert('detail_transaksi', $data);
            }
            $this->cart->destroy();
            redirect('pelanggan/c_pesanan_saya');
        }
    }
    public function get_kec()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->m_checkout->kec($id);
        echo json_encode($data);
    }
    public function get_desa()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->m_checkout->desa($id);
        echo json_encode($data);
    }
}
