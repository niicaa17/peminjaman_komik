<h2 style="text-align: center; color: #ff69b4;">Daftar Komik</h2>
<table class="table table-bordered" style="background-color: #f0f8ff; width: 80%; margin: auto;">
    <thead class="thead-light" style="background-color: #ff69b4; color: white;">
        <tr>
            <!-- <th>ID Komik</th> -->
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Jenis Komik</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($komik as $k): ?>
        <tr>
            <!-- <td><?php echo isset($k['id_komik']) ? $k['id_komik'] : 'N/A'; ?></td> -->
            <td><?php echo isset($k['judul']) ? $k['judul'] : 'N/A'; ?></td>
            <td><?php echo isset($k['pengarang']) ? $k['pengarang'] : 'N/A'; ?></td>
            <td><?php echo isset($k['penerbit']) ? $k['penerbit'] : 'N/A'; ?></td>
            <td><?php echo isset($k['Thn_terbit']) ? $k['Thn_terbit'] : 'N/A'; ?></td>
            <td><?php echo isset($k['jenis_komik']) ? $k['jenis_komik'] : 'N/A'; ?></td>
            <td>
                <a href="<?php echo site_url('library/edit_komik/'.$k['id_komik']); ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo site_url('library/hapus_komik/'.$k['id_komik']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus komik ini?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div style="text-align: center; margin-top: 20px;">
    <a href="<?php echo site_url('library/tambah_komik'); ?>" class="btn btn-primary">Tambah Komik</a>
</div>
