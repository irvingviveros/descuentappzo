-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2019 a las 08:39:19
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
(7, 'Domingo'),
(8, 'Todos los días');

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
(4, '5c3e547834d6f8.37808792.jpg', 'images/uploads/restaurantes/5c3e547834d6f8.37808792.jpg'),
(6, '5c3e63dd167a91.02081773.jpg', 'images/uploads/restaurantes/5c3e63dd167a91.02081773.jpg'),
(7, '5c3e66d0d7de17.84484849.jpg', 'images/uploads/restaurantes/5c3e66d0d7de17.84484849.jpg'),
(8, '5c3e6a07af01e5.89783333.jpg', 'images/uploads/restaurantes/5c3e6a07af01e5.89783333.jpg'),
(21, '5c3e7b2a6bbfa0.66885440.jpg', 'images/uploads/restaurantes/5c3e7b2a6bbfa0.66885440.jpg'),
(22, '5c3e8569066530.59435943.jpg', 'images/uploads/restaurantes/5c3e8569066530.59435943.jpg'),
(23, '5c3e85c15932b0.62352694.jpg', 'images/uploads/restaurantes/5c3e85c15932b0.62352694.jpg'),
(24, '5c3e85e169ce91.07975096.jpg', 'images/uploads/restaurantes/5c3e85e169ce91.07975096.jpg'),
(25, '5c3e863ce03876.46698860.jpg', 'images/uploads/restaurantes/5c3e863ce03876.46698860.jpg'),
(26, '5c3e86ee99a196.39152382.jpg', 'images/uploads/restaurantes/5c3e86ee99a196.39152382.jpg'),
(27, '5c3e87e32c6ad0.74695385.jpg', 'images/uploads/bares/5c3e87e32c6ad0.74695385.jpg'),
(28, '5c3e8d6b1abdc5.29976035.jpg', 'images/uploads/bares/5c3e8d6b1abdc5.29976035.jpg'),
(29, '5c3e9407de4c46.35465060.jpg', 'images/uploads/bares/5c3e9407de4c46.35465060.jpg'),
(30, '5c3e953ba82197.89376690.jpeg', 'images/uploads/bares/5c3e953ba82197.89376690.jpeg'),
(31, '5c3e962e565db9.07334868.jpeg', 'images/uploads/bares/5c3e962e565db9.07334868.jpeg'),
(32, '5c3e9724d9c614.35875593.jpeg', 'images/uploads/bares/5c3e9724d9c614.35875593.jpeg'),
(33, '5c3e9b953c2696.26153604.png', 'images/uploads/restaurantes/5c3e9b953c2696.26153604.png'),
(34, '5c3e9cf18b68e4.09914666.jpg', 'images/uploads/restaurantes/5c3e9cf18b68e4.09914666.jpg'),
(35, '5c3e9d8ae12ab9.76783054.jpg', 'images/uploads/restaurantes/5c3e9d8ae12ab9.76783054.jpg'),
(36, '5c3e9e51633c97.04180683.jpg', 'images/uploads/restaurantes/5c3e9e51633c97.04180683.jpg'),
(37, '5c3ea0a9a03803.03544010.jpg', 'images/uploads/restaurantes/5c3ea0a9a03803.03544010.jpg'),
(38, '5c3ea185e65a49.73819503.jpg', 'images/uploads/restaurantes/5c3ea185e65a49.73819503.jpg'),
(39, '5c3ea1c5eb5fb6.68773527.jpg', 'images/uploads/restaurantes/5c3ea1c5eb5fb6.68773527.jpg'),
(40, '5c3ea21646d840.93637438.jpg', 'images/uploads/restaurantes/5c3ea21646d840.93637438.jpg'),
(41, '5c3ea4122ef697.01914052.jpg', 'images/uploads/restaurantes/5c3ea4122ef697.01914052.jpg'),
(42, '5c3ea581ed0843.31851365.jpg', 'images/uploads/restaurantes/5c3ea581ed0843.31851365.jpg'),
(43, '5c3ea7d9ee9911.34359849.png', 'images/uploads/restaurantes/5c3ea7d9ee9911.34359849.png'),
(44, '5c3ea9de0423e9.65984512.jpg', 'images/uploads/bares/5c3ea9de0423e9.65984512.jpg'),
(45, '5c3eaabb987cd0.89050415.jpg', 'images/uploads/restaurantes/5c3eaabb987cd0.89050415.jpg'),
(46, '5c3eaba1267143.59011471.jpg', 'images/uploads/restaurantes/5c3eaba1267143.59011471.jpg'),
(47, '5c3eb1a89bcf89.73063178.jpg', 'images/uploads/bares/5c3eb1a89bcf89.73063178.jpg'),
(48, '5c3eb1edeef2c2.82655387.jpg', 'images/uploads/bares/5c3eb1edeef2c2.82655387.jpg'),
(49, '5c3eb2635d54c3.90463338.jpg', 'images/uploads/bares/5c3eb2635d54c3.90463338.jpg'),
(50, '5c3eb313470da8.50794841.jpg', 'images/uploads/bares/5c3eb313470da8.50794841.jpg'),
(51, '5c3eb41e1dc1d8.57423036.jpg', 'images/uploads/bares/5c3eb41e1dc1d8.57423036.jpg'),
(53, '5c3eb4d9c94850.91690512.jpg', 'images/uploads/restaurantes/5c3eb4d9c94850.91690512.jpg'),
(54, '5c3eb645509d62.81735898.jpg', 'images/uploads/restaurantes/5c3eb645509d62.81735898.jpg'),
(55, '5c3eb77a6a30c1.97760646.jpg', 'images/uploads/restaurantes/5c3eb77a6a30c1.97760646.jpg'),
(56, '5c3eb838043524.14982470.jpg', 'images/uploads/restaurantes/5c3eb838043524.14982470.jpg'),
(57, '5c3ebac7e77372.00243154.jpg', 'images/uploads/restaurantes/5c3ebac7e77372.00243154.jpg'),
(58, '5c3ebbc4a0ade6.93103744.jpg', 'images/uploads/restaurantes/5c3ebbc4a0ade6.93103744.jpg'),
(59, '5c3ebc32df1d95.15809500.jpg', 'images/uploads/restaurantes/5c3ebc32df1d95.15809500.jpg'),
(60, '5c3ebd2094ef09.76189680.jpg', 'images/uploads/restaurantes/5c3ebd2094ef09.76189680.jpg'),
(61, '5c3ebe94a860d0.14362689.jpg', 'images/uploads/restaurantes/5c3ebe94a860d0.14362689.jpg'),
(62, '5c3ebed1c5be81.00665682.jpg', 'images/uploads/restaurantes/5c3ebed1c5be81.00665682.jpg'),
(63, '5c3ec03c2a23a4.34195805.png', 'images/uploads/restaurantes/5c3ec03c2a23a4.34195805.png'),
(64, '5c3ec098851318.47683092.jpg', 'images/uploads/restaurantes/5c3ec098851318.47683092.jpg'),
(65, '5c3ec0dfaabaf7.95327471.jpg', 'images/uploads/restaurantes/5c3ec0dfaabaf7.95327471.jpg'),
(66, '5c3ec1b5275b46.26823416.jpg', 'images/uploads/restaurantes/5c3ec1b5275b46.26823416.jpg'),
(67, '5c3ec287b60e24.53423015.jpg', 'images/uploads/restaurantes/5c3ec287b60e24.53423015.jpg'),
(69, '5c3ec38fe48e79.33067929.jpg', 'images/uploads/restaurantes/5c3ec38fe48e79.33067929.jpg'),
(70, '5c3ec50f5e1772.47877620.jpg', 'images/uploads/restaurantes/5c3ec50f5e1772.47877620.jpg'),
(71, '5c3ec598006aa5.98150929.jpg', 'images/uploads/restaurantes/5c3ec598006aa5.98150929.jpg'),
(72, '5c3ec71e70f5e3.36797344.jpg', 'images/uploads/restaurantes/5c3ec71e70f5e3.36797344.jpg'),
(73, '5c3ec7da449ee2.42145876.jpg', 'images/uploads/restaurantes/5c3ec7da449ee2.42145876.jpg'),
(74, '5c3ecbb94969a2.05990699.png', 'images/uploads/bares/5c3ecbb94969a2.05990699.png'),
(76, '5c3ecde51c2555.88023930.jpeg', 'images/uploads/bares/5c3ecde51c2555.88023930.jpeg'),
(77, '5c3ece6021cef1.70699261.jpeg', 'images/uploads/bares/5c3ece6021cef1.70699261.jpeg'),
(78, '5c3ece92885f11.39160183.jpeg', 'images/uploads/bares/5c3ece92885f11.39160183.jpeg'),
(79, '5c3ecfa93c1d31.56683651.jpeg', 'images/uploads/bares/5c3ecfa93c1d31.56683651.jpeg'),
(80, '5c3ed198d56990.49154309.jpg', 'images/uploads/restaurantes/5c3ed198d56990.49154309.jpg'),
(81, '5c3ed1eb41a410.24851264.jpg', 'images/uploads/restaurantes/5c3ed1eb41a410.24851264.jpg'),
(82, '5c3ed33c1e04b4.25404251.jpg', 'images/uploads/bares/5c3ed33c1e04b4.25404251.jpg'),
(83, '5c3ed368a9a405.53295597.jpg', 'images/uploads/bares/5c3ed368a9a405.53295597.jpg'),
(84, '5c3ed3df850b11.65615060.jpg', 'images/uploads/bares/5c3ed3df850b11.65615060.jpg'),
(85, '5c3ed439383d26.39252512.jpg', 'images/uploads/bares/5c3ed439383d26.39252512.jpg'),
(86, '5c3ed4ee7e18b5.39147894.jpg', 'images/uploads/bares/5c3ed4ee7e18b5.39147894.jpg'),
(87, '5c3ed54a1f8417.67906971.jpg', 'images/uploads/bares/5c3ed54a1f8417.67906971.jpg'),
(88, '5c3ed62e06cff7.71165214.jpg', 'images/uploads/bares/5c3ed62e06cff7.71165214.jpg'),
(89, '5c3ed69b2355b1.10064332.jpg', 'images/uploads/bares/5c3ed69b2355b1.10064332.jpg'),
(90, '5c3ed731971d30.10022601.jpg', 'images/uploads/bares/5c3ed731971d30.10022601.jpg'),
(91, '5c3ed86b4c1669.85463395.jpg', 'images/uploads/bares/5c3ed86b4c1669.85463395.jpg'),
(92, '5c3ed91301ce27.88953644.jpg', 'images/uploads/restaurantes/5c3ed91301ce27.88953644.jpg'),
(93, '5c3eda69e4b487.07188111.jpg', 'images/uploads/bares/5c3eda69e4b487.07188111.jpg'),
(94, '5c3edacfa33826.57230756.jpg', 'images/uploads/bares/5c3edacfa33826.57230756.jpg'),
(95, '5c3edb3bc09ed0.25959017.jpg', 'images/uploads/bares/5c3edb3bc09ed0.25959017.jpg'),
(96, '5c3edb97981b61.91952101.jpg', 'images/uploads/bares/5c3edb97981b61.91952101.jpg'),
(97, '5c3edbecb485a2.12161300.jpg', 'images/uploads/bares/5c3edbecb485a2.12161300.jpg'),
(98, '5c3edc4cc51019.31687683.jpg', 'images/uploads/bares/5c3edc4cc51019.31687683.jpg'),
(99, '5c3f6af042b525.83471167.jpg', 'images/uploads/bares/5c3f6af042b525.83471167.jpg'),
(100, '5c3f6b781903a9.67423108.jpg', 'images/uploads/restaurantes/5c3f6b781903a9.67423108.jpg'),
(101, '5c3f6b9f6bff24.96325589.jpg', 'images/uploads/restaurantes/5c3f6b9f6bff24.96325589.jpg'),
(102, '5c3f6c0d74e291.34363319.jpg', 'images/uploads/restaurantes/5c3f6c0d74e291.34363319.jpg'),
(103, '5c3f6c3c6add02.32382675.jpg', 'images/uploads/restaurantes/5c3f6c3c6add02.32382675.jpg'),
(104, '5c3ff5161cb515.55005816.png', 'images/uploads/cafes/5c3ff5161cb515.55005816.png'),
(105, '5c3ff638e76931.14727317.jpg', 'images/uploads/cafes/5c3ff638e76931.14727317.jpg'),
(106, '5c3ff6fe144dd5.09509769.jpg', 'images/uploads/cafes/5c3ff6fe144dd5.09509769.jpg'),
(107, '5c4030f301b428.01941602.jpg', 'images/uploads/restaurantes/5c4030f301b428.01941602.jpg');

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
(3, 'Sushi Roll', 'restaurante', 'https://goo.gl/maps/WsFKskmgGzx', 'https://www.facebook.com/pages/Sushi-Roll/1068216479952481', 3),
(4, 'Sushi Itto', 'restaurante', 'https://goo.gl/maps/pRb4FCZmsLB2', 'https://www.facebook.com/Sushiitto-Plaza-Americas-Veracruz-958906487492650/', 4),
(5, 'Sushi Itto', 'restaurante', 'https://goo.gl/maps/pRb4FCZmsLB2', 'https://www.facebook.com/Sushiitto-Plaza-Americas-Veracruz-958906487492650/', 5),
(6, 'Sushi Itto', 'restaurante', 'https://goo.gl/maps/pRb4FCZmsLB2', 'https://www.facebook.com/Sushiitto-Plaza-Americas-Veracruz-958906487492650/', 6),
(7, 'Sushi Itto', 'restaurante', 'https://goo.gl/maps/pRb4FCZmsLB2', 'https://www.facebook.com/Sushiitto-Plaza-Americas-Veracruz-958906487492650/', 7),
(8, 'Sushi Itto', 'restaurante', 'https://goo.gl/maps/pRb4FCZmsLB2', 'https://www.facebook.com/Sushiitto-Plaza-Americas-Veracruz-958906487492650/', 8),
(9, 'Domu', 'restaurante', 'https://goo.gl/maps/taRUkAMeTnP2', 'https://www.facebook.com/DomuSushiBar/', 9),
(10, 'Domu', 'restaurante', 'https://goo.gl/maps/taRUkAMeTnP2', 'https://www.facebook.com/DomuSushiBar/', 10),
(11, 'Domu', 'restaurante', 'https://goo.gl/maps/taRUkAMeTnP2', 'https://www.facebook.com/DomuSushiBar/', 11),
(12, 'Domu', 'restaurante', 'https://goo.gl/maps/taRUkAMeTnP2', 'https://www.facebook.com/DomuSushiBar/', 12),
(13, 'Domu', 'restaurante', 'https://goo.gl/maps/taRUkAMeTnP2', 'https://www.facebook.com/DomuSushiBar/', 13),
(14, 'Domu', 'restaurante', 'https://goo.gl/maps/taRUkAMeTnP2', 'https://www.facebook.com/DomuSushiBar/', 14),
(15, 'Domu', 'restaurante', 'https://goo.gl/maps/taRUkAMeTnP2', 'https://www.facebook.com/DomuSushiBar/', 15),
(16, 'Groshi Express', 'restaurante', 'https://goo.gl/maps/o8ZALxArCY82', 'https://www.facebook.com/groshiexpressboca/', 16),
(17, 'Bennigan\'s', 'restaurante', 'https://goo.gl/maps/kLr5ZG9riNy', 'https://www.facebook.com/BennigansMexico', 20),
(18, 'Bennigan\'s', 'restaurante', 'https://goo.gl/maps/kLr5ZG9riNy', 'https://www.facebook.com/BennigansMexico/', 21),
(19, 'Bennigan\'s ', 'restaurante', 'https://goo.gl/maps/kLr5ZG9riNy', 'https://www.facebook.com/BennigansMexico/', 22),
(20, 'Bennigan\'s ', 'restaurante', 'https://goo.gl/maps/kLr5ZG9riNy', 'https://www.facebook.com/BennigansMexico/', 23),
(21, 'Bennigan\'s ', 'restaurante', 'https://goo.gl/maps/kLr5ZG9riNy', 'https://www.facebook.com/BennigansMexico/', 24),
(22, 'Bennigan\'s ', 'restaurante', 'https://goo.gl/maps/kLr5ZG9riNy', 'https://www.facebook.com/BennigansMexico/', 25),
(23, 'McCarthy\'s', 'bar', 'https://goo.gl/maps/5abeHG5wJA72', 'https://www.facebook.com/mccarthysbocadelrio/', 26),
(24, 'McCarthy\'s', 'bar', 'https://goo.gl/maps/5abeHG5wJA72', 'https://www.facebook.com/mccarthysbocadelrio/', 27),
(25, 'McCarthy\'s', 'bar', 'https://goo.gl/maps/5abeHG5wJA72', 'https://www.facebook.com/mccarthysbocadelrio/', 28),
(26, 'Diecinueve ', 'bar', 'https://goo.gl/maps/Wof1JwvBpAS2', 'https://www.facebook.com/bardiecinueve/', 29),
(27, 'Diecinueve ', 'bar', 'https://goo.gl/maps/Wof1JwvBpAS2', 'https://www.facebook.com/bardiecinueve/', 30),
(28, 'Diecinueve ', 'bar', 'https://goo.gl/maps/Wof1JwvBpAS2', 'https://www.facebook.com/bardiecinueve/', 31),
(29, 'Diecinueve ', 'bar', 'https://goo.gl/maps/UwUAwjHDShm', 'https://www.facebook.com/bardiecinueve/', 32),
(30, 'Diecinueve ', 'bar', 'https://goo.gl/maps/UwUAwjHDShm', 'https://www.facebook.com/bardiecinueve/', 33),
(31, 'Diecinueve ', 'bar', 'https://goo.gl/maps/UwUAwjHDShm', 'https://www.facebook.com/bardiecinueve/', 34),
(32, 'Sensei', 'restaurante', 'https://goo.gl/maps/qBmXTJfuBc92', 'https://www.facebook.com/senseiveracruz/', 35),
(33, 'Sensei', 'restaurante', 'https://goo.gl/maps/qBmXTJfuBc92', 'https://www.facebook.com/senseiveracruz/', 36),
(34, 'Madison Grill ', 'restaurante', 'https://goo.gl/maps/7hfJSzJNvd92', 'https://www.facebook.com/madisongrillveracruz/', 37),
(35, 'Madison Grill ', 'restaurante', 'https://goo.gl/maps/7hfJSzJNvd92', 'https://www.facebook.com/madisongrillveracruz/', 38),
(36, 'Madison Grill ', 'restaurante', 'https://goo.gl/maps/7hfJSzJNvd92', 'https://www.facebook.com/madisongrillveracruz/', 39),
(37, 'Madison Grill ', 'restaurante', 'https://goo.gl/maps/7hfJSzJNvd92', 'https://www.facebook.com/madisongrillveracruz/', 40),
(38, 'Madison Grill ', 'restaurante', 'https://goo.gl/maps/7hfJSzJNvd92', 'https://www.facebook.com/madisongrillveracruz/', 41),
(39, 'Madison Grill ', 'restaurante', 'https://goo.gl/maps/7hfJSzJNvd92', 'https://www.facebook.com/madisongrillveracruz/', 42),
(40, 'Madison Grill ', 'restaurante', 'https://goo.gl/maps/7hfJSzJNvd92', 'https://www.facebook.com/madisongrillveracruz/', 43),
(41, 'Madison Grill ', 'restaurante', 'https://goo.gl/maps/7hfJSzJNvd92', 'https://www.facebook.com/madisongrillveracruz/', 44),
(42, 'Madison Grill ', 'restaurante', 'https://goo.gl/maps/7hfJSzJNvd92', 'https://www.facebook.com/madisongrillveracruz/', 45),
(43, 'Wings Army', 'restaurante', 'https://goo.gl/maps/T1ZTF27Tj6u', 'https://www.facebook.com/wingsarmyplazasol/', 46),
(44, 'Wings Army', 'restaurante', 'https://goo.gl/maps/T1ZTF27Tj6u', 'https://www.facebook.com/wingsarmyplazasol/', 47),
(45, 'Wings Army', 'restaurante', 'https://goo.gl/maps/T1ZTF27Tj6u', 'https://www.facebook.com/wingsarmyplazasol/', 48),
(46, 'Wings Army', 'restaurante', 'https://goo.gl/maps/T1ZTF27Tj6u', 'https://www.facebook.com/wingsarmyplazasol/', 49),
(47, 'Wings Army', 'restaurante', 'https://goo.gl/maps/T1ZTF27Tj6u', 'https://www.facebook.com/wingsarmyplazasol/', 50),
(48, 'Wings Army', 'restaurante', 'https://goo.gl/maps/T1ZTF27Tj6u', 'https://www.facebook.com/wingsarmyplazasol/', 51),
(49, 'Wings Army', 'restaurante', 'https://goo.gl/maps/T1ZTF27Tj6u', 'https://www.facebook.com/wingsarmyplazasol/', 52),
(50, 'Wings Army', 'restaurante', 'https://goo.gl/maps/T1ZTF27Tj6u', 'https://www.facebook.com/wingsarmyplazasol/', 53),
(51, 'Wings Army', 'restaurante', 'https://goo.gl/maps/T1ZTF27Tj6u', 'https://www.facebook.com/wingsarmyplazasol/', 54),
(52, 'Señor Bamboo ', 'bar', 'https://goo.gl/maps/KeRS99vWHMM2', 'https://www.facebook.com/srbambooandamar/', 55),
(53, 'Señor Bamboo ', 'bar', 'https://goo.gl/maps/KeRS99vWHMM2', 'https://www.facebook.com/srbambooandamar/', 56),
(54, 'Señor Bamboo ', 'bar', 'https://goo.gl/maps/KeRS99vWHMM2', 'https://www.facebook.com/srbambooandamar/', 57),
(55, 'Señor Bamboo ', 'bar', 'https://goo.gl/maps/KeRS99vWHMM2', 'https://www.facebook.com/srbambooandamar/', 58),
(56, 'Rock and Burger', 'restaurante', 'https://goo.gl/maps/Jy6dbxAEJYG2', 'https://www.facebook.com/rockandburgerrestaurant/', 59),
(57, 'Rock and Burger', 'restaurante', 'https://goo.gl/maps/Jy6dbxAEJYG2', 'https://www.facebook.com/rockandburgerrestaurant/', 60),
(58, 'Tadaya Sushi', 'restaurante', 'https://goo.gl/maps/A7LNFF2UFb92', 'https://www.facebook.com/Tadaya-Sushi-Costa-Verde-190782561637715/', 61),
(59, 'Tadaya Sushi', 'restaurante', 'https://goo.gl/maps/A7LNFF2UFb92', 'https://www.facebook.com/Tadaya-Sushi-Costa-Verde-190782561637715/', 62),
(60, 'Sr. Pibil', 'restaurante', 'https://goo.gl/maps/Udif9xrmmz32', 'https://www.facebook.com/sr.pibil/', 63),
(61, 'Los Giros', 'restaurante', 'https://goo.gl/maps/JsKB4AhvFCN2', 'https://www.facebook.com/elsabormexicano/', 64),
(62, 'Los Giros', 'restaurante', 'https://goo.gl/maps/JsKB4AhvFCN2', 'https://www.facebook.com/elsabormexicano/', 65),
(63, 'Los Giros', 'restaurante', 'https://goo.gl/maps/JsKB4AhvFCN2', 'https://www.facebook.com/elsabormexicano/', 66),
(64, 'El Saudí', 'restaurante', 'https://goo.gl/maps/6b1s5Q4cgoF2', 'https://www.facebook.com/elsaudimx/', 67),
(65, 'A Takear', 'restaurante', 'https://goo.gl/maps/i7Hq5eXiGWU2', 'https://www.facebook.com/ATakearVeracruz/', 68),
(66, 'La Dictadura', 'restaurante', 'https://goo.gl/maps/LQZUi952mam', 'https://www.facebook.com/ladictadura09/', 69),
(67, 'La Dictadura', 'restaurante', 'https://goo.gl/maps/LQZUi952mam', 'https://www.facebook.com/ladictadura09/', 70),
(68, 'Los Fabulosos', 'restaurante', 'https://goo.gl/maps/CZSgpmHogPm', 'https://www.facebook.com/LosFabulososJB/', 71),
(69, 'Los Fabulosos', 'restaurante', 'https://goo.gl/maps/CZSgpmHogPm', 'https://www.facebook.com/LosFabulososJB/', 72),
(70, 'Los Fabulosos', 'restaurante', 'https://goo.gl/maps/CZSgpmHogPm', 'https://www.facebook.com/LosFabulososJB/', 73),
(71, 'Tacos Tomás', 'restaurante', 'https://goo.gl/maps/RxLaSwrZsZq', 'https://www.facebook.com/TacosTomas/', 74),
(72, 'Tacos Tomás', 'restaurante', 'https://goo.gl/maps/RxLaSwrZsZq', 'https://www.facebook.com/TacosTomas/', 75),
(73, 'La Pizza di Marco', 'restaurante', 'https://goo.gl/maps/sp6HneQQE6L2', 'https://www.facebook.com/laspizzadimarco/', 76),
(74, 'Churrasca', 'restaurante', 'https://goo.gl/maps/zTeAKEB5tLw', 'https://www.facebook.com/churrascaboca/', 77),
(75, 'Churrasca', 'restaurante', 'https://goo.gl/maps/zTeAKEB5tLw', 'https://www.facebook.com/churrascaboca/', 78),
(76, 'Tacos El Cubano', 'restaurante', 'https://goo.gl/maps/wDipgHGLJG42', 'https://www.facebook.com/tacoselcubano.ver/', 79),
(77, 'Cheddar\'n Beer', 'restaurante', 'https://goo.gl/maps/j2pQWADkoJP2', 'https://www.facebook.com/Cheddar.n.Beer/', 80),
(78, 'Barra Rosa', 'bar', 'https://goo.gl/maps/51E2CvCfFm42', 'https://www.facebook.com/barrarosabar/', 81),
(79, 'La Chismosa Raw B.', 'bar', 'https://goo.gl/maps/n4F2YfhuUs42', 'https://www.facebook.com/LaChismosaRawBar/', 82),
(80, 'La Chismosa Raw B.', 'bar', 'https://goo.gl/maps/n4F2YfhuUs42', 'https://www.facebook.com/LaChismosaRawBar/', 83),
(81, 'La Chismosa Raw B.', 'bar', 'https://goo.gl/maps/n4F2YfhuUs42', 'https://www.facebook.com/LaChismosaRawBar/', 84),
(82, 'La Chismosa Raw B.', 'bar', 'https://goo.gl/maps/n4F2YfhuUs42', 'https://www.facebook.com/LaChismosaRawBar/', 85),
(83, 'La Frida Pizzas', 'restaurante', 'https://goo.gl/maps/4p8cSb8apBL2', 'https://www.facebook.com/lafridaveracruz/', 86),
(84, 'La Frida Pizzas', 'restaurante', 'https://goo.gl/maps/4p8cSb8apBL2', 'https://www.facebook.com/lafridaveracruz/', 87),
(85, 'La Frida Pizzas', 'restaurante', 'https://goo.gl/maps/4p8cSb8apBL2', 'https://www.facebook.com/lafridaveracruz/', 88),
(86, 'Miami Beach ', 'bar', 'https://goo.gl/maps/scEfdN2UQcT2', 'https://www.facebook.com/miamibeachveracruz/', 89),
(87, 'Miami Beach ', 'bar', 'https://goo.gl/maps/scEfdN2UQcT2', 'https://www.facebook.com/miamibeachveracruz/', 90),
(88, 'Miami Beach ', 'bar', 'https://goo.gl/maps/scEfdN2UQcT2', 'https://www.facebook.com/miamibeachveracruz/', 91),
(89, 'Miami Beach ', 'bar', 'https://goo.gl/maps/scEfdN2UQcT2', 'https://www.facebook.com/miamibeachveracruz/', 92),
(90, 'Homero Taberna', 'bar', 'https://goo.gl/maps/9XbDriWzqgR2', 'https://www.facebook.com/HmROTabernaVeracruz1/', 93),
(91, 'Homero Taberna', 'bar', 'https://goo.gl/maps/9XbDriWzqgR2', 'https://www.facebook.com/HmROTabernaVeracruz1/', 94),
(92, 'Barrilitos Beer', 'bar', 'https://goo.gl/maps/e6gqky8ovCH2', 'https://www.facebook.com/BarrilitosBeer/', 95),
(93, 'Barrilitos Beer', 'bar', 'https://goo.gl/maps/e6gqky8ovCH2', 'https://www.facebook.com/BarrilitosBeer/', 96),
(94, 'Barrilitos Beer', 'bar', 'https://goo.gl/maps/e6gqky8ovCH2', 'https://www.facebook.com/BarrilitosBeer/', 97),
(95, 'Mr Pap\'s Bule Bar', 'bar', 'https://goo.gl/maps/WBbtu6WYwnF2', 'https://www.facebook.com/MrPapsVeracruz/', 98),
(96, 'Torín', 'restaurante', 'https://goo.gl/maps/P1TmvwpsqHB2', 'https://www.facebook.com/1283104955075472/', 99),
(97, 'Las Food Trucks', 'bar', 'https://goo.gl/maps/unLuKuKm8B92', 'https://www.facebook.com/lasfoodtrucks/', 100),
(98, 'Las Food Trucks', 'bar', 'https://goo.gl/maps/unLuKuKm8B92', 'https://www.facebook.com/lasfoodtrucks/', 101),
(99, 'Las Food Trucks', 'bar', 'https://goo.gl/maps/unLuKuKm8B92', 'https://www.facebook.com/lasfoodtrucks/', 102),
(100, 'Las Food Trucks', 'bar', 'https://goo.gl/maps/unLuKuKm8B92', 'https://www.facebook.com/lasfoodtrucks/', 103),
(101, 'Las Food Trucks', 'bar', 'https://goo.gl/maps/unLuKuKm8B92', 'https://www.facebook.com/lasfoodtrucks/', 104),
(102, 'Las Food Trucks', 'bar', 'https://goo.gl/maps/unLuKuKm8B92', 'https://www.facebook.com/lasfoodtrucks/', 105),
(103, 'McCarthy\'s', 'bar', 'https://goo.gl/maps/JryuN2CAQSq', 'https://www.facebook.com/mccarthysbocadelrio/', 106),
(104, 'Hook Fishbar Boca', 'restaurante', 'https://goo.gl/maps/XbfdcUsccTE2', 'https://www.facebook.com/HookBoca/', 107),
(105, 'Hook Fishbar Boca', 'restaurante', 'https://goo.gl/maps/XbfdcUsccTE2', 'https://www.facebook.com/HookBoca/', 108),
(106, 'Hook Fishbar Boca', 'restaurante', 'https://goo.gl/maps/XbfdcUsccTE2', 'https://www.facebook.com/HookBoca/', 109),
(107, 'Hook Fishbar Boca', 'restaurante', 'https://goo.gl/maps/XbfdcUsccTE2', 'https://www.facebook.com/HookBoca/', 110),
(108, 'Bubble Waffle', 'cafe', 'https://goo.gl/maps/HbKiyetcFmp', 'https://www.facebook.com/BubbleWaffleVeracruz/', 111),
(109, 'Bubble Waffle', 'cafe', 'https://goo.gl/maps/HbKiyetcFmp', 'https://www.facebook.com/BubbleWaffleVeracruz/', 112),
(110, 'Bubble Waffle', 'cafe', 'https://goo.gl/maps/HbKiyetcFmp', 'https://www.facebook.com/BubbleWaffleVeracruz/', 113),
(111, 'Bubble Waffle', 'cafe', 'https://goo.gl/maps/HbKiyetcFmp', 'https://www.facebook.com/BubbleWaffleVeracruz/', 114),
(112, 'Bubble Waffle', 'cafe', 'https://goo.gl/maps/HbKiyetcFmp', 'https://www.facebook.com/BubbleWaffleVeracruz/', 115),
(113, 'Bubble Waffle', 'cafe', 'https://goo.gl/maps/HbKiyetcFmp', 'https://www.facebook.com/BubbleWaffleVeracruz/', 116),
(114, 'Madison Grill ', 'restaurante', 'https://goo.gl/maps/qyoDnhKUXfG2', 'https://www.facebook.com/pg/madisongrillveracruz/', 117);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `id_p` int(11) NOT NULL,
  `titulo_p` varchar(45) COLLATE utf8_bin NOT NULL,
  `id_d1` int(11) NOT NULL,
  `id_i1` int(11) NOT NULL,
  `birthday_p` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`id_p`, `titulo_p`, `id_d1`, `id_i1`, `birthday_p`) VALUES
(1, 'Todos los rollos 2x1 a partir de las 18:00', 1, 1, b'0'),
(2, 'Todos los rollos 2x1 a partir de las 18:00', 2, 1, b'0'),
(3, 'Todos los rollos 2x1 a partir de las 18:00', 3, 1, b'0'),
(4, '2x1 en rollos a partir de las 18:00', 1, 4, b'0'),
(5, '2x1 en rollos a partir de las 18:00', 2, 4, b'0'),
(6, '2x1 en rollos a partir de las 18:00', 3, 4, b'0'),
(7, '2x1 en rollos a partir de las 18:00', 4, 4, b'0'),
(8, '2x1 en rollos a partir de las 18:00', 5, 4, b'0'),
(9, 'ComBOTELLA $599 de 9 PM a 12 AM', 4, 6, b'0'),
(10, 'ComBOTELLA $599 de 9 PM a 12 AM', 5, 6, b'0'),
(11, 'ComBOTELLA $599 de 9 PM a 12 AM', 6, 6, b'0'),
(12, 'Rollos a 2 x $98', 1, 7, b'0'),
(13, 'Rollos a 2 x $98', 2, 7, b'0'),
(14, 'Rollos a 2 x $98', 3, 7, b'0'),
(15, 'Rollos a 2 x $98', 4, 7, b'0'),
(16, 'Mujeres pagan $99 en el consumo de su buffet', 4, 8, b'0'),
(20, 'Tú escoges tu promo diaria', 1, 21, b'0'),
(21, 'Ensaladas a mitad de precio', 2, 22, b'0'),
(22, 'Hamburguesas a $99', 3, 23, b'0'),
(23, 'Costilla completa a precio de media', 4, 24, b'0'),
(24, 'Bebidas alcohólicas al 3 x 2', 5, 25, b'0'),
(25, 'Barra libre de cerveza de barril a $200', 5, 26, b'0'),
(26, 'Cerveza y coctelería al 2 x 1 todo el día', 3, 27, b'0'),
(27, '8 Alitas o 1 Burger + Tarro + Papas a $89', 8, 28, b'0'),
(28, 'Alitas a $4.90 c/u', 1, 29, b'0'),
(29, '5 Alitas + 1 Litro de cerveza a $75', 2, 30, b'0'),
(30, '5 Alitas + 1 Litro de cerveza a $75', 3, 30, b'0'),
(31, '5 Alitas + 1 Litro de cerveza a $75', 7, 30, b'0'),
(32, '3 Tarros de cerveza a $50', 2, 31, b'0'),
(33, '3 Tarros de cerveza a $50', 3, 31, b'0'),
(34, 'Cubeta con 10 medias Tecate o Indio a $180', 8, 32, b'0'),
(35, 'Rollos al 2 x 1', 1, 33, b'0'),
(36, 'Rollos al 2 x 1', 3, 33, b'0'),
(37, 'Hamburguesas al 50% de descuento', 3, 34, b'0'),
(38, 'Cortes con 40% de descuento', 1, 35, b'0'),
(39, 'Tacos con 50% de descuento', 2, 36, b'0'),
(40, 'Todas las alitas que puedas comer por $119', 4, 37, b'0'),
(41, 'Costillas al 50% de descuento', 5, 38, b'0'),
(42, 'Copeo al 5 x 1, 4 x 1 y 3 x 1', 6, 39, b'0'),
(43, 'Parrilladas con 30% de descuento', 7, 40, b'0'),
(44, 'Copeo al 3 x 1', 8, 41, b'0'),
(45, 'Mixología a tu mesa 2 x 1', 8, 42, b'0'),
(46, 'Plato fuerte + Bebida + Postre a $125', 1, 43, b'0'),
(47, 'Plato fuerte + Bebida + Postre a $125', 2, 43, b'0'),
(48, 'Plato fuerte + Bebida + Postre a $125', 3, 43, b'0'),
(49, 'Plato fuerte + Bebida + Postre a $125', 4, 43, b'0'),
(50, 'Plato fuerte + Bebida + Postre a $125', 5, 43, b'0'),
(51, 'Cerveza al 50% de descuento', 1, 44, b'0'),
(52, 'Cerveza al 50% de descuento', 4, 44, b'0'),
(53, 'Alitas 30 x 20', 3, 45, b'0'),
(54, 'Tarro de cerveza a $48', 6, 46, b'0'),
(55, 'Rollos al 2 x 1', 2, 47, b'0'),
(56, 'Rollos al 2 x 1', 1, 48, b'0'),
(57, 'Copeo nacional al 2 x 1', 5, 49, b'0'),
(58, 'Bebidas al 2 x 1 para mujeres ', 4, 50, b'0'),
(59, 'Hamburguesas con papas a $69', 2, 51, b'0'),
(60, 'Tarro de cerveza a $19', 3, 53, b'0'),
(61, 'Rollos al 2 x 1', 2, 54, b'0'),
(62, 'Platillos calientes al 2 x 1', 3, 55, b'0'),
(63, '7 tacos de pibil por $30', 2, 56, b'0'),
(64, '4 Tacos al Pastor x $35, 8 Tacos x $65', 2, 57, b'0'),
(65, '4 Tacos al Pastor x $35, 8 Tacos x $65', 4, 57, b'0'),
(66, 'Tacos al pastor al 2 x 1', 3, 58, b'0'),
(67, 'Tacos orientales al 2 x 1', 8, 59, b'0'),
(68, 'Tacos al pastor al 2 x 1', 2, 60, b'0'),
(69, 'Tacos al carbón a 3 x 2', 2, 61, b'0'),
(70, 'Hamburguesas al 3 x 2', 4, 62, b'0'),
(71, 'Hamburguesas 2 x $85', 2, 63, b'0'),
(72, 'Jochos 2 x $75', 4, 64, b'0'),
(73, 'Alitas a $4.00 c/u', 5, 65, b'0'),
(74, 'Tacos de pastor 2 x 1 en local 3 x 2 domicilo', 3, 66, b'0'),
(75, 'Tacos de carnitas 2 x 1 local 3 x 2 domicilio', 1, 67, b'0'),
(76, 'Pastas al 2 x 1 (Sucursal Nuevo Veracruz)', 3, 69, b'0'),
(77, '2 buffets más jarra de clericot por $498', 3, 70, b'0'),
(78, 'Buffet de espadas al 2 x 1', 2, 71, b'0'),
(79, 'Tacos al pastor al 2 x 1', 3, 72, b'0'),
(80, 'Hamburguesas al 2 x 1', 3, 73, b'0'),
(81, 'Caguamas ilimitadas: M - $100, H - $200', 4, 74, b'0'),
(82, 'Ceviche y 2 cervezas por $110', 8, 76, b'0'),
(83, 'Micheladas 2 por $100', 8, 77, b'0'),
(84, 'Palomitas de camarón + 4 cervezas de 1/4 $150', 8, 78, b'0'),
(85, '10 medias XX lager por $200', 8, 79, b'0'),
(86, 'Pizzas desde $89', 3, 80, b'0'),
(87, 'Margaritas Frida y Jarritos Diego 2 x 1', 4, 81, b'0'),
(88, 'Margaritas Frida y Jarritos Diego 2 x 1', 5, 81, b'0'),
(89, '10 cuartitos por $100, Botellas al 50%', 4, 82, b'0'),
(90, 'Coctelería y copeo al 2 x 1', 4, 83, b'0'),
(91, '10 cuartitos por $150, Botellas al 50%', 5, 84, b'0'),
(92, 'Botellas 2 x 1. Coctelería 2 x 1. Copeo 2 x 1', 6, 85, b'0'),
(93, '30 alitas por $199, jarra de cerveza gratis', 4, 86, b'0'),
(94, '10 alitas + 1 lt de Heineken por $99', 7, 87, b'0'),
(95, 'Por cada 4 chicas 1 botella gratis', 3, 88, b'0'),
(96, 'Promoción en botellas. Cuartitos a $9.00', 7, 89, b'0'),
(97, 'Para ellas, cerveza de barril gratis', 2, 90, b'0'),
(98, 'Tritón de 5 litros a $200', 7, 91, b'0'),
(99, 'Pizzas 2 desde $149', 2, 92, b'0'),
(100, 'Pizza grande + Jarra de clericot a $149', 2, 93, b'0'),
(101, 'Hamburguesas 2 x $130. Hot Dog 2 x $50', 2, 94, b'0'),
(102, 'Alitas $5.00 c/u. Tacos al pastor 2 x  1', 1, 95, b'0'),
(103, 'Medias a $12.00. Mojitos y Caipirinhas 2x $40', 1, 96, b'0'),
(104, 'Cortes a $100. Litros estándar a $60', 5, 97, b'0'),
(105, 'Flautas al 2 x 1. Medias a $12', 4, 98, b'0'),
(106, 'Tritón 3 litros a $180.00 y 5 litros a $299', 4, 99, b'0'),
(107, 'Camarones al 2 x 1', 2, 100, b'0'),
(108, 'Hamburguesas al 2 x 1', 1, 101, b'0'),
(109, 'Tostadas y ceviche al 2 x 1', 4, 102, b'0'),
(110, 'Tacos al 2 x 1', 3, 103, b'0'),
(111, 'Bebidas al 3 x 2 de 10:00 a 14:00', 1, 104, b'0'),
(112, 'Bebidas al 3 x 2 de 10:00 a 14:00', 2, 104, b'0'),
(113, 'Bebidas al 3 x 2 de 10:00 a 14:00', 3, 104, b'0'),
(114, 'Bebidas al 3 x 2 de 10:00 a 14:00', 4, 104, b'0'),
(115, 'Waffle Original a 3 x 2', 2, 105, b'0'),
(116, 'Café del día a $19', 8, 106, b'0'),
(117, 'Cumpleañeros haburguesa gratis', 8, 107, b'1');

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
  MODIFY `id_i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de la tabla `negocio`
--
ALTER TABLE `negocio`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

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
