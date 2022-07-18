-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 05:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nra`
--

-- --------------------------------------------------------

--
-- Table structure for table `dept_codes`
--

CREATE TABLE `dept_codes` (
  `id` int(10) NOT NULL,
  `dept_id` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_codes`
--

INSERT INTO `dept_codes` (`id`, `dept_id`, `password`) VALUES
(1, '@ict_dept', 'NRA@ict-dept2021'),
(2, '@hr_dept', 'NRA@hr-dept2021'),
(3, '@cs_dept', 'NRA@cs-dept2021'),
(4, '@af_dept', 'NRA@af-dept2021');

-- --------------------------------------------------------

--
-- Table structure for table `excel_four`
--

CREATE TABLE `excel_four` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `excel_four`
--

INSERT INTO `excel_four` (`id`, `name`, `size`, `downloads`, `date-time`) VALUES
(24, 'Book (1).xlsx', 8731, 0, '2021-09-30 08:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `excel_one`
--

CREATE TABLE `excel_one` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `excel_one`
--

INSERT INTO `excel_one` (`id`, `name`, `size`, `downloads`, `date-time`) VALUES
(76, 'ITB No. 2021_FRSSD_108932 Accommodation Items.xlsx', 285768, 0, '2021-10-08 08:57:46'),
(77, 'ITB No. 2021_FRSSD_108932 Accommodation Items.xlsx', 285768, 0, '2021-10-08 08:57:51'),
(78, 'ITB No. 2021_FRSSD_108932 Accommodation Items.xlsx', 285768, 0, '2021-10-08 09:02:46'),
(79, 'ITB No. 2021_FRSSD_108932 Accommodation Items.xlsx', 285768, 0, '2021-10-08 09:02:51'),
(80, 'Book.xlsx', 8732, 0, '2021-10-08 10:04:56'),
(81, 'Book.xlsx', 8732, 0, '2021-10-08 10:05:01'),
(82, 'Book.xlsx', 8732, 0, '2021-10-08 10:05:08'),
(83, 'Book.xlsx', 8732, 0, '2021-10-08 10:17:45'),
(84, 'Book.xlsx', 8732, 0, '2021-10-08 10:18:01'),
(85, 'excel-1 (2).php', 285768, 0, '2021-10-08 14:27:10'),
(86, 'Book.xlsx', 8732, 0, '2021-10-08 14:27:32'),
(87, 'Book.xlsx', 8732, 0, '2021-10-08 14:27:55'),
(88, 'Book.xlsx', 8732, 0, '2021-10-08 14:28:24'),
(89, 'Book.xlsx', 8732, 0, '2021-10-08 14:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `excel_three`
--

CREATE TABLE `excel_three` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `excel_three`
--

INSERT INTO `excel_three` (`id`, `name`, `size`, `downloads`, `date-time`) VALUES
(2, 'Book.xlsx', 8732, 0, '2021-09-30 09:30:01'),
(3, 'ITB No. 2021_FRSSD_108932 Accommodation Items.xlsx', 285768, 0, '2021-10-08 08:56:03'),
(4, 'ITB No. 2021_FRSSD_108932 Accommodation Items.xlsx', 285768, 0, '2021-10-08 08:56:08'),
(5, 'ITB No. 2021_FRSSD_108932 Accommodation Items.xlsx', 285768, 0, '2021-10-08 08:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `excel_two`
--

CREATE TABLE `excel_two` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `excel_two`
--

INSERT INTO `excel_two` (`id`, `name`, `size`, `downloads`, `date-time`) VALUES
(3, 'Book (1).xlsx', 8731, 0, '2021-09-30 08:34:56'),
(4, 'Book (1).xlsx', 8731, 0, '2021-09-30 08:34:59');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pdf_four`
--

CREATE TABLE `pdf_four` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdf_four`
--

INSERT INTO `pdf_four` (`id`, `name`, `size`, `downloads`, `date-time`) VALUES
(1, 'ICT Assistant -Maban  (1).pdf', 678100, 0, '2021-09-30 14:51:52'),
(2, 'ICT Assistant -Maban  (1).pdf', 678100, 0, '2021-09-30 14:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_one`
--

CREATE TABLE `pdf_one` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdf_one`
--

INSERT INTO `pdf_one` (`id`, `name`, `size`, `downloads`, `date-time`) VALUES
(3, 'garang doc.pdf', 128224, 0, '2021-09-30 15:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_three`
--

CREATE TABLE `pdf_three` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdf_three`
--

INSERT INTO `pdf_three` (`id`, `name`, `size`, `downloads`, `date-time`) VALUES
(4, 'garang doc.pdf', 128224, 0, '2021-09-30 14:20:28'),
(5, 'garang doc.pdf', 128224, 0, '2021-09-30 14:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_two`
--

CREATE TABLE `pdf_two` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `powerpoint_four`
--

CREATE TABLE `powerpoint_four` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `powerpoint_four`
--

INSERT INTO `powerpoint_four` (`id`, `name`, `size`, `downloads`, `date-time`) VALUES
(5, 'Presentation1.pptx', 29310, 1, '2021-10-07 12:07:42'),
(6, 'Presentation1.pptx', 29310, 0, '2021-10-07 12:07:06'),
(7, 'Presentation1.pptx', 29310, 0, '2021-10-07 12:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `powerpoint_one`
--

CREATE TABLE `powerpoint_one` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `powerpoint_one`
--

INSERT INTO `powerpoint_one` (`id`, `name`, `size`, `downloads`, `date-time`) VALUES
(3, 'Presentation1.pptx', 29310, 0, '2021-09-30 12:19:21'),
(4, 'Presentation1.pptx', 29310, 0, '2021-09-30 12:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `powerpoint_three`
--

CREATE TABLE `powerpoint_three` (
  `id` int(10) NOT NULL,
  `name` int(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `powerpoint_three`
--

INSERT INTO `powerpoint_three` (`id`, `name`, `size`, `downloads`, `date-time`) VALUES
(1, 0, 29310, 0, '2021-09-30 12:45:08'),
(2, 0, 29310, 0, '2021-09-30 12:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `powerpoint_two`
--

CREATE TABLE `powerpoint_two` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(222) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `date`) VALUES
(1, 'Peter', 'Galdino', 'g@gmail.com', 920833770, '40423e4285206d2f338684c51937232f', '2021-08-24 11:48:07'),
(2, 'Kuch', 'Paul', 'kuchpaul01@gmail.com', 920833770, '4fd7b4afc1cefa3d66df94b30f5dbf05', '2021-08-24 12:02:41'),
(3, 'Mokili', 'James', 'mk@gmail.com', 920833770, '25d55ad283aa400af464c76d713c07ad', '2021-08-24 12:52:50'),
(4, 'Edward', 'E', 'e@gmail.com', 920933993, '519c45615b4f52a5d1032b62e5c14c08', '2021-09-29 11:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `word_four`
--

CREATE TABLE `word_four` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `word_one`
--

CREATE TABLE `word_one` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `word_one`
--

INSERT INTO `word_one` (`id`, `name`, `size`, `downloads`, `date-time`) VALUES
(14, 'Job Advert-ICT Officer.docx', 1688472, 0, '2021-09-30 10:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `word_three`
--

CREATE TABLE `word_three` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `word_three`
--

INSERT INTO `word_three` (`id`, `name`, `size`, `downloads`, `date-time`) VALUES
(1, 'Job Advert-ICT Officer.docx', 1688472, 0, '2021-09-30 11:33:09'),
(2, 'Job Advert-ICT Officer.docx', 1688472, 0, '2021-09-30 11:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `word_two`
--

CREATE TABLE `word_two` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `word_two`
--

INSERT INTO `word_two` (`id`, `name`, `size`, `downloads`, `date-time`) VALUES
(1, 'Cover Letter (2).docx', 14727, 0, '2021-09-30 11:20:39'),
(2, 'Cover Letter (2).docx', 14727, 0, '2021-09-30 11:20:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept_codes`
--
ALTER TABLE `dept_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excel_four`
--
ALTER TABLE `excel_four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excel_one`
--
ALTER TABLE `excel_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excel_three`
--
ALTER TABLE `excel_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excel_two`
--
ALTER TABLE `excel_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf_four`
--
ALTER TABLE `pdf_four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf_one`
--
ALTER TABLE `pdf_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf_three`
--
ALTER TABLE `pdf_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf_two`
--
ALTER TABLE `pdf_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `powerpoint_four`
--
ALTER TABLE `powerpoint_four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `powerpoint_one`
--
ALTER TABLE `powerpoint_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `powerpoint_three`
--
ALTER TABLE `powerpoint_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `powerpoint_two`
--
ALTER TABLE `powerpoint_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `word_four`
--
ALTER TABLE `word_four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `word_one`
--
ALTER TABLE `word_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `word_three`
--
ALTER TABLE `word_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `word_two`
--
ALTER TABLE `word_two`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept_codes`
--
ALTER TABLE `dept_codes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `excel_four`
--
ALTER TABLE `excel_four`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `excel_one`
--
ALTER TABLE `excel_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `excel_three`
--
ALTER TABLE `excel_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `excel_two`
--
ALTER TABLE `excel_two`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pdf_four`
--
ALTER TABLE `pdf_four`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pdf_one`
--
ALTER TABLE `pdf_one`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pdf_three`
--
ALTER TABLE `pdf_three`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pdf_two`
--
ALTER TABLE `pdf_two`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `powerpoint_four`
--
ALTER TABLE `powerpoint_four`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `powerpoint_one`
--
ALTER TABLE `powerpoint_one`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `powerpoint_three`
--
ALTER TABLE `powerpoint_three`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `powerpoint_two`
--
ALTER TABLE `powerpoint_two`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `word_four`
--
ALTER TABLE `word_four`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `word_one`
--
ALTER TABLE `word_one`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `word_three`
--
ALTER TABLE `word_three`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `word_two`
--
ALTER TABLE `word_two`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
