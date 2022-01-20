<?php 
$conn=mysqli_connect("localhost","root","","man2hss");

function reges($pos){
    global $conn;
 $nama=$pos["nama"];
 $username=strtolower(stripslashes($pos["username"]))  ;
 $pw=mysqli_real_escape_string($conn,$pos["pw"]) ;
 $pw_konfir=mysqli_real_escape_string($conn,$pos["pw_2"]) ;
 $siswa=$pos["siswa"];

    //cek konfirmasi pw
    if($pw !== $pw_konfir){
        echo"
        <script>
                alert('konfirmasi password tidak sesuai !');
         </script>
            ";
            return false;
    }

   //tambahkan userbaru ke db
   $sql="INSERT INTO user VALUES
        ('','$username','$nama','$pw','$pw_konfir','$siswa','')";

    mysqli_query($conn,$sql);
    return mysqli_affected_rows($conn);
}
?>