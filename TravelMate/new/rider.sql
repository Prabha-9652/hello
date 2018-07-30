-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 06:34 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `rider`
--

CREATE TABLE `rider` (
  `Name` varchar(30) NOT NULL,
  `phn` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `vnum` varchar(10) NOT NULL,
  `start` varchar(20) NOT NULL,
  `time` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rider`
--

INSERT INTO `rider` (`Name`, `phn`, `email`, `vnum`, `start`, `time`) VALUES
('Prabhakar', 8978485738, 'gpr965@gmail.com', 'AP07BJ5029', 'GNT', 60),
('Jayanth', 9876543212, 'kumarjayanthg@gmail.com', 'AP07CS0550', 'GWK', 20),
('Prasanth', 9543110876, 'lovelyprasanth@gmail.com', 'AP07CS0577', 'Hostel', 5),
('Mohith', 987654321, 'mohithrockin@gmail.com', 'AP07CS0584', 'SS MARKET', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rider`
--
ALTER TABLE `rider`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
