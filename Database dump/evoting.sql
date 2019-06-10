-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 06:49 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `election_votes`
--

CREATE TABLE `election_votes` (
  `n_modi` varchar(20) NOT NULL,
  `r_gandhi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election_votes`
--

INSERT INTO `election_votes` (`n_modi`, `r_gandhi`) VALUES
('4', '0');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `voter_id` varchar(255) NOT NULL,
  `aadhar_id` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date` text NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`id`, `firstname`, `lastname`, `email`, `voter_id`, `aadhar_id`, `password`, `gender`, `date`, `time`) VALUES
(9, 'Ashim Ujjwal', '', 'ashim.ujjwal619@gmail.com', '123456789', '123456789012', 'e807f1fcf82d132f9bb018ca6738a19f', '1', '09 Sun,June 2019', '12:20:34'),
(10, 'Ashim', 'Ujjwal', 'ashim@gmail.com', '123456788', '123456789011', '25f9e794323b453885f5181f1b624d0b', '1', '10 Mon,June 2019', '06:45:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `election_votes`
--
ALTER TABLE `election_votes`
  ADD PRIMARY KEY (`n_modi`,`r_gandhi`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
