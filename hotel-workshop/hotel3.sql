-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2022 at 11:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel3`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_kamar`
--

CREATE TABLE `tbl_jenis_kamar` (
  `id_jenis` int(11) NOT NULL,
  `kamar` varchar(11) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenis_kamar`
--

INSERT INTO `tbl_jenis_kamar` (`id_jenis`, `kamar`, `keterangan`, `harga`, `foto`) VALUES
(5, 'Single room', 'Satu tempat tidur,Sofa,Kamar mandi', 150, '1.jpg'),
(6, 'Twin room', 'Dua tempat tidur,Sofa,Kamar mandi', 200, '3.jpg'),
(7, 'Double room', 'Dua Temoat Tidur,Satu tempat tidur, berekuran besarSofa,Kamar mandi', 310, 'f.jpg'),
(8, 'Family room', 'tiga tempat tidur,Sofa,Kamar mandi', 350, 'aa.jpg'),
(9, 'Standar roo', 'Televisi,Meja,Kamar mandi,Lemari es', 400, 'h.jpg'),
(10, 'Superior ro', 'Televisi,Meja,Kamar mandi,Lemari es', 435, 'g.jpg'),
(11, 'Delux room', 'Televisi,Meja,Kamar mandi,Lemari es', 450, 'c.jpg'),
(12, 'Junior suit', 'Ruang tamu terpisah', 500, 'i.jpg'),
(13, 'Suit room', 'kamar tidur,dapur,ruang tamu,kamar mandi', 600, 'a.jpg'),
(14, 'Presidental', 'Fasilitas Terbaik', 700, 'b.jpg'),
(15, 'Cabana room', 'Televisi,Meja,Kamar mandi,Lemari es', 200, 'e.jpg'),
(16, 'VIP room', 'Televisi,Meja,Kamar mandi,Lemari es,beserta makanan', 300, 'd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nomor_kamar` varchar(20) NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id_kamar`, `nomor_kamar`, `id_jenis`) VALUES
(6, 'A4', 6),
(7, '', 7),
(14, '', 8),
(15, '', 9),
(16, '', 10),
(17, '', 11),
(19, '', 12),
(20, '', 13),
(21, '', 14),
(22, '', 15),
(23, '', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konsumen`
--

CREATE TABLE `tbl_konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_tengah` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `no_identitas` varchar(100) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_konsumen`
--

INSERT INTO `tbl_konsumen` (`id_konsumen`, `nama_depan`, `nama_tengah`, `nama_belakang`, `alamat`, `kota`, `provinsi`, `negara`, `no_identitas`, `no_tlp`, `email`) VALUES
(1, 'Mrs.', 'Juni', 'Guanawan', 'Bantarsari', 'Tasikmalaya', 'Jawabarat', 'Indonesia', '8675653567798', '083827736561', 'juni123@gmail.com'),
(2, 'Ms.', 'Risma', 'Herawati', 'Indihiang', 'Tasikmalaya', 'Jawa barat', 'Indonesia', '5767698748944', '0877987754778', 'risma123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_konsumen` int(12) NOT NULL,
  `id_jenis` int(12) NOT NULL,
  `id_kamar` int(12) NOT NULL,
  `nama_konsumen` varchar(100) NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `nomor_kamar` varchar(50) NOT NULL,
  `waktu_sewa` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jenis_pembayaran` enum('Bayar di tempat','Dana') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_konsumen`, `id_jenis`, `id_kamar`, `nama_konsumen`, `nama_kamar`, `nomor_kamar`, `waktu_sewa`, `harga`, `jenis_pembayaran`) VALUES
(1, 1, 6, 6, 'Juni Gunawan', 'Delux Premium', '', '2', '200000', 'Bayar di tempat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` enum('client','admin') NOT NULL,
  `aktivasi` enum('1','0') NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `hak_akses`, `aktivasi`, `no_hp`) VALUES
(1, 'Laila', '202cb962ac59075b964b07152d234b70', 'admin', '1', '0997089'),
(31, 'juni', '202cb962ac59075b964b07152d234b70', 'client', '1', '565ey658i769'),
(32, 'haikal', 'a847b53f9999fc735ca2b6f1419c93d0', 'client', '1', '56856856'),
(33, 'husni', '827ccb0eea8a706c4c34a16891f84e7b', 'client', '1', '0997089'),
(34, 'husni', '827ccb0eea8a706c4c34a16891f84e7b', 'client', '1', '0864467473'),
(41, 'Risma', '3a2d7564baee79182ebc7b65084aabd1', 'client', '1', '083827736562');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jenis_kamar`
--
ALTER TABLE `tbl_jenis_kamar`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jenis_kamar`
--
ALTER TABLE `tbl_jenis_kamar`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
