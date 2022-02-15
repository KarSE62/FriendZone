-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 06:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `friendzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(50) NOT NULL,
  `name_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `name_category`) VALUES
(1, 'ภูเขา'),
(2, 'น้ำตก'),
(3, 'ทะเล'),
(4, 'วัด'),
(5, 'สวนสัตว์');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentId` int(50) NOT NULL,
  `commentDetail` varchar(100) NOT NULL,
  `userId` int(50) NOT NULL,
  `postId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `offId` int(50) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `offImage` varchar(255) NOT NULL,
  `phoneNumber` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `participate`
--

CREATE TABLE `participate` (
  `partId` int(50) NOT NULL,
  `statusPart` varchar(50) NOT NULL,
  `userId` int(50) NOT NULL,
  `postId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postId` int(50) NOT NULL,
  `postTitle` varchar(50) NOT NULL,
  `imagePost` varchar(255) NOT NULL,
  `detailPost` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `num_people` int(10) NOT NULL,
  `expenses` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `subDistrict` varchar(100) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp(),
  `statusPost` int(50) NOT NULL,
  `userId` int(50) NOT NULL,
  `categoryId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postId`, `postTitle`, `imagePost`, `detailPost`, `note`, `num_people`, `expenses`, `province`, `district`, `subDistrict`, `date_start`, `date_end`, `creation_date`, `userId`, `categoryId`) VALUES
(1, 'หาเพื่อนเที่ยว วัดพระธาตุดอยสุเทพ', 'https://media.discordapp.net/attachments/778499819072913482/937216083725783050/bb8e0f2bb92ca379.jpg?width=901&height=676', 'เที่ยวทิปทำบุญ 3 วัน 2 คืนสนุกๆกันเลย', 'ขอคนจิตใจดี มีมารยาททางสังคม', 5, '5000', 'เชียงใหม่', 'เมืองเชียงใหม่', 'สุเทพ', '2022-02-08', '2022-02-11', '2022-01-31', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `reportId` int(50) NOT NULL,
  `reportTitle` varchar(50) NOT NULL,
  `reportDetail` varchar(100) NOT NULL,
  `postId` int(50) NOT NULL,
  `userId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(50) NOT NULL,
  `detail_review` varchar(100) NOT NULL,
  `point` int(10) DEFAULT NULL,
  `postId` int(50) NOT NULL,
  `userId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(50) NOT NULL,
  `FName` varchar(50) DEFAULT NULL,
  `LName` varchar(50) DEFAULT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idCard` char(13) DEFAULT NULL,
  `idCardImage` varchar(255) DEFAULT NULL,
  `statusUser` varchar(30) DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `userImage` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `subDistrict` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `expIdCard` varchar(50) DEFAULT NULL,
  `phoneNumber` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `FName`, `LName`, `userName`, `password`, `idCard`, `idCardImage`, `statusUser`, `gender`, `userImage`, `birthday`, `address`, `province`, `district`, `subDistrict`, `email`, `phoneNumber`) VALUES
(1, 'กนกพล', 'พวงวัดโพธิ์', 'knp001', '$2y$10$lkm9Cc2J6d8QZcH6jigbR.Se1WQU.KrFw9PVWl.wVP3FX3/8pVHjK', '1111111111111', 'https://media.discordapp.net/attachments/778499819072913482/936489935022747648/158282142_728598437840104_1157295371700176386_n.jpg', '0', 'ชาย', 'https://media.discordapp.net/attachments/778499819072913482/936489935022747648/158282142_728598437840104_1157295371700176386_n.jpg', '2000-03-12', '114 หมู่ 5', 'นครปฐม', 'ดอนตูม', 'ห้วยด้วน', '624259001@webmail.npru.ac.th', '0987392476'),
(4, 'Nutthapon', 'Saefong', 'Nut', '$2y$10$lkm9Cc2J6d8QZcH6jigbR.Se1WQU.KrFw9PVWl.wVP3FX3/8pVHjK', '1765423541245', 'https://media.discordapp.net/attachments/778499819072913482/936575366338838578/5adf240418944669.jpg?width=671&height=676', '0', 'ชาย', 'https://media.discordapp.net/attachments/778499819072913482/936575366338838578/5adf240418944669.jpg?width=671&height=676', '2000-02-02', 'น่าน', 'น่าน', 'น่าน', 'น่าน', '624259001@webmail.npru.ac.th', '0987392476');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `postId` (`postId`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`offId`);

--
-- Indexes for table `participate`
--
ALTER TABLE `participate`
  ADD PRIMARY KEY (`partId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `postId` (`postId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportId`),
  ADD KEY `postId` (`postId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `postId` (`postId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentId` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `offId` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `participate`
--
ALTER TABLE `participate`
  MODIFY `partId` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportId` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
