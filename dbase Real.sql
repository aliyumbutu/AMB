-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2020 at 08:31 PM
-- Server version: 10.1.39-MariaDB
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
-- Database: `dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `id` int(150) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dob` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `e_duration` varchar(150) NOT NULL,
  `skill` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `profilepix` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`id`, `full_name`, `username`, `password`, `email`, `dob`, `gender`, `country`, `address`, `phone`, `e_duration`, `skill`, `description`, `profilepix`) VALUES
(1, 'Aliyu Muhammad Butu', 'admin', '$2y$10$/ACMcK1cKBAXG9nVH/FOv.8EgA2uoTJ4O04kqn5R8nAeImRMDQPNq', 'aliyumbutu.amb@gmail.com', '1997-03-19', 'Male', 'Afghanistan', 'No:44 Mubo road Jimeta Yola Adamawa State', '08068199866', '4 years', 'Website Development ', 'Do you really want to be a developer. kindly come to v6 Air technology. v6 will teach you from the grassrrot to Guru', ''),
(2, 'Yusuf Abubakar', 'Single User', '$2y$10$p6DcFvvXeCuLRM9xXv4P/ejdr2JuKMIevLpw15bRC9ocZIdE2dqfe', 'ouusuf.amb@gmail.com', '2020-03-12', 'Male', 'Afghanistan', 'qwe', '2', 'sdad', 'Graphics Designer', 'the best programmer in node east', ''),
(3, 'Rahisat BabanGambo', 'Raheesat', '$2y$10$oYSI.ST9lFQyhqfYr1UHnOxD0S3q2sByW3dQwJ5fdT/DWUrt//ETW', 'raheesat.amb@gmail.com', '1994-03-20', 'Female', 'Algeria', 'No:32 tafida street', '', '4 Moths with Yusuf', 'Typing and Printing', 'I have a good working experience and i learn it from my first boss Yusuf dan Ghana                     ', ''),
(4, 'Manu Abubakar', 'Manu', '$2y$10$ZA3Sebo8Ba0rWthBwqifSOrxSX/2kgvI1Jw6gr.xz3emneV0mhefK', 'ceo@naijatube.ng', '2020-03-13', 'Male', 'Afghanistan', 'dfghj', '34567', '345', 'Excell', '\r\n                   thre                         ', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(6, 'Muhammad', 'aliyumbutu.amb@gmail.com', '$2y$10$HQSWReuDtu1tfrauKERn4ubZ4tZgdDMppnaE/JZTmOu8x.uuX85aK'),
(7, 'Aliyu', 'naijatube2019@gmail.com', '$2y$10$EawWFTS/K0w/VuB17/GvJOrCuLLJvYHOzX5Dlzmv22C0cqJb47DTi'),
(8, '', 'Man@sdasd', '$2y$10$erG9LDk7A3R8hva9D6FT8.nisT5zVxeP.ksenqevnV4AeSKq4iOlW'),
(9, '1', 'admin@portal.com', '$2y$10$UtojJ9Jxd4fY/wLPLMJiw.niGqibTCfakp45czeU2Ot28Ss.jC652'),
(10, 'AliyuMbutu', 'aliyummbutu.amb@gmail.com', '$2y$10$o/DzU4usWvjSaOaX/nqL4u1ZkYytCjo27gZq330MOO/i0plTTFUqe'),
(11, 'aliyumbutu.amb@gmail.com', 'duniyarilimi@gmail.com', '$2y$10$syfLfm/2ISdF0OPviLzCz.tZ7D.h6Dq2lo2zw/e4A1jxHf.Tpn7hy'),
(12, '2323ada', 'asa@gmail.com', '$2y$10$9vTDyHEzA/KlcPHu1sJ2Eu4oV9JIvBYL.mP1EOFZ2eKaKmFN0QL6i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
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
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
