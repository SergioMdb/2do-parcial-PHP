-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2026 a las 19:34:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpavanzado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id` int(11) NOT NULL,
  `unidad` varchar(30) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id`, `unidad`, `fecha`) VALUES
(5, '1', '2026-09-16'),
(6, 'Base de datos', '2026-09-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(5) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `nombre`, `apellido`, `correo`, `comentario`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, '', '', '', ''),
(31, '', '', '', ''),
(32, '', '', '', ''),
(33, '', '', '', ''),
(34, '', '', '', ''),
(35, '', '', '', ''),
(36, '', '', '', ''),
(37, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, '', '', '', ''),
(47, '', '', '', ''),
(48, '', '', '', ''),
(49, '', '', '', ''),
(50, '', '', '', ''),
(51, '', '', '', ''),
(52, '', '', '', ''),
(53, '', '', '', ''),
(54, '', '', '', ''),
(55, '', '', '', ''),
(56, '', '', '', ''),
(57, '', '', '', ''),
(58, '', '', '', ''),
(59, '', '', '', ''),
(60, '', '', '', ''),
(61, '', '', '', ''),
(62, '', '', '', ''),
(63, '', '', '', ''),
(64, '', '', '', ''),
(65, '', '', '', ''),
(66, '', '', '', ''),
(67, '', '', '', ''),
(68, '', '', '', ''),
(69, '', '', '', ''),
(70, '', '', '', ''),
(71, '', '', '', ''),
(72, '', '', '', ''),
(73, '', '', '', ''),
(74, '', '', '', ''),
(75, '', '', '', ''),
(76, '', '', '', ''),
(77, '', '', '', ''),
(78, '', '', '', ''),
(79, '', '', '', ''),
(80, '', '', '', ''),
(81, '', '', '', ''),
(82, '', '', '', ''),
(83, '', '', '', ''),
(84, '', '', '', ''),
(85, '', '', '', ''),
(86, '', '', '', ''),
(87, '', '', '', ''),
(88, '', '', '', ''),
(89, '', '', '', ''),
(90, '', '', '', ''),
(91, '', '', '', ''),
(92, '', '', '', ''),
(93, '', '', '', ''),
(94, '', '', '', ''),
(95, '', '', '', ''),
(96, '', '', '', ''),
(97, '', '', '', ''),
(98, '', '', '', ''),
(99, '', '', '', ''),
(100, '', '', '', ''),
(101, '', '', '', ''),
(102, '', '', '', ''),
(103, '', '', '', ''),
(104, '', '', '', ''),
(105, '', '', '', ''),
(106, '', '', '', ''),
(107, '', '', '', ''),
(108, '', '', '', ''),
(109, '', '', '', ''),
(110, '', '', '', ''),
(111, '', '', '', ''),
(112, '', '', '', ''),
(113, '', '', '', ''),
(114, '', '', '', ''),
(115, '', '', '', ''),
(116, '', '', '', ''),
(117, '', '', '', ''),
(118, '', '', '', ''),
(119, '', '', '', ''),
(120, '', '', '', ''),
(121, '', '', '', ''),
(122, '', '', '', ''),
(123, '', '', '', ''),
(124, '', '', '', ''),
(125, '', '', '', ''),
(126, '', '', '', ''),
(127, '', '', '', ''),
(128, '', '', '', ''),
(129, '', '', '', ''),
(130, '', '', '', ''),
(131, '', '', '', ''),
(132, '', '', '', ''),
(133, '', '', '', ''),
(134, '', '', '', ''),
(135, '', '', '', ''),
(136, '', '', '', ''),
(137, '', '', '', ''),
(138, '', '', '', ''),
(139, '', '', '', ''),
(140, '', '', '', ''),
(141, '', '', '', ''),
(142, '', '', '', ''),
(143, '', '', '', ''),
(144, '', '', '', ''),
(145, '', '', '', ''),
(146, '', '', '', ''),
(147, '', '', '', ''),
(148, '', '', '', ''),
(149, '', '', '', ''),
(150, '', '', '', ''),
(151, '', '', '', ''),
(152, '', '', '', ''),
(153, '', '', '', ''),
(154, '', '', '', ''),
(155, '', '', '', ''),
(156, '', '', '', ''),
(157, '', '', '', ''),
(158, '', '', '', ''),
(159, '', '', '', ''),
(160, '', '', '', ''),
(161, '', '', '', ''),
(162, '', '', '', ''),
(163, '', '', '', ''),
(164, '', '', '', ''),
(165, '', '', '', ''),
(166, '', '', '', ''),
(167, '', '', '', ''),
(168, '', '', '', ''),
(169, '', '', '', ''),
(170, '', '', '', ''),
(171, '', '', '', ''),
(172, '', '', '', ''),
(173, '', '', '', ''),
(174, '', '', '', ''),
(175, '', '', '', ''),
(176, '', '', '', ''),
(177, '', '', '', ''),
(178, '', '', '', ''),
(179, '', '', '', ''),
(180, '', '', '', ''),
(181, '', '', '', ''),
(182, '', '', '', ''),
(183, '', '', '', ''),
(184, '', '', '', ''),
(185, '', '', '', ''),
(186, '', '', '', ''),
(187, '', '', '', ''),
(188, '', '', '', ''),
(189, '', '', '', ''),
(190, '', '', '', ''),
(191, '', '', '', ''),
(192, '', '', '', ''),
(193, '', '', '', ''),
(194, '', '', '', ''),
(195, '', '', '', ''),
(196, '', '', '', ''),
(197, '', '', '', ''),
(198, '', '', '', ''),
(199, '', '', '', ''),
(200, '', '', '', ''),
(201, '', '', '', ''),
(202, '', '', '', ''),
(203, '', '', '', ''),
(204, '', '', '', ''),
(205, '', '', '', ''),
(206, '', '', '', ''),
(207, '', '', '', ''),
(208, '', '', '', ''),
(209, '', '', '', ''),
(210, '', '', '', ''),
(211, '', '', '', ''),
(212, '', '', '', ''),
(213, '', '', '', ''),
(214, '', '', '', ''),
(215, '', '', '', ''),
(216, '', '', '', ''),
(217, '', '', '', ''),
(218, '', '', '', ''),
(219, '', '', '', ''),
(220, '', '', '', ''),
(221, 'sergio', 'blanco', 'sergio2004blanco@gmail.com', 'sadasdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `consulta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`nombre`, `apellido`, `email`, `consulta`) VALUES
('id_clase', 'Klug', 'marcos@klug.com', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` decimal(6,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `precio`) VALUES
(5, 'Qaed Al Fursan Intense', 'Perfume', 85000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_registro` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_registro`, `email`, `contrasena`) VALUES
(3, 'hola@gmail.com', '$2y$10$99YPN/jRzpVUZ26imfBnkutuIw2AG4KJjbNFghhABEaV.JKjLxGjW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
