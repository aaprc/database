-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 01:03 PM
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
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kwitansi`
--

CREATE TABLE `kwitansi` (
  `no_kwitansi` char(8) NOT NULL,
  `nama_pembeli` varchar(30) DEFAULT NULL,
  `tgl_pembelian` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kwitansi`
--

INSERT INTO `kwitansi` (`no_kwitansi`, `nama_pembeli`, `tgl_pembelian`) VALUES
('1287', 'tiara', '6 Mei 2021'),
('2111', 'noya', '20 Agustus 2022'),
('2202', 'natasya', '25 Mei 2021'),
('2277', 'jennie', '1 Agustus 2022'),
('2342', 'Lisa', '28 Juni 2021'),
('2417', 'jisoo', '17 Agustus 2022'),
('2424', 'caca', '15 April 2021'),
('2582', 'Giselle', '12 Juni 2021'),
('2902', 'dhea', '1 Juni 2021'),
('2992', 'Rose', '9 Juli 2022');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `kode_mobil` int(5) NOT NULL,
  `brand` varchar(25) DEFAULT NULL,
  `merk` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`kode_mobil`, `brand`, `merk`) VALUES
(1, 'toyota', 'raize'),
(2, 'mitsubishi', 'expander'),
(3, 'honda', 'civic'),
(4, 'jeep', 'wrangler'),
(5, 'mini', 'mini cooper'),
(6, 'mazda', 'mazda2'),
(7, 'hyundai', 'creta'),
(8, 'lexus', 'lexus RZ'),
(9, 'porsche', 'porsche 911'),
(10, 'BMW', 'BMW M3');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no_pembayaran` int(5) NOT NULL,
  `harga` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`no_pembayaran`, `harga`) VALUES
(1, '235.000.000,00'),
(2, '312.000.000,00'),
(3, '533.000.000,00'),
(4, '1.730.000.000,00'),
(5, '1.180.000.000,00'),
(6, '348.000.000,00'),
(7, '299.000.000,00'),
(8, '999.000.000,00'),
(9, '3.599.000.000,00'),
(10, '2.059.000.000,00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kwitansi`
--
ALTER TABLE `kwitansi`
  ADD PRIMARY KEY (`no_kwitansi`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`kode_mobil`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no_pembayaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
