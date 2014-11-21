-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2014 at 02:34 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `PD3`
--

-- --------------------------------------------------------

--
-- Table structure for table `Estados`
--

CREATE TABLE IF NOT EXISTS `Estados` (
  `estadoId` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`estadoId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `Estados`
--

INSERT INTO `Estados` (`estadoId`, `nombre`) VALUES
(29, 'Veracruz '),
(28, 'Tlaxcala '),
(27, 'Tamaulipas '),
(26, 'Tabasco '),
(25, 'Sonora '),
(24, 'Sinaloa '),
(23, 'San Luis PotosÃ­'),
(22, 'Quintana Roo '),
(21, 'QuerÃ©taro'),
(20, 'Puebla '),
(19, 'Oaxaca '),
(18, 'Nuevo LeÃ³n'),
(17, 'Nayarit '),
(16, 'Morelos '),
(15, 'MichoacÃ¡n'),
(14, 'MÃ©xico'),
(13, 'Jalisco '),
(12, 'Hidalgo '),
(11, 'Guerrero '),
(10, 'Guanajuato '),
(9, 'Durango '),
(8, 'Distrito Federal '),
(7, 'Chihuahua '),
(6, 'Chiapas '),
(5, 'Colima '),
(4, 'Coahuila de Zaragoza '),
(3, 'Campeche '),
(2, 'Baja California Sur '),
(1, 'Aguascalientes'),
(30, 'YucatÃ¡n'),
(31, 'Zacatecas'),
(32, 'Baja California ');
