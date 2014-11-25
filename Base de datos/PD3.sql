-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2014 at 02:24 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `Articulo`
--

INSERT INTO `Articulo` (`usuarioId`, `articuloId`, `nombre`, `estadoArticulo`, `precio`, `descripcion`, `calle`, `state`, `cuidad`, `codigoPostal`, `vendido`) VALUES
('10152885393286882', 11, 'lavadora', 'nuevo', '3,000', 'vendo porque quiero una nueva', 'Priv.Ramos Arizpe', '32', 'baja', 45678, 0),
('977309272286315', 12, 'Prueba otro usario', 'nuevo', '50', 'like new it is', 'Ave.Constituyentes', '21', 'QuerÃ©taro', 76000, 0),
('977309272286315', 13, 'licuadora', 'nuevo', '235', 'en caja nueva y original.', 'Calle Cedro a los Olvera', '21', 'Corregidora', 76902, 0),
('10152885393286882', 10, 'plancha GE', 'usado', '120', 'Quiero una nueva', 'Calle Escobedo', '21', 'QuerÃ©taro', 76098, 0),
('10152885393286882', 18, 'MacBook Pro 13.3in', 'usado', '7500', 'Ver especificaciones el sitio de Apple', 'Priv.Ramos Arizpe', '21', 'QuerÃ©taro', 76000, 0),
('10152885393286882', 20, 'caja de juguetes', 'usado', '50', 'madera, en excelente condiciones', 'Priv.Ramos Arizpe', '21', 'QuerÃ©taro', 76000, 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(80) DEFAULT NULL,
  `apellidos` varchar(80) DEFAULT NULL,
  `usuario` varchar(80) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `fbId` varchar(50) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombres`, `apellidos`, `usuario`, `password`, `email`, `fbId`) VALUES
(1, 'Raul', 'Garcia', 'rul', 'cha', 'rulgf.420@gmail.com', ''),
(2, 'fer', 'fer', 'fer', 'fer', 'fer@mail.com', ''),
(3, 'Raúl García Furió', '', '', '', 'rulgf.420@gmail.com', '803823663008462'),
(4, 'hola', 'hola', 'hola', 'hola', 'hola1', ''),
(6, 'Diana Sanabria', '', '', '', 'a01320622@gmail.com', '10152885393286882');
