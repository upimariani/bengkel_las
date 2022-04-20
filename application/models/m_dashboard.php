<?php
class m_dashboard extends CI_Model
{
    public function transaksi()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        return $this->db->get()->result();
    }
    public function kategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        return $this->db->get()->result();
    }
    // public function chatting()
    // {
    // }
}
