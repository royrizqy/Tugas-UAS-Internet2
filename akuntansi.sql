-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 04:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akuntansi`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurnalumum`
--

CREATE TABLE `jurnalumum` (
  `id` int(11) NOT NULL,
  `tgl_pembelian` varchar(20) NOT NULL,
  `jurnal` varchar(20) NOT NULL,
  `akun_debit` varchar(20) NOT NULL,
  `total_debit` int(10) NOT NULL,
  `akun_kredit` varchar(20) NOT NULL,
  `total_kredit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnalumum`
--

INSERT INTO `jurnalumum` (`id`, `tgl_pembelian`, `jurnal`, `akun_debit`, `total_debit`, `akun_kredit`, `total_kredit`) VALUES
(1, '01 December 2022', 'Penerimaan Kas', 'Roy Rizqy', 5000000, 'KAS', 5000000),
(2, '06 December 2022', 'Penerimaan Kas', 'KAS', 2500000, 'Raffi ', 2500000),
(3, '10 December 2022', 'Penerimaan Kas', 'Rio', 3000000, 'KAS', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_kas`
--

CREATE TABLE `jurnal_kas` (
  `id` int(11) NOT NULL,
  `tgl_penerimaan` varchar(20) NOT NULL,
  `no_akun` int(10) NOT NULL,
  `nama_akun` varchar(40) NOT NULL,
  `saldo` int(10) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal_kas`
--

INSERT INTO `jurnal_kas` (`id`, `tgl_penerimaan`, `no_akun`, `nama_akun`, `saldo`, `jenis`) VALUES
(1, '01 December 2022', 12224, 'Roy Rizqy', 5000000, 'Debit'),
(2, '06 December 2022', 32224, 'Raffi ', 2500000, 'Kredit'),
(3, '10 December 2022', 42224, 'Rio', 3000000, 'Debit');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_pengeluaran_kas`
--

CREATE TABLE `jurnal_pengeluaran_kas` (
  `id` int(11) NOT NULL,
  `tgl_pengeluaran` varchar(20) NOT NULL,
  `no_akun` int(10) NOT NULL,
  `nama_akun` varchar(40) NOT NULL,
  `saldo` int(10) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `id`, `pass`, `level`) VALUES
('admin', 1, 'admin', 'admin'),
('manager', 2, 'manager', 'manager'),
('accounting', 3, 'accounting', 'accounting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurnalumum`
--
ALTER TABLE `jurnalumum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnal_kas`
--
ALTER TABLE `jurnal_kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnal_pengeluaran_kas`
--
ALTER TABLE `jurnal_pengeluaran_kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurnalumum`
--
ALTER TABLE `jurnalumum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurnal_kas`
--
ALTER TABLE `jurnal_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurnal_pengeluaran_kas`
--
ALTER TABLE `jurnal_pengeluaran_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
