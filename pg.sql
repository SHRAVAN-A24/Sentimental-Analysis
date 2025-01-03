-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 03:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pg`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `pgname` varchar(255) NOT NULL,
  `ownername` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `pgname`, `ownername`, `email`, `password`, `adress`, `phone`) VALUES
(1, 'dshgufdfg', 'sgegd', '1@gmail.com', '1', 'fdassd', 65464),
(2, 'pg2', 'dhananjay', '2@gmail.com', '2', 'puttur', 2147483647),
(50, 'nalanda', 'kodi', '3@gmail.com', '3', 'nehru nagara', 1234656799),
(51, 'thunder pg', 'sandy', '4@gmail.com', '4', 'tiptur', 123654789),
(53, 'Surya', 'Charan', 'charansurya@gmail.com', 'charan', 'bhagamandala', 2147483647),
(54, 'lsfdgjh', 'sfad', 'afds@gmmail.com', '1', 'dfh', 2147483647),
(55, 'fdhg', 'dfg', 'sgd@gmail.com', '1', 'dt', 2147483647),
(56, 'gf', 'sdf', 'sdfa@gmail.com', '1', 'dsfa', 2147483647),
(57, 'fad', 'afse', 'aedf@gmail.com', '1', 'wrgfgr', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `pid`, `status`, `cid`) VALUES
(32, 2, 'approved', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `prediction` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `uid`, `pid`, `comment`, `prediction`) VALUES
(134, 1, 1, 'very good', 'Positive'),
(135, 1, 1, 'very bad', 'Negative'),
(136, 2, 2, 'good', 'Positive'),
(137, 13, 1, 'average', 'Negative'),
(138, 1, 50, 'not good', 'Negative'),
(139, 1, 50, 'good', 'Positive'),
(140, 14, 51, 'very good', 'Positive'),
(141, 1, 50, 'good', 'Positive'),
(146, 1, 1, 'ok average looking', 'Positive'),
(147, 1, 51, 'bad', 'Negative'),
(154, 1, 2, 'not satisfied', 'Negative');

-- --------------------------------------------------------

--
-- Table structure for table `image1`
--

CREATE TABLE `image1` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image_url2` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image_url3` varchar(255) CHARACTER SET latin1 NOT NULL,
  `iid` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `price` int(15) NOT NULL,
  `text` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image1`
--

INSERT INTO `image1` (`id`, `image_url`, `image_url2`, `image_url3`, `iid`, `name`, `price`, `text`) VALUES
(1, 'IMG_1_1_-61d02bd4c82143.78025055.jpg', 'IMG_1_2_-61d02bd4c821a5.01921035.jpg', 'IMG_1_3_-61d02bd4c821b5.65221355.jpg', 6, 'Sridar', 20000, ' this pg is very good and has best living hygine'),
(2, 'IMG_2_1_-61d02e75484440.10011945.jpg', 'IMG_2_2_-61d02e754844d2.69653582.jpg', 'IMG_2_3_-61d02e754844f6.31067340.jpg', 7, 'Murli', 21000, ' it is very hygene'),
(50, 'IMG_50_1_-6252e3085cce97.42629093.jpg', 'IMG_50_2_-6252e3085ccee2.12082676.jpg', 'IMG_50_3_-6252e3085ccef6.34567816.jpg', 10, 'Nalanda', 60000, ' ok ok'),
(51, 'IMG_51_1_-6252f0776f7b24.51077607.jpeg', 'IMG_51_2_-6252f0776f7b87.83662427.jpeg', 'IMG_51_3_-6252f0776f7b92.65595516.jpeg', 11, 'Thor', 40000, ' very good pg to stay for stundents.'),
(53, 'IMG_53_1_-625d6fe7dfd0c4.90118084.jfif', 'IMG_53_2_-625d6fe7dfd120.95144753.jfif', 'IMG_53_3_-625d6fe7dfd141.43076499.jfif', 12, 'Surya', 50000, ' best pg to stay ');

-- --------------------------------------------------------

--
-- Table structure for table `prating`
--

CREATE TABLE `prating` (
  `rid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `prating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prating`
--

INSERT INTO `prating` (`rid`, `id`, `prating`) VALUES
(128, 50, 0.66666666666667),
(129, 53, 0),
(134, 1, 0.4),
(138, 51, 0.5),
(151, 2, 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `foodRating` float NOT NULL,
  `id` int(11) NOT NULL,
  `hygieneRating` float NOT NULL,
  `place` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`cid`, `pid`, `foodRating`, `id`, `hygieneRating`, `place`) VALUES
(1, 1, 3.8, 41, 3.8, 3.9),
(2, 2, 3.6, 44, 3.9, 3.8),
(2, 2, 3.6, 45, 3.9, 3.8),
(1, 1, 1.3, 46, 1, 0.7),
(1, 1, 1.3, 47, 1, 0.7),
(1, 1, 1.3, 48, 1, 0.7),
(1, 1, 1.3, 49, 1, 4),
(1, 1, 1.3, 50, 1, 4),
(1, 1, 1.3, 51, 1, 4),
(1, 1, 1.3, 52, 1, 4),
(1, 1, 1.3, 53, 1, 4),
(1, 1, 4.8, 54, 4.6, 4.7),
(13, 1, 5, 55, 4.6, 0),
(13, 1, 5, 56, 4.6, 0),
(2, 2, 4.8, 57, 4.9, 4.8),
(1, 50, 3.9, 58, 3.7, 3.6),
(1, 50, 3.9, 59, 3.7, 3.6),
(1, 50, 3.9, 60, 3.7, 3.6),
(14, 51, 4.6, 61, 4.6, 4.4),
(14, 51, 3.5, 62, 3.5, 3.8),
(1, 50, 0, 63, 0, 0),
(1, 50, 4.6, 64, 3.4, 3.7),
(1, 53, 4.8, 65, 4.5, 4.8),
(1, 2, 4, 66, 4, 4),
(1, 2, 4, 67, 4, 4),
(1, 2, 4, 68, 4, 4),
(1, 1, 4, 69, 4, 4),
(1, 1, 4, 70, 4, 4),
(1, 1, 4, 71, 4, 4),
(1, 51, 4, 72, 4, 4),
(1, 51, 1.4, 73, 1.4, 1.4),
(12, 51, 3.8, 74, 4.3, 4.6),
(12, 51, 4.7, 75, 4.3, 4.2),
(1, 2, 4.6, 76, 3.9, 4.2),
(1, 2, 4, 77, 4, 4.2),
(1, 2, 4, 78, 4, 4.2),
(1, 2, 4, 79, 4, 4.2),
(1, 2, 4, 80, 4, 4.2),
(1, 2, 1.6, 81, 4, 4),
(1, 2, 1.6, 82, 4, 4),
(1, 2, 3.2, 83, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`id`, `cid`, `message`) VALUES
(1, 12, 'going good !!'),
(8, 1, 'Hello everyone it is good to see you !!!!'),
(10, 2, 'hello'),
(18, 1, 'Hey guys'),
(25, 15, 'hai');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `name`, `email`, `uname`, `password`, `adress`, `phone`) VALUES
(1, 'sfda', '1@gmail.com', 'sdfg', '1', 'sfgd', 854),
(2, 'pawan', '2@gmail.com', 'pawan', '2', 'sdjhjfd', 254688),
(6, 'PawanB', '3@gmail.com', 'dfg', '3', 'fxg', 54354),
(11, 'k', '2@gmail.com', 'k', 'k', 'k', 354452154),
(12, 'kodi', 'k@gmail.com', 'kodi', 'k', 'kankanadi', 2147483647),
(13, 'pa', '5@gmail.com', 'red', '5', 'hyh', 2147483647),
(14, 'pawan2', '9@gmail.com', 'pawan2', '9', 'nagara', 2147483647),
(15, 'Sandeep Kumar T', 'sandy@gmail.com', 'sandy', 'sandy', 'tiptur ', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `image1`
--
ALTER TABLE `image1`
  ADD PRIMARY KEY (`iid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `prating`
--
ALTER TABLE `prating`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `image1`
--
ALTER TABLE `image1`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prating`
--
ALTER TABLE `prating`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `userlogin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `adminlogin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image1`
--
ALTER TABLE `image1`
  ADD CONSTRAINT `image1_ibfk_1` FOREIGN KEY (`id`) REFERENCES `adminlogin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prating`
--
ALTER TABLE `prating`
  ADD CONSTRAINT `prating_ibfk_1` FOREIGN KEY (`id`) REFERENCES `adminlogin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `userlogin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `adminlogin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
