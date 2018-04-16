-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 apr 2018 om 14:19
-- Serverversie: 10.1.30-MariaDB
-- PHP-versie: 7.2.1

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
  `Addition` varchar(5) NOT NULL,
  `City` varchar(48) NOT NULL,
  `Country` varchar(48) NOT NULL,
  `Business` int(1) NOT NULL,
  `Initials` varchar(48) NOT NULL,
  `Prefix` varchar(10) NOT NULL,
  `Lastname` varchar(64) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `customers`
--

INSERT INTO `customers` (`CustomerID`, `Email`, `Password`, `PhoneNumber`, `Street`, `Zipcode`, `HouseNumber`, `Addition`, `City`, `Country`, `Business`, `Initials`, `Prefix`, `Lastname`, `DOB`) VALUES
(1, 'henk@henk.henk', '99b1c0543c0bdfa0e745646833b586e53feb1076bf44633a488ae3f4e8c4c2b8d958115c827e2bd3a415c67b9c0212e13aa8899d28439ac8f7be6adad3b5fdfe', 2147483647, 'henk', '7067ak', 7581, '', 'Henkenstad', 'Belgie', 0, 'h', '', 'henk', '1990-08-15'),
(2, 'ivanfranken@gmail.com', 'c641cef660b2fef0fe448a5ea642f466370261a51629b735a2f4da24cc25fc849c89a768a3fbad173956a3062ecd79fc6601caf80b7c9add121114db814206ae', 314345678, 'dreef', '6996BC', 2, '', 'Drempt', 'Nederland', 0, 'ivan', '', 'franken', '1989-10-20');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `ProductID` int(10) NOT NULL,
  `NewPrice` decimal(10,2) NOT NULL,
  `ExpirationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `discounts`
--

INSERT INTO `discounts` (`id`, `ProductID`, `NewPrice`, `ExpirationDate`) VALUES
(1, 1, '49.00', '2018-05-25');

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
(13, 3, 'images/Products/ASUS_VivoBook_15_R540UA_DM202T.jpg', 1),
(14, 3, 'images/Products/ASUS_VivoBook_15_R540UA_DM202T__15_6___ultrabook@@pl6azn9j_31.jpg', 0),
(15, 3, 'images/Products/ASUS_VivoBook_15_R540UA_DM202T__15_6___ultrabook@@pl6azn9j_33.jpg', 0),
(19, 4, 'images/Products/OMEN_by_HP_17_an_001nd__1VA63EA___17_3___notebook@@pl8hzn70_30.jpg', 1),
(20, 4, 'images/Products/OMEN_by_HP_17_an_001nd__1VA63EA___17_3___notebook@@pl8hzn70_31.jpg', 0),
(21, 4, 'images/Products/OMEN_by_HP_17_an_001nd__1VA63EA___17_3___notebook@@pl8hzn70_32.jpg', 0),
(27, 1, 'images/Products/Cheddar_3.jpg', 1),
(28, 5, 'images/Products/Intel__Core_i7_8700K__3_7_GHZ__4_7_GHz_Turbo_Boost__socket_1151_processor@@hn7i03_30.jpg', 1),
(29, 6, 'images/Products/Intel__Core_i5_8400__2_8_GHz__4_0_GHz_Turbo_Boost__socket_1151_processor@@hn5i01.jpg', 1),
(30, 7, 'images/Products/AMD_Ryzen_5_1600__3_2_GHz__3_6_GHz_Turbo_Boost__socket_AM4_processor@@hr5a05.jpg', 1),
(31, 7, 'images/Products/AMD_Ryzen_5_1600__3_2_GHz__3_6_GHz_Turbo_Boost__socket_AM4_processor@@hr5a05_1.jpg', 0),
(32, 7, 'images/Products/AMD_Ryzen_5_1600__3_2_GHz__3_6_GHz_Turbo_Boost__socket_AM4_processor@@hr5a05_2.jpg', 0),
(33, 8, 'images/Products/HP_17_bs022nd__1VN62EA___17_3___notebook@@pl8hzn7c_30.jpg', 1),
(34, 8, 'images/Products/HP_17_bs022nd__1VN62EA___17_3___notebook@@pl8hzn7c_31.jpg', 0),
(35, 8, 'images/Products/HP_17_bs022nd__1VN62EA___17_3___notebook@@pl8hzn7c_32.jpg', 0),
(36, 10, 'images/Products/Seagate_BarraCuda_Pro__10_TB_Harde_schijf@@albs02.jpg', 1),
(37, 10, 'images/Products/Seagate_BarraCuda_Pro__10_TB_Harde_schijf@@albs02_1.jpg', 0),
(38, 10, 'images/Products/Seagate_BarraCuda_Pro__10_TB_Harde_schijf@@albs02_2.jpg', 0),
(39, 11, 'images/Products/Seagate_BarraCuda_Pro__4_TB__Harde_schijf@@ahbs11_30.jpg', 1),
(40, 11, 'images/Products/Seagate_BarraCuda_Pro__4_TB__Harde_schijf@@ahbs11_31.jpg', 0),
(41, 12, 'images/Products/Seagate_BarraCuda__1_TB_Harde_schijf@@aebs42.jpg', 1),
(42, 12, 'images/Products/Seagate_BarraCuda__1_TB_Harde_schijf@@aebs42_1.jpg', 0),
(43, 12, 'images/Products/Seagate_BarraCuda__1_TB_Harde_schijf@@aebs42_2.jpg', 0),
(44, 13, 'images/Products/Cooler_Master_MasterBox_Lite_5_RGB_tower_behuizing@@tqxm5j00_30.jpg', 1),
(45, 13, 'images/Products/Cooler_Master_MasterBox_Lite_5_RGB_tower_behuizing@@tqxm5j00_31.jpg', 0),
(46, 13, 'images/Products/Cooler_Master_MasterBox_Lite_5_RGB_tower_behuizing@@tqxm5j00_36.jpg', 0),
(47, 14, 'images/Products/Fractal_Design_Define_C_TG_tower_behuizing@@tqxhf031.jpg', 1),
(48, 14, 'images/Products/Fractal_Design_Define_C_TG_tower_behuizing@@tqxhf031_4.jpg', 0),
(49, 14, 'images/Products/Fractal_Design_Define_C_TG_tower_behuizing@@tqxhf031_7.jpg', 0),
(50, 15, 'images/Products/In_Win_D_Frame_2_0_Blue_tower_behuizing@@ttx5000d_30.jpg', 0),
(51, 15, 'images/Products/In_Win_D_Frame_2_0_Blue_tower_behuizing@@ttx5000d_31.jpg', 0),
(52, 15, 'images/Products/In_Win_D_Frame_2_0_Blue_tower_behuizing@@ttx5000d_32.jpg', 1),
(53, 1, 'images/Products/cheddar_1.jpg', 0),
(54, 1, 'images/Products/Cheddar_2.jpg', 0),
(55, 16, 'images/Products/dsc03545-1-150x150.jpg', 0),
(56, 17, 'images/Products/dsc03545-1-150x150.jpg', 0),
(57, 18, 'images/Products/ASUS_VivoBook_15_R540UA_DM202T.jpg', 0),
(58, 16, 'images/Products/chair.jpg', 1),
(59, 16, 'images/Products/cheddar_1.jpg', 0);

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

--
-- Gegevens worden geëxporteerd voor tabel `orderdetails`
--

INSERT INTO `orderdetails` (`OrderdetailsID`, `OrderID`, `ProductID`, `Amount`) VALUES
(1, 5, 1, 23),
(2, 5, 4, 2);

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

--
-- Gegevens worden geëxporteerd voor tabel `orders`
--

INSERT INTO `orders` (`OrderID`, `CustomerID`, `OrderDate`, `Status`) VALUES
(5, 2, '2018-04-13', 'In behandeling');

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
  `Availability` int(2) DEFAULT NULL,
  `Brand` varchar(100) NOT NULL,
  `Property1` varchar(100) NOT NULL,
  `Property2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`ProductID`, `CategoryID`, `ArtNumber`, `ArtName`, `Description`, `Price`, `Availability`, `Brand`, `Property1`, `Property2`) VALUES
(1, 4, 1337420, 'Cheddar', 'Cheddar cheese is a relatively hard, off-white (or orange if spices such as annatto are added), sometimes sharp-tasting (i.e., bitter), natural cheese. Originating in the English village of Cheddar in Somerset, cheeses of this style are produced beyond the region and in several countries around the world.\r\n\r\nCheddar is the most popular type of cheese in the UK, accounting for 51% of the country\'s Â£1.9 billion annual cheese market. It is the second-most popular cheese in the US (behind mozzarella), with an average annual consumption of 10 lb (4.5 kg) per capita. The US produced approximately 3,000,000,000 lb (1,300,000 long tons; 1,400,000 tonnes) in 2014, and the UK 258,000 long tons (262,000 tonnes) in 2008.', '6.90', 0, 'Cheasy', 'Sticky', '1KG'),
(2, 3, 1236849, 'Not Cheddar', 'This really isn\'t cheddar you know.', '12.95', 1, 'Cheese', 'xATX', '0'),
(3, 4, 1402827, 'ASUS VivoBook 15 R540UA-DM202T', 'De ASUS VivoBook 15 R540UA-DM202T is de perfecte combinatie van pracht en prestaties. De VivoBook 15 is een Windows 10 laptop die wordt aangedreven door een Intel Core-processor met 8GB RAM en Intel HD Graphics 620 grafische chip. Hij beschikt over een SSD met een capaciteit van 256GB. Het is de ideale laptop voor het dagelijkse computergebruik en entertainment.\r\n\r\nDe VivoBook 15 is voorzien van een Full HD-scherm met 100% sRGB-kleurengamma, voor echt meeslepende beelden en levensechte kleuren. En met zijn 15,6\" paneel voelt het als het hebben van een eigen draagbare bioscoop. ASUS Splendid visuele optimalisatietechnologie zorgt voor de allerbeste beelden voor elk type content. Het beschikt over vier weergavemodi die met één klik toegankelijk zijn. Normale modus (Normal) is ideaal voor dagelijkse taken; Levendige modus (Vivid) optimaliseert het contrast om prachtige foto\'s en video te leveren; de Oogzorg-modus (Eye Care) vermindert blauw-licht niveaus om vermoeide ogen tegen te gaan; en de handmatige modus (Manual) zorgt voor gepersonaliseerde kleuraanpassingen.', '499.00', 1, 'ASUS', 'Intel Core i5-7200U', '15 Inch'),
(4, 4, 1366183, 'OMEN by HP 17-an-001nd (1VA63EA)', 'Wanneer de concurrentie hoog is, overwinnen de helden die al hun kansen grijpen. De OMEN laptop, die is voorzien van krachtige hardware en een robuust design, levert mobiele topprestaties waardoor je vrijwel overal elke game-uitdaging kunt aangaan.\r\nZoveel kracht schrikt je tegenstanders af. Een Intel Core-processor en grafische kaart van NVIDIA zijn inbegrepen. En dankzij de zeer effectieve koeling ben je klaar om zelfs in de heftigste AAA-titels de overwinning te behalen.\r\nUpgrade heel eenvoudig naar de nieuwste hardware met ï¿½ï¿½n toegangsklep naar alle interne componenten. Met drie USB Type A-poorten en een HDMI-poort speel je gemakkelijk in op elke actie.\r\nHet Dragon Red backlit-toetsenbord met gemarkeerde WASD-toetsen, aanpasbare macro\'s, rollover van 26 toetsen en anti-ghosting detecteert elke toetsaanslag. Op een 1080p-scherm met een refresh-rate van 60 Hz strijd je met een kristalheldere weergave.', '949.00', 0, 'OMEN by HP', 'Intel Core i5-7300HQ', '17 Inch'),
(5, 1, 1380849, 'Intelï¿½ Core i7-8700K, 3,7 GHZ (4,7 GHz', 'De Intel Core i7-8700K CPU, codenaam \"Coffee Lake-S\", beschikt over 6 verwerkingseenheden en is geschikt om op een moederbord met Socket 1151 te plaatsen. De processor beschikt over 12 MB Level 3 cache en werkt op een snelheid van 3700 MHz met een HyperTransport bus van 8000 MT/s. De Intel Core i7-8700K beschikt over een interne geheugencontroller, met twee geheugen kanalen.\r\n\r\nDe Intel Core i7-8700K CPU werkt alleen met de Intel 3xx serie chipsets.', '349.00', 0, 'Intel', '3.7Ghz', 'Boxed'),
(6, 1, 1380844, 'Intelï¿½ Core i5-8400, 2,8 GHz (4,0 GHz ', 'De Intel Core i5-8400 CPU, codenaam \"Coffee Lake-S\", beschikt over 6 verwerkingseenheden en is geschikt om op een moederbord met Socket 1151 te plaatsen. De processor beschikt over 9216 KB Level 3 cache en werkt op een snelheid van 2800 MHz met een HyperTransport bus van 8000 MT/s. De Intel Core i5-8400 beschikt over een interne geheugencontroller, met twee geheugen kanalen.\r\n\r\nDe Intel Core i5-8400 CPU werkt alleen met de Intel 3xx serie chipsets.', '169.00', 0, 'Intel', '2.8Ghz', 'Tray'),
(7, 1, 1340580, 'AMD Ryzen 5 1600, 3,2 GHz (3,6 GHz Turbo', 'De AMD Ryzen 5 1600 CPU, codenaam \"Summit Ridge\", beschikt over zes verwerkingseenheden en is geschikt om op een moederbord met Socket AM4 te plaatsen. De processor beschikt over 3072 KB Level 2 en 16384 KB Level 3 cache en werkt op een snelheid van 3200 MHz. De AMD Ryzen 5 1600 beschikt over een interne geheugencontroller, met twee geheugen kanalen.', '169.00', 0, 'AMD', '3.2Ghz', 'Boxed'),
(8, 4, 1366204, 'HP 17-bs022nd (1VN62EA), 17.3', 'Lever de hele dag topprestaties met een stijlvolle laptop waarmee je verbonden blijft en de dagelijkse taken moeiteloos uitvoert. Dankzij een betrouwbare werking en een lange batterijlevensduur kun je gemakkelijk surfen, streamen en contact houden met vrienden en familie.\r\nMet de Intel-processors ben je zeker van de betrouwbare prestaties die nodig zijn om te werken en spelen. Deze duurzame laptop is ontworpen om moeiteloos te doen wat jij wilt.\r\n\r\nDeze van binnen en van buiten schitterend ontworpen 17,3-inch (43,9-cm) HP laptop sluit perfect aan bij jouw lifestyle. Speelse patronen en unieke texturen geven je leven meer kleur.\r\nGeniet van entertainment en houd contact met vrienden en familie op een rijk HD+-scherm en HD-camera. Sla gemakkelijk je favoriete muziek, films en foto\'s op om er altijd van te genieten.', '649.00', 0, 'HP', 'Intel Core i3-6006U', '17 Inch'),
(10, 2, 1289523, 'Seagate BarraCuda Pro, 10 TB Harde schij', 'De compromisloze BarraCuda Pro combineert toonaangevende opslagcapaciteit met snelheden van 7200 RPM voor snelle prestaties en korte laadtijden tijdens het gamen of het uitvoeren van zware werkbelastingen. Van computers vol met foto\'s en herinneringen tot gaming-pc\'s die meer speelruimte nodig hebben - BarraCuda groeit met je mee.\r\nDe BarraCuda Pro van Seagate heeft een opslagcapaciteit van 10000 GB, een toerental van 7200 rpm en een cache van 256 MB. De 3,5 inch SATA harddisk is voorzien van een Serial ATA/600 interface.', '359.00', 0, 'Seagate', '10TB', '7200rpm'),
(11, 2, 1390673, 'Seagate BarraCuda Pro, 4 TB Harde schijf', 'De compromisloze BarraCuda Pro combineert toonaangevende opslagcapaciteit met snelheden van 7200 RPM voor snelle prestaties en korte laadtijden tijdens het gamen of het uitvoeren van zware werkbelastingen. Van computers vol met foto\'s en herinneringen tot gaming-pc\'s die meer speelruimte nodig hebben - BarraCuda groeit met je mee.\r\nDe BarraCuda Pro van Seagate heeft een opslagcapaciteit van 4000 GB, een toerental van 7200 rpm en een cache van 128 MB. De 3,5 inch SATA harddisk is voorzien van een Serial ATA/600 interface.', '169.90', 0, 'Seagate', '4TB', '7200rpm'),
(12, 2, 1289337, 'Seagate BarraCuda, 1 TB Harde schijf', 'De compromisloze BarraCuda combineert toonaangevende opslagcapaciteit met snelheden voor snelle prestaties en korte laadtijden tijdens het gamen of het uitvoeren van zware werkbelastingen. Van computers vol met foto\'s en herinneringen tot gaming-pc\'s die meer speelruimte nodig hebben - BarraCuda groeit met je mee.\r\nDe BarraCuda van Seagate heeft een opslagcapaciteit van 1000 GB en een cache van 64 MB. De 3,5 inch SATA harddisk is voorzien van een Serial ATA/600 interface.', '59.00', 0, 'Seagate', '1TB', '7200rpm'),
(13, 3, 1366309, 'Cooler Master MasterBox Lite 5 RGB tower', 'De MasterBox Lite 5 RGB van Cooler Master is een Midi Tower met plaats voor een ATX voeding. De behuizing beschikt over twee interne 3,5\", ï¿½ï¿½n interne 2,5\" inbouwsloten en zeven Full Size slotopeningen.\r\nDe MasterBox Lite 5 RGB wordt geleverd met vier casefans. De behuizing biedt plaats aan grafische kaarten met een lengte tot 400mm en CPU-koelers met een maximale hoogte tot 160mm en bevat een zijpaneel met een window.', '61.90', 0, 'Cooler Master', 'ATX', 'Nee'),
(14, 3, 1361552, 'Fractal Design Define C TG tower-behuizi', 'De Define C TG van Fractal Design is een Midi Tower met plaats voor een ATX voeding. De behuizing beschikt over twee interne 3,5\", drie interne 2,5\" inbouwsloten, waarvan de 3,5\" sloten, toolless zijn ingericht en zeven Full Size slotopeningen.\r\nDe Define C TG wordt geleverd met twee casefans en biedt plaats aan vijf extra casefans. De behuizing biedt plaats aan grafische kaarten met een lengte tot 315mm en CPU-koelers met een maximale hoogte tot 172mm en bevat een zijpaneel met een window.', '91.90', 0, 'Fractal Design', 'ATX', 'Nee'),
(15, 3, 1310462, 'In Win D-Frame 2.0 Blue tower-behuizing', 'Het ontwerp van het D-Frame 2.0 van In Win vindt zijn oorsprong bij de vrijheid, individualiteit en impulsiviteit van off-road motorfietsen. De combinatie van de stalen buizen, de steunen met diepe groeven en de voeding welke vormgegeven is naar een lucht gekoelde motor en gehard glas maakt van het D-Frame 2.0 een echt kunstwerk. \r\n\r\nDe behuizing kan geopend worden op twee plekken zodat deze geopend kan worden op twee manieren of je kan het bovengedeelte zelfs helemaal loskoppelen.\r\nDoor de open structuur koelt de behuizing uiterst goed. Koude lucht wordt aan de voorzijde aangezogen en kan langs de bovenzijde weer weg. ', '1299.00', 0, 'In Win', 'ATX, E-ATX, ï¿½ATX', 'Ja'),
(16, 2, 123456789, 'Test artikel', 'Dit is een test artikel', '1234.00', 0, '', '256GB', '7200RMP'),
(17, 2, 1234567892, 'Test artikel', 'Dit is een test artikel', '12345.00', 0, '', '256GB', '7200RMP'),
(18, 1, 12334, 'test', 'test', '2345.00', 0, '', '7200', 'ja'),
(19, 1, 123456789, 'Testartikel', 'Dit is maar een test artikel', '1234.00', 0, 'Intel', '3ghz', 'nee');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reparaties`
--

CREATE TABLE `reparaties` (
  `id` int(100) NOT NULL,
  `CustomerID` int(100) NOT NULL,
  `ProductID` int(100) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reparaties`
--

INSERT INTO `reparaties` (`id`, `CustomerID`, `ProductID`, `ProductName`, `Description`, `Status`) VALUES
(8, 2, 0, 'test', 'Dit is een test', 'Defect'),
(9, 2, 0, 'waarom', 'dit is een test', 'Voltooid'),
(10, 2, 18, '', 'test', 'In behandeling'),
(11, 2, 17, '', 'test', 'In behandeling'),
(12, 2, 17, '', 'test', 'In behandeling');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `retourneren`
--

CREATE TABLE `retourneren` (
  `id` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Reason` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `retourneren`
--

INSERT INTO `retourneren` (`id`, `CustomerID`, `OrderID`, `ProductID`, `Amount`, `Reason`, `Message`, `Status`) VALUES
(5, 2, 5, 18, 2, 'wrongProduct', '', 'Ontvangen'),
(6, 2, 5, 17, 3, 'notNeeded', '', 'Aangemeld'),
(7, 2, 5, 15, 1, 'notAsExpected', '', 'Voltooid');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rma`
--

CREATE TABLE `rma` (
  `id` int(100) NOT NULL,
  `CustomerID` int(100) NOT NULL,
  `OrderID` int(100) NOT NULL,
  `ProductID` int(100) NOT NULL,
  `Oorzaak` varchar(1000) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `rma`
--

INSERT INTO `rma` (`id`, `CustomerID`, `OrderID`, `ProductID`, `Oorzaak`, `Status`) VALUES
(3, 2, 5, 17, 'test', 'In behandeling'),
(4, 2, 5, 18, 'test', 'In behandeling'),
(5, 2, 5, 17, 'test', 'Ontvangen');

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
-- Indexen voor tabel `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `ProductID_2` (`ProductID`);

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
-- Indexen voor tabel `reparaties`
--
ALTER TABLE `reparaties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexen voor tabel `retourneren`
--
ALTER TABLE `retourneren`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CustomerID` (`CustomerID`,`OrderID`,`ProductID`),
  ADD KEY `OrderID` (`OrderID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexen voor tabel `rma`
--
ALTER TABLE `rma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `OrderID` (`OrderID`),
  ADD KEY `ProductID` (`ProductID`);

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
  MODIFY `CustomerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `images`
--
ALTER TABLE `images`
  MODIFY `ImageID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT voor een tabel `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `OrderdetailsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT voor een tabel `reparaties`
--
ALTER TABLE `reparaties`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT voor een tabel `retourneren`
--
ALTER TABLE `retourneren`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `rma`
--
ALTER TABLE `rma`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Beperkingen voor tabel `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Beperkingen voor tabel `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`) ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`) ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `reparaties`
--
ALTER TABLE `reparaties`
  ADD CONSTRAINT `reparaties_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`);

--
-- Beperkingen voor tabel `retourneren`
--
ALTER TABLE `retourneren`
  ADD CONSTRAINT `retourneren_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`),
  ADD CONSTRAINT `retourneren_ibfk_2` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `retourneren_ibfk_3` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Beperkingen voor tabel `rma`
--
ALTER TABLE `rma`
  ADD CONSTRAINT `rma_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`),
  ADD CONSTRAINT `rma_ibfk_2` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `rma_ibfk_3` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
