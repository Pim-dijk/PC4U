-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 10:32 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `Category` varchar(48) NOT NULL,
  `Properties` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `Category`, `Properties`) VALUES
(1, 'Processor', '{\r\n	\"fields\": [{\r\n			\"key\": \"Snelheid\",\r\n			\"value\": \"\"\r\n		},\r\n		{\r\n			\"key\": \"Boxed\",\r\n			\"value\": \"\"\r\n		}\r\n	]\r\n}'),
(2, 'Hardeschijf', '{\r\n	\"fields\": [{\r\n			\"key\": \"Capaciteit\",\r\n			\"value\": \"\"\r\n		},\r\n		{\r\n			\"key\": \"Snelheid\",\r\n			\"value\": \"\"\r\n		}\r\n	]\r\n}'),
(3, 'Kast', '{\r\n	\"fields\": [{\r\n			\"key\": \"Formfactor\",\r\n			\"value\": \"\"\r\n		},\r\n		{\r\n			\"key\": \"Met voeding\",\r\n			\"value\": \"\"\r\n		}\r\n	]\r\n}'),
(4, 'Laptop', '{\r\n	\"fields\": [{\r\n			\"key\": \"CPU\",\r\n			\"value\": \"\"\r\n		},\r\n		{\r\n			\"key\": \"Size\",\r\n			\"value\": \"\"\r\n		}\r\n	]\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(10) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `PhoneNumber` int(15) NOT NULL,
  `Street` varchar(48) NOT NULL,
  `Zipcode` varchar(10) NOT NULL,
  `HouseNumber` int(3) NOT NULL,
  `HNAddition` varchar(5) NOT NULL,
  `City` varchar(48) NOT NULL,
  `Country` varchar(48) NOT NULL,
  `Private` int(1) NOT NULL,
  `Firstname` varchar(48) NOT NULL,
  `Lastname` varchar(64) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ImageID` int(10) NOT NULL,
  `ProductID` int(10) NOT NULL,
  `Location` varchar(256) NOT NULL,
  `Featured` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ImageID`, `ProductID`, `Location`, `Featured`) VALUES
(6, 1, 'images/Products/Cover.jpg', 0),
(17, 1, 'images/Products/Fire_Spirit-1-150x150.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(8) NOT NULL,
  `CategoryID` int(8) DEFAULT NULL,
  `ArtNumber` int(8) NOT NULL,
  `ArtName` varchar(40) NOT NULL,
  `Description` text NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Availability` int(2) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Property1` varchar(100) NOT NULL,
  `Property2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `CategoryID`, `ArtNumber`, `ArtName`, `Description`, `Price`, `Availability`, `Brand`, `Property1`, `Property2`) VALUES
(1, 4, 987654321, 'Cheddar', 'This is cheddar cheese, or is it?!', '249.95', 0, 'Lenovo', '3.5Ghz', 'Nee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ImageID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `categoryID` (`CategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `ImageID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
