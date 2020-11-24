-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2020 a las 02:40:39
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--
CREATE DATABASE IF NOT EXISTS `restaurante` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `restaurante`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--
-- Creación: 04-11-2020 a las 02:53:30
--

DROP TABLE IF EXISTS `reservaciones`;
CREATE TABLE `reservaciones` (
  `idReservacion` int(11) NOT NULL,
  `personas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nombreCliente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `idRestaurante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `reservaciones`:
--   `idRestaurante`
--       `restaurantes` -> `idRestaurante`
--

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`idReservacion`, `personas`, `fecha`, `nombreCliente`, `correo`, `idRestaurante`) VALUES
(1, 5, '2020-11-11', 'Luis Andres Garcia Perdomo', 'luisoerizo@gmail.com', 1),
(3, 3, '2020-11-21', 'equis', 'bro@gmail.com', 1),
(18, 19, '2020-11-13', 'Barack Obama', 'obama@gmail.com', 1),
(25, 4, '2020-11-13', 'Victor Andaya', 'donaldtrump@hotmail.com', 1),
(28, 5, '2020-11-23', 'Vicente Fox Quesada', '122@hotmail.co', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes`
--
-- Creación: 03-11-2020 a las 07:11:28
--

DROP TABLE IF EXISTS `restaurantes`;
CREATE TABLE `restaurantes` (
  `idRestaurante` int(11) NOT NULL,
  `nombreRestaurante` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `zona` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `valoracion` int(11) NOT NULL,
  `rangoPrecio` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `tipoComida` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- RELACIONES PARA LA TABLA `restaurantes`:
--

--
-- Volcado de datos para la tabla `restaurantes`
--

INSERT INTO `restaurantes` (`idRestaurante`, `nombreRestaurante`, `ciudad`, `zona`, `valoracion`, `rangoPrecio`, `tipoComida`) VALUES
(1, 'El rincon del Bife', 'Cuernavaca', 'Vista Hermosa', 4, '$$$ - $$$$', 'Carnes'),
(2, 'Jardin Allende', 'Zacatepec', 'Centro', 5, '$ - $$', 'Botanas'),
(3, 'María Félix', 'Zacatepec', 'Plan de ayala', 3, '$ - $$', 'Corrida'),
(4, 'Lé Apétit', 'Tepoztlan', 'Centro', 5, '$$$ - $$$$', 'Ensaladas'),
(5, 'Vaca Argentina', 'Cuernavaca', 'Vista hermosa', 4, '$$$ - $$$$', 'Carnes'),
(6, 'Piérrot', 'Zacatepec', 'Plan de ayala', 4, '$$ - $$$', 'Corrida'),
(7, 'La espadería', 'Jojutla', 'Centro', 5, '$$$$ - $$$', 'Cortes finos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`idReservacion`),
  ADD KEY `idRestaurante` (`idRestaurante`);

--
-- Indices de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`idRestaurante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `idReservacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `idRestaurante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD CONSTRAINT `reservaciones_ibfk_1` FOREIGN KEY (`idRestaurante`) REFERENCES `restaurantes` (`idRestaurante`);


--
-- Metadatos
--
USE `phpmyadmin`;

--
-- Metadatos para la tabla reservaciones
--

--
-- Volcado de datos para la tabla `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'restaurante', 'reservaciones', '{\"CREATE_TIME\":\"2020-11-03 20:53:30\",\"col_order\":[0,3,1,2,4,5],\"col_visib\":[1,1,1,1,1,1]}', '2020-11-04 19:41:45');

--
-- Metadatos para la tabla restaurantes
--

--
-- Metadatos para la base de datos restaurante
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
