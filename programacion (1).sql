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
(1, 'Tláhuac'),
(2, 'Benito Juárez'),
(3, 'Cuajimalpa de Morelos'),
(4, 'Gustavo A. Madero'),
(5, 'Cuauhtémoc'),
(6, 'Álvaro Obregón'),
(7, 'Xochimilco'),
(8, 'Tlalpan'),
(9, 'Venustiano Carranza'),
(10, 'Azcapotzalco'),
(11, 'Iztapalapa'),
(12, 'Iztacalco'),
(13, 'Miguel Hidalgo'),
(14, 'La Magdalena Contreras'),
(15, 'Coyoacán'),
(16, 'Milpa Alta');

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
(1, 'Escuela Militar de Materiales de Guerra', 6),
(2, 'Instituto Tecnico de Formacion Policial', 6),
(3, 'Cetis Num. 52', 6),
(4, 'Ceb-4/2 Lic. Jesus Reyes Heroles', 6),
(5, 'Cecyt Num. 4, Lazaro Cardenas del Rio', 6),
(6, 'Cetis Num. 10', 6),
(7, 'Unam Cch Plantel Sur', 6),
(8, 'Telebachillerato la Reforma', 6),
(9, 'Gral. Lazaro Cardenas del Rio', 6),
(10, 'Cecyt Num. 6, Miguel Othon de Mendizabal', 10),
(11, 'Unam Cch Plantel Azcapotzalco', 10),
(12, 'Cecyt Num. 8, Narciso Bassols GarcÃ­a', 10),
(13, 'Colegio de Bachilleres 18 Tlilhuaca Azcapotzalco', 10),
(14, 'Colegio de Bachilleres 2 Cien Metros', 10),
(15, 'Colegio de Bachilleres 1 el Rosario', 10),
(16, 'Cetis Num. 33', 10),
(17, 'Cetis Num. 4', 10),
(18, 'Unam Cch Plantel Azcapotzalco', 10),
(19, 'Melchor Ocampo', 10),
(20, 'Cedex Manuel s Hidalgo', 10),
(21, 'Colegio de Bachilleres 20 del Valle', 2),
(22, 'Bachillerato Autodidacta o Experencia Laboral', 2),
(23, 'Preparatoria Magdalena Contreras 1', 2),
(24, 'Unam Plantel 8 Miguel e Schultz', 2),
(25, 'Direccion General del Bachillerato (Acuerdo 286)', 2),
(26, 'Cetis Num. 5', 2),
(27, 'Ricardo Flores Magon', 15),
(28, 'Colegio de Bachilleres 17 Huayamilpas Pedregal', 15),
(29, 'Unam Plantel 5 Jose Vasconcelos', 15),
(30, 'Colegio de Bachilleres 4 Culhuacan', 15),
(31, 'Cecyte Plantel Zona Rio', 15),
(32, 'Centro Emsad para Trabajadores NO. 2', 15),
(33, 'Centro de Educacion Artistica Diego Rivera', 15),
(34, 'Cedex Ejercito Nacional', 15),
(35, 'Unam Plantel 6 Antonio Caso', 15),
(36, 'Cetis Num. 2', 15),
(37, 'Escuela Nacional de Danza Contemporanea', 15),
(38, 'Escuela Nacional de Danza Clasica', 15),
(39, 'Cecyt Num. 13, Ricardo Flores Magon', 15),
(40, 'Cetis Num. 3', 5),
(41, 'Cetis Num. 3', 2),
(42, 'Cecyt Num. 12, Jose Maria Morelos y Pavon', 2),
(43, 'Cecyt Num. 5, Benito Juarez Garcia', 2),
(44, 'Cedex Dr. Leopoldo Salazar Viniegra', 2),
(45, 'Cedex Jorge Casahonda Castillo', 2),
(46, 'Cedex Javier Barros Sierra', 2),
(47, 'Cedart Luis Spota Saavedra', 2),
(48, 'Colegio de Bachilleres 8 Cuajimalpa', 3),
(49, 'Preparatoria Cuajimalpa 1', 3),
(50, 'Cetis Num. 29', 3),
(51, 'Cetis Num. 76', 12),
(52, 'Colegio de Bachilleres 3 Iztacalco', 12),
(53, 'Cedex Piloto Iztacalco', 12),
(54, 'Unam Plantel 2 Erasmo Castellanos Quinto', 12),
(55, 'Preparatoria Iztacalco 1', 12),
(56, 'Cetis Num. 42', 11),
(57, 'Preparatoria Iztapalapa 1', 11),
(58, 'Cetis Num. 57', 11),
(59, 'Cecyt Num. 7, Cuauhtemoc', 11),
(60, 'Unam Cch Plantel Oriente', 11),
(61, 'Colegio de Bachilleres 7 Iztapalapa', 11),
(62, 'Colegio de Bachilleres 6 Vicente Guerrero', 11),
(63, 'Cetis Num. 53', 11),
(64, 'Cetis Num. 153', 11),
(65, 'Cetis Num. 50', 11),
(66, 'Unam Plantel 9 Pedro de Alba', 4),
(67, 'Cetis Num. 30', 4),
(68, 'Cecyt Num. 1, Gonzalo Vazquez Vela', 4),
(69, 'Cetis Num. 166', 4),
(70, 'Cedex Nepal', 4),
(71, 'Colegio de Bachilleres 9 Aragon', 4),
(72, 'Cetis Num. 56', 4),
(73, 'Cetis Num. 54', 4),
(74, 'Cecyt Num. 10, Carlos Vallejo Marquez', 4),
(75, 'Cedex Nepal', 4),
(76, 'Centro de AtenciÃ³n para Estudiantes con Discapacidad Modalidad No Escolari', 4),
(77, 'Gustavo A. Madero 1', 4),
(78, 'Unam Cch Plantel Vallejo', 4),
(79, 'Unam Plantel 3 Justo Sierra', 4),
(80, 'Colegio de Bachilleres 11 Atzacoalco', 4),
(81, 'Preparatoria Gustavo A. Madero 2', 4),
(82, 'Cedex Emilio Bravo', 4),
(83, 'Cetis Num. 7', 4),
(84, 'Cetis Num. 55', 4),
(85, 'Centro 02 Chahuites', 14),
(86, 'Cecyte NÃ¸ 22 Ixtepec', 14),
(87, 'Plantel 09 Tapanatepec', 14),
(88, 'Plantel 07 Tuxtepec', 14),
(89, 'Plantel 11 Ejutla de Crespo', 14),
(90, 'Plantel 20 Niltepec', 14),
(91, 'Plantel 08 Huajuapan de Leon', 14),
(92, 'Plantel 06 Putla de Guerrero', 14),
(93, 'Centro 01 Cosolapa', 14),
(94, 'Colegio de Bachilleres 15 Contreras', 14),
(95, 'Unam Plantel 4 Vidal Castaneda y Najera', 13),
(96, 'Cetis Num. 8 \"Rafael Donde\"', 13),
(97, 'Cecyt Num. 2, Miguel Bernard Perales', 13),
(98, 'Centro de Estudios de Bachillerato Num. 1 Moises Saenz Garza', 13),
(99, 'Escuela Nacional de Danza Folklorica', 13),
(100, 'Cecyt Num. 3, Estanislao Ramirez Ruiz', 13),
(101, 'Carmen Serdan', 13),
(102, 'Cecyt Num. 11, Wilfrido Massieu Perez', 13),
(103, 'Cetis Num. 152', 13),
(104, 'Cecyt Num. 9, Juan de Dios Batiz Paredes', 13),
(105, 'Escuela Militar de Transmisiones', 13),
(106, 'Cecyt Num. 15, Diodoro Antunez Echegaray', 16),
(107, 'Preparatoria Milpa Alta 1', 16),
(108, 'Colegio de Bachilleres 14 Milpa Alta', 16),
(109, 'Cetis Num. 167', 16),
(110, 'Colegio de Bachilleres 16 Tlahuac', 1),
(111, 'Cetis Num. 1', 1),
(112, 'Gral. Francisco J. Mugica', 8),
(113, 'Cetis Num. 154', 8),
(114, 'Preparatoria Tlalpan 2', 8),
(115, 'Venustiano Carranza', 8),
(116, 'Unam Plantel 7 Ezequiel a Chavez', 8),
(117, 'Cecyt Num. 14, Luis Enrique Erro Soler', 8),
(118, 'Colegio de Bachilleres 10 Aeropuerto', 8),
(119, 'Cetis Num. 32', 8),
(120, 'Freddy alejandro pulido mateo', 8),
(121, 'Cetis Num. 51', 8),
(122, 'Cetis Num. 39', 7),
(123, 'Jose Maria Moralos y Pavon', 7),
(124, 'Cetis Num. 49', 7),
(125, 'Colegio de Bachilleres 13 Xochimilco Tepepan', 7),
(126, 'Unam Plantel 1 Gabino Barrera', 7);

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
