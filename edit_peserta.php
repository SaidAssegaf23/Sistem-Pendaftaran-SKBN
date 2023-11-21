<?php 
session_start();
include 'koneksi.php'; 

// if (isset($_POST['submit'])) {
// 	$query = mysqli_query($conn, "SELECT * FROM `tb_admin` WHERE ad_admin = '$ad_admin'");
// 	$existingStaf = mysqli_fetch_assoc($query);
// 	$ad_admin = $_get['id'];
// 	$nama_admin = $_POST['nama_admin'];
// 	$username = $_POST['username'];
// 	$password = $_POST['password'];



	// mysqli_query($conn, "UPDATE `tb_admin` SET `nama_admin` = '$nama_admin', `username` = '$username',`pasword` = '$pasword' WHERE `tb_admin`.`ad_admin` = $ad_admin");

	// $_SESSION['alert'] = ['Berhasil Menambah Data Staf', 'success'];
	// echo '<script>window.location="data_admin.php"</script>';



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Admin</title>
	<link rel="stylesheet" type="text/css" href="css1/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

</head>
<body>


	<section class="box-formulir">
		

		<form method="post" action="proses_edit_peserta.php" >

			<div class="box">
				<h1>Edit Data Peserta</h1>
				<?php 
				include 'koneksi.php';	
				$id_pendafaran =$_GET['id'];
				$query = mysqli_query($conn, "SELECT * FROM `tb_pendaftaran` WHERE id_pendafaran = '$id_pendafaran'");
				while ($row = mysqli_fetch_array($query)) {


					?>

					<table border="0" class="table-form">
						<input type="hidden" name="id" value="<?php echo $row['id_pendafaran'] ;?>" required>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" name="nama" class="input-control" value="<?php echo $row['nama'];?>" required></td>

						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><input type="text" name="alamat" class="input-control" value="<?php echo $row['alamat'];?>"></td>

						</tr>
						<tr>
							<td>Tempat, Tanggal Lahir</td>
							<td>:</td>
							<td><input type="text" name="tgl" class="input-control" value="<?php echo $row['tgl']; ?>"> </td>

						</tr>
						<tr>
							<td>Pekerjaan</td>
							<td>:</td>
							<td><input type="text" name="pekerjaan" class="input-control" value="<?php echo $row['pekerjaan']; ?>"> </td>

						</tr>

						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" value="Simpan" class="btn-daftar"></td>

						</tr>
					<?php } ?>
				</table>

			</div>


		</form>
	</section>



</body>
</html>