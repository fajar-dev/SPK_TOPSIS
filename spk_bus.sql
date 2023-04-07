-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 01:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_alternatif`
--

CREATE TABLE `tab_alternatif` (
  `id_alternatif` varchar(10) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_alternatif`
--

INSERT INTO `tab_alternatif` (`id_alternatif`, `nama_alternatif`) VALUES
('1', 'Karung 1'),
('2', 'Karung 2'),
('3', 'Karung 3'),
('4', 'Karung 4');

-- --------------------------------------------------------

--
-- Table structure for table `tab_kriteria`
--

CREATE TABLE `tab_kriteria` (
  `id_kriteria` varchar(10) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot` float NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_kriteria`
--

INSERT INTO `tab_kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `status`) VALUES
('1', 'Kadar air', 4, 'Cost'),
('2', 'Kadar kotoran', 4, 'Cost'),
('3', 'Nilai cacat', 4, 'Cost'),
('4', 'Ukuran', 3, 'Benefit'),
('5', 'Bau biji', 4, 'Benefit');

-- --------------------------------------------------------

--
-- Table structure for table `tab_topsis`
--

CREATE TABLE `tab_topsis` (
  `id_alternatif` varchar(10) NOT NULL,
  `id_kriteria` varchar(10) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_topsis`
--

INSERT INTO `tab_topsis` (`id_alternatif`, `id_kriteria`, `nilai`) VALUES
('1', '1', 3),
('1', '2', 4),
('1', '3', 7),
('1', '4', 2),
('1', '5', 2),
('2', '1', 3),
('2', '2', 1),
('2', '3', 4),
('2', '4', 1),
('2', '5', 2),
('3', '1', 2),
('3', '2', 1),
('3', '3', 6),
('3', '4', 2),
('3', '5', 2),
('4', '1', 1),
('4', '2', 1),
('4', '3', 4),
('4', '4', 1),
('4', '5', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_alternatif`
--
ALTER TABLE `tab_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tab_kriteria`
--
ALTER TABLE `tab_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tab_topsis`
--
ALTER TABLE `tab_topsis`
  ADD PRIMARY KEY (`id_alternatif`,`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Constraints for dumped tables
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
