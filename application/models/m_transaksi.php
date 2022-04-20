<?php
class m_transaksi extends CI_Model
{
    public function pesanan_masuk()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('status_pembayaran=0');
        return $this->db->get()->result();
    }
    public function konfirmasi_pesanan()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('status_pembayaran=1 AND status_order=0');
        return $this->db->get()->result();
    }
    public function diproses()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('status_order=2');
        return $this->db->get()->result();
    }
    public function dikirim()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('status_order=3');
        return $this->db->get()->result();
    }
    public function selesai()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('status_order=4');
        return $this->db->get()->result();
    }
    public function detail_pemesanan($id_transaksi)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('detail_transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi', 'left');
        $this->db->join('produk', 'detail_transaksi.id_produk = produk.id_produk', 'left');
        $this->db->where('transaksi.id_transaksi', $id_transaksi);
        $data['detail'] = $this->db->get()->result();

        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('desa', 'transaksi.id_desa = desa.id_desa', 'left');
        $this->db->join('kecamatan', 'desa.kode = kecamatan.id_kecamatan', 'left');
        $this->db->where('id_transaksi', $id_transaksi);
        $data['transaksi'] = $this->db->get()->row();
        return $data;
    }
}
