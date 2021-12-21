-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 05:06 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaranpasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `no_induk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no_induk`, `nama`, `role`, `password`) VALUES
(321, 'syahrul riza', 'admin obat', 'adminobat123'),
(456, 'reza', 'admin regristrasi', 'adminregristrasi123');

-- --------------------------------------------------------

--
-- Table structure for table `detailtransaksi`
--

CREATE TABLE `detailtransaksi` (
  `id_obat` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailtransaksi`
--

INSERT INTO `detailtransaksi` (`id_obat`, `id_transaksi`, `jumlah_obat`) VALUES
(2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis_obat`) VALUES
(1, 'tablet');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori_obat`) VALUES
(1, 'obat bebas'),
(2, 'obat tertutup');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `id_jenis`, `id_kategori`, `nama_obat`, `harga`, `stock`) VALUES
(1, 1, 1, 'paracetamol', 10000, 7),
(2, 1, 1, 'Amoxcilin', 20000, 16),
(3, 1, 1, 'Paramex', 5000, 16);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_telp`, `alamat`, `nama`, `email`, `pekerjaan`) VALUES
(1, '0878877656', 'surabaya', 'slamet', 'slamet@gmail.com', 'karyawan swasta'),
(2, '0899998877', 'surabaya', 'faris', 'faris@gmail.com', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `id_poliklinik` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`id_poliklinik`, `nama`) VALUES
(1, 'Poli Umum');

-- --------------------------------------------------------

--
-- Table structure for table `regristrasi`
--

CREATE TABLE `regristrasi` (
  `id_regristrasi` int(11) NOT NULL,
  `id_poliklinik` int(11) NOT NULL,
  `no_induk` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tgl_regristrasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regristrasi`
--

INSERT INTO `regristrasi` (`id_regristrasi`, `id_poliklinik`, `no_induk`, `id_pasien`, `tgl_regristrasi`) VALUES
(1, 1, 456, 1, '2021-12-11'),
(2, 1, 456, 2, '2021-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `transaksiobat`
--

CREATE TABLE `transaksiobat` (
  `id_transaksi` int(11) NOT NULL,
  `id_regristrasi` int(11) NOT NULL,
  `no_induk` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `status_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksiobat`
--

INSERT INTO `transaksiobat` (`id_transaksi`, `id_regristrasi`, `no_induk`, `tgl_transaksi`, `status_transaksi`) VALUES
(1, 1, 321, '2021-12-11', 1),
(5, 2, 321, '2021-12-20', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `detailtransaksi`
--
ALTER TABLE `detailtransaksi`
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`id_poliklinik`);

--
-- Indexes for table `regristrasi`
--
ALTER TABLE `regristrasi`
  ADD PRIMARY KEY (`id_regristrasi`),
  ADD KEY `id_poliklinik` (`id_poliklinik`),
  ADD KEY `no_induk` (`no_induk`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `transaksiobat`
--
ALTER TABLE `transaksiobat`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_regristrasi` (`id_regristrasi`),
  ADD KEY `no_induk` (`no_induk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `id_poliklinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regristrasi`
--
ALTER TABLE `regristrasi`
  MODIFY `id_regristrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksiobat`
--
ALTER TABLE `transaksiobat`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailtransaksi`
--
ALTER TABLE `detailtransaksi`
  ADD CONSTRAINT `detailtransaksi_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `detailtransaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksiobat` (`id_transaksi`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`),
  ADD CONSTRAINT `obat_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `regristrasi`
--
ALTER TABLE `regristrasi`
  ADD CONSTRAINT `regristrasi_ibfk_1` FOREIGN KEY (`id_poliklinik`) REFERENCES `poliklinik` (`id_poliklinik`),
  ADD CONSTRAINT `regristrasi_ibfk_2` FOREIGN KEY (`no_induk`) REFERENCES `admin` (`no_induk`),
  ADD CONSTRAINT `regristrasi_ibfk_3` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `transaksiobat`
--
ALTER TABLE `transaksiobat`
  ADD CONSTRAINT `transaksiobat_ibfk_1` FOREIGN KEY (`id_regristrasi`) REFERENCES `regristrasi` (`id_regristrasi`),
  ADD CONSTRAINT `transaksiobat_ibfk_2` FOREIGN KEY (`no_induk`) REFERENCES `admin` (`no_induk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
