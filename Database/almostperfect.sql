-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2014 at 09:36 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `almostperfect`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Enabled` tinyint(1) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Orientation` varchar(11) NOT NULL,
  `Age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `Enabled`, `Name`, `Orientation`, `Age`, `email`) VALUES
('fdsa', '44', 0, 'df', '0', 43, 'dsaf'),
('popoi', 'gfff', 0, 'popo', '0', 90, 'ppp'),
('sbakiu', 'test', 0, 'Sadik Bakiu', '0', 24, 'sbakiu@gmail.com'),
('sbakiu', 'test', 0, 'Sadik Bakiu', '0', 24, 'sbakiu@gmail.com'),
('sbakiu1', 'test', 0, 'Sadik Bakiu', '0', 24, 'sbakiu1@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
