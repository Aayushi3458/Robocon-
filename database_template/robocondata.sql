-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 08:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robocon`
--

-- --------------------------------------------------------

--
-- Table structure for table `robocondata`
--

CREATE TABLE `robocondata` (
  `id` int(11) NOT NULL,
  `Team1` varchar(200) NOT NULL,
  `ps1` int(11) DEFAULT NULL,
  `pt1` int(11) DEFAULT NULL,
  `ss1` int(11) DEFAULT NULL,
  `st1` int(11) DEFAULT NULL,
  `bs1` int(11) DEFAULT NULL,
  `bt1` int(11) DEFAULT NULL,
  `Team2` varchar(200) NOT NULL,
  `ps2` int(11) DEFAULT NULL,
  `pt2` int(11) DEFAULT NULL,
  `ss2` int(11) DEFAULT NULL,
  `st2` int(11) DEFAULT NULL,
  `bs2` int(11) DEFAULT NULL,
  `bt2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `robocondata`(`id`, `Team1`, `ps1`, `pt1`, `ss1`, `st1`, `bs1`, `bt1`, `Team2`, `ps2`, `pt2`, `ss2`, `st2`, `bs2`, `bt2`) VALUES 
('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]',
'[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]')

UPDATE `robocondata` SET 
`id`='[value-1]',`Team1`='[value-2]',`ps1`='[value-3]',`pt1`='[value-4]',`ss1`='[value-5]',
`st1`='[value-6]',`bs1`='[value-7]',`bt1`='[value-8]',`Team2`='[value-9]',`ps2`='[value-10]',
`pt2`='[value-11]',`ss2`='[value-12]',`st2`='[value-13]',`bs2`='[value-14]',`bt2`='[value-15]' 
WHERE 1