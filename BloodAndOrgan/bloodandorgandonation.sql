-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 09:14 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodandorgandonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `idBlood` int(11) NOT NULL,
  `type` varchar(2) DEFAULT 'O',
  `rhesus` varchar(3) NOT NULL DEFAULT 'pos',
  `unit` int(11) NOT NULL DEFAULT '1',
  `email` varchar(25) NOT NULL,
  `taken` int(2) NOT NULL DEFAULT '0',
  `donatedTo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`idBlood`, `type`, `rhesus`, `unit`, `email`, `taken`, `donatedTo`) VALUES
(2, 'O', 'pos', 1, 'Manuella.germanos@lau.edu', 1, 'Manuella.germanos@lau.edu'),
(3, 'O', 'pos', 1, 'Manuella.germanos@lau.edu', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `organ`
--

CREATE TABLE `organ` (
  `email` varchar(255) NOT NULL,
  `idOrgan` int(11) NOT NULL,
  `bloodType` varchar(3) NOT NULL DEFAULT 'O',
  `rhesus` varchar(3) NOT NULL DEFAULT 'pos',
  `organ` varchar(20) NOT NULL DEFAULT 'kidney',
  `donatedTo` varchar(255) NOT NULL,
  `taken` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organ`
--

INSERT INTO `organ` (`email`, `idOrgan`, `bloodType`, `rhesus`, `organ`, `donatedTo`, `taken`) VALUES
('Manuella.germanos@lau.edu', 1, 'O', 'pos', 'heart', '', 0),
('Manuella.germanos@lau.edu', 2, 'O', 'pos', 'kidney', '', 0),
('Manuella.germanos@lau.edu', 3, 'O', 'pos', 'lung', '', 0),
('Manuella.germanos@lau.edu', 4, 'O', 'pos', 'pancreas', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `isBloodDonor` int(1) NOT NULL DEFAULT '0',
  `isOrganDonor` int(1) NOT NULL DEFAULT '0',
  `bloodType` varchar(3) NOT NULL DEFAULT 'O',
  `rhesus` varchar(5) NOT NULL DEFAULT 'pos',
  `name` varchar(45) NOT NULL DEFAULT 'user',
  `score` int(255) NOT NULL DEFAULT '0',
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `isBloodDonor`, `isOrganDonor`, `bloodType`, `rhesus`, `name`, `score`, `password`) VALUES
('hi@hi.com', 1, 0, 'O', 'pos', 'hi', 0, '.'),
('Manuella.germanos@lau.edu', 1, 1, 'O', 'pos', 'manuella', 288, '.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`idBlood`);

--
-- Indexes for table `organ`
--
ALTER TABLE `organ`
  ADD PRIMARY KEY (`idOrgan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `idBlood` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `organ`
--
ALTER TABLE `organ`
  MODIFY `idOrgan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
