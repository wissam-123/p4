-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 31 mei 2024 om 13:05
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `statistiekensysteem`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bezoekers`
--

CREATE TABLE `bezoekers` (
  `id` int(11) NOT NULL,
  `land` varchar(100) NOT NULL,
  `ip_adres` varchar(45) NOT NULL,
  `provider` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `datum_tijd` datetime NOT NULL,
  `referer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `bezoekers`
--

INSERT INTO `bezoekers` (`id`, `land`, `ip_adres`, `provider`, `browser`, `datum_tijd`, `referer`) VALUES
(1, 'marokko', '127.0.0.1', 'sds', '12d', '2024-05-31 09:23:24', 'ss'),
(2, 'marokko', '127.0.0.1', 'sds', '12d', '2024-05-31 09:28:24', 'ss'),
(3, 'marokko', '127.0.0.1', 'sds', '12d', '2024-05-31 09:29:14', 'ss'),
(4, 'nederland', '127.0.0.1', 'er', '55', '2024-05-31 09:48:19', 'ww'),
(5, 'nederland', '127.0.0.1', 'er', '55', '2024-05-31 09:49:10', 'ww'),
(6, 'amereca', '127.0.0.1', 'mmm', '45', '2024-05-31 10:02:02', 'ji'),
(7, 'amereca', '127.0.0.1', 'mmm', '45', '2024-05-31 10:06:45', 'ji'),
(8, 'amereca', '127.0.0.1', 'mmm', '45', '2024-05-31 10:06:49', 'ji'),
(9, 'amereca', '127.0.0.1', 'mmm', '45', '2024-05-31 10:06:56', 'ji'),
(10, 'amereca', '127.0.0.1', 'mmm', '45', '2024-05-31 10:07:15', 'ji'),
(11, 'mako', '127.0.0.1', 'kk', '654', '2024-05-31 10:07:37', 'p'),
(12, 'marokko', '127.0.0.1', 'pio', '87', '2024-05-31 10:10:37', 'u'),
(13, 'madar', '127.0.0.1', 'ee', '45', '2024-05-31 10:46:34', 'ff'),
(14, '', '127.0.0.1', 'sas', 'd55', '2024-05-31 11:24:16', 'ds'),
(15, '', '127.0.0.1', 'ds', 'ds', '2024-05-31 11:25:09', 'ds'),
(16, '', '127.0.0.1', 'ds', 'ds', '2024-05-31 11:26:49', 'ds'),
(17, 'mta', '127.0.0.1', 'ds', 'ds', '2024-05-31 11:27:03', 'ds'),
(18, 'België', '127.0.0.1', 'lk', '79', '2024-05-31 11:30:21', 'piu'),
(19, 'Nederland', '127.0.0.1', 'hhhhhhhh', 'hhhhhh', '2024-05-31 11:31:45', 'hhhhh');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bezoekers`
--
ALTER TABLE `bezoekers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bezoekers`
--
ALTER TABLE `bezoekers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
