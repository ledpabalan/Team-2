-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 04:04 PM
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
  `category_id` int(11) NOT NULL,
  `product_status` enum('Active','Inactive') NOT NULL,
  `product_category` enum('Top Food','Classics','Budget Meal','Refreshers','Sweet & Dessert') NOT NULL,
  `product_sellerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_price`, `product_pic.URL`, `category_id`, `product_status`, `product_category`, `product_sellerid`) VALUES
(52, 'Biko', 'Violet with Latik', '15.00', '', 0, 'Active', 'Top Food', 0),
(54, 'Chicken Nuggets and Rice', 'Student Meal with free Gravy', '150.00', '', 0, 'Active', 'Budget Meal', 0),
(55, 'Ramen', 'Japanese Style', '120.00', '', 0, 'Active', 'Top Food', 0),
(56, 'Carbonara', 'Creamy mushroom', '150.00', '', 0, 'Active', 'Top Food', 0),
(58, 'Champorado', 'Dark cocoa with skimmed milk', '35.00', '', 0, 'Active', 'Top Food', 0),
(60, 'Pinipig Ice CReam', 'Chocolate', '45.00', '', 0, 'Active', 'Sweet & Dessert', 0),
(66, 'Chicken Wings ', 'Chili', '120.00', '', 0, 'Active', 'Classics', 0),
(67, 'pandecoco', 'cocojammed', '35.00', '', 0, 'Active', 'Budget Meal', 0),
(68, 'pandecoco', 'ad', '23.00', '', 0, 'Active', 'Refreshers', 0),
(69, 'Cornetto', 'Ice Cream', '30.00', '', 0, 'Active', 'Sweet & Dessert', 138),
(70, 'WERW', 'WWEW', '455.00', '', 0, 'Active', 'Top Food', 138),
(71, 'pandecoco', 'sadas', '455.00', '', 0, 'Active', 'Top Food', 138),
(72, 'Sopas', 'Soup', '25.00', '', 0, 'Inactive', 'Budget Meal', 140),
(73, 'sopass', 'soups', '25.00', '', 0, 'Active', 'Budget Meal', 140),
(74, 'sopaaaas', 'sopaas', '34.00', '', 0, 'Active', 'Budget Meal', 140),
(75, 'sop', 'sop', '45.00', '', 0, 'Active', 'Budget Meal', 140),
(76, 'Sopasasasas', 'saspapsasd', '45.00', '', 0, 'Active', 'Budget Meal', 140),
(77, 'sapos', 'sapos', '45.00', '', 0, 'Active', 'Classics', 140),
(78, 'saposss', 'sadas', '34.00', '', 0, 'Active', 'Budget Meal', 140),
(80, 'posas', 'pasas', '344.00', '', 0, 'Active', 'Top Food', 140);

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
(134, 'Buyer', 'cC', 'c', 's', '123', '2022-01-04', 'male', 0, '', '2022-01-20 16:30:10', 'CC', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '0000-00-00', 'Active'),
(135, 'Seller', 's', 's', '', '', '0000-00-00', 'male', 0, '', '2022-01-20 16:31:50', 's', '03c7c0ace395d80182db07ae2c30f034', 'ss', '0000-00-00', 'Active'),
(136, 'Buyer', 'b', 'b', '', '', '0000-00-00', 'male', 0, '', '2022-01-20 16:32:25', 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'b', '0000-00-00', 'Active'),
(137, 'Buyer', 'asa', 'as', 'imus cavite', '09289753986', '2022-02-03', 'male', 0, '', '2022-01-31 17:42:58', 'asa', '457391c9c82bfdcbb4947278c0401e41', '457391c9c82bfdcbb4947278c0401e41', '0000-00-00', 'Inactive'),
(138, 'Seller', 'qw', 'qw', '', '', '0000-00-00', 'male', 0, '', '2022-01-31 05:21:39', 'qw', '006d2143154327a64d86a264aea225f3', 'qw', '0000-00-00', 'Active'),
(139, 'Buyer', 'as', 'as', '', '', '0000-00-00', 'male', 0, '', '2022-01-31 17:45:47', 'as', 'f970e2767d0cfe75876ea857f92e319b', '7b5b40e9d2c268ddc876d026cfd08583', '0000-00-00', 'Active'),
(140, 'Seller', 'cz', 'cz', '', '', '0000-00-00', 'male', 0, '', '2022-02-02 07:13:26', 'cz', '9c049173fad5f4f89c68231237df85b8', '9effd2da99ec2f8e60427569fb2d2b23', '0000-00-00', 'Active');

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
