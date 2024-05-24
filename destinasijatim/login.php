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
    <title>Login - DESTINASI JATIM</title>
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
                    <?php if(!isset($_SESSION['is_login'])){ ?>
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
                    <?php if(!empty($sesiData['userLoggedIn']) && !empty($sesiData['userID'])) {
                        include 'user.php';
                        $user = new User();
                        $kondisi['where'] = array('id' => $sesiData['userID']);
                        $kondisi['return_type'] = 'single';
                        $userData = $user->getRows($kondisi);
                    } else { ?>
                        <h3><center>Silahkan Login</h3><br>
                        <?php echo !empty($statusPsn)?'<p class="'.$jenisStatusPsn.'">'.$statusPsn.'</p>':''; ?>
                        <div class="regisForm">
                            <form id="login-form" action="login_proses.php" method="post" role="form">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input type="text" name="email" placeholder="Masukkan alamat email" required class="form-control" />
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" name="password" placeholder="Password" required class="form-control" />
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <select name="loginType" class="form-control">
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="submit" name="loginSubmit" value="Masuk" class="btn btn-primary btn-block">
                                </div>
                                <div class="form-group">
                                    <div class="center" style="padding: 0;">Pengguna baru? <a href="registrasi.php">Daftar disini</a></div>
                                    <div class="col-sm-6 text-right brand" style="padding: 0;"></div>
                                </div>
                            </form>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <br><br><br>
                <p align="center">Copyright © 2023 jogjaku.com All Rights Reserved. Made by Vitto</p>
            </div>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
