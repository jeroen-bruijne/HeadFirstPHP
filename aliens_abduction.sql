-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 04 nov 2016 om 11:57
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aliendatabase`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aliens_abduction`
--

CREATE TABLE `aliens_abduction` (
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `when_it_happened` varchar(30) DEFAULT NULL,
  `how_long` varchar(30) DEFAULT NULL,
  `how_many` varchar(30) DEFAULT NULL,
  `alien_description` varchar(30) DEFAULT NULL,
  `what_they_did` varchar(100) DEFAULT NULL,
  `fang_spotted` varchar(10) DEFAULT NULL,
  `other` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `aliens_abduction`
--

INSERT INTO `aliens_abduction` (`first_name`, `last_name`, `when_it_happened`, `how_long`, `how_many`, `alien_description`, `what_they_did`, `fang_spotted`, `other`, `email`) VALUES
('jeroen', 'de Bruijne', 'Zuid-Holland', '2 days', '3', 'green and ugly', 'smile', 'yes', 'Fang is okay', 'jeroen.bruijne@hotmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
