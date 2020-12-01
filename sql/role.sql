-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 05:59 AM
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
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idRole` int(2) NOT NULL,
  `Role` varchar(45) DEFAULT NULL,
  `global_role` enum('Administrator','Dosen Pembimbing','Admin Prodi','Koordinator TA','KPS','Mahasiswa') NOT NULL,
  `id_prodi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idRole`, `Role`, `global_role`, `id_prodi`) VALUES
(1, 'Administrator', 'Administrator', 0),
(2, 'Dosen Pembimbing', 'Dosen Pembimbing', 0),
(3, 'Admin Prodi MIF', 'Admin Prodi', 1),
(4, 'Admin Prodi TKK', 'Admin Prodi', 2),
(5, 'Admin Prodi TIF', 'Admin Prodi', 3),
(6, 'Koordinator TA MIF', 'Koordinator TA', 1),
(7, 'Koordinator TA TKK', 'Koordinator TA', 2),
(8, 'Koordinator TA TIF', 'Koordinator TA', 3),
(9, 'Ketua Program Studi MIF', 'KPS', 1),
(10, 'Ketua Program Studi TKK', 'KPS', 2),
(11, 'Ketua Program Studi TIF', 'KPS', 3),
(12, 'Mahasiswa', 'Administrator', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
