<?php

defined('BASEPATH') or exit('No direct script access allowed');

class c_chatting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_chatting');
    }

    // List all your items
    public function chat($id_pelanggan)
    {
        $this->form_validation->set_rules('msg', 'Pesan', 'required', array(
            '%s Harus Diiisi'
        ));
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'list_chat' => $this->m_chatting->list_chat($id_pelanggan)
            );
            $this->load->view('Admin/head');
            $this->load->view('Admin/nav');
            $this->load->view('Admin/vchatting', $data);
            $this->load->view('Admin/footer');
        } else {
            $data = array(
                'admin_send' => $this->input->post('msg'),
                'pelanggan_send' => '0',
                'id_pelanggan' => $id_pelanggan,
                'id_admin' => '1'
            );
            $this->db->insert('chatting', $data);
            redirect('admin/c_chatting/chat/' . $id_pelanggan, 'refresh');
        }
    }
}

/* End of file c_chatting1.php */
