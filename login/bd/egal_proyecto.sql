-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2021 a las 03:08:21
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `egal_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_trabajo`
--

CREATE TABLE `contacto_trabajo` (
  `id_contacto` int(11) NOT NULL,
  `numero_telefonico` varchar(10) NOT NULL,
  `gmail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(11) NOT NULL,
  `calle` varchar(70) NOT NULL,
  `asentamiento` varchar(70) NOT NULL,
  `ciudad` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas_trabajos`
--

CREATE TABLE `ofertas_trabajos` (
  `id_trabajos` int(11) NOT NULL,
  `trabajos` int(11) NOT NULL,
  `solicitar_trabajos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `numero_transferencia` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicar`
--

CREATE TABLE `publicar` (
  `id_publicar` int(11) NOT NULL,
  `nombre_trabajo` varchar(90) NOT NULL,
  `Descripcion` varchar(90) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `sueldo_aprox` double NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitar_trabajo`
--

CREATE TABLE `solicitar_trabajo` (
  `id_solicitar` int(11) NOT NULL,
  `contacto_trab` int(20) NOT NULL,
  `direccion` int(20) NOT NULL,
  `forma_pago` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombreCompleto` varchar(70) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `contrasena_u` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombreCompleto`, `Email`, `contrasena_u`) VALUES
(2, 'Graciela Hernandez Santiago', 'grace@gmail.com', '$2y$10$iE5WkAUlpGBLFo8MUuaP0utbDWNIJRF6E'),
(3, 'Samuel Hernandez Santiago', 'samuel@gmail.com', '$2y$10$KTvBvRG8sBYqgPnLxByoj.hTQE1ZXZTMz'),
(4, 'Graciela Hernandez Santiago', 'grace@gmail.com', 'grace123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto_trabajo`
--
ALTER TABLE `contacto_trabajo`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indices de la tabla `ofertas_trabajos`
--
ALTER TABLE `ofertas_trabajos`
  ADD PRIMARY KEY (`id_trabajos`),
  ADD KEY `solicitar_trabajos` (`solicitar_trabajos`),
  ADD KEY `trabajos` (`trabajos`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `publicar`
--
ALTER TABLE `publicar`
  ADD PRIMARY KEY (`id_publicar`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `solicitar_trabajo`
--
ALTER TABLE `solicitar_trabajo`
  ADD PRIMARY KEY (`id_solicitar`),
  ADD KEY `contacto_trab` (`contacto_trab`,`direccion`,`forma_pago`),
  ADD KEY `direccion` (`direccion`),
  ADD KEY `forma_pago` (`forma_pago`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto_trabajo`
--
ALTER TABLE `contacto_trabajo`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicar`
--
ALTER TABLE `publicar`
  MODIFY `id_publicar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `solicitar_trabajo`
--
ALTER TABLE `solicitar_trabajo`
  MODIFY `id_solicitar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ofertas_trabajos`
--
ALTER TABLE `ofertas_trabajos`
  ADD CONSTRAINT `ofertas_trabajos_ibfk_1` FOREIGN KEY (`solicitar_trabajos`) REFERENCES `solicitar_trabajo` (`id_solicitar`),
  ADD CONSTRAINT `ofertas_trabajos_ibfk_2` FOREIGN KEY (`trabajos`) REFERENCES `publicar` (`id_publicar`);

--
-- Filtros para la tabla `publicar`
--
ALTER TABLE `publicar`
  ADD CONSTRAINT `publicar_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `solicitar_trabajo`
--
ALTER TABLE `solicitar_trabajo`
  ADD CONSTRAINT `solicitar_trabajo_ibfk_1` FOREIGN KEY (`contacto_trab`) REFERENCES `contacto_trabajo` (`id_contacto`),
  ADD CONSTRAINT `solicitar_trabajo_ibfk_2` FOREIGN KEY (`direccion`) REFERENCES `direccion` (`id_direccion`),
  ADD CONSTRAINT `solicitar_trabajo_ibfk_3` FOREIGN KEY (`forma_pago`) REFERENCES `pago` (`id_pago`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
