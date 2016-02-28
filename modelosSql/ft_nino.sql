-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2015 a las 11:29:56
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
-- Estructura de tabla para la tabla `ft_nino`
--

CREATE TABLE IF NOT EXISTS `ft_nino` (
  `id` int(11) NOT NULL,
  `ftn_nombre` varchar(30) NOT NULL,
  `ftn_profesional` varchar(30) NOT NULL,
  `ftn_fecha` varchar(10) NOT NULL,
  `ftn_lab` varchar(20) NOT NULL,
  `ftn_com` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ft_nino`
--

INSERT INTO `ft_nino` (`id`, `ftn_nombre`, `ftn_profesional`, `ftn_fecha`, `ftn_lab`, `ftn_com`) VALUES
(4, 'pepito', 'dr simi', '23/23/23', 'niño', 'dassddsaasd'),
(5, 'lushito', 'asdasd', '132164', 'asdsadasd', 'asfasfsafdas'),
(6, 'nicolas', 'dasdsa', '4563134', 'asdafas', 'churriman');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ft_nino`
--
ALTER TABLE `ft_nino`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ft_nino`
--
ALTER TABLE `ft_nino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
