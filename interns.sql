-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 09:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interns`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `Name` varchar(65) NOT NULL,
  `LastName` varchar(65) NOT NULL,
  `Gender` varchar(65) NOT NULL,
  `Mobile` varchar(65) NOT NULL,
  `School` varchar(255) NOT NULL,
  `Level` varchar(65) NOT NULL,
  `Program` varchar(150) NOT NULL,
  `COUNTRY` varchar(45) NOT NULL,
  `Entry_Date` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Name`, `LastName`, `Gender`, `Mobile`, `School`, `Level`, `Program`, `COUNTRY`, `Entry_Date`) VALUES
(1, 'hfggf', 'gcgfgdf', 'hvfgfgf', 'jhhghf', 'vhghgf', 'hvhgfg', 'hghff', '', 'hghfgfg'),
(2, 'nbvhvh', 'hvhvhv', 'hvhgvh', 'bvgcfg', 'gfgfg', 'gfgg', 'gfgfdg', '', 'fdfdf'),
(3, 'nbvhvh', 'hvhvhv', 'hvhgvh', 'bvgcfg', 'gfgfg', 'gfgg', 'gfgfdg', '', 'fdfdf'),
(4, 'JHJGH', 'BHNVHN', 'BHBHJ', 'HVH', 'JHHFHG', 'HFGCF', 'HVGFG', '', 'HVCGG'),
(5, 'jhb', 'bvvvv', 'bvv', 'ffcc', 'hgg', 'gfff', 'vvc', '', '2023-05-01'),
(6, 'chebet', 'bnvcgcg', 'bcvxfxf', 'fcfxdfx', 'fxcfxd', 'fcfxfdxd', 'cxczxdzsd', '', '2023-05-01'),
(7, 'asumani', 'ffsfg', 'vxcfxdx', 'czdxc', 'gcfxzxd', 'dzZSsZz', 'dzsdzs', '', '2023-05-01'),
(8, 'jahid', 'bbvhvh', 'Male', 'gcgggh', 'ghhbhbhbh', 'gffgvg', 'hbhbhbh', '', '2023-05-02'),
(9, 'fdfdfs', 'sfdfd', 'Male', '3434', 'dwfsf', 'fssf', 'fssssssssssssssss', '', '2023-08-08'),
(10, 'RRRR', 'TTTTT', 'Male', '87655', 'HUFYFT', 'GHCGDR', 'JGHFFY', '', '2023-08-15'),
(11, 'JOSIANE', 'XFVXFDXFX', 'Female', '5353', 'FSDASZDA', 'FASDZ', 'FSSFSD', '', '2023-08-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
