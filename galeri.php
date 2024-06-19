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
  background-color: #f5f5f5; 
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
      <div class="col-lg-3 col-md-6 col-sm-6 work">
        <div class="card">
          <a href="images/foto/alam/<?= $data['foto']; ?>" class="work-box">
            <div class="object-fit-cover" style="height: 270px; overflow: hidden;">
              <img src="images/foto/alam/<?= $data['foto']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 15px; text-align: center; background-color: #ffff; color:white; font-size: 1.2em; border-radius: 5px; font-weight: bold;">
              <a style="text-decoration: none; color: black;"><?= $data['nama_tempat']; ?></a>
              <br>
          </a>
        </div>
        <div style="background-color: #ffff; text-align: center;">
        <?php 
        if(isset($_SESSION['admin'])){
        ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editGaleriModal<?php echo $data['id']; ?>">
        Edit
        </button>
        <!-- Modal -->
        <div class="modal fade" id="editGaleriModal<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editGaleriModalLabel<?php echo $data['id']; ?>" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <label class="modal-title" id="editGaleriModalLabel<?php echo $data['id']; ?>">Perbarui Galeri</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <a aria-hidden="true" style="color: black;">&times;</a>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="proses_ubah.php?id=<?php echo $data['id']; ?>" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                  <div class="form-group">
                    <label for="jenis_wisata">Jenis Wisata</label>
                      <select class="form-control" id="jenis_wisata" name="jenis_wisata">
                        <option value="Wisata Alam" <?php if($data['jenis_wisata'] == 'Wisata Alam') echo 'selected'; ?>>Wisata Alam</option>
                        <option value="Wisata Sejarah" <?php if($data['jenis_wisata'] == 'Wisata Sejarah') echo 'selected'; ?>>Wisata Sejarah</option>
                        <option value="Wisata Pendidikan" <?php if($data['jenis_wisata'] == 'Wisata Pendidikan') echo 'selected'; ?>>Wisata Pendidikan</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="nama_tempat">Nama Tempat</label>
                    <input type="text" class="form-control" id="nama_tempat" name="nama_tempat" value="<?php echo $data['nama_tempat']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <br>
                    <input type="checkbox" name="ubah_foto" value="true"> Centang jika ingin mengubah foto<br>
                    <input type="file" class="form-control-file" id="foto" name="foto">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <a href="proses_hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
        <?php } ?>
        </div>
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

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE jenis_wisata IN ('Wisata Sejarah')"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div class="col-lg-3 col-md-6 col-sm-6 work">
        <div class="card">
          <a href="images/foto/sejarah/<?= $data['foto']; ?>" class="work-box">
            <div class="object-fit-cover" style="height: 270px; overflow: hidden;">
              <img src="images/foto/sejarah/<?= $data['foto']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 15px; text-align: center; background-color: #ffff; font-size: 1.2em; border-radius: 5px; font-weight: bold;">
              <a style="text-decoration: none; color: black;"><?= $data['nama_tempat']; ?></a>
              <br>
          </a>
        </div>
        <div style="background-color: #ffff; text-align: center;">
        <?php 
        if(isset($_SESSION['admin'])){
        ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editGaleriModal<?php echo $data['id']; ?>">
        Edit
        </button>
        <!-- Modal -->
        <div class="modal fade" id="editGaleriModal<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editGaleriModalLabel<?php echo $data['id']; ?>" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <label class="modal-title" id="editGaleriModalLabel<?php echo $data['id']; ?>">Perbarui Galeri</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <a aria-hidden="true" style="color: black;">&times;</a>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="proses_ubah.php?id=<?php echo $data['id']; ?>" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                  <div class="form-group">
                    <label for="jenis_wisata">Jenis Wisata</label>
                      <select class="form-control" id="jenis_wisata" name="jenis_wisata">
                        <option value="Wisata Alam" <?php if($data['jenis_wisata'] == 'Wisata Alam') echo 'selected'; ?>>Wisata Alam</option>
                        <option value="Wisata Sejarah" <?php if($data['jenis_wisata'] == 'Wisata Sejarah') echo 'selected'; ?>>Wisata Sejarah</option>
                        <option value="Wisata Pendidikan" <?php if($data['jenis_wisata'] == 'Wisata Pendidikan') echo 'selected'; ?>>Wisata Pendidikan</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="nama_tempat">Nama Tempat</label>
                    <input type="text" class="form-control" id="nama_tempat" name="nama_tempat" value="<?php echo $data['nama_tempat']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <br>
                    <input type="checkbox" name="ubah_foto" value="true"> Centang jika ingin mengubah foto<br>
                    <input type="file" class="form-control-file" id="foto" name="foto">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <a href="proses_hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
        <?php } ?>
        </div>
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

  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM galeri WHERE jenis_wisata IN ('Wisata Pendidikan')"; // Query untuk menampilkan semua data galeri
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    ?>
      <div class="col-lg-3 col-md-6 col-sm-6 work">
        <div class="card">
          <a href="images/foto/pendidikan/<?= $data['foto']; ?>" class="work-box">
            <div class="object-fit-cover" style="height: 270px; overflow: hidden;">
              <img src="images/foto/pendidikan/<?= $data['foto']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 15px; text-align: center; background-color: #ffff; font-size: 1.2em; border-radius: 5px; font-weight: bold;">
              <a style="text-decoration: none; color: black;"><?= $data['nama_tempat']; ?></a>
              <br>
          </a>
        </div>
        <div style="background-color: #ffff; text-align: center;">
        <?php 
        if(isset($_SESSION['admin'])){
        ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editGaleriModal<?php echo $data['id']; ?>">
        Edit
        </button>
        <!-- Modal -->
        <div class="modal fade" id="editGaleriModal<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editGaleriModalLabel<?php echo $data['id']; ?>" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <label class="modal-title" id="editGaleriModalLabel<?php echo $data['id']; ?>">Perbarui Galeri</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <a aria-hidden="true" style="color: black;">&times;</a>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="proses_ubah.php?id=<?php echo $data['id']; ?>" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                  <div class="form-group">
                    <label for="jenis_wisata">Jenis Wisata</label>
                      <select class="form-control" id="jenis_wisata" name="jenis_wisata">
                        <option value="Wisata Alam" <?php if($data['jenis_wisata'] == 'Wisata Alam') echo 'selected'; ?>>Wisata Alam</option>
                        <option value="Wisata Sejarah" <?php if($data['jenis_wisata'] == 'Wisata Sejarah') echo 'selected'; ?>>Wisata Sejarah</option>
                        <option value="Wisata Pendidikan" <?php if($data['jenis_wisata'] == 'Wisata Pendidikan') echo 'selected'; ?>>Wisata Pendidikan</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="nama_tempat">Nama Tempat</label>
                    <input type="text" class="form-control" id="nama_tempat" name="nama_tempat" value="<?php echo $data['nama_tempat']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <br>
                    <input type="checkbox" name="ubah_foto" value="true"> Centang jika ingin mengubah foto<br>
                    <input type="file" class="form-control-file" id="foto" name="foto">
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <a href="proses_hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
        <?php } ?>
        </div>
        </div>
      </div>
    <?php
  }
  ?>
  <div class="container"></div>
</section>
<section class="container">
<?php
    if (isset($_SESSION['admin'])) {
    ?>
      <!-- Add Galeri -->
      <section class="service section flex-center" style="text-align: center; padding: 10px;">
        <button type="button" class="btn btn-primary btn-add" data-toggle="modal" data-target="#addGaleriModal" style="width: 200px; height: 50px;">
          Tambah Galeri
        </button>
      </section>
      <!-- Modal -->
      <div class="modal fade" id="addGaleriModal" tabindex="-1" role="dialog" aria-labelledby="addGaleriModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addGaleriModalLabel">Tambah Galeri</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="jenis_wisata">Jenis Wisata</label>
                    <select class="form-control" id="jenis_wisata" name="jenis_wisata">
                      <option value="Wisata Alam">Wisata Alam</option>
                      <option value="Wisata Sejarah">Wisata Sejarah</option>
                      <option value="Wisata Pendidikan">Wisata Pendidikan</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="nama_tempat">Nama Tempat</label>
                  <input type="text" class="form-control" id="nama_tempat" name="nama_tempat">
                </div>
                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input type="file" class="form-control-file" id="foto" name="foto">
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
</section>
<footer class="footer">
  <div class="footer-top section">
    <div class="container" align="center">
      <div class="row">
        <a style="padding:20px"; href="https://github.com/mulyani07/UAS-PEMWEB"><i class="fa fa-github"></i></a>
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

