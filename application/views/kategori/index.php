<h2>Data Kategori</h2>

<a href="<?= site_url('Kategori/tambah'); ?>">Tambah</a>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Aksi</th>
</tr>

<?php $no=1; foreach($Kategori as $k): ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $k->nama_kategori; ?></td>
        <td>
            <a href="<?= site_url('Kategori/edit/',$k->id); ?>">Edit</a>
            <a href="<?= site_url('Kategori/hapus/',$k->id); ?>"
            onclick="return confirm('yakin')">Hapus</a>
        </td>
</tr>
<?php endforeach; ?>
</table>