<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>DATA DOSEN</h2>
<table>
<tr>
    <th>NIP</th>
    <th>Nama</th>
    <th>Bidang Studi</th>
</tr>

<?php
$data = mysqli_query($koneksi, "SELECT * FROM dosen");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $d['nip']; ?></td>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['bidangstudi']; ?></td>
</tr>
<?php } ?>

</table>
</body>
</html>
