-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2023 a las 20:51:43
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laboratorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Nombre` varchar(30) NOT NULL,
  `Primer apellido` varchar(30) NOT NULL,
  `Segundo apellido` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Login o Usuario` varchar(30) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Nombre`, `Primer apellido`, `Segundo apellido`, `Email`, `Login o Usuario`, `Password`) VALUES
('Harry', 'Potter', 'Rowling', 'harrypotter@gmail.com', 'Harry', '$2y$10$ZzEXK9wfpyQS6ceoEIjABu5z7l7mTURLsk85BjhQrzRlFqeT38R.q'),
('Hermione', 'Granger', 'García', 'hermionegranger@gmail.com', 'Hermione', '$2y$10$Pppe4JMkmqLjNrbGQdBeK.nzWHmTzR9gtZeNmIJ5nh6FvwN99omYy'),
('Ron', 'Weasley', 'Lara', 'ronweasley@gmail.com', 'Ron', '$2y$10$Rj9GZbELW.xQ3.t.vqQgyOQhLL44YKXOukB2VXhGHGt90cisz.V7m'),
('Draco', 'Malfoy', 'Ramírez', 'dracomalfoy@gmail.com', 'Draco', '$2y$10$.mH8GNIiEIyu3Jw5/stWC.PNwdrhEKMHvXZ4HREyuTARumeqptz4W');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
