-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2019 at 04:30 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.12-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Title` varchar(20) CHARACTER SET utf8 DEFAULT 'بدون عنوان',
  `Description` text CHARACTER SET utf8 NOT NULL,
  `ID` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Title`, `Description`, `ID`) VALUES
('amin is developer', 'amin loved programming and trad.\r\n', 1),
('dasdasd', 'dasd', 2),
('hi', 'ads', 3),
('Learn php', 'We have used print_r function to display the array\r\nWE have used FETCH_OBJ parameter get property name corresponding to column name. Same way we will try other parameters In your downloaded script ( file name : pdo-fetch.php ) the area to change the part of the code is marked. You can replace them with these lines to check the output ', 4),
('bugati', 'bugati is car.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `FullName` varchar(15) CHARACTER SET utf8 NOT NULL,
  `Email` text CHARACTER SET utf8 NOT NULL,
  `Password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `ID` int(6) NOT NULL,
  `username` varchar(15) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
