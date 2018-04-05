-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 mrt 2018 om 14:13
-- Serverversie: 10.1.31-MariaDB
-- PHP-versie: 7.2.3

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
-- Tabelstructuur voor tabel `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `Category` varchar(48) NOT NULL,
  `Properties` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`CategoryID`, `Category`, `Properties`) VALUES
(1, 'Processor', '{\r\n	\"fields\": [{\r\n			\"key\": \"Snelheid\",\r\n			\"value\": \"\"\r\n		},\r\n		{\r\n			\"key\": \"Boxed\",\r\n			\"value\": \"\"\r\n		}\r\n	]\r\n}'),
(2, 'Hardeschijf', '{\r\n	\"fields\": [{\r\n			\"key\": \"Capaciteit\",\r\n			\"value\": \"\"\r\n		},\r\n		{\r\n			\"key\": \"Snelheid\",\r\n			\"value\": \"\"\r\n		}\r\n	]\r\n}'),
(3, 'Kast', '{\r\n	\"fields\": [{\r\n			\"key\": \"Formfactor\",\r\n			\"value\": \"\"\r\n		},\r\n		{\r\n			\"key\": \"Met voeding\",\r\n			\"value\": \"\"\r\n		}\r\n	]\r\n}'),
(4, 'Laptop', '{\r\n	\"fields\": [{\r\n			\"key\": \"CPU\",\r\n			\"value\": \"\"\r\n		},\r\n		{\r\n			\"key\": \"Size\",\r\n			\"value\": \"\"\r\n		}\r\n	]\r\n}');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `customers`
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
-- Tabelstructuur voor tabel `images`
--

CREATE TABLE `images` (
  `ImageID` int(10) NOT NULL,
  `ProductID` int(10) NOT NULL,
  `Location` varchar(256) NOT NULL,
  `Featured` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `images`
--

INSERT INTO `images` (`ImageID`, `ProductID`, `Location`, `Featured`) VALUES
(2, 3, 'images/Products/Cover.jpg', 0),
(3, 3, 'images/Products/Cover.jpg', 0),
(6, 1, 'images/Products/Cover.jpg', 0),
(17, 2, 'images/Products/Fire_Spirit-1-150x150.jpg', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderdetailsID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `OrderDate` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
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
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`ProductID`, `CategoryID`, `ArtNumber`, `ArtName`, `Description`, `Price`, `Availability`, `Brand`, `Property1`, `Property2`) VALUES
(1, 4, 987654321, 'Cheddar', 'This is cheddar cheese, or is it?!', '249.95', 0, 'Lenovo', '3.5Ghz', 'Nee'),
(2, 2, 23456789, 'HP 16', 'Bij elke passie hoort een instrument: de Pavilion Power laptop is tegen elke uitdaging opgewassen. Met de nieuwste technologie', '399.00', 1, 'HP', '', ''),
(3, 3, 12345678, 'Asus 17', 'Bij elke passie hoort een instrument: de Asus Power laptop is tegen elke uitdaging opgewassen. Met de nieuwste technologie', '499.00', 1, 'Asus', '', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexen voor tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexen voor tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ImageID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexen voor tabel `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`OrderdetailsID`),
  ADD KEY `OrderID` (`OrderID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `categoryID` (`CategoryID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `images`
--
ALTER TABLE `images`
  MODIFY `ImageID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT voor een tabel `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `OrderdetailsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `orders` (`CustomerID`);

--
-- Beperkingen voor tabel `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Beperkingen voor tabel `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Beperkingen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orderdetails` (`OrderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
