-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2018 a las 18:11:30
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credito`
--

CREATE TABLE `credito` (
  `id_solicitud` int(255) NOT NULL,
  `monto` int(255) NOT NULL,
  `edad` int(255) NOT NULL,
  `tarjeta_de_credito` tinyint(1) NOT NULL,
  `plazo` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(255) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '0',
  `autorizacion` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `credito`
--

INSERT INTO `credito` (`id_solicitud`, `monto`, `edad`, `tarjeta_de_credito`, `plazo`, `fecha`, `id_usuario`, `estatus`, `autorizacion`) VALUES
(1, 5000, 50, 1, '0.07', '2018-07-19', 1, 1, 1),
(2, 6000, 50, 0, '0.07', '2018-07-19', 1, 0, 1),
(3, 6000, 18, 0, '0.07', '2018-07-19', 1, 1, 0),
(4, 60000, 22, 1, '0.07', '2018-07-19', 1, 1, 1),
(5, 60000, 22, 1, '0.12', '2018-07-19', 1, 1, 1),
(6, 5000, 33, 1, '0.05', '2018-07-20', 1, 1, 1),
(7, 6000, 23, 1, '0.12', '2018-07-20', 4, 1, 1),
(8, 5000, 19, 1, '0.05', '2018-07-20', 4, 1, 0),
(9, 60000, 16, 1, '0.07', '2018-07-20', 4, 1, 0),
(10, 4000, 22, 1, '0.05', '2018-07-20', 4, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `user_name`) VALUES
(1, 'enrique'),
(2, 'enriqu'),
(3, 'victor'),
(4, 'samantha');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `credito`
--
ALTER TABLE `credito`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `credito`
--
ALTER TABLE `credito`
  MODIFY `id_solicitud` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `credito`
--
ALTER TABLE `credito`
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
