<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<?php
require_once('bdd.php');


$sql = "SELECT id, title, keterangan, start, end, color FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Destinasi Jatim</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/dj.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/destinasijatim.jpg">
<style>
.btn {
  background-color: gray;
  color: #FA4;
  font-size: 13px;
  font-weight: 600;
  border: 0;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  display: inline-block;
  text-transform: uppercase;
  opacity:0.8;
}
  </style>
</head>

<body>
<!-- header  -->
<section class="banner" role="banner" style="background-image: url('images/destinasijatim.jpg'); background-size: cover; background-position: center;">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">Destinasi Jatim</a>
      <nav class="navigation" role="navigation">
      <ul class="primary-nav">
          <li><a href="index.php">Beranda</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wisata <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li>
                            <a style="color:grey" href="wisataalam.php">Wisata Alam</a>
                       </li>
                       <li>
                            <a style="color:grey" href="wisatasejarah.php">Wisata Sejarah</a>
                       </li>
                       <li>
                            <a style="color:grey" href="wisatapendidikan.php">Wisata Pendidikan</a>
                       </li>
                    </ul>
              </li>
          <li><a href="artikel.php">Artikel</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <li><a href="testimonial.php">Testimonial</a></li>
          <li><a href="tentang.php">Tentang Kami</a></li>
           <?php 
                        if(!isset($_SESSION['is_login'])){
                    ?>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <?php }else{?>
                    <li>
                    <a href="akunuser.php?logoutSubmit=1" class="logout">Logout (<?= $_SESSION['namauser'];?>)</a>
                    </li><?php }?>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
  <!-- banner text -->
  
  </div>
</section>
<!-- header  --> 
<!-- intro  -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>SELAMAT DATANG</h3>
      <p>Sebuah website yang menyajikan rekomendasi objek wisata sekitar Jawa Timur  cocok bagi Anda yang ingin mencari tempat wisata mengagumkan di sekitar Jawa Timur</p>    </div>
  </div>
</section>
<!-- intro  --> 
<!-- services  -->
<section id="services" class="services service-section">
  <div class="container">
  <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!--Satu-->
                <iframe width="750" height="400" src="https://www.youtube.com/embed/eyhTtl0_xpI?si=7-GIx330AqtLH2dS" frameborder="0" allowfullscreen></iframe>
                <p><h4>Pantai Pulau Merah </h4></p>
                <p class="justify">Pantai Pulau Merah di Banyuwangi adalah surga bagi para pencinta pantai dengan pasirnya yang berwarna merah khas dan ombak yang cocok untuk berselancar. Terletak di ujung selatan Jawa Timur, pantai ini menawarkan panorama alam yang memesona, dengan hamparan pasir putih dan laut yang biru jernih. Pengunjung dapat menikmati aktivitas seperti berenang, berjemur, atau berselancar di ombak yang cukup tinggi. Keindahan alamnya yang eksotis membuat Pantai Pulau Merah menjadi destinasi yang populer bagi wisatawan yang mencari ketenangan dan keindahan alam yang luar biasa.</p>
                <br>
                <br>
                <br>

                <!--Dua-->
                <hr>
                <iframe width="750" height="400" src="https://www.youtube.com/embed/eqsSxn_ml8g?si=9TCfmpKDJTCzcb99" frameborder="0" allowfullscreen></iframe>
                <p><h4>Candi Penataran</h4></p>
                <p class="justify">Kraton Yogyakarta terbuka untuk kunjungan wisatawan setiap hari mulai pukul 09.00 – 14.00 WIB. Khusus hari Jumat kraton tutup pukul 11.00 WIB. Tiket masuk sebesar Rp 5.000 (wisatawan domestik) dan Rp 15.000 (wisatawan asing). Kompleks Kraton Yogyakarta memiliki 2 loket masuk, yang pertama terletak di Tepas Keprajuritan (depan Alun-alun Utara) dan di Tepas Pariwisata (Regol Keben). Jika ingin melihat koleksi yang lebih lengkap disarankan untuk masuk melalui Tepas Pariwisata.</p>
                <br>
                <br>
                <br>

                <!--Tiga-->
                <hr>
                <iframe width="750" height="400" src="https://www.youtube.com/embed/lR-V6LyKES8?si=8Nk4QHbjKfh4ZZsM" frameborder="0" allowfullscreen></iframe>
                <p><h4>Jatim Park 1</h4></p>
                <p class="justify">Jatim Park 1 adalah taman rekreasi dan belajar yang terletak di Kota Batu, Jawa Timur. Tempat ini menawarkan berbagai wahana, atraksi, dan fasilitas edukasi untuk pengunjung segala usia. Di dalamnya, pengunjung dapat menemukan beragam atraksi seperti museum satwa, wahana permainan, taman bunga, dan berbagai pertunjukan. Jatim Park 1 menggabungkan hiburan dan pendidikan sehingga cocok untuk liburan bersama keluarga atau kunjungan sekolah.</p>
                <br>
                <br>
                <br>

                <!--Empat-->
                <hr>
                <iframe width="750" height="400" src="https://www.youtube.com/embed/x74-wFRH6t0?si=iB0f520rHX9Dj4Dp" frameborder="0" allowfullscreen></iframe>
                <p><h4>Tumpak Sewu</h4></p>
                <p class="justify">Air Terjun Tumpak Sewu di Lumajang, Jawa Timur, adalah salah satu air terjun paling menakjubkan di Indonesia. Dengan ketinggian sekitar 120 meter, air terjun ini mengalir secara vertikal dari tebing-tebing curam, menciptakan panorama alam yang memukau. Untuk mencapainya, pengunjung harus melewati perjalanan trekking yang menantang melalui hutan dan jurang. Sesampainya di sana, mereka akan disuguhi keindahan alam yang luar biasa dan kolam alami yang mengundang untuk berenang atau berendam.</p>
                <br>
                <br>
                <br>

                <!--Lima-->
                <hr>
                <iframe width="750" height="400" src="https://www.youtube.com/embed/xuhLZcnHN1E?si=CQ6v088XhNe9s4BX" frameborder="0" allowfullscreen></iframe>
                <p><h4>Kawah Wurung</h4></p>
                <p class="justify">Kawah Wurung adalah sebuah kawah yang terletak di Desa Curah Macan, Kecamatan Bondowoso, Jawa Timur. Kawah ini menawarkan pemandangan alam yang menakjubkan dengan danau kawah berwarna hijau kebiruan yang dikelilingi oleh tebing-tebing curam dan vegetasi yang hijau. Kawah Wurung merupakan salah satu objek wisata alam yang populer di Jawa Timur, menarik pengunjung dengan keindahan alamnya yang eksotis serta udaranya yang segar.</p>
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Pencarian</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Kategori</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="wisataalam.php">Wisata Alam</a>
                                </li>
                                <li><a href="wisatasejarah.php">Wisata Sejarah</a>
                                </li>
                                <li><a href="wisatapendidikan.php">Wisata Pendidikan</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Wisata di Jawa Timur</h4>
              <section>
                  <div class="container-fluid">
                    <div class="row no-gutter">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>    
                          <img href="wisataalam.php" src="images/foto/alam/a1_1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img href="wisataalam.php" src="images/foto/alam/b1_11zon.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img href="wisataalam.php" src="images/foto/alam/c1_1.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
                </div>
            <p id="demo"></p>
              <script>
                  document.getElementById("demo").innerHTML = Date();
              </script>
                <section id="services" class="services service-section">
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <h6 align="center" style="color:black">Mengapa memilih Destinasi Jatim ?</h6>
        <section id="services" class="services service-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-global" style="color:#F60"></span>
        <div class="services-content">
          <h5>Terlengkap dan terupdate</h5>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-heart" style="color:#F60"></span>
        <div class="services-content">
          <h5>Informasi terpercaya</h5>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-paperclip" style="color:#F60"></span>
        <div class="services-content">
          <h5>Testimonial Pengunjung</h5>
        </div>
      </div>
    </div>
  </div>
</section>
  </div>
</section>


<!-- Footer  -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container" align="center">
      <div class="row">
        <a style="padding:20px"; href="https://github.com/mulyani07/UAS-PEMWEB"><i class="fa fa-github"></i></a>
        
        <br>
        <br>
<p>Copyright © 2024 destinasijatim.com All Rights Reserved. Made by Kelompok 10
      </div>
    </div>
  </div>
</footer>
<!-- footer --> 
  
<!-- Footer --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script>
</body>
</html>