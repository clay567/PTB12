-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-04-2018 a las 17:12:22
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `personal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--
-- Creación: 02-01-2018 a las 15:05:10
--

CREATE TABLE IF NOT EXISTS `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `estado_civil` varchar(10) NOT NULL,
  `hijos` varchar(5) NOT NULL,
  `intereses` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `correo`, `telefono`, `estado_civil`, `hijos`, `intereses`) VALUES
(1, 'rafael', 'rafa@gmail.com', '999392444', 'CASADO', '0', 'Deportes'),
(3, 'melissa', 'meli@gmail.com', '7894561', 'SOLTERO', '0', 'Deportes'),
(4, 'Maria de los angeles', 'mari@gmail.com', '852694', 'OTRO', '0', 'Libros'),
(5, 'jower', 'jower@gmail.com', '7895142', 'CASADO', '0', 'Deportes'),
(6, 'rocio', 'rossi@gmail.com', '45879654', 'OTRO', '0', 'Musica'),
(7, 'pedro', 'pep@gmail.com', '1597536', 'SOLTERO', '0', 'Libros'),
(8, 'gian', 'gian@gmail.com', '1234567', 'CASADO', '1', 'Libros'),
(9, 'jhon wick', 'jhon@gmail.com', '7894561', 'CASADO', '1', 'Libros Musica Deportes'),
(10, 'miluska', 'milu@gmail.com', '7894561', 'OTRO', '1', ''),
(11, 'sheila', 'shei@gmail.com', '1234568', 'CASADO', '0', 'Musica Otros'),
(14, 'kurt', 'cobain@gmail.com', '7895142', 'CASADO', '1', 'Array'),
(15, 'kurt', 'cobain@gmail.com', '7895142', 'CASADO', '1', 'Array'),
(17, 'kurt', 'cobain@gmail.com', '7895142', 'CASADO', '1', 'Libros Musica Deportes Otros '),
(18, 'phil', 'collins@gmail.com', '8521642', 'CASADO', '1', 'Libros Musica Deportes Otros '),
(19, 'tom', 'york@gmail.com', '8524691', 'OTRO', '0', 'Musica Deportes'),
(20, 'vanessa', 'vane@gmail.com', '1234568', 'OTRO', '0', 'Musica Otros'),
(21, 'galan', 'ctm@gmail.com', '789524', 'OTRO', '0', 'Otros');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
