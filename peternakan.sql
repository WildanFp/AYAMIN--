-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 08:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peternakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_kandang`
--

CREATE TABLE `kondisi_kandang` (
  `id` int(11) NOT NULL,
  `kd_peternak` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time NOT NULL,
  `suhu_1` smallint(6) NOT NULL,
  `kelembapan_1` smallint(6) NOT NULL,
  `suhu_2` smallint(6) NOT NULL,
  `kelembapan_2` smallint(6) NOT NULL,
  `suhu_3` smallint(6) NOT NULL,
  `kelembapan_3` smallint(6) NOT NULL,
  `jml_ayam` int(11) NOT NULL,
  `foto_ayam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_grup` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL,
  `create_login` datetime NOT NULL,
  `stok` int(50) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `id_grup`, `nama`, `alamat`, `kota`, `telepon`, `email`, `last_login`, `create_login`, `stok`, `harga`) VALUES
('admin', 'admin', 'Admin', 'Sofiani', '', '', '', '', '2017-12-11 10:53:27', '2017-05-01 00:00:00', 0, 0),
('adminbaru', 'e172dd95f4feb21412a692e73929961e', 'Admin', 'Ezet', 'YTNKTS', 'NGALAM MBOIS ', '2202020202202', 'yoi@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
('Robert', '684c851af59965b680086b7b4896ff98', 'Penjual', 'Robert Tijani Saifunnawas', 'Malang', 'Malang', '22202202', 'roberttijani@gmail.com', '0000-00-00 00:00:00', '2022-03-14 01:46:36', 5000, 30000),
('wildan', 'af6b3aa8c3fcd651674359f500814679', 'Peternak', 'Wildan Abdul', 'Singosari', 'Malang', '2313123123', 'wildanoke@gmail.com', '0000-00-00 00:00:00', '2022-03-14 01:49:48', 3000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `kd_peternak` varchar(100) NOT NULL,
  `kd_penjual` varchar(100) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `waktu_transaksi` time NOT NULL,
  `jml` int(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `treshold`
--

CREATE TABLE `treshold` (
  `kd_peternak` varchar(40) NOT NULL,
  `suhu_1` smallint(6) NOT NULL,
  `suhu_2` smallint(6) NOT NULL,
  `suhu_3` smallint(6) NOT NULL,
  `kelembapan_1` smallint(6) NOT NULL,
  `kelembapan_2` smallint(6) NOT NULL,
  `kelembapan_3` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kondisi_kandang`
--
ALTER TABLE `kondisi_kandang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treshold`
--
ALTER TABLE `treshold`
  ADD PRIMARY KEY (`kd_peternak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kondisi_kandang`
--
ALTER TABLE `kondisi_kandang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
