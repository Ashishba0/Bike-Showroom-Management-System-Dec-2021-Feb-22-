-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 08:26 AM
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
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_Name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Admin_Password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_Name`, `Admin_Password`) VALUES
('Ashish', 'Ashish27');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `mobile`, `subject`, `message`, `date_time`) VALUES
(22, 'Ashish', 'ashishahire@gmail.com', '9404500324', 'nice service', 'nice', '2022-02-26 22:23:43'),
(23, 'Piyush', 'piyush@gmail.com', '9544748484', 'For  bike', 'Looking for a bike', '2022-02-27 09:03:28'),
(25, 'userIX', 'user4@gmail.com', '9545457542', 'Want to buy bike', 'please contact me ', '2022-02-28 03:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `garage`
--

CREATE TABLE `garage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `garage`
--

INSERT INTO `garage` (`id`, `name`, `price`, `description`, `image`) VALUES
(9, 'Bulldog seat set RE Classic', '3300', 'seat', '11119Stonewall Bashplate RE.jpg'),
(10, 'Compact Backrest RE', '5000', 'seat', '22353Compact Backrest RE.jpg'),
(11, 'CNC Mirrors', '1500', 'Mirrors', '51963CNC Mirrors.jpg'),
(12, 'Hot Rod Handle Honda Highness', '11000', 'Handle', '72884Hot Rod Handle Honda Highness.jpg'),
(13, 'LED Crusader leg guard', '8500', 'Guard', '72876LED crusader leg guard.jpg'),
(14, 'LED crusader without-led leg guard', '7000', 'Leg Guard', '57369LED crusader leg guard.png'),
(15, 'Stonewall Bashplate RE', '5900', 'Plate', '39098Stonewall Bashplate RE.jpg'),
(16, '15 Led White Bike Led Light Driving Waterproof', '2700', 'LED', '6214715 Led White Bike Led Light Driving Waterproof.jpg'),
(17, 'Chrome Vanadium Steel Combination Spanner Set (12-Pieces)', '3300', 'Spanner', '19217Chrome Vanadium Steel Combination Spanner Set (12-Pieces).jpg'),
(18, 'CNC Mirrors', '4000', 'mirror', '38328CNC Mirrors.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lightning`
--

CREATE TABLE `lightning` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lightning`
--

INSERT INTO `lightning` (`id`, `name`, `price`, `description`, `image`) VALUES
(8, 'Handle Bar Indicator RE', '1200', 'Light', '17859bar end indicator RE.jpg'),
(9, 'Handle Bar Indicator', '1000', 'Light', '67860bar end indicator.jpg'),
(10, 'Digital Headlight', '2200', 'Headlight', '55291digital headlight.jpg'),
(11, 'Led Indicator', '1400', 'Indicator', '17932led indicator.jpg'),
(12, 'Tail Brake Indicator', '2500', 'Tail Light', '51144tail brake indicator.jpg'),
(13, 'Angled Indicator', '1700', 'Indicator', '13500angled indicator.jpg'),
(14, 'DRL Light', '1900', 'DRL', '22755DRL light.jpg'),
(15, 'Helmet With Light(Blue)', '4400', 'Light', '76151helmet blue light.jpg'),
(16, 'Side Mirror with LED', '3300', 'mirror led', '99076side mirror with lights.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Pay_Mode` varchar(255) NOT NULL,
  `gtotal` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `username`, `mobile`, `address`, `Pay_Mode`, `gtotal`, `date`) VALUES
(129, 'Ashish', '9404500324', 'Nashik', 'COD', 1416, '2022-02-26 16:21:09'),
(136, 'Om', '9404500324', 'nsk road', 'COD', 11800, '2022-02-26 17:16:00'),
(137, 'Om Kokane', '9545451555', 'Sinnar', 'COD', 14868, '2022-02-27 03:11:08'),
(141, 'Sarang', '9545451555', 'Nashik', 'COD', 4720, '2022-02-27 03:21:58'),
(154, 'Om Kokane', '9545451555', 'pune', 'COD', 3540, '2022-02-27 04:10:56'),
(155, 'Prassana', '9874512132', 'Mumbai', 'COD', 1416, '2022-02-27 04:19:13'),
(156, 'Pratik', '8784554515', 'Dhule', 'COD', 3894, '2022-02-27 04:25:06'),
(157, 'Piyush', '9545762474', 'Malegaon\r\n', 'COD', 5900, '2022-02-27 10:28:16'),
(158, 'Hitesh', '9547855886', 'Pune', 'COD', 5900, '2022-02-27 10:29:47'),
(159, 'Aniket', '9535345345', 'Banglore', 'COD', 4130, '2022-02-27 09:01:23'),
(160, 'Vladimir Putin', '8745412313', 'Russia', 'COD', 7080, '2022-02-27 17:23:56'),
(161, 'userIX', '9545457542', 'pune 65412', 'COD', 3540, '2022-02-28 03:26:33'),
(162, 'userIX', '9545457542', 'Mumbai ', 'COD', 29854, '2022-02-28 03:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`) VALUES
(6, 'Bulldog seat set RE Classic', '4000', 'Seat for your bike\r\n', '78669Bulldog seat set RE Classick.jpg'),
(10, 'CNC Mirrors', '1999', 'mirror', '32552CNC Mirrors.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `mobile`, `date_time`, `password`, `cpassword`) VALUES
(3, 'Ashish', 'ashishahire@gmail.com', '9404500324', '2022-02-26 22:01:54', '$2y$10$DIoiR277DJYO8/yK78Zs/.Ia/BWREwJ4JAQ0F6ZXs8jauWaHtXfhG', '$2y$10$IZXQOenoKLzRtGgiqOvHHuKOsl/8gFs725TL3sF/jcPsEV7AD9Oq2'),
(12, 'Rohit', 'rohit@gmail.com', '9212340912', '2022-02-26 22:01:54', '$2y$10$iLhJDwLbIk4CtueJ1HRuUOJQWHq4Qcf4HbPS7fuGkwWqwA6VZhETK', '$2y$10$/VsqR3aGJYMj/SM2GD/2QeYIeYATVu9mGYPNb.Aqut3dfu6lprvze'),
(13, 'Mohit', 'mohit@gmail.com', '928182712', '2022-02-26 22:01:54', '$2y$10$trhnktPgBpsQgXs4zaPIW.XPp3mbTm0/4OX0xk.1/WKBHut6z.5vq', '$2y$10$Jgb/.eBhqz0xevUEUeCgkeuD1DNSejvnDD4YY0nj5zORIxrDDU9Hm'),
(14, 'Elon Musk', 'elon@gmail.com', '9586148931', '2022-02-26 22:01:54', '$2y$10$dMiW6C2N3w8O6qE31J4KYuM21.qTjaDdRyQ764L8aITZtKU3qScHG', '$2y$10$BsHcQ4IGaEasjc2TGinShuAEa2mSyJ7HI.a/U0rix8nkAd.UJg/US'),
(19, 'User2', 'user2@gmail.com', '9584521488', '2022-02-26 22:01:54', '$2y$10$iOTyWwRKCC2C6BowquHFOOUmSIEL9B/9b67mnS9WcMMID.SdGapnm', '$2y$10$1ufFpbsLQ6mhQgtvj2GCeu.cxrmM1Et8JoDGCYxrbiZRIRMxpZORO'),
(22, 'Om Kokane', 'om@gmail.com', '9545451555', '2022-02-26 22:01:54', '$2y$10$KfDw/6ZvVoVQaUSB0XAXUuL8CX3EXMMkfylxfzkHKoCURMFFfXu2a', '$2y$10$UYys4QtCsrtSoj8.WUMmHuRmIdkmo5fso9gRBdiYwY0OzrWRT9r4e'),
(23, 'UserIII', 'user3@gmail.com', '9454545454', '2022-02-26 22:01:54', '$2y$10$Lff9IcXQtA0f3fAC6s4B1uE6ESPJsAbK9HgIyC0Y48VCPJGB0bJtO', '$2y$10$3peJ1R/zMgcvDi5U4Gfjc.TBv9M6OLnRhUWt6o.fPSHe1jQHOGIUu'),
(24, 'UserIX', 'user7@gmail.com', '9875983478', '2022-02-26 22:03:23', '$2y$10$VUcKrGIFRWFucrzwKMTBqueBOzpd6Nt/VH.aGsCbeIiT13yN4AUuu', '$2y$10$iIFb6KV/9.2r/plDlyrKD.LhLtCkAUfP7C7v.IZjfda0Jck5je4xG'),
(25, 'Ravi', 'ravi@gmail.com', '8787798787', '2022-02-26 17:36:29', '$2y$10$7qHc7CJkyCT7ncUftt0HHeipWshFqJ1cHngGcy.iCfZuI4pof13Qq', '$2y$10$b4uZcYHdM/Rj6gAzoZs/..09z7CSQbyt8aKQx6PSaqNV9knNgV3.m'),
(26, 'Rahul', 'rahul666@gmail.com', '7862554212', '2022-02-26 17:48:28', '$2y$10$yQd0sHmycdNlUpLUomQ2mO4wI71H82bY3pjcWWH17z9Xp.4t7euCW', '$2y$10$Uv86FKTdNGzgITm0yr4Lt.7JQTlIrwZHzAJtITA8TRpdNJXqd/4uW'),
(27, 'Rohan', 'rohan@gmail.com', '9448745412', '2022-02-26 22:20:25', '$2y$10$6GH3Beof3sYaIWD2HcwkIuLkUBP6ZyxNmkP5Qy7JZDlZzmF3Vduw2', '$2y$10$DcL0j76uVOTLkspJ1qg5hu.Tm52DZtJHorbopcGqWHx2ltbWnaAAy'),
(28, 'User', 'user99@gmail.com', '9848456444', '2022-02-27 09:06:49', '$2y$10$oasGBMlPdY8e/5ZU0hcLA.4ZLwVdd1ZKv24odX7bHTiDQrB0GKuum', '$2y$10$ULtD80WWzCBK/aVYAwZU9.QqEYLn.R5GHrSi9ZvauWRT.ih10M1t2');

-- --------------------------------------------------------

--
-- Table structure for table `riding_gear`
--

CREATE TABLE `riding_gear` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riding_gear`
--

INSERT INTO `riding_gear` (`id`, `name`, `price`, `description`, `image`) VALUES
(9, 'Black Sports Helmet', '3000', 'Helmet 1', '67994black helment.jpg'),
(10, 'Dual Sports Helmet', '3500', 'Helmet 2\r\n', '69194dual-sport.jpg'),
(11, 'White Jacket', '5500', 'jacket 1', '51784Shima-Bandit-Leather-Sports-Riding-Jacket.jpg'),
(12, 'Black Jacket', '5000', 'Jacket', '53421jacket 1.jpg'),
(13, 'Black Gloves', '800', 'Gloves 1', '57806Black Gloves.jpg'),
(14, 'Yellow Gloves', '3300', 'Gloves', '71687Yellow gloves.jpg'),
(15, 'Moto BLack pants', '2700', 'Riding Pants', '61564Black pants.jpg'),
(16, 'Matrix Black ', '1800', 'Black', '28186kawasaki pants.jpg'),
(17, 'yellow shoes', '3600', 'shoes for riding', '92315yello shoes.jpg'),
(18, 'Red Shoes', '5400', 'Shoes riding ', '73142Red shoes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `servicing`
--

CREATE TABLE `servicing` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time(4) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicing`
--

INSERT INTO `servicing` (`id`, `username`, `mobile`, `email`, `location`, `address`, `service`, `vehicle`, `date`, `time`, `remark`) VALUES
(13, 'Ashish', '9404500324', 'ashishahire@gmail.com', 'Mumbai Naka', 'dvsv', 'Paid Service', 'MH15FK4438', '2022-01-27', '14:57:00.0000', 'dsvsd\r\n'),
(34, 'Sarang', '7584561515', 'sarang@gmail.com', 'Indira Nagar', 'TRIMBAKESHWAR', 'Free Service', 'MH 15 GH 1234', '2022-03-01', '10:56:00.0000', 'OK NICE');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_id` int(255) NOT NULL,
  `Item_Name` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES
(27, 'Handle Bar Indicator RE', '1200', '1'),
(28, 'Handle Bar Indicator RE', '1200', '1'),
(28, 'Digital Headlight', '2299', '2'),
(32, 'Led Indicator', '1499', '1'),
(35, 'Stonewall Bashplate RE', '5900', '1'),
(40, 'LED crusader leg guard', '8500', '2'),
(40, 'Tail Brake Indicator', '2500', '2'),
(41, 'Handle Bar Indicator', '999', '2'),
(44, 'Handle Bar Indicator', '999', '1'),
(46, 'Handle Bar Indicator RE', '1200', '2'),
(49, 'Digital Headlight', '2299', '2'),
(49, 'Compact Backrest RE', '6000', '1'),
(54, 'Compact Backrest RE', '6000', '1'),
(55, 'Bulldog seat set RE', '4000', '2'),
(55, 'Tail Brake Indicator', '2500', '1'),
(55, 'Chrome Vanadium Steel Combination Spanner Set (12-Pieces)', '3300', '2'),
(55, 'Side Mirror with LED', '3300', '1'),
(56, 'LED crusader without-led leg guard', '7000', '9'),
(57, 'Handle Bar Indicator', '999', '0'),
(58, 'Handle Bar Indicator', '999', '1'),
(59, 'Digital Headlight', '2299', '1'),
(60, 'Handle Bar Indicator', '999', '1'),
(61, 'Handle Bar Indicator RE', '1200', '1'),
(61, 'Angled Indicator', '1799', '2'),
(62, 'Compact Backrest RE', '6000', '1'),
(62, 'Led Indicator', '1499', '2'),
(63, 'Bulldog seat set RE', '4000', '2'),
(63, 'LED crusader without-led leg guard', '7000', '1'),
(64, 'LED crusader leg guard', '8500', '1'),
(64, 'Digital Headlight', '2299', '2'),
(65, 'Bulldog seat set RE Classic', '4000', '1'),
(66, 'CNC Mirrors', '1500', '1'),
(67, 'Bulldog seat set RE Classic', '2999', '1'),
(68, 'CNC Mirrors', '1500', '1'),
(69, 'CNC Mirrors', '1500', '2'),
(70, 'CNC Mirrors', '1500', '1'),
(71, 'CNC Mirrors', '1500', '1'),
(72, 'Hot Rod Handle Honda Highness', '11000', '1'),
(73, 'Handle Bar Indicator', '999', '1'),
(74, 'Bulldog seat set RE Classic', '2999', '1'),
(75, 'Bulldog seat set RE Classic', '2999', '1'),
(76, 'Bulldog seat set RE Classic', '3000', '1'),
(76, 'Handle Bar Indicator RE', '1200', '2'),
(76, 'Black Sports Helmet', '3000', '1'),
(77, 'Handle Bar Indicator RE', '1200', '1'),
(78, 'Handle Bar Indicator RE', '1200', '1'),
(79, 'Handle Bar Indicator', '1000', '1'),
(80, 'Dual Sports Helmet', '3500', '1'),
(81, 'Handle Bar Indicator', '1000', '1'),
(82, 'Handle Bar Indicator', '1000', '1'),
(83, 'CNC Mirrors', '1500', '2'),
(84, 'Led Indicator', '1400', '2'),
(85, 'Digital Headlight', '2200', '1'),
(86, 'Handle Bar Indicator', '1000', '1'),
(87, 'Dual Sports Helmet', '3500', '1'),
(87, 'Led Indicator', '1400', '1'),
(88, 'Black Sports Helmet', '3000', '1'),
(90, 'Dual Sports Helmet', '3500', '1'),
(91, 'Dual Sports Helmet', '3500', '4'),
(93, 'Black Sports Helmet', '3000', '1'),
(95, 'Handle Bar Indicator', '1000', '1'),
(96, 'White Jacket', '5500', '1'),
(100, 'Helmet With Light(Blue)', '4400', '1'),
(101, 'Handle Bar Indicator', '1000', '2'),
(101, 'Tail Brake Indicator', '2500', '1'),
(101, 'Stonewall Bashplate RE', '5900', '1'),
(102, 'Handle Bar Indicator', '1000', '1'),
(103, 'Handle Bar Indicator RE', '1200', '1'),
(129, 'Handle Bar Indicator RE', '1200', '1'),
(133, 'Tail Brake Indicator', '2500', '1'),
(133, 'Handle Bar Indicator', '1000', '1'),
(136, 'Compact Backrest RE', '5000', '2'),
(137, 'LED crusader without-led leg guard', '7000', '1'),
(137, 'DRL Light', '1900', '2'),
(137, 'Matrix Black ', '1800', '1'),
(141, 'Handle Bar Indicator', '1000', '1'),
(141, 'Black Sports Helmet', '3000', '1'),
(153, 'Black Gloves', '800', '1'),
(154, 'Black Sports Helmet', '3000', '1'),
(155, 'Handle Bar Indicator RE', '1200', '1'),
(156, 'Side Mirror with LED', '3300', '1'),
(157, 'Black Jacket', '5000', '1'),
(158, 'Handle Bar Indicator', '1000', '5'),
(159, 'Dual Sports Helmet', '3500', '1'),
(160, 'Black Sports Helmet', '3000', '2'),
(161, 'Bulldog seat set RE Classic', '3000', '1'),
(162, 'Side Mirror with LED', '3300', '7'),
(162, 'Digital Headlight', '2200', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lightning`
--
ALTER TABLE `lightning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riding_gear`
--
ALTER TABLE `riding_gear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicing`
--
ALTER TABLE `servicing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `garage`
--
ALTER TABLE `garage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lightning`
--
ALTER TABLE `lightning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `riding_gear`
--
ALTER TABLE `riding_gear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `servicing`
--
ALTER TABLE `servicing`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
