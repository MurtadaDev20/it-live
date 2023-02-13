-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 03:24 PM
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
-- Database: `itlive`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'itlive', 'itlive@gmail.com', '$2y$10$/KRAZ0VakP.zZjUbCk3YPOhjtbPsc4Ccfhx.lVyWEpc29dXVEdLxS');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `text`) VALUES
(2, 'murtada', 'TelectralP.O.S@gmail.com', ';ojoj;oj;pkp;k'),
(3, 'مرتضى لقمان', 'murtadait20@gmail.com', 'الصحة العالمية: تفشي كورونا يزداد سوءاً في كوريا الشمالية\r\nتكريم عائلة الفقيد اسامة ليث احد متطوعي النسخة الثالثة بدرع الوفاء ومداخلة بشار سمير');

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `text` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`id`, `username`, `text`, `image`) VALUES
(1, 'محمد حسين', 'أكبر ملتقى عراقي لتكنولوجيا المعلومات في العراق منذ عام 2017.  أول تجمع عراقي تكنولوجي سنوي تأسس عام2017 يهتم بمواكبة ونقل احدث التقنيات حول العالم في مجال البرمجة والشبكات والذكاء الاصطناعي وامن البيانات والتحول الرقمي من خلال استضافة الخبرات المتنو', 'landin.jpg'),
(2, 'مرتضى لقمان', 'أكبر ملتقى عراقي لتكنولوجيا المعلومات في العراق منذ عام 2017.  أول تجمع عراقي تكنولوجي سنوي تأسس عام2017 يهتم بمواكبة ونقل احدث التقنيات حول العالم في مجال البرمجة والشبكات والذكاء الاصطناعي وامن البيانات والتحول الرقمي من خلال استضافة الخبرات المتنو', 'landin.1jpg.jpg'),
(3, 'حسين يوسف', 'أكبر ملتقى عراقي لتكنولوجيا المعلومات في العراق منذ عام 2017.  أول تجمع عراقي تكنولوجي سنوي تأسس عام2017 يهتم بمواكبة ونقل احدث التقنيات حول العالم في مجال البرمجة والشبكات والذكاء الاصطناعي وامن البيانات والتحول الرقمي من خلال استضافة الخبرات المتنو', 'landin2.jpg'),
(4, 'Murtada', 'أكبر ملتقى عراقي لتكنولوجيا المعلومات في العراق منذ عام 2017.  أول تجمع عراقي تكنولوجي سنوي تأسس عام2017 يهتم بمواكبة ونقل احدث التقنيات حول العالم في مجال البرمجة والشبكات والذكاء الاصطناعي وامن البيانات والتحول الرقمي من خلال استضافة الخبرات المتنو', 'landin3.jpg'),
(5, 'webe', 'أول من أطلق عليهم \" جيل ألفا \"، صديق الأطفال الدكتور مصطفى خالد شريك مؤسس في STEAMers و  Code of Kids ومن أوائل الذين حصلوا على براءة اختراع في الذكاء الإصطناعي من الصين، تحدث لنا عن STEAM Education (الترفيه بالتعليم) وعن  تقليل الفوارق بين الأطفال و', 'photo_2022-11-04_18-25-39.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `img` varchar(250) NOT NULL,
  `statuse` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `phone`, `img`, `statuse`) VALUES
(38, 'مرتضى لقمان عبد', 'murtadait20@gmail.com', '1212', 'بغداد', '07725933735', '', 0),
(39, 'محمد حسين', '1212141477mnmn@gmail.com', '1212', 'بابل', '9878976', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `video_speakers`
--

CREATE TABLE `video_speakers` (
  `id_vid` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` varchar(250) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video_speakers`
--

INSERT INTO `video_speakers` (`id_vid`, `title`, `content`, `video`) VALUES
(18, 'الصحة العالمية: تفشي كورونا يزداد سوءاً في كوريا الشمالية', 'الصحة العالمية: تفشي كورونا يزداد سوءاً في كوريا الشمالية\r\nالصحة العالمية: تفشي كورونا يزداد سوءاً في كوريا الشماليةالصحة العالمية: تفشي كورونا يزداد سوءاً في كوريا الشمالية\r\nالصحة العالمية: تفشي كورونا يزداد سوءاً في كوريا الشماليةالصحة العالمية: تف', '3.MOV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_speakers`
--
ALTER TABLE `video_speakers`
  ADD PRIMARY KEY (`id_vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `video_speakers`
--
ALTER TABLE `video_speakers`
  MODIFY `id_vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
