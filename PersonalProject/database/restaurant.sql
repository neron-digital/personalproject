-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 08:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `adrinks`
--

CREATE TABLE `adrinks` (
  `adrink_id` int(255) NOT NULL,
  `adrink_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `adrink_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adrinks`
--

INSERT INTO `adrinks` (`adrink_id`, `adrink_name`, `price`, `quantity`, `adrink_image`) VALUES
(1, 'Jack Daniels', 33, 0, 'jack.png');

-- --------------------------------------------------------

--
-- Table structure for table `burgers`
--

CREATE TABLE `burgers` (
  `burger_id` int(255) NOT NULL,
  `burger_name` varchar(255) NOT NULL,
  `burger_ingredients` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `burger_image` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `burgers`
--

INSERT INTO `burgers` (`burger_id`, `burger_name`, `burger_ingredients`, `price`, `quantity`, `burger_image`) VALUES
(1, 'Burger', 'Bun,Patty,Pickles,Tomatos,Ketchup,Mayo', 5, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `drink_id` int(255) NOT NULL,
  `drink_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `drink_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`drink_id`, `drink_name`, `price`, `quantity`, `drink_image`) VALUES
(1, 'Cola', 3, 0, 'cola.png'),
(3, '', 0, 0, ''),
(4, '', 0, 0, ''),
(5, '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `food_id` int(255) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_ingredients` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `food_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_id`, `food_name`, `food_ingredients`, `price`, `quantity`, `food_image`) VALUES
(3, 'pizza', 'tomato peperoni', 7, 0, 'plate1.png');

-- --------------------------------------------------------

--
-- Table structure for table `sandwiches`
--

CREATE TABLE `sandwiches` (
  `sandwich_id` int(255) NOT NULL,
  `sandwich_name` varchar(255) NOT NULL,
  `sandwich_ingredients` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `sandwich_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sandwiches`
--

INSERT INTO `sandwiches` (`sandwich_id`, `sandwich_name`, `sandwich_ingredients`, `price`, `quantity`, `sandwich_image`) VALUES
(1, 'Chicken Sandwich', 'Chicken meat,Tomato,Pickles,Cheese', 7, 0, 'sch.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `is_admin` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `confirm_password`, `is_admin`) VALUES
(1, 'Neron', 'Neron', 'neron@gmail.com', '$2y$10$14IRVAAbZNCWBXzLbWBYDOvIzVLzSG9wND4.OATJEf9uzOszx5ltG', '$2y$10$dtIVW4IZ2RtnqNL3lioDPul7SPWf672MezU7vCFrFaA2ERspAC4JW', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adrinks`
--
ALTER TABLE `adrinks`
  ADD PRIMARY KEY (`adrink_id`);

--
-- Indexes for table `burgers`
--
ALTER TABLE `burgers`
  ADD PRIMARY KEY (`burger_id`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`drink_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `sandwiches`
--
ALTER TABLE `sandwiches`
  ADD PRIMARY KEY (`sandwich_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adrinks`
--
ALTER TABLE `adrinks`
  MODIFY `adrink_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `burgers`
--
ALTER TABLE `burgers`
  MODIFY `burger_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `drink_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `food_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sandwiches`
--
ALTER TABLE `sandwiches`
  MODIFY `sandwich_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
