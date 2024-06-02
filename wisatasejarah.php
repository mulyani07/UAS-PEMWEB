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
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/destinasijatim.jpg">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
<!-- header section -->
  <header id="header" class="navbar-fixed-top">
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
<!-- header section --> 
<!-- intro section -->
<main>
  <section id="intro">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h6 class="title-intro">WISATA SEJARAH</h6>
      </div>
    </div>
  </section>
  <!-- intro section -->
  <!-- services section -->
  <section id="services" class="services service-section">
    <div class="container">
        <div class="row">
              <div class="col-md-6">
                           <section id="testimonials" class="section testimonials no-padding">
                    <div class="container-fluid">
                      <div class="row no-gutter">
                        <div class="flexslider">
                        <ul class="slides">
                        <li>
                            <img src="images/foto/sejarah/a1_1.jpg" style="height: 100%">
                        </li>
                        <li>
                            <img src="images/foto/sejarah/a2_2.jpg" style="height: 100%">
                        </li>
                        <li>
                            <img src="images/foto/sejarah/a1_1.jpg" style="height: 100%">
                        </li>
                        </ul>
                        </div>
                      </div>
                    </div>
                  </section>
              </div>
              <div class="col-md-6">
                  <h2>Candi Badut</h2>
                  <p>Candi Badut adalah sebuah candi Hindu yang terletak di Malang, Jawa Timur. Candi ini merupakan salah satu situs arkeologi penting di Jawa Timur dan berasal dari abad ke-8 Masehi. Candi Badut dikenal dengan relief-reliefnya yang menggambarkan cerita-cerita dari epik Hindu seperti Ramayana dan Mahabharata. Arsitektur candi ini sederhana namun menarik, dengan struktur bangunan yang terpelihara dengan baik meskipun telah berusia ribuan tahun. Candi Badut menjadi salah satu destinasi wisata sejarah yang menarik bagi para pengunjung yang tertarik dengan warisan budaya dan sejarah Jawa Timur.</p>
                  <br>
              </div>
        </div>
        <section id="services" class="services service-section">
              <div class="container">
                <div class="row">
                  <div class="col-md-4 col-sm-6 services text-center">
                    <span class="icon icon-map" style="color:#F60"></span>
                    </a>
                    <div class="services-content">
                      <p>Jl. Raya Candi V No.5D, Doro, Karangwidoro, Kec. Dau, Kabupaten Malang, Jawa Timur 65151</p>
                    </div>
                    <div class="map-container" style="text-align: center; margin-top: 10px;">
                      <!-- <button class="show btn btn-info" style="margin-bottom: 10px;">Map</button> -->
                      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3978178277544!2d112.59860809999999!3d-7.957776099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78826723d1a95d%3A0x95fdf34c20fb4d51!2sCandi%20Badut!5e0!3m2!1sid!2sid!4v1717216744527!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 services text-center">
                  <a href="https://salsawisata.com/candi-badut/" target="_blank">
                    <span class="icon icon-global" style="color:#F60"></span>
                    </a>
                    <div class="services-content">
                      <p>Informasi terkait candi badut</p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 services text-center">
                  <a href="https://wa.me/628112939969" target="_blank">
                  <span class="icon icon-phone" style="color:#F60"></span>
                  </a>
                    <div class="services-content">
                      <p>+628112939969</p>
                    </div>
                  </div>
                </div>
              </div>
        </section>
      </div>
    </div>
  </section>
  <section id="services" class="services service-section">
    <div class="container">
        <div class="row">
              <div class="col-md-6">
                           <section id="testimonials" class="section testimonials no-padding">
                    <div class="container-fluid">
                      <div class="row no-gutter">
                        <div class="flexslider">
                        <ul class="slides">
                        <li>
                            <img src="images/foto/sejarah/b1_1.jpg" style="height: 100%">
                        </li>
                        <li>
                            <img src="images/foto/sejarah/b2_2.jpg" style="height: 100%">
                        </li>
                        <li>
                            <img src="images/foto/sejarah/b1_1.jpg" style="height: 100%">
                        </li>
                        </ul>
                        </div>
                      </div>
                    </div>
                  </section>
              </div>
              <div class="col-md-6">
                  <h2>Museum Mpu Tantular</h2>
                  <p>Museum Mpu Tantular di Sidoarjo, Jawa Timur, menampilkan warisan budaya dan sejarah daerah tersebut. Didedikasikan untuk memamerkan artefak bersejarah, lukisan, ukiran, dan benda seni lainnya yang merefleksikan kekayaan budaya Jawa Timur. Melalui pameran yang informatif, pengunjung dapat memahami kebudayaan, adat istiadat, tradisi, seni pertunjukan, dan kehidupan sehari-hari masyarakat Jawa Timur.</p>
                  <br>
              </div>
        </div>
        <section id="services" class="services service-section">
              <div class="container">
                <div class="row">
                  <div class="col-md-4 col-sm-6 services text-center">
                    <span class="icon icon-map" style="color:#F60"></span>
                    </a>
                    <div class="services-content">
                      <p>Jl. Raya Buduran - Jembatan Layang, Bedrek, Siwalanpanji, Kec. Buduran, Kabupaten Sidoarjo, Jawa Timur 61252</p>
                    </div>
                    <div class="map-container" style="text-align: center; margin-top: 10px;">
                      <!-- <button class="show btn btn-info" style="margin-bottom: 10px;">Map</button> -->
                      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2851918350234!2d112.720328!3d-7.433661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f963d2d4fb4d%3A0xfd521173211bad9f!2sMuseum%20Mpu%20Tantular!5e0!3m2!1sid!2sid!4v1717217486900!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 services text-center">
                  <a href="https://museummputantular.com/" target="_blank">
                    <span class="icon icon-global" style="color:#F60"></span>
                    </a>
                    <div class="services-content">
                      <p>Informasi terkait museum mpu tantular</p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 services text-center">
                  <a href="https://museummputantular.com/kontak-kami/" target="_blank">
                    <span class="icon icon-phone" style="color:#F60"></span>
                    </a>
                    <div class="services-content">
                      <p>Narahubung</p>
                    </div>
                  </div>
                </div>
              </div>
        </section>
    </div>
  </section>
  <section id="services" class="services service-section">
    <div class="container">
        <div class="row">
              <div class="col-md-6">
                           <section id="testimonials" class="section testimonials no-padding">
                    <div class="container-fluid">
                      <div class="row no-gutter">
                        <div class="flexslider">
                        <ul class="slides">
                        <li>
                            <img src="images/foto/sejarah/c1_1.jpg" style="height: 100%">
                        </li>
                        <li>
                            <img src="images/foto/sejarah/c2_2.jpg" style="height: 100%">
                        </li>
                        <li>
                            <img src="images/foto/sejarah/c1_1.jpg" style="height: 100%">
                        </li>
                        </ul>
                        </div>
                      </div>
                    </div>
                  </section>
              </div>
              <div class="col-md-6">
                  <h2>Monumen Kapal Selam</h2>
                  <p>Monumen Kapal Selam Surabaya adalah monumen yang menarik yang terletak di Taman Pendidikan TNI AL, Surabaya. Monumen ini mempertahankan kapal selam bernama KRI Pasopati yang telah dinonaktifkan dari layanan aktif. Di dalam monumen, pengunjung dapat menjelajahi interior kapal selam yang sebenarnya, melihat peralatan militer, dan memahami kehidupan di kapal selam. Ini memberikan pengalaman yang menarik bagi pengunjung untuk memahami bagian dari sejarah dan kehidupan militer Indonesia.</p>
              </div>
          </div>
      </div>
      <section id="services" class="services service-section">
              <div class="container">
                <div class="row">
                  <div class="col-md-4 col-sm-6 services text-center">
                    <span class="icon icon-map" style="color:#F60"></span>
                    </a>
                    <div class="services-content">
                      <p>Jl. Pemuda No.39, Embong Kaliasin, Kec. Genteng, Surabaya, Jawa Timur 60271</p>
                    </div>
                    <div class="map-container" style="text-align: center; margin-top: 10px;">
                      <!-- <button class="show btn btn-info" style="margin-bottom: 10px;">Map</button> -->
                      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.782770796426!2d112.7502803!3d-7.265544699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9628df520e5%3A0x577443720136fb0b!2sMonumen%20Kapal%20Selam%20Surabaya!5e0!3m2!1sid!2sid!4v1717217536230!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 services text-center">
                  <a href="http://www.monkasel-surabaya.com/" target="_blank">
                    <span class="icon icon-global" style="color:#F60"></span>
                    </a>
                    <div class="services-content">
                      <p>Informasi terkait monumen kapal surabaya</p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 services text-center">
                  <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                  <p><a href="mailto:monumenkapalselamsby@gmail.com">monumenkapalselamsby@gmail.com</a></p>
                    </div>
                  </div>
                </div>
              </div>
        </section>
    </div>
  </section>
  <section id="services" class="services service-section">
    <div class="container">
        <div class="row">
              <div class="col-md-6">
                           <section id="testimonials" class="section testimonials no-padding">
                    <div class="container-fluid">
                      <div class="row no-gutter">
                        <div class="flexslider">
                        <ul class="slides">
                        <li>
                            <img src="images/foto/sejarah/d1_1.jpg" style="height: 100%">
                        </li>
                        <li>
                            <img src="images/foto/sejarah/d2_2.jpg" style="height: 100%">
                        </li>
                        <li>
                            <img src="images/foto/sejarah/d1_1.jpg" style="height: 100%">
                        </li>
                        </ul>
                        </div>
                      </div>
                    </div>
                  </section>
              </div>
              <div class="col-md-6">
                  <h2>Benteng Pendem Van Den Bosch</h2>
                  <p>Benteng Pendem Ngawi, yang juga dikenal sebagai Benteng Van Den Bosch, merupakan peninggalan bersejarah Belanda di Ngawi, Jawa Timur. Benteng ini dibangun pada abad ke-19 oleh Gubernur Jenderal Johannes van den Bosch sebagai bagian dari sistem pertahanan kolonial Belanda. Dengan arsitektur yang kokoh, benteng ini menjadi saksi bisu dari peristiwa-peristiwa bersejarah di masa lampau. Saat ini, Benteng Pendem Ngawi telah dijadikan objek wisata sejarah yang menarik bagi pengunjung yang tertarik dengan peninggalan kolonial Belanda di Indonesia.</p>
              </div>
          </div>
      </div>
      <section id="services" class="services service-section">
              <div class="container">
                <div class="row">
                  <div class="col-md-4 col-sm-6 services text-center">
                    <span class="icon icon-map" style="color:#F60"></span>
                    </a>
                    <div class="services-content">
                      <p>Jl. Untung Suropati No.II, Pelem II, Pelem, Kec. Ngawi, Kabupaten Ngawi, Jawa Timur 63211</p>
                    </div>
                    <div class="map-container" style="text-align: center; margin-top: 10px;">
                      <!-- <button class="show btn btn-info" style="margin-bottom: 10px;">Map</button> -->
                      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.6753322433024!2d111.454697!3d-7.390230700000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79e7944c12cf99%3A0x2a7a16cf6156d5a5!2sBenteng%20Pendem%20Van%20Den%20Bosch!5e0!3m2!1sid!2sid!4v1717217565841!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 services text-center">
                  <a href="https://bappelitbang.ngawikab.go.id/elementor-2109/" target="_blank">
                    <span class="icon icon-global" style="color:#F60"></span>
                    </a>
                    <div class="services-content">
                      <p>Informasi terkait Benteng Pendem Van Den Bosch</p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 services text-center">
                  <span class="icon icon-envelope" style="color:#F60"></span>
                  <div class="services-content">
                  <p><a href="mailto:bappelitbang@ngawikab.go.id">bappelitbang@ngawikab.go.id</a></p>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
    </div>
    <script>
      $(document).ready(function(){
        $(".icon").click(function(){
          $(".map").slideToggle("slow", function() {
          });
        });
      });
    </script>
  </section>
</main>
<!-- services section --> 

<!-- Footer section -->
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
  <!-- footer top --> 
  
<!-- Footer section --> 
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