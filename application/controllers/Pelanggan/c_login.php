<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_login extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Harus Diisi!!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Harus Diisi!!!'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Pelanggan/head');
            $this->load->view('Pelanggan/header');
            $this->load->view('Pelanggan/vlogin');
            $this->load->view('Pelanggan/footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->pelanggan_login->login($username, $password);
        }
    }
    public function logout()
    {
        $this->pelanggan_login->logout();
    }
    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Harus Diisi!!!'));
        $this->form_validation->set_rules('no_tlp', 'No Telepon', 'required|min_length[11]|max_length[13]|integer', array('required' => '%s Harus Diisi!!!'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s Harus Diisi!!!'));
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Harus Diisi!!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Harus Diisi!!!'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Pelanggan/head');
            $this->load->view('Pelanggan/header');
            $this->load->view('Pelanggan/vregister');
            $this->load->view('Pelanggan/footer');
        } else {
            $data = array(
                'nama_pelanggan' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_telepon' => $this->input->post('no_tlp'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $this->db->insert('pelanggan', $data);
            $this->session->set_flashdata('pesan', 'Anda Berhasil Registrasi!!! Silahkan Login!!!');
            redirect('pelanggan/c_login');
        }
    }
}
