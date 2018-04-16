-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 04:04 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(60) NOT NULL,
  `body` longtext NOT NULL,
  `date_entered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `email`, `body`, `date_entered`) VALUES
(1, '1', 'Your starter is good', '2018-01-26 20:07:32'),
(2, 'hi@gmail.com', 'This is measdfkjas', '0000-00-00 00:00:00'),
(4, 'hei@gmail.com', 'This is measdfkjas', '0000-00-00 00:00:00'),
(6, 'anuragyadav@gmail.com', 'how are you This is measdfkjas', '0000-00-00 00:00:00'),
(8, 'hiiiii@gmail.com', 'hi how are you', '0000-00-00 00:00:00'),
(13, 'asdfljk@gmail.com', 'adf;lajfd;lka', '0000-00-00 00:00:00'),
(15, 'a@gmail.com', 'Fuck you', '0000-00-00 00:00:00'),
(19, 'lalpanne0084@gmail.com', 'your site is good', '0000-00-00 00:00:00'),
(20, 'anu@gmail.com', '', '0000-00-00 00:00:00'),
(21, 'tanu@gmail.com', 'Fuck You', '0000-00-00 00:00:00'),
(23, 'h@gmail.com', 'hi this is me', '2018-01-28 19:38:38'),
(24, 'cp@gmail.com', 'dsdgsdgfsgf', '2018-01-28 20:12:15'),
(25, 'darkmooon@gmail.com', 'Hiiiiiiii', '2018-01-29 11:42:16'),
(26, 'salman@gmail.com', 'this is my feedback', '2018-01-29 13:09:04'),
(27, 'sfdasa@gmail.com', 'asfdasdfasdfasdfsadfsdaf', '2018-01-29 21:08:23'),
(28, 'sarvesh@gmail.com', 'this is my feedback', '2018-01-29 23:30:31'),
(32, 'ausaf78650@gmail.com', 'this is the best one', '2018-01-31 15:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `gender_id` int(10) UNSIGNED NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL DEFAULT 'Male'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`gender_id`, `gender`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `info` varchar(100) DEFAULT NULL,
  `price` int(4) NOT NULL,
  `date_entered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `category_id`, `name`, `info`, `price`, `date_entered`) VALUES
(1, 2, 'samosa', 'this is our samosa which is best', 5, '2018-01-28 13:19:14'),
(3, 3, 'Maggi', 'University canteen make best maggi', 10, '2018-01-28 18:23:16'),
(4, 2, 'asfd', 'asdf', 32, '0000-00-00 00:00:00'),
(5, 2, 'Chola', 'pudi chola', 100, '0000-00-00 00:00:00'),
(6, 1, 'adsf', 'afds', 89, '0000-00-00 00:00:00'),
(7, 1, 'ADSas', 'safd', 100, '0000-00-00 00:00:00'),
(9, 3, 'Kadahi Panner', 'Anuradha serves worst food in the contry', 100, '0000-00-00 00:00:00'),
(10, 2, 'Item', 'about the item', 44, '0000-00-00 00:00:00'),
(11, 1, 'ewsargsad', 'sadf', 100, '0000-00-00 00:00:00'),
(12, 2, 'asdfsafdsaf', 'adsf', 100, '2018-01-28 19:25:28'),
(13, 2, 'Pudi', 'this is pudi', 23, '2018-01-28 20:13:15'),
(14, 1, 'sdfg', 'sdfg', 100, '2018-01-29 04:17:09'),
(15, 2, 'Pannerer', 'asfdsadfsadf', 100, '2018-01-29 04:17:22'),
(16, 2, 'sadfsadf', 'asfd', 34, '2018-01-29 04:17:31'),
(17, 2, 'Pizza', 'THis is pizza', 85, '2018-01-29 11:40:58'),
(19, 3, 'Adi Masala', 'This is best', 100, '2018-01-29 23:31:56'),
(20, 2, 'Sakoda', 'Desi Soup, If you wish...', 45, '2018-01-30 04:40:26'),
(21, 2, 'Lunch Item', 'THis is lunch item', 45, '2018-01-30 21:31:56'),
(24, 2, 'Mix Vage', 'this is mix vage', 50, '2018-01-30 21:34:23'),
(25, 3, 'asfdkjh', 'akjfl', 23, '2018-01-30 21:38:22'),
(27, 2, 'a;ldkfja;fdlkasj;kl', 'adfka', 100, '2018-01-30 21:38:59'),
(28, 2, 'dsfgafafafafdaa', 'asfa', 12, '2018-01-30 21:40:59'),
(29, 3, 'dsfgafafafafdaadsg', 'asfaasfdas', 100, '2018-01-30 21:43:25'),
(31, 2, 'kfdj;kldfaj', 'sadsdfgds', 100, '2018-01-30 21:44:38'),
(32, 1, 'Breakfast', 'this isa the', 60, '2018-01-31 15:10:32'),
(34, 1, 'Samosasa', 'ABE BHUKKHA KHI KE SAMOSA KHANA HAI KYA TO AA JAO\r\nHI THIS IS ME ANURAG YADAV\r\nAND WHO ARE YOU', 100, '2018-01-31 22:00:20'),
(35, 1, 'How are You', 'ABE BHUKKHA KHI KE SAMOSA KHANA HAI KYA TO AA JAO HI THIS IS ME ANURAG YADAV AND WHO ARE YOU\r\nABE BH', 50, '2018-01-31 22:51:47'),
(36, 1, 'Rabdi', 'This is rabdi', 100, '2018-02-01 03:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `menu_category`
--

CREATE TABLE `menu_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_category`
--

INSERT INTO `menu_category` (`category_id`, `name`) VALUES
(3, 'Dinner'),
(2, 'Lunch'),
(1, 'Starter');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `table_no` int(10) UNSIGNED NOT NULL,
  `table_datetime` datetime NOT NULL,
  `people` int(10) UNSIGNED NOT NULL,
  `date_entered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `user_id`, `table_no`, `table_datetime`, `people`, `date_entered`) VALUES
(18, 28, 3, '2018-01-18 12:00:00', 1, '2018-01-31 01:47:30'),
(19, 24, 6, '2018-01-09 10:00:00', 1, '2018-01-31 03:14:16'),
(22, 2, 10, '2018-01-09 10:00:00', 1, '2018-01-31 03:15:29'),
(24, 29, 2, '2018-02-01 12:00:00', 3, '2018-01-31 15:06:03'),
(25, 2, 1, '2018-02-07 10:00:00', 1, '2018-02-02 07:23:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `middle_name` varchar(60) DEFAULT NULL,
  `last_name` varchar(60) DEFAULT NULL,
  `gender_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` char(40) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `address` longtext NOT NULL,
  `date_entered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `gender_id`, `email`, `pass`, `mobile`, `address`, `date_entered`) VALUES
(1, 'fuck', 'you', '', 1, 'anufz00@gmail.com', 'e727d1464ae12436e899a726da5b2f11d8381b26', '83', 'want to know my address fuck you!!!!!!', '2018-01-23 04:02:24'),
(2, 'Hello', 'asdf', '', 2, 'anu@gmail.com', 'SHA1(hi)', '66925', 'asfasf', '2018-01-25 04:48:32'),
(3, 'Dark', 'Middle', '', 2, 'anurag@gmail.com', 'SHA1(anu)', '653217', 'safdasfyasoiu', '2018-01-25 10:58:26'),
(5, 'Dark', 'Middle', '', 2, 'anuragfz@gmail.com', 'SHA1(123)', '653217', 'safdasfyasoiuSDFG', '2018-01-25 11:00:57'),
(6, 'anuragaf', 'klfsj', '', 1, 'hiii@gmail.com', 'SHA1(op)', '993515352', 'skajfdhalskj', '2018-01-26 20:56:15'),
(7, 'panne', '', '', 1, 'lalpanne0084@gmail.com', 'SHA1(123)', '9648004984', 'Tagore Bhawan ,room no.F-17 \r\nMMMUT GKP', '2018-01-27 01:43:47'),
(8, 'sakjdf', 'aksjfhalkjafl', '', 1, 'ag@gmail.com', 'SHA1(anu)', '5567685', 'adsfsa', '2018-01-27 17:13:03'),
(9, 'asfd', 'safdlkjh', '', 1, 'y@gmaoil.com', 'SHA1(you)', '57463', 'sadfsa', '2018-01-27 17:16:38'),
(10, 'ifrsts', '', '', 1, 'j@gmail.com', 'SHA1(hi)', '567658', '56765', '2018-01-27 17:31:18'),
(11, 'first', '', '', 2, 'k@gmail.com', 'SHA1(pass)', '35434352', 'asdfkjhgasfj', '2018-01-27 17:32:38'),
(16, 'first', '', '', 2, 'k@gmail.com', 'SHA1(pass)', '35434352', 'asdfkjhgasfj', '2018-01-27 18:11:21'),
(17, 'first', '', '', 2, 'k@gmail.com', 'SHA1(pass)', '35434352', 'asdfkjhgasfj', '2018-01-27 18:12:38'),
(18, 'first', '', '', 2, 'k@gmail.com', 'SHA1(pass)', '35434352', 'asdfkjhgasfj', '2018-01-27 18:19:06'),
(19, 'first', '', '', 2, 'k@gmail.com', 'SHA1(pass)', '35434352', 'asdfkjhgasfj', '2018-01-27 18:19:09'),
(20, 'first', '', '', 2, 'k@gmail.com', 'SHA1(pass)', '35434352', 'asdfkjhgasfj', '2018-01-27 18:19:32'),
(21, 'anu', 'asfsa', '', 1, 'youy@gmail.com', 'SHA1(i)', '58768575', 'askdfjhsa', '2018-01-27 18:57:37'),
(22, 'Anurag', '', '', 2, 'dark@gmail.com', 'hello', '969696', 'tagore bhawan', '2018-01-28 12:00:40'),
(23, 'Anurag', '', '', 2, 'darkMOON@gmail.com', 'SHA1(\'ASD\')', '969696', 'tagore bhawan', '2018-01-28 12:01:53'),
(24, 'cp', '', '', 1, 'cp@gmail.com', 'cpp', '6522', 'asdf', '2018-01-28 20:11:55'),
(25, 'First', 'Middl', '', 2, 'tanuT@gmail.com', 'io', '895623', 'my addresss', '2018-01-29 11:43:37'),
(26, 'salman', '', '', 1, 'salman@gmail.com', 'salman', '96969696', 'ambedkar', '2018-01-29 13:07:45'),
(27, 'sarvesh', '', '', 1, 'sarvesh@gmail.com', 'sar', '9935132239', 'tagore bhawan f-24', '2018-01-29 23:30:04'),
(28, 'First', '', '', 2, 'how@gmail.com', 'p', '369', 'safdsafdsa', '2018-01-31 01:35:13'),
(29, 'Ausaf', 'Hussain', '', 1, 'ausaf78650@gmail.com', '12345', '9760092797', 'xnf', '2018-01-31 15:05:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `date_entered` (`date_entered`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`gender_id`),
  ADD UNIQUE KEY `gender` (`gender`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `name_2` (`name`);

--
-- Indexes for table `menu_category`
--
ALTER TABLE `menu_category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`),
  ADD UNIQUE KEY `table_no` (`table_no`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `table_no_2` (`table_no`),
  ADD KEY `date_entered` (`date_entered`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `gender_id` (`gender_id`),
  ADD KEY `date_entered` (`date_entered`),
  ADD KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `gender_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `menu_category`
--
ALTER TABLE `menu_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `menu_category` (`category_id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`gender_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
