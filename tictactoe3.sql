-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 24 Mar 2019 pada 16.23
-- Versi Server: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tictactoe3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_battle`
--

CREATE TABLE `tb_battle` (
  `id` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `player` varchar(255) NOT NULL,
  `row_square` int(11) NOT NULL,
  `column_square` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_battle`
--

INSERT INTO `tb_battle` (`id`, `room_name`, `player`, `row_square`, `column_square`, `created_at`, `updated_at`) VALUES
(1, 'QSDPJ', 'sads', 0, 1, '2019-03-23 04:12:18', '2019-03-23 04:12:18'),
(2, 'mm', 'sads', 0, 1, '2019-03-23 04:25:06', '2019-03-23 04:25:06'),
(3, 'mmmmm', 'sads', 0, 1, '2019-03-23 04:25:20', '2019-03-23 04:25:20'),
(4, 'sdsdsd', 'sads', 0, 1, '2019-03-23 04:29:09', '2019-03-23 04:29:09'),
(5, 'QSDPJ', 'klsd', 1, 1, '2019-03-23 04:51:51', '2019-03-23 04:51:51'),
(6, 'adsdsd', 'klsd', 1, 1, '2019-03-23 04:52:28', '2019-03-23 04:52:28'),
(7, 'pbnNo', 'galih', 1, 2, '2019-03-23 15:12:12', '2019-03-23 15:12:12'),
(8, 'pbnNo', 'danang', 1, 2, '2019-03-23 15:12:24', '2019-03-23 15:12:24'),
(9, 'pbnNo', 'galih', 2, 2, '2019-03-23 15:40:37', '2019-03-23 15:40:37'),
(10, 'pbnNo', 'danang', 0, 2, '2019-03-23 15:42:56', '2019-03-23 15:42:56'),
(11, 'pbnNo', 'galih', 2, 1, '2019-03-23 16:06:37', '2019-03-23 16:06:37'),
(12, 'pbnNo', 'danang', 0, 0, '2019-03-23 16:07:13', '2019-03-23 16:07:13'),
(13, 'pbnNo', 'galih', 2, 0, '2019-03-23 16:08:04', '2019-03-23 16:08:04'),
(14, 'pbnNo', 'danang', 2, 0, '2019-03-23 16:08:33', '2019-03-23 16:08:33'),
(15, 'pbnNo', 'galih', 2, 0, '2019-03-23 16:08:52', '2019-03-23 16:08:52'),
(16, 'pbnNo', 'galih', 2, 0, '2019-03-23 16:09:22', '2019-03-23 16:09:22'),
(17, 'pbnNo', 'galih', 2, 0, '2019-03-23 16:09:40', '2019-03-23 16:09:40'),
(18, 'pbnNo', 'galih', 2, 0, '2019-03-23 16:09:55', '2019-03-23 16:09:55'),
(19, 'pbnNo', 'galih', 2, 0, '2019-03-23 16:10:02', '2019-03-23 16:10:02'),
(20, 'pbnNo', 'galih', 2, 0, '2019-03-23 16:10:50', '2019-03-23 16:10:50'),
(21, 'pbnNo', 'galih', 2, 0, '2019-03-23 16:12:03', '2019-03-23 16:12:03'),
(22, 'pbnNo', 'galih', 2, 0, '2019-03-23 16:12:25', '2019-03-23 16:12:25'),
(23, 'pbnNo', 'galih', 2, 0, '2019-03-23 16:12:37', '2019-03-23 16:12:37'),
(24, 'pbnNo', 'galih', 2, 0, '2019-03-23 16:13:22', '2019-03-23 16:13:22'),
(25, 'pbnNo', 'galih', 2, 0, '2019-03-23 16:15:20', '2019-03-23 16:15:20'),
(26, 'pbnNo', 'galih', 2, 0, '2019-03-23 16:27:42', '2019-03-23 16:27:42'),
(27, 'pbnNo', 'galih', 2, 0, '2019-03-23 16:28:02', '2019-03-23 16:28:02'),
(28, 'SqktI', 'galih', 2, 0, '2019-03-23 17:49:30', '2019-03-23 17:49:30'),
(29, 'kBQ2E', 'galih', 1, 1, '2019-03-23 17:52:21', '2019-03-23 17:52:21'),
(30, 'kBQ2E', 'danang', 2, 1, '2019-03-23 17:54:21', '2019-03-23 17:54:21'),
(31, 'kBQ2E', 'galih', 2, 2, '2019-03-23 17:54:56', '2019-03-23 17:54:56'),
(32, 'kBQ2E', 'danang', 0, 2, '2019-03-23 17:55:36', '2019-03-23 17:55:36'),
(33, 'kBQ2E', 'galih', 1, 0, '2019-03-23 17:57:20', '2019-03-23 17:57:20'),
(34, '1buy3', 'galih', 2, 1, '2019-03-23 18:02:16', '2019-03-23 18:02:16'),
(35, '1buy3', 'danang', 0, 0, '2019-03-23 18:07:34', '2019-03-23 18:07:34'),
(36, '1buy3', 'galih', 0, 1, '2019-03-23 18:09:37', '2019-03-23 18:09:37'),
(37, '1buy3', 'danang', 1, 0, '2019-03-23 18:23:21', '2019-03-23 18:23:21'),
(38, '1buy3', 'galih', 2, 0, '2019-03-23 18:24:18', '2019-03-23 18:24:18'),
(39, '1buy3', 'danang', 0, 2, '2019-03-23 18:25:18', '2019-03-23 18:25:18'),
(40, '1buy3', 'galih', 2, 2, '2019-03-23 18:26:18', '2019-03-23 18:26:18'),
(41, 'iDsps', 'galih', 0, 0, '2019-03-23 18:27:26', '2019-03-23 18:27:26'),
(42, 'iDsps', 'danang', 2, 1, '2019-03-23 18:27:37', '2019-03-23 18:27:37'),
(43, 'iDsps', 'galih', 0, 2, '2019-03-23 18:28:04', '2019-03-23 18:28:04'),
(44, 'iDsps', 'danang', 1, 2, '2019-03-23 18:28:14', '2019-03-23 18:28:14'),
(45, 'iDsps', 'galih', 0, 1, '2019-03-23 18:28:23', '2019-03-23 18:28:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_room`
--

CREATE TABLE `tb_room` (
  `id` int(11) NOT NULL,
  `name_room` varchar(255) NOT NULL,
  `x_player` varchar(255) NOT NULL,
  `o_player` varchar(255) DEFAULT NULL,
  `winner` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_room`
--

INSERT INTO `tb_room` (`id`, `name_room`, `x_player`, `o_player`, `winner`, `created_at`, `updated_at`) VALUES
(1, 'QSDPJ', 'galih', 'asas', NULL, '2019-03-23 02:47:19', '2019-03-23 13:47:09'),
(2, 'GBKc3', 'david', NULL, NULL, '2019-03-23 02:53:04', '2019-03-23 02:53:04'),
(3, 'DuC6A', 'david', NULL, NULL, '2019-03-23 02:55:00', '2019-03-23 02:55:00'),
(4, 'K9VuE', '{your_name}', NULL, NULL, '2019-03-23 02:57:10', '2019-03-23 02:57:10'),
(5, 'eP0SO', '{your_name}', NULL, NULL, '2019-03-23 03:04:03', '2019-03-23 03:04:03'),
(6, 'tXocA', 'sadsd', NULL, NULL, '2019-03-23 03:12:03', '2019-03-23 03:12:03'),
(7, 'ol4g8', '{your_name}', NULL, NULL, '2019-03-23 03:15:31', '2019-03-23 03:15:31'),
(8, 'nSAie', 'asas', 'asas', NULL, '2019-03-23 03:36:21', '2019-03-23 03:36:28'),
(9, 'fgeoR', 'sd', 'sdsd', NULL, '2019-03-23 03:41:53', '2019-03-23 03:57:05'),
(10, 'k7cAL', '{your_name}', NULL, NULL, '2019-03-23 03:59:41', '2019-03-23 03:59:41'),
(11, '2vEHq', '{your_name}', NULL, NULL, '2019-03-23 13:47:15', '2019-03-23 13:47:15'),
(12, 'pbnNo', 'galih', 'danang', NULL, '2019-03-23 13:55:55', '2019-03-23 14:11:09'),
(13, 'YcK3s', 'galih', NULL, NULL, '2019-03-23 14:22:23', '2019-03-23 14:22:23'),
(14, 'SqktI', 'galih', 'danang', NULL, '2019-03-23 17:49:00', '2019-03-23 17:49:22'),
(15, 'kBQ2E', 'galih', 'danang', 'danang', '2019-03-23 17:51:56', '2019-03-23 17:54:21'),
(16, '1buy3', 'galih', 'danang', 'danang', '2019-03-23 18:02:00', '2019-03-23 18:02:16'),
(17, 'iDsps', 'galih', 'danang', NULL, '2019-03-23 18:27:05', '2019-03-23 18:27:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_battle`
--
ALTER TABLE `tb_battle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_battle`
--
ALTER TABLE `tb_battle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
