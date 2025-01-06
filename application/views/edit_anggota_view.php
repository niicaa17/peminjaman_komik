<h2 style="text-align: center; color: #ff69b4;">Edit Anggota</h2>
<form action="<?php echo site_url('library/update_anggota/'.$anggota['id_anggota']); ?>" method="post" style="width: 80%; margin: auto;">
    <div class="form-group">
        <label for="id_anggota">ID Anggota:</label>
        <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?php echo $anggota['id_anggota']; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $anggota['nama']; ?>" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $anggota['alamat']; ?>" required>
    </div>
    <div class="form-group">
        <label for="no_telp">No Telepon:</label>
        <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo $anggota['no_telp']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?php echo site_url('library/anggota'); ?>" class="btn btn-secondary">Batal</a>
</form>
