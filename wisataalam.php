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
        <div class="col-md-8 col-md-offset-2 text-center"  style="margin-bottom: 2rem;">
          <h6 class="title-intro">WISATA ALAM</h6>
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
                <span class="icon icon-map" style="color:#c46b37"></span>
                </a>
                <div class="services-content">
                  <p>kawasan hutan petak C Desa Kalianyar</p>
                  <button onclick="toggleMap()">View Map</button>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31603.340147832554!2d114.2527131!3d-8.0588236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd149f2110ae607%3A0x7c04ef029d5e39bc!2sGn.%20Ijen!5e0!3m2!1sid!2sid!4v1717212245905!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                    <div id="map" style="display: none;">
                  </div>
                  
                  </div>  
                </div>

                <script>
        function toggleMap() {
            var mapFrame = document.querySelector('.map');
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

  #more-details {
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
                <a href="https://www.tiket.bbksdajatim.org/" target="_blank">
                <span class="icon icon-global" style="color:#c46b37;"></span>
                </a>
                  <div class="services-content">
                    <p>Informasi terkait kawah ijen</p>
                    <button onclick="toggleDetails()">View More</button>
    <div id="more-details" style="display: none;">
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
            <td>Wisatawan Domestik</td>
            <td>Rp 5.000/orang</td>
          </tr>
          <tr>
            <td>Wisatawan Mancanegara</td>
            <td>Rp 100.000/orang</td>
          </tr>
        </tbody>
      </table>
      <h3>Harga Parkir Kendaraan</h3>
      <table>
        <thead>
          <tr>
            <th>Jenis Kendaraan</th>
            <th>Harga Parkir</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Motor</td>
            <td>Rp 2.000</td>
          </tr>
          <tr>
            <td>Mobil</td>
            <td>Rp 5.000</td>
          </tr>
          <tr>
            <td>Bus</td>
            <td>Rp 10.000</td>
          </tr>
        </tbody>
      </table>
      <h3>Transportasi yang Digunakan</h3>
      <ul>
              <li><strong>Kendaraan Pribadi:</strong> Anda dapat menggunakan kendaraan pribadi, baik mobil maupun motor, untuk mencapai Kawah Ijen. Rute yang umum adalah dari Banyuwangi atau Bondowoso menuju Paltuding, titik awal pendakian ke Kawah Ijen.</li>
              <li><strong>Transportasi Umum:</strong> Anda dapat menggunakan bus dari Surabaya atau Bali menuju Banyuwangi. Dari Banyuwangi, Anda bisa melanjutkan perjalanan menggunakan ojek atau menyewa kendaraan untuk menuju Paltuding.</li>
              <li><strong>Jasa Tur:</strong> Terdapat banyak penyedia jasa tur yang menawarkan paket perjalanan ke Kawah Ijen yang sudah mencakup transportasi dan pemandu wisata.</li>
            </ul>
    </div>
  </div>
</div>

<script>
  function toggleDetails() {
    var details = document.getElementById('more-details');
    if (details.style.display === 'none' || details.style.display === '') {
      details.style.display = 'block';
    } else {
      details.style.display = 'none';
    }
  }
</script>

                <div class="col-md-4 col-sm-6 services text-center"> 
                <span class="icon icon-phone" style="color:#9e4817; font-size: 50px;"></span>
                </a>
                <div class="services-content">
               <p>+6281220180930</p>
              <button onclick="window.location.href='https://wa.me/6281220180930';" style="background-color: #9e4817; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; margin-top: 10px; font-size: 16px;">Contact</button>
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
            <div class="col-md-4 col-sm-6 services text-center"> 
                <span class="icon icon-map" style="color:#c46b37"></span>
                </a>
                  <div class="services-content">
                    <p>Area Gn. Bromo, Podokoyo, Kec. Tosari, Pasuruan</p>
                    <button onclick="toggleMapBromo()">View Map</button>
                    <iframe class="mapbromo" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.18004244916!2d112.95301219999999!3d-7.94249345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd637aaab794a41%3A0xada40d36ecd2a5dd!2sGn.%20Bromo!5e0!3m2!1sid!2sid!4v1717215707834!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                    <div id="mapbromo" style="display: none;">
                  </div>
                  
                  </div>  
                </div>

                <script>
        function toggleMapBromo() {
            var mapFrame = document.querySelector('.mapbromo');
            if (mapFrame.style.display === "none" || mapFrame.style.display === "") {
                mapFrame.style.display = "block";
            } else {
                mapFrame.style.display = "none";
            }
        }
    </script>

                   
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://www.bromo.my.id/p/paket-wisata-gunung-bromo.html" target="_blank">
                  <span class="icon icon-global" style="color:#c46b37"></span>
                  </a>
                  <div class="services-content">
                    <p>Informasi terkait gunung bromo</p>
                    <button onclick="toggleDetailsBromo()" style="background-color: #9e4817; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; margin-top: 10px; font-size: 16px;">View More</button>
    <div id="more-details-bromo" style="display: none;">
      <h3>Rincian Harga Tiket</h3>
      <table border="1" style="width:100%; border-collapse: collapse;">
        <thead>
          <tr>
            <th>Kategori</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Wisatawan Domestik</td>
            <td>Rp 29.000 s/d Rp34.000 orang</td>
          </tr>
          <tr>
            <td>Wisatawan Mancanegara</td>
            <td>Rp 220.000 s/d Rp320.000/orang</td>
          </tr>
        </tbody>
      </table>
      <h3>Harga Parkir Kendaraan</h3>
      <table border="1" style="width:100%; border-collapse: collapse;">
        <thead>
          <tr>
            <th>Jenis Kendaraan</th>
            <th>Harga Parkir</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Motor</td>
            <td>Rp 5.000</td>
          </tr>
          <tr>
            <td>Mobil</td>
            <td>Rp 10.000</td>
          </tr>
          <tr>
            <td>Bus</td>
            <td>Rp 15.000</td>
          </tr>
        </tbody>
      </table>
      <h3>Transportasi yang Digunakan</h3>
      <ul>
              <li><strong>Kendaraan Pribadi:</strong> Anda dapat menggunakan kendaraan pribadi, baik mobil maupun motor, untuk mencapai Gunung Bromo. Rute yang umum adalah dari Surabaya atau Malang menuju Probolinggo, lalu melanjutkan ke Gunung Bromo.</li>
              <li><strong>Transportasi Umum:</strong> Anda dapat menggunakan bus dari Surabaya atau Malang menuju Terminal Probolinggo. Dari Terminal Probolinggo, Anda bisa melanjutkan perjalanan menggunakan ojek atau menyewa kendaraan jeep untuk menuju Gunung Bromo.</li>
              <li><strong>Jasa Tur:</strong> Terdapat banyak penyedia jasa tur yang menawarkan paket perjalanan ke Gunung Bromo yang sudah mencakup transportasi dan pemandu wisata.</li>
            </ul>
    </div>
  </div>
</div>

<script>
  function toggleDetailsBromo() {
    var details = document.getElementById('more-details-bromo');
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

  #more-details-bromo {
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
                <a href="https://wa.me/6282386300500" target="_blank">
                  <span class="icon icon-phone" style="color:#c46b37"></span>
                  </a>
                  <div class="services-content">
                    <p>+6282386300500</p>
                    <button onclick="window.location.href='https://wa.me/6282386300500';" style="background-color: #9e4817; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; margin-top: 10px; font-size: 16px;">Contact</button>
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
            <div class="col-md-4 col-sm-6 services text-center"> 
                <span class="icon icon-map" style="color:#c46b37"></span>
                </a>
                  <div class="services-content">
                    <p>Desa Lojejer, Kecamatan Wuluhan</p>
                    <button onclick="toggleMapPapuma()">View Map</button>
                    <iframe class="mappapuma" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7893.401791346161!2d113.5559703!3d-8.4310054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd682a6a4b5cd8d%3A0xb9c242f3a09e2d2e!2sPantai%20Papuma!5e0!3m2!1sid!2sid!4v1717214988865!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                    <div id="mappapuma" style="display: none;">
                  </div>
                  
                </div>  
                </div>

                <script>
        function toggleMapPapuma() {
            var mapFrame = document.querySelector('.mappapuma');
            if (mapFrame.style.display === "none" || mapFrame.style.display === "") {
                mapFrame.style.display = "block";
            } else {
                mapFrame.style.display = "none";
            }
        }
    </script>

                
                <div class="col-md-4 col-sm-6 services text-center">
                  <a href="https://www.nativeindonesia.com/pantai-papuma/" target="_blank">
                  <span class="icon icon-global" style="color:#c46b37"></span>
                  </a>
                  <div class="services-content">
                    <p>Informasi Terkait Pantai Papuma</p>
                    <button onclick="toggleDetailsPapuma()" style="background-color: #9e4817; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; margin-top: 10px; font-size: 16px;">View More</button>
    <div id="more-details-papuma" style="display: none;">
      <h3>Rincian Harga Tiket</h3>
      <table border="1" style="width:100%; border-collapse: collapse;">
        <thead>
          <tr>
            <th>Kategori</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Wisatawan Domestik</td>
            <td>Rp 20.000/orang</td>
          </tr>
          <tr>
            <td>Wisatawan Mancanegara</td>
            <td>Rp 30.000/orang</td>
          </tr>
        </tbody>
      </table>
      <h3>Harga Parkir Kendaraan</h3>
      <table border="1" style="width:100%; border-collapse: collapse;">
        <thead>
          <tr>
            <th>Jenis Kendaraan</th>
            <th>Harga Parkir</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Motor</td>
            <td>Rp 5.000</td>
          </tr>
          <tr>
            <td>Mobil</td>
            <td>Rp 10.000</td>
          </tr>
          <tr>
            <td>Bus</td>
            <td>Rp 15.000</td>
          </tr>
        </tbody>
      </table>
      <h3>Transportasi yang Digunakan</h3>
      <ul>
              <li><strong>Kendaraan Pribadi:</strong> Anda dapat menggunakan kendaraan pribadi, baik mobil maupun motor, untuk mencapai Pantai Papuma. Rute yang umum adalah dari Jember menuju Pantai Papuma.</li>
              <li><strong>Transportasi Umum:</strong> Anda dapat menggunakan bus atau kereta api dari Surabaya atau Banyuwangi menuju Stasiun Jember. Dari Stasiun Jember, Anda bisa melanjutkan perjalanan menggunakan ojek atau menyewa kendaraan.</li>
              <li><strong>Jasa Tur:</strong> Terdapat banyak penyedia jasa tur yang menawarkan paket perjalanan ke Pantai Papuma yang sudah mencakup transportasi dan pemandu wisata.</li>
            </ul>
    </div>
  </div>
</div>

<script>
  function toggleDetailsPapuma() {
    var details = document.getElementById('more-details-papuma');
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

  #more-details-papuma {
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
                <span class="icon icon-envelope" style="color:#c46b37"></span>
                <div class="services-content">
                <p><a href="mailto:cs.papuma@gmail.com">cs.papuma@gmail.com</a></p>
                <button onclick="window.location.href='mailto:cs.papuma@gmail.com';" style="background-color: #9e4817; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; margin-top: 10px; font-size: 16px;">Contact</button>
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
            <div class="col-md-4 col-sm-6 services text-center"> 
                <span class="icon icon-map" style="color:#c46b37"></span>
                </a>
                  <div class="services-content">
                    <p>Banyuputih, Situbondo</p>
                    <button onclick="toggleMapBaluran()">View Map</button>
                    <iframe class="mapbaluran" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.61587116701!2d114.3875!3d-7.8304167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1249454d7c085%3A0x67067c7ed3eced4b!2sTaman%20Nasional%20Baluran!5e0!3m2!1sid!2sid!4v1717215864806!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0; display:none;" allowfullscreen></iframe>
                    <div id="mapbaluran" style="display: none;">
                  </div>
                  
                </div>  
                </div>

                <script>
        function toggleMapBaluran() {
            var mapFrame = document.querySelector('.mapbaluran');
            if (mapFrame.style.display === "none" || mapFrame.style.display === "") {
                mapFrame.style.display = "block";
            } else {
                mapFrame.style.display = "none";
            }
        }
    </script>

                  
                <div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://balurannationalpark.id/" target="_blank">
                  <span class="icon icon-global" style="color:#c46b37"></span>
                </a>
                  <div class="services-content">
                    <p>Informasi terkait taman nasional baluran</p>
                    <button onclick="toggleDetailsBaluran()" style="background-color: #9e4817; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; margin-top: 10px; font-size: 16px;">View More</button>
    <div id="more-details-baluran" style="display: none;">
      <h3>Rincian Harga Tiket</h3>
      <table border="1" style="width:100%; border-collapse: collapse;">
        <thead>
          <tr>
            <th>Kategori</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Wisatawan Domestik</td>
            <td>Rp 16.000/orang</td>
          </tr>
          <tr>
            <td>Wisatawan Mancanegara</td>
            <td>Rp 165.000/orang</td>
          </tr>
        </tbody>
      </table>
      <h3>Harga Parkir Kendaraan</h3>
      <table border="1" style="width:100%; border-collapse: collapse;">
        <thead>
          <tr>
            <th>Jenis Kendaraan</th>
            <th>Harga Parkir</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Motor</td>
            <td>Rp 5.000</td>
          </tr>
          <tr>
            <td>Mobil</td>
            <td>Rp 10.000</td>
          </tr>
          <tr>
            <td>Bus</td>
            <td>Rp 50.000</td>
          </tr>
        </tbody>
      </table>
      <h3>Transportasi yang Digunakan</h3>
      <p>Anda dapat mencapai Taman Nasional Baluran menggunakan berbagai jenis transportasi:</p>
      <ul>
              <li><strong>Kendaraan Pribadi:</strong> Anda dapat menggunakan kendaraan pribadi, baik mobil maupun motor, untuk mencapai Taman Nasional Baluran. Rute yang umum adalah dari Surabaya atau Banyuwangi menuju Situbondo.</li>
              <li><strong>Transportasi Umum:</strong> Anda dapat menggunakan bus dari Surabaya atau Banyuwangi menuju Terminal Situbondo. Dari Terminal Situbondo, Anda bisa melanjutkan perjalanan menggunakan ojek atau menyewa kendaraan.</li>
              <li><strong>Jasa Tur:</strong> Terdapat banyak penyedia jasa tur yang menawarkan paket perjalanan ke Taman Nasional Baluran yang sudah mencakup transportasi dan pemandu wisata.</li>
            </ul>
    </div>
  </div>
</div>

<script>
  function toggleDetailsBaluran() {
    var details = document.getElementById('more-details-baluran');
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

  #more-details-baluran {
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
</style>
                
<div class="col-md-4 col-sm-6 services text-center"> 
                <a href="https://wa.me/6282386300500" target="_blank">
                  <span class="icon icon-phone" style="color:#c46b37"></span>
                  </a>
                  <div class="services-content">
                    <p>+62333461650</p>
                    <button onclick="window.location.href='https://wa.me/62333461650';" style="background-color: #9e4817; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; margin-top: 10px; font-size: 16px;">Contact</button>
                  </div>
                </div>
              </div>
            </div>
            
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