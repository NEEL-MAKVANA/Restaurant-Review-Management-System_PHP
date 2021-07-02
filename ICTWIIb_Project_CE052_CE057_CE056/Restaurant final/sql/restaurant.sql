-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 07:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `bnation`
--

CREATE TABLE `bnation` (
  `srno` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `point` float NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bnation`
--

INSERT INTO `bnation` (`srno`, `name`, `date`, `point`, `description`) VALUES
(1, 'Neel Makvana', '2021-07-01', 4, 'THIS IS GOOD FOR PROVIDING SERVICE AND MANAGEMENT');

-- --------------------------------------------------------

--
-- Table structure for table `bpepper`
--

CREATE TABLE `bpepper` (
  `srno` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `point` float NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpepper`
--

INSERT INTO `bpepper` (`srno`, `name`, `date`, `point`, `description`) VALUES
(1, 'TULSI LUKHI', '2021-07-07', 4.3, 'THIS IS KNOWN FOR PROVIDING SERVICE..');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('neel makvana', 'neelmakvana168@gmail.com', 'hello', 'hello'),
('Nency Makvana', 'nensmakvana@gmail.com', 'Hello', 'hello'),
('meet', 'mk@gmail.com', 'not defined', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `drotlo`
--

CREATE TABLE `drotlo` (
  `srno` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `point` float NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drotlo`
--

INSERT INTO `drotlo` (`srno`, `name`, `date`, `point`, `description`) VALUES
(1, 'MEET KATRODIYA', '2021-07-15', 4.3, 'THERE ARE MINOR IMPROVEMENT TO PROVIDE GOOD SERVICE.\r\nBUT ALLOVER ITS FINE.');

-- --------------------------------------------------------

--
-- Table structure for table `gthal`
--

CREATE TABLE `gthal` (
  `srno` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `point` float NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gthal`
--

INSERT INTO `gthal` (`srno`, `name`, `date`, `point`, `description`) VALUES
(1, 'MEET KATRODIYA', '2021-07-01', 4, 'OVERALL THIS IS NICE.....');

-- --------------------------------------------------------

--
-- Table structure for table `rajwadu`
--

CREATE TABLE `rajwadu` (
  `srno` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `point` float NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rajwadu`
--

INSERT INTO `rajwadu` (`srno`, `name`, `date`, `point`, `description`) VALUES
(2, 'TULSI LUKHI', '2021-07-01', 5, 'I HAVE NOT ANY WORD TO SAY BUT I WILL DEFINITELY SAY THAT AT LEAST VISIT ONE TIME IN YOUR ENTIRE LIFE');

-- --------------------------------------------------------

--
-- Table structure for table `rkitchen`
--

CREATE TABLE `rkitchen` (
  `srno` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `point` float NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rkitchen`
--

INSERT INTO `rkitchen` (`srno`, `name`, `date`, `point`, `description`) VALUES
(1, 'Neel Makvana', '2021-07-01', 4, 'THIS IS FINE BUT IF YOU IMPROVE FOR FOOD THEN IT WILL AMAZING..');

-- --------------------------------------------------------

--
-- Table structure for table `skitchen`
--

CREATE TABLE `skitchen` (
  `srno` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `point` float NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skitchen`
--

INSERT INTO `skitchen` (`srno`, `name`, `date`, `point`, `description`) VALUES
(1, 'TULSI LUKHI', '2021-07-02', 3.4, 'THIS IS NOT SO GOOD BUT FINE..');

-- --------------------------------------------------------

--
-- Table structure for table `tgb`
--

CREATE TABLE `tgb` (
  `srno` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `point` float NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tgb`
--

INSERT INTO `tgb` (`srno`, `name`, `date`, `point`, `description`) VALUES
(1, 'Makvana neel', '2021-07-02', 4.7, 'THIS IS VERY GOOD ....'),
(2, 'MEET KATRODIYA', '2021-07-02', 4.5, 'THIS IS GOOD ENOUGH...AND BEST FOR INFRASTUCTURE..'),
(3, 'TULSI LUKHI', '2021-07-02', 4, 'THIS RESTAURANT IS MIND BLOWING');

-- --------------------------------------------------------

--
-- Table structure for table `tulsi`
--

CREATE TABLE `tulsi` (
  `srno` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `point` float NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tulsi`
--

INSERT INTO `tulsi` (`srno`, `name`, `date`, `point`, `description`) VALUES
(1, 'MEET KATRODIYA', '2021-07-03', 4.4, 'THIS IS AMAZING....');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bnation`
--
ALTER TABLE `bnation`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `bpepper`
--
ALTER TABLE `bpepper`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `drotlo`
--
ALTER TABLE `drotlo`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `gthal`
--
ALTER TABLE `gthal`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `rajwadu`
--
ALTER TABLE `rajwadu`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `rkitchen`
--
ALTER TABLE `rkitchen`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `skitchen`
--
ALTER TABLE `skitchen`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `tgb`
--
ALTER TABLE `tgb`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `tulsi`
--
ALTER TABLE `tulsi`
  ADD PRIMARY KEY (`srno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
