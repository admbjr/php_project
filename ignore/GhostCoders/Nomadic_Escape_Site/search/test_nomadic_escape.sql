-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 07:46 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur', 11, 'pic07.jpg', 'ROSEM DENIAL', '2019-04-03', 'LifeStyle', ''),
(3, 'none of things', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetu', 11, 'pic07.jpg', 'ROSEM DENIAL', '2019-04-03', 'LifeStyle', ''),
(4, 'my nameknkjwqefehlkh', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur', 11, 'pic07.jpg', 'ROSEM DENIAL', '2019-04-03', 'LifeStyle', ''),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur', 11, 'pic07.jpg', 'ROSEM DENIAL', '2019-04-03', 'LifeStyle', ''),
(6, 'none of things', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetu', 11, 'pic07.jpg', 'ROSEM DENIAL', '2019-04-03', 'LifeStyle', ''),
(7, 'my nameknkjwqefehlkh', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur', 11, 'pic07.jpg', 'ROSEM DENIAL', '2019-04-03', 'LifeStyle', '');

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
(27, 11, 4, 'comment from 2');

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
  `destination` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`img_id`, `image`, `destination`) VALUES
(1, 'pic06.jpg', 'destination'),
(2, 'pic06.jpg', '0');

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
(7, 'established fact that a reader will be distracted ', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as thei'),
(8, 'industry\'s standard dummy text ever since the 1500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(9, 'established fact that a reader will be distracted ', 'established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less nor'),
(10, 'established fact that a reader will be distracted ', 'established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less nor\r\n'),
(11, 'established fact that a reader will be distracted ', 'established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less norestablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less nor');

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
  `review_id` int(11) NOT NULL,
  `review_name` varchar(255) NOT NULL,
  `review_content` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(17, 'pawan arora', 'iampavanarora@gmail.com');

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
(11, 'pawan', 'arora', 'iampavanarora@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'pic03.jpg', 'Admin', '2019-03-31'),
(12, 'simram', 'sharma', 'simran@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'pic03.jpg', 'Admin', '2019-03-31'),
(13, 'pawan', 'arora', 'pawan.arora@logicielsolutions.co.in', 'e10adc3949ba59abbe56e057f20f883e', 'pic03.jpg', 'Admin', '2019-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
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
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`user1_id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_post`, `num_likes`, `user_closed`, `friend_array`) VALUES
(16, 'chris', 'bell', 'chris_bell', 't@r.c', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/happy-1.png', 0, 0, 'no', ','),
(17, 'chris', 'bell', 'chris_bell_1', 't@r.cv', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/wink.png', 0, 0, 'no', ','),
(18, 'jake', 'state', 'jake_state', 'jake@g.com', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/wink.png', 0, 0, 'no', ','),
(19, 'josh', 'kk', 'josh_kk', 'josh@c.com', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/happy-4.png', 0, 0, 'no', ','),
(20, 'tom', 'ford', 'tom_ford', 'tf@g.m', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/happy-1.png', 0, 0, 'no', ','),
(21, 'kat', 'darn', 'kat_darn', 'kd@c.m', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/wink.png', 0, 0, 'no', ','),
(22, 'tim', 'can', 'tim_can', 'tim@s.m', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/wink.png', 0, 0, 'no', ','),
(23, 'jason', 'parks', 'jason_parks', 'jp@ne.com', '437599f1ea3514f8969f161a6606ce18', '2019-03-13', 'assets/images/profile_pics/defaults/happy.png', 0, 0, 'no', ','),
(24, 'Manpreet', 'Kaur', 'manpreet_kaur', 'manpreet.75289@gmail.com', '17de6b857063759d22198c58ba0c7c25', '2019-03-20', 'assets/images/profile_pics/defaults/happy-1.png', 0, 0, 'no', ',');

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
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`user1_id`);

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
  MODIFY `blog_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscriber_news_letter`
--
ALTER TABLE `subscriber_news_letter`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `user1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
