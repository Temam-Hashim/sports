-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 11:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `address`) VALUES
(1, 'Temam Hashim', 'tem@gmail.com', '', 'KIIT UNIVERSITY BIOTECHNOLOGY CAMPUS, campus 11'),
(2, 'Temam Hashim', 'tem@gmail.com', 'hello', 'KIIT UNIVERSITY BIOTECHNOLOGY CAMPUS, campus 11'),
(3, 'Ahimad', 'temu@gmail.com', 'abc', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'temam', 'temam');

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE `match` (
  `match_id` int(11) NOT NULL,
  `team_1` varchar(255) NOT NULL,
  `team_2` varchar(255) NOT NULL,
  `match_date` date NOT NULL,
  `match_time` time NOT NULL,
  `match_status` varchar(255) NOT NULL DEFAULT 'upcoming'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `match`
--

INSERT INTO `match` (`match_id`, `team_1`, `team_2`, `match_date`, `match_time`, `match_status`) VALUES
(1, 'ECS', 'CE&ETC', '2021-02-26', '16:00:00', 'upcoming'),
(2, 'EEE', 'CSE&ME', '2021-02-26', '16:00:00', 'upcoming'),
(3, 'ECS', 'EE', '2021-02-27', '00:00:00', 'upcoming'),
(4, 'CE&ETC', 'CSE&ME', '2021-02-28', '00:00:00', 'upcoming');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` int(11) NOT NULL,
  `player_name` varchar(255) NOT NULL,
  `player_position` varchar(255) NOT NULL,
  `player_status` varchar(255) NOT NULL DEFAULT 'available',
  `player_dept` varchar(255) NOT NULL,
  `player_team` varchar(255) NOT NULL,
  `player_image` varchar(255) NOT NULL DEFAULT 'client.png',
  `player_email` varchar(255) NOT NULL,
  `player_mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `player_name`, `player_position`, `player_status`, `player_dept`, `player_team`, `player_image`, `player_email`, `player_mobile`) VALUES
(23, 'Temam Hashim', 'Outside Hitter', 'injured', 'other', 'CE&ETC', 'client.png', 'temu@gmail.com', '06309814195'),
(27, 'Temam Hashim', 'Outside Hitter', 'available', 'other', 'none', 'ball2.jpg', 'temu@gmail.com', '06309814195');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_image` varchar(255) NOT NULL,
  `played` int(11) NOT NULL,
  `win` varchar(255) NOT NULL,
  `draw` int(11) NOT NULL DEFAULT 0,
  `loss` varchar(255) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `team_name`, `team_image`, `played`, `win`, `draw`, `loss`, `point`) VALUES
(1, 'EEE', 'eee1.jpg', 0, '0', 0, '0', 0),
(2, 'ECS', 'ecs1.jpg', 0, '0', 0, '0', 0),
(3, 'CSE&ME', 'cse1.jpeg', 0, '0', 0, '0', 0),
(4, 'CE&ETC', 'civil.jpg', 0, '0', 0, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_image` varchar(255) NOT NULL,
  `team_abr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_image`, `team_abr`) VALUES
(1, 'EEE', 'eee1.jpg', NULL),
(2, 'ECS', 'ecs1.jpg', NULL),
(3, 'CE&ETC', 'civil.jpg', NULL),
(4, 'CSE&ME', 'cse1.jpeg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match`
--
ALTER TABLE `match`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `match`
--
ALTER TABLE `match`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
