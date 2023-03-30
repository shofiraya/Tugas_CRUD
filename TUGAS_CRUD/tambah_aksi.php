<?php
include 'koneksi.php';

//menangkap data yang dikirim dari form

$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$email_student = $_POST['email_student'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$asal_sma = $_POST['asal_sma'];
$matkul_favorit = $_POST['matkul_favorit'];

//menginput data ke database
mysqli_query($conn,"insert into mahasiswa values('','$nrp','$nama','$jenis_kelamin','$jurusan','$email_student','$alamat','$no_hp','$asal_sma','$matkul_favorit')");

 
//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>