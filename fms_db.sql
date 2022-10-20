-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 09:31 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `folder_id` int(30) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `file_path` text NOT NULL,
  `is_public` tinyint(8) DEFAULT '0',
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dept` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `description`, `user_id`, `folder_id`, `file_type`, `file_path`, `is_public`, `date_updated`, `dept`) VALUES
(1, 'My File', 'This is my file', 1, 11, 'txt', '1616126640_My File.txt', 1, '2021-11-05 00:11:44', 'educ');

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `parent_id` int(30) NOT NULL DEFAULT '0',
  `is_public` varchar(299) NOT NULL,
  `dept` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '12' COMMENT '12+accreditortech, 11+accreditoreng, 10+accreditorcsd, 9+accreditoreduc, 1+admineduc , 6+admincsd, 7+admineng, 8+admintech, 2 = usereduc, 3 = usercsd, 4. = usereng, 5 = usertech,=,',
  `dept` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`, `dept`) VALUES
(1, 'Administrator', 'admineduc', 'admin', 1, 'Education'),
(3, 'Shaina Refran', 'user', 'user', 2, 'Education'),
(4, 'Name', 'Name', 'Nmae', 2, 'Education'),
(5, 'Computer Studies Department Admin', 'admincsd', 'admin', 6, 'Computer Studies'),
(6, 'Kaye Moncada', 'csd', 'csd', 3, 'Computer Studies'),
(7, 'CSD2', 'CSD2', 'csd', 3, 'Computer Studies'),
(8, 'educ', 'Educ1', 'educ', 2, 'Education'),
(9, 'educ2', 'educ', 'educ', 2, 'Education'),
(10, 'edu', 'edu', 'edu', 2, 'Education'),
(11, 'education', 'educname', 'edu', 2, 'Education'),
(12, 'educa', 'educa', 'educa', 2, 'Education'),
(13, 'education', 'edu', 'edu', 2, 'Education'),
(14, 'education', 'edu', 'edu', 2, 'Education'),
(15, 'Engineering', 'admineng', 'admin', 7, 'Engineering'),
(16, 'Technology', 'admintech', 'admin', 8, 'Technology'),
(17, 'Education Accreditor', 'accreditoreduc', 'admin', 9, 'accreditor class='),
(18, 'Technology Accreditor', 'accreditortech', 'admin', 12, 'Accreditor'),
(19, 'Computer Studies Accreditor', 'accreditorcsd', 'admin', 10, 'accreditor'),
(20, 'Engineering Accreditor', 'accreditoreng', 'Admin', 11, 'Accreditor'),
(21, 'Kaye', 'enguser', 'user', 4, 'Engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
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
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
