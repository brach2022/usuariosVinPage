-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2022 a las 01:47:06
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `observaciones` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `celular`, `edad`, `email`, `ciudad`, `observaciones`) VALUES
(1, 'ALEXANDER ARTURO', 'BRANCH PINZON', '3102255538', '33', 'cwin006@gmail.com', 'Bogota', 'ninguna'),
(2, 'carlos andres', 'divantoque', '3102255538', '42', 'carlos@gmail.com', 'bogota', 'muy fácil '),
(3, 'andrea', 'castellanos', '3102255634', '35', 'andrea@gmail.com', 'neiva', 'util y pratica'),
(4, 'rafa', 'hernandez', '3145268530', '25', 'hernandez@gmail.com', 'huila', 'facil'),
(5, 'David ', 'Bernal ', '3145238564', '31', 'david.bernal@gmail.com', 'bogota', 'informativa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
