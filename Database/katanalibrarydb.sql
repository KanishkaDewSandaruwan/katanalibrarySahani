-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 09:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katanalibrarydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`image`, `title`, `description`) VALUES
('post-07.jpg', 'Welcome! Karana Library', '<p>dfsddddddddddddddddddddddddddf</p>');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `email`, `phone`) VALUES
(6, 'Martin Wickramasingha', 'marting@gmail.com', 743664071),
(8, 'Henri Kaldera', 'kaldera@gmail.com', 713664071),
(9, 'Sujeewa Prasannarachchi', 'supersofttecno@gmail.com', 713664071);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_price` int(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `author_id` int(255) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `qnt` int(255) NOT NULL,
  `trn_date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `spc_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `book_price`, `description`, `author_id`, `cat_id`, `qnt`, `trn_date`, `image`, `spc_price`) VALUES
(26, 'Hath pana', 350, 'covod have', 6, 16, 9, '2021-04-23', 'download.jpg', 0),
(27, 'Madol Duwa', 850, 'kaniya', 6, 16, 19, '2021-04-23', '220px-MadolDoova.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `books_backup`
--

CREATE TABLE `books_backup` (
  `back_id` int(11) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `book_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_backup`
--

INSERT INTO `books_backup` (`back_id`, `book_title`, `description`, `image`, `book_id`) VALUES
(12, 'Grammar English', 'Order your foods', 'unnamed.png', '28');

-- --------------------------------------------------------

--
-- Table structure for table `book_cat`
--

CREATE TABLE `book_cat` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_cat`
--

INSERT INTO `book_cat` (`cat_id`, `cat_name`, `cat_image`) VALUES
(15, 'English Book', 'client2.jpg'),
(16, 'Naval', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `collect_id` int(11) NOT NULL,
  `member_id` varchar(255) NOT NULL,
  `book_id` varchar(255) NOT NULL,
  `trndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `getresevation`
--

CREATE TABLE `getresevation` (
  `res_id` int(11) NOT NULL,
  `book_ids` varchar(255) NOT NULL,
  `member_id` int(255) NOT NULL,
  `trn_date` date NOT NULL,
  `resrve_date` date NOT NULL,
  `accept` varchar(255) NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `getresevation`
--

INSERT INTO `getresevation` (`res_id`, `book_ids`, `member_id`, `trn_date`, `resrve_date`, `accept`, `return_date`) VALUES
(2, '26,27,28', 2, '2021-04-23', '2021-04-16', 'Completed', '2021-04-18'),
(3, '28', 2, '2021-04-23', '2021-04-30', 'Completed', '2021-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `librery`
--

CREATE TABLE `librery` (
  `main_title` varchar(255) NOT NULL,
  `main_description` varchar(255) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `opening` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librery`
--

INSERT INTO `librery` (`main_title`, `main_description`, `main_image`, `phone`, `address`, `opening`, `email`) VALUES
('Hello Kaniya', 'Welcome Katana Library', 'home_01.png', 713664071, 'Banwalgodalla, Kosmull', 'Monday - Suterday', 'kanishkadewsandaruwan6@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `name`, `phone`, `address`, `nic`, `email`, `username`, `password`, `reg_date`) VALUES
(1, '', 0, '', '', '', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `member_backup`
--

CREATE TABLE `member_backup` (
  `bakcup_id` int(11) NOT NULL,
  `member_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_backup`
--

INSERT INTO `member_backup` (`bakcup_id`, `member_id`, `name`, `email`, `address`, `trn_date`, `phone`) VALUES
(1, 3, 'Kanishka ', 'kanishkadewsandaruwan2@gmail.com', 'Banwalgodalla, Kosmulla', '2021-04-23 04:21:27', 713664076),
(2, 2, 'Kanishka Sandaruwan', 'dew@gmail.com', 'Galle Neluwa Sri lanka', '2021-04-23 04:21:23', 713664078);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `msg_read` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `name`, `email`, `subject`, `message`, `trn_date`, `msg_read`) VALUES
(2, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'kk', 'tjgj', '2020-12-24 12:17:24', 'Reded'),
(3, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'kk', 'hhhdhdh', '2020-12-25 12:08:00', 'Reded'),
(5, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'aa', 'sssss', '2020-12-27 12:08:34', 'Reded'),
(6, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'bvbv', 'bbbbbbbbb', '2021-04-23 04:11:35', 'Reded');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `books_backup`
--
ALTER TABLE `books_backup`
  ADD PRIMARY KEY (`back_id`);

--
-- Indexes for table `book_cat`
--
ALTER TABLE `book_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`collect_id`);

--
-- Indexes for table `getresevation`
--
ALTER TABLE `getresevation`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_backup`
--
ALTER TABLE `member_backup`
  ADD PRIMARY KEY (`bakcup_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `books_backup`
--
ALTER TABLE `books_backup`
  MODIFY `back_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `book_cat`
--
ALTER TABLE `book_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `collect_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `getresevation`
--
ALTER TABLE `getresevation`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member_backup`
--
ALTER TABLE `member_backup`
  MODIFY `bakcup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
