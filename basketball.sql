-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 12:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basketball`
--

-- --------------------------------------------------------

--
-- Table structure for table `dribble`
--

CREATE TABLE `dribble` (
  `ID` int(11) NOT NULL,
  `Drills` varchar(100) NOT NULL,
  `Benefits` varchar(100) NOT NULL,
  `RulesAndRegulations` varchar(100) NOT NULL,
  `Attire` varchar(100) NOT NULL,
  `PlayPosition` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `BestBasketballTeam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dribble`
--

INSERT INTO `dribble` (`ID`, `Drills`, `Benefits`, `RulesAndRegulations`, `Attire`, `PlayPosition`, `Gender`, `BestBasketballTeam`) VALUES
(1, 'djh', 'yfhikl', 'gdk', 'gfdk', 'iugde', 'female', 'Strikers'),
(2, 'djh', 'yfhikl', 'gdk', 'gfdk', 'iugde', 'female', 'Dribble'),
(3, 'laying up', 'chance for a free shot', 'look at the hoop', 'shoes covering the ankle', 'point guard', 'male', 'Strikers'),
(4, 'dribble', 'strength', 'look at the opponent', 'knee protection', 'shooting guard', 'male', 'Strikers'),
(5, 'defensive lane sides', 'hand-eye coordination', 'look at the opponent', 'shoes covering the ankle', 'small forward', 'female', 'Dribble'),
(6, 'laying up', 'yfhikl', 'look at the opponent', 'gfdk', 'point guard', 'male', 'Strikers'),
(7, 'laying up', 'hand-eye coordination', 'gdk', 'shoes covering the ankle', 'point guard', 'male', 'Strikers'),
(8, 'shooting', 'more points', 'aim', 'hand gear', 'power forward', 'female', 'Sting'),
(9, 'passing ball', 'wide surface area', 'defence', 'shorts', 'center', 'male', 'Lake'),
(10, 'laying up', 'hand-eye coordination', 'look at the opponent', 'knee protection', 'shooting guard', 'female', 'Sting'),
(11, 'gdsslj', 'chance for a free shot', 'aim', 'hand gear', 'power forward', 'male', 'Bull'),
(12, 'laying up', 'hand-eye coordination', 'aim', 'knee protection', 'center', 'male', 'Sting');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `SecondName` varchar(100) NOT NULL,
  `TelephoneNumber` int(100) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `Team` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`ID`, `FirstName`, `SecondName`, `TelephoneNumber`, `EmailAddress`, `Team`) VALUES
(1, 'hsk', 'tuw', 648279, 'kautharah7@gmail.com', 'No'),
(2, 'kauthrah', 'mynameis xeres', 703507646, 'kautharahxeres7@gmail.com', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dribble`
--
ALTER TABLE `dribble`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dribble`
--
ALTER TABLE `dribble`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
