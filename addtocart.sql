-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2016 at 01:39 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `addtocart`
--

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE IF NOT EXISTS `abc` (
`as` int(2) NOT NULL,
  `sa` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('karan@gmail.com', 'karan');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`c_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `pid`, `username`) VALUES
(3, 2, 'abhijeet'),
(5, 5, 'abhijeet'),
(6, 6, 'abhijeet'),
(8, 1, 'abhijeet'),
(9, 1, 'Karan'),
(10, 1, 'Karan'),
(11, 1, 'Karan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('polly@gmail.com', 'polly');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`count` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `btype` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`count`, `pname`, `cname`, `ptype`, `btype`, `image`, `desc`, `cost`) VALUES
(1, 'samsung j7', 'mumbai', 'Phone', 'Samsung', 'images/image2.jpg', '1. 5.5"inch   cam:front:5mp back: 13 mp', 15000),
(2, 'iphone 5s', 'thane', 'Phone', 'Apple', 'images/image3.jpg', '1. 4.5"inch   cam:front:2mp back: 8 mp', 25000),
(3, 'dell i325', 'pune', 'Laptop', 'Dell', 'images/image6.jpg', '1. 7"inch RAM: 2gb', 30000),
(4, 'iphone 1s', 'chennai', 'Tablet', 'Apple', 'images/image11.jpg', '1. 6"inch   cam:front:2mp back: 8 mp', 50000),
(5, 'nokia 1024', 'delhi', 'Phone', 'Nokia', 'images/image14.jpg', '1. 5"inch   cam:front:13mp back: 41 mp', 45000),
(6, 'hp g325', 'kolkata', 'Laptop', 'hp', 'images/image8.jpg', '1. 7"inch RAM: 2gb', 30000),
(7, 'nokia tab42', 'nashik', 'Tablet', 'Nokia', 'images/image12.png', '1. 6"inch   cam:front:5mp back: 13 mp', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
`r_id` int(3) NOT NULL,
  `review` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`r_id`, `review`, `username`) VALUES
(3, 'nice mobile', 'ssss'),
(4, 'good cell', 'abhijeet'),
(5, 'good cell', 'abhijeet'),
(6, 'nice mobile', 'abhijeet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`count` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`count`, `name`, `email`, `password`) VALUES
(1, 'abhijeet', 'polly@gmail.com', 'polly'),
(2, 'Karan', 'kmj@gmail.com', 'kk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abc`
--
ALTER TABLE `abc`
 ADD PRIMARY KEY (`as`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`count`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
 ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`count`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abc`
--
ALTER TABLE `abc`
MODIFY `as` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `count` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
MODIFY `r_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `count` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
