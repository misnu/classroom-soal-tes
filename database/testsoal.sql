-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Jul 2022 pada 08.38
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testsoal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jurusan`
--

CREATE TABLE `t_jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_jurusan`
--

INSERT INTO `t_jurusan` (`id`, `nama`) VALUES
(1, 'IPA'),
(2, 'IPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_login`
--

CREATE TABLE `t_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL COMMENT '1. admin 2.user',
  `id_pendaftar` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '1. daftar 2. acc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_login`
--

INSERT INTO `t_login` (`id`, `username`, `password`, `jabatan`, `id_pendaftar`, `status`) VALUES
(1, 'nunu', '2f8c3ab806a42e79c774cb09b41a53c8', '1', NULL, NULL),
(10, '111', '698d51a19d8a121ce581499d7b701668', '2', 13, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pendaftar`
--

CREATE TABLE `t_pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` int(11) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_pendaftar`
--

INSERT INTO `t_pendaftar` (`id`, `nama`, `asal_sekolah`, `alamat`, `no_hp`, `jurusan`) VALUES
(13, '1111', '1111', '1111', 111, 'IPA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_jurusan`
--
ALTER TABLE `t_jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- Indeks untuk tabel `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `t_login_ibfk_1` (`id_pendaftar`);

--
-- Indeks untuk tabel `t_pendaftar`
--
ALTER TABLE `t_pendaftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jurusan` (`jurusan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_jurusan`
--
ALTER TABLE `t_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `t_pendaftar`
--
ALTER TABLE `t_pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_login`
--
ALTER TABLE `t_login`
  ADD CONSTRAINT `t_login_ibfk_1` FOREIGN KEY (`id_pendaftar`) REFERENCES `t_pendaftar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_pendaftar`
--
ALTER TABLE `t_pendaftar`
  ADD CONSTRAINT `t_pendaftar_ibfk_1` FOREIGN KEY (`jurusan`) REFERENCES `t_jurusan` (`nama`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
