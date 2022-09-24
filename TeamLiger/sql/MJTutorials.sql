-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2022 at 08:50 AM
-- Server version: 10.6.9-MariaDB-1
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MJTutorials`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact-query`
--

CREATE TABLE `contact-query` (
  `c_id` int(3) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact-query`
--

INSERT INTO `contact-query` (`c_id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, 'vinu', 'vinu@gmail.com', 'JEE', 'Thanks..');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(5) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Topic` varchar(50) NOT NULL,
  `trainer` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `t_id` int(5) NOT NULL,
  `Enrollments` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `Title`, `Topic`, `trainer`, `price`, `Description`, `t_id`, `Enrollments`) VALUES
(1, 'NETT', 'Online course', 'lara', 12000, 'Neet ug', 1, 38),
(2, 'Online NEET Course', 'NEET', 'Steve', 15000, 'Online NEET long Term Courses', 2, 50);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(5) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Phone` int(12) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Branch` varchar(10) DEFAULT NULL,
  `Adress` varchar(200) DEFAULT NULL,
  `s_perk` varchar(10) DEFAULT NULL,
  `s_Avatar` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `Name`, `Email`, `Phone`, `Password`, `Branch`, `Adress`, `s_perk`, `s_Avatar`) VALUES
(1, 'pavan', 'pav@gmail.com', 333333333, 'pav@123', 'bangalore', 'bangalore 123', 'premium', NULL),
(2805, 'Siddu', 'siddu@gmail.com', NULL, '12345', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `s_id` int(5) NOT NULL,
  `Physics` int(10) NOT NULL,
  `Chemistry` int(10) NOT NULL,
  `Biology` int(10) NOT NULL,
  `Maths` int(10) NOT NULL,
  `Overall` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`s_id`, `Physics`, `Chemistry`, `Biology`, `Maths`, `Overall`) VALUES
(1, 30, 50, 90, 70, 60);

-- --------------------------------------------------------

--
-- Table structure for table `student_performance`
--

CREATE TABLE `student_performance` (
  `s_id` int(5) NOT NULL,
  `Physics` int(10) NOT NULL,
  `Chemistry` int(10) NOT NULL,
  `Biology` int(10) NOT NULL,
  `Maths` int(10) NOT NULL,
  `Overall` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_performance`
--

INSERT INTO `student_performance` (`s_id`, `Physics`, `Chemistry`, `Biology`, `Maths`, `Overall`) VALUES
(1, 30, 50, 90, 70, 60);

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `t_id` int(3) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Achievement` varchar(50) NOT NULL,
  `Review` int(1) NOT NULL,
  `avatar` int(2) DEFAULT NULL,
  `Story` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`t_id`, `Name`, `Achievement`, `Review`, `avatar`, `Story`) VALUES
(1, 'Jim', 'advance topper', 3, 1, 'Goodddd'),
(2, 'John', 'KCET Topper', 4, 2, 'I topped it, Thanks MJT'),
(3, 'Steve', 'NEET Topper', 4, 3, 'Made my dream come true'),
(5, 'Tom', 'KVPY Rank 1', 4, 8, 'Very Good');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `avatar` int(2) DEFAULT NULL,
  `Subject` varchar(30) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `Name`, `avatar`, `Subject`, `Description`) VALUES
(1, 'lara', NULL, 'JEE', 'Blahhhhh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact-query`
--
ALTER TABLE `contact-query`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `student_performance`
--
ALTER TABLE `student_performance`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
