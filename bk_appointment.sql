-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 13 Des 2024 pada 14.39
-- Versi server: 8.3.0
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bk_appointment`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_poli`
--

DROP TABLE IF EXISTS `daftar_poli`;
CREATE TABLE IF NOT EXISTS `daftar_poli` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_pasien` int UNSIGNED NOT NULL,
  `id_jadwal` int UNSIGNED NOT NULL,
  `keluhan` text NOT NULL,
  `no_antrian` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_jadwal` (`id_jadwal`),
  KEY `fk_id_pasien` (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_periksa`
--

DROP TABLE IF EXISTS `detail_periksa`;
CREATE TABLE IF NOT EXISTS `detail_periksa` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_periksa` int UNSIGNED NOT NULL,
  `id_obat` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_periksa` (`id_periksa`),
  KEY `fk_id_obat` (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

DROP TABLE IF EXISTS `dokter`;
CREATE TABLE IF NOT EXISTS `dokter` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `id_poli` int UNSIGNED DEFAULT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_poli` (`id_poli`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `alamat`, `no_hp`, `id_poli`, `id_user`) VALUES
(11, 'rama', 'solo', '08923456722', 5, 21),
(13, 'kurnia', 'Solo', '087765456', 4, 24),
(14, 'aria', 'tegal', '085722316535', NULL, 26);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_periksa`
--

DROP TABLE IF EXISTS `jadwal_periksa`;
CREATE TABLE IF NOT EXISTS `jadwal_periksa` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_dokter` int UNSIGNED NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_dokter` (`id_dokter`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

DROP TABLE IF EXISTS `obat`;
CREATE TABLE IF NOT EXISTS `obat` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(50) NOT NULL,
  `kemasan` varchar(35) NOT NULL,
  `harga` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `kemasan`, `harga`) VALUES
(5, 'Diapet', 'Sachet', 20000),
(6, 'Paracetamol', 'Sachet', 13000),
(8, 'Paramex', 'Box', 10000),
(10, 'Suclarfate', 'Botol', 30000),
(11, 'mixagrib', 'tablet', 12000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

DROP TABLE IF EXISTS `pasien`;
CREATE TABLE IF NOT EXISTS `pasien` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `no_rm` varchar(25) NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `alamat`, `no_ktp`, `no_hp`, `no_rm`, `id_user`) VALUES
(3, 'Pace', 'jepara', '3312897917', '08923897912', '202412-3', 12),
(4, 'Juan', 'Sukabumi', '213797192100', '081238713912', '202412-4', 13),
(7, 'rudi', 'pamiritan', '98783521673', '085722316535', '202412-6', 16),
(11, 'dea', 'Sleman', '100012988362', '0877654356', '202412-6', 25),
(12, 'rere', 'margasari', '0877858576', '087276736768', '202412-6', 27),
(13, 'yanti', 'danawarih', '9789387587687', '0823723567132', '202412-6', 28);

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa`
--

DROP TABLE IF EXISTS `periksa`;
CREATE TABLE IF NOT EXISTS `periksa` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_daftar_poli` int UNSIGNED NOT NULL,
  `tgl_periksa` date NOT NULL,
  `catatan` text NOT NULL,
  `biaya_periksa` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_daftar_poli` (`id_daftar_poli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli`
--

DROP TABLE IF EXISTS `poli`;
CREATE TABLE IF NOT EXISTS `poli` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_poli` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `poli`
--

INSERT INTO `poli` (`id`, `nama_poli`, `keterangan`) VALUES
(4, 'Poli umum', 'Poliklinik BK 2024 Poli umum'),
(5, 'Poli Kesehatan Jiwa', 'Poliklinik BK 2024 Poli Kesehatan Jiwa'),
(7, 'Poli Gigi', 'Poliklinik BK 2024 Poli Kesehatan Jiwa'),
(8, 'poli  jantung', 'poli BK 2024 Penyakit jantung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2a$12$sTYi7XBjaG3GNY4JuQ.WQu/fe3UaheRwakhw8fA81bzchTZNEORMm', 'admin'),
(7, 'Gunawan', '$2y$10$SCIFw9jaIKeHr6jIA8MVWOz1VJo.ola74mpAKiV3uz2LcS01xpKI.', 'dokter'),
(9, 'Dimas Sahera', '$2y$10$1qONnzPyiQ.IUNa1lJ0y0.YyI96hw/1j0iuy3748cfUob8sV4DlOG', 'dokter'),
(12, 'Pace', '$2y$10$WsOXH9eDFpCoPZ9F0TT1buh6dMgV7EtDQJMNQ6YEyX597DrIoOK3m', 'pasien'),
(13, 'Juan', '$2y$10$o8HqnVixo30I6YvpwHqlaOLkkytTD49JYo1UmIeS73GQQt8Clzdai', 'pasien'),
(16, 'rudi', '$2y$10$A7Zyzvc6QpbWKP2BxSabbuRmrSlf67NxegvOsoq/Av8pWrJLXweXy', 'pasien'),
(19, 'rama', '$2y$10$m4Mzfj9l0yX5JRt/GfjmzOUakH3fVXn/7XyZfYBJfweKWD3EfI.8y', 'dokter'),
(21, 'rama', '$2y$10$NYM4.o58kh.UGK99Ul/31eZtRmDk8OficKgNknHlohlQX6Dr31Axa', 'dokter'),
(22, 'wijaya', '$2y$10$c9CxZkZC2EdBONBjBiOiv.4GrUyOkfHeaFXJ221wiVuyVeHk6ZbVm', 'dokter'),
(24, 'kurnia', '$2y$10$uimgfyHxUIU09F7twcPHbuv.oQABVnl4MaSaaOIXs1u0YBh8SFiXG', 'dokter'),
(25, 'dea', '$2y$10$Rs9Hp99sTTQevelj3nBHdeX32G25GU6Gm/nwbZFc4UQZywng7aIvq', 'pasien'),
(26, 'aria', '$2y$10$OYC3a6BDabRkr5qkOSu3j.nXoIgQn2W5VPacJsrJgAnIDU7qZzV8K', 'dokter'),
(27, 'rere', '$2y$10$aYn1toVBWHLRV4gSc2HxxOaAGE9oUlB/bKfhbCXhvxIveVPwfn0pG', 'pasien'),
(28, 'yanti', '$2y$10$m5tm8uik2JP7aaLJHQM83.kDzYeULdWLSidnAeheCOlgFA3EWe4dC', 'pasien');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar_poli`
--
ALTER TABLE `daftar_poli`
  ADD CONSTRAINT `fk_id_jadwal` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_periksa` (`id`),
  ADD CONSTRAINT `fk_id_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id`);

--
-- Ketidakleluasaan untuk tabel `detail_periksa`
--
ALTER TABLE `detail_periksa`
  ADD CONSTRAINT `fk_id_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`),
  ADD CONSTRAINT `fk_id_periksa` FOREIGN KEY (`id_periksa`) REFERENCES `periksa` (`id`);

--
-- Ketidakleluasaan untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `fk_id_poli` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal_periksa`
--
ALTER TABLE `jadwal_periksa`
  ADD CONSTRAINT `fk_id_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id`);

--
-- Ketidakleluasaan untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD CONSTRAINT `fk_id_daftar_poli` FOREIGN KEY (`id_daftar_poli`) REFERENCES `daftar_poli` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
