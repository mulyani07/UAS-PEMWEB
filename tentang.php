<?php
session_start();
$sesiData = !empty($_SESSION['sesiData']) ? $_SESSION['sesiData'] : '';
if (!empty($sesiData['status']['msg'])) {
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
                  <a style="color:black" href="wisataalam.php">Wisata Alam</a>
                </li>
                <li>
                  <a style="color:black" href="wisatasejarah.php">Wisata Sejarah</a>
                </li>
                <li>
                  <a style="color:black" href="wisatapendidikan.php">Wisata Pendidikan</a>
                </li>
              </ul>
            </li>
            <li><a href="artikel.php">Artikel</a></li>
            <li><a href="galeri.php">Galeri</a></li>
            <li><a href="testimonial.php">Testimonial</a></li>
            <li><a href="tentang.php">Tentang Kami</a></li>
            <?php
            if (!isset($_SESSION['is_login'])) {
            ?>
              <li>
                <a href="login.php">Login</a>
              </li>
            <?php } else { ?>
              <li>
                <a href="akunuser.php?logoutSubmit=1" class="logout">Logout (<?= $_SESSION['namauser']; ?>)</a>
              </li><?php } ?>
          </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a>
      </div>
    </header>
  <!-- header section -->
  <!-- intro section -->
  <main>
    <section id="intro">
      <div class="container">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h6 class="title-intro">TENTANG KAMI</h6>
          <br>
          <?php
          if (isset($_SESSION['admin'])) {
          ?>
            <p>Selamat datang di Destinasi Jatim, platform terpercaya yang menyediakan rekomendasi objek wisata terbaik di Jawa Timur. Kami berdedikasi untuk membantu Anda menemukan keindahan tersembunyi dan keajaiban alam di setiap sudut Jawa Timur. Mulai dari pantai eksotis, pegunungan menakjubkan, hingga warisan budaya yang kaya, kami siap menjadi panduan Anda dalam menjelajahi pesona yang ada.
              Tim kami terdiri dari para ahli pariwisata yang memiliki pengetahuan mendalam dan pengalaman luas dalam industri ini. Dengan semangat dan komitmen untuk memberikan informasi akurat dan terkini, kami memastikan setiap rekomendasi yang kami berikan dapat memenuhi kebutuhan liburan Anda.
              Mari bergabung dengan kami dan temukan petualangan seru serta pengalaman tak terlupakan di Jawa Timur. Bersama Destinasi Jatim, perjalanan Anda dimulai di sini.</p>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- intro section -->
    <!-- services section -->
    <section id="services" class="services service-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-map-pin" style="color:#be9f4b"></span>
            <div class="services-content">
              <h5>OUR OFFICE LOCATION</h5>
              <p>HPCF+4FC, Jl. Langgar, Sawahan, Panggung, Kec. Buduran, Kabupaten Sidoarjo, Jawa Timur 61252</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#be9f4b"></span>
            <div class="services-content">
              <h5>EMAIL</h5>
              <p>contact@destinasijatim.com</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#be9f4b"></span>
            <div class="services-content">
              <h5>PHONE NUMBER</h5>
              <p>(031)683427159</p>
            </div>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.290416852358!2d112.72046885541994!3d-7.261020199999977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f95df0933beb%3A0x5d51891bfa1d8e8c!2sPakuwon%20Tower!5e0!3m2!1sid!2sid!4v1716128647498!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </section>
  </main>
  <!-- services section -->
  <!-- work section -->
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
          <a style="padding:20px" ; href="#"><i class="fa fa-facebook"></i></a>
          <a style="padding:20px" ; href="#"><i class="fa fa-twitter"></i></a>
          <a style="padding:20px" ; href="#"><i class="fa fa-linkedin"></i></a>
          <a style="padding:20px" ; href="#"><i class="fa fa-google-plus"></i></a>
          <br>
          <br>
          <p>Copyright © 20123 Destinasi Jatim.com All Rights Reserved. Made by Vitto
        </div>
      </div>
    </div>
  </footer>
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