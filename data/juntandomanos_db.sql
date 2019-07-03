-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2019 a las 05:47:04
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

--
-- Para crear la base en phpMyAdmin si es que no fue creada antes.
--
DROP DATABASE IF EXISTS juntandomanos_db;
CREATE DATABASE juntandomanos_db;
USE juntandomanos_db;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juntandomanos_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` tinyint(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




IF NOT EXISTS (SELECT * FROM users  WHERE email = '$getUserByEmail')
	INSERT INTO `users` (`id`, `name`, `username`, `email`, `pass`, `pais`, `avatar`) VALUES


--
-- Volcado de datos para la tabla `users`
--

-- INSERT INTO `users` (`id`, `name`, `username`, `email`, `pass`, `pais`, `avatar`) VALUES
-- (1, 'PRUEBA01', 'PRUEBA01', 'PRUEBA01@GMAIL.COM', '123456', 'Argentina', NULL),
-- (5, 'PRUEBADH', 'PRUEBADH', 'PRUEBADH@GMAIL.COM', '$2y$10$aMzUp9WFpM9tNSnO1hvWn.dk2l5FhmReMa4Sm9Ob38jiy9r06jy..', '', NULL),
-- (6, 'Prueba02DH', 'Prueba02DH', 'Prueba02DH@gmail.com', '$2y$10$l.i68vFsKOUUJNtlxwNmd.kiIW4LMpbHPoETtsCKEDPFqii/c5Jqq', '', NULL),
-- (9, 'PRUEBA1000DH', 'PRUEBA1000DH', 'PRUEBA1000DH@GMAIL.COM', '$2y$10$7BQcIT5wXgg19isjNMTfA.QIM8pI5iS.yeaw4/SHkpsHitjMBSVcu', '', NULL),
-- (10, 'asda', 'asda', 'asdda@gmail.com', '$2y$10$CiFsefcot/6qkL6twpQfbOy4tQ.Kj8zipfitUO0Sevg0Pc5AMJxCy', '', NULL),
-- (11, '111', '111', '111@GMAIL.COM', '$2y$10$a1ZcE2UlJ/WGNH3K9QCEzuKkeDB6WECoE.21Y0mNCHpULZj6bt0Pm', '', NULL),
-- (22, '987DH', '987DH', '987DH@gmail.com', '$2y$10$jig/6ukXy2k/nFeO2m7P7uc2x16zzHAWe00G2BhYfc3U.k2jTaPeq', '', NULL),
-- (23, '888DH', '888DH', '888DH@gmail.com', '$2y$10$B41k0tPp16tTbus0vCe9HOO.hXdVs/W9y7.JB91iMku57LcYl5dxa', '', NULL),
-- (24, '777DH', '777DH', '777DH@gmail.com', '$2y$10$GEgwVZrQu4vRDIXumbaZz.N9G1ABOKiaJdgR9w203nd0qmzfMW6ay', 'Venezuela', 'img_5d16d2153e127.png'),
-- (25, '444DH', '444DH', '444DH@gmail.com', '$2y$10$d5oAdT4hrmzUgKk0.vUx3OZaq5cgzGI5IzgwGrRTP7YTsbfdDZzGa', 'Nicaragua', 'img_5d16d63b57369.png'),
-- (26, '111DH', '111DH', '111DH@gmail.com', '$2y$10$si2eUzvorWKMW9M19MnirewPz37bojkLFlCXi3ayLCZnNj.RZJq6e', 'Uruguay', 'img_5d16d6c601bb8.png'),
-- (27, '222DH-Cambiado', '222DH-Changed', '222DH@gmail.com', '$2y$10$HX9aE3EU.HHpMnWfbmweVubFyL/324McPcGpN8TlVdnRf/FTtld1S', 'Guatemala', 'img_5d16dc4fd2747.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
