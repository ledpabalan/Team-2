-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 04:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

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
  `product_category` enum('Top Food','Classics','Budget Meal','Refreshers','Sweets and Desserts') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`, `product_price`, `product_pic.URL`, `category_id`, `product_status`, `product_category`) VALUES
(2, 'Burger', 'Bleu cheese burger large', '44.00', '', 0, 'Inactive', 'Top Food'),
(3, 'lemonade', 'Large with cucumber', '88.00', '', 0, 'Inactive', 'Top Food'),
(4, 'Fries', 'Tornado ', '78.00', '', 0, 'Inactive', 'Top Food'),
(6, 'Buko Juice', 'Cold and Milky', '550.00', '', 0, 'Inactive', 'Top Food'),
(7, 'bread', 'Ube Bread Loaf', '78.00', '', 0, 'Inactive', 'Top Food'),
(8, 'Piyaya', 'Ube,Mango and Chocolate Flavor', '44.00', '', 0, 'Inactive', 'Top Food'),
(13, 'ice cream super thick', 'cookies n cream ', '58.00', '', 0, 'Inactive', 'Top Food'),
(14, 'ice cream choco', 'hot fudge', '788.00', '', 0, 'Inactive', 'Top Food'),
(15, 'caramel drink', 'Hot Caramel with Whipped Cream', '250.00', '', 0, 'Inactive', 'Top Food'),
(18, 'chips', 'crackers', '1.00', '', 0, 'Inactive', 'Top Food'),
(29, 'footlong', 'with mustard', '0.00', '', 0, 'Inactive', 'Top Food'),
(33, 'fried egg', 'fried toasted', '70.00', '', 0, 'Active', 'Classics'),
(36, 'Spaghetti', 'Saucy Italian Style', '100.00', '', 0, 'Active', 'Budget Meal'),
(37, 'avocado shake', 'Large only ', '100.00', '', 0, 'Inactive', 'Top Food'),
(40, 'slurpee', 'largee', '0.00', '', 0, 'Inactive', 'Top Food'),
(52, 'Biko', 'Violet with Latik', '15.00', '', 0, 'Active', 'Top Food'),
(53, 'Bread', 'Cheesiest', '56.00', '', 0, 'Inactive', 'Top Food'),
(54, 'Chicken Nuggets and Rice', 'Student Meal with free Gravy', '150.00', '', 0, 'Active', 'Top Food'),
(55, 'Ramen', 'Japanese Style', '120.00', '', 0, 'Active', 'Top Food'),
(56, 'Benene', 'hksjfsdl', '100.00', '', 0, 'Inactive', 'Top Food'),
(58, 'Chicken', 'Sweet and Spicy Sauce', '500.00', '', 0, 'Active', 'Top Food'),
(59, 'Chicken', 'Salted Caramel', '100.00', '', 0, 'Active', 'Budget Meal');

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
  `user_lastname` varchar(100) NOT NULL,
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
  `verification_key` int(11) NOT NULL,
  `user_acc_status` enum('Verified','Inactive','Pending','Active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `user_name`, `user_lastname`, `user_email`, `user_address`, `user_contact_no`, `user_birthday`, `user_gender`, `user_age`, `user_profpic_URL`, `user_acc_createddate`, `user_username`, `user_password`, `user_pwdRepeat`, `user_previouslog`, `verification_key`, `user_acc_status`) VALUES
(122, 'Buyer', 'c', '0', 'c', '', '', '0000-00-00', 'male', 0, '', '2022-01-13 14:12:56', 'c', '4a8a08f09d37b73795649038408b5f33', 'c', '0000-00-00', 0, ''),
(123, 'Seller', 'v', '0', 'v', '', '', '0000-00-00', 'male', 0, '', '2022-01-13 14:13:25', 'v', '9e3669d19b675bd57058fd4664205d2a', 'v', '0000-00-00', 0, ''),
(124, 'Seller', 's', '0', 's', '', '', '0000-00-00', 'male', 0, '', '2022-01-13 14:14:41', 's', '03c7c0ace395d80182db07ae2c30f034', 's', '0000-00-00', 0, ''),
(126, 'Buyer', 'hahaha', '0', 'hahaha', '', '', '0000-00-00', 'male', 0, '', '2022-01-14 07:14:36', 'hahaha', '101a6ec9f938885df0a44f20458d2eb4', 'hahaha', '0000-00-00', 0, ''),
(130, 'Seller', 'm', '0', 'm', '', '', '0000-00-00', 'male', 0, '', '2022-01-15 12:01:03', 'm', '6f8f57715090da2632453988d9a1501b', 'm', '0000-00-00', 0, ''),
(131, 'Buyer', 'banana', '', 'banana', 'shdhdhd', '154312', '2022-02-01', 'male', 0, '', '2022-02-01 14:44:37', 'ds', '522748524ad010358705b6852b81be4c', '398c3d01d4fef0877fcb417c567216b7', '0000-00-00', 0, 'Active'),
(132, 'Seller', 'cc', '', 'cc', '', '', '0000-00-00', 'male', 0, '', '2022-02-01 15:01:14', 'cc', 'e0323a9039add2978bf5b49550572c7c', 'cc', '0000-00-00', 0, 'Active'),
(133, 'Buyer', 'chyna', '', 'chindpabs@gmail.com', '', '', '0000-00-00', 'male', 0, '', '2022-02-02 02:19:03', 'chyna', 'a547e286ebd5ce650b1c2b20406e4579', 'ead8b59b1b870fe3f81169e82ec04855', '0000-00-00', 0, 'Active'),
(134, 'Seller', 'Je\'Ems Online', '', 'chindpabs@gmail.com', '', '', '0000-00-00', 'male', 0, '', '2022-02-02 02:38:39', 'jems', 'd268730a1be879df70cea522f3bcc9e5', 'jems', '0000-00-00', 0, 'Active');

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
