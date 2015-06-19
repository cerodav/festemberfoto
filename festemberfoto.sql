-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2015 at 10:13 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `festemberfoto`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE IF NOT EXISTS `entries` (
`id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mobileno` text NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `entry1` varchar(100) NOT NULL,
  `original1` varchar(100) NOT NULL,
  `description1` varchar(500) NOT NULL,
  `entry2` varchar(100) NOT NULL,
  `original2` varchar(100) NOT NULL,
  `description2` varchar(500) NOT NULL,
  `entry3` varchar(100) NOT NULL,
  `original3` varchar(100) NOT NULL,
  `description3` varchar(500) NOT NULL,
  `published` varchar(500) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `name`, `dob`, `city`, `mobileno`, `college`, `email`, `entry1`, `original1`, `description1`, `entry2`, `original2`, `description2`, `entry3`, `original3`, `description3`, `published`, `datetime`) VALUES
(9, 'sherine', '24/07/1995', 'Thrissur', '8754304002', 'NITT', 'sherine.davisk@gmail.com', '8754304002entry1', ' ', '', ' ', '8754304002ori2', '', ' ', ' ', '', '', '2015-06-18 13:21:34'),
(10, 'sherine', '24/07/1995', 'Thrissur', '8754304002', 'NITT', 'sherine.davisk@gmail.com', '8754304002entry1', ' ', '', ' ', '8754304002ori2', '', ' ', ' ', '', '', '2015-06-18 13:24:32'),
(11, 'sherine', '24/07/1995', 'Thrissur', '8754304002', 'NITT', 'sherine.davisk@gmail.com', ' ', ' ', '', '8754304002entry2', '8754304002ori2', '', ' ', ' ', '', '', '2015-06-18 13:25:12'),
(12, 'sherine', '24/07/1995', 'Thrissur', '8754304002', 'NITT', 'sherine.davisk@gmail.com', ' ', ' ', '', '8754304002entry2', ' ', '', ' ', ' ', '', '', '2015-06-18 13:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
`id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
