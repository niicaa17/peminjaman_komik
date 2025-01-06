<h2 style="text-align: center; color: #ff69b4;">Tambah Peminjaman</h2>
<?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>
<form action="<?php echo site_url('library/simpan_peminjaman'); ?>" method="post" style="width: 80%; margin: auto;">
    <div class="form-group">
        <label for="id_anggota">Anggota:</label>
        <select class="form-control" id="id_anggota" name="id_anggota" required>
            <option value="">Pilih Anggota</option>
            <?php foreach ($anggota as $a): ?>
                <option value="<?php echo $a['id_anggota']; ?>"><?php echo $a['nama']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="id_komik">Komik:</label>
        <select class="form-control" id="id_komik" name="id_komik" required>
            <option value="">Pilih Komik</option>
            <?php foreach ($komik as $k): ?>
                <option value="<?php echo $k['id_komik']; ?>"><?php echo $k['judul']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="jumlah">Jumlah:</label>
        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
    </div>
    <div class="form-group">
        <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
        <input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman" required>
    </div>
    <div class="form-group">
        <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
        <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo site_url('library/peminjaman'); ?>" class="btn btn-secondary">Batal</a>
</form>

<script>
function fetchAnggotaId() {
    const namaAnggota = document.getElementById('nama_anggota').value;
    if (namaAnggota) {
        fetch(`<?php echo site_url('library/getAnggotaId'); ?>?nama=${namaAnggota}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('id_anggota').value = data.id_anggota || '';
            });
    }
}

function fetchKomikId() {
    const namaKomik = document.getElementById('nama_komik').value;
    if (namaKomik) {
        fetch(`<?php echo site_url('library/getKomikId'); ?>?nama=${namaKomik}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('id_komik').value = data.id_komik || '';
            });
    }
}
</script>










