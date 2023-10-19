-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2023 a las 00:40:30
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
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `ID` int(3) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Lanzamiento` date NOT NULL,
  `Desarrollador` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`ID`, `Nombre`, `Lanzamiento`, `Desarrollador`) VALUES
(1, 'COUNTER STRIKE 1.6', '2000-11-01', 'Valve'),
(2, 'PAYDAY 2', '2013-08-13', 'Starbreeze Studio'),
(3, 'CUPHEAD', '2017-09-29', 'Studio MDHR Entertainment Inc.'),
(4, 'GRAND THEFT AUTO: SAN ANDREAS', '2005-06-06', 'Rockstar Games'),
(5, 'PUBG: BATTLEGROUNDS', '2017-12-21', 'KRAFTON, Inc.'),
(6, 'STARDEW VALLEY', '2016-02-26', 'ConcernedApe'),
(7, 'THE SIMS 4', '2014-09-02', 'Maxis'),
(8, 'FALL GUYS', '2020-08-03', 'Mediatonic'),
(9, 'FIVE NIGHTS AT FREDDY\'S', '2014-08-18', 'Scott Cawthon'),
(10, 'RESIDENT EVIL 4 (2005)', '2005-03-18', 'Capcom'),
(11, 'SOMA', '2015-09-22', 'Frictional Games'),
(12, 'TEAM FORTRESS 2', '2007-10-10', 'Valve'),
(13, 'THE BINDING OF ISAAC: REBIRTH', '2014-11-04', 'Edmund McMillen'),
(14, 'VOIDIGO', '2023-06-08', 'semiwork'),
(15, 'DEAD CELLS', '2018-08-06', 'Motion Twin'),
(16, 'CORE KEEPER', '2022-03-08', 'Pugstorm'),
(17, 'DON\'T STARVE', '2013-04-23', 'Klei Entertainment'),
(18, 'TERRARIA', '2011-05-16', 'Re-Logic'),
(19, 'STAR WARS: THE FORCE UNLEASHED', '2008-09-16', 'LucasArts'),
(20, 'DOTA 2', '2013-07-09', 'Valve'),
(21, 'DARKEST DUNGEON', '2016-01-19', 'Red Hook Studios'),
(22, 'SOUTH PARK: THE STICK OF TRUTH', '2014-03-04', 'Obsidian Entertainment');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
