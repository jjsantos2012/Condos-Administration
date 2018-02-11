-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2017 a las 03:40:56
-- Versión del servidor: 5.7.11
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `residencial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartamento`
--

CREATE TABLE `apartamento` (
  `id` varchar(20) NOT NULL,
  `edificioID` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `apartamento`
--

INSERT INTO `apartamento` (`id`, `edificioID`) VALUES
('3-B', '200-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balance`
--

CREATE TABLE `balance` (
  `id` int(100) NOT NULL,
  `edificioID` varchar(100) NOT NULL,
  `apartamentoID` varchar(100) NOT NULL,
  `Balance` varchar(100) NOT NULL,
  `fechaactua` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edificio`
--

CREATE TABLE `edificio` (
  `id` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `edificio`
--

INSERT INTO `edificio` (`id`, `nombre`) VALUES
('200-12', 'rosa maria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialserv`
--

CREATE TABLE `historialserv` (
  `id` varchar(144) NOT NULL,
  `servicioID` varchar(144) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(144) NOT NULL,
  `edificioID` varchar(100) NOT NULL,
  `apartamentoID` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historialserv`
--

INSERT INTO `historialserv` (`id`, `servicioID`, `fecha`, `comentario`, `edificioID`, `apartamentoID`) VALUES
('1', 'PSC-88', '2017-06-06', 'nuevo', '200-12', '3-B'),
('2', 'C-16', '2017-06-04', 'nuevo', '200-12', '3-B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialvisit`
--

CREATE TABLE `historialvisit` (
  `id` int(100) NOT NULL,
  `apartamentoID` varchar(144) NOT NULL,
  `nombre` varchar(144) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `motivo` varchar(144) NOT NULL,
  `edificioID` varchar(144) NOT NULL,
  `fecha` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historialvisit`
--

INSERT INTO `historialvisit` (`id`, `apartamentoID`, `nombre`, `cedula`, `motivo`, `edificioID`, `fecha`) VALUES
(1, '3-B', 'Julio Montero', '40224332854', 'jugar', '200-12', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `id` varchar(100) NOT NULL,
  `edificioID` varchar(20) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `clave` varchar(60) NOT NULL,
  `apartamentoID` varchar(144) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`id`, `edificioID`, `nombre`, `cedula`, `clave`, `apartamentoID`) VALUES
('DELOJU6', '200-12', 'Juan De los santos', '100', '2212', '3-B'),
('RDLPeguero', '200-12', 'Ramon Peguero', '456', '4562', '1-A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` varchar(20) NOT NULL,
  `titulo` varchar(144) NOT NULL,
  `edificioID` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `titulo`, `edificioID`) VALUES
('PSC-88', 'Piscina', '200-12'),
('C-16', 'Corte de cesped', '200-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviciocomun`
--

CREATE TABLE `serviciocomun` (
  `id` int(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `edificioID` varchar(100) NOT NULL,
  `fechaprogramada` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `serviciocomun`
--

INSERT INTO `serviciocomun` (`id`, `titulo`, `edificioID`, `fechaprogramada`, `estado`) VALUES
(1, 'GAS', '200-12', '27-09-2017', 'Alto'),
(2, 'Corte de cesped', '200-12', '5-10-2017', 'Pendiente'),
(3, 'Corte de cesped', '200-12', '5-10-2017', 'Pendiente'),
(4, 'Fumigacion', '200-12', '5-10-2017', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartamento`
--
ALTER TABLE `apartamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `edificioID` (`edificioID`);

--
-- Indices de la tabla `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `edificio`
--
ALTER TABLE `edificio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historialserv`
--
ALTER TABLE `historialserv`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historialvisit`
--
ALTER TABLE `historialvisit`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `serviciocomun`
--
ALTER TABLE `serviciocomun`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuaeio` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `balance`
--
ALTER TABLE `balance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `historialvisit`
--
ALTER TABLE `historialvisit`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `serviciocomun`
--
ALTER TABLE `serviciocomun`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
