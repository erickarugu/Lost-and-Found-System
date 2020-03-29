-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2020 at 02:05 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lf_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('eric', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `location` varchar(20) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`name`, `age`, `location`, `idnumber`, `username`, `password`) VALUES
('w', 12, 'e', 12, '12', 'we'),
('admin', 21, 'Nairobi', 34207838, 'Admin', 'password'),
('Eric Karugu Kariuki', 12, 'Nairobi', 12345432, 'Bob', 'jhhj'),
('eric', 21, '121', 3, 'eric', 'password'),
('Eric Karugu Kariuki', 12, 'Nairobi', 12345432, 'erickarug', 'wewww'),
('Eric Karugu Kariuki', 12, 'Nairobi', 12345432, 'HackerNoon', '1211221'),
('User1', 21, 'Kitale', 232323, 'User1', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `lostitems`
--

CREATE TABLE `lostitems` (
  `name` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lostitems`
--

INSERT INTO `lostitems` (`name`, `description`, `location`, `date`) VALUES
('Wallet', 'Black with Gray stripes.', 'Nairobi', '2020-02-05'),
('shoe', 'Black, size 39, mew', 'Nairobi', '2020-02-14'),
('m', '8', '90', '2012-12-12'),
('Eric', 'new new', 'Nairobi', '2020-09-09'),
('Eric', 'new new new new', 'Nairobi', '2020-09-09'),
('Eric', 'meh meh', 'Nairobi', '2020-09-09'),
('Striped Wallet', 'Found it around the roundabaout', 'Nairobi', '2020-09-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;