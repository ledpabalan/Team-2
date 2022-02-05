-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 07:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online tayuman`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_ id` int(11) NOT NULL,
  `cart_item` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `cart_datecreated` date NOT NULL,
  `cart_datemodified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart product`
--

CREATE TABLE `cart product` (
  `cart_product id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cartproduct_quantity` int(11) NOT NULL,
  `cartproduct_totalprice` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `category_pic.URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `pickup_address` varchar(25) NOT NULL,
  `drop_off_address` varchar(255) NOT NULL,
  `delivery_fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emailvrfy`
--

CREATE TABLE `emailvrfy` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `code_generated` varchar(255) NOT NULL,
  `time_valid` varchar(255) NOT NULL,
  `user_type` enum('Buyer','Seller') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emailvrfy`
--

INSERT INTO `emailvrfy` (`user_id`, `user_name`, `user_email`, `user_username`, `user_password`, `code_generated`, `time_valid`, `user_type`) VALUES
(1, 'asd', 'levituya08@gmail.com', 'asd', 'asd', '08134E24', '1643910750', 'Buyer');

-- --------------------------------------------------------
--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_refnum` varchar(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` enum('Pending','Preparing','OTW to You!','Delivered') NOT NULL,
  `order_datecreated` date NOT NULL,
  `order_daterequired` date NOT NULL,
  `order_datedelivered` date NOT NULL,
  `shop_id` int(11) NOT NULL,
  `order_comment.or.note` varchar(255) NOT NULL,
  `order_totalprice` decimal(10,2) NOT NULL,
  `pickup_address` varchar(255) NOT NULL,
  `drop_off_address` varchar(255) NOT NULL,
  `delivery_fee` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order item`
--

CREATE TABLE `order item` (
  `Item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_type` enum('cash on delivery','E-wallet','Bank Transfer') NOT NULL,
  `payment_refnum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_pic.URL` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_price`, `product_pic.URL`, `category_id`, `product_status`) VALUES
(2, 'turon ', 'malaki masarap ang turon na ito', '15.50', '', 0, 'Active'),
(3, 'Hatdog', 'malaki ', '8.00', '', 0, 'Active'),
(4, 'adf', 'asdf', '0.00', '', 0, 'Inactive'),
(5, 'haha', 'Mahaba maitim maalat', '56.00', '', 0, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_username` varchar(45) NOT NULL,
  `shop_email` varchar(45) NOT NULL,
  `shop_password` varchar(45) NOT NULL,
  `shop_passwordconfirmation` varchar(45) NOT NULL,
  `shop_pic.URL` varchar(255) NOT NULL,
  `shop_contact.no` varchar(50) NOT NULL,
  `shop_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `delivery_fee` int(11) NOT NULL,
  `order_datedelivered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction history`
--

CREATE TABLE `transaction history` (
  `transactionhistory_id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_type` enum('Buyer','Seller') NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `user_contact_no` varchar(50) NOT NULL,
  `user_birthday` date NOT NULL,
  `user_gender` enum('male','female','other') NOT NULL,
  `user_age` int(3) NOT NULL,
  `user_profpic_URL` varchar(255) NOT NULL,
  `user_acc_createddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_username` varchar(15) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_pwdRepeat` varchar(255) NOT NULL,
  `user_previouslog` date NOT NULL,
  `user_acc_status` enum('Active','Inactive') NOT NULL,
  `user_ever` enum('Not Verified','Verified') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `user_name`, `user_email`, `user_address`, `user_contact_no`, `user_birthday`, `user_gender`, `user_age`, `user_profpic_URL`, `user_acc_createddate`, `user_username`, `user_password`, `user_pwdRepeat`, `user_previouslog`, `user_acc_status`, `user_ever`) VALUES
(1, 'Buyer', 'Edward Complido', 'johnedward1436@gmail.com', 'Bulacan', '09123456789', '1999-03-04', 'other', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '2021-12-19 10:53:53', 'Drawd', '123', '123', '0000-00-00', 'Active', 'Not Verified'),
(2, 'Seller', 'Ton', 'tonton@gmail.com', 'patubig marilao bulacan', '099999999', '2001-10-01', 'female', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '2021-12-13 05:00:17', 'ton', 'd41d8cd98f00b204e9800998ecf8427e', '123', '0000-00-00', 'Active', 'Not Verified'),
(3, 'Buyer', 'bnbnbn', 'nbnbb', '', 'bnbn', '2021-12-01', 'female', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '2021-12-06 12:57:47', 'nbnbnb', '4984aa7eeb8c7fa0709832e364e03989', '', '0000-00-00', 'Active', 'Not Verified'),
(4, 'Seller', 'Jonaaaa', 'jujuuj', '123', '56', '2021-12-01', 'other', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '2021-12-06 12:57:49', 'jon', 'e034fb6b66aacc1d48f445ddfb08da98', '', '0000-00-00', 'Active', 'Not Verified'),
(5, 'Buyer', 'tytytytytytyt', 'ytytyty', '', 'ytytytyty', '2021-12-10', 'female', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '2021-12-06 12:57:50', 'tytytyt', 'f15541c3f3b9c84f16e405bca85b781b', '', '0000-00-00', 'Active', 'Not Verified'),
(6, 'Buyer', 'dcdcdc', 'cdcdc', '', 'cdcdcd', '2021-12-17', 'female', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '2021-12-06 12:57:52', 'dcdcdcdc', '0267b7178244d5ebe949b52a0066893f', '', '0000-00-00', 'Active', 'Not Verified'),
(7, 'Buyer', 'oaoaoa', 'oaoaoaoa', '', 'asdasdsada', '2021-12-17', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '2021-12-06 12:57:53', 'oaoaoaoa', '59baa56a6b636052d417fee183acac31', 'aoaoaoa', '0000-00-00', 'Active', 'Not Verified'),
(8, 'Buyer', 'hi', 'hhhhhhhhhhh', '', 'hhhhhhhhhhhhhhh', '2021-12-22', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '2021-12-13 06:04:52', 'hi', 'd41d8cd98f00b204e9800998ecf8427e', 'hi', '0000-00-00', 'Active', 'Not Verified'),
(9, 'Buyer', 'hi', 'hhhhhhhhhhh', '', 'hhhhhhhhhhhhhhh', '2021-12-22', 'male', 0, '', '2021-12-13 06:06:04', 'hi', 'd41d8cd98f00b204e9800998ecf8427e', '', '0000-00-00', 'Active', 'Not Verified'),
(10, 'Buyer', 'hello', 'eeeeeeeeeeeeee', '', 'eeeeeeeeeeeeeeeee', '2021-12-29', 'other', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '2021-12-13 06:30:59', 'hello', 'd41d8cd98f00b204e9800998ecf8427e', 'hello', '0000-00-00', 'Active', 'Not Verified'),
(11, 'Buyer', 'eeeeeeeeeeeeeeeeeeeeee', 'ee', '', 'eeeee', '2021-12-29', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'ee', '08a4415e9d594ff960030b921d42b91e', 'ee', '0000-00-00', 'Active', 'Not Verified'),
(12, 'Buyer', 'yu', 'yu', '', 'uuu', '2021-12-22', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'yu', '6277e2a7446059985dc9bcf0a4ac1a8f', 'uu', '0000-00-00', 'Active', 'Not Verified'),
(13, 'Buyer', 'qq', 'qq', '', 'qq', '2021-12-16', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'qq', '006d2143154327a64d86a264aea225f3', 'qq', '0000-00-00', 'Active', 'Not Verified'),
(14, 'Buyer', 'hee', 'hee', '', 'hee', '2021-12-29', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'hee', 'a6dcd6ccc8a3ca07da9f995919831631', 'hee', '0000-00-00', 'Active', 'Not Verified'),
(15, 'Buyer', 'hee', 'hee', '', 'hee', '2021-12-22', 'male', 0, '', '0000-00-00 00:00:00', 'hee', 'a6dcd6ccc8a3ca07da9f995919831631', '', '0000-00-00', 'Active', 'Not Verified'),
(16, 'Buyer', 'hee', 'hee', '', 'hee', '2021-12-22', 'male', 0, '', '0000-00-00 00:00:00', 'hee', 'a6dcd6ccc8a3ca07da9f995919831631', '', '0000-00-00', 'Active', 'Not Verified'),
(17, 'Buyer', 'g', 'g', '', 'g', '2021-12-22', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'g', 'b2f5ff47436671b6e533d8dc3614845d', 'dbd65784717c867e8993450bf915aa2f', '0000-00-00', 'Active', 'Not Verified'),
(18, 'Buyer', 'Edna ', 'ednaw12313', '', '1234567', '2021-12-10', 'female', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'edn', '202cb962ac59075b964b07152d234b70', '123', '0000-00-00', 'Active', 'Not Verified'),
(19, 'Buyer', 'Edna ', 'ednaw12313', '', '1234567', '2021-12-10', 'female', 0, '', '0000-00-00 00:00:00', 'edn', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', 'Active', 'Not Verified'),
(20, 'Buyer', 'trytrytry', 'asdfghj', '', '234567890', '2021-03-18', 'female', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'try', '202cb962ac59075b964b07152d234b70', '123', '0000-00-00', 'Active', 'Not Verified'),
(21, 'Buyer', 'asdfgh', 'asdfgh', 'NewTown street 68', '09477362467', '2021-07-15', 'male', 0, '', '2021-12-19 15:47:23', 'vendor', '250cf8b51c773f3f8dc8b4be867a9a02', '123', '0000-00-00', 'Active', 'Not Verified'),
(22, 'Buyer', 'veb', 'veb', '', '', '0000-00-00', 'male', 0, '', '2021-12-11 10:44:45', 'veb', 'c20ad4d76fe97759aa27a0c99bff6710', '12', '0000-00-00', 'Active', 'Not Verified'),
(23, 'Buyer', 'op', 'op', '', '', '0000-00-00', 'male', 0, '', '2021-12-13 06:33:36', 'jkl', 'd41d8cd98f00b204e9800998ecf8427e', 'op', '0000-00-00', 'Active', 'Not Verified'),
(33, 'Buyer', 'rt', 'rt', '350 Mercedes St.', '0915151515', '2001-07-18', 'male', 0, '', '2022-01-22 11:10:51', 'rt', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00', 'Active', 'Not Verified'),
(34, 'Seller', 'ty', 'ty', '350 Mercedes St.', '1234567', '2021-12-28', 'male', 0, '', '2022-01-17 21:39:47', 'ty', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00', 'Active', 'Not Verified'),
(35, 'Seller', 'Seller', 're', '', '', '0000-00-00', 'male', 0, '', '2022-01-19 16:05:36', 're', '12eccbdd9b32918131341f38907cbbb5', 're', '0000-00-00', 'Active', 'Not Verified'),
(36, 'Buyer', '123', '123', '', '', '0000-00-00', 'male', 0, '', '2022-01-21 12:46:06', '123', '202cb962ac59075b964b07152d234b70', '123', '0000-00-00', 'Active', 'Not Verified'),
(37, 'Buyer', 'AKO AY ISANG BUYER ', 'ti', '350 Mercedes St.', '09123456789', '2008-01-01', 'male', 0, '', '2022-01-22 13:03:29', 'ti', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00', 'Active', 'Not Verified'),
(38, 'Buyer', 'jj', 'jj', '350 Mercedes St.', '09477362467', '2010-07-06', 'male', 0, '', '2022-01-23 17:50:35', 'jj', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00', 'Active', 'Not Verified'),
(39, 'Buyer', 'EARTH', 'ea', '350 Mercedes St.', '09123', '2021-12-29', 'female', 0, '', '2022-01-23 18:12:10', 'ea', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00', 'Active', 'Not Verified'),
(40, 'Buyer', 'mnm', 'mnm', '', '', '0000-00-00', 'male', 0, '', '2022-01-23 18:13:24', 'mnm', 'c3d6ebaec84ae7a23309342eb5d6b225', '45cfc4deee372012ad3f0a86cbb61926', '0000-00-00', 'Active', 'Not Verified'),
(41, 'Buyer', 'Hatgssss', 'aa', '350 Mercedes St.', '09477362467', '2021-12-29', 'female', 0, '', '2022-01-24 06:11:21', 'aa', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '0000-00-00', 'Active', 'Not Verified'),
(42, 'Seller', 'bb', 'bb', '', '', '0000-00-00', 'male', 0, '', '2022-01-24 06:06:03', 'bb', '21ad0bd836b90d08f4cf640b4c298e7c', 'eee118a6fa4d9906f010c0272ce57947', '0000-00-00', 'Active', 'Not Verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_ id`);

--
-- Indexes for table `cart product`
--
ALTER TABLE `cart product`
  ADD PRIMARY KEY (`cart_product id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order item`
--
ALTER TABLE `order item`
  ADD PRIMARY KEY (`Item_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `transaction history`
--
ALTER TABLE `transaction history`
  ADD PRIMARY KEY (`transactionhistory_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
