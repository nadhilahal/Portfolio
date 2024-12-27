<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MATERI</title>
    <link rel="icon" type="image/x-icon" href="../css/img/logo-1.png.png">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Pixelify+Sans&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!-- icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- style -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/materi.css">
  </head>

  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">< p.<span>web</span> ></a>

      <div class="navbar-nav">
        <a href="index.html">Home</a>
        <a href="index.html#css">CSS</a>
        <a href="index.html#website">My Website</a>
        <a href="index.html#reference">Referensi</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>

    <!-- navbar end -->

    <section class="header">
      <h1>Materi</h1>
    </section>

    <!-- hero section start -->
    <section id="materi" class="materi">
      <!-- Contoh Tampilan data -->
      
      <!-- Membuat proses tampil data -->
      <?php
        include "connect.php";
        $query = "SELECT * FROM tb_materi";
        $sql = mysqli_query($connect, $query);
        $row = mysqli_num_rows($sql);
        if($row > 0){
          while($data = mysqli_fetch_array($sql)){
            echo "<div class='content' id='content1'>
                  <h2>".$data['title']."</h2>";
            echo "<p>Bahasa Pemrograman : ".$data['language']."</p>
                  </div>";
            echo "<p>" . nl2br($data['subject']) . "</p>";
            echo "<h3>Contoh</h3><div class='content'><p id='example'>" . nl2br($data['example']) . "</p>";
            echo "<p>Output<img src='images/".$data['image']."'></p></div>";
            echo "<p id='#delete'><a href='delete.php?id_materi=$data[id_materi]'>Hapus</a></p>";
          }
        } else{
          echo "<p>Belum ada materi</p>";
        } 
      ?>
    </section>

    <!-- form -->
    <section id="new" class="new">
      <button onclick="on()">
        <i data-feather="plus-circle"></i><br>
        Tambah Materi Baru
      </button></p>
      
      <div id="new-form" class="new-form">
        <h1 onclick="off()">Tambah Materi Baru</h1><br>
        <form method="post" enctype="multipart/form-data" action="upload.php">
          Judul: <input type="text" name="title">
          Bahasa Pemrograman: <input type="text" name="language">
          Materi: <textarea name="subject" rows="20" cols="40"></textarea>
          Contoh: <textarea name="example" rows="20" cols="40"></textarea>
          <input type="file" name="image">
          <input type="submit" value="Upload">
        </form>
      </div>
    </section>
    <!-- Form menampilkan data gambar ke dalam tabel -->
    


    <!-- icons -->
    <script>
      feather.replace();
    </script>
  
    <!-- javascript -->
    <script src="../js/script.js"></script>

  </body>
</html>
