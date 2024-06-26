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
                    <span class="icon icon-map" style="color:#c46b37"></span>
                    </a>
                    <div class="services-content">
                      <p>Jl. Raya Candi V No.5D, Doro, Karangwidoro</p>
                      <button onclick="toggleMapCandi()">View Map</button>
                    <iframe class="mapcandi" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3978178277544!2d112.59860809999999!3d-7.957776099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78826723d1a95d%3A0x95fdf34c20fb4d51!2sCandi%20Badut!5e0!3m2!1sid!2sid!4v1717216744527!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                    <div id="mapcandi" style="display: none;">
                  </div>
                  
                  </div>  
                </div>

                <script>
        function toggleMapCandi() {
            var mapFrame = document.querySelector('.mapcandi');
            if (mapFrame.style.display === "none" || mapFrame.style.display === "") {
                mapFrame.style.display = "block";
            } else {
                mapFrame.style.display = "none";
            }
        }
    </script>



    <style>
  .services-content button {
    background-color: #9e4817;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 10px;
    font-size: 16px;
  }

  .services-content button:hover {
    background-color: #e55500;
  }

  #more-details-candi {
    margin-top: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    background-color: #f9f9f9;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }

  table, th, td {
    border: 1px solid #ddd;
  }

  th, td {
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }
  .services-content ul {
      text-align: left;
      padding-left: 20px;
    }
  
</style>
                  
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://salsawisata.com/candi-badut/" target="_blank">
                <span class="icon icon-global" style="color:#c46b37"></span>
                </a>
                <div class="services-content">
                    <p>Informasi Terkait Candi Badut</p>
                    <button onclick="toggleDetailsCandi()">View More</button>
    <div id="more-details-candi" style="display: none;">
      <h3>Rincian Harga Tiket</h3>
      <table>
        <thead>
          <tr>
            <th>Kategori</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tiket Masuk</td>
            <td>Rp 5.000 s/d Rp 20.000/orang</td>
          </tr>
        </tbody>
      </table>
      <h3>Jam Operasional</h3>
      <table>
        <thead>
          <tr>
            <th>Hari</th>
            <th>Waktu</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Setiap Hari</td>
            <td>07.00 - 16.00 WIB</td>
          </tr>
        </tbody>
      </table>
      <h3>Transportasi yang Digunakan</h3>
      <ul>
              <li><strong>Kendaraan Pribadi:</strong> Anda dapat menggunakan kendaraan pribadi, baik mobil maupun motor, untuk mencapai Candi Badut. Rute yang umum adalah dari pusat kota Malang.</li>
              <li><strong>Transportasi Umum:</strong> Anda dapat menggunakan angkutan kota atau bus dari Malang menuju Candi Badut. Dari terminal atau stasiun, lanjutkan dengan ojek atau taksi.</li>
              <li><strong>Jasa Tur:</strong> Terdapat penyedia jasa tur yang menawarkan paket perjalanan ke Candi Badut yang sudah mencakup transportasi dan pemandu wisata.</li>
            </ul>
    </div>
  </div>
</div>

<script>
  function toggleDetailsCandi() {
    var details = document.getElementById('more-details-candi');
    if (details.style.display === 'none' || details.style.display === '') {
      details.style.display = 'block';
    } else {
      details.style.display = 'none';
    }
  }
</script>

                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://wa.me6281259120023" target="_blank">
                <span class="icon icon-phone" style="color:#c46b37"></span>
                </a>
                  <div class="services-content">
                    <p>+628112939969</p>
                    <button onclick="window.location.href='https://wa.me/628112939969';" style="background-color: #9e4817; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; margin-top: 10px; font-size: 16px;">Contact</button>
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
                    <span class="icon icon-map" style="color:#c46b37"></span>
                    </a>
                    <div class="services-content">
                      <p>Jl. Raya Buduran - Jembatan Layang, Bedrek</p>
                      <button onclick="toggleMapTantular()">View Map</button>
                    <iframe class="maptantular" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2851918350234!2d112.720328!3d-7.433661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f963d2d4fb4d%3A0xfd521173211bad9f!2sMuseum%20Mpu%20Tantular!5e0!3m2!1sid!2sid!4v1717217486900!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                    <div id="maptantular" style="display: none;">
                  </div>
                  
                  </div>  
                </div>

                <script>
        function toggleMapTantular() {
            var mapFrame = document.querySelector('.maptantular');
            if (mapFrame.style.display === "none" || mapFrame.style.display === "") {
                mapFrame.style.display = "block";
            } else {
                mapFrame.style.display = "none";
            }
        }
    </script>



    <style>
  .services-content button {
    background-color: #9e4817;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 10px;
    font-size: 16px;
  }

  .services-content button:hover {
    background-color: #e55500;
  }

  #more-details-tantular {
    margin-top: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    background-color: #f9f9f9;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }

  table, th, td {
    border: 1px solid #ddd;
  }

  th, td {
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }
  .services-content ul {
      text-align: left;
      padding-left: 20px;
    }
  
</style>
                  
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://museummputantular.com/" target="_blank">
                <span class="icon icon-global" style="color:#c46b37"></span>
                </a>
                <div class="services-content">
                    <p>Informasi Terkait Candi Mpu Tantular</p>
                    <button onclick="toggleDetailsTantular()">View More</button>
    <div id="more-details-tantular" style="display: none;">
      <h3>Rincian Harga Tiket</h3>
      <table>
        <thead>
          <tr>
            <th>Kategori</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Dewasa</td>
            <td>Rp 4.000/orang</td>
          </tr>
          <tr>
            <td>Anak - Anak</td>
            <td>Rp 3.000/malam</td>
          </tr>
        </tbody>
      </table>
      <h3>Jam Operasional</h3>
      <table>
        <thead>
          <tr>
            <th>Hari</th>
            <th>Waktu</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Senin dan libur nasional</td>
            <td>Tutup</td>
          </tr>
          <tr>
            <td>Selasa - Kamis</td>
            <td>08.00 - 15.00 WIB</td>
          </tr>
          <tr>
            <td>Jumat</td>
            <td>08.00 - 14.00 WIB</td>
          </tr>
          <tr>
            <td>Sabtu</td>
            <td>08.00 - 12.30 WIB</td>
          </tr>
          <tr>
            <td>Minggu</td>
            <td>08.00 - 13.30 WIB</td>
          </tr>
        </tbody>
      </table>
      <h3>Transportasi yang Digunakan</h3>
      <ul>
              <li><strong>Kendaraan Pribadi:</strong> Anda dapat menggunakan kendaraan pribadi, baik mobil maupun motor, untuk mencapai Museum Mpu Tantular. Rute yang umum adalah dari pusat kota Surabaya atau Sidoarjo.</li>
              <li><strong>Transportasi Umum:</strong> Anda dapat menggunakan angkutan kota atau bus dari Surabaya menuju Museum Mpu Tantular. Dari terminal atau stasiun, lanjutkan dengan ojek atau taksi.</li>
              <li><strong>Jasa Tur:</strong> Terdapat penyedia jasa tur yang menawarkan paket perjalanan ke Museum Mpu Tantular yang sudah mencakup transportasi dan pemandu wisata.</li>
            </ul>
    </div>
  </div>
</div>

<script>
  function toggleDetailsTantular() {
    var details = document.getElementById('more-details-tantular');
    if (details.style.display === 'none' || details.style.display === '') {
      details.style.display = 'block';
    } else {
      details.style.display = 'none';
    }
  }
</script>

                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://museummputantular.com/kontak-kami/" target="_blank">
                <span class="icon icon-phone" style="color:#c46b37"></span>
                </a>
                  <div class="services-content">
                    <p>+6281259120023</p>
                    <button onclick="window.location.href='https://museummputantular.com/kontak-kami/';" style="background-color: #9e4817; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; margin-top: 10px; font-size: 16px;">Contact</button>
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
                    <span class="icon icon-map" style="color:#c46b37"></span>
                    </a>
                    <div class="services-content">
                      <p>Jl. Pemuda No.39, Embong Kaliasin</p>
                      <button onclick="toggleMapKapal()">View Map</button>
                    <iframe class="mapkapal" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.782770796426!2d112.7502803!3d-7.265544699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9628df520e5%3A0x577443720136fb0b!2sMonumen%20Kapal%20Selam%20Surabaya!5e0!3m2!1sid!2sid!4v1717217536230!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                    <div id="mapkapal" style="display: none;">
                  </div>
                  
                  </div>  
                </div>

                <script>
        function toggleMapKapal() {
            var mapFrame = document.querySelector('.mapkapal');
            if (mapFrame.style.display === "none" || mapFrame.style.display === "") {
                mapFrame.style.display = "block";
            } else {
                mapFrame.style.display = "none";
            }
        }
    </script>



    <style>
  .services-content button {
    background-color: #9e4817;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 10px;
    font-size: 16px;
  }

  .services-content button:hover {
    background-color: #e55500;
  }

  #more-details-kapal {
    margin-top: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    background-color: #f9f9f9;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }

  table, th, td {
    border: 1px solid #ddd;
  }

  th, td {
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }
  .services-content ul {
      text-align: left;
      padding-left: 20px;
    }
  
</style>
<div class="col-md-4 col-sm-6 services text-center"> 
                <a href="http://www.monkasel-surabaya.com/" target="_blank">
                <span class="icon icon-global" style="color:#c46b37"></span>
                </a>
                <div class="services-content">
                    <p>Informasi Terkait Monumen Kapal Surabaya</p>
                      <button onclick="toggleDetailsKapal()">View More</button>
    <div id="more-details-kapal" style="display: none;">
      <h3>Rincian Harga Tiket</h3>
      <table>
        <thead>
          <tr>
            <th>Kategori</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tiket Masuk</td>
            <td>Rp 15.000/orang</td>
          </tr>
        </tbody>
      </table>
      <h3>Jam Operasional</h3>
      <table>
        <thead>
          <tr>
            <th>Hari</th>
            <th>Waktu</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Setiap Hari</td>
            <td>08.00 - 21.00</td>
          </tr>
        </tbody>
      </table>
      <h3>Transportasi yang Digunakan</h3>
      <ul>
              <li><strong>Kendaraan Pribadi:</strong> Anda dapat menggunakan kendaraan pribadi, baik mobil maupun motor, untuk mencapai Monumen Kapal Selam. Rute yang umum adalah dari pusat kota Surabaya menuju Jl. Pemuda No.39, Embong Kaliasin, Kec. Genteng, Kota Surabaya.</li>
              <li><strong>Transportasi Umum:</strong> Anda dapat menggunakan bus atau angkutan kota menuju Stasiun Gubeng atau Terminal Joyoboyo, kemudian melanjutkan perjalanan dengan taksi atau ojek.</li>
              <li><strong>Jasa Tur:</strong> Terdapat penyedia jasa tur yang menawarkan paket perjalanan ke Monumen Kapal Selam yang sudah mencakup transportasi dan pemandu wisata.</li>
            </ul>
    </div>
  </div>
</div>

<script>
  function toggleDetailsKapal() {
    var details = document.getElementById('more-details-kapal');
    if (details.style.display === 'none' || details.style.display === '') {
      details.style.display = 'block';
    } else {
      details.style.display = 'none';
    }
  }
</script>

                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="mailto:monumenkapalselamsby@gmail.com" target="_blank">
                <span class="icon icon-envelope" style="color:#c46b37"></span>
                </a>
                  <div class="services-content">
                    <p>+monumenkapalselamsby@gmail.com</p>
                    <button onclick="window.location.href='mailto:monumenkapalselamsby@gmail.com';" style="background-color: #9e4817; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; margin-top: 10px; font-size: 16px;">Contact</button>
                  </div>
                </div>
              </div>
            </div>
      </section>
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
                    <span class="icon icon-map" style="color:#c46b37"></span>
                    </a>
                    <div class="services-content">
                      <p>Jl. Untung Suropati No.II, Pelem II</p>
                      <button onclick="toggleMapBenteng()">View Map</button>
                    <iframe class="mapbenteng" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.6753322433024!2d111.454697!3d-7.390230700000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79e7944c12cf99%3A0x2a7a16cf6156d5a5!2sBenteng%20Pendem%20Van%20Den%20Bosch!5e0!3m2!1sid!2sid!4v1717217565841!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                    <div id="mapbenteng" style="display: none;">
                  </div>
                  
                  </div>  
                </div>

                <script>
        function toggleMapBenteng() {
            var mapFrame = document.querySelector('.mapbenteng');
            if (mapFrame.style.display === "none" || mapFrame.style.display === "") {
                mapFrame.style.display = "block";
            } else {
                mapFrame.style.display = "none";
            }
        }
    </script>



    <style>
  .services-content button {
    background-color: #9e4817;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 10px;
    font-size: 16px;
  }

  .services-content button:hover {
    background-color: #e55500;
  }

  #more-details-benteng {
    margin-top: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    background-color: #f9f9f9;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }

  table, th, td {
    border: 1px solid #ddd;
  }

  th, td {
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }
  .services-content ul {
      text-align: left;
      padding-left: 20px;
    }
</style>
                 
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://bappelitbang.ngawikab.go.id/elementor-2109/" target="_blank">
                <span class="icon icon-global" style="color:#c46b37"></span>
                </a>
                  <div class="services-content">
                    <p>Informasi Terkait Cimory Diary Prigen</p>
                    <button onclick="toggleDetailsBenteng()" style="background-color: #9e4817; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; margin-top: 10px; font-size: 16px;">View More</button>
    <div id="more-details-benteng" style="display: none;">
      <h3>Rincian Harga Tiket</h3>
      <table border="1" style="width:100%; border-collapse: collapse;">
        <thead>
          <tr>
            <th>Restribusi</th>
            <th>Tarif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tiket Masuk</td>
            <td>Rp 5.000/orang</td>
          </tr>
          <tr>
            <td>Parkir Motor</td>
            <td>Rp 2.000</td>
          </tr>
          <tr>
            <td>Parkir Mobil</td>
            <td>Rp 5.000</td>
          </tr>
        </tbody>
      </table>
      <h3>Jam Operasional</h3>
      <table border="1" style="width:100%; border-collapse: collapse;">
        <thead>
          <tr>
            <th>Hari</th>
            <th>Waktu</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Setiap Hari</td>
            <td>08.00 17.00 WIB</td>
          </tr>
        </tbody>
      </table>
      <h3>Transportasi yang Digunakan</h3>
      <ul>
              <li><strong>Kendaraan Pribadi:</strong> Anda dapat menggunakan kendaraan pribadi, baik mobil maupun motor, untuk mencapai Benteng Van den Bosch. Rute yang umum adalah dari Madiun atau Ngawi menuju Jl. Untung Suropati, Ngawi.</li>
              <li><strong>Transportasi Umum:</strong> Anda dapat menggunakan bus dari Surabaya atau Solo menuju Terminal Ngawi. Dari Terminal Ngawi, Anda bisa melanjutkan perjalanan menggunakan ojek atau angkutan kota.</li>
              <li><strong>Jasa Tur:</strong> Terdapat penyedia jasa tur yang menawarkan paket perjalanan ke Benteng Van den Bosch yang sudah mencakup transportasi dan pemandu wisata.</li>
            </ul>
    </div>
  </div>
</div>

<script>
  function toggleDetailsBenteng() {
    var details = document.getElementById('more-details-benteng');
    if (details.style.display === 'none' || details.style.display === '') {
      details.style.display = 'block';
    } else {
      details.style.display = 'none';
    }
  }
</script>
<style>
  .services-content button {
    background-color: #9e4817;;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 10px;
    font-size: 16px;
  }

  .services-content button:hover {
    background-color: #e55500;
  }

  #more-details-benteng {
    margin-top: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    background-color: #f9f9f9;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }

  table, th, td {
    border: 1px solid #ddd;
  }

  th, td {
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
  }
  .services-content ul {
      text-align: left;
      padding-left: 20px;
    }
  
</style>
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="mailto:bappelitbang@ngawikab.go.id" target="_blank">
                <span class="icon icon-envelope" style="color:#c46b37"></span>
                </a>
                  <div class="services-content">
                    <p>bappelitbang@ngawikab.go.id</p>
                    <button onclick="window.location.href='mailto:bappelitbang@ngawikab.go.id';" style="background-color: #9e4817; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; margin-top: 10px; font-size: 16px;">Contact</button>
                  </div>
                </div>
              </div>
            </div>
      </section>
  </div>
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