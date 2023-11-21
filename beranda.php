<?php 
session_start();
include 'koneksi.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>administrator</title>
  <link rel="stylesheet" type="text/css" href="css1/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

</head>
<body>

  <header>
    <h1><a href="beranda.php"> Admin BNN</a></h1>
    <ul>
      <li><a href="beranda.php">Beranda</a></li>
      <li><a href="data_peserta.php">data peserta</a></li>
      <li><a href="data_admin.php">Data Admin </a></li>
      <li><a href="keluar.php">keluar</a></li>

    </ul>
  </header>

  <section class="content"> 
    <h2>Beranda</h2>
    <div class="box">
      <h3><?php echo $_SESSION['nama']?></h3>
      
    </div>
  </section>

</body>
</html>