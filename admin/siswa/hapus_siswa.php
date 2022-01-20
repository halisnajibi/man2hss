<?php
session_start();

//cek  apakah session nya ada atau tidak
if( !isset ($_SESSION["login_s"]) ){
    header("Location:../login/login.php");
    exit;
}

include('../functions.php');
$id=$_GET["id_siswa"];


if(hapus_siswa($id) > 0 ){
    echo"
    <script>
    alert('data berhasil di hapus');   
    document.location.href='siswa-view.php'; 
    </script>
    ";
}else{
    echo"
    <script>
    alert('data gagal di hapus');
    document.location.href='siswa-view.php';
    </script>
    ";
}
?>