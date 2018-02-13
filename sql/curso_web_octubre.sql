-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2017 a las 21:43:52
-- Versión del servidor: 5.7.9
-- Versión de PHP: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `curso_web_octubre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cod_cli` int(11) NOT NULL AUTO_INCREMENT,
  `ide_cli` varchar(12) NOT NULL,
  `nom_cli` varchar(100) NOT NULL,
  `dir_cli` varchar(100) DEFAULT NULL,
  `tel_cli` varchar(15) DEFAULT NULL,
  `est_cli` char(1) NOT NULL,
  PRIMARY KEY (`cod_cli`),
  UNIQUE KEY `ide_cli` (`ide_cli`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cod_cli`, `ide_cli`, `nom_cli`, `dir_cli`, `tel_cli`, `est_cli`) VALUES
(1, 'V16409678', 'danny escalante', 'san cristobal', '02763484419', 'A'),
(2, '16539496', 'MARIA ANGELICA DURAN', 'SAN CRISTOBAL', '02763484419', 'A'),
(3, '2892796', 'MARIA CRISTINA', 'TARIBA', '02763941307', 'A'),
(4, '9221955', 'MAGALY ESCALANTE', 'TARIBA', '02763941307', 'A'),
(5, '11975055', 'LUIS MELGAR', 'SAN CRISTOBAL', '02763487412', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

DROP TABLE IF EXISTS `detalle_factura`;
CREATE TABLE IF NOT EXISTS `detalle_factura` (
  `ide_det` int(11) NOT NULL AUTO_INCREMENT,
  `fky_fac` int(11) NOT NULL,
  `fky_pro` varchar(10) NOT NULL,
  `can_det` int(11) NOT NULL,
  `pre_det` float NOT NULL,
  `sub_det` float NOT NULL,
  `tot_det` float NOT NULL,
  PRIMARY KEY (`ide_det`),
  KEY `fky_fac` (`fky_fac`),
  KEY `fky_pro` (`fky_pro`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
CREATE TABLE IF NOT EXISTS `factura` (
  `num_fac` int(11) NOT NULL AUTO_INCREMENT,
  `ctr_fac` int(11) NOT NULL,
  `fec_fac` date NOT NULL,
  `fky_cli` int(11) NOT NULL,
  `fky_for` int(11) NOT NULL,
  `con_fac` char(1) NOT NULL,
  `ven_fac` date NOT NULL,
  `sub_fac` float NOT NULL,
  `imp_fac` float NOT NULL,
  `tot_fac` float NOT NULL,
  `est_fac` char(1) NOT NULL,
  PRIMARY KEY (`num_fac`),
  UNIQUE KEY `ctr_fac` (`ctr_fac`),
  KEY `fky_cli` (`fky_cli`),
  KEY `fky_for` (`fky_for`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

DROP TABLE IF EXISTS `forma_pago`;
CREATE TABLE IF NOT EXISTS `forma_pago` (
  `cod_for` int(11) NOT NULL AUTO_INCREMENT,
  `nom_for` varchar(25) NOT NULL,
  `est_for` char(1) NOT NULL,
  PRIMARY KEY (`cod_for`),
  UNIQUE KEY `nom_for` (`nom_for`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `forma_pago`
--

INSERT INTO `forma_pago` (`cod_for`, `nom_for`, `est_for`) VALUES
(1, 'TARJETA DE DEBITO', 'A'),
(2, 'TARJETA DE CREDITO', 'A'),
(3, 'EFECTIVO', 'A'),
(4, 'CHEQUE', 'A'),
(5, 'TRANSFERENCIA', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE IF NOT EXISTS `marca` (
  `cod_mar` int(11) NOT NULL AUTO_INCREMENT,
  `nom_mar` varchar(50) NOT NULL,
  `est_mar` char(1) NOT NULL,
  PRIMARY KEY (`cod_mar`),
  UNIQUE KEY `nom_mar` (`nom_mar`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`cod_mar`, `nom_mar`, `est_mar`) VALUES
(1, 'MAVESA', 'A'),
(2, 'KRAFT', 'A'),
(3, 'MAGEFESA', 'A'),
(4, 'TORRE DEL ORO', 'A'),
(5, 'MAYORICA', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

DROP TABLE IF EXISTS `presentacion`;
CREATE TABLE IF NOT EXISTS `presentacion` (
  `cod_pre` int(11) NOT NULL AUTO_INCREMENT,
  `nom_pre` varchar(60) NOT NULL,
  `est_pre` char(1) NOT NULL,
  PRIMARY KEY (`cod_pre`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`cod_pre`, `nom_pre`, `est_pre`) VALUES
(1, '1000 gramos', 'A'),
(2, '500 GRAMOS', 'A'),
(3, '350 GRAMOS', 'A'),
(4, '150 GRAMOS', 'A'),
(5, '50 GRAMOS', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `cod_pro` varchar(15) NOT NULL,
  `nom_pro` varchar(40) NOT NULL,
  `fky_mar` int(11) NOT NULL,
  `fky_pre` int(11) NOT NULL,
  `pre_pro` float NOT NULL,
  `exp_pro` date NOT NULL,
  `ven_pro` date NOT NULL,
  `sto_pro` float NOT NULL,
  `est_pro` char(1) NOT NULL,
  PRIMARY KEY (`cod_pro`),
  KEY `fky_mar` (`fky_mar`),
  KEY `fky_pre` (`fky_pre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_pro`, `nom_pro`, `fky_mar`, `fky_pre`, `pre_pro`, `exp_pro`, `ven_pro`, `sto_pro`, `est_pro`) VALUES
('S123', 'mayonesa la torre del tigre', 3, 3, 25890.6, '2017-01-01', '2017-10-30', 50, 'A');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


create table modulo(
cod_mod int not null  primary key auto_increment,
nom_mod varchar(40) not null    ,
rut_mod varchar(100)  not null   , 
est_mod char(1) not null    
);

create table usuario(
cod_usu int not null  primary key auto_increment,
ced_usu varchar(20)  not null  unique  ,
ema_usu varchar(20)  not null    ,
cla_usu varchar(32) not null    ,
nom_usu varchar(60)  not null    ,
tel_usu varchar(20)  not null    ,
dir_usu varchar(100) not null    ,
est_usu char(1) not null    
);

create table opcion(
cod_opc int not null  primary key auto_increment,
nom_opc varchar(40) not null    ,
fky_mod int not null    ,
url_opc varchar(100)  not null,    
est_opc char(1) not null    
);


create table permiso(
opc_per int not null  primary key auto_increment,
fky_opc int not null    ,
fky_usu int not null    ,
est_per char(1) not null    
);

create table rol(
cod_rol int not null  primary key auto_increment,
nom_rol varchar(40) not null    ,
est_rol char(1) not null    
);


create table privilegio_rol(
cod_pri int not null  primary key auto_increment,
fky_rol int not null    ,
fky_opc int not null    ,
est_pri char(1) not null    
);


