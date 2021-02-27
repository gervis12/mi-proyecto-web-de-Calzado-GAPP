-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2019 a las 19:02:20
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--
CREATE DATABASE IF NOT EXISTS `registro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `registro`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--
-- Creación: 11-07-2019 a las 13:27:02
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_u` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `correo` varchar(40) DEFAULT NULL,
  `contra` varchar(40) DEFAULT NULL,
  `telefono` varchar(12) DEFAULT NULL,
  `dirrecion` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `usuario`:
--

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_u`, `nombre`, `apellidos`, `correo`, `contra`, `telefono`, `dirrecion`) VALUES(1, 'Hernando', 'Hernandez ', 'nandojh0@gmail.com', '123', '131', '1331');
INSERT INTO `usuario` (`id_u`, `nombre`, `apellidos`, `correo`, `contra`, `telefono`, `dirrecion`) VALUES(2, 'Yuliana', 'Quiñones', 'yuli01@gmail.com', '123', '321', 'cll 22a');
INSERT INTO `usuario` (`id_u`, `nombre`, `apellidos`, `correo`, `contra`, `telefono`, `dirrecion`) VALUES(5, 'modesto', 'pajaro', 'mo@gmail.com', 'md', '3214535667', 'marin');
INSERT INTO `usuario` (`id_u`, `nombre`, `apellidos`, `correo`, `contra`, `telefono`, `dirrecion`) VALUES(9, 'Gervis', 'Pajaro', 'pajaro@gmail.com', '123', '3143504888', 'marin ');
INSERT INTO `usuario` (`id_u`, `nombre`, `apellidos`, `correo`, `contra`, `telefono`, `dirrecion`) VALUES(10, 'jamer', 'Pajaro', 'jamer@gmail.com', '1234', '3224566777', 'marin ');
INSERT INTO `usuario` (`id_u`, `nombre`, `apellidos`, `correo`, `contra`, `telefono`, `dirrecion`) VALUES(13, 'Yaira', 'Avila', 'avila@gmail.com', '123', '3212345432', NULL);
INSERT INTO `usuario` (`id_u`, `nombre`, `apellidos`, `correo`, `contra`, `telefono`, `dirrecion`) VALUES(15, 'Luis', 'Rodillo', 'rodillo@gmail.com', '123', '3212345432', NULL);
INSERT INTO `usuario` (`id_u`, `nombre`, `apellidos`, `correo`, `contra`, `telefono`, `dirrecion`) VALUES(16, 'Andreina ', 'Ramirez', 'anday@gmail.com', '1234', '3214234345', 'San Bernardo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
