<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_cart extends CI_Controller
{
    public function index()
    {
        $this->pelanggan_login->cek_halaman();
        $this->load->view('Pelanggan/head');
        $this->load->view('Pelanggan/header');
        $this->load->view('Pelanggan/vcart');
        $this->load->view('Pelanggan/footer');
    }
    //hapus data cart
    public function delete($rowid)
    {
        $this->cart->remove($rowid);
        redirect('pelanggan/c_cart');
    }

    //update data cart dengan menambah dan mengurangi jumlah barang
    public function update()
    {
        $i = 1;
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'rowid'  => $items['rowid'],
                'qty'    => $this->input->post($i . '[qty]')
            );
            $this->cart->update($data);
            $i++;
        }
        redirect('pelanggan/c_cart');
    }
}
