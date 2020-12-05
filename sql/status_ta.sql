-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 06:00 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinta`
--

-- --------------------------------------------------------

--
-- Table structure for table `status_ta`
--

CREATE TABLE `status_ta` (
  `id_status` int(2) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_ta`
--

INSERT INTO `status_ta` (`id_status`, `status`) VALUES
(1, 'Pengajuan Judul'),
(2, 'ACC Judul'),
(3, 'Judul Ditolak'),
(4, 'Bimbingan Seminar'),
(5, 'Pengajuan Seminar'),
(6, 'Seminar'),
(7, 'Bimbingan Sidang'),
(8, 'Pengajuan Sidang'),
(9, 'Sidang'),
(10, 'Selesai Sidang'),
(11, 'Lulus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `status_ta`
--
ALTER TABLE `status_ta`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `status_ta`
--
ALTER TABLE `status_ta`
  MODIFY `id_status` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
