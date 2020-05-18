-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2020 a las 23:31:04
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `programacion`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `avance` (OUT `dato` DOUBLE, IN `id` INT)  BEGIN
declare total,tareas int DEFAULT 0;
declare res double DEFAULT 0;
set total=(select count(Id_tarea) from tareas);
set tareas=(SELECT COUNT(Id_tareas) from avances WHERE Id_alumno=id);
set res=(tareas*100)/total;
set dato=res;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idAlumno` int(11) NOT NULL,
  `Carrera` varchar(45) DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Nombre_A` varchar(45) DEFAULT NULL,
  `Sexo_A` char(1) DEFAULT NULL,
  `Telefono_A` varchar(45) DEFAULT NULL,
  `Correo_A` varchar(45) DEFAULT NULL,
  `Id_Docente` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idAlumno`, `Carrera`, `Edad`, `Nombre_A`, `Sexo_A`, `Telefono_A`, `Correo_A`, `Id_Docente`, `Id_usuario`) VALUES
(6, 'no se', 19, 'yuliana cherline', 'o', '2346574555', 'trufis@gmail.com', 8, 2),
(7, 'sdfgsdg', 21, 'dv dfvs', 'f', 'dfsdfsdf', 'lawea@gmail.com', 8, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avances`
--

CREATE TABLE `avances` (
  `Id_Tareas` int(11) NOT NULL,
  `Tipo_tarea` int(11) NOT NULL,
  `Hora_creacion` datetime NOT NULL,
  `Hora_entrega` int(11) NOT NULL,
  `Calificacion` double NOT NULL,
  `Ruta_archivo` varchar(50) NOT NULL,
  `Nombre_archivo` varchar(50) NOT NULL,
  `Id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `avances`
--

INSERT INTO `avances` (`Id_Tareas`, `Tipo_tarea`, `Hora_creacion`, `Hora_entrega`, `Calificacion`, `Ruta_archivo`, `Nombre_archivo`, `Id_alumno`) VALUES
(1, 1, '2020-05-13 00:06:05', 5345, 95.2, 'archivo/', 'algo.pdf', 6),
(2, 2, '2020-05-27 04:08:47', 45345, 89.3, 'archivo/', 'algo2.pdf', 6),
(3, 3, '2020-05-17 11:41:08', 456546, 81.3, 'archivo/', 'algo_2.pdf', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delegaciones`
--

CREATE TABLE `delegaciones` (
  `IdDelegacion` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `delegaciones`
--

INSERT INTO `delegaciones` (`IdDelegacion`, `Nombre`) VALUES
(1, 'Álvaro Obregón'),
(2, 'Benito Juárez'),
(3, 'Cuahutémoc'),
(4, 'Gustavo A. Madero'),
(5, 'Iztapalapa'),
(6, 'Milpa Alta'),
(7, 'Tláhuac'),
(8, 'Tlalnepantla'),
(9, 'Tlalpan'),


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `ID_docente` int(11) NOT NULL,
  `Cargo` varchar(45) DEFAULT NULL,
  `Nombre_D` varchar(45) DEFAULT NULL,
  `Sexo_D` varchar(45) DEFAULT NULL,
  `Dependencia` varchar(45) DEFAULT NULL,
  `Telefono_D` varchar(45) DEFAULT NULL,
  `Correo_D` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`ID_docente`, `Cargo`, `Nombre_D`, `Sexo_D`, `Dependencia`, `Telefono_D`, `Correo_D`) VALUES
(8, 'Docente', 'Adrian', 'M', 'ITT2', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuelas`
--

CREATE TABLE `escuelas` (
  `IdEscuela` int(11) NOT NULL,
  `Nombre` varchar(75) NOT NULL,
  `IdDelegaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `escuelas`
--

INSERT INTO `escuelas` (`IdEscuela`, `Nombre`, `IdDelegaciones`) VALUES
(1, 'Instituto Tecnológico Nacional', 2),
(2, 'Instituto Tecnológico Álvaro Obregón', 1),
(3, 'Instituto Tecnológico Gustavo A. Madero', 4),
(4, 'Instituto Tecnológico Gustavo A. Madero II', 4),
(5, 'Instituto Tecnológico Iztapalapa', 5),
(6, 'Instituto Tecnológico Iztapalapa II', 5),
(7, 'Instituto Tecnológico Iztapalapa III', 5),
(8, 'Instituto Tecnológico Milpa Alta', 6),
(9, 'Instituto Tecnológico Milpa Alta II', 6),
(10, 'Instituto Tecnológico Milpa Alta III', 6),
(11, 'Instituto Tecnológico Tláhuac', 7),
(12, 'Instituto Tecnológico Tláhuac II', 7),
(13, 'Instituto Tecnológico Tláhuac III', 7),
(14, 'Instituto Tecnológico Tlalpan', 9),
(15, 'Instituto Tecnológico Tlalnepantla', 8),

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `Id_tarea` int(11) NOT NULL,
  `Tipo_tarea` varchar(50) NOT NULL,
  `Tiempo_entrega` int(11) NOT NULL,
  `Rubrica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`Id_tarea`, `Tipo_tarea`, `Tiempo_entrega`, `Rubrica`) VALUES
(1, 'lo que sea', 30, 1),
(2, 'lo que sea x 2', 60, 2),
(3, 'lo que sea x3', 90, 3),
(4, 'lo que sea x4', 120, 4);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `tareas_usuarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `tareas_usuarios` (
`Tipo_tarea` varchar(50)
,`Nombre_archivo` varchar(50)
,`Id_alumno` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `Tipo` varchar(3) DEFAULT NULL,
  `Usuario` varchar(45) DEFAULT NULL,
  `Contraseña` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `Tipo`, `Usuario`, `Contraseña`) VALUES
(1, 'Sup', 'SuperUS', 'Administrador'),
(2, 'dos', 'Hazael', 'Programacion1'),
(3, 'dos', 'Roberto', 'Programacion2');

-- --------------------------------------------------------

--
-- Estructura para la vista `tareas_usuarios`
--
DROP TABLE IF EXISTS `tareas_usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tareas_usuarios`  AS  select `a`.`Tipo_tarea` AS `Tipo_tarea`,`b`.`Nombre_archivo` AS `Nombre_archivo`,`b`.`Id_alumno` AS `Id_alumno` from (`tareas` `a` left join `avances` `b` on(`a`.`Id_tarea` = `b`.`Tipo_tarea`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idAlumno`),
  ADD KEY `Id_Docente` (`Id_Docente`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- Indices de la tabla `avances`
--
ALTER TABLE `avances`
  ADD PRIMARY KEY (`Id_Tareas`),
  ADD KEY `Id_alumno` (`Id_alumno`),
  ADD KEY `Tipo_tarea` (`Tipo_tarea`);

--
-- Indices de la tabla `delegaciones`
--
ALTER TABLE `delegaciones`
  ADD PRIMARY KEY (`IdDelegacion`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`ID_docente`);

--
-- Indices de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  ADD PRIMARY KEY (`IdEscuela`),
  ADD KEY `IdDelegaciones` (`IdDelegaciones`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`Id_tarea`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `avances`
--
ALTER TABLE `avances`
  MODIFY `Id_Tareas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `ID_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `Id_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`Id_Docente`) REFERENCES `docente` (`ID_docente`),
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`Id_usuario`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION;

--
-- Filtros para la tabla `avances`
--
ALTER TABLE `avances`
  ADD CONSTRAINT `avances_ibfk_1` FOREIGN KEY (`Id_alumno`) REFERENCES `alumno` (`idAlumno`) ON DELETE NO ACTION,
  ADD CONSTRAINT `avances_ibfk_2` FOREIGN KEY (`Tipo_tarea`) REFERENCES `tareas` (`Id_tarea`) ON DELETE NO ACTION;

--
-- Filtros para la tabla `escuelas`
--
ALTER TABLE `escuelas`
  ADD CONSTRAINT `escuelas_ibfk_1` FOREIGN KEY (`IdDelegaciones`) REFERENCES `delegaciones` (`IdDelegacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
