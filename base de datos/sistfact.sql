-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-02-2018 a las 21:05:09
-- Versión del servidor: 5.7.21-0ubuntu0.17.10.1
-- Versión de PHP: 7.1.11-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistfact`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cod_cli` int(11) NOT NULL,
  `ide_cli` varchar(12) NOT NULL,
  `nom_cli` varchar(100) NOT NULL,
  `dir_cli` varchar(100) DEFAULT NULL,
  `tel_cli` varchar(15) DEFAULT NULL,
  `est_cli` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cod_cli`, `ide_cli`, `nom_cli`, `dir_cli`, `tel_cli`, `est_cli`) VALUES
(1, 'V18091982', 'Daniel Diaz', 'San Cristobal', '04247754975', 'A'),
(14, 'V4626795', 'Juan Bautista', 'Capacho', '04247754975', 'A'),
(19, 'V9209949', 'Rita DÃ­az', 'Capacho', '04168768138', 'A'),
(12, 'V5635874', 'Maria Varga', 'San Cristobal', '04247751425', 'A'),
(13, 'V27353723', 'Juan Chacon', 'San Cristobal', '04247754975', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `ide_det` int(11) NOT NULL,
  `fky_fac` int(11) NOT NULL,
  `fky_pro` varchar(10) NOT NULL,
  `can_det` int(11) NOT NULL,
  `pre_det` float NOT NULL,
  `sub_det` float NOT NULL,
  `tot_det` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`ide_det`, `fky_fac`, `fky_pro`, `can_det`, `pre_det`, `sub_det`, `tot_det`) VALUES
(1, 22533, 'S123', 14, 12000, 15000, 15000),
(2, 22533, 'S123', 14, 12000, 15000, 15000),
(3, 2, 'P1452', 14, 12000, 15000, 15000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `num_fac` int(11) NOT NULL,
  `ctr_fac` int(11) NOT NULL,
  `fec_fac` date NOT NULL,
  `fky_cli` int(11) NOT NULL,
  `fky_for` int(11) NOT NULL,
  `con_fac` char(1) NOT NULL,
  `ven_fac` date NOT NULL,
  `sub_fac` float NOT NULL,
  `imp_fac` float NOT NULL,
  `tot_fac` float NOT NULL,
  `est_fac` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`num_fac`, `ctr_fac`, `fec_fac`, `fky_cli`, `fky_for`, `con_fac`, `ven_fac`, `sub_fac`, `imp_fac`, `tot_fac`, `est_fac`) VALUES
(2, 46544, '2017-11-01', 1, 1, 'C', '2017-11-30', 10, 1000, 12000, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

CREATE TABLE `forma_pago` (
  `cod_for` int(11) NOT NULL,
  `nom_for` varchar(25) NOT NULL,
  `est_for` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `forma_pago`
--

INSERT INTO `forma_pago` (`cod_for`, `nom_for`, `est_for`) VALUES
(2, 'CrÃ©dito', 'A'),
(11, 'Contado', 'A'),
(4, 'Tranferencia', 'A'),
(5, 'Efectivo', 'I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `cod_mar` int(11) NOT NULL,
  `nom_mar` varchar(40) NOT NULL,
  `est_mar` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`cod_mar`, `nom_mar`, `est_mar`) VALUES
(11, 'Mary', 'A'),
(10, 'La Rendidora', 'A'),
(8, 'Kraft', 'A'),
(7, 'Mavesa', 'A'),
(13, 'Mirasol', 'A'),
(14, 'Valentina', 'A'),
(15, 'Heidi', 'A'),
(21, 'Zulia', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `cod_mod` int(11) NOT NULL,
  `nom_mod` varchar(40) NOT NULL,
  `rut_mod` varchar(100) NOT NULL,
  `est_mod` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`cod_mod`, `nom_mod`, `rut_mod`, `est_mod`) VALUES
(1, 'Cliente', 'vista/cliente', 'A'),
(2, 'Producto', 'vista/producto', 'A'),
(3, 'Marca', 'vista/marca', 'A'),
(4, 'Forma Pago', 'vista/forma_pago', 'A'),
(5, 'PresentaciÃ³n', 'vista/presentacion', 'A'),
(6, 'Factura', 'vista/factura', 'A'),
(7, 'Opcion', 'vista/opcion', 'A'),
(8, 'Rol', 'vista/rol', 'A'),
(9, 'Usuario', 'vista/usuario', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion`
--

CREATE TABLE `opcion` (
  `cod_opc` int(11) NOT NULL,
  `nom_opc` varchar(40) NOT NULL,
  `fky_mod` int(11) NOT NULL,
  `url_opc` varchar(100) NOT NULL,
  `est_opc` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `opcion`
--

INSERT INTO `opcion` (`cod_opc`, `nom_opc`, `fky_mod`, `url_opc`, `est_opc`) VALUES
(1, 'Agregar Cliente', 1, 'agregar_cliente.php', 'A'),
(2, 'Listar Cliente', 1, 'listar_cliente.php', 'A'),
(3, 'Editar Cliente', 1, 'editar_cliente.php', 'A'),
(4, 'Eliminar Cliente', 1, 'N/A', 'A'),
(5, 'Agregar Producto', 2, 'agregar_producto.php', 'A'),
(6, 'Editar Producto', 2, 'editar_producto.php', 'A'),
(7, 'Listar Producto', 2, 'listar_producto.php', 'A'),
(8, 'Eliminar Producto', 2, 'N/A', 'A'),
(9, 'Agregar Opcion', 7, 'agregar_opcion.php', 'A'),
(10, 'Editar Opcion', 7, 'editar_opcion.php', 'A'),
(11, 'Listar Opcion', 7, 'listar_opcion.php', 'A'),
(12, 'Eliminiar Opcion', 7, 'N/A', 'A'),
(13, 'Agregar Marca', 3, 'agregar_marca.html', 'A'),
(14, 'Editar Marca', 3, 'editar_marca.php', 'A'),
(15, 'Listar Marca', 3, 'listar_marca.php', 'A'),
(16, 'Eliminar marca', 3, 'N/A', 'A'),
(17, 'Agregar Forma Pago', 4, 'agregar_forma_pago.html', 'A'),
(18, 'Editar Forma Pago', 4, 'editar_forma_pago.php', 'A'),
(19, 'Listar Forma Pago', 4, 'listar_forma_pago.php', 'A'),
(20, 'Eliminar Forma Pago', 4, 'N/A', 'A'),
(21, 'Agregar Presentacion', 5, 'agregar_presentacion.html', 'A'),
(22, 'Editar Presentacion', 5, 'editar_presentacion.php', 'A'),
(23, 'Listar Presentacion', 5, 'listar_presentacion.php', 'A'),
(24, 'Eliminar Presentacion', 5, 'N/A', 'A'),
(25, 'Agregar Factura', 6, 'agregar_factura.php', 'A'),
(26, 'Editar Factura', 6, 'editar_factura.php', 'A'),
(27, 'Listar Factura', 6, 'listar_factura.php', 'A'),
(28, 'Eliminar Factura', 6, 'N/A', 'A'),
(29, 'Agregar Rol', 8, 'agregar_rol.php', 'A'),
(30, 'Editar Rol', 8, 'editar_rol.php', 'A'),
(31, 'Listar Rol', 8, 'listar_rol.php', 'A'),
(32, 'Eliminar Rol', 8, 'N/A', 'A'),
(33, 'Agregar Usuario', 9, 'agregar_usuarop.php', 'A'),
(34, 'Editar Usuario', 9, 'editar_usuario.php', 'A'),
(35, 'Listar Usuario', 9, 'listar_usuario.php', 'A'),
(36, 'Eliminar Usuario', 9, 'N/A', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `opc_per` int(11) NOT NULL,
  `fky_opc` int(11) NOT NULL,
  `fky_usu` int(11) NOT NULL,
  `est_per` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`opc_per`, `fky_opc`, `fky_usu`, `est_per`) VALUES
(1, 1, 1, 'A'),
(2, 1, 2, 'A'),
(3, 3, 1, 'A'),
(4, 9, 2, 'A'),
(5, 2, 2, 'A'),
(6, 3, 2, 'A'),
(7, 4, 2, 'A'),
(8, 5, 2, 'A'),
(10, 7, 2, 'A'),
(15, 8, 2, 'A'),
(12, 10, 2, 'A'),
(13, 11, 2, 'A'),
(14, 12, 2, 'A'),
(16, 1, 3, 'A'),
(17, 2, 3, 'A'),
(18, 3, 3, 'A'),
(19, 4, 3, 'A'),
(20, 5, 3, 'A'),
(21, 6, 3, 'A'),
(27, 33, 3, 'A'),
(28, 34, 3, 'A'),
(24, 12, 3, 'A'),
(25, 11, 3, 'A'),
(29, 35, 3, 'A'),
(30, 7, 3, 'A'),
(31, 36, 3, 'A'),
(32, 32, 3, 'A'),
(33, 31, 3, 'A'),
(34, 30, 3, 'A'),
(35, 29, 3, 'A'),
(36, 28, 3, 'A'),
(37, 27, 3, 'A'),
(38, 26, 3, 'A'),
(39, 25, 3, 'A'),
(40, 24, 3, 'A'),
(41, 23, 3, 'A'),
(42, 22, 3, 'A'),
(43, 21, 3, 'A'),
(44, 20, 3, 'A'),
(45, 19, 3, 'A'),
(46, 18, 3, 'A'),
(47, 17, 3, 'A'),
(48, 16, 3, 'A'),
(49, 15, 3, 'A'),
(50, 14, 3, 'A'),
(51, 13, 3, 'A'),
(52, 10, 3, 'A'),
(53, 9, 3, 'A'),
(54, 8, 3, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

CREATE TABLE `presentacion` (
  `cod_pre` int(11) NOT NULL,
  `nom_pre` varchar(50) NOT NULL,
  `est_pre` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`cod_pre`, `nom_pre`, `est_pre`) VALUES
(14, '1Kg Bolsa', 'A'),
(11, '500Gr Bolsa', 'A'),
(9, '300Gr Envase PlÃ¡stico', 'A'),
(8, '500Gr Envase de Vidrio', 'A'),
(13, '100Gr Bolsa', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegio_rol`
--

CREATE TABLE `privilegio_rol` (
  `cod_pri` int(11) NOT NULL,
  `fky_rol` int(11) NOT NULL,
  `fky_opc` int(11) NOT NULL,
  `est_pri` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_pro` varchar(10) NOT NULL,
  `nom_pro` varchar(50) NOT NULL,
  `fky_mar` int(11) NOT NULL,
  `fky_pre` int(11) NOT NULL,
  `pre_pro` float NOT NULL,
  `exp_pro` date NOT NULL,
  `ven_pro` date NOT NULL,
  `sto_pro` float NOT NULL,
  `est_pro` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_pro`, `nom_pro`, `fky_mar`, `fky_pre`, `pre_pro`, `exp_pro`, `ven_pro`, `sto_pro`, `est_pro`) VALUES
('01025252', 'Mayonesa', 8, 9, 49000, '2017-11-02', '2017-11-30', 400, 'A'),
('M009', 'Salsa de ajo', 8, 8, 10000, '2017-11-02', '2017-11-30', 40, 'A'),
('GF9998', 'Mantequilla', 13, 8, 45000, '2017-11-02', '2017-11-30', 30, 'A'),
('FR343', 'Salsa BBQ', 8, 8, 12000, '2017-11-02', '2017-11-30', 40, 'A'),
('INA001', 'Flips', 14, 11, 20000, '2017-11-01', '2017-11-30', 50, 'I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `cod_rol` int(11) NOT NULL,
  `nom_rol` varchar(40) NOT NULL,
  `est_rol` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`cod_rol`, `nom_rol`, `est_rol`) VALUES
(1, 'Administrador', 'A'),
(2, 'Desarrollador', 'A'),
(3, 'Cajero', 'A'),
(4, 'Contador', 'A'),
(5, 'Jefe de Personal', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cod_usu` int(11) NOT NULL,
  `ced_usu` varchar(20) NOT NULL,
  `ema_usu` varchar(100) NOT NULL,
  `cla_usu` varchar(32) NOT NULL,
  `nom_usu` varchar(60) NOT NULL,
  `tel_usu` varchar(20) NOT NULL,
  `dir_usu` varchar(100) NOT NULL,
  `fky_rol` int(11) NOT NULL,
  `est_usu` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cod_usu`, `ced_usu`, `ema_usu`, `cla_usu`, `nom_usu`, `tel_usu`, `dir_usu`, `fky_rol`, `est_usu`) VALUES
(1, 'V15565314', 'pedro.parra82@gmail.com', '1042013feadea5404c396dc5b7eb62ed', 'Pedro Parra', '04147464801', 'Barrio San Carlos', 1, 'A'),
(2, '16231605', 'fabio@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Fabio Parra', '04164734491', 'Tariba', 1, 'A'),
(3, 'v16409678', 'danny@gmail.com', 'ec6a6536ca304edf844d1d248a4f08dc', 'danny escalante', '04268791061', 'unidada vecinal', 1, 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cli`),
  ADD UNIQUE KEY `ide_cli` (`ide_cli`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`ide_det`),
  ADD KEY `fky_fac` (`fky_fac`),
  ADD KEY `fky_pro` (`fky_pro`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`num_fac`),
  ADD UNIQUE KEY `ctr_fac` (`ctr_fac`),
  ADD KEY `fky_cli` (`fky_cli`),
  ADD KEY `fky_for` (`fky_for`);

--
-- Indices de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  ADD PRIMARY KEY (`cod_for`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`cod_mar`),
  ADD UNIQUE KEY `nom_mar` (`nom_mar`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`cod_mod`);

--
-- Indices de la tabla `opcion`
--
ALTER TABLE `opcion`
  ADD PRIMARY KEY (`cod_opc`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`opc_per`);

--
-- Indices de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  ADD PRIMARY KEY (`cod_pre`);

--
-- Indices de la tabla `privilegio_rol`
--
ALTER TABLE `privilegio_rol`
  ADD PRIMARY KEY (`cod_pri`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod_pro`),
  ADD KEY `fky_mar` (`fky_mar`),
  ADD KEY `fky_pre` (`fky_pre`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`cod_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usu`),
  ADD UNIQUE KEY `ced_usu` (`ced_usu`),
  ADD KEY `fky_rol` (`fky_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `ide_det` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `num_fac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  MODIFY `cod_for` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `cod_mar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `cod_mod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `opcion`
--
ALTER TABLE `opcion`
  MODIFY `cod_opc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `opc_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  MODIFY `cod_pre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `privilegio_rol`
--
ALTER TABLE `privilegio_rol`
  MODIFY `cod_pri` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `cod_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
