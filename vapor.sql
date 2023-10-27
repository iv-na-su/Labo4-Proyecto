-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2023 a las 20:55:32
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vapor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrollador`
--

CREATE TABLE `desarrollador` (
  `ID` int(3) NOT NULL,
  `Desarrollador` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `desarrollador`
--

INSERT INTO `desarrollador` (`ID`, `Desarrollador`) VALUES
(1, 'Valve'),
(2, 'Starbeeze Entertainment'),
(3, 'Studio MDHR Entertainment Inc.'),
(4, 'Rockstar Games'),
(5, 'KRAFTON, Inc.'),
(6, 'ConcernedApe'),
(7, 'Maxis'),
(8, 'Mediatonic'),
(9, 'Scott Cawthon'),
(10, 'Capcom'),
(11, 'Frictional Games'),
(13, 'Nicalis, Inc.'),
(14, 'semiwork'),
(15, 'Motion Twin'),
(16, 'Pugstorm'),
(17, 'Klei Entertainment'),
(18, 'Re-Logic'),
(19, 'LucasArts'),
(21, 'Red Hook Studios'),
(22, 'Obsidian Entertainment');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editor`
--

CREATE TABLE `editor` (
  `id` int(8) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `editor`
--

INSERT INTO `editor` (`id`, `nombre`) VALUES
(1, 'Valve'),
(2, 'Starbeeze Entertainment'),
(3, 'Studio MDHR Entertainment Inc.'),
(4, 'Rockstar Games'),
(5, 'KRAFTON, Inc.'),
(6, 'ConcernedApe'),
(7, 'Electronic Arts'),
(8, 'Epic Games'),
(9, 'Scott Cawthon'),
(10, 'Capcom'),
(11, 'Frictional Games'),
(12, 'Nicalis, Inc.'),
(13, 'semiwork'),
(14, 'Motion Twin'),
(15, 'Fireshine Games'),
(16, 'Klei Entertainment'),
(17, 'Re-Logic'),
(18, 'LucasArts'),
(19, 'Red Hook Studios'),
(20, 'Ubisoft');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` int(3) NOT NULL,
  `genero` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `genero`) VALUES
(1, 'ACCIÓN'),
(2, 'CASUAL'),
(3, 'TERROR'),
(4, 'SHOOTER'),
(5, 'ROGUELIKE'),
(6, 'AVENTURA'),
(7, 'RPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `ID` int(3) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Lanzamiento` date NOT NULL,
  `codigo_genero` int(8) DEFAULT NULL,
  `codigo_desarrollador` int(8) DEFAULT NULL,
  `codigo_editor` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`ID`, `Nombre`, `Lanzamiento`, `codigo_genero`, `codigo_desarrollador`, `codigo_editor`) VALUES
(1, 'COUNTER STRIKE 1.6', '2000-11-01', 4, 1, 1),
(2, 'PAYDAY 2', '2013-08-13', 4, 2, 2),
(3, 'CUPHEAD', '2017-09-29', 1, 3, 3),
(4, 'GRAND THEFT AUTO: SAN ANDREAS', '2005-06-06', 1, 4, 4),
(5, 'PUBG: BATTLEGROUNDS', '2017-12-21', 1, 5, 5),
(6, 'STARDEW VALLEY', '2016-02-26', 2, 6, 6),
(7, 'THE SIMS 4', '2014-09-02', 2, 7, 7),
(8, 'FALL GUYS', '2020-08-03', 2, 8, 8),
(9, 'FIVE NIGHTS AT FREDDY\'S', '2014-08-18', 3, 9, 9),
(10, 'RESIDENT EVIL 4 (2005)', '2005-03-18', 3, 10, 10),
(11, 'SOMA', '2015-09-22', 3, 11, 11),
(12, 'TEAM FORTRESS 2', '2007-10-10', 4, 1, 1),
(13, 'THE BINDING OF ISAAC: REBIRTH', '2014-11-04', 5, 13, 12),
(14, 'VOIDIGO', '2023-06-08', 5, 14, 13),
(15, 'DEAD CELLS', '2018-08-06', 5, 15, 14),
(16, 'CORE KEEPER', '2022-03-08', 6, 16, 15),
(17, 'DON\'T STARVE', '2013-04-23', 6, 17, 16),
(18, 'TERRARIA', '2011-05-16', 6, 18, 17),
(19, 'STAR WARS: THE FORCE UNLEASHED', '2008-09-16', 6, 19, 18),
(20, 'DOTA 2', '2013-07-09', 7, 1, 1),
(21, 'DARKEST DUNGEON', '2016-01-19', 7, 21, 19),
(22, 'SOUTH PARK: THE STICK OF TRUTH', '2014-03-04', 7, 22, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `clave` varchar(6) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `nivel` int(1) NOT NULL,
  `usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `desarrollador`
--
ALTER TABLE `desarrollador`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `desarrollador`
--
ALTER TABLE `desarrollador`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `editor`
--
ALTER TABLE `editor`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
