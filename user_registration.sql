-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 12:43 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_registration`
--

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Loginid`, `password`, `updationDate`) VALUES
(1, 'admin', 'test123', '2017-10-30 11:42:58');

--
-- Dumping data for table `tbleaves`
--

INSERT INTO `tbleaves` (`id`, `LeaveType`, `FromDate`, `ToDate`, `Description`, `PostingDate`, `Status`, `empid`) VALUES
(1, 'Sick Leave', '12/03/2008', '13/03/2009', 'wanted leave', '2018-11-28 08:21:13', 1, 3),
(2, 'Sick Leave', '20/08/2018', '20/09/2018', '\r\nmaa chqowp[wvqwe[vv\r\nsfss', '2018-11-27 15:44:13', 1, 13),
(3, 'Sick Leave', '20/08/2018', '20/09/2018', '\r\njmm,', '2018-11-27 16:44:47', 2, 13),
(23, 'Study Leave', '21/09/2018', '25/09/2018', 'needed leave for study purpose to study web programming.', '2018-11-28 10:20:39', 2, 15),
(24, 'Personal Leave', '21/09/2018', '23/09/2018', 'final leave testing\r\n', '2018-11-28 11:07:20', 2, 16);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Loginid`, `First_Name`, `Last_Name`, `Email`, `Phone_Number`, `password`) VALUES
(1, 'jayanth12345', 'Jayanth', 'Av', 'jayanth.cs17@bmsce.ac.in', 2147483647, 'wp_project1'),
(2, 'jay1233', 'jayanth', 'av', 'jaya@gmail.com', 2147483647, 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'jaya123', 'Jayanth', 'Av', 'jayanth12@gmail.com', 998020345, 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'test123', 'jay', 'av', 'aj@gmail.com', 8, ''),
(6, 'test', 'test', 'baba', 'test@gmail.com', 382932, 'test123'),
(7, 'gomma', 'jay', 'gandu', 'jay@fmail.com', 28083, '7ca32af8fd2c59e80c0ee51b0e4dde7c'),
(8, 'hey', 'hey', 'there', 'hey@gmail.com', 82032083, '49ffe4ca1f5039447f5c8e4ddf4b5dde'),
(9, 'testing', 'test', 'jay', 'jay2@gmail.com', 82802, '5bab541acd761a3093d7c4202b6e1da9'),
(10, 'testing123', 'Mike', 'Test', 'mike@gmail.com', 2308303, '4c3e1ec04215f69d6a8e9c023c9e4572'),
(11, 'joey', 'joeye', 'eye', 'ajeuy@gmail.com', 20323, '31d8c2fe81a635bef93315aa8234c1a0'),
(12, 'gaand', 'gaand', 'testing', 'gaand@gmail.com', 8208203, 'a6ab927538c392303c3d88287ac0d099'),
(13, 'dummy', 'jay', 'av', 'jayaaa@gmail.com', 30233, '275876e34cf609db118f3d84b799a790'),
(14, 'jayanth123', 'Jayanth', 'Avv', 'jayaa@gmail.com', 2147483647, 'f0e7d0d17cff891edbc9cdf92dcd9297'),
(15, 'dummy12', 'dummy', 'account', 'acco@gmail.com', 2942423, '851fdee206c1eec10cee5ec8e8962af2'),
(16, 'final', 'Final', 'Testing', 'final@gmail.com', 2147483647, 'd81aa7d5d5aa1fa946c4f8c91ad29242');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
