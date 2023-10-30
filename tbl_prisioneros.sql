-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2023 a las 21:05:10
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tbl_prisioneros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_prisioneros`
--

CREATE TABLE `tbl_prisioneros` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Sexo` enum('Mascullino','Femenino') NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Estado` enum('Chihuahua','Chiapas','Baja California','AguasCalientes','Durango','Guadalajara') NOT NULL,
  `MotEnc` varchar(200) NOT NULL,
  `Fn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_prisioneros`
--

INSERT INTO `tbl_prisioneros` (`id`, `Nombre`, `Apellido`, `Sexo`, `Direccion`, `Estado`, `MotEnc`, `Fn`) VALUES
(12, 'Dieoo', 'Avitia', '', 'xaxaax', 'Baja California', 'ase', '2023-10-19'),
(13, 'sad', 'asd', '', 'sfsfsf', 'Chihuahua', 'sfsf', '2023-10-03'),
(14, 'jgjgjg', 'gjgjgjg', 'Femenino', 'jgjgjgjgjgg', 'Chihuahua', 'ghjgjg', '2023-10-05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_prisioneros`
--
ALTER TABLE `tbl_prisioneros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `NIM_unique` (`Apellido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_prisioneros`
--
ALTER TABLE `tbl_prisioneros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
