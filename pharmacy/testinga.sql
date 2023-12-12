-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 05:11 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testinga`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL,
  `app_name` varchar(250) NOT NULL,
  `app_phone` varchar(250) NOT NULL,
  `app_email` varchar(250) NOT NULL,
  `app_department` varchar(250) NOT NULL,
  `app_doctor` varchar(250) NOT NULL,
  `app_date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `name` varchar(100) NOT NULL,
  `cat_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`name`, `cat_number`) VALUES
('Inhalants ', 3),
('Cannabinoids ', 4),
('Depressants', 5),
('Opioids & Morphine Derivatives', 6),
('Paracitamol', 9),
('qwerty', 36);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`) VALUES
(1, 'Cardiac Surgeons'),
(2, 'Cardiologists'),
(3, 'Dermatologists’'),
(4, 'Ear, Nose & Throat (ENT) Surgeons’'),
(5, 'General Physicians’'),
(6, 'General Surgeons’'),
(7, 'Gestroenterologists'),
(8, 'Haematologists'),
(9, 'Hepatologists'),
(10, 'Maxillo Facial Surgeons’'),
(11, 'Nephrologists'),
(12, 'Neuro Surgeons'),
(13, 'Neurologists'),
(14, 'Nutrition Specialist’'),
(15, 'Obstetricians & Gynecologists’'),
(16, 'Oncologists'),
(17, 'Orthopaedic Surgeons’'),
(18, 'Pediatric Surgeons'),
(19, 'Pediatricians'),
(20, 'Physiatrists'),
(21, 'Psychiatrists'),
(22, 'Radiologists’'),
(23, 'Urologists');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `staff_id` varchar(100) NOT NULL,
  `dep_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`staff_id`, `dep_id`) VALUES
('1', '2'),
('2', '2'),
('3', '4'),
('4', '2');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `purchase` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `date`, `amount`, `purchase`) VALUES
('1000', '12.4.2018', '100', '200');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_item`
--

CREATE TABLE `invoice_item` (
  `invoice_id` varchar(100) NOT NULL,
  `medicine_id` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_item`
--

INSERT INTO `invoice_item` (`invoice_id`, `medicine_id`, `quantity`) VALUES
('1000', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `composition` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `category`, `company`, `composition`, `supplier`, `note`, `photo`) VALUES
(4, 'biogesis', 'Inhalants', 'AKM', '12345', 'Aung Min Hein1', '1', 'Gandamar.PNG'),
(5, 'decolgen', 'Inhalants ', 'amh', '12345', 'Aung Min Hein1', '3456', 'IMG_1383.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `opdoctorinfomation`
--

CREATE TABLE `opdoctorinfomation` (
  `op_doctor_id` varchar(100) NOT NULL,
  `op_doctor_name` varchar(100) NOT NULL,
  `op_doctor_info` varchar(1000) NOT NULL,
  `op_docotor_time` varchar(100) NOT NULL,
  `specialist_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opdoctorinfomation`
--

INSERT INTO `opdoctorinfomation` (`op_doctor_id`, `op_doctor_name`, `op_doctor_info`, `op_docotor_time`, `specialist_id`) VALUES
('1', 'Kyaw Kyaw', 'MBBS,Yangon', 'Mon 6:30-7:30', '2'),
('2', 'Hla Hla', 'MBBS,Mandalay', 'Tue 3:00-4:00', '4'),
('3', 'Sein Sein', 'MBBS,Yangon', 'Wed 4:00-5:00', '2'),
('4', 'Nanda', 'MBBS,UK', 'Tue 7:00-9:00', '2');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_Id` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Birthdate` varchar(100) NOT NULL,
  `NRC` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Joined_Date` varchar(100) NOT NULL,
  `Education` varchar(100) NOT NULL,
  `Certification` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Rank` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_Id`, `Name`, `Birthdate`, `NRC`, `Gender`, `Address`, `Phone`, `Email`, `Joined_Date`, `Education`, `Certification`, `Department`, `Salary`, `Password`, `Rank`, `Type`) VALUES
('1120', 'Aung Ko', '12.3.1991', '275933', 'male', 'yangon', '09788450241', 'aungko@gmail.com', '12.3.2018', 'M.B.B.S(yangon)', 'F.R.C.P(England)', '2', 5000000, '*****', 'surgon', 'doctor'),
('1121', 'Su Ko', '12.4.1991', '275953', 'female', 'yangon', '09789450241', 'suko@gmail.com', '2.3.2018', 'M.B.B.S(yangon)', '', '3', 5000000, '*****', 'AS-Doctor', 'doctor'),
('1122', 'Aung Ko Oo', '18.3.1991', '275934', 'male', 'yangon', '09788550241', 'aungkooo@gmail.com', '12.7.2018', 'M.B.B.S(yangon)', 'F.R.C.P(USA)', '4', 5000000, '*****', 'surgon', 'doctor'),
('1123', 'Aung Oo', '12.3.1992', '245933', 'male', 'yangon', '09798450241', 'aungoo@gmail.com', '12.7.2018', 'M.B.B.S(yangon)', '', '5', 5000000, '*****', 'Proff', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` varchar(100) NOT NULL,
  `batch_no` varchar(100) NOT NULL,
  `expiry_date` varchar(100) NOT NULL,
  `inward_date` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `selling_price` varchar(100) NOT NULL,
  `original_price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `batch_no`, `expiry_date`, `inward_date`, `quantity`, `selling_price`, `original_price`, `profit`) VALUES
('', '1', '2019-06-29', '2019-05-26', '1000', '2000', '5', ''),
('', '2', '2019-05-26', '2019-06-25', '200', '300', '4', ''),
('', '', '', '', '', '', '', ''),
('', '2', '2019-06-04', '2019-06-25', '3', '3', '3', ''),
('', 'dx', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', ''),
('4', '1', '2019-06-10', '2019-06-17', '1000', '2000', '3', ''),
('4', '1', '2019-06-10', '2019-06-17', '100', '1000', '800', '200'),
('4', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `phone`, `address`) VALUES
(1, 'aung aung', 98572224, 'pathein'),
(2, 'kaung myat', 788470241, 'yangon');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `joined_date` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `name`, `phone`, `address`, `email`, `item`, `joined_date`, `photo`) VALUES
(1, 'Aung Min Hein1', '12345', 'Yangon', 'aungminhein111@gmail.com', 'a,b,c', '2019-06-17', 'man.jpg'),
(2, 'Aung Khant Myat', '09788470241', 'Pathein', 'aungkhantmyat158@gmail.com', '12345', '2019-06-16', 'IMG_1383.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_number`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opdoctorinfomation`
--
ALTER TABLE `opdoctorinfomation`
  ADD PRIMARY KEY (`op_doctor_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
