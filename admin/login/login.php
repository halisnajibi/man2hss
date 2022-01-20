<?php 

session_start();
if(isset($_SESSION["login_s"]) ){
  header("Location:../../index.php");
  exit;
}
include('../functions.php');
//cek apakah tombol submit ditekan atau belum
if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
  
   $cek_user=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username'");
   $row =mysqli_num_rows($cek_user);
   if($row==1){
     //jalanakan procedur seleksi password
    $ambil_pass=mysqli_fetch_assoc($cek_user);
    $cek_pass=$ambil_pass['password_admin'];
      if($cek_pass <> $password){
        echo"<script>alert('password salah');</script>";
      }else{
       
         //set session
         $_SESSION["login_s"]= true;
         echo"
         <script>
                  
         </script>
         ";
        header("Location:../../index.php");
      }
   }else{
     echo"<script>alert('username salah');</script>";
   }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAN 2 HSS | Admin -Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post">
  <h1><span>Man 2</span> Hss</h1>
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password" autocomplete="off" >
  <button class="btn" name="login">Log in</button>
  
  </div>
</form>

<footer>
  <h5>Instagram : <a target="_blank" href="https://www.instagram.com/man2hss/"> Man 2 HSS</a></h5>
</footer>

<script>
    $(document).ready(function(e){
   $('h6').on('click',function(){
      $('.social').stop().slideToggle();
   });
})
</script>

</script>
</body>
</html>