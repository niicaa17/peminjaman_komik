<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database(); // Memuat database
    }

    public function get_all() {
        $this->db->select('peminjaman.id_pinjaman, peminjaman.jumlah, anggota.nama AS nama_anggota, komik.judul AS nama_komik, peminjaman.tanggal_peminjaman, peminjaman.tanggal_pengembalian, peminjaman.status_pengembalian');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'peminjaman.id_anggota = anggota.id_anggota');
        $this->db->join('komik', 'peminjaman.id_komik = komik.id_komik');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($data) {
        $this->db->insert('peminjaman', $data);
    }

    public function delete($id) {
        $this->db->delete('peminjaman', array('id_pinjaman' => $id));
    }

    public function get_by_id($id) {
        return $this->db->get_where('peminjaman', array('id_pinjaman' => $id))->row_array(); // Ambil data peminjaman berdasarkan ID
    }

    public function update($id, $data) {
        $this->db->where('id_pinjaman', $id);
        $this->db->update('peminjaman', $data);
    }
}
