<?php 
include "koneksi.php";
$nim = $_GET['nim'];
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'");
$isi = mysqli_fetch_array($data);
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
    <label>NIM</label>
    <input type="text" name="nim" value="<?= $isi['nim']; ?>" readonly>
    <label>Nama</label>
    <input type="text" name="nama" value="<?= $isi['nama']; ?>" required>
    <label>Prodi</label>
    <input type="text" name="prodi" value="<?= $isi['prodi']; ?>" required>
    <button type="submit" name="update" class="btn update">Update</button>
</form>
<?php
if(isset($_POST['update'])){
    $nama  = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $sql = mysqli_query($koneksi,
        "UPDATE mahasiswa SET nama='$nama', prodi='$prodi' WHERE nim='$nim'"
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
