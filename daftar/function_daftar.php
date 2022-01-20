<?php 

$conn=mysqli_connect("localhost","root","","man2hss");


function tabel($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];
    while ($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}


function kirim_data($pos){
    global $conn;
    $no=htmlspecialchars($pos["no_pendaftaran"]);
    $nama_siswa=htmlspecialchars($pos["nama_siswa"]);
    $asal_sekolah=htmlspecialchars($pos["asal_sekolah"]);
    $jenis_kelamin=htmlspecialchars($pos["jenis_kelamin"]);
    $jurusan=htmlspecialchars($pos["jurusan"]);
    $tml=htmlspecialchars($pos["tempat_lahir"]);
     $tl=htmlspecialchars($pos["tanggal_lahir"]);
     $telepon=htmlspecialchars($pos["telepon"]);
     $nilai_ijazah=htmlspecialchars($pos["nilai_ijazah"]);
  $foto=uplod_siswa();
    if(!$foto){
        return false;
    }
     $alamat=htmlspecialchars($pos["alamat"]);
     $na=htmlspecialchars($pos["nama_ayah"]);
      $ni=htmlspecialchars($pos["nama_ibu"]);

      $sql="INSERT INTO ppdb VALUES
            ('','$no','$nama_siswa','$asal_sekolah','$jenis_kelamin','$jurusan','$tml','$tl','$telepon','$nilai_ijazah','$foto','$alamat','$na','$ni')
            ";
            mysqli_query($conn,$sql);
            return mysqli_affected_rows($conn);
}


//uplod ibu

function uplod_siswa(){
    $namafiles=$_FILES['foto']['name'];
    $ukuranfile=$_FILES['foto']['size'];
    $error=$_FILES['foto']['error'];
    $tmpname=$_FILES['foto']['tmp_name'];

    //cek apakah tidak ada foto yang di uplod
    if($error === 4){
        echo"
        <script>
            alert('pili gambar dulu');

        </script>
        ";
        return false;
    }
    //cek apakah yang di uplod itu foto
    $extensigambarvalid=['jpg','jpeg','png'];
    //mecah nama file
    $extensigambar=explode('.',$namafiles);
    //nagmbil nama file yang palng akhir(extensi) dan merubah nya jadi huruf kecil semua
    $extensigambar=strtolower (end($extensigambar));
    if(!in_array($extensigambar,$extensigambarvalid)){
        echo"
            <script>
            alert('yang di uplod bukan foto');
            </script>";
        return false;
    }
    //cek jika ukuran nya terlalu besar
    if($ukuranfile > 1000000){
        echo"
        <script>
        alert('ukuran foto terlalu besar');
        </script>";
    return false;
    }

    //lulus pengecikan,foto siap di uplod
    //genereate nama gambar baru
    $namafilebaru= uniqid();
    $namafilebaru .='.';
    $namafilebaru .=$extensigambar;
    //nama folder relative sama file tambahh data
    move_uploaded_file($tmpname, 'foto siswa/'.$namafilebaru);
    return $namafilebaru;
}

?>