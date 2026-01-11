<?php 
include "koneksi.php";

$nrp = $_GET['nrp']; 
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nrp='$nrp'");
$isi  = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>EDIT DATA MAHASISWA</h2>

<form method="post">
    <label>NRP</label>
    <input type="text" value="<?= $isi['nrp']; ?>" readonly>

    <label>Nama</label>
    <input type="text" name="nama" value="<?= $isi['nama']; ?>" required>

    <label>Alamat</label>
    <input type="text" name="alamat" value="<?= $isi['alamat']; ?>" required>

    <button type="submit" name="update" class="btn update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $sql = mysqli_query($koneksi,
        "UPDATE mahasiswa 
         SET nama='$nama', alamat='$alamat' 
         WHERE nrp='$nrp'"
    );

    if($sql){
        echo "<script>
                alert('Data berhasil diupdate!');
                window.location='index.php';
              </script>";
    }
}
?>
</body>
</html>
