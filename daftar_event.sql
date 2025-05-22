-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2024 at 08:43 PM
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
-- Database: `daftar_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_seminar`
--

CREATE TABLE `data_seminar` (
  `id` int(11) NOT NULL,
  `nim` int(6) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `tahun_masuk` int(5) NOT NULL,
  `Pekerjaan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour_mobilelegend`
--

CREATE TABLE `tour_mobilelegend` (
  `id` int(11) NOT NULL,
  `nama_tim` varchar(255) NOT NULL,
  `pemain_1` varchar(255) NOT NULL,
  `pemain_2` varchar(255) NOT NULL,
  `pemain_3` varchar(255) NOT NULL,
  `pemain_4` varchar(255) NOT NULL,
  `pemain_5` varchar(255) NOT NULL,
  `ktm_1` varchar(255) NOT NULL,
  `ktm_2` varchar(255) NOT NULL,
  `ktm_3` varchar(255) NOT NULL,
  `ktm_4` varchar(255) NOT NULL,
  `ktm_5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_seminar`
--
ALTER TABLE `data_seminar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_mobilelegend`
--
ALTER TABLE `tour_mobilelegend`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_seminar`
--
ALTER TABLE `data_seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tour_mobilelegend`
--
ALTER TABLE `tour_mobilelegend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
