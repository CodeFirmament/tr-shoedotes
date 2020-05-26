-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_shodotes`
--
CREATE DATABASE IF NOT EXISTS `prueba_shodotes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prueba_shodotes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL,
  `URLimagen` varchar(300) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `correo` varchar(50) NOT NULL,
  `contrasenia` varchar(20) NOT NULL,
  `banco` bigint,
  PRIMARY KEY (`correo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

DROP TABLE IF EXISTS `venta`;
CREATE TABLE IF NOT EXISTS `venta` (
  `correofk` varchar(100) NOT NULL,
  `idfk` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precioventa` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`correofk`,`idfk`),
  KEY `idfk` (`idfk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO producto VALUES(9903,'sandals1.jpg','sandalias de playa',32);

INSERT INTO producto VALUES(9203,'shoes1.jpg','tennis bajos',25);

INSERT INTO producto VALUES(9144,'shoes2.jpg','zapatos de gala',50);

INSERT INTO producto VALUES(9902,'shoes3.jpg','tennis rojos',28);

INSERT INTO producto VALUES(8735,'shoes4.jpg','tennis de coleccion',60);

INSERT INTO producto VALUES(7834,'shoes5.jpg','tacones cafes',48);

INSERT INTO producto VALUES(7777,'shoes6.jpg','sandalias azules',19);

INSERT INTO producto VALUES(9923,'sneakers.jpg','tennis amarillos',50);

INSERT INTO producto VALUES(9314,'sneakers2.jpg','tennis carmesi',28);

INSERT INTO producto VALUES(9993,'sneakers3.jpg','zapatos beige',34);