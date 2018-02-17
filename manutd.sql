-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2018 at 03:18 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manutd`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `fname`, `lname`, `position`, `img`) VALUES
(1, 'David', 'De Gea', 'GK', 'img/DavidDeGea.jpg'),
(2, 'Sergio', 'Romero', 'GK', 'img/SergioRomero.jpg'),
(3, 'Phil', 'Jones', 'DC', 'img/PhilJones.jpg'),
(4, 'Eric', 'Baily', 'DC', 'img/EricBaily'),
(6, 'Chris', 'Smalling', 'DC', 'img/ChrisSmaling'),
(7, 'Antonio', 'Valencia', 'RB', 'img/AntonioValencia'),
(8, 'Luke', 'Shaw', 'LB', 'img/LukeShaw'),
(9, 'Mateo', 'Darmian', 'LB/RB', 'img/MateoDarmian'),
(10, 'Paul', 'Pogba', 'MC', 'img/PaulPogba'),
(11, 'Ander', 'Herera', 'MC', 'img/AnderHerera'),
(12, 'Marouane', 'Felaini', 'MC', 'img/MarouaneFelaini'),
(13, 'Nemanja', 'Matic', 'MC', 'img/NemanjaMatic'),
(14, 'Anthony', 'Martial', 'AML', 'img/AnthonyMartial'),
(15, 'Marcus', 'Rashford', 'AML/SC', 'img/MarcusRashford'),
(16, 'Alexis', 'Sanchez', 'AML/AMR/SC', 'img/AlexisSanchez'),
(17, 'Romelu', 'Lukaku', 'SC', 'img/RomeluLukaku'),
(20, 'Juan', 'Mata', 'AML', 'juanmata.jpg'),
(21, 'asdasd', 'da', 'AML/SC', 'da');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
