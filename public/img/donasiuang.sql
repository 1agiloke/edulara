-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2017 at 07:24 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbcoba`
--

-- --------------------------------------------------------

--
-- Table structure for table `donasiuang`
--

CREATE TABLE `donasiuang` (
  `id` varchar(9) NOT NULL,
  `jenis` tinyint(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `hp` int(12) NOT NULL,
  `telepon` int(10) DEFAULT NULL,
  `b_donasi` int(12) NOT NULL,
  `periode` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `waktu` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasiuang`
--

INSERT INTO `donasiuang` (`id`, `jenis`, `nama`, `alamat`, `kota`, `hp`, `telepon`, `b_donasi`, `periode`, `username`, `status`, `waktu`) VALUES
('DU001', 1, 'hj', 'hj', '671', 2147483647, 0, 500000, 9, 'bonatua', 2, '2016-12-30 12:21:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasiuang`
--
ALTER TABLE `donasiuang`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
