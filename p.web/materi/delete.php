<?php
// Mengambil file koneksi
include 'connect.php';

// Memeriksa apakah parameter id_materi tersedia
$id = $_GET['id_materi'];
// Melakukan perintah query delete berdasarkan id dalam tabel gambar
$result = mysqli_query($connect, "DELETE FROM tb_materi WHERE id_materi=$id");
//  Kembali kehalaman materi.php
header("location:materi.php");
?>
