-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 10:09 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `avatar` text NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` text NOT NULL,
  `authorize` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `user`, `name`, `avatar`, `password`, `email`, `authorize`) VALUES
(2, '0', 'abc', 'avatar.jpg', 'vcvcvcvvc', 'fahjfk@gmail.com', 'Admin'),
(3, '0', 'abcd', '1.jpg', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'tcnit123@gmail.com', 'Admin'),
(4, 'abc', 'abcd', '1.jpg', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'tcnit123@gmail.com', 'Admin'),
(17, '1111', '1', '2.2.jpg', '356a192b7913b04c54574d18c28d46e6395428ab', '1@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `nation` varchar(250) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `nation`, `name`) VALUES
(1, 'Nhật Bản', 'Eiichiro Oda'),
(2, 'Nhật Bản', 'Tabata Yuuki'),
(3, 'Nhật Bản', 'Gotouge Koyoharu'),
(4, 'Nhật Bản', 'Kakei Senri'),
(5, 'Nhật Bản', 'Yusuke Murata'),
(6, 'Nhật Bản', 'Adachi Mitsuru'),
(7, 'đang cập nhật', 'đang cập nhật'),
(8, 'Nhật Bản', 'Tsukuda Yuuto'),
(9, 'Việt Nam', 'One'),
(10, 'Mỹ', 'Kishimoto Masashi');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'NHẬT BẢN'),
(2, 'VIỆT NAM'),
(14, 'MỸ');

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `id_manga` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `name`, `content`, `id_manga`, `order`, `date`) VALUES
(37, 'Chương 1', '<div style=\"text-align: center;\"><img src=\"../images/vht/1.jpg\" width=\"800\"><img src=\"../images/vht/2.jpg\" width=\"800\"><img src=\"../images/vht/3.jpg\" width=\"800\"><img src=\"../images/vht/4.jpg\" width=\"800\"><img src=\"../images/vht/5.jpg\" width=\"800\"><img src=\"../images/vht/6.jpg\" width=\"800\"><img src=\"../images/vht/7.jpg\" width=\"800\"><img src=\"../images/vht/8.jpg\" width=\"800\"><img src=\"../images/vht/9.jpg\" width=\"800\"><img src=\"../images/vht/10.jpg\" width=\"800\"></div>', 1, 1, '2019-12-13'),
(38, 'Chương 2', '<div style=\"text-align: center;\"><img src=\"../images/vht/2.1.jpg\" width=\"800\"><img src=\"../images/vht/2.2.jpg\" width=\"800\"><img src=\"../images/vht/2.3.jpg\" width=\"800\"><img src=\"../images/vht/2.4.jpg\" width=\"800\"><img src=\"../images/vht/2.5.jpg\" width=\"800\"><img src=\"../images/vht/2.6.jpg\" width=\"800\"><img src=\"../images/vht/2.7.jpg\" width=\"800\"><img src=\"../images/vht/2.8.jpg\" width=\"800\"><img src=\"../images/vht/2.9.jpg\" width=\"800\"><img src=\"../images/vht/2.10.jpg\" width=\"800\"></div>', 1, 2, '2019-12-13'),
(39, 'Chương 3', '<div style=\"text-align: center;\"><img src=\"../images/vht/3.1.jpg\" width=\"800\"><img src=\"../images/vht/3.2.jpg\" width=\"800\"><img src=\"../images/vht/3.3.jpg\" width=\"800\"><img src=\"../images/vht/3.4.jpg\" width=\"800\"><img src=\"../images/vht/3.5.jpg\" width=\"800\"><img src=\"../images/vht/3.6.jpg\" width=\"800\"><img src=\"../images/vht/3.7.jpg\" width=\"800\"><img src=\"../images/vht/3.8.jpg\" width=\"800\"><img src=\"../images/vht/3.9.jpg\" width=\"800\"><img src=\"../images/vht/3.10.jpg\" width=\"800\"></div>', 1, 3, '2019-12-13'),
(40, 'Chương 1', '<div style=\"text-align: center;\"><img src=\"../images/vbc/1.jpg\" width=\"800\"><img src=\"../images/vbc/2.jpg\" width=\"800\"><img src=\"../images/vbc/3.jpg\" width=\"800\"><img src=\"../images/vbc/4.jpg\" width=\"800\"><img src=\"../images/vbc/5.jpg\" width=\"800\"><img src=\"../images/vbc/6.jpg\" width=\"800\"><img src=\"../images/vbc/7.jpg\" width=\"800\"><img src=\"../images/vbc/8.jpg\" width=\"800\"><img src=\"../images/vbc/9.jpg\" width=\"800\"><img src=\"../images/vbc/10.jpg\" width=\"800\"></div>', 3, 1, '2019-12-13'),
(41, 'Chương 2', '<div style=\"text-align: center;\"><img src=\"../images/vbc/2.1.jpg\" width=\"800\"><img src=\"../images/vbc/2.2.jpg\" width=\"800\"><img src=\"../images/vbc/2.3.jpg\" width=\"800\"><img src=\"../images/vbc/2.4.jpg\" width=\"800\"><img src=\"../images/vbc/2.5.jpg\" width=\"800\"><img src=\"../images/vbc/2.6.jpg\" width=\"800\"><img src=\"../images/vbc/2.7.jpg\" width=\"800\"><img src=\"../images/vbc/2.8.jpg\" width=\"800\"><img src=\"../images/vbc/2.9.jpg\" width=\"800\"><img src=\"../images/vbc/2.10.jpg\" width=\"800\"></div>', 3, 2, '2019-12-13'),
(42, 'Chương 3', '<div style=\"text-align: center;\">\r\n<img src=\"../images/vbc/3.1.jpg\" width=\"800\">\r\n<img src=\"../images/vbc/3.2.jpg\" width=\"800\">\r\n<img src=\"../images/vbc/3.3.jpg\" width=\"800\">\r\n<img src=\"../images/vbc/3.4.jpg\" width=\"800\">\r\n<img src=\"../images/vbc/3.5.jpg\" width=\"800\">\r\n<img src=\"../images/vbc/3.6.jpg\" width=\"800\">\r\n<img src=\"../images/vbc/3.7.jpg\" width=\"800\">\r\n<img src=\"../images/vbc/3.8.jpg\" width=\"800\">\r\n<img src=\"../images/vbc/3.9.jpg\" width=\"800\">\r\n<img src=\"../images/vbc/3.10.jpg\" width=\"800\"></div>', 3, 3, '2019-12-13'),
(43, 'Chương 1', '<div style=\"text-align: center;\">\r\n<img src=\"../images/clover/chapter 1/1.jpg\" width=\"800\">\r\n<img src=\"../images/clover/chapter 1/2.jpg\" width=\"800\">\r\n<img src=\"../images/clover/chapter 1/3.jpg\" width=\"800\">\r\n<img src=\"../images/clover/chapter 1/4.jpg\" width=\"800\">\r\n<img src=\"../images/clover/chapter 1/5.jpg\" width=\"800\">\r\n<img src=\"../images/clover/chapter 1/6.jpg\" width=\"800\">\r\n<img src=\"../images/clover/chapter 1/7.jpg\" width=\"800\">\r\n<img src=\"../images/clover/chapter 1/8.jpg\" width=\"800\">\r\n<img src=\"../images/clover/chapter 1/9.jpg\" width=\"800\">\r\n<img src=\"../images/clover/chapter 1/10.jpg\" width=\"800\"></div>', 2, 1, '2019-12-13'),
(44, 'Chương 2', '<div style=\"text-align: center;\">\r\n<img src=\"../images/clover/chapter 2/1.jpg\" width=\"800\">\r\n<img src=\"../images/clover/chapter 2/2.jpg\" width=\"800\">\r\n<img src=\"../images/clover/chapter 2/3.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 2/4.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 2/5.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 2/6.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 2/7.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 2/8.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 2/9.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 2/10.png\" width=\"800\"></div>', 2, 2, '2019-12-13'),
(45, 'Chương 3', '<div style=\"text-align: center;\">\r\n<img src=\"../images/clover/chapter 3/1.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 3/2.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 3/3.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 3/4.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 3/5.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 3/6.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 3/7.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 3/8.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 3/9.png\" width=\"800\">\r\n<img src=\"../images/clover/chapter 3/10.png\" width=\"800\"></div>', 2, 3, '2019-12-13'),
(46, 'Chương 1', '<div style=\"text-align: center;\"><img src=\"../images/isekai/chapter 1/1.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 1/2.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 1/3.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 1/4.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 1/5.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 1/6.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 1/7.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 1/8.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 1/9.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 1/10.jpg\" width=\"800\"></div>', 4, 1, '2019-12-13'),
(47, 'Chương 2', '<div style=\"text-align: center;\"><img src=\"../images/isekai/chapter 2/1.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 2/2.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 2/3.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 2/4.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 2/5.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 2/6.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 2/7.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 2/8.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 2/9.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 2/10.jpg\" width=\"800\"></div>', 4, 2, '2019-12-13'),
(48, 'Chương 3', '<div style=\"text-align: center;\"><img src=\"../images/isekai/chapter 3/1.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 3/2.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 3/3.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 3/4.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 3/5.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 3/6.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 3/7.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 3/8.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 3/9.jpg\" width=\"800\"><img src=\"../images/isekai/chapter 3/10.jpg\" width=\"800\"></div>', 4, 3, '2019-12-13'),
(49, 'Chương 1', '<div style=\"text-align: center;\"><img src=\"../images/ts/chapter 1/1.jpg\" width=\"800\"><img src=\"../images/ts/chapter 1/2.jpg\" width=\"800\"><img src=\"../images/ts/chapter 1/3.jpg\" width=\"800\"><img src=\"../images/ts/chapter 1/4.jpg\" width=\"800\"><img src=\"../images/ts/chapter 1/5.jpg\" width=\"800\"><img src=\"../images/ts/chapter 1/6.jpg\" width=\"800\"><img src=\"../images/ts/chapter 1/7.jpg\" width=\"800\"><img src=\"../images/ts/chapter 1/8.jpg\" width=\"800\"><img src=\"../images/ts/chapter 1/9.jpg\" width=\"800\"><img src=\"../images/ts/chapter 1/10.jpg\" width=\"800\"></div>', 18, 1, '2019-12-13'),
(50, 'Chương 1', '<div style=\"text-align: center;\"><img src=\"../images/ts1/chapter 1/1.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 1/2.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 1/3.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 1/4.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 1/5.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 1/6.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 1/7.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 1/8.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 1/9.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 1/10.jpg\" width=\"800\"></div>', 20, 1, '2019-12-13'),
(51, 'Chương 2', '<div style=\"text-align: center;\"><img src=\"../images/ts1/chapter 2/1.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 2/2.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 2/3.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 2/4.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 2/5.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 2/6.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 2/7.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 2/8.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 2/9.jpg\" width=\"800\"><img src=\"../images/ts1/chapter 2/10.jpg\" width=\"800\"></div>', 20, 2, '2019-12-13'),
(52, 'Chương 1', '<div style=\"text-align: center;\"><img src=\"../images/cdl/chapter 1/0.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 1/1.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 1/2.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 1/3.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 1/4.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 1/5.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 1/6.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 1/7.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 1/8.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 1/9.jpg\" width=\"800\"></div>', 17, 1, '2019-12-13'),
(53, 'Chương 2', '<div style=\"text-align: center;\"><img src=\"../images/cdl/chapter 2/0.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 2/1.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 2/2.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 2/3.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 2/4.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 2/5.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 2/6.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 2/7.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 2/8.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 2/9.jpg\" width=\"800\"></div>', 17, 2, '2019-12-13'),
(54, 'Chương 3', '<div style=\"text-align: center;\"><img src=\"../images/cdl/chapter 3/0.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 3/1.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 3/2.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 3/3.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 3/4.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 3/5.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 3/6.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 3/7.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 3/8.jpg\" width=\"800\"><img src=\"../images/cdl/chapter 3/9.jpg\" width=\"800\"></div>', 17, 3, '2019-12-13'),
(55, 'Chương 1', '<div style=\"text-align: center;\"><img src=\"../images/op/chapter 1/1.jpg\" width=\"800\"><img src=\"../images/op/chapter 1/2.png\" width=\"800\"><img src=\"../images/op/chapter 1/3.png\" width=\"800\"><img src=\"../images/op/chapter 1/4.jpg\" width=\"800\"><img src=\"../images/op/chapter 1/5.png\" width=\"800\"><img src=\"../images/op/chapter 1/6.png\" width=\"800\"><img src=\"../images/op/chapter 1/7.png\" width=\"800\"><img src=\"../images/op/chapter 1/8.png\" width=\"800\"><img src=\"../images/op/chapter 1/9.png\" width=\"800\"><img src=\"../images/op/chapter 1/10.png\" width=\"800\"></div>', 21, 1, '2019-12-13'),
(56, 'Chương 2', '<div style=\"text-align: center;\"><img src=\"../images/op/chapter 2/0.jpeg\" width=\"800\"><img src=\"../images/op/chapter 2/1.jpeg\" width=\"800\"><img src=\"../images/op/chapter 2/2.jpeg\" width=\"800\"><img src=\"../images/op/chapter 2/3.jpeg\" width=\"800\"><img src=\"../images/op/chapter 2/4.jpeg\" width=\"800\"><img src=\"../images/op/chapter 2/5.jpeg\" width=\"800\"><img src=\"../images/op/chapter 2/6.jpeg\" width=\"800\"><img src=\"../images/op/chapter 2/7.jpeg\" width=\"800\"><img src=\"../images/op/chapter 2/8.jpeg\" width=\"800\"><img src=\"../images/op/chapter 2/9.jpeg\" width=\"800\"></div>', 21, 2, '2019-12-13'),
(57, 'Chương 3', '<div style=\"text-align: center;\"><img src=\"../images/op/chapter 3/0.jpeg\" width=\"800\"><img src=\"../images/op/chapter 3/1.jpeg\" width=\"800\"><img src=\"../images/op/chapter 3/2.jpeg\" width=\"800\"><img src=\"../images/op/chapter 3/3.jpeg\" width=\"800\"><img src=\"../images/op/chapter 3/4.jpeg\" width=\"800\"><img src=\"../images/op/chapter 3/5.jpeg\" width=\"800\"><img src=\"../images/op/chapter 3/6.jpeg\" width=\"800\"><img src=\"../images/op/chapter 3/7.jpeg\" width=\"800\"><img src=\"../images/op/chapter 3/8.jpeg\" width=\"800\"><img src=\"../images/op/chapter 3/9.jpeg\" width=\"800\"></div>', 21, 3, '2019-12-13'),
(58, 'Chương 1', '<div style=\"text-align: center;\"><img src=\"../images/naruto/chapter 1/0.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 1/1.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 1/2.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 1/3.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 1/4.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 1/5.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 1/6.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 1/7.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 1/8.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 1/9.jpg\" width=\"800\"></div>', 22, 1, '2019-12-13'),
(59, 'Chương 2', '<div style=\"text-align: center;\"><img src=\"../images/naruto/chapter 2/0.png\" width=\"800\"><img src=\"../images/naruto/chapter 2/1.png\" width=\"800\"><img src=\"../images/naruto/chapter 2/2.png\" width=\"800\"><img src=\"../images/naruto/chapter 2/3.png\" width=\"800\"><img src=\"../images/naruto/chapter 2/4.png\" width=\"800\"><img src=\"../images/naruto/chapter 2/5.png\" width=\"800\"><img src=\"../images/naruto/chapter 2/6.png\" width=\"800\"><img src=\"../images/naruto/chapter 2/7.png\" width=\"800\"><img src=\"../images/naruto/chapter 2/8.png\" width=\"800\"><img src=\"../images/naruto/chapter 2/9.png\" width=\"800\"></div>', 22, 2, '2019-12-13'),
(60, 'Chương 3', '<div style=\"text-align: center;\"><img src=\"../images/naruto/chapter 3/0.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 3/1.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 3/2.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 3/3.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 3/4.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 3/5.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 3/6.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 3/7.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 3/8.jpg\" width=\"800\"><img src=\"../images/naruto/chapter 3/9.jpg\" width=\"800\"></div>', 22, 3, '2019-12-13'),
(61, 'Chương 1', '<div style=\"text-align: center;\"><img src=\"../images/soma/chapter 1/1.png\" width=\"800\"><img src=\"../images/soma/chapter 1/2.png\" width=\"800\"><img src=\"../images/soma/chapter 1/3.png\" width=\"800\"><img src=\"../images/soma/chapter 1/4.png\" width=\"800\"><img src=\"../images/soma/chapter 1/5.png\" width=\"800\"><img src=\"../images/soma/chapter 1/6.png\" width=\"800\"><img src=\"../images/soma/chapter 1/7.png\" width=\"800\"><img src=\"../images/soma/chapter 1/8.png\" width=\"800\"><img src=\"../images/soma/chapter 1/9.png\" width=\"800\">\r\n<img src=\"../images/soma/chapter 1/10.png\" width=\"800\"></div>', 23, 1, '2019-12-13'),
(62, 'Chương 2', '<div style=\"text-align: center;\"><img src=\"../images/soma/chapter 2/0.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/1.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/2.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/3.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/4.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/5.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/6.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/7.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/8.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/9.jpg\" width=\"800\"></div>', 23, 2, '2019-12-13'),
(63, 'Chương 3', '<div style=\"text-align: center;\"><img src=\"../images/soma/chapter 2/0.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/1.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/2.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/3.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/4.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/5.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/6.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/7.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/8.jpg\" width=\"800\"><img src=\"../images/soma/chapter 2/9.jpg\" width=\"800\"></div>', 23, 3, '2019-12-13'),
(64, 'Chương 1', '<div style=\"text-align: center;\"><img src=\"../images/mix/chapter 1/0.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/1.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/2.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/3.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/4.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/5.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/6.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/7.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/8.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/9.jpg\" width=\"800\"></div>', 14, 1, '2019-12-13'),
(65, 'Chương 2', '<div style=\"text-align: center;\"><img src=\"../images/mix/chapter 1/0.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/1.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/2.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/3.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/4.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/5.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/6.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/7.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/8.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/9.jpg\" width=\"800\"></div>', 14, 2, '2019-12-13'),
(66, 'Chương 3', '<div style=\"text-align: center;\"><img src=\"../images/mix/chapter 1/0.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/1.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/2.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/3.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/4.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/5.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/6.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/7.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/8.jpg\" width=\"800\"><img src=\"../images/mix/chapter 1/9.jpg\" width=\"800\"></div>', 14, 3, '2019-12-13'),
(67, 'Chương 1', '<div style=\"text-align: center;\"><img src=\"../images/lcm/chapter 1/0.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 1/1.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 1/2.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 1/3.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 1/4.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 1/5.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 1/6.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 1/7.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 1/8.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 1/9.jpg\" width=\"800\"></div>', 5, 1, '2019-12-13'),
(68, 'Chương 2', '<div style=\"text-align: center;\"><img src=\"../images/lcm/chapter 2/0.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 2/1.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 2/2.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 2/3.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 2/4.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 2/5.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 2/6.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 2/7.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 2/8.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 2/9.jpg\" width=\"800\"></div>', 5, 2, '2019-12-13'),
(69, 'Chương 3', '<div style=\"text-align: center;\"><img src=\"../images/lcm/chapter 3/0.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 3/1.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 3/2.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 3/3.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 3/4.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 3/5.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 3/6.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 3/7.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 3/8.jpg\" width=\"800\"><img src=\"../images/lcm/chapter 3/9.jpg\" width=\"800\"></div>', 5, 3, '2019-12-13'),
(70, 'Chương 1', '<div style=\"text-align: center;\"><img src=\"../images/ctk/chapter 1/1.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 1/2.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 1/3.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 1/4.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 1/5.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 1/6.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 1/7.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 1/8.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 1/9.jpg\" width=\"800\">\r\n<img src=\"../images/ctk/chapter 1/10.jpg\" width=\"800\"></div>', 15, 1, '2019-12-13'),
(71, 'Chương 2', '<div style=\"text-align: center;\"><img src=\"../images/ctk/chapter 2/0.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 2/1.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 2/2.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 2/3.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 2/4.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 2/5.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 2/6.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 2/7.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 2/8.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 2/9.jpg\" width=\"800\"></div>', 15, 2, '2019-12-13'),
(72, 'Chương 3', '<div style=\"text-align: center;\"><img src=\"../images/ctk/chapter 3/0.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 3/1.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 3/2.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 3/3.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 3/4.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 3/5.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 3/6.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 3/7.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 3/8.jpg\" width=\"800\"><img src=\"../images/ctk/chapter 3/9.jpg\" width=\"800\"></div>', 15, 3, '2019-12-13'),
(73, 'Chương 1', '<div style=\"text-align: center;\"><img src=\"../images/ct/chapter 1/0.jpg\" width=\"800\"><img src=\"../images/ct/chapter 1/1.jpg\" width=\"800\"><img src=\"../images/ct/chapter 1/2.jpg\" width=\"800\"><img src=\"../images/ct/chapter 1/3.jpg\" width=\"800\"><img src=\"../images/ct/chapter 1/4.jpg\" width=\"800\"><img src=\"../images/ct/chapter 1/5.jpg\" width=\"800\"><img src=\"../images/ct/chapter 1/6.jpg\" width=\"800\"><img src=\"../images/ct/chapter 1/7.jpg\" width=\"800\"><img src=\"../images/ct/chapter 1/8.jpg\" width=\"800\"><img src=\"../images/ct/chapter 1/9.jpg\" width=\"800\"></div>', 16, 1, '2019-12-13'),
(74, 'Chương 2', '<div style=\"text-align: center;\"><img src=\"../images/ct/chapter 2/0.jpg\" width=\"800\"><img src=\"../images/ct/chapter 2/1.jpg\" width=\"800\"><img src=\"../images/ct/chapter 2/2.jpg\" width=\"800\"><img src=\"../images/ct/chapter 2/3.jpg\" width=\"800\"><img src=\"../images/ct/chapter 2/4.jpg\" width=\"800\"><img src=\"../images/ct/chapter 2/5.jpg\" width=\"800\"><img src=\"../images/ct/chapter 2/6.jpg\" width=\"800\"><img src=\"../images/ct/chapter 2/7.jpg\" width=\"800\"><img src=\"../images/ct/chapter 2/8.jpg\" width=\"800\"><img src=\"../images/ct/chapter 2/9.jpg\" width=\"800\"></div>', 16, 2, '2019-12-13'),
(75, 'Chương 3', '<div style=\"text-align: center;\"><img src=\"../images/ct/chapter 3/0.jpg\" width=\"800\"><img src=\"../images/ct/chapter 3/1.jpg\" width=\"800\"><img src=\"../images/ct/chapter 3/2.jpg\" width=\"800\"><img src=\"../images/ct/chapter 3/3.jpg\" width=\"800\"><img src=\"../images/ct/chapter 3/4.jpg\" width=\"800\"><img src=\"../images/ct/chapter 3/5.jpg\" width=\"800\"><img src=\"../images/ct/chapter 3/6.jpg\" width=\"800\"><img src=\"../images/ct/chapter 3/7.jpg\" width=\"800\"><img src=\"../images/ct/chapter 3/8.jpg\" width=\"800\"><img src=\"../images/ct/chapter 3/9.jpg\" width=\"800\"></div>', 16, 3, '2019-12-13'),
(76, 'Chương 1', '<div style=\"text-align: center;\"><img src=\"../images/vc/chapter 1/0.jpg\" width=\"800\"><img src=\"../images/vc/chapter 1/1.jpg\" width=\"800\"><img src=\"../images/vc/chapter 1/2.jpg\" width=\"800\"><img src=\"../images/vc/chapter 1/3.jpg\" width=\"800\"><img src=\"../images/vc/chapter 1/4.jpg\" width=\"800\"><img src=\"../images/vc/chapter 1/5.jpg\" width=\"800\"><img src=\"../images/vc/chapter 1/6.jpg\" width=\"800\"><img src=\"../images/vc/chapter 1/7.jpg\" width=\"800\"><img src=\"../images/vc/chapter 1/8.jpg\" width=\"800\"><img src=\"../images/vc/chapter 1/9.jpg\" width=\"800\"></div>', 19, 1, '2019-12-13'),
(77, 'Chương 2', '<div style=\"text-align: center;\"><img src=\"../images/vc/chapter 2/0.jpg\" width=\"800\"><img src=\"../images/vc/chapter 2/1.jpg\" width=\"800\"><img src=\"../images/vc/chapter 2/2.jpg\" width=\"800\"><img src=\"../images/vc/chapter 2/3.jpg\" width=\"800\"><img src=\"../images/vc/chapter 2/4.jpg\" width=\"800\"><img src=\"../images/vc/chapter 2/5.jpg\" width=\"800\"><img src=\"../images/vc/chapter 2/6.jpg\" width=\"800\"><img src=\"../images/vc/chapter 2/7.jpg\" width=\"800\"><img src=\"../images/vc/chapter 2/8.jpg\" width=\"800\"><img src=\"../images/vc/chapter 2/9.jpg\" width=\"800\"></div>', 19, 2, '2019-12-13'),
(78, 'Chương 3', '<div style=\"text-align: center;\"><img src=\"../images/vc/chapter 3/0.jpg\" width=\"800\"><img src=\"../images/vc/chapter 3/1.jpg\" width=\"800\"><img src=\"../images/vc/chapter 3/2.jpg\" width=\"800\"><img src=\"../images/vc/chapter 3/3.jpg\" width=\"800\"><img src=\"../images/vc/chapter 3/4.jpg\" width=\"800\"><img src=\"../images/vc/chapter 3/5.jpg\" width=\"800\"><img src=\"../images/vc/chapter 3/6.jpg\" width=\"800\"><img src=\"../images/vc/chapter 3/7.jpg\" width=\"800\"><img src=\"../images/vc/chapter 3/8.jpg\" width=\"800\"><img src=\"../images/vc/chapter 3/9.jpg\" width=\"800\"></div>', 19, 3, '2019-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `id_manga` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `id_manga`, `user`, `date`) VALUES
(5, 'FDGDFG', 1, 'dolam', '2019-12-08'),
(6, 'ghrgh\r\n', 1, 'dolam', '2019-12-08'),
(7, 'l;jklh;j\r\n', 4, 'dolam', '2019-12-08'),
(8, 'acv', 0, 'abc', '2019-12-10'),
(9, 'a', 0, 'abc', '2019-12-10'),
(11, 'avxxx', 0, 'abc', '2019-12-10'),
(12, '1', 0, 'abc', '2019-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `content`, `date`) VALUES
(1, 'Nguyễn Công Tuấn', '123@gmail.com', 2147483647, 'abcxyz', '2019-12-12'),
(3, '1', '11@gmail.com', 123456, '1', '2019-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `kind`
--

CREATE TABLE `kind` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kind`
--

INSERT INTO `kind` (`id`, `name`) VALUES
(1, 'Hành động'),
(4, 'Chuyển sinh'),
(6, 'Xuyên không'),
(8, 'Thể thao'),
(14, 'Trường học');

-- --------------------------------------------------------

--
-- Table structure for table `manga`
--

CREATE TABLE `manga` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `images` text NOT NULL,
  `id_cate` int(11) NOT NULL,
  `id_kind` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `view` int(250) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`id`, `name`, `content`, `images`, `id_cate`, `id_kind`, `id_author`, `view`, `date`, `status`) VALUES
(1, 'One piece', 'One Piece là câu truyện kể về Luffy và các thuyền viên của mình. Khi còn nhỏ, Luffy ước mơ trở thành Vua Hải Tặc. Cuộc sống của cậu bé thay đổi khi cậu vô tình có được sức mạnh có thể co dãn như cao su, nhưng đổi lại, cậu không bao giờ có thể bơi được nữa. Giờ đây, Luffy cùng những người bạn hải tặc của mình ra khơi tìm kiếm kho báu One Piece, kho báu vĩ đại nhất trên thế giới. Trong One Piece, mỗi nhân vật trong đều mang một nét cá tính đặc sắc kết hợp cùng các tình huống kịch tính, lối dẫn truyện hấp dẫn chứa đầy các bước ngoặt bất ngờ và cũng vô cùng hài hước đã biến One Piece trở thành một trong những bộ truyện nổi tiếng nhất không thể bỏ qua. Hãy đọc One Piece để hòa mình vào một thế giới của những hải tặc rộng lớn, đầy màu sắc, sống động và thú vị, cùng đắm chìm với những nhân vật yêu tự do, trên hành trình đi tìm ước mơ của mình.\r\n', 'wallhaven-550105.jpg', 1, 1, 1, 76, '2019-12-18', 'đang cập nhật'),
(2, 'Black clover', 'Aster và Yuno là hai đứa trẻ bị bỏ rơi ở nhà thờ và cùng nhau lớn lên tại đó. Khi còn nhỏ, chúng đã hứa với nhau xem ai sẽ trở thành Ma pháp vương tiếp theo. Thế nhưng, khi cả hai lớn lên, mọi sô chuyện đã thay đổi. Yuno là thiên tài ma pháp với sức mạnh tuyệt đỉnh trong khi Aster lại không thể sử dụng ma pháp và cố gắng bù đắp bằng thể lực. Khi cả hai được nhận sách phép vào tuổi 15, Yuno đã được ban cuốn sách phép cỏ bốn bá (trong khi đa số là cỏ ba lá) mà Aster lại không có cuốn nào. Tuy nhiên, khi Yuno bị đe dọa, sự thật về sức mạnh của Aster đã được giải mã- cậu ta được ban cuốn sách phép cỏ năm lá, cuốn sách phá ma thuật màu đen. Bấy giờ, hai người bạn trẻ đang hướng ra thế giới, cùng chung mục tiêu.\r\n\r\n', 'bc.jpg', 1, 1, 2, 41, '2019-12-01', 'đang cập nhật'),
(3, 'Haikyuu', 'Hinata Shouyou – nhân vật chính của Haikyuu, kể từ khi xem xong một trận bóng chuyền đã thần tượng và mơ ước trở thành “Người khổng lồ tí hon” rồi gia nhập đội bóng chuyền của trường trung học. Sau khi tìm đủ thành viên, họ đã tham gia giải đấu liên trường, tại đây họ đã chạm trán với “Vua sân đấu” Kageyama Tobio và bị dập cho tả tơi. Dù thua nhưng Shouyou vẫn quyết tâm trở thành cầu thủ số một và trả đũa Kageyama. Tuy nhiên, lên cấp 3, oan gia ngõ hẹp thế nào, 2 cậu bé lại gặp nhau trong cùng 1 đội. Câu chuyện sẽ tiếp diễn ra sao? Từ một one shot trên Shounen JUMP!!, sau khi nhận được sự ủng hộ mạnh mẽ của độc giả, Haikyuu!! đã được phát triển thành 1 series cực kì ăn khách. Haikyuu!! được yêu mến bởi cách dẫn truyện hài hước, chú ý đến những cảm xúc đa dạng và tinh tế của các nhân vật, đồng thời không thiếu đi những pha hành động đặc trưng của một shounen thể thao, cộng với nét vẽ rất riêng của Furudate-sensei.\r\n\r\n', 'avatar.jpg', 2, 8, 3, 8, '2019-12-01', 'đang cập nhật'),
(4, 'Isekai De Tadahitori', 'Một thanh niên sinh ra trog một gia đình quý tộc hết thời mặc dù có thiên mệnh à anh hùng nhưng đã vứt bỏ tất cả bắt đầu hành trình với hầu gái LYR.Trong một lần tìm ra quyển bách khoa main đã bị thay đổi thiên mệnh trở thành Quỷ diệt sư\r\n\r\n', 'isekai.jpg', 1, 1, 4, 16, '2019-12-01', 'đang cập nhật'),
(5, 'Lá Chắn Mắt', 'Kobayakawa Sena là một cậu bé chuyên bị sai vặt lúc còn học tiểu học và trung học. Nhưng mọi thứ đã thay đổi khi cậu bắt đầu nhập học ở trường Deimon và Hiruma - đội trưởng câu lạc bộ bóng bầu dục đã phát hiện ra khả năng đặc biệt ở cậu rất phù hợp với môn thể thao này. Hiruma đã \"nhận\" ...\r\n\r\n', 'lcm.jpg', 14, 8, 5, 0, '2019-12-01', 'đang cập nhật'),
(14, 'Mix', 'MIX là PJ mới nhất của Adachi Mitsuru. Vẫn là bối cảnh cũ - Trường trung học Meisei 26 năm sau khi kết thúc manga Touch, vẫn là chuyện về 2 anh em, vẫn là manga về tuổi trẻ và bóng chày nhưng Adachi-sensei chưa bao giờ khiến những fan trung thành của mình cảm thấy thất vọng và nhàm chán. Truyện cũng chưa ra được nhiều, nếu tóm tắt thì cũng chả đến đâu nên các bạn hãy tự mình đón đọc nhé!\r\n\r\n', 'mix.jpg', 2, 8, 6, 3, '2019-12-13', 'đang cập nhật'),
(15, 'Chư Thiên Ký', 'a phù thế giới là 1 giới trong chư thiên vạn giới, 10 vạn năm sinh, 10 vạn năm diệt, thế gian vạn vật hàng tỷ sinh linh, liền tại đây 20 vạn năm một lần sinh diệt ở giữa trầm luân, vòng đi vòng lại tuần hoàn không ngừng, đến 1 ngày, linh hồn của 1 thiếu niên chết đi vài vạn năm trước ở tàng kiếm các tỉnh lại...', 'ctk.jpg', 14, 4, 7, 1, '2019-12-13', 'đang cập nhật'),
(16, 'Côn Thôn Thiên Hạ', 'Khởi đầu từ 1 chú cá CÔN. Chỉ dựa vào thôn phệ để tu hành,thiếu niên chưởng môn Lăng tiêu Các - Phàn Lăng Tiêu đem một bé cá nheo nhỏ tiến hóa thành Thôn Thiên Phệ Địa Linh Côn, trở thành linh sủng sư danh chấn thiên hạ\r\n', 'ct.jpg', 14, 4, 7, 1, '2019-12-13', 'đang cập nhật'),
(17, 'Cung Đấu Live', '20 nữ minh tinh đang nổi tuyến 1, 2 ở trong giới giải trí, cùng lúc xuyên không vào trong cung đình của 1 triều đại nào đó, tiến hành 1 trận \"đại khiêu sát\" cung đình. Với lại Tần Hiểu đã từng bị bôi đen đến thương tích đầy mình dựa vào năng lực và trí tuệ để trở mình, sủng quan hậu cung.\r\n\r\n', 'cdl.jpg', 14, 6, 7, 0, '2019-12-13', 'đang cập nhật'),
(18, 'Thịnh Sủng Kiều Nữ Trở Về Triều Ca', ' đường muội cướp phu quân của cô, cướp thân phận của cô, hại cô chết thảm, tra nam ức hiếp cô sỉ nhục cô chà đạp cô. Trời xanh có mắt, Thịnh Bảo Anh có thể gặp lại ! Vốn dĩ chỉ muốn trả thù tra nam ác nữ, nhưng lại cố ý chọc phải phúc hắc tướng quân.......\r\n', 'ts.jpg', 2, 6, 7, 1, '2019-12-13', 'đã hoàn thành'),
(19, 'Vô Cực Chiều Thiên\r\n', 'Địa Cầu thiếu niên hồn xuyên dị thế, không ngờ một khi thức tỉnh liền trở thành thái giám?? Vì tìm vận mệnh đạp lên đường tu tiên, kỳ ngộ bảo vật, tuyệt thế thần thông, mỹ nhân tình cừu, Tiên Ma tranh phong, một đường trầm bổng chập trùng! Tiên đạo, ma đạo, tà đạo, yêu tộc, linh tộc, Thần tộc, tăng thêm Chân Long, Phượng Hoàng, Huyền Vũ, Bạch Hổ, tứ đại Huyền thú, chư thiên thế lực, tới một cái đánh một cái! Lại nhìn Hàn siêu, thiêu phiên chư thiên, lực phách càn khôn, thành tựu vạn cổ đệ nhất thái giám!\r\n\r\n', 'vc.jpg', 2, 4, 7, 0, '2019-12-13', 'đang cập nhật'),
(20, 'Tư Sủng Âm Dương Phi\r\n', 'Triệu Minh Nguyệt Âm Dương sư thế kỉ 21đi lấy lại Thái Âm Linh Tê bị cướp. Trong cuộc chiến khố liệt đã hy sinh, đáng lẽ linh hồn sẽ tan biến nhưng lại bị triệu hồi sang một thế giới khác, nhập linh hồn vào một người vừa bị chôn vùi và hồi sinh. Nhưng thật không ngờ ngay khi vừa sống lại lại bị giết luôn bởi một người đàn ông mặt quỷ.\r\n\r\n', 'ts1.jpg', 2, 6, 7, 0, '2019-12-13', 'đang cập nhật'),
(21, 'Onepunch Man', 'Onepunch-Man là một Manga thể loại siêu anh hùng với đặc trưng phồng tôm đấm phát chết luôn… Lol!!! Nhân vật chính trong Onepunch-man là Saitama, một con người mà nhìn đâu cũng thấy “tầm thường”, từ khuôn mặt vô hồn, cái đầu trọc lóc, cho tới thể hình long tong. Tuy nhiên, con người nhìn thì tầm thường này lại chuyên giải quyết những vấn đề hết sức bất thường. Anh thực chất chính là một siêu anh hùng luôn tìm kiếm cho mình một đối thủ mạnh. Vấn đề là, cứ mỗi lần bắt gặp một đối thủ tiềm năng, thì đối thủ nào cũng như đối thủ nào, chỉ ăn một đấm của anh là… chết luôn. Liệu rằng Onepunch-Man Saitaman có thể tìm được cho mình một kẻ ác dữ dằn đủ sức đấu với anh? Hãy theo bước Saitama trên con đường một đấm tìm đối cực kỳ hài hước của anh!!\r\n\r\n', 'op.jpg', 1, 1, 9, 10, '2019-12-13', 'đang cập nhật'),
(22, 'Naruto', 'Bối cảnh Naruto xảy ra vào mười hai năm trước khi câu chuyện chính thức bắt đầu, một con hồ ly chín đuôi đã tấn công Konohagakure. Nó là một con quái vật có sức mạnh khủng khiếp, chỉ một cái vẫy từ một trong chín cái đuôi của nó có thể tạo ra những cơn sóng thần và san bằng nhiều ngọn núi. Nó gây ra sự hỗn loạn và giết chết rất nhiều người cho đến khi người đứng đầu làng Lá – Hokage đệ tứ – đã đánh bại nó bằng cách đổi lấy mạng sống của mình để phong ấn nó vào trong người một đứa trẻ mới sinh. Đứa trẻ đó tên là Uzumaki Naruto. Bộ truyện kể về cuộc hành trình đầy gian khổ với vô vàn khó khăn, thử thách của Naruto từ khi còn là một cậu bé tới khi trở thành một trong những nhẫn giả vĩ đại nhất. Không chỉ mô tả về một thế giới nhẫn giả huyền bí, Naruto còn mang trong nó nhiều ý nghĩa nhân sinh sâu sắc về tình bạn, tình đồng đội, tình yêu, ước mơ và hi vọng.\r\n\r\n', 'nr.jpg', 1, 14, 10, 2, '2019-12-13', 'đang cập nhật'),
(23, 'Vua Bếp Soma', 'Cậu trai trẻ Yukihira Souma là con nhà nòi của 1 quán ăn bình dân , cậu có 1 khao khát cháy bỏng là vượt qua cha mình người đã đánh bại cậu liên tục 489 trận ( mặc dù trình nấu ăn của anh Main cũng thần thánh không kém ) . Đến 1 ngày cậu nghe lời cha mình để vào trường đào tạo tài năng ẩm thực . Câu chuyện đời cậu sắp bước sang 1 ngã rẻ khác nhìu thú vị hơn...\r\n\r\n', 'soma.jpg', 1, 14, 8, 1, '2019-12-13', 'đang cập nhật');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `status`, `sort_order`, `link`) VALUES
(1, 'wallhaven-550105.jpg', 'One Piece', 'On', 1, 'manga/manga-text-chapter/index.php?id_manga=1'),
(2, 'bc.jpg', 'Black clover\r\n', 'On', 2, 'manga/manga-text-chapter/index.php?id_manga=2'),
(3, 'avatar.jpg', 'Haikyuu', 'On', 3, 'manga/manga-text-chapter/index.php?id_manga=3'),
(4, 'isekai.jpg', 'isekai', 'On', 4, 'manga/manga-text-chapter/index.php?id_manga=4');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(11) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `footer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `logo`, `footer`) VALUES
(1, 'logo.png', '© 2019 Website truyện manga Madara');

-- --------------------------------------------------------

--
-- Table structure for table `watch it later`
--

CREATE TABLE `watch it later` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `id_manga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kind`
--
ALTER TABLE `kind`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watch it later`
--
ALTER TABLE `watch it later`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kind`
--
ALTER TABLE `kind`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `manga`
--
ALTER TABLE `manga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `watch it later`
--
ALTER TABLE `watch it later`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
