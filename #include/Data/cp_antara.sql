-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 12:08 PM
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
(2, 'Antara News', 'antara-news', 'assets/img/antara/AntaraNews.png'),
(3, 'IMCS', 'imcs', 'assets/img/antara/IMCS.png'),
(4, 'Antara PRWIRE', 'antara-prwire', 'assets/img/antara/AntaraPRWIRE.png'),
(5, 'Antara Foto', 'antara-foto', 'assets/img/antara/AntaraFoto.png'),
(6, 'Antara Digital Media', 'antara-digital-media', 'assets/img/antara/AntaraDigitalMedia.png'),
(7, 'Antara TV', 'antara-tv', 'assets/img/antara/AntaraTV.png'),
(8, 'MICE', 'mice', 'assets/img/antara/Mice.png'),
(9, 'Lembaga Pendidikan Antara', 'lpja', 'assets/img/antara/Asj.png'),
(10, 'Galeri Foto', 'galeri-foto', 'assets/img/antara/GaleriFoto.png'),
(11, 'Layanan Data', 'layanan-data', 'assets/img/antara/LayananData.png'),
(12, 'Aktivasi Strategi Komunikasi', 'aktivasi-strategi-komunikasi', 'assets/img/antara/AktivasiStrategiKomunikasi.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
