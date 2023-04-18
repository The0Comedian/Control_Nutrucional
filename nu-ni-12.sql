-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2023 a las 05:10:42
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nu-ni-12`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infousers`
--

CREATE TABLE `infousers` (
  `id` int(15) NOT NULL,
  `id_users` int(15) NOT NULL,
  `Nombres` varchar(155) NOT NULL,
  `apelli_Paterno` varchar(155) NOT NULL,
  `apelli_Materno` varchar(155) NOT NULL,
  `Sexo` int(11) NOT NULL,
  `fec_nacimiento` int(10) NOT NULL,
  `edad` int(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculaobs`
--

CREATE TABLE `matriculaobs` (
  `idobs` int(11) NOT NULL,
  `idalumno` int(11) DEFAULT NULL,
  `codalumno` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `codmatri` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `obs` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla matricula observacion';

--
-- Volcado de datos para la tabla `matriculaobs`
--

INSERT INTO `matriculaobs` (`idobs`, `idalumno`, `codalumno`, `codmatri`, `fecha`, `obs`) VALUES
(62, 0, '', '', '2023-03-12', ''),
(66, 0, '', '', '2023-03-19', '666'),
(67, 3456, '56', '567', '2023-03-29', '678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `misdatos`
--

CREATE TABLE `misdatos` (
  `id` int(11) NOT NULL,
  `id_usuario` varchar(150) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `apelli_Paterno` varchar(255) NOT NULL,
  `apelli_Materno` varchar(255) NOT NULL,
  `Sexo` int(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `misdatos`
--

INSERT INTO `misdatos` (`id`, `id_usuario`, `nombre`, `apelli_Paterno`, `apelli_Materno`, `Sexo`, `fecha_nacimiento`, `edad`) VALUES
(1, 'puma@gmail.com', 'hola', 'bhjnkm', 'vgbhnj', 2, '1999-03-26', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallapeso`
--

CREATE TABLE `tallapeso` (
  `id` int(10) NOT NULL,
  `id_usuario` varchar(150) NOT NULL,
  `talla` float NOT NULL,
  `peso` float NOT NULL,
  `edad` float NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tallapeso`
--

INSERT INTO `tallapeso` (`id`, `id_usuario`, `talla`, `peso`, `edad`, `fecha`) VALUES
(1, 'puma@gmail.com', 1.12, 20, 7, '2023-04-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userlocal`
--

CREATE TABLE `userlocal` (
  `id` int(15) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `Contraseña` varchar(255) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `userlocal`
--

INSERT INTO `userlocal` (`id`, `Nombre`, `usuario`, `Contraseña`, `Fecha`) VALUES
(5, 'Usuario', 'ea.03@gmail.com', '200', '2023-03-07'),
(6, 'uriel', 'modox@gmail.com', 'nueva', '2023-03-07'),
(7, 'Nuevo', 'puma@gmail.com', '12345', '2023-03-11'),
(12, 'fvgbh', 'user@gmail.com', 'nuevos', '2023-03-29'),
(21, 'prubas2', '', '', '0000-00-00'),
(22, 'Docente001', 'userprueba@gmail.com', '', '0000-00-00'),
(23, 'Doc', 'userprueba123@gmail.com', '', '0000-00-00'),
(24, 'calvin', 'userprueba11@gmail.com', '003', '0000-00-00'),
(25, 'calbin', 'userprueba12@gmail.com', '15', '0000-00-00'),
(26, 'calvin2', 'userprueba003@gmail.com', '15', '0000-00-00'),
(27, 'qqqqqqqqqqqqqq', 'ea.uriel.03@gmail.com', '12345', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `first_name` varchar(50) NOT NULL DEFAULT '',
  `last_name` varchar(50) NOT NULL DEFAULT '',
  `full_name` varchar(100) NOT NULL DEFAULT '',
  `picture` varchar(255) NOT NULL DEFAULT '',
  `verifiedEmail` int(11) NOT NULL DEFAULT 0,
  `token` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `full_name`, `picture`, `verifiedEmail`, `token`) VALUES
(15, 'easport.0326@gmail.com', 'Uriel', 'Ramirez', 'Uriel Ramirez', 'https://lh3.googleusercontent.com/a/AGNmyxbrzzbtnbHSPyYahAcHscX9E4nDknz2Tco-xRnMTA=s96-c', 1, '114954985669669959661'),
(16, 'ea.uriel.03@gmail.com', 'Uriel', 'Ramirez', 'Uriel Ramirez', 'https://lh3.googleusercontent.com/a/AGNmyxZt65PbgwcZCNEKzDGwg7DYzsxotzmJX2zf4ssJeg=s96-c', 1, '101106966522026194060');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `infousers`
--
ALTER TABLE `infousers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `matriculaobs`
--
ALTER TABLE `matriculaobs`
  ADD PRIMARY KEY (`idobs`);

--
-- Indices de la tabla `misdatos`
--
ALTER TABLE `misdatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tallapeso`
--
ALTER TABLE `tallapeso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `userlocal`
--
ALTER TABLE `userlocal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `infousers`
--
ALTER TABLE `infousers`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `matriculaobs`
--
ALTER TABLE `matriculaobs`
  MODIFY `idobs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `misdatos`
--
ALTER TABLE `misdatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tallapeso`
--
ALTER TABLE `tallapeso`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `userlocal`
--
ALTER TABLE `userlocal`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
