-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 07:28 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_placement1`
--

CREATE TABLE `booking_placement1` (
  `Booking_number` int(11) NOT NULL,
  `id` int(30) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Carnumber` varchar(30) NOT NULL,
  `Bookingtime` time(6) NOT NULL,
  `Returntime` time(6) NOT NULL,
  `Pickupfrom` varchar(30) NOT NULL,
  `Passengers` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_placement1`
--

INSERT INTO `booking_placement1` (`Booking_number`, `id`, `Destination`, `Carnumber`, `Bookingtime`, `Returntime`, `Pickupfrom`, `Passengers`) VALUES
(58, 5, 'Location-2', 'Car-1', '01:00:00.000000', '03:00:00.000000', 'Location-3', 3),
(59, 5, 'Location-1', 'Car-1', '07:00:00.000000', '08:00:00.000000', 'Location-2', 2),
(60, 6, 'Location-1', 'Car-3', '04:00:00.000000', '06:00:00.000000', 'Location-2', 1),
(61, 7, 'Location-1', 'Car-2', '06:00:00.000000', '17:00:00.000000', 'Location-2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(5, 'Hamim', 'hamimdc@gmail.com', '46f94c8de14fb36680850768ff1b7f2a'),
(6, 'abid', 'abid@gmail.com', '46f94c8de14fb36680850768ff1b7f2a'),
(7, 'nawsheen', 'nawsheenpromy@gmail.com', '46f94c8de14fb36680850768ff1b7f2a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_placement1`
--
ALTER TABLE `booking_placement1`
  ADD PRIMARY KEY (`Booking_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_placement1`
--
ALTER TABLE `booking_placement1`
  MODIFY `Booking_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
