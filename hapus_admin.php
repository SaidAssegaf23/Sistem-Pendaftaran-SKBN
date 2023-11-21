<?php 
include 'koneksi.php';

if (isset($_GET['id'])) {

	$delete = mysqli_query($conn, "DELETE FROM tb_admin WHERE ad_admin ='".$_GET['id']."' ");

	echo '<script>window.location="data_admin.php"</script>';
}


?>