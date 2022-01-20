<?php 
session_start();

//cek  apakah session nya ada atau tidak
if( !isset ($_SESSION["login_s"]) ){
    header("Location:../login/login.php");
    exit;
}

include('../functions.php');

$id_orgtua=$_GET["id_orgtua"];
if(hapus_org($id_orgtua) > 0){
    echo"
    <script>
    alert('data berhasil di hapus');   
    document.location.href='orang tua-view.php'; 
    </script>
    ";
}else{
    echo"
    <script>
    alert('data gagal di hapus');
    document.location.href='orang tua-view.php';
    </script>
    ";
}

?>