-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 03:18 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvmanunggal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `calonkaryawan`
--

CREATE TABLE `calonkaryawan` (
  `id` int(11) NOT NULL,
  `tgl_tes` varchar(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `divisi` enum('Koordinator Pemasaran','Koordinator Operasional','Koordinator Keuangan') NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `tes_kesehatan` enum('Lulus','Tidak Lulus') NOT NULL,
  `psikotes` int(2) NOT NULL,
  `tes_tertulis` int(2) NOT NULL,
  `hasil_akhir` enum('Lulus','Tidak Lulus') NOT NULL,
  `cv` varchar(64) NOT NULL,
  `created_by` varchar(64) NOT NULL,
  `edited_by` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calonkaryawan`
--

INSERT INTO `calonkaryawan` (`id`, `tgl_tes`, `nama`, `divisi`, `alamat`, `tes_kesehatan`, `psikotes`, `tes_tertulis`, `hasil_akhir`, `cv`, `created_by`, `edited_by`) VALUES
(1321, '2018-07-06', 'Test123', 'Koordinator Pemasaran', 'test', 'Lulus', 80, 55, 'Lulus', 'cv_test.pdf', '1', '1'),
(1887, '2018-07-06', 'Alpha', 'Koordinator Pemasaran', 'test', '', 88, 89, 'Lulus', 'cv_test2.pdf', '1', '1'),
(9971, '2018-07-19', 'Joni', 'Koordinator Pemasaran', 'asd12343', '', 50, 50, 'Tidak Lulus', 'cv_test.pdf', '1', '1'),
(119951, '2018-07-12', 'test', 'Koordinator Pemasaran', 'test', 'Tidak Lulus', 50, 70, 'Tidak Lulus', 'cv_test.pdf', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calonkaryawan`
--
ALTER TABLE `calonkaryawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
