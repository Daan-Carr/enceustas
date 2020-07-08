-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-07-2020 a las 06:21:58
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuestas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebida`
--

CREATE TABLE `bebida` (
  `id_bebida` int(11) NOT NULL,
  `opcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `bebida`
--

TRUNCATE TABLE `bebida`;
--
-- Volcado de datos para la tabla `bebida`
--

INSERT INTO `bebida` (`id_bebida`, `opcion`, `voto`, `seleccion`) VALUES
(1, 'Si', 0, 'a'),
(2, 'No', 0, 'b'),
(3, 'Muy Poco', 0, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `id_com` int(11) NOT NULL,
  `opcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `comida`
--

TRUNCATE TABLE `comida`;
--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`id_com`, `opcion`, `voto`, `seleccion`) VALUES
(1, 'Si', 0, 'a'),
(2, 'No', 0, 'b'),
(3, 'Otro', 0, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edad`
--

CREATE TABLE `edad` (
  `id_res` int(11) NOT NULL,
  `opcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `edad`
--

TRUNCATE TABLE `edad`;
--
-- Volcado de datos para la tabla `edad`
--

INSERT INTO `edad` (`id_res`, `opcion`, `voto`, `seleccion`) VALUES
(1, '10 a 20 de edad', 0, 'a'),
(2, '21 a 30 de edad', 0, 'b'),
(3, '31 en adelante', 0, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleo`
--

CREATE TABLE `empleo` (
  `id_empleo` int(11) NOT NULL,
  `opcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `empleo`
--

TRUNCATE TABLE `empleo`;
--
-- Volcado de datos para la tabla `empleo`
--

INSERT INTO `empleo` (`id_empleo`, `opcion`, `voto`, `seleccion`) VALUES
(1, 'Estudiar', 0, 'a'),
(2, 'Trabajar', 0, 'b'),
(3, 'Ninguna', 0, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fruta`
--

CREATE TABLE `fruta` (
  `id_fruta` int(11) NOT NULL,
  `opcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `fruta`
--

TRUNCATE TABLE `fruta`;
--
-- Volcado de datos para la tabla `fruta`
--

INSERT INTO `fruta` (`id_fruta`, `opcion`, `voto`, `seleccion`) VALUES
(1, 'Si', 0, 'a'),
(2, 'No', 0, 'b'),
(3, 'No lo se', 0, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musica`
--

CREATE TABLE `musica` (
  `id_music` int(11) NOT NULL,
  `opcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `musica`
--

TRUNCATE TABLE `musica`;
--
-- Volcado de datos para la tabla `musica`
--

INSERT INTO `musica` (`id_music`, `opcion`, `voto`, `seleccion`) VALUES
(1, 'Hombre', 0, 'a'),
(2, 'Mujer', 0, 'b'),
(3, 'Prefiero no contestar', 0, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novia`
--

CREATE TABLE `novia` (
  `id_novia` int(11) NOT NULL,
  `opcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `novia`
--

TRUNCATE TABLE `novia`;
--
-- Volcado de datos para la tabla `novia`
--

INSERT INTO `novia` (`id_novia`, `opcion`, `voto`, `seleccion`) VALUES
(1, 'Si', 0, 'a'),
(2, 'No', 0, 'b'),
(3, 'No Me Importa', 0, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id_peli` int(11) NOT NULL,
  `opcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `peliculas`
--

TRUNCATE TABLE `peliculas`;
--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id_peli`, `opcion`, `voto`, `seleccion`) VALUES
(1, 'Si', 0, 'a'),
(2, 'No', 0, 'b'),
(3, 'Me lo Prestan', 0, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuesta`
--

CREATE TABLE `propuesta` (
  `id_pro` int(11) NOT NULL,
  `opcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `propuesta`
--

TRUNCATE TABLE `propuesta`;
--
-- Volcado de datos para la tabla `propuesta`
--

INSERT INTO `propuesta` (`id_pro`, `opcion`, `voto`, `seleccion`) VALUES
(1, 'Si', 0, 'a'),
(2, 'No', 0, 'b'),
(3, 'No Me Importa', 0, 'c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `user` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `acceso` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Sin Contestar',
  `acceso2` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Sin Contestar'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `usuarios`
--

TRUNCATE TABLE `usuarios`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `virus`
--

CREATE TABLE `virus` (
  `id_virus` int(11) NOT NULL,
  `opcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `virus`
--

TRUNCATE TABLE `virus`;
--
-- Volcado de datos para la tabla `virus`
--

INSERT INTO `virus` (`id_virus`, `opcion`, `voto`, `seleccion`) VALUES
(1, 'Si', 0, 'a'),
(2, 'No', 0, 'b'),
(3, 'No lo se', 0, 'c');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebida`
--
ALTER TABLE `bebida`
  ADD PRIMARY KEY (`id_bebida`);

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`id_com`);

--
-- Indices de la tabla `edad`
--
ALTER TABLE `edad`
  ADD PRIMARY KEY (`id_res`);

--
-- Indices de la tabla `empleo`
--
ALTER TABLE `empleo`
  ADD PRIMARY KEY (`id_empleo`);

--
-- Indices de la tabla `fruta`
--
ALTER TABLE `fruta`
  ADD PRIMARY KEY (`id_fruta`);

--
-- Indices de la tabla `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`id_music`);

--
-- Indices de la tabla `novia`
--
ALTER TABLE `novia`
  ADD PRIMARY KEY (`id_novia`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id_peli`);

--
-- Indices de la tabla `propuesta`
--
ALTER TABLE `propuesta`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `virus`
--
ALTER TABLE `virus`
  ADD PRIMARY KEY (`id_virus`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebida`
--
ALTER TABLE `bebida`
  MODIFY `id_bebida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `edad`
--
ALTER TABLE `edad`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleo`
--
ALTER TABLE `empleo`
  MODIFY `id_empleo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fruta`
--
ALTER TABLE `fruta`
  MODIFY `id_fruta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `musica`
--
ALTER TABLE `musica`
  MODIFY `id_music` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `novia`
--
ALTER TABLE `novia`
  MODIFY `id_novia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id_peli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `propuesta`
--
ALTER TABLE `propuesta`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `virus`
--
ALTER TABLE `virus`
  MODIFY `id_virus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
