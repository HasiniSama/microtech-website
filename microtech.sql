-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 29, 2021 at 01:32 PM
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
('08', 'Samsung Galaxy Watch Active 2', 'smartwatch', 'samsung', 66290, 'images/products/8.0.jpg', 'images/products/8.1.jpg', 'images/products/8.2.jpg', 'images/products/8.3.jpg', 'Stay connected with a lifestyle and health partner on your wrist that gives you advice in the moment. Get more precise information on your health on a bigger screen with a watch that has your wellness in mind. Galaxy Watch Active2 tells you what you need to know when you need it.'),
('31', 'Apple Watch SE (2020) White', 'smartwatch', 'apple', 102541, 'images/products/31.0.jpg', NULL, NULL, NULL, 'Features the same larger display size as Series 6, fall detection, a compass, and an always-on altimeter'),
('32', 'Apple Watch 6 (2020)', 'smartwatch', 'apple', 121999, 'images/products/32.0.png', NULL, NULL, NULL, 'The most advanced Apple Watch yet, with a blood oxygen sensor and app, the ECG app, and the Always-On Retina display.'),
('33', 'Apple Mac Book Pro M1 (2020) SPACE GREY', 'laptop', 'apple', 377582, 'images/products/33.0.jpg', NULL, NULL, NULL, 'The Apple M1 chip gives the 13‑inch MacBook Pro speed and power beyond belief. With up to 2.8x CPU performance. Up to 5x the graphics speed. Our most advanced Neural Engine for up to 11x faster machine learning. And up to 20 hours of battery life — the longest of any Mac ever. It’s our most popular pro notebook, taken to a whole new level.'),
('34', 'Apple Pencil (2nd Generation)', 'accessories', 'apple', 31999, 'images/products/34.0.jpeg', NULL, NULL, NULL, 'Intuitive, precise and magical, the latest Apple Pencil makes note-taking, writing and drawing even better. Apple Pencil magnetically attaches to iPad Pro and charges wirelessly, so it s always ready when you need it. And it s easy to switch between the tools you need with a simple double-tap. Go ahead, make your mark.'),
('35', 'iPhone 12 - Black 256GB', 'smartphone', 'apple', 212999, 'images/products/35.0.jpeg', NULL, NULL, NULL, 'A superpowerful chip. 5G speed. An advanced dual-camera system. A Ceramic Shield front that\'s tougher than any smartphone glass. And a bright, beautiful OLED display. iPhone 12 has it all — in two great sizes.'),
('36', 'Asus Zenbook Pro Duo 15 OLED', 'laptop', 'asus', 590000, 'images/products/36.0.jpg', NULL, NULL, NULL, 'Take your creativity and productivity to the next level with the groundbreaking ASUS ZenBook Pro Duo! Designed to give you the ultimate edge in workflow efficiency, this powerful RTX Studio Laptop features a full-width 4K ASUS ScreenPad™ Plus that works seamlessly with the main 4K UHD OLED display. It’s never been this easy to harness your full creative power.\r\n'),
('37', 'ASUS X512DA VivoBook 2021', 'laptop', 'asus', 158999, 'images/products/37.0.jpg', NULL, NULL, NULL, 'Thin and Light Laptop 15.6 FHD AMD 4-Core RYZEN 5 3500U 8GB DDR4 512GB NVMe SSD AMD Radeon Vega 8 Graphics USB-C WiFi Webcam HDMI Windows 10 Home w/ RE 32GB USB 3.0 Drive'),
('38', 'Mi Watch Lite', 'smartwatch', 'xiaomi', 12499, 'images/products/38.0.jpeg', NULL, NULL, NULL, 'Mi Watch Lite is not just a smart watch, it has its own unique personality.\r\nThree color options for the watch case, five color options for the strap. Over 100 themed watch faces and watch face function\r\ncustomization* to satisfy your ever-changing style.'),
('39', 'Xiaomi Redmi 10A', 'smartphone', 'xiaomi', 22900, 'images/products/39.0.jpeg', NULL, NULL, NULL, 'The large display allows you to fully immerse yourself in the virtual world. With blue light protection certification, your eyes will be\r\nat ease even after spending long hours on your phone. With 34 days of standby-battery time, this battery provides power that lasts.'),
('40', 'Xiaomi Pad 5', 'tablet', 'xiaomi', 54000, 'images/products/40.0.jpeg', NULL, NULL, NULL, 'The large 11\" screen, stylish design and top-of-the-line configuration is guaranteed to meet your needs across a wide range of scenarios. The Qualcomm® Snapdragon™ 860 and 120Hz high refresh rate provides you with a super smooth experience. The extra-large 8720mAh(typ) battery provides you with the power that you want.'),
('41', 'SAMSUNG GALAXY TAB A 10.1 (LTE)', 'tablet', 'samsung', 57490, 'images/products/41.0.jpg', NULL, NULL, NULL, 'A 25.54cm (10.1\") screen with narrow bezels for the ultimate viewing experience while comfortably holding in your hands. Dual stereo speakers with Dolby 3D Atmos surround sound to provide a truly cinematic experience. The massive 6,150 mAh battery means more fun and less breaks. For entertainment goes on and on. Kids can enjoy fun apps and interactive games in Kids Mode, Parental Control lets you protect them from potentially harmful content, and limit their screen time as per your choosing'),
('42', 'Samsung GALAXY TAB S7', 'tablet', 'samsung', 160990, 'images/products/42.0.jpeg', NULL, NULL, NULL, 'Meet Galaxy Tab S7 and S7+. Work and play on the ultra-smooth 120Hz display, powered by our most powerful chipset. Get a PC-like experience with the snap of a keyboard, or use the ultra-low latency S Pen to write like never before. An immersive tablet experience changing the way you work and play.'),
('43', 'SONY XG500 X-Series Portable Wireless Speaker', 'audio', 'sony', 43999, 'images/products/43.0.jpeg', NULL, NULL, NULL, 'Life should be lived at full volume. That means getting your friends together, turning up the music to full volume and dancing all night to a clear, rich sound. With our new X-Series range of speakers, you can make the most of every single moment, power parties you’ll remember forever, and always live your life out loud.'),
('44', 'SAMSUNG Galaxy S21 Ultra 5G S-Pen', 'accessories', 'samsung', 9900, 'images/products/44.0.jpeg', NULL, NULL, NULL, 'Scribble, sketch and jot down ideas with ease, like you would when writing in a notebook. S Pen\'s 4096 pressure levels and 0.7mm tip deliver that familiar writing experience, without the ink.'),
('45', 'Apple USB-C Digital AV Multiport Adapter', 'accessories', 'apple', 16799, 'images/products/45.0.jpeg', NULL, NULL, NULL, 'The USB-C Digital AV Multiport Adapter lets you connect your USB-C-enabled Mac or iPad to an HDMI display, while also connecting a standard USB device and a USB-C charging cable. This adapter allows you to mirror your Mac or iPad display to your HDMI-enabled TV or display.'),
('46', 'Xiaomi MI Portable Speaker', 'audio', 'xiaomi', 4990, 'images/products/46.0.jpeg', NULL, NULL, NULL, 'Bluetooth 5.0, stable connection and fast transmission. Two speakers can be interconnected to form a wireless stereo speaker. A key to answer / end a call. 2000mAh large-capacity battery, long battery life.'),
('47', 'Sony WF-XB700 True Wireless Earbuds', 'audio', 'sony', 30568, 'images/products/47.0.jpeg', NULL, NULL, NULL, 'Sony WF-XB700 EXTRA BASS True Wireless EarbudsBoost your vibesThe WF-XB700 headphones combine truly wireless freedom with a bold, distinctive look. Ergonomic design ensures hour after hour of listening comfort.Long battery life and quick chargingEnjoy up to 18 hours of listening thanks to the handy charging case. And if you’re in a hurry, 10 minutes’ quick charging gives you up to 60 minutes of music playbackA secure fit with Ergonomic Tri-hold structureA Bluetooth chip that transmits sound to left and right ears simultaneously, coupled with optimized antenna design, ensures a stable connection and outstanding listening. Low audio latency makes for enjoyable video viewing too.Water resistant for everyday useWith an IPX4 water-resistance rating, splashes and sweat won’t stop these headphones?so you can keep on moving to the music.Stable, reliable Bluetooth connectivityA Bluetooth chip, which transmits sound to left and right ears simultaneously, coupled with optimized antenna design ensures a stable connection and outstanding listening. Low audio latency makes for enjoyable viewing too.Choose the right size for youWith four sizes of hybrid silicone rubber earbuds included you can find the perfect fit for your ears to maximize sound quality and minimize outside noise.'),
('48', 'Apple AirPods Max 2020 Sky Blue', 'audio', 'apple', 129999, 'images/products/48.0.jpeg', NULL, NULL, NULL, 'introducing AirPods Max — a perfect balance of exhilarating high-fidelity audio and the effortless magic of AirPods. The ultimate personal listening experience is here.'),
('49', 'Apple Mac Book Pro 16” - Space Gray', 'laptop', 'apple', 432999, 'images/products/49.0.png', NULL, NULL, NULL, 'Designed for those who defy limits and change the world, the 16-inch MacBook Pro is by far the most powerful notebook we have ever made. With an immersive Retina display, superfast processors, advanced graphics, the largest battery capacity ever in a MacBook Pro, Magic Keyboard, and massive storage, it\'s the ultimate pro notebook for the ultimate user.');

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
('1', '01', 1),
('1', '02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(10) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `price` int(7) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_email`, `price`, `order_time`) VALUES
('1', 'j@gmail.com', 574980, '2021-09-29 06:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `item_id` varchar(10) NOT NULL,
  `no_of_items` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`item_id`, `no_of_items`) VALUES
('01', 1),
('02', 2);

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
  `status` int(11) NOT NULL DEFAULT '0'
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
