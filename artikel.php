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
  <link rel="stylesheet" href="css/article.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/destinasijatim.jpg">
</head>

<body>
  <!-- header section -->
  <header id="header" class="navbar-fixed-top">
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
  <!-- services section -->
  <main>
    <section id="intro" class="title-container">
      <div class="container">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h1 class="title-intro">ARTIKEL</h1>
            <p>Berita terkini seputar objek wisata yang terdapat di Pulau Jawa Timur</p>
        </div>
      </div>
    </section>
    <!-- Artikel section -->
    <section id="services" class="services service-section">
      <!--Show Article -->
      <div class="article">
        <?php
        // Load file koneksi.php
        include "koneksi.php";
        $query = "SELECT * FROM artikel"; // Query untuk menampilkan semua data galeri
        $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
        while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
        ?>
          <div class="panel panel-default">
            <div class="panel-heading">
              <?php echo "<img src='images/foto/" . $data['foto'] . "'>"; ?>
              <h2> <?php echo "" . $data['judul'] . ""; ?></h2>
            </div>
            <div class="panel-body">
              <p> <?php echo "" . $data['keterangan'] . ""; ?></p>
              <a <?php echo "href=" . $data['url'] . ""; ?> class="btn btn-default">Read More</a>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editArticleModal<?php echo $data['id']; ?>">
                Change
              </button>
              <!-- Modal -->
              <div class="modal fade" id="editArticleModal<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editArticleModalLabel<?php echo $data['id']; ?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="editArticleModalLabel<?php echo $data['id']; ?>">Edit Article</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="proses_ubah_artikel.php?id=<?php echo $data['id']; ?>" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        <div class="form-group">
                          <label for="judul">Judul</label>
                          <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $data['judul']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="keterangan">Keterangan</label>
                          <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $data['keterangan']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="url">Alamat URL</label>
                          <input type="text" class="form-control" id="url" name="url" value="<?php echo $data['url']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="foto">Foto</label>
                          <br>
                          <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
                          <input type="file" class="form-control-file" id="foto" name="foto">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal -->
              <a href="proses_hapus_artikel.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
            </div>
          </div>
        <?php
        }
        ?>
        </>
    </section>
    <?php
    if (isset($_SESSION['admin'])) {
    ?>
      <!-- Add Article -->
      <section class="service section flex-center">
        <button type="button" class="btn btn-primary btn-add" data-toggle="modal" data-target="#addArticleModal">
          Add Article
        </button>
      </section>
      <!-- Modal -->
      <div class="modal fade" id="addArticleModal" tabindex="-1" role="dialog" aria-labelledby="addArticleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addArticleModalLabel">Add Article</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="proses_simpan_artikel.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                </div>
                <div class="form-group">
                  <label for="url">Alamat URL</label>
                  <input type="text" class="form-control" id="url" name="url">
                </div>
                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input type="file" class="form-control-file" id="foto" name="foto">
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    <!-- Footer section -->
  </main>
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
          <p>Copyright © 2024 destinasijatim.com All Rights Reserved. Made by Kelompok 10 </p>
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
