-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2021 at 03:38 PM
-- Server version: 5.7.17
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbqna`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `answerDesc` text NOT NULL,
  `questionId` int(11) NOT NULL,
  `answerDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Answer Table';

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `answerDesc`, `questionId`, `answerDate`) VALUES
(1, 'Google is a serch engin', 1, '2021-09-10 06:33:10'),
(2, 'Google is not only a search engine its is Tech gint ', 1, '2021-09-10 06:34:52'),
(3, 'Google is a product base Software compony', 1, '2021-09-10 08:18:51'),
(4, 'Searching is a process you find a spacific value ', 2, '2021-09-10 08:19:34'),
(5, 'Android phpne is the good for working', 3, '2021-09-10 08:20:01'),
(6, 'Searching is the process to find the project', 2, '2021-09-10 08:20:29'),
(7, 'Google is a large and vercital platform', 1, '2021-09-10 12:23:56');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `questionTitle` text NOT NULL,
  `SubmitDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `userId`, `questionTitle`, `SubmitDate`) VALUES
(1, 1, 'What is google', '2021-09-10 06:31:31'),
(2, 2, 'Why you are doing a searching', '2021-09-10 06:32:10'),
(3, 1, 'What is android phone', '2021-09-10 08:17:03'),
(4, 1, 'How to work at google', '2021-09-10 10:38:38'),
(5, 1, 'How to work at facebook', '2021-09-10 10:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` text NOT NULL,
  `regdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstName`, `lastName`, `email`, `password`, `regdate`, `id`) VALUES
('hello', 'owlrd', 'aadars#gcom', 'hello', '2021-09-09 12:43:19', 1),
('aadarsh', 'singh', 'hello@gmail.com', '3fa5a0cfc9e8ff2278d078fb61a43e7b', '2021-09-09 12:49:59', 2),
('Raj ', 'singh', 'Aadarshsingh@gmail.com', '3fa5a0cfc9e8ff2278d078fb61a43e7b', '2021-09-09 12:51:06', 3),
('Raj                   ', 'singh', 'hello world#gmial.com', '921f6a1089b94e879e2712d2cd56d743', '2021-09-09 12:59:55', 4),
('Raj', 'singh               ', 'hello world#gmialas.com', '921f6a1089b94e879e2712d2cd56d743', '2021-09-09 13:02:08', 5),
('Raj', 'singh', 'hello world#gmiaflas.com', '921f6a1089b94e879e2712d2cd56d743', '2021-09-09 13:02:42', 6),
('Raj', 'singh', 'hello world#gmifaflas.com', '921f6a1089b94e879e2712d2cd56d743', '2021-09-09 13:02:50', 7),
('aman', 'dhatarawal', 'aman#gmail.com', '74e556bae0b204f256a7251babc600b6', '2021-09-09 13:03:23', 8),
('aman', 'raj', 'aman121gmail.com', 'f5ddaf0ca7929578b408c909429f68f2', '2021-09-10 03:10:20', 9),
('aman', 'raj', 'test@g.com', '098f6bcd4621d373cade4e832627b4f6', '2021-09-10 04:01:38', 10),
('rahul', 'singh', 'rahulsingh123@gmail.com', '23b431acfeb41e15d466d75de822307c', '2021-09-10 12:49:59', 11),
('check', 'test', 'test@g.cm', '6aeeb224326f87c009dd5e28be39306f', '2021-09-10 12:54:02', 12),
('check3', 'test2', 'test32@g.cm', 'c5af23cd788548bc356ae6611b552118', '2021-09-10 12:59:40', 13),
('test44', 'test54', 'testtt@gmail.co', '2f6aae851d244c9a904be889a392e0ec', '2021-09-10 13:00:25', 14),
('aadarsh', 'singh', 'aadarsh32@gmail.com', '2f6aae851d244c9a904be889a392e0ec', '2021-09-10 13:33:34', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questionId` (`questionId`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
