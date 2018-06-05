-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 12:10 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_websiteiot`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `level`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(12, 'ramon', 'ramon', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `no` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_carousel`
--

CREATE TABLE `tb_carousel` (
  `no` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_carousel`
--

INSERT INTO `tb_carousel` (`no`, `judul`, `isi`) VALUES
(2, 'Berita Cuaca Hati ini', '123'),
(3, 'Cuaca hari ini', 'Cuaca hari ini cerah, tidak ada kendala sama sekali. prediksi akan gerimis siang hari'),
(4, 'Carou 2', 'ini carousel 2'),
(5, 'carou 1', 'qweqweqweqw'),
(6, 'Berita Cuaca Hari Ini', 'Untuk cuaca di daerah A sedang cerah berawan, tetapi ada kemungkinan hujan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_carousel2`
--

CREATE TABLE `tb_carousel2` (
  `no` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_carousel2`
--

INSERT INTO `tb_carousel2` (`no`, `judul`, `isi`) VALUES
(1, 'carou 2', '2222'),
(2, 'Cuaca di daerah Jawa Tengah', 'Cuaca di daerah Jawa Tengah sedang dilanda hujan deras disertai angin, untuk penghuni daerah Jawa Tengah dimohon untuk tidak melakukan aktifitas diluar ruangan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_carousel3`
--

CREATE TABLE `tb_carousel3` (
  `no` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_carousel3`
--

INSERT INTO `tb_carousel3` (`no`, `judul`, `isi`) VALUES
(1, 'carou 3', '21312312'),
(2, 'Cuaca di daerah Jawa Timur', 'Cuaca di daerah Jawa Timur sedang berawan desertai gerimis ringan. para warga daerah Jawa Timur dimohon untuk membawa peralatan pelindung diri dari hujan seperti payung dan jas hujan.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_carousel`
--
ALTER TABLE `tb_carousel`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_carousel2`
--
ALTER TABLE `tb_carousel2`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_carousel3`
--
ALTER TABLE `tb_carousel3`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_carousel`
--
ALTER TABLE `tb_carousel`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_carousel2`
--
ALTER TABLE `tb_carousel2`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_carousel3`
--
ALTER TABLE `tb_carousel3`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
