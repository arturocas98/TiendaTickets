-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2019 a las 12:30:18
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyectodesarrolloweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE IF NOT EXISTS `artista` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `a_archivo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `a_estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `artista`
--

INSERT INTO `artista` (`a_id`, `a_nombre`, `a_archivo`, `a_estado`) VALUES
(0, '', '', 0),
(1, 'Ed Sheeran', 'artista7.jpg', 1),
(2, 'Camila Cabello', 'artista10.jpg', 1),
(3, 'Jonas Brothers', 'artista9.jpg', 1),
(4, 'Taylor Swift', 'artista11.jpg', 1),
(5, 'Billie Eilish', 'artista12.jpg', 1),
(6, 'Ariana Grande', 'artista0.jpg', 1),
(20, 'asd', '', 0),
(21, 'asdsadsad', 'sabrinacarpenter.jpg', 0),
(22, 'Pedro', 'artista7.jpg', 0),
(23, 'No se', 'artista7.jpg', 0),
(25, 'dsfsdf', '', 0),
(26, 'dsfsdfsadsda', 'artista10.jpg', 0),
(27, 'Vaca Lola', '', 0),
(28, 'aAS', '', 0),
(29, '', '', 0),
(30, '', '', 0),
(31, 'dfsfs', 'artista6.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `ca_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `ca_cant` int(11) NOT NULL,
  `ca_estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ca_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`ca_id`, `t_id`, `u_id`, `ca_cant`, `ca_estado`) VALUES
(1, 1, 2, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_cedula` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `c_primerN` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `c_segundoN` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `c_primerA` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `c_segundoA` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `c_correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `c_telef` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `c_edad` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `c_direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `c_estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`c_id`, `c_cedula`, `c_primerN`, `c_segundoN`, `c_primerA`, `c_segundoA`, `c_correo`, `c_telef`, `c_edad`, `c_direccion`, `c_estado`) VALUES
(26, '111', '1', '1', '1', '11', '1', '1', '1', '1', 1),
(27, '1', '1', '1', '1', '1', '1', '1', '1', '1', 1),
(28, '1', '1', '1', '1', '1', '1', '1', '1', '1', 1),
(29, '', '', '', '', '', '', '', '', '', 1),
(30, '23323', '323', '33', '32', '32', '23', '33', '32', '32', 1),
(31, '23323', '323', '33', '32', '32', '23', '33', '32', '32', 1),
(32, 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 1),
(33, '', '', '', '', '', '', '', '', '', 1),
(34, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 1),
(35, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 1),
(36, '1e1e1e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 1),
(37, 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 1),
(38, '0927747147', 'Johanna', 'Alejandra', 'Cabrera', 'Borbor', 'alejandra-cabrera-borbor@hotma', '2332323', '12', 'dfsdfdsf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_lugar` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `e_ciudad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `e_fecha` date NOT NULL,
  `e_hora_inicio` time NOT NULL,
  `a_id` int(11) NOT NULL,
  `e_estado` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`e_id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`e_id`, `e_lugar`, `e_ciudad`, `e_fecha`, `e_hora_inicio`, `a_id`, `e_estado`) VALUES
(13, 'Coliseo General Ruminahui', 'Quito', '2019-09-12', '20:00:00', 1, 1),
(14, 'Estadio Modelo Alberto Spencer', 'Guayaquil', '2019-09-13', '20:00:00', 1, 1),
(15, 'Estadio de Liga Deportiva Universitaria', 'Quito', '2019-11-25', '19:00:00', 2, 1),
(16, 'Nueva Explanada Riocentro El Dorado', 'Guayaquil', '2019-11-26', '19:00:00', 2, 1),
(17, 'Coliseo General Rumiñahui', 'Quito', '2019-09-19', '22:00:00', 3, 1),
(18, 'Estadio Monumental', 'Guayaquil', '2019-09-20', '22:00:00', 3, 1),
(19, 'Agora Casa De La Cultura', 'Quito', '2019-09-23', '18:00:00', 4, 1),
(20, 'Coliseo Voltaire Paladines Polo', 'Guayaquil', '2019-09-24', '18:00:00', 4, 1),
(21, 'Estadio de Liga Deportiva Universitaria', 'Quito', '2020-01-11', '20:00:00', 5, 1),
(22, 'Coliseo Voltaire Paladines Polo', 'Guayaquil', '2020-01-11', '20:00:00', 5, 1),
(25, 'Estadio Gonzalo Pozo Ripalda', 'Quito', '2019-10-15', '19:00:00', 6, 1),
(26, 'Coliseo Jefferson Pérez', 'Cuenca', '2019-10-16', '19:00:00', 6, 1),
(27, 'zxzx', 'sasxz', '2019-09-23', '22:00:00', 2, 1),
(28, 'Putos', 'sad', '2019-09-13', '03:03:00', 1, 0),
(29, 'sad', 'sas', '2019-09-20', '03:04:00', 1, 1),
(30, '', '', '1970-01-01', '04:05:00', 1, 0),
(31, 'dsd', 'dsd', '2019-09-19', '03:02:00', 1, 1),
(32, 'Puta mAdre', 'as', '2019-09-12', '21:21:02', 4, 1),
(33, 'dasdsadsdd', 'sasd', '2019-09-12', '12:02:00', 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id_factura` int(6) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(6) NOT NULL,
  `evento_id` int(6) NOT NULL,
  `ticket_id` int(6) NOT NULL,
  `f_cantidad` int(11) NOT NULL,
  `f_precio` float NOT NULL,
  `f_descripcion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `f_subtotal` float NOT NULL,
  `f_total` float NOT NULL,
  PRIMARY KEY (`id_factura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `t_precio` double NOT NULL,
  `t_stock` int(30) NOT NULL,
  `t_tipo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `e_id` int(11) NOT NULL,
  `t_estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`t_id`),
  KEY `e_id` (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`t_id`, `t_descripcion`, `t_precio`, `t_stock`, `t_tipo`, `e_id`, `t_estado`) VALUES
(1, 'Sector Ctrl fila 3', 180, 9, '', 13, 1),
(2, 'Sector Ctrl fila 1', 200, 7, '2', 13, 1),
(3, 'Sector Der fila 2', 100, 8, '2', 13, 1),
(4, 'Sector Izq fila 3', 200, 7, '2', 13, 1),
(5, 'Sector Ctrl fila 6', 350, 9, '3', 13, 1),
(6, 'Sector Izq fila 5', 160, 10, '3', 14, 1),
(7, 'Sector Izq fila 4', 230, 9, '3', 14, 1),
(8, 'Sector Der fila 3', 120, 6, '2', 14, 1),
(9, 'Sector Der fila 2', 250, 13, '3', 14, 1),
(10, 'Sector Ctrl fila 1', 210, 6, '1', 14, 1),
(11, 'waas', 1212, 21, '2', 15, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `u_clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `u_cedula` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `u_nombres` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `u_apellidos` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `u_telefono` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `u_direccion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `u_correo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `u_tipo` int(11) NOT NULL DEFAULT '2',
  `u_estado` int(11) NOT NULL DEFAULT '1',
  `u_archivo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`u_id`, `u_usuario`, `u_clave`, `u_cedula`, `u_nombres`, `u_apellidos`, `u_telefono`, `u_direccion`, `u_correo`, `u_tipo`, `u_estado`, `u_archivo`) VALUES
(1, 'admin', 'admin123', '0', '0', '0', '0', '0', NULL, 1, 1, ''),
(2, 'sanz', 'sanz123', '0', '0', '0', '0', '0', NULL, 2, 1, ''),
(3, 'arturo', 'arturo123', '', '', '', '', '', '', 2, 1, 'arturo.jpg'),
(4, 'johanna', 'johanna123', '', '', '', '', '', '', 2, 1, 'artista10.jpg'),
(5, 'as', 'a', '0', '0', '0', '0', '0', NULL, 2, 1, ''),
(6, 'hola', 'dasd', NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, ''),
(7, 'nuevo', '123', NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, NULL),
(8, 'nuevo2', '123', NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, NULL),
(9, 'nuevox', '123', NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, NULL),
(10, 'hola', 'dasd', NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, NULL),
(11, 'SA', 'AS', NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, NULL),
(12, 'sa', 'sa', NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, NULL),
(13, 's', 'sa', NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, NULL),
(14, 'w', 'w', NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `artista` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
