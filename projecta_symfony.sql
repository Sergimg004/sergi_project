-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2023 a las 22:41:00
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `projecta_symfony`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre`, `correo`, `numero`, `tipo`, `activo`, `fecha_creacion`) VALUES
(2, 'Marc', 'marc123@gmail.com', 657549213, 'hotel', 1, '2023-02-26 22:28:30'),
(3, 'Dani', 'dani123@gmail.com', 698437612, 'hotel', 1, '2023-02-26 22:28:30'),
(4, 'Tom', 'marc123@gmail.com', 634127975, 'hotel', 1, '2023-02-26 22:28:30'),
(5, 'Toni', 'toni123@gmail.com', 654342672, 'hotel', 1, '2023-02-26 22:28:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_demo`
--

CREATE TABLE `tabla_demo` (
  `id` int(11) NOT NULL,
  `nombres` varchar(25) NOT NULL,
  `apellidos` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tabla_demo`
--

INSERT INTO `tabla_demo` (`id`, `nombres`, `apellidos`) VALUES
(3, 'Juan Carlos', 'Albarracin Flores'),
(4, 'Ester', 'Lozano Morales'),
(5, 'Mario', 'Ruiz Sotomayor'),
(6, 'Luis', 'Candoroso Quintana'),
(7, 'Maria', 'Valdivia Gonzalez'),
(8, 'Nil', 'Castillo Garcia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla_demo`
--
ALTER TABLE `tabla_demo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tabla_demo`
--
ALTER TABLE `tabla_demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
