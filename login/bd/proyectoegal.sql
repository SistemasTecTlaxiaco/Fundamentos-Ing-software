-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2021 a las 22:13:51
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
-- Base de datos: `proyectoegal`
--
CREATE DATABASE IF NOT EXISTS `proyectoegal` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `proyectoegal`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientet`
--

DROP TABLE IF EXISTS `clientet`;
CREATE TABLE `clientet` (
  `id_cliente` int(11) NOT NULL,
  `nombrec` varchar(70) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `Gmail` varchar(30) NOT NULL,
  `direccionc` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientet`
--

INSERT INTO `clientet` (`id_cliente`, `nombrec`, `telefono`, `Gmail`, `direccionc`) VALUES
(1, 'Aarón Martínez López', '9531254689', 'Aaron@gmail.com', 1),
(2, 'Sofia Santiago Sanjuan', '9512356847', 'Sofia@hotmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_servicio`
--

DROP TABLE IF EXISTS `detalle_servicio`;
CREATE TABLE `detalle_servicio` (
  `id_detalle` int(11) NOT NULL,
  `nombre_serv` varchar(40) NOT NULL,
  `descripcion_ser` varchar(100) NOT NULL,
  `experiencia` varchar(30) NOT NULL,
  `pago` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_servicio`
--

INSERT INTO `detalle_servicio` (`id_detalle`, `nombre_serv`, `descripcion_ser`, `experiencia`, `pago`) VALUES
(1, 'Plomeria', 'Llevar a cabo el diagnóstico, instalación y reparación de tuberías utilizadas para la distribución y', '4 años', 1),
(2, 'Personal de limpieza', 'Mantenimiento de la Limpieza de sus instalaciones y zonas comunes: Limpieza de suelos (barrer, frega', '6 años', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion_cliente`
--

DROP TABLE IF EXISTS `direccion_cliente`;
CREATE TABLE `direccion_cliente` (
  `id_direccion` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numeroC` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `direccion_cliente`
--

INSERT INTO `direccion_cliente` (`id_direccion`, `estado`, `colonia`, `calle`, `numeroC`) VALUES
(1, 'Oaxaca', 'Reforma', 'Esmeralda', 10),
(2, 'Oaxaca', 'San jacinto', 'Independencia', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egal`
--

DROP TABLE IF EXISTS `egal`;
CREATE TABLE `egal` (
  `id_egal` int(20) NOT NULL,
  `egal_administrador` int(20) NOT NULL,
  `egal_cliente` int(20) NOT NULL,
  `egal_pservidor` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

DROP TABLE IF EXISTS `forma_pago`;
CREATE TABLE `forma_pago` (
  `id_pago` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `num_trasferencia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `forma_pago`
--

INSERT INTO `forma_pago` (`id_pago`, `total`, `num_trasferencia`) VALUES
(1, 200, 2.1231659362558506e17),
(2, 400, 2.7231659333558506e17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestador_serv`
--

DROP TABLE IF EXISTS `prestador_serv`;
CREATE TABLE `prestador_serv` (
  `id_prestador` int(11) NOT NULL,
  `nombreCompleto` varchar(70) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `direccion_ser` varchar(70) NOT NULL,
  `nombre_ser` varchar(80) NOT NULL,
  `detalles_ser` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestador_serv`
--

INSERT INTO `prestador_serv` (`id_prestador`, `nombreCompleto`, `telefono`, `gmail`, `direccion_ser`, `nombre_ser`, `detalles_ser`) VALUES
(1, 'Juana Cruz Paz', '9536247848', 'Juana@gmai.com', 'Oaxaca, centro, 5 de mayo ', 'Personal de limpieza', 2),
(2, 'Felipe Santiago Aguilar', '9512485698', 'Felipe@gmail.com', 'Oaxaca, centro, independencia', 'Plomeria', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usurio` int(11) NOT NULL,
  `nombreCompleto` varchar(60) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `contrasena_u` varchar(30) NOT NULL,
  `tipo_usuario` int(20) NOT NULL,
  `egal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usurio`, `nombreCompleto`, `Email`, `contrasena_u`, `tipo_usuario`, `egal`) VALUES
(1, 'Aaron Martínez López', 'Aaron@gmail.com', 'aaron123', 2, 0),
(2, 'Juana Cruz Paz', 'juana@gmail.com', 'juana123', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_tipo`
--

DROP TABLE IF EXISTS `usuario_tipo`;
CREATE TABLE `usuario_tipo` (
  `id_tipousuario` int(11) NOT NULL,
  `tipo_usuario1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_tipo`
--

INSERT INTO `usuario_tipo` (`id_tipousuario`, `tipo_usuario1`) VALUES
(1, 'cliente'),
(2, 'Prestador de servicio'),
(3, 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientet`
--
ALTER TABLE `clientet`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `direccionc` (`direccionc`);

--
-- Indices de la tabla `detalle_servicio`
--
ALTER TABLE `detalle_servicio`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `pago` (`pago`);

--
-- Indices de la tabla `direccion_cliente`
--
ALTER TABLE `direccion_cliente`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indices de la tabla `egal`
--
ALTER TABLE `egal`
  ADD PRIMARY KEY (`id_egal`),
  ADD UNIQUE KEY `egal_administrador` (`egal_administrador`,`egal_cliente`,`egal_pservidor`),
  ADD KEY `egal_cliente` (`egal_cliente`),
  ADD KEY `egal_pservidor` (`egal_pservidor`);

--
-- Indices de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `prestador_serv`
--
ALTER TABLE `prestador_serv`
  ADD PRIMARY KEY (`id_prestador`),
  ADD KEY `detalles_ser` (`detalles_ser`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usurio`),
  ADD KEY `tipo_usuario` (`tipo_usuario`),
  ADD KEY `egal` (`egal`);

--
-- Indices de la tabla `usuario_tipo`
--
ALTER TABLE `usuario_tipo`
  ADD PRIMARY KEY (`id_tipousuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientet`
--
ALTER TABLE `clientet`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_servicio`
--
ALTER TABLE `detalle_servicio`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `direccion_cliente`
--
ALTER TABLE `direccion_cliente`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `prestador_serv`
--
ALTER TABLE `prestador_serv`
  MODIFY `id_prestador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usurio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientet`
--
ALTER TABLE `clientet`
  ADD CONSTRAINT `clientet_ibfk_1` FOREIGN KEY (`direccionc`) REFERENCES `direccion_cliente` (`id_direccion`);

--
-- Filtros para la tabla `detalle_servicio`
--
ALTER TABLE `detalle_servicio`
  ADD CONSTRAINT `detalle_servicio_ibfk_1` FOREIGN KEY (`pago`) REFERENCES `forma_pago` (`id_pago`);

--
-- Filtros para la tabla `egal`
--
ALTER TABLE `egal`
  ADD CONSTRAINT `egal_ibfk_1` FOREIGN KEY (`egal_cliente`) REFERENCES `clientet` (`id_cliente`),
  ADD CONSTRAINT `egal_ibfk_2` FOREIGN KEY (`egal_pservidor`) REFERENCES `prestador_serv` (`id_prestador`),
  ADD CONSTRAINT `egal_ibfk_3` FOREIGN KEY (`id_egal`) REFERENCES `usuario` (`id_usurio`);

--
-- Filtros para la tabla `prestador_serv`
--
ALTER TABLE `prestador_serv`
  ADD CONSTRAINT `prestador_serv_ibfk_1` FOREIGN KEY (`detalles_ser`) REFERENCES `detalle_servicio` (`id_detalle`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`tipo_usuario`) REFERENCES `usuaio_tipo` (`id_tipousuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
