-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2017 a las 21:39:23
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `saint`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_alumno`
--

CREATE TABLE `tab_alumno` (
  `id_alumno` int(10) NOT NULL,
  `alum_nfc` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rela_persona` int(10) NOT NULL,
  `rela_tutor` int(10) NOT NULL,
  `rela_curso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_asistencia`
--

CREATE TABLE `tab_asistencia` (
  `id_asistencia` int(10) NOT NULL,
  `asis_fechahora` datetime NOT NULL,
  `asis_estado` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rela_profesor` int(10) NOT NULL,
  `rela_materia` int(10) NOT NULL,
  `rela_alumno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_curso`
--

CREATE TABLE `tab_curso` (
  `id_curso` int(10) NOT NULL,
  `curs_año` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `curs_division` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `curs_turno` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rela_preceptor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_curso_profe`
--

CREATE TABLE `tab_curso_profe` (
  `id_curso_profe` int(10) NOT NULL,
  `rela_curso` int(10) NOT NULL,
  `rela_profe` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_materia`
--

CREATE TABLE `tab_materia` (
  `id_materia` int(10) NOT NULL,
  `mate_descripcion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_materia_curso`
--

CREATE TABLE `tab_materia_curso` (
  `id_materia_curso` int(10) NOT NULL,
  `rela_materia` int(10) NOT NULL,
  `rela_curso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_persona`
--

CREATE TABLE `tab_persona` (
  `id_persona` int(10) NOT NULL,
  `pers_nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pers_apellido` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pers_dni` int(8) NOT NULL,
  `pers_sexo` int(1) NOT NULL COMMENT 'Si es 0 es masculino, Si es 1 es femenino',
  `pers_nacionalidad` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rela_direccion` int(10) NOT NULL,
  `rela_contacto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_preceptor`
--

CREATE TABLE `tab_preceptor` (
  `id_preceptor` int(10) NOT NULL,
  `prec_password` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `prec_profesion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rela_persona` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_profesor`
--

CREATE TABLE `tab_profesor` (
  `id_profesor` int(10) NOT NULL,
  `prof_titulo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `prof_cargahoraria` int(3) NOT NULL,
  `rela_persona` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_profe_materia`
--

CREATE TABLE `tab_profe_materia` (
  `id_profe_materia` int(10) NOT NULL,
  `rela_materia` int(11) NOT NULL,
  `rela_profe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_tutor`
--

CREATE TABLE `tab_tutor` (
  `id_tutor` int(10) NOT NULL,
  `tutor_tutelatotal` int(3) NOT NULL,
  `rela_persona` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tab_alumno`
--
ALTER TABLE `tab_alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `tab_asistencia`
--
ALTER TABLE `tab_asistencia`
  ADD PRIMARY KEY (`id_asistencia`);

--
-- Indices de la tabla `tab_curso`
--
ALTER TABLE `tab_curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `tab_curso_profe`
--
ALTER TABLE `tab_curso_profe`
  ADD PRIMARY KEY (`id_curso_profe`);

--
-- Indices de la tabla `tab_materia`
--
ALTER TABLE `tab_materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `tab_materia_curso`
--
ALTER TABLE `tab_materia_curso`
  ADD PRIMARY KEY (`id_materia_curso`);

--
-- Indices de la tabla `tab_persona`
--
ALTER TABLE `tab_persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `tab_preceptor`
--
ALTER TABLE `tab_preceptor`
  ADD PRIMARY KEY (`id_preceptor`);

--
-- Indices de la tabla `tab_profesor`
--
ALTER TABLE `tab_profesor`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indices de la tabla `tab_profe_materia`
--
ALTER TABLE `tab_profe_materia`
  ADD PRIMARY KEY (`id_profe_materia`);

--
-- Indices de la tabla `tab_tutor`
--
ALTER TABLE `tab_tutor`
  ADD PRIMARY KEY (`id_tutor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tab_alumno`
--
ALTER TABLE `tab_alumno`
  MODIFY `id_alumno` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_asistencia`
--
ALTER TABLE `tab_asistencia`
  MODIFY `id_asistencia` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_curso`
--
ALTER TABLE `tab_curso`
  MODIFY `id_curso` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_curso_profe`
--
ALTER TABLE `tab_curso_profe`
  MODIFY `id_curso_profe` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_materia`
--
ALTER TABLE `tab_materia`
  MODIFY `id_materia` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_materia_curso`
--
ALTER TABLE `tab_materia_curso`
  MODIFY `id_materia_curso` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_persona`
--
ALTER TABLE `tab_persona`
  MODIFY `id_persona` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_preceptor`
--
ALTER TABLE `tab_preceptor`
  MODIFY `id_preceptor` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_profesor`
--
ALTER TABLE `tab_profesor`
  MODIFY `id_profesor` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_profe_materia`
--
ALTER TABLE `tab_profe_materia`
  MODIFY `id_profe_materia` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_tutor`
--
ALTER TABLE `tab_tutor`
  MODIFY `id_tutor` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
