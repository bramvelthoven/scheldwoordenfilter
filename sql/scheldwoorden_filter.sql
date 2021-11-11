-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 11 nov 2021 om 13:01
-- Serverversie: 5.7.30
-- PHP-versie: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheldwoorden`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `scheldwoorden_filter`
--

CREATE TABLE `scheldwoorden_filter` (
  `id` int(11) NOT NULL,
  `woord` varchar(255) NOT NULL,
  `goedgekeurd` tinyint(1) NOT NULL,
  `gradatie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `scheldwoorden_filter`
--

INSERT INTO `scheldwoorden_filter` (`id`, `woord`, `goedgekeurd`, `gradatie`) VALUES
(2, 'oen', 0, 2),
(3, 'test', 0, 2),
(4, 'teringlijer', 0, 2),
(5, 'teringlijer', 0, 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `scheldwoorden_filter`
--
ALTER TABLE `scheldwoorden_filter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `scheldwoorden_filter`
--
ALTER TABLE `scheldwoorden_filter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
