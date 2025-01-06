<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); // Memuat helper URL
        $this->load->library('session'); // Memuat library session
    }

    public function index() {
        redirect('library/anggota'); // Redirect ke halaman anggota
    }

    public function anggota() {
        $this->load->model('Anggota_model');
        $data['anggota'] = $this->Anggota_model->get_all();
        
        $this->load->view('navbar_view');
        $this->load->view('anggota_view', $data);
    }

    public function komik() {
        $this->load->model('komik_model');
        $data['komik'] = $this->komik_model->get_all();
        
        $this->load->view('navbar_view');
        $this->load->view('komik_view', $data);
    }

    public function peminjaman() {
        $this->load->model('Peminjaman_model');
        $data['peminjaman'] = $this->Peminjaman_model->get_all();
        
        $this->load->view('navbar_view');
        $this->load->view('peminjaman_view', $data);
    }

    public function tambah_anggota() {
        $this->load->model('Anggota_model');
        $next_id = $this->Anggota_model->get_next_id();
        $data['next_id'] = $next_id;

        $this->load->view('navbar_view');
        $this->load->view('tambah_anggota_view', $data);
    }

    public function simpan_anggota() {
        $this->load->model('Anggota_model');

        $data = array(
            'id_anggota' => $this->input->post('id_anggota'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp')
        );

        try {
            $this->Anggota_model->insert($data);
            redirect('library/anggota');
        } catch (Exception $e) {
            log_message('error', 'Error saving member: ' . $e->getMessage());
        }
    }

    public function tambah_komik() {
        $this->load->model('Komik_model');
        $next_id = $this->Komik_model->get_next_id();
        $data['next_id'] = $next_id;

        $this->load->view('navbar_view');
        $this->load->view('tambah_komik_view', $data);
    }

    public function simpan_komik() {
        $this->load->model('Komik_model');

        $data = array(
            'id_komik' => $this->input->post('id_komik'),
            'judul' => $this->input->post('judul'),
            'pengarang' => $this->input->post('pengarang'),
            'penerbit' => $this->input->post('penerbit'),
            'thn_terbit' => $this->input->post('thn_terbit'),
            'jenis_komik' => $this->input->post('jenis_komik')
        );

        try {
            $this->Komik_model->insert($data);
            redirect('library/komik');
        } catch (Exception $e) {
            log_message('error', 'Error saving comic: ' . $e->getMessage());
        }
    }

    public function tambah_peminjaman() {
        $this->load->model('Anggota_model');
        $this->load->model('Komik_model');

        $data['anggota'] = $this->Anggota_model->get_all();
        $data['komik'] = $this->Komik_model->get_all();

        $this->load->view('navbar_view');
        $this->load->view('tambah_peminjaman_view', $data);
    }

    public function simpan_peminjaman() {
        $this->load->model('Peminjaman_model');
        $this->load->model('Anggota_model');
        $this->load->model('Komik_model');

        $id_anggota = $this->input->post('id_anggota');
        $id_komik = $this->input->post('id_komik');

        // Cek apakah ID anggota dan ID komik ditemukan
        if (!$id_anggota || !$id_komik) {
            $this->session->set_flashdata('error', 'Anggota atau Komik tidak ditemukan.');
            redirect('library/tambah_peminjaman');
            return;
        }

        $data = array(
            'id_anggota' => $id_anggota,
            'id_komik' => $id_komik,
            'jumlah' => $this->input->post('jumlah'),
            'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
            'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian')
        );

        try {
            $this->Peminjaman_model->insert($data);
            redirect('library/peminjaman');
        } catch (Exception $e) {
            log_message('error', 'Error saving loan: ' . $e->getMessage());
        }
    }

    public function hapus_anggota($id) {
        $this->load->model('Anggota_model');
        $this->Anggota_model->delete($id);
        redirect('library/anggota');
    }

    public function edit_anggota($id) {
        $this->load->model('Anggota_model');
        $data['anggota'] = $this->Anggota_model->get_by_id($id);

        $this->load->view('navbar_view');
        $this->load->view('edit_anggota_view', $data);
    }

    public function update_anggota($id) {
        $this->load->model('Anggota_model');

        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp')
        );

        $this->Anggota_model->update($id, $data);
        redirect('library/anggota');
    }

    public function hapus_komik($id) {
        $this->load->model('Komik_model');
        $this->Komik_model->delete($id);
        redirect('library/komik');
    }

    public function hapus_peminjaman($id) {
        $this->load->model('Peminjaman_model');
        $this->Peminjaman_model->delete($id);
        redirect('library/peminjaman');
    }

    public function edit_komik($id) {
        $this->load->model('Komik_model');
        $data['komik'] = $this->Komik_model->get_by_id($id);

        $this->load->view('navbar_view');
        $this->load->view('edit_komik_view', $data);
    }

    public function edit_peminjaman($id) {
        $this->load->model('Peminjaman_model');
        $data['peminjaman'] = $this->Peminjaman_model->get_by_id($id);

        $this->load->view('navbar_view');
        $this->load->view('edit_peminjaman_view', $data);
    }

    public function update_komik($id) {
        $this->load->model('Komik_model');

        $data = array(
            'judul' => $this->input->post('judul'),
            'pengarang' => $this->input->post('pengarang'),
            'penerbit' => $this->input->post('penerbit'),
            'Thn_terbit' => $this->input->post('thn_terbit'),
            'jenis_komik' => $this->input->post('jenis_komik')
        );

        $this->Komik_model->update($id, $data);
        redirect('library/komik');
    }

    public function update_peminjaman($id) {
        $this->load->model('Peminjaman_model');

        $data = array(
            'id_anggota' => $this->input->post('id_anggota'),
            'id_komik' => $this->input->post('id_komik'),
            'jumlah' => $this->input->post('jumlah'),
            'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
            'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
            'status_pengembalian' => $this->input->post('status_pengembalian')
        );

        $this->Peminjaman_model->update($id, $data);
        redirect('library/peminjaman');
    }

    public function getAnggotaId() {
        $nama = $this->input->get('nama');
        $id_anggota = $this->Anggota_model->get_id_by_name($nama);
        echo json_encode(['id_anggota' => $id_anggota]);
    }

    public function getKomikId() {
        $nama = $this->input->get('nama');
        $id_komik = $this->Komik_model->get_id_by_name($nama);
        echo json_encode(['id_komik' => $id_komik]);
    }
}
