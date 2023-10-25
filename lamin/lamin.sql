-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2023 pada 07.25
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lamin`
--

CREATE TABLE `lamin` (
  `id` int(11) NOT NULL,
  `nama_alat_musik` varchar(255) NOT NULL,
  `jenis_alat_musik` varchar(255) NOT NULL,
  `ukuran_alat_musik` varchar(255) NOT NULL,
  `harga_alat_musik` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lamin`
--

INSERT INTO `lamin` (`id`, `nama_alat_musik`, `jenis_alat_musik`, `ukuran_alat_musik`, `harga_alat_musik`, `gambar`) VALUES
(6, 'gitar', 'petik', '31', '123', 'gitar.jpg'),
(7, 'asd', 'dsa', '123321', '50000', '2023-10-25 asd.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lamin`
--
ALTER TABLE `lamin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lamin`
--
ALTER TABLE `lamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
