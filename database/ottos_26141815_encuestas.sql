-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 08-07-2020 a las 09:05:57
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

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
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL,
  `color` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `bebida`
--

TRUNCATE TABLE `bebida`;
--
-- Volcado de datos para la tabla `bebida`
--

INSERT INTO `bebida` (`id_bebida`, `opcion`, `voto`, `seleccion`, `color`) VALUES
(1, 'Si', 12, 'a', 'bg-success'),
(2, 'No', 2, 'b', 'bg-primary'),
(3, 'Muy Poco', 5, 'c', 'bg-warning');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `id_com` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL,
  `color` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `comida`
--

TRUNCATE TABLE `comida`;
--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`id_com`, `opcion`, `voto`, `seleccion`, `color`) VALUES
(1, 'Si', 18, 'a', 'bg-success'),
(2, 'No', 1, 'b', 'bg-primary'),
(3, 'Otro', 0, 'c', 'bg-warning');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edad`
--

CREATE TABLE `edad` (
  `id_res` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL,
  `color` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `edad`
--

TRUNCATE TABLE `edad`;
--
-- Volcado de datos para la tabla `edad`
--

INSERT INTO `edad` (`id_res`, `opcion`, `voto`, `seleccion`, `color`) VALUES
(1, '10 a 20 de edad', 2, 'a', 'bg-success'),
(2, '21 a 30 de edad', 13, 'b', 'bg-primary'),
(3, '31 en adelante', 4, 'c', 'bg-warning');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleo`
--

CREATE TABLE `empleo` (
  `id_empleo` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL,
  `color` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `empleo`
--

TRUNCATE TABLE `empleo`;
--
-- Volcado de datos para la tabla `empleo`
--

INSERT INTO `empleo` (`id_empleo`, `opcion`, `voto`, `seleccion`, `color`) VALUES
(1, 'Estudiar', 7, 'a', 'bg-success'),
(2, 'Trabajar', 12, 'b', 'bg-primary'),
(3, 'Ninguna', 0, 'c', 'bg-warning');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fruta`
--

CREATE TABLE `fruta` (
  `id_fruta` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL,
  `color` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `fruta`
--

TRUNCATE TABLE `fruta`;
--
-- Volcado de datos para la tabla `fruta`
--

INSERT INTO `fruta` (`id_fruta`, `opcion`, `voto`, `seleccion`, `color`) VALUES
(1, 'Si', 13, 'a', 'bg-success'),
(2, 'No', 3, 'b', 'bg-primary'),
(3, 'No lo se', 3, 'c', 'bg-warning');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musica`
--

CREATE TABLE `musica` (
  `id_music` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL,
  `color` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `musica`
--

TRUNCATE TABLE `musica`;
--
-- Volcado de datos para la tabla `musica`
--

INSERT INTO `musica` (`id_music`, `opcion`, `voto`, `seleccion`, `color`) VALUES
(1, 'Hombre', 13, 'a', 'bg-success'),
(2, 'Mujer', 6, 'b', 'bg-primary'),
(3, 'Prefiero no contestar', 0, 'c', 'bg-warning');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novia`
--

CREATE TABLE `novia` (
  `id_novia` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL,
  `color` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `novia`
--

TRUNCATE TABLE `novia`;
--
-- Volcado de datos para la tabla `novia`
--

INSERT INTO `novia` (`id_novia`, `opcion`, `voto`, `seleccion`, `color`) VALUES
(1, 'Si', 16, 'a', 'bg-success'),
(2, 'No', 1, 'b', 'bg-primary'),
(3, 'No Me Importa', 2, 'c', 'bg-warning');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id_peli` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL,
  `color` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `peliculas`
--

TRUNCATE TABLE `peliculas`;
--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id_peli`, `opcion`, `voto`, `seleccion`, `color`) VALUES
(1, 'Si', 14, 'a', 'bg-success'),
(2, 'No', 4, 'b', 'bg-primary'),
(3, 'Me lo Prestan', 1, 'c', 'bg-warning');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuesta`
--

CREATE TABLE `propuesta` (
  `id_pro` int(11) NOT NULL,
  `opcion` varchar(100) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL,
  `color` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `propuesta`
--

TRUNCATE TABLE `propuesta`;
--
-- Volcado de datos para la tabla `propuesta`
--

INSERT INTO `propuesta` (`id_pro`, `opcion`, `voto`, `seleccion`, `color`) VALUES
(1, 'Si', 17, 'a', 'bg-success'),
(2, 'No', 1, 'b', 'bg-primary'),
(3, 'No Me Importa', 1, 'c', 'bg-warning');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `acceso` varchar(50) NOT NULL DEFAULT 'Sin Contestar',
  `acceso2` varchar(50) NOT NULL DEFAULT 'Sin Contestar'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `usuarios`
--

TRUNCATE TABLE `usuarios`;
--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `user`, `pass`, `acceso`, `acceso2`) VALUES
(11, 'juan', 'dd4efaba6c610a2f879b7616ade986421272452f15a61218996edbb7e5acb813', 'Contestada', 'Contestada'),
(12, 'issacortega', '2e49a76d6127c6d70a229f3bb2d0bf0496c32448bd9695425905689a8aa2c77d', 'Contestada', 'Contestada'),
(13, 'tania', '3dd6f380fdd868639fb96beba9984276540e2004fe984fbda8e78c7be86968f5', 'Contestada', 'Contestada'),
(14, 'jose2', '0a92b22d38ac9e15b14a15f5b02e93b94f3b9db634996a13f08f0080f6ac40e0', 'Contestada', 'Contestada'),
(15, 'jesse', '97f45db7060d08783b05dfcc250711c56ef8c2fac5c585aed64e19f1f93e3a22', 'Contestada', 'Contestada'),
(16, 'a', '1c696114893791ccebeeae9f07ffb23996e8f67896282cc39d010a9e2c9155c7', 'Contestada', 'Contestada'),
(17, 'blachhack', '1799028c78677e9da4823c3fe22ed86275dbffd848c0245a956c800cd852afc1', 'Contestada', 'Contestada'),
(18, 'dj103mx', 'cda83710062d6ac6ed101cc2c2d9c0a07514dc1aa23abbb1a447c42fb43a49ed', 'Contestada', 'Contestada'),
(19, 'antonio s', '2419bed21b1daaab0cd6ca575a9ca8d8f4059ba308bb2593f12affa23048db18', 'Contestada', 'Contestada'),
(20, 'charles ortega', '36258e784c437520fa713b97679a88facb8ad58d2dee8c7363dbf3d8c6a8b20d', 'Contestada', 'Contestada'),
(21, 'karina', '43e8f4ae78503672098b91f274db9b21d0827edb6050dc203c8f84a80f9afe62', 'Contestada', 'Contestada'),
(22, 'cacdoo', '88ccc423606d1341d12cde9c42a8de199260a717cda3d05edbfe70e83455c82d', 'Sin Contestar', 'Sin Contestar'),
(23, 'isai', 'dc5a9010a599f6da35a4a6dc6f2762be2320304621f93fd0e2b9af1a50b3de55', 'Contestada', 'Contestada'),
(24, 'luistanley', 'b1a2ea9d24960a85c130c10f71a3c8b9d65ac7911942ef4ded455f5a27fe2973', 'Contestada', 'Contestada'),
(25, 'itziholi', 'd5cd3768c90775f91cd24ec1a06182c5a9deab0bcd8259b728db7a241084decb', 'Contestada', 'Contestada'),
(26, 'natashly', '5a26a304fde8b9ff96b5d1b3a58dae64228dafefb1d1c372c0fe1986f516dff8', 'Contestada', 'Contestada'),
(27, 'eduardo', '0082337f7e7b3456dacb55762cfb7a530f244fb86e8b4207a4aba984e4b8876c', 'Contestada', 'Contestada'),
(28, 'pedroo', 'de1128280f1c6d11ae6fb62386664b565e748bcb50a1d7db00ac24506bfb9f93', 'Contestada', 'Contestada'),
(29, 'juan martÃ­nez', '102d0651803588b2a638ca585b18403bbc56f1275f20b4ccedd49bce25b9898c', 'Contestada', 'Contestada'),
(30, '123', '7e0496fe3a844c6807f366c99dab98872e0a43dd847dafc14412c5092d71b27e', 'Sin Contestar', 'Sin Contestar'),
(31, '12', 'dd4efaba6c610a2f879b7616ade986421272452f15a61218996edbb7e5acb813', 'Sin Contestar', 'Sin Contestar'),
(32, 'hildaz', 'b5e64c5c4eb721bc7aa11a72dd5dfb6c1cbf27ea806eee713c260b81e23a05fe', 'Contestada', 'Contestada'),
(33, 'issac', 'dd4efaba6c610a2f879b7616ade986421272452f15a61218996edbb7e5acb813', 'Sin Contestar', 'Sin Contestar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `virus`
--

CREATE TABLE `virus` (
  `id_virus` int(11) NOT NULL,
  `opcion` varchar(50) NOT NULL,
  `voto` int(11) NOT NULL DEFAULT 0,
  `seleccion` char(2) NOT NULL,
  `color` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `virus`
--

TRUNCATE TABLE `virus`;
--
-- Volcado de datos para la tabla `virus`
--

INSERT INTO `virus` (`id_virus`, `opcion`, `voto`, `seleccion`, `color`) VALUES
(1, 'Si', 6, 'a', 'bg-success'),
(2, 'No', 5, 'b', 'bg-primary'),
(3, 'No lo se', 8, 'c', 'bg-warning');

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `virus`
--
ALTER TABLE `virus`
  MODIFY `id_virus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
