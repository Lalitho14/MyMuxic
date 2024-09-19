-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2023 a las 07:38:39
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
-- Base de datos: `mymuxic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amigos`
--

CREATE TABLE `amigos` (
  `usr` varchar(25) NOT NULL,
  `amigo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `id` int(4) NOT NULL,
  `usr` varchar(25) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `url` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id`, `usr`, `nombre`, `url`) VALUES
(3, 'Marselo', 'Born Again', 'upload/Born Again.mp3'),
(5, 'Alex_80', 'At First Sight', 'upload/At First Sight - FiftySounds.mp3'),
(6, 'vmx_xxx51', 'Road Trip', 'upload/Road Trip.mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE `destacados` (
  `usr` varchar(25) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `url` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`usr`, `nombre`, `url`) VALUES
('Marselo', 'Born Again', 'upload/Born Again.mp3'),
('Alex_80', 'At First Sight', 'upload/At First Sight - FiftySounds.mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(45) NOT NULL,
  `usr` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `usr`, `email`, `password`) VALUES
('admin', 'admin', 'admin@mymuxic.com', 'root'),
('Alex', 'Alex_80', 'alex@mymuxic.com', '222222222'),
('Marsel', 'Marselo', 'marselo@gmail.com', '111111111'),
('Jesus E', 'vmx_xxx51', 'vmx_xx@gmail.com', '333333333');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amigos`
--
ALTER TABLE `amigos`
  ADD KEY `usr` (`usr`) USING BTREE,
  ADD KEY `amigo` (`amigo`) USING BTREE;

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usr` (`usr`) USING BTREE;

--
-- Indices de la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD KEY `usr` (`usr`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `amigos`
--
ALTER TABLE `amigos`
  ADD CONSTRAINT `amigos_ibfk_1` FOREIGN KEY (`usr`) REFERENCES `usuarios` (`usr`) ON DELETE CASCADE,
  ADD CONSTRAINT `amigos_ibfk_2` FOREIGN KEY (`amigo`) REFERENCES `usuarios` (`usr`) ON DELETE CASCADE;

--
-- Filtros para la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD CONSTRAINT `contenido_ibfk_1` FOREIGN KEY (`usr`) REFERENCES `usuarios` (`usr`) ON DELETE CASCADE;

--
-- Filtros para la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD CONSTRAINT `destacados_ibfk_1` FOREIGN KEY (`usr`) REFERENCES `usuarios` (`usr`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
