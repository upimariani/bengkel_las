<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_login_admin');
    }
    public function login($username, $password)
    {
        $cek = $this->ci->m_login_admin->login_user($username, $password);
        if ($cek) {
            $id_admin = $cek->id_admin;

            //session
            $this->ci->session->set_userdata('id_admin', $id_admin);

            redirect('Admin/c_dashboard');
        } else {
            //jika salah
            $this->ci->session->set_flashdata('error', 'Username Atau Password Salah');
            redirect('Admin/c_login');
        }
    }
    public function cek_halaman()
    {
        if ($this->ci->session->userdata('id_admin') == '') {
            $this->ci->session->set_flashdata('error', 'Anda Belum login');
            redirect('Admin/c_login');
        }
    }
    public function logout()
    {
        $this->ci->session->unset_userdata('id_admin');
        $this->ci->session->set_flashdata('pesan', 'Anda Berhasil Logout!!');
        redirect('Admin/c_login');
    }
}

/* End of file user_login.php */
