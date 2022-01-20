<?php 
session_start();

//cek  apakah session nya ada atau tidak
if( !isset ($_SESSION["login_s"]) ){
    header("Location:../login/login.php");
    exit;
}

include("../functions.php");
$id=$_GET["id_admin"];

$t_admin=admin("SELECT * FROM admin WHERE id_admin=$id ") [0];
$t_admin_edit=admin("SELECT * FROM admin") ;
if(isset($_POST["simpan"]) ){
    if(update_admin($_POST) > 0){
        echo"
        <script>
                alert('data berhasil di update');
                document.location.href='admin-view.php'; 
              
         </script>
            ";
    }else{
        echo"
        <script>
                alert('data gagal di update');
                document.location.href='admin-view.php'; 
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

    <title>HALAMAN ADMIN</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../../style.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                <img src="../../img/logo man2 Hulu Sungai Selatan timbul.png" alt="logo man 2 hss" width="30px">
                </div>
                <div class="sidebar-brand-text mx-3">MAN 2 HSS <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="../../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../guru/guru-view.php">Data Guru</a>
                        <a class="collapse-item" href="../siswa/siswa-view.php">Data Siswa</a>
                        <a class="collapse-item" href="orang tua-view.php">Data Orang Tua Siswa</a>
                    </div>
                </div>
            </li>

          
         
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                                <?php foreach ($t_admin_edit as $data_g) ?>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> 
                                        <?php echo $data_g["nama_asli"] ?>
                                </span>
                                <img class="img-profile rounded-circle" src="img/<?php echo $data_g["foto"] ?>" alt="foto admin" width="100px">
                               
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../../tentang admin/portopolio/index.html">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="admin-view.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                              
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../login/logout.php" data-toggle="modal" data-target="#logoutModal">
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
                    <h1 class="h3 mb-2 text-gray-800">Tabel Admin</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <div class="row">
                                <div class="col">
                               
                                      
                                </div>
                                <div class="form col">
                                     <form class="none form-inline mr-auto w-100 navbar-search" method="post">
                                         
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2"  name="keyword_gr" autocomplete="off">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"  name="tombol_cari_gr" >
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                        </div>
                        </div>
                        <div class="card-body">
                        
                                     
                            <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_admin" value="<?php echo $t_admin["id_admin"];?>">
                            <input type="hidden" name="fotolama" value="<?php echo $t_admin["foto"];?>">    
                            <div class="row">
                                <div class="col">
                                    <label for="nama">NAMA :</label>
                                    <input type="text" class="form-control mt-2 mb-4" placeholder="NAMA" aria-label="First name" id="nama_siswa" name="nama" autocomplete="off" required value="<?php echo $t_admin["nama_asli"]; ?>">
                                 </div>
                                <div class="col">
                                    <label for="nis">USERNAME :</label>
                                    <input type="text" class="form-control mt-2 mb-4" placeholder="USERNAME" aria-label="First name" id="nis" name="username" autocomplete="off"  required value="<?php echo $t_admin["username"]; ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="nama">PASSWORD :</label>
                                    <input type="text" class="form-control mt-2 mb-4" placeholder="PASSWORD" aria-label="First name" id="nama_siswa" name="password" autocomplete="off" required value="<?php echo $t_admin["password_admin"]; ?>">
                                 </div>
                                <div class="col">
                                    <label for="nis">EMAIL :</label>
                                    <input type="text" class="form-control mt-2 mb-4" placeholder="EMAIL" aria-label="First name" id="nis" name="email" autocomplete="off"  required value="<?php echo $t_admin["email"]; ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="nama">ALAMAT :</label>
                                    <input type="text" class="form-control mt-2 mb-4" placeholder="ALAMAT" aria-label="First name" id="nama_siswa" name="alamat" autocomplete="off" required value="<?php echo $t_admin["alamat"]; ?>">
                                 </div>
                                <div class="col">
                                    <label for="nis">TELEPON :</label>
                                    <input type="text" class="form-control mt-2 mb-4" placeholder="TELEPON" aria-label="First name" id="nis" name="telepon" autocomplete="off"  required value="<?php echo $t_admin["telepon"]; ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <img src="img/<?php echo $t_admin["foto"] ?>" alt="" width="100px">
                                    <label for="nama">FOTO :</label>
                                    <input type="file" class="form-control mt-2 mb-4" placeholder="FOTO" aria-label="First name" id="nama_siswa" name="foto" autocomplete="off" value="<?php echo $t_admin["foto"]; ?>">
                                 </div>
                               
                            </div>
                            <button type="submit" name="simpan" class="btn btn-primary">Update</button>
                            </form>
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
                    <a class="btn btn-primary" href="../login/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

</body>

</html>
