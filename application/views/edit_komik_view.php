<h2 style="text-align: center; color: #ff69b4;">Edit Komik</h2>
<form action="<?php echo site_url('library/update_komik/'.$komik['id_komik']); ?>" method="post" style="width: 80%; margin: auto;">
    <div class="form-group">
        <label for="id_komik">ID Komik:</label>
        <input type="text" class="form-control" id="id_komik" name="id_komik" value="<?php echo $komik['id_komik']; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $komik['judul']; ?>" required>
    </div>
    <div class="form-group">
        <label for="pengarang">Pengarang:</label>
        <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?php echo $komik['pengarang']; ?>" required>
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit:</label>
        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $komik['penerbit']; ?>" required>
    </div>
    <div class="form-group">
        <label for="thn_terbit">Tahun Terbit:</label>
        <input type="text" class="form-control" id="thn_terbit" name="thn_terbit" value="<?php echo $komik['Thn_terbit']; ?>" required>
    </div>
    <div class="form-group">
        <label for="jenis_komik">Jenis Komik:</label>
        <input type="text" class="form-control" id="jenis_komik" name="jenis_komik" value="<?php echo $komik['jenis_komik']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?php echo site_url('library/komik'); ?>" class="btn btn-secondary">Batal</a>
</form>
