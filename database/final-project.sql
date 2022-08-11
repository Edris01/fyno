-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 07:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(100) NOT NULL,
  `chatsubject` varchar(1000) NOT NULL,
  `receipt` varchar(1000) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `chatsubject`, `receipt`, `content`) VALUES
(0, 'fees deadline', 'all students', 'deadline is today before midnight'),
(0, 'fees deadline', 'all students', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `fees-structure`
--

CREATE TABLE `fees-structure` (
  `id` int(100) NOT NULL,
  `course` varchar(255) NOT NULL,
  `fees` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `transaction id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `paid` int(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`transaction id`, `name`, `regno`, `paid`, `reason`, `balance`) VALUES
(1, 'lubowa edris', '19/BIT/031/UMC', 200000, 'sem-1', 200000),
(4, 'lubowa edris', '19/BIT/031/UMC', 200000, 'sem-1', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `fees` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `course`, `regno`, `fees`) VALUES
(1, 'lubowa Edris', 'BIT', '19/BIT/031/UMC', 400000),
(2, 'kilimanyi jovan ', 'BIT', '19/BIT/010/UMC', 500000),
(3, 'nagawa habibah', 'BIT', '19/BIT/056/UMC', 450000),
(4, 'nakijoba jamilah', 'BIT', '19/BIT/124/UMC', 500000),
(10, 'lubowa', 'BIT', '19/BIT/031/UMC', 222),
(11, 'lubowa Edris', 'BIT', '19/BIT/031/UMC', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `regno`, `password`) VALUES
(1, 'edris', 'edris@gmail.com', '19/bit/031/umc', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fees-structure`
--
ALTER TABLE `fees-structure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`transaction id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fees-structure`
--
ALTER TABLE `fees-structure`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `transaction id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
