-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2014 a las 13:43:42
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pd3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
  `usuarioId` varchar(50) NOT NULL,
`articuloId` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estadoArticulo` varchar(30) NOT NULL,
  `precio` varchar(15) NOT NULL,
  `descripcion` text NOT NULL,
  `calle` varchar(100) NOT NULL,
  `state` varchar(25) NOT NULL,
  `cuidad` varchar(25) NOT NULL,
  `codigoPostal` int(7) NOT NULL,
  `vendido` int(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`usuarioId`, `articuloId`, `nombre`, `estadoArticulo`, `precio`, `descripcion`, `calle`, `state`, `cuidad`, `codigoPostal`, `vendido`) VALUES
('10152885393286882', 11, 'lavadora', 'nuevo', '3,000', 'vendo porque quiero una nueva', 'Priv.Ramos Arizpe', '32', 'baja', 45678, 0),
('977309272286315', 12, 'Prueba otro usario', 'nuevo', '50', 'like new it is', 'Ave.Constituyentes', '21', 'QuerÃ©taro', 76000, 0),
('977309272286315', 13, 'licuadora', 'nuevo', '235', 'en caja nueva y original.', 'Calle Cedro a los Olvera', '21', 'Corregidora', 76902, 0),
('10152885393286882', 10, 'plancha GE', 'usado', '120', 'Quiero una nueva', 'Calle Escobedo', '21', 'QuerÃ©taro', 76098, 0),
('10152885393286882', 18, 'MacBook Pro 13.3in', 'usado', '7500', 'Ver especificaciones el sitio de Apple', 'Priv.Ramos Arizpe', '21', 'QuerÃ©taro', 76000, 0),
('10152894173784433', 104, 'Raqueta', 'nuevo', '200', 'Raqueta de tenis', 'Av. Pie de la cuesta', '21', 'Queretaro', 76140, 0),
('10152894173784433', 102, 'Mochila', 'semi-nuevo', '150', 'Mochila semi-usada, buenas condiciones', 'Av. Belen', '21', 'Queretaro', 76148, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
`estadoId` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`estadoId`, `nombre`) VALUES
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
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `articuloId` int(11) NOT NULL,
  `ruta` varchar(60) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`articuloId`, `ruta`) VALUES
(11, 'imagenes/lavadora.jpg'),
(13, 'imagenes/licuadora.jpg'),
(18, 'imagenes/mac.jpg'),
(102, 'imagenes/mochila.jpg'),
(10, 'imagenes/plancha.jpg'),
(104, 'imagenes/raqueta.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`idusuario` int(11) NOT NULL,
  `nombres` varchar(80) DEFAULT NULL,
  `apellidos` varchar(80) DEFAULT NULL,
  `usuario` varchar(80) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `fbId` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombres`, `apellidos`, `usuario`, `password`, `email`, `fbId`) VALUES
(1, 'Raul', 'Garcia', 'rul', 'cha', 'rulgf.420@gmail.com', ''),
(2, 'fer', 'fer', 'fer', 'fer', 'fer@mail.com', ''),
(3, 'Raúl García Furió', '', '', '', 'rulgf.420@gmail.com', '803823663008462'),
(4, 'hola', 'hola', 'hola', 'hola', 'hola1', ''),
(6, 'Diana Sanabria', '', '', '', 'a01320622@gmail.com', '10152885393286882'),
(7, 'Andrea Monterrubio', '', '', '', 'and_rock090@hotmail.com', '10152894173784433');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
 ADD PRIMARY KEY (`articuloId`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
 ADD PRIMARY KEY (`estadoId`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
 ADD PRIMARY KEY (`ruta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
MODIFY `articuloId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
MODIFY `estadoId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
