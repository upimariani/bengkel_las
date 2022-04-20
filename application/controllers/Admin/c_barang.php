<?php
defined('BASEPATH') or exit('No direct script access allowed');
class c_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_produk');
    }
    //barang
    public function index()
    {
        $this->admin_login->cek_halaman();
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s Harus Diisi!!!'));
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', array('required' => '%s Harus Diisi!!!'));
        $this->form_validation->set_rules('harga', 'Harga', 'required', array('required' => '%s Harus Diisi!!!'));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', array('required' => '%s Harus Diisi!!!'));
        $this->form_validation->set_rules('stok', 'Stok', 'required', array('required' => '%s Harus Diisi!!!'));
        $this->form_validation->set_rules('tipe', 'Tipe', 'required', array('required' => '%s Harus Diisi!!!'));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']          = './asset/foto-produk/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = '5000';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $data = array(
                    'error' => $this->upload->display_errors(),
                    'barang' => $this->m_produk->select(),
                    'kategori' => $this->m_produk->kategori()
                );
                $this->load->view('Admin/head');
                $this->load->view('Admin/nav');
                $this->load->view('Admin/vbarang', $data);
                $this->load->view('Admin/footer');
            } else {
                $upload_data =  $this->upload->data();
                $data = array(
                    'nama_produk' => $this->input->post('nama'),
                    'id_kategori' => $this->input->post('kategori'),
                    'harga_produk' => $this->input->post('harga'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'stok' => $this->input->post('stok'),
                    'tipe' => $this->input->post('tipe'),
                    'gambar' => $upload_data['file_name']
                );
                $this->m_produk->insert($data);
                $this->session->set_flashdata('pesan', 'Data Barang Berhasil di Simpan!!!');
                redirect('Admin/c_barang');
            }
        } else {
            $data = array(
                'barang' => $this->m_produk->select(),
                'kategori' => $this->m_produk->kategori()
            );
            $this->load->view('Admin/head');
            $this->load->view('Admin/nav');
            $this->load->view('Admin/vbarang', $data);
            $this->load->view('Admin/footer');
        }
    }
    public function edit_barang($id_produk)
    {
        $data = array(
            'data' => $this->m_produk->data_edit($id_produk),
            'kategori' => $this->m_produk->kategori()
        );
        $this->load->view('Admin/head');
        $this->load->view('Admin/nav');
        $this->load->view('Admin/vedit_barang', $data);
        $this->load->view('Admin/footer');
    }
    public function proses_edit($id_produk)
    {
        $this->form_validation->set_rules('nama', 'Nama Produk', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('stok', 'Stok Produk', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('tipe', 'Tipe Produk', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']          = './asset/foto-produk/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 5000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $data = array(
                    'barang' => $this->m_produk->select()
                );
                $this->load->view('Admin/head');
                $this->load->view('Admin/nav');
                $this->load->view('Admin/vbarang', $data);
                $this->load->view('Admin/footer');
            } else {
                $produk = $this->m_produk->select();
                if ($produk->gambar !== "") {
                    unlink('./asset/foto-produk/' . $produk->gambar);
                }
                $upload_data =  $this->upload->data();
                $data = array(
                    'id_produk' => $this->input->post('id_produk'),
                    'nama_produk' => $this->input->post('nama'),
                    'harga_produk' => $this->input->post('harga'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'stok' => $this->input->post('stok'),
                    'tipe' => $this->input->post('tipe'),
                    'gambar' => $upload_data['file_name']
                );
                $this->db->where('id_produk', $data['id_produk']);
                $this->db->update('produk', $data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diperbaharui !!!');
                redirect('Admin/c_barang');
            } //tanpa ganti gambar
            $data = array(
                'id_produk' => $this->input->post('id_produk'),
                'nama_produk' => $this->input->post('nama'),
                'harga_produk' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
                'stok' => $this->input->post('stok'),
                'tipe' => $this->input->post('tipe')
            );
            $this->db->where('id_produk', $data['id_produk']);
            $this->db->update('produk', $data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diperbaharui !!!');
            redirect('Admin/c_barang');
        }
        redirect('Admin/c_barang/edit_barang/' . $id_produk);
    }
    public function hapus($id_produk)
    {
        $data['hapus'] = $this->m_produk->hapus($id_produk);
        $this->session->set_flashdata('pesan', 'Data Produk Berhasil Dihapus!!!');
        redirect('Admin/c_barang');
    }

    //kategori
    public function kategori()
    {
        $this->form_validation->set_rules('kategori', 'Kategori', 'required', array('required' => '%s Harus Diisi!!!'));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'kategori' => $this->m_produk->kategori()
            );
            $this->load->view('Admin/head');
            $this->load->view('Admin/nav');
            $this->load->view('Admin/vkategori', $data);
            $this->load->view('Admin/footer');
        } else {
            $data = array(
                'nama_kategori' => $this->input->post('kategori')
            );
            $this->db->insert('kategori', $data);
            $this->session->set_flashdata('pesan', 'Data Kategori Produk Berhasil DItambahkan!!!');

            redirect('admin/c_barang/kategori', 'refresh');
        }
    }
    public function edit_kategori($id_kategori)
    {
        $data = array(
            'kategori' => $this->m_produk->edit($id_kategori)
        );
        $this->load->view('Admin/head');
        $this->load->view('Admin/nav');
        $this->load->view('Admin/vedit_kategori', $data);
        $this->load->view('Admin/footer');
    }
    public function proses_kategori($id_kategori)
    {
        $data = array(
            'nama_kategori' => $this->input->post('kategori')
        );
        $this->db->where('id_kategori', $id_kategori);
        $this->db->update('kategori', $data);
        $this->session->set_flashdata('pesan', 'Data Kategori Berhasil Diperbaharui!!!');
        redirect('admin/c_barang/kategori', 'refresh');
    }
    public function hapus_kategori($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('kategori');
        $this->session->set_flashdata('pesan', 'Data Kategori Berhasil Dihapus!!!');
        redirect('admin/c_barang/kategori', 'refresh');
    }


    //diskon
    public function diskon()
    {
        $this->admin_login->cek_halaman();
        $this->form_validation->set_rules('id_produk', 'Produk', 'required', array('required' => '%s Harus Diisi!!!'));
        $this->form_validation->set_rules('diskon', 'Diskon', 'required', array('required' => '%s Harus Diisi!!!'));


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'barang' => $this->m_produk->select(),
                'diskon' => $this->m_produk->diskon()
            );
            $this->load->view('Admin/head');
            $this->load->view('Admin/nav');
            $this->load->view('Admin/vdiskon', $data);
            $this->load->view('Admin/footer');
        } else {
            $data = array(
                'id_produk' => $this->input->post('id_produk'),
                'diskon' => $this->input->post('diskon')
            );
            $this->db->where('id_produk', $data['id_produk']);
            $this->db->update('produk', $data);
            $this->session->set_flashdata('pesan', 'Data Produk Berhasil Disimpan!!!');
            redirect('Admin/c_barang/diskon');
        }
    }
    public function hapus_diskon($id_produk)
    {
        $data = array(
            'diskon' => '0'
        );
        $this->db->where('id_produk', $id_produk);
        $this->db->update('produk', $data);
        $this->session->set_flashdata('pesan', 'Data Produk Berhasil Dihapus!!!');
        redirect('Admin/c_barang/diskon');
    }
}
