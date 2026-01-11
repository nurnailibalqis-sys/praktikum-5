<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "sidebar.php"; ?>

<h2>DATA DOSEN</h2>
<a href="tambah_dosen.php" class="btn add">+ Tambah Dosen</a>
<br><br>

<table>
<tr>
    <th>NIP</th>
    <th>Nama</th>
    <th>Bidang Studi</th>
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($koneksi, "SELECT * FROM dosen");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $d['nip']; ?></td>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['bidangstudi']; ?></td>
    <td>
        <a href="edit_dosen.php?nip=<?= $d['nip']; ?>" class="btn edit">Edit</a>
        <a href="hapus_dosen.php?nip=<?= $d['nip']; ?>" class="btn delete"
           onclick="return confirm('Yakin hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>
</body>
</html>
