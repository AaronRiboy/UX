-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2019 at 05:09 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpelder`
--

-- --------------------------------------------------------

--
-- Table structure for table `providedservices`
--

CREATE TABLE `providedservices` (
  `username` varchar(100) NOT NULL,
  `serviceCode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `providedservices`
--

INSERT INTO `providedservices` (`username`, `serviceCode`) VALUES
('tony', 'SV004'),
('tony', 'SV005'),
('tony', 'SV006'),
('tony', 'SV007'),
('mrqayoom', 'SV001'),
('mrqayoom', 'SV002'),
('mrqayoom', 'SV003'),
('mrqayoom', 'SV005'),
('mrqayoom', 'SV007'),
('ym22', 'SV001'),
('ym22', 'SV002'),
('ym22', 'SV004'),
('ym22', 'SV005'),
('ym22', 'SV006'),
('ym22', 'SV007');

-- --------------------------------------------------------

--
-- Stand-in structure for view `requestoffer`
-- (See below for the actual view)
--
CREATE TABLE `requestoffer` (
`serviceCode` varchar(100)
,`requestID` int(11)
,`requiredDate` date
,`notes` varchar(200)
,`SeniorName` varchar(100)
,`Offer` varchar(100)
,`RequestStatus` varchar(7)
);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `reviewedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `requestID` int(11) NOT NULL,
  `reviewTo` varchar(100) NOT NULL,
  `reviewFrom` varchar(100) NOT NULL,
  `rating` int(5) NOT NULL,
  `comment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `reviewedDate`, `requestID`, `reviewTo`, `reviewFrom`, `rating`, `comment`) VALUES
(27, '2018-11-22 12:15:57', 10022, 'john', 'ym22', 5, 'good'),
(28, '2018-11-22 12:20:21', 10025, 'ribena', 'mrqayoom', 5, 'great'),
(29, '2018-11-22 12:35:06', 10028, 'kim', 'ym22', 5, 'nice'),
(30, '2018-11-22 12:54:39', 10022, 'ym22', 'john', 5, 'really nice\r\n'),
(31, '2018-11-22 13:20:21', 10031, 'ym22', 'yimin', 5, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `senior`
--

CREATE TABLE `senior` (
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senior`
--

INSERT INTO `senior` (`fullname`, `username`, `password`, `phoneNumber`, `address`) VALUES
('john lim', 'john', '123', '0123456789', 'bukit damansara'),
('james tan', 'james', '123', '0123456789', 'damansara heights'),
('kim', 'kim', '123', '0123456789', 'damansara heights'),
('lim ming', 'lim', '123', '0123456789', '15 jalan semantan'),
('christ', 'christ', '123', '0123456789', 'damansara heights'),
('ribena lim', 'ribena', '123', '0123456789', 'jalan semantan'),
('yoonyimin', 'yimin', '123', '0123456789', '15');

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE `serviceprovider` (
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serviceprovider`
--

INSERT INTO `serviceprovider` (`fullname`, `username`, `password`, `phoneNumber`) VALUES
('aq', 'mrqayoom', '1234', '9320032902'),
('tony wong', 'tony', '123', '0123456789'),
('yimin', 'ym22', '123', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE `servicerequest` (
  `serviceCode` varchar(100) NOT NULL,
  `requestID` int(11) NOT NULL,
  `requiredDate` date NOT NULL,
  `notes` varchar(200) DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `requestSenior` varchar(100) NOT NULL,
  `serviceProvider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`serviceCode`, `requestID`, `requiredDate`, `notes`, `status`, `requestSenior`, `serviceProvider`) VALUES
('SV002', 10021, '2018-11-23', 'Vegetarian', 'pending', 'john', ''),
('SV006', 10022, '2018-11-25', '', 'completed', 'john', 'ym22'),
('SV004', 10023, '2018-11-28', 'body check up', 'pending', 'kim', ''),
('SV003', 10024, '2018-11-23', 'nice', 'pending', 'ribena', ''),
('SV001', 10025, '2018-11-23', 'good', 'accepted', 'ribena', 'mrqayoom'),
('SV007', 10026, '2018-11-23', '', 'pending', 'ribena', ''),
('SV001', 10027, '2018-11-23', '', 'accepted', 'ribena', 'ym22'),
('SV006', 10028, '2018-11-23', '', 'accepted', 'kim', 'ym22'),
('SV004', 10029, '2018-11-23', '', 'pending', 'kim', ''),
('SV001', 10030, '2018-11-23', '', 'pending', 'ribena', ''),
('SV002', 10031, '2018-11-23', 'ds', 'accepted', 'yimin', 'ym22');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceCode` varchar(100) NOT NULL,
  `serviceDescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceCode`, `serviceDescription`) VALUES
('SV002', 'Meals'),
('SV003', 'Personal Care'),
('SV004', 'Healthcare'),
('SV005', 'Transportation'),
('SV006', 'Home Cleaning'),
('SV007', 'Companion'),
('SV001', 'Shopping');

-- --------------------------------------------------------

--
-- Stand-in structure for view `userlogin`
-- (See below for the actual view)
--
CREATE TABLE `userlogin` (
`username` varchar(100)
,`password` varchar(100)
,`type` varchar(15)
);

-- --------------------------------------------------------

--
-- Structure for view `requestoffer`
--
DROP TABLE IF EXISTS `requestoffer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `requestoffer`  AS  select `sr`.`serviceCode` AS `serviceCode`,`sr`.`requestID` AS `requestID`,`sr`.`requiredDate` AS `requiredDate`,`sr`.`notes` AS `notes`,`sn`.`fullname` AS `SeniorName`,`ps`.`username` AS `Offer`,'pending' AS `RequestStatus` from ((`servicerequest` `sr` join `senior` `sn` on((`sn`.`username` like `sr`.`requestSenior`))) join `providedservices` `ps` on((`ps`.`serviceCode` like `sr`.`serviceCode`))) where (`sr`.`status` like 'pending') ;

-- --------------------------------------------------------

--
-- Structure for view `userlogin`
--
DROP TABLE IF EXISTS `userlogin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `userlogin`  AS  select `serviceprovider`.`username` AS `username`,`serviceprovider`.`password` AS `password`,'serviceprovider' AS `type` from `serviceprovider` union select `senior`.`username` AS `username`,`senior`.`password` AS `password`,'senior' AS `type` from `senior` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD PRIMARY KEY (`requestID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `servicerequest`
--
ALTER TABLE `servicerequest`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10032;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
