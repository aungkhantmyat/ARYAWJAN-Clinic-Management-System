-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 08:33 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
('', 'aungminhein', 'amh');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `Car_Id` int(100) NOT NULL,
  `Car_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`Car_Id`, `Car_Name`) VALUES
(7, '12345'),
(8, '1234'),
(9, '2233');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `Equi_Id` int(100) NOT NULL,
  `Equi_Name` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Supplier` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`Equi_Id`, `Equi_Name`, `Date`, `Price`, `Qty`, `Supplier`, `Photo`) VALUES
(5, 'qwerty123', '2019-06-10', '100', 20, 'Qwerty123', 'JC.jpg'),
(7, 'qwerty', '2019-06-19', 'ewrfehiugh', 10, 'iuhewiuh', 'JC.jpg'),
(8, 'aung1', '2019-06-09', '1300', 20, 'Qwerty123', 'JC.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` varchar(100) NOT NULL,
  `p_password` varchar(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_phone` varchar(100) NOT NULL,
  `p_email` varchar(100) NOT NULL,
  `p_age` varchar(100) NOT NULL,
  `p_blood` varchar(100) NOT NULL,
  `p_drug_allergy` varchar(100) NOT NULL,
  `doctor_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_password`, `p_name`, `p_phone`, `p_email`, `p_age`, `p_blood`, `p_drug_allergy`, `doctor_id`) VALUES
('001', '', 'akm', '12345', 'akm@gmail.com', '99', 'heehee', 'obimin', '110,111,112,113'),
('002', '', 'amh', '12345', 'amh@gmail.com', '19', 'ab', 'heehee', '111');

-- --------------------------------------------------------

--
-- Table structure for table `patientrecord`
--

CREATE TABLE `patientrecord` (
  `p_id` varchar(100) NOT NULL,
  `doctor_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `b_pressure` varchar(100) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `record` varchar(100) NOT NULL,
  `drug_list` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientrecord`
--

INSERT INTO `patientrecord` (`p_id`, `doctor_id`, `date`, `weight`, `b_pressure`, `invoice_id`, `record`, `drug_list`) VALUES
('001', '110', '1.1.2000', '200', 'heehee', '001', 'dead', 'obimin,biogesic,decolgen'),
('002', '111', '28.6.2019', '148', 'haha', '002', 'very good', 'obimin,biogesic,decolgen'),
('001', '110', '1.1.2001', '100', 'qwer', '001', 'qwerty', 'obimin,biogesic,decolgen'),
('002', '111', '1.1.2002', '130', 'qwert', '003', 'qwerty', 'obimin,biogesic,decolgen');

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
  `Type` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_Id`, `Name`, `Birthdate`, `NRC`, `Gender`, `Address`, `Phone`, `Email`, `Joined_Date`, `Education`, `Certification`, `Department`, `Salary`, `Password`, `Rank`, `Type`, `Photo`) VALUES
('110', 'LEfjhihriouhroh', '2019-06-18', 'prewjtgrjh', 'male', '                  	lkfhewrltgiuo                  ', 'jkgrgkrliou', 'ksjbvfWkdsvb@gmail.com', '2019-06-18 20:13:35', '                  	lkgjuh                  ', '                  	lgkjrehgkljrh                  ', '0', 0, '', 'kjbhgklrehgiou', 'doctor', ''),
('111', 'Aung', '2019-06-18', 'eljrwoigh', 'male', 'wlrfhewtherio', '12345', 'ksjbvfWkdsvb@gmail.com', '2019-06-18 20:18:56', 'elhriohoh', 'lkjfhewfioeho', 'Heart', 0, '', 'wjklfhewogth', 'doctor', ''),
('112', 'Aung123', '2019-06-18', 'epowtgih', 'male', 'erfhewltgreio', '12345', 'ksjbvfWkdsvb@gmail.com', '2019-06-18 20:20:28', 'eilhrlkgh', 'ekljghrekljghiu', 'Brain', 0, '', 'ekjhrklghgh', 'doctor', ''),
('113', 'Aung123123', '2019-06-19', 'djgiuiuhg', 'male', 'ieufhrgriuh', 'dskfjhirueh', 'ksjbvfWkdsvb@gmail.com', '2019-06-19 20:38:43', 'edfouihreighi', 'wiuhfreriughiu', 'Brain', 0, '', 'sdhfgiu', 'doctor', ''),
('114', 'akm', '2019-06-19', '12345', 'male', 'eferuowhgoupih', 'oifhreoiughiou', 'ksjbvfWkdsvb@gmail.com', '2019-06-19 20:39:07', 'efhrih', 'jfherwiughruiegh', 'Brain', 0, '', 'difghriug', 'doctor', ''),
('115', 'Tom', '2019-06-19', 'oiewrfhewoiuthiou', 'male', 'iofheroighro', '12345', 'ksjbvfWkdsvb@gmail.com', '2019-06-19 21:28:40', 'dsiofroighoh', 'eoifherogho', 'Brain', 0, '', 'iofhoeighroiph', 'doctor', ''),
('116', 'Tom123', '2019-06-19', '12345', 'male', '                  	                  	qwert										\r\n										                                   ', '12345', 'ksjbvfWkdsvb@gmail.com', '2019-06-20 20:44:03', '                  	                  	qwer									\r\n										                                    ', '  qwer                	                  	                                    ', '0', 20000, '', '22345', 'doctor', ''),
('120', 'Tom', '2019-07-18', 'rltgrehiuoh', 'male', '                  	kjlfewhkgh                  ', '12345', 'ksjbvfWkdsvb@gmail.com', '2019-06-18 20:14:36', '                  	ekforhewrkoh                  ', '                  	kjfhewkjlgh                  ', '0', 10000, '', 'dsjklrhekljgh', 'pharmacist', ''),
('121', 'HEIN', '2019-06-19', 'pafiojoeighi', 'male', 'oiuhrfewoiughi', 'wofihewopgh', 'ksjbvfWkdsvb@gmail.com', '2019-06-19 21:29:53', 'oifheogh', 'wqoifhewogh', 'Brain', 0, '', 'ofiphegohrio', 'pharmacist', ''),
('131', 'Erklgtjrelghi123123', '2019-06-18', 'rlkewjtlihjreoitgh', 'male', '                  	                  	flkghrlkhg                                    ', 'lkjhnrfgkljrh', 'ksjbvfWkdsvb@gmail.com', '2019-06-18 20:15:13', '                  	                  	g;thji                                    ', '                  	                  	lekferjhheio                                    ', '0', 0, '', 'lekjrhetio', 'driver', ''),
('132', 'QWER', '2019-04-05', 'kjhewoiugfiewg', 'female', 'bvwefiuewg', 'bcdkhjvbeiuf', 'ksjbvfWkdsvb@gmail.com', '2019-06-05 13:01:53', 'lhfewiufy', 'lkdfeqhu', '0', 0, '', 'vbwvkejwhfiohwlqk', 'driver', ''),
('140', 'Aung123123123', '', '12345', 'male', '                  	eowifrhewfo                  ', '12345', 'ksjbvfWkdsvb@gmail.com', '2019-06-18 20:25:03', '                  	ewriewhtgoih                  ', '                  	kjfdhewkui                  ', '0', 0, '', 'dkjfhsugkhui', 'hr', ''),
('141', 'Tom', '2019-06-19', 'aiosfhoeih', 'male', 'oifheoghrioh', 'eofihefgoehgq', 'ksjbvfWkdsvb@gmail.com', '2019-06-19 21:29:33', 'oeifherogh', 'iowfheoigh', 'Heart', 0, '', 'woifheogih', 'hr', ''),
('151', 'Aung123123', '2019-06-19', '123456', 'male', '                  	qwer                  	                  	                  	                  	 ', '12345', 'ksjbvfWkdsvb@gmail.com', '2019-06-19 13:14:05', '                  	 qwer                 	                  	                  	                  	 ', '                  	 qwer                 	                  	                  	                  	 ', '0', 10000, '', 'admin', 'admin', 'JC.jpg'),
('160', 'HEIN', '2019-06-05', 'fekwfbewiugfbkjb', 'female', '                  	ejkfnefierwughf                  ', 'jefnkewfewiuf', 'ksjbvfWkdsvb@gmail.com', '2019-06-05 12:46:55', '                  	ehjfbekfbewiubiu                  ', '                  	dsfbewibewiugb                  ', '0', 2000, '', 'jekfnewfewufiewo', 'nurse', ''),
('161', 'Tom', '2019-06-19', 'feiuewgifu', 'male', 'ifuewgig', 'eiufhewfiuewh', 'ksjbvfWkdsvb@gmail.com', '2019-06-19 21:30:43', 'wiufheiug', 'wiufgehwiog', 'Brain', 0, '', 'wifuheriug', 'nurse', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`Car_Id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`Equi_Id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `Car_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `Equi_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
