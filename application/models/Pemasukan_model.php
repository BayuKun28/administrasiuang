<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemasukan_model extends CI_Model
{
    public function getjenisselect2($jen)
    {
        $this->db->select('*');
        $this->db->limit(10);
        $this->db->from('jenis');
        $this->db->like('nama_jenis', $jen);
        return $this->db->get()->result_array();
    }
    public function getjenis()
    {
        $this->db->select('*');
        $this->db->from('jenis');
        return $this->db->get()->result_array();
    }
    public function getkategoriselect2($kat)
    {
        $this->db->select('*');
        $this->db->limit(10);
        $this->db->from('kategori');
        $this->db->like('nama_kategori', $kat);
        return $this->db->get()->result_array();
    }
    public function getkategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        return $this->db->get()->result_array();
    }
    public function getpemasukan($xtanggalawal, $xtanggalakhir, $xtextfilterjenis)
    {
        $query = "SELECT t.id,j.nama_jenis,t.catatan,t.tanggal,k.nama_kategori,t.kategori as idkategori,t.jumlah FROM transaksi t 
        JOIN kategori k on k.id = t.kategori
        JOIN jenis j on j.id = t.jenis
        WHERE  t.tanggal BETWEEN '$xtanggalawal' AND '$xtanggalakhir'
        $xtextfilterjenis
        ORDER BY t.tanggal DESC
        ";
        return $this->db->query($query)->result_array();
    }
    public function getpemasukandetail($id)
    {
        $query = "SELECT t.id,t.catatan,t.tanggal,k.nama_kategori,t.jumlah FROM transaksi t 
        JOIN kategori k on k.id = t.kategori
        JOIN jenis j on j.id = t.jenis
        WHERE t.jenis = 1 AND t.id = $id
        ORDER BY t.tanggal DESC
        ";
        return $this->db->query($query)->result_array();
    }

    public function ubah($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('transaksi', $data);
        return true;
    }
}
