<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM mahasiswa WHERE nrp='$id'");

header("location:index.php");

?>