-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 06:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihills`
--

-- --------------------------------------------------------

--
-- Table structure for table `experinsert`
--

CREATE TABLE `experinsert` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experinsert`
--

INSERT INTO `experinsert` (`id`, `name`, `place`, `message`, `img`, `status`, `created_on`) VALUES
(1, 'Oluwatoyin Agbotoba', '', '<p>The river is a nice place to behold</p>', 'lowerparthomepage.PNG', 0, '2023-03-10'),
(2, 'Shahana Bano', 'Kings Palace', '<p>It was nice visiting the Kings Palace of the Ancient Kingdom of Idanre. A big palace with different compact and open place in the middle of the palace where the King and the Chiefs normally</p>', 'hill28.jpg', 1, '2023-03-11'),
(3, 'Agbotoba Akinwale', 'Arun River', '<p>The river serve as the major source of water in the ancient kingdom. It was so clean that I can see the inside of the water clearly. This prompted me to drink from the water and It has a nice taste and cold.</p>', 'hill24.png', 1, '2023-03-11'),
(4, 'Stewart Massie', 'Igboore School', '<p>We visited the one and only primary school in the town. It is a big primary school with different classes</p>', 'hill18.jpg', 1, '2023-03-11'),
(5, 'Oyebade Adedoyin', 'Wonder Rock', '<p>The rock appears as if it was going to fall but remain standing on a tiny bottom on a flat rock.</p>', 'master-slide.jpg', 1, '2023-03-11'),
(7, 'Akinsiku Omoyemi', 'Arun River', '<p>Arun River fishing festival is a way of life for the people of Kebbi State. The festival preserves tradition and promotes conservation. The annual festival takes place in February and marks the end of farming season and start of the fishing season.&nbsp;The festival is a four-day cultural event. It begins with an agricultural show, water sport displays, traditional Kebbawa entertainments and ends with the spectacular fishing competition in the Mata Fadan River.</p>', 'argungu.jpg', 0, '2023-03-23'),
(8, 'Agbotoba Oluwatoyin', 'Agboogun Foot print', '<p>Close to the pinnacle of Aghagha hill, one of the famous hills surrounding Idanre is a mystery… a human footprint called “Ese Agboogun.” This footprint is believed to belong to the first ruler of Idanreland, King Agboogun</p>', 'agboogun.jpg', 0, '2023-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `continent` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','User','Officer') NOT NULL DEFAULT 'User',
  `status` int(11) NOT NULL DEFAULT 1,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `surname`, `firstname`, `email`, `phoneno`, `continent`, `country`, `password`, `role`, `status`, `created_on`) VALUES
(4, 'Akinsiku', 'Omoyemi', 'akinomoyemi@gmail.com', '08045672345', 'Africa', 'Guinea', 'password1', 'User', 1, '2023-03-23'),
(5, 'Agbotoba', 'Oluwatoyin', 'tagbotoba@gmail.com', '08023456763', 'Asia', 'India', 'oluwatoyin123', 'User', 1, '2023-03-23'),
(6, 'Shahana', 'Bano', 'sbano@gmail.com', '9047832345', 'Europe', 'United Kingdom', 'bano123', 'Admin', 1, '2023-03-23'),
(7, 'Stewart', 'Massie', 'smassie@gmail.com', '9078235673', 'Europe', 'United Kingdom', 'stewart123', 'User', 1, '2023-03-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `experinsert`
--
ALTER TABLE `experinsert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `experinsert`
--
ALTER TABLE `experinsert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
