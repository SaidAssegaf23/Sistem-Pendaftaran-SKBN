<?php 
session_start();
include 'koneksi.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data peserta</title>
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
    <h2>Data Peserta</h2>
    <div class="box">
      <table class="table" border="1">
        <thead>
          <tr>
            <th>No</th>
            <th>kode Pendaftaran</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Pekerjaan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
          while ($row = mysqli_fetch_array($list_peserta)) {
            ?>
            
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $row['id_pendafaran']?></td>
              <td><?php echo $row['nama']?></td>
              <td><?php echo $row['alamat']?></td>
              <td><?php echo $row['tgl']?></td>
              <td><?php echo $row['pekerjaan']?></td>
              <td>
                <a href="cetak.php?id=<?php echo $row['id_pendafaran']  ?>">Cetak</a> | |
                 <a href="edit_peserta.php?id=<?php echo $row['id_pendafaran']  ?>">Edit</a> | |
                <a href="hapus.php?id=<?php echo $row['id_pendafaran'] ?>" onclick="return confirm('Yakin ?')">Hapus</a>
              </td>

            </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>
  </section>

</body>
</html>