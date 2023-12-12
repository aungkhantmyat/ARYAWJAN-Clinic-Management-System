-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2019 at 04:24 AM
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
-- Database: `testingaq`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL,
  `app_name` varchar(100) NOT NULL,
  `app_age` varchar(100) NOT NULL,
  `app_phone` varchar(100) NOT NULL,
  `app_email` varchar(100) NOT NULL,
  `app_doctor` varchar(100) NOT NULL,
  `app_date` varchar(100) NOT NULL,
  `p_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `app_name`, `app_age`, `app_phone`, `app_email`, `app_doctor`, `app_date`, `p_id`) VALUES
(83, 'U Tun Than ', '39', '09788470241', 'utunthan@gmail.com', '1142', '2019-06-06', '1421'),
(84, 'U Tun Than ', '39', '09788470241', 'utunthan@gmail.com', '112', '2019-06-09', '1421'),
(85, 'U Tun Than ', '39', '09788470241', 'utunthan@gmail.com', '1142', '2019-06-27', '1421'),
(86, 'U Tun Than ', '39', '09788470241', 'utunthan@gmail.com', '', '2019-06-26', '1421'),
(87, 'U Tun Than ', '39', '09788470241', 'utunthan@gmail.com', '1142', '2019-07-11', '1421'),
(88, 'U Tun Than ', '39', '09788470241', 'utunthan@gmail.com', '112', '2019-07-14', '1421'),
(89, 'U Tun Than ', '39', '09788470241', 'utunthan@gmail.com', '1138', '2019-07-22', '1421'),
(90, 'U Tun Than ', '39', '09788470241', 'utunthan@gmail.com', '1142', '2019-08-01', '1421'),
(103, 'U Min Myat ', '17', '09788470241', 'uminmyat@gmail.com', '1134', '2019-07-26', '141'),
(104, 'U Min Myat ', '17', '09788470241', 'uminmyat@gmail.com', '1142', '2019-07-11', '141'),
(106, 'U Min Myat ', '17', '09788470241', 'uminmyat@gmail.com', '1142', '2019-08-01', '141'),
(107, 'U Min Myat ', '17', '09750963196', 'uminmyat@gmail.com', '115', '2019-08-14', '141 '),
(108, 'Aung Min Hein', '', '09788470241', 'dawphyosinmyat@gmail.com', '1139', '2019-08-15', ''),
(109, 'Aung Min Hein', '', '09788470241', 'dawphyosinmyat@gmail.com', '1139', '2019-08-15', ''),
(110, 'aung khant myat', '', '09788470241', 'aungkhantmyat158@gmail.com', '1113', '2019-08-15', '');

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
('Cannabinoids ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(100) NOT NULL,
  `dep_namemyan` varchar(100) CHARACTER SET utf8 COLLATE utf8_myanmar_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`, `dep_namemyan`, `id`) VALUES
(1, 'Cardiac Surgeons', 'နှလုံးရောဂါခွဲစိတ်', 1),
(3, 'Dermatologistsâ€™', 'အရေပြား', 2),
(4, 'Ear, Nose & Throat (ENT) Surgeonsâ€™', 'နား၊နှာခေါင်း၊လည်ချောင်း', 3),
(6, 'General Surgeonsâ€™', 'အထွေထွေခွဲစိတ်', 4),
(7, 'Gestroenterologists', 'အရေပြား', 5),
(8, 'Haematologists', 'သွေးရောဂါဆိုင်ရာ', 6),
(10, 'Maxillo Facial Surgeonsâ€™', 'မျက်နှာနှင့်မေးရိုးဆိုင်ရာခွဲစိတ်', 7),
(11, 'Nephrologists', 'ဆီးနှင့်ကျောက်ကပ်ဆိုင်ရာ', 8),
(12, 'Neuro Surgeons', 'ဦးနှောက်နှင့်အာရုံကြောခွဲစိတ်', 9),
(13, 'Neurologists', 'ဦးနှောက်နှင့်အာရုံကြော', 10),
(14, 'Nutrition Specialistâ€™', 'အာယာရဆိုင်ရာ', 11),
(15, 'Obstetricians & Gynecologistsâ€™', 'သားဖွားနှင့်မီးယပ်', 12),
(16, 'Oncologists', 'ကင်ဆာရောဂါဆိုင်ရာ', 13),
(17, 'Orthopaedic Surgeonsâ€™', 'အရိုးအကြောအဆစ်ခွဲစိတ်', 14),
(18, 'Pediatric Surgeons', 'ကလေးခွဲစိတ်', 15),
(19, 'Pediatricians', 'ကလေး', 16),
(20, 'Physiatrists', 'အကြောအဆစ်ပြန်လည်သန်စွမ်းရေး', 17),
(22, 'Radiologistsâ€™', 'ဓာတ်မှန်ဘက်ဆိုင်ရာ', 18),
(39, 'Pediatric Surgeons', 'á€€á€œá€±á€¸á€á€½á€²á€…á€­á€á€º', 33),
(40, 'Pediatricians', 'á€€á€œá€±á€¸á€¡á€‘á€°á€¸á€€', 34),
(41, 'Physiatrists', 'á€¡á€€á€¼á€±á€¬á€¡á€†á€…á€ºá€•á€¼á€”á€ºá€œá€Šá€ºá€žá€”á€ºá€…á€½á€™á€ºá€¸á€›á€±á€¸', 35),
(42, 'Radiologistsâ€™', 'á€“á€¬á€á€ºá€™á€¾á€”á€ºá€˜á€€á€º', 36);

-- --------------------------------------------------------

--
-- Table structure for table `d_follower`
--

CREATE TABLE `d_follower` (
  `p_id` varchar(100) NOT NULL,
  `doctor_id` varchar(100) NOT NULL,
  `df_id` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_follower`
--

INSERT INTO `d_follower` (`p_id`, `doctor_id`, `df_id`, `id`) VALUES
('141', '1142', '1137114,', 2),
('141', '1137', '1142,114', 3),
('1421', '1142', '112,1138', 5);

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
(7, 'qwerty', '2019-06-19', 'ewrfehiugh', 10, 'iuhewiuh', 'JC.jpg'),
(8, 'aung1', '2019-06-09', '1300', 20, 'Qwerty123', 'JC.jpg');

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
('1000', '12.4.2018', '100', '200'),
('1001', '2019-07-24', '1131000', '12000'),
('1002', '2019-07-24', '22000', '22000'),
('1003', '2019-07-24', '35000', '35000'),
('1004', '2019-07-24', '2000', '23'),
('1005', '2019-07-24', '20000', '20000'),
('1006', '2019-07-24', '17000', '20000'),
('1007', '2019-07-24', '21000', '21000'),
('1008', '2019-07-25', '15000', ''),
('1009', '2019-07-27', '32000', '32000'),
('1010', '2019-07-27', '9000', '9000'),
('1011', '2019-07-27', '30000', '31000'),
('1012', '2019-07-27', '4000', '4000'),
('1013', '2019-07-27', '10000', '10000'),
('1014', '2019-07-27', '11000', '11000'),
('1015', '2019-07-27', '4000', '5000'),
('1016', '2019-07-27', '4000', '4000'),
('1017', '2019-07-27', '5000', '5000'),
('1018', '2019-07-27', '51000', '55000'),
('1019', '2019-07-28', '4000', '4000'),
('1020', '2019-07-28', '15000', '20000'),
('1021', '2019-07-28', '5000', '5000'),
('1022', '2019-07-28', '52468000', '5248000'),
('1023', '2019-07-28', '65000', '65000'),
('1024', '2019-07-28', '9000', '10000'),
('1025', '2019-07-28', '5000', '5000'),
('1026', '2019-07-28', '7000', '10000'),
('1027', '2019-07-28', '8000', '8000'),
('1028', '2019-07-28', '4000', '4000'),
('1029', '2019-07-29', '5000', '5000'),
('1030', '2019-07-29', '5000', '5000'),
('1031', '2019-07-31', '2000', '2000'),
('1032', '2019-07-31', '2000', '2000'),
('1033', '2019-07-31', '2000', '5000'),
('1034', '2019-07-31', '2000', '2500'),
('1034', '2019-07-31', '2000', '2500'),
('1034', '2019-07-31', '2000', '2500'),
('1034', '2019-07-31', '2000', '2500'),
('1035', '2019-07-31', '2000', '2000'),
('1036', '2019-07-31', '2000', '5000'),
('1036', '2019-07-31', '2000', '5000'),
('1036', '2019-07-31', '2000', '5000'),
('1037', '2019-07-31', '3000', '5000'),
('1038', '2019-08-01', '2000', '3000'),
('1039', '2019-08-06', '0', '11'),
('1040', '2019-08-07', '0', ''),
('1041', '2019-08-07', '5000', '5000'),
('1042', '2019-08-11', '3000', '5000');

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
('1000', '4', '4'),
('1001', '4', '5'),
('1001', '4', '19'),
('1001', '4', '500'),
('1001', '4', '500'),
('1001', '4', '33'),
('1001', '4', '33'),
('1001', '4', '33'),
('1001', '4', '2'),
('1001', '4', '2'),
('1001', '4', '2'),
('1001', '4', '2'),
('1002', '4', '20'),
('1002', '4', '2'),
('1003', '4', '23'),
('1003', '4', '11'),
('1003', '4', '1'),
('1004', '4', '2'),
('1005', '4', '2'),
('1005', '4', '2'),
('1005', '4', '4'),
('1005', '4', '5'),
('1005', '4', '7'),
('1006', '4', '2'),
('1006', '4', '4'),
('1006', '4', '5'),
('1006', '4', '6'),
('1007', '4', '12'),
('1007', '4', '2'),
('1007', '4', '2'),
('1007', '4', '5'),
('1008', '4', '2'),
('1008', '4', '3'),
('1008', '4', '5'),
('1008', '4', '5'),
('1009', '4', '32'),
('1010', '4', '3'),
('1010', '4', '2'),
('1010', '4', '4'),
('1011', '4', '23'),
('1011', '4', '2'),
('1011', '4', '5'),
('1012', '4', '4'),
('1013', '4', '4'),
('1013', '4', '6'),
('1014', '4', '5'),
('1014', '4', '6'),
('1015', '4', '4'),
('1016', '4', '4'),
('1017', '4', '5'),
('1018', '4', '20'),
('1018', '4', '15'),
('1018', '4', '16'),
('1018', '4', '16'),
('1019', '4', '4'),
('1020', '4', '4'),
('1020', '4', '5'),
('1020', '4', '6'),
('1021', '4', '5'),
('1022', '4', '4453'),
('1022', '4', '4453'),
('1022', '4', '43534'),
('1022', '4', '4'),
('1022', '4', '4'),
('1022', '4', '4'),
('1022', '4', '4'),
('1022', '4', '3'),
('1022', '4', '3'),
('1022', '4', '3'),
('1022', '4', ''),
('1022', '4', '3'),
('1023', '4', '3'),
('1023', '4', '3'),
('1023', '4', '3'),
('1023', '4', '4'),
('1023', '4', '4'),
('1023', '4', '4'),
('1023', '4', '3'),
('1023', '4', '2'),
('1023', '4', '2'),
('1023', '4', '2'),
('1023', '4', '2'),
('1023', '4', '2'),
('1023', '4', '3'),
('1023', '4', '3'),
('1023', '4', '3'),
('1023', '4', '4'),
('1023', '4', '4'),
('1023', '4', '4'),
('1023', '4', '2'),
('1023', '4', '2'),
('1023', '4', '3'),
('1023', '4', '3'),
('1024', '4', '2'),
('1024', '4', '3'),
('1024', '4', '4'),
('1025', '4', '2'),
('1025', '4', '3'),
('1026', '4', '3'),
('1026', '4', '4'),
('1027', '4', '4'),
('1027', '4', '4'),
('1028', '4', '4'),
('1029', '4', '2'),
('1029', '4', '3'),
('1030', '4', '3'),
('1030', '4', '2'),
('1031', '4', '2'),
('1032', '4', '2'),
('1033', '4', '2'),
('1034', '4', '2'),
('1035', '4', '2'),
('1036', '4', '2'),
('1037', '4', '3'),
('1038', '4', '2'),
('1041', '4', '3'),
('1041', '4', '2'),
('1042', '4', '3');

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
(4, 'biogesis', 'Cannabinoids', 'AKM', '12345', 'Aung Min Hein1', '1', 'Gandamar.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `opdoctorinfomation`
--

CREATE TABLE `opdoctorinfomation` (
  `op_doctor_id` varchar(100) NOT NULL,
  `op_doctor_name` varchar(100) NOT NULL,
  `op_doctor_info` varchar(1000) NOT NULL,
  `op_docotor_time` varchar(100) NOT NULL,
  `day` varchar(23) NOT NULL,
  `specialist_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opdoctorinfomation`
--

INSERT INTO `opdoctorinfomation` (`op_doctor_id`, `op_doctor_name`, `op_doctor_info`, `op_docotor_time`, `day`, `specialist_id`) VALUES
('1', 'Kyaw Kyaw', 'MBBS,Yangon', 'Mon 6:30-7:30', 'Monday', '2'),
('112', 'Khin Maung Ay', 'MBBS(Yangon),M.Med.Sc,FRCS(Edin)/,FAHA(USA),FACC(USA),/Dr.Med.Sc(CVS)(Hon)', 'Tue & Sat:10AM-11AM/\r\nTHur:10Am', 'Tuesday/Thursday', '1'),
('2', 'Hla Hla', 'MBBS,Mandalay', 'Tue 3:00-4:00', 'Tuesday', '4'),
('3', 'Sein Sein', 'MBBS,Yangon', 'Wed 4:00-5:00', 'Wednesday', '2'),
('4', 'Nanda', 'MBBS,UK', 'Tue 7:00-9:00', 'Tuesday', '2');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` varchar(100) NOT NULL,
  `p_password` varchar(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_email` varchar(100) NOT NULL,
  `p_age` varchar(100) NOT NULL,
  `p_phone` varchar(100) NOT NULL,
  `p_blood` varchar(100) NOT NULL,
  `p_drug_allergy` varchar(100) NOT NULL,
  `doctor_id` varchar(100) NOT NULL,
  `p_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_password`, `p_name`, `p_email`, `p_age`, `p_phone`, `p_blood`, `p_drug_allergy`, `doctor_id`, `p_photo`) VALUES
('141', 'patient123!@#', 'U Min Myat ', 'uminmyat@gmail.com', '17', '09750963196', 'O', 'penicillin (Bicillin L-A),Insulin,cetuximab (Erbitux)', '1142,1137,114', 'pmale.png'),
('1410', 'patient123!@#', 'Daw Phwint Soe ', 'dawphwintsoe@gmail.com', '50', '09750360614', 'AB-', 'lamotrigine (Lamictal),cetuximab (Erbitux)', '117,111,1128', 'pfemale.png'),
('14100', 'patient123!@#', 'Daw Soe Sandar Khaing ', 'dawsoesandarkhaing@gmail.com', '29', '09750713027', 'A-', 'tetracycline (Sumycin)', '1116,1120,111,1126', 'pfemale.png'),
('1411', 'patient123!@#', 'Daw Thwe Sandar Sint ', 'dawthwesandarsint@gmail.com', '31', '09750145469', 'A+', 'ampicillin,lamotrigine (Lamictal)', '1123,1145,1126,1137,1111', 'pfemale.png'),
('1412', 'patient123!@#', 'U Ko Sai Thu ', 'ukosaithu@gmail.com', '29', '09750358069', 'AB+', 'nevirapine (Viramune),Insulin,amoxicillin (Moxatag)', '1127,1125', 'pmale.png'),
('1413', 'patient123!@#', 'U Myat Zaw Phyo ', 'umyatzawphyo@gmail.com', '20', '09750533790', 'AB+', 'nevirapine (Viramune),lamotrigine (Lamictal)', '1111,1112,115', 'pmale.png'),
('1414', 'patient123!@#', 'U Thu Phone Phone ', 'uthuphonephone@gmail.com', '39', '09750660245', 'AB+', 'rituximab (Rituxian),penicillin (Bicillin L-A)', '114,1131,1114,1118,1140', 'pmale.png'),
('1415', 'patient123!@#', 'U Thaw Kyaw Htet ', 'uthawkyawhtet@gmail.com', '47', '09750394814', 'AB+', 'tetracycline (Sumycin),ampicillin,ampicillin', '1120,1135,1113,1136', 'pmale.png'),
('1416', 'patient123!@#', 'Daw Sint Zin Chue ', 'dawsintzinchue@gmail.com', '24', '09750645340', 'B', 'ampicillin,tetracycline (Sumycin)', '1113,1128,114,1141', 'pfemale.png'),
('1417', 'patient123!@#', 'U Tun Thu Htoo ', 'utunthuhtoo@gmail.com', '20', '09750856757', 'B', 'cetuximab (Erbitux),nevirapine (Viramune),cetuximab (Erbitux)', '116,1114', 'pmale.png'),
('1418', 'patient123!@#', 'Daw Mon May Theint ', 'dawmonmaytheint@gmail.com', '51', '09750646109', 'A+', 'tetracycline (Sumycin)', '1115,1121,1122', 'pfemale.png'),
('1419', 'patient123!@#', 'U Swan Saung ', 'uswansaung@gmail.com', '24', '09750878565', 'A-', 'Insulin', '1126,1137,1110,1112,1137', 'pmale.png'),
('142', 'patient123!@#', 'Daw Thiri Sint Phwint ', 'dawthirisintphwint@gmail.com', '57', '09750419879', 'AB+', 'ampicillin', '1134,1131,1141,1133', 'pfemale.png'),
('1420', 'patient123!@#', 'U Khant Myat ', 'ukhantmyat@gmail.com', '34', '09750107064', 'A+', 'Insulin,cetuximab (Erbitux)', '1133,1113,1112,1135', 'pmale.png'),
('1421', 'patient123!@#', 'U Tun Than ', 'utunthan@gmail.com', '39', '09750335709', 'B', 'cetuximab (Erbitux),tetracycline (Sumycin)', '1142,112,1138', 'pmale.png'),
('1422', 'patient123!@#', 'Daw Phwint Thiri ', 'dawphwintthiri@gmail.com', '17', '09750146090', 'AB+', 'lamotrigine (Lamictal),nevirapine (Viramune),carbamazepine (Tegretol)', '1133,1111', 'pfemale.png'),
('1423', 'patient123!@#', 'U Maung Oo Maung ', 'umaungoomaung@gmail.com', '27', '09750430201', 'AB-', 'Insulin,lamotrigine (Lamictal)', '115,1130', 'pmale.png'),
('1424', 'patient123!@#', 'U Myat Aung Oo ', 'umyataungoo@gmail.com', '30', '09750113542', 'A-', 'Insulin', '1111,1133,1121', 'pmale.png'),
('1425', 'patient123!@#', 'U Phyo Ko ', 'uphyoko@gmail.com', '21', '09750933248', 'B', 'lamotrigine (Lamictal)', '119,1139,1140,1118', 'pmale.png'),
('1426', 'patient123!@#', 'Daw Ei Thiri Chue ', 'daweithirichue@gmail.com', '40', '09750075379', 'O', 'nevirapine (Viramune),rituximab (Rituxian),tetracycline (Sumycin)', '1120,1114,1114', 'pfemale.png'),
('1427', 'patient123!@#', 'U Myat Swan ', 'umyatswan@gmail.com', '43', '09750654469', 'AB+', 'Insulin,tetracycline (Sumycin),amoxicillin (Moxatag)', '1114,1137,117', 'pmale.png'),
('1428', 'patient123!@#', 'Daw Theint Soe ', 'dawtheintsoe@gmail.com', '58', '09750367066', 'B', 'rituximab (Rituxian)', '1128,1111,1144,111', 'pfemale.png'),
('1429', 'patient123!@#', 'Daw Sin Hlaing Zin ', 'dawsinhlaingzin@gmail.com', '27', '09750361488', 'AB+', 'amoxicillin (Moxatag),penicillin (Bicillin L-A),nevirapine (Viramune)', '1139,111,115,1127,1118', 'pfemale.png'),
('143', 'patient123!@#', 'Daw Theint May ', 'dawtheintmay@gmail.com', '50', '09750869392', 'A+', 'nevirapine (Viramune),abacavir (Ziagen),tetracycline (Sumycin)', '1125,1123,1124,1114,1123', 'pfemale.png'),
('1430', 'patient123!@#', 'U Sai Aung Thaw ', 'usaiaungthaw@gmail.com', '32', '09750769672', 'A-', 'tetracycline (Sumycin),Insulin,ibuprofen and naproxen', '1129,1142,1145,1120', 'pmale.png'),
('1431', 'patient123!@#', 'Daw Oo Khin Oo ', 'dawookhinoo@gmail.com', '31', '09750715011', 'AB+', 'carbamazepine (Tegretol),carbamazepine (Tegretol)', '1124,1121', 'pfemale.png'),
('1432', 'patient123!@#', 'Daw Chue Soe Mon ', 'dawchuesoemon@gmail.com', '33', '09750767280', 'A-', 'ibuprofen and naproxen', '1143,114,1135,1127,1140', 'pfemale.png'),
('1433', 'patient123!@#', 'Daw Shwe Zin Khin ', 'dawshwezinkhin@gmail.com', '17', '09750072657', 'AB+', 'Insulin,Insulin', '1123,1139', 'pfemale.png'),
('1434', 'patient123!@#', 'Daw Thiri May ', 'dawthirimay@gmail.com', '34', '09750272925', 'B', 'Insulin,ampicillin', '1141,1134,1145,1126', 'pfemale.png'),
('1435', 'patient123!@#', 'Daw Swe Theint Hnin ', 'dawswetheinthnin@gmail.com', '53', '09750047970', 'B', 'rituximab (Rituxian),nevirapine (Viramune),tetracycline (Sumycin)', '1123,1118', 'pfemale.png'),
('1436', 'patient123!@#', 'Daw Ei Hlaing Myat ', 'daweihlaingmyat@gmail.com', '56', '09750692030', 'AB+', 'Insulin', '1119,115', 'pfemale.png'),
('1437', 'patient123!@#', 'Daw Hnin Thiri ', 'dawhninthiri@gmail.com', '28', '09750217543', 'B', 'penicillin (Bicillin L-A),penicillin (Bicillin L-A),penicillin (Bicillin L-A)', '1118,1125,1123,1111', 'pfemale.png'),
('1438', 'patient123!@#', 'Daw Chue Swe Thiri ', 'dawchueswethiri@gmail.com', '23', '09750915449', 'A-', 'penicillin (Bicillin L-A),ibuprofen and naproxen,lamotrigine (Lamictal)', '1120,1136,1124,1110,115', 'pfemale.png'),
('1439', 'patient123!@#', 'U Chan Thu ', 'uchanthu@gmail.com', '38', '09750617386', 'AB+', 'Insulin,penicillin (Bicillin L-A)', '1137,1126,1114', 'pmale.png'),
('144', 'patient123!@#', 'Daw Mon Hlaing ', 'dawmonhlaing@gmail.com', '17', '09750021766', 'AB-', 'tetracycline (Sumycin),ampicillin', '1137,114,1119,1140', 'pfemale.png'),
('1440', 'patient123!@#', 'U Aung Lwin Hlaing ', 'uaunglwinhlaing@gmail.com', '38', '09750189302', 'A-', 'cetuximab (Erbitux)', '1115,1118', 'pmale.png'),
('1441', 'patient123!@#', 'Daw Chue Phwint Phyo ', 'dawchuephwintphyo@gmail.com', '42', '09750333807', 'AB-', 'rituximab (Rituxian),tetracycline (Sumycin),abacavir (Ziagen)', '1127,1138,1114', 'pfemale.png'),
('1442', 'patient123!@#', 'Daw Thwe Ei ', 'dawthweei@gmail.com', '57', '09750795586', 'O', 'penicillin (Bicillin L-A)', '1111,1118,1139,1145', 'pfemale.png'),
('1443', 'patient123!@#', 'Daw San Chue Sint ', 'dawsanchuesint@gmail.com', '47', '09750110703', 'O', 'carbamazepine (Tegretol)', '1142,1136,113,113,1143', 'pfemale.png'),
('1444', 'patient123!@#', 'Daw Mon Sint Khin ', 'dawmonsintkhin@gmail.com', '35', '09750297370', 'B', 'nevirapine (Viramune),penicillin (Bicillin L-A)', '1136,1136,1132,1128,1128', 'pfemale.png'),
('1445', 'patient123!@#', 'U Maung Lin Hlaing ', 'umaunglinhlaing@gmail.com', '15', '09750918824', 'AB-', 'penicillin (Bicillin L-A)', '1120,1115,1125', 'pmale.png'),
('1446', 'patient123!@#', 'Daw Soe Mon Soe ', 'dawsoemonsoe@gmail.com', '30', '09750896013', 'A+', 'lamotrigine (Lamictal),lamotrigine (Lamictal),rituximab (Rituxian)', '1114,1132', 'pfemale.png'),
('1447', 'patient123!@#', 'Daw Swe Hnin ', 'dawswehnin@gmail.com', '26', '09750751282', 'O', 'rituximab (Rituxian),amoxicillin (Moxatag),penicillin (Bicillin L-A)', '1111,1115,1142', 'pfemale.png'),
('1448', 'patient123!@#', 'U Khant Maung Tun ', 'ukhantmaungtun@gmail.com', '60', '09750505974', 'AB+', 'lamotrigine (Lamictal)', '1142,1111,1110,1123,1142', 'pmale.png'),
('1449', 'patient123!@#', 'U Ye Min Saung ', 'uyeminsaung@gmail.com', '25', '09750552413', 'B', 'carbamazepine (Tegretol),Insulin,amoxicillin (Moxatag)', '1113,1145,1114,1136', 'pmale.png'),
('145', 'patient123!@#', 'U Htet Myat Htet ', 'uhtetmyathtet@gmail.com', '34', '09750827622', 'A+', 'carbamazepine (Tegretol),nevirapine (Viramune),abacavir (Ziagen)', '1112,115,1133,1116,1124', 'pmale.png'),
('1450', 'patient123!@#', 'Daw Moe Ei ', 'dawmoeei@gmail.com', '39', '09750685995', 'O', 'ibuprofen and naproxen,ampicillin,rituximab (Rituxian)', '113,118,1119,1128', 'pfemale.png'),
('1451', 'patient123!@#', 'U Thu Khant ', 'uthukhant@gmail.com', '16', '09750727584', 'AB+', 'penicillin (Bicillin L-A)', '111,1125', 'pmale.png'),
('1452', 'patient123!@#', 'U Lwin Swan ', 'ulwinswan@gmail.com', '49', '09750464364', 'AB-', 'ibuprofen and naproxen,abacavir (Ziagen)', '1112,1131,1134,1120', 'pmale.png'),
('1453', 'patient123!@#', 'U Saung Saung ', 'usaungsaung@gmail.com', '26', '09750589791', 'B', 'carbamazepine (Tegretol),abacavir (Ziagen)', '1116,1127,1138', 'pmale.png'),
('1454', 'patient123!@#', 'Daw Sandar Shwe ', 'dawsandarshwe@gmail.com', '32', '09750184151', 'AB-', 'lamotrigine (Lamictal)', '1118,1111', 'pfemale.png'),
('1455', 'patient123!@#', 'U Ye Phyo ', 'uyephyo@gmail.com', '33', '09750939999', 'B', 'Insulin,Insulin,nevirapine (Viramune)', '1137,1124,1130,1114,116', 'pmale.png'),
('1456', 'patient123!@#', 'Daw Tun Nandar ', 'dawtunnandar@gmail.com', '42', '09750286852', 'B', 'carbamazepine (Tegretol),penicillin (Bicillin L-A),amoxicillin (Moxatag)', '1139,1123', 'pfemale.png'),
('1457', 'patient123!@#', 'U Kyaw Aung ', 'ukyawaung@gmail.com', '58', '09750478856', 'AB-', 'lamotrigine (Lamictal)', '1127,1142,118,1139', 'pmale.png'),
('1458', 'patient123!@#', 'Daw Moe Khin ', 'dawmoekhin@gmail.com', '36', '09750937328', 'B', 'rituximab (Rituxian),nevirapine (Viramune),cetuximab (Erbitux)', '111,1124,1111', 'pfemale.png'),
('1459', 'patient123!@#', 'Daw Sandar Sandar Sandar ', 'dawsandarsandarsandar@gmail.com', '41', '09750569220', 'A+', 'cetuximab (Erbitux)', '1128,1110', 'pfemale.png'),
('146', 'patient123!@#', 'U Myat Maung ', 'umyatmaung@gmail.com', '51', '09750686440', 'O', 'nevirapine (Viramune),carbamazepine (Tegretol)', '1140,1110,115,1129,1111', 'pmale.png'),
('1460', 'patient123!@#', 'U Ko Ko ', 'ukoko@gmail.com', '49', '09750597951', 'AB-', 'ampicillin', '1145,1134,1114,1111,1132', 'pmale.png'),
('1461', 'patient123!@#', 'Daw Nan Tun ', 'dawnantun@gmail.com', '33', '09750669599', 'A+', 'nevirapine (Viramune),rituximab (Rituxian)', '1120,1128,1123', 'pfemale.png'),
('1462', 'patient123!@#', 'U Kyaw Lin Than ', 'ukyawlinthan@gmail.com', '35', '09750158896', 'AB-', 'ampicillin,cetuximab (Erbitux)', '114,1116', 'pmale.png'),
('1463', 'patient123!@#', 'U Lwin Maung ', 'ulwinmaung@gmail.com', '27', '09750545974', 'B', 'carbamazepine (Tegretol),lamotrigine (Lamictal),penicillin (Bicillin L-A)', '1133,1110,1116', 'pmale.png'),
('1464', 'patient123!@#', 'U Min Chan Oo ', 'uminchanoo@gmail.com', '33', '09750380640', 'A+', 'abacavir (Ziagen),Insulin', '1111,113,119,1141', 'pmale.png'),
('1465', 'patient123!@#', 'Daw Hnin Phyo Moe ', 'dawhninphyomoe@gmail.com', '34', '09750478011', 'AB+', 'penicillin (Bicillin L-A),Insulin', '1114,1134,114', 'pfemale.png'),
('1466', 'patient123!@#', 'Daw Phyo Thazin ', 'dawphyothazin@gmail.com', '50', '09750042365', 'AB-', 'Insulin', '1115,1134,1135,1135', 'pfemale.png'),
('1467', 'patient123!@#', 'Daw Hnin Nyo Theint ', 'dawhninnyotheint@gmail.com', '16', '09750693559', 'B', 'tetracycline (Sumycin),carbamazepine (Tegretol)', '1133,1117', 'pfemale.png'),
('1468', 'patient123!@#', 'Daw Hnin Chue Sint ', 'dawhninchuesint@gmail.com', '27', '09750296047', 'O', 'Insulin', '1117,1122,1144,1118,1137', 'pfemale.png'),
('1469', 'patient123!@#', 'U Htet Chan ', 'uhtetchan@gmail.com', '32', '09750740614', 'A-', 'amoxicillin (Moxatag)', '117,115,1141,1125', 'pmale.png'),
('147', 'patient123!@#', 'Daw Phyo Myat Khin ', 'dawphyomyatkhin@gmail.com', '28', '09750582907', 'O', 'tetracycline (Sumycin)', '1136,1129,1125', 'pfemale.png'),
('1470', 'patient123!@#', 'U Htet Oo ', 'uhtetoo@gmail.com', '53', '09750598005', 'AB-', 'tetracycline (Sumycin),amoxicillin (Moxatag)', '1139,1136', 'pmale.png'),
('1471', 'patient123!@#', 'Daw Nandar Khaing ', 'dawnandarkhaing@gmail.com', '53', '09750984900', 'A+', 'ibuprofen and naproxen', '1140,1112,1144,1121,1138', 'pfemale.png'),
('1472', 'patient123!@#', 'U Khant Thaw ', 'ukhantthaw@gmail.com', '56', '09750282942', 'AB-', 'lamotrigine (Lamictal),amoxicillin (Moxatag),tetracycline (Sumycin)', '1134,1117,1143,115', 'pmale.png'),
('1473', 'patient123!@#', 'Daw Thiri Tun Sin ', 'dawthiritunsin@gmail.com', '39', '09750385959', 'A-', 'abacavir (Ziagen)', '1110,116', 'pfemale.png'),
('1474', 'patient123!@#', 'Daw Nandar May ', 'dawnandarmay@gmail.com', '39', '09750346601', 'AB-', 'carbamazepine (Tegretol),Insulin', '1144,1140,1134,1115', 'pfemale.png'),
('1475', 'patient123!@#', 'U Sai Htet ', 'usaihtet@gmail.com', '53', '09750019433', 'O', 'Insulin', '117,1125,1135', 'pmale.png'),
('1476', 'patient123!@#', 'U Hein Tun Lin ', 'uheintunlin@gmail.com', '36', '09750916535', 'AB+', 'abacavir (Ziagen),amoxicillin (Moxatag),abacavir (Ziagen)', '1127,1140', 'pmale.png'),
('1477', 'patient123!@#', 'Daw Zin Phwint Theint ', 'dawzinphwinttheint@gmail.com', '41', '09750648258', 'A+', 'carbamazepine (Tegretol)', '1136,1141', 'pfemale.png'),
('1478', 'patient123!@#', 'U Zaw Thu ', 'uzawthu@gmail.com', '43', '09750038487', 'AB+', 'penicillin (Bicillin L-A),nevirapine (Viramune),penicillin (Bicillin L-A)', '111,1144,1125,1117,1139', 'pmale.png'),
('1479', 'patient123!@#', 'U Phyo Aung Lin ', 'uphyoaunglin@gmail.com', '51', '09750897447', 'A+', 'ibuprofen and naproxen,cetuximab (Erbitux),rituximab (Rituxian)', '1135,1140', 'pmale.png'),
('148', 'patient123!@#', 'Daw Tun Zin ', 'dawtunzin@gmail.com', '44', '09750928064', 'A-', 'abacavir (Ziagen)', '1132,1135,1135,115', 'pfemale.png'),
('1480', 'patient123!@#', 'Daw Theint Myat Chue ', 'dawtheintmyatchue@gmail.com', '40', '09750391283', 'A+', 'ampicillin,nevirapine (Viramune)', '1117,1124,1127', 'pfemale.png'),
('1481', 'patient123!@#', 'U Phone Thaw Phone ', 'uphonethawphone@gmail.com', '41', '09750948508', 'A-', 'ampicillin,nevirapine (Viramune),ibuprofen and naproxen', '1135,112,1136', 'pmale.png'),
('1482', 'patient123!@#', 'Daw Oo Thiri ', 'dawoothiri@gmail.com', '39', '09750373107', 'AB+', 'rituximab (Rituxian),Insulin', '1129,1145,113,1138', 'pfemale.png'),
('1483', 'patient123!@#', 'Daw Ei Hnin ', 'daweihnin@gmail.com', '34', '09750285802', 'A-', 'carbamazepine (Tegretol),tetracycline (Sumycin)', '1133,1120,117,1131', 'pfemale.png'),
('1484', 'patient123!@#', 'U Khant Htet Oo ', 'ukhanthtetoo@gmail.com', '36', '09750413384', 'AB+', 'tetracycline (Sumycin)', '1128,1137,1120', 'pmale.png'),
('1485', 'patient123!@#', 'U Kyaw Min ', 'ukyawmin@gmail.com', '41', '09750018667', 'B', 'carbamazepine (Tegretol)', '1130,1133,1141,117,1139', 'pmale.png'),
('1486', 'patient123!@#', 'Daw Soe Zin ', 'dawsoezin@gmail.com', '26', '09750203553', 'A-', 'abacavir (Ziagen)', '1113,1129', 'pfemale.png'),
('1487', 'patient123!@#', 'U Kyaw Thaw Chan ', 'ukyawthawchan@gmail.com', '23', '09750989575', 'B', 'ampicillin,amoxicillin (Moxatag),abacavir (Ziagen)', '1118,1132,119,1125,111', 'pmale.png'),
('1488', 'patient123!@#', 'Daw May Tun Shwe ', 'dawmaytunshwe@gmail.com', '38', '09750056119', 'A-', 'cetuximab (Erbitux),amoxicillin (Moxatag)', '1112,112,1139,1124', 'pfemale.png'),
('1489', 'patient123!@#', 'U Oo Swan ', 'uooswan@gmail.com', '41', '09750829540', 'AB-', 'abacavir (Ziagen)', '1113,1144,1120,1115', 'pmale.png'),
('149', 'patient123!@#', 'U Swan Hein Ye ', 'uswanheinye@gmail.com', '32', '09750941924', 'A+', 'ibuprofen and naproxen,abacavir (Ziagen),rituximab (Rituxian)', '117,1115', 'pmale.png'),
('1490', 'patient123!@#', 'Daw Theint Phyo Kyaw ', 'dawtheintphyokyaw@gmail.com', '15', '09750088270', 'A+', 'carbamazepine (Tegretol),ampicillin', '1132,1126,1119,1133,1124', 'pfemale.png'),
('1491', 'patient123!@#', 'U Myat Sai Min ', 'umyatsaimin@gmail.com', '42', '09750207564', 'A+', 'rituximab (Rituxian)', '1120,1115,1121', 'pmale.png'),
('1492', 'patient123!@#', 'U Phone Htoo ', 'uphonehtoo@gmail.com', '34', '09750079091', 'O', 'tetracycline (Sumycin)', '1121,1143,1115,112', 'pmale.png'),
('1493', 'patient123!@#', 'U Oo Aung Aung ', 'uooaungaung@gmail.com', '34', '09750207582', 'A+', 'carbamazepine (Tegretol)', '1143,1125', 'pmale.png'),
('1494', 'patient123!@#', 'Daw Myat Nan Nan ', 'dawmyatnannan@gmail.com', '27', '09750249512', 'B', 'nevirapine (Viramune),ampicillin', '1122,1116,1144,1134', 'pfemale.png'),
('1495', 'patient123!@#', 'Daw Thazin Soe Phwint ', 'dawthazinsoephwint@gmail.com', '39', '09750167370', 'B', 'ibuprofen and naproxen,rituximab (Rituxian)', '1143,1117,1145,1144', 'pfemale.png'),
('1496', 'patient123!@#', 'U Thaw Than Hlaing ', 'uthawthanhlaing@gmail.com', '58', '09750683469', 'AB+', 'cetuximab (Erbitux),lamotrigine (Lamictal),cetuximab (Erbitux)', '1119,1120', 'pmale.png'),
('1497', 'patient123!@#', 'Daw Sint Shwe Thazin ', 'dawsintshwethazin@gmail.com', '36', '09750002911', 'A-', 'lamotrigine (Lamictal),Insulin,Insulin', '1137,1124,1115,1137', 'pfemale.png'),
('1498', 'patient123!@#', 'U Thu Myat Lwin ', 'uthumyatlwin@gmail.com', '41', '09750082804', 'AB+', 'abacavir (Ziagen)', '1112,116,1113,112', 'pmale.png'),
('1499', 'patient123!@#', 'Daw Kyaw Thazin ', 'dawkyawthazin@gmail.com', '20', '09750914956', 'A-', 'tetracycline (Sumycin),penicillin (Bicillin L-A),penicillin (Bicillin L-A)', '1140,1110', 'pfemale.png');

-- --------------------------------------------------------

--
-- Table structure for table `patientarrive`
--

CREATE TABLE `patientarrive` (
  `id` int(11) NOT NULL,
  `p_id` varchar(100) NOT NULL,
  `doctor_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientarrive`
--

INSERT INTO `patientarrive` (`id`, `p_id`, `doctor_id`, `date`) VALUES
(4, '141', '1142', '2019-06-06'),
(5, '141', '1137', '2019-06-08'),
(6, '141', '1142', '2019-06-27'),
(7, '141', '114', '2019-06-28'),
(8, '141', '1137', '2019-07-06'),
(9, '141', '1142', '2019-07-11'),
(10, '141', '114', '2019-07-26'),
(11, '141', '1142', '2019-08-01'),
(44, '1421', '1142', '2019-06-06'),
(45, '1421', '112', '2019-06-09'),
(46, '1421', '1142', '2019-06-27'),
(47, '1421', '', '2019-06-26'),
(48, '1421', '1142', '2019-07-11'),
(49, '1421', '112', '2019-07-14'),
(50, '1421', '1138', '2019-07-22'),
(51, '1421', '1142', '2019-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `patientfile`
--

CREATE TABLE `patientfile` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `p_id` varchar(100) NOT NULL,
  `doctor_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `file_note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientfile`
--

INSERT INTO `patientfile` (`file_id`, `file_name`, `p_id`, `doctor_id`, `date`, `file_note`) VALUES
(1, 'java.jpg', '001', '112', '2019-07-05 14:32:02', ''),
(3, 'Chapter(6-7).pdf', '001', '111', '2019-07-29 15:03:31', ''),
(5, 'CBC sample report with notes.pdf', '141', '1142', '2019-08-01', 'blood test'),
(7, 'xray.jpg', '141', '1142', '2019-08-12', 'x-ray for heart');

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
  `drug_list` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientrecord`
--

INSERT INTO `patientrecord` (`p_id`, `doctor_id`, `date`, `weight`, `b_pressure`, `invoice_id`, `record`, `drug_list`, `id`) VALUES
('141', '1142', '2019-06-06', '111', '90/70', '', 'qwer', 'qwer', 23),
('141', '1137', '2019-06-08', '154', '90/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 24),
('141', '1142', '2019-06-27', '178', '110/80', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 25),
('141', '114', '2019-06-28', '163', '90/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 26),
('141', '1137', '2019-07-06', '130', '100/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 27),
('141', '1142', '2019-07-11', '129', '90/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 28),
('141', '114', '2019-07-26', '135', '110/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 29),
('141', '1142', '2019-08-01', '113', '90/70', '', '', '', 30),
('1421', '1142', '2019-06-06', '116', '100/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 39),
('1421', '', '2019-06-09', '136', '100/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 40),
('1421', '1142', '2019-06-27', '153', '100/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 41),
('1421', '', '2019-06-26', '166', '110/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 42),
('1421', '1142', '2019-07-11', '151', '110/80', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 43),
('1421', '', '2019-07-14', '144', '100/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 44),
('1421', '', '2019-07-22', '146', '110/80', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 45),
('1421', '1142', '2019-08-01', '178', '90/70', '', '', '', 46),
('1421', '1142', '2019-06-06', '157', '110/80', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 47),
('1421', '112', '2019-06-09', '154', '100/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 48),
('1421', '1142', '2019-06-27', '174', '100/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 49),
('1421', '', '2019-06-26', '157', '110/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 50),
('1421', '1142', '2019-07-11', '157', '110/80', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 51),
('1421', '112', '2019-07-14', '125', '110/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 52),
('1421', '1138', '2019-07-22', '136', '100/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 53),
('1421', '1142', '2019-06-06', '146', '100/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 55),
('1421', '112', '2019-06-09', '160', '90/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 56),
('1421', '1142', '2019-06-27', '134', '90/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 57),
('1421', '', '2019-06-26', '161', '110/80', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 58),
('1421', '1142', '2019-07-11', '143', '110/80', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 59),
('1421', '112', '2019-07-14', '141', '110/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 60),
('1421', '1138', '2019-07-22', '121', '110/80', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 61),
('1421', '1142', '2019-08-01', '136', '110/80', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 62),
('1421', '1142', '2019-06-06', '131', '90/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 63),
('1421', '112', '2019-06-09', '166', '110/80', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 64),
('1421', '1142', '2019-06-27', '139', '110/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 65),
('1421', '', '2019-06-26', '145', '110/80', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 66),
('1421', '1142', '2019-07-11', '154', '100/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 67),
('1421', '112', '2019-07-14', '177', '100/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 68),
('1421', '1138', '2019-07-22', '163', '110/80', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 69),
('1421', '1142', '2019-08-01', '124', '110/80', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 70),
('1421', '1142', '2019-06-06', '161', '110/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 71),
('1421', '112', '2019-06-09', '134', '110/80', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 72),
('1421', '1142', '2019-06-27', '134', '110/80', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 73),
('1421', '', '2019-06-26', '132', '110/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 74),
('1421', '1142', '2019-07-11', '148', '110/80', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 75),
('1421', '112', '2019-07-14', '138', '110/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 76),
('1421', '1138', '2019-07-22', '175', '100/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 77),
('1421', '1142', '2019-08-01', '154', '90/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 78),
('1421', '1142', '2019-06-06', '164', '110/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 79),
('1421', '112', '2019-06-09', '111', '100/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 80),
('1421', '1142', '2019-06-27', '126', '90/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 81),
('1421', '', '2019-06-26', '127', '90/70', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 82),
('1421', '1142', '2019-07-11', '143', '110/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 83),
('1421', '112', '2019-07-14', '133', '100/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 84),
('1421', '1138', '2019-07-22', '178', '100/70', '', 'DIABETES MELLITUS (ICD-250.)/HYPERTENSION, BENIGN ESSENTIAL (ICD-401.1)', '. PRINIVIL TABS 20 MG (LISINOPRIL) 1 /Last Refill: #30 x 2 : Carl Savem MD (08/27/2010)/HUMULIN INJ ', 85),
('1421', '1142', '2019-08-01', '175', '110/80', '', 'Blood pressure is lower. Feet are inspected and there are no callouses, no compromised skin. No visi', 'HUMULIN INJ 70/30 20 u ac breakfast/PRINIVIL TABS 20 MG 1 qd', 86);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_Id` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `B_Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_myanmar_ci NOT NULL,
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
  `Day` varchar(100) NOT NULL,
  `B_Day` varchar(100) CHARACTER SET utf8 COLLATE utf8_myanmar_ci NOT NULL,
  `Time` varchar(100) NOT NULL,
  `B_Time` varchar(100) CHARACTER SET utf8 COLLATE utf8_myanmar_ci NOT NULL,
  `Photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_Id`, `Name`, `B_Name`, `Birthdate`, `NRC`, `Gender`, `Address`, `Phone`, `Email`, `Joined_Date`, `Education`, `Certification`, `Department`, `Salary`, `Password`, `Rank`, `Type`, `Day`, `B_Day`, `Time`, `B_Time`, `Photo`) VALUES
('111', 'Daw Phyo Sin Myat ', 'ဒေါ်ဖြိုးေစင်မြတ်', '58', '13/442151', 'female', 'Botataung, Yangon', '09750807805', 'dawphyosinmyat@gmail.com', '22-7-2014', 'M.B.B.S(Yangon)', 'M.B.,B.S, F.R.C.S/F.A.C.T.M, Dr.Med.Sc', '20', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Monday, Wednesday', 'တနင်္လာ', '(9:00-10:00)AM', '(၉း၀၀-၁၀း၀၀)နာရီ', 'dfemale.png'),
('1110', 'U Min Zaw ', 'ဦးမင်းဇော်', '42', '6/607617', 'male', 'South Oakkalar, Yangon', '09750309485', 'uminzaw@gmail.com', '22-2-2017', 'M.B.B.S(Mandalay)', 'M.B.,B.S, M.Med.Sc (Surgery)/F.R.C.S (Edin), Dr.Med.Sc ( Surgery)', '18', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Saturday, Monday, Monday', ' စနေ', '(1:00-3:00)AM', '(၁၃း၀၀-၁၅း၀၀)နာရီ', 'dmale.png'),
('1111', 'U Than Lin Maung ', 'ဦးသန်းလင်းမောင်', '40', '5/990114', 'male', 'Lanmadaw, Yangon', '09750027801', 'uthanlinmaung@gmail.com', '6-2-2018', 'M.B.B.S(Mandalay)', 'M.B.,B.S, M.Med.Sc, MRCP(UK)/Dr.Med.Sc ,FRCP(Edin),/ Dip.Med.Edu', '12', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Saturday', ' စနေ', '(8:00-10:00)PM', '(၂၀း၀၀-၂၂း၀၀)နာရီ', 'dmale.png'),
('1112', 'U Ko Htet ', 'ဦးကိုထက်', '55', '4/196565', 'male', 'Botataung, Yangon', '09750914102', 'ukohtet@gmail.com', '16-4-2014', 'M.B.B.S(Taunggyi)', 'M.B.,B.S, M.Med.Sc (Surgery)/F.R.C.S (Edin), Dr.Med.Sc ( Surgery)', '17', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Friday', 'သောကြာ', '(1:00-3:00)AM', '(၁၃း၀၀-၁၅း၀၀)နာရီ', 'dmale.png'),
('1113', 'U Ye Lwin ', 'ဦးရဲလွင်', '38', '10/719652', 'male', 'Mingaladon, Yangon', '09750766869', 'uyelwin@gmail.com', '14-3-2017', 'M.B.B.S(Magway)', 'M.B.,B.S, M.Med.Sc, MRCP(UK)/Dr.Med.Sc ,FRCP(Edin),/ Dip.Med.Edu', '14', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Friday', 'သောကြာ', '(1:00-3:00)AM', '(၁၃း၀၀-၁၅း၀၀)နာရီ', 'dmale.png'),
('1114', 'U Thaw Tun Htet ', 'ဦးသော်ထွန်းထက်', '52', '5/821333', 'male', 'Kamayut, Yangon', '09750735389', 'uthawtunhtet@gmail.com', '8-7-2014', 'M.B.B.S(Mandalay)', 'M.B.,B.S , M.Med.Sc, F.R.C.S (Edin)/FAHA (USA), FACC (USA)/Dr.Med.Sc  (Hon)', '14', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Monday, Tuesday', 'တနင်္လာ', '(1:00-3:00)AM', '(၁၃း၀၀-၁၅း၀၀)နာရီ', 'dmale.png'),
('1115', 'U Hlaing Myat ', 'ဦးလှိုင်မြတ်', '59', '14/225120', 'male', 'Latha, Yangon', '09750416681', 'uhlaingmyat@gmail.com', '16-11-2013', 'M.B.B.S(Magway)', 'M.B.,B.S  , F.R.C.S (Edin)/Dr.Med.Sc, M.J.A.T.A (Japan)', '15', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Thursday, Friday, Saturday', 'ကြာသပတေး', '(9:00-10:00)AM', '(၉း၀၀-၁၀း၀၀)နာရီ', 'dmale.png'),
('1116', 'Daw Sandar Phyo ', 'ဒေါ်စန္ဒာဖြိုး', '45', '13/452477', 'female', 'Yankin, Yangon', '09750294551', 'dawsandarphyo@gmail.com', '6-12-2017', 'M.B.B.S(Yangon)', 'M.B.,B.S , M.Med.Sc, F.R.C.S (Edin)/FAHA (USA), FACC (USA)/Dr.Med.Sc  (Hon)', '6', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Friday, Monday, Tuesday', 'သောကြာ', '(6:00-8:00)PM', '(၁၈း၀၀-၂၀း၀၀)နာရီ', 'dfemale.png'),
('1117', 'Daw Swe Oo Khin Phyo ', 'ဒေါ်ဆွေဦးခင်ဖြိုး', '54', '7/767503', 'female', 'Bahan, Yangon', '09750645355', 'dawsweookhinphyo@gmail.com', '15-3-2015', 'M.B.B.S(Yangon)', 'M.B.,B.S, F.R.C.S/F.A.C.T.M, Dr.Med.Sc', '11', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Tuesday, Thursday, Saturday', 'အင်္ဂါ', '(1:00-3:00)AM', '(၁၃း၀၀-၁၅း၀၀)နာရီ', 'dfemale.png'),
('1118', 'U Lin Phone ', 'ဦးလင်းဖုန်း', '56', '6/300992', 'male', 'Lanmadaw, Yangon', '09750421998', 'ulinphone@gmail.com', '21-1-2018', 'M.B.B.S(Yangon)', 'M.B.,B.S, F.R.C.S/F.A.C.T.M, Dr.Med.Sc', '19', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Sunday', 'တနင်္ဂနွေ', '(1:00-3:00)AM', '(၁၃း၀၀-၁၅း၀၀)နာရီ', 'dmale.png'),
('1119', 'U Chan Than ', 'ဦးချမ်းသန်း', '48', '14/654068', 'male', 'North Dagon, Yangon', '09750826473', 'uchanthan@gmail.com', '27-6-2015', 'M.B.B.S(Taunggyi)', 'M.B.,B.S , M.Med.Sc, F.R.C.S (Edin)/FAHA (USA), FACC (USA)/Dr.Med.Sc  (Hon)', '12', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Tuesday, Tuesday', 'အင်္ဂါ', '(4:00-5:00)PM', '(၁၆း၀၀-၁၇း၀၀)နာရီ', 'dmale.png'),
('112', 'Daw Khaing Nan Theint ', 'ဒေါ်ခိုင်နန်းသိမ့်', '56', '2/061634', 'female', 'Hlaing, Yangon', '09750617301', 'dawkhaingnantheint@gmail.com', '10-7-2018', 'M.B.B.S(Magway)', 'M.B.,B.S  , F.R.C.S (Edin)/Dr.Med.Sc, M.J.A.T.A (Japan)', '4', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Tuesday, Thursday', 'အင်္ဂါ', '(6:00-8:00)AM', '(၆း၀၀-၈း၀၀)နာရီ', 'dfemale.png'),
('1120', 'Daw Phyo Moe ', 'ဒေါ်ဖြိုးမိုး', '57', '11/502453', 'female', 'Pabedan, Yangon', '09750312742', 'dawphyomoe@gmail.com', '18-12-2014', 'M.B.B.S(Magway)', 'M.B.,B.S , M.Med.Sc, F.R.C.S (Edin)/FAHA (USA), FACC (USA)/Dr.Med.Sc  (Hon)', '3', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Friday, Monday', 'သောကြာ', '(8:00-10:00)PM', '(၂၀း၀၀-၂၂း၀၀)နာရီ', 'dfemale.png'),
('1121', 'Daw Nan Thazin Phyo ', 'ဒေါ်နန်းသဇင်ဖြိုး', '38', '7/519507', 'female', 'Bahan, Yangon', '09750739783', 'dawnanthazinphyo@gmail.com', '16-1-2017', 'M.B.B.S(Taunggyi)', 'M.B.,B.S , M.Med.Sc, F.R.C.S (Edin)/FAHA (USA), FACC (USA)/Dr.Med.Sc  (Hon)', '20', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Monday, Saturday', 'တနင်္လာ', '(1:00-3:00)AM', '(၁၃း၀၀-၁၅း၀၀)နာရီ', 'dfemale.png'),
('1122', 'U Sai Thaw Thu ', 'ဦးစိုင်းသော်သူ', '51', '5/997819', 'male', 'Botataung, Yangon', '09750318022', 'usaithawthu@gmail.com', '28-1-2018', 'M.B.B.S(Magway)', 'M.B.,B.S  , F.R.C.S (Edin)/Dr.Med.Sc, M.J.A.T.A (Japan)', '4', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Friday, Friday, Saturday', 'သောကြာ', '(9:00-10:00)AM', '(၉း၀၀-၁၀း၀၀)နာရီ', 'dmale.png'),
('1123', 'U Maung Swan Lin ', 'ဦးမောင်စွမ်းလင်း', '57', '3/063270', 'male', 'Thingangyun, Yangon', '09750301857', 'umaungswanlin@gmail.com', '28-10-2013', 'M.B.B.S(Magway)', 'M.B.,B.S  , F.R.C.S (Edin)/Dr.Med.Sc, M.J.A.T.A (Japan)', '3', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Friday', 'သောကြာ', '(6:00-8:00)AM', '(၆း၀၀-၈း၀၀)နာရီ', 'dmale.png'),
('1124', 'U Lwin Chan Maung ', 'ဦးလွင်ချမ်းမောင်', '50', '11/540476', 'male', 'Bahan, Yangon', '09750009049', 'ulwinchanmaung@gmail.com', '16-5-2014', 'M.B.B.S(Yangon)', 'M.B.,B.S  , F.R.C.S (Edin)/Dr.Med.Sc, M.J.A.T.A (Japan)', '1', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Friday, Friday, Tuesday', 'သောကြာ', '(1:00-3:00)AM', '(၁၃း၀၀-၁၅း၀၀)နာရီ', 'dmale.png'),
('1125', 'Daw Shwe Thwe Swe ', 'ဒေါ်ေရွှသွယ်ဆွေ', '36', '4/144714', 'female', 'Kyimyindaing, Yangon', '09750056287', 'dawshwethweswe@gmail.com', '9-4-2013', 'M.B.B.S(Mandalay)', 'M.B.,B.S  , F.R.C.S (Edin)/Dr.Med.Sc, M.J.A.T.A (Japan)', '19', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Saturday', ' စနေ', '(6:00-8:00)AM', '(၆း၀၀-၈း၀၀)နာရီ', 'dfemale.png'),
('1126', 'U Than Tun Phyo ', 'ဦးသန်းထွန်းဖြိုး', '44', '1/952203', 'male', 'Yankin, Yangon', '09750053820', 'uthantunphyo@gmail.com', '13-6-2017', 'M.B.B.S(Mandalay)', 'M.B.,B.S, F.R.C.S/F.A.C.T.M, Dr.Med.Sc', '15', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Wednesday, Tuesday, Thursday', 'ဗုဒ္ဓဟူး', '(4:00-5:00)PM', '(၁၆း၀၀-၁၇း၀၀)နာရီ', 'dmale.png'),
('1127', 'U Aung Ye Kyaw ', 'ဦးအောင်ရဲကျော်', '42', '2/821450', 'male', 'Insein, Yangon', '09750335318', 'uaungyekyaw@gmail.com', '22-9-2013', 'M.B.B.S(Magway)', 'M.B.,B.S , M.Med.Sc, F.R.C.S (Edin)/FAHA (USA), FACC (USA)/Dr.Med.Sc  (Hon)', '3', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Sunday', 'တနင်္ဂနွေ', '(9:00-10:00)AM', '(၉း၀၀-၁၀း၀၀)နာရီ', 'dmale.png'),
('1128', 'U Khant Hein ', 'ဦးခန့်ဟိန်း', '59', '5/679926', 'male', 'ahlon, Yangon', '09750831274', 'ukhanthein@gmail.com', '18-2-2015', 'M.B.B.S(Yangon)', 'M.B.,B.S , M.Med.Sc, F.R.C.S (Edin)/FAHA (USA), FACC (USA)/Dr.Med.Sc  (Hon)', '19', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Sunday', 'တနင်္ဂနွေ', '(4:00-5:00)PM', '(၁၆း၀၀-၁၇း၀၀)နာရီ', 'dmale.png'),
('1129', 'Daw Zin Kyaw Swe ', 'ဒေါ်ဇင်ကျော်ဆွေ', '58', '4/375235', 'female', 'Mingaladon, Yangon', '09750663237', 'dawzinkyawswe@gmail.com', '21-6-2014', 'M.B.B.S(Taunggyi)', 'M.B.,B.S, M.Med.Sc (Surgery)/F.R.C.S (Edin), Dr.Med.Sc ( Surgery)', '13', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Friday', 'သောကြာ', '(1:00-3:00)AM', '(၁၃း၀၀-၁၅း၀၀)နာရီ', 'dfemale.png'),
('113', 'Daw San Zin ', 'ဒေါ်ဆန်းဇင်', '47', '1/191537', 'female', 'Mayangon, Yangon', '09750238754', 'dawsanzin@gmail.com', '26-4-2013', 'M.B.B.S(Mandalay)', 'M.B.,B.S , M.Med.Sc, F.R.C.S (Edin)/FAHA (USA), FACC (USA)/Dr.Med.Sc  (Hon)', '13', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Monday, Friday', 'တနင်္လာ', '(9:00-10:00)AM', '(၉း၀၀-၁၀း၀၀)နာရီ', 'dfemale.png'),
('1130', 'U Khant Maung ', 'ဦးခန့်မောင်', '48', '11/987911', 'male', 'Pabedan, Yangon', '09750668577', 'ukhantmaung@gmail.com', '5-8-2014', 'M.B.B.S(Taunggyi)', 'M.B.,B.S, F.R.C.S/F.A.C.T.M, Dr.Med.Sc', '15', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Monday, Wednesday, Sunday', 'တနင်္လာ', '(6:00-8:00)PM', '(၁၈း၀၀-၂၀း၀၀)နာရီ', 'dmale.png'),
('1131', 'Daw Hnin Thazin Sint Kyaw ', 'ဒေါ်နှုင်းသဇင်ဆင့်ကျော်', '55', '14/599477', 'female', 'Mingaladon, Yangon', '09750268648', 'dawhninthazinsintkyaw@gmail.com', '23-11-2014', 'M.B.B.S(Magway)', 'M.B.,B.S  , F.R.C.S (Edin)/Dr.Med.Sc, M.J.A.T.A (Japan)', '10', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Tuesday, Thursday', 'အင်္ဂါ', '(4:00-5:00)PM', '(၁၆း၀၀-၁၇း၀၀)နာရီ', 'dfemale.png'),
('1132', 'Daw Oo Thazin ', 'ဒေါ်ဦးသဇင်', '53', '4/953186', 'female', 'North Dagon, Yangon', '09750338246', 'dawoothazin@gmail.com', '12-11-2015', 'M.B.B.S(Yangon)', 'M.B.,B.S  , F.R.C.S (Edin)/Dr.Med.Sc, M.J.A.T.A (Japan)', '1', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Friday', 'သောကြာ', '(6:00-8:00)PM', '(၁၈း၀၀-၂၀း၀၀)နာရီ', 'dfemale.png'),
('1133', 'U Maung Ko Thu ', 'ဦးမောင်ကိုသူ', '42', '4/537305', 'male', 'Thingangyun, Yangon', '09750371809', 'umaungkothu@gmail.com', '21-4-2013', 'M.B.B.S(Mandalay)', 'M.B.,B.S , M.Med.Sc, F.R.C.S (Edin)/FAHA (USA), FACC (USA)/Dr.Med.Sc  (Hon)', '15', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Saturday', ' စနေ', '(1:00-3:00)AM', '(၁၃း၀၀-၁၅း၀၀)နာရီ', 'dmale.png'),
('1134', 'U Phone Aung Htoo ', 'ဦးဖုန်းအောင်ထူး', '59', '2/037458', 'male', 'North Oakkalar, Yangon', '09750413176', 'uphoneaunghtoo@gmail.com', '14-11-2014', 'M.B.B.S(Yangon)', 'M.B.,B.S, M.Med.Sc, MRCP(UK)/Dr.Med.Sc ,FRCP(Edin),/ Dip.Med.Edu', '10', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Saturday, Wednesday', ' စနေ', '(9:00-10:00)AM', '(၉း၀၀-၁၀း၀၀)နာရီ', 'dmale.png'),
('1135', 'U Maung Htet Kyaw ', 'ဦးမောင်ထက်ကျော်', '49', '4/121951', 'male', 'Dagon, Yangon', '09750940536', 'umaunghtetkyaw@gmail.com', '8-3-2017', 'M.B.B.S(Mandalay)', 'M.B.,B.S , M.Med.Sc, F.R.C.S (Edin)/FAHA (USA), FACC (USA)/Dr.Med.Sc  (Hon)', '13', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Sunday, Wednesday', 'တနင်္ဂနွေ', '(8:00-10:00)PM', '(၂၀း၀၀-၂၂း၀၀)နာရီ', 'dmale.png'),
('1136', 'Daw Tun Sandar Ei ', 'ဒေါ်ထွန်းစန္ဒာအိ', '46', '12/127227', 'female', 'Mingaladon, Yangon', '09750926683', 'dawtunsandarei@gmail.com', '11-5-2018', 'M.B.B.S(Magway)', 'M.B.,B.S, M.Med.Sc (Int.Med),/M.R.C.P (UK)/Lecturer (University of medicine)', '16', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Wednesday, Sunday, Wednesday', 'ဗုဒ္ဓဟူး', '(4:00-5:00)PM', '(၁၆း၀၀-၁၇း၀၀)နာရီ', 'dfemale.png'),
('1137', 'Daw Moe Sint ', 'ဒေါ်မိုးဆင့်', '37', '3/754099', 'female', 'Mingaladon, Yangon', '09750943356', 'dawmoesint@gmail.com', '25-1-2015', 'M.B.B.S(Taunggyi)', 'M.B.,B.S, M.Med.Sc, MRCP(UK)/Dr.Med.Sc ,FRCP(Edin),/ Dip.Med.Edu', '13', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Sunday, Monday', 'တနင်္ဂနွေ', '(9:00-10:00)AM', '(၉း၀၀-၁၀း၀၀)နာရီ', 'dfemale.png'),
('1138', 'U Phone Phyo Myat ', 'ဦးဖုန်းဖြိုးမြတ်', '41', '7/826374', 'male', 'Thingangyun, Yangon', '09750232439', 'uphonephyomyat@gmail.com', '7-5-2013', 'M.B.B.S(Mandalay)', 'M.B.,B.S, M.Med.Sc, MRCP(UK)/Dr.Med.Sc ,FRCP(Edin),/ Dip.Med.Edu', '7', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Monday', 'တနင်္လာ', '(6:00-8:00)AM', '(၆း၀၀-၈း၀၀)နာရီ', 'dmale.png'),
('1139', 'Daw Myat Chue Phwint ', 'ဒေါ်မြတ်ခြူးပွင့်', '44', '7/066136', 'female', 'Sanchaung, Yangon', '09750557566', 'dawmyatchuephwint@gmail.com', '4-10-2013', 'M.B.B.S(Yangon)', 'M.B.,B.S, M.Med.Sc (Int.Med),/M.R.C.P (UK)/Lecturer (University of medicine)', '22', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Thursday', 'ကြာသပတေး', '(6:00-8:00)PM', '(၁၈း၀၀-၂၀း၀၀)နာရီ', 'dfemale.png'),
('114', 'Daw Sin Sint ', 'ဒေါ်ေစင်ဆင့်', '56', '3/345339', 'female', 'ahlon, Yangon', '09750599779', 'dawsinsint@gmail.com', '7-7-2018', 'M.B.B.S(Taunggyi)', 'M.B.,B.S, M.Med.Sc (Surgery)/F.R.C.S (Edin), Dr.Med.Sc ( Surgery)', '13', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Sunday, Friday', 'တနင်္ဂနွေ', '(6:00-8:00)PM', '(၁၈း၀၀-၂၀း၀၀)နာရီ', 'dfemale.png'),
('1140', 'Daw Soe Mon Zin Sint ', 'ဒေါ်စိုးမွန်ဇင်ဆင့်', '44', '9/481486', 'female', 'Mingala Taungnyunt\r\n, Yangon', '09750241111', 'dawsoemonzinsint@gmail.com', '22-1-2017', 'M.B.B.S(Taunggyi)', 'M.B.,B.S, F.R.C.S/F.A.C.T.M, Dr.Med.Sc', '14', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Wednesday', 'ဗုဒ္ဓဟူး', '(6:00-8:00)PM', '(၁၈း၀၀-၂၀း၀၀)နာရီ', 'dfemale.png'),
('1141', 'Daw Thazin Thiri Mon Hnin ', 'ဒေါ်သဇင်သီရိမွန်နှုင်း', '54', '9/869149', 'female', 'Mingala Taungnyunt\r\n, Yangon', '09750010504', 'dawthazinthirimonhnin@gmail.com', '12-5-2017', 'M.B.B.S(Taunggyi)', 'M.B.,B.S, M.Med.Sc (Surgery)/F.R.C.S (Edin), Dr.Med.Sc ( Surgery)', '19', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Thursday', 'ကြာသပတေး', '(1:00-3:00)AM', '(၁၃း၀၀-၁၅း၀၀)နာရီ', 'dfemale.png'),
('1142', 'U Hlaing Lin ', 'ဦးလှိုင်လင်း', '59', '12/368411', 'male', 'Sanchaung, Yangon', '09750782125', 'uhlainglin@gmail.com', '1-11-2014', 'M.B.B.S(Taunggyi)', 'M.B.,B.S, M.Med.Sc (Surgery)/F.R.C.S (Edin), Dr.Med.Sc ( Surgery)', '13', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Thursday', 'ကြာသပတေး', '(8:00-10:00)PM', '(၂၀း၀၀-၂၂း၀၀)နာရီ', 'dmale.png'),
('1143', 'Daw Sin Kyaw ', 'ဒေါ်ေစင်ကျော်', '50', '1/093930', 'female', 'Bahan, Yangon', '09750652710', 'dawsinkyaw@gmail.com', '17-8-2017', 'M.B.B.S(Taunggyi)', 'M.B.,B.S, F.R.C.S/F.A.C.T.M, Dr.Med.Sc', '7', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Tuesday, Saturday', 'အင်္ဂါ', '(6:00-8:00)PM', '(၁၈း၀၀-၂၀း၀၀)နာရီ', 'dfemale.png'),
('1144', 'Daw Mon Shwe Hnin Khin ', 'ဒေါ်မွန်ေရွှနှုင်းခင်', '51', '10/091105', 'female', 'Dagon, Yangon', '09750944211', 'dawmonshwehninkhin@gmail.com', '17-4-2018', 'M.B.B.S(Taunggyi)', 'M.B.,B.S  , F.R.C.S (Edin)/Dr.Med.Sc, M.J.A.T.A (Japan)', '1', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Tuesday, Tuesday', 'အင်္ဂါ', '(8:00-10:00)PM', '(၂၀း၀၀-၂၂း၀၀)နာရီ', 'dfemale.png'),
('1145', 'Daw Soe Sint Thwe Moe ', 'ဒေါ်စိုးဆင့်သွယ်မိုး', '58', '13/136668', 'female', 'North Oakkalar, Yangon', '09750767754', 'dawsoesintthwemoe@gmail.com', '3-5-2014', 'M.B.B.S(Yangon)', 'M.B.,B.S, M.Med.Sc (Int.Med),/M.R.C.P (UK)/Lecturer (University of medicine)', '12', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Saturday, Tuesday, Monday', ' စနေ', '(9:00-10:00)AM', '(၉း၀၀-၁၀း၀၀)နာရီ', 'dfemale.png'),
('115', 'Daw Khin Ei ', 'ဒေါ်ခင်အိ', '55', '11/749779', 'female', 'Botataung, Yangon', '09750168785', 'dawkhinei@gmail.com', '22-1-2013', 'M.B.B.S(Taunggyi)', 'M.B.,B.S, F.R.C.S/F.A.C.T.M, Dr.Med.Sc', '4', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Tuesday', 'အင်္ဂါ', '(9:00-10:00)AM', '(၉း၀၀-၁၀း၀၀)နာရီ', 'dfemale.png'),
('116', 'U Saung Htoo ', 'ဦးဆောင်ထူး', '55', '4/932537', 'male', 'Pazundaung, Yangon', '09750016414', 'usaunghtoo@gmail.com', '18-10-2014', 'M.B.B.S(Yangon)', 'M.B.,B.S , M.Med.Sc, F.R.C.S (Edin)/FAHA (USA), FACC (USA)/Dr.Med.Sc  (Hon)', '20', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Friday', 'သောကြာ', '(9:00-10:00)AM', '(၉း၀၀-၁၀း၀၀)နာရီ', 'dmale.png'),
('117', 'Daw Phyo Kyaw Ei ', 'ဒေါ်ဖြိုးကျော်အိ', '30', '14/468519', 'female', 'Pabedan, Yangon', '09750498647', 'dawphyokyawei@gmail.com', '11-2-2018', 'M.B.B.S(Taunggyi)', 'M.B.,B.S  , F.R.C.S (Edin)/Dr.Med.Sc, M.J.A.T.A (Japan)', '17', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Tuesday', 'အင်္ဂါ', '(4:00-5:00)PM', '(၁၆း၀၀-၁၇း၀၀)နာရီ', 'dfemale.png'),
('118', 'U Aung Oo Thaw ', 'ဦးအောင်ဦးသော်', '55', '2/711124', 'male', 'Yankin, Yangon', '09750393528', 'uaungoothaw@gmail.com', '6-2-2015', 'M.B.B.S(Taunggyi)', 'M.B.,B.S, M.Med.Sc (Surgery)/F.R.C.S (Edin), Dr.Med.Sc ( Surgery)', '4', 10000, 'doctor123!@#', 'specialist', 'doctor', 'Monday, Saturday', 'တနင်္လာ', '(4:00-5:00)PM', '(၁၆း၀၀-၁၇း၀၀)နာရီ', 'dmale.png'),
('119', 'U Lin Chan Phyo ', 'ဦးလင်းချမ်းဖြိုး', '56', '13/257217', 'male', 'Tamwe, Yangon', '09750001699', 'ulinchanphyo@gmail.com', '27-2-2018', 'M.B.B.S(Magway)', 'M.B.,B.S , M.Med.Sc, F.R.C.S (Edin)/FAHA (USA), FACC (USA)/Dr.Med.Sc  (Hon)', '8', 12500, 'doctor123!@#', 'proffessor', 'doctor', 'Wednesday, Saturday', 'ဗုဒ္ဓဟူး', '(6:00-8:00)AM', '(၆း၀၀-၈း၀၀)နာရီ', 'dmale.png'),
('121', 'Daw San Khin Sin ', '', '37', '6/139430', 'female', 'Yankin, Yangon', '09750886762', 'dawsankhinsin@gmail.com', '28-4-2014', 'BS Pharm(Yangon)', '', '', 200000, 'pharmacist123!@#', '', 'pharmacist', '', '', '', '', 'pharmacistfemale.png'),
('1210', 'U Saung Phone ', '', '43', '2/261885', 'male', 'Latha, Yangon', '09750860368', 'usaungphone@gmail.com', '6-5-2017', 'BS Pharm(Yangon)', '', '', 200000, 'pharmacist123!@#', '', 'pharmacist', '', '', '', '', 'pharmacistmale.png'),
('122', 'Daw Nyo Khaing Nan Ei ', '', '57', '13/772765', 'female', 'Sanchaung, Yangon', '09750344925', 'dawnyokhaingnanei@gmail.com', '22-9-2015', 'BS Pharm(Yangon)', '', '', 200000, 'pharmacist123!@#', '', 'pharmacist', '', '', '', '', 'pharmacistfemale.png'),
('123', 'Daw Thwe Ei Khin ', '', '35', '11/048882', 'female', 'North Dagon, Yangon', '09750912465', 'dawthweeikhin@gmail.com', '20-10-2018', 'BS Pharm(Yangon)', '', '', 200000, 'pharmacist123!@#', '', 'pharmacist', '', '', '', '', 'pharmacistfemale.png'),
('124', 'Daw Phwint Phwint ', '', '45', '2/634325', 'female', 'Mingala Taungnyunt\r\n, Yangon', '09750575300', 'dawphwintphwint@gmail.com', '11-12-2013', 'BS Pharm(Yangon)', '', '', 200000, 'pharmacist123!@#', '', 'pharmacist', '', '', '', '', 'pharmacistfemale.png'),
('125', 'U Ko Ye ', '', '44', '14/166796', 'male', 'Mingaladon, Yangon', '09750916786', 'ukoye@gmail.com', '19-5-2017', 'BS Pharm(Yangon)', '', '', 200000, 'pharmacist123!@#', '', 'pharmacist', '', '', '', '', 'pharmacistmale.png'),
('126', 'U Htet Maung ', '', '45', '10/493022', 'male', 'Pazundaung, Yangon', '09750629254', 'uhtetmaung@gmail.com', '21-11-2014', 'BS Pharm(Yangon)', '', '', 200000, 'pharmacist123!@#', '', 'pharmacist', '', '', '', '', 'pharmacistmale.png'),
('127', 'U Min Htoo Htet ', '', '52', '12/625300', 'male', 'Botataung, Yangon', '09750243246', 'uminhtoohtet@gmail.com', '19-5-2015', 'BS Pharm(Yangon)', '', '', 200000, 'pharmacist123!@#', '', 'pharmacist', '', '', '', '', 'pharmacistmale.png'),
('128', 'Daw Moe Sint ', '', '58', '5/900440', 'female', 'South Oakkalar, Yangon', '09750447192', 'dawmoesint@gmail.com', '16-5-2015', 'BS Pharm(Yangon)', '', '', 200000, 'pharmacist123!@#', '', 'pharmacist', '', '', '', '', 'pharmacistfemale.png'),
('129', 'U Sai Thu Lwin ', '', '44', '2/118713', 'male', 'Tamwe, Yangon', '09750176713', 'usaithulwin@gmail.com', '16-2-2015', 'BS Pharm(Yangon)', '', '', 200000, 'pharmacist123!@#', '', 'pharmacist', '', '', '', '', 'pharmacistmale.png'),
('131', 'Daw Zin Ei ', '', '32', '7/125917', 'female', 'Insein, Yangon', '09750395968', 'dawzinei@gmail.com', '19-4-2013', 'Passed Matriculation Exam(Yangon)', '', '', 100000, 'driver123!@#', '', 'driver', '', '', '', '', 'driverfemale.png'),
('1310', 'U Than Hein ', '', '43', '10/359633', 'male', 'Kyauktada, Yangon', '09750678877', 'uthanhein@gmail.com', '3-3-2018', 'Passed Matriculation Exam(Yangon)', '', '', 100000, 'driver123!@#', '', 'driver', '', '', '', '', 'drivermale.png'),
('132', 'Daw Thazin Khin ', '', '38', '8/561142', 'female', 'Dagon, Yangon', '09750154084', 'dawthazinkhin@gmail.com', '3-4-2015', 'Passed Matriculation Exam(Yangon)', '', '', 100000, 'driver123!@#', '', 'driver', '', '', '', '', 'driverfemale.png'),
('133', 'Daw Thiri Phwint ', '', '43', '3/290627', 'female', 'Lanmadaw, Yangon', '09750021621', 'dawthiriphwint@gmail.com', '23-12-2014', 'Passed Matriculation Exam(Yangon)', '', '', 100000, 'driver123!@#', '', 'driver', '', '', '', '', 'driverfemale.png'),
('134', 'Daw Phwint Sin ', '', '45', '1/203603', 'female', 'Latha, Yangon', '09750425026', 'dawphwintsin@gmail.com', '23-3-2015', 'Passed Matriculation Exam(Yangon)', '', '', 100000, 'driver123!@#', '', 'driver', '', '', '', '', 'driverfemale.png'),
('135', 'Daw Myat Kyaw Nyo ', '', '30', '2/512700', 'female', 'Sanchaung, Yangon', '09750399322', 'dawmyatkyawnyo@gmail.com', '2-9-2018', 'Passed Matriculation Exam(Yangon)', '', '', 100000, 'driver123!@#', '', 'driver', '', '', '', '', 'driverfemale.png'),
('136', 'U Myat Ye ', '', '59', '8/447326', 'male', 'Hlaing, Yangon', '09750449880', 'umyatye@gmail.com', '6-5-2018', 'Passed Matriculation Exam(Yangon)', '', '', 100000, 'driver123!@#', '', 'driver', '', '', '', '', 'drivermale.png'),
('137', 'U Aung Chan ', '', '58', '2/460061', 'male', 'Kyimyindaing, Yangon', '09750070031', 'uaungchan@gmail.com', '20-6-2014', 'Passed Matriculation Exam(Yangon)', '', '', 100000, 'driver123!@#', '', 'driver', '', '', '', '', 'drivermale.png'),
('138', 'Daw Mon Kyaw Khaing ', '', '55', '3/726398', 'female', 'South Oakkalar, Yangon', '09750602500', 'dawmonkyawkhaing@gmail.com', '19-10-2017', 'Passed Matriculation Exam(Yangon)', '', '', 100000, 'driver123!@#', '', 'driver', '', '', '', '', 'driverfemale.png'),
('139', 'U Phyo Oo ', '', '37', '2/116356', 'male', 'Hlaing, Yangon', '09750497267', 'uphyooo@gmail.com', '6-6-2014', 'Passed Matriculation Exam(Yangon)', '', '', 100000, 'driver123!@#', '', 'driver', '', '', '', '', 'drivermale.png'),
('141', 'Daw Thazin Soe ', '', '39', '10/021606', 'female', 'Latha, Yangon', '09750816758', 'dawthazinsoe@gmail.com', '15-5-2018', 'MBA(Yangon)', '', '', 300000, 'hr123!@#', '', 'hr', '', '', '', '', 'hrfemale.png'),
('1410', 'U Ko Lin Lwin ', '', '59', '3/091177', 'male', 'Mingala Taungnyunt\r\n, Yangon', '09750929087', 'ukolinlwin@gmail.com', '1-6-2014', 'MBA(Yangon)', '', '', 300000, 'hr123!@#', '', 'hr', '', '', '', '', 'hrmale.png'),
('142', 'Daw Sandar Hnin ', '', '43', '2/666412', 'female', 'Thingangyun, Yangon', '09750199904', 'dawsandarhnin@gmail.com', '7-8-2018', 'MBA(Yangon)', '', '', 300000, 'hr123!@#', '', 'hr', '', '', '', '', 'hrfemale.png'),
('143', 'U Swan Tun ', '', '56', '9/790135', 'male', 'North Dagon, Yangon', '09750852376', 'uswantun@gmail.com', '20-1-2018', 'MBA(Yangon)', '', '', 300000, 'hr123!@#', '', 'hr', '', '', '', '', 'hrmale.png'),
('144', 'U Lwin Zaw ', '', '33', '9/278198', 'male', 'Thingangyun, Yangon', '09750930474', 'ulwinzaw@gmail.com', '16-10-2015', 'MBA(Yangon)', '', '', 300000, 'hr123!@#', '', 'hr', '', '', '', '', 'hrmale.png'),
('145', 'Daw Moe Thazin Zin Tun ', '', '54', '13/810344', 'female', 'Kyauktada, Yangon', '09750393328', 'dawmoethazinzintun@gmail.com', '8-7-2015', 'MBA(Yangon)', '', '', 300000, 'hr123!@#', '', 'hr', '', '', '', '', 'hrfemale.png'),
('146', 'U Phone Tun ', '', '51', '5/948354', 'male', 'Bahan, Yangon', '09750968865', 'uphonetun@gmail.com', '1-10-2015', 'MBA(Yangon)', '', '', 300000, 'hr123!@#', '', 'hr', '', '', '', '', 'hrmale.png'),
('147', 'U Saung Aung ', '', '42', '1/783533', 'male', 'Sanchaung, Yangon', '09750524650', 'usaungaung@gmail.com', '1-4-2014', 'MBA(Yangon)', '', '', 300000, 'hr123!@#', '', 'hr', '', '', '', '', 'hrmale.png'),
('148', 'Daw Khaing Ei Phyo San ', '', '56', '3/132846', 'female', 'Mingala Taungnyunt\r\n, Yangon', '09750419780', 'dawkhaingeiphyosan@gmail.com', '5-5-2013', 'MBA(Yangon)', '', '', 300000, 'hr123!@#', '', 'hr', '', '', '', '', 'hrfemale.png'),
('149', 'Daw Theint Hlaing Nan ', '', '45', '9/538393', 'female', 'Bahan, Yangon', '09750673233', 'dawtheinthlaingnan@gmail.com', '16-8-2015', 'MBA(Yangon)', '', '', 300000, 'hr123!@#', '', 'hr', '', '', '', '', 'hrfemale.png'),
('151', 'Daw Thwe Ei Zin Sin ', '', '39', '13/596862', 'female', 'Hlaing, Yangon', '09750460431', 'dawthweeizinsin@gmail.com', '14-1-2015', 'Bc.Sc(Yangon)', '', '', 250000, 'admin123!@#', '', 'admin', '', '', '', '', 'adminfemale.png'),
('1510', 'Daw Thazin Soe ', '', '39', '10/021606', 'female', 'Latha, Yangon', '09750816758', 'dawthazinsoe@gmail.com', '15-5-2018', 'Bc.Sc(Yangon)', '', '', 250000, 'admin123!@#', '', 'admin', '', '', '', '', 'adminfemale.png'),
('152', 'Daw Theint Thiri ', '', '57', '6/033735', 'female', 'Latha, Yangon', '09750185495', 'dawtheintthiri@gmail.com', '3-11-2013', 'Bc.Sc(Yangon)', '', '', 250000, 'admin123!@#', '', 'admin', '', '', '', '', 'adminfemale.png'),
('153', 'Daw Phwint Ei Oo ', '', '39', '1/402036', 'female', 'Sanchaung, Yangon', '09750425026', 'dawphwinteioo@gmail.com', '23-3-2015', 'Bc.Sc(Yangon)', '', '', 250000, 'admin123!@#', '', 'admin', '', '', '', '', 'adminfemale.png'),
('154', 'Daw Myat Kyaw Nyo ', '', '30', '2/512700', 'female', 'Sanchaung, Yangon', '09750399322', 'dawmyatkyawnyo@gmail.com', '2-9-2018', 'Bc.Sc(Yangon)', '', '', 250000, 'admin123!@#', '', 'admin', '', '', '', '', 'adminfemale.png'),
('155', 'U Myat Ye ', '', '59', '8/447326', 'male', 'Hlaing, Yangon', '09750449880', 'umyatye@gmail.com', '6-5-2018', 'Bc.Sc(Yangon)', '', '', 250000, 'admin123!@#', '', 'admin', '', '', '', '', 'adminmale.png'),
('156', 'U Aung Chan ', '', '58', '2/460061', 'male', 'Kyimyindaing, Yangon', '09750070031', 'uaungchan@gmail.com', '20-6-2014', 'Bc.Sc(Yangon)', '', '', 250000, 'admin123!@#', '', 'admin', '', '', '', '', 'adminmale.png'),
('157', 'Daw Mon Kyaw Khaing ', '', '55', '3/726398', 'female', 'South Oakkalar, Yangon', '09750602500', 'dawmonkyawkhaing@gmail.com', '19-10-2017', 'Bc.Sc(Yangon)', '', '', 250000, 'admin123!@#', '', 'admin', '', '', '', '', 'adminfemale.png'),
('158', 'U Phyo Oo ', '', '37', '2/116356', 'male', 'Hlaing, Yangon', '09750497267', 'uphyooo@gmail.com', '6-6-2014', 'Bc.Sc(Yangon)', '', '', 250000, 'admin123!@#', '', 'admin', '', '', '', '', 'adminmale.png'),
('159', 'U Than Hein ', '', '43', '10/359633', 'male', 'Kyauktada, Yangon', '09750678877', 'uthanhein@gmail.com', '3-3-2018', 'Bc.Sc(Yangon)', '', '', 250000, 'admin123!@#', '', 'admin', '', '', '', '', 'adminmale.png'),
('161', 'Daw Shwe Hnin ', '', '30', '10/847490', 'female', 'North Oakkalar, Yangon', '09750286012', 'dawshwehnin@gmail.com', '14-10-2015', 'BN(Yangon)', '', '', 150000, 'nurse123!@#', '', 'nurse', '', '', '', '', 'nursefemale.png'),
('1610', 'U Khant Htet ', '', '55', '9/652118', 'male', 'Hlaing, Yangon', '09750798052', 'ukhanthtet@gmail.com', '18-12-2014', 'BN(Yangon)', '', '', 150000, 'nurse123!@#', '', 'nurse', '', '', '', '', 'nursemale.png'),
('162', 'Daw San Soe Nan Sint ', '', '58', '3/111297', 'female', 'North Oakkalar, Yangon', '09750551756', 'dawsansoenansint@gmail.com', '26-5-2015', 'BN(Yangon)', '', '', 150000, 'nurse123!@#', '', 'nurse', '', '', '', '', 'nursefemale.png'),
('163', 'U Min Aung Hlaing ', '', '47', '1/866178', 'male', 'Latha, Yangon', '09750739278', 'uminaunghlaing@gmail.com', '2-7-2013', 'BN(Yangon)', '', '', 150000, 'nurse123!@#', '', 'nurse', '', '', '', '', 'nursemale.png'),
('164', 'Daw Soe Thazin ', '', '42', '13/016033', 'female', 'Pabedan, Yangon', '09750387140', 'dawsoethazin@gmail.com', '23-10-2017', 'BN(Yangon)', '', '', 150000, 'nurse123!@#', '', 'nurse', '', '', '', '', 'nursefemale.png'),
('165', 'Daw Khaing Oo Thwe ', '', '54', '6/559921', 'female', 'Pabedan, Yangon', '09750750032', 'dawkhaingoothwe@gmail.com', '24-2-2017', 'BN(Yangon)', '', '', 150000, 'nurse123!@#', '', 'nurse', '', '', '', '', 'nursefemale.png'),
('166', 'Daw Hnin Thwe Chue Hlaing ', '', '60', '1/006252', 'female', 'Thaketa, Yangon', '09750576708', 'dawhninthwechuehlaing@gmail.com', '23-3-2018', 'BN(Yangon)', '', '', 150000, 'nurse123!@#', '', 'nurse', '', '', '', '', 'nursefemale.png'),
('167', 'U Hein Thu Maung ', '', '50', '5/278978', 'male', 'Sanchaung, Yangon', '09750958003', 'uheinthumaung@gmail.com', '8-1-2018', 'BN(Yangon)', '', '', 150000, 'nurse123!@#', '', 'nurse', '', '', '', '', 'nursemale.png'),
('168', 'Daw Phyo Hnin ', '', '37', '12/447219', 'female', 'Pazundaung, Yangon', '09750393007', 'dawphyohnin@gmail.com', '11-10-2014', 'BN(Yangon)', '', '', 150000, 'nurse123!@#', '', 'nurse', '', '', '', '', 'nursefemale.png'),
('169', 'U Thaw Phone Maung ', '', '37', '4/035794', 'male', 'Sanchaung, Yangon', '09750303644', 'uthawphonemaung@gmail.com', '17-10-2015', 'BN(Yangon)', '', '', 150000, 'nurse123!@#', '', 'nurse', '', '', '', '', 'nursemale.png');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `sid` int(11) NOT NULL,
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

INSERT INTO `stock` (`sid`, `id`, `batch_no`, `expiry_date`, `inward_date`, `quantity`, `selling_price`, `original_price`, `profit`) VALUES
(1, '', '1', '2019-06-29', '2019-05-26', '1000', '2000', '5', ''),
(8, '4', '1', '2019-06-10', '2019-06-17', '1000', '2000', '3', ''),
(9, '4', '1', '2019-06-10', '2019-06-17', '100', '1000', '800', '200');

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
(2, 'Aung Khant Ko', '09788470241', 'Pathein', 'aungkhantmyat158@gmail.com', '12345', '2019-06-16', 'JC.jpg'),
(3, 'Aung Min Hein', '09788470241', 'yangon', 'akm@gmail.com', 'dd', '2019-06-19', 'amh.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`Car_Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_number`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d_follower`
--
ALTER TABLE `d_follower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`Equi_Id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `patientarrive`
--
ALTER TABLE `patientarrive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientfile`
--
ALTER TABLE `patientfile`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `patientrecord`
--
ALTER TABLE `patientrecord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_Id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`sid`);

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
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `Car_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `d_follower`
--
ALTER TABLE `d_follower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patientarrive`
--
ALTER TABLE `patientarrive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `patientfile`
--
ALTER TABLE `patientfile`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patientrecord`
--
ALTER TABLE `patientrecord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
