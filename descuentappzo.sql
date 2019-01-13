-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2019 a las 00:35:52
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
-- Estructura de tabla para la tabla `negocio`
--

CREATE TABLE `negocio` (
  `id_n` int(11) NOT NULL,
  `nombre_n` varchar(18) COLLATE utf8_bin NOT NULL,
  `tipo_n` varchar(11) COLLATE utf8_bin NOT NULL,
  `dir_n` varchar(2083) COLLATE utf8_bin NOT NULL,
  `face_n` varchar(2083) COLLATE utf8_bin NOT NULL,
  `id_p1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `negocio`
--

INSERT INTO `negocio` (`id_n`, `nombre_n`, `tipo_n`, `dir_n`, `face_n`, `id_p1`) VALUES
(7, 'El negocio', 'bar', 'Manuel Avila Camacho', 'DirecciÃ³n 2', 5),
(8, 'La Micheleria ', 'bar', '142 Calle Manuel Ãvila Camacho', 'Enlace ', 6),
(9, 'El mar', 'restaurante', 'DirecciÃ³n 1', 'DirecciÃ³n 2', 7),
(10, 'La chela', 'bar', '142 Calle Manuel Ãvila Camacho', 'Ahhh ', 8),
(11, 'Estribo', 'bar', 'http://google.com', 'httpscom/mccarthysbocadelrio/', 10),
(12, 'Solo Dominguito', 'bar', 'http://google.com', 'httpscom/mccarthysbocadelrio/', 11),
(13, 'Solo SÃ¡bado', 'bar', 'http://google.com', 'httpscom/mccarthysbocadelrio/', 12),
(14, 'Test 1', 'bar', 'http://google.com', 'httpscom/mccarthysbocadelrio/', 13),
(15, 'Promo del martes', 'bar', 'http://google.com', 'httpscom/mccarthysbocadelrio/', 14),
(16, 'Solo Sábado 2', 'bar', 'http://google.com', 'httpscom/mccarthysbocadelrio/', 15),
(17, 'Restauranté', 'restaurante', 'http://google.com', 'mccarthysbocadelrio/', 16),
(18, 'El Agasajo', 'restaurante', 'Av Camacho', 'https://www.facebook.com/mccarthysbocadelrio/', 17),
(19, 'Chai Chin', 'cafe', 'http://google.com', 'https://www.facebook.com/mccarthysbocadelrio/', 18),
(20, 'Viveros', 'cafe', '142 Calle Manuel Ávila Camacho', 'Si ', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `id_p` int(11) NOT NULL,
  `titulo_p` varchar(35) COLLATE utf8_bin NOT NULL,
  `id_d1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`id_p`, `titulo_p`, `id_d1`) VALUES
(1, 'Litros 2 x $50', 4),
(2, 'Platillos a $99', 1),
(3, 'Hamburguesas $73', 7),
(4, 'Alitas 2x1', 7),
(5, 'Hamburguesas $73', 4),
(6, 'Cervezas 2 litros por $120', 5),
(7, 'Pescado y cerveza a 2x1', 7),
(8, 'Ahhh ', 2),
(10, 'Nueva promociÃ³n', 1),
(11, 'Ceviche y pescado a $99', 7),
(12, 'Ceviche y pescado a $99', 6),
(13, 'Test 1', 3),
(14, 'Pescado y cerveza a 2x1', 2),
(15, 'Esto es una entrada', 6),
(16, 'Es una promo', 6),
(17, 'Silión y costilla a $400 el kilo.', 1),
(18, 'Té y galletas a $30', 1),
(19, 'Si ', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`id_d`);

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
  ADD KEY `fk_dia` (`id_d1`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `negocio`
--
ALTER TABLE `negocio`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  ADD CONSTRAINT `fk_dia` FOREIGN KEY (`id_d1`) REFERENCES `dia` (`id_d`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
