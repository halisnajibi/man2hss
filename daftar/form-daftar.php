<?php 
include('function_daftar.php');

if(isset($_POST["simpan"]) ){
    if(kirim_data($_POST) > 0){
        echo"
        <script>
                alert('data berhasil di kirim');
                document.location.href='view-siswa-ppdb.php'; 
              
         </script>
            ";
    }else{
        echo"
        <script>
                alert('data gagal di kirim');
            
         </script>
            ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FORM PENDAFTARAN</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3 text-capitalize">Hello..</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="daftar.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item active">
                <a class="nav-link" href="form-daftar.php" target="_blank">
             <i class="fas fa-graduation-cap"></i>
                    <span>Daftar</span></a>
            </li>
                 <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
              

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">nama siswa</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
               <div class="container-fluid">
                          <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Isi Data Yang Benar</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                               
                            </div>
                          
                          
                        </div>
                        <div class="card-body">
                            <?php 
                                                                
                                    // mengambil data barang dengan kode paling besar
                                    $query = mysqli_query($conn, "SELECT max(no_pendaftaran) as kodeTerbesar FROM ppdb");
                                    $data = mysqli_fetch_array($query);
                                    $kodeBarang = $data['kodeTerbesar'];
                                    
                                    // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
                                    // dan diubah ke integer dengan (int)
                                    $urutan = (int) substr($kodeBarang, 3, 3);
                                    
                                    // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                                    $urutan++;
                                    
                                    // membentuk kode barang baru
                                    // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
                                    // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
                                    // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
                                    $huruf = "MAN";
                                    $kodeBarang = $huruf . sprintf("%03s", $urutan);
                                   

                            ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_siswa">
                            <div class="row">
                                <div class="col">
                                    <label for="nama">NO PENDAFTARAN :</label>
                                    <input type="text" class="form-control mt-2 mb-4"  aria-label="First name" id="nama_siswa" name="no_pendaftaran" readonly value="<?php echo $kodeBarang ?>" ;autocomplete="off" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="nama">NAMA SISWA :</label>
                                    <input type="text" class="form-control mt-2 mb-4" placeholder="NAMA" aria-label="First name" id="nama_siswa" name="nama_siswa" autocomplete="off" required>
                                 </div>
                                <div class="col">
                                    <label for="nis">ASAL SEKOLAH :</label>
                                    <input type="text" class="form-control mt-2 mb-4" placeholder="ASAL SEKOLAH" aria-label="First name" id="nis" name="asal_sekolah" autocomplete="off" maxlength="18"    required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="jk">JENIS KELAMIN :</label><br>
                                    <select class="form-select mt-2 mb-4" aria-label="Default select example" name="jenis_kelamin"  required>
                                        <option selected >Pilih</option>
                                        <option value="l">L</option>
                                        <option value="p">P</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="jk">JURUSAN :</label><br>
                                    <select class="form-select mt-2 mb-4" aria-label="Default select example" name="jurusan"  required>
                                        <option selected >Pilih</option>
                                        <option value="ipa">IPA</option>
                                        <option value="ips">IPS</option>
                                         <option value="agama">AGAMA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="tl">TEMPAT LAHIR :</label>
                                    <input type="text" class="form-control mt-2 mb-4"  aria-label="First name" id="tl" name="tempat_lahir" autocomplete="off" placeholder="TEMPAT LAHIR"    required>
                                </div>
                                  <div class="col">
                                    <label for="tgl">TANGGAL LAHIR :</label>
                                    <input type="date" class="form-control mt-2 mb-4"  aria-label="First name" id="tgl" name="tanggal_lahir" autocomplete="off" required>
                                </div>
                          </div>

                          <div class="row">
                            <div class="col">
                                <label for="tl">TELEPON :</label>
                                <input type="text" class="form-control mt-2 mb-4"  aria-label="First name" id="tl" name="telepon" autocomplete="off" placeholder="TELEPON" maxlength="12"   required>
                            </div>
                            <div class="col">
                                <label for="tl">NILAI IJAZAH :</label>
                                <input type="text" class="form-control mt-2 mb-4"  aria-label="First name" id="tl" name="nilai_ijazah" autocomplete="off" placeholder="NILAI IJAZAH" maxlength="12"   required>
                            </div>
                         </div>

                         <div class="row">
                              <div class="col">
                                <label for="tl">FOTO :</label>
                                <input type="file" name="foto" class="form-control mt-2 mb-4"  aria-label="First name">
                            </div>
                             <div class="col">
                                        <label for="tl">ALAMAT:</label>
                                        <input type="text" class="form-control mt-2 mb-4"  aria-label="First name" id="tl" name="alamat" autocomplete="off" placeholder="ALAMAT"    required>
                                 </div>
                         </div>

                          <div class="row">
                            <div class="col">
                                <label for="tl">NAMA AYAH :</label>
                                <input type="text" class="form-control mt-2 mb-4"  aria-label="First name" id="tl" name="nama_ayah" autocomplete="off" placeholder="NAMA AYAH" maxlength="12"   required>
                            </div>
                            <div class="col">
                                <label for="tl">NAMA IBU :</label>
                                <input type="text" class="form-control mt-2 mb-4"  aria-label="First name" id="tl" name="nama_ibu" autocomplete="off" placeholder="NAMA IBU" maxlength="12"   required>
                            </div>
                         </div>


                         <div class="row mt-4">
                                <div class="col d-grid gap-2">
                                    <div class="d-grid gap-2 d-md-block">
                                        <button class="btn btn-primary" type="submit" name="simpan">Kirim</button>
                                       
                                    </div>
                                </div>
                         </div>
                         </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; muhammad nor khalis najibi 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>