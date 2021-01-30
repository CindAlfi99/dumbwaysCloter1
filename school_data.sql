-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jan 2021 pada 14.30
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `school_db`
--

CREATE TABLE `school_db` (
  `id` int(11) NOT NULL,
  `NPSN` varchar(50) NOT NULL,
  `name_school` varchar(50) NOT NULL,
  `addres` varchar(50) NOT NULL,
  `logo_school` varchar(50) NOT NULL,
  `school_level` varchar(50) NOT NULL,
  `status_school` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `school_db`
--

INSERT INTO `school_db` (`id`, `NPSN`, `name_school`, `addres`, `logo_school`, `school_level`, `status_school`, `id_user`) VALUES
(7, '10700347', 'SD NEGERI 05 BENGKULU TENGAH', 'Desa nakau', '601545808d9b9.jpg', 'SD', 'NEGERI', '2'),
(8, ' 10704089	', 'MTSS MUSTAFAWIYAH', 'DESA KEMABANG SERI', '60154778162c8.jpg', 'SMP', 'SWASTA', '1'),
(9, '20700303', 'SMAN 1 JAWA TENGAH', 'JL. RAYA KEMBANG SERI KM 12', '6015485256804.jpg', 'SMA', 'NEGERI', '4'),
(10, '60706559', 'MIN 17 JAKARTA', 'Jl. Madrasah Rt 004/01', '6015497819e7d.jpg', 'SMA', 'NEGERI', '2'),
(11, ' 20104477', 'SD NEGERI PERCONTOHAN PULAU UNTUNG JAWA 01 PG', 'Jl. P. Nirwana Pulau Untung Jawa Rt. 02/03', '601549e0474e5.jpg', 'SD', 'NEGERI', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwords` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `names`, `email`, `passwords`) VALUES
(1, 'Cind Alfi', 'acindi38@gmail.com', '12345'),
(2, 'Ani Yudha', 'ani20@yahoo.com', '67890'),
(3, 'Andiansyah', 'aldian128@gmail.com', 'abcdef'),
(4, 'Fiona Zea', 'fiona001@yahoo.co.id', 'fio123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `school_db`
--
ALTER TABLE `school_db`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `school_db`
--
ALTER TABLE `school_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
