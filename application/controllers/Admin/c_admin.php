<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }
    public function index()
    {
        $this->admin_login->cek_halaman();
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s harus Diisi!!!'));
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s harus Diisi!!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s harus Diisi!!!'));
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'admin' => $this->m_admin->select()
            );
            $this->load->view('Admin/head');
            $this->load->view('Admin/nav');
            $this->load->view('Admin/vadmin', $data);
            $this->load->view('Admin/footer');
        } else {
            $data = array(
                'nama_admin' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $this->m_admin->insert($data);
            $this->session->set_flashdata('pesan', 'Data Admin Berhasil Disimpan!!!');
            redirect('Admin/c_admin');
        }
    }
    public function data_edit($id_admin)
    {
        $data = array(
            'data' => $this->m_admin->data_edit($id_admin)
        );
        $this->load->view('Admin/head');
        $this->load->view('Admin/nav');
        $this->load->view('Admin/vedit_admin', $data);
        $this->load->view('Admin/footer');
    }
    public function edit_admin($id_admin)
    {
        $data = array(
            'nama_admin' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', $data);
        $this->session->set_flashdata('pesan', 'Data Admin Berhasil Diperbaharui!!!');
        redirect('admin/c_admin');
    }
    public function hapus($id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        $this->db->delete('admin');
        $this->session->set_flashdata('pesan', 'Data Admin Berhasil Dihapus!!!');
        redirect('admin/c_admin');
    }
}
