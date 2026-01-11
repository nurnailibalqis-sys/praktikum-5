<?php
include "koneksi.php";
$nrp = $_GET['nrp'];
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nrp='$nrp'");
header("Location: index.php");
