<?php 
include('../functions.php');
$id=$_GET["id"];
if(hapus_sp($id) > 0){
    echo"
    <script>
    alert('data berhasil di hapus');   
    document.location.href='sp-view.php'; 
    </script>
    ";
}else{
    echo"
    <script>
    alert('data gagal di hapus');
   document.location.href='sp-view.php'; 
    </script>
    ";
}
?>