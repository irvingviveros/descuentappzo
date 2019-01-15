-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2019 a las 20:27:00
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `descuentappzo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dia`
--

CREATE TABLE `dia` (
  `id_d` int(11) NOT NULL,
  `dia_d` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `dia`
--

INSERT INTO `dia` (`id_d`, `dia_d`) VALUES
(1, 'Lunes'),
(2, 'Martes'),
(3, 'Miércoles'),
(4, 'Jueves'),
(5, 'Viernes'),
(6, 'Sábado'),
(7, 'Domingo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id_i` int(11) NOT NULL,
  `nom_i` text COLLATE utf8_bin NOT NULL,
  `dir_i` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id_i`, `nom_i`, `dir_i`) VALUES
(1, '5c3d90840de162.52526708.jpg', 'images/uploads/restaurantes/5c3d90840de162.52526708.jpg'),
(2, '5c3d91d2863363.53342303.jpg', 'images/uploads/restaurantes/5c3d91d2863363.53342303.jpg'),
(3, '5c3d942e37ecc9.92496633.jpg', 'images/uploads/restaurantes/5c3d942e37ecc9.92496633.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocio`
--

CREATE TABLE `negocio` (
  `id_n` int(11) NOT NULL,
  `nombre_n` varchar(18) COLLATE utf8_bin NOT NULL,
  `tipo_n` varchar(11) COLLATE utf8_bin NOT NULL,
  `dir_n` text COLLATE utf8_bin NOT NULL,
  `face_n` text COLLATE utf8_bin NOT NULL,
  `id_p1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `negocio`
--

INSERT INTO `negocio` (`id_n`, `nombre_n`, `tipo_n`, `dir_n`, `face_n`, `id_p1`) VALUES
(1, 'Sushi Roll', 'restaurante', 'https://goo.gl/maps/WsFKskmgGzx', 'https://www.facebook.com/pages/Sushi-Roll/1068216479952481', 1),
(2, 'Sushi Roll', 'restaurante', 'https://goo.gl/maps/WsFKskmgGzx', 'https://www.facebook.com/pages/Sushi-Roll/1068216479952481', 2),
(3, 'Sushi Roll', 'restaurante', 'https://goo.gl/maps/WsFKskmgGzx', 'https://www.facebook.com/pages/Sushi-Roll/1068216479952481', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `id_p` int(11) NOT NULL,
  `titulo_p` varchar(45) COLLATE utf8_bin NOT NULL,
  `id_d1` int(11) NOT NULL,
  `id_i1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`id_p`, `titulo_p`, `id_d1`, `id_i1`) VALUES
(1, 'Todos los rollos 2x1 a partir de las 18:00', 1, 1),
(2, 'Todos los rollos 2x1 a partir de las 18:00', 2, 2),
(3, 'Todos los rollos 2x1 a partir de las 18:00', 3, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`id_d`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_i`);

--
-- Indices de la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD PRIMARY KEY (`id_n`),
  ADD KEY `fk_prom` (`id_p1`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `fk_dia` (`id_d1`),
  ADD KEY `id_i1` (`id_i1`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id_i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `negocio`
--
ALTER TABLE `negocio`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD CONSTRAINT `fk_prom` FOREIGN KEY (`id_p1`) REFERENCES `promocion` (`id_p`);

--
-- Filtros para la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD CONSTRAINT `fk_dia` FOREIGN KEY (`id_d1`) REFERENCES `dia` (`id_d`),
  ADD CONSTRAINT `promocion_ibfk_1` FOREIGN KEY (`id_i1`) REFERENCES `images` (`id_i`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
