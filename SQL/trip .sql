-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 05:28 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` varchar(20) NOT NULL,
  `nama_hotel` varchar(30) DEFAULT NULL,
  `no_kamar` varchar(10) DEFAULT NULL,
  `harga` varchar(30) DEFAULT NULL,
  `wkt_checkin` varchar(10) DEFAULT NULL,
  `wkt_checkout` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `no_kamar`, `harga`, `wkt_checkin`, `wkt_checkout`) VALUES
('123', 'melati', '203', '500.000', '05.00', '21.00');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` varchar(10) NOT NULL,
  `jenis_kendaraan` varchar(30) DEFAULT NULL,
  `kelas` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `jenis_kendaraan`, `kelas`) VALUES
('', NULL, NULL),
('01', 'pesawat', 'Ekonomi/Ekonomi Premium'),
('02', 'Kereta', 'Ekonomi/Ekonomi Premium');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` varchar(20) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `total_bayar` varchar(30) NOT NULL,
  `id_pesan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `tgl_bayar`, `total_bayar`, `id_pesan`) VALUES
('111', '2019-04-10', '500.000', '001');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesan` varchar(20) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `total_harga` varchar(30) NOT NULL,
  `jml_pesan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesan`, `tgl_pesan`, `total_harga`, `jml_pesan`) VALUES
('001', '2019-04-22', '1.900.000', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` varchar(20) NOT NULL,
  `jml_tiket` varchar(20) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `wkt_berangkat` varchar(10) NOT NULL,
  `wkt_tiba` varchar(10) NOT NULL,
  `id_tujuan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `jml_tiket`, `tgl_berangkat`, `wkt_berangkat`, `wkt_tiba`, `id_tujuan`) VALUES
('AD001', '1', '2019-04-14', '07.00', '09.00', '05');

-- --------------------------------------------------------

--
-- Table structure for table `tmpt_tujuan`
--

CREATE TABLE `tmpt_tujuan` (
  `id_tujuan` varchar(20) NOT NULL,
  `nama_kota` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmpt_tujuan`
--

INSERT INTO `tmpt_tujuan` (`id_tujuan`, `nama_kota`) VALUES
('01', 'Bandung(BDO)'),
('05', 'Bali(DPS)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `usia_user` varchar(5) DEFAULT NULL,
  `no_tlp` varchar(20) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(2) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama_user`, `password`, `usia_user`, `no_tlp`, `alamat`, `jenis_kelamin`, `email`) VALUES
('', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ardhi', 'M ardhi', 'ardhi1', '20', '098668394', 'Jakarta', 'L', 'ardhi@gmail.com'),
('Chris', 'Christian', 'cris1', '20', '09876541325', 'Jakarta', 'L', 'cris@gmail.com'),
('Furqan', 'Furqan Fahrabi', 'furqan1', '20', '08764521', 'Padang', 'L', 'furqan@gmail.com'),
('vita', 'vita juliani', 'vitajul1', '20', '081322201186', 'Bandung', 'P', 'vita@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_pesan` (`id_pesan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_tujuan` (`id_tujuan`);

--
-- Indexes for table `tmpt_tujuan`
--
ALTER TABLE `tmpt_tujuan`
  ADD PRIMARY KEY (`id_tujuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `pemesanan` (`id_pesan`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`id_tujuan`) REFERENCES `tmpt_tujuan` (`id_tujuan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
