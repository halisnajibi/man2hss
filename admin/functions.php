<?php 
$conn=mysqli_connect("localhost","root","","man2hss");

// menampilkan data db
function guru($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];
    while ($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function siswa($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];
    while ($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}


function orangtua($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];
    while ($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function admin($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function sejarah($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function vm($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;

}

function sp($query){
    global $conn;
    $result=mysqli_query($conn,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;

}
// akhir menampilkan data db

// tambah data siswa
function tambah_siswa($pos){
    global $conn;
    $nis=htmlspecialchars($pos["nis"]);
    $nama_siswa=htmlspecialchars($pos["nama_siswa"]);
    $jurusan=htmlspecialchars($pos["jurusan"]);
    $tahun_masuk=htmlspecialchars($pos["tahun_masuk"]);
    $jenis_kelamin=htmlspecialchars($pos["jenis_kelamin"]);
    $tanggal_lahir=htmlspecialchars($pos["tanggal_lahir"]);
    $tempat_lahir=htmlspecialchars($pos["tempat_lahir"]);
    $alamat=htmlspecialchars($pos["alamat"]);
    $telepon=htmlspecialchars($pos["telepon"]);
    $foto=uplod_siswa();
if(!$foto){
    return false;
}

    $query="INSERT INTO siswa 
            VALUES
            ('','$nis','$nama_siswa','$jurusan','$tahun_masuk','$jenis_kelamin','$tanggal_lahir','$tempat_lahir','$alamat','$telepon','$foto')
            ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

//tambah guru
function tambah_guru($pos_gr){
    global $conn;
    $nama=htmlspecialchars($pos_gr["nama"]);
    $nip=htmlspecialchars($pos_gr["nip"]);
    $jenis_kelamin=htmlspecialchars($pos_gr["jenis_kelamin"]);
    $tanggal_lahir=htmlspecialchars($pos_gr["tanggal_lahir"]);
    $tempat_lahir=htmlspecialchars($pos_gr["tempat_lahir"]);
    $alamat=htmlspecialchars($pos_gr["alamat"]);
    $telepon=htmlspecialchars($pos_gr["telepon"]);
    $foto=uplod_guru();
    if(!$foto){
        return false;
    }


    $query_guru="INSERT INTO guru
                    VALUES
            ('','$nama','$nip','$jenis_kelamin','$tanggal_lahir','$tempat_lahir','$alamat','$telepon','$foto') ";

            mysqli_query($conn,$query_guru);
            return mysqli_affected_rows($conn);
}
//akhir tambah guru

// akhir tambah siswa

//tambah sp
function tambah_sp($pos){
    global $conn;
    $nama_barang=htmlspecialchars($pos["nama_barang"]);
    $jumlah=htmlspecialchars($pos["jumlah"]);

    $query="INSERT INTO sarana_prasarana VALUES
            ('','$nama_barang','$jumlah')  ";
            mysqli_query($conn,$query);
            return mysqli_affected_rows($conn);
}
//akhir tambah sp

//tambah prestasi sekolah
function tambah_prestasi($pos){
    global $conn;
    $nama_prestasi=htmlspecialchars($pos["nama"]);
    $peringkat=htmlspecialchars($pos["peringkat"]);
    $tanggal=htmlspecialchars($pos["tanggal"]);
    $keterangan=htmlspecialchars($pos["keterangan"]);

    $query="INSERT INTO prestasi_penghargaan VALUES
            ('','$nama_prestasi','$peringkat','$tanggal','$keterangan')";
            mysqli_query($conn,$query);
            return mysqli_affected_rows($conn);
}
//akhirtambah prestasi sekolah
//tambah kepala ekolah
function tambah_kepala($pos){
    global $conn;
    $nama=htmlspecialchars($pos["nama_kepala"]);
    $nip=htmlspecialchars($pos["nip"]);
    $tahun=htmlspecialchars($pos["tahun"]);
    $alamat=htmlspecialchars($pos["alamat"]);
     $foto=uplod_kepala();
    if(!$foto){
        return false;
    }
    $query="INSERT INTO kepala_sekolah VALUES
            ('','$nama','$nip','$tahun','$alamat','$foto')";
            mysqli_query($conn,$query);
       return     mysqli_affected_rows($conn);

}

function tambah_ekstra($pos){
    global $conn;
    $nama=htmlspecialchars($pos["nama"]);
    $keterangan=htmlspecialchars($pos["keterangan"]);

    $sql="INSERT INTO ekstrakurikuler VALUES
            ('','$nama','$keterangan')";
            mysqli_query($conn,$sql);
           return  mysqli_affected_rows($conn);
           
}

function tambah_prestasisiswa($pos){
    global $conn;
    $nama_s=htmlspecialchars($pos["nama"]);
    $tanggal=htmlspecialchars($pos["tanggal"]);
    $peringkat=htmlspecialchars($pos["peringkat"]);
    $nama_p=htmlspecialchars($pos["nama_prestasi"]);
    $keterangan=htmlspecialchars($pos["keterangan"]);

    $sql="INSERT INTO prestasi_siswa VALUES
            ('','$nama_s','$tanggal','$peringkat','$nama_p','$keterangan')";
            mysqli_query($conn,$sql);
            return mysqli_affected_rows($conn);
}
//akhir tambah kepala sekolah
//tambah orang tua
function tambah_org($pos_org){
    global $conn;
    $nama_siswa=htmlspecialchars($pos_org["nama_siswa"]);
    $nama_ayah=htmlspecialchars($pos_org["nama_ayah"]);
    $nama_ibu=htmlspecialchars($pos_org["nama_ibu"]);
    $pekerjaan_ayah=htmlspecialchars($pos_org["pekerjaan_ayah"]);
    $pekerjaan_ibu=htmlspecialchars($pos_org["pekerjaan_ibu"]);
    $alamat_ayah=htmlspecialchars($pos_org["alamat_ayah"]);
    $alamat_ibu=htmlspecialchars($pos_org["alamat_ibu"]);
    $foto_ayah=uplod_org_ayah();
    if(!$foto_ayah){
        return false;
    }

    $foto_ibu=uplod_org_ibu();
    if(!$foto_ibu){
        return false;
    }

    $query_org="INSERT INTO orang_tua 
                VALUES
                ('','$nama_siswa','$nama_ayah','$nama_ibu','$pekerjaan_ayah','$pekerjaan_ibu','$alamat_ayah','$alamat_ibu','$foto_ayah','$foto_ibu')
                ";
    mysqli_query($conn,$query_org);
    return mysqli_affected_rows($conn);
}
// akhir tambah orang tua

//uplod fot ayah
function uplod_org_ayah(){
    $namafiles=$_FILES['foto_ayah']['name'];
    $ukuranfile=$_FILES['foto_ayah']['size'];
    $error=$_FILES['foto_ayah']['error'];
    $tmpname=$_FILES['foto_ayah']['tmp_name'];

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
    move_uploaded_file($tmpname, 'foto orang tua/'.$namafilebaru);
    return $namafilebaru;
}
// akhir uplod ayah

//uplod ibu

function uplod_org_ibu(){
    $namafiles=$_FILES['foto_ibu']['name'];
    $ukuranfile=$_FILES['foto_ibu']['size'];
    $error=$_FILES['foto_ibu']['error'];
    $tmpname=$_FILES['foto_ibu']['tmp_name'];

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
    move_uploaded_file($tmpname, 'foto orang tua/'.$namafilebaru);
    return $namafilebaru;
}

function uplod_admin(){
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
    move_uploaded_file($tmpname, 'img/'.$namafilebaru);
    return $namafilebaru;
}
// akhir uplod
//akhir uplod ibu






// uplod foto siswa


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


function uplod_kepala(){
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
    move_uploaded_file($tmpname, 'foto kepala/'.$namafilebaru);
    return $namafilebaru;
}





function uplod_guru(){
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
    move_uploaded_file($tmpname, 'foto guru/'.$namafilebaru);
    return $namafilebaru;
}
// akhir uplod

// hapus
function hapus_siswa($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM siswa WHERE id_siswa=$id");
    return mysqli_affected_rows($conn);
}
// akhir hapus

//hapus guru

function hapus_guru($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM guru WHERE id_guru=$id");
    return mysqli_affected_rows($conn);
}
//akhir hapus guru


//hapus org tua

function hapus_org($id_orgtua){
    global $conn;
    mysqli_query($conn,"DELETE FROM orang_tua WHERE id_orgtua=$id_orgtua");
    return mysqli_affected_rows($conn);
}

function hapus_sp($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM sarana_prasarana WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function hapus_pp($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM prestasi_penghargaan WHERE id=$id");
    return mysqli_affected_rows($conn);
}


function hapus_kepala($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM kepala_sekolah WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function hapus_ekstra($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM ekstrakurikuler WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function hapus_psiswa($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM prestasi_siswa WHERE id=$id");
    return mysqli_affected_rows($conn);
}
//akhir hapus org tua
// update
function ubah_siswa($pos){
    global $conn;
    $id_siswa=$pos["id_siswa"];
    $nis=htmlspecialchars($pos["nis"]);
    $nama_siswa=htmlspecialchars($pos["nama_siswa"]);
    $jurusan=htmlspecialchars($pos["jurusan"]);
    $tahun_masuk=htmlspecialchars($pos["tahun_masuk"]);
    $jenis_kelamin=htmlspecialchars($pos["jenis_kelamin"]);
    $tanggal_lahir=htmlspecialchars($pos["tanggal_lahir"]);
    $tempat_lahir=htmlspecialchars($pos["tempat_lahir"]);
    $alamat=htmlspecialchars($pos["alamat"]);
    $telepon=htmlspecialchars($pos["telepon"]);
    $fotolama=htmlspecialchars($pos["fotolama"]);

    if($_FILES['foto']['error'] === 4){
        $foto=$fotolama;
    }else{
        $foto=uplod_siswa();
    }
    $query="UPDATE siswa SET 
                    nis='$nis',
                    nama_siswa='$nama_siswa',
                    jurusan='$jurusan',
                    tahun_masuk='$tahun_masuk',
                    jenis_kelamin='$jenis_kelamin',
                    tanggal_lahir='$tanggal_lahir',
                    tempat_lahir='$tempat_lahir',
                    alamat='$alamat',
                    telepon='$telepon',
                    foto='$foto'
                    WHERE id_siswa=$id_siswa
                ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
}
// akhir update


function ubah_kepala($pos){
    global $conn;
    $id=$pos["id"];
    $nama_kepala=htmlspecialchars($pos["nama_kepala"]);
    $nip=htmlspecialchars($pos["nip"]);
    $tahun=htmlspecialchars($pos["tahun"]);
    $alamat=htmlspecialchars($pos["alamat"]);
    $fotolama=htmlspecialchars($pos["fotolama"]);

    if($_FILES['foto']['error'] === 4){
        $foto=$fotolama;
    }else{
        $foto=uplod_kepala();
    }
    $query="UPDATE kepala_sekolah SET 
                    nama_kepala='$nama_kepala',
                    nip='$nip',
                    tahun='$tahun',
                    alamat='$alamat',
                    foto='$foto'
                    WHERE id=$id";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
}

//update sp
function ubah_sp($pos){
    global $conn;
    $id_sp=$pos["id_sp"];
 
    $nama_barang=htmlspecialchars($pos["nama_barang"]);
    $jumlah=htmlspecialchars($pos["jumlah"]);
   
    $query="UPDATE sarana_prasarana SET 
                  
                    nama_barang='$nama_barang',
                    jumlah='$jumlah'
                   
                    WHERE id=$id_sp
                ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
}

function ubah_ekstra($pos){
    global $conn;
    $id=$pos["id"];
    $nama=htmlspecialchars($pos["nama"]);
    $keterangan=htmlspecialchars($pos["keterangan"]);

    $sql="UPDATE ekstrakurikuler SET
            nama='$nama',
            keterangan='$keterangan'
            WHERE id=$id";
            mysqli_query($conn,$sql);
            return mysqli_affected_rows($conn);
}

function ubah_psiswa($pos){
    global $conn;
    $id=$pos["id"];
    $nama_s=htmlspecialchars($pos["nama"]);
    $tanggal=htmlspecialchars($pos["tanggal"]);
    $peringkat=htmlspecialchars($pos["peringkat"]);
    $nama_p=htmlspecialchars($pos["nama_prestasi"]);
    $keterangan=htmlspecialchars($pos["keterangan"]);

    $sql="UPDATE prestasi_siswa SET
            nama_siswa='$nama_s',
            tanggal='$tanggal',
            peringkat='$peringkat',
            nama_prestasi='$nama_p',
            keterangan='$keterangan'
            WHERE id=$id";
            mysqli_query($conn,$sql);
            return mysqli_affected_rows($conn);
}

function ubah_pp($pos){
    global $conn;
    $id=$pos["id_pp"];
    $nama=htmlspecialchars($pos["nama"]);
    $peringkat=htmlspecialchars($pos["peringkat"]);
      $tanggal=htmlspecialchars($pos["tanggal"]);
         $keterangan=htmlspecialchars($pos["keterangan"]);

         $query="UPDATE prestasi_penghargaan SET
                    nama='$nama',
                    peringkat='$peringkat',
                    tanggal='$tanggal',
                    keterangan='$keterangan'
                    WHERE id=$id";
                    mysqli_query($conn,$query);
                  return    mysqli_affected_rows($conn);
}
//akhir sp

//update guru
function update_guru($pos){
    global $conn;
    $id_guru=$pos["id_guru"];
    $nip=htmlspecialchars($pos["nip_gr"]);
    $nama_guru=htmlspecialchars($pos["nama_gr"]);
    $jenis_kelamin=htmlspecialchars($pos["jenis_kelamin"]);
    $tanggal_lahir=htmlspecialchars($pos["tanggal_lahir"]);
    $tempat_lahir=htmlspecialchars($pos["tempat_lahir"]);
    $alamat=htmlspecialchars($pos["alamat"]);
    $telepon=htmlspecialchars($pos["telepon"]);
    $fotolama=htmlspecialchars($pos["fotolama"]);

    if($_FILES['foto']['error'] === 4){
        $foto=$fotolama;
    }else{
        $foto=uplod_guru();
    }
    $query="UPDATE guru SET 
                    nama='$nama_guru',
                    nip='$nip',
                    jenis_kelamin='$jenis_kelamin',
                    tanggal_lahir='$tanggal_lahir',
                    tempat_lahir='$tempat_lahir',
                    alamat='$alamat',
                    telepon='$telepon',
                    foto='$foto'
                    WHERE id_guru=$id_guru
                ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
}

//akhir update guru


//update org tua
function update_org($pos_org){
    global $conn;
    $id=$pos_org["id"];
    $nama_siswa=htmlspecialchars($pos_org["nama_siswa"]);
    $nama_ayah=htmlspecialchars($pos_org["nama_ayah"]);
    $nama_ibu=htmlspecialchars($pos_org["nama_ibu"]);
    $pekerjaan_ayah=htmlspecialchars($pos_org["pekerjaan_ayah"]);
    $pekerjaan_ibu=htmlspecialchars($pos_org["pekerjaan_ibu"]);
    $alamat_ayah=htmlspecialchars($pos_org["alamat_ayah"]);
    $alamat_ibu=htmlspecialchars($pos_org["alamat_ibu"]);

    $fotolama_ayah=htmlspecialchars($pos_org["fotolama_ayah"]);
    if($_FILES["foto_ayah"]['error'] === 4){
        $foto_ayah=$fotolama_ayah;
    }else{
        $foto_ayah=uplod_org_ayah();
    }

    $fotolama_ibu=htmlspecialchars($pos_org["fotolama_ibu"]);
    if($_FILES["foto_ibu"]['error'] === 4){
        $foto_ibu=$fotolama_ibu;
    }else{
        $foto_ibu=uplod_org_ibu();
    }

    $query_update="UPDATE orang_tua SET
                    id_siswa='$nama_siswa',
                    nama_ayah='$nama_ayah',
                    nama_ibu='$nama_ibu',
                    pekerjaan_ayah='$pekerjaan_ayah',
                    pekerjaan_ibu='$pekerjaan_ibu',
                    alamat_ayah='$alamat_ayah',
                    alamat_ibu='$alamat_ibu',
                    foto_ayah='$foto_ayah',
                    foto_ibu='$foto_ibu'
                    WHERE id_orgtua=$id
                ";
    mysqli_query($conn,$query_update);
    return mysqli_affected_rows($conn);
    mysqli_errno($conn);
}
//akhir update org tua


function update_admin($pos){
    global $conn;
    $id_admin=$pos["id_admin"];
    $nama=htmlspecialchars($pos["nama"]);
    $username=htmlspecialchars($pos["username"]);
    $password=htmlspecialchars($pos["password"]);
    $email=htmlspecialchars($pos["email"]);
    $alamat=htmlspecialchars($pos["alamat"]);
    $telepon=htmlspecialchars($pos["telepon"]);
    $fotolama=htmlspecialchars($pos["fotolama"]);

    if($_FILES['foto']['error'] === 4){
        $foto=$fotolama;
    }else{
        $foto=uplod_admin();
    }
    $query="UPDATE admin SET 
                    nama_asli='$nama',
                    username='$username',
                    password_admin='$password',
                
                   email='$email',
                    alamat='$alamat',
                    telepon='$telepon',
                    foto='$foto'
                    WHERE id_admin=$id_admin
                ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
}

// cari
function cari_siswa($keyword){
    $query=("SELECT * FROM siswa WHERE 
            nama_siswa LIKE '%$keyword%' OR
            nis LIKE '%$keyword%'
            ");
        return siswa($query);
}

function  cari_guru($keyword_gr){
    $query=("SELECT * FROM guru WHERE
            nama LIKE '%$keyword_gr%' OR
            nip LIKE '%$keyword_gr%'
             ");
             return orangtua($query);
}

//akhir cari
?>