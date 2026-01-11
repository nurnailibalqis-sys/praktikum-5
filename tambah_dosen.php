<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "sidebar.php"; ?>

<h2>TAMBAH DOSEN</h2>

<form method="post">
    <label>NIP</label>
    <input type="text" name="nip" required>

    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>Bidang Studi</label>
    <input type="text" name="bidang" required>

    <button type="submit" name="simpan" class="btn add">Simpan</button>
</form>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($koneksi,
        "INSERT INTO dosen VALUES (
            '$_POST[nip]',
            '$_POST[nama]',
            '$_POST[bidang]'
        )"
    );
    header("Location: dosen.php");
}
?>
</body>
</html>
