-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2025 at 10:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- Gunakan database Railway
USE `railway`;

-- --------------------------------------------------------

-- Table structure for table `bengkel`

CREATE TABLE `bengkel` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `nomor_wa` varchar(20) DEFAULT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `jadwal_buka_tutup` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `link_maps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table `bengkel`

INSERT INTO `bengkel` (`id`, `nama`, `alamat`, `latitude`, `longitude`, `nomor_wa`, `deskripsi`, `kategori`, `jadwal_buka_tutup`, `link_maps`) VALUES
(1, 'Bengkel 24 jam', ' Dekongan, Gedong, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57716', -7.584936322998718, 110.98731562880472, '081215017374', 'Bengkel Panggilan 24 Jam Karanganyar - Solo', 'Mobil', 'Senin-Minggu Buka 24 Jam', 'https://maps.app.goo.gl/werrzGTk1dCsLDJg7'),
(2, '\"RAPI 46\"', 'Jl. Lawu No.374, Cangakan Timur, Cangakan, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57712', -7.592780613940527, 110.94511004356681, '0271495177', 'Bengkel Mobil', 'Mobil', 'Senin-Sabtu(08.00-17.00)-Minggu Tutup', 'https://maps.app.goo.gl/HNyKfFNVYp7Z4VCf7'),
(3, 'Padma Agung Motor', 'Jl. Lawu No.245, Tegal winangun, Tegalgede, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57714', -7.601395919672677, 110.97028509805376, '082133895502', 'Bengkel Sepeda Motor', 'Motor', 'Senin-Sabtu(08.00–16.00)-Minggu(09.00–15.00)', 'https://maps.app.goo.gl/6ZjUFNLUVzbU3xLT7'),
(4, 'Bengkel Surup', 'Karanganyar, Mandungan, Jungke, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57713', -7.599687600633979, 110.94283448662677, '085641153024', 'Bengkel Sepeda Motor', 'Motor', 'Senin-Minggu(12.00-00.00)', 'https://maps.app.goo.gl/nPL7RsHcMqJhdAGcA'),
(5, 'Bengkel Mobil Bang Jo', 'Bibis, Jungke, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57716', -7.595004791678748, 110.94159976799747, '081233338870', 'Bengkel Mobil', 'Mobil', 'Senin-Minggu(08.00-16.00)', 'https://maps.app.goo.gl/2H1nzs1SLJJ6XmxJ7'),
(6, 'Bengkel mobil BELO', ' Temu Ireng, Tegalgede, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57714', -7.61236643988803, 110.96948046164955, '081215728926', 'Bengkel Mobil', 'Mobil', 'Senin-Minggu(08.00–17.00)', 'https://maps.app.goo.gl/Kke6PXXDb8QsHv8B8'),
(7, 'Bengkel mobil Wira Matic', 'Jl. Urip Sumoharjo, Gerdu, Tegalgede, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57715', -7.605617676778691, 110.97265756229761, '08811411704', 'Bengkel Mobil (Spesialis Transmisi Matic & Engine Analyzer, CBU car)', 'Mobil', 'Senin-Sabtu(08.30-17.00)-Minggu Tutup', 'https://maps.app.goo.gl/Rm3fmwkccR5noi8U8'),
(8, 'MAN MOTOR', 'Mandungan, Jungke, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57713', -7.600403859184647, 110.94551274241564, '02716491070', 'BENGKEL MOBIL', 'MOBIL', 'senin-sabtu (08.00–17.00) minggu (tutup)', 'https://maps.app.goo.gl/bpRhCn5Z1L7YsqS96'),
(9, 'PROFETIK MOTOR', 'Jl. Keleng - Karanganyar No.rt03/12, Mojo, Jantiharjo, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57716', -7.616225063193344, 110.96258809657515, '0895322659195', 'BENGKEL MOTOR', 'MOTOR', 'senin-minggu (08.00–17.00)', 'https://maps.app.goo.gl/N6Gh1n4R9c4cZ1TE7'),
(10, 'Titang Agung Motor', '9XW8+623, Jalan Rm. Said, Tegalgede, Kec. Karanganyar, Titang, Tegalgede, Kec. Karanganyar, Kabupaten Karanganyar, Jawa Tengah 57714', -7.604408413781915, 110.96497680396617, '082335353541', 'BENGKEL MOTOR', 'MOTOR', 'senin-minggu (07.30–17.45)', 'https://maps.app.goo.gl/rRReFue3jRCy8PCm8');

-- Indexes for table `bengkel`
ALTER TABLE `bengkel`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT for table `bengkel`
ALTER TABLE `bengkel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
