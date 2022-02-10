<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Master Kategori';
        $data['title2'] = 'Kategori';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Kategori_model', 'kategori');

        $data['kategori'] = $this->kategori->getkategori();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kategori/kategori', $data);
        $this->load->view('templates/footer', $data);
    }
    public function editkategori()
    {
        $id = $this->input->post('idedit');
        $data = array(
            'nama_kategori' => $this->input->post('kategoriedit')
        );
        $this->load->model('Kategori_model', 'kategori');
        $this->kategori->ubah($data, $id);
        $this->session->set_flashdata('message', 'Berhasil');
        redirect('kategori');
    }
    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user1 = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $ins = [
            'nama_kategori' => $this->input->post('nama_kategori', true)
        ];
        $this->db->insert('kategori', $ins);
        $this->session->set_flashdata('message', 'Berhasil');
        redirect('kategori');
    }
    public function deletekategori($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kategori');
        $this->session->set_flashdata('message', 'Berhasil Dihapus');
        redirect('kategori');
    }
}
