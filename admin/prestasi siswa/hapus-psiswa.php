<?php 
include('../functions.php');
$id=$_GET["id"];

if(hapus_psiswa($id) > 0){
    echo"
    <script>
    alert('data berhasil di hapus');   
    document.location.href='prestasi-view.php'; 
    </script>
    ";
}else{
    echo"
    <script>
    alert('data gagal di hapus');
  
    </script>
    ";

}
?>