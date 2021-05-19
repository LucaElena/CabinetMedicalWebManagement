-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 11:06 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cabinetmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id_patient` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `id_cabinet` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `day` int(2) NOT NULL,
  `hour` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cabinets`
--

CREATE TABLE `cabinets` (
  `id_cabinet` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabinets`
--

INSERT INTO `cabinets` (`id_cabinet`, `id_user`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id_chat` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `message` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id_data` int(11) NOT NULL,
  `id_file` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id_doctor` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id_doctor`, `first_name`, `last_name`, `id_user`, `department`) VALUES
(1, 'Ion', 'Popescu', 3, 'Cardiology'),
(2, 'Maria', 'Ionescu', 4, 'Endocrinology'),
(3, 'Ana', 'Vasilescu', 8, 'Gastroenterology'),
(5, 'Mihai', 'Popescu', 9, 'Hematology'),
(6, 'Mihaela', 'Ionescu', 10, 'Cardiology'),
(8, 'Oana', 'Vasilescu', 11, 'Endocrinology'),
(9, 'Andreea', 'Luca', 12, 'Neurology'),
(10, 'Stefan', 'Georgescu', 18, 'Infectious disease'),
(11, 'Andrei', 'Sergiu', 19, 'Pediatrics'),
(12, 'Marian', 'Popescu', 23, 'Endocrinology'),
(13, 'Ioana', 'Gavrilas', 24, 'Gastroenterology'),
(14, 'Andreea', 'Popescu', 25, 'Gastroenterology'),
(15, 'Stefan', 'Ionescu', 26, 'Hematology'),
(16, 'Mihaela', 'Georgescu', 27, 'Cardiology'),
(17, 'Mihaela', 'Luca', 28, 'Cardiology'),
(18, 'Oana', 'Popescu', 29, 'Endocrinology'),
(19, 'Andreea', 'Georgescu', 30, 'Neurology'),
(20, 'Stefan', 'Luca', 31, 'Infectious disease'),
(21, 'Andrei', 'Popescu', 32, 'Pediatrics');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id_doctor` int(11) NOT NULL,
  `id_cabinet` int(11) NOT NULL,
  `id_schedule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id_doctor`, `id_cabinet`, `id_schedule`) VALUES
(3, 1, 1),
(4, 1, 2),
(8, 1, 3),
(9, 1, 4),
(10, 1, 5),
(11, 1, 6),
(12, 1, 7),
(18, 1, 8),
(19, 1, 9),
(23, 1, 10),
(24, 1, 11),
(0, 0, 0),
(25, 1, 12),
(26, 1, 13),
(27, 1, 14),
(28, 1, 15),
(29, 1, 16),
(0, 0, 0),
(30, 2, 17),
(31, 2, 18),
(32, 2, 19),
(28, 2, 20),
(29, 2, 21);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id_file` int(11) NOT NULL,
  `id_cabinet` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `file_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id_patient` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id_patient`, `id_user`, `first_name`, `last_name`) VALUES
(1, 5, 'Maria', 'Popescu'),
(2, 6, 'Ana', 'Mihailescu'),
(3, 13, 'Gabriela', 'Popescu'),
(4, 14, 'Alexandru', 'Georgescu'),
(5, 15, 'Mihai', 'Ionescu'),
(6, 16, 'Daniela', 'Mihailescu'),
(7, 17, 'Adrian', 'Popescu'),
(8, 18, 'Stefan', 'Mihailescu'),
(9, 19, 'Andrei', 'Ionescu'),
(10, 20, 'Victor', 'Georgescu'),
(11, 21, 'Nicolae', 'Mihailescu'),
(12, 22, 'Remus', 'Popescu'),
(13, 33, 'Victor', 'Ionescu'),
(14, 34, 'Victor', 'Georgescu');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id_schedule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `id_user`, `email`, `phone`, `password`) VALUES
('cabinet_ana', 1, 'cabinet_ana@cabinet_ana.ro', '0712345678', '1234'),
('cabinet_maria', 2, 'cabinet_maria@cabinet_maria.ro', '0722345678', '1234'),
('doctor_popescu', 3, 'doctor_popescu@gmail.com', '0732345678', '1234'),
('doctor_maria', 4, 'doctor_maria@gmail.com', '0742345678', '1234'),
('user_maria', 5, 'user_maria@gmail.com', '0752345678', '1234'),
('user_ana', 6, 'user_ana@gmail.com', '0762345678', '1234'),
('user_popescu', 7, 'user_popescu@gmail.com', '0712332678', '1234'),
('doctor_ana', 8, 'doctor_ana@gmail.com', '0742335678', '1234'),
('doctor_mihai', 9, 'doctor_mihai@gmail.com', '0734345678', '1234'),
('doctor_mihaela', 10, 'doctor_mihaela@gmail.com', '0722345678', '1234'),
('doctor_oana', 11, 'doctor_oana@gmail.com', '0732345678', '1234'),
('doctor_andreea', 12, 'doctor_andreea@gmail.com', '0742345678', '1234'),
('user_gabriela', 13, 'user_gabriela@gmail.com', '0752345678', '1234'),
('user_alexandru', 14, 'user_alexandru@gmail.com', '0762345678', '1234'),
('user_mihai', 15, 'user_mihai@gmail.com', '0712332678', '1234'),
('user_daniela', 16, 'user_daniela@gmail.com', '0712345678', '1234'),
('user_adrian', 17, 'user_adrian@gmail.com', '0722345678', '1234'),
('doctor_stefan', 18, 'doctor_stefan@gmail.com', '0732345678', '1234'),
('doctor_andrei', 19, 'doctor_andrei@gmail.com', '0742345678', '1234'),
('user_victor', 20, 'user_victor@gmail.com', '0752345678', '1234'),
('user_nicolae', 21, 'user_nicolae@gmail.com', '0762345678', '1234'),
('user_remus', 22, 'user_remus@gmail.com', '0712332678', '1234'),
('doctor_marianp', 23, 'doctor_marianp@gmail.com', '0712332678', '1234'),
('doctor_ioanag', 24, 'doctor_ioanag@gmail.com', '0712332678', '1234'),
('doctor_andreeap', 25, 'doctor_andreeap@gmail.com', '0712332678', '1234'),
('doctor_stefani', 26, 'doctor_stefani@gmail.com', '0712332678', '1234'),
('doctor_mihaelag', 27, 'doctor_mihaelag@gmail.com', '0712332678', '1234'),
('doctor_mihaelal', 28, 'doctor_mihaelal@gmail.com', '0712332678', '1234'),
('doctor_oanap', 29, 'doctor_oanap@gmail.com', '0712332678', '1234'),
('doctor_andreeag', 30, 'doctor_andreeag@gmail.com', '0712332678', '1234'),
('doctor_stefanl', 31, 'doctor_stefanl@gmail.com', '0712332678', '1234'),
('doctor_andreip', 32, 'doctor_andreip@gmail.com', '0712332678', '1234'),
('user_victori', 33, 'user_victori@gmail.com', '0712332678', '1234'),
('user_victorg', 34, 'user_victorg@gmail.com', '0712332678', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabinets`
--
ALTER TABLE `cabinets`
  ADD PRIMARY KEY (`id_cabinet`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD UNIQUE KEY `id_file` (`id_file`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id_doctor`),
  ADD UNIQUE KEY `user_id` (`id_user`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id_patient`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabinets`
--
ALTER TABLE `cabinets`
  MODIFY `id_cabinet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id_doctor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
