<?php
class m_pesanan_pelanggan extends CI_Model
{
    public function status_pemesanan()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('desa', 'transaksi.id_desa = desa.id_desa', 'left');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan = desa.kode', 'left');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        return $this->db->get()->result();
    }
}
