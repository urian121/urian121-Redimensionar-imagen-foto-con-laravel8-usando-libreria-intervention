-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2022 a las 03:23:47
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redimencionar_imagen_laravel_8`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_inmueble` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `numero_habitacion` int(11) DEFAULT NULL,
  `numero_bano` int(11) DEFAULT NULL,
  `numero_area` int(11) DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`id`, `tipo_inmueble`, `direccion`, `precio`, `numero_habitacion`, `numero_bano`, `numero_area`, `codigo`, `foto`, `estatus`, `created_at`, `updated_at`) VALUES
(1, 'Apartamento', 'Bogota', 5345345, 3, 11, 545345, 426, '1650838118_0.jfif', 'Destacado', '2022-04-25 03:08:38', '2022-04-25 03:08:38'),
(2, 'Casa', 'Bogotá', 150000, 3, 11, 120, 7061, '1650838160_2.PNG', 'Recomendado', '2022-04-25 03:09:20', '2022-04-25 03:09:20'),
(3, 'Casa', 'Bogotá', 150000, 3, 11, 120, 7061, '1650838297_2.PNG', 'Destacado', '2022-04-25 03:11:37', '2022-04-25 03:11:37'),
(4, 'Casa', 'Suba', 85000, 1, 11, 80, 9217, '1650838333_28.jpg', 'Recomendado', '2022-04-25 03:12:13', '2022-04-25 03:12:13'),
(5, 'Casa', 'Suba', 85000, 1, 11, 80, 9217, '1650838597_28.jpg', 'Destacado', '2022-04-25 03:16:37', '2022-04-25 03:16:37'),
(6, 'Casa', 'Suba', 85000, 1, 11, 80, 9217, '1650838870_28.jpg', 'Recomendado', '2022-04-25 03:21:10', '2022-04-25 03:21:10'),
(7, 'Finca', 'ewr', 432, 2, 11, 43, 7269, '1650840677_26.jpg', 'Destacado', '2022-04-25 03:51:17', '2022-04-25 03:51:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
