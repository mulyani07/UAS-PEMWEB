<?php
// Load file koneksi.php
include "koneksi.php";
if(isset($_POST['jenis_wisata']) && isset($_POST['nama_tempat']) && isset($_FILES['foto'])){
    $jenis_wisata = $_POST['jenis_wisata'];
    $nama_tempat = $_POST['nama_tempat'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    
    // Proses simpan ke Database
    $query = "SELECT MAX(id) as max_id FROM galeri"; // Query to get the maximum id from galeri table
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $next_id = $row['max_id'] + 1; // Get the next id by incrementing the maximum id by 1
    
    $query = "INSERT INTO galeri (id, jenis_wisata, nama_tempat, foto) VALUES ('$next_id', '$jenis_wisata', '$nama_tempat', '$foto')"; // Insert the next id along with other data
    $sql = mysqli_query($connect, $query);
    if($sql){
        move_uploaded_file($tmp, "images/foto/$foto");
        // Jika Sukses, Lakukan :
        header("location: galeri.php"); // Redirect ke halaman galeri.php
    } else {
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='galeri.php'>Kembali Ke Galeri</a>";
    }
}

// Proses menyimpan data galeri ke Database

