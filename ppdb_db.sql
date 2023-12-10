-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 02:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftar`
--

CREATE TABLE `tb_pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `id_register` int(11) NOT NULL,
  `no_pendaftar` varchar(9) NOT NULL,
  `nisn` int(11) NOT NULL,
  `nama_pendaftar` varchar(50) NOT NULL,
  `jk` enum('laki-laki','perempuan','','') NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `asal_sekolah` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `foto_skhu` varchar(250) NOT NULL,
  `status` enum('lulus','tidak-lulus','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pendaftar`
--

INSERT INTO `tb_pendaftar` (`id_pendaftar`, `id_register`, `no_pendaftar`, `nisn`, `nama_pendaftar`, `jk`, `tmp_lahir`, `tgl_lahir`, `alamat`, `no_telp`, `asal_sekolah`, `agama`, `foto`, `foto_skhu`, `status`) VALUES
(6, 16, '', 21220331, 'Ferdiawan', 'laki-laki', '', '0000-00-00', '', '', '', '', '', '', 'lulus'),
(7, 18, '', 21220329, 'Ryntiku', 'laki-laki', '', '0000-00-00', '', '', '', '', '', '', 'lulus');

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `id_register` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `nama_pendaftar` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`id_register`, `nisn`, `nama_pendaftar`, `username`, `password`) VALUES
(2, 21220327, 'Falikh', 'Falikh', 'palik123456789'),
(16, 21220331, 'Ferdiawan', 'ferdi', '123'),
(18, 21220329, 'Ryntiku', 'xixi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` enum('admin','petugas','siswa','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(5, 'Nauval', 'riyanti1', 'Nauval ', 'admin'),
(6, 'Riyanti', 'riyanti1', 'Riyantikuuu', 'petugas'),
(7, 'Deden', 'deden123', 'Dedens jeh', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id_register`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
