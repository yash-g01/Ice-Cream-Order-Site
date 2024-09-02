-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2024 at 10:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Amul`
--

-- --------------------------------------------------------

--
-- Table structure for table `ALOGIN`
--

CREATE TABLE `ALOGIN` (
  `ADMIN_ID` varchar(16) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ALOGIN`
--

INSERT INTO `ALOGIN` (`ADMIN_ID`, `Password`) VALUES
('AdminYash', '$2y$10$QqSGOi6ltCsI4KbV097qwuUc91TfaKsmyq/60YYjAymox8ASilP9y');

-- --------------------------------------------------------

--
-- Table structure for table `LOGIN`
--

CREATE TABLE `LOGIN` (
  `Username` varchar(25) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `LOGIN`
--

INSERT INTO `LOGIN` (`Username`, `Password`) VALUES
('UserYash', '$2y$10$lFtopft4XsHwVTJ7kWsY0.dvPWGJYL.XVYmRolI8Reebaf41Euv/.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `O_ID` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `User` varchar(20) NOT NULL,
  `BoughtItemsArray` mediumtext NOT NULL,
  `Total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(4) NOT NULL,
  `Stock` int(4) NOT NULL,
  `Category` text NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`ID`, `Name`, `Price`, `Stock`, `Category`, `Image`) VALUES
(2, 'Cup Strawberry 65 mL', '10', 200, 'CUPS', '/uploadImage/Amul-Cup-Strawberry.jpg'),
(3, 'Tricone Choco Crunch 120 mL', '35', 200, 'CONES', '/uploadImage/Choco-Crunch_with_transparent.png'),
(4, 'Tricone Butterscotch 120 mL', '35', 200, 'CONES', '/uploadImage/Butterscotch_with_transparent.png'),
(5, 'Stick Asli Aam 80 mL', '20', 500, 'STICKS', '/uploadImage/Amul-STK-Asli-Aam.jpg'),
(6, 'Stick Punjabi Kulfi -  Mawa Elaichi 60 mL', '25', 200, 'STICKS', '/uploadImage/Amul-STK-Punjabi-Kulfi.webp'),
(7, 'FP - Combo pack Choco Chips [750 + 750 mL]', '290', 100, 'FP', '/uploadImage/Amul-Combo-Pack-Choco-Chips.jpg'),
(8, 'Tub Moroccan Dry Fruit 1 Ltr', '300', 100, 'FP', '/uploadImage/Moroccan-Dry-Fruit_with_transparent.png'),
(9, 'PP - Butterscotch 2 L', '325', 100, 'PP', '/uploadImage/butterscotch 2 L.png'),
(10, 'PP - Rajbhog 5 L', '1000', 30, 'PP', '/uploadImage/Amul-PP-Rajbhog-5L.jpg'),
(12, 'PP - Fruit N Nut Fantasy 2 L', '340', 200, 'PP', '/uploadImage/Amul-PP-FruitNNut-2L.jpg'),
(14, 'Cup Vanilla 65 mL', '10', 200, 'CUPS', '/uploadImage/Amul-Cup-Vanilla-Royale.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ALOGIN`
--
ALTER TABLE `ALOGIN`
  ADD PRIMARY KEY (`ADMIN_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`O_ID`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `O_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
