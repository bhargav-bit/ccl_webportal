-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 12:48 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted`
--

CREATE TABLE `accepted` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Father's Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `dob` date NOT NULL,
  `Gender` varchar(255) COLLATE utf8_bin NOT NULL,
  `Institution Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Qualification` varchar(255) COLLATE utf8_bin NOT NULL,
  `Branch` varchar(255) COLLATE utf8_bin NOT NULL,
  `Roll No.` varchar(255) COLLATE utf8_bin NOT NULL,
  `Address` text COLLATE utf8_bin NOT NULL,
  `Email` varchar(255) COLLATE utf8_bin NOT NULL,
  `Mobile No.` varchar(10) COLLATE utf8_bin NOT NULL,
  `Time Period` varchar(255) COLLATE utf8_bin NOT NULL,
  `Fromdate` date NOT NULL,
  `Todate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `accepted`
--

INSERT INTO `accepted` (`id`, `Name`, `Father's Name`, `dob`, `Gender`, `Institution Name`, `Qualification`, `Branch`, `Roll No.`, `Address`, `Email`, `Mobile No.`, `Time Period`, `Fromdate`, `Todate`) VALUES
(56, 'test name', 'test fathers name', '0000-00-00', '', 'testcollege', '', '', 'testroll123', 'jhvfdhsbv', 'test@email.com', '9876543210', '28 days', '0000-00-00', '0000-00-00'),
(57, 'test name', 'test fathers name', '2002-01-02', 'male', 'testcollege', 'be', 'cs', 'a', 'dfhfgc', 'test@email.com', '9876543210', '28 days', '2020-08-02', '2020-08-30'),
(62, 'd', 'asf', '2020-08-03', 'male', 'rsdg', 'rg', '2wqe', '4rasev', 'rdhgjn', 'test@email.com', '9876543210', '28 days', '2020-08-24', '2020-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Father's Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `dob` date NOT NULL,
  `Gender` varchar(255) COLLATE utf8_bin NOT NULL,
  `Institution Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Qualification` varchar(255) COLLATE utf8_bin NOT NULL,
  `Branch` varchar(255) COLLATE utf8_bin NOT NULL,
  `Roll No.` varchar(255) COLLATE utf8_bin NOT NULL,
  `Address` text COLLATE utf8_bin NOT NULL,
  `Email` varchar(255) COLLATE utf8_bin NOT NULL,
  `Mobile No.` varchar(10) COLLATE utf8_bin NOT NULL,
  `Time Period` varchar(255) COLLATE utf8_bin NOT NULL,
  `Fromdate` date NOT NULL,
  `Todate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `Name`, `Father's Name`, `dob`, `Gender`, `Institution Name`, `Qualification`, `Branch`, `Roll No.`, `Address`, `Email`, `Mobile No.`, `Time Period`, `Fromdate`, `Todate`) VALUES
(63, 'test name', 'test fathers name', '2020-08-09', 'male', 'testcollege', 'drh', 'cs', 'testroll1234', 'fdtngjf', 'some@domain.com', '9898989898', '28 days', '2020-08-16', '2020-09-12'),
(64, 'bhry', 'test fathers name', '2020-08-28', 'male', 'drh', 'dth', 'cs', 'testroll1234', 'dhnfj', 'test@email.com', '9876543210', '28 days', '2020-08-23', '2020-08-31'),
(65, 'rg', 'sfvg', '2020-08-23', 'male', 'fgrg', 'rag', 'asrg', 'srg', 'rg', 'test@email.com', '5656565656', '28 days', '2020-08-16', '2020-09-01'),
(66, 'test name', 'test fathers name', '2020-08-02', 'male', 'checking this', 'btech', 'cse', '15148', 'ranchi', 'test@email.com', '9876543210', '90 days', '2020-08-09', '2020-08-24'),
(67, 'test name', 'test fathers name', '2020-08-26', 'male', 'dtrhdh', 'be', 'cs', '15148', 'asd', 'some@domain.com', '9876543210', '28 days', '2020-08-26', '2020-09-03'),
(68, 'iygiu', 'iuhku', '2020-08-09', 'male', 'testcollege', 'be', '2wqe', 'q', 'jybkn', 'test@email.com', '9898989898', '28 days', '2020-08-09', '2020-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `rejected`
--

CREATE TABLE `rejected` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Father's Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `dob` date NOT NULL,
  `Gender` varchar(255) COLLATE utf8_bin NOT NULL,
  `Institution Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Qualification` varchar(255) COLLATE utf8_bin NOT NULL,
  `Branch` varchar(255) COLLATE utf8_bin NOT NULL,
  `Roll No.` varchar(255) COLLATE utf8_bin NOT NULL,
  `Address` text COLLATE utf8_bin NOT NULL,
  `Email` varchar(255) COLLATE utf8_bin NOT NULL,
  `Mobile No.` varchar(10) COLLATE utf8_bin NOT NULL,
  `Time Period` varchar(255) COLLATE utf8_bin NOT NULL,
  `Fromdate` date NOT NULL,
  `Todate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `rejected`
--

INSERT INTO `rejected` (`id`, `Name`, `Father's Name`, `dob`, `Gender`, `Institution Name`, `Qualification`, `Branch`, `Roll No.`, `Address`, `Email`, `Mobile No.`, `Time Period`, `Fromdate`, `Todate`) VALUES
(58, 'test name', 'test fathers name', '2006-12-30', 'male', 'testcollege', 'be', 'cs', 'testroll123', 'fhbvm', 'test@email.com', '9876543210', '28 days', '2020-08-12', '2020-01-31'),
(59, 'bjbj', 'dth', '2020-08-11', 'male', 'tdh', 'th', 'tdh', 'tfhr5', 'dthdrth', 'dth@gdg.fh', '5656565656', '28 days', '2020-07-28', '2020-08-25'),
(60, 'fshdh', 'dhdrhg', '2020-08-10', 'male', 'dtrhdh', 'dth', 'tdh', 'tdhs235', 'dthjtj', 'some@domain.com', '9876543210', '28 days', '2020-08-16', '2020-09-01'),
(61, 'rsdgh', 'rdh', '2020-08-03', 'male', 'drh', 'drh', 'drh', 'drhw35', 'rhejhfrth', 'some@domain.com', '9876543210', '28 days', '2020-08-24', '2020-09-03'),
(69, 'lkmlkm', 'oip', '2020-08-25', 'male', 'rsdg', 'dth', 'asrg', 'testroll123', 'ybkjnj', 'test@email.com', '9876543210', '28 days', '2020-08-25', '2020-09-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted`
--
ALTER TABLE `accepted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rejected`
--
ALTER TABLE `rejected`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accepted`
--
ALTER TABLE `accepted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `rejected`
--
ALTER TABLE `rejected`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
