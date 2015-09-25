-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2015 at 02:45 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novedades`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_cat` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_cat`, `nombre`) VALUES
(13, 'Dieta'),
(14, 'Ejercicio');

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(11) NOT NULL,
  `fk_id_cat` int(11) NOT NULL,
  `path` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`id`, `fk_id_cat`, `path`, `descripcion`, `titulo`) VALUES
(25, 13, 'uploads/imagenes/5604524b75874nov dieta 00.jpg', 'En este post desmentiremos mitos del fitness, hablando sobre por qué los métodos más conocidos para perder peso pueden ser los más peligrosos para la salud y por qué las pastillas para adelgazar son peligrosas para la salud y no sirven. Las anfetaminas para perder peso', '¿Por qué las pastillas para adelgazar son peligrosas para la salud?'),
(26, 14, 'uploads/imagenes/56045286efb28nov ejercicio 00.jpg', 'ya que estrictamente hablando, el que sea fácil o difícil entrenarlos no está relacionado con su desarrollo. La realidad es que no hay nada que indique que las pantorrillas sean genéticamente susceptibles o resistentes al desarrollo muscular, pero sí existe un hecho biológico sobre ellos que dificulta su desarrollo.', '¿Por qué es difícil hacer crecer las pantorrillas?'),
(27, 13, 'uploads/imagenes/560452a1ba1ddnov dieta 01.jpg', 'El tema de la salud, y específicamente el de la obesidad, cada vez suele ser de mayor preocupación debido a que los índices de personas con exceso de peso va aumentando considerablemente. Hoy en día se estima que en países como Estados Unidos o México, alrededor de un 70% de la población padece de esta enfermedad; sin duda una cifra alarmante que ya ha puesto a las autoridades en marcha para lanzar campañas que luchan en contra la problemática.', 'Razones por las que puedes ganar grasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_cat` (`fk_id_cat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `fk_id_cat` FOREIGN KEY (`fk_id_cat`) REFERENCES `categoria` (`id_cat`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
