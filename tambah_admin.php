<?php 
include 'koneksi.php'; 

if (isset($_POST['submit'])) {
$nama_admin = $_POST['nama_admin'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($conn, "INSERT INTO `tb_admin` VALUES (NULL, '$nama_admin', '$username', '$password')");

$_SESSION['alert'] = ['Berhasil Menambah Data Staf', 'success'];
echo '<script>window.location="data_admin.php"</script>';
}


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
		

		<form action="" method="post">

			<div class="box">
				<h1>Tambah Data Admin</h1>

				<table border="0" class="table-form">
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama_admin" class="input-control"></td>

					</tr>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input type="text" name="username" class="input-control"></td>

					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="Password" name="password" class="input-control" ></td>

					</tr>
					
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" name="submit" value="Simpan" class="btn-daftar"></td>

					</tr>
				</table>

			</div>


		</form>
	</section>



</body>
</html>