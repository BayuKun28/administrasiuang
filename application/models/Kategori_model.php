<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    public function getkategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        return $this->db->get()->result_array();
    }
    public function ubah($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('kategori', $data);
        return true;
    }
}
