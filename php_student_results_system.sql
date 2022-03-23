-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 01:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_student_results_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_module_to_course`
--

CREATE TABLE `add_module_to_course` (
  `id` int(11) NOT NULL,
  `course_id` int(100) DEFAULT NULL,
  `module_id` int(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `Updationdate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_module_to_course`
--

INSERT INTO `add_module_to_course` (`id`, `course_id`, `module_id`, `status`, `CreationDate`, `Updationdate`) VALUES
(35, 13, 16, 1, '2021-08-26 12:05:19', NULL),
(36, 13, 17, 1, '2021-09-01 12:21:12', '2021-09-01 12:21:12'),
(37, 14, 16, 1, '2021-09-17 12:25:51', '2021-09-17 12:25:51'),
(38, 15, 18, 1, '2021-09-22 13:31:05', '2021-09-22 13:31:05'),
(39, 14, 17, 1, '2021-10-07 12:17:39', '2021-10-07 12:17:39'),
(40, 14, 19, 1, '2021-10-07 12:17:45', '2021-10-07 12:17:45'),
(41, 14, 20, 1, '2021-10-07 12:17:50', '2021-10-07 12:17:50'),
(42, 14, 21, 1, '2021-10-07 12:17:54', '2021-10-07 12:17:54'),
(43, 14, 22, 1, '2021-10-07 12:17:58', '2021-10-07 12:17:58'),
(44, 15, 23, 1, '2021-10-07 15:26:21', '2021-10-07 15:26:21'),
(45, 15, 24, 1, '2021-10-07 15:26:26', '2021-10-07 15:26:26'),
(46, 15, 25, 1, '2021-10-07 15:26:31', '2021-10-07 15:26:31'),
(47, 15, 26, 1, '2021-10-07 15:26:36', '2021-10-07 15:26:36'),
(48, 15, 27, 1, '2021-10-07 15:26:40', '2021-10-07 15:26:40'),
(49, 16, 29, 1, '2021-10-08 11:34:40', '2021-10-08 11:34:40'),
(50, 16, 30, 1, '2021-10-08 11:34:45', '2021-10-08 11:34:45'),
(51, 16, 31, 1, '2021-10-08 11:34:50', '2021-10-08 11:34:50'),
(52, 16, 33, 1, '2021-10-08 11:35:00', '2021-10-08 11:35:00'),
(53, 16, 34, 1, '2021-10-08 11:35:06', '2021-10-08 11:35:06'),
(54, 16, 32, 1, '2021-10-08 11:35:47', '2021-10-08 11:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'b99bbc0e85a70cb42dbaafabec773ddf', '2017-05-13 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `admission_table`
--

CREATE TABLE `admission_table` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(100) DEFAULT NULL,
  `RollId` varchar(100) DEFAULT NULL,
  `StudentEmail` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` varchar(100) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_table`
--

INSERT INTO `admission_table` (`StudentId`, `StudentName`, `RollId`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
(11, 'Bismark Otu', 'CSD2020M001', 'bismarkotu1006@gmail.com', 'Male', '2000-06-14', 13, '2021-09-01 11:21:33', '2021-09-01 11:21:33', 1),
(12, 'Nana Kwesi', 'CSD2020M056', 'nanakwesi373@hotmail.com', 'Male', '1997-06-17', 14, '2021-10-07 12:16:56', '2021-11-05 09:18:42', 1),
(14, 'Solomon Okyere', 'java2020M03', 'solomonokyere374@gmail.com', 'Male', '1995-07-10', 15, '2021-10-07 15:07:42', '2021-10-07 15:07:42', 1),
(15, 'Mary Otu', 'ICDL2021M94', 'maryotu2394@gmail.com', 'Female', '2007-06-13', 16, '2021-10-08 11:37:45', '2021-10-08 11:37:45', 1),
(16, 'Akeem Amose', 'java2020M01', 'akeemamose277@gmail.com', 'Male', '2007-02-14', 15, '2021-11-05 09:12:46', '2021-11-05 09:16:01', 0),
(17, 'Patrick Asante Denkyi', 'CSD2022M032', 'patrickasante1@gmail.com', 'Male', '2022-01-20', 13, '2022-01-20 18:16:51', '2022-01-20 18:20:23', 1),
(18, 'Ernest Asare', 'CSD2022M034', 'ernestasare32@gmail.com', 'Male', '2022-02-03', 13, '2022-02-03 18:27:02', '2022-02-03 18:27:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `courses_name` varchar(100) DEFAULT NULL,
  `coursenamenumeric` int(100) DEFAULT NULL,
  `course_level` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `courses_name`, `coursenamenumeric`, `course_level`, `CreationDate`, `UpdationDate`) VALUES
(13, 'Certificate in Software Development', 1, 'CSD1.1', '2021-08-26 11:22:07', '2021-08-26 11:22:07'),
(14, 'Certificate in Software Development', 1, 'CSD1.2', '2021-09-01 12:18:47', '2021-09-01 12:18:47'),
(15, 'Java Programming', 1, 'JAVA1.1', '2021-09-22 13:29:47', '2021-09-22 13:29:47'),
(16, 'International Computer Driving Licence', 3, 'IDCL3.5', '2021-10-08 11:28:18', '2021-10-08 11:28:18');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `modulename` varchar(100) NOT NULL,
  `modulecode` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `modulename`, `modulecode`, `Creationdate`, `UpdationDate`) VALUES
(16, 'JavaScript', 'javascript054', '2021-08-26 11:35:48', NULL),
(17, 'Python', 'pyth876', '2021-09-01 12:21:02', '2021-09-01 12:21:02'),
(18, 'Maven', 'maven865', '2021-09-22 13:30:39', '2021-09-22 13:30:39'),
(19, 'HTML & CSS', 'htm45654', '2021-10-07 12:14:47', '2021-10-07 12:14:47'),
(20, 'Oracle Database', 'oracle64466', '2021-10-07 12:14:56', '2021-10-07 12:14:56'),
(21, 'Software Engineering', 'se66', '2021-10-07 12:15:06', '2021-10-07 12:15:06'),
(22, 'Fundamentals of Computing', 'foc78955', '2021-10-07 12:15:37', '2021-10-07 12:15:37'),
(23, 'Hibernate', 'hibernate5566', '2021-10-07 15:08:39', '2021-10-07 15:08:39'),
(24, 'Core Java', 'corejava4335', '2021-10-07 15:21:56', '2021-10-07 15:23:45'),
(25, 'JDBC', 'jdbc543', '2021-10-07 15:22:05', '2021-10-07 15:23:32'),
(26, 'JSP', 'jsp533', '2021-10-07 15:22:14', '2021-10-07 15:25:26'),
(27, 'Spring Framework', 'spring3345', '2021-10-07 15:22:28', '2021-10-07 15:25:46'),
(28, 'Hibernate', 'spring42', '2021-10-07 15:24:57', '2021-10-07 15:24:57'),
(29, 'Excel', 'excel7445', '2021-10-08 11:28:47', '2021-10-08 11:28:47'),
(30, 'Microsoft Word', 'micro54656', '2021-10-08 11:29:12', '2021-10-08 11:29:12'),
(31, 'Digital Marketing', 'di4444', '2021-10-08 11:33:46', '2021-10-08 11:33:46'),
(32, 'Online Essentials', 'online5324', '2021-10-08 11:33:55', '2021-10-08 11:33:55'),
(33, 'Spreedsheets', 'spre53442', '2021-10-08 11:34:02', '2021-10-08 11:34:02'),
(34, 'Cyber Security', 'cyber3464', '2021-10-08 11:34:11', '2021-10-08 11:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `results_table`
--

CREATE TABLE `results_table` (
  `id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results_table`
--

INSERT INTO `results_table` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(23, 11, 13, 16, 67, '2021-09-01 12:19:16', '2021-10-07 12:09:47'),
(24, 12, 14, 22, 87, '2021-10-07 12:18:38', '2021-10-08 14:43:21'),
(25, 12, 14, 19, 49, '2021-10-07 12:18:38', '2021-10-08 14:43:21'),
(26, 12, 14, 16, 68, '2021-10-07 12:18:38', '2021-10-11 15:50:27'),
(27, 12, 14, 20, 28, '2021-10-07 12:18:38', '2021-10-11 15:48:50'),
(28, 12, 14, 17, 22, '2021-10-07 12:18:38', '2021-10-08 11:24:52'),
(29, 12, 14, 21, 37, '2021-10-07 12:18:38', '2021-10-08 11:24:52'),
(30, 14, 15, 24, 77, '2021-10-07 15:27:51', '2021-10-07 15:27:51'),
(31, 14, 15, 23, 67, '2021-10-07 15:27:51', '2021-10-07 15:27:51'),
(32, 14, 15, 25, 82, '2021-10-07 15:27:51', '2021-10-07 15:27:51'),
(33, 14, 15, 26, 79, '2021-10-07 15:27:51', '2021-10-07 15:27:51'),
(34, 14, 15, 18, 91, '2021-10-07 15:27:52', '2021-10-07 15:27:52'),
(35, 14, 15, 27, 88, '2021-10-07 15:27:52', '2021-10-07 15:27:52'),
(36, 15, 16, 34, 54, '2021-10-08 11:38:18', '2021-10-08 11:38:18'),
(37, 15, 16, 31, 77, '2021-10-08 11:38:18', '2021-10-08 11:38:18'),
(38, 15, 16, 29, 57, '2021-10-08 11:38:18', '2021-10-08 11:40:40'),
(39, 15, 16, 30, 86, '2021-10-08 11:38:18', '2021-10-08 11:38:18'),
(40, 15, 16, 32, 68, '2021-10-08 11:38:18', '2021-10-08 11:38:18'),
(41, 15, 16, 33, 84, '2021-10-08 11:38:18', '2021-10-08 11:38:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_module_to_course`
--
ALTER TABLE `add_module_to_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_table`
--
ALTER TABLE `admission_table`
  ADD PRIMARY KEY (`StudentId`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results_table`
--
ALTER TABLE `results_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_module_to_course`
--
ALTER TABLE `add_module_to_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_table`
--
ALTER TABLE `admission_table`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `results_table`
--
ALTER TABLE `results_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
