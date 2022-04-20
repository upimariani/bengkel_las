<?php
class m_produk extends CI_Model
{
    //produk
    public function insert($data)
    {
        $this->db->insert('produk', $data);
    }
    public function select()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
        return $this->db->get()->result();
    }
    public function data_edit($id_produk)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('id_produk', $id_produk);
        return $this->db->get()->row();
    }
    public function hapus($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');
    }
    //kategori
    public function kategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        return $this->db->get()->result();
    }
    public function edit($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->get()->row();
    }

    //diskon
    public function diskon()
    {
        $diskon = '0';
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('diskon!=', $diskon);
        return $this->db->get()->result();
    }
}
