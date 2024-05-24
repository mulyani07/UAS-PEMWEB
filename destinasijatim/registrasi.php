<?php
session_start();
$sesiData = !empty($_SESSION['sesiData']) ? $_SESSION['sesiData'] : '';
if (!empty($sesiData['status']['msg'])) {
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi - DESTINASI JATIM</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="images/destinasijatim.jpg">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php"><img src="images/destinasijatim.jpg" style="width:130px; height: 50px"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php if (!isset($_SESSION['is_login'])) { ?>
                    <li class="active"><a href="index.php">Home</a></li>
                    <?php } else { ?>
                    <li><a href="akunuser.php?logoutSubmit=1" class="logout">Logout</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br><br><br>
    <div class="container" style="margin-top: 30px;">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3><center>Registrasi Akun</h3><br>
                    <?php echo !empty($statusPsn) ? '<p class="' . $jenisStatusPsn . '">' . $statusPsn . '</p>' : ''; ?>
                    <div class="regisForm">
                        <form id="register-form" action="registrasi_proses.php" method="post" role="form">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="nama_awal" placeholder="Nama Awal" required class="form-control" />
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="nama_akhir" placeholder="Nama Akhir" required class="form-control" />
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="email" name="email" placeholder="Email" required class="form-control" />
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" name="password" placeholder="Password" required class="form-control" />
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input type="text" name="telp" placeholder="No Telepon" required class="form-control" />
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <select name="role" class="form-control">
                                    <option value="user_biasa">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="submit" name="registerSubmit" value="Daftar" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
                    <div class="form-group">
                        <div class="center" style="padding: 0;">Sudah punya akun? <a href="login.php">Login disini</a></div>
                        <div class="col-sm-6 text-right brand" style="padding: 0;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <br><br><br>
                <p align="center">Copyright © 2024 destinasijatim.com All Rights Reserved. Made by yani</p>
            </div>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

