<?php 
include('../admin/functions.php');
$pengunguman=admin("SELECT * FROM pengunguman");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    
    <!-- fontawesome -->
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">

    <!-- css me -->
    <link rel="stylesheet" href="css/style.css">
    <title>MAN 2 HSS</title>
  </head>
  <body>
   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1" ></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">

            <img src="img_banner/1.jpg" class="d-block w-100 img-responsive" alt="...">
              <div class="carousel-caption d-none d-md-block">
                   <h1 class="display-4">Selamat Datang Di Website <br><span class="fw-bold"> Man 2 Hulu Sungai Selatan</span></h1>
                   <hr class="my-4">
                   <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus sed ea maxime quia fugiat voluptates voluptatem consequatur ab ad dolorem.</p>
                   <a class="btn btn-success btn-lg " href="">button</a>
             </div>
            </div>
            <div class="carousel-item">
            <img src="img_banner/2.jpg" class="d-block w-100 img-responsive" alt="...">
              <div class="carousel-caption d-none d-md-block">
                   <h1 class="display-4 fw-bold">PPDB From Home</h1> 
                   <hr class="my-4">
                   <p class="lead">Pendaftaran Online dari rumah oleh calon peserta didik, Verifikasi Pendaftaran Online dari rumah oleh Admin/Operator Sekolah, Melihat hasil seleksi PPDB dari rumah oleh calon peserta didik.</p>
                   <a class="btn btn-success btn-lg " href="../daftar/daftar.php" target="_blank">DAFTAR</a>
             </div>
            </div>
            <div class="carousel-item">
            <img src="img_banner/3.jpg" class="d-block w-100 " alt="...">
              <div class="carousel-caption d-none d-md-block">
                   <h1 class="display-4 fw-bold">Terimakasih</h1> 
                   <hr class="my-4">
                   <p class="lead">Terima kasih atas dukungan dan kepercayaan kepada kami, 69 daerah (14 Provinsi dan 55 Kota/Kabupaten) melaksanakan PPDB Online di tahun 2021. SIAP menjadi bagian dalam PPDB Online Telkom 2022</p>
                   <a class="btn btn-success btn-lg " href="">button</a>
             </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-success sticky-top mb-4">
  <div class="container">
    <a class="navbar-brand text-white fw-bold" href="#">Man 2 HSS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav ">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item me-4">
          <a class="nav-link active  text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item  me-4">
          <a class="nav-link  text-white" href="#">Berita</a>
        </li>
        <li class="nav-item  me-4">
          <a class="nav-link  text-white" href="#">Pengunguman</a>
        </li>
        <li class="nav-item  me-4">
          <a class="nav-link text-white ">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<!-- berita -->
<div class="row">
  <div class="col-10">
    <h2>berita utama</h2>
  <img src="img/national-cancer-institute-N_aihp118p8-unsplash (1).jpg" alt="" width="50%" class="float-start pe-4"> 
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, eos. Eum facilis dolorum perferendis ut error expedita quos exercitationem maxime ratione mollitia et nobis sint eius libero ullam aliquid, quibusdam sapiente unde! Nihil deleniti quo sit debitis molestiae vel dicta accusamus? Dolores doloribus aperiam facere, enim minima quaerat! Architecto non eum laboriosam, quaerat, vero animi odit deserunt sit ratione maiores aspernatur beatae nobis molestias totam obcaecati, sint possimus temporibus. Dolore libero aperiam modi quasi, dolor dolores blanditiis debitis. At officia blanditiis, eius dolores ab, pariatur sed sunt odit deleniti, voluptatibus libero! Odit soluta officiis, doloribus quibusdam, perspiciatis commodi distinctio possimus nihil delectus autem laborum reiciendis? Nihil eius saepe officia earum nostrum tempore possimus consequuntur ea doloribus sapiente, architecto aliquid tempora ex molestias incidunt amet dolor debitis. Facere, molestias ducimus dolore quia illo rem eligendi beatae! Culpa qui, velit, veniam magni laborum error sunt ut debitis dolores voluptas perferendis dignissimos nihil eius harum incidunt non praesentium voluptates aliquid doloremque quis facere dolore quia tempora. Itaque animi delectus doloremque totam maiores, quam molestiae labore impedit suscipit autem, quidem dolorem assumenda eveniet eos quos atque? Dignissimos dolorum excepturi, blanditiis saepe impedit, libero harum inventore et perferendis eum ipsa aperiam optio quam neque nemo.!</p>
  </div>
  <div class="col-10">
  <img src="img/national-cancer-institute-N_aihp118p8-unsplash (1).jpg" alt="" width="50%" class="float-start pe-4"> 
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, eos. Eum facilis dolorum perferendis ut error expedita quos exercitationem maxime ratione mollitia et nobis sint eius libero ullam aliquid, quibusdam sapiente unde! Nihil deleniti quo sit debitis molestiae vel dicta accusamus? Dolores doloribus aperiam facere, enim minima quaerat! Architecto non eum laboriosam, quaerat, vero animi odit deserunt sit ratione maiores aspernatur beatae nobis molestias totam obcaecati, sint possimus temporibus. Dolore libero aperiam modi quasi, dolor dolores blanditiis debitis. At officia blanditiis, eius dolores ab, pariatur sed sunt odit deleniti, voluptatibus libero! Odit soluta officiis, doloribus quibusdam, perspiciatis commodi distinctio possimus nihil delectus autem laborum reiciendis? Nihil eius saepe officia earum nostrum tempore possimus consequuntur ea doloribus sapiente, architecto aliquid tempora ex molestias incidunt amet dolor debitis. Facere, molestias ducimus dolore quia illo rem eligendi beatae! Culpa qui, velit, veniam magni laborum error sunt ut debitis dolores voluptas perferendis dignissimos nihil eius harum incidunt non praesentium voluptates aliquid doloremque quis facere dolore quia tempora. Itaque animi delectus doloremque totam maiores, quam molestiae labore impedit suscipit autem, quidem dolorem assumenda eveniet eos quos atque? Dignissimos dolorum excepturi, blanditiis saepe impedit, libero harum inventore et perferendis eum ipsa aperiam optio quam neque nemo.!</p>
  </div>
</div>
<!-- akhir berita -->
</div>



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