-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 01:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

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
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
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
  `user_acc_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `user_name`, `user_email`, `user_address`, `user_contact_no`, `user_birthday`, `user_gender`, `user_age`, `user_profpic_URL`, `user_acc_createddate`, `user_username`, `user_password`, `user_pwdRepeat`, `user_previouslog`, `user_acc_status`) VALUES
(1, 'Buyer', 'chichi', 'ccccccc', '', 'cccccccccccc', '2021-12-07', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '2021-12-04 07:46:22', 'ccccccccccccccc', '93c9597045e88366796c4af96ddd9b73', '', '0000-00-00', 'Active'),
(2, 'Seller', 'trtrttr', 'trtrtr', '', 'trtrt', '2021-12-02', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '2021-12-04 07:46:22', 'trtrt', '8098ab4af3b1af7d11da03db2a3efe82', '', '0000-00-00', 'Active'),
(3, 'Buyer', 'bnbnbn', 'nbnbb', '', 'bnbn', '2021-12-01', 'female', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '2021-12-04 07:46:22', 'nbnbnb', '4984aa7eeb8c7fa0709832e364e03989', '', '0000-00-00', 'Active'),
(4, 'Seller', 'jujujuj', 'jujuuj', '', 'juuj', '2021-12-01', 'other', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'jujujuj', '843b776102262a1250f7d41b1b5472e0', '', '0000-00-00', 'Active'),
(5, 'Buyer', 'tytytytytytyt', 'ytytyty', '', 'ytytytyty', '2021-12-10', 'female', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'tytytyt', 'f15541c3f3b9c84f16e405bca85b781b', '', '0000-00-00', 'Active'),
(6, 'Buyer', 'dcdcdc', 'cdcdc', '', 'cdcdcd', '2021-12-17', 'female', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'dcdcdcdc', '0267b7178244d5ebe949b52a0066893f', '', '0000-00-00', 'Active'),
(7, 'Buyer', 'oaoaoa', 'oaoaoaoa', '', 'asdasdsada', '2021-12-17', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'oaoaoaoa', '59baa56a6b636052d417fee183acac31', 'aoaoaoa', '0000-00-00', 'Active'),
(8, 'Buyer', 'hi', 'hhhhhhhhhhh', '', 'hhhhhhhhhhhhhhh', '2021-12-22', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'hi', '49f68a5c8493ec2c0bf489821c21fc3b', 'hi', '0000-00-00', 'Active'),
(9, 'Buyer', 'hi', 'hhhhhhhhhhh', '', 'hhhhhhhhhhhhhhh', '2021-12-22', 'male', 0, '', '0000-00-00 00:00:00', 'hi', '49f68a5c8493ec2c0bf489821c21fc3b', '', '0000-00-00', 'Active'),
(10, 'Buyer', 'hello', 'eeeeeeeeeeeeee', '', 'eeeeeeeeeeeeeeeee', '2021-12-29', 'other', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'hello', '5d41402abc4b2a76b9719d911017c592', 'hello', '0000-00-00', 'Active'),
(11, 'Buyer', 'eeeeeeeeeeeeeeeeeeeeee', 'ee', '', 'eeeee', '2021-12-29', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'ee', '08a4415e9d594ff960030b921d42b91e', 'ee', '0000-00-00', 'Active'),
(12, 'Buyer', 'yu', 'yu', '', 'uuu', '2021-12-22', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'yu', '6277e2a7446059985dc9bcf0a4ac1a8f', 'uu', '0000-00-00', 'Active'),
(13, 'Buyer', 'qq', 'qq', '', 'qq', '2021-12-16', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'qq', '006d2143154327a64d86a264aea225f3', 'qq', '0000-00-00', 'Active'),
(14, 'Buyer', 'hee', 'hee', '', 'hee', '2021-12-29', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'hee', 'a6dcd6ccc8a3ca07da9f995919831631', 'hee', '0000-00-00', 'Active'),
(15, 'Buyer', 'hee', 'hee', '', 'hee', '2021-12-22', 'male', 0, '', '0000-00-00 00:00:00', 'hee', 'a6dcd6ccc8a3ca07da9f995919831631', '', '0000-00-00', 'Active'),
(16, 'Buyer', 'hee', 'hee', '', 'hee', '2021-12-22', 'male', 0, '', '0000-00-00 00:00:00', 'hee', 'a6dcd6ccc8a3ca07da9f995919831631', '', '0000-00-00', 'Active'),
(17, 'Buyer', 'g', 'g', '', 'g', '2021-12-22', 'male', 0, 'https://icon-library.com/images/no-picture-available-icon/no-picture-available-icon-20.jpg', '0000-00-00 00:00:00', 'g', 'b2f5ff47436671b6e533d8dc3614845d', 'dbd65784717c867e8993450bf915aa2f', '0000-00-00', 'Active');

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
