-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 07:51 PM
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
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `answer`) VALUES
(1, 'Bunnies are really beautiful'),
(2, 'Roses are red'),
(3, 'Currently, Nomadic Escape is not hiring. However, please submit your resume and we will contact you as soon as there is an opening.');

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
(3, 'none of things', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetu', 11, 'pic07.jpg', 'ROSEM DENIAL', '2019-04-03', 'LifeStyle', ''),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur', 11, 'pic07.jpg', 'ROSEM DENIAL', '2019-04-03', 'LifeStyle', ''),
(6, 'none of things', '  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectet', 11, 'headline1.jpeg', 'ROSEM DENIAL', '2019-04-03', 'Technology', ''),
(7, 'my nameknkjwqefehlkh', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur', 11, 'pic07.jpg', 'ROSEM DENIAL', '2019-04-03', 'LifeStyle', ''),
(8, 'BREAKING DOWN SEATTLEï¿½S BEER SCENE', 'BREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBRE', 11, 'asideimage1.jpg', 'error-class', '2019-04-15', 'Entertainment', ''),
(9, 'Lorem ipsum dolor sit amet, consectetur adipisicin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur', 11, 'asideimage1.jpg', 'ROSEM DENIAL', '2019-04-17', 'Marketing', ''),
(10, 'BREAKING DOWN SEATTLEï¿½S BEER SCENE', 'BREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBRE', 11, 'asideimage1.jpg', 'error-class', '2019-04-15', 'Entertainment', ''),
(11, 'my nameknkjwqefehlkh', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur', 11, 'pic07.jpg', 'ROSEM DENIAL', '2019-04-03', 'LifeStyle', ''),
(12, 'none of things', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetu', 11, 'pic07.jpg', 'ROSEM DENIAL', '2019-04-03', 'LifeStyle', ''),
(13, 'BREAKING DOWN SEATTLEï¿½S BEER SCENE', 'BREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBREAKING DOWN SEATTLEï¿½S BEER SCENEBRE', 11, 'asideimage1.jpg', 'error-class', '2019-04-15', 'Entertainment', '');

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
  `user_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL
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
(15, 'headline3.jpeg', 'Incredible India', 'India', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `question_id` int(11) NOT NULL,
  `question` varchar(500) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(8, 'asideimage.jpg', 'MUMBAi', 'MY NAME'),
(9, 'headline3.jpeg', 'AMERICA', 'something here what you wantsomething here what you wantsomething here what you want'),
(10, 'headline3.jpeg', 'AMERICA', 'something here what you wantsomething here what you wantsomething here what you want'),
(11, 'asideimage.jpg', 'AFGAN', 'MY NAME');

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
('I have been there! nice ', 21, 13, 11);

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
(21, 'Admin', 'Admin', 'admin@gmail.com', 'e3afed0047b08059d0fada10f400c1e5', 'articleimage1.jpg', 'Admin', '2019-04-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`);

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
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`des_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `fk_answers_id` (`answer_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`img_id`);

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
  MODIFY `blog_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `des_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscriber_news_letter`
--
ALTER TABLE `subscriber_news_letter`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `fk_answers_id` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`answer_id`);

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