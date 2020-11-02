-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2020 a las 14:45:25
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `audi`
--

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_26_163603_create_modelos_table', 1);

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`Modelo`, `Tipo`, `Puertas`, `Año`) VALUES
('A1', 'Segmento B', '5', '2019'),
('A3', 'Compacto Segmento C', '5', '2020'),
('A4', 'Sedan Segmento D', '5', '2020'),
('A5', 'Sedá, Coupé y Cabrio de Segmento D', '3', '2020'),
('A6', 'Segmento E', '5', '2020'),
('A7', 'Segmento F', '5', '2020'),
('A8', 'Segmento F', '5', '2019'),
('e-Tron', 'SUV', '5', '2020'),
('Q2', 'SUV', '5', '2020'),
('Q3', 'SUV', '5', '2020'),
('Q5', 'SUV', '5', '2021'),
('Q7', 'SUV', '5', '2020'),
('Q8', 'SUV', '5', '2020'),
('R8', 'Deportivo', '2', '2019'),
('TT', 'Coupe', '2', '2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
