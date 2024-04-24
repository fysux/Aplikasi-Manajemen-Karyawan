-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table lola.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lola.admin: ~2 rows (approximately)
REPLACE INTO `admin` (`id`, `nama`, `email`, `password`, `update`) VALUES
	(1, 'admin', 'admin123@gmail.com', '$2y$10$dWGDvcQK0v73p0UI8VFWseYZhYJuVylf2.6UJ9kN2VXHTi9jOUY1u', '2024-04-22 18:34:03'),
	(3, 'Sepatu', '123@sad.as', '$2y$10$zxy2biQUwxxPPfaS3Toaw.OcUfUl9djq0Gya3DlM03pLhLKFXCI8.', NULL);

-- Dumping structure for table lola.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_telp` tinytext NOT NULL,
  `penempatan` enum('Lapangan','Kantor','Cleaning Service') NOT NULL,
  `tgl_masuk` date NOT NULL,
  `update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table lola.karyawan: ~3 rows (approximately)
REPLACE INTO `karyawan` (`id`, `nama`, `email`, `no_telp`, `penempatan`, `tgl_masuk`, `update`) VALUES
	(1, 'Spidermenhaha', 'asda@g.com', '123', 'Lapangan', '2024-04-22', '2024-04-22 17:48:02'),
	(2, '12', 'asda@ga.o', '12312', 'Kantor', '2024-04-22', NULL),
	(3, 'sasuke', 'sauke@g.c', '00099', 'Cleaning Service', '2024-04-22', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
