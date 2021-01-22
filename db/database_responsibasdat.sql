-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 02:18 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_responsibasdat`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `id_barang`, `jumlah_barang`) VALUES
(2395, 13123, 500);

--
-- Triggers `pembelian`
--
DELIMITER $$
CREATE TRIGGER `Pembelian Barang` AFTER INSERT ON `pembelian` FOR EACH ROW BEGIN
	UPDATE stokpenjualan SET stok=stok-NEW.jumlah_barang
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stokpenjualan`
--

CREATE TABLE `stokpenjualan` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `harga_beli` int(20) NOT NULL,
  `harga_jual` int(20) NOT NULL,
  `stok` int(20) NOT NULL,
  `nama_supplier` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stokpenjualan`
--

INSERT INTO `stokpenjualan` (`id_barang`, `nama_barang`, `harga_beli`, `harga_jual`, `stok`, `nama_supplier`) VALUES
(13123, 'Tanah', 500000, 700000, 2500, 'SABAR'),
(19674, 'Batu Bata', 800, 1000, 1001, 'XIAOMI'),
(32187, 'Semen', 44000, 50000, 1000, 'ANKA'),
(34673, 'Triplek', 10000, 12000, 80, 'GENTHA'),
(38457, 'Cat Tembok Dulux', 190000, 200000, 20, 'DJAMAL'),
(45468, 'Mata Bor', 24000, 27000, 100, 'NACHI'),
(54678, 'Batako', 2500, 3000, 300, 'MITSUBISHI'),
(63854, 'Asbes', 50000, 53000, 710, 'REDO'),
(121342, 'LEM PIPA', 3000, 4500, 50, 'DEXTONE'),
(123422, 'Plamir', 10000, 12000, 7920, 'SABAR');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(26, 'Naufal', 'nopal', '6efc67e68005e7503df580d11e5e7a23'),
(27, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(28, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(29, 'Dewa', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `stokpenjualan`
--
ALTER TABLE `stokpenjualan`
  ADD PRIMARY KEY (`id_barang`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2396;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `stokpenjualan` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
