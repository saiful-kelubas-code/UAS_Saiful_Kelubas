<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_universitas = $_POST['nama_universitas'];
$jumlah_mahasiswa = $_POST['jumlah_mahasiswa'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update universitas set nama_universitas='$nama_universitas', jumlah_mahasiswa='$jumlah_mahasiswa', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>