-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 16, 2019 at 02:23 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `TEST_Nomadic_Escape`
--
CREATE DATABASE IF NOT EXISTS `TEST_Nomadic_Escape` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `TEST_Nomadic_Escape`;

-- --------------------------------------------------------

--
-- Table structure for table `ADMIN`
--

CREATE TABLE `ADMIN` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(60) NOT NULL,
  `admin_pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ADMIN`
--

INSERT INTO `ADMIN` (`admin_id`, `admin_user`, `admin_pass`) VALUES
(1, 'admin1', 'abc123'),
(2, 'admin2', 'abc123'),
(3, 'admin3', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `ANSWERS`
--

CREATE TABLE `ANSWERS` (
  `answer_id` int(11) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ANSWERS`
--

INSERT INTO `ANSWERS` (`answer_id`, `answer`) VALUES
(1, 'Bunnies are really beautiful'),
(2, 'Roses are red'),
(3, 'Currently, Nomadic Escape is not hiring. However, please submit your resume and we will contact you as soon as there is an opening.');

-- --------------------------------------------------------

--
-- Table structure for table `BLOG`
--

CREATE TABLE `BLOG` (
  `blog_id` int(20) NOT NULL,
  `blog_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `blog_content` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commenting_blog`
--

CREATE TABLE `commenting_blog` (
  `comment_id` int(11) NOT NULL,
  `comment_body` varchar(255) NOT NULL,
  `commented_by` varchar(255) NOT NULL,
  `commented_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `CONTACT_FORM`
--

CREATE TABLE `CONTACT_FORM` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `FAQ`
--

CREATE TABLE `FAQ` (
  `question_id` int(11) NOT NULL,
  `question` varchar(500) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `GALLERY`
--

CREATE TABLE `GALLERY` (
  `img_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `caption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `MESSAGES`
--

CREATE TABLE `MESSAGES` (
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
-- Dumping data for table `MESSAGES`
--

INSERT INTO `MESSAGES` (`msg_id`, `user_to`, `user_from`, `body`, `date`, `opened`, `viewed`, `deleted`, `user_id`) VALUES
(1, 'allan', 'jason', 'hey how are you', '2019-02-28 05:13:13', 'yes', 'yes', 'no', NULL),
(2, 'jason', 'allan', 'i am ok how are you', '2019-02-28 07:17:10', 'yes', 'no', 'no', NULL),
(3, 'jenny', 'adam', 'im hungry', '2019-02-28 07:17:10', 'no', 'no', 'no', NULL),
(4, 'jessoca', 'jeff', 'im bored', '2019-02-13 12:25:20', 'yes', 'yes', 'no', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `POSTS`
--

CREATE TABLE `POSTS` (
  `post_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `post_time` datetime NOT NULL,
  `post_body` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `REVIEWS`
--

CREATE TABLE `REVIEWS` (
  `review_id` int(11) NOT NULL,
  `review_name` varchar(255) NOT NULL,
  `review_content` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SURVEY`
--

CREATE TABLE `SURVEY` (
  `s_question_id` int(11) NOT NULL,
  `s_question` varchar(500) NOT NULL,
  `s_feedback` varchar(1000) NOT NULL,
  `s_username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`user_id`, `first_name`, `last_name`, `gender`, `email`, `password`) VALUES
(1, 'Amanjot', 'Kaur', 'Female', 'aman@gmail.com', 'aman'),
(2, 'Sandeep', 'Dhaliwal', 'male', 'sandeep1235@gmail.com', 'dddd'),
(3, 'Manjot', 'Singh', 'Male', 'manjot@yahoo.com', 'manjot'),
(4, 'Manpreet', 'Kaur', 'Female', 'manpreet123@gmail.com', 'mnai');

-- --------------------------------------------------------

--
-- Table structure for table `USERS1`
--

CREATE TABLE `USERS1` (
  `user1_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `num_post` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `friend_array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `USERS1`
--

INSERT INTO `USERS1` (`user1_id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_post`, `num_likes`, `user_closed`, `friend_array`) VALUES
(16, 'chris', 'bell', 'chris_bell', 't@r.c', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/happy-1.png', 0, 0, 'no', ','),
(17, 'chris', 'bell', 'chris_bell_1', 't@r.cv', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/wink.png', 0, 0, 'no', ','),
(18, 'jake', 'state', 'jake_state', 'jake@g.com', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/wink.png', 0, 0, 'no', ','),
(19, 'josh', 'kk', 'josh_kk', 'josh@c.com', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/happy-4.png', 0, 0, 'no', ','),
(20, 'tom', 'ford', 'tom_ford', 'tf@g.m', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/happy-1.png', 0, 0, 'no', ','),
(21, 'kat', 'darn', 'kat_darn', 'kd@c.m', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/wink.png', 0, 0, 'no', ','),
(22, 'tim', 'can', 'tim_can', 'tim@s.m', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/wink.png', 0, 0, 'no', ','),
(23, 'jason', 'parks', 'jason_parks', 'jp@ne.com', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/happy.png', 0, 0, 'no', ',');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ADMIN`
--
ALTER TABLE `ADMIN`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ANSWERS`
--
ALTER TABLE `ANSWERS`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `BLOG`
--
ALTER TABLE `BLOG`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `commenting_blog`
--
ALTER TABLE `commenting_blog`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `CONTACT_FORM`
--
ALTER TABLE `CONTACT_FORM`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `FAQ`
--
ALTER TABLE `FAQ`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `fk_answers_id` (`answer_id`);

--
-- Indexes for table `GALLERY`
--
ALTER TABLE `GALLERY`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `MESSAGES`
--
ALTER TABLE `MESSAGES`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `POSTS`
--
ALTER TABLE `POSTS`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `REVIEWS`
--
ALTER TABLE `REVIEWS`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `SURVEY`
--
ALTER TABLE `SURVEY`
  ADD PRIMARY KEY (`s_question_id`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `USERS1`
--
ALTER TABLE `USERS1`
  ADD PRIMARY KEY (`user1_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ADMIN`
--
ALTER TABLE `ADMIN`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `BLOG`
--
ALTER TABLE `BLOG`
  MODIFY `blog_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commenting_blog`
--
ALTER TABLE `commenting_blog`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `GALLERY`
--
ALTER TABLE `GALLERY`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `MESSAGES`
--
ALTER TABLE `MESSAGES`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `USERS1`
--
ALTER TABLE `USERS1`
  MODIFY `user1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BLOG`
--
ALTER TABLE `BLOG`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `USERS` (`user_id`);

--
-- Constraints for table `commenting_blog`
--
ALTER TABLE `commenting_blog`
  ADD CONSTRAINT `commenting_blog_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `commenting_blog` (`comment_id`),
  ADD CONSTRAINT `commenting_blog_ibfk_2` FOREIGN KEY (`blog_id`) REFERENCES `commenting_blog` (`comment_id`);

--
-- Constraints for table `FAQ`
--
ALTER TABLE `FAQ`
  ADD CONSTRAINT `fk_answers_id` FOREIGN KEY (`answer_id`) REFERENCES `ANSWERS` (`answer_id`);

--
-- Constraints for table `MESSAGES`
--
ALTER TABLE `MESSAGES`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `USERS` (`user_id`);

--
-- Constraints for table `POSTS`
--
ALTER TABLE `POSTS`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `USERS` (`user_id`);

--
-- Constraints for table `REVIEWS`
--
ALTER TABLE `REVIEWS`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `USERS` (`user_id`);
