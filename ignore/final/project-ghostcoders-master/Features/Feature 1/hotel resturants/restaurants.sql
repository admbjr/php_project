-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 23, 2019 at 01:58 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `TEST_Nomadic_Escape`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL,
  `address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `name`, `description`, `address`) VALUES
(1, 'Boston Pizza', 'Pizza sports bar with an extensive menu.\r\nOpen for lunch and dinner', '2458 QUEEN STREET EAST  BRAMPTON, ON'),
(2, 'Shoeless Joe\'s Sports Grill', 'Late-night food · Outdoor seating · Great cocktails', '50 Biscayne Crescent, Brampton, ON'),
(3, 'Kelseys Original Roadhouse', 'Large portions of American fare & specialty cocktails in a casual setting with comfy booths & TVs.\r\nLate-night food · Outdoor seating · Great cocktails', '2870 Queen St E, Brampton, ON'),
(4, 'Turtle Jack\'s Airport', 'Stylish local chain eatery serving a menu of Canadian fare & global eats in a relaxed setting.\r\nLate-night food · Outdoor seating · Great cocktails', '20 Cottrelle Blvd, Brampton, ON');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
