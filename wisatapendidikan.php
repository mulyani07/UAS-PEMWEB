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
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
<!-- header section -->
<section>
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
</section>
<!-- header section --> 
<!-- intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
    <br>
      <h6>WISATA PENDIDIKAN</h6>
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
                          <img src="images/foto/pendidikan/a1_1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/a2_2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/a1_1.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Cimory Diary Prigen</h2>
                <p>Cimory Dairy Land Prigen adalah destinasi pendidikan dan rekreasi yang terletak di Prigen, Jawa Timur. Tempat ini menawarkan pengalaman unik untuk belajar tentang peternakan dan produk susu sambil menikmati suasana alam yang segar. Pengunjung dapat melihat secara langsung proses pengolahan susu dari sapi, mengamati kegiatan peternakan, dan bahkan berinteraksi dengan hewan-hewan ternak seperti sapi, kambing, dan kelinci. Selain itu, Cimory Dairy Land juga menyediakan berbagai wahana rekreasi seperti taman bermain anak, area piknik, dan restoran yang menyajikan beragam produk susu segar. Dengan suasana pedesaan yang tenang dan pemandangan alam yang indah, tempat ini cocok untuk dikunjungi bersama keluarga untuk belajar sambil berlibur.</p>
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
                    <p>Jl. Raya Prigen No.8, Plembon, Prigen, Kec. Prigen, Pasuruan, Jawa Timur 67157</p>
                  </div>
                  <div class="map-container" style="text-align: center; margin-top: 10px;">
                    <!-- <button class="show btn btn-info" style="margin-bottom: 10px;">Map</button> -->
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.027704605798!2d112.63782627495713!3d-7.680170176031174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d7149fab38d5%3A0x4e951b17a75a3175!2sDairyland%20Farm%20Theme%20Park%20Prigen!5e0!3m2!1sid!2sid!4v1717217640829!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://cimorydairyland.com/wisata/farmthemepark-prigen" target="_blank">
                <span class="icon icon-global" style="color:#F60"></span>
                </a>
                  <div class="services-content">
                    <p>Informasi Terkait Cimory Diary Prigen</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://wa.me/6281388938607" target="_blank">
                <span class="icon icon-phone" style="color:#F60"></span>
                </a>
                  <div class="services-content">
                    <p>+6281388938607</p>
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
                          <img src="images/foto/pendidikan/b1_1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/b2_2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/b1_1.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Desa Adat Kemiren</h2>
                <p>Desa Adat Kemiren merupakan sebuah desa adat yang terletak di Kecamatan Glagah, Banyuwangi, Jawa Timur. Desa ini dikenal karena mempertahankan keaslian budaya Osing, salah satu suku asli Banyuwangi. Kemiren adalah destinasi yang menarik bagi wisatawan yang ingin menelusuri keunikan budaya lokal. Di sini, pengunjung dapat melihat rumah tradisional Osing, mempelajari kegiatan sehari-hari masyarakat, serta mencicipi kuliner khas seperti jajanan tradisional. Desa Adat Kemiren juga sering menggelar berbagai acara budaya dan kesenian untuk memperkenalkan kekayaan budaya lokal kepada pengunjung.</p>
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
                    <p>Jl. Perkebunan Kalibendo no. 238</p>
                  </div>
                  <div class="map-container" style="text-align: center; margin-top: 10px;">
                    <!-- <button class="show btn btn-info" style="margin-bottom: 10px;">Map</button> -->
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15795.918562286493!2d114.3094792!3d-8.2048011!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd14ff392960cdb%3A0xdc2aee3b56f0e34b!2sKawasan%20Desa%20Wisata!5e0!3m2!1sid!2sid!4v1717217758072!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://digitiket.com/v/detail/desa-wisata-osing-kemiren" target="_blank">
                <span class="icon icon-global" style="color:#F60"></span>
                </a>
                <div class="services-content">
                    <p>Informasi Terkait Desa Adat Kemiren</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://wa.me6281259120023" target="_blank">
                <span class="icon icon-phone" style="color:#F60"></span>
                </a>
                  <div class="services-content">
                    <p>+6281259120023</p>
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
                          <img src="images/foto/pendidikan/c1_1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/c2_2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/pendidikan/c1_1.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Pusat Penelitian Kopi dan Kakao</h2>
                <p>Pusat Penelitian Kopi dan Kakao Jember merupakan sebuah lembaga riset yang berfokus pada pengembangan dan inovasi dalam bidang kopi dan kakao. Terletak di Jember, Jawa Timur, pusat ini menjadi pusat studi dan eksperimen untuk meningkatkan kualitas dan produktivitas kopi serta kakao. Dengan berbagai kegiatan riset dan pengembangan, pusat ini bertujuan untuk mendukung pertumbuhan industri kopi dan kakao di daerah tersebut serta memberikan kontribusi terhadap pengembangan petani lokal dan ekonomi regional.</p>
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
                    <p>Kaliwining, Gebang, Nogosari, Rambipuji, Jember Regency, East Java 68175</p>
                  </div>
                  <div class="map-container" style="text-align: center; margin-top: 10px;">
                    <!-- <button class="show btn btn-info" style="margin-bottom: 10px;">Map</button> -->
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15795.918562286493!2d114.3094792!3d-8.2048011!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd14ff392960cdb%3A0xdc2aee3b56f0e34b!2sKawasan%20Desa%20Wisata!5e0!3m2!1sid!2sid!4v1717217758072!5m2!1sid!2sidhttps://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63175.254218111004!2d113.53626!3d-8.257587!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd69064ee50934d%3A0x64d6cf6333849798!2sPusat%20Penelitian%20Kopi%20dan%20Kakao%20Indonesia!5e0!3m2!1sid!2sid!4v1717217799401!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://www.catatannobi.com/2019/07/pusat-penelitian-kopi-dan-kakao-jember" target="_blank">
                <span class="icon icon-map" style="color:#F60"></span>
                </a>
                  <div class="services-content">
                    <p>Informasi Terkait Pusat Penelitian Kopi dan Kakao</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> 
                <span class="icon icon-envelope" style="color:#F60"></span>
                <div class="services-content">
                <p><a href="mailto: iccri@iccri.net"> iccri@iccri.net</a></p>
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
<!-- services section --> 
<!-- work section -->
<!-- overlay --> 
<!-- work section --> 
<!-- our team section -->
<!-- our team section --> 
<!-- Testimonials section -->
<!-- Testimonials section --> 
<!-- contact section -->
<!-- contact section --> 

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