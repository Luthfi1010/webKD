-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2024 at 08:31 PM
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
-- Database: `daftar_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataseminar`
--

CREATE TABLE `dataseminar` (
  `id` int(11) NOT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `nim` varchar(50) DEFAULT NULL,
  `nama_depan` varchar(255) DEFAULT NULL,
  `nama_belakang` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nomorTelepon` varchar(20) DEFAULT NULL,
  `tahun_masuk` varchar(4) DEFAULT NULL,
  `asal_kampus` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `id` int(11) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `pemain_1` varchar(255) NOT NULL,
  `ktm_1` varchar(255) NOT NULL,
  `pemain_2` varchar(255) NOT NULL,
  `ktm_2` varchar(255) NOT NULL,
  `pemain_3` varchar(255) NOT NULL,
  `ktm_3` varchar(255) NOT NULL,
  `pemain_4` varchar(255) NOT NULL,
  `ktm_4` varchar(255) NOT NULL,
  `pemain_5` varchar(255) NOT NULL,
  `ktm_5` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataseminar`
--
ALTER TABLE `dataseminar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataseminar`
--
ALTER TABLE `dataseminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
