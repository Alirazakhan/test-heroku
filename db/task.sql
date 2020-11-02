-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 09:55 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `level` varchar(255) NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `ans_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`id`, `question`, `level`, `option_a`, `option_b`, `option_c`, `option_d`, `ans_key`) VALUES
(2, 'Woher .............. du ? \r\nAus Zimbabwe.', 'A1', 'wohnt', 'kommst', 'wohnst', 'kommt', 'B'),
(3, 'Wie  ist  ..............  Name ? \r\nMein Name ist Helge Müller.', 'A1', 'ihr', 'Ihr', 'sein', 'Ihren', 'B'),
(4, 'Was ist das ? \r\nDas ist ..............  Stuhl.', 'A1', 'ein', 'einen', 'die', 'das', 'A'),
(5, 'Er ..............  morgen nach Hamburg.', 'A1', 'fährst', 'fahrt', 'fährt', 'fahren', 'C'),
(6, '..............  fahrt ihr im Sommer? \r\nnach Österreich.', 'A1', 'Wo', 'Wonach', 'Woher', 'Wohin', 'D'),
(7, 'Das ist ein Computer. .............. Computer ist sehr schnell. ........ kostet 790.- Euro.', 'A1', 'Ein - Er', 'Der - Es', 'Ein - Sie', 'Der - Er', 'D'),
(8, 'Haben Sie Kinder ?\r\nNein, ...', 'A1', 'ich habe nicht Kinder.', 'sie haben keine Kinder.', 'wir haben noch keine Kinder.', 'wir haben kein Kinder.', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `type` varchar(256) DEFAULT NULL,
  `login_date` varchar(256) DEFAULT NULL,
  `login_time` varchar(256) DEFAULT NULL,
  `allow_login` varchar(256) DEFAULT NULL,
  `is_delete` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `role_id`, `employee_id`, `status`, `name`, `password`, `type`, `login_date`, `login_time`, `allow_login`, `is_delete`) VALUES
(1, 1, NULL, 1, 'ali', '12345', 'master', '15-10-2020', '12:50:10pm', '1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
