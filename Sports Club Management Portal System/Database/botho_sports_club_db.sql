-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 07:54 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `botho_sports_club_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `Aid` int(12) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`Aid`, `Username`, `Password`) VALUES
(1, 'admin@gmail.com', 'admin'),
(2, 'admin2@gmail.com', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `Club_ID` int(12) NOT NULL,
  `ClubName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`Club_ID`, `ClubName`) VALUES
(1, 'Tennis'),
(2, 'BasketBall'),
(3, 'FootBall'),
(4, 'VolleyBall'),
(5, 'Swimming'),
(6, 'Chess');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `Coach_ID` int(12) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `ClubName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`Coach_ID`, `Username`, `Password`, `ClubName`) VALUES
(1, 'Pete', 'pete', 'Tennis'),
(3, 'Stan', 'stan', 'BasketBall');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FId` int(12) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(15) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FId`, `Name`, `Email`, `Phone`, `Message`) VALUES
(1, 'Keneilwe A. Makoba', 'keneilwealicem@gmail.com', 76135489, 'I love the way your website looks. nice work!'),
(4, 'Susan', 'sus@gmail.com', 74521587, 'well..trial'),
(5, 'Trial', 'trial@gmail.com', 74258410, 'trial');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Member_ID` int(12) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone Number` int(15) NOT NULL,
  `ClubName` varchar(30) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Member_ID`, `Firstname`, `Lastname`, `Gender`, `Email`, `Phone Number`, `ClubName`, `Image`) VALUES
(6, 'Bob', 'Fart', 'Male', 'bob@gmail.com', 76135489, 'Tennis', 'coach 2.jpg'),
(45, 'Mike', 'Larry', 'Male', 'mike@gmail.com', 74521587, 'Tennis', 'basketball.jpg'),
(49, 'test', 'test', 'female', 'test@gmail.com', 74142585, 'Tennis', 'cute.jpg'),
(50, 'test', 'test', 'Male', 'test@gmail.com', 71212121, 'BasketBall', 'hair 6.jpg'),
(52, 'Dave', 'Moris', 'Male', 'dmoris@gmail.com', 74142585, 'BasketBall', 'IMG_6404.JPG'),
(53, 'amar', 'amar', 'Male', 'amar@gmail.com', 71210214, 'Tennis', '546b00ac81935133d1b627a27f3dc765.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Nid` int(12) NOT NULL,
  `ClubName` varchar(30) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `News` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Nid`, `ClubName`, `Title`, `News`) VALUES
(2, 'Tennis', 'LOSSES', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac diam et odio interdum hendrerit. Proin cursus vel mi fermentum viverra. Morbi ornare tortor et nibh commodo, et ornare erat ullamcorper. Donec blandit feugiat augue, ut facilisis mauris bibendum id. In hac habitasse platea dictumst. Sed eleifend nec risus id iaculis. Donec nisl nisl, faucibus et justo vel, varius pellentesque lorem. In hac habitasse platea dictumst. Cras nec tellus et neque aliquam cursus non ut orci. Aenean fringilla, elit sit amet pretium molestie, augue justo vehicula arcu, et tincidunt nisl nulla a ipsum. Pellentesque eleifend erat aliquet ipsum porta, id dignissim purus dapibus. Mauris tincidunt neque eget volutpat ornare. Ut laoreet dui non enim lobortis, eu maximus odio tincidunt. Etiam tempor venenatis libero, eu pharetra tellus pellentesque non.\r\n\r\nUt elit est, faucibus vel ultricies et, pellentesque sed metus. Sed laoreet placerat tincidunt. Nullam vel tellus sollicitudin, eleifend quam luctus, sagittis erat. Nulla convallis velit sed tortor congue bibendum. Curabitur facilisis aliquet sagittis. Duis scelerisque lobortis leo quis fermentum. Vivamus at nunc ante. Fusce sed porttitor lectus, sit amet maximus risus.\r\n\r\nNulla facilisi. Sed quis sollicitudin quam. Nullam nec ex diam. Nunc ultrices egestas condimentum. Vestibulum facilisis fermentum purus, nec tempor leo. Donec nec risus fermentum, facilisis felis venenatis, tempus dolor. Morbi vel nisl velit. Nulla metus urna, suscipit sed consectetur eget, tristique a ligula. Duis malesuada, mi eu venenatis ultricies, sapien dui gravida leo, ut molestie ex elit vel elit. Sed gravida pellentesque magna eget vestibulum. Sed vitae malesuada lorem. Aliquam sit amet condimentum tortor. Maecenas condimentum risus eu massa congue ultricies. Fusce id nunc bibendum, sollicitudin nunc vitae, pulvinar tellus.\r\n\r\nPraesent semper tincidunt mi vitae facilisis. Integer at gravida tellus, ac feugiat dolor. Aliquam nec quam malesuada, varius orci sit amet, condimentum odio. Sed elementum a purus et molestie. Curabitur dapibus, ipsum non venenatis rutrum, augue nulla mattis ante, a lobortis lorem orci ac leo. Pellentesque nec odio a mauris elementum tincidunt ut vel tellus. Fusce sit amet facilisis neque, auctor lacinia justo. Ut varius consectetur ante ac facilisis. Ut et felis in mauris bibendum suscipit. Vestibulum ultricies, diam vel vulputate convallis, erat eros ornare dui, ut venenatis eros lorem quis turpis. Ut dapibus nisl congue nulla venenatis consectetur. Fusce ultricies ut velit eu iaculis.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae gravida dui. Donec non scelerisque ex. Fusce rhoncus consectetur pharetra. Nunc rutrum quam ut ante porta posuere nec id massa. Maecenas sed libero augue. Integer id purus sed magna faucibus consequat. Nullam ligula dolor, scelerisque et tortor eu, consectetur sagittis purus. Vivamus consectetur velit eget velit venenatis fringilla. Integer digniss'),
(3, 'Tennis', 'WINS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac diam et odio interdum hendrerit. Proin cursus vel mi fermentum viverra. Morbi ornare tortor et nibh commodo, et ornare erat ullamcorper. Donec blandit feugiat augue, ut facilisis mauris bibendum id. In hac habitasse platea dictumst. Sed eleifend nec risus id iaculis. Donec nisl nisl, faucibus et justo vel, varius pellentesque lorem. In hac habitasse platea dictumst. Cras nec tellus et neque aliquam cursus non ut orci. Aenean fringilla, elit sit amet pretium molestie, augue justo vehicula arcu, et tincidunt nisl nulla a ipsum. Pellentesque eleifend erat aliquet ipsum porta, id dignissim purus dapibus. Mauris tincidunt neque eget volutpat ornare. Ut laoreet dui non enim lobortis, eu maximus odio tincidunt. Etiam tempor venenatis libero, eu pharetra tellus pellentesque non.\r\n\r\nUt elit est, faucibus vel ultricies et, pellentesque sed metus. Sed laoreet placerat tincidunt. Nullam vel tellus sollicitudin, eleifend quam luctus, sagittis erat. Nulla convallis velit sed tortor congue bibendum. Curabitur facilisis aliquet sagittis. Duis scelerisque lobortis leo quis fermentum. Vivamus at nunc ante. Fusce sed porttitor lectus, sit amet maximus risus.\r\n\r\nNulla facilisi. Sed quis sollicitudin quam. Nullam nec ex diam. Nunc ultrices egestas condimentum. Vestibulum facilisis fermentum purus, nec tempor leo. Donec nec risus fermentum, facilisis felis venenatis, tempus dolor. Morbi vel nisl velit. Nulla metus urna, suscipit sed consectetur eget, tristique a ligula. Duis malesuada, mi eu venenatis ultricies, sapien dui gravida leo, ut molestie ex elit vel elit. Sed gravida pellentesque magna eget vestibulum. Sed vitae malesuada lorem. Aliquam sit amet condimentum tortor. Maecenas condimentum risus eu massa congue ultricies. Fusce id nunc bibendum, sollicitudin nunc vitae, pulvinar tellus.\r\n\r\nPraesent semper tincidunt mi vitae facilisis. Integer at gravida tellus, ac feugiat dolor. Aliquam nec quam malesuada, varius orci sit amet, condimentum odio. Sed elementum a purus et molestie. Curabitur dapibus, ipsum non venenatis rutrum, augue nulla mattis ante, a lobortis lorem orci ac leo. Pellentesque nec odio a mauris elementum tincidunt ut vel tellus. Fusce sit amet facilisis neque, auctor lacinia justo. Ut varius consectetur ante ac facilisis. Ut et felis in mauris bibendum suscipit. Vestibulum ultricies, diam vel vulputate convallis, erat eros ornare dui, ut venenatis eros lorem quis turpis. Ut dapibus nisl congue nulla venenatis consectetur. Fusce ultricies ut velit eu iaculis.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae gravida dui. Donec non scelerisque ex. Fusce rhoncus consectetur pharetra. Nunc rutrum quam ut ante porta posuere nec id massa. Maecenas sed libero augue. Integer id purus sed magna faucibus consequat. Nullam ligula dolor, scelerisque et tortor eu, consectetur sagittis purus. Vivamus consectetur velit eget velit venenatis fringilla. Integer dignissi'),
(4, 'BasketBall', 'WINS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 'BasketBall', 'LOSSES', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `Req_ID` int(12) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone Number` int(11) NOT NULL,
  `ClubName` varchar(30) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`Req_ID`, `Firstname`, `Lastname`, `Gender`, `Email`, `Phone Number`, `ClubName`, `Image`) VALUES
(4, 'Mike', 'Larry', 'Male', 'mike@gmail.com', 74521587, 'FootBall', 'coach 3.jpg'),
(6, 'Bob', 'Fart', 'Male', 'bob@gmail.com', 76135489, 'Tennis', 'coach 2.jpg'),
(45, 'Mike', 'Larry', 'Male', 'mike@gmail.com', 74521587, 'Tennis', 'basketball.jpg'),
(49, 'test', 'test', 'female', 'test@gmail.com', 74142585, 'Tennis', 'cute.jpg'),
(50, 'test', 'test', 'Male', 'test@gmail.com', 71212121, 'BasketBall', 'hair 6.jpg'),
(52, 'Dave', 'Moris', 'Male', 'dmoris@gmail.com', 74142585, 'BasketBall', 'IMG_6404.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Std_ID` int(12) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Std_ID`, `Firstname`, `Lastname`, `Email`, `Password`) VALUES
(2, 'Keneilwe', 'Makoba', 'keneilwealicem@gmail.com', 'keneilwe'),
(3, 'Dave', 'Moris', 'dmoris@gmail.com', 'davemoris'),
(5, 'Mike', 'Larry', 'mike@gmail.com', 'mike'),
(6, 'Sarah', 'Sarah', 'sus@gmail.com', 'sar'),
(8, 'lil', 'lil', 'lil@gmail.com', 'lil'),
(9, 'amar', 'tha', 'amar@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `trainingschedule`
--

CREATE TABLE `trainingschedule` (
  `Sid` int(12) NOT NULL,
  `ClubName` varchar(50) NOT NULL,
  `TrainingType` varchar(50) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `FirstSession` varchar(30) NOT NULL,
  `SecondSession` varchar(30) NOT NULL,
  `TrainingDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainingschedule`
--

INSERT INTO `trainingschedule` (`Sid`, `ClubName`, `TrainingType`, `Location`, `FirstSession`, `SecondSession`, `TrainingDate`) VALUES
(1, 'Tennis', 'Crossfit', 'Tennis Court', '2pm - 4pm', '4pm - 6pm', '2021-11-11'),
(3, 'Tennis', 'Warm-Ups', 'Tennis Court', '2pm - 4pm', '4pm - 7pm', '2021-10-31'),
(4, 'BasketBall', 'Warm-Ups', 'BasketBall Court', '1pm - 3pm', '3pm - 6pm', '2021-11-16'),
(5, 'BasketBall', 'Finale Practice', 'IDM BasketBall Court', '1pm - 3pm', '3pm - 6pm', '2021-11-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`Club_ID`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`Coach_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FId`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Member_ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Nid`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`Req_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Std_ID`);

--
-- Indexes for table `trainingschedule`
--
ALTER TABLE `trainingschedule`
  ADD PRIMARY KEY (`Sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `Aid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `Club_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `Coach_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `Member_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `Nid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `Req_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Std_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trainingschedule`
--
ALTER TABLE `trainingschedule`
  MODIFY `Sid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
