-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2025 at 11:18 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci3`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang_lombas`
--

CREATE TABLE `bidang_lombas` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bidang_lombas`
--

INSERT INTO `bidang_lombas` (`id`, `name`) VALUES
(2, 'cloud computing'),
(1, 'web tech');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `kategori` enum('berita','informasi') DEFAULT NULL,
  `isi_konten` text,
  `aksi` enum('tayang','draft') DEFAULT 'draft',
  `tanggal` date DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id_reg` int(11) UNSIGNED NOT NULL COMMENT 'Primary Key',
  `bid_lomba` int(11) NOT NULL,
  `asal_sekolah` varchar(80) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `jk_siswa` enum('L','P') DEFAULT NULL,
  `nisn` varchar(50) DEFAULT NULL,
  `tempat_lahir_siswa` varchar(30) DEFAULT NULL,
  `tgl_lahir_siswa` date DEFAULT NULL,
  `no_hp_siswa` varchar(20) DEFAULT NULL,
  `nama_guru` varchar(80) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `jk_guru` enum('L','P') DEFAULT NULL,
  `tempat_lahir_guru` varchar(30) DEFAULT NULL,
  `tgl_lahir_guru` date DEFAULT NULL,
  `no_hp_guru` varchar(20) DEFAULT NULL,
  `file_bukti` varchar(100) DEFAULT NULL,
  `validasi` enum('1','2') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id_reg`, `bid_lomba`, `asal_sekolah`, `nama_siswa`, `jk_siswa`, `nisn`, `tempat_lahir_siswa`, `tgl_lahir_siswa`, `no_hp_siswa`, `nama_guru`, `nip`, `jk_guru`, `tempat_lahir_guru`, `tgl_lahir_guru`, `no_hp_guru`, `file_bukti`, `validasi`) VALUES
(1, 1, 'sekolah sini', 'nama saya', 'L', '0073272', 'Di sini', '2007-11-28', '088387641253', 'guru saya', '11031994436', 'L', 'Di situ', '2025-01-09', '081287764532', 'http://localhost/codeigniter-3/assets/uploads/qwerqwerqwer.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('1','2','3') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'alaninaja', '$2y$10$KnRygGgtmI/JR2AokdZfxu5Y9kEeDz5Ne.5UjjJdjdZ6Mw1at1sgS', '1'),
(2, 'admin123', '$2y$10$TfJGYxch/pGUJHbCVbbkbOPA7eSgkWCJKEzGklBSH6xiDngYnJOGq', '1'),
(3, 'user', '$2y$10$XRaSoVSD3FJ8Ub76BYkmoOOaCb1d2nZdcWwHP4JLH/uObGAce.iKu', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang_lombas`
--
ALTER TABLE `bidang_lombas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `fk_user` (`id_user`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id_reg`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD UNIQUE KEY `no_hp_siswa` (`no_hp_siswa`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD UNIQUE KEY `no_hp_guru` (`no_hp_guru`),
  ADD KEY `fk_bid_lomba` (`bid_lomba`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang_lombas`
--
ALTER TABLE `bidang_lombas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id_reg` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `registrations`
--
ALTER TABLE `registrations`
  ADD CONSTRAINT `fk_bid_lomba` FOREIGN KEY (`bid_lomba`) REFERENCES `bidang_lombas` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
