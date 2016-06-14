-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2016 at 08:27 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Shoes'),
(2, 'Shirts'),
(3, 'Jackets'),
(4, 'Pants'),
(5, 'Caps & Accesories'),
(6, 'Shoes'),
(7, 'T-shirts'),
(8, 'Pants'),
(9, 'Sarees & Kurthas'),
(10, 'Others'),
(11, 'Jersey'),
(12, 'Boots'),
(13, 'Equipments'),
(14, 'Others'),
(15, 'Computers & Networking'),
(16, 'Mobiles & Accesories'),
(17, 'Laptops'),
(18, 'Home Appliances'),
(19, 'Others'),
(20, 'Magazines'),
(21, 'Books'),
(22, 'Others'),
(23, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `district` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `address1` varchar(32) NOT NULL,
  `address2` varchar(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `email`, `phone`, `district`, `city`, `address1`, `address2`) VALUES
(1, 'username', '5f4dcc3b5aa765d61d8327deb882cf99', 'abc@abc.com', 9840010191, 'Kaski', 'Pokhara', 'Lamachaur', 'Sahardahar'),
(2, 'meow', '4a4be40c96ac6314e91d93f38043a634', 'meow@gmail.com', 9840010191, 'Kaski', 'Pokhara', 'Lamachaur', 'Sahardahar'),
(26, 'username2', '1a1dc91c907325c69271ddf0c944bc72', 'esmail@email.com', 9840010191, 'district', 'Pokhara', 'Lamachaur', 'Sahardahar'),
(27, 'usernameaa', '1a1dc91c907325c69271ddf0c944bc72', 'emaial@email.com', 9840010195, 'Bhaktapur', 'Pokhara', 'Lamachaur', 'Sahardahar'),
(29, 'username45', '5f4dcc3b5aa765d61d8327deb882cf99', 'abca@abc.com', 9840010456, 'Kaski', 'Pokhara', 'Lamachaur', 'Sahardahar'),
(33, 'userna5s', '5f4dcc3b5aa765d61d8327deb882cf99', 'ss@abc.com', 9840010756, 'Kaski', 'Pokhara', 'Lamachaur', 'Sahardahar'),
(34, 'user', '1a1dc91c907325c69271ddf0c944bc72', 'email@email.com', 9840010298, 'Bhaktapur', 'Pokhara', 'Lamachaur', 'Sahardahar'),
(35, 'hitang', '087e8cbc9aca561cf667fcab698c3103', 'hitang@email.com', 9840010192, 'Bhaktapur', 'Pokhara', 'Lamachaur', 'Sahardahar');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `added_date` date NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `discount` int(11) NOT NULL DEFAULT '0',
  `image_link1` text,
  `image_link2` text,
  `image_link3` text,
  `purchases` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `category_id`, `price`, `added_date`, `merchant_id`, `discount`, `image_link1`, `image_link2`, `image_link3`, `purchases`) VALUES
(1, 'HP Deskjet 1010 Printer', 'Tricolor 600dpi Inkjet Printer', 19, 10000, '2016-03-08', 145, 23, 'http://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c03734453.png', '', '', 5),
(2, 'Red and Black Check Shirt', 'Shirt of the Year', 2, 1000, '2016-04-12', 123, 10, 'https://s-media-cache-ak0.pinimg.com/236x/d6/fe/5c/d6fe5cf5320dac8e5402e78dcd1e976d.jpg', '', '', 2),
(3, 'Black Converse', 'Original All Star converse', 1, 1850, '2016-06-01', 2, 12, 'http://media1.kohlsimg.com/is/image/kohls/436526_Black_White?wid=240&hei=240&op_sharpen=1', '', '', 6),
(4, 'Artificial intelligence Book', 'Writers: Hitang', 21, 800, '2016-06-02', 12, 50, 'http://www.hs-weingarten.de/~ertel/img/aibook.jpg', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE IF NOT EXISTS `merchants` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `district` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `address1` varchar(32) NOT NULL,
  `address2` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`user_id`, `item_id`, `id`) VALUES
(2142, 21512, 1),
(426, 6546, 56),
(4, 323, 255);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=256;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
