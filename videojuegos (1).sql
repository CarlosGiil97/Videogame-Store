-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-02-2020 a las 16:24:59
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `videojuegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cesta`
--

CREATE TABLE `cesta` (
  `usuario` int(11) NOT NULL,
  `juego` int(11) NOT NULL,
  `ejemplar` int(11) NOT NULL,
  `fecha_compra` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `metodo_pago` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cesta`
--

INSERT INTO `cesta` (`usuario`, `juego`, `ejemplar`, `fecha_compra`, `metodo_pago`, `precio_venta`) VALUES
(1, 1, 1, '2020-01-23 09:00:39', 'tarjeta', 60),
(2, 2, 5, '2020-01-28 10:33:42', 'Paypal', 60),
(2, 3, 7, '2020-01-28 10:34:13', 'Tarjeta', 60),
(2, 1, 2, '2020-01-28 10:35:22', 'Paypal', 60),
(2, 3, 8, '2020-01-29 20:25:31', 'Transferencia', 60),
(2, 1, 4, '2020-02-12 13:30:02', 'Paypal', 60),
(2, 1, 2, '2020-02-12 13:39:07', 'Transferencia', 60),
(2, 1, 2, '2020-02-12 13:39:45', 'Transferencia', 60),
(2, 1, 2, '2020-02-12 13:41:05', 'Transferencia', 60),
(2, 1, 2, '2020-02-12 13:41:55', 'Transferencia', 60),
(2, 1, 1, '2020-02-12 13:44:50', 'Paypal', 60),
(2, 1, 1, '2020-02-12 15:34:38', 'Paypal', 60),
(2, 2, 5, '2020-02-12 16:28:08', 'Paypal', 20),
(2, 2, 6, '2020-02-12 16:28:24', 'Paypal', 20),
(2, 4, 10, '2020-02-12 20:28:01', 'Paypal', 25),
(2, 1, 4, '2020-02-12 20:28:01', 'Paypal', 60),
(2, 1, 4, '2020-02-14 10:39:02', 'Paypal', 60),
(2, 6, 11, '2020-02-14 10:45:49', 'Paypal', 60),
(2, 1, 4, '2020-02-14 10:45:49', 'Paypal', 60),
(4, 2, 6, '2020-02-16 18:40:36', 'Paypal', 20),
(2, 2, 6, '2020-02-17 11:08:43', 'Paypal', 20),
(2, 2, 6, '2020-02-17 11:09:08', 'Paypal', 20),
(2, 2, 6, '2020-02-17 11:10:12', 'Paypal', 20),
(4, 4, 10, '2020-02-17 11:19:25', 'Paypal', 25),
(4, 9, 15, '2020-02-17 11:19:25', 'Paypal', 50),
(4, 4, 10, '2020-02-17 11:22:10', 'Paypal', 25),
(4, 9, 15, '2020-02-17 11:22:10', 'Paypal', 50),
(4, 7, 13, '2020-02-17 11:23:33', 'Paypal', 60),
(4, 8, 14, '2020-02-17 11:23:33', 'Paypal', 60),
(4, 7, 13, '2020-02-17 11:24:38', 'Tarjeta Credito', 60),
(4, 7, 13, '2020-02-17 11:28:36', 'Transferencia', 60),
(4, 2, 6, '2020-02-17 11:30:59', 'Paypal', 20),
(4, 2, 6, '2020-02-17 11:32:50', 'Paypal', 20),
(4, 2, 6, '2020-02-17 11:33:58', 'Tarjeta Credito', 20),
(4, 8, 14, '2020-02-17 11:34:31', 'Transferencia', 60),
(4, 3, 8, '2020-02-17 11:36:37', 'Paypal', 60),
(4, 3, 8, '2020-02-17 11:37:04', 'Tarjeta Credito', 60),
(4, 6, 11, '2020-02-17 11:39:05', 'Tarjeta Credito', 60),
(4, 6, 11, '2020-02-17 11:39:27', 'Tarjeta Credito', 60),
(4, 7, 13, '2020-02-17 11:41:11', 'Tarjeta Credito', 60),
(2, 3, 8, '2020-02-18 17:23:52', 'Paypal', 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplar_juego`
--

CREATE TABLE `ejemplar_juego` (
  `num_ejemplar` int(11) NOT NULL,
  `juego` int(11) NOT NULL,
  `fecha_compra` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `costo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ejemplar_juego`
--

INSERT INTO `ejemplar_juego` (`num_ejemplar`, `juego`, `fecha_compra`, `costo`) VALUES
(1, 1, '2020-01-23 08:57:54', 20),
(2, 1, '2020-01-23 08:57:54', 20),
(3, 1, '2020-01-23 08:58:23', 30),
(4, 1, '2020-01-23 08:58:23', 30),
(5, 2, '2020-01-23 08:58:42', 35),
(6, 2, '2020-01-23 08:58:42', 35),
(7, 3, '2020-01-23 08:58:55', 15),
(8, 3, '2020-01-23 08:58:55', 25),
(9, 4, '2020-02-12 13:23:42', 25),
(10, 4, '2020-02-12 13:23:42', 25),
(11, 6, '2020-02-12 15:34:10', 25),
(12, 5, '2020-02-17 11:18:11', 20),
(13, 7, '2020-02-17 11:18:11', 25),
(14, 8, '2020-02-17 11:18:49', 15),
(15, 9, '2020-02-17 11:18:49', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_lanzamiento` datetime NOT NULL,
  `productora` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `ranking` int(50) NOT NULL,
  `pvp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `titulo`, `nombre`, `fecha_lanzamiento`, `productora`, `descripcion`, `ranking`, `pvp`) VALUES
(1, 'FIFA 20', 'FIFA 20', '2019-09-19 00:00:00', 'Electronics Arts', 'FIFA 20 es un videojuego de simulación de fútbol desarrollado por EA Sports, como parte de la serie FIFA de Electronic Arts. Está disponible en las plataformas de PlayStation 4, Xbox One, Microsoft Windows y Nintendo Switch. EA Sports lanzó la demo el 10 de septiembre de ese año y el juego el día 27 del mismo', 1, 60),
(2, 'FORNITE', 'FORNITE', '2018-01-01 00:00:00', 'Epic Gamess', 'Fortnite es un videojuego del año 2017 desarrollado por la empresa Epic Games, lanzado como diferentes paquetes de software que presentan diferentes modos de juego, pero que comparten el mismo motor general de juego y las mecánicas. Fue anunciado en los Spike Video Game Awards en 2011', 2, 20),
(3, 'COD BO4', 'COD BO4', '2018-10-18 00:00:00', 'Activision', 'Call of Duty: Black Ops 4 es un videojuego de acción y disparos en primera persona, desarrollado por Treyarch y distribuido por Activision, para las plataformas PlayStation 4, Xbox One y Microsoft Windows', 3, 60),
(4, 'GTA V', 'GTA V', '2016-11-09 00:00:00', 'Rockstar', 'Grand Theft Auto V: Premium Online Edition para PlayStation 4 y Xbox One incluye la experiencia completa de la historia de Grand Theft Auto V, acceso gratuito al mundo siempre en evolución de Grand Theft Auto Online y a todas las mejoras jugables y de contenido de Golpe del Juicio Final, Tráfico de armas, Smuggler’s Run, Moteros y mucho más. También tendrás acceso a Criminal Enterprise Starter Pack, la forma más rápida de impulsar tu imperio criminal en Grand Theft Auto Online.', 5, 25),
(5, 'PES 2020', 'PES 2020', '2019-09-10 00:00:00', 'Konami', 'eFootball PES 2020 marca el comienzo de una nueva década en tecnología líder en la simulación de fútbol con una valiente promesa de revolucionar el eFootball y llevar el deporte a una audiencia mundial. La serie PES continúa su búsqueda del realismo, teniendo en cuenta los comentarios de los fans para traer varios impactantes cambios que impulsan cada momento del juego con una sensación de completa libertad y control. ', 6, 60),
(6, 'DRAGON BALL Z ', 'DRAGON BALL Z KAKAROT', '2019-08-02 00:00:00', 'E3', 'Hazte con Dragon Ball Z: Kakarot en GAME. Uno de los juegos más esperados del año y que después de lo visto en este último E3 promete estar a la altura del universo creado por Akira Toriyama. Vive el anime como nunca antes lo habrías imaginado en este espectacular RPG de acción.\r\n', 4, 60),
(7, 'NEED FOR SPEED', 'NEED FOR SPEED', '2017-01-04 00:00:00', 'Electronics Arts', 'No pares por el día y arriésgalo todo de noche en Need for Speed Heat para PlayStation 4, Xbox One y PC, una emocionante experiencia de conducción que te enfrenta a la fuerza policial corrupta de una ciudad mientras te abres camino hacia la élite de las carreras callejeras. Durante el día compite en Speedhunter Showdown, una competición autorizada en la que ganar fondos para personalizar y mejorar tu garaje de coches de alto rendimiento.', 7, 60),
(8, 'GOD OF WAR', 'GOD OF WAR', '2019-08-01 00:00:00', 'Sony Interactive', 'Desde épicos juegos galardonados hasta favoritos para toda la familia, PlayStation Hits ofrece una increíble colección que incluye más de 20 de los títulos de PS4 más queridos, a los que pronto se añadirán nuevos títulos.', 9, 60),
(9, 'FIFA 19', 'FIFA 19', '2018-12-12 00:00:00', 'EA', 'Fifa 19', 8, 50);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `la`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `la` (
`num_ejemplar` int(11)
,`juego` int(11)
,`fecha_compra` datetime
,`costo` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(9) NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `perfil` enum('Administrador','Cliente','Tienda','') COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `verificado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `direccion`, `telefono`, `email`, `contrasena`, `perfil`, `fecha_registro`, `verificado`) VALUES
(1, 'Admin', 'Admin', 'Calle Admin', 655458890, 'admin@gmail.com', '1234', 'Administrador', '2020-01-22 13:38:27', 0),
(2, 'Carlitos', 'Gil Terriente', 'Calle Galicia Nº7', 633654480, 'carlosgilterriente@gmail.com', '1234', 'Cliente', '2020-01-27 00:00:00', 1),
(3, 'Tienda', 'Tienda', 'Calle Tienda', 677128910, 'tienda@gmail.com', '1234', 'Tienda', '2020-01-27 13:20:58', 1),
(4, 'cliente', 'cliente', 'cliente', 688349812, 'cliente@gmail.com', '1234', 'Cliente', '2020-02-16 15:37:57', NULL);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios_clientes`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `usuarios_clientes` (
`nombre` varchar(100)
,`apellidos` varchar(100)
,`direccion` varchar(100)
,`telefono` int(9)
,`email` varchar(40)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `venta_diaria`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `venta_diaria` (
`ganado_dia` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `la`
--
DROP TABLE IF EXISTS `la`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `la`  AS  select `ejemplar_juego`.`num_ejemplar` AS `num_ejemplar`,`ejemplar_juego`.`juego` AS `juego`,`ejemplar_juego`.`fecha_compra` AS `fecha_compra`,`ejemplar_juego`.`costo` AS `costo` from `ejemplar_juego` limit 2 ;

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios_clientes`
--
DROP TABLE IF EXISTS `usuarios_clientes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_clientes`  AS  select `usuarios`.`nombre` AS `nombre`,`usuarios`.`apellidos` AS `apellidos`,`usuarios`.`direccion` AS `direccion`,`usuarios`.`telefono` AS `telefono`,`usuarios`.`email` AS `email` from `usuarios` where (`usuarios`.`perfil` = 'Cliente') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `venta_diaria`
--
DROP TABLE IF EXISTS `venta_diaria`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `venta_diaria`  AS  select sum(`cesta`.`precio_venta`) AS `ganado_dia` from `cesta` where date_format(now(),'%m-%d-%Y') ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cesta`
--
ALTER TABLE `cesta`
  ADD KEY `usuario` (`usuario`) USING BTREE,
  ADD KEY `juego` (`juego`),
  ADD KEY `cesta_ibfk_2` (`juego`,`ejemplar`);

--
-- Indices de la tabla `ejemplar_juego`
--
ALTER TABLE `ejemplar_juego`
  ADD PRIMARY KEY (`num_ejemplar`),
  ADD KEY `juego` (`juego`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titulo` (`titulo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telefono` (`telefono`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ejemplar_juego`
--
ALTER TABLE `ejemplar_juego`
  MODIFY `num_ejemplar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cesta`
--
ALTER TABLE `cesta`
  ADD CONSTRAINT `cesta_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cesta_ibfk_2` FOREIGN KEY (`juego`,`ejemplar`) REFERENCES `ejemplar_juego` (`juego`, `num_ejemplar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ejemplar_juego`
--
ALTER TABLE `ejemplar_juego`
  ADD CONSTRAINT `ejemplar_juego_ibfk_1` FOREIGN KEY (`juego`) REFERENCES `juegos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
