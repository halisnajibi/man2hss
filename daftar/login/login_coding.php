<?php 
ob_start();
session_start();
include("kon.php");

$nama=mysqli_real_escape_string($conn,$_POST["nama"]);
$password=mysqli_real_escape_string($conn,$_POST["passwor"]);

$op=$_GET["op"];

if($op=="in"){
       $sql = mysqli_query($conn, "SELECT * FROM user WHERE nama_user='$nama' and 	passwor='$password'");

     if(mysqli_num_rows($sql)==1){
            $qry = mysqli_fetch_array($sql);
            $_SESSION['	id_user']    = $qry['	id_user'];
            $_SESSION['nama_user']    = $qry['nama_user'];
            $_SESSION['hak_akses']    = $qry['hak_akses'];
            $_SESSION['id_siswa']    = $qry['id_siswa'];
            
            if($qry['hak_akses']=="siswa"){
                header("location:../daftar.php");
            }
        }
        else{
            ?>
            <script>
                alert('Oops! Login Failed. Username & password tidak sesuai ...');
                document.location='login.php';
            </script>
            <?php
        }
    }
    else if($op=="out"){
        unset($_SESSION['id_user']);
        unset($_SESSION['hak_akses']);
        header("location:login.php");
    }
?>