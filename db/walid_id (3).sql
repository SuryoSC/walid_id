-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2025 pada 14.52
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `walid_id`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'walidRS', 'walidid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `pasien` int(11) NOT NULL,
  `jadwal` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `status` enum('menunggu','terpanggil') NOT NULL,
  `rekmed` enum('Tidak ada','Terisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id`, `pasien`, `jadwal`, `no`, `status`, `rekmed`) VALUES
(33, 32, 14, 1, 'terpanggil', 'Terisi'),
(34, 33, 14, 2, 'terpanggil', 'Terisi'),
(35, 35, 14, 3, 'terpanggil', 'Terisi'),
(36, 34, 16, 1, 'terpanggil', 'Terisi'),
(37, 37, 14, 4, 'menunggu', 'Tidak ada'),
(38, 35, 15, 1, 'terpanggil', 'Terisi'),
(39, 36, 15, 2, 'terpanggil', 'Terisi'),
(40, 39, 15, 3, 'menunggu', 'Tidak ada'),
(41, 39, 21, 1, 'menunggu', 'Tidak ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `email`, `password`, `nama`) VALUES
(7, 'achmad@gmail.com', '123', 'Achmad'),
(8, 'subarudin@gmail.com', '123', 'Subarudin'),
(9, 'sukirno@gmail.com', '123', 'Sukirno'),
(10, 'eko@gmail.com', '123', 'Eko');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `kloter` enum('pagi','sore') NOT NULL,
  `dokter` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `tgl`, `kloter`, `dokter`) VALUES
(14, '2025-05-22', 'pagi', 7),
(15, '2025-05-22', 'sore', 8),
(16, '2025-05-23', 'pagi', 7),
(17, '2025-05-23', 'sore', 8),
(18, '2025-05-24', 'pagi', 9),
(19, '2025-05-24', 'sore', 8),
(20, '2025-05-25', 'pagi', 10),
(21, '2025-05-25', 'sore', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id` int(11) NOT NULL,
  `pasien` int(11) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `diagnosa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekam_medis`
--

INSERT INTO `rekam_medis` (`id`, `pasien`, `keluhan`, `diagnosa`) VALUES
(9, 33, 'pusing', 'flu'),
(10, 33, 'sakit kepala', 'flu'),
(11, 34, 'sakit kepala', 'flu'),
(12, 35, 'sakit perut', 'diare'),
(13, 36, 'pusing', 'flu'),
(14, 38, 'sakit aja', 'masuk angin'),
(15, 39, 'sakit gigi', 'sakit gigi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nama`, `tanggal_lahir`) VALUES
(32, 'syarif@gmail.com', '123', 'Muhammad Syarif Hidayat', '05-11-2007'),
(33, 'rosa@gmail.com', '123', 'Rosa', '01-01-2004'),
(34, 'xavier@gmail.com', '123', 'Xavier', '11-11-2000'),
(35, 'jarwo@gmail.com', '123', 'Jarwo', '11-09-1992'),
(36, 'porque@gmail.com', '12345', 'Porque', '11-11-2000'),
(37, 'fakhri@gmail.com', '12345', 'fakhri', '17-04-2008'),
(38, 'aldyazpakez@gmail.com', 'aldyazrajin mengaji', 'Aldyaz Budi Pratama', '14-06-2008'),
(39, 'siapasaja@gmail.com', '123', 'Siapa Saja', '20-10-2000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal` (`jadwal`),
  ADD KEY `pasien` (`pasien`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokter` (`dokter`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien` (`pasien`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `antrian_ibfk_1` FOREIGN KEY (`jadwal`) REFERENCES `jadwal` (`id`),
  ADD CONSTRAINT `antrian_ibfk_2` FOREIGN KEY (`pasien`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`dokter`) REFERENCES `dokter` (`id`);

--
-- Ketidakleluasaan untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_ibfk_1` FOREIGN KEY (`pasien`) REFERENCES `antrian` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
