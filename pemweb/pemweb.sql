-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2019 pada 11.11
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `fullname` varchar(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `gender` varchar(99) NOT NULL,
  `npm` varchar(99) NOT NULL,
  `addres` varchar(99) NOT NULL,
  `age` varchar(99) NOT NULL,
  `ttl` varchar(99) NOT NULL,
  `nomor` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `dream` varchar(99) NOT NULL,
  `motto` varchar(99) NOT NULL,
  `sd` varchar(99) NOT NULL,
  `smp` varchar(99) NOT NULL,
  `sma` varchar(99) NOT NULL,
  `univ` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`fullname`, `nama`, `gender`, `npm`, `addres`, `age`, `ttl`, `nomor`, `email`, `dream`, `motto`, `sd`, `smp`, `sma`, `univ`) VALUES
('aliev wisnu prasetyo', 'aliev', 'laki-laki', '17081010093', 'puri surya jaya a7-18, gedangan, sidoarjo', '19', 'malang, 5 mei 2000', '088888888888', 'alie@gmail.com', 'tidak ada', 'dilakoni ae', 'sd', 'smp', 'sma', 'upn');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
