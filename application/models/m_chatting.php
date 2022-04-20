<?php
class m_chatting extends CI_Model
{
    //pelanggan
    public function select()
    {
        $id = $this->session->userdata('id_pelanggan');
        $this->db->select('*');
        $this->db->from('chatting');
        $this->db->join('pelanggan', 'pelanggan.id_pelanggan = chatting.id_pelanggan', 'left');
        $this->db->where('chatting.id_pelanggan', $id);
        return $this->db->get()->result();
    }
    //admin
    public function chat()
    {
        $this->db->select('*');
        $this->db->from('chatting');
        $this->db->join('pelanggan', 'chatting.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->group_by('chatting.id_pelanggan');
        return $this->db->get()->result();
    }
    public function list_chat($id_pelanggan)
    {
        $this->db->select('*');
        $this->db->from('chatting');
        $this->db->join('pelanggan', 'chatting.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->where('chatting.id_pelanggan', $id_pelanggan);
        return $this->db->get()->result();
    }
}
