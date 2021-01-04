-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 06:37 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `author`, `duration`, `original_price`, `selling_price`) VALUES
(2563, 'Bangla ', 'rasshed', '4month', 4522, 4255),
(2566, 'English review', 'Jannat midha', '4month', 4566, 7899),
(5632, 'Eng. management', 'Rahim Sekh', '4 Month', 5000, 4500),
(8569, 'Digital Marketing', 'Gazi Mia', '4Month', 5000, 4600),
(1236, 'Data Communication', 'Tanjil Ahmed', '4month', 5000, 4800),
(8529, 'Prog. Language', 'Reza Ahmed', '4.5 month', 5000, 5000),
(8547, 'Math 5', 'Forida Easmin', '4month', 5000, 4800),
(2374, 'Economics', 'Forid Ahmed', '4month', 5000, 4900),
(5201, 'Accountion', 'Mir Ahmed', '4month', 4000, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `course`, `price`, `date`, `action`) VALUES
(2325, 'Prience Tanvir', 'Digital Elec.', 5000, '2021-01-13', 'valid'),
(5689, 'Kulsum Ali', 'webtech', 4500, '2021-01-28', 'valid'),
(5869, 'Forid Ahmed', 'Data Com.', 4500, '2021-01-19', 'invalid'),
(5869, 'Ahhsan Tabid', 'webtech', 3500, '2021-01-11', 'invalid'),
(8523, 'Singh Raju', 'Digital Elec.', 3800, '2021-01-14', 'valid'),
(9633, 'Tamim Iqbal', 'Data Structure', 3800, '2021-01-11', 'valid'),
(1234, 'alamin', 'Digital Elec.', 3800, '2021-01-02', 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `username`, `password`, `confirmpassword`, `gender`) VALUES
(1, 'razzak', 'razzak@gmail.com', 'razzak', '121212', '121212', ' Male'),
(2, 'razzak', 'razzak@gmail.com', 'razzak', '121212', '121212', ' Male');

-- --------------------------------------------------------

--
-- Table structure for table `sellreport`
--

CREATE TABLE `sellreport` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellreport`
--

INSERT INTO `sellreport` (`student_id`, `student_name`, `course_name`, `date`, `original_price`, `selling_price`) VALUES
(4545, 'tabid', 'webtech', '2020-12-29', 4500, 4400),
(2323, 'Nazma', 'Computer Networking', '2020-12-22', 5000, 5000),
(8585, 'takilur', 'Eng Ethics', '2020-12-24', 5454, 5444),
(5236, 'Ishaq Mia', 'Programming Language', '2020-12-12', 5200, 5000),
(5869, 'Forid Ahmed', 'Data Com.  ', '2021-01-06', 5000, 4500),
(5478, 'Laheza Jebin ', 'Accounting', '2021-01-13', 5600, 5400),
(6547, 'Tarek Lehaz', 'Eng. Management', '2021-01-13', 5263, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `contact`, `address`) VALUES
(1234, 'Ahhsan Tabid', 'tabid@gmail.com', 171717171, 'dhaka , Mirpur'),
(8652, 'Rahim', 'rahim@gmail.com', 1758693215, 'dhaka, Mirpur'),
(1256, 'Uzzal Promukh', 'uzzal@gmail.com', 123654789, 'Uttara, Dhaka'),
(5689, 'Rani Mukharji', 'rani@gmail.com', 1235647894, 'Gazipur, Dhaka'),
(5689, 'Sekh Mohammad', 'sekh@gmail.com', 125698743, 'Mirpur 2, Dhaka'),
(2365, 'Ahhan Tabid', 'tabid@gmail.com', 2147483647, 'Kumilla, Lalmatia'),
(8520, 'Zerim Rani', 'zerin@gmail.com', 1256987413, 'Cantoment,Dhaka'),
(5463, 'Singh Raju', 'raju@gmail.com', 1258963178, 'Raypur, Noakhali');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `confirmpassword`) VALUES
('kasmd', 'tamim@gmail.com', 'zmfdakmd', ''),
('tabid', 'tabid@gmail.com', 'zkfskfn', ''),
(';dsm', 'tamim@gmail.com', 'ad', ''),
(';dsm', 'tamim@gmail.com', 'ad', ''),
(';dsm', 'tamim@gmail.com', 'ad', 'Ad'),
(';fm', 'jnj@gmail.com', 'sle,f', 'ef'),
(';fm', 'jnj@gmail.com', 'sle,f', 'ef'),
('dgrg', 'tamim@gmail.com', '453453', '543564'),
('dgrg', 'tamim@gmail.com', '453453', '543564'),
('oshin', 'tabid@gmail.com', '123', '123'),
('rakib', 'rakib@gmail.com', '12345', '12345'),
('lala', 'lala@gmailcom', '2323', '1212'),
('lehaz', 'lehaz@gmail.com', '1212', '1212'),
('tanvir', 'rakib@gmail.com', '44', '45453'),
('uzzal', 'uzzal@gmail.com', '12', '12'),
('kamal', 'kamal@gmail.com', '4545', '4545'),
('alamin', 'alamin@gmail.com', '123', '123'),
('zerin', 'zerin@gmail.com', '12345', ''),
('taraf', 'taraf@gmail.com', '12345', ''),
('emon khan', 'emon@gmail.com', '121212', ''),
('Tabis', 'tabid@gmail.com', '12345', '12345'),
('kamal', 'kamal@gmail.com', '12345', '12345'),
('urmi', 'urmi@gmail.com', '123456', ''),
('Abbas', 'abbas@gamil.com', '123456', '123456'),
('Emon Khan', 'emon@gmail.com', '123456', ''),
('sumaya', 'sumayazerin@gmail.com', '123456', ''),
('Emon Khan', 'ahhsantabid10@gmail.com', '12345', ''),
('Emon Khan', 'emon@gmail.com', '123456', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `user_type`) VALUES
(1, 'tabid', '2121', 'tabid@gmail.com', 'admin'),
(2, 'tabid', '2121', 'tabid@gmail.com', 'admin'),
(3, 'mizan', '5656', 'mizan@gmail.com', 'User'),
(4, 'mizan', '5656', 'mizan@gmail.com', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
