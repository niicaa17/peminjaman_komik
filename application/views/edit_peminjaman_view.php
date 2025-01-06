<h2 style="text-align: center; color: #ff69b4;">Edit Peminjaman</h2>
<form action="<?php echo site_url('library/update_peminjaman/'.$peminjaman['id_pinjaman']); ?>" method="post" style="width: 80%; margin: auto;">
    <div class="form-group">
        <label for="id_pinjaman">ID Pinjaman:</label>
        <input type="text" class="form-control" id="id_pinjaman" name="id_pinjaman" value="<?php echo $peminjaman['id_pinjaman']; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="id_anggota">ID Anggota:</label>
        <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?php echo $peminjaman['id_anggota']; ?>" required>
    </div>
    <div class="form-group">
        <label for="id_komik">ID Komik:</label>
        <input type="text" class="form-control" id="id_komik" name="id_komik" value="<?php echo $peminjaman['id_komik']; ?>" required>
    </div>
    <div class="form-group">
        <label for="jumlah">Jumlah:</label>
        <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?php echo $peminjaman['jumlah']; ?>" required>
    </div>
    <div class="form-group">
        <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
        <input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman" value="<?php echo $peminjaman['tanggal_peminjaman']; ?>" required>
    </div>
    <div class="form-group">
        <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
        <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" value="<?php echo $peminjaman['tanggal_pengembalian']; ?>">
    </div>
    <div class="form-group">
        <label for="status_pengembalian">Status Pengembalian:</label>
        <select class="form-control" id="status_pengembalian" name="status_pengembalian">
            <option value="belum" <?php echo $peminjaman['status_pengembalian'] == 'belum' ? 'selected' : ''; ?>>Belum</option>
            <option value="sudah" <?php echo $peminjaman['status_pengembalian'] == 'sudah' ? 'selected' : ''; ?>>Sudah</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?php echo site_url('library/peminjaman'); ?>" class="btn btn-secondary">Batal</a>
</form>
