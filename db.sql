-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3006
-- Tiempo de generación: 09-12-2017 a las 13:44:51
-- Versión del servidor: 5.7.20
-- Versión de PHP: 7.1.12-2+ubuntu16.04.1+deb.sury.org+2
SET SQL_MODE = “NO_AUTO_VALUE_ON_ZERO“;
SET time_zone = `+00:00`;
/* !40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/* !40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/* !40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/* !40101 SET NAMES utf8mb4 */;
--
-- Base de datos: `tecgurus`
--
-- ——————————————————–
--
-- Estructura de tabla para la tabla `usuarios`
--
DROP SCHEMA IF EXISTS `php_test`;
CREATE SCHEMA IF NOT EXISTS `php_test` DEFAULT CHARACTER SET utf8 collate utf8_spanish2_ci;
USE `php_test`;

CREATE TABLE `usuarios` (
`id` int(99) NOT NULL,
`nombre` varchar(300) NOT NULL,
`correo` varchar(300) NOT NULL,
`password` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Volcado de datos para la tabla `usuarios`
--
INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `password`) VALUES
('1', 'adrian', 'adrian@hotmail.com', 'fe01ce2a7fbac8fafaed7c982a04e229');
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
MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/* !40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/* !40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/* !40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;