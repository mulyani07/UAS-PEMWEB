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
<link rel="sylesheet" href="css/main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/destinasijatim.jpg">
<style>
h7{
  color: #ffff;
  font-weight: 500;
}
.card{
  margin-left: auto; 
  padding: 10px; 
  background-color: #BCC6CC; 
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
  margin-bottom: 25px;
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
<section id="intro" class="section intro" style="background: linear-gradient(to bottom, #808080,#BCC6CC); color: white; padding: 40px 0;">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3 style="font-size: 2.5em; font-weight: bold; margin-bottom: 20px;">Galeri Wisata Jawa Timur</h3>
      <p style="font-size: 1.2em; line-height: 1.5;">Selamat datang di galeri foto wisata Jawa Timur. Temukan keindahan alam, budaya, dan pendidikan yang memukau di provinsi kami.</p> 
    </div>
  </div>
</section>
<!-- intro section --> 

<!-- work section -->

<section id="work" class="work-section">
  <div class="col-md-8 col-md-offset-2 text-center" style="margin-bottom: 20px; margin-top: 20px; border: 3px solid #808080; border-radius: 20px; padding: 30px; background-color: #BCC6CC; box-shadow: 0 6px 12px rgba(0,0,0,0.15);">
    <h3 style="font-weight: 700; color: #fff; text-shadow: 3px 3px 6px rgba(0,0,0,0.6);">Wisata Alam</h3>
    <p style="color: #fff; font-size: 1.2em; text-shadow: 2px 2px 4px rgba(0,0,0,0.6);">Nikmati keindahan alam Jawa Timur yang memukau dengan berbagai destinasi wisata alam yang menakjubkan.</p>
  </div>

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE jenis_wisata IN ('Wisata Alam')"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div class="col-lg-3 col-md-6 col-sm-6 work" >
      <div class="card">
        <a href="images/foto/<?= $data['foto']; ?>" class="work-box">
          <div class="object-fit-cover" style="height: 270px; overflow: hidden;">
            <img src="images/foto/<?= $data['foto']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div style="padding: 15px; text-align: center; background-color: #808080; color: white; font-size: 1.2em; border-radius: 5px; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">
            <a style="text-decoration: none; color: white;"><?= $data['nama_tempat']; ?></a> <!-- Displaying the name of the place below the photo inside the polaroid with enhanced styling -->
          </div>
        </a>
        </div>
      </div>
    <?php
  }
  ?>
</section>
<section id="work" class="work-section">
  <div class="col-md-8 col-md-offset-2 text-center" style="margin-bottom: 20px; margin-top: 20px; border: 3px solid #808080; border-radius: 20px; padding: 30px; background-color: #BCC6CC; box-shadow: 0 6px 12px rgba(0,0,0,0.15);">
    <h3 style="font-weight: 700; color: #fff; text-shadow: 3px 3px 6px rgba(0,0,0,0.6);">Wisata Sejarah</h3>
    <p style="color: #fff; font-size: 1.2em; text-shadow: 2px 2px 4px rgba(0,0,0,0.6);">Jelajahi kekayaan situs bersejarah di Jawa Timur.</p>
  </div>
  </div>

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE jenis_wisata IN ('Wisata Sejarah')"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div class="col-lg-3 col-md-6 col-sm-6 work" >
      <div class="card">
        <a href="images/foto/<?= $data['foto']; ?>" class="work-box">
          <div class="object-fit-cover" style="height: 270px; overflow: hidden;">
            <img src="images/foto/<?= $data['foto']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div style="padding: 15px; text-align: center; background-color: #808080; color: white; font-size: 1.2em; border-radius: 5px; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">
            <a style="text-decoration: none; color: white;"><?= $data['nama_tempat']; ?></a> <!-- Displaying the name of the place below the photo inside the polaroid with enhanced styling -->
          </div>
        </a>
        </div>
      </div>
    <?php
  }
  ?>
</section>
<section id="work" class="work-section">
  <div class="col-md-8 col-md-offset-2 text-center" style="margin-bottom: 20px; margin-top: 20px; border: 3px solid #808080; border-radius: 20px; padding: 30px; background-color: #BCC6CC; box-shadow: 0 6px 12px rgba(0,0,0,0.15);">
    <h3 style="font-weight: 700; color: #fff; text-shadow: 3px 3px 6px rgba(0,0,0,0.6);">Wisata Pendidikan</h3>
    <p style="color: #fff; font-size: 1.2em; text-shadow: 2px 2px 4px rgba(0,0,0,0.6);">Temukan keajaiban pendidikan di Jawa Timur.</p>
  </div>
  </div>

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE jenis_wisata IN ('Wisata Pendidikan')"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div class="col-lg-3 col-md-6 col-sm-6 work" >
      <div class="card">
        <a href="images/foto/<?= $data['foto']; ?>" class="work-box">
          <div class="object-fit-cover" style="height: 270px; overflow: hidden;">
            <img src="images/foto/<?= $data['foto']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
          </div>
          <div style="padding: 15px; text-align: center; background-color: #808080; color: white; font-size: 1.2em; border-radius: 5px; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">
            <a style="text-decoration: none; color: white;"><?= $data['nama_tempat']; ?></a> <!-- Displaying the name of the place below the photo inside the polaroid with enhanced styling -->
          </div>
        </a>
        </div>
      </div>
    <?php
  }
  ?>
</section>
<div class="image-data-section">
    <?php 
        if(isset($_SESSION['admin'])){
    ?>
    <div class="container">
        <div class="col-md-8 col-md-offset-2 text-center" style="margin-bottom: 10px; margin-top: 10px; border: 3px solid #808080; border-radius: 10px; padding: 10px; background-color: #BCC6CC; box-shadow: 0 6px 12px rgba(0,0,0,0.15);">
          <h6 class="text-center mt-4 mb-4" style="font-weight: 700">Administrasi Data Gambar</h6>
        </div>
    </div>
        <div class="text-center mb-4" style="padding: 20px;">
            <a href="form_simpan.php" class="btn btn-primary btn-lg">Tambah Data</a>
        </div>
        <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Jenis Wisata</th>
                        <th>Nama Tempat</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Load file koneksi.php
                    include "koneksi.php";

                    $query = "SELECT * FROM galeri"; // Query untuk menampilkan semua data galeri
                    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

                    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                        echo "<tr>";
                        echo "<td class='text-center'><img src='images/foto/".$data['foto']."' class='img-fluid' style='width: 400px; height: 200px;'></td>";
                        echo "<td style='text-align: center;'>".$data['jenis_wisata']."</td>";
                        echo "<td style='text-align: center;'>".$data['nama_tempat']."</td>";
                        echo "<td style='text-align: center;'><a href='form_ubah.php?id=".$data['id']."' class='btn btn-warning'>Ubah</a></td>";
                        echo "<td style='text-align: center;'><a href='proses_hapus.php?id=".$data['id']."' class='btn btn-danger'>Hapus</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
    <?php 
        }
    ?>
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
      <p>Copyright © 2024 destinasijatim.com All Rights Reserved. Made by Kelompok 10</p>
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
