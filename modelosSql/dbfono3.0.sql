-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2016 a las 01:54:19
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

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
-- Estructura de tabla para la tabla `anam_lenguaje`
--

CREATE TABLE `anam_lenguaje` (
  `anl_id` int(11) NOT NULL,
  `anl_nombre` varchar(45) DEFAULT NULL,
  `anl_fNacimiento` datetime DEFAULT NULL,
  `anl_edad` int(11) DEFAULT NULL,
  `anl_idioma` varchar(45) DEFAULT NULL,
  `anl_direccion` varchar(45) DEFAULT NULL,
  `anl_numfon` int(11) DEFAULT NULL,
  `anl_estado_civil` varchar(45) DEFAULT NULL,
  `anl_hijos` int(11) DEFAULT NULL,
  `anl_con_quien_vive` varchar(45) DEFAULT NULL,
  `anl_fam_acompañante` varchar(45) DEFAULT NULL,
  `anl_derivado_p` varchar(45) DEFAULT NULL,
  `anl_fecha_evaluacion` datetime DEFAULT NULL,
  `anl_escolaridad` varchar(45) DEFAULT NULL,
  `anl_desempeño_escolar` int(11) DEFAULT NULL,
  `anl_mejor_desempeño` varchar(45) DEFAULT NULL,
  `anl_peor_desempeño` varchar(45) DEFAULT NULL,
  `anl_escolaridad_padres` varchar(45) DEFAULT NULL,
  `anl_profesion_oficio` varchar(45) DEFAULT NULL,
  `anl_perferc` varchar(45) DEFAULT NULL,
  `anl_años_perfec` varchar(45) DEFAULT NULL,
  `anl_ocupacion_prev` varchar(45) DEFAULT NULL,
  `anl_situacion_queja` varchar(45) DEFAULT NULL,
  `anl_situacion_act` varchar(45) DEFAULT NULL,
  `anl_habilidad_no` varchar(45) DEFAULT NULL,
  `anl_actividades_previ` varchar(45) DEFAULT NULL,
  `ficha_lenguaje_fich_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anam_nino`
--

CREATE TABLE `anam_nino` (
  `ann_id` int(11) NOT NULL,
  `ann_nombre` varchar(45) NOT NULL,
  `ann_fNacimiento` datetime DEFAULT NULL,
  `ann_edad` int(11) DEFAULT NULL,
  `ann_dir` varchar(45) DEFAULT NULL,
  `ann_escolaridad` varchar(45) DEFAULT NULL,
  `ann_prevTratamiento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_lenguaje`
--

CREATE TABLE `ficha_lenguaje` (
  `fich_id` int(11) NOT NULL,
  `fich_fecha` datetime NOT NULL,
  `fich_obs` varchar(45) NOT NULL,
  `ficha_Dr` varchar(45) NOT NULL,
  `ficha_paciente` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_nino`
--

CREATE TABLE `ficha_nino` (
  `fich_id` int(11) NOT NULL,
  `fich_fecha` datetime NOT NULL,
  `fich_obs` varchar(45) NOT NULL,
  `ficha_Dr` varchar(45) NOT NULL,
  `ficha_paciente` varchar(45) NOT NULL,
  `anam_nino_ann_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ft_adulto`
--

CREATE TABLE `ft_adulto` (
  `id` int(11) NOT NULL,
  `fta_nombre` varchar(30) NOT NULL,
  `fta_apellido` varchar(30) NOT NULL,
  `fta_fecha` varchar(20) NOT NULL,
  `fta_edad` int(20) NOT NULL,
  `fta_com` varchar(300) NOT NULL,
  `fta_telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ft_adulto`
--

INSERT INTO `ft_adulto` (`id`, `fta_nombre`, `fta_apellido`, `fta_fecha`, `fta_edad`, `fta_com`, `fta_telefono`) VALUES
(4, 'pancho', 'asdsad', '0000-00-00', 0, 'loco pastero', 0),
(5, 'diego', 'dr simi', '0000-00-00', 0, 'churriman', 0),
(6, 'gonzalo', 'toloza', '0000-00-00', 25, 'asddas', 87509221),
(7, 'gonzalo', 'toloza', '0000-00-00', 25, 'asddas', 87509221),
(8, 'gonzao', 'toloza', '0000-00-00', 22, 'dasdsadas', 5423179),
(9, 'gonzao', 'toloza', '1990-22-10', 22, 'dasdsadas', 5423179),
(10, 'gonzao', 'toloza', '1990-22-10', 22, 'dasdsadas', 5423179);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ft_nino`
--

CREATE TABLE `ft_nino` (
  `id` int(11) NOT NULL,
  `ftn_nombre` varchar(30) NOT NULL,
  `ftn_profesional` varchar(30) NOT NULL,
  `ftn_fecha` varchar(10) NOT NULL,
  `ftn_lab` varchar(20) NOT NULL,
  `ftn_com` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ft_nino`
--

INSERT INTO `ft_nino` (`id`, `ftn_nombre`, `ftn_profesional`, `ftn_fecha`, `ftn_lab`, `ftn_com`) VALUES
(4, 'pepito', 'dr simi', '23/23/23', 'niño', 'dassddsaasd'),
(5, 'lushito', 'asdasd', '132164', 'asdsadasd', 'asfasfsafdas'),
(6, 'nicolas', 'dasdsa', '4563134', 'asdafas', 'dsadasdasfassfa'),
(7, 'dsadsa', 'dsadsa', 'sdadsa', 'sdadsa', 'dsadas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `lab_id` int(11) NOT NULL,
  `lab_nombre` varchar(45) DEFAULT NULL,
  `lab_encargado` varchar(45) DEFAULT NULL,
  `rut` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `pac_rut` int(11) NOT NULL,
  `pac_nombre` varchar(45) DEFAULT NULL,
  `pac_apellido` varchar(45) DEFAULT NULL,
  `profesor_prof_id` int(11) NOT NULL,
  `anamnesis_lenguaje_anl_id` int(11) NOT NULL,
  `laboratorio_idlaboratorio` int(11) NOT NULL,
  `anamnesis_nino_ann_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `prof_id` int(11) NOT NULL,
  `laboratorio_idlaboratorio` int(11) NOT NULL,
  `prof_nombre` varchar(45) NOT NULL,
  `prof_pass` varchar(45) NOT NULL,
  `prof_esp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anam_lenguaje`
--
ALTER TABLE `anam_lenguaje`
  ADD PRIMARY KEY (`anl_id`),
  ADD KEY `fk_anamnesis_lenguaje_ficha_lenguaje1_idx` (`ficha_lenguaje_fich_id`);

--
-- Indices de la tabla `anam_nino`
--
ALTER TABLE `anam_nino`
  ADD PRIMARY KEY (`ann_id`);

--
-- Indices de la tabla `ficha_lenguaje`
--
ALTER TABLE `ficha_lenguaje`
  ADD PRIMARY KEY (`fich_id`);

--
-- Indices de la tabla `ficha_nino`
--
ALTER TABLE `ficha_nino`
  ADD PRIMARY KEY (`fich_id`),
  ADD KEY `fk_ficha_nino_anam_nino1_idx` (`anam_nino_ann_id`);

--
-- Indices de la tabla `ft_adulto`
--
ALTER TABLE `ft_adulto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ft_nino`
--
ALTER TABLE `ft_nino`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`pac_rut`),
  ADD KEY `fk_paciente_profesor_idx` (`profesor_prof_id`),
  ADD KEY `fk_paciente_anamLyHA1_idx` (`anamnesis_lenguaje_anl_id`),
  ADD KEY `fk_paciente_laboratorio1_idx` (`laboratorio_idlaboratorio`),
  ADD KEY `fk_paciente_anamnesis_nino1_idx` (`anamnesis_nino_ann_id`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`prof_id`),
  ADD KEY `fk_profesor_laboratorio1_idx` (`laboratorio_idlaboratorio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ft_adulto`
--
ALTER TABLE `ft_adulto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `ft_nino`
--
ALTER TABLE `ft_nino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anam_lenguaje`
--
ALTER TABLE `anam_lenguaje`
  ADD CONSTRAINT `fk_anamnesis_lenguaje_ficha_lenguaje1` FOREIGN KEY (`ficha_lenguaje_fich_id`) REFERENCES `ficha_lenguaje` (`fich_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ficha_nino`
--
ALTER TABLE `ficha_nino`
  ADD CONSTRAINT `fk_ficha_nino_anam_nino1` FOREIGN KEY (`anam_nino_ann_id`) REFERENCES `anam_nino` (`ann_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `fk_paciente_anamLyHA1` FOREIGN KEY (`anamnesis_lenguaje_anl_id`) REFERENCES `anam_lenguaje` (`anl_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paciente_anamnesis_nino1` FOREIGN KEY (`anamnesis_nino_ann_id`) REFERENCES `anam_nino` (`ann_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paciente_laboratorio1` FOREIGN KEY (`laboratorio_idlaboratorio`) REFERENCES `laboratorio` (`lab_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paciente_profesor` FOREIGN KEY (`profesor_prof_id`) REFERENCES `profesor` (`prof_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `fk_profesor_laboratorio1` FOREIGN KEY (`laboratorio_idlaboratorio`) REFERENCES `laboratorio` (`lab_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
