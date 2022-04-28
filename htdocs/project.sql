-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 05:51 AM
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
-- Table structure for table `browsing_history`
--

CREATE TABLE `browsing_history` (
  `search_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `search` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `browsing_history`
--

INSERT INTO `browsing_history` (`search_id`, `user_id`, `product_id`, `search`, `date`) VALUES
(6, 41, 18, 'Vacum Cleaner', '2022-04-24'),
(7, 41, 18, 'Vacum Cleaner', '2022-04-24'),
(8, 41, 18, 'Vacum Cleaner', '2022-04-24'),
(9, 41, 21, 'Shovel', '2022-04-24'),
(10, 41, 21, 'Shovel', '2022-04-24'),
(11, 41, 22, 'Soccer Ball', '2022-04-24'),
(12, 41, 22, 'Soccer Ball', '2022-04-24'),
(13, 41, 21, 'Shovel', '2022-04-24'),
(14, 41, 21, 'Shovel', '2022-04-24'),
(15, 41, 21, 'Shovel', '2022-04-24'),
(16, 41, 21, 'Shovel', '2022-04-24'),
(17, 41, 21, 'Shovel', '2022-04-24'),
(18, 41, 21, 'Shovel', '2022-04-25'),
(19, 41, 21, 'Shovel', '2022-04-25'),
(20, 41, 21, 'Shovel', '2022-04-25'),
(21, 41, 21, 'Shovel', '2022-04-25'),
(22, 41, 21, 'Shovel', '2022-04-25'),
(23, 41, 21, 'Shovel', '2022-04-25'),
(24, 41, 21, 'Shovel', '2022-04-25'),
(25, 41, 21, 'Shovel', '2022-04-25'),
(26, 41, 21, 'Shovel', '2022-04-25'),
(27, 41, 21, 'Shovel', '2022-04-25'),
(28, 41, 21, 'Shovel', '2022-04-25'),
(29, 41, 21, 'Shovel', '2022-04-25'),
(30, 41, 21, 'Shovel', '2022-04-25'),
(31, 41, 21, 'Shovel', '2022-04-25'),
(32, 41, 21, 'Shovel', '2022-04-25'),
(33, 41, 21, 'Shovel', '2022-04-25'),
(34, 41, 21, 'Shovel', '2022-04-25'),
(35, 41, 21, 'Shovel', '2022-04-25'),
(36, 41, 21, 'Shovel', '2022-04-25'),
(37, 41, 21, 'Shovel', '2022-04-25'),
(38, 41, 21, 'Shovel', '2022-04-25'),
(40, 41, 21, 'Shovel', '2022-04-25'),
(41, 41, 23, 'Crib', '2022-04-25'),
(42, 41, 23, 'Crib', '2022-04-25'),
(43, 41, 23, 'Crib', '2022-04-25'),
(44, 41, 23, 'Crib', '2022-04-25'),
(45, 41, 23, 'Crib', '2022-04-25'),
(46, 41, 23, 'Crib', '2022-04-25'),
(47, 41, 23, 'Crib', '2022-04-25'),
(48, 41, 23, 'Crib', '2022-04-25'),
(49, 41, 23, 'Crib', '2022-04-25'),
(50, 41, 23, 'Crib', '2022-04-25'),
(51, 41, 23, 'Crib', '2022-04-25'),
(52, 41, 23, 'Crib', '2022-04-25'),
(53, 41, 23, 'Crib', '2022-04-25'),
(54, 41, 23, 'Crib', '2022-04-25'),
(55, 41, 23, 'Crib', '2022-04-25'),
(56, 41, 23, 'Crib', '2022-04-25'),
(58, 41, 18, 'Vacum Cleaner', '2022-04-25'),
(59, 41, 20, 'TV', '2022-04-25'),
(60, 41, 24, 'Desk', '2022-04-25'),
(61, 41, 22, 'Soccer Ball', '2022-04-25'),
(62, 41, 23, 'Crib', '2022-04-25'),
(63, 41, 21, 'Shovel', '2022-04-25'),
(64, 41, 21, 'Shovel', '2022-04-25'),
(65, 41, 21, 'Shovel', '2022-04-25'),
(66, 41, 21, 'Shovel', '2022-04-25'),
(67, 41, 21, 'Shovel', '2022-04-25'),
(68, 41, 21, 'Shovel', '2022-04-25'),
(69, 41, 23, 'Crib', '2022-04-25'),
(70, 41, 21, 'Shovel', '2022-04-25'),
(71, 41, 21, 'Shovel', '2022-04-25'),
(72, 41, 21, 'Shovel', '2022-04-25'),
(73, 41, 21, 'Shovel', '2022-04-25'),
(74, 41, 21, 'Shovel', '2022-04-25'),
(75, 41, 21, 'Shovel', '2022-04-25'),
(76, 41, 21, 'Shovel', '2022-04-25'),
(77, 41, 21, 'Shovel', '2022-04-25'),
(78, 41, 21, 'Shovel', '2022-04-25'),
(79, 41, 21, 'Shovel', '2022-04-25'),
(80, 41, 21, 'Shovel', '2022-04-25'),
(81, 41, 21, 'Shovel', '2022-04-25'),
(82, 41, 21, 'Shovel', '2022-04-25'),
(83, 53, 23, 'Crib', '2022-04-25'),
(84, 53, 21, 'Shovel', '2022-04-25'),
(86, 53, 23, 'Crib', '2022-04-25'),
(87, 53, 23, 'Crib', '2022-04-25'),
(88, 53, 23, 'Crib', '2022-04-25'),
(89, 53, 23, 'Crib', '2022-04-25'),
(90, 53, 23, 'Crib', '2022-04-25'),
(91, 53, 22, 'Soccer Ball', '2022-04-25'),
(92, 53, 22, 'Soccer Ball', '2022-04-25'),
(93, 53, 18, 'Vacum Cleaner', '2022-04-25'),
(94, 53, 18, 'Vacum Cleaner', '2022-04-25'),
(95, 55, 23, 'Crib', '2022-04-25'),
(96, 55, 23, 'Crib', '2022-04-25'),
(97, 55, 23, 'Crib', '2022-04-25'),
(98, 55, 18, 'Vacum Cleaner', '2022-04-25'),
(99, 55, 18, 'Vacum Cleaner', '2022-04-25'),
(100, 55, 24, 'Desk', '2022-04-25'),
(101, 55, 22, 'Soccer Ball', '2022-04-25'),
(102, 55, 24, 'Desk', '2022-04-25'),
(103, 55, 24, 'Desk', '2022-04-25'),
(104, 55, 24, 'Desk', '2022-04-25'),
(105, 55, 22, 'Soccer Ball', '2022-04-25'),
(106, 55, 24, 'Desk', '2022-04-25'),
(107, 55, 24, 'Desk', '2022-04-25'),
(108, 56, 23, 'Crib', '2022-04-25'),
(109, 56, 23, 'Crib', '2022-04-25'),
(110, 56, 23, 'Crib', '2022-04-25'),
(111, 56, 21, 'Shovel', '2022-04-25'),
(112, 56, 21, 'Shovel', '2022-04-25'),
(113, 56, 20, 'TV', '2022-04-25'),
(114, 56, 20, 'TV', '2022-04-25'),
(115, 56, 22, 'Soccer Ball', '2022-04-25'),
(116, 56, 22, 'Soccer Ball', '2022-04-25'),
(118, 56, 18, 'Vacum Cleaner', '2022-04-25'),
(119, 56, 21, 'Shovel', '2022-04-25'),
(120, 56, 23, 'Crib', '2022-04-25'),
(121, 56, 20, 'TV', '2022-04-25'),
(122, 56, 18, 'Vacum Cleaner', '2022-04-25'),
(123, 56, 18, 'Vacum Cleaner', '2022-04-25'),
(124, 41, 21, 'Shovel', '2022-04-25'),
(126, 41, 24, 'Desk', '2022-04-25'),
(127, 41, 22, 'Soccer Ball', '2022-04-25'),
(128, 41, 22, 'Soccer Ball', '2022-04-25'),
(129, 41, 22, 'Soccer Ball', '2022-04-25'),
(130, 41, 21, 'Shovel', '2022-04-25'),
(131, 41, 23, 'Crib', '2022-04-25'),
(132, 41, 23, 'Crib', '2022-04-25'),
(133, 41, 23, 'Crib', '2022-04-25'),
(134, 41, 23, 'Crib', '2022-04-25'),
(135, 41, 23, 'Crib', '2022-04-25'),
(136, 41, 23, 'Crib', '2022-04-25'),
(137, 41, 23, 'Crib', '2022-04-25'),
(140, 42, 21, 'Shovel', '2022-04-25'),
(141, 42, 21, 'Shovel', '2022-04-25'),
(142, 42, 21, 'Shovel', '2022-04-25'),
(143, 42, 21, 'Shovel', '2022-04-25'),
(144, 42, 21, 'Shovel', '2022-04-25'),
(145, 42, 21, 'Shovel', '2022-04-25'),
(146, 42, 21, 'Shovel', '2022-04-25'),
(147, 41, 23, 'Crib', '2022-04-25'),
(148, 41, 21, 'Shovel', '2022-04-25'),
(150, 41, 21, 'Shovel', '2022-04-27'),
(151, 42, 23, 'Crib', '2022-04-27'),
(152, 42, 23, 'Crib', '2022-04-27'),
(153, 42, 23, 'Crib', '2022-04-27'),
(154, 42, 28, 'Dog Leash', '2022-04-27'),
(155, 42, 20, 'TV', '2022-04-27'),
(156, 41, 23, 'Crib', '2022-04-27'),
(157, 41, 23, 'Crib', '2022-04-27'),
(158, 41, 24, 'Desk', '2022-04-27'),
(159, 41, 28, 'Dog Leash', '2022-04-27'),
(160, 41, 28, 'Dog Leash', '2022-04-27'),
(161, 41, 28, 'Dog Leash', '2022-04-27'),
(162, 41, 28, 'Dog Leash', '2022-04-27'),
(163, 41, 28, 'Dog Leash', '2022-04-27'),
(164, 41, 28, 'Dog Leash', '2022-04-27'),
(165, 41, 28, 'Dog Leash', '2022-04-27'),
(166, 41, 28, 'Dog Leash', '2022-04-27'),
(167, 41, 28, 'Dog Leash', '2022-04-27'),
(168, 41, 28, 'Dog Leash', '2022-04-27'),
(169, 41, 28, 'Dog Leash', '2022-04-27'),
(170, 41, 28, 'Dog Leash', '2022-04-27'),
(171, 41, 28, 'Dog Leash', '2022-04-27'),
(172, 41, 28, 'Dog Leash', '2022-04-27'),
(173, 41, 28, 'Dog Leash', '2022-04-27'),
(174, 41, 28, 'Dog Leash', '2022-04-27'),
(175, 41, 28, 'Dog Leash', '2022-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `quantity` int(10) NOT NULL,
  `client_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, '54443211', '44455 main street', '6234c71d559aa.png', 41),
(8, '4455 2221 3444 5555', '123 Park Street', '62662cc84777b.jpg', 53),
(9, '1111 2222 3333 4444', '12312314 street', '62662dc98378f.jpg', 55),
(10, '22334 54542 5252 ', '24234 1st Avenue', 'default.jpg', 56);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `transaction_date` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `quantity` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `price`, `rating`, `image`, `quantity`, `category_name`, `seller_id`) VALUES
(18, 'Vacum Cleaner', 'This is a high quality vacum cleaner', '140.00', 0, '62601d96e9fa9.jpg', 12, 'home', 4),
(20, 'TV', 'This is a tv', '190.00', 0, '626492d28a873.jpg', 0, 'home', 4),
(21, 'Shovel', 'A shovel used for gardening', '60.00', 0, '6264930db360f.jpg', 0, 'garden', 4),
(22, 'Soccer Ball', 'A soccer ball for sports', '15.00', 0, '626493316c4d9.jpg', 0, 'sports', 4),
(23, 'Crib', 'A baby crib', '210.00', 0, '626493436f042.jpg', 0, 'baby', 4),
(24, 'Desk', 'A desk for work', '110.00', 0, '62649357a50ef.jpg', 0, 'office', 4),
(28, 'Dog Leash', 'This is a 10 foot leash for a dog', '17.99', 0, 'shoppingCart.png', 33, 'pets', 4);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `message`, `product_id`, `client_id`) VALUES
(1, 'hello', 21, 3),
(2, 'This was the best crib I ever bought!', 23, 8),
(3, 'I like this soccer ball', 22, 8),
(4, 'I did not like this vacum cleaner', 18, 8),
(5, 'This crib could have been better', 23, 9),
(6, 'It is good', 18, 9),
(7, 'I like this office desk', 24, 9),
(8, 'Good crib', 23, 10),
(9, 'Very useful shovel', 21, 10),
(10, 'My Favourite tv', 20, 10),
(11, 'High quality ball', 22, 10),
(12, 'Cheap vacum cleaner', 18, 10),
(13, 'this is a good soccerball', 22, 3);

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
(4, 42),
(11, 74);

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
(41, 'customer', '$2y$10$E1asxwa8Ka8ZimacXy1REONSjRi7TwWvahIIhQus/ttLFcQ4vz6au', 'cust', 'customer', 'customer'),
(42, 'seller', '$2y$10$d48tp/o8x94tCp0xXjHypuR8Xa3rJ5MnkNajeHABv6Nqp5rCkEv2G', 'Sam', 'Seller', 'seller'),
(47, 'hi', '$2y$10$iIOxcWjWg/YZiN82X3a.Yu9zG5rhyVNCOaOKY5fl4I/0jUdSp4gzG', 'hi', 'hi', 'customer'),
(53, 'johnny123', '$2y$10$qRqYzTeMxahEJnGGYNoMp.JoEoUHC9fxnL7oEeG2y21gQp7DAcEqy', 'Johnny', 'Smith', 'customer'),
(55, 'mary123', '$2y$10$W1qCHjfhd0vzaQnrQi03XOv0QwuPFgm/BRJh91vbjcL0g4LxuMiHu', 'Mary', 'Johnson', 'customer'),
(56, 'Peter123', '$2y$10$bSYy98gWaxUUhdwyzrPN8u8AELn79f5amiRm6RKzBJXmypftpTFlW', 'Peter', 'Richard', 'customer'),
(74, 'test123', '$2y$10$BHvoproHHyKoP2fb5lBwAefNmgj4BrdcpSHB2ZWVUzZnPVFSzG5yy', 'Joe', 'Smith', 'seller');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `client_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `browsing_history`
--
ALTER TABLE `browsing_history`
  ADD PRIMARY KEY (`search_id`),
  ADD KEY `history_productid_fk` (`product_id`),
  ADD KEY `history_userid_fk` (`user_id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_clientid_fk` (`client_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_sellerid_fk` (`seller_id`),
  ADD KEY `product_category_fk` (`category_name`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `review_productid_fk` (`product_id`),
  ADD KEY `review_clientid_fk` (`client_id`);

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
-- AUTO_INCREMENT for table `browsing_history`
--
ALTER TABLE `browsing_history`
  MODIFY `search_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `browsing_history`
--
ALTER TABLE `browsing_history`
  ADD CONSTRAINT `history_productid_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `history_userid_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

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
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_clientid_fk` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_fk` FOREIGN KEY (`category_name`) REFERENCES `category` (`name`),
  ADD CONSTRAINT `product_sellerid_fk` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`seller_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_clientid_fk` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `review_productid_fk` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

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
