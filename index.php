
 <?php 
session_start();

//cek  apakah session nya ada atau tidak
if( !isset ($_SESSION["login_s"]) ){
    header("Location:admin/login/login.php");
    exit;
}


include('admin/functions.php');
$jumlah=mysqli_query($conn,"SELECT * FROM siswa");
$tampil_jumlah_s=mysqli_num_rows($jumlah);

$jumlah_g=mysqli_query($conn,"SELECT * FROM guru");
$tampil_jumlah_g=mysqli_num_rows($jumlah_g);


$jumlah_og=mysqli_query($conn,"SELECT * FROM orang_tua");
$tampil_jumlah_org=mysqli_num_rows($jumlah_og);

$t_admin=admin("SELECT * FROM admin ");



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HALAMAN ADMIN</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                <img src="img/logo man2 Hulu Sungai Selatan timbul.png" alt="logo man 2 hss" width="30px">
                </div>
                <div class="sidebar-brand-text mx-3">MAN 2 HSS <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="aktif">Dashboard</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo_masterdata"
                    aria-expanded="true" aria-controls="collapseTwo_masterdata">
                    <i class="fas fa-fw fa-cog"></i>
                    <span class="aktif">Master Data</span>
                </a>
                <div id="collapseTwo_masterdata" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="admin/guru/guru-view.php">Data Guru</a>
                        <a class="collapse-item" href="admin/siswa/siswa-view.php">Data Siswa</a>
                        <a class="collapse-item" href="admin/orang tua/orang tua-view.php">Data Orang Tua Siswa</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider d-none d-md-block">    
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo_sekolah"
                    aria-expanded="true" aria-controls="collapseTwo_sekolah">
                    <i class="fas fa-school"></i>
                    <span class="aktif">Data Sekolah</span>
                </a>
                <div id="collapseTwo_sekolah" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       <a class="collapse-item" href="admin/sejarah/sejarah-view.php">Sejarah</a>
                        <a class="collapse-item" href="admin/visi misi/vm-view.php">Visi & Misi</a>
                        <a class="collapse-item" href="admin/sarana prasarana/sp-view.php">Sarana & Prasana</a>
                        <a class="collapse-item" href="admin/jurusan/jurusan-view.php">Jurusan</a>
                        <a class="collapse-item" href="admin/prestasi sekolah/prestasi-view.php">Prestasi & Penghargaan</a>
                        <a class="collapse-item" href="admin/kepala sekolah/kepala-view.php">Kepala Sekolah</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
          
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo_siswa"
                    aria-expanded="true" aria-controls="collapseTwo_siswa">
                    <i class="fas fa-user-graduate"></i>
                    <spans class="aktif">Kesiswaan</spans>
                </a>
                <div id="collapseTwo_siswa" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       <a class="collapse-item" href="admin/ekstrakulikuler/ekstra-view.php">Ekstrakurikuler</a>
                        <a class="collapse-item" href="admin/prestasi siswa/prestasi-view.php">Prestasi</a>
                     
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
              <li class="nav-item">
                <a class="nav-link" href="daftar/view.php">
                  <i class="fas fa-chart-bar"></i>
                    <span class="aktif">PPDB</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <p>Sistem Informasi Data Sekolah</p>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php foreach ($t_admin as $data_g) ?>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> 
                                        <?php echo $data_g["nama_asli"] ?>
                                </span>
                                <img class="img-profile rounded-circle" src="admin/admin_web/img/<?php echo $data_g["foto"] ?>" alt="foto admin" width="100px">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="tentang admin/portopolio/index.html">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="admin/admin_web/admin-view.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="admin/login/logout.php" data-toggle="modal" data-target="#logoutModal">
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
                    <h1 class="h3 mb-4 text-gray-800">Selamat Datang Admin..</h1>
                    <h1 class="h4 mb-4 text-gray-800">Man 2 Hulu Sungai Selatan</h1><br>
                  
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Data Siswa</div>
                                               
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <p>
                                                <?php 
                                                echo $tampil_jumlah_s;    
                                             ?>
                                                </p>
                                         
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               Data Guru</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <p>
                                                <?php 
                                                echo $tampil_jumlah_g;    
                                             ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Orang Tua Siswa
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <p>
                                                <?php 
                                                echo $tampil_jumlah_org;    
                                             ?>
                                                </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.container-fluid -->

         
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Muhammad Nor Khalis Najibi 2021</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Anda ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" di bawah jika Anda Ingin Keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="admin/login/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
