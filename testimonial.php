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

$sql = "SELECT id, title, keterangan, start, end, color FROM events";
$req = $bdd->prepare($sql);
$req->execute();
$events = $req->fetchAll();
?>
<!doctype html>
<html class="no-js" lang="">
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
              <li><a style="color:grey" href="wisataalam.php">Wisata Alam</a></li>
              <li><a style="color:grey" href="wisatasejarah.php">Wisata Sejarah</a></li>
              <li><a style="color:grey" href="wisatapendidikan.php">Wisata Pendidikan</a></li>
            </ul>
          </li>
          <li><a href="artikel.php">Artikel</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <li><a href="testimonial.php">Testimonial</a></li>
          <li><a href="tentang.php">Tentang Kami</a></li>
          <?php
          if (!isset($_SESSION['is_login'])) {
          ?>
            <li><a href="login.php">Login</a></li>
          <?php } else { ?>
            <li><a href="akunuser.php?logoutSubmit=1" class="logout">Logout (<?= $_SESSION['namauser']; ?>)</a></li>
          <?php } ?>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a>
    </div>
  </header>
  <main>
    <section id="intro">
      <div class="container">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h1 class="title-intro">TESTIMONIAL</h1>
          <br>
          <?php
          if (isset($_SESSION['admin'])) {
          ?>
            <p>Bagaimana pengalaman & pendapat mereka yang telah menjadi pelanggan dan senantiasa menggunakan layanan dari kami? Biarlah pelanggan kami yang berbicara & berbagi cerita dengan Anda</p>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- Show Testimonial -->
    <!-- Show Testimonial -->
    <?php
    function generateStarRating($rating) {
      $stars = '';
        for ($i = 1; $i <= 5; $i++) {
          if ($i <= $rating) {
            // Menggunakan simbol bintang (★) Unicode
            $stars .= '★';
          } else {
            // Menggunakan simbol bintang kosong (☆) Unicode
            $stars .= '☆';
          }
        }
        return $stars;
}
?>

<section id="teams" class="section teams">
  <div class="container">
    <div class="row">
      <?php
      include "koneksi.php";
      $query = "SELECT * FROM testi";
      $sql = mysqli_query($connect, $query);
      while ($data = mysqli_fetch_array($sql)) {
      ?>
        <div class="col-md-4 col-sm-6 panel-testimonial">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="person">
                <div class="person-content">
                  <h4><?php echo $data['nama_user']; ?></h4>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <p><?php echo $data['saran']; ?></p>
              <p>Rating: <?php echo generateStarRating($data['rating']); ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

    <!-- Add Testi section -->
    <?php
    if (!isset($_SESSION['user_biasa'])) {
    ?>
    <?php } else { ?>
      <section id="contact" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 conForm">
              <h5>Tambahkan Testimonial</h5>
              <p>Kami sangat mengharapkan saran maupun masukan dari Anda agar website ini bisa semakin baik</p>
              <div id="message"></div>
              <form method="post" action="proses_simpan_testi.php">
                <input type="hidden" name="nama_user" value="<?php echo "" . $_SESSION['namauser'] . ""; ?>" />
                <input type="text" name="saran" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Tulis saran maupun masukan...">
                <input type="submit" class="btn btn-large" value="Simpan">
              </form>
            </div>
          </div>
        </div>
      </section>
    <?php } ?>
    <!-- Testimonial Data Control -->
    <section id="teams" class="section teams">
      <div class="container">
        <?php
        if (!isset($_SESSION['admin'])) {
        ?>
          <br>
          </li>
        <?php } else { ?>
          <br>
          <h6 align="center">Data Testimonial</h6>
          <br>
          <br>
          <!-- Tambahkan tombol tambah testimonial -->
          <div align="center">
            <a href="#contact" class="btn btn-primary">Tambah Testimonial</a>
          </div>
          <br>
          <table border="2" class="table-testimonial">
            <tr>
              <th>Nama User</th>
              <th>Saran</th>
              <th>Aksi</th>
            </tr>
            <?php
            // Load file koneksi.php
            include "koneksi.php";
            $query = "SELECT * FROM testi"; // Query untuk menampilkan semua data galeri
            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
            while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
              echo "<tr>";
              echo "<td>" . $data['nama_user'] . "</td>";
              echo "<td>" . $data['saran'] . "</td>";
              echo "<td><a href='proses_hapus_testi.php?id=" . $data['id'] . "'>Hapus</a></td>";
              echo "</tr>";
            }
            ?>
          </table>
        <?php } ?>
      </div>
    </section>
  </main>
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
          <p>Copyright © 2024 destinasijatim.com All Rights Reserved. Made by Kelompok 10</p>
        </div>
      </div>
    </div>
  </footer>
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
