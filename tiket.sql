-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2018-06-06 20:46:46
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for tiket
CREATE DATABASE IF NOT EXISTS `tiket` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tiket`;


-- Dumping structure for table tiket.datapemesan
CREATE TABLE IF NOT EXISTS `datapemesan` (
  `nama` varchar(50) DEFAULT NULL,
  `jenkel` enum('P','L') DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `nik` char(10) DEFAULT NULL,
  `telp` char(10) DEFAULT NULL,
  `email` varchar(10) DEFAULT NULL,
  `alamat` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
