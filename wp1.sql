-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2017 at 11:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pooja`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp1`
--

CREATE TABLE `wp1` (
  `Project_title` varchar(100) NOT NULL,
  `Project_abstract` varchar(1000) NOT NULL,
  `Ref1` varchar(100) NOT NULL,
  `Ref2` varchar(100) NOT NULL,
  `Ref3` varchar(100) NOT NULL,
  `Ref4` varchar(100) NOT NULL,
  `Project_Guide` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wp1`
--

INSERT INTO `wp1` (`Project_title`, `Project_abstract`, `Ref1`, `Ref2`, `Ref3`, `Ref4`, `Project_Guide`) VALUES
(' Android Map Application ', ' Maps are available and free. What was expensive and required the user to get a paper copy in a shop is now available on any Smartphone. Not only maps but location-related information visible on the maps is an obvious feature. ', ' Firoz ', ' Harshad ', ' Ronit ', ' Saloni ', ' Vaishali Kavathekar '),
('Issue Tracker In PHP', 'Issue-Tracker is a support issue tracking system written in PHP, with option of either a PostgreSQL of MySQL backend. The system is designed to be user friendly, and uses a simple modular API to make addition of new modules or features very easy.', 'Salome', 'Darina', 'Sunny', 'Rishab', 'Nilesh Ghavate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp1`
--
ALTER TABLE `wp1`
  ADD PRIMARY KEY (`Project_title`),
  ADD UNIQUE KEY `Project_title` (`Project_title`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
