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
#myvideo {
	position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 1;
}
</style>
</head>

<body>
<!-- header section -->
<section class="banner" role="banner" style="background-image: url('images/destinasijatim.jpg'); background-size: cover; background-position: center;">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="index.php">DESTINASI JATIM</a>
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
      <h3>GALLERY WISATA JATIM</h3>
      <p>BERIKUT ADALAH GALLERY FOTO WISATA YANG ADA DI JAWA TIMUR , TIDAK HANYA WISATA ALAM TETAPI WISATA BUDAYA DAN PENDIDIKAN</p> 
    </div>
  </div>
</section>
<!-- intro section --> 

<!-- work section -->

<section id="work" class="work work-section">
  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h3 style="font-weight: 500">KAWAH IJEN</h3>
    <h7>Berikut Adalah Gallery Wisata Alam Kawah Ijen Berupa Keindahan Alamnya Serta Spot Foto yang Menarik Untuk Dikunjungi</h7>
    <br>
    <br>
    <br>
  </div>
  <hr style="height:2px;width:100%;color:gray;background-color:gray">

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat = 'Kawah Ijen'"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-cover" style="width: 330px; height: 250px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
    <?php
  }
    ?>
  </div>

  <div class="container">
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat IN ('Blue Fire' , 'Sunrise Spot' , 'Latar Kawah Ijen' , 'Hutan Mati');"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-fill" style="width: 250px; height: 330px; padding: 10px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
    <?php
  }
    ?>
  </div>
  </div>

  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h3 style="font-weight: 500">GUNUNG BROMO</h3>
    <h7>Berikut Adalah Gallery Wisata Alam Gunung Bromo Berupa Keindahan Alamnya Serta Spot Foto yang Menarik Untuk Dikunjungi</h7>
    <br>
    <br>
    <br>
  </div>
  <hr style="height:2px;width:100%;color:gray;background-color:gray">

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat = 'Gunung Bromo'"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-cover" style="width: 330px; height: 250px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
    <?php
  }
    ?>
  </div>

  <div class="container">
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat IN ('Pantai Berbisik' , 'Penanjakan 1' , 'Bukit Cinta' , 'Bukit Teletubbies');"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-fill" style="width: 250px; height: 330px; padding: 10px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
    <?php
  }
    ?>
  </div>
  </div>

  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h3 style="font-weight: 500">PANTAI PAPUMA</h3>
    <h7>Berikut Adalah Gallery Wisata ALam Pantai Papuma Berupa Keindahan Alamnya Serta Spot Foto yang Menarik Untuk Dikunjungi</h7>
    <br>
    <br>
    <br>
  </div>
  <hr style="height:2px;width:100%;color:gray;background-color:gray">

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat = 'Pantai Papuma'"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-cover" style="width: 330px; height: 250px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
    <?php
  }
    ?>
  </div>

  <div class="container">
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat IN ('Model 1' , 'Model 2' , 'Model 3' , 'Model 4');"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-fill" style="width: 250px; height: 330px; padding: 10px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
    <?php
  }
    ?>
  </div>
  </div>

  <hr style="height:2px;border-width:0;color:gray;background-color:gray">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h3 style="font-weight: 500">TAMAN NASIONAL BALURAN</h3>
    <h7>Berikut Adalah Gallery Wisata ALam Taman Nasional Baluran Berupa Keindahan Alamnya Serta Spot Foto yang Menarik Untuk Dikunjungi</h7>
    <br>
    <br>
    <br>
  </div>
  <hr style="height:2px;width:100%;color:gray;background-color:gray">

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat = 'Taman Nasional Baluran'"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-cover" style="width: 330px; height: 250px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
    <?php
    }
      ?>
    </div>

  <div class="container">
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat IN ('Savana Bekol' , 'Pantai Bama' , 'Evergreen' , 'Hutan Mangrove');"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-fill" style="width: 250px; height: 330px; padding: 10px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
    <?php
  }
    ?>
  </div>
  </div>
</section> 

<section id="work" class="work work-section">
  <hr style="height:2px;width:100%;color:gray;background-color:gray">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h3 style="font-weight: 500">CANDI BADUT</h3>
    <h7>Berikut Adalah Gallery Wisata Sejarah / Budaya Candi Badut Berupa Keindahan Bangunan 
      Candi Yang Memiliki Nilai Sejarah dan Nilai Budaya </h7>
    <br>
    <br>
    <br>
  </div>
  <hr style="height:2px;width:100%;color:gray;background-color:gray">

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat = 'Candi Badut'"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-cover" style="width: 330px; height: 250px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <br>
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
      <br>
    <?php
  }
    ?>
  </div>
  </div>
  
  <hr style="height:2px;width:100%;color:gray;background-color:gray">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h3 style="font-weight: 500">MUSEUM MPU TANTULAR</h3>
    <h7>Berikut Adalah Gallery Wisata Sejarah / Budaya Museum Mpu Tantular Berupa Museum Yang Berisi Benda-Benda Peninggalan Yang Memiliki Nilai Sejarah dan Nilai Budaya </h7>
    <br>
    <br>
    <br>
  </div>
  <hr style="height:2px;width:100%;color:gray;background-color:gray">

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat = 'Museum Mpu Tantular'"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-cover" style="width: 330px; height: 250px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <br>
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
      <br>
    <?php
  }
    ?>
  </div>
  </div>

  <hr style="height:2px;width:100%;color:gray;background-color:gray">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h3 style="font-weight: 500">MONUMEN KAPAL SELAM</h3>
    <h7>Berikut Adalah Gallery Wisata Sejarah / Budaya Monumen Kapal Selam Berupa Kapal Selam Yang Berisi Interior Kapal dan Serta Peralatan Militer Yang Dahulu Dimiliki Militer Indonesia </h7>
    <br>
    <br>
    <br>
  </div>
  <hr style="height:2px;width:100%;color:gray;background-color:gray">

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat = 'Monumen Kapal Selam'"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-cover" style="width: 330px; height: 250px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <br>
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
      <br>
    <?php
  }
    ?>
  </div>
  </div>

  <hr style="height:2px;width:100%;color:gray;background-color:gray">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h3 style="font-weight: 500">BENTENG PENDEM VAN DEN BOSCH</h3>
    <h7>Berikut Adalah Gallery Wisata Sejarah / Budaya Benteng Pendem Van Den Bosch Berupa Benteng Peinggalan Belanda dan Banyaknya Nilai Sejarah Yang Ada Pada Benteng Ini Berupa Peristiwa Masa Lampau</h7>
    <br>
    <br>
    <br>
  </div>
  <hr style="height:2px;width:100%;color:gray;background-color:gray">

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat = 'Benteng Pendem Van Den Bosch'"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-cover" style="width: 330px; height: 250px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <br>
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
      <br>
    <?php
  }
    ?>
  </div>
  </div>

</section> 


<section id="work" class="work work-section">

  <hr style="height:2px;width:100%;color:gray;background-color:gray">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h3 style="font-weight: 500">CIMORY DIARY PRIGEN</h3>
    <h7>Berikut Adalah Gallery Wisata Pendidikan Cimory Diary Prigen , Tempat ini memberikan pengetahuan tentang peternakan dan produksi susu. </h7>
    <br>
    <br>
    <br>
  </div>
  <hr style="height:2px;width:100%;color:gray;background-color:gray">

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat = 'Cimory Diary Prigen'"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-cover" style="width: 330px; height: 250px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <br>
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
      <br>
    <?php
  }
    ?>
  </div>
  </div>

  <hr style="height:2px;width:100%;color:gray;background-color:gray">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h3 style="font-weight: 500">DESA ADAT KEMIREN</h3>
    <h7>Berikut Adalah Gallery Wisata Pendidikan Desa Adat Kemiren , Tempat Ini Memberikan Pengetahuan Tentang Keunikan Budaya Lokal dan Mempelajari Kegiatan Sehari-hari Masyarakat. </h7>
    <br>
    <br>
    <br>
  </div>
  <hr style="height:2px;width:100%;color:gray;background-color:gray">

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat = 'Desa Adat Kemiren'"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-cover" style="width: 330px; height: 250px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <br>
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
      <br>
    <?php
  }
    ?>
  </div>
  </div>

  <hr style="height:2px;width:100%;color:gray;background-color:gray">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h3 style="font-weight: 500">PUSAT PENELITIAN KOPI DAN KAKAO</h3>
    <h7>Berikut Adalah Gallery Wisata Pendidikan Pusat Penelitian Kopi dan Kakao , Tempat Ini Memberikan Pengetahuan Tentang Bagaimana Pengembangan Kualitas Kopi dan Kakao. </h7>
    <br>
    <br>
    <br>
  </div>
  <hr style="height:2px;width:100%;color:gray;background-color:gray">

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE nama_tempat = 'Pusat Penelitian Kopi dan Kakao'"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div>
      <div class="col-lg-3 col-md-6 col-sm-6 work"> 
      <div class="object-fit-cover" style="width: 330px; height: 250px;">
      <a <?php echo "href='images/foto/".$data['foto']."'"     ;?>  class="work-box">
        <?php echo "<img src='images/foto/".$data['foto']."'>";?>
        </div> 
        <br>
        <div class="overlay">
          <div class="overlay-caption">
            <h5><?php echo "".$data['jenis_wisata'].""; ?></h5>
            <p> <?php echo "".$data['nama_tempat'].""; ?></p>
          </div>
        </div>
        </a>
      </div>
      </div>
      <br>
    <?php
  }
    ?>
  </div>
  </div>

</section>



<br>
<br>
<br>
<br>


              <?php 
                        if(!isset($_SESSION['admin'])){
                    ?>
                    <br>
                    </li>
                    <?php }else{?>
                    <br>
                      <h6 align="center">Data Gambar</h6>
                      <br>
                      <br>
                      <a href="form_simpan.php"><input type="submit" class="btn btn-large" value="Tambah Data"  ></a>
                      <br>
                      <br>
              <table border="2" width="100%">
                    <tr>
                    <th>Gambar</th>
                    <th>Jenis Wisata</th>
                    <th>Nama Tempat</th>
                    <th colspan="2">Aksi</th>
                    </tr>
                <?php
                // Load file koneksi.php
                include "koneksi.php";
  
                      $query = "SELECT * FROM galeri"; // Query untuk menampilkan semua data galeri
                      $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
                while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                      echo "<tr>";
                      echo "<td align='center'><img src='images/foto/".$data['foto']."' width='400' height='200' ></td>";
                      echo "<td>".$data['jenis_wisata']."</td>";
                      echo "<td>".$data['nama_tempat']."</td>";
                      echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
                      echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
                      echo "</tr>";
                  }
                ?>
              </table>                    
      <?php }?>
  </div>
</section>

<!-- Footer section -->
<footer class="footer">
  <div class="footer-top section">
    <div class="container" align="center">
      <div class="row">
        <a style="padding:20px"; href="#"><i class="fa fa-facebook"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-twitter"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-linkedin"></i></a>
        <a style="padding:20px"; href="#"><i class="fa fa-google-plus"></i></a>
        <br>
        <br>
      <p>Copyright © 2024 destinasijatim.com All Rights Reserved. Made by Yani </p>
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