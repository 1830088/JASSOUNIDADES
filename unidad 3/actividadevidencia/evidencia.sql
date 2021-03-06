-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2021 a las 16:23:13
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evidencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `nombre`, `imagen`) VALUES
(10, 'a_1', 'img/artists/Barot_Bellingham_tn.jpg'),
(11, 'a_2', 'img/artists/Constance_Smith_tn.jpg'),
(12, 'a_3', 'img/artists/Hassum_Harrod_tn.jpg'),
(13, 'a_4', 'img/artists/Hillary_Goldwynn_tn.jpg'),
(14, 'a_5', 'img/artists/Jonathan_Ferrar_tn.jpg'),
(15, 'a_6', 'img/artists/LaVonne_LaRue_tn.jpg'),
(16, 'a_7', 'img/artists/Jennifer_Jerome_tn.jpg'),
(17, 'a_8', 'img/artists/Riley_Rewington_tn.jpg'),
(18, 'a_9', 'img/artists/Xhou_Ta_tn.jpg'),
(19, 'nombre', 'img/artists/Constance_Smith_tn.jpg'),
(20, 'nombre', 'img/artists/Constance_Smith_tn.jpg'),
(21, 'nombre', 'img/artists/Constance_Smith_tn.jpg'),
(22, 'nombre', 'img/artists/Constance_Smith_tn.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `compania` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `req` varchar(30) DEFAULT NULL,
  `comentario` varchar(100) DEFAULT NULL,
  `suscribirse` varchar(20) DEFAULT NULL,
  `cosas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `nombre`, `compania`, `correo`, `req`, `comentario`, `suscribirse`, `cosas`) VALUES
(9, 'Julio Resendez', 'Speedwagon Foundation', 'resende@gmail.com', 'Questions', 'En busca de experiencia laboral							', 'Si', 'Internet'),
(10, 'Julio Zuniga', 'Speedwagon Foundation', 'zuniga@gmail.com', 'Questions', 'En busca de experiencia laboral								', 'Si', 'Periodico'),
(11, 'Hector Varela', 'Speedwagon Foundation', 'varela@gmail.com', 'Comment', '	En busca de Experiencia laboral							', 'Si', 'Amigos'),
(12, 'Josep Joestar', 'Speedwagon Foundation', 'joestar@gmail.com', 'Comment', 'Migerundayo!!								', 'Si', 'idols');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`) VALUES
(1, 'Julio Resendez', 'fc03cdd64e9a14b1bec26dafd74418b1'),
(2, 'Julio Zuniga', '0ba657cdd6a12cd2f9fbbce5a8baad74'),
(3, 'Hector Varela', '4e5e9f78353597f84ad5f80927a86ab8');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
