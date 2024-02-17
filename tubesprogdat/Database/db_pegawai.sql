-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Feb 2024 pada 11.03
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `kd_jabatan` int(5) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL,
  `gaji` int(15) NOT NULL,
  `tunjangan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`kd_jabatan`, `nama_jabatan`, `gaji`, `tunjangan`) VALUES
(1, 'Karyawan Gol 1', 3000000, 1000000),
(2, 'Karyawan Gol 2', 4000000, 1500000),
(3, 'Karyawan Gol 3', 5000000, 2000000),
(4, 'manajer', 7000000, 2000000),
(5, 'senior manajer', 8000000, 3000000),
(6, 'hrd', 7000000, 1500000),
(7, 'office boy', 2000000, 500000),
(8, 'magang', 1000000, 5000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(5) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `Jenis_kelamin` enum('L','P') NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `no_telp` int(13) NOT NULL,
  `kd_jabatan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `ttl`, `Jenis_kelamin`, `Alamat`, `no_telp`, `kd_jabatan`) VALUES
(2, 'Muchammad Daffa', '2003-05-06', 'L', 'Jalan Soreang', 89876543, 1),
(3, 'Taufiqur Rohman', '2002-02-16', 'L', 'Jalan Cibiru', 81783821, 1),
(4, 'Irham Ahmad Musyadad', '2003-07-23', 'L', 'Jalan Buah Batu', 1083781, 3),
(5, 'Febriana Dwi', '2003-04-01', 'P', 'Jalan Pahlawan', 18923721, 6),
(6, 'Alifvia Safitri', '2003-12-06', 'P', 'Jalan Jatinangor', 90157263, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(12, 'adminibos', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kd_jabatan`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `kd_jabatan` (`kd_jabatan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`kd_jabatan`) REFERENCES `jabatan` (`kd_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
