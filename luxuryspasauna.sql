-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 17.04.2018 klo 00:28
-- Palvelimen versio: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luxuryspasauna`
--
CREATE DATABASE IF NOT EXISTS `luxuryspasauna` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `luxuryspasauna`;

-- --------------------------------------------------------

--
-- Rakenne taululle `varaukset`
--

DROP TABLE IF EXISTS `varaukset`;
CREATE TABLE IF NOT EXISTS `varaukset` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `asiakas_id` int(11) UNSIGNED NOT NULL,
  `pvm` date NOT NULL,
  `hlolkm` int(2) NOT NULL,
  `klo` time NOT NULL,
  `huone_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `huone_id` (`huone_id`),
  KEY `asiakas_id` (`asiakas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;


-- --------------------------------------------------------

--
-- Rakenne taululle `asiakkaat`
--

DROP TABLE IF EXISTS `asiakkaat`;
CREATE TABLE IF NOT EXISTS `asiakkaat` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etunimi` varchar(30) COLLATE latin1_bin NOT NULL,
  `sukunimi` varchar(30) COLLATE latin1_bin NOT NULL,
  `email` varchar(50) COLLATE latin1_bin NOT NULL,
  `puhelin` varchar(20) COLLATE latin1_bin NOT NULL,
  `yritys` varchar(20) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

-- --------------------------------------------------------

--
-- Rakenne taululle `huoneet`
--

DROP TABLE IF EXISTS `huoneet`;
CREATE TABLE IF NOT EXISTS `huoneet` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `koko` int(11) NOT NULL,
  `maxmajoittujat` int(11) NOT NULL,
  `jaakaappi` tinyint(1) NOT NULL,
  `tv` tinyint(1) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `uima-allas` tinyint(1) NOT NULL,
  `sauna` tinyint(1) NOT NULL,
  `vrkhinta` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Vedos taulusta `huoneet`
--

INSERT INTO `huoneet` (`id`, `koko`, `maxmajoittujat`, `jaakaappi`, `tv`, `wifi`, `uima-allas`, `sauna`, `vrkhinta`) VALUES
(1, 20, 1, 1, 0, 1, 1, 0, 30),
(2, 40, 2, 1, 1, 1, 1, 1, 60),
(3, 60, 3, 1, 1, 1, 1, 1, 80),
(4, 100, 5, 1, 1, 1, 1, 1, 150);

-- --------------------------------------------------------

--
-- Rakenne taululle `lisapalvelut`
--

DROP TABLE IF EXISTS `lisapalvelut`;
CREATE TABLE IF NOT EXISTS `lisapalvelut` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nimi` varchar(30) COLLATE latin1_bin NOT NULL,
  `hinta` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Vedos taulusta `lisapalvelut`
--

INSERT INTO `lisapalvelut` (`id`, `nimi`, `hinta`) VALUES
(1, 'aamiainen huoneeseen', 20),
(2, 'maksulliset tv-kanavat', 30),
(3, 'vip-lippu hotellin baariin', 50);

-- --------------------------------------------------------

--
-- Rakenne taululle `varauslisapalvelutliitos`
--

DROP TABLE IF EXISTS `varauslisapalvelutliitos`;
CREATE TABLE IF NOT EXISTS `varauslisapalvelutliitos` (
  `varaus_id` int(11) UNSIGNED NOT NULL,
  `lisapalvelu_id` int(11) UNSIGNED NOT NULL,
  `lkm` int(11) NOT NULL,
  KEY `lisapalvelu_id` (`lisapalvelu_id`),
  KEY `varaus_id` (`varaus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Rajoitteet vedostauluille
--

--
-- Rajoitteet taululle `varaukset`
--
ALTER TABLE `varaukset`
  ADD CONSTRAINT `varaukset_ibfk_1` FOREIGN KEY (`huone_id`) REFERENCES `huoneet` (`id`),
  ADD CONSTRAINT `varaukset_ibfk_2` FOREIGN KEY (`asiakas_id`) REFERENCES `asiakkaat` (`id`);

--
-- Rajoitteet taululle `varauslisapalvelutliitos`
--
ALTER TABLE `varauslisapalvelutliitos`
  ADD CONSTRAINT `varauslisapalvelutliitos_ibfk_1` FOREIGN KEY (`lisapalvelu_id`) REFERENCES `lisapalvelut` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `varauslisapalvelutliitos_ibfk_2` FOREIGN KEY (`varaus_id`) REFERENCES `varaukset` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
