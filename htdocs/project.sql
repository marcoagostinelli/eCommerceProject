-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 02:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `quantity` int(10) NOT NULL,
  `transaction_date` date NOT NULL,
  `client_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`quantity`, `transaction_date`, `client_id`, `product_id`) VALUES
(2, '0000-00-00', 3, 18),
(4, '0000-00-00', 3, 21),
(1, '0000-00-00', 3, 23);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`name`) VALUES
('baby'),
('garden'),
('home'),
('office'),
('pets'),
('sports');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `payment_details` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `picture` varchar(50) NOT NULL DEFAULT 'default.jpg',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `payment_details`, `address`, `picture`, `user_id`) VALUES
(2, '56756756', '75675675675675', 'default.jpg', 40),
(3, '54443211', '44455 main street', '6234c71d559aa.png', 41);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `rating` int(2) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'shoppingCart.png',
  `category_name` varchar(100) NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `price`, `rating`, `image`, `category_name`, `seller_id`) VALUES
(11, 'Mop', 'this mop cleans the floor', '20.99', 0, 'shoppingCart.png', 'home', 4),
(18, 'Vacum Cleaner', 'This is a high quality vacum cleaner', '140.00', 0, '62601d96e9fa9.jpg', 'home', 4),
(20, 'TV', 'This is a tv', '190.00', 0, '626492d28a873.jpg', 'home', 4),
(21, 'Shovel', 'A shovel used for gardening', '60.00', 0, '6264930db360f.jpg', 'garden', 4),
(22, 'Soccer Ball', 'A soccer ball for sports', '15.00', 0, '626493316c4d9.jpg', 'sports', 4),
(23, 'Crib', 'A baby crib', '210.00', 0, '626493436f042.jpg', 'baby', 4),
(24, 'Desk', 'A desk for work', '110.00', 0, '62649357a50ef.jpg', 'office', 4);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `user_id`) VALUES
(2, 26),
(4, 42);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password_hash`, `first_name`, `last_name`, `role`) VALUES
(23, 'sell', '$2y$10$I5PmeH2XiHKYI2isXdvA5.1MJzae//p857uWERqXPVhZT8H7KrS9q', 'seller', 'store', 'seller'),
(26, 'new', '$2y$10$IrdCK7YhyqY.ElMizM9dbu8THASGru.omDq0Z2fRH67jJDLOFSzse', 'n', 'n', 'seller'),
(40, 'ni', '$2y$10$YGbku7x3hHIJLEWZiiqmDOWsNimAtz6a3MQ5QX02igYQ4UokD1eY6', 'ni', 'ni', 'customer'),
(41, 'customer', '$2y$10$E1asxwa8Ka8ZimacXy1REONSjRi7TwWvahIIhQus/ttLFcQ4vz6au', 'cust', 'customer', 'customer'),
(42, 'seller', '$2y$10$d48tp/o8x94tCp0xXjHypuR8Xa3rJ5MnkNajeHABv6Nqp5rCkEv2G', 'Sam', 'Seller', 'seller'),
(47, 'hi', '$2y$10$iIOxcWjWg/YZiN82X3a.Yu9zG5rhyVNCOaOKY5fl4I/0jUdSp4gzG', 'hi', 'hi', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `client_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`client_id`, `product_id`) VALUES
(3, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`client_id`,`product_id`),
  ADD KEY `cart_productid_fk` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `client_userid_fk` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_sellerid_fk` (`seller_id`),
  ADD KEY `product_category_fk` (`category_name`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`),
  ADD KEY `seller_userid_fk` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`client_id`,`product_id`),
  ADD KEY `wishlist_productid_fk` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_clientid_fk` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `cart_productid_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_userid_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_fk` FOREIGN KEY (`category_name`) REFERENCES `category` (`name`),
  ADD CONSTRAINT `product_sellerid_fk` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`);

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_userid_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_clientid_fk` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `wishlist_productid_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
