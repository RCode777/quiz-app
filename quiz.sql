-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Okt 2022 pada 12.40
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `challenge`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `judul` varchar(900) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `author` varchar(900) NOT NULL,
  `waktu` varchar(900) NOT NULL,
  `quiz1` longtext NOT NULL,
  `jawaban1` longtext NOT NULL,
  `quiz2` longtext NOT NULL,
  `jawaban2` longtext NOT NULL,
  `quiz3` longtext NOT NULL,
  `jawaban3` longtext NOT NULL,
  `quiz4` longtext NOT NULL,
  `jawaban4` longtext NOT NULL,
  `quiz5` longtext NOT NULL,
  `jawaban5` longtext NOT NULL,
  `quiz6` longtext NOT NULL,
  `jawaban6` longtext NOT NULL,
  `quiz7` longtext NOT NULL,
  `jawaban7` longtext NOT NULL,
  `quiz8` longtext NOT NULL,
  `jawaban8` longtext NOT NULL,
  `quiz9` longtext NOT NULL,
  `jawaban9` longtext NOT NULL,
  `quiz10` longtext NOT NULL,
  `jawaban10` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `quiz`
--

INSERT INTO `quiz` (`id`, `judul`, `deskripsi`, `author`, `waktu`, `quiz1`, `jawaban1`, `quiz2`, `jawaban2`, `quiz3`, `jawaban3`, `quiz4`, `jawaban4`, `quiz5`, `jawaban5`, `quiz6`, `jawaban6`, `quiz7`, `jawaban7`, `quiz8`, `jawaban8`, `quiz9`, `jawaban9`, `quiz10`, `jawaban10`) VALUES
(1, 'Soal IPS', 'soal ujian IPS', 'RaffiDev.exe', '11 Oct 2022', 'apa itu blablabla?', 'itu blablabla', 'apa itu blablabla2', 'itu blablabla2', 'apa itu blablabla3', 'itu blablabla3', 'apa itu blablabla4', 'itu blablabla4', 'apa itu blablabla5', 'itu blablabla5', 'apa itu blablabla6', 'itu blablabla6', 'apa itu blablabla7', 'itu blablabla7', 'sdfsdfsd', 'itu blablabla7', '12345', 'itu blablabla7', '123213123123', 'itu blablabla7');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
