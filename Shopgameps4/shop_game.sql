-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 03:04 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `id_order`, `id_product`) VALUES
(6, 11, 6),
(7, 11, 5),
(8, 11, 9),
(9, 11, 13),
(10, 11, 12),
(11, 12, 5),
(12, 12, 11),
(13, 12, 8),
(14, 13, 12),
(15, 13, 10),
(16, 14, 6),
(17, 14, 20),
(23, 19, 24),
(24, 20, 21),
(25, 20, 11);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `phone_number` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `customer_name`, `phone_number`, `email`, `address`, `note`, `payment_method`, `total_price`) VALUES
(11, 'Hồ Viết Hùng', '0918273645', 'hoviethung10b2@gmail.com', 'Quảng Trị', '', 'visa_credit', ''),
(12, 'Hồ Quốc Hoàn', '123123123123', 'hoquochoan@gmail.com', 'Đông Hà', '', 'visa_credit', ''),
(13, 'Nguyễn Văn Đạt', '18001355', 'nguyenquangdat@gmail.com', 'Hải Lăng', 'free ship', 'cod', ''),
(14, 'Mai Thanh Châu', '08888888888', 'maithanhchau@gmail.com', 'Quảng trị', 'tiền ship khỏi thối', 'cod', ''),
(19, 'Hồ Viết Hùng', '18001355', '12@12.com', 'Triệu Giang', '', 'cod', ''),
(20, 'Hồ Quốc Hoàn', '0845591879', 'hqhoan6868@gmail.com', 'Phường 1', '', 'cod', '800000');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) DEFAULT NULL,
  `type_product` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `img_product` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `type_product`, `description`, `price`, `img_product`) VALUES
(5, 'Red Dead Redemtion 2', 3, 'RockStar', '850000', 'upload/rdr2product.jpg'),
(6, 'The Crew 2', 6, 'Ubisof', '600000', 'upload/thecrew2.jpg'),
(8, 'watch dog legion', 7, 'ubisoft', '1000000', 'upload/watchdoglegion.jpg'),
(9, 'The Last of US 2', 3, 'Naughtidog', '1100000', 'upload/thelastofus2.jpg'),
(10, 'dragonball z', 3, 'banzai', '700000', 'upload/dragonballz.jpg'),
(11, 'god of war 4', 3, 'Naughtidog', '500000', 'upload/gow4product.jpg'),
(12, 'horizon zero dawn', 7, 'only ps4', '350000', 'upload/horizonzorodawn.jpg'),
(13, 'mafia triglory', 7, 'besthesad', '1200000', 'upload/mafia-triglori.jpg'),
(14, 'mortal kombat 11', 3, 'camcop', '750000', 'upload/mortalkombat.jpg'),
(15, 'Need for speed Heat', 6, 'sony electronic art', '800000', 'upload/nfsheatproduct.jpg'),
(16, 'uncharted 4', 2, 'Naughtidog', '400000', 'upload/urchated4.jpg'),
(17, 'spider man ', 7, 'milesmorales', '1050000', 'upload/spidermanmilesmorales.jpeg'),
(18, 'Battelfield 1', 2, 'activision', '600000', 'upload/battelfield1.jpg'),
(19, 'Battelfield 5', 2, 'activision', '730000', 'upload/battelfield5.jpg'),
(20, 'Call of Duty ww2', 2, 'ubisoft', '450000', 'upload/callofdutyww2.jpg'),
(21, 'Driver Club', 6, 'only ps4', '300000', 'upload/driveclub.jpg'),
(22, 'GTA V', 7, 'RockStar', '500000', 'upload/gta5.jpg'),
(23, 'FiFa 20', 8, 'Electronic Arts', '900000', 'upload/fifa20.jpg'),
(24, 'FiFa 21', 8, 'Electronic Arts', '790000', 'upload/fifa21.jpg'),
(25, 'Pes 2020', 8, 'Konami', '550000', 'upload/pes20.jpg'),
(26, 'PUBG', 2, 'bluehole', '950000', 'upload/pubg.jpg'),
(27, 'Resident evil 2', 9, 'camcop', '700000', 'upload/resident evil 2.jpg'),
(28, 'Resindent Evil 3', 9, 'camcop', '650000', 'upload/resident evil 3.jpg'),
(29, 'Resindent Evil 7', 9, 'CamCop', '400000', 'upload/resident evil 7.jpg'),
(30, 'Resident Evil Village', 9, 'CamCop', '1200000', 'upload/resident village.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type_product`
--

CREATE TABLE `type_product` (
  `id_type` int(11) NOT NULL,
  `type_product` varchar(255) DEFAULT NULL,
  `img_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_product`
--

INSERT INTO `type_product` (`id_type`, `type_product`, `img_type`) VALUES
(2, 'Bắn súng', 'upload/gamebs.png'),
(3, 'Hành động', 'upload/gamehd.png'),
(6, 'Đua xe', 'upload/gamedx.png'),
(7, 'Thế giới mở', 'upload/gametgm.png'),
(8, 'Đá bóng', 'upload/gamedb.png'),
(9, 'Kinh dị', 'upload/gamekd.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `type_product` (`type_product`);

--
-- Indexes for table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `type_product`
--
ALTER TABLE `type_product`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `id_order` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`),
  ADD CONSTRAINT `id_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `type_product` FOREIGN KEY (`type_product`) REFERENCES `type_product` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
