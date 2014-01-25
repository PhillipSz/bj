-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 20. Mrz 2013 um 14:47
-- Server Version: 5.5.25a
-- PHP-Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `bjs`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `schueler`
--

CREATE TABLE IF NOT EXISTS `schueler` (
  `Nachname` varchar(30) NOT NULL,
  `Vorname` varchar(30) NOT NULL,
  `Geburtsdatum` date NOT NULL,
  `Klasse` varchar(3) NOT NULL,
  `Nummer` int(4) NOT NULL,
  PRIMARY KEY (`Nummer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `schueler`
--

INSERT INTO `schueler` (`Nachname`, `Vorname`, `Geburtsdatum`, `Klasse`, `Nummer`) VALUES
('Mustermann', 'Max', '1990-01-01', '5a', 1),

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
