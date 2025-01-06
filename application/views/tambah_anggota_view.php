<h2 style="text-align: center; color: #ff69b4;">Tambah Anggota</h2>
<form action="<?php echo site_url('library/simpan_anggota'); ?>" method="post" style="width: 80%; margin: auto;">
    <input type="hidden" name="id_anggota" value="<?php echo $next_id; ?>">

    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" class="form-control" id="alamat" name="alamat" required>
    </div>
    <div class="form-group">
        <label for="no_telp">No Telepon:</label>
        <input type="text" class="form-control" id="no_telp" name="no_telp" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo site_url('library/anggota'); ?>" class="btn btn-secondary">Batal</a>
</form>
