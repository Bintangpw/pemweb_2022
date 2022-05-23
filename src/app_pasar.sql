-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 01:56 AM
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
-- Database: `app_pasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(50) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `value` varchar(200) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `edited_by` varchar(200) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `edited_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(50) NOT NULL,
  `user` varchar(200) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `id_user` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `user`, `pass`, `id_user`) VALUES
(1, 'admin', 'admin123', 123);

-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE `pasar` (
  `id_pasar` int(50) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kode_pasar` varchar(200) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `edited_by` varchar(200) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `edited_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(50) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `nik` int(200) DEFAULT NULL,
  `no_wa` varchar(200) DEFAULT NULL,
  `no_telp` varchar(200) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `edited_by` varchar(200) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `edited_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengelola`
--

CREATE TABLE `pengelola` (
  `id_pengelola` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `id_pasar` int(50) NOT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `edited_by` varchar(200) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `edited_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_iuran`
--

CREATE TABLE `riwayat_iuran` (
  `id_rwt_iuran` int(50) NOT NULL,
  `id_tenant` int(50) NOT NULL,
  `tahun_bulan` varchar(100) DEFAULT NULL,
  `jml_bayar` int(100) DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `edited_by` varchar(200) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `edited_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pemilikan`
--

CREATE TABLE `riwayat_pemilikan` (
  `id_rwt_pmlk` int(50) NOT NULL,
  `id_tenant` int(50) NOT NULL,
  `id_pemilik_lama` int(50) NOT NULL,
  `id_pemilik_baru` int(50) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `edited_by` varchar(200) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `edited_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `id_tenant` int(50) NOT NULL,
  `id_pemilik` int(50) NOT NULL,
  `id_pasar` int(50) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `latitude_tenant` int(100) DEFAULT NULL,
  `longtitude_tenant` int(100) DEFAULT NULL,
  `harga_iuran` int(100) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `edited_by` varchar(200) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `edited_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(50) NOT NULL,
  `nama` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id_pasar`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`id_pengelola`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pasar` (`id_pasar`);

--
-- Indexes for table `riwayat_iuran`
--
ALTER TABLE `riwayat_iuran`
  ADD PRIMARY KEY (`id_rwt_iuran`),
  ADD KEY `id_tenant` (`id_tenant`);

--
-- Indexes for table `riwayat_pemilikan`
--
ALTER TABLE `riwayat_pemilikan`
  ADD PRIMARY KEY (`id_rwt_pmlk`),
  ADD KEY `id_tenant` (`id_tenant`),
  ADD KEY `id_pemilik_lama` (`id_pemilik_lama`),
  ADD KEY `id_pemilik_baru` (`id_pemilik_baru`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`id_tenant`),
  ADD KEY `id_pemilik` (`id_pemilik`),
  ADD KEY `id_pasar` (`id_pasar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengelola`
--
ALTER TABLE `pengelola`
  ADD CONSTRAINT `fk_pasar_pengelola` FOREIGN KEY (`id_pasar`) REFERENCES `pasar` (`id_pasar`),
  ADD CONSTRAINT `fk_user_pengelola` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `riwayat_iuran`
--
ALTER TABLE `riwayat_iuran`
  ADD CONSTRAINT `fk_tenant_iuran` FOREIGN KEY (`id_tenant`) REFERENCES `tenant` (`id_tenant`);

--
-- Constraints for table `riwayat_pemilikan`
--
ALTER TABLE `riwayat_pemilikan`
  ADD CONSTRAINT `fk_pemilik_baru` FOREIGN KEY (`id_pemilik_baru`) REFERENCES `pemilik` (`id_pemilik`),
  ADD CONSTRAINT `fk_pemilik_lama` FOREIGN KEY (`id_pemilik_lama`) REFERENCES `pemilik` (`id_pemilik`),
  ADD CONSTRAINT `fk_tenant_pmlk` FOREIGN KEY (`id_tenant`) REFERENCES `tenant` (`id_tenant`);

--
-- Constraints for table `tenant`
--
ALTER TABLE `tenant`
  ADD CONSTRAINT `fk_pasar_tenant` FOREIGN KEY (`id_pasar`) REFERENCES `pasar` (`id_pasar`),
  ADD CONSTRAINT `fk_pemilik_tenant` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id_pemilik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
