-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2020 a las 18:01:08
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `arrien_dos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliado`
--

CREATE TABLE `afiliado` (
  `ID_Afiliado` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `fecha_afiliacion` datetime NOT NULL,
  `aleatorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `afiliado`
--

INSERT INTO `afiliado` (`ID_Afiliado`, `nombre`, `apellido`, `cedula`, `telefono`, `correo`, `fecha_afiliacion`, `aleatorio`) VALUES
(8, 'Pablo', 'Cabeza', '12728036', '2315732', 'pcabeza7@gmail.com', '2020-01-02 22:18:04', 16667308),
(120, 'Silvia', 'Noriega', '1234938', '2147483647', 'silvia@gmail.com', '2020-02-24 08:40:40', 0),
(174, 'Juan Carlos', 'Cabe qwwq', '123421', '1233121', 'juan@gmail.com', '2020-03-16 10:55:30', 0),
(178, 'Llll', 'Lllll', '111', '111', 'lll@ll.clm', '2020-04-12 12:31:33', 0),
(179, 'Norte de Santander', 'Pamplona', 'qqqq', 'qq', '3', '2020-04-19 21:43:27', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arrendadoras`
--

CREATE TABLE `arrendadoras` (
  `ID_Arrendadora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `ID_Imagen` int(11) NOT NULL,
  `ID_Afiliado` int(11) NOT NULL,
  `ID_Inmueble` int(11) NOT NULL,
  `nombre_img` varchar(100) NOT NULL,
  `tipoArchivo` varchar(10) NOT NULL,
  `tamanoArchivo` varchar(20) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`ID_Imagen`, `ID_Afiliado`, `ID_Inmueble`, `nombre_img`, `tipoArchivo`, `tamanoArchivo`, `fecha`) VALUES
(76, 8, 29, 'images_3.jpg', '', '', '0000-00-00'),
(77, 8, 29, 'images_4.jpeg', '', '', '0000-00-00'),
(78, 8, 29, 'images_5.jpg', '', '', '0000-00-00'),
(79, 8, 29, 'images_6.jpg', '', '', '0000-00-00'),
(80, 8, 29, 'images_7.jpeg', '', '', '0000-00-00'),
(91, 120, 34, 'Chrysanthemum.jpg', '', '', '0000-00-00'),
(92, 120, 34, 'Desert.jpg', '', '', '0000-00-00'),
(93, 120, 34, 'Hydrangeas.jpg', '', '', '0000-00-00'),
(94, 120, 34, 'Jellyfish.jpg', '', '', '0000-00-00'),
(95, 120, 34, 'Koala.jpg', '', '', '0000-00-00'),
(98, 8, 28, '30e901a2965c39f84d70e5e37c6ab210.jpg', '', '', '0000-00-00'),
(99, 8, 28, 'horebi PWA.jpg', '', '', '0000-00-00'),
(100, 8, 28, 'IMG-20180818-WA0005.jpg', '', '', '0000-00-00'),
(101, 8, 28, 'IMG-20180818-WA0006.jpg', '', '', '0000-00-00'),
(102, 8, 28, 'IMG-20180818-WA0007.jpg', '', '', '0000-00-00'),
(107, 8, 37, 'cancerdemama_1_.jpg', '', '', '0000-00-00'),
(108, 8, 37, 'dia de la mujer.jpg', '', '', '0000-00-00'),
(109, 8, 37, 'Ictus.jpg', '', '', '0000-00-00'),
(110, 8, 37, 'Ictus-isquémico.jpg', '', '', '0000-00-00'),
(111, 8, 37, 'intersexsualidad.jpg', '', '', '0000-00-00'),
(128, 8, 64, 'FundacionCarlosSlim_1.jpg', 'image/jpeg', '100035', '2020-03-13'),
(129, 8, 64, 'FundacionCarlosSlim_2.jpg', 'image/jpeg', '117731', '2020-03-13'),
(130, 8, 64, 'FundacionCarlosSlim_3.jpg', 'image/jpeg', '98141', '2020-03-13'),
(131, 8, 64, 'Google_1.jpg', 'image/jpeg', '95452', '2020-03-13'),
(132, 8, 64, 'Google_2.jpg', 'image/jpeg', '94404', '2020-03-13'),
(135, 8, 65, '10405612_922972084433920_7852253946964798970_n.jpg', 'image/jpeg', '31637', '2020-03-18'),
(136, 8, 65, '10606444_869341043089811_9186129342283433217_n.jpg', 'image/jpeg', '117124', '2020-03-18'),
(137, 8, 65, '10690281_10204707629466919_1479289193141800364_n.jpg', 'image/jpeg', '22551', '2020-03-18'),
(138, 8, 65, '11659520_402645213193427_3402334283124489552_n.jpg', 'image/jpeg', '75366', '2020-03-18'),
(139, 8, 65, '11796212_1619285628314543_5814297787728730671_n.jpg', 'image/jpeg', '63549', '2020-03-18'),
(142, 8, 69, 'Bicicleta_Cervelo.jpg', 'image/jpeg', '138149', '2020-04-12'),
(143, 8, 69, 'Camioneta_Toyota.jpg', 'image/jpeg', '96688', '2020-04-12'),
(144, 8, 69, 'Moto_Yamaha.jpg', 'image/jpeg', '24273', '2020-04-12'),
(145, 8, 69, 'palio-adventure.jpg', 'image/jpeg', '97369', '2020-04-12'),
(146, 8, 69, 'Yamaha_BWS.png', 'image/png', '257775', '2020-04-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `ID_Afiliado` int(11) NOT NULL,
  `clave` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `ID_Afiliado`, `clave`) VALUES
(3, 8, '$2y$10$XFKmeSFblPgen52M/j6In.objnoeJIT9Xo5KPWMDeGy1DKNbwZoZi'),
(9, 120, '$2y$10$I6D5PYsMxApzOckyN53Tp.YryDwIgppU.yxVmuZnzq.XnaLc6gPM.'),
(10, 121, '$2y$10$i6AJ1nNleAN0eEQbDFpby.D3R7oZbXycksC.BIqZELdGaATuDBMPe'),
(11, 121, '$2y$10$ZOrf5BDpaKBGUwKi41dZMenJ2NgdOtBVyC.qReew7Diu2Sn/bJAou'),
(12, 121, '$2y$10$RZULqaVmOJAcsHsH6Ry8NuO82/DY51gCrG82PKpf6YLA5wz/i9/iG'),
(13, 121, '$2y$10$CPHOpU10ZY7L5fdJeTul8.Ve4V1Tsn2c6ARwOq5uclnC/GBVLTMCy'),
(14, 121, '$2y$10$80VxSjrmeaB0Wu0qqYitH.r.6J.gv6vp0COuMbzxHuDFzAvCwxY5K'),
(15, 121, '$2y$10$hMgPj7I4VisWYfOp6KUYFecX1T0sqdx9bJFqvZUSw9iPxrI5l2fMC'),
(16, 121, '$2y$10$rpe2omW4H0AoPm7qiPbYlel7V2zk9kJqyJrxr6b714XgeSN4pTCcC'),
(17, 121, '$2y$10$8N6pPuxjXPEhnosjP5m5x.Knhce6jlBQg1m7w2p2sq5SUGeFUr65O'),
(18, 121, '$2y$10$6VX9Tm6dqq0YDeEM3926pe8/iysW5/CdnSJTrfZb2BjqQfOS8LCa6'),
(19, 121, '$2y$10$X4f7RtyZZ8W.nMLyJVd/peSvLpkFUkvYoLC4UymPKu04Q/4KKDHfS'),
(20, 174, '$2y$10$rbdF5jz25GCHZ3vIrwCV0efOxdvyfnBvichYKQbyrInV1KzFd1VnS'),
(21, 174, '$2y$10$Qg4I7hwpqx80mi1BHyYXhu6iLA/HExJ2SmvznrldcVJBGecVdeUSm'),
(22, 174, '$2y$10$F2vUniVpzvOYJm2pJi48ru7hyAjjSn2l3Z5Njfr3hKDBw.A1i0dNK'),
(23, 174, '$2y$10$7cxyukE2JF5hHqgQfEqNd.R2XK82DLo0t679s5aGUMdaDia.9ZPNW'),
(24, 174, '$2y$10$OrNDwueHcCzxuZvU02VQJ.AVBUItV/IPkRvafCpdPGQ5pKOdgTYle'),
(25, 174, '$2y$10$D/SXGaI0coUxtT9NWZSQx..tlI8n9/VeD/rA9xCzSePU05.ofi4Z.'),
(26, 174, '$2y$10$lP4scbuEVHLJQ.AFcitM9uAKzwEGNn7YkP.E7Z4E3twOyRpAWimRy'),
(27, 174, '$2y$10$G2BNW7upcdVhc8cAYbUx2O8X.afq82Hkn3pdl4/dfosHHiz8whUhW'),
(28, 174, '$2y$10$wF4QNCJDnqYmJqKubbIue.qMB.B5k12GOVWVMdOoUtlxHDjnznT.y'),
(29, 183, '$2y$10$J4ilh3gtMFVNkt0xcLjHjObJ.Qt5xahZPUz4dFpY/JqCSWHwtKkb.'),
(30, 183, '$2y$10$OaV5XsAvKJWG3SFjNnTCquUVuwQS2s8TeXAYVOVQSke45fKZgTkbu'),
(31, 183, '$2y$10$Iw2FegYd/v9CB1UVkEFEeu0x/8wRwhir61LrbuHFfTqsHP6NZpb2q'),
(32, 183, '$2y$10$bMbaG9nebzKjLMOP8OEif.4ByqVtHpCzh6kqRM/QytUK5fhbaRDri'),
(33, 183, '$2y$10$8ulf7g8.fHhmN.kmkuK9O.VqFnls7/pS5nUYLP0LBB.GqiPDN0/.a'),
(34, 183, '$2y$10$rDdRJSNRu/QjpBwCeepfTuDgBzyhoTukdVmohVEkMRGP8QdPTniIW'),
(35, 183, '$2y$10$jhttp40yzxBc/dQBAvgYNefvhCkhHiNOhBDuYHsxza.J32s7dO5Ti'),
(36, 183, '$2y$10$6JBZ2of0h1l.sUbM11j7u.X1jLBaywM4NOWJWFMkJfQgRlQL5lm.a'),
(37, 183, '$2y$10$bm9cYCBucjDLfuwa0EYn9e.1.fbVioJgCM8WT8Gh0/nNbnuq3Q4l2'),
(38, 183, '$2y$10$dwrJ1yjTx4yYkkw72g7R3OVF6SJGF0LupihtHbVgYBqzMdTC/uPSC'),
(39, 183, '$2y$10$.V1wEfIyU7xTdkklxygslePWGy9HXmJ1CG6VzDa.nmBTYqWZw54ja'),
(40, 183, '$2y$10$KOOdVVmwAX8HPK0Jzhp2a.so/YKh1DUxWaUDFfCIf98bYJJzNTKYi'),
(41, 183, '$2y$10$PdGSVJrtkXBwJ2Y31O2pBOf5IhUEJD4V1v0E7Tdu1t1mqyMWJHA12'),
(42, 183, '$2y$10$YhntXCxU1F56kGL14/YO/Oyby6WPZ.TQ1WJ1xRyn9V0gxJwGA.LZC'),
(43, 183, '$2y$10$hBYCIxRBjHqb/cbLE9qnT.r5qWwe/zlG2V7HTFl51vE.7oHsiHyq.'),
(44, 198, '$2y$10$VE1Hk9XUWAWfY.kejaOPw.bCyIOAd.rBUZH0bM2FPpZBIcBPgsE5G'),
(45, 199, '$2y$10$b4yD.7sGymMEbuV5c/iYuOjdyPydtqI0Fib0pSA4mG3bNALmXNDg.'),
(46, 175, '$2y$10$KZ04mUsM8l99iiZv0PVpfegltz3VuzA3MFyoH7y5XUQ8CrjKe4Yoy'),
(47, 176, '$2y$10$T8DilQGcM5Aru5GjOeIgkelPwpxPPieuc4M1juMVyNpgUdPqam.Ca'),
(48, 177, '$2y$10$2ZjJf2X6yl8Wy3rG36v/Gew8l1K9CirVr8tXwAPGNcYHIP5prF/g.'),
(49, 178, '$2y$10$WBA.4I6/J3Syg0rJf6HMGOJeRf.bzxkB5Cr0Z8bfMTH65yzjm1Cvy'),
(50, 179, '$2y$10$DmwK/WQUJ1QbqrS3syOYT.J6f8U6VAxavHela1ECcy5T2mQlIkc6e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afiliado`
--
ALTER TABLE `afiliado`
  ADD PRIMARY KEY (`ID_Afiliado`);

--
-- Indices de la tabla `arrendadoras`
--
ALTER TABLE `arrendadoras`
  ADD PRIMARY KEY (`ID_Arrendadora`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`ID_Imagen`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `afiliado`
--
ALTER TABLE `afiliado`
  MODIFY `ID_Afiliado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT de la tabla `arrendadoras`
--
ALTER TABLE `arrendadoras`
  MODIFY `ID_Arrendadora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `ID_Imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
