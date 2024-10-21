-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 09:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `final_pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pwd`, `final_pwd`) VALUES
(1, 'M. Haseeb', 'haseeb123@gmail.com', '123456', '123456'),
(2, 'Afaq', 'afaq12@gmail.com', '1234', '1234'),
(5, 'test', 'test@gmail.com', 'test1', 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `fname`, `lname`, `email`, `country`, `city`, `street`) VALUES
(4, 'Muhammad', 'Aslam', 'aslam123@gmail.com', 'Pakistan', '', '586 P Block'),
(6, 'Haseeb', 'Sardar', 'haseebsardar123123@gmail.com', 'Pakistan', 'Lahore', '586 P Block'),
(8, 'Arshia', 'Shakeel', 'arshia@gmail.com', 'Punjab', 'Lahore', '23 b block'),
(12, 'Basit', 'Iqbal', 'basit12@gmail.com', 'Punjab', 'Lahore', 'House no. 28,Iqbal Town'),
(13, 'Najeeba', 'Fatima', 'najeeba12@gmail.com', 'Punjab', 'Lahore', '586 P Block, Khayaban e Amin'),
(14, 'Muhammad', 'Aslam', 'aslam@gmail.com', 'Punjab', 'Lahore', '586 P Block, Khayaban e Amin'),
(15, 'amna', 'akram', 'amnaakram@gmail.com', 'Pakistan', 'Islamabad', 'st 96 house no.52'),
(16, 'Muhammad ', 'Akram', 'akram12@gmail.com', 'Pakistan', 'Islamabad', 'st. 96 house 52 i8'),
(17, 'mujahid', 'husaain', 'mujahid@gmail.com', 'Punjab', 'Okara', 'akgcgashghjg'),
(28, 'Haseeb', 'Sardar', 'haseebsardar123123@gmail.com', 'Pakistan', 'Lahore', '586 P Block'),
(29, 'Haseeb', 'Sardar', 'haseebsardar123123@gmail.com', 'Pakistan', 'Lahore', '586 P Block');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `comment`) VALUES
(4, 'Haseeb ', 'haseeb123@gmail.com', 'I really loved your cakes.'),
(5, 'Aslam', 'aslam123@gmail.com', 'bdvjbsdjvhvsudb'),
(6, 'Haseeb ', 'haseebsardar123123@gmail.com', 'bjhuhgvuydf5ecdr'),
(7, 'Haseeb ', 'haseebsardar123123@gmail.com', 'hvgyuvuv'),
(8, 'Aslam', 'haseebsardar123123@gmail.com', 'ghvtrfdrxcy');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(30) NOT NULL,
  `title` varchar(55) NOT NULL,
  `type` varchar(55) NOT NULL,
  `price` varchar(30) NOT NULL,
  `imgUrl` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `type`, `price`, `imgUrl`) VALUES
(24, 'Strawberry Chocolate Cake', 'Multi-flavour Cakes', '1700', 'media/Chocolate-Strawberry-Cake-Recipe-Card.jpg'),
(27, 'Vanilla Tower Cake', 'Wedding Cakes', '3950', 'media/pexels-brent-keane-1702373.jpg'),
(28, 'Strawberry Layer Cake', 'Strawberry Cakes', '1990', 'media/Summer_Category.jpg'),
(29, 'Chocolate Cake', 'Chocolate Cakes', '1350', 'media/images.jpg'),
(30, 'Chocolate Birthday Cake', 'Birthday Cakes', '2450', 'media/sweet-chocolate-birthday-wishes-cake_a78a1.jpg'),
(31, 'Love Cake', 'Valentines Day Cakes', '4490', 'media/love.jpg'),
(32, 'Santa Workshop Cake', 'Christmas Cakes', '4350', 'media/Santas-Workshop-Christmas-Cake-002.jpg'),
(34, 'Butter-cream icing Cake', 'Christmas Cakes', '3790', 'media/buttercream.jpg'),
(38, 'Heart Piped Cake', 'Wedding Cakes', '5590', 'media/Classic-Wedding-Cake-Heart-Piped.jpg'),
(42, 'Cream and Chocolate Cake', 'Chocolate Cakes', '2190', 'media/photo.jpg'),
(43, 'Vanilla chocolate cake', 'Multi-flavour Cakes', '2250', 'media/ding-dong-cake-main1-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `final_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pwd`, `final_pwd`) VALUES
(1, 'Haseeb', 'haseeb12345@gmail.com', 'haseeb12', 'haseeb12'),
(2, 'Afaq', 'afaq123@gmail.com', 'afaq12', 'afaq12'),
(3, 'test', 'test1@gmail.com', 'test12', 'test12'),
(5, 'Basit', 'basit12@gmail.com', 'basit12', 'basit12'),
(6, 'Waleed', 'waleed12@gmail.com', 'waleed12', 'waleed12'),
(7, 'Aslam', 'aslam12@gmail.com', 'aslam12', 'aslam12'),
(8, 'zaeem', 'zaeem12@gmail.com', 'zaeem12', 'zaeem12'),
(9, 'Mustafa', 'mustafa12@gmail.com', 'mustafa12', 'mustafa12'),
(10, 'haseeb', 'arshia@gmail.com', '12345', '12345'),
(11, 'amna akram', 'amnaakram@gmail.com', 'amna12', 'amna12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
