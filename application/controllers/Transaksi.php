<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function pemasukan()
    {
        $data['title'] = 'Pemasukan';
        $data['title2'] = 'Pemasukan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->load->model('Pemasukan_model', 'pemasukan');
        // $data['pemasukan'] = $this->pemasukan->getPemasukan();
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
}
