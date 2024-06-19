<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi - JOGJAKU</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="images/dj1.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php"><img src="images/dj1.png" style="width:130px; height: 50px"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        </br></br></br>
        <div  class="flex-center" style="margin-top: 30px;">
        <?php echo !empty($statusPsn)?'<p class="'.$jenisStatusPsn.'">'.$statusPsn.'</p>':''; ?>
            <div class="card-container">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form id="login-form" method="post" action="akunuser.php" role="form">
                        <legend>Registrasi</legend>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="nama_awal" placeholder="Nama awal" required class="form-control" />
                        </div>
                        </br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="nama_akhir" placeholder="Nama akhir" required class="form-control" />
                        </div>
                        </br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="text" name="email" placeholder="Alamat email" required class="form-control" />
                        </div>
                        </br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                            <input type="text" name="telp" placeholder="Nomor telepon" required class="form-control" />
                        </div>
                        </br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" required class="form-control" />
                        </div>
                        </br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required class="form-control" />
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="role">Pilih Peran:</label>
                            <select name="role" class="form-control" required>
                                <option value="user_biasa">User Biasa</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        </br>
                        <div class="form-group">
                            <input type="submit" name="daftarSubmit" value="Daftar" class="btn btn-primary btn-block" />
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer style="margin-bottom: 5rem; margin-top: 2rem;">
                <div>
                    <p align="center">Copyright © 2024 destinasijatim.com All Rights Reserved. Made by Kelompok 10</p>
                </div>
        </footer>
    </main>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
