-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 03:37 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seniorcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `serviceID` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `serviceName` varchar(20) NOT NULL,
  `bookingDate` date NOT NULL,
  `bookingTime` time NOT NULL,
  `notes` varchar(50) NOT NULL,
  `numOfServices` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`serviceID`, `user_name`, `serviceName`, `bookingDate`, `bookingTime`, `notes`, `numOfServices`, `status`) VALUES
(21, '', 'assistedLiving', '2018-11-23', '13:00:00', 'pura come here', 'week', 'pending'),
(33, '', 'buyingGrocery', '2018-11-24', '12:00:00', 'Every saturday', 'once', 'pending'),
(36, '', 'companionship', '1313-03-12', '01:21:00', '123', 'month', 'pending'),
(37, '', 'assistedLiving', '0558-08-07', '19:08:00', 'fhft', 'week', 'pending'),
(40, '', 'medicalCare', '2018-11-22', '00:59:00', 'ASAP!!!', 'week', 'pending'),
(41, '', 'medicalCare', '2018-11-27', '21:19:00', 'fever', 'week', 'pending'),
(42, '', 'buyingGrocery', '2018-11-29', '20:00:00', 'Buy vegetables', 'day', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `booking2`
--

CREATE TABLE `booking2` (
  `serviceID` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `bookingDate` date NOT NULL,
  `bookingTime` time NOT NULL,
  `notes` varchar(255) NOT NULL,
  `numOfServices` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking2`
--

INSERT INTO `booking2` (`serviceID`, `user_name`, `serviceName`, `bookingDate`, `bookingTime`, `notes`, `numOfServices`, `status`) VALUES
(2, '', 'medicalCare', '2018-03-12', '00:03:00', 'Something', 'month', 'Approved'),
(30, '', 'medicalCare', '2018-11-22', '20:00:00', 'Fever', 'day', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(11) NOT NULL,
  `serviceID` int(100) NOT NULL,
  `rating` varchar(30) NOT NULL,
  `comment` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewID`, `serviceID`, `rating`, `comment`) VALUES
(40, 40, '5', 'Good service =)'),
(41, 41, '5', 'Good service!!!'),
(42, 42, '5', 'Vegetables delivered');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `USER_ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`USER_ID`, `username`, `password`, `fullname`, `email`, `mobile`, `address`, `user_type`) VALUES
(17, 'puikei', 'puikei123', 'Pui Kei', 'ass@gmail.com', 1234567, '', 'senior'),
(19, 'pura', 'puraveen123', 'puraveen kumar', 'assa@awqwq', 123456, '', 'service-provider'),
(20, 'purav', '123456789', 'Puraveen Kumar Nagarajan', 'swsw@fsnsn', 123232323, '', 'service-provider'),
(21, 'balaji', 'balaji9545', 'Puraveen Kumar', 'purav_kumar@live.com', 123456789, '', 'senior'),
(22, 'kumar', 'kumar12345', 'Puraveen Kumar', 'kumarbalaji@live.com', 1012920192, '', 'senior'),
(23, 'aaron', 'aaron123456', 'Aaron Kajenderan', 'Aaro_nriboy@gmail.com', 123512733, '', 'service-provider'),
(24, 'kajen', 'kajen12345', 'Aaron Kajenderan', 'Aaronriboy@gmail.com', 166248411, '', 'senior'),
(25, 'alex', 'alex123456', 'Aaron Kajenderan', 'Aaronriboy@gmail.com', 166248411, '', 'service-provider');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`serviceID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `serviceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
