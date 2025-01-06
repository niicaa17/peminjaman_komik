<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komik_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all() {
        return $this->db->get('komik')->result_array(); // Mengambil semua data komik
    }

    public function insert($data) {
        $this->db->insert('komik', $data);
    }

    public function delete($id) {
        $this->db->delete('komik', array('id_komik' => $id));
    }

    public function get_by_id($id) {
        return $this->db->get_where('komik', array('id_komik' => $id))->row_array(); // Ambil data komik berdasarkan ID
    }

    public function update($id, $data) {
        $this->db->where('id_komik', $id);
        $this->db->update('komik', $data);
    }

    public function get_next_id() {
        $this->db->select_max('id_komik');
        $query = $this->db->get('komik');
        $result = $query->row();
        return $result->id_komik + 1; // Mengembalikan ID berikutnya
    }

    public function get_id_by_name($name) {
        $this->db->select('id_komik');
        $this->db->from('komik');
        $this->db->where('judul', $name);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row('id_komik');
        }
        return null; // Kembalikan null jika tidak ditemukan
    }
}
