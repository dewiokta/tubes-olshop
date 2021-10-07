-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 01:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_besar`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_beli` datetime NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `tanggal_beli`, `total`) VALUES
(6, 3, 1, '2020-05-16 00:00:00', 543000),
(34, 3, 1, '2020-05-16 00:00:00', 2123000),
(35, 3, 3, '2020-05-16 00:00:00', 1383000),
(36, 3, 2, '2020-05-16 00:00:00', 288000),
(37, 3, 1, '2020-05-16 00:00:00', 1253000),
(38, 3, 3, '2020-05-16 00:00:00', 318000),
(39, 3, 3, '2020-05-16 00:00:00', 2183000),
(40, 3, 1, '2020-05-16 00:00:00', 873000),
(41, 3, 3, '2020-05-16 00:00:00', 863000),
(42, 3, 3, '2020-05-16 18:46:28', 2338000),
(43, 3, 2, '2020-05-16 23:52:55', 1493000),
(44, 3, 2, '2020-05-17 00:16:28', 568000),
(45, 0, 1, '2020-05-17 10:25:08', 593000),
(46, 9, 3, '2020-05-17 11:12:58', 583000),
(47, 10, 2, '2020-05-17 11:18:38', 438000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`) VALUES
(11, 17, 2, 2),
(33, 34, 10, 2),
(34, 34, 2, 2),
(35, 34, 17, 1),
(36, 35, 3, 2),
(37, 35, 17, 1),
(38, 36, 3, 1),
(39, 37, 2, 2),
(40, 37, 15, 2),
(41, 38, 2, 1),
(42, 39, 3, 2),
(43, 39, 17, 2),
(44, 40, 3, 3),
(45, 41, 3, 3),
(46, 42, 2, 5),
(47, 42, 5, 3),
(48, 43, 3, 3),
(49, 43, 1, 3),
(50, 44, 3, 2),
(51, 45, 3, 2),
(52, 46, 3, 2),
(53, 47, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `no_telp`, `alamat`) VALUES
(3, 'okta', 'okta', 'Dewi Okta', '085797825286', 'Magetan'),
(4, 'dewiokta', 'dewi555@', 'DEWI OKTAVIA EFENDI', '08685674654', 'Malang'),
(5, 'viaa', 'via555@', 'dewi oktavia', '085666777444', 'Jakarta'),
(6, 'fendy', 'fendy11', 'fendy', '08765487654', 'Manisrejo'),
(7, 'meghan', '1234', 'Meghan', '0876585565', 'Jakarta'),
(8, 'anissa', 'aulia', 'anissa', '08889997764', 'Jogja'),
(9, 'sehun', 'piyik', 'oh sehun', '0108765427', 'Seoul'),
(10, 'chan', 'tall', 'chanyeol', '091872728', 'korea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
