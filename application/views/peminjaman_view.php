<h2 style="text-align: center; color: #ff69b4;">Daftar Peminjaman</h2>
<table class="table table-bordered" style="background-color: #f0f8ff; width: 80%; margin: auto;">
    <thead class="thead-light" style="background-color: #ff69b4; color: white;">
        <tr>
            <th>Nama Anggota</th>
            <th>Nama Komik</th>
            <th>Jumlah Peminjaman</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Status Pengembalian</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($peminjaman as $p): ?>
        <tr>
            <td><?php echo isset($p['nama_anggota']) ? $p['nama_anggota'] : 'N/A'; ?></td>
            <td><?php echo isset($p['nama_komik']) ? $p['nama_komik'] : 'N/A'; ?></td>
            <td><?php echo isset($p['jumlah']) ? $p['jumlah'] : 'N/A'; ?></td>
            <td><?php echo isset($p['tanggal_peminjaman']) ? $p['tanggal_peminjaman'] : 'N/A'; ?></td>
            <td><?php echo isset($p['tanggal_pengembalian']) ? $p['tanggal_pengembalian'] : 'N/A'; ?></td>
            <td><?php echo isset($p['status_pengembalian']) ? $p['status_pengembalian'] : 'N/A'; ?></td>
            <td>
                <a href="<?php echo site_url('library/edit_peminjaman/'.$p['id_pinjaman']); ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo site_url('library/hapus_peminjaman/'.$p['id_pinjaman']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus peminjaman ini?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div style="text-align: center; margin-top: 20px;">
    <a href="<?php echo site_url('library/tambah_peminjaman'); ?>" class="btn btn-primary">Tambah Peminjaman</a>
</div>
