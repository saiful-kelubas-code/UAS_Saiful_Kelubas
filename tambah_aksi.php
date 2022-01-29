<?php 
// koneksi database
include 'koneksi.php';
 

$nama_universitas = $_POST['nama_universitas'];
$jumlah_mahasiswa = $_POST['jumlah_mahasiswa'];
$alamat = $_POST['alamat'];
 if (!empty($nama_universitas) || !empty($jumlah_mahasiswa) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into universitas values('','$nama_universitas','$jumlah_mahasiswa','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>