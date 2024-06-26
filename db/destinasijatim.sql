-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2024 at 12:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `destinasijatim`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(100) NOT NULL,
  `judul` varchar(400) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `url` varchar(250) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `keterangan`, `url`, `foto`) VALUES
(8, '21 TEMPAT WISATA SERU DI YOGYAKARTA YANG TAK PERNAH ANDA BAYANGKAN SEBELUMNYA', 'Sebagai ibu kota negara, Jakarta adalah pusat kekuatan ekonomi dan industri tanah air. Namun Yogyakarta boleh dibilang merupakan jiwa negeri ini, di mana tradisi luhur nenek moyang masih terjaga.', 'https://indonesia.tripcanvas.co/id/jogja/tempat-wisata-seru/', '28102017201028a1.jpg'),
(9, '25 Tempat Wisata di Jogja yang Wajib Dikunjungi', 'Kota Yogyakarta atau akrab disebut Jogja adalah destinasi wisata yang sangat mempesona. Buktinya, kota ini selalu ramai dikunjungi para pelancong dari luar kota, terutama pada masa-masa liburan. Ada banyak magnet yang menjadi daya tarik Kota Jogja.', 'http://anekatempatwisata.com/tempat-wisata-di-jogja/#', '28102017201115b1.jpg'),
(10, '113 REKOMENDASI TEMPAT WISATA DI JOGJA YANG PALING BARU', 'Tak heran jika Jogja menjadi kota dengan pertumbuhan wsiatawan tertinggi di Indonesia. Hal itu disebabkan jogja selalu memunculkan spot spot wisata baru untuk menarik minat para wisatawan.', 'http://wisatabaru.com/7-wisata-terbaru-di-jogja-yang-ngehits-minggu-ini-april-2017/', '28102017201206c1.jpg'),
(11, '10 CANDI Jelajahi Bangunan dari Peradaban yang Hilang di Yogyakarta', 'Sebagai destinasi archaeotourism yang terkenal, Yogyakarta merupakan surga untuk menjelajahi candi-candi kuno dan menemukan reruntuhan dari peradaban yang hilang misterius.', 'https://www.yogyes.com/id/yogyakarta-tourism-object/candi/', '28102017200850a.jpg'),
(12, '7 Candi dengan Panorama Tercantik di Yogyakarta', 'Yogyakarta - Sudah menjadi rahasia umum, kalau Provinsi Daerah Istimewa Yogyakarta punya banyak candi. Tidak hanya sejarahnya bentuk arsitektur candi-candi tersebut sangat memesona. Inilah 7 candi dengan panorama tercantik di Yoyakarta.', 'https://travel.detik.com/destination/d-2033300/7-candi-dengan-panorama-tercantik-di-yogyakarta', '28102017200850a.jpg'),
(13, '10 Pantai di Gunungkidul, Jogja yang Wajib Dikunjungi', 'Bicara tentang Jogja pasti tak lepas dengan wisata budaya, karena Jogja memiliki banyak bangunan tua bersejarah yang eksotis. Tetapi siapa sangka kota yang menjadi salah satu tujuan wisata favorit turis ini banyak menyimpan banyak misteri', 'http://anekatempatwisata.com/10-pantai-di-gunungkidul-jogja-yang-wajib-dikunjungi/', '28102017201602e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(100) NOT NULL,
  `title` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `start` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `end` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `color` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(20) NOT NULL,
  `jenis_wisata` varchar(20) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `jenis_wisata`, `nama_tempat`, `foto`) VALUES
(1, 'Wisata Alam', 'Kawah Ijen', 'kawahijen1.jpeg'),
(2, 'Wisata Alam', 'Kawah Ijen', 'kawahijen2.jpeg'),
(3, 'Wisata Alam', 'Kawah Ijen', 'kawahijen3.jpeg'),
(4, 'Wisata Alam', 'Kawah Ijen', 'kawahijen4.jpeg'),
(5, 'Spot Foto', 'Blue Fire', 'spotkwi1.jpeg'),
(6, 'Spot Foto', 'Sunrise Spot', 'spotkwi2.jpeg'),
(7, 'Spot Foto', 'Latar Kawah Ijen ', 'spotkwi3.jpeg'),
(8, 'Spot Foto', 'Hutan Mati', 'spotkwi4.jpeg'),
(9, 'Wisata Alam', 'Gunung Bromo', 'gunungbromo1.jpeg'),
(10, 'Wisata Alam', 'Gunung Bromo', 'gunungbromo2.jpeg'),
(11, 'Wisata Alam', 'Gunung Bromo', 'gunungbromo3.jpeg'),
(12, 'Wisata Alam', 'Gunung Bromo', 'gunungbromo4.jpeg'),
(13, 'Spot Foto', 'Pantai Berbisik', 'spotgb1.jpeg'),
(14, 'Spot Foto', 'Penanjakan 1', 'spotgb2.jpeg'),
(15, 'Spot Foto', 'Bukit Cinta', 'spotgb3.jpg'),
(16, 'Spot Foto', 'Bukit Teletubbies', 'spotgb4.jpg'),
(17, 'Wisata Alam', 'Pantai Papuma', 'pantaipapuma1.jpeg'),
(18, 'Wisata Alam', 'Pantai Papuma', 'pantaipapuma2.jpeg'),
(19, 'Wisata Alam', 'Pantai Papuma', 'pantaipapuma3.jpeg'),
(20, 'Wisata Alam', 'Pantai Papuma', 'pantaipapuma4.jpeg'),
(21, 'Spot Foto', 'Model 1', 'spotpp1.jpeg'),
(22, 'Spot Foto', 'Model 2', 'spotpp2.jpeg'),
(23, 'Spot Foto', 'Model 3', 'spotpp3.jpg'),
(24, 'Spot Foto', 'Model 4', 'spotpp4.jpeg'),
(25, 'Wisata Alam', 'Taman Nasional Baluran', 'tamanbaluran1.jpeg'),
(26, 'Wisata Alam', 'Taman Nasional Baluran', 'tamanbaluran2.jpeg'),
(27, 'Wisata Alam', 'Taman Nasional Baluran', 'tamanbaluran3.jpeg'),
(28, 'Wisata Alam', 'Taman Nasional Baluran', 'tamanbaluran4.jpeg'),
(29, 'Spot Foto', 'Savana Bekol', 'spottnb1.jpeg'),
(30, 'Spot Foto', 'Pantai Bama', 'spottnb2.jpeg'),
(31, 'Spot Foto', 'Evergreen', 'spottnb3.jpeg'),
(32, 'Spot Foto', 'Hutan Mangrove', 'spottnb4.jpeg'),
(33, 'Wisata Sejarah', 'Candi Badut', 'candibadut1.jpeg'),
(34, 'Wisata Sejarah', 'Candi Badut', 'candibadut2.jpeg'),
(35, 'Wisata Sejarah', 'Candi Badut', 'candibadut3.jpeg'),
(36, 'Wisata Sejarah', 'Candi Badut', 'candibadut4.jpeg'),
(37, 'Wisata Sejarah', 'Museum Mpu Tantular', 'mputantular1.jpeg'),
(38, 'Wisata Sejarah', 'Museum Mpu Tantular', 'mputantular2.jpeg'),
(39, 'Wisata Sejarah', 'Museum Mpu Tantular', 'mputantular3.jpeg'),
(40, 'Wisata Sejarah', 'Museum Mpu Tantular', 'mputantular4.jpeg'),
(41, 'Wisata Sejarah', 'Monumen Kapal Selam', 'kapalselam1.jpeg'),
(42, 'Wisata Sejarah', 'Monumen Kapal Selam', 'kapalselam2.jpeg'),
(43, 'Wisata Sejarah', 'Monumen Kapal Selam', 'kapalselam3.jpeg'),
(44, 'Wisata Sejarah', 'Monumen Kapal Selam', 'kapalselam4.jpeg'),
(45, 'Wisata Sejarah', 'Benteng Pendem Van Den Bosch', 'benteng1.jpeg'),
(46, 'Wisata Sejarah', 'Benteng Pendem Van Den Bosch', 'benteng2.jpeg'),
(47, 'Wisata Sejarah', 'Benteng Pendem Van Den Bosch', 'benteng3.jpeg'),
(48, 'Wisata Sejarah', 'Benteng Pendem Van Den Bosch', 'benteng4.jpeg'),
(49, 'Wisata Pendidikan', 'Cimory Diary Prigen', 'cimory1.jpeg'),
(50, 'Wisata Pendidikan', 'Cimory Diary Prigen', 'cimory2.jpeg'),
(51, 'Wisata Pendidikan', 'Cimory Diary Prigen', 'cimory3.jpeg'),
(52, 'Wisata Pendidikan', 'Cimory Diary Prigen', 'cimory4.jpeg'),
(53, 'Wisata Pendidikan', 'Desa Adat Kemiren', 'kemiren1.jpeg'),
(54, 'Wisata Pendidikan', 'Desa Adat Kemiren', 'kemiren2.jpeg'),
(55, 'Wisata Pendidikan', 'Desa Adat Kemiren', 'kemiren3.jpeg'),
(56, 'Wisata Pendiikan', 'Desa Adat Kemiren', 'kemiren4.jpeg'),
(57, 'Wisata Pendidikan', 'Pusat Penelitian Kopi dan Kakao', 'kopidancoklat1.jpeg'),
(58, 'Wisata Pendidikan', 'Pusat Penelitian Kopi dan Kakao', 'kopidancoklat2.jpeg'),
(59, 'Wisata Pendidikan', 'Pusat Penelitian Kopi dan Kakao', 'kopidancoklat3.jpeg'),
(60, 'Wisata Pendiikan', 'Pusat Penelitian Kopi dan Kakao', 'kopidancoklat4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `saran` varchar(300) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testi`
--

INSERT INTO `testi` (`id`, `nama_user`, `saran`, `rating`) VALUES
(1, 'Raju', 'Nice broo', 4),
(2, 'Simsi', 'Gambar terlalu sedikit :(', 3),
(3, 'User', 'Sangat membantu :)', 5),
(4, 'Syah', 'Damage Broo !', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_awal` varchar(20) NOT NULL,
  `nama_akhir` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `dibuat` datetime NOT NULL,
  `diubah` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `role` varchar(64) DEFAULT 'user_biasa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_awal`, `nama_akhir`, `email`, `password`, `telp`, `dibuat`, `diubah`, `status`, `role`) VALUES
(14, 'Admin', 'Jogjaku', 'admin@jogjaku.com', '21232f297a57a5a743894a0e4a801fc3', '082362505777', '2017-10-20 00:00:00', '2017-10-20 00:00:00', '1', 'admin'),
(18, 'User', 'Jogjaku', 'user@jogjaku.com', 'ee11cbb19052e40b07aac0ca060c23ee', '8572895728', '2017-10-20 00:00:00', '2017-10-20 00:00:00', '1', 'user_biasa'),
(23, 'Raju', 'Vitto', 'Vitto@jogjaku.com', 'bedce5ae492d1bdc9fb988c4991c2d46', '082362505777', '2017-10-20 16:30:50', '2017-10-20 16:30:50', '1', 'user_biasa'),
(24, 'Simsi', 'Mi', 'Simsi@jogjaku', '257a63d544be379b968351c1ce07a3b6', '052828589240', '2017-10-23 09:02:43', '2017-10-23 09:02:43', '1', 'user_biasa'),
(25, 'Syah', 'Kon', 'Syah@jogjaku.com', '418a0cdf69bde721880aa171d2d79d40', '0826425666', '2017-10-23 09:04:07', '2017-10-23 09:04:07', '1', 'user_biasa'),
(26, 'Rifqi', 'Rahmanda', 'rifqirahmanda2004@gmail.com', '25d55ad283aa400af464c76d713c07ad', '085933100004', '2024-05-21 05:21:52', '2024-05-21 05:21:52', '1', 'user_biasa'),
(27, 'muhammad', 'widad', 'widad123@gmail.com', 'acc9fa32ca4f1b75d24177888f0a36dd', '085815966844', '2024-05-25 14:49:18', '2024-05-25 14:49:18', '1', 'user_biasa'),
(28, 'admin', 'destinasijatim', 'admin@destinasijatim.com', '21232f297a57a5a743894a0e4a801fc3', '080123456789', '2024-05-26 13:55:48', '2024-05-26 13:55:48', '1', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
