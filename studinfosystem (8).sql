-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 07:59 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studinfosystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
create database studinfosystem;
use studinfosystem;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `Position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `user`, `password`, `confirmpassword`, `Position`) VALUES
(1, 'king', 'cadayona', 'kingcadayona@yahoo.com', 'a5bbd1049863ceb59ada6d22f8019764', 'a5bbd1049863ceb59ada6d22f8019764', 'ADMIN'),
(4, 'Jean lucrice', 'Vallejos', 'Lucrice@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 'CLIENT'),
(5, 'jude', 'suarez', 'jude@yahoo.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'ADMIN'),
(6, 'jude', 'reyes', 'jude@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'CLIENT'),
(7, 'jub', 'kill', 'jubee@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 'CLIENT'),
(8, 'test', 'test', 'test@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 'CLIENT');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `COURSE_ID` int(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `DESCRIPTION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`COURSE_ID`, `NAME`, `DESCRIPTION`) VALUES
(23, 'BSIT', 'Bachelor of Science in Information Technology'),
(24, 'BSBA', 'Bachelor Of Science in Business Administration '),
(25, 'BSED', 'Bachelor of Secondary Education'),
(26, 'BSCRIM', 'Bachelor of Science in Criminology');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `ENROLLMENT_ID` int(255) NOT NULL,
  `STUDENT` varchar(255) NOT NULL,
  `COURSE_ID` int(255) NOT NULL,
  `level_id` int(255) NOT NULL,
  `Status_id` int(255) NOT NULL,
  `DATE_ENROLLED` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`ENROLLMENT_ID`, `STUDENT`, `COURSE_ID`, `level_id`, `Status_id`, `DATE_ENROLLED`) VALUES
(90, 'Jude De la cruz', 23, 2, 1, '2019-03-27'),
(91, 'Nielmar Mangana', 24, 3, 3, '2019-03-29'),
(92, 'Patrick Tangente', 25, 1, 2, '2019-03-08'),
(93, 'Saxon Ong', 26, 1, 3, '2019-03-01'),
(96, 'angel jude', 23, 2, 1, '2019-03-14'),
(97, 'Arque', 23, 1, 2, '2019-03-26'),
(98, 'Arque', 23, 1, 2, '2019-03-27'),
(99, 'Mon', 23, 2, 1, '2019-03-27'),
(100, 'Mon', 23, 2, 1, '2019-03-27'),
(101, 'Jude', 23, 2, 1, '2019-03-27'),
(102, 'Saxon', 24, 1, 3, '2019-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `year_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `year_level`) VALUES
(1, '1st year'),
(2, '2nd year'),
(3, '3rd year'),
(4, '4th year');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `DAY` varchar(255) NOT NULL,
  `START_TIME` varchar(255) NOT NULL,
  `END_TIME` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `DAY`, `START_TIME`, `END_TIME`) VALUES
(45466, '2019-03-07', '11:01', '4:59'),
(45467, '2019-03-12', '06:59', '12:00'),
(45468, '2019-03-01', '07:10', '3:59'),
(45469, '2019-06-14', '04:52', '3:00'),
(45470, '2019-03-07', '12:30', '5:00'),
(45471, '2019-03-13', '12:00', '4:00'),
(45472, '2019-03-08', '02:00', '8:00');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `SECTION_ID` varchar(10) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `COURSE_ID` varchar(50) NOT NULL,
  `SCHEDULE_ID` int(11) NOT NULL,
  `INSTRUCTION_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`SECTION_ID`, `NAME`, `COURSE_ID`, `SCHEDULE_ID`, `INSTRUCTION_ID`) VALUES
('1', 'Jude De la cruz', 'BSBA 2-1', 10, 20),
('2', 'Prince Lee', 'BSIT 2-2', 11, 21),
('3', 'Mon Christian Mendoza', 'BSCRIM 1-2', 12, 22);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Status_id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Status_id`, `status_name`) VALUES
(1, 'Old'),
(2, 'New'),
(3, 'Transferee'),
(4, 'Returnee');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `STUDENT_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `COURSE_ID` int(50) NOT NULL,
  `level_id` int(255) NOT NULL,
  `Status_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`STUDENT_ID`, `FIRST_NAME`, `Last_Name`, `EMAIL`, `COURSE_ID`, `level_id`, `Status_id`) VALUES
(1, 'Mon', 'Mendoza', 'Mon@yahoo.com', 25, 2, 3),
(2, 'Nielmar', 'Mangana', 'Nielmar@yahoo.com', 25, 2, 1),
(3, 'Jude', 'Suarez', 'Suarez@yahoo.com', 24, 3, 1),
(4, 'Prince', 'Lee', 'Prince@yahoo.com', 23, 2, 4),
(5, 'Jean Lucrice', 'vallejos', 'Lucrice@yahoo.com', 23, 4, 1),
(6, 'angel jude', 'suarez', 'jude@yahoo.com', 23, 2, 1),
(7, 'Arque', 'Calvez', 'Arque@yahoo.com', 23, 1, 2),
(8, 'Saxon', 'Ong', 'saxon@hshshads.sdfsdf', 26, 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`COURSE_ID`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`ENROLLMENT_ID`),
  ADD KEY `COURSE_ID` (`COURSE_ID`),
  ADD KEY `Status_id` (`Status_id`),
  ADD KEY `enrollment_ibfk_2` (`level_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`SECTION_ID`) USING BTREE;

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Status_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`STUDENT_ID`),
  ADD KEY `COURSE_ID` (`COURSE_ID`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `Status_id` (`Status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `COURSE_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `ENROLLMENT_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45473;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `STUDENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`COURSE_ID`) REFERENCES `course` (`COURSE_ID`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`),
  ADD CONSTRAINT `enrollment_ibfk_3` FOREIGN KEY (`Status_id`) REFERENCES `status` (`Status_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`COURSE_ID`) REFERENCES `course` (`COURSE_ID`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`Status_id`) REFERENCES `status` (`Status_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
