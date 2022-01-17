-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 02:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restmanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `fId` int(5) NOT NULL,
  `fcId` int(3) NOT NULL,
  `foodName` varchar(32) NOT NULL,
  `foodImage` varchar(64) NOT NULL,
  `foodPrice` int(11) NOT NULL,
  `foodStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`fId`, `fcId`, `foodName`, `foodImage`, `foodPrice`, `foodStatus`) VALUES
(1, 1, 'Hydrabadi Mutton', 'mutton1.jfif', 155, 1),
(2, 1, 'Mutton Curry', 'mutton2.jpg', 120, 1),
(3, 1, 'Mutton Bhuna', 'mutton3.jpg', 130, 1),
(4, 1, 'Mutton Kosha', 'mutton4.jpg', 130, 1),
(5, 1, 'Mutton Korma', 'mutton5.jfif', 130, 1),
(6, 1, 'Rajasthani Mutton', 'mutton6.jpg', 200, 1),
(7, 1, 'Mutton Chaanp', 'mutton7.jpg', 120, 1),
(8, 2, 'Chicken Curry', 'chicken1.jpg', 50, 1),
(9, 2, 'Chicken Roast', 'chicken2.jpg', 65, 1),
(10, 2, 'Chilli Chicken', 'pexels-engin-akyurt-2673353.jpg', 70, 1),
(11, 2, 'BBQ Chicken', 'chicken4.jpg', 60, 1),
(12, 2, 'Chicken Korma', 'chicken5.jfif', 50, 1),
(13, 2, 'Chicken Tikka', 'chicken6.jfif', 55, 1),
(17, 3, 'Aar Macher Jhol', 'fish6.jpg', 50, 1),
(18, 3, 'Shorshe Ilish', 'fish1.jfif', 100, 1),
(19, 3, 'Ilish Bhaja', 'fish2.jpg', 600, 1),
(20, 3, 'Chingri Bhuna', 'fish3.jpg', 65, 1),
(21, 3, 'Shorshe Katla', 'fish4.jpg', 50, 1),
(22, 3, 'Rui Macher Jhol', 'fish5.jfif', 55, 1),
(23, 3, 'Telapiya Bhaja', 'fish7.jpg', 50, 1),
(24, 3, 'Mach Chorchori', 'fish8.jpg', 50, 1),
(25, 3, 'Kajoli macher Jhol', 'fish9.jpg', 60, 1),
(26, 3, 'Pabda Mach', 'fish10.jpg', 50, 1),
(27, 4, 'Vegetable Biryani', 'biryani1.jpg', 130, 1),
(28, 4, 'Chicken Biryani', 'biryani2.jpg', 150, 1),
(29, 4, 'Mutton Tehari', 'biryani3.jpeg', 160, 1),
(30, 4, 'Zafran Chicken Biryani', 'biryani4.jpg', 150, 1),
(31, 4, 'Indian Chicken Biryani', 'biryani5.jpg', 130, 1),
(32, 4, 'Egg Biryani', 'biryani6.jpg', 120, 1),
(33, 4, 'Kacchi Biryani', 'biryani7.jpg', 180, 1),
(34, 5, 'White Rice', 'rice1.jpg', 15, 1),
(35, 5, 'Ponir Rice', 'rice2.jfif', 30, 1),
(36, 5, 'Vegetable Fried Rice', 'rice3.jpg', 25, 1),
(37, 5, 'Ghee Rice', 'rice4.jpg', 30, 1),
(40, 6, 'Chhana Shondesh', 'sweet1.jpg', 40, 1),
(41, 6, 'Roshogolla', 'sweet3.jpg', 20, 1),
(42, 6, 'Rabri Roshmalai', 'sweet7.jpg', 30, 1),
(43, 6, 'Mishti Doi', 'sweet5.jpg', 25, 1),
(44, 6, 'Roshmalai', 'sweet6.jfif', 100, 1),
(45, 6, 'Jilapi', 'sweet2.jfif', 25, 1),
(46, 6, 'Chhana Mishti', 'sweet8.jpg', 25, 1),
(47, 6, 'Kacha Golla', 'sweet4.gif', 20, 1),
(50, 7, 'Borhani', 'b1.jpg', 30, 1),
(51, 7, 'Badam Milk', 'b2.jpg', 35, 1),
(52, 7, 'Rooh Afza', 'b3.jfif', 10, 1),
(53, 7, 'Coka Cola', 'b4.jpg', 20, 1),
(54, 7, 'Orange Juice', 'b5.jfif', 10, 1),
(55, 7, 'Lacchi', 'b8.jpg', 25, 1),
(56, 7, 'Moshola Cha', 'b11.jfif', 15, 1),
(57, 7, 'Coffee', 'b13.jpg', 40, 1),
(58, 7, 'Cold Coffee', 'b8.jpg', 25, 1),
(59, 7, 'Mango juice', 'b9.jfif', 15, 1),
(60, 8, 'Jhaal Fuchka', 'sn3.jpg', 40, 1),
(61, 8, 'Doi Fuchka', 'sn2.jfif', 70, 1),
(62, 8, 'Bakhorkhani', 'sn1.jpg', 5, 1),
(63, 8, 'Pizza Pepperoni', 'sn7.jpg', 65, 1),
(64, 8, 'Chicken Chilli Pizza', 'sn4.jpg', 60, 1),
(65, 8, 'Chicken Roll', 'sn6.jfif', 35, 1),
(66, 8, 'Chicken Burger with Fries', 'sn10.jpg', 160, 1),
(70, 9, 'Mishti Paan', 'special2.jpg', 10, 1),
(71, 9, 'Aam Lebu Achar', 'special1.jpg', 30, 1),
(72, 9, 'Aam Achar', 'special4.jfif', 30, 1),
(73, 9, 'Aam Chatni', 'special3.jfif', 20, 1),
(74, 9, 'Bhorta Plate', 'special5.jpeg', 180, 1),
(75, 16, 'Dherosh Curry', 'dherosh curry.jfif', 40, 1),
(76, 16, 'Ponir Curry', 'ponir curry.jpg', 60, 1),
(77, 16, 'Mixed Curry', 'curry 3.jpg', 35, 1),
(78, 16, 'Thai Curry', 'Thai-red-curry-fish-4.jpg', 45, 1),
(79, 16, 'Fish Curry', 'Fish Curry.jpg', 55, 1),
(80, 17, 'Jhal chotpoti', 'yummy-chotpoti-p-1910241529.jpg', 40, 1),
(81, 17, 'chotpoti', 'chotpoti2.jpg', 45, 1),
(96, 17, 'ccc', 'CHOTPOTI3.jpg', 25, 1),
(97, 17, 'aaa', 'chotpoti2.jpg', 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `foodcategory`
--

CREATE TABLE `foodcategory` (
  `fcId` int(3) NOT NULL,
  `fcName` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodcategory`
--

INSERT INTO `foodcategory` (`fcId`, `fcName`) VALUES
(1, 'Mutton'),
(2, 'Chicken'),
(3, 'Fish'),
(4, 'Biryani'),
(5, 'Rice'),
(6, 'Sweet'),
(7, 'Beverage'),
(8, 'Snack'),
(9, 'Special'),
(16, 'Curry'),
(17, 'chotpoti'),
(19, 'curry 2');

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE `foodorder` (
  `foId` int(6) NOT NULL,
  `userId` int(5) NOT NULL,
  `fId` int(5) NOT NULL,
  `foodName` varchar(32) NOT NULL,
  `amount` int(3) NOT NULL,
  `totalPrice` int(3) NOT NULL,
  `transactionId` varchar(16) NOT NULL,
  `orderStatus` int(1) NOT NULL,
  `orderDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodorder`
--

INSERT INTO `foodorder` (`foId`, `userId`, `fId`, `foodName`, `amount`, `totalPrice`, `transactionId`, `orderStatus`, `orderDate`) VALUES
(14, 1, 28, 'Chicken Biryani', 2, 300, 'fdtyrue', 1, '2021-11-27'),
(16, 3, 11, 'BBQ Chicken', 2, 120, 'sfgaq4t', 1, '2021-11-27'),
(17, 1, 25, 'Kajoli macher Jhol', 3, 180, 'hkjd567', 1, '2021-11-27'),
(18, 1, 2, 'Mutton Curry', 2, 240, 'sgwwwwhh', 1, '2021-11-28'),
(19, 3, 53, 'Coka Cola', 100, 2000, 'varg54275', 1, '2021-11-29'),
(21, 8, 33, 'Kacchi Biryani', 1, 180, 'bnvxsre667', 1, '2021-11-29'),
(22, 14, 41, 'Roshogolla', 4, 80, 'bvcfty', 1, '2021-11-29'),
(23, 3, 42, 'Rabri Roshmalai', 6, 180, '8Jkguyf', 1, '2021-12-01'),
(25, 15, 3, 'Mutton Bhuna', 2, 260, 'sdthtykiul', 1, '2021-12-05'),
(27, 1, 8, 'Chicken Curry', 3, 150, 'gfdr8ip0j', 1, '2022-01-10'),
(28, 1, 44, 'Roshmalai', 2, 40, 'ahrth45678', 1, '2022-01-13'),
(30, 16, 21, 'Shorshe Katla', 2, 100, 'wqqww', 1, '2022-01-13'),
(31, 16, 30, 'Zafran Chicken Biryani', 1, 150, 'sdfarhq', 1, '2022-01-13'),
(32, 1, 41, 'Roshogolla', 5, 100, 'q4252v2', 1, '2022-01-13'),
(35, 1, 4, 'Mutton Kosha', 6, 780, '66666666666', 0, '2022-01-13'),
(36, 16, 76, 'Ponir Curry', 3, 180, 'kkkkkkkkkkkkkkk', 0, '2022-01-14'),
(37, 16, 73, 'Aam Chatni', 4, 80, '342tc4ctt', 0, '2022-01-14'),
(38, 16, 13, 'Chicken Tikka', 2, 110, 'wreq3tg', 0, '2022-01-14'),
(39, 16, 29, 'Mutton Tehari', 2, 320, 'rqgyq3653', 0, '2022-01-14'),
(40, 1, 3, 'Mutton Bhuna', 5, 650, '345bbbbbbbbbbbbb', 0, '2022-01-14'),
(41, 1, 41, 'Roshogolla', 8, 160, 'hftu5e6ue', 0, '2022-01-14'),
(42, 1, 6, 'Rajasthani Mutton', 1, 200, 'dhtionih', 0, '2022-01-14'),
(43, 1, 11, 'BBQ Chicken', 4, 240, 'q3vyuw', 0, '2022-01-14'),
(47, 20, 47, 'Kacha Golla', 3, 60, 'cxgnx', 0, '2022-01-16'),
(48, 20, 2, 'Mutton Curry', 3, 360, '121dqsdw', 1, '2022-01-16'),
(49, 20, 40, 'Chhana Shondesh', 10, 400, 'adfaas122', 0, '2022-01-16'),
(50, 20, 40, 'Chhana Shondesh', 10, 400, 'adfaas122', 0, '2022-01-16'),
(51, 20, 58, 'Cold Coffee', 3, 75, 'sgrgawer3', 0, '2022-01-16'),
(52, 21, 42, 'Rabri Roshmalai', 1, 30, '1111wwwww', 0, '2022-01-17'),
(53, 22, 20, 'Chingri Bhuna', 4, 260, 'asqwedsa', 0, '2022-01-17'),
(54, 23, 30, 'Zafran Chicken Biryani', 2, 300, 'qwerasd', 0, '2022-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rId` int(6) NOT NULL,
  `fId` int(5) NOT NULL,
  `userId` int(5) NOT NULL,
  `rating` int(2) NOT NULL,
  `reviews` varchar(256) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rId`, `fId`, `userId`, `rating`, `reviews`, `date`) VALUES
(10, 2, 1, 9, 'very nice.', '2021-11-29'),
(11, 28, 1, 8, 'good', '2021-11-29'),
(12, 25, 1, 10, 'very nice', '2021-11-29'),
(13, 11, 3, 7, 'tasty', '2021-11-29'),
(14, 53, 3, 10, 'nice', '2021-11-29'),
(15, 33, 8, 8, 'delicious', '2021-11-29'),
(16, 41, 14, 9, 'tasty', '2021-11-29'),
(17, 42, 3, 9, 'delicious', '2021-12-01'),
(18, 3, 15, 8, 'tasty', '2021-12-05'),
(19, 8, 1, 9, 'nice', '2022-01-10'),
(20, 21, 16, 8, 'tasty', '2022-01-13'),
(21, 30, 16, 10, 'nice', '2022-01-13'),
(22, 41, 1, 8, 'very tasty', '2022-01-14'),
(23, 11, 1, 8, 'nice', '2022-01-15'),
(24, 58, 20, 8, 'very nice', '2022-01-16'),
(25, 42, 21, 9, 'very tasty', '2022-01-17'),
(26, 20, 22, 5, 'aaaa', '2022-01-17'),
(27, 30, 23, 10, 'nice', '2022-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(5) NOT NULL,
  `userName` varchar(32) NOT NULL,
  `userEmail` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `userMobileNumber` varchar(15) NOT NULL,
  `userAddress` varchar(64) NOT NULL,
  `userPhoto` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userEmail`, `password`, `userMobileNumber`, `userAddress`, `userPhoto`) VALUES
(1, 'Shupta ', 'shupta@gmail.com', '123456', '01963330534', '', '../photos/IMG_1279.jpg'),
(3, 'Sazia', 'sazia@gmail.com', '123456', '', '', '../photos/userPhotoLogo.png'),
(4, 'opy', 'opy@gmail.com', '1234567', '', '', '../photos/userPhotoLogo.png'),
(8, 'Sayma', 'sayma@gmail.com', '123456', '0196333055', 'khulna', '../photos/propic.jpg'),
(9, 'zeeniea', 'z@gmail.com', '123123', '01703524871', '', '../photos/pexels-jonathan-borba-'),
(11, 'anika', 'anika@gmail.com', '123456', '0196333055', 'khulna', '../photos/Chicken_Tikka_Masala_K'),
(12, 'shreya', 'sh@gmail.com', '123456', '', '', '../photos/userPhotoLogo.png'),
(14, 'Puja', 'puja@gmail.com', '123456', '', '', '../photos/userPhotoLogo.png'),
(15, 'Nipa', 'n@gmail.com', '123456', '', '', '../photos/userPhotoLogo.png'),
(16, 'sadia', 'sadia@gmail.com', '123456', '', '', '../photos/IMG_1279.jpg'),
(17, 'Admin', 'adminkhaidai@gmail.com', '123456', '', '', '../photos/userPhotoLogo.png'),
(20, 'Purnata', 'pur@gmail.com', '123456', '', '', '../photos/green leaf.jpg'),
(21, 'Antika', 'antika@gmail.com', '123456', '0196333055', 'khulna', '../photos/purple leaf2.jpg'),
(22, 'opi', 'opi@gmail.com', '123456', '01963330534', 'khulna', '../photos/userPhotoLogo.png'),
(23, 'misti', 'mis@gmail.com', '123456', '01963330534', 'khulna', '../photos/purple leaf2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`fId`),
  ADD KEY `fcId` (`fcId`);

--
-- Indexes for table `foodcategory`
--
ALTER TABLE `foodcategory`
  ADD PRIMARY KEY (`fcId`);

--
-- Indexes for table `foodorder`
--
ALTER TABLE `foodorder`
  ADD PRIMARY KEY (`foId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rId`),
  ADD KEY `fId` (`fId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `fId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `foodcategory`
--
ALTER TABLE `foodcategory`
  MODIFY `fcId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `foodorder`
--
ALTER TABLE `foodorder`
  MODIFY `foId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`fcId`) REFERENCES `foodcategory` (`fcId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foodorder`
--
ALTER TABLE `foodorder`
  ADD CONSTRAINT `foodorder_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`fId`) REFERENCES `food` (`fId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
