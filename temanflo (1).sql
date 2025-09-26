-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2025 at 04:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temanflo`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`email`, `password`) VALUES
('razif@gmail.com', 'razif');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `jenis_buket` enum('buket_bunga','buket_snack','buket_boneka','buket_uang') NOT NULL,
  `tema` set('graduation','birthday','wedding') NOT NULL,
  `size` enum('kecil','sedang','besar') NOT NULL,
  `harga` decimal(10,3) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`jenis_buket`, `tema`, `size`, `harga`, `deskripsi`) VALUES
('buket_snack', 'graduation,birthday', 'sedang', 15.000, 'snack yang manis manis'),
('buket_bunga', 'graduation,birthday,wedding', 'sedang', 17.000, 'bunga mainan'),
('buket_bunga', 'wedding', 'kecil', 666.000, 'gg'),
('', '', '', 0.000, ''),
('buket_snack', 'graduation', 'kecil', 34.000, 'w'),
('buket_snack', 'graduation', 'sedang', 34.000, 'd'),
('buket_boneka', '', '', 12000.000, 'tes'),
('buket_snack', 'graduation', 'kecil', 3.000, 'tes3'),
('buket_snack', 'graduation', 'kecil', 4.000, 'tes4'),
('buket_snack', 'graduation,birthday,wedding', 'kecil', 5.000, 'tes5'),
('buket_bunga', 'graduation,birthday', 'kecil', 34.000, 'Test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
