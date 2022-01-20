<?php 
include('../functions.php');
$id=$_GET["id"];
if(hapus_ekstra($id) > 0){
       echo"
        <script>
                alert('data berhasil di hapus');
                 document.location.href='ekstra-view.php';
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