-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 03:36 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `aid` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created` varchar(250) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`aid`, `name`, `email`, `password`, `created`, `status`) VALUES
(4, 'admin', 'aayushb9157@gmail.com', '0c7540eb7e65b553ec1ba6b20de79608', '2021-04-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE `ans` (
  `no` int(10) NOT NULL,
  `ans1` varchar(1000) NOT NULL,
  `ans2` varchar(1000) NOT NULL,
  `ans3` varchar(1000) NOT NULL,
  `ans4` varchar(1000) NOT NULL,
  `ans5` varchar(1000) NOT NULL,
  `ans6` varchar(1000) NOT NULL,
  `ans7` varchar(1000) NOT NULL,
  `ans8` varchar(1000) NOT NULL,
  `ans9` varchar(2000) NOT NULL,
  `ans10` varchar(1000) NOT NULL,
  `ans11` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`no`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`, `ans7`, `ans8`, `ans9`, `ans10`, `ans11`) VALUES
(1, 'aayushb9157@gmail.com', 'aayushb9157@gmail.com', '0987654321', 'assdsdgdfgsdvdfbtvdvd', 'wewfedvdvdcas', 'ddvxc c vsdvscsc', 'ascdxaa', 'ascxc c', 'dc cxc xzza', 'assaasdcc', 'sxcxz asd'),
(5, 'aayushb9157@gmail.com', 'aayushb9157@gmail.com', '0987654321', 'assdsdgdfgsdvdfbtvdvd', 'wewfedvdvdcas', 'ddvxc c vsdvscsc', 'ascdxaa', 'ascxc c', 'dc cxc xzza', 'assaasdcc', 'sxcxz asd'),
(6, 'aayushb9157@gmail.com', 'aayushb9157@gmail.com', '0987654321', 'assdsdgdfgsdvdfbtvdvd', 'wewfedvdvdcas', 'ddvxc c vsdvscsc', 'ascdxaa', 'ascxc c', 'dc cxc xzza', 'assaasdcc', 'sxcxz asd'),
(7, 'kk@gmail.com', 'kk@gmail.com', '0987654321', 'assdsdgdfgsdvdfbtvdvd', 'wewfedvdvdcas', 'ddvxc c vsdvscsc', 'ascdxaa', 'ascxc c', 'dc cxc xzza', 'assaasdcc', 'sxcxz asd'),
(8, 'kk@gmail.com', 'kk@gmail.com', '0987654321', 'assdsdgdfgsdvdfbtvdvd', 'wewfedvdvdcas', 'ddvxc c vsdvscsc', 'ascdxaa', 'ascxc c', 'dc cxc xzza', 'assaasdcc', 'sxcxz asd'),
(9, 'kk@gmail.com', 'kk@gmail.com', '0987654321', 'assdsdgdfgsdvdfbtvdvd', 'wewfedvdvdcas', 'ddvxc c vsdvscsc', 'ascdxaa', 'ascxc c', 'dc cxc xzza', 'assaasdcc', 'sxcxz asd'),
(10, 'kk@gmail.com', 'kk@gmail.com', '0987654321', 'assdsdgdfgsdvdfbtvdvd', 'wewfedvdvdcas', 'ddvxc c vsdvscsc', 'ascdxaa', 'ascxc c', 'dc cxc xzza', 'assaasdcc', 'sxcxz asd'),
(11, 'kk@gmail.com', 'kk@gmail.com', '0987654321', 'assdsdgdfgsdvdfbtvdvd', 'wewfedvdvdcas', 'ddvxc c vsdvscsc', 'ascdxaa', 'ascxc c', 'dc cxc xzza', 'assaasdcc', 'sxcxz asd'),
(12, 'kk@gmail.com', 'kk@gmail.com', '0987654321', 'assdsdgdfgsdvdfbtvdvd', 'wewfedvdvdcas', 'ddvxc c vsdvscsc', 'ascdxaa', 'ascxc c', 'dc cxc xzza', 'assaasdcc', 'sxcxz asd');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `email`, `subject`, `message`) VALUES
(17, 'chauhan', 'aayushb9157@gmail.com', 'aaaa', 'assfsg'),
(18, 'chauhan aayush bharatbhai', 'aayushb9157@gmail.com', 'about that', 'acvbdbb'),
(19, 'chauhan aayush bharatbhai', 'aayushb9157@gmail.com', 'about that', 'acvbdbb'),
(20, '', 'aayushb9157@gmail.com', '', ''),
(21, 'chauhan bharatbhai', 'aayushb9157@gmail.com', 'aa', ' vdvdvsacdvsdv'),
(22, 'chauhan aayush bharatbhai', 'aayushb9157@gmail.com', 'about', 'sfv'),
(23, 'chauhan aayush bharatbhai', 'aayushb9157@gmail.com', 'about', 'sfv'),
(24, 'chauhan aayush bharatbhai', 'aayushb9157@gmail.com', 'about', 'hhhhh'),
(25, 'chauhan aayush bharatbhai', 'aayushb9157@gmail.com', 'about', 'ascsdbb'),
(26, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `invest`
--

CREATE TABLE `invest` (
  `no` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `total` int(20) NOT NULL,
  `active` int(20) NOT NULL,
  `profit` int(20) NOT NULL,
  `issue` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invest`
--

INSERT INTO `invest` (`no`, `email`, `total`, `active`, `profit`, `issue`) VALUES
(1, '01', 20000, 3000, 4000, 2),
(2, 'aayushb9157@gmail.com', 0, 0, 10, 100),
(3, 'krina@gmail', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `invest_result`
--

CREATE TABLE `invest_result` (
  `no` int(10) NOT NULL,
  `id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `amount` int(10) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invest_result`
--

INSERT INTO `invest_result` (`no`, `id`, `title`, `amount`, `status`, `date`) VALUES
(1, 'krina@gmail', 'joker', 20000, 'progress', '2021-05-03'),
(2, 'aayushb9157@gmail.com', 'dark tower', 30000, 'complete', '2021-05-04'),
(6, 'aayushb9157@gmail.com', 'Fast & Furious', 4000, 'progress', '2021-05-06'),
(12, 'krina@gmail', 'Blue Sarf', 3000, 'failed', '2021-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `count` int(10) NOT NULL,
  `total` int(12) NOT NULL,
  `mid` varchar(10) NOT NULL,
  `emailid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `no` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`no`, `email`, `time`) VALUES
(1, 'aayushb9157@gmail.com', '2021-04-16 12:53:54'),
(2, 'aayushb9157@gmail.com', '2021-04-16 12:55:19'),
(3, 'aayushb9157@gmail.com', '2021-04-16 12:55:39'),
(14, 'aayushb9157@gmail.com', '2021-03-11 19:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `more`
--

CREATE TABLE `more` (
  `no` int(10) NOT NULL,
  `mid` varchar(10) NOT NULL,
  `cast1` varchar(255) DEFAULT NULL,
  `name1` varchar(255) DEFAULT NULL,
  `image1` varchar(1000) DEFAULT NULL,
  `cast2` varchar(255) DEFAULT NULL,
  `name2` varchar(255) DEFAULT NULL,
  `image2` varchar(1000) DEFAULT NULL,
  `cast3` varchar(255) DEFAULT NULL,
  `name3` varchar(255) DEFAULT NULL,
  `image3` varchar(1000) DEFAULT NULL,
  `cast4` varchar(255) DEFAULT NULL,
  `name4` varchar(255) DEFAULT NULL,
  `image4` varchar(1000) DEFAULT NULL,
  `budget` bigint(20) DEFAULT NULL,
  `production` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `more`
--

INSERT INTO `more` (`no`, `mid`, `cast1`, `name1`, `image1`, `cast2`, `name2`, `image2`, `cast3`, `name3`, `image3`, `cast4`, `name4`, `image4`, `budget`, `production`) VALUES
(6, '00', 'Actress', 'Emma', 'em.jpg', 'Actor', 'Lieonardo', 'lenardo.jpg', 'Directore', 'Cristopher', 'dir.jpg', 'Actor', 'Tom Cruise', 'tom.jpg', 4000, 20),
(7, '01', 'Actress', 'Emma', 'em.jpg', 'Actor', 'Lieonardo', 'lenardo.jpg', 'Directore', 'Cristopher', 'dir.jpg', 'Actor', 'Tom Cruise', 'tom.jpg', 20000, 30),
(8, '03', 'Actress', 'Emma', 'em.jpg', 'Actor', 'Lieonardo', 'lenardo.jpg', 'Directore', 'Cristopher', 'dir.jpg', 'Actor', 'Tom Cruise', 'tom.jpg', 30000, 35),
(9, '04', 'Actress', 'Emma', 'em.jpg', 'Actor', 'Lieonardo', 'lenardo.jpg', 'Directore', 'Cristopher', 'dir.jpg', 'Actor', 'Tom Cruise', 'tom.jpg', 20000, 34),
(10, '02', 'Actress', 'Emma', 'em.jpg', 'Actor', 'Lieonardo', 'lenardo.jpg', 'Directore', 'Cristopher', 'dir.jpg', 'Actor', 'Tom Cruise', 'tom.jpg', 30000, 35),
(11, '05', 'Actress', 'Emma', 'em.jpg', 'Actor', 'Lieonardo', 'lenardo.jpg', 'Directore', 'Cristopher', 'dir.jpg', 'Actor', 'Tom Cruise', 'tom.jpg', 30000, 35),
(12, '06', 'Actress', 'Emma', 'em.jpg', 'Actor', 'Lieonardo', 'lenardo.jpg', 'Directore', 'Cristopher', 'dir.jpg', 'Actor', 'Tom Cruise', 'tom.jpg', 30000, 35),
(13, '07', 'Actress', 'Emma', 'em.jpg', 'Actor', 'Lieonardo', 'lenardo.jpg', 'Directore', 'Cristopher', 'dir.jpg', 'Actor', 'Tom Cruise', 'tom.jpg', 30000, 35),
(14, '08', 'Actress', 'Emma', 'em.jpg', 'Actor', 'Lieonardo', 'lenardo.jpg', 'Directore', 'Cristopher', 'dir.jpg', 'Actor', 'Tom Cruise', 'tom.jpg', 30000, 35),
(15, '09', 'Actress', 'Emma', 'em.jpg', 'Actor', 'Lieonardo', 'lenardo.jpg', 'Directore', 'Cristopher', 'dir.jpg', 'Actor', 'Tom Cruise', 'tom.jpg', 30000, 50),
(16, '11', 'Actress', 'Emma', 'em.jpg', 'Actor', 'Lieonardo', 'dir.jpg', 'directore', 'Cristopher', 'em.jpg', 'Actor', 'producer', 'dir1 (1).jpg', 2000, 43);

-- --------------------------------------------------------

--
-- Table structure for table `mov`
--

CREATE TABLE `mov` (
  `mid` varchar(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `rate` int(12) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `img` varchar(10000) DEFAULT NULL,
  `mlink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mov`
--

INSERT INTO `mov` (`mid`, `name`, `category`, `rate`, `about`, `date`, `img`, `mlink`) VALUES
('00', 'Joker', 'Drama', 5, 'Forever alone in a crowd, failed comedian Arthur Fleck seeks connection as he walks the streets of Gotham\r\n', '2022-03-09', 'mov_top1.jpg', NULL),
('01', 'Aladdin', 'Drama', 4, 'Aladdin, a kind thief, woos Jasmine, the princess of Agrabah, with the help of Genie', '2021-04-07', 'mov_top2.jpg', NULL),
('02', 'Fast & Furious', 'Action', 5, 'Mae Holland seizes the opportunity of a lifetime when she lands a job with the world’s most powerful technology and social media company.', '2021-05-21', 'mov_top3.jpg', NULL),
('03', 'Dark Tower', 'Drama', 4, 'Mae Holland (Emma Watson) seizes the opportunity of a lifetime when she lands a job with the world’s most powerful technology and social media company.', '2021-04-08', 'featured_img3.jpg', NULL),
('04', 'Space Time', 'Sci-fi', 5, 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.', '2021-04-01', 'featured_img1.jpg', NULL),
('05', 'Designing of the future', 'Sci-fi', 4, ' Much of human progress over the past century has been magnificent. Technology that brings information to the remotest corners of the world and medicine that heals diseases once thought incurable are all signs of what humans can accomplish.', '2021-03-16', 'featured_img2.jpg', NULL),
('06', 'Art of Flight', 'Action', 3, 'The Art of Flight is a Red Bull sponsored documentary film about snowboarding and a successor to That\'s It, That\'s All.', '2021-04-11', 'featured_img4.jpg', NULL),
('07', 'Planet Earth', 'Drama', 4, 'Dazzling, state-of-the-art high-definition imagery highlights this breathtaking documentary series featuring footage of some of the world\'s most awe-inspiring natural wonders -- from the oceans to the deserts to the polar ice caps.', '2021-02-02', 'featured_img5.jpg', NULL),
('08', 'Polar Express', 'Sci-fi', 3, 'A young boy boards a train and embarks on an extraordinary journey to the North Pole to meet Santa Claus. His life takes a turn after he encounters special people that make his journey memorable.', '2020-09-14', 'featured_img6.jpg', NULL),
('09', 'Mad Profit', 'Drama', 4, 'Mad profit movie is the new movie about how to make profits in that view.', '2021-04-06', 'featured_img7.jpg', NULL),
('10', 'Geosterm', 'Sci-fi', 5, 'The Dutch Boy Program staves off natural disasters but somehow a Geostorm is approaching many countries. Jake Lawson, a technology designer, is tasked with saving the world from this disaster.', '2021-04-05', 'featured_img8.jpg', NULL),
('11', 'Aayush', 'Sci-fi', 5, 'fgbgntrbbgnn', '0000-00-00', '1.PNG', NULL),
('12', 'this is exm', 'Thriller', 2, '<p>hefflvbffb</p><p><br></p>', '2021-05-05', 'pexels-mudassir-ali-2680270.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `mid` int(10) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `mcategory` varchar(255) NOT NULL,
  `mcast` varchar(255) NOT NULL,
  `mproduction` varchar(255) NOT NULL,
  `mposter` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mid`, `mname`, `mcategory`, `mcast`, `mproduction`, `mposter`) VALUES
(1, 'aaaaaaaaa', 'aaaa', 'aaadaac', '1', NULL),
(11, 'Money Heist', 'Thriller', 'Úrsula Corberó,alba Fores', '8', NULL),
(12, 'Big Bull', 'Biography', 'abhisek bachhan,iliana decruse', '3', NULL),
(13, 'bigbull', 'Biography', 'asfdbdfb', '4', NULL),
(14, 'chauhan aayush', 'Action', '', '', NULL),
(15, '', 'Action', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `ques` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `mid` int(12) NOT NULL,
  `mrating` float NOT NULL,
  `mreview` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`mid`, `mrating`, `mreview`) VALUES
(1, 4.5, 'good'),
(11, 9, 'excellent');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `cpass` varchar(255) DEFAULT NULL,
  `cprofile` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone`, `pass`, `cpass`, `cprofile`) VALUES
(5, 'chauhan aayush bharatbhai', 'aayushb9157@gmail.com', 987654321, '1234', '1234', NULL),
(39, 'kat kris', 'kat@gmail.com', 12343211, 'Orton@123', 'Orton@123', NULL),
(40, 'patel Krina', 'krina@gmail', 543123421, 'Orton@123', 'Orton@123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `script`
--

CREATE TABLE `script` (
  `wemail` varchar(255) NOT NULL,
  `script` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `scripts`
--

CREATE TABLE `scripts` (
  `no` int(10) NOT NULL,
  `wid` varchar(255) NOT NULL,
  `script` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scripts`
--

INSERT INTO `scripts` (`no`, `wid`, `script`) VALUES
(11, 'aayush@gmail', '250524_mac1 (2).pdf'),
(12, 'aayush@gmail', '0.pdf'),
(13, 'aayush@gmail', '0.pdf'),
(14, 'aayush@gmail', '0.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'MovieBazaar', 'hello@themoviebazaar.com', '+91 7045310323', 'Coming Soon', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1 = admin, 2 = staff',
  `avatar` text NOT NULL DEFAULT 'no-image-available.png',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `type`, `avatar`, `date_created`) VALUES
(1, 'Aayush', '', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 1, 'no-image-available.png', '2020-11-26 10:57:04'),
(2, 'AAYUSH', '', 'admin@me', '1234', 1, 'no-image-available.png', '2021-04-30 12:18:28'),
(7, 'chauhan', 'admin', 'admin1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, '1619623320_0001 (1).jpg', '2021-04-28 20:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `visit_feedback`
--

CREATE TABLE `visit_feedback` (
  `no` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visit_feedback`
--

INSERT INTO `visit_feedback` (`no`, `name`, `email`, `message`, `rating`) VALUES
(0, 'chauhan aayush bharatbhai', 'aayushb9157@gmail.com', 'assdc', 8),
(5, 'panchal krupa kishorbhai', 'kk@gmail.com', 'gggg', 4),
(6, 'chauhan aayush bharatbhai', 'aayushb9157@gmail.com', 'adadaf', 10),
(7, 'Chauhan Aayush Bharatbhai', 'aayushb9157@gmail.com', 'cvf ', 4),
(8, 'chauhan aayush bharatbhai', 'aayushb9157@gmail.com', 'asfdb', 10),
(9, 'chauhan aayush bharatbhai', 'aayushb9157@gmail.com', 'asfdb', 10),
(10, 'chauhan bharatbhai', 'aayushb9157@gmail.com', ' Hello world', 10);

-- --------------------------------------------------------

--
-- Table structure for table `writer`
--

CREATE TABLE `writer` (
  `wid` int(11) NOT NULL,
  `wemail` varchar(255) NOT NULL,
  `wname` varchar(255) NOT NULL,
  `wpass` varchar(255) NOT NULL,
  `wcpass` varchar(255) NOT NULL,
  `wphone` int(12) NOT NULL,
  `wprofile` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `writer`
--

INSERT INTO `writer` (`wid`, `wemail`, `wname`, `wpass`, `wcpass`, `wphone`, `wprofile`) VALUES
(2, 'aa@gmail', 'aayush chauhan', '1234', '1234', 3214356, 'aa.jpg'),
(3, 'aaa@m', 'aayush', 'qwert', 'qwert', 1234321, ''),
(1, 'aayush@gmail', 'Aayush Chauhan', '1234', '1234', 123456789, ''),
(10, 'aayushb9157@gmail.com', 'chauhan bharatbhai', 'Orton@123', 'Orton@123', 987654321, ''),
(9, 'ashu@gmail.com', 'chauhan  ashu', 'Orton@123', 'Orton@123', 3211234, '');

-- --------------------------------------------------------

--
-- Table structure for table `writer_feedback`
--

CREATE TABLE `writer_feedback` (
  `no` int(10) NOT NULL,
  `wemail` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `writer_feedback`
--

INSERT INTO `writer_feedback` (`no`, `wemail`, `email`, `rating`) VALUES
(1, 'firstwriter', 'aayushb@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `writer_statistic`
--

CREATE TABLE `writer_statistic` (
  `no` int(11) NOT NULL,
  `wemail` varchar(255) NOT NULL,
  `submit` int(10) NOT NULL,
  `approved` int(10) NOT NULL,
  `made` int(10) NOT NULL,
  `earn` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `writer_statistic`
--

INSERT INTO `writer_statistic` (`no`, `wemail`, `submit`, `approved`, `made`, `earn`) VALUES
(1, 'aayush@gmail', 100, 5, 2, 1000),
(8, 'ashu@gmail.com', 0, 0, 0, 0),
(9, 'aayushb9157@gmail.com', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `writer_stories`
--

CREATE TABLE `writer_stories` (
  `no` int(10) NOT NULL,
  `wemail` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `submit` date NOT NULL,
  `result` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `writer_stories`
--

INSERT INTO `writer_stories` (`no`, `wemail`, `name`, `submit`, `result`, `status`) VALUES
(3, 'aa@gmail', 'Fast and Furious', '2021-05-22', 'Rejected', 'Post-Production'),
(8, 'aayush@gmail', 'lucifer', '2021-05-10', 'Accepted', 'Pre-Production'),
(9, 'aayush@gmail', 'Money Hiest', '2021-05-13', 'Accepted', 'Post-Production');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `ans`
--
ALTER TABLE `ans`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invest`
--
ALTER TABLE `invest`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `invest_result`
--
ALTER TABLE `invest_result`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD KEY `emailid` (`emailid`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `more`
--
ALTER TABLE `more`
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `mov`
--
ALTER TABLE `mov`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `script`
--
ALTER TABLE `script`
  ADD KEY `wemail` (`wemail`);

--
-- Indexes for table `scripts`
--
ALTER TABLE `scripts`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit_feedback`
--
ALTER TABLE `visit_feedback`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `writer`
--
ALTER TABLE `writer`
  ADD PRIMARY KEY (`wemail`),
  ADD UNIQUE KEY `wphone` (`wphone`),
  ADD UNIQUE KEY `wid` (`wid`);

--
-- Indexes for table `writer_feedback`
--
ALTER TABLE `writer_feedback`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `writer_statistic`
--
ALTER TABLE `writer_statistic`
  ADD PRIMARY KEY (`no`),
  ADD KEY `wemail` (`wemail`);

--
-- Indexes for table `writer_stories`
--
ALTER TABLE `writer_stories`
  ADD PRIMARY KEY (`no`),
  ADD KEY `wemail` (`wemail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `aid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ans`
--
ALTER TABLE `ans`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `invest`
--
ALTER TABLE `invest`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invest_result`
--
ALTER TABLE `invest_result`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `more`
--
ALTER TABLE `more`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `scripts`
--
ALTER TABLE `scripts`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `visit_feedback`
--
ALTER TABLE `visit_feedback`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `writer`
--
ALTER TABLE `writer`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `writer_feedback`
--
ALTER TABLE `writer_feedback`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `writer_statistic`
--
ALTER TABLE `writer_statistic`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `writer_stories`
--
ALTER TABLE `writer_stories`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`emailid`) REFERENCES `registration` (`email`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`mid`) REFERENCES `mov` (`mid`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`email`) REFERENCES `registration` (`email`);

--
-- Constraints for table `more`
--
ALTER TABLE `more`
  ADD CONSTRAINT `more_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `mov` (`mid`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `movie` (`mid`);

--
-- Constraints for table `script`
--
ALTER TABLE `script`
  ADD CONSTRAINT `script_ibfk_1` FOREIGN KEY (`wemail`) REFERENCES `writer` (`wemail`);

--
-- Constraints for table `writer_statistic`
--
ALTER TABLE `writer_statistic`
  ADD CONSTRAINT `writer_statistic_ibfk_1` FOREIGN KEY (`wemail`) REFERENCES `writer` (`wemail`);

--
-- Constraints for table `writer_stories`
--
ALTER TABLE `writer_stories`
  ADD CONSTRAINT `writer_stories_ibfk_1` FOREIGN KEY (`wemail`) REFERENCES `writer` (`wemail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
