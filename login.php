<?php 
session_start();
include 'koneksi.php'; 

if(isset($_POST['login'])){
  $cek = mysqli_query($conn, "SELECT * FROM tb_admin
   WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."' ");

  if(mysqli_num_rows($cek) > 0){

    $a = mysqli_fetch_object($cek);

    $_SESSION['stat_login'] = true;
    $_SESSION['id']=$a->ad_admin;
    $_SESSION['nama']=$a->nama_admin;
    echo '<script>window.location="beranda.php"</script>';
  }else{
    echo'<script>alert("Gagal, Username atau password salah")</script>';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>formulir tes urin</title>
  <link rel="stylesheet" type="text/css" href="css1/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

</head>
<body>

  <section class="main-login">
    <div class="box-login">
      <h2>Login Admin</h2>
      <form action="" method="post">
      <div class="box">
        <table>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td>
              <input type="text" name="username" class="input-control">
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td>
              <input type="password" name="password" class="input-control">
            </td>
          </tr>
           <tr>
            <td></td>
            <td></td>
            <td>
              <input type="submit" name="login" value="login" class="btn-login">
            </td>
          </tr>
        </table>
        
      </div>
    </form>
    </div>
    
  
  </section>
  



</body>
</html>