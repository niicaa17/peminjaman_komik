<h2 style="text-align: center; color: #ff69b4;">Tambah Komik</h2>
<form action="<?php echo site_url('library/simpan_komik'); ?>" method="post" style="width: 80%; margin: auto;">
    <input type="hidden" name="id_komik" value="<?php echo $next_id; ?>">

    <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" class="form-control" id="judul" name="judul" required>
    </div>
    <div class="form-group">
        <label for="pengarang">Pengarang:</label>
        <input type="text" class="form-control" id="pengarang" name="pengarang" required>
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit:</label>
        <input type="text" class="form-control" id="penerbit" name="penerbit" required>
    </div>
    <div class="form-group">
        <label for="thn_terbit">Tahun Terbit:</label>
        <input type="text" class="form-control" id="thn_terbit" name="thn_terbit" required>
    </div>
    <div class="form-group">
        <label for="jenis_komik">Jenis Komik:</label>
        <input type="text" class="form-control" id="jenis_komik" name="jenis_komik" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo site_url('library/komik'); ?>" class="btn btn-secondary">Batal</a>
</form>
