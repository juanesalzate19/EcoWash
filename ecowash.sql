-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2022 a las 18:52:54
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecowash`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `placa` varchar(30) COLLATE utf32_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `costo` float NOT NULL,
  `title` varchar(15) COLLATE utf32_spanish_ci NOT NULL,
  `start` datetime NOT NULL,
  `c_empleado` int(11) NOT NULL,
  `documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `placa`, `direccion`, `costo`, `title`, `start`, `c_empleado`, `documento`) VALUES
(1, 'iaz632', 'calle negra', 1000, 'Espera', '2022-11-23 10:00:00', 701538, 1025883280),
(2, 'iaz632', 'calle negra', 1000, 'Espera', '2022-11-10 09:00:00', 701538, 1025883280),
(3, 'iaz632', 'calle negra', 1000, 'Espera', '2022-11-10 11:00:00', 701538, 1025883280),
(4, 'iaz632', 'calle negra', 1000, 'Espera', '2022-11-10 08:00:00', 701538, 1025883280),
(5, 'iaz632', 'calle negra', 1000, 'Espera', '2022-11-10 10:00:00', 701538, 1025883280),
(6, 'iaz632', 'calle negra', 1000, 'Espera', '2022-11-21 10:00:00', 701538, 1025883280),
(7, 'iaz632', 'calle negra', 1000, 'Espera', '2022-11-13 11:00:00', 701538, 1025883280),
(8, 'iaz632', 'calle negra', 1000, 'Espera', '2022-11-18 13:00:00', 701538, 1025883280),
(9, 'iaz632', 'calle negra', 1000, 'Espera', '2022-11-26 15:00:00', 701538, 1025883280),
(10, 'iaz632', 'calle larga', 1000, 'Espera', '2022-11-12 08:00:00', 701538, 1040737613);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `documento` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf32_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `contrasena` varchar(40) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`documento`, `usuario`, `nombre`, `correo`, `telefono`, `direccion`, `contrasena`) VALUES
(1025883280, 'juanes1234', 'juanes alverto ', 'juan@gmail.com', 2147483647, 'calle negra', '123456'),
(1040737613, 'andreslopez', 'Andres Felipe Lopez Lopera', 'felipelopezlopera@gmail.com', 2147483647, 'calle larga', '122334');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `codigo` int(11) NOT NULL,
  `documento` int(11) NOT NULL,
  `nombre_e` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`codigo`, `documento`, `nombre_e`, `correo`, `telefono`, `direccion`, `contrasena`) VALUES
(701538, 477585754, 'pepe carlos alverto', 'pepito@gmail.com', 2147483647, 'calle blanca', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documento` (`documento`),
  ADD KEY `D_empleado` (`c_empleado`),
  ADD KEY `c_empleado` (`c_empleado`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `cliente` (`documento`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`c_empleado`) REFERENCES `empleado` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
