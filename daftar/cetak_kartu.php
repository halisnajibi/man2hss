<?php 
include("function_daftar.php");
$siswa=tabel("SELECT * FROM ppdb ORDER BY id_siswa DESC LIMIT 1");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

    <title>HALAMAN ADMIN</title>
  </head>
  <body>
        <header>
            <div class="semua text-center ">
                <div class="icon">
                <img  src="../img/logo man2 Hulu Sungai Selatan timbul.png"  alt="">
               
                </div>
                <h4>
                    KEMENTERIAN AGAMA 
                </h4>
                <h3>PANITIA PENERIMAAN PESERTA DIDIK BARU (PPDB) </h3>
                <h4>MADRASAH ALIYAH NEGERI 2 HULU SUNGAI SELATAN</h4>
                <h6>6775+7C6, Amawang Kiri Muka, Kandangan, Kabupaten Hulu Sungai Selatan, Kalimantan Selatan 71213</h6>
            </div>
        </header>
      
     <div class="isi">
         <img class="print" src="../img/printer.png" onclick="window.print() ;" alt="">
         <h4 class="text-center">KARTU PESERTA</h4>
         <table>
             <?php foreach($siswa AS $cetak) :?>
             <tr  class="margin">
                 <th>No.Pendaftaran </th>
                 <td>:<?php echo $cetak["no_pendaftaran"] ?>      </td>
             </tr>
             <tr  class="margin">
                 <th>Nama Siswa     </th>
                 <td>:<?php echo $cetak["nama_siswa"] ?>     </td>
             </tr>
             <tr  class="margin">
                 <th>Asal Sekolah   </th>
                 <td>:<?php echo $cetak["asal_sekolah"] ?>     </td>
             </tr>
            
             <?php endforeach; ?>
         </table>
     </div>
               <footer>
                   <div class="ttd text-center">
                       <p class="hss">Hulu Sungai Selatan,</p>
                       <p class="kepala mb-5">Ketua Panitia</p>
                       <P class="nama fw-bold">Muhammad Nor Khalis Najibi</P>
                       <p class="nip fw-bold">NIP 123456</p>
                      
                   </div>
               </footer>                             
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>