<?php
// Memulai Session
session_start();
// Memuat dan menginisialisasi class User
include 'user.php';
$user = new User();

if(isset($_POST['daftarSubmit'])){
    // Memeriksa apakah rincian user kosong
    if(!empty($_POST['nama_awal']) && !empty($_POST['nama_akhir']) && !empty($_POST['email']) && !empty($_POST['telp']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['role'])){
        // Membandingkan password and konfirmasi password
        if($_POST['password'] !== $_POST['confirm_password']){
            $sesiData['status']['type'] = 'error';
            $sesiData['status']['msg'] = 'Konfirmasi password harus sama dengan password.';
        }else{
            // Memeriksa apakah user sudah ada di dalam database
            $kondSblmnya['where'] = array('email'=>$_POST['email']);
            $kondSblmnya['return_type'] = 'count';
            $userSblmnya = $user->getRows($kondSblmnya);
            if($userSblmnya > 0){
                $sesiData['status']['type'] = 'error';
                $sesiData['status']['msg'] = 'Email sudah ada, silakan gunakan email yang lain.';
            }else{
                // Memasukkan data user dalam database
                $userData = array(
                    'nama_awal' => $_POST['nama_awal'],
                    'nama_akhir' => $_POST['nama_akhir'],
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password']),
                    'telp' => $_POST['telp'],
                    'role' => $_POST['role'] // Menambahkan peran pengguna
                );
                $insert = $user->insert($userData);
                // Status ditetapkan berdasarkan data yang dimasukkan
                if($insert){
                    $sesiData['status']['type'] = 'sukses';
                    $sesiData['status']['msg'] = 'Anda telah berhasil didaftarkan.';
                }else{
                    $sesiData['status']['type'] = 'error';
                    $sesiData['status']['msg'] = 'Terjadi masalah, silahkan coba lagi.';
                }
            }
        }
    }else{
        $sesiData['status']['type'] = 'error';
        $sesiData['status']['msg'] = 'Isi semua bidang.';
    }
    // Menyimpan status pendaftaran ke dalam Session
    $_SESSION['sesiData'] = $sesiData;
    $redirectURL = ($sesiData['status']['type'] == 'sukses')?'login.php':'registrasi.php';
    // Mengalihkan ke halaman index/pendaftaran
    header("Location:".$redirectURL);
}elseif(isset($_POST['loginSubmit'])){
    // Memeriksa apakah login yang diinput kosong
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        // Mendapatkan data user dari class user
        $kondisi['where'] = array(
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
            'status' => '1'
        );
        $kondisi['return_type'] = 'single';
        $userData = $user->getRows($kondisi);
        // Menetapkan data dan status user berdasarkan login
        if($userData){
            $_SESSION['namauser'] = $userData['nama_awal'];
            if($userData['role']=='admin'){
                $_SESSION['admin'] = TRUE;
            }else{
                $_SESSION['user_biasa'] = TRUE;
            }
            $_SESSION['is_login'] = TRUE;
            $sesiData['userLoggedIn'] = TRUE;
            $sesiData['userID'] = $userData['id'];
            $sesiData['status']['type'] = 'sukses';
            $sesiData['status']['msg'] = 'Selamat Datang '.$userData['nama_awal'].'!';
            header("Location:index.php");
        }else{
            $sesiData['status']['type'] = 'error';
            $sesiData['status']['msg'] = 'Email atau password salah, silahkan coba lagi.';
            header("Location:login.php");
        }
    }else{
        $sesiData['status']['type'] = 'error';
        $sesiData['status']['msg'] = 'Masukkan email and password.';
        header("Location:login.php");
    }
    // Menyimpan status login ke dalam Session
    $_SESSION['sesiData'] = $sesiData;
}elseif(!empty($_REQUEST['logoutSubmit'])){
    // Menghapus data Session
    unset($_SESSION['sesiData']);
    session_destroy();
    header("Location:index.php");
}else{
    // Mengalihkan ke halaman home
    header("Location:index.php");
}
?>
