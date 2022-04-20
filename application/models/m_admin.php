<?php
class m_admin extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('admin', $data);
    }
    public function select()
    {
        $this->db->select('*');
        $this->db->from('admin');
        return $this->db->get()->result();
    }
    public function data_edit($id_admin)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('id_admin', $id_admin);
        return $this->db->get()->row();
    }
}
