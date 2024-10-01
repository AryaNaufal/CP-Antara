-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2024 at 09:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp_antara`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(255) NOT NULL,
  `type` enum('css','js','img') NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `type`, `url`) VALUES
(1, 'css', 'assets/css/bootstrap.min.css'),
(2, 'css', 'assets/css/font-awesome.min.css'),
(3, 'css', 'assets/css/themify-icons.css'),
(4, 'css', 'assets/css/elegant-icons.css'),
(5, 'css', 'assets/css/flaticon-set.css'),
(6, 'css', 'assets/css/magnific-popup.css'),
(7, 'css', 'assets/css/owl.carousel.min.css'),
(8, 'css', 'assets/css/owl.theme.default.min.css'),
(9, 'css', 'assets/css/animate.css'),
(10, 'css', 'assets/css/validnavs.css'),
(11, 'css', 'assets/css/helper.css'),
(12, 'css', 'assets/css/style.css'),
(13, 'css', 'assets/css/service-slider.css'),
(14, 'css', 'assets/css/responsive.css'),
(15, 'css', 'assets/css/login.css'),
(16, 'js', 'assets/js/jquery-3.6.0.min.js'),
(17, 'js', 'assets/js/popper.min.js'),
(18, 'js', 'assets/js/bootstrap.bundle.min.js'),
(19, 'js', 'assets/js/jquery.appear.js'),
(20, 'js', 'assets/js/jquery.easing.min.js'),
(21, 'js', 'assets/js/jquery.magnific-popup.min.js'),
(22, 'js', 'assets/js/modernizr.custom.13711.js'),
(23, 'js', 'assets/js/owl.carousel.min.js'),
(24, 'js', 'assets/js/wow.min.js'),
(25, 'js', 'assets/js/progress-bar.min.js'),
(26, 'js', 'assets/js/isotope.pkgd.min.js'),
(27, 'js', 'assets/js/imagesloaded.pkgd.min.js'),
(28, 'js', 'assets/js/count-to.js'),
(29, 'js', 'assets/js/YTPlayer.min.js'),
(30, 'js', 'assets/js/validnavs.js'),
(31, 'js', 'assets/js/main.js'),
(32, 'css', 'assets/css/chatbot.css'),
(33, 'js', 'assets/js/chatbot.js');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `image`) VALUES
(1, 'Astra', 'assets/img/antara/client/Astra.png'),
(2, 'Bank BNI', 'assets/img/antara/client/Bank_BNI.png'),
(3, 'Bank BRI', 'assets/img/antara/client/Bank_BRI.png'),
(4, 'Bank Indonesia', 'assets/img/antara/client/Bank_Indonesia.png'),
(5, 'Bank Mandiri', 'assets/img/antara/client/Bank_Mandiri.png'),
(6, 'BPJS Kesehatan', 'assets/img/antara/client/BPJS_Kesehatan.png'),
(7, 'BPJS Ketenagakerjaan', 'assets/img/antara/client/BPJS_Ketenagakerjaan.png'),
(8, 'CNN Indonesia', 'assets/img/antara/client/CNNindonesia.png'),
(9, 'DPR', 'assets/img/antara/client/DPR.png'),
(10, 'Kominfo', 'assets/img/antara/client/Kominfo.png'),
(11, 'Polri', 'assets/img/antara/client/Polri.png'),
(12, 'MPR', 'assets/img/antara/client/MPR.png'),
(13, 'Pertamina', 'assets/img/antara/client/Pertamina.png'),
(14, 'PLN', 'assets/img/antara/client/PLN.png'),
(15, 'Shopee', 'assets/img/antara/client/Shopee.png'),
(16, 'Trans News Corporate', 'assets/img/antara/client/Trans_News_Corporate.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `image`) VALUES
(1, 'Antara', 'antara', 'assets/img/antara/Antara.png'),
(2, 'Antara News', 'antara news', 'assets/img/antara/AntaraNews.png'),
(3, 'IMCS', 'imcs', 'assets/img/antara/IMCS.png'),
(4, 'Antara PRWIRE', 'antara prwire', 'assets/img/antara/AntaraPRWIRE.png'),
(5, 'Antara Foto', 'antara foto', 'assets/img/antara/AntaraFoto.png'),
(6, 'Antara Digital Media', 'antara digital media', 'assets/img/antara/AntaraDigitalMedia.png'),
(7, 'Antara TV', 'antara tv', 'assets/img/antara/AntaraTV.png'),
(8, 'MICE', 'mice', 'assets/img/antara/Mice.png'),
(9, 'Lembaga Pendidikan Antara', 'lpja', 'assets/img/antara/Asj.png'),
(10, 'Galeri Foto', 'galeri foto', 'assets/img/antara/GaleriFoto.png'),
(11, 'Layanan Data', 'layanan data', 'assets/img/antara/LayananData.png'),
(12, 'Aktivasi Strategi Komunikasi', 'aktivasi strategi komunikasi', 'assets/img/antara/AktivasiStrategiKomunikasi.png'),
(13, 'HCM Ads Media', 'hcm ads media', 'assets/img/antara/Hcm.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `oauth_id` varchar(50) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `oauth_id` (`oauth_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
