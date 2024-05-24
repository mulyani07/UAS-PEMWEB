<?php
session_start();

if(isset($_POST['loginSubmit'])){
    include 'db.php'; // Database connection file
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Encrypt the password
    $loginType = $_POST['loginType'];

    if($loginType == 'user'){
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    }else if($loginType == 'admin'){
        $query = "SELECT * FROM admins WHERE email = '$email' AND password = '$password'";
    }

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if($row){
        $_SESSION['is_login'] = true;
        $_SESSION['userID'] = $row['id'];
        $_SESSION['loginType'] = $loginType;
        $_SESSION['sesiData']['userLoggedIn'] = true;

        if($loginType == 'user'){
            header("Location: userDashboard.php");
        }else if($loginType == 'admin'){
            header("Location: adminDashboard.php");
        }
    }else{
        $_SESSION['sesiData']['status']['msg'] = 'Email atau password salah.';
        $_SESSION['sesiData']['status']['type'] = 'error';
        header("Location: login.php");
    }
}
?>
