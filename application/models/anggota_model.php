<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all() {
        return $this->db->get('anggota')->result_array();
    }

    public function insert($data) {
        $this->db->insert('anggota', $data);
    }

    public function delete($id) {
        $this->db->delete('anggota', array('id_anggota' => $id));
    }

    public function get_by_id($id) {
        $this->db->where('id_anggota', $id);
        $query = $this->db->get('anggota');
        return $query->row_array(); // Mengembalikan hasil sebagai array
    }

    public function update($id, $data) {
        $this->db->where('id_anggota', $id);
        $this->db->update('anggota', $data);
    }

    public function get_next_id() {
        $this->db->select_max('id_anggota');
        $query = $this->db->get('anggota');
        $result = $query->row();
        return $result->id_anggota + 1; // Mengembalikan ID berikutnya
    }

    public function get_id_by_name($name) {
        $this->db->select('id_anggota');
        $this->db->from('anggota');
        $this->db->where('nama', $name);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row('id_anggota');
        }
        return null; // Kembalikan null jika tidak ditemukan
    }
}
