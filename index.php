<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "sidebar.php"; ?>

<h2>DATA MAHASISWA</h2>

<table>
    <tr>
        <th>NRP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

<?php
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $d['nrp']; ?></td>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['alamat']; ?></td>
    <td>
        <a href="edit.php?nrp=<?= $d['nrp']; ?>" class="btn edit">Edit</a>
        <a href="hapus.php?nrp=<?= $d['nrp']; ?>" class="btn delete"
           onclick="return confirm('Yakin hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>
</body>
</html>
