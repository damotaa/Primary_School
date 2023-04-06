-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2023 at 05:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `School`
--

-- --------------------------------------------------------

--
-- Table structure for table `Classes`
--

CREATE TABLE `Classes` (
  `Class_id` int(255) NOT NULL,
  `ClassName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Classes`
--

INSERT INTO `Classes` (`Class_id`, `ClassName`) VALUES
(3, 'Reception Year'),
(4, 'Year One'),
(5, 'Year Two'),
(6, 'Year Three'),
(7, 'Year Four'),
(8, 'Year Five'),
(9, 'Year Six');

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `Student_id` int(255) NOT NULL,
  `Parents_id` int(255) NOT NULL,
  `Teacher_id` int(255) DEFAULT NULL,
  `Class_id` int(255) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_Number` varchar(255) NOT NULL,
  `sName` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`Student_id`, `Parents_id`, `Teacher_id`, `Class_id`, `Email`, `Phone_Number`, `sName`, `Last_name`, `Address`) VALUES
(33789, 1113, NULL, 4, 'leon.s.kennedy@school.co.uk', '07893932116', 'Leon', 'Kennedy', '22 Mark Avenue, London\",E4 7NR'),
(33790, 1112, NULL, 5, 'chris.s@student.ac.uk', '447893932118', 'Chris', 'Scoot', '4 Gilroy Street, London,SE10 0DL');

-- --------------------------------------------------------

--
-- Table structure for table `Teachers`
--

CREATE TABLE `Teachers` (
  `Teacher_id` int(255) NOT NULL,
  `Class_id` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_Number` varchar(255) NOT NULL,
  `sName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Anual_Salary` varchar(255) NOT NULL,
  `Background_Check` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Teachers`
--

INSERT INTO `Teachers` (`Teacher_id`, `Class_id`, `Email`, `Phone_Number`, `sName`, `Address`, `Anual_Salary`, `Background_Check`) VALUES
(12, 3, 'ada12@school.co.uk', '07893920251', 'Ada', '2 Haughton Grange, Haughton\",ST18 9FE', '27.000£', 'Yes'),
(13, 4, 'ashley.teacher@school.ac.uk', '07700150907', 'Asheley Graham', '52 Wearside Road, London\",SE13 7UL', '28.000£', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `Teacher_Assistant`
--

CREATE TABLE `Teacher_Assistant` (
  `Assistant_id` int(255) NOT NULL,
  `Class_id` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_Number` varchar(255) NOT NULL,
  `sName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Anual_Salary` varchar(255) NOT NULL,
  `Background_Check` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Classes`
--
ALTER TABLE `Classes`
  ADD PRIMARY KEY (`Class_id`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`Student_id`),
  ADD KEY `Class_id` (`Class_id`),
  ADD KEY `Parents_id` (`Parents_id`),
  ADD KEY `Teacher_id` (`Teacher_id`);

--
-- Indexes for table `Teachers`
--
ALTER TABLE `Teachers`
  ADD PRIMARY KEY (`Teacher_id`),
  ADD KEY `Class_id` (`Class_id`);

--
-- Indexes for table `Teacher_Assistant`
--
ALTER TABLE `Teacher_Assistant`
  ADD PRIMARY KEY (`Assistant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Classes`
--
ALTER TABLE `Classes`
  MODIFY `Class_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Student`
--
ALTER TABLE `Student`
  MODIFY `Student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33793;

--
-- AUTO_INCREMENT for table `Teachers`
--
ALTER TABLE `Teachers`
  MODIFY `Teacher_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Teacher_Assistant`
--
ALTER TABLE `Teacher_Assistant`
  MODIFY `Assistant_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Student`
--
ALTER TABLE `Student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Class_id`) REFERENCES `Classes` (`Class_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`Parents_id`) REFERENCES `Parents_Guardians` (`Parents_id`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`Teacher_id`) REFERENCES `Teachers` (`Teacher_id`);

--
-- Constraints for table `Teachers`
--
ALTER TABLE `Teachers`
  ADD CONSTRAINT `teachers_ibfk_2` FOREIGN KEY (`Class_id`) REFERENCES `Classes` (`Class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
