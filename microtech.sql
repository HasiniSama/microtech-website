-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 23, 2021 at 08:27 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `usermail` varchar(50) NOT NULL,
  `addr_line1` varchar(200) NOT NULL,
  `addr_line2` varchar(200) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`usermail`, `addr_line1`, `addr_line2`, `city`, `country`, `zip`) VALUES
('aliquet@eu.ca', '346', 'Dictum. Av.', 'Veda Zamora', 'Sri Lanka', 32435),
('curabitur.dictum@velitsed.ca', '3586', 'Mus. St.', 'Veda Zamora', 'Sri Lanka', 23435),
('donec.dignissim@loremauctor.net', '676', 'Varius Rd.', 'Veda Zamora', 'Sri Lanka', 32435),
('id.mollis@habitantmorbitristique.org', '876', 'Varius Rd.', 'Veda Zamora', 'Sri Lanka', 23543),
('libero.proin.sed@ettristiquepellentesque.co.uk', '676', 'Varius Rd.', 'Veda Zamora', 'Sri Lanka', 23435),
('mauris.a.nunc@lacusetiambibendum.com', '762', 'Diam Road', 'Veda Zamora', 'Sri Lanka', 32435),
('phasellus.ornare@etiamimperdiet.net', '676', 'Varius Rd', 'Veda Zamora', 'Sri Lanka', 23435),
('sed.diam.lorem@quisquenonummyipsum.ca', '312', 'Varius Rd', 'Veda Zamora', 'Sri Lanka', 23435),
('ullamcorper.magna@risusdonecegestas.net', '842', 'liberto proin', 'Veda Zamora', 'Sri Lanka', 32435);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `passwd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `usermail` varchar(50) NOT NULL,
  `itemid` varchar(10) NOT NULL,
  `no_of_items` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` varchar(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `item_price` int(7) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  `long_description` varchar(4000) NOT NULL,
  `short_description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderid` varchar(10) NOT NULL,
  `itemid` varchar(10) NOT NULL,
  `no_of_items` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` varchar(10) NOT NULL,
  `emai` varchar(50) NOT NULL,
  `price` int(7) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `item_id` varchar(10) NOT NULL,
  `no_of_items` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mobile_no` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `f_name`, `l_name`, `password`, `mobile_no`) VALUES
('adipiscing.fringilla.porttitor@dolornulla.ca', 'Vance', 'Taylor', 'OEY09ORB3WY', '264-751-4291'),
('aliquet@eu.ca', 'Austin', 'Gaines', 'XDC95TJB0NG', '257-794-6688'),
('curabitur.dictum@velitsed.ca', 'Henry', 'Sandoval', 'CTQ26PIS0SY', '789-244-5650'),
('cursus.nunc@egestassedpharetra.co.uk', 'Dennis', 'Cooke', 'WNY64ACF3FV', '174-243-8186'),
('donec.dignissim@loremauctor.net', 'Ralph', 'Flynn', 'ADM43WOG4ZW', '341-415-3878'),
('enim@lobortistellus.ca', 'Isabella', 'Blankenship', 'OLI31UBS7KN', '480-711-2723'),
('et@quam.com', 'Jocelyn', 'Dalton', 'VQG43PYD8KL', '858-868-4753'),
('id.mollis@habitantmorbitristique.org', 'Courtney', 'Bird', 'QJY40SIK8IX', '863-716-2248'),
('libero.proin.sed@ettristiquepellentesque.co.uk', 'Veda', 'Zamora', 'RMX96THY3ZJ', '876-842-6028'),
('mauris.a.nunc@lacusetiambibendum.com', 'Clare', 'Bennett', 'CLT29DOQ9IO', '145-685-9435'),
('mi.lacinia@sollicitudin.com', 'Oren', 'Battle', 'HVJ86JNX1XP', '118-384-3682'),
('nunc@ametnulla.ca', 'Adrian', 'Stephens', 'SSW21BLE7DR', '215-590-4892'),
('phasellus.ornare@etiamimperdiet.net', 'Lucius', 'Huffman', 'WZW75SES0GG', '249-174-3383'),
('sed.diam.lorem@quisquenonummyipsum.ca', 'Jesse', 'Pate', 'IMW70YUI5TO', '965-479-3052'),
('ullamcorper.magna@risusdonecegestas.net', 'Galvin', 'Mcgee', 'PYE43UJU7TG', '115-482-5622');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`usermail`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`usermail`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderid`,`itemid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
