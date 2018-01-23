
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-05-2017 a las 14:28:19
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u849963431_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones`
--

CREATE TABLE IF NOT EXISTS `peticiones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `posicion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`id`, `nombre`, `email`, `posicion`, `descripcion`) VALUES
(1, 'jkñlkj', 'javi_deportista@hotmail.com', 'Defensa', 'jklñlkjñlkj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE IF NOT EXISTS `plantilla` (
  `Nombre` varchar(224) COLLATE utf8_unicode_ci NOT NULL,
  `Dorsal` int(3) NOT NULL,
  `Goles` int(3) NOT NULL,
  `Amarillas` int(3) NOT NULL,
  `Lesionado` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Dorsal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `plantilla`
--

INSERT INTO `plantilla` (`Nombre`, `Dorsal`, `Goles`, `Amarillas`, `Lesionado`) VALUES
('Javier Fernández ', 1, 0, 3, 'SI'),
('Javier Conde', 3, 18, 1, 'NO'),
('José Julian', 4, 0, 0, 'NO'),
('Diego Gómez', 5, 1, 0, 'NO'),
('Jose', 7, 5, 4, 'NO'),
('David González', 9, 1, 1, 'NO'),
('Daniel Loro', 10, 2, 0, 'SI'),
('Álvaro Saez', 11, 3, 3, 'NO'),
('Fernando Díaz', 14, 0, 0, 'NO'),
('Alberto Bazarra', 17, 3, 1, 'SI'),
('David del Moral', 44, 3, 1, 'NO'),
('Adrián Roselló', 55, 0, 2, 'NO'),
('Jesús Leal', 66, 8, 1, 'NO'),
('Juán Vázquez ', 69, 10, 2, 'NO');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
