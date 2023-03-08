-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 02:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awc`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_ID` int(11) NOT NULL,
  `contact_Name` varchar(20) NOT NULL,
  `contact_Image` varchar(50) NOT NULL,
  `contact_Details` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_ID`, `contact_Name`, `contact_Image`, `contact_Details`) VALUES
(100, 'Phone Number', 'images/contactTitles/2.png', '(417)-123-3315'),
(101, 'Email', 'images/contactTitles/1.png', 'AWCoCreators@gmail.com'),
(102, 'Meetup', 'images/contactTitles/3.png', 'Fair Grove Fall Festival');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_ID` int(11) NOT NULL,
  `product_Name` varchar(25) NOT NULL,
  `product_Description` varchar(200) NOT NULL,
  `product_Stars` int(11) NOT NULL,
  `product_ImageSRC` varchar(35) NOT NULL,
  `product_Type` varchar(20) NOT NULL,
  `product_Price` varchar(10) NOT NULL,
  `product_weeklySpotlight` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_ID`, `product_Name`, `product_Description`, `product_Stars`, `product_ImageSRC`, `product_Type`, `product_Price`, `product_weeklySpotlight`) VALUES
(1, 'Wooden Mushroom', 'It\'s a wooden mushroom made from an evergreen that\'s been sealed using oil instead of polyurethane. It\'s a little under 4 inches tall As a diameter of about 2 1/2 inches.', -1, '1.png', 'Mushroom', '10.00', 1),
(2, 'Cedar Mushroom', 'It\'s a mushroom made from cedar and oiled with linseed oil', -1, '2.png', 'Mushroom', '5.00', 0),
(3, 'Wooden Bullet', '', -1, '3.png', 'Bullet', 'n/a', 0),
(4, 'Small Mushroom', '', -1, '4.png', 'Mushroom', 'n/a', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `user_Name` varchar(30) NOT NULL,
  `user_Email` varchar(50) DEFAULT NULL,
  `user_EmailAllowed` int(1) NOT NULL COMMENT 'Will be 1 if the user accepts emails, 0 if no',
  `user_Username` varchar(30) NOT NULL,
  `user_Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `user_Name`, `user_Email`, `user_EmailAllowed`, `user_Username`, `user_Password`) VALUES
(1, 'John Doe', 'jdoe@gmail.com', 1, 'JDoe', 'Password'),
(2, 'Jane Doe', 'jdoe2@gmail.com', 0, 'JaneD', 'Password'),
(9, 'Chloe', 'chloe.gertner.cg@gmail.com', 0, 'Waterfighter1', 'CyberFowl'),
(10, 'John', 'J@gmail.com', 0, 'JohnDoe', 'Password'),
(11, 'Anthony josling', 'ajsnakebite87@gmail.com', 0, 'AJSnakebite', 'I_love_Chloe!!!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
