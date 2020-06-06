-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Jan 2017 pada 16.37
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsmath`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpemain`
--

CREATE TABLE `tbpemain` (
  `nama` varchar(30) NOT NULL,
  `skor` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpemain`
--

INSERT INTO `tbpemain` (`nama`, `skor`, `email`) VALUES
('Riki Subekti', '100', 'riki@gmail.com'),
('Aini Rahmawati', '80', 'aini@gmail.com');
