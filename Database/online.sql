-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 08:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrier`
--

CREATE TABLE `carrier` (
  `id` int(11) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mno` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `pincode` int(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrier`
--

INSERT INTO `carrier` (`id`, `photo`, `name`, `mno`, `email`, `qualification`, `birthdate`, `gender`, `address`, `pincode`, `city`, `state`) VALUES
(14, 'i4.png', 'Meet', '7891234560', 'meet@gmail.com', 'Gradute', '2001-01-01', 'male', 'Sarvoday socity ,junagadh', 362002, 'Junagadh', 'Gujarat'),
(15, 'i3.png', 'Jaydeep', '9925489450', 'jigo@gmail.com', 'Gradute', '1999-07-03', 'male', 'Manganath Road, Junagadh', 362001, 'Junagadh', 'Gujarat'),
(16, 'i1.png', 'Jeet', '9924801164', 'jeet@gmail.com', 'B.Com', '2003-12-25', 'male', 'Meera Road ,Rajkot', 258147, 'Rajkot', 'Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(9) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `name`, `email`, `comment`) VALUES
(3, 'sanjeev', 'sanju@gmail.com', 'I had ordered vegetables on 9/6/2022 from Fresh vegetables.online,\r\nthey mentioned that they will deliver on 12/6/2022, \r\nbut they haven\'t delivered.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `comment`) VALUES
(4, 'Sanjeev', 'Sg@gmail.com', 'Very Nice.....'),
(5, 'Keyur', 'keyur@gmail.com', 'Your Fruit is 100% Organic'),
(6, 'Ajay', 'ajay@gmail.com', 'Nice.....👍'),
(7, 'Nikhil', 'nk@gmail.com', 'Fantastic..'),
(8, 'Fiyaz', 'fiyaz@gmail.com', 'Great Service'),
(9, 'Tanmay', 'tanmay@gmail.com', 'Excellent Service...');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `billno` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `amt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `billno`, `name`, `date`, `amt`) VALUES
(16, 1001, '7778941761', '15-02-2022', '80'),
(35, 1002, 'Sanjeev', '25-08-2022', '250'),
(36, 1003, 'Harsh', '25-08-2022', '80'),
(37, 1004, 'Harsh', '25-08-2022', '60'),
(38, 1005, 'Keyur', '25-08-2022', '200'),
(39, 1006, 'Keyur', '26-08-2022', '160'),
(40, 1007, 'Keyur', '26-08-2022', '80'),
(41, 1008, 'Sanjeev', '31-08-2022', '25');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mno` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `mno`, `pass`, `email`, `address`, `city`, `state`, `pincode`, `type`) VALUES
(15, 'Aayush', '9174801161', '741258', '', '', '', '', '', 'admin'),
(16, 'Chintu', '8888941761', '963258', '', '', '', '', '', 'admin'),
(17, 'Sanjeev', '1234567890', '12345', 'sanjeevgohil2707@gmail.com', '', '', '', '', 'user'),
(18, 'Tushar', '9824180396', '7878', 'tusharkhanderiya@gmail.com', '', '', '', '', 'user'),
(19, 'Aaa', '12345678', '12345', 'aaa@gmail.com', '', '', '', '', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `mno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `mno`, `email`, `pname`, `qty`, `price`, `address`, `city`, `pincode`) VALUES
(2, 'Ronak', '9924881416', 'Rk@gmail.com', 'onion', '50', '60', 'b/h Krishna Socity ,Rajkot', 'Rajkot', '313233'),
(3, 'Ajay', '9915486920', 'Ajay@gmail.com', 'Tomato', '200', '60', 'Mira Road ,Rajkot', 'Rajkot', '365486'),
(4, 'Aman', '9914654646', 'aman@gmail.com', 'Orange', '50', '60', 'Green Villa road Junagad ', 'Junagadh', '362002'),
(5, 'Rohit', '9845162301', 'rohit@gmai.com', 'Carrot', '90', '50', 'Vishavadar', 'Vishavadar', '124545'),
(6, 'Parth', '9845626842', 'parth@gmail.com', 'Leamon', '80', '100', 'Bilkha', 'Bilkha', '894562');

-- --------------------------------------------------------

--
-- Table structure for table `uorder`
--

CREATE TABLE `uorder` (
  `id` int(11) NOT NULL,
  `billno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `qty` int(15) NOT NULL,
  `unit` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uorder`
--

INSERT INTO `uorder` (`id`, `billno`, `name`, `date`, `photo`, `pname`, `qty`, `unit`, `price`, `status`) VALUES
(78, 1002, 'Sanjeev', '25-08-2022', 'apple.jpg', 'Apple', 1, '', '250', 'ok'),
(79, 1003, 'Harsh', '25-08-2022', 'black grapes.jpg', 'Grapes', 1, '', '80', 'ok'),
(80, 1004, 'Harsh', '25-08-2022', 'pineapple.jpg', 'Pineapple', 1, '', '60', 'ok'),
(81, 1005, 'Keyur', '25-08-2022', 'green capsicum.jpg', 'Green Capsicum', 1, '', '100', 'ok'),
(82, 1005, 'Keyur', '25-08-2022', 'coriander leaf.jpg', 'Coriander', 1, '', '100', 'ok'),
(84, 1006, 'Keyur', '26-08-2022', 'black grapes.jpg', 'Grapes', 2, '', '80', 'ok'),
(85, 1007, 'Keyur', '26-08-2022', 'carrot.jpg', 'Carrot', 1, '', '80', 'ok'),
(86, 1008, 'Sanjeev', '31-08-2022', 'apple.jpg', 'Apple', 1, 'kg', '25', 'ok'),
(87, 0, 'Sanjeev', '02-09-2022', 'black grapes.jpg', 'Grapes', 1, 'kg', '80', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `vegetable`
--

CREATE TABLE `vegetable` (
  `id` int(11) NOT NULL,
  `nm` varchar(100) NOT NULL,
  `code` varchar(500) NOT NULL,
  `conti` int(15) NOT NULL,
  `price` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vegetable`
--

INSERT INTO `vegetable` (`id`, `nm`, `code`, `conti`, `price`, `cat`, `photo`) VALUES
(14, 'Apple', '001', 62, '25', 'Fruit', 'apple.jpg'),
(16, 'Grapes', '003', 81, '80', 'Fruit', 'black grapes.jpg'),
(17, 'Orange', '004', 96, '80', 'Fruit', 'orange.jpg'),
(18, 'Carrot', '005', 99, '80', 'Vegetable', 'carrot.jpg'),
(20, 'Tomato', '007', 149, '40', 'Vegetable', 'tomato.jpg'),
(21, 'Peas', '008', 99, '40', 'Vegetable', 'peas.jpg'),
(22, 'Strawberry', '009', 98, '250', 'Fruit', 'stawberry.jpg'),
(23, 'Papaya', '010', 81, '130', 'Fruit', 'papaya.jpg'),
(24, 'Watermealon', '011', 196, '40', 'Fruit', 'watermealon.jpg'),
(25, 'Pineapple', '012', 204, '60', 'Fruit', 'pineapple.jpg'),
(26, 'Cauliflower', '013', 100, '40', 'Vegetable', 'cauliflower.jpg'),
(27, 'Leamon', '014', 100, '200', 'Vegetable', 'leamon.jpg'),
(28, 'Coriander', '015', 99, '100', '10', 'coriander leaf.jpg'),
(29, 'Radish', '016', 100, '20', 'Vegetable', 'radish.jpg'),
(30, 'Bitter Gourd', '15', 50, '70', 'Vegetable', 'bitter gourd.jpg'),
(31, 'Brinjal', '16', 80, '40', 'Vegetable', 'bringle.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrier`
--
ALTER TABLE `carrier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uorder`
--
ALTER TABLE `uorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vegetable`
--
ALTER TABLE `vegetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrier`
--
ALTER TABLE `carrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uorder`
--
ALTER TABLE `uorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `vegetable`
--
ALTER TABLE `vegetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
