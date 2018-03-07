-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mar 2018 pada 04.38
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jember`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(255) NOT NULL,
  `file` text NOT NULL,
  `type_file` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `file`, `type_file`, `description`, `tgl`) VALUES
(0, '5.jpg', 'image/jpeg', 'jjj', '2222-02-22'),
(0, '5.jpg', 'image/jpeg', 'hbhbh', '4444-04-04'),
(0, '9.jpg', 'image/jpeg', 'gghhgh', '5555-05-05'),
(0, '8.jpg', 'image/jpeg', 'hhgh', '6666-06-06'),
(0, '9.jpg', 'image/jpeg', 'hhhghh', '2222-02-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paper`
--

CREATE TABLE `paper` (
  `tittle` varchar(100) NOT NULL,
  `date` varchar(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paper`
--

INSERT INTO `paper` (`tittle`, `date`, `file`, `status`, `author`, `comment`) VALUES
('Dataku', '2018-02-19', 'Buku saya', 'Confirm', 'Lapangan', 'Ini adalah sebuah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `status_payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `registration`
--

CREATE TABLE `registration` (
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `certificat` varchar(60) NOT NULL,
  `passport` int(50) NOT NULL,
  `ttl` varchar(10) NOT NULL,
  `nasionallity` varchar(50) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pos_code` int(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `request` varchar(10) NOT NULL,
  `register` varchar(50) NOT NULL,
  `will` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `registration`
--

INSERT INTO `registration` (`first_name`, `middle_name`, `last_name`, `certificat`, `passport`, `ttl`, `nasionallity`, `institution`, `address`, `pos_code`, `country`, `email`, `phone`, `request`, `register`, `will`) VALUES
('hh', 'hj', 'hjh', 'jhj', 0, 'jh', 'j', 'hj', 'jh', 8, 'jh', 'jj@gmail.com', 898, 'no', 'jhj', 'no'),
('hj', 'jhj', 'hj', 'hjh', 888, '9999-01-09', 'hgh', 'hgh', 'ghgh', 777, 'hghh', 'hh@yahoo.com', 88, 'yes', 'hh', 'yes'),
('jij', 'iji', 'jij', 'iji', 98, '9999-09-09', 'uhu', 'uhuh', 'uhuh', 889, 'hh', 'huh@gmail.com', 78787, 'yes', 'hjhj', 'yes'),
('h', 'hhj', 'jh', 'h', 88, '0088-08-08', 'hj', 'hj', 'jj', 98, 'huh', 'jh@gmail.com', 99, 'hjh', 'Presenter', 'no');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE `upload` (
  `description` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `f_name` varchar(100) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`f_name`, `m_name`, `l_name`, `status`, `email`, `username`, `password`, `confirm`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', 'admin'),
('zehrotun', 'neneng', 'sholehati', 'user', 'zehrotun@gmail.com', 'neneng', '202cb962ac59075b964b07152d234b70', '123'),
('admin', 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('hjh', 'jhj', 'hjhj', 'user', 'bbmmb@gmail.com', 'aku', '89ccfac87d8d06db06bf3211cb2d69ed', 'aku'),
('jh', 'jhjh', 'jhjh', 'user', 'mmn@gmail.com', 'jhjh', '51aca628cbc7bb656eebc7aace9d98a1', 'jk'),
('m.', 'nur', 'wahyu', 'user', 'm.nur.wahyu1974@gmail.com', 'wahyu', 'e9efec6a9d6f9276d10608ba2b7d8040', 'cahrpl'),
('hv', 'hb', 'ghghg', 'user', 'hjhs@gamil.com', 'hjhjh', '202cb962ac59075b964b07152d234b70', '123'),
('pandu', 'pandu', 'pandu', 'participant', 'pandu@gmail.com', 'pandu', '8acf7115033fa7bbfebe4b9b726ab374', 'pandu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
