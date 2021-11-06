-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2021 a las 18:01:33
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arrendadores`
--

CREATE TABLE `arrendadores` (
  `documento` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) DEFAULT NULL,
  `tel` int(11) NOT NULL,
  `cel` varchar(45) DEFAULT NULL,
  `correo` int(11) NOT NULL,
  `trabajo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arrendadores_has_propiedades`
--

CREATE TABLE `arrendadores_has_propiedades` (
  `id` int(11) NOT NULL,
  `arrendadores_documento` int(11) NOT NULL,
  `propiedades_id_lugar` int(11) NOT NULL,
  `fecha_arrendado` date DEFAULT NULL,
  `codeudor_documento1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `cel` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codeudores`
--

CREATE TABLE `codeudores` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `cel` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `ruta` varchar(145) NOT NULL,
  `propiedades_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `ruta`, `propiedades_id`) VALUES
(26, 'img/1.1.jpeg', 1),
(47, 'img/5.1.jpeg', 1),
(48, 'img/8.1.jpeg', 1),
(49, 'img/4.2.jpeg', 1),
(50, 'img/4.2.jpeg', 1),
(51, 'img/2.1.jpeg', 2),
(52, 'img/2.2.jpeg', 2),
(53, 'img/2.3.jpeg', 2),
(55, 'img/3.2.jpeg', 3),
(56, 'img/3.3.jpeg', 3),
(57, 'img/3.1.jpeg', 3),
(58, 'img/7.1.jpeg', 4),
(59, 'img/7.2.jpeg', 4),
(60, 'img/7.3.jpeg', 4),
(61, 'img/5.1.jpeg', 6),
(62, 'img/5.2.jpeg', 6),
(63, 'img/70.1.jpeg', 7),
(64, 'img/70.2.jpeg', 7),
(65, 'img/CERTIFICADO ICFES.jpg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id` int(11) NOT NULL,
  `tipo_propiedad` varchar(45) NOT NULL,
  `depto` varchar(45) NOT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `ubicacion` varchar(45) DEFAULT NULL,
  `tamano` varchar(30) DEFAULT NULL,
  `precio` int(10) UNSIGNED DEFAULT NULL,
  `descripcion` varchar(100) NOT NULL,
  `caracteristicas` varchar(155) NOT NULL,
  `disponibilidad` varchar(45) NOT NULL,
  `banos` int(11) DEFAULT NULL,
  `habitaciones` int(11) DEFAULT NULL,
  `propietarios_documento` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id`, `tipo_propiedad`, `depto`, `ciudad`, `ubicacion`, `tamano`, `precio`, `descripcion`, `caracteristicas`, `disponibilidad`, `banos`, `habitaciones`, `propietarios_documento`) VALUES
(1, 'Finca', 'Córdoba', 'Cereté', '', '', 0, 'Tronco de finca', 'Corrales, Piscina, Angleton, Caballerizas\n                                    ', 'En reparación', 0, 0, 1064),
(2, 'Finca', 'Córdoba', 'Montería', '', '', 0, 'Elegante la finca', 'Características\r\n                                    ', 'En reparación', 0, 0, 1064),
(3, 'Apartamento', 'Atlántico', 'Barranquilla', 'Centro', '', 0, 'Muy bien ubicada', 'Características\r\n                                    ', 'En reparación', 0, 0, 1064),
(4, 'Casa', 'Córdoba', 'Planeta Rica', 'Cerca de la plaza PPal', '120', 150000000, 'Esa es la casa que quiero', 'Hermosa casa con buena ventilacion, parqueadero, zona verde, cerca a colegios\r\n                                    ', 'Disponible', 3, 4, 30688240),
(5, 'Casa', 'Córdoba', 'Cienaga de Oro', '', '20m', 80000000, 'Comercial ubicado en el centro\n                                    ', 'Puerta eléctrica, baño enchapado, ventilador, luz a 220 v\r\n                                    ', 'Disponible', 1, 0, 30688240),
(6, 'Finca', 'Córdoba', 'Ayapel', 'Cienaga', '200', 200000000, 'Finca a la orilla de la cienaga facil acceso\r\n                                    ', 'Características de una buena finca con angleton, piscina, represa, potreros\r\n                                    ', 'Disponible', 1, 3, 30689),
(7, 'Finca', 'Córdoba', 'San Pelayo', '', '100', 300000000, 'Hermosa finca facil acceso', 'Casa Grande, Piscina, Represas, Coco, Angleton\r\n                                    ', 'Disponible', 2, 2, 30689);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `documento` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `cel` varchar(45) NOT NULL,
  `correo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`documento`, `nombre`, `apellido1`, `apellido2`, `tel`, `cel`, `correo`) VALUES
(1064, 'Javier', 'Fdez', 'De Castro', 0, '3218987867', ''),
(30689, 'Yinnola', 'García', 'Lora', 300817, '3099200', ''),
(30688240, 'Melissa ', 'Fernández ', 'De castro', 2147483647, '300918899', 'melissa@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idventas` int(11) NOT NULL,
  `propiedades_id_lugar` int(11) NOT NULL,
  `clientes_documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arrendadores`
--
ALTER TABLE `arrendadores`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `arrendadores_has_propiedades`
--
ALTER TABLE `arrendadores_has_propiedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `codeudores`
--
ALTER TABLE `codeudores`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idventas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arrendadores_has_propiedades`
--
ALTER TABLE `arrendadores_has_propiedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idventas` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
