<?php 
session_start();
include 'koneksi.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Admin</title>
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
      <li><a href="data_peserta.php">Data Peserta</a></li>
      <li><a href="data_admin.php">Data Admin </a></li>
      <li><a href="keluar.php">Keluar</a></li>

    </ul>
  </header>

  <section class="content"> 
    <h2>Data Admin  || <a href="tambah_admin.php"> Tambah Admin</a></h2>
    <div class="box">
      <table class="table" border="1">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama </th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $list_admin = mysqli_query($conn, "SELECT * FROM tb_admin");
          while ($row = mysqli_fetch_array($list_admin)) {
            ?>
            
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $row['nama_admin']?></td>
              <td><?php echo $row['username']?></td>
              <td><?php echo $row['password']?></td>
              
              <td>
                <a href="edit_admin.php?id=<?php echo $row['ad_admin']  ?>">Edit</a> | |
                <a href="hapus_admin.php?id=<?php echo $row['ad_admin'] ?>" onclick="return confirm('Yakin ?')">Hapus</a>
              </td>

            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </section>



</body>
</html>