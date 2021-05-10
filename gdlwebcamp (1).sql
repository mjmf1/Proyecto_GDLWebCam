-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-05-2021 a las 20:16:33
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gdlwebcamp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_evento`
--

CREATE TABLE `categoria_evento` (
  `id_categoria` tinyint(10) NOT NULL,
  `cat_evento` varchar(50) NOT NULL,
  `icono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria_evento`
--

INSERT INTO `categoria_evento` (`id_categoria`, `cat_evento`, `icono`) VALUES
(1, 'Seminario', 'fa-university'),
(2, 'Conferencias', 'fa-comments'),
(3, 'Talleres', 'fa-code');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `evento_id` tinyint(10) NOT NULL,
  `nombre_evento` varchar(60) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `id_cat_evento` tinyint(10) NOT NULL,
  `id_inv` tinyint(4) NOT NULL,
  `clave` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `id_cat_evento`, `id_inv`, `clave`) VALUES
(2, 'Responsive Web Design', '2019-05-25', '10:00:00', 3, 1, 'taller_01'),
(3, 'Flexbox', '2019-05-25', '12:00:00', 3, 2, 'taller_02'),
(4, 'HTML5 y CSS3', '2019-05-25', '14:00:00', 3, 3, 'taller_03'),
(5, 'Drupal', '2019-05-25', '17:00:00', 3, 4, 'taller_04'),
(6, 'WordPress', '2019-05-25', '19:00:00', 3, 5, 'taller_05'),
(7, 'Como ser freelancer', '2019-05-25', '10:00:00', 2, 6, 'conf_01'),
(8, 'Tecnologías del Futuro', '2019-05-25', '17:00:00', 2, 1, 'conf_02'),
(9, 'Seguridad en la Web', '2019-05-25', '19:00:00', 2, 2, 'conf_03'),
(10, 'Diseño UI y UX para móviles', '2019-05-25', '10:00:00', 1, 6, 'sem_01'),
(11, 'AngularJS', '2019-05-26', '10:00:00', 3, 1, 'taller_06'),
(12, 'PHP y MySQL', '2019-05-26', '12:00:00', 3, 2, 'taller_07'),
(13, 'JavaScript Avanzado', '2019-05-26', '14:00:00', 3, 3, 'taller_08'),
(14, 'SEO en Google', '2019-05-26', '17:00:00', 3, 4, 'taller_09'),
(15, 'De Photoshop a HTML5 y CSS3', '2019-05-26', '19:00:00', 3, 5, 'taller_10'),
(16, 'PHP Intermedio y Avanzado', '2019-05-26', '21:00:00', 3, 6, 'taller_11'),
(17, 'Como crear una tienda online que venda millones en pocos día', '2019-05-26', '10:00:00', 2, 6, 'conf_04'),
(18, 'Los mejores lugares para encontrar trabajo', '2019-05-26', '17:00:00', 2, 1, 'conf_05'),
(19, 'Pasos para crear un negocio rentable ', '2019-05-26', '19:00:00', 2, 2, 'conf_06'),
(20, 'Aprende a Programar en una mañana', '2019-05-26', '10:00:00', 1, 3, 'sem_02'),
(21, 'Diseño UI y UX para móviles', '2019-05-26', '17:00:00', 1, 5, 'sem_03'),
(22, 'Laravel', '2019-05-27', '10:00:00', 3, 1, 'taller_12'),
(23, 'Crea tu propia API', '2019-05-27', '12:00:00', 3, 2, 'taller_13'),
(24, 'JavaScript y jQuery', '2019-05-27', '14:00:00', 3, 3, 'taller_14'),
(25, 'Creando Plantillas para WordPress', '2019-05-27', '17:00:00', 3, 4, 'taller_15'),
(26, 'Tiendas Virtuales en Magento', '2019-05-27', '19:00:00', 3, 5, 'taller_16'),
(27, 'Como hacer Marketing en línea', '2019-05-27', '10:00:00', 2, 6, 'conf_07'),
(28, '¿Con que lenguaje debo empezar?', '2019-05-27', '17:00:00', 2, 2, 'conf_08'),
(29, 'Frameworks y librerias Open Source', '2019-05-27', '19:00:00', 2, 3, 'conf_09'),
(30, 'Creando una App en Android en una mañana', '2019-05-27', '10:00:00', 1, 4, 'sem_04'),
(31, 'Creando una App en iOS en una tarde', '2019-05-27', '17:00:00', 1, 1, 'sem_05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

CREATE TABLE `invitados` (
  `invitado_id` tinyint(4) NOT NULL,
  `nombre_invitado` varchar(30) NOT NULL,
  `apellido_invitado` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `url_imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`invitado_id`, `nombre_invitado`, `apellido_invitado`, `descripcion`, `url_imagen`) VALUES
(1, 'Rafael', 'Bautista', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'invitado1.jpg'),
(2, 'Shari', 'Herrera', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'invitado2.jpg'),
(3, 'Gregorio', 'Sanchez', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'invitado3.jpg'),
(4, 'Susana', 'Rivera', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'invitado4.jpg'),
(5, 'Harild', 'Garcia', 'Aliquam sed nisl ante. Maecenas nec sem eget mauris hendrerit cursus. In maximus mi at purus scelerisque, vitae efficitur quam euismod.', 'invitado5.jpg'),
(6, 'Susan', 'Sanchez', 'Sed sit amet ligula lorem. Cras finibus nibh ut pretium faucibus. Aenean et malesuada turpis.', 'invitado6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regalos`
--

CREATE TABLE `regalos` (
  `ID_regalo` int(11) NOT NULL,
  `nombre_regalo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `regalos`
--

INSERT INTO `regalos` (`ID_regalo`, `nombre_regalo`) VALUES
(1, 'Pulsera'),
(2, 'Etiquetas'),
(3, 'Plumas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrados`
--

CREATE TABLE `registrados` (
  `ID_Registrado` bigint(20) UNSIGNED NOT NULL,
  `nombre_registrado` varchar(50) NOT NULL,
  `apellido_registrado` varchar(50) NOT NULL,
  `email_registrado` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `pases_articulos` longtext NOT NULL,
  `talleres_registrados` longtext NOT NULL,
  `regalo` int(11) NOT NULL,
  `total_pagado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registrados`
--

INSERT INTO `registrados` (`ID_Registrado`, `nombre_registrado`, `apellido_registrado`, `email_registrado`, `fecha_registro`, `pases_articulos`, `talleres_registrados`, `regalo`, `total_pagado`) VALUES
(1, 'Jorge', 'Alviarez', 'correo@correo.com', '2021-03-04 03:12:16', '{\"un_dia\":1,\"pase_completo\":1,\"pase_2dias\":2,\"camisas\":2,\"etiquetas\":6}', '{\"eventos\":[\"taller_01\",\"conf_03\",\"taller_09\",\"conf_04\",\"conf_06\",\"sem_02\",\"taller_14\",\"conf_08\",\"sem_04\"]}', 1, '200.6'),
(2, 'Jose', 'Perez', 'correo2@correo.com', '2021-03-04 03:15:12', '{\"un_dia\":4,\"pase_completo\":8,\"pase_2dias\":9,\"camisas\":12,\"etiquetas\":12}', '{\"eventos\":[\"taller_01\",\"taller_02\",\"taller_03\",\"taller_04\",\"taller_05\",\"conf_01\",\"conf_02\",\"conf_03\",\"sem_01\",\"taller_06\",\"taller_07\",\"taller_08\",\"taller_09\",\"taller_10\",\"taller_11\",\"conf_04\",\"conf_05\",\"conf_06\",\"sem_02\",\"sem_03\",\"taller_12\",\"taller_13\",\"taller_14\",\"taller_15\",\"taller_16\",\"conf_07\",\"conf_08\",\"conf_09\",\"sem_04\",\"sem_05\"]}', 3, '1060.6'),
(3, 'JORGE', 'F', 'c@a.aa', '2021-03-04 03:42:36', '{\"pase_completo\":1}', '[]', 2, '50'),
(4, 'JORGE', 'F', 'a4@a.aa', '2021-03-04 04:37:53', '{\"un_dia\":1}', '{\"eventos\":[\"conf_01\"]}', 2, '30'),
(5, 'JORGE', 'F', 'correo2@correo.com', '2021-03-04 04:42:57', '{\"pase_completo\":1}', '{\"eventos\":[\"conf_01\",\"conf_06\",\"sem_03\"]}', 1, '50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`evento_id`),
  ADD KEY `id_cat_evento` (`id_cat_evento`),
  ADD KEY `id_inv` (`id_inv`);

--
-- Indices de la tabla `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`invitado_id`);

--
-- Indices de la tabla `regalos`
--
ALTER TABLE `regalos`
  ADD PRIMARY KEY (`ID_regalo`);

--
-- Indices de la tabla `registrados`
--
ALTER TABLE `registrados`
  ADD PRIMARY KEY (`ID_Registrado`),
  ADD KEY `regalo` (`regalo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  MODIFY `id_categoria` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `evento_id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `invitados`
--
ALTER TABLE `invitados`
  MODIFY `invitado_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `regalos`
--
ALTER TABLE `regalos`
  MODIFY `ID_regalo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registrados`
--
ALTER TABLE `registrados`
  MODIFY `ID_Registrado` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_cat_evento`) REFERENCES `categoria_evento` (`id_categoria`),
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`id_inv`) REFERENCES `invitados` (`invitado_id`);

--
-- Filtros para la tabla `registrados`
--
ALTER TABLE `registrados`
  ADD CONSTRAINT `registrados_ibfk_1` FOREIGN KEY (`regalo`) REFERENCES `regalos` (`ID_regalo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
