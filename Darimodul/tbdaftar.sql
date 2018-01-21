-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 11:25 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbdaftar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbdaftar`
--

CREATE TABLE IF NOT EXISTS `tbdaftar` (
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `umur` int(11) NOT NULL,
  PRIMARY KEY (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbdaftar`
--

INSERT INTO `tbdaftar` (`nama`, `kelas`, `jenis`, `alamat`, `foto`, `umur`) VALUES
('gtrere', 'Pagi', '', '', '', 20),
('Joni', 'Pagi', 'Laki-laki', 'Blora', '', 23),
('RINI', 'Malam', 'Perempuan', 'Blora', '', 50),
('Roni', 'Pagi', 'Laki-laki', 'Blora', 'a.jpg', 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
