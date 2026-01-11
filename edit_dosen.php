<?php
include "koneksi.php";
$nip = $_GET['nip'];
$data = mysqli_query($koneksi, "SELECT * FROM dosen WHERE nip='$nip'");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "sidebar.php"; ?>

<h2>EDIT DOSEN</h2>

<form method="post">
    <label>NIP</label>
    <input type="text" value="<?= $d['nip']; ?>" readonly>

    <label>Nama</label>
    <input type="text" name="nama" value="<?= $d['nama']; ?>" required>

    <label>Bidang Studi</label>
    <input type="text" name="bidang" value="<?= $d['bidangstudi']; ?>" required>

    <button type="submit" name="update" class="btn update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    mysqli_query($koneksi,
        "UPDATE dosen SET
            nama='$_POST[nama]',
            bidangstudi='$_POST[bidang]'
         WHERE nip='$nip'"
    );
    header("Location: dosen.php");
}
?>
</body>
</html>
