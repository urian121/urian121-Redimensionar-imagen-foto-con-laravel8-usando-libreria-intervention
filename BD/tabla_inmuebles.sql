-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2022 a las 04:18:48
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
(1, 'Casa Campestre', 'Suba', 560000000, 4, 3, 120, 1304, '1651975552.jpg', 'Destacado', '2022-05-08 07:05:52', '2022-05-08 07:05:52'),
(2, 'Apartamento', 'Bogotá', 350000000, 3, 2, 190, 6270, '1651975602.jpg', 'Recomendado', '2022-05-08 07:06:48', '2022-05-08 07:06:48'),
(3, 'Apartamento', 'Cali', 290000000, 3, 2, 180, 3859, '1651975662.jpeg', 'Destacado', '2022-05-08 07:07:43', '2022-05-08 07:07:43'),
(4, 'Lote', 'Bogotá', 460000000, 1, 2, 530, 8204, '1651975778.jpg', 'Recomendado', '2022-05-08 07:09:38', '2022-05-08 07:09:38'),
(5, 'Apartamento', 'Fontibón', 810000000, 3, 2, 230, 4692, '1651975847.jpeg', 'Destacado', '2022-05-08 07:10:47', '2022-05-08 07:10:47'),
(7, 'Apartamento', 'Bogotá', 980000000, 4, 3, 300, 4685, '1651976056.webp', 'Recomendado', '2022-05-08 07:14:16', '2022-05-08 07:14:16'),
(8, 'Apartamento', 'Suba', 190000000, 1, 1, 100, 8452, '1651976126.PNG', 'Recomendado', '2022-05-08 07:15:27', '2022-05-08 07:15:27');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
