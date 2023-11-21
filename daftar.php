<?php 
include 'koneksi.php'; 

if (isset($_POST['submit'])) {
	$getMaxId = mysqli_query($conn,"SELECT MAX(RIGHT(id_pendafaran, 5)) AS id FROM tb_pendaftaran");
	$d = mysqli_fetch_object($getMaxId);
	$generateId = 'P'.date('Y').sprintf("%05s",$d->id+1);

	$insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
		'".$generateId."',
		'".$_POST['nama']."',
		'".$_POST['alamat']."',
		'".$_POST['tgl']."',
		'".$_POST['pekerjaan']."'


	)");
	if ($insert) {
		echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
	}else{
		echo "huft".mysqli_error($conn);
	}
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar</title>
	<link rel="stylesheet" type="text/css" href="css1/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

</head>
<body>


	<section class="box-formulir">
		
		
		<form action="" method="post">

			<div class="box">
				<h1>Formulir Pendaftaran Tes Urin</h1>

				<table border="0" class="table-form">
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama" class="input-control" required></td>

					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><input type="text" name="alamat" class="input-control" required></td>

					</tr>
					<tr>
						<td>Tempat, Tanggal Lahir</td>
						<td>:</td>
						<td><input type="text" name="tgl" class="input-control"required ></td>

					</tr>
					<tr>
						<td>Pekerjaan</td>
						<td>:</td>
						<td><input type="text" name="pekerjaan" class="input-control" required></td>

					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" name="submit" value="daftar sekarang" class="btn-daftar"></td>

					</tr>
				</table>
				
			</div>


		</form>
	</section>



</body>
</html>