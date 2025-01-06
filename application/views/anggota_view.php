<h2 style="text-align: center; color: #ff69b4;">Daftar Anggota</h2>
<table class="table table-bordered" style="background-color: #f0f8ff; width: 80%; margin: auto;">
    <thead class="thead-light" style="background-color: #ff69b4; color: white;">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($anggota as $a): ?>
        <tr>
            <td><?php echo isset($a['nama']) ? $a['nama'] : 'N/A'; ?></td>
            <td><?php echo isset($a['alamat']) ? $a['alamat'] : 'N/A'; ?></td>
            <td><?php echo isset($a['no_telp']) ? $a['no_telp'] : 'N/A'; ?></td>
            <td>
                <a href="<?php echo site_url('library/edit_anggota/'.$a['id_anggota']); ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo site_url('library/hapus_anggota/'.$a['id_anggota']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus anggota ini?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div style="text-align: center; margin-top: 20px;">
    <a href="<?php echo site_url('library/tambah_anggota'); ?>" class="btn btn-primary">Tambah Anggota</a>
</div>
