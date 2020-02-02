-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql111.epizy.com
-- Generation Time: Jan 29, 2020 at 01:01 AM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_24787674_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phoneno`, `email`, `password`) VALUES
(1, 'Gunasekhar', 7995057295, 'gunasekhar158@gmail.com', '7781322');

-- --------------------------------------------------------

--
-- Table structure for table `livechat`
--

CREATE TABLE `livechat` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livechat`
--

INSERT INTO `livechat` (`id`, `name`, `message`) VALUES
(573, 'Guna', 'Hhd'),
(574, 'Guna', 'Dndb'),
(575, 'Guna', 'Ndbdh'),
(576, 'Guna', 'Djhdh'),
(577, 'Guna', 'Ndhdb'),
(578, 'Guna', 'Djdj'),
(579, 'Guna', 'Bdhf'),
(580, 'Guna', 'Jdhdh'),
(581, 'Lalith', ''),
(582, 'Lalith', ''),
(583, 'Guna', 'Jdjfj'),
(584, 'Guna', 'Djdjj'),
(585, 'Guna', 'Dnjdh'),
(586, 'Guna', 'Djdhhd'),
(587, 'Guna', 'Jdjdhdh'),
(588, 'Guna', 'Kdjddkd'),
(589, 'Guna', 'Mdjdhdn'),
(590, 'Guna', 'Jfjfhfb'),
(591, 'Guna', 'Jdjdhfhfh'),
(592, 'Guna', 'Ndjdjjdj'),
(593, 'Guna', 'Ndjdjdjdj'),
(594, 'Guna', 'Fjjfjfjfjff'),
(595, 'Guna', 'Cjnfnfjf'),
(596, 'Guna', 'Fjhfhfhfbfhfh'),
(597, 'Guna', 'Dncnhfjf'),
(598, 'Guna', 'Fnfjfjjdjd'),
(599, 'Guna', 'Kdjdjdndndn'),
(600, 'Lalith', ''),
(601, 'Guna', 'Ggh'),
(602, 'Guna', 'Hgf'),
(603, 'Guna', 'Gggg'),
(604, 'Guna', 'Bhgfftj'),
(605, 'Guna', 'Hyjj'),
(606, 'Guna', 'Gffgfrvh'),
(607, 'guna', 'rtjs'),
(608, 'guna', 'zt'),
(609, 'guna', 'zj'),
(610, 'guna', ''),
(611, 'guna', 'zr'),
(612, 'guna', 'r'),
(613, 'guna', 'sjm'),
(614, 'guna', 'sr'),
(615, 'guna', 'm'),
(616, 'guna', 's');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(300) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `userid`, `name`, `message`, `time`) VALUES
(2289, 16, 'Lalith', 'Hi', '2020-01-18 10:32:02'),
(2290, 1, 'Gunasekhar', 'Bdbdb', '2020-01-23 10:59:50'),
(2291, 1, 'Gunasekhar', 'Djfh', '2020-01-23 10:59:50'),
(2292, 1, 'Gunasekhar', 'Mfjfhf', '2020-01-23 10:59:51'),
(2293, 1, 'Gunasekhar', 'Jfhfh', '2020-01-23 10:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `notesadmin`
--

CREATE TABLE `notesadmin` (
  `id` int(10) NOT NULL,
  `adminid` int(10) NOT NULL,
  `text` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notesuser`
--

CREATE TABLE `notesuser` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `text` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `status`, `text`) VALUES
(1, 1, 'status');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `status` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `name`, `phoneno`, `email`, `password`) VALUES
(1, 1, 'Gunasekhar', 7995057295, 'gunasekhar158@gmail.com', '778'),
(2, 1, 'nivas', 7330625619, 'vasasainivas18@gmail.com', 'vasasainivas'),
(3, 1, 'Uday', 9494113340, 'udaykiransingu@gmail.com', 'uday'),
(14, 1, 'Srinivasan S', 9566662510, 'ssrinivasan0710@gmail.com', '10072001'),
(15, 1, 'RAKESH KUMAR', 9912740790, 'madhamaettyrakeshkumar@gmail.com', 'rakesh123'),
(16, 1, 'Lalith', 9014040448, 'lalith@gmail.com', '12345678'),
(20, 1, 'Gunavardhan', 6305784293, 'gunavardhan158@gmail.com', 'viteee2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livechat`
--
ALTER TABLE `livechat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notesadmin`
--
ALTER TABLE `notesadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notesuser`
--
ALTER TABLE `notesuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `livechat`
--
ALTER TABLE `livechat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=617;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2294;

--
-- AUTO_INCREMENT for table `notesadmin`
--
ALTER TABLE `notesadmin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `notesuser`
--
ALTER TABLE `notesuser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
