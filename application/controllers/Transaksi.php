<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function pemasukan()
    {
        $data['title'] = 'Transaksi';
        $data['title2'] = 'Transaksi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Pemasukan_model', 'pemasukan');

        $xtanggalawal = $this->input->post('tanggalawal');
        $xtanggalakhir = $this->input->post('tanggalakhir');

        if (!empty($xtanggalawal) && !empty($xtanggalakhir)) {
            $xtanggalawal = $this->input->post('tanggalawal');
            $xtanggalakhir = $this->input->post('tanggalakhir');
        } else {
            $xtanggalawal = date('Y/m/d');
            $xtanggalakhir = date('Y/m/d');
        }

        $xfilterjenis = $this->input->post('filterjenis');

        if (!empty($xfilterjenis)) {
            $xfilterjenis = $this->input->post('filterjenis');
            $xtextfilterjenis = "AND t.jenis = '$xfilterjenis'";
        } else {
            $xtextfilterjenis = '';
        }

        $data['pemasukan'] = $this->pemasukan->getPemasukan($xtanggalawal, $xtanggalakhir, $xtextfilterjenis);
        $data['kategori'] = $this->pemasukan->getkategori();
        $data['jenis'] = $this->pemasukan->getjenis();
        $data['tanggalawal'] = $xtanggalawal;
        $data['tanggalakhir'] = $xtanggalakhir;
        $data['filterjenis'] = $xfilterjenis;

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
        $this->load->model('Pengeluaran_model', 'pengeluaran');

        $xtanggalawal = $this->input->post('tanggalawal');
        $xtanggalakhir = $this->input->post('tanggalakhir');

        if (!empty($xtanggalawal) && !empty($xtanggalakhir)) {
            $xtanggalawal = $this->input->post('tanggalawal');
            $xtanggalakhir = $this->input->post('tanggalakhir');
        } else {
            $xtanggalawal = date('Y/m/d');
            $xtanggalakhir = date('Y/m/d');
        }

        $data['Pengeluaran'] = $this->pengeluaran->getPengeluaran($xtanggalawal, $xtanggalakhir);
        $data['kategori'] = $this->pengeluaran->getkategori();
        $data['tanggalawal'] = $xtanggalawal;
        $data['tanggalakhir'] = $xtanggalakhir;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('transaksi/pengeluaran', $data);
        $this->load->view('templates/footer', $data);
    }

    public function addpemasukan()
    {
        $data['title'] = 'Pemasukan / Pengeluaran';
        $data['title2'] = 'Tambah Transaksi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $user1 = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
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
            $this->session->set_flashdata('message', 'Berhasil');
            redirect('transaksi/addpemasukan');
        }
    }

    public function editpemasukan()
    {
        $id = $this->input->post('idedit');
        $data = array(
            'jumlah' => $this->input->post('jumlahedit'),
            'tanggal' => $this->input->post('tanggaledit'),
            'kategori' => $this->input->post('kategoriedit'),
            'catatan' => $this->input->post('catatanedit')
        );
        $this->load->model('Pemasukan_model', 'pemasukan');
        $this->pemasukan->ubah($data, $id);
        $this->session->set_flashdata('message', 'Berhasil');
        redirect('Transaksi/pemasukan');
    }
    public function deletepemasukan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('transaksi');
        $this->session->set_flashdata('message', 'Berhasil Dihapus');
        redirect('Transaksi/pemasukan');
    }
    public function deletepengeluaran($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('transaksi');
        $this->session->set_flashdata('message', 'Berhasil Dihapus');
        redirect('Transaksi/pengeluaran');
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
