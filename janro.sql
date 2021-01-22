-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 09:48 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `janro`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_tbl`
--

CREATE TABLE `account_tbl` (
  `cID` int(11) NOT NULL,
  `cUsername` varchar(255) NOT NULL,
  `cPassword` varchar(255) NOT NULL,
  `cLevel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_tbl`
--

INSERT INTO `account_tbl` (`cID`, `cUsername`, `cPassword`, `cLevel`) VALUES
(2, 'admin', '123', '1'),
(3, 'tiffy123', '123', '0'),
(4, 'janro711', '123', '0');

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `cID` int(11) NOT NULL,
  `cCategory` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`cID`, `cCategory`, `description`, `tags`) VALUES
(1, 'MRW', 'The Document Management System secures and archives all of the projects of students.', 'projects'),
(2, 'SAD', 'The Document Management System secures and archives all of the projects of students.', 'projects'),
(3, 'PORTFOLIO', 'The Document Management System secures and archives all of the projects of students.', 'projects'),
(7, 'SAITE', 'The Document Management System secures and archives all of the projects of students.', 'certificate'),
(8, 'RAITE', 'The Document Management System secures and archives all of the projects of students.', 'certificate'),
(9, 'PSITE', 'The Document Management System secures and archives all of the projects of students.', 'certificate');

-- --------------------------------------------------------

--
-- Table structure for table `cert_tbl`
--

CREATE TABLE `cert_tbl` (
  `cID` int(11) NOT NULL,
  `cCertname` varchar(255) NOT NULL,
  `cCategory` varchar(255) NOT NULL,
  `cPhoto` varchar(255) NOT NULL,
  `cDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cert_tbl`
--

INSERT INTO `cert_tbl` (`cID`, `cCertname`, `cCategory`, `cPhoto`, `cDate`) VALUES
(6, 'Department of Tourism Video Editing', 'SAITE', '../uploads/Scan_20191115 (2).png', '2019-09-03'),
(7, 'Hackathon Champion', 'PSITE', '../uploads/Scan_20191115 (9).png', '2015-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `item_tbl`
--

CREATE TABLE `item_tbl` (
  `cID` int(11) NOT NULL,
  `cItem_name` varchar(255) NOT NULL,
  `cDescription` varchar(255) NOT NULL,
  `cAuthor` varchar(255) NOT NULL,
  `cAvailability` varchar(255) NOT NULL,
  `cCategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_tbl`
--

INSERT INTO `item_tbl` (`cID`, `cItem_name`, `cDescription`, `cAuthor`, `cAvailability`, `cCategory`) VALUES
(10, 'File Repository Management System', 'Managing Files', 'Janine Tomas', '1', 'SAD'),
(11, 'STRACK', 'Strand and Track Identifier Mobile Application System', 'Ivan Ebuenga', '1', 'SAD');

-- --------------------------------------------------------

--
-- Table structure for table `logs_tbl`
--

CREATE TABLE `logs_tbl` (
  `cID` int(11) NOT NULL,
  `cFname` varchar(255) NOT NULL,
  `cLname` varchar(255) NOT NULL,
  `cDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs_tbl`
--

INSERT INTO `logs_tbl` (`cID`, `cFname`, `cLname`, `cDate`) VALUES
(1, 'Tiffy', 'Aquino', '2019-11-25'),
(2, 'Tiffy', 'Aquino', '2019-11-25'),
(3, 'Tiffy', 'Aquino', '2019-11-25'),
(4, 'Janro', 'Lazaro', '2019-11-25'),
(5, 'Janro', 'Lazaro', '2019-11-25'),
(6, 'Tiffy', 'Aquino', '2019-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `part_tbl`
--

CREATE TABLE `part_tbl` (
  `cID` int(11) NOT NULL,
  `Project_id` varchar(255) NOT NULL,
  `cID_name` varchar(255) NOT NULL,
  `cPart` varchar(255) NOT NULL,
  `cContent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `part_tbl`
--

INSERT INTO `part_tbl` (`cID`, `Project_id`, `cID_name`, `cPart`, `cContent`) VALUES
(31, '10', 'File Repository Management System', 'Chapter 1', '../uploads/CHAPTER_1.pdf'),
(32, '10', 'File Repository Management System', 'Chapter 2', '../uploads/CHAPTER_2.pdf'),
(33, '10', 'File Repository Management System', 'Chapter 3', '../uploads/CHAPTER_3.pdf'),
(34, '10', 'File Repository Management System', 'Chapter 4', '../uploads/CHAPTER_4.pdf'),
(35, '10', 'File Repository Management System', 'Chapter 5', '../uploads/CHAPTER_5.pdf'),
(36, '11', 'STRACK', 'Chapter 1', '../uploads/BernalEbuangaEduvane(Chapter-4).pdf'),
(37, '11', 'STRACK', 'Chapter 2', '../uploads/BernalEbuengaEduvane(Chapter-1).pdf'),
(38, '11', 'STRACK', 'Chapter 3', '../uploads/BernalEbuengaEduvane(Chapter-2).pdf'),
(39, '11', 'STRACK', 'Chapter 4', '../uploads/BernalEbuengaEduvane(Chapter-3).pdf'),
(40, '11', 'STRACK', 'Chapter 5', '../uploads/BernalEbuengaEduvane(Chapter-5).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `transac_tbl`
--

CREATE TABLE `transac_tbl` (
  `cID` int(11) NOT NULL,
  `cStudent_name` varchar(255) NOT NULL,
  `cItem_name` varchar(255) NOT NULL,
  `cDat` date NOT NULL,
  `cAvailability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transac_tbl`
--

INSERT INTO `transac_tbl` (`cID`, `cStudent_name`, `cItem_name`, `cDat`, `cAvailability`) VALUES
(6, 'Tiffy Aquino', 'Sad Compiler', '2019-11-25', '1'),
(7, 'Tiffy Aquino', 'Sad Compiler', '2019-11-25', '1'),
(8, 'Janro Lazaro', 'Sad Compiler', '2019-11-25', '1'),
(9, 'Tiffy Aquino', 'Smile Factory', '2019-11-25', '1'),
(10, 'Tiffy Aquino', 'Pic-A', '2019-11-25', '1'),
(11, 'Janro Lazaro', 'Gulp', '2019-11-25', '1'),
(12, 'Janro Lazaro', 'keme lang', '2019-11-25', '1'),
(13, 'Janro Lazaro', 'File Repository Management System', '2019-11-25', '1'),
(14, 'Janro Lazaro', 'STRACK', '2019-11-25', '1'),
(15, 'Tiffy Aquino', 'File Repository Management System', '2019-11-25', '1'),
(16, 'Tiffy Aquino', 'STRACK', '2019-11-25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `cID` int(11) NOT NULL,
  `cFname` varchar(255) NOT NULL,
  `cLname` varchar(255) NOT NULL,
  `cCourse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`cID`, `cFname`, `cLname`, `cCourse`) VALUES
(2, 'Gemma', 'Tapado', 'Prof'),
(3, 'Tiffy', 'Aquino', 'BSIT'),
(4, 'Janro', 'Lazaro', 'BSIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_tbl`
--
ALTER TABLE `account_tbl`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `cert_tbl`
--
ALTER TABLE `cert_tbl`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `item_tbl`
--
ALTER TABLE `item_tbl`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `logs_tbl`
--
ALTER TABLE `logs_tbl`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `part_tbl`
--
ALTER TABLE `part_tbl`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `transac_tbl`
--
ALTER TABLE `transac_tbl`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`cID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_tbl`
--
ALTER TABLE `account_tbl`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cert_tbl`
--
ALTER TABLE `cert_tbl`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `item_tbl`
--
ALTER TABLE `item_tbl`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `logs_tbl`
--
ALTER TABLE `logs_tbl`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `part_tbl`
--
ALTER TABLE `part_tbl`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `transac_tbl`
--
ALTER TABLE `transac_tbl`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
