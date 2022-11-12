-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 06:30 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(5) NOT NULL,
  `uid` int(5) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `employer` varchar(30) DEFAULT NULL,
  `role` varchar(25) DEFAULT NULL,
  `experience` varchar(3) DEFAULT NULL,
  `education` varchar(30) DEFAULT NULL,
  `deadline` varchar(10) DEFAULT NULL,
  `tel1` varchar(15) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `pic1` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `uid`, `title`, `description`, `employer`, `role`, `experience`, `education`, `deadline`, `tel1`, `city`, `pic1`, `date`, `status`) VALUES
(3, 2, 'NSOFT Solutions', 'A minimum of 1-2 year professional experience with PHP and MySQL. Extensive Experience in Codeigniter and laravel Good   Understanding of other PHP Frameworks.', 'NSOFT Solutions', 'Web Developer', '4', ' Diploma', '2021-11-12', '07764357', 'Rathnapura', 'img_2021-11-06_9250_ima1.jpg', '2021-11-05', 'approved'),
(4, 2, 'Sales Assitants - Female', 'සාරී හා ලිපිද්‍රව්‍ය වෙළද ආයතනයකට \r\n\r\nවයස අවුරුදු 18-25 අතර වෙළද සේවිකාවන් පුහුණු /නුපුහුණු (අවිවාහක) කොළඹ අවටින් ඉක්මනින් අවශ්‍යයි.\r\n\r\n', 'ONIMKA GALLERY', 'Field Sales Executive', '0', 'Ordinary Level', '2021-11-30', '0771457823', 'Nugegoda', 'img_2021-11-06_6990_ima3.jpg', '2021-11-06', 'approved'),
(5, 2, 'ලිපිකරු - ගම්පහ', 'Experience Non Experience School leavers All island can Apply.', 'IT COMPUTER SOLUTIONS', 'Data Entry Operator', '0', 'Skilled Apprentice', '2021-11-25', '077 - 533 5329', 'Gampaha', 'img_2021-11-06_9230_ima4.jpg', '2021-11-06', 'approved'),
(6, 5, 'Draftsman (QS) - Colombo', 'We are looking forward to recruit Qualified Draftsman  (with as Knowledge) especially for steel fabrication and piping works previous experience is a must.', 'Danushka Engineering Services ', 'Draftsman ', '3', 'Certificate', '2021-12-30', '0715678924', 'Colombo', 'img_2021-11-06_3_ima5.jpg', '2021-11-06', 'approved'),
(7, 1, 'Office Clerk -Male / Female', 'We Sunmade lanka pvt Ltd is importing and distributing water purification equipment and solar power systems .', 'Sunmade Lanka (Pvt)Ltd', 'Clerk', '1', 'Advanced Level', '2021-12-12', '0716790325', 'Colombo', 'img_2021-11-08_6253_ima6.jpg', '2021-11-08', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `tel` varchar(13) DEFAULT NULL,
  `uname` varchar(25) DEFAULT NULL,
  `pw` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `tel`, `uname`, `pw`) VALUES
(1, 'Hashini', '0713451345', 'hashi@gmail.com', '345'),
(2, 'Kamal', '0775612579', 'kamal@gmail.com', '1234'),
(3, 'sadun', '0761278901', 'sadun@gmail.com', 'abc'),
(5, 'Nethmi', '07762451289', 'nethmi1@gmail.com', '345a'),
(6, 'sadini', '0775512789', 'sadini@gmail.com', '123b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
