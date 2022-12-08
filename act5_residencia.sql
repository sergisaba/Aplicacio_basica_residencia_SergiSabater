-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-12-2022 a las 21:17:36
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `act5_residencia`
--
CREATE DATABASE IF NOT EXISTS `act5_residencia` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `act5_residencia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `usuari` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `usuari`, `passwd`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar`
--

DROP TABLE IF EXISTS `familiar`;
CREATE TABLE IF NOT EXISTS `familiar` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `telefon` varchar(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiar`
--

INSERT INTO `familiar` (`id`, `nom`, `passwd`, `telefon`) VALUES
(25, 'sergi', '12345', '659874423'),
(26, 'marcos', '1234', '687425568'),
(27, 'Irene', '12345', '687425589');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `asunto` varchar(255) NOT NULL,
  `cuerpo` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `asunto`, `cuerpo`, `usuario`) VALUES
(1, 'Nueva entrada', 'Hola que tal como estas', 'marcos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resident`
--

DROP TABLE IF EXISTS `resident`;
CREATE TABLE IF NOT EXISTS `resident` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `cognom1` varchar(255) NOT NULL,
  `cognom2` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `longt` varchar(255) NOT NULL,
  `id_familiar` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `resident`
--

INSERT INTO `resident` (`id`, `nom`, `cognom1`, `cognom2`, `lat`, `longt`, `id_familiar`) VALUES
(3, 'Jose', 'Martinez', 'Gaucho', '2.8415184', '25.819189', 25),
(4, 'Maria', 'Pilar', 'Mar', '2.8415184', '25.819189', 26),
(5, 'Manolo', 'Sanchez', 'Ruiz', '2.8415184', '25.819189', 27),
(6, 'Manolo', 'Martinez', 'Ruiz', '2.8415184', '25.819189', 30);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
