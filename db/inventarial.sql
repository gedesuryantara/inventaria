-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2024 at 05:50 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventarial`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int NOT NULL,
  `nama_barang` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `stok` int NOT NULL,
  `id_rak` int NOT NULL,
  `gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `kolom` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `keterangan`, `stok`, `id_rak`, `gambar`, `kolom`) VALUES
(8, 'addbarang tws', '123', 123, 3, '659ed50dae385.jpeg', 1),
(9, 'ikan', '123', 123, 3, NULL, 1),
(10, 'ikana', '11', 1, 2, NULL, 10),
(11, 'tedupad12312', '21', 123, 4, '659db15fd7e78.jpg', 18);

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id_rak` int NOT NULL,
  `nama_rak` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_kolom` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id_rak`, `nama_rak`, `jumlah_kolom`) VALUES
(1, 'barang tes1', 10),
(2, 'barang tes1', 10),
(3, 'abc', 1),
(4, 'ikan', 123),
(5, '123', 123),
(6, 'surya', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'Admin', '$2y$10$R4esdRpPS3oHyBWrINbseupCmUqI0CF8hFfhKh5Ocf9tSxplXk52e', '1'),
(25, 'moka 1', '$2y$10$Qli2CpgF05dvU2gCtJ5N7uumVxLDZnvRrTZmVBJPcFGRfOV7apgeC', '0'),
(26, 'Adel', '$2y$10$J5e1vFzLTXIg0k5jPKDEbup7CxI6DYJNMlBMbu27sfwmBDqSxrQh.', '0'),
(27, 'suryan', '$2y$10$XHIjgVY/DQOoG.KyNtMNKOHxHbQ7RYMDwFeFAbE9uxJdnz0lMNW2e', '0'),
(28, 'tara', '$2y$10$hY2XkwSpk7wv7ZbUwjE.a.c41DAPphsaY.Q6cZ4Wkgc6MusiYY.ZS', '0'),
(30, 'mici', '$2y$10$EyDoEwA8yikObbavIaLNf.fzNS6hSoRqJxJcmWyIg0AKWx22eYiqe', '0'),
(31, 'Ashel', '$2y$10$W/YsqUP7SL71b/QDe5Wibe5U8kCy5EmhPjSQF7rKgKUMWLmFBeJpW', '0'),
(32, 'Marsha', '$2y$10$BY1IYLU/QMO9SBF/xLcogu7WAmFS9KAKfn.3fXFlyUwt.AfXDoNjW', '0'),
(33, 'Freya', '$2y$10$5IIj66GVAculGhDSDHTb3OtDxJJBkEimZ38BJlFsp5LpvorB69rt2', '0'),
(34, 'gula', '$2y$10$QVK45iujv2eGAL3JSgDHg.AEoNvPcbiu7nK4fF42VzPCWQJsT1tAK', '0'),
(35, 'lisaa', '$2y$10$Cnpdx23e6eJMsFAKQhtrsuE2NSkn0WBymc4o5ymRsWwdSnRUTEnni', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_rak` (`id_rak`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_rak`) REFERENCES `rak` (`id_rak`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
