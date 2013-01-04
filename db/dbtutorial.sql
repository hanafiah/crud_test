-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2013 at 08:26 AM
-- Server version: 5.1.59
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladdress`
--

CREATE TABLE IF NOT EXISTS `tbladdress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `address` varchar(300) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbladdress`
--

INSERT INTO `tbladdress` (`id`, `user_id`, `address`) VALUES
(1, 1, '1234 jalan ayam 1'),
(2, 2, '56 jalan kukus'),
(3, 6, 'alamat kuku'),
(4, 6, 'alamat kedua'),
(5, 4, 'alamt 1'),
(6, 6, 'alamat kuku');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `name`) VALUES
(1, 'kasim selamat'),
(2, 'khairul fahmi'),
(3, 'adam musa'),
(4, 'john doe'),
(5, 'hanafiah'),
(6, 'kuku lala'),
(7, ''),
(8, 'siput');

-- --------------------------------------------------------

--
-- Table structure for table `xtbladdress`
--

CREATE TABLE IF NOT EXISTS `xtbladdress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniqid` int(11) DEFAULT NULL,
  `address` varchar(300) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `xtbladdress`
--

INSERT INTO `xtbladdress` (`id`, `uniqid`, `address`) VALUES
(1, 1, '1234 jalan ayam 1');

-- --------------------------------------------------------

--
-- Table structure for table `xtblusers`
--

CREATE TABLE IF NOT EXISTS `xtblusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniqid` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `xtblusers`
--

INSERT INTO `xtblusers` (`id`, `uniqid`, `name`) VALUES
(1, 1, 'kasim selamat'),
(2, 2, 'khairul fahmi'),
(3, 3, 'adam musa'),
(4, 4, 'john dow');
