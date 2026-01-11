<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>FORM TAMBAH DATA</h2>
<form method="post">
    <label>NIM</label>
    <input type="text" name="nim" required>
    <label>Nama</label>
    <input type="text" name="nama" required>
    <label>Program Studi</label>
    <input type="text" name="prodi" required>
    <button type="submit" name="simpan" class="btn add">Simpan</button>
</form>
<?php
if(isset($_POST['simpan'])){
    $nim   = $_POST['nim'];
    $nama  = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $cek = mysqli_query($koneksi, "SELECT nim FROM mahasiswa WHERE nim='$nim'");
    if(mysqli_num_rows($cek) > 0){
        echo "<script>alert('NIM sudah terdaftar! Gunakan NIM lain.'); window.location='tambah.php';</script>";
        exit;
    }
    $sql = mysqli_query($koneksi,
        "INSERT INTO mahasiswa VALUES ('$nim','$nama','$prodi')"
    );
    if($sql){
        echo "<script>alert('Data berhasil disimpan'); window.location='index.php';</script>";
    }
}
?>
</body>
</html>
