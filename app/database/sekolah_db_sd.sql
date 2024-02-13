-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 10:57 AM
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
-- Database: `sekolah_db_sd`
--

-- --------------------------------------------------------

--
-- Table structure for table `s_gallery`
--

CREATE TABLE `s_gallery` (
  `id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `categori` varchar(64) NOT NULL,
  `size` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_pengguna`
--

CREATE TABLE `s_pengguna` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `user_level` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_sistem`
--

CREATE TABLE `s_sistem` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `kepala_sekolah` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `informasi` text NOT NULL,
  `pendidikan` varchar(64) NOT NULL,
  `flags` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_sistem`
--

INSERT INTO `s_sistem` (`id`, `nama_sekolah`, `kepala_sekolah`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `logo`, `informasi`, `pendidikan`, `flags`) VALUES
(1, 'MI AL Falah Klender', '-', 'Jl. Pahlawan Revolusi No.2B 10, RT.10/RW.3, Klender, Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13470', 'KLENDER', 'KEC. DUREN SAWIT', 'KOTA JAKARTA TIMUR', 'logo.png', '', 'Madrasah Ibtidaiyah', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s_gallery`
--
ALTER TABLE `s_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_pengguna`
--
ALTER TABLE `s_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_sistem`
--
ALTER TABLE `s_sistem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `s_gallery`
--
ALTER TABLE `s_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s_pengguna`
--
ALTER TABLE `s_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s_sistem`
--
ALTER TABLE `s_sistem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
