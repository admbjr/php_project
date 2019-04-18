-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 09:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_nomadic_escape`
--
CREATE DATABASE IF NOT EXISTS `test_nomadic_escape1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test_nomadic_escape1`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(60) NOT NULL,
  `admin_pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_user`, `admin_pass`) VALUES
(1, 'admin1', 'abc123'),
(2, 'admin2', 'abc123'),
(3, 'admin3', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(20) NOT NULL,
  `blog_name` varchar(50) NOT NULL,
  `blog_content` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `blog_category` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_name`, `blog_content`, `user_id`, `image`, `author`, `created_at`, `blog_category`, `comment`) VALUES
(5, 'My first blog', 'I love nature. I like to roam around and explore new places.', 11, 'pic07.jpg', 'Manpreet Kaur', '2019-04-03', 'LifeStyle', ''),
(9, 'Travel', 'I love travelling. I want to explore this world!', 11, 'headline3.jpeg', 'Aman Singh', '2019-04-17', 'Technology', ''),
(11, 'Entertainment', ' Canada is a place for entertainment. We have a lot of things to do here...', 11, 'pic04.jpg', 'John Smith', '2019-04-03', 'Entertainment', ''),
(14, 'Another Blog', 'My blog :)', 21, 'pic02.jpg', 'Christine ', '2019-04-18', 'Tour', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`comment_id`, `user_id`, `blog_id`, `comment`) VALUES
(1, 11, 3, 'no ine'),
(2, 11, 2, 'comment from 2'),
(3, 11, 2, 'comment from 2'),
(4, 11, 3, 'no one'),
(5, 11, 3, 'no one'),
(6, 11, 2, 'think once'),
(7, 11, 6, 'selected'),
(8, 11, 6, 'selected'),
(9, 11, 2, 'comment from 2'),
(10, 11, 2, 'lastone'),
(11, 11, 2, 'fds'),
(12, 11, 2, 'agin on'),
(13, 11, 2, 'agin on'),
(14, 11, 2, 'agin on'),
(15, 11, 2, 'agin on'),
(16, 11, 4, 'settele once'),
(17, 11, 2, 'test'),
(18, 11, 2, 'test'),
(19, 11, 2, 'test'),
(21, 11, 3, 'test'),
(22, 11, 3, 'another test'),
(23, 11, 3, 'another test'),
(24, 11, 3, 'another test'),
(25, 11, 4, 'comment from 2'),
(26, 11, 4, 'comment from 2'),
(27, 11, 4, 'comment from 2'),
(28, 11, 2, ''),
(29, 11, 2, 'comment from 2'),
(30, 11, 2, ''),
(31, 11, 2, ''),
(32, 11, 2, 'comment from 2'),
(33, 11, 2, '15');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_email` varchar(200) NOT NULL,
  `contact_subject` varchar(200) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `des_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `caption` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`des_id`, `image`, `caption`, `country`, `city`) VALUES
(13, 'pic03.jpg', 'Home of maple syrup', 'Canada', 'Toronto'),
(15, 'headline3.jpeg', 'Incredible India', 'India', 'Delhi'),
(16, 'pic06.jpg', 'Beautiful Island', 'Mauritius', 'Port Louis');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `questions` text NOT NULL,
  `answers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `questions`, `answers`) VALUES
(1, 'Is account registration required?', 'Account registration at Nomadic Escape is required for users to access website.\r\n'),
(2, 'Can I submit my own pictures to this website?\r\n', 'YES! All of the content in the gallery has been submitted by the community. You are encouraged to contribute. All credits are published along with the resources.\r\n'),
(3, 'What are the fees for using this website?\r\n', 'Everything is free!\r\n'),
(4, 'Can post a link to my business page for free?\r\n', 'If you want to promote your company on our website, please send us an email and we will send you our rates. info@nomadicescape.com\r\n'),
(5, 'Can anyone join this website?\r\n', 'YES! Every and anyone can join Nomadic Escape and share all content.\r\n'),
(6, 'adadadad', 'adadada'),
(8, 'asdadasd', 'adadadadada'),
(9, 'adadada', 'adadadd');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `img_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `caption` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`img_id`, `image`, `destination`, `caption`) VALUES
(8, 'asideimage.jpg', 'MUMBAI', 'Mumbai is the heart of India'),
(12, 'asideimage1.jpg', 'Trinidad', 'Nice place'),
(13, 'pic01.jpg', 'usa', 'I must go there again. Wonderful place!'),
(14, 'pic07.jpg', 'France', 'Nice place');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(60) NOT NULL,
  `area` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `name`, `description`, `address`, `area`) VALUES
(9, 'Hilton', 'free breakfast and wifi', '123 airport rd', 'ajax'),
(10, 'Marriott', 'Free wifi free parking', '123 humber drive', 'toronto'),
(11, 'Monte Carlo', 'Free parking free wifi free breakfast', '123 memory lane', 'brampton');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `user_to`, `user_from`, `body`, `date`, `opened`, `viewed`, `deleted`, `user_id`) VALUES
(1, 'allan', 'jason', 'hey how are you', '2019-02-28 05:13:13', 'yes', 'yes', 'no', NULL),
(2, 'jason', 'allan', 'i am ok how are you', '2019-02-28 07:17:10', 'yes', 'no', 'no', NULL),
(3, 'jenny', 'adam', 'im hungry', '2019-02-28 07:17:10', 'no', 'no', 'no', NULL),
(4, 'jessoca', 'jeff', 'im bored', '2019-02-13 12:25:20', 'yes', 'yes', 'no', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE `news_letter` (
  `news_id` int(10) NOT NULL,
  `news_title` varchar(50) NOT NULL,
  `news_body` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_letter`
--

INSERT INTO `news_letter` (`news_id`, `news_title`, `news_body`) VALUES
(9, 'established fact that a reader will be distracted ', 'established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less nor'),
(10, 'established fact that a reader will be distracted ', 'established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less nor\r\n'),
(11, 'established fact that a reader will be distracted ', 'established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less nor'),
(12, 'established fact that a reader will be distracted ', 'established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less nor'),
(13, 'established fact that a reader will be distracted ', 'established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less nor'),
(14, 'established fact that a reader will be distracted ', 'established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less nor');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `post_time` datetime NOT NULL,
  `post_body` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL,
  `address` varchar(60) NOT NULL,
  `area` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `name`, `description`, `address`, `area`) VALUES
(1, 'Boston Pizza', 'Pizza sports bar with an extensive menu.\r\nOpen for lunch and dinner', '2458 QUEEN STREET EAST  BRAMPTON, ON', ''),
(2, 'Shoeless Joe\'s Sports Grill', 'Late-night food · Outdoor seating · Great cocktails', '50 Biscayne Crescent, Brampton, ON', 'wwwww'),
(3, 'Kelseys Original Roadhouse', 'Large portions of American fare & specialty cocktails in a casual setting with comfy booths & TVs.\r\nLate-night food · Outdoor seating · Great cocktails', '2870 Queen St E, Brampton, ON', ''),
(4, 'Turtle Jack\'s Airport', 'Stylish local chain eatery serving a menu of Canadian fare & global eats in a relaxed setting.\r\nLate-night food · Outdoor seating · Great cocktails', '20 Cottrelle Blvd, Brampton, ON', ''),
(15, 'My Billing Account', 'wwwww', 'wwww', 'wwwww'),
(27, 'N00318388_a1', 'good food', '100 Speedwell St', 'pickering'),
(28, 'test', 'gggg', '100 Speedwell St', 'brampton'),
(29, '', '', '', ''),
(30, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `des_id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review`, `user_id`, `des_id`, `review_id`) VALUES
('test', 11, 5, 1),
('if it is ', 11, 10, 2),
('mera man', 11, 5, 5),
('mera man', 11, 9, 6),
('my fav', 11, 8, 7),
('ddd', 20, 12, 8),
('I have been there! nice ', 21, 13, 11),
('i love there', 22, 13, 12);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_news_letter`
--

CREATE TABLE `subscriber_news_letter` (
  `subscriber_id` int(11) NOT NULL,
  `subscriber_name` varchar(30) NOT NULL,
  `subscriber_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber_news_letter`
--

INSERT INTO `subscriber_news_letter` (`subscriber_id`, `subscriber_name`, `subscriber_email`) VALUES
(2, 'pawan arora', 'iampavanarora@gmail.com'),
(5, 'blogandfilterCanada', 'pawan.arora@logicielsolutions.co.in'),
(16, 'pawan arora', 'iampavanarora@gmail.com'),
(17, 'pawan arora', 'iampavanarora@gmail.com'),
(18, 'pawan arora', 'iampavanarora@gmail.com'),
(19, 'pawan arora', 'iampavanarora@gmail.com'),
(20, 'pawan arora', 'iampavanarora@gmail.com'),
(21, 'pawan arora', 'iampavanarora@gmail.com'),
(22, 'pawan arora', '123@gmail.com'),
(23, 'pawan arora', '123@gmail.com'),
(24, 'pawan arora', '123@gmail.com'),
(25, 'pawan arora', '123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `s_question_id` int(11) NOT NULL,
  `s_question` varchar(500) NOT NULL,
  `s_feedback` varchar(1000) NOT NULL,
  `s_username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `sign_up_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `profile_picture`, `role`, `sign_up_date`) VALUES
(11, 'Manpreet', 'Kaur', 'sidhum317@gmail.com', '17de6b857063759d22198c58ba0c7c25', 'pic03.jpg', 'Admin', '2019-03-31'),
(20, 'Amandeep', 'Kaur', 'aman@gmail.com', '\r\n7fcefd57e1b4dd0aa950faffd1ef99a9', 'asideimage1.jpg', 'User', '2019-04-16'),
(21, 'Admin', 'Admin', 'admin@gmail.com', 'e3afed0047b08059d0fada10f400c1e5', 'articleimage1.jpg', 'Admin', '2019-04-18'),
(22, 'Reina', 'Sukraj', 'reina.sukraj@gmail.com', '202cb962ac59075b964b07152d234b70', 'pic02.jpg', 'User', '2019-04-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`des_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `subscriber_news_letter`
--
ALTER TABLE `subscriber_news_letter`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`s_question_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `des_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscriber_news_letter`
--
ALTER TABLE `subscriber_news_letter`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
