-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 08:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `fooditems`
--

CREATE TABLE `fooditems` (
  `item` varchar(20) NOT NULL,
  `calories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`item`, `calories`) VALUES
('Aloo Mash', 120),
('Aloo Tikka', 100),
('Aloo Tikki', 100),
('atukul', 150),
('Avial', 150),
('Baati', 200),
('Barfi', 100),
('Bhindi Sabzi Dry', 80),
('Biryani-Pulao', 300),
('Bonda', 100),
('Butter Chicken', 350),
('butterNaan', 200),
('Chaat', 200),
('Chakli', 50),
('Chana Gravy', 150),
('Chana Masala', 150),
('Chevda', 120),
('Chicken Dry', 250),
('Chicken Gravy', 300),
('Dabeli', 250),
('Dahi Vada', 100),
('Dal', 150),
('Dosa', 100),
('Egg Gravy', 200),
('eggNoodles', 200),
('Fish Dry', 200),
('Fish Gravy', 250),
('Gajar Halwa', 150),
('Gobhi Sabzi Dry', 80),
('Gulab Jamun', 150),
('Halwa', 200),
('ice cream', 300),
('Idli', 40),
('Imarti', 150),
('Jalebi', 200),
('Jilebi', 200),
('Kachori', 150),
('Kadhi', 120),
('Karanji', 100),
('Khakhra', 50),
('Khaman', 80),
('Khaman Dhokla', 80),
('Khandvi', 70),
('Kheer', 150),
('Khichdi', 200),
('Kofta', 250),
('Kulfi Falooda', 200),
('Laddu', 100),
('Maida Roti', 80),
('Malai Kofta', 300),
('Malpua', 150),
('Modak', 100),
('Momo', 50),
('Mushroom Sabzi', 100),
('Naan', 200),
('Noodles', 200),
('Omelette', 150),
('Other Atta Roti', 80),
('Other Non-veg Curry', 300),
('Palak paneer', 200),
('Paneer ', 250),
('Paneer Gravy', 250),
('Paneer Palak', 200),
('Pani Puri', 80),
('Paniyaram', 80),
('Papad', 20),
('Paratha', 150),
('Pav Bhaji', 250),
('Payasam', 150),
('Peda', 50),
('Pesarattu', 100),
('Poha', 150),
('Pudding', 150),
('Puri', 80),
('Raita', 50),
('Rajma', 200),
('Rasam', 50),
('Rasgulla', 150),
('ravaLaddu', 100),
('Rice', 300),
('Rongi', 150),
('Roti', 80),
('Saag', 100),
('Sabzi Dry', 80),
('Sabzi Gravy', 120),
('sai', 200),
('Salad', 50),
('Sambar', 100),
('Sambhar', 100),
('Samosa', 150),
('semya', 150),
('Sevai', 150),
('Shankarpali', 100),
('sheelam', 150),
('Sohan Papdi', 100),
('Undhiyu', 250),
('Upma', 150),
('Uttapam', 150),
('Vada', 100),
('Vada Pav', 250),
('vivek', 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fooditems`
--
ALTER TABLE `fooditems`
  ADD PRIMARY KEY (`item`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
