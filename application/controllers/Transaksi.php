<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function pemasukan()
    {
        $data['title'] = 'Pemasukan';
        $data['title2'] = 'Pemasukan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pemasukan_model', 'pemasukan');
        $data['pemasukan'] = $this->pemasukan->getPemasukan();
        // $id = $this->input->post('');
        // $data['pemasukandetail'] = $this->pemasukan->getpemasukandetail($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('transaksi/pemasukan', $data);
        $this->load->view('templates/footer', $data);
    }
    public function pengeluaran()
    {
        $data['title'] = 'Pengeluaran';
        $data['title2'] = 'Pengeluaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->load->model('Pengeluaran_model', 'pengeluaran');
        // $data['pengeluaran'] = $this->pengeluaran->getPengeluaran();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('transaksi/pengeluaran', $data);
        $this->load->view('templates/footer', $data);
    }

    public function addpemasukan()
    {
        $data['title'] = 'Pemasukan';
        $data['title2'] = 'Tambah Pemasukan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user1 = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pemasukan_model', 'pemasukan');
        $data['pemasukan'] = $this->pemasukan->getpemasukan();

        $this->form_validation->set_rules('jenis', 'Jenis Transaksi', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori Transaksi', 'trim|required');
        $this->form_validation->set_rules('jumlah', 'Nominal', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
        $this->form_validation->set_rules('catatan', 'Catatan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('transaksi/addpemasukan', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $ins = [
                'id_user' => $user1['id'],
                'jenis' => $this->input->post('jenis', true),
                'jumlah' => $this->input->post('jumlah', true),
                'tanggal' => $this->input->post('tanggal', true),
                'catatan' => $this->input->post('catatan', true),
                'kategori' => $this->input->post('kategori', true)
            ];
            $this->db->insert('transaksi', $ins);
            $this->session->set_flashdata('message', '<div class="alert alert-success role="alert">Berhasil Tambah Data</div>');
            redirect('transaksi/addpemasukan');
        }
    }
    public function getjenis()
    {
        $jen = $this->input->get('jen');
        $this->load->model('Pemasukan_model', 'pemasukan');
        $query = $this->pemasukan->getjenisselect2($jen, 'nama_jenis');
        echo json_encode($query);
    }
    public function getkategori()
    {
        $kat = $this->input->get('kat');
        $this->load->model('Pemasukan_model', 'pemasukan');
        $query = $this->pemasukan->getkategoriselect2($kat, 'nama_kategori');
        echo json_encode($query);
    }
}
