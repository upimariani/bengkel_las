<?php

defined('BASEPATH') or exit('No direct script access allowed');

class pelanggan_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_login_pelanggan');
    }
    public function login($username, $password)
    {
        $cek = $this->ci->m_login_pelanggan->login_pelanggan($username, $password);
        if ($cek) {
            $id_pelanggan = $cek->id_pelanggan;
            $nama_pelanggan = $cek->nama_pelanggan;
            $no_hp = $cek->no_telepon;

            //session
            $this->ci->session->set_userdata('id_pelanggan', $id_pelanggan);
            $this->ci->session->set_userdata('nama_pelanggan', $nama_pelanggan);
            $this->ci->session->set_userdata('no_hp', $no_hp);

            redirect('pelanggan/c_halaman_utama');
        } else {
            //jika salah
            $this->ci->session->set_flashdata('error', 'Username Atau Password Salah');
            redirect('pelanggan/c_login');
        }
    }
    public function cek_halaman()
    {
        if ($this->ci->session->userdata('id_pelanggan') == '') {
            $this->ci->session->set_flashdata('error', 'Anda Belum login');
            redirect('pelanggan/c_login');
        }
    }
    public function logout()
    {
        $this->ci->session->unset_userdata('id_pelanggan');
        $this->ci->session->unset_userdata('nama_pelanggan');
        $this->ci->session->unset_userdata('no_hp');
        $this->ci->session->set_flashdata('pesan', 'Anda Berhasil Logout!!');
        redirect('pelanggan/c_login');
    }
}

/* End of file user_login.php */
