<?php 
ob_start();
session_start();
include('function_daftar.php');

 $tampil=mysqli_query($conn,"SELECT * FROM ppdb ORDER BY id_siswa DESC LIMIT 1");   



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
                <a class="nav-link" href="form-daftar.php">
             <i class="fas fa-graduation-cap"></i>
                    <span>Daftar</span></a>
            </li>
                 <hr class="sidebar-divider">
                 <li class="nav-item active">
                <a class="nav-link" href="view-siswa-ppdb.php" >
           
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
                    <h1 class="h3 mb-2 text-gray-800">Tabel Data Siswa PPDB</h1>
                    <p>Silahkan Cetak Kartu Ujian !!</p>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col">
                                       <a class="cetak btn btn-primary" href="cetak_kartu.php">Cetak Kartu</a>
                                </div>
                            </div>
                          
                          
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                                <table class="table table-bordered text-center " id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                   
                                    <th>no pendaftaran</th>
                                    <th>nama siswa</th>
                                    <th>asal sekolah</th>
                                    <th>jenis kelamin</th>
                                    <th>jurusan</th>
                                    <th>tempat lahir</th>
                                    <th>tanggal lahir</th>
                                    <th>telepon</th>
                                    <th>nilai ijazah</th>
                                    <th>alamat</th>
                                   <th>foto siswa</th>
                                    <th>nama ayah</th>
                                    <th>nama ibu</th>
                                </tr>
                             
                                  
                                <tr>
                                   <?php foreach ($tampil as $peg) : ?>
                                   <td>
                                       <?php echo $peg["no_pendaftaran"] ;?>
                                   </td>
                                     <td>
                                       <?php echo $peg["nama_siswa"] ;?>
                                   </td>
                                    <td>
                                       <?php echo $peg["asal_sekolah"] ;?>
                                   </td>
                                     <td>
                                       <?php echo $peg["jenis_kelamin"] ;?>
                                   </td>
                                    <td>
                                       <?php echo $peg["jurusan"] ;?>
                                   </td>
                                     <td>
                                       <?php echo $peg["tempat_lahir"] ;?>
                                   </td>
                                    <td>
                                       <?php echo $peg["tanggal_lahir"] ;?>
                                   </td>
                                   <td>
                                       <?php echo $peg["telepon"] ;?>
                                   </td>
                                     <td>
                                       <?php echo $peg["nilai_ijazah"] ;?>
                                   </td>
                                    <td>
                                       <?php echo $peg["alamat"] ;?>
                                   </td>
                                     <td>
                                       <img src="foto siswa/<?php echo $peg["foto"] ;?>" alt="" width="80px">
                                   </td>
                                    <td>
                                       <?php echo $peg["nama_ayah"] ;?>
                                   </td>
                                    <td>
                                       <?php echo $peg["nama_ibu"] ;?>
                                   </td>
                                </tr>
                          
                                    <?php endforeach; ?>
                                </table>
                            </div>
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
                        <span aria-hidden="true">??</span>
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