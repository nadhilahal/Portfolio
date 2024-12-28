<?php
include "connect.php"; // Pastikan koneksi terhubung

// Ambil data dari form
$title = $_POST['title'];
$language = $_POST['language'];
$subject = $_POST['subject'];
$example = $_POST['example'];

// Ambil data file
$name_file = $_FILES['image']['name'];
$ukuran_file = $_FILES['image']['size'];
$tipe_file = $_FILES['image']['type'];
$tmp_file = $_FILES['image']['tmp_name'];

$path = "images/".$name_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
  if($ukuran_file <= 1000000){
    if(move_uploaded_file($tmp_file, $path)){
      $query = "INSERT INTO tb_materi (title, language, subject, example, image) 
                VALUES ('$title', '$language', '$subject', '$example', '$name_file')";
      $sql = mysqli_query($connect, $query);

      if($sql){
        header("location: materi.php");
      }else{
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='materi.php'>Kembali Ke Form</a>";
      }
    }else{
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='materi.php'>Kembali Ke Form</a>";
    }
  }else{
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
    echo "<br><a href='materi.php'>Kembali Ke Form</a>";
  }
}else{
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
  echo "<br><a href='materi.php'>Kembali Ke Form</a>";
}
?> 
