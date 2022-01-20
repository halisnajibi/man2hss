<?php 
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <form action="login_codingan?op=in" method="post"></form>
  <h1><span>Man 2</span> Hss</h1>
   <form action="login_coding.php?op=in" method="post">
  <input type="text" name="nama" placeholder="Username" autocomplete="off">
  <input type="password" name="passwor" placeholder="Password" autocomplete="off" >
  <button class="btn" name="login">Log in</button>
  </form>
  </div>
</form>

<footer>
  <h5>Belum Punya Akun? : <a target="_blank" href="regestrasi.php"> Registrasi</a></h5>
</footer>
</body>
</html>