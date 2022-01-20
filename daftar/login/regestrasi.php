<?php 
include("kon.php");

if(isset($_POST["reg"] )){
   
    if(reges($_POST) > 0){
        echo"
        
        <script>
                alert('selamat anda sudah mendaftar');
         </script>
            ";    
      
    }else{
        echo mysqli_error($conn);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post"  enctype="multipart/form-data">
            <h1><span>Man 2</span> Hss</h1>
            <form action="" method="post">
            <input type="text" name="nama_asli" placeholder="Nama" autocomplete="off">
            <input type="text" name="username" placeholder="Username" autocomplete="off">
            <input type="password" name="pw" placeholder="Password" autocomplete="off" >
            <input type="password" name="pw_2" placeholder="Konfirmasi Password" autocomplete="off" >
            <input type="text" name="siswa" readonly value="siswa">
            <button class="btn" name="reg" type="submit">Registrasi</button>
    </form>
  </div>
</form>

<footer>
  <h5>Sudah Punya Akun? : <a  href="login.php"> Log in </a></h5>
</footer>
</body>
</html>