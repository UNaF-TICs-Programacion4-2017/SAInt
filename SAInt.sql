-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2017 a las 20:07:05
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

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

--
-- Volcado de datos para la tabla `tab_alumno`
--

INSERT INTO `tab_alumno` (`id_alumno`, `alum_nfc`, `rela_persona`, `rela_tutor`, `rela_curso`) VALUES
(2, 'seba_el_mas_kpo', 6, 1, 1),
(3, 'seba_el_mas_kpo', 7, 1, 1),
(4, 'hola_amigos_de_youtu', 8, 1, 1);

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
  `rela_alumno` int(10) NOT NULL,
  `rela_curso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_contacto`
--

CREATE TABLE `tab_contacto` (
  `id_contacto` int(10) NOT NULL,
  `cont_descripcion` int(3) NOT NULL,
  `cont_nro_telefono` int(20) NOT NULL,
  `rela_persona` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_contacto`
--

INSERT INTO `tab_contacto` (`id_contacto`, `cont_descripcion`, `cont_nro_telefono`, `rela_persona`) VALUES
(1, 0, 2147483647, 5),
(2, 0, 2147483647, 6),
(3, 0, 2147483647, 7),
(4, 0, 2147483647, 8);

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

--
-- Volcado de datos para la tabla `tab_curso`
--

INSERT INTO `tab_curso` (`id_curso`, `curs_año`, `curs_division`, `curs_turno`, `rela_preceptor`) VALUES
(1, '3ro tic', 'te debo', 'tarde', 1);

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
-- Estructura de tabla para la tabla `tab_direccion`
--

CREATE TABLE `tab_direccion` (
  `id_direccion` int(10) NOT NULL,
  `dir_provincia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `dir_localidad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `dir_barrio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `dir_calle` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `dir_manzana` int(3) NOT NULL,
  `dir_casa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_direccion`
--

INSERT INTO `tab_direccion` (`id_direccion`, `dir_provincia`, `dir_localidad`, `dir_barrio`, `dir_calle`, `dir_manzana`, `dir_casa`) VALUES
(1, 'formosa', 'formosa', 'unaf', 'gutnisky', 1, 1);

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
-- Estructura de tabla para la tabla `tab_nfc_temp`
--

CREATE TABLE `tab_nfc_temp` (
  `id_nfc` int(11) NOT NULL,
  `nfc_indent` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nfc_fecha_hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `rela_direccion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tab_persona`
--

INSERT INTO `tab_persona` (`id_persona`, `pers_nombre`, `pers_apellido`, `pers_dni`, `pers_sexo`, `pers_nacionalidad`, `rela_direccion`) VALUES
(5, 'Sebastian', 'Gamarra', 12345, 0, 'argentina', 1),
(6, 'Sebastian', 'Gamarra', 12345, 0, 'argentina', 1),
(7, 'Sebastian', 'Gamarra', 12345, 0, 'argentina', 1),
(8, 'Cosme', 'Fulan ito', 12345, 0, 'argentina', 1);

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

--
-- Volcado de datos para la tabla `tab_preceptor`
--

INSERT INTO `tab_preceptor` (`id_preceptor`, `prec_password`, `prec_profesion`, `rela_persona`) VALUES
(1, 'delceroalnueve', 'gobernador del mundo', 5);

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
-- Volcado de datos para la tabla `tab_tutor`
--

INSERT INTO `tab_tutor` (`id_tutor`, `tutor_tutelatotal`, `rela_persona`) VALUES
(1, 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_usuario`
--

CREATE TABLE `tab_usuario` (
  `id_usuario` int(10) NOT NULL,
  `usu_username` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usu_password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usu_estado` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Nombre de la maquina'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tab_usuario`
--

INSERT INTO `tab_usuario` (`id_usuario`, `usu_username`, `usu_password`, `usu_estado`) VALUES
(12, 'admin', 'admin', 'Notebook-PC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tab_alumno`
--
ALTER TABLE `tab_alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `rela_persona` (`rela_persona`),
  ADD KEY `rela_tutor` (`rela_tutor`,`rela_curso`),
  ADD KEY `rela_curso` (`rela_curso`);

--
-- Indices de la tabla `tab_asistencia`
--
ALTER TABLE `tab_asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `rela_profesor` (`rela_profesor`,`rela_materia`,`rela_alumno`,`rela_curso`),
  ADD KEY `rela_alumno` (`rela_alumno`),
  ADD KEY `rela_materia` (`rela_materia`),
  ADD KEY `rela_curso` (`rela_curso`);

--
-- Indices de la tabla `tab_contacto`
--
ALTER TABLE `tab_contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `rela_persona` (`rela_persona`);

--
-- Indices de la tabla `tab_curso`
--
ALTER TABLE `tab_curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `rela_preceptor` (`rela_preceptor`);

--
-- Indices de la tabla `tab_curso_profe`
--
ALTER TABLE `tab_curso_profe`
  ADD PRIMARY KEY (`id_curso_profe`),
  ADD KEY `rela_curso` (`rela_curso`,`rela_profe`),
  ADD KEY `rela_profe` (`rela_profe`);

--
-- Indices de la tabla `tab_direccion`
--
ALTER TABLE `tab_direccion`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indices de la tabla `tab_materia`
--
ALTER TABLE `tab_materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `tab_materia_curso`
--
ALTER TABLE `tab_materia_curso`
  ADD PRIMARY KEY (`id_materia_curso`),
  ADD KEY `rela_materia` (`rela_materia`,`rela_curso`),
  ADD KEY `rela_curso` (`rela_curso`);

--
-- Indices de la tabla `tab_nfc_temp`
--
ALTER TABLE `tab_nfc_temp`
  ADD PRIMARY KEY (`id_nfc`);

--
-- Indices de la tabla `tab_persona`
--
ALTER TABLE `tab_persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `rela_direccion` (`rela_direccion`);

--
-- Indices de la tabla `tab_preceptor`
--
ALTER TABLE `tab_preceptor`
  ADD PRIMARY KEY (`id_preceptor`),
  ADD KEY `rela_persona` (`rela_persona`);

--
-- Indices de la tabla `tab_profesor`
--
ALTER TABLE `tab_profesor`
  ADD PRIMARY KEY (`id_profesor`),
  ADD KEY `rela_persona` (`rela_persona`);

--
-- Indices de la tabla `tab_profe_materia`
--
ALTER TABLE `tab_profe_materia`
  ADD PRIMARY KEY (`id_profe_materia`),
  ADD KEY `rela_materia` (`rela_materia`,`rela_profe`),
  ADD KEY `rela_profe` (`rela_profe`);

--
-- Indices de la tabla `tab_tutor`
--
ALTER TABLE `tab_tutor`
  ADD PRIMARY KEY (`id_tutor`),
  ADD KEY `rela_persona` (`rela_persona`);

--
-- Indices de la tabla `tab_usuario`
--
ALTER TABLE `tab_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tab_alumno`
--
ALTER TABLE `tab_alumno`
  MODIFY `id_alumno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tab_asistencia`
--
ALTER TABLE `tab_asistencia`
  MODIFY `id_asistencia` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_contacto`
--
ALTER TABLE `tab_contacto`
  MODIFY `id_contacto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tab_curso`
--
ALTER TABLE `tab_curso`
  MODIFY `id_curso` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tab_curso_profe`
--
ALTER TABLE `tab_curso_profe`
  MODIFY `id_curso_profe` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_direccion`
--
ALTER TABLE `tab_direccion`
  MODIFY `id_direccion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT de la tabla `tab_nfc_temp`
--
ALTER TABLE `tab_nfc_temp`
  MODIFY `id_nfc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tab_persona`
--
ALTER TABLE `tab_persona`
  MODIFY `id_persona` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tab_preceptor`
--
ALTER TABLE `tab_preceptor`
  MODIFY `id_preceptor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id_tutor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tab_usuario`
--
ALTER TABLE `tab_usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tab_alumno`
--
ALTER TABLE `tab_alumno`
  ADD CONSTRAINT `tab_alumno_ibfk_1` FOREIGN KEY (`rela_persona`) REFERENCES `tab_persona` (`id_persona`),
  ADD CONSTRAINT `tab_alumno_ibfk_2` FOREIGN KEY (`rela_tutor`) REFERENCES `tab_tutor` (`id_tutor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tab_alumno_ibfk_3` FOREIGN KEY (`rela_curso`) REFERENCES `tab_curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tab_asistencia`
--
ALTER TABLE `tab_asistencia`
  ADD CONSTRAINT `tab_asistencia_ibfk_1` FOREIGN KEY (`rela_alumno`) REFERENCES `tab_alumno` (`id_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tab_asistencia_ibfk_2` FOREIGN KEY (`rela_materia`) REFERENCES `tab_materia` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tab_asistencia_ibfk_3` FOREIGN KEY (`rela_curso`) REFERENCES `tab_curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tab_asistencia_ibfk_4` FOREIGN KEY (`rela_profesor`) REFERENCES `tab_profesor` (`id_profesor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tab_contacto`
--
ALTER TABLE `tab_contacto`
  ADD CONSTRAINT `tab_contacto_ibfk_1` FOREIGN KEY (`rela_persona`) REFERENCES `tab_persona` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tab_curso`
--
ALTER TABLE `tab_curso`
  ADD CONSTRAINT `tab_curso_ibfk_1` FOREIGN KEY (`rela_preceptor`) REFERENCES `tab_preceptor` (`id_preceptor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tab_curso_profe`
--
ALTER TABLE `tab_curso_profe`
  ADD CONSTRAINT `tab_curso_profe_ibfk_1` FOREIGN KEY (`rela_curso`) REFERENCES `tab_curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tab_curso_profe_ibfk_2` FOREIGN KEY (`rela_profe`) REFERENCES `tab_preceptor` (`id_preceptor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tab_materia_curso`
--
ALTER TABLE `tab_materia_curso`
  ADD CONSTRAINT `tab_materia_curso_ibfk_1` FOREIGN KEY (`rela_curso`) REFERENCES `tab_curso` (`id_curso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tab_materia_curso_ibfk_2` FOREIGN KEY (`rela_materia`) REFERENCES `tab_materia` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tab_persona`
--
ALTER TABLE `tab_persona`
  ADD CONSTRAINT `tab_persona_ibfk_1` FOREIGN KEY (`rela_direccion`) REFERENCES `tab_direccion` (`id_direccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tab_preceptor`
--
ALTER TABLE `tab_preceptor`
  ADD CONSTRAINT `tab_preceptor_ibfk_1` FOREIGN KEY (`rela_persona`) REFERENCES `tab_persona` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tab_profesor`
--
ALTER TABLE `tab_profesor`
  ADD CONSTRAINT `tab_profesor_ibfk_1` FOREIGN KEY (`rela_persona`) REFERENCES `tab_persona` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tab_profe_materia`
--
ALTER TABLE `tab_profe_materia`
  ADD CONSTRAINT `tab_profe_materia_ibfk_1` FOREIGN KEY (`rela_materia`) REFERENCES `tab_materia` (`id_materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tab_profe_materia_ibfk_2` FOREIGN KEY (`rela_profe`) REFERENCES `tab_profesor` (`id_profesor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tab_tutor`
--
ALTER TABLE `tab_tutor`
  ADD CONSTRAINT `tab_tutor_ibfk_1` FOREIGN KEY (`rela_persona`) REFERENCES `tab_persona` (`id_persona`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
