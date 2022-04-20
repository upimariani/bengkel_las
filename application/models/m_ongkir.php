<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_ongkir extends CI_Model
{

    public function select_kecamatan()
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        return $this->db->get()->result();
    }
    public function select_desa()
    {
        $this->db->select('*');
        $this->db->from('desa');
        $this->db->join('kecamatan', 'desa.kode = kecamatan.id_kecamatan', 'left');
        return $this->db->get()->result();
    }
}

/* End of file m_ongkir.php */
