-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 02, 2020 at 08:26 AM
-- Server version: 5.7.25
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `exam_enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `subject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `number`, `address`, `subject`) VALUES
(2, 'Boss Pogi', 'igop@boss.com', '09877377748', 'Manila, Metro Manila', 1),
(8, 'Stephen', 'pascualstephen23@gmail.com', '9772137933', '101, CRISTINA HOMES, Sandoval Avenue,  Pinagbuhatan, Pasig City', 1),
(9, 'Test Tingkles', 'test@test.com', '98488848', 'Manila manila', 9),
(10, 'Rusvi Corona', 'corona@gg.com', '949499999', 'Wuhan China', 8),
(11, 'Pedro Paterno', 'pedz@panotchi.co', '9772137933', 'Rotonda, Pasig', 9),
(12, 'Perla Labandera', 'labada@perla.laba', '8884758488', 'Washington District, USA', 99),
(13, 'Zaldy Zubo', 'zz@s.co', '4999499', 'Zimbabwe', 8),
(14, 'James Harden', 'harderfor3@houston.com', '13', 'Houston', 9),
(15, 'Lebron James', 'bronbron@king.com', '23', 'LA, California', 9),
(16, 'Paul George', 'ygtreyce@la.com', '13', 'LA, California', 13),
(17, 'Kawhi Leonard', 'theklaw@la.com', '88', 'LA, California', 888);

-- --------------------------------------------------------

--
-- Table structure for table `student_subject`
--

CREATE TABLE `student_subject` (
  `stud_sub_id` int(11) NOT NULL,
  `stud_fk` int(20) NOT NULL,
  `sub_fk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_desc` varchar(255) NOT NULL,
  `subject_teacher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `subject_desc`, `subject_teacher`) VALUES
(1, 'IT 001', 'Intoduction in Programming ', 'Sir Admin'),
(2, 'Data Structure 001', 'Intro in Data Structure', 'Maam Covid'),
(3, 'E-Comm 001', 'E-Commerce Introduction using PHP', 'Sir Ebola Bolate'),
(4, 'PE 001', 'Physical Education For health', 'Maam Mia Khali Pha'),
(5, 'Math 001', 'Advance Mathematics', 'Mr. Titik Boy'),
(6, 'Math 001', 'Advance Mathematics', 'Mr. Titik Boy'),
(7, 'Math 001', 'Advance Mathematics', 'Mr. Titik Boy'),
(8, 'Math 001', 'Advance Mathematics', 'Mr. Titik Boy'),
(9, 'Rel Ed 001', 'Christian Living ', 'Father Rev. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_subject`
--
ALTER TABLE `student_subject`
  ADD PRIMARY KEY (`stud_sub_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student_subject`
--
ALTER TABLE `student_subject`
  MODIFY `stud_sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
