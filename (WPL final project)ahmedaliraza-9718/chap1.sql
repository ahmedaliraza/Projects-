-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 10:51 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chap1`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `Age` int(100) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `TypeofCancer` varchar(4000) NOT NULL,
  `stage` int(255) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `Age`, `Province`, `City`, `TypeofCancer`, `stage`, `email`) VALUES
(1, 'ahmed', 'ali raza', 22, 'SINDH', 'KARACHI', 'lymphoma(Non-Hodgkin''s)', 2, 'iuammu22@gmail.com'),
(2, 'anis ', 'hasan', 54, 'SINDH', 'KARACHI', 'Pencreatic cancer', 3, 'anishasan29@gmail.com'),
(3, 'chaudry ', 'iqbal', 55, 'PUNJAB', 'LAHORE', 'Neck cancer (Head and neck cancer)', 1, 'Ciqbal393@gmail.com'),
(4, 'zafar', 'gohar', 34, 'KPK', 'PESHAWAR', 'Brain cancer', 4, 'gharZ@gmail.com'),
(5, 'dildar ', 'khan', 38, 'BALOCHISTAN', 'QUETTA', 'Kidney cancer', 2, 'dildarkhan123@gmail.com'),
(6, 'jamal', 'Kamal', 44, 'SINDH', 'KARACHI', 'Blood cancer', 3, 'kkkhan93@gmail.com'),
(7, 'komal', 'rizwan', 43, 'AZAD-KASHMIR', 'MUZAFFARABAD', 'Throat cancer', 3, 'kritz939@gmail.com'),
(8, 'wazir', 'hasan', 60, 'SINDH', 'KARACHI', 'Throat cancer', 4, 'whasan16@gmail.com'),
(9, 'ali', 'khan', 23, 'SINDH', 'KARACHI', 'Acute granulocytic leukemia (Leukemia)', 1, 'ali1@gmail.com'),
(10, 'hafsa ', 'shah jatoi', 43, 'BALOCHISTAN', 'QUETTA', 'Breast cancer', 1, 'jatt23@gmail.com'),
(12, 'hasnain', 'mirza baig', 55, 'PUNJAB', 'LAHORE', 'Brain tumor (Brain cancer)', 3, 'mbaig!@gmail.com'),
(13, 'hasil', 'bazinjo', 56, 'BALOCHISTAN', 'QUETTA', 'Eye cancer', 2, 'baz90@gmail.com'),
(14, 'gola', 'LAAL', 20, 'KPK', 'PESHAWAR', 'Cervical cancer', 4, 'bolalaal20@gmail.com'),
(15, 'marina', 'haad', 34, 'PUNJAB', 'Balochistan', 'Breast cancer', 2, 'marinah@gmail.com'),
(16, 'Pakistan', 'Zindabad', 71, '--', '--', '--', 1, 'pak-ik@govt.pk'),
(17, 'xyz', 'abc', 22, 'SINDH', 'KARACHI', 'Acute granulocytic leukemia (Leukemia)', 1, 'iuammu22@gmail.com'),
(18, 'mohsin', 'jafferi', 22, 'SINDH', 'KARACHI', '--', 1, 'mohsin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
