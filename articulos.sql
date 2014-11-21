-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2014 at 06:09 PM
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
-- Table structure for table `Articulo`
--

CREATE TABLE IF NOT EXISTS `Articulo` (
  `usuarioId` varchar(50) NOT NULL,
  `articuloId` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `estadoArticulo` varchar(30) NOT NULL,
  `precio` varchar(15) NOT NULL,
  `descripcion` text NOT NULL,
  `calle` varchar(100) NOT NULL,
  `state` varchar(25) NOT NULL,
  `cuidad` varchar(25) NOT NULL,
  `codigoPostal` int(7) NOT NULL,
  `vendido` int(1) NOT NULL,
  PRIMARY KEY (`articuloId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `Articulo`
--

INSERT INTO `Articulo` (`usuarioId`, `articuloId`, `nombre`, `estadoArticulo`, `precio`, `descripcion`, `calle`, `state`, `cuidad`, `codigoPostal`, `vendido`) VALUES
('10152885393286882', 11, 'lavadora', 'nuevo', '', 'vendo porque quiero una nueva', 'Priv.Ramos Arizpe', '32', 'baja', 45678, 0),
('977309272286315', 12, 'Prueba otro usario', 'nuevo', '', 'like new it is', 'Ave.Constituyentes', '21', 'QuerÃ©taro', 76000, 0),
('977309272286315', 13, 'licuadora', 'nuevo', '', 'en caja nueva y original.', 'Calle Cedro a los Olvera', '21', 'Corregidora', 76902, 0),
('10152885393286882', 10, 'plancha mabe', 'usado', '', 'bue est', 'Priv.Ramos Arizpe', '21', 'QuerÃ©taro', 76000, 0);
