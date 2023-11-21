<?php 
include 'koneksi.php'; 



	$ad_admin = $_POST['id'];
	$nama_admin = $_POST['nama_admin'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$save = mysqli_query($conn, "UPDATE tb_admin set nama_admin='$nama_admin', username='$username', password='$password' where ad_admin='$ad_admin' ");

	if ($save) {
        echo "<script>
            alert('Data Berhasil diubah');
            window.location.href = 'data_admin.php';
    </script>";
    } else {
        echo "<script>
            alert('Data Gagal diubah');
            window.location.href = 'data_admin.php';
    </script>";
    }
	
	

?>