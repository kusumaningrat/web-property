-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 12, 2022 at 03:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_perumahan`
--

CREATE TABLE `tbl_detail_perumahan` (
  `id` char(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `blok` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_perumahan`
--

INSERT INTO `tbl_detail_perumahan` (`id`, `nama`, `blok`) VALUES
('A001', 'A1', 'A'),
('A002', 'A2', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perumahan`
--

CREATE TABLE `tbl_perumahan` (
  `kode_perumahan` char(2) NOT NULL,
  `nama_perumahan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_perumahan`
--

INSERT INTO `tbl_perumahan` (`kode_perumahan`, `nama_perumahan`) VALUES
('A', 'Perumahan Blok A'),
('B', 'Perumahan Blok B');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `level` enum('admin','customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `level`) VALUES
(1, 'Kusuma Ningrat', 'kusumaningrat', '$2y$10$WWxBlqcHkpBAErRZR5UtSO/ath2.8VlekrWUSrm4bgi3N7jr1ba0C', 'customer'),
(3, 'Admin', 'admin', '$2y$10$8A0GMm1QIkiQg1SnBcsuEeBPKzlURFqrhgVDgel8oy5mE3TWvxsSu', 'admin'),
(5, 'Example Customer', 'ecustomer', '39081371acde5c826d567c0630af8a21', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_perumahan`
--
ALTER TABLE `tbl_detail_perumahan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `perumahan` (`blok`);

--
-- Indexes for table `tbl_perumahan`
--
ALTER TABLE `tbl_perumahan`
  ADD KEY `kode_perumahan` (`kode_perumahan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_detail_perumahan`
--
ALTER TABLE `tbl_detail_perumahan`
  ADD CONSTRAINT `fk_perumahan` FOREIGN KEY (`blok`) REFERENCES `tbl_perumahan` (`kode_perumahan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
