<?php 
include 'koneksi.php'; 



	$id_pendafaran = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tgl = $_POST['tgl'];
	$pekerjaan = $_POST['pekerjaan'];

	$save = mysqli_query($conn, "UPDATE tb_pendaftaran set nama='$nama', alamat='$alamat', tgl='$tgl',
	 pekerjaan='$pekerjaan' where id_pendafaran='$id_pendafaran' ");

	if ($save) {
        echo "<script>
            alert('Data Berhasil diubah');
            window.location.href = 'data_peserta.php';
    </script>";
    } else {
        echo "<script>
            alert('Data Gagal diubah');
            window.location.href = 'data_peserta.php';
    </script>";
    }
	
	

?>