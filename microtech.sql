-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2021 at 09:34 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

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

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `usermail` varchar(50) NOT NULL,
  `addr_line1` varchar(200) NOT NULL,
  `addr_line2` varchar(200) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip` int(7) NOT NULL,
  PRIMARY KEY (`usermail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `passwd` varchar(40) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `usermail` varchar(50) NOT NULL,
  `itemid` varchar(10) NOT NULL,
  `no_of_items` int(4) NOT NULL,
  PRIMARY KEY (`usermail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `item_id` varchar(10) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `item_price` int(7) NOT NULL,
  `img_name1` varchar(100) NOT NULL,
  `img_name2` varchar(100) DEFAULT NULL,
  `img_name3` varchar(100) DEFAULT NULL,
  `img_name4` varchar(100) DEFAULT NULL,
  `long_description` varchar(4000) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `category`, `brand`, `item_price`, `img_name1`, `img_name2`, `img_name3`, `img_name4`, `long_description`) VALUES
('01', 'Samsung Galaxy Note20 5G Gold', 'smartphone', 'samsung', 174990, 'images/products/1.0.webp', 'images/products/1.1.webp', 'images/products/1.2.jpeg', 'images/products/1.3.webp', 'It\'s the ultimate gaming experience that goes where you go. It\'s a director-grade 8K video camera. It\'s a multitasking computer suite. It\'s anything but your average smartphone. Introducing the Power phone that forever changes how you work and play.'),
('02', 'Samsung Galaxy Z Fold Black', 'smartphone', 'samsung', 399990, 'images/products/2.0.jpg', 'images/products/2.1.jpg', 'images/products/2.2.jpg', 'images/products/2.3.jpg', 'This is everything you\'d want in a premium, durable, 5G smartphone. Then we made it unfold - revealing a massive screen so you can watch, work and play like never before.'),
('03', 'Huawei Watch GT 2 Pro', 'smartwatch', 'huawei', 52199, 'images/products/3.0.jpg', 'images/products/3.1.jpg', 'images/products/3.2.jpg', 'images/products/3.3.jpg', 'The wear-resistant sapphire watch dial pairs seamlessly with the titanium frame for a lightweight and solid design. The glossy and skin-friendly ceramic back ensures a comfortable wearing. With sophisticated craftsmanship, HUAWEI WATCH GT 2 Pro reveals a refined taste with perfect balance of art and technology.'),
('04', 'Sony Mark 4 White', 'audio', 'sony', 74999, 'images/products/4.0.jpg', 'images/products/4.1.jpg', 'images/products/4.2.jpg', 'images/products/4.3.jpg', 'No matter where you go, the Sony WH-1000XM4 Wireless Noise-Canceling Over-Ear Headphones deliver pristine sound quality while automatically adjusting ambient sound according to your activity and registered locations, leaving your hands and mind free from the hassle of changing settings just to hear what you want to hear. '),
('05', 'MacBook Air M1 8GB 256GB SpaceGray', 'laptop', 'apple', 255000, 'images/products/5.0.webp', 'images/products/5.1.webp', 'images/products/5.2.webp', 'images/products/5.3.webp', 'Thinnest, lightest notebook, completely transformed by the Apple M1 chip. CPU speeds up to 3.5x faster. GPU speeds up to 5x faster. Our most advanced Neural Engine for up to 9x faster machine learning. The longest battery life ever in a MacBook Air. And a silent, fan less design. This much power has never been this ready to go.'),
('06', 'Apple ipad Pro 11 256GB SpaceGray', 'tablet', 'apple', 275999, 'images/products/6.0.jpg', 'images/products/6.1.jpg', 'images/products/6.2.jpg', 'images/products/6.3.jpg', 'The ultimate iPad experience. Now with breakthrough M1 performance, a breathtaking XDR display, and blazing‑fast 5G wireless.'),
('07', 'Samsung Travel Adapter 45W', 'accessories', 'samsung', 7190, 'images/products/7.0.jpg', 'images/products/7.1.jpg', 'images/products/7.2.jpg', 'images/products/7.3.jpg', 'Plug your Galaxy Note10+ into the 45W Travel Adapter to fully charge with incredible speed. More powerful than previous travel adapters, it harnesses the power of Super Fast Charging 2.0 makes sure you\'re not down for long.'),
('08', 'Samsung Galaxy Watch Active 2', 'smartwatch', 'samsung', 66290, 'images/products/8.0.jpg', 'images/products/8.1.jpg', 'images/products/8.2.jpg', 'images/products/8.3.jpg', 'Stay connected with a lifestyle and health partner on your wrist that gives you advice in the moment. Get more precise information on your health on a bigger screen with a watch that has your wellness in mind. Galaxy Watch Active2 tells you what you need to know when you need it.');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE IF NOT EXISTS `orderdetails` (
  `orderid` varchar(10) NOT NULL,
  `itemid` varchar(10) NOT NULL,
  `no_of_items` int(4) NOT NULL,
  PRIMARY KEY (`orderid`,`itemid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` varchar(10) NOT NULL,
  `emai` varchar(50) NOT NULL,
  `price` int(7) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `item_id` varchar(10) NOT NULL,
  `no_of_items` int(3) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(50) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email_verification_link` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
