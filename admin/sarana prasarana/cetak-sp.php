<?php 
session_start();

//cek  apakah session nya ada atau tidak
if( !isset ($_SESSION["login_s"]) ){
    header("Location:../login/login.php");
    exit;
}
include('../functions.php');
$t_org=orangtua("SELECT * FROM sarana_prasarana ");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">

    <title>HALAMAN ADMIN</title>
  </head>
  <body>
        <header>
            <div class="semua text-center ">
                <div class="icon">
                <img  src="../../img/logo man2 Hulu Sungai Selatan timbul.png"  alt="">
               
                </div>
                <h4>
                    KEMENTERIAN AGAMA 
                </h4>
                <h3>MADRASAH ALIYAH NEGERI 2 HULU SUNGAI SELATAN</h3>
                <h4>LAPORAN DATA ORANG TUA SISWA</h4>
                <h6>6775+7C6, Amawang Kiri Muka, Kandangan, Kabupaten Hulu Sungai Selatan, Kalimantan Selatan 71213</h6>
            </div>
        </header>
      
        <div class="table-responsive">
        <img class="print" src="../../img/printer.png" onclick="window.print() ;" alt="">
                                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <th>no</th>
                                    <th>nama barang</th>
                                    <th>jumlah</th>
                                  
                                   
                                
                                </tr>
                                <?php $i=1; ?>
                                <?php foreach ($t_org as $data_g): ?>
                                <tr>
                                    <td>
                                        <?php echo $i; ?>
                                    </td>
                                    <td>
                                        <?php echo $data_g["nama_barang"] ?> 
                                    </td>
                                    <td>
                                        <?php echo $data_g["jumlah"] ?>
                                    </td>
                                  
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                                </table>
                            </div>
               <footer>
                   <div class="ttd text-center">
                       <p class="hss">Hulu Sungai Selatan,</p>
                       <p class="kepala mb-5">Kepala Sekolah</p>
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