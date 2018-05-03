-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2018 at 06:47 AM
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
-- Database: `cmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

DROP TABLE IF EXISTS `apps`;
CREATE TABLE IF NOT EXISTS `apps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deployments`
--

DROP TABLE IF EXISTS `deployments`;
CREATE TABLE IF NOT EXISTS `deployments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appid` int(11) NOT NULL,
  `nodeid` int(11) NOT NULL,
  `datedeployed` datetime NOT NULL,
  `status` varchar(30) NOT NULL COMMENT '0 is void, 1 is success, 2 is rollback',
  `fileid` varchar(150) NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `environments`
--

DROP TABLE IF EXISTS `environments`;
CREATE TABLE IF NOT EXISTS `environments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `datemodifed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `environments`
--

INSERT INTO `environments` (`id`, `name`, `description`, `datemodifed`) VALUES
(1, 'Test Environment', 'Test Environment', '2018-04-18 12:29:17'),
(2, 'Production Environment', 'Production Environment\r\n', '2018-04-18 12:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `markets`
--

DROP TABLE IF EXISTS `markets`;
CREATE TABLE IF NOT EXISTS `markets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `market` varchar(300) NOT NULL,
  `mkt` varchar(30) NOT NULL COMMENT 'abbreviation column',
  `status` int(11) NOT NULL DEFAULT '0',
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markets`
--

INSERT INTO `markets` (`id`, `market`, `mkt`, `status`, `datemodified`) VALUES
(1, 'Kenya', 'KE', 0, '2018-04-18 09:44:34'),
(2, 'Ghana GLO', 'GHA', 0, '2018-04-18 10:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `markets_environments`
--

DROP TABLE IF EXISTS `markets_environments`;
CREATE TABLE IF NOT EXISTS `markets_environments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `marketid` int(11) NOT NULL,
  `environmentid` int(11) NOT NULL,
  `datemodifed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `market_environment_parameters`
--

DROP TABLE IF EXISTS `market_environment_parameters`;
CREATE TABLE IF NOT EXISTS `market_environment_parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marketenvironmentid` int(11) NOT NULL,
  `parameterid` int(11) NOT NULL,
  `parametervalue` varchar(200) NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nodes`
--

DROP TABLE IF EXISTS `nodes`;
CREATE TABLE IF NOT EXISTS `nodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `market_environment_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ipaddress` varchar(20) NOT NULL,
  `port` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1 for active 0 for incative',
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

DROP TABLE IF EXISTS `parameters`;
CREATE TABLE IF NOT EXISTS `parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `releases`
--

DROP TABLE IF EXISTS `releases`;
CREATE TABLE IF NOT EXISTS `releases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `versionid` int(11) NOT NULL,
  `releasename` varchar(30) NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `datemodified`) VALUES
(1, 'Admin', '2018-04-18 07:12:29'),
(2, 'Engineer', '2018-04-18 07:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hashpassword` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0 is active 1 is inactive',
  `datemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `hashpassword`, `status`, `datemodified`) VALUES
(1, NULL, 'smbugua', 'smbugua11@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0, '2018-04-17 08:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `datemodifed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `userid`, `roleid`, `datemodifed`) VALUES
(1, 1, 1, '2018-04-18 07:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `versions`
--

DROP TABLE IF EXISTS `versions`;
CREATE TABLE IF NOT EXISTS `versions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nodeid` int(11) NOT NULL,
  `appid` int(11) NOT NULL,
  `versionname` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
