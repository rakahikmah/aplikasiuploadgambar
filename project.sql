-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2016 at 01:52 PM
-- Server version: 5.5.52-MariaDB-1ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `barang_id` int(2) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(35) NOT NULL,
  `harga` int(10) NOT NULL,
  PRIMARY KEY (`barang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barang_id`, `nama_barang`, `harga`) VALUES
(22, 'kaos', 100000),
(27, 'laptop', 3500000),
(28, 'tas', 300000),
(29, 'baju', 1250000),
(30, 'tas', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `bos`
--

CREATE TABLE IF NOT EXISTS `bos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `akses` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bos`
--

INSERT INTO `bos` (`id`, `username`, `password`, `akses`) VALUES
(1, 'raka', '1a1dc91c907325c69271ddf0c944bc72', 1),
(2, 'rama', 'c47d187067c6cf953245f128b5fde62a', 0),
(3, 'bagus', '90bf52f54d3c02484ee12d89f2ce3c55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `nama_file` varchar(100) DEFAULT NULL,
  `ukuran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`nama_file`, `ukuran`) VALUES
('bootstrap-3.3.6.zip', 4119196),
('ibukota.dat', 54),
('bab 1 pemrograman c.rar', 949732),
('s1.jpg', 876672);

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama`, `ukuran`, `tipe`) VALUES
(2, 'tes.png', 218144, 'image/png'),
(3, 'pertanyaan.png', 56416, 'image/png'),
(4, 's1.jpg', 876672, 'image/jpeg'),
(5, 'scan0011.jpg', 142999, 'image/jpeg'),
(7, 'CodingSnippet.jpg', 1106654, 'image/jpeg'),
(8, 'otak.jpg', 166991, 'image/jpeg'),
(9, 'ubuntu.jpg', 190106, 'image/jpeg'),
(11, 'macan.jpg', 56353, 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` char(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jkelamin` varchar(15) NOT NULL,
  `foto` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jkelamin`, `foto`) VALUES
('41814010066', 'Raka Hikmah Ramadhan', 'Pria', 'scan0011.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `nim` char(11) NOT NULL,
  `uts` int(3) DEFAULT NULL,
  `tugas` int(3) DEFAULT NULL,
  `uas` int(3) DEFAULT NULL,
  `mkuliah` varchar(20) DEFAULT NULL,
  `hasilakhir` char(1) DEFAULT NULL,
  PRIMARY KEY (`nim`),
  KEY `nim_index` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nim`, `uts`, `tugas`, `uas`, `mkuliah`, `hasilakhir`) VALUES
('41814010066', 90, 90, 90, 'Data Mining', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `kode_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`kode_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `users_id`, `tanggal_transaksi`, `total`) VALUES
(1, 2, '2016-08-01', 400000),
(2, 1, '2016-08-10', 600000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
