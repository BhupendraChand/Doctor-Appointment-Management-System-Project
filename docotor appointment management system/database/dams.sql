-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2022 at 09:57 AM
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
-- Database: `db_opd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Susil chhetri', 'wizzy11@gmail.com', 'wizzy12');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_no` int(5) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `d_id` int(3) NOT NULL,
  `specialist` varchar(20) NOT NULL,
  `appointmentdate` date NOT NULL,
  `appointmenttime` time NOT NULL,
  `price` varchar(10) NOT NULL,
  `p_id` int(5) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pcontact` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `reason_for_appointment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_no`, `dname`, `d_id`, `specialist`, `appointmentdate`, `appointmenttime`, `price`, `p_id`, `pname`, `pcontact`, `email`, `address`, `dateOfBirth`, `reason_for_appointment`) VALUES
(1, 'Dr.Prakash Bhattrai', 2, 'Neurologist', '2022-05-20', '08:58:00', 'Rs.160', 4, 'Kapil chhetri', '9876543241', 'kapil12@gmail.com', 'Achham', '1998-04-28', 'head pain frequently'),
(2, 'Dr.Prakash Bhattrai', 2, 'Neurologist', '2022-05-20', '08:58:00', 'Rs.160', 4, 'Kapil chhetri', '9876543241', 'kapil12@gmail.com', 'Achham', '1998-04-28', 'Headache'),
(3, 'Dr. Amrit Raya', 4, 'Neurologist', '2022-05-27', '00:46:00', 'Rs.155', 4, 'Kapil chhetri', '9876543241', 'kapil12@gmail.com', 'Achham', '1998-04-28', 'head pain frequently'),
(4, 'Dr. Amrit Raya', 4, 'Neurologist', '2022-05-27', '00:46:00', 'Rs.155', 5, 'Gita shahi', '9865432467', 'gita12@gmail.com', 'Kalikot', '2004-04-22', 'head pain frequently');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(5) NOT NULL,
  `doctorname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `specialist` varchar(40) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` enum('male','female','other') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctorname`, `email`, `password`, `phone`, `address`, `degree`, `specialist`, `dateOfBirth`, `gender`) VALUES
(2, 'Dr.Prakash Bhattrai', 'prakash12@gmail.com', 'prakash12', '9876432342', 'Lalitpur', 'MBBS', 'Neurologist', '1998-11-22', 'male'),
(4, 'Dr. Amrit Raya', 'amrit12@gmail.com', 'amrit12', '9876543212', 'Ktm', 'MBBS,MD', 'Neurologist', '1990-11-22', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedule`
--

CREATE TABLE `doctor_schedule` (
  `schedule_id` int(3) NOT NULL,
  `d_id` int(3) NOT NULL,
  `doctorname` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `specialist` varchar(30) NOT NULL,
  `appointmentdate` date NOT NULL,
  `appointmenttime` time NOT NULL,
  `appointmentprice` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_schedule`
--

INSERT INTO `doctor_schedule` (`schedule_id`, `d_id`, `doctorname`, `gender`, `specialist`, `appointmentdate`, `appointmenttime`, `appointmentprice`) VALUES
(1, 2, 'Dr.Prakash Bhattrai', 'male', 'Neurologist', '2022-05-21', '08:58:00', 'Rs.155'),
(2, 2, 'Dr.Prakash Bhattrai', 'male', 'Neurologist', '2022-05-20', '08:58:00', 'Rs.160'),
(3, 4, 'Dr. Amrit Raya', 'male', 'Neurologist', '2022-05-23', '12:41:00', 'Rs.155'),
(4, 4, 'Dr. Amrit Raya', 'male', 'Neurologist', '2022-05-27', '00:46:00', 'Rs.155');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` enum('male','female','other') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `username`, `email`, `password`, `phone`, `address`, `dateOfBirth`, `gender`) VALUES
(2, 'Ashok shah', 'ashok1@gmail.com', 'ashok1', '9853425526', 'Ktm', '2001-04-29', 'male'),
(4, 'Kapil chhetri', 'kapil12@gmail.com', 'kapil12', '9876543241', 'Achham', '1998-04-28', 'male'),
(5, 'Gita shahi', 'gita12@gmail.com', 'gita12', '9865432467', 'Kalikot', '2004-04-22', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_no`),
  ADD KEY `appointment_patient` (`p_id`),
  ADD KEY `appointment_doctor` (`d_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `FK_schedule_doctor` (`d_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  MODIFY `schedule_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_doctor` FOREIGN KEY (`d_id`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_patient` FOREIGN KEY (`p_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  ADD CONSTRAINT `FK_schedule_doctor` FOREIGN KEY (`d_id`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
