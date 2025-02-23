-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2025 pada 07.52
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gudanghp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hpsamsung`
--

CREATE TABLE `hpsamsung` (
  `id` int(11) NOT NULL,
  `nama_hp` varchar(25) NOT NULL,
  `varian` enum('128 gb','256 gb') NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `tanggal_keluar` date DEFAULT NULL,
  `id_supplier` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hpsamsung`
--

INSERT INTO `hpsamsung` (`id`, `nama_hp`, `varian`, `stok`, `harga`, `tanggal_masuk`, `tanggal_keluar`, `id_supplier`) VALUES
(4, 'samsung a17', '256 gb', 11, 18000000, '2025-02-15', '2025-02-25', 5),
(42, 'samsung a31', '128 gb', 7, 2000000, '2025-02-05', '2025-02-27', 3),
(43, 'samsung a80', '128 gb', 1, 2500000, '2025-02-27', '2025-03-11', 4),
(44, 'samsung a99', '256 gb', 10, 3000000, '2025-02-22', '2025-02-28', 2),
(45, 'samsung a89', '128 gb', 5, 25000000, '2025-02-28', '2025-03-12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_user`
--

CREATE TABLE `login_user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login_user`
--

INSERT INTO `login_user` (`iduser`, `username`, `password`) VALUES
(1, 'ridwan', '1wan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `no_telepon` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `nama_supplier`, `alamat`, `no_telepon`) VALUES
(1, 'pt samsung sukamaju', 'bandung', 881526632),
(2, 'pt hexagon', 'cigugur ', 877665544),
(3, 'ask cell', 'cimahi ', 2147483647),
(4, 'cimindicell', 'cigugur', 2147483647),
(5, 'ask2cell', 'cimindi', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hpsamsung`
--
ALTER TABLE `hpsamsung`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeks untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hpsamsung`
--
ALTER TABLE `hpsamsung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `login_user`
--
ALTER TABLE `login_user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
