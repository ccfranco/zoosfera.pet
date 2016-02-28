-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2015 a las 11:30:09
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbfono`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ft_adulto`
--

CREATE TABLE IF NOT EXISTS `ft_adulto` (
  `id` int(11) NOT NULL,
  `fta_nombre` varchar(30) NOT NULL,
  `fta_profesional` varchar(30) NOT NULL,
  `fta_fecha` varchar(10) NOT NULL,
  `fta_lab` varchar(20) NOT NULL,
  `fta_com` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ft_adulto`
--

INSERT INTO `ft_adulto` (`id`, `fta_nombre`, `fta_profesional`, `fta_fecha`, `fta_lab`, `fta_com`) VALUES
(4, 'pancho', 'asdsad', '1524', 'adulto', 'loco pastero'),
(5, 'diego', 'dr simi', '31/20/1990', 'adulto', 'churriman');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ft_adulto`
--
ALTER TABLE `ft_adulto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ft_adulto`
--
ALTER TABLE `ft_adulto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
