-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 06:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ac_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `a_id` int(20) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(35) NOT NULL,
  `pswd` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`a_id`, `name`, `email`, `pswd`) VALUES
(1, 'admin', 'kdm@gmail.com', 'tiger'),
(2, 'Shreedhar', 'shreedharmb22@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booked_parti`
--

CREATE TABLE `booked_parti` (
  `p_id` int(20) NOT NULL,
  `e_id` int(20) NOT NULL,
  `booking_id` int(5) NOT NULL,
  `email` varchar(20) NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_parti`
--

INSERT INTO `booked_parti` (`p_id`, `e_id`, `booking_id`, `email`, `amount`) VALUES
(12, 26, 14, 'prathmeshhaware29@gm', 50),
(12, 25, 15, 'prathmeshhaware29@gm', 70),
(12, 25, 16, 'prathmeshhaware29@gm', 70),
(12, 25, 17, 'prathmeshhaware29@gm', 70);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(3) NOT NULL,
  `o_id` int(5) NOT NULL,
  `e_name` text NOT NULL,
  `cat` text NOT NULL,
  `venue` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `parti_fee` int(11) NOT NULL,
  `e_img` varchar(70) NOT NULL,
  `e_desc` varchar(50) NOT NULL,
  `max_parti` int(11) NOT NULL,
  `validate` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `o_id`, `e_name`, `cat`, `venue`, `date`, `parti_fee`, `e_img`, `e_desc`, `max_parti`, `validate`) VALUES
(24, 16, 'PHP workshop', 'edu', 'Mehta Hall', '2019-04-24', 100, 'uploads/sliderimage2.jpg', 'A certified php workshop (bring college id )', 25, 1),
(25, 18, 'Basketball', 'sports', 'INDUS Pavllion', '2019-04-23', 70, 'uploads/sliderimage1.jpg', 'Basketball tournament', 5, 1),
(26, 18, 'debet competition', 'College', 'Mehta Hall', '2019-04-26', 50, 'uploads/debate.jpg', 'debet competition (English,hindi and gujarati)', 10, 1),
(27, 18, 'singing', 'Performing Arts', 'Music college ', '2019-04-30', 150, 'uploads/singing.jpg', 'Classical singing competition', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `org_reg`
--

CREATE TABLE `org_reg` (
  `o_id` int(5) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(35) NOT NULL,
  `p_no` bigint(12) NOT NULL,
  `pswd` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_reg`
--

INSERT INTO `org_reg` (`o_id`, `name`, `email`, `p_no`, `pswd`) VALUES
(4, 'krupal', 'abcj@gmail.com', 9898989889, 'fdfnsldf'),
(13, 'keyur', 'keyur723@gmail.com', 7896978384, 'keyur11'),
(15, 'Yash Chauhan', 'yc9274@gmail.com', 9067405194, 'YcyC1234'),
(16, 'techmax', 'techmax34@gmail.com', 9898989889, 'Tech@123'),
(18, 'msu', 'msu12@gmail.com', 7405407733, 'Msu@123456'),
(19, 'df', 'afs@gmail.com', 9898089618, 'Abcdefghi@1'),
(20, 'Keyur', 'keyur@gmail.com', 9898089618, 'A@123keyur');

-- --------------------------------------------------------

--
-- Table structure for table `parti_reg`
--

CREATE TABLE `parti_reg` (
  `p_id` int(20) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(35) NOT NULL,
  `pswd` varchar(16) NOT NULL,
  `int_cat` varchar(50) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parti_reg`
--

INSERT INTO `parti_reg` (`p_id`, `name`, `email`, `pswd`, `int_cat`, `age`) VALUES
(12, 'prathmesh', 'prathmeshhaware29@gmail.com', 'Mash@123', 'Performing Arts', 19),
(14, 'khyatin', 'khyatinkadam@gmail.com', 'khKH1234', 'educational', 18),
(15, 'neel', 'neelhdesai@yahoo.co.in', 'neelhd', 'performing arts', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booked_parti`
--
ALTER TABLE `booked_parti`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `e_id` (`e_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `o_id` (`o_id`);

--
-- Indexes for table `org_reg`
--
ALTER TABLE `org_reg`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `parti_reg`
--
ALTER TABLE `parti_reg`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booked_parti`
--
ALTER TABLE `booked_parti`
  MODIFY `booking_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `org_reg`
--
ALTER TABLE `org_reg`
  MODIFY `o_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `parti_reg`
--
ALTER TABLE `parti_reg`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked_parti`
--
ALTER TABLE `booked_parti`
  ADD CONSTRAINT `booked_parti_ibfk_4` FOREIGN KEY (`p_id`) REFERENCES `parti_reg` (`p_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `booked_parti_ibfk_5` FOREIGN KEY (`e_id`) REFERENCES `events` (`e_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`o_id`) REFERENCES `org_reg` (`o_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
