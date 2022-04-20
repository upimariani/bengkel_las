<?php
class m_halaman_utama extends CI_Model
{
    //menampilkan all
    public function select()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
        $this->db->where('tipe!=2');
        return $this->db->get()->result();
    }
    //menampilkan hanya pagar
    public function pagar()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('tipe=2');
        return $this->db->get()->result();
    }
    public function detail_produk($id_produk)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('id_produk', $id_produk);
        return $this->db->get()->row();
    }
    public function select_kategori($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
        $this->db->where('produk.id_kategori', $id_kategori);
        return $this->db->get()->result();
    }
    public function kategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        return $this->db->get()->result();
    }
}
