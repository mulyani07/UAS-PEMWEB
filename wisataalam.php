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
      <h6>WISATA ALAM</h6>
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
                          <img src="images/foto/alam/a1_1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/a2_2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/a1_1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/a2_2.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Kawah Ijen</h2>
                <p>Kawah Ijen adalah sebuah kawah vulkanik yang terletak di Banyuwangi, Jawa Timur. Salah satu daya tarik utamanya adalah fenomena blue fire yang terjadi di malam hari, dihasilkan oleh pembakaran belerang di dalam kawah yang menciptakan cahaya biru yang memukau. Selain itu, Kawah Ijen juga terkenal dengan danau asamnya yang berwarna hijau kebiruan, serta pemandangan alam yang menakjubkan di sekitarnya. Pendakian ke Kawah Ijen menawarkan pengalaman petualangan yang menarik dan memberikan kesempatan untuk melihat aktivitas kawah vulkanik yang unik.</p>
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
                    <p>kawasan hutan petak C Desa Kalianyar, Kecamatan Sempol, Kabupaten Bondowoso.</p>
                  </div>
                  <div class="map-container" style="text-align: center; margin-top: 10px;">
                    <!-- <button class="show btn btn-info" style="margin-bottom: 10px;">Map</button> -->
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31603.340147832554!2d114.2527131!3d-8.0588236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd149f2110ae607%3A0x7c04ef029d5e39bc!2sGn.%20Ijen!5e0!3m2!1sid!2sid!4v1717212245905!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                  </div>  
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://www.tiket.bbksdajatim.org/" target="_blank">
                <span class="icon icon-global" style="color:#F60"></span>
                </a>
                  <div class="services-content">
                    <p>Informasi terkait kawah ijen</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://wa.me/6281220180930" target="_blank">
                <span class="icon icon-phone" style="color:#F60"></span>
                </a>
                  <div class="services-content">
                    <p>+6281220180930</p>
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
                          <img src="images/foto/alam/b1_1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/b2_2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/b1_1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/b2_2.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Gunung Bromo</h2>
                <p>Gunung Bromo adalah salah satu gunung berapi paling ikonik di Indonesia yang terletak di Taman Nasional Bromo Tengger Semeru, Jawa Timur. Gunung ini dikenal dengan keindahan alamnya yang dramatis, terutama saat matahari terbit di atasnya. Kawah Bromo yang aktif mengeluarkan asap putih dan lautan pasir luas di sekitarnya menciptakan pemandangan yang spektakuler. Pendakian ke puncak Gunung Bromo juga populer bagi para petualang yang ingin menikmati keindahan alam dari ketinggian. </p>
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
                    <p>Cemoro Lawang, Desa Ngadisari, Kec. Sukapura, Kabupaten Probolinggo , Jawa Timur.</p>
                  </div>
                  <div class="map-container" style="text-align: center; margin-top: 10px;">
                    <!-- <button class="show btn btn-info" style="margin-bottom: 10px;">Map</button> -->
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.18004244916!2d112.95301219999999!3d-7.94249345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd637aaab794a41%3A0xada40d36ecd2a5dd!2sGn.%20Bromo!5e0!3m2!1sid!2sid!4v1717215707834!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://www.bromo.my.id/p/paket-wisata-gunung-bromo.html" target="_blank">
                  <span class="icon icon-global" style="color:#F60"></span>
                  </a>
                  <div class="services-content">
                    <p>Informasi terkait gunung bromo</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://wa.me/6282386300500" target="_blank">
                  <span class="icon icon-phone" style="color:#F60"></span>
                  </a>
                  <div class="services-content">
                    <p>+6282386300500</p>
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
                          <img src="images/foto/alam/c1_1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/c2_2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/c1_1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/c2_2.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Pantai Papuma</h2>
                <p>Pantai Papuma, terletak di Desa Lojejer, Kecamatan Wuluhan, Kabupaten Jember, Jawa Timur, adalah salah satu destinasi pantai yang eksotis di Indonesia. Pantai ini terkenal dengan pasir putihnya yang lembut, tebing-tebing karang yang menjulang tinggi, dan pemandangan laut yang memukau. Pengunjung dapat menikmati suasana pantai yang tenang sambil menikmati panorama laut yang luas. Pantai Papuma juga populer sebagai tempat untuk menikmati matahari terbit yang indah.</p>
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
                    <p>Desa Lolejer, Kecamatan Wuluhan, Jember, Jawa Timur.</p>
                  </div>
                  <div class="map-container" style="text-align: center; margin-top: 10px;">
?                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7893.401791346161!2d113.5559703!3d-8.4310054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd682a6a4b5cd8d%3A0xb9c242f3a09e2d2e!2sPantai%20Papuma!5e0!3m2!1sid!2sid!4v1717214988865!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center">
                  <a href="https://www.nativeindonesia.com/pantai-papuma/" target="_blank">
                  <span class="icon icon-global" style="color:#F60"></span>
                  </a>
                  <div class="services-content">
                    <p>Informasi Terkait Pantai Papuma</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center">
                <span class="icon icon-envelope" style="color:#F60"></span>
                <div class="services-content">
                <p><a href="mailto:cs.papuma@gmail.com">cs.papuma@gmail.com</a></p>
              </div>
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
                          <img src="images/foto/alam/d1_1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/d2_2.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/d1_1.jpg" style="height: 100%">
                      </li>
                      <li>
                          <img src="images/foto/alam/d2_2.jpg" style="height: 100%">
                      </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
            <div class="col-md-6">
                <h2>Taman Nasional Baluran</h2>
                <p>Taman Nasional Baluran, terletak di Banyuwangi, Jawa Timur, dikenal sebagai "Savannah of Java" karena pemandangan savananya yang luas. Taman nasional ini menawarkan lanskap yang spektakuler, dengan padang rumput yang menghampar, hutan hijau, dan gunung-gunung batu kapur yang menjulang. Pengunjung dapat menemukan beragam satwa liar di dalam taman, termasuk banteng, rusa, kijang, dan berbagai jenis burung langka. Taman Nasional Baluran adalah tempat yang sempurna bagi para pecinta alam untuk menikmati keindahan alam Jawa Timur dan menikmati petualangan di alam liar yang belum terjamah.</p>
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
                    <p>Area Hutan/Kebun, Sumberwaru, Kec. Banyuputih, Kabupaten Situbondo, Jawa Timur</p>
                  </div>
                  <div class="map-container" style="text-align: center; margin-top: 10px;">
                    <!-- <button class="show btn btn-info" style="margin-bottom: 10px;">Map</button> -->
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.61587116701!2d114.3875!3d-7.8304167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1249454d7c085%3A0x67067c7ed3eced4b!2sTaman%20Nasional%20Baluran!5e0!3m2!1sid!2sid!4v1717215864806!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://balurannationalpark.id/" target="_blank">
                  <span class="icon icon-global" style="color:#F60"></span>
                </a>
                  <div class="services-content">
                    <p>Informasi terkait taman nasional baluran</p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center">
                <span class="icon icon-phone" style="color:#F60"></span>
                <div class="services-content">
                <p><a href="tel:+62333461650">(0333) 461650</a></p>
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