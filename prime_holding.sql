-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 07:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prime_holding`
--

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(200) NOT NULL,
  `profile_img` text NOT NULL,
  `price` float NOT NULL,
  `technology` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `years_of_experience` int(11) NOT NULL,
  `native_language` varchar(200) NOT NULL,
  `linkedin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`id`, `name`, `email`, `phone`, `location`, `profile_img`, `price`, `technology`, `description`, `years_of_experience`, `native_language`, `linkedin`) VALUES
(1, 'Aleksandar Djukic', 'aleksandardjukic@mail.com', '065123456', 'Novi Sad', 'https://www.faceapp.com/static/img/content/compare/old-example-before@3x.jpg', 8, 'PHP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur vestibulum fringilla. Integer vehicula volutpat orci sit amet bibendum. Pellentesque odio ex, vehicula et ornare at, pharetra eget lectus. Ut egestas sed dui quis pulvinar.', 0, 'Serbian', 'https://www.linkedin.com/in/aleksandar-%C4%91uki%C4%87-5ab4a0213/'),
(2, 'John Doe', 'johndoe@mail.com', '065789456', 'New York', 'https://www.faceapp.com/static/img/content/compare/beard-example-before@3x.jpg', 15, 'Python', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur vestibulum fringilla. Integer vehicula volutpat orci sit amet bibendum. Pellentesque odio ex, vehicula et ornare at, pharetra eget lectus. Ut egestas sed dui quis pulvinar.', 5, 'English', 'https://www.linkedin.com/in/aleksandar-%C4%91uki%C4%87-5ab4a0213/'),
(5, 'Bernice Horton', 'bernice.horton@example.com', '(400)-090-8908', '8797 Valley View Ln', 'https://randomuser.me/api/portraits/women/45.jpg', 10, 'Flutter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur vestibulum fringilla. Integer vehicula volutpat orci sit amet bibendum. Pellentesque odio ex, vehicula et ornare at, pharetra eget lectus. Ut egestas sed dui quis pulvinar.', 2, 'Bulgarian', 'https://www.linkedin.com/in/aleksandar-%C4%91uki%C4%87-5ab4a0213/'),
(6, 'Terrance Watkins', 'terrance.watkins@example.com', '(746)-104-7571', '2752 Cackson St', 'https://randomuser.me/api/portraits/men/46.jpg', 8, 'Java', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur vestibulum fringilla. Integer vehicula volutpat orci sit amet bibendum. Pellentesque odio ex, vehicula et ornare at, pharetra eget lectus. Ut egestas sed dui quis pulvinar.', 1, 'English', 'https://www.linkedin.com/in/aleksandar-%C4%91uki%C4%87-5ab4a0213/'),
(7, 'Nelson Riley', 'nelson.riley@example.com', '(909)-559-6717', 'Los Angeles', 'https://randomuser.me/api/portraits/men/70.jpg', 20, 'Javascript', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur vestibulum fringilla. Integer vehicula volutpat orci sit amet bibendum. Pellentesque odio ex, vehicula et ornare at, pharetra eget lectus. Ut egestas sed dui quis pulvinar.', 3, 'Serbian', ''),
(8, 'Clayton Young', 'clayton.young@example.com', '(240)-443-0872', 'Moscow', 'https://randomuser.me/api/portraits/men/94.jpg', 18, 'Python', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur vestibulum fringilla. Integer vehicula volutpat orci sit amet bibendum. Pellentesque odio ex, vehicula et ornare at, pharetra eget lectus. Ut egestas sed dui quis pulvinar.', 4, 'English', 'https://www.linkedin.com/in/aleksandar-%C4%91uki%C4%87-5ab4a0213/');

-- --------------------------------------------------------

--
-- Table structure for table `hired`
--

CREATE TABLE `hired` (
  `id` int(11) NOT NULL,
  `hiredFrom` date NOT NULL,
  `hiredTo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hired`
--

INSERT INTO `hired` (`id`, `hiredFrom`, `hiredTo`) VALUES
(1, '2022-01-08', '2022-01-10'),
(2, '2022-01-08', '2022-01-10'),
(5, '2022-01-08', '2022-01-10'),
(6, '2022-01-08', '2022-01-10'),
(7, '2022-01-08', '2022-01-10'),
(8, '2022-01-08', '2022-01-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
