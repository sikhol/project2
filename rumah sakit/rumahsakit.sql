-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 01:38 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `kode_dokter` varchar(10) CHARACTER SET utf8 NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `spesialis` varchar(15) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kode_dokter`, `nama_dokter`, `alamat`, `spesialis`) VALUES
('114', 'hadil', 'jakarta', 'THT'),
('115', 'anis', 'lampung', 'kandungan'),
('117', 'agung', 'jakarta', 'kulit'),
('118', 'ana', 'bandung', 'jantung');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'amrul', '$2y$10$1rpIMMGhKN.2ID8EpQ6DquiSIdgrs5Zulfn4LfmHL/E78PV/KxUQy'),
(2, 'yayang', '$2y$10$IDoNr7tNTPx4kDLaLJy/Z.mUuyZPbkt06LEZwadWsL.5kDrWGoaIW'),
(3, 'lia', '$2y$10$XUNGHwm.9KI81u.GMHcqg.s6tuwEvvn4AOiMD04MGT7EhpKUBtfp2'),
(4, 'arif', '$2y$10$F/RlX/KsdjGZevzRAUI2.Oud2jxvbEWnp4hk8DN3v5ZdzZAx8HJNG'),
(5, 'abdul', '$2y$10$71YiD.7X7MXJpRJ1fhF1RuOe6PoFYXIgS49UoiiA95eATtOQ/AuLu'),
(6, 'alu', '$2y$10$2/zAFyZlVi/zivG84uK.6eY6boacrwdDjAO2CDjtwCnF6QZ8lAX3S'),
(7, 'afif', '$2y$10$CWAhPobAZNbnzdGHirIy3OdVP88B3.4vYIsNoYIw9aSyADrlwhkRu'),
(8, 'denis', '$2y$10$1nLnVRGyw1hCx2DLuwlPwOsvd0d5uJLO0nKE5Ro6QZme87QGTtsB6'),
(9, 'nando', '$2y$10$kVDHAeVM1jlBa3mLtRpqt..qmAg55M4pi3mc19OG0s8MECnfAPclq'),
(10, 'nur', '$2y$10$k9L/tlujrVSEpWAZ0nlvluFmTFlcvy9MdABqDYEWgE2XSbQkIM28q');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kd_obat` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Namaobat` varchar(30) NOT NULL,
  `kadarluarsa` date NOT NULL,
  `jenisobat` varchar(15) NOT NULL,
  `kode_dokter` varchar(11) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kd_obat`, `Namaobat`, `kadarluarsa`, `jenisobat`, `kode_dokter`) VALUES
('1b1', 'paraxetamol', '2018-03-14', 'generix', '114'),
('1b2', 'paramex', '2018-03-30', 'halusinogen', '114'),
('1b3', 'obh', '2018-03-15', 'sirup', '114');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `kode_dokter` varchar(30) CHARACTER SET utf8 NOT NULL,
  `kode_obat` varchar(11) CHARACTER SET utf8 NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `kd_ruang` varchar(11) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `kode_dokter`, `kode_obat`, `nama_pasien`, `kd_ruang`) VALUES
('2', '114', '1b1', 'hadil', '301');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `kd_ruang` varchar(11) CHARACTER SET utf8 NOT NULL,
  `nama_ruang` varchar(30) NOT NULL,
  `nama_gedung` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`kd_ruang`, `nama_ruang`, `nama_gedung`) VALUES
('301', 'UGDg', 'rumahsakit'),
('302', 'ruang bedah', 'rumah sakit'),
('303', 'kamar jenazah', 'rumah sakit'),
('304', 'ruang anggrek', 'rumah sakit'),
('305', 'ruang mawar', 'rumah sakit');

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `id_spesialis` varchar(15) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`id_spesialis`) VALUES
('jantung'),
('kandungan'),
('kulit'),
('mata'),
('THT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kode_dokter`),
  ADD KEY `spesialis_fk` (`spesialis`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kd_obat`),
  ADD KEY `kd_dokter_1_fk` (`kode_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `kd_dokter_fk` (`kode_dokter`),
  ADD KEY `kd_ruang_fk` (`kd_ruang`),
  ADD KEY `kode_obat_fk` (`kode_obat`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`kd_ruang`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `spesialis_fk` FOREIGN KEY (`spesialis`) REFERENCES `spesialis` (`id_spesialis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `kd_dokter_1_fk` FOREIGN KEY (`kode_dokter`) REFERENCES `dokter` (`kode_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `kd_dokter_fk` FOREIGN KEY (`kode_dokter`) REFERENCES `dokter` (`kode_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kd_ruang_fk` FOREIGN KEY (`kd_ruang`) REFERENCES `ruang` (`kd_ruang`),
  ADD CONSTRAINT `kode_obat_fk` FOREIGN KEY (`kode_obat`) REFERENCES `obat` (`kd_obat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
