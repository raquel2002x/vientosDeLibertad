-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2022 a las 10:27:33
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vientosdelibertadbbdd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `client` varchar(255) NOT NULL,
  `issue` text NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `dateTime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `appointments`
--

INSERT INTO `appointments` (`id`, `client`, `issue`, `phone`, `email`, `dateTime`) VALUES
(7, 'Celia Millán', 'lectura del péndulo hebreo', 365468318, 'celia@bootcamp.fem', '2022-12-07'),
(8, 'Montse Matos', 'alineación de chacras', 2154687, 'montse@arrabal.fem', '2022-12-07'),
(9, 'Alesia', 'lectura del péndulo', 321684, 'alesia@bootcamp.fem', '2022-12-08'),
(10, 'Noa', 'espiritaulidad', 24563431, 'noa@coder.fem', '2022-12-08'),
(11, 'Florencia', 'consulta de cuencos tibetianos', 455545555, 'flor@bootcamp.fem', '2022-12-08'),
(12, 'Bea', 'alineación de chacras', 2147483647, 'bea@bootcamp.fem', '2022-12-09'),
(13, 'Natalia', 'consulta tarót', 215678, 'natalia@coder.fem', '2022-12-09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
