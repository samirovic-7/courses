-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 03:17 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: ` courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(25) NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `Email`, `Password`, `Role`) VALUES
(1, 'metoooo', 'gad@mail.com', '12345', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mail`, `phone`, `subject`, `message`) VALUES
(65, 'mohamed samir', 'ds@gmail.com', '01159839072', 'مشكلة تسجيل', 'sad'),
(66, 'mohamed samir', 'mohamedrovich@gmail.com', '01159839072', 'dwq13', 'wqwe24');

-- --------------------------------------------------------

--
-- Table structure for table `courses_card`
--

CREATE TABLE `courses_card` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `about` varchar(100) NOT NULL,
  `Poster` text NOT NULL,
  `state` varchar(50) NOT NULL,
  `skills_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses_card`
--

INSERT INTO `courses_card` (`id`, `title`, `about`, `Poster`, `state`, `skills_id`) VALUES
(58, 'محمد', 'وائل', '', 'Free', 36),
(59, 'mohamed samir', '01159839072', '', 'Not-Free', 36),
(62, 'dgfs', 'hjfhgvhj', '', 'free', 38),
(63, 'dsgfgs', 'dsggfd', '', 'Not-Free', 35),
(64, 'asgfa', 'fasf', '', 'not-free', 35),
(65, 'vsg', 'vhj', '', 'free', 35),
(66, 'cdsjk', 'jkbkj', '', 'not-free', 35),
(67, 'fdsgs', 'hghj', '', 'not-free', 35),
(68, 'fsdgs', 'dsgf', '', 'not-free', 35),
(69, 'asf', 'sfaf', '', 'free', 35),
(70, 'سبسي', 'سشبس', '', 'Not-Free', 35),
(71, 'سبسي', 'سشبس', '', 'Not-Free', 35),
(72, 'سبسي', 'سشبس', '', 'Not-Free', 35),
(73, 'سبسي', 'سشبس', '', 'Not-Free', 35),
(74, 'سبسي', 'سشبس', '', 'Not-Free', 35),
(75, 'sf', 'saf', '', 'Free', 36),
(76, 'sf', 'saf', '', 'Free', 36),
(77, 'يسب', 'بيس', '55.PNG', 'Not-Free', 35),
(78, 'يسب', 'بيس', '55.PNG', 'Not-Free', 35),
(79, 'يسب', 'بيس', '55.PNG', 'Not-Free', 35),
(80, 'يسب', 'بيس', '55.PNG', 'Not-Free', 35),
(81, 'dfs', 'dfs', '70.PNG', 'Free', 38),
(82, 'dfs', 'dfs', '70.PNG', 'Free', 38),
(83, 'يييييييييييييييييييييييييييييييييي', 'يسشيسيسشي', '38.jpg', 'Free', 40);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`) VALUES
(32, 'fsadsf'),
(33, 'fs');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `Position_OR_Job` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `age` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Num_Experience` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `Resume` text DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `programming_fields_id` int(11) DEFAULT NULL,
  `skills_id` int(11) DEFAULT NULL,
  `Role` varchar(25) NOT NULL DEFAULT 'Instructor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `username`, `email`, `phone`, `Position_OR_Job`, `title`, `age`, `address`, `Num_Experience`, `image`, `Resume`, `password`, `course_id`, `faculty_id`, `programming_fields_id`, `skills_id`, `Role`) VALUES
(16, 'tarek', 'mcohxsamirovich@gmail.comz', 2147483647, '312', '312', 1, 'ش سعد زغلول - بنها', 312, 'saure.PNG', NULL, '123', NULL, NULL, NULL, NULL, 'Instructor');

-- --------------------------------------------------------

--
-- Table structure for table `programming_fields`
--

CREATE TABLE `programming_fields` (
  `id` int(11) NOT NULL,
  `langs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programming_fields`
--

INSERT INTO `programming_fields` (`id`, `langs`) VALUES
(54, 'c#'),
(55, 'js'),
(56, 'css'),
(57, 'html'),
(58, 'python'),
(59, 'java'),
(60, 'go'),
(61, 'ASP.net');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skills` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skills`) VALUES
(35, 'front-end'),
(36, 'back'),
(37, 'full'),
(38, 'Andriod'),
(39, 'design'),
(40, 'algorethmis'),
(41, 'data structure'),
(42, 'data base');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Experience` varchar(11) NOT NULL,
  `Resume` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `programming_fields_id` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `skills_id` int(11) DEFAULT NULL,
  `courses_id` int(11) DEFAULT NULL,
  `Role` varchar(25) NOT NULL DEFAULT 'Student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `age`, `phone`, `address`, `email`, `Experience`, `Resume`, `image`, `password`, `programming_fields_id`, `faculty_id`, `skills_id`, `courses_id`, `Role`) VALUES
(224, 'mohamed شسبلي', 13, '01159839072', 'ش سعد زغلول - بنها', 'mohagdagds@gmail.com', '2', 'E Learning (2).docx', 'saure.PNG', '12345', 58, 32, 35, NULL, 'Student'),
(225, 'mohamed samir', 321, '01159839072', 'ش سعد زغلول - بنها', 'mohamedsamirovich@gmail.com', '21', NULL, NULL, '12345', NULL, NULL, NULL, NULL, 'Student'),
(227, 'memo', 12, '01159839072', 'ش سعد زغلول - بنها', 'assah@gmail.com', '32', 'دار المفقودين Dar El Mafckodeen (1).pptx', '14.jpeg', '123321', 60, 32, 37, NULL, 'Student'),
(228, 'memo', 12, '01159839072', 'ش سعد زغلول - بنها', 'assah@gmail.com', '32', 'دار المفقودين Dar El Mafckodeen (1).pptx', '14.jpeg', '12345', 60, 32, 37, NULL, 'Student'),
(229, 'khaled', 65, '123134132', 'sajdhjska', 'mo@mail.com', '45', 'دار المفقودين Dar El Mafckodeen (1).pptx', '22.jpg', '123123', 57, 32, 35, NULL, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `vedios_of_courseds`
--

CREATE TABLE `vedios_of_courseds` (
  `id` int(11) NOT NULL,
  `Vedio_name` varchar(100) NOT NULL,
  `vedio` text NOT NULL,
  `poster` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `courses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vedios_of_courseds`
--

INSERT INTO `vedios_of_courseds` (`id`, `Vedio_name`, `vedio`, `poster`, `time`, `courses_id`) VALUES
(111, 'kenzy', '13 - [Magic Methods] - Property Overloading.mp4', 'Captudasdsre.PNG', '2022-07-15 03:41:12', 59),
(112, 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'لله درك قد هزمت سعادتي    الوصف.mp4', 'DB.PNG', '2022-07-15 03:42:16', 59);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses_card`
--
ALTER TABLE `courses_card`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_id` (`skills_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `skills_id` (`skills_id`),
  ADD KEY `programming_fields_id` (`programming_fields_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `programming_fields`
--
ALTER TABLE `programming_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programming_fields_id` (`programming_fields_id`),
  ADD KEY `skills_id` (`skills_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `courses_id` (`courses_id`);

--
-- Indexes for table `vedios_of_courseds`
--
ALTER TABLE `vedios_of_courseds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vedios_id` (`courses_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `courses_card`
--
ALTER TABLE `courses_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `programming_fields`
--
ALTER TABLE `programming_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `vedios_of_courseds`
--
ALTER TABLE `vedios_of_courseds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses_card`
--
ALTER TABLE `courses_card`
  ADD CONSTRAINT `courses_card_ibfk_2` FOREIGN KEY (`skills_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses_card` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `instructor_ibfk_2` FOREIGN KEY (`skills_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `instructor_ibfk_3` FOREIGN KEY (`programming_fields_id`) REFERENCES `programming_fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `instructor_ibfk_4` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`programming_fields_id`) REFERENCES `programming_fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`skills_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_4` FOREIGN KEY (`courses_id`) REFERENCES `courses_card` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vedios_of_courseds`
--
ALTER TABLE `vedios_of_courseds`
  ADD CONSTRAINT `vedios_of_courseds_ibfk_1` FOREIGN KEY (`courses_id`) REFERENCES `courses_card` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
