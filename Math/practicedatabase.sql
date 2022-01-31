-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 09:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practicedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `prob_id` int(10) NOT NULL,
  `prob_heading` varchar(20) NOT NULL,
  `prob_description` varchar(200) NOT NULL,
  `prob_pic` varchar(30) NOT NULL,
  `submit_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`prob_id`, `prob_heading`, `prob_description`, `prob_pic`, `submit_by`) VALUES
(233, 'Summation of series', 'what is the summation of the bellow series:\r\n1+3+5+7+........99', 'IMG_20220116_170235.jpg', 'jahid@gmail.com'),
(234, 'Modulas operation', 'what is the output of 3 mod 2', '', 'jahid@gmail.com'),
(235, 'Palindrome', 'Is the number 1110111 palindrome?', '', 'jahid@gmail.com'),
(237, 'Additive inverse', 'what is the additive inverse of 540.', '', ''),
(238, 'Probability', 'A dice is thrown 65 times and 4 appeared 2 1 times. Now, in a random throw of a dice, what is the probability of getting a 4?', '', 'jahid@gmail.com'),
(239, 'Probability', 'A survey of 200families shows the results given below:\r\n    No. of girls in the family    	    2     	    1     	    0    \r\nNo. of Families\r\n	\r\n32\r\n	\r\n154\r\n	\r\n14\r\n\r\nOut of these families, one is chose', '', 'jahid@gmail.com'),
(240, 'meter and centimetre', 'Stacy and Milda are comparing their heights. Stacy is 1.5 meters tall. Milda is 10 centimetres taller than Stacy. What is Milda’s height in centimetres?', '', 'jahid@gmail.com'),
(241, 'Proportional relatio', 'Store A is selling 7 pounds of bananas for $7.00. Store B is selling 3 pounds of bananas for $6.00. Which store has the better deal?', '', 'jahid@gmail.com'),
(242, 'sum, multiplication,', '8 ÷ 2 (2 + 2) = ? \r\n\r\nIs the answer 16, or is it 1?', '', 'jahid@gmail.com'),
(243, 'Set and Function', 'If P= {x:x is a factor of 12 and Q= {x: x is a multiple of 3 and x&lt;=12} then determine P-Q.', '', 'jahid@gmail.com'),
(244, 'Set and Function', 'If P={1,2,3}, Q={3,4} and R=P ∩ Q then determine p *R and R*Q.', '', 'jahid@gmail.com'),
(251, 'Set', 'What is the set of factor of 8?', 'IMG_20220116_165537.jpg', 'jahid@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `solution_id` int(10) NOT NULL,
  `solution` varchar(1000) NOT NULL,
  `solution_pic` varchar(100) NOT NULL,
  `submit_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`solution_id`, `solution`, `solution_pic`, `submit_by`) VALUES
(231, 'sf sf sfd ', '', ''),
(232, 'sdf fdaf ', '', ''),
(233, '4950', '', 'jahid@gmail.com'),
(234, '3|2 is equal to 1', '', ''),
(235, 'Yes it is a palindrome number.', '', 'jahid@gmail.com'),
(238, 'Total number of tria1s = 65.\r\n\r\nNumber of times 4 appeared = 21.\r\nProbability of getting a 4 = Number of times 4 appeared/Total number of trials\r\n\r\n                                  = 21/65', '', 'jahid@gmail.com'),
(243, '12', '', 'jahid@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Nickname` varchar(20) NOT NULL,
  `Hometown` varchar(30) NOT NULL,
  `Current_address` varchar(30) NOT NULL,
  `Marital_status` varchar(20) NOT NULL,
  `Birthday` date NOT NULL,
  `Other` varchar(30) NOT NULL,
  `Profilepic` varchar(30) NOT NULL DEFAULT 'profile.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `Email`, `Password`, `Name`, `Last_name`, `Nickname`, `Hometown`, `Current_address`, `Marital_status`, `Birthday`, `Other`, `Profilepic`) VALUES
(1222, 'arif@gmail.com', '123456', 'arifur', 'rahman', '', '', '', '', '0000-00-00', '', 'profile.jpg'),
(1246, 'jahid@gmail.com', '123456', 'Md Jahid', 'hasan', 'Jahid', 'Sirajganj', 'Khulna', 'Single/Mingle', '2022-01-13', '', ''),
(1247, 'arif@gmail.com', '123456', 'Arifur', 'rahman', '', '', '', '', '0000-00-00', '', 'profile.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`prob_id`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`solution_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `prob_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1248;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
