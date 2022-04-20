<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_chatting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_chatting');
    }
    public function index()
    {
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->pelanggan_login->cek_halaman();
            $data = array(
                'chat' => $this->m_chatting->select()
            );
            $this->load->view('Pelanggan/head');
            $this->load->view('Pelanggan/header');
            $this->load->view('Pelanggan/vchatting', $data);
            $this->load->view('Pelanggan/footer');
        } else {
            $data = array(
                'id_pelanggan' => $this->session->userdata('id_pelanggan'),
                'id_admin' => '1',
                'pelanggan_send' => $this->input->post('pesan'),
                'admin_send' => '0'
            );
            $this->db->insert('chatting', $data);
            $this->session->set_flashdata('pesan', 'Pesan Terkirim');
            redirect('pelanggan/c_chatting', 'refresh');
        }
    }
}
