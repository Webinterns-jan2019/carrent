-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 02:42 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cardata`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`name`, `password`, `id`) VALUES
('nam', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblbook`
--

CREATE TABLE `tblbook` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `vehicleid` int(11) NOT NULL,
  `fromdate` varchar(20) NOT NULL,
  `todate` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `postingdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbook`
--

INSERT INTO `tblbook` (`id`, `username`, `vehicleid`, `fromdate`, `todate`, `message`, `postingdate`) VALUES
(15, 'asha', 1, '07-03-19', '11-03-19', 'hi', '2019-07-10 12:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrand`
--

CREATE TABLE `tblbrand` (
  `id` int(11) NOT NULL,
  `brandname` varchar(200) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbrand`
--

INSERT INTO `tblbrand` (`id`, `brandname`, `createdate`, `updatedate`) VALUES
(1, 'Maruti', '2019-04-05 09:54:38', '2019-04-05 09:58:24'),
(2, 'Toyota', '2019-04-05 09:54:38', '0000-00-00 00:00:00'),
(3, 'Ford', '2019-04-05 09:54:53', '0000-00-00 00:00:00'),
(4, 'Tata', '2019-04-05 09:54:53', '0000-00-00 00:00:00'),
(5, 'Hyundai', '2019-04-05 09:55:01', '2019-04-05 09:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `message` longtext NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`id`, `email`, `contactno`, `message`, `postdate`, `status`, `name`) VALUES
(1, 'ash@gmail.com', '9482915097', 'we need some expert advice', '2019-02-19 15:12:16', 0, 'asha'),
(2, 'nam@gmail.com', '9972889057', 'rtrtyyuyuy', '2019-02-20 08:04:58', 0, 'asha'),
(3, 'pavan@gmail.com', '9972889057', 'we need some expert advice', '2019-07-09 16:01:41', 0, 'pavan');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `name` varchar(200) NOT NULL,
  `userid` int(11) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `pin` int(10) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`name`, `userid`, `password`, `email`, `contactno`, `address`, `state`, `pin`, `dob`, `regdate`, `updatedate`) VALUES
('asha', 2, '2', 'asha@gmail.com', '9972889073', 'kunjathbail', 'yera', 505, '1998-04-26', '2019-02-20 11:12:42', '2019-07-10 10:35:17'),
('savina', 7, 'savibaby', 'sonu@gmail.com', '9972889057', '', '', 575020, '0000-00-00', '2019-02-24 08:50:11', '2019-03-01 16:13:25'),
('suraj', 8, 'shetty809', 'surajshetty809@gmail.com', '9731851318', '', '', 575020, '0000-00-00', '2019-02-24 08:39:34', '2019-03-01 16:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicle`
--

CREATE TABLE `tblvehicle` (
  `vehicleid` int(11) NOT NULL,
  `vehicletitle` varchar(150) NOT NULL,
  `vehiclebrand` varchar(200) NOT NULL,
  `priceperday` int(11) NOT NULL,
  `fueltype` varchar(100) NOT NULL,
  `modelyear` int(11) NOT NULL,
  `seat` int(11) NOT NULL,
  `vimage` varchar(200) NOT NULL,
  `ac` int(11) NOT NULL,
  `cdplayer` int(11) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvehicle`
--

INSERT INTO `tblvehicle` (`vehicleid`, `vehicletitle`, `vehiclebrand`, `priceperday`, `fueltype`, `modelyear`, `seat`, `vimage`, `ac`, `cdplayer`, `regdate`, `updatedate`, `status`) VALUES
(1, 'Suzuki Baleno', 'maruti', 2100, 'petrol', 2010, 5, 'marutisuzukibaleno.jpg', 0, 1, '2019-04-05 09:50:46', '2019-07-10 12:28:21', 1),
(2, 'Elite i20', 'hyundai', 3400, 'petrol', 2002, 4, 'hyundaielitei20.jpg', 0, 0, '2019-04-05 09:51:51', '2019-07-10 12:14:51', 0),
(3, 'Nexon', 'tata', 4000, 'CNG', 2012, 7, 'tatanexon.jpg', 1, 1, '2019-04-05 09:51:51', '2019-07-10 11:57:01', 0),
(4, 'Prius', 'toyota', 300, 'CNG', 2016, 7, 'toyotaprius.jpg', 1, 1, '2019-04-05 09:53:27', '2019-07-10 07:45:00', 0),
(5, 'EcoSport', 'ford', 2600, 'Diesel', 2003, 6, 'fordecosport.jpg', 0, 1, '2019-04-05 09:53:27', '2019-07-10 07:45:22', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbook`
--
ALTER TABLE `tblbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrand`
--
ALTER TABLE `tblbrand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tblvehicle`
--
ALTER TABLE `tblvehicle`
  ADD PRIMARY KEY (`vehicleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbook`
--
ALTER TABLE `tblbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblbrand`
--
ALTER TABLE `tblbrand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblvehicle`
--
ALTER TABLE `tblvehicle`
  MODIFY `vehicleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
