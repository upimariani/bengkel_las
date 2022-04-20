<?php


defined('BASEPATH') or exit('No direct script access allowed');

class c_ongkir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_ongkir');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'kecamatan' => $this->m_ongkir->select_kecamatan(),
            'desa' => $this->m_ongkir->select_desa()
        );
        $this->load->view('Admin/head');
        $this->load->view('Admin/nav');
        $this->load->view('Admin/vongkir', $data);
        $this->load->view('Admin/footer');
    }
    public function insert_kecamatan()
    {
        $data = array(
            'kode_kec' => $this->input->post('id_kab'),
            'nama_kecamatan' => $this->input->post('nama_kec')
        );
        $this->db->insert('kecamatan', $data);
        $this->session->set_flashdata('pesan', 'Data Kecamatan Berhasil Ditambahkan');
        redirect('admin/c_ongkir', 'refresh');
    }
    public function insert_desa()
    {
        $data = array(
            'kode' => $this->input->post('id_kec'),
            'nama_desa' => $this->input->post('nama_desa'),
            'ongkir' => $this->input->post('ongkir')
        );
        $this->db->insert('desa', $data);
        $this->session->set_flashdata('pesan', 'Data Desa Berhasil Ditambahkan');
        redirect('admin/c_ongkir', 'refresh');
    }
    public function edit_kecamatan($id_kecamatan)
    {
        $data = array(
            'kode_kec' => $this->input->post('id_kab'),
            'nama_kecamatan' => $this->input->post('nama_kec')
        );
        $this->db->where('id_kecamatan', $id_kecamatan);
        $this->db->update('kecamatan', $data);
        $this->session->set_flashdata('pesan', 'Data Kecamatan Berhasil Diperbaharui');
        redirect('admin/c_ongkir', 'refresh');
    }
    public function hapus_kecamatan($id_kecamatan)
    {
        $this->db->where('id_kecamatan', $id_kecamatan);
        $this->db->delete('kecamatan');
        $this->session->set_flashdata('pesan', 'Data Kecamatan Berhasil Dihapus');
        redirect('admin/c_ongkir', 'refresh');
    }
    public function edit_desa($id_desa)
    {
        $data = array(
            'kode' => $this->input->post('id_kec'),
            'nama_desa' => $this->input->post('id_kec'),
            'ongkir' => $this->input->post('id_kec')
        );
        $this->db->where('id_desa', $id_desa);
        $this->db->update('desa', $data);
        $this->session->set_flashdata('pesan', 'Data Desa Berhasil Diperbarui');
        redirect('admin/c_ongkir', 'refresh');
    }
    public function hapus_desa($id_desa)
    {
        $this->db->where('id_desa', $id_desa);
        $this->db->delete('desa');
        $this->session->set_flashdata('pesan', 'Data Desa Berhasil Dihapus');
        redirect('admin/c_ongkir', 'refresh');
    }
}

/* End of file c_ongkir.php */
