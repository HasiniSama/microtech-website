-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 29, 2021 at 02:20 PM
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
('09', 'OnePlus 8T', 'smartphone', 'oneplus', 129900, 'images/products/9.0.png', 'images/products/9.1.png', 'images/products/9.2.png', 'images/products/9.3.png', 'The OnePlus 8T is shaping up as an excellent premium mid-ranger with a slew of flagship features - a 120Hz Fluid AMOLED, the latest Snapdragon 865 chip, a promising quad-camera with improved low-light performance, stereo speakers, and probably OnePlus best achievement yet - a larger battery with blazing-fast Warp Charge at 65W.'),
('10', 'OnePlus Nord N100', 'smartphone', 'oneplus', 42900, 'images/products/10.0.png', 'images/products/10.1.png', 'images/products/10.2.png', 'images/products/10.3.png', 'OnePlus Nord N100 is powered by an octa-core Qualcomm Snapdragon 460 processor. It comes with 4GB of RAM. The OnePlus Nord N100 runs Android 10 and is powered by a 5000mAh battery. The OnePlus Nord N100 supports proprietary fast charging.'),
('11', 'OnePlus Buds Pro Glossy White', 'audio', 'oneplus', 33969, 'images/products/11.0.png', 'images/products/11.1.png', 'images/products/11.2.png', 'images/products/10.3.png', 'Hear the Unheard. Smart Adaptive Noise Cancellation. 10 minutes for 10 hours.'),
('12', 'OnePlus Bullets Wireless Z', 'audio', 'oneplus', 11990, 'images/products/12.0.jpeg', 'images/products/12.1.jpeg', NULL, NULL, 'A 10 minute charge for 10 hours of musicYour Bullets Wireless Z is ready before you are. A single 10 minute charge gives you 10 hours of music and movies. A full charge provides up to 20 hours of battery life, so you can keep the music going.'),
('13', 'OnePlus Warp Charge 50 Wireless Charger White', 'accessories', 'oneplus', 13999, 'images/products/13.0.png', 'images/products/13.1.png', 'images/products/13.2.png', 'images/products/13.3.png', 'Dual-coil charging system allows to charge your phone when placed either vertically or horizontally. Fully charges your OnePlus 9 Pro from 1% to 100% in just 43 minutes.'),
('14', 'OnePlus Warp Charge Type-C Cable 100 cm', 'accessories', 'oneplus', 4999, 'images/products/14.0.png', 'images/products/14.1.png', NULL, NULL, 'At first glance, the OnePlus Warp Charge Type-C Cable might not look all that different from the OnePlus charging cables you’ve come to know and love. It’s still instantly recognizable and tangle-free thanks to our trademark flat, rollable design - all in quintessential OnePlus red and white. But, the similarities end there. Underneath the premium silicone coating, broad internal cabling made of copper and nickel ensures that power reaches your OnePlus 7 Pro, OnePlus 7, OnePlus 6T, OnePlus 6, OnePlus 5T, OnePlus 5, OnePlus 3T or OnePlus 3 faster and cooler than ever before.'),
('15', 'OnePlus Nord N200 5G', 'smartphone', 'oneplus', 43200, 'images/products/15.0.png', 'images/products/15.1.png', 'images/products/15.2.png', 'images/products/15.3.png', '5G Enabled (5G service only available on T-Mobile and Google Fi) – Powered by the latest Qualcomm 5G chipset, the OnePlus Nord N200 5G allows you to download or stream your favorite TV shows, connect with your social media, and play online multiplayer at blazing fast speeds.'),
('16', 'OnePlus 8', 'smartphone', 'oneplus', 128000, 'images/products/16.0.png', 'images/products/16.1.png', 'images/products/16.2.png', 'images/products/16.3.png', 'The all new OnePlus 8 Powered by Qualcomm Snapdragon 865. Supports 5G Technology and comes equipped with 90hz Fliud display, a Rear Triple camera Setup with a capability to shoot 4K video @ 30/60 FPS.'),
('17', 'OnePlus Watch Midnight Black', 'smartwatch', 'oneplus', 35762, 'images/products/17.0.png', 'images/products/17.1.png', 'images/products/17.2.png', NULL, 'The all new OnePlus Watch Midnight Black: 46mm dial, Warp Charge, 110+ Workout Modes, Smartphone Music,SPO2 Health Monitoring & 5ATM + IP68 Water Resistance (Currently Android only)'),
('18', 'Huawei Matebook X Pro – Core i7 10th Gen 16GB RAM 1TB SSD', 'laptop', 'huawei', 359900, 'images/products/18.0.jpeg', 'images/products/18.1.jpeg', 'images/products/18.2.jpeg', 'images/products/18.3.jpeg', 'With an industry-leading processor and 3K FullView Display, HUAWEI MateBook X Pro takes your experience beyond the extraordinary.'),
('19', 'Huawei Matebook 16', 'laptop', 'huawei', 71500, 'images/products/19.0.png', 'images/products/19.1.png', 'images/products/19.2.png', NULL, 'The powerful Windows 10 operating system makes it easy to check E-mail and manage digital files. Powered by AMD Ryzen 7 5800H and Ryzen 5 5600H processor, designed with HDMI output, featuring powerful graphics, all of this give users a full suite for using dominance and offer users a truly seamless using experience.'),
('20', 'HUAWEI MatePad Pro 11', 'tablet', 'huawei', 149900, 'images/products/20.0.jpeg', 'images/products/20.1.jpeg', NULL, NULL, 'Bring your vision to a borderless world. Capture your inspiration with a masterstroke. Amp up your productivity by upgraded experience. HUAWEI MatePad Pro, expand your creativity.'),
('21', 'HUAWEI Tab T8', 'tablet', 'huawei', 28999, 'images/products/21.0.jpeg', 'images/products/21.1.jpeg', NULL, NULL, 'Featuring ultra-slim 4.9 mm side bezels and 80% screen-to-body ratio, the HUAWEI MatePad T 8 gives you ample on-screen room for immersive entertainment.'),
('22', 'Huawei MatePad T 10s', 'tablet', 'huawei', 52999, 'images/products/22.0.jpeg', 'images/products/22.1.jpeg', NULL, NULL, 'You know we have the best tablets for you to have fun. One of the best models you will find is the new Huawei Matepad T10s, a spectacular 10.1 inch tablet. One of the most interesting tablets in its range because it has everything you need to enjoy what you like best.'),
('23', 'Huawei Y7A', 'smartphone', 'huawei', 37900, 'images/products/23.0.jpeg', 'images/products/23.1.jpeg', 'images/products/23.2.jpeg', 'images/products/23.3.jpeg', 'HUAWEI Y7a 4GB+128GBThe 4 GB RAM effectively allows you to run multiple Apps simultaneously and switch between them fluently, while the 128 GB ROM brings you a large storage for all your favourite videos, photos and games.'),
('24', 'Galaxy S20 Ultra 5G', 'smartphone', 'samsung', 148990, 'images/products/24.0.jpg', 'images/products/24.1.jpg', 'images/products/24.2.jpg', NULL, 'The ultimate 5G powerhouse with an unparalleled new camera and unprecedented 100x Space Zoom. Bring a pro-level studio wherever you go with  super-speed processing and complete pro kit of camera features – including the groundbreaking 100x Space Zoom and cutting-edge AI – in an immersive 6. 9” Infinity-O display. Do more of what you love with the device that gives you more.'),
('25', 'Galaxy Z Flip3 5G', 'smartphone', 'samsung', 180000, 'images/products/25.0.webp', 'images/products/25.1.webp', 'images/products/25.2.webp', 'images/products/25.3.webp', 'Samsung Galaxy Z Flip 3 5G comes with Android 11, 6.7 inches Foldable Dynamic AMOLED Display, Qualcomm Snapdragon 888 5G Chipset, Octa core CPU, 8GB RAM and 128GB ROM / 256GB ROM, Non-removable Li-Po 3300 mAh battery.'),
('26', 'Galaxy Tab S7 FE', 'tablet', 'samsung', 126000, 'images/products/26.0.webp', 'images/products/26.1.webp', 'images/products/26.2.webp', 'images/products/26.3.webp', 'Strike a perfect balance between study time and play time with Samsung Galaxy Tab S7 FE, the tablet designed to bring your projects to life.'),
('27', 'Galaxy Buds2', 'audio', 'samsung', 35400, 'images/products/27.0.webp', 'images/products/27.1.webp', 'images/products/27.2.webp', 'images/products/27.3.webp', 'With audio quality this good, you’ll feel the thump of every baseline and strum of every guitar right in your core. With Active Noise Cancellation and Ambient Sound, enjoy peace and quiet while you work from home or take calls without missing what’s happening around you.'),
('28', 'Galaxy Chromebook 2, Fiesta Red', 'laptop', 'samsung', 199800, 'images/products/28.0.webp', 'images/products/28.1.webp', 'images/products/28.2.webp', 'images/products/28.3.webp', 'Work-life balance has never been better, thanks to the world’s first QLED Chromebook. Dive into your favorite pastimes or present your next big idea with a larger-than-life,  vibrant color display.'),
('29', 'Galaxy Watch4 Silver', 'smartwatch', 'samsung', 89800, 'images/products/29.0.webp', 'images/products/29.1.webp', NULL, NULL, 'The new Galaxy Watch4, the watch that knows you best. Upgrade, trade in or switch to the latest Galaxy Watch with exclusive offers on Microtech'),
('30', 'Redmi 9A , SeaBlue', 'smartphone', 'xiaomi', 19900, 'images/products/30.0.jpeg', 'images/products/30.1.jpeg', 'images/products/30.2.jpeg', 'images/products/30.3.jpeg', 'Redmi 9A brings absolute delight for those who like all things entertainment! Delivering an immersive viewing experience, the Redmi 9A comes with everything you need in a smartphone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
