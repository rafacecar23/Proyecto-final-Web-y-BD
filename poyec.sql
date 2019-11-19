-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2019 a las 20:25:06
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `poyec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentos`
--

CREATE TABLE `alimentos` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `des` varchar(30) NOT NULL,
  `prov` varchar(10) NOT NULL,
  `vru` int(20) NOT NULL,
  `cant` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`id`, `nom`, `des`, `prov`, `vru`, `cant`) VALUES
(1234, 'Ringo', 'alimento para perros', 'tropical', 10000, 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aseo`
--

CREATE TABLE `aseo` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `des` varchar(30) NOT NULL,
  `prov` varchar(10) NOT NULL,
  `vru` int(20) NOT NULL,
  `cant` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aseo`
--

INSERT INTO `aseo` (`id`, `nom`, `des`, `prov`, `vru`, `cant`) VALUES
(7892, 'FAB', 'detergente ', 'tropisinÃº', 2900, 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `panaderia`
--

CREATE TABLE `panaderia` (
  `id` int(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `des` varchar(30) NOT NULL,
  `prov` varchar(10) NOT NULL,
  `vru` int(20) NOT NULL,
  `cant` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `panaderia`
--

INSERT INTO `panaderia` (`id`, `nom`, `des`, `prov`, `vru`, `cant`) VALUES
(4567, 'Harina de trigo', 'harina para cocinar', 'sucre empr', 3000, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nom` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nom`, `pass`) VALUES
('rafael', 'rafa123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
