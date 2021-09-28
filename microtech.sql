-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2021 at 11:33 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

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
('hasinisama99@gmail.com', 'No: 277/C,', 'Makewita,', 'Ja-Ela', 'Sri Lanka', 11350);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `email` varchar(50) NOT NULL,
  `passwd` varchar(40) NOT NULL,
  `f_name` varchar(30) DEFAULT NULL,
  `l_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`email`, `passwd`, `f_name`, `l_name`) VALUES
('hasini@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Hasini', 'Samarathunga'),
('kajanthan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Suresh', 'Kajanthan'),
('krishan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Krishan', 'Shamod'),
('pasan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Pasan', 'Jayawardene');

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
  `item_name` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `item_price` int(7) NOT NULL,
  `img_name1` varchar(100) NOT NULL,
  `img_name2` varchar(100) DEFAULT NULL,
  `img_name3` varchar(100) DEFAULT NULL,
  `img_name4` varchar(100) DEFAULT NULL,
  `long_description` varchar(4000) NOT NULL
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

CREATE TABLE `orderdetails` (
  `order_id` varchar(10) NOT NULL,
  `item_id` varchar(10) NOT NULL,
  `no_of_items` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`order_id`, `item_id`, `no_of_items`) VALUES
('001', '01', 1),
('002', '03', 1),
('003', '04', 1),
('004', '07', 2),
('005', '06', 1),
('006', '05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(10) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `revenue` int(7) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_email`, `revenue`, `order_time`) VALUES
('001', 'hasinisama99@gmail.com', 174990, '2021-09-28 17:41:43'),
('002', 'hasinisama99@gmail.com', 52199, '2021-09-28 17:41:43'),
('003', 'hasinisama99@gmail.com', 74999, '2021-09-28 17:41:43'),
('004', 'hasinisama99@gmail.com', 14380, '2021-09-28 17:41:43'),
('005', 'hasinisama99@gmail.com', 275999, '2021-09-28 20:57:46'),
('006', 'hasinisama99@gmail.com', 255000, '2021-09-28 20:57:46');

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
  `email_verification_link` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `f_name`, `l_name`, `password`, `email_verification_link`, `email_verified_at`, `status`) VALUES
('hasinisama99@gmail.com', 'Hasini', 'Samarathunga', '81dc9bdb52d04dc20036dbd8313ed055', '6008ad9b551eba21f097ba66b63f3bc53631', '2021-09-26 16:58:28', 1);

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
  ADD PRIMARY KEY (`usermail`,`itemid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`order_id`,`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

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
