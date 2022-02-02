-- phpMyAdmin SQL Dump
-- version 3.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 08:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Create Database `db_project`
--

CREATE DATABASE IF NOT EXISTS `db_project`DEFAULT CHARACTER SET 
latin1 COLLATE latin1_swedish_ci;
USE `db_project`;


-- --------------------------------------------------------

--
-- Database : `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
    `fullname` varchar(255) NOT NULL,
    `username` varchar(255) NOT NULL PRIMARY KEY,
    `pass` char(32) NOT NULL,
    `role` ENUM('admin','owner','pass') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT ignore INTO `user` (`fullname`, `username`, `pass`, `role`) VALUES
('Owner 1', 'owner1', md5('1234'), 'owner'),
('Admin 1', 'adm1', md5('4321'), 'admin'),
('Marsha', 'mars', md5('1001'), 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
    `bus_id` char(11) NOT NULL PRIMARY KEY,
    `from` varchar(255) NOT NULL,
    `track_to` ENUM('Rambutan', 'Lebak Bulus', 'Tanjung Priok','Kudus', 
    'Tangerang', 'Merak','Pandeglang') NOT NULL,
    `fare` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT ignore INTO `bus` (`bus_id`, `from`, `track_to`, `fare`) VALUES
('A01', 'Bogor', 'Rambutan', '15000'),
('B01', 'Bogor', 'Lebak Bulus', '16000'),
('C01', 'Bogor', 'Tanjung Priok', '16000'),
('D01', 'Bogor', 'Kudus', '215000'),
('E01', 'Bogor', 'Tangerang', '30000'),
('F01', 'Bogor', 'Merak', '40000'),
('G01', 'Bogor', 'Pandeglang', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
    `departure_id` varchar(50) NOT NULL PRIMARY KEY,
    `date_of_day` char(32) NOT NULL,
    `bus_id` char(32) NOT NULL,
    `route` varchar(255) NOT NULL,
    `pass_total` int(11) NOT NULL,
    `pass_today` int(11) NOT NULL,
    `time` CHAR(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE  IF NOT EXISTS `ticket` (
    `name_pass` varchar(255) NOT NULL,
    `username_pass` char(32) NOT NULL,
    `phonenumber` char(32) NOT NULL,
    `total_pass` int(11) NOT NULL,
    `from` varchar(255) NOT NULL,
    `track_to` ENUM('Rambutan', 'Lebak Bulus', 'Tanjung Priok',
    'Kudus', 'Tangerang', 'Merak','Pandeglang') NOT NULL,
    `bus_code` char(32) NOT NULL,
    `departure` char(50) NOT NULL PRIMARY KEY,
    `departure_date` char(32) NOT NULL,
    `departure_time` char(32) NOT NULL,
    `payment` varchar(50) NOT NULL,
    `total_pay` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE  IF NOT EXISTS `income` (
    `month` char(32) NOT NULL PRIMARY KEY,
    `total_departure` INT(11) NOT NULL,
    `total_pass` INT(11) NOT NULL,
    `incoming` char(32) NOT NULL
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;