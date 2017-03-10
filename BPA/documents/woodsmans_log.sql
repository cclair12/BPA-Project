-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 13, 2017 at 03:11 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `woodsmans_log`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category`) VALUES
(1, 'hunting'),
(2, 'fishing'),
(3, 'camping');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(10) NOT NULL,
  `filename` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `filename`) VALUES
(1, 'ts_step1.jpg'),
(2, 'ts_step2.jpg'),
(3, 'ts_step3.jpg'),
(4, 'ts_step4.jpg'),
(5, 'ts_step5.jpg'),
(6, 'cs_step1.jpg'),
(7, 'cs_step2.jpg'),
(8, 'cs_step3.jpg'),
(9, 'cs_step4.jpg'),
(10, 'fs_step1.jpg'),
(11, 'fs_step2.jpg'),
(12, 'fs_step3.jpg'),
(13, 'fs_step4.jpg'),
(14, 'fs_step5.jpg'),
(15, 'fws_step1.jpg'),
(16, 'fws_step2.jpg'),
(17, 'fws_step3.jpg'),
(18, 'fws_step4.jpg'),
(19, 'fws_step5.jpg'),
(20, 'mt_step1.jpg'),
(21, 'mt_step2.jpg'),
(22, 'mt_step3.jpg'),
(23, 'mt_step4.jpg'),
(24, 'mt_step5.jpg'),
(25, 'mt_step6.jpg'),
(26, 'ws_step1.jpg'),
(27, 'ws_step2.jpg'),
(28, 'ws_step3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project2cat`
--

CREATE TABLE `project2cat` (
  `project_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project2cat`
--

INSERT INTO `project2cat` (`project_id`, `category_id`) VALUES
(1, 1),
(2, 3),
(3, 2),
(4, 3),
(5, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `image_id`, `name`, `description`) VALUES
(1, 5, 'Bow Target Stand', 'This simple stand will elevate your bow target, helping you keep your skills sharp and sight in your bow before your next trip!'),
(2, 19, 'Firewood Sling', 'Gather and carry firewood quickly and easily!'),
(3, 14, 'Fishing Line Spooler', 'Spool up your favorite reel in a snap!'),
(4, 28, 'Hand Washing Station', 'Keep yourself and your camp kitchen clean with this portable solution!'),
(5, 9, 'Homemade Cover Scent', 'Create a cover scent using materials gathered from your favorite scouting location!'),
(6, 25, 'Minnow Trap', 'Use household materials to catch bait the next time you''re on the dock!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `project2cat`
--
ALTER TABLE `project2cat`
  ADD PRIMARY KEY (`project_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `image_id` (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `project2cat`
--
ALTER TABLE `project2cat`
  ADD CONSTRAINT `project2cat_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`),
  ADD CONSTRAINT `project2cat_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
