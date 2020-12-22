-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2020 a las 15:38:28
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webmasterutn`
--
CREATE DATABASE IF NOT EXISTS `webmasterutn` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `webmasterutn`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosform`
--

CREATE TABLE `datosform` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosform`
--

INSERT INTO `datosform` (`id`, `nombre`, `email`, `localidad`, `comentario`) VALUES
(1, 'asdasd', 'juanma_5_11@hotmail.com', '234234', 'aaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `Articulo` varchar(100) NOT NULL,
  `Precio` float NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `Articulo`, `Precio`, `Estado`, `Fecha`, `id_cliente`) VALUES
(1, 'Classic Burger', 378, 'Proceso', '2020-12-04', 1),
(3, 'Albahaca Burger', 350, 'Pendiente', '2020-12-05', 1),
(4, 'Bacon Burger', 350, 'Despachado', '2020-12-07', 11),
(5, 'Bacon Burger', 350, 'Despachado', '2020-12-07', 12),
(6, 'Vegan Burger', 300, 'Despachado', '2020-12-07', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telefono` int(15) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `Contrasenia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `nombre`, `apellido`, `email`, `telefono`, `usuario`, `Contrasenia`) VALUES
(1, 'juanma', 'lescano', 'juanma_5_11@hotmail.com', 2147483647, 'MELIODAS', 'JML'),
(11, 'Juan Manuel ', 'Lescano', 'juanma_5_11@hotmail.com', 2147483647, 'jm', 'jm'),
(12, 'Lucas', 'lucas', 'asd@asd.com', 123, 'lucas', 'lucas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosform`
--
ALTER TABLE `datosform`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_pedido` (`id_cliente`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosform`
--
ALTER TABLE `datosform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `cliente_pedido` FOREIGN KEY (`id_cliente`) REFERENCES `registros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
