<?php 
include 'koneksi.php'; 

$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendafaran = '".$_GET['id']."'");
$p = mysqli_fetch_object($peserta);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak</title>
  <link rel="stylesheet" type="text/css" href="css1/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<script>window.print();</script>

</head>
<body>


  <h2><u>Surat Keterangan Bebas Narkoba</u></h2>
  <br>
  <h4>Dengan ini menerangkan bahwa</h4>
  <table class="table-data" border="0">


    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><?php echo $p->nama ?></td>
    </tr>

    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $p->alamat ?></td>
    </tr>

    <tr>
    <td>Tempat, Tanggal lahir</td>
    <td>:</td>
    <td><?php echo $p->tgl ?></td>
    </tr>

    <tr>
    <td>Pekerjaan</td>
    <td>:</td>
    <td><?php echo $p->pekerjaan ?></td>
  </tr>
  </table>
  <br>
  <p>Berdasarkan hasil pemeriksaan laboratorium Badan Narkotika Nasional Provinsi Maluku</p>
   <P>pada tanggal <span id="tanggalwaktu"></span> bahwa yang bersangkutan dinyatakan bebas dari narkoba</p>
    <script>
var dt = new Date();
document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleDateString();
</script>
    <br>
    <p>Demikian surat keterangan ini dibuat untuk dipergunakan sebagai mana mestinya,tetapi bukan sebagai dasar apabila dikemudian hari ternyata yang bersangkutan melakukan penyalahgunaan narkoba sesuai yang diatur dalam Undang-UndangNomor 35 Tahun 2009 tentang Narkotika.
</p>
<br>
<br>
<div class="ttd" align="center">
  <p>Ambon, <span id="tanggal"></span> </p>
  <script>
var tw = new Date();
if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
else (a=tw.getTime());
tw.setTime(a);
var tahun= tw.getFullYear ();
var hari= tw.getDay ();
var bulan= tw.getMonth ();
var tanggal= tw.getDate ();
var hariarray=new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
document.getElementById("tanggal").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
</script>

<p><B>Kepala Badan Narkotika Nasional</B></p>
 <P><B>Provinsi Maluku,</B></p>
  <br>
  <br>
  <br>
<p>.........................................................</p>
</div>

</body>
</html>