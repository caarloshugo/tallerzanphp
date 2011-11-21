-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-11-2011 a las 03:42:45
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `zan_taller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aldeanos`
--

CREATE TABLE IF NOT EXISTS `aldeanos` (
  `ID_Aldeano` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(150) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Twitter` varchar(100) DEFAULT NULL,
  `Code` varchar(4) NOT NULL,
  `Situation` varchar(10) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`ID_Aldeano`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `aldeanos`
--

INSERT INTO `aldeanos` (`ID_Aldeano`, `Name`, `Email`, `Twitter`, `Code`, `Situation`) VALUES
(1, 'Carlos Hugo', 'caarloshugo@gmail.com', '@caarloshugo', 'BA04', 'Active'),
(2, 'Claudio Morales', 'claudio@pronuer.com.mx', '@pronuer', 'BA01', 'Active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
