-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2024 a las 23:11:28
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cv_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv`
--

CREATE TABLE `cv` (
  `Nombres` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `experiencia_laboral` varchar(100) NOT NULL,
  `Formacion` text NOT NULL,
  `Idiomas` text NOT NULL,
  `Habilidades` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cv`
--

INSERT INTO `cv` (`Nombres`, `Apellidos`, `Email`, `experiencia_laboral`, `Formacion`, `Idiomas`, `Habilidades`) VALUES
('Edison', 'Cama', 'special.28.97@gmail.com', 'asdasd', 'asdadasdasda', 'asdadada', 'asdadada'),
('asdasdasda', 'asdasdada', 'special.28.97@gmail.com', 'asdadadad', 'asdadadad', 'asdadad', 'ksdkladnandka'),
('asdasdasda', 'asdasdada', 'special.28.97@gmail.com', 'asdadadad', 'asdadadad', 'asdadad', 'ksdkladnandka');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
