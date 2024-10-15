-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 04:42 AM
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
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `image`) VALUES
(1, 'Astra', 'assets/img/antara/logo/client/logo-astra.png'),
(2, 'Bank BNI', 'assets/img/antara/logo/client/logo-bank-bni.png'),
(3, 'Bank BRI', 'assets/img/antara/logo/client/logo-bank-bri.png'),
(4, 'Bank Indonesia', 'assets/img/antara/logo/client/logo-bank-indonesia.png'),
(5, 'Bank Mandiri', 'assets/img/antara/logo/client/logo-bank-mandiri.png'),
(6, 'BPJS Kesehatan', 'assets/img/antara/logo/client/logo-bpjs-kesehatan.png'),
(7, 'BPJS Ketenagakerjaan', 'assets/img/antara/logo/client/logo-bpjs-ketenagakerjaan.png'),
(8, 'CNN Indonesia', 'assets/img/antara/logo/client/logo-cnn-indonesia.png'),
(9, 'DPR', 'assets/img/antara/logo/client/logo-dpr.png'),
(10, 'Kominfo', 'assets/img/antara/logo/client/logo-kominfo.png'),
(11, 'Polri', 'assets/img/antara/logo/client/logo-polri.png'),
(12, 'MPR', 'assets/img/antara/logo/client/logo-mpr.png'),
(13, 'Pertamina', 'assets/img/antara/logo/client/logo-pertamina.png'),
(14, 'PLN', 'assets/img/antara/logo/client/logo-pln.png'),
(15, 'Shopee', 'assets/img/antara/logo/client/logo-shopee.png'),
(16, 'Trans News Corporate', 'assets/img/antara/logo/client/logo-trans-news-corporate.png'),
(17, 'Bank BJB', 'assets/img/antara/logo/client/logo-bank-bjb.png'),
(18, 'ID Clear', 'assets/img/antara/logo/client/logo-id-clear-kpei.png'),
(19, 'Kementrian Keuangan Republik Indonesia', 'assets/img/antara/logo/client/logo-kemenkeu.png');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `name`, `image`) VALUES
(1, 'Acn', 'assets/img/antara/logo/mitra/logo-acnnewswire.png'),
(2, 'Afp', 'assets/img/antara/logo/mitra/logo-afp.png'),
(3, 'Ap-News', 'assets/img/antara/logo/mitra/logo-ap-news.png'),
(4, 'Asianet', 'assets/img/antara/logo/mitra/logo-asianet.png'),
(5, 'Bernama', 'assets/img/antara/logo/mitra/logo-bernama.png'),
(6, 'Bloomberg', 'assets/img/antara/logo/mitra/logo-bloomberg.png'),
(7, 'Efe', 'assets/img/antara/logo/mitra/logo-efe.png'),
(8, 'Kyodo news', 'assets/img/antara/logo/mitra/logo-kyodo-news.png'),
(9, 'Oana', 'assets/img/antara/logo/mitra/logo-oana.png'),
(10, 'Sputnik', 'assets/img/antara/logo/mitra/logo-sputnik.png'),
(11, 'Thomson Reuters', 'assets/img/antara/logo/mitra/logo-thomson-reuters.png'),
(12, 'Ttxvn', 'assets/img/antara/logo/mitra/logo-ttxvn.png'),
(13, 'Xinhua News Agency', 'assets/img/antara/logo/mitra/logo-xinhua-news-agency.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `image`) VALUES
(1, 'Antara News', 'antara news', 'assets/img/antara/logo/product/logo-antara-news.png'),
(2, 'IMCS', 'imcs', 'assets/img/antara/logo/product/logo-imcs.png'),
(3, 'Antara Foto', 'antara foto', 'assets/img/antara/logo/product/logo-antara-foto.png'),
(4, 'Antara TV', 'antara tv', 'assets/img/antara/logo/product/logo-antara-tv.png'),
(5, 'MICE', 'mice', 'assets/img/antara/logo/product/logo-mice.png'),
(6, 'Lembaga Pendidikan Antara', 'lpa', 'assets/img/antara/logo/product/logo-lpa.png'),
(7, 'Layanan Analisa Dan Informasi', 'layanan analisa dan informasi', 'assets/img/antara/logo/product/logo-layanan-analisa-dan-informasi.png'),
(8, 'Branda', 'branda', 'assets/img/antara/logo/product/logo-branda.png'),
(9, 'Reuters', 'reuters', 'assets/img/antara/logo/product/logo-reuters.png'),
(10, 'Bloomberg', 'bloomberg', 'assets/img/antara/logo/product/logo-bloomberg.png'),
(11, 'Sewa Perangkat Keras', 'sewa perangkat keras', 'assets/img/antara/logo/product/logo-sewa-perangkat-keras.png'),
(12, 'LSEG Data & Analitics', 'lseg', 'assets/img/antara/logo/product/logo-lseg.png');

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
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
