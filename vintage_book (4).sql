-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 09:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vintage_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(225) NOT NULL,
  `admin_email` varchar(225) NOT NULL,
  `admin_password` varchar(225) NOT NULL,
  `admin_contact` varchar(225) NOT NULL,
  `admin_image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_email`, `admin_password`, `admin_contact`, `admin_image`) VALUES
(1, 'Admin', 'admin@gmail.com', '123', '03312729480', 'person.png');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `appointment_fname` varchar(255) NOT NULL,
  `appointment_lname` varchar(255) NOT NULL,
  `appointment_age` varchar(255) NOT NULL,
  `appointment_day` varchar(255) NOT NULL,
  `appointment_email` varchar(255) NOT NULL,
  `appointment_phone` varchar(255) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `appointment_fname`, `appointment_lname`, `appointment_age`, `appointment_day`, `appointment_email`, `appointment_phone`, `pat_id`, `d_id`, `date_time`) VALUES
(64, 'Jawed', 'Arif', '32', 'Wednesday', 'jawed@gmail.com', '03312729400', 5, 10, '2023-02-10 14:38:14'),
(65, 'Jawed', 'Arif', '36', 'Monday', 'jawed@gmail.com', '03312729400', 5, 15, '2023-02-10 14:42:08'),
(66, 'Jawed', 'Arif', '32', 'Wednesday', 'jawed@gmail.com', '03312729400', 5, 10, '2023-02-11 01:03:28'),
(67, 'Jawed', 'Arif', '90', 'Thursday', 'jawed@gmail.com', '03312729400', 5, 17, '2023-02-17 12:09:22'),
(68, 'Jawed', 'Arif', '24', 'Tuesday', 'jawed@gmail.com', '03312729400', 5, 7, '2023-02-17 12:10:21'),
(69, 'Jawed', 'Arif', '15', 'Tuesday', 'jawed@gmail.com', '03312729400', 5, 8, '2023-02-18 12:11:02'),
(70, 'Moazzam', 'Jiwani', '22', 'Wednesday', 'mk@gmail.com', '111', 7, 10, '2023-02-26 21:56:35'),
(71, 'Moazzam', 'ptel', '33', 'Wednesday', 'moiz@gmail.com', '00000000', 8, 51, '2023-03-02 01:51:32'),
(72, 'ilyas', 'Arif', '22', 'Monday', 'jawed@gmail.com', '03312729400', 5, 5, '2023-03-02 02:43:07'),
(73, 'Jawed', 'Arif', '90', 'Saturday', 'jawed@gmail.com', '09876543212', 5, 22, '2023-03-02 14:30:39'),
(74, 'Jawed', 'Arif', '15', 'Friday', 'jawed@gmail.com', '09876543212', 5, 11, '2023-03-02 22:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(225) NOT NULL,
  `main_image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `main_image`) VALUES
(2, 'Science', 'science.jpg'),
(4, 'Maths', 'math.jpg'),
(5, 'Islamic', 'download (6).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_messege` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_messege`) VALUES
(1, 'Noman', 'noman@gmail.com', '123455', 'GOOD WEBSITE'),
(2, 'Jawed', 'jawed@gmail.com', '0331-2729400', 'Nice Effort'),
(3, 'Aamir', 'aamir@gmail.com', '0332301010', 'heello world'),
(4, 'Ali', 'ali@gmail.com', '02020202020', 'heelooo'),
(5, 'Ali', 'ali@gmail.com', '02020202020', 'heelooo'),
(6, 'Ali', 'ali@gmail.com', '02020202020', 'heelooo');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Abhijeet', '03112964673', 443534, 'fsdfsdf'),
(2, 'Abhijeet', 'abbi.shrimali@gmail.com', 325345, 'dgfdagfg'),
(20, '324', '324@433', 324, '234234');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_fname` varchar(255) NOT NULL,
  `doctor_lname` varchar(255) NOT NULL,
  `doctor_speciality` int(11) NOT NULL,
  `doctor_gender` varchar(255) NOT NULL,
  `doctor_email` varchar(255) NOT NULL,
  `doctor_city` varchar(255) NOT NULL,
  `doctor_country` varchar(255) NOT NULL,
  `doctor_contact` varchar(255) NOT NULL,
  `doctor_password` varchar(255) NOT NULL,
  `day_1` varchar(225) NOT NULL,
  `day_2` varchar(255) NOT NULL,
  `doctor_image` varchar(255) NOT NULL,
  `doctor_time1` varchar(255) NOT NULL,
  `doctor_time2` varchar(255) NOT NULL,
  `doctor_degree1` varchar(255) NOT NULL,
  `doctor_degree2` varchar(255) NOT NULL,
  `doctor_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_fname`, `doctor_lname`, `doctor_speciality`, `doctor_gender`, `doctor_email`, `doctor_city`, `doctor_country`, `doctor_contact`, `doctor_password`, `day_1`, `day_2`, `doctor_image`, `doctor_time1`, `doctor_time2`, `doctor_degree1`, `doctor_degree2`, `doctor_status`) VALUES
(0, 'Shehzad', 'Malik', 5, 'Male', 'abddulllllll.12@gmail.com', 'Abbotabad', 'Pakistan', '03353010298', '11111111111', 'Monday', 'Tuesday', 'advertising-1.jpg', '14:22', '16:44', 'advertising-3.jpg', 'avatar.jpg', 'Available'),
(6, 'Saddam', 'Ali', 12, 'Male', 'sady.12@gmail.com', 'Karachi', 'Pakistan', '03214592991', '0210', 'Sunday', 'Monday', 'i14.jpg', '11:00', '15:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(7, 'Shayan', 'Asif', 3, 'Male', 'shaan33@gmail.com', 'Karachi', 'Pakistan', '03212001071', '0000', 'Tuesday', 'Wednesday', 'doctor-thumb-09.jpg', '12:30', '15:30', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(8, 'Moazzam', 'Patel', 4, 'Male', 'mzm@gmail.com', 'Lahore', 'Pakistan', '03234990922', '0987', 'Friday', 'Tuesday', 'doctor-thumb-06.jpg', '7:30', '10:30', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(9, 'Moiz', 'Bawany', 8, 'Male', 'moiz@gmail.com', 'Karachi', 'Pakistan', '03212001071', '02221', 'Monday', 'Tuesday', 'i2.jpg', '2:00', '4:30', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(10, 'Muhammad', 'kashif', 7, 'Male', 'mk@gmail.com', 'Karachi', 'Pakistan', '03234990922', '0981', 'Tuesday', 'Wednesday', 'i13.jpg', '15:00', '19:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(11, 'Amna', 'Tayyab', 12, 'Female', 'amna12@gmail.com', 'Karachi', 'Pakistan', '03212001071', '0922', 'Monday', 'Friday', 'doctor-thumb-10.jpg', '21:00', '24:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(12, 'Kiran', 'Shauqat', 9, 'Female', 'ks@gmaiil.com', 'Karachi', 'Pakistan', '0321098733', '0000', 'Monday', 'Thursday', 'i1.jpg', '11:00', '15:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(14, 'Shehzad', 'Malik', 8, 'Male', 'miiie@gmail.com', 'Karachi', 'Pakistan', '0321098733', '0000', 'Monday', 'Monday', '11599910039-0.jpg', '22:00', '24:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(15, 'Shehzad', 'Malik', 0, 'Male', 'cmcns@gmail.com', 'Karachi', 'Pakistan', '03214592991', '0987', 'Monday', 'Friday', '252-2528353_acne-face-facial-young-person-dermatology-hd-png.png', '11:22', '14:02', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(16, 'Saddam', 'Ahad', 10, 'Male', 'sa@gmail.com', 'Karachi', 'Pakistan', '0321098733', '02221', 'Monday', 'Tuesday', 'doctor-thumb-01.jpg', '15:00', '17:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(17, 'Shayan', 'Malik', 5, 'Male', 'mm@gmail.com', 'Karachi', 'Pakistan', '03234990922', '0210', 'Friday', 'Thursday', 'doctor-thumb-12.jpg', '19:00', '24:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(18, 'Irfan', 'Arif', 11, 'Male', 'irfan@gmail.com', 'Sialkot', 'Pakistan', '0331-2729480', '0123', 'Monday', 'Thursday', 'i48.png', '18:00', '23:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(19, 'Muzaffar', 'Ali', 11, 'Male', 'mu@gmail.com', 'Islamabad', 'Pakistan', '033109758917', '0000', 'Thursday', 'Friday', 'IMG-20230128-WA0048.jpg', '7:00', '11:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(20, 'Sana', 'Shafi', 7, 'Female', 'sn@gmail.com', 'Rawalpindi', 'Pakistan', '03052076835', '4444', 'Thursday', 'Saturday', 'IMG-20230128-WA0043.jpg', '5:00', '8;00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(21, 'Mohsin', 'Khan', 11, 'Male', 'mohsin@gmail.com', 'Hyderabad', 'Pakistan', '03312729408', '123', 'Monday', 'Tuesday', 'i63.webp', '16:00', '21:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(22, 'Shehzad', 'Raza', 11, 'Male', 'Shehzad@gmail.com', 'Lahore', 'Pakistan', '03312729405', '0000', 'Thursday', 'Saturday', 'i67.webp', '20:00', '24:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(23, 'maham', 'Naseer', 12, 'Female', 'maham@gmail.com', 'Karachi', 'Pakistan', '033122829480', '9876', 'Wednesday', 'Saturday', 'i8.jpg', '3:00', '6:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(24, 'Shazia ', 'Abbasi', 12, 'Female', 'shazia@gmail.com', 'Sialkot', 'Pakistan', '03312728980', '0321', 'Monday', 'Wednesday', 'doctor-thumb-07.jpg', '13:00', '16:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(25, 'Sania', 'Khan', 12, 'Female', 'sania@gmail.com', 'Rawalpindi', 'Pakistan', '03312525550', '5555', 'Tuesday', 'Thursday', 'doctor-thumb-10.jpg', '15:00', '19:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(26, 'Khalid', 'Ansari', 10, 'Male', 'khalid@gmail.com', 'karachi', 'Pakistan', '00000000000', '1234', 'Tuesday', 'Friday', 'i5.jpg', '12:00', '15:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(27, 'Zahid', 'Shah', 10, 'Male', 'zahid@gmiail.com', 'Lahore', 'Pakistan', '00000000001', '9876', 'Tuesday', 'Friday', 'doctor-thumb-11.jpg', '14:00', '19:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(28, 'Abdul', 'Wahid', 10, 'Male', 'wahid@gmail.com', 'Sialkot', 'Pakistan', '565656565656', '5656', 'Wednesday', 'Thursday', 'i1.jpg', '15:00', '17:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(29, 'Zainab', 'Jawed', 9, 'Female', 'zainab@gmail.com', 'Quetta', 'Pakistan', '14141414141', '1414', 'Wednesday', 'Thursday', 'i9.jpg', '1:00', '6:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(30, 'kamran', 'Mustafa', 9, 'Male', 'kamran@gmail.com', 'Multan', 'Pakistan', '78947894789', '7894', 'Tuesday', 'Wednesday', 'i16.jpg', '4:00', '8:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(31, 'Waqar', 'Raza', 9, 'Female', 'waqar@gmail.com', 'Hyderabad', 'Pakistan', '989898987987', '98987', 'Wednesday', 'Friday', 'doctor-thumb-09.jpg', '6:00', '9:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(32, 'Shujat', 'Ali Khan', 7, 'Male', 'shujat@gmail.com', 'Quetta', 'Pakistan', '56456456456', '56564', 'Tuesday', 'Sunday', 'i3.jpg', '11:00', '13:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(33, 'Talha', 'Ahmed', 6, 'Male', 'talha@gmail.com', 'Sialkot', 'Pakistan', '03312729458', '2564', 'Saturday', 'Sunday', 'i47.png', '15:00', '19:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(34, 'Hanif', 'Arif', 6, 'Male', 'hanif@gmail.com', 'Lahore', 'Pakistan', '789456123000', '7894', 'Wednesday', 'Saturday', 'i5.jpg', '21:00', '23:30', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(35, 'Parveez', 'Arae', 5, 'Male', 'Parveez@gmai9l.com', 'Islamabad', 'Pakistan', '00123456789', '1234', 'Thursday', 'Saturday', 'i17.jpg', '22:00', '24:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(36, 'Moin', 'Raza', 5, 'Male', 'moin@gmail.com', 'Quetta', 'Pakistan', '012346567890', '123', 'Wednesday', 'Sunday', 'i14.jpg', '1:00', '5:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(37, 'Mushtaq', 'Ahmed', 3, 'Male', 'mus@gmail.com', 'Lahore', 'Pakistan', '091390222--0', '2121', 'Tuesday', 'Thursday', 'i67.webp', '7:00', '10:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(38, 'Ibrahim', 'Fazal', 3, 'Male', 'if@gmail.com', 'Lahore', 'Pakistan', '0321098733', '0210', 'Monday', 'Tuesday', 'i66.webp', '1:00', '2:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(39, 'Muneeb', 'Ahmed', 3, 'Male', 'muneeb@gmail.com', 'Islamabad', 'Pakistan', '03212001071', '2134', 'Wednesday', 'Thursday', 'i16.jpg', '12:00', '15:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(40, 'Razia', 'Begum', 4, 'Female', 'rz@gmail.com', 'Abbotabad', 'Pakistan', '0321098733', '02221', 'Tuesday', 'Thursday', 'i64.webp', '11:00', '14:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(41, 'Mariyam', 'Shah', 4, 'Female', 'marry@gmail.com', 'Islamabad', 'Pakistan', '0321098733', '2134', 'Tuesday', 'Sunday', 'i60.webp', '3:00', '4:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(42, 'Sohail', 'Azeem', 4, 'Male', 'sohail@gmail.com', 'Rawalpindi', 'Pakistan', '03234990922', '0987', 'Monday', 'Wednesday', 'i11.jpg', '12:00', '24:00', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(43, 'Ghulam', 'Mustafa', 0, 'Male', 'gm@gmail.com', 'Lahore', 'Pakistan', '03234990922', '0210', 'Tuesday', 'Wednesday', '11599910039-0.jpg', '02:22', '17:05', 'Hyderabad.docx', 'Hyderabad.docx', 'Available'),
(50, 'Shehzad', 'Ahmedaa', 6, 'Male', 'saaaady.12@gmail.com', 'Rawalpindi', 'Pakistan', '03332233762', '22222', 'Monday', 'Thursday', '252-2528353_acne-face-facial-young-person-dermatology-hd-png.png', '11:11', '14:22', 'advertising-2.jpg', 'blog2.jpg', 'Available'),
(51, 'Shehzad', 'Ali', 5, 'Male', 'abddullllllllll.12@gmail.com', 'Abbotabad', 'Pakistan', '03332233762', '66666', 'Thursday', 'Wednesday', 'advertising-1.jpg', '03:33', '14:22', 'advertising-2.jpg', 'advertising-1.jpg', 'Available'),
(52, 'Shehzad', 'Ali', 5, 'Male', 'abddullllllllll.12@gmail.com', 'Abbotabad', 'Pakistan', '03332233762', '66666', 'Thursday', 'Wednesday', 'advertising-1.jpg', '03:33', '14:22', 'advertising-2.jpg', 'advertising-1.jpg', 'Available'),
(56, 'abcd', 'Wells', 9, 'Female', 'fahad@gmail.com', 'lahore', 'india', '03332233762', '222', 'Thursday', 'Sunday', '02.png', '17:16', '17:17', 'Care-project  documentation.pdf', 'Care-project  documentation.pdf', 'Available'),
(57, 'Hanif', 'Arif', 9, 'Male', 'hanif@gmail.com', 'Karachi', 'Pakistan', '12345678900', '2222', 'Friday', 'Saturday', 'istockphoto-1161336374-612x612.jpg', '11:00', '14:00', 'Training Partcipants- Karachi-1.docx', 'Screenshot (15).png', 'Available'),
(58, 'Mariam', 'Hassan', 12, 'Female', 'mariamhassan10@gmail.com', 'Rawalpindi', 'Pakistan', '03322123987', '2222', 'Tuesday', 'Saturday', 'Female-Doctor-Transparent-Images.png', '00:00', '15:00', '02.png', '01.png', 'Available'),
(60, 'zulfiqar', 'ali', 5, 'Male', 'zulfiqar@gmail.com', 'Lahore', 'Pakistan', '09876543311', '444', 'Thursday', 'Saturday', 'Training Partcipants- Karachi-1.docx', '03:00', '16:00', 'Training Partcipants- Kot Diji.docx', 'Training Partcipants- Kot Diji.docx', 'Not-Available'),
(61, 'zulfiqar', 'ali', 5, 'Male', 'zulfiqar@gmail.com', 'Lahore', 'Pakistan', '09876543311', '444', 'Thursday', 'Saturday', 'Training Partcipants- Karachi-1.docx', '03:00', '16:00', 'Training Partcipants- Kot Diji.docx', 'Training Partcipants- Kot Diji.docx', 'Not-Available'),
(62, 'ilyas', 'chisti', 7, 'Male', 'ilyas@gmail.com', 'Abbotabad', 'Pakistan', '12345678900', '2345', 'Wednesday', 'Saturday', 'Training Partcipants- Kot Diji.docx', '02:00', '16:00', 'Training Partcipants- Karachi-1.docx', 'Training Partcipants- Kot Diji.docx', 'Not-Available'),
(63, 'AHMED', 'ILYAS', 7, 'Male', 'AHMED@GMAIL.COM', 'Rawalpindi', 'Pakistan', '09876543211', '8888', 'Friday', 'Saturday', 'Screenshot (1).png', '14:00', '15:03', 'Training Partcipants- Kot Diji.docx', 'Training Partcipants- Karachi-1.docx', 'Not-Available'),
(64, 'Aslam', 'Ordhiya', 5, 'Male', 'abddullll.12@gmail.com', 'Islamabad', 'Pakistan', '03214592991', '123', 'Tuesday', 'Thursday', 'user-03.jpg', '02:22', '19:57', '11599910039-0.jpg', '252-2528353_acne-face-facial-young-person-dermatology-hd-png.png', 'Not-Available'),
(65, 'Aslam', 'Ordhiya', 5, 'Male', 'abddullll.12@gmail.com', 'Islamabad', 'Pakistan', '03214592991', '123', 'Tuesday', 'Thursday', 'user-03.jpg', '02:22', '19:57', '11599910039-0.jpg', '252-2528353_acne-face-facial-young-person-dermatology-hd-png.png', 'Not-Available'),
(66, 'Khan', 'Khan', 9, 'Male', 'khan@gmail.com', 'Islamabad', 'Pakistan', '03234990922', '111', 'Monday', 'Wednesday', 'images.jpeg', '02:02', '15:04', '11599910039-0.jpg', '11599910039-0.jpg', 'Available'),
(67, 'Ali', 'Suriya', 5, 'Male', 'abdduqql.12@gmail.com', 'ecwrv ewr', 'Pakistan', '03212001071', '1111', 'Wednesday', 'Tuesday', 'images (1).jpeg', '11:11', '14:22', '11599910039-0.jpg', '11599910039-0.jpg', 'Available'),
(68, 'sohail', 'shapatar', 5, 'Male', 'saaaady.12@gmail.com', 'Islamabad', 'Pakistan', '03322123987', 'r ewv w4v', 'Wednesday', 'Wednesday', '252-2528353_acne-face-facial-young-person-dermatology-hd-png.png', '11:11', '23:11', '11599910039-0.jpg', '252-2528353_acne-face-facial-young-person-dermatology-hd-png.png', 'Availale'),
(69, 'Shehzad', 'Malik', 4, 'Male', 'saaaady.12@gmail.com', 'Rawalpindi', 'Pakistan', '03332233762', '1234', 'Monday', 'Wednesday', 'apple-touch-icon.png', '02:02', '12:09', 'Training Partcipants- Kot Diji.docx', 'SBA_1.docx', 'Not-Available');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_speciality`
--

CREATE TABLE `doctor_speciality` (
  `speciality_id` int(11) NOT NULL,
  `speciality_name` varchar(255) NOT NULL,
  `speciality_description` varchar(10000) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `sub_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_speciality`
--

INSERT INTO `doctor_speciality` (`speciality_id`, `speciality_name`, `speciality_description`, `main_image`, `sub_image`) VALUES
(4, 'Anesthesiology', 'These doctors give you drugs to numb your pain or to put you under during surgery, childbirth, or other procedures.To ensure good health: eat lightly, breathe deeply, live moderately, cultivate cheerfulness, and maintain an interest in life.Physical fitness is the first requisite of happiness.The human body has been designed to resist an infinite number of changes and attacks brought about by its environment. The secret of good health lies in successful adjustment to changing stresses on the body.To ensure good health: eat lightly, breathe deeply, ', 'p2.jpeg', 'p2.jpeg'),
(5, 'Cardiology', 'They’re experts on the heart and blood vessels. You might see them for heart failure, a heart attack, high blood pressure, or an irregular heartbeat.To ensure good health: eat lightly, breathe deeply, live moderately, cultivate cheerfulness, and maintain an interest in life.Physical fitness is the first requisite of happiness.The human body has been designed to resist an infinite number of changes and attacks brought about by its environment. The secret of good health lies in successful adjustment to changing stresses on the body', 'p10.jpeg', 'p10.jpeg'),
(6, 'Dermatology', 'Have problems with your skin, hair, nails? Do you have moles, scars, acne, or skin allergies? Dermatologists can help.To ensure good health: eat lightly, breathe deeply, live moderately, cultivate cheerfulness, and maintain an interest in life.Physical fitness is the first requisite of happiness.The human body has been designed to resist an infinite number of changes and attacks brought about by its environment. The secret of good health lies in successful adjustment to changing stresses on the body', 'p6.jpeg', 'p6.jpeg'),
(7, 'Endocrinology', 'These are experts on hormones and metabolism. They can treat conditions like diabetes, thyroid problems, infertility, and calcium and bone disorders.To ensure good health: eat lightly, breathe deeply, live moderately, cultivate cheerfulness, and maintain an interest in life.Physical fitness is the first requisite of happiness.The human body has been designed to resist an infinite number of changes and attacks brought about by its environment. The secret of good health lies in successful adjustment to changing stresses on the body', 'p7.jpeg', 'p7.jpeg'),
(9, 'Gastroenterology', 'These are experts on hormones and metabolism. They can treat conditions like diabetes, thyroid problems, infertility, and calcium and bone disorders.To ensure good health: eat lightly, breathe deeply, live moderately, cultivate cheerfulness, and maintain an interest in life.Physical fitness is the first requisite of happiness.The human body has been designed to resist an infinite number of changes and attacks brought about by its environment. The secret of good health lies in successful adjustment to changing stresses on the body', 'p5.jpeg', 'p5.jpeg'),
(10, 'Hematology', 'These are specialists in diseases of the blood, spleen, and lymph glands, like sickle cell disease, anemia, hemophilia, and leukemia.They also do a To ensure good health,To ensure good health: eat lightly, breathe deeply, live moderately, cultivate cheerfulness, and maintain an interest in life.Physical fitness is the first requisite of happiness.The human body has been designed to resist an infinite number of changes and attacks brought about by its environment. The secret of good health lies in successful adjustment to changing stresses on the body', 'p10.jpeg', 'p10.jpeg'),
(11, 'Neurology', 'These are specialists in the nervous system, which includes the brain, spinal cord, and nerves. They treat strokes, brain and spinal tumors, epilepsy, Parkinsons disease, and Alzheimers disease.To ensure good health: eat lightly, breathe deeply, live moderately, cultivate cheerfulness, and maintain an interest in life.Physical fitness is the first requisite of happiness.The human body has been designed to resist an infinite number of changes and attacks brought about by its environment. The secret of good health lies in successful adjustment to changing stresses on the body', 'p3.jpeg', 'p3.jpeg'),
(12, ' Gynecology', 'Often called OB/GYNs, these doctors focus on women\"s health, including pregnancy and childbirth. They do Pap smears, pelvic exams, and pregnancy checkups. To ensure good health: eat lightly, breathe deeply, live moderately, cultivate cheerfulness, and maintain an interest in life.Physical fitness is the first requisite of happiness.The human body has been designed to resist an infinite number of changes and attacks brought about by its environment. The secret of good health lies in successful adjustment to changing stresses on the body,moderately, cultivate cheerfulness,', 'p9.jpeg', 'p9.jpeg'),
(13, 'fesdfesvdgs', 'fdefdfsfdsfdsfdsfdsfds ', 'pakistan independence day (1).jpg', 'Assignment 01 (1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_name` varchar(255) NOT NULL,
  `new_description` varchar(255) NOT NULL,
  `news_date` date NOT NULL,
  `news_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `new_description`, `news_date`, `news_image`) VALUES
(2, '​Endometrial Cancer', 'Endometrial cancer is a cancer that starts in the uterus. It usually starts in the layer of cells that make up the lining (endometrium) of the uterus. Endometrial cancer is often found and detected in its early stages', '2023-02-06', 'endometrial cancer.jpeg'),
(3, 'Cavities', 'Cavities (tooth decay) are one the world’s most common health problems. Although anyone can get a cavity, they are especially common in children, teenagers and young adults.Cavities refers to damage to the structure of a tooth', '2023-02-07', 'cavities.jpeg'),
(4, 'Dry Eyes', 'After a long day of staring at your computer screen, your eyes are shot. You may feel your vision to get blurry or have a burning sensation in your eyes. Perhaps in the course of your normal routine you experience a sharp pain in your eye or have excessiv', '2023-02-08', 'dey eyes.jpg'),
(5, 'Diarrhoea ', 'Diarrhoea is a digestive disorder related to bowel movements in which the stool becomes loose and watery and the frequency of passing stool increases. Diarrhoea may occur in one of the following two forms: Acute Diarrhoea and Chronic Diarrhoea ', '2023-02-08', 'diarrhea.jpg'),
(6, 'Gallstone', 'Your liver produces bile, which is a digestive fluid that helps to break down fatty foods. This bile is stored in your gallbladder. Bile contains cholesterol, bile salts and waste products. You may develop gallstones in your gallbladder  ', '2023-02-08', 'gallstone.jpeg'),
(7, 'Heart Valve', 'Heart Valve Disease​​\r\nA healthy heart circulates blood in a one-way loop, controlled by a system of four valves: the mitral, the aortic, the tricuspid, and the pulmonary. If these valves fail to open or close properly, the heart loses its ability to pump', '2023-02-08', 'heart valve.jpg'),
(8, '​Jaundice', 'Jaundice is a common and usually harmless condition in newborn babies, which refers to the yellow colour of the skin and whites of the eyes   skin and whites of the eyes that happensthat happens when there is too much bilirubin in the blood. ', '2023-02-08', 'jaundice.jpg'),
(9, 'Lung Cancer', 'Lung cancer, also known as lung carcinoma is a malignant lung tumor characterized by uncontrolled cell growth in tissues of the lung. If left untreated, this growth can spread beyond the lung into nearby tissue or other parts of the body.  ', '2023-02-08', 'lung cancer.jpeg'),
(10, 'Obesity ( Excess Weight )', 'Obesity (excess weight) is defined as having excessive amount of body fat. This disorder arises when you have a high calorie intake but you do not burn enough energy due to inactivity. Obesity (excess weight) ', '2023-02-08', 'obesity.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `order_time` date DEFAULT NULL,
  `order_status` varchar(225) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `note` varchar(225) NOT NULL,
  `contact` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `client_id`, `product_id`, `order_time`, `order_status`, `order_qty`, `name`, `email`, `address`, `city`, `note`, `contact`) VALUES
(77, 7, 16, '2023-09-21', 'Completed', 3, 'Abdul Ahad', 'ahadirfan@gmail.com', '1958/ block 2 Azizabad', 'Karachi', 'hutytr', '0321854632'),
(78, 1, 3, '2023-09-22', 'Completed', 1, 'Abhijeet', 'abbi.shrimali@gmail.com', 'abc karachi', 'karachi', 'ranchorline', '03112964673');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_Id` int(11) NOT NULL,
  `patient_fname` varchar(255) NOT NULL,
  `patient_lname` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `patient_password` varchar(255) NOT NULL,
  `patient_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_Id`, `patient_fname`, `patient_lname`, `patient_email`, `patient_password`, `patient_contact`) VALUES
(5, 'Jawedaaa', 'Arif', 'jawed@gmail.com', '12345', '09876543212'),
(6, 'Shahid', 'Anwar', 'shad@gmail.com', '098', '00000000'),
(7, 'asad', 'Jiwani', 'mk@gmail.com', '222', '111'),
(8, 'Moazzamaaa', 'Asid', 'moiz@gmail.com', '000', '00000000'),
(9, 'Abdul', 'rehman', 'rehman@gmail.com', '2222', '03142062860'),
(10, 'ali', 'Tauseef', 'admin@gmail.com', '222', '03142062860');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_desc` varchar(1000) NOT NULL,
  `product_stock` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL,
  `Product_Image` varchar(255) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `product_type` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_desc`, `product_stock`, `product_price`, `Product_Image`, `cat_id`, `product_type`) VALUES
(1, 'Math Wise 7 ', 'libero facilisis sit amet. Nunc ut aliquet metus. Praesent pulvinar justo sed                                     velit tempus bibendum. Quisque dictum lorem id mi viverra, in auctor justo laoreet.                                     Nam at massa malesuada, ullamcorper metus vel, consequat risus. Phasellus ultricies                                     velit vel accumsan porta.orem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec consequat lorem.                                     Maecenas elementum at diam consequat biben', '50', '1200', 'mathwise 7.jpg', 4, 'Simple'),
(2, 'Oxford Science Book 5 ', 'libero facilisis sit amet. Nunc ut aliquet metus. Praesent pulvinar justo sed                                     velit tempus bibendum. Quisque dictum lorem id mi viverra, in auctor justo laoreet.                                     Nam at massa malesuada, ullamcorper metus vel, consequat risus. Phasellus ultricies                                     velit vel accumsan porta.orem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec consequat lorem.                                     Maecenas elementum at diam consequat biben', '25', '1500', 'science 5.jpg', 2, 'Featured'),
(3, 'Oxford Science Book 4 ', 'r libero facilisis sit amet. Nunc ut aliquet metus. Praesent pulvinar justo sed                                     velit tempus bibendum. Quisque dictum lorem id mi viverra, in auctor justo laoreet.                                     Nam at massa malesuada, ullamcorper metus vel, consequat risus. Phasellus ultricies                                     velit vel accumsan porta.orem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec consequat lorem.                                     Maecenas elementum at diam consequat biben', '44', '1200', 'science 4.jpg', 2, 'Simple'),
(4, 'Math Wise 3      ', 'r libero facilisis sit amet. Nunc ut aliquet metus. Praesent pulvinar justo sed                                     velit tempus bibendum. Quisque dictum lorem id mi viverra, in auctor justo laoreet.                                     Nam at massa malesuada, ullamcorper metus vel, consequat risus. Phasellus ultricies                                     velit vel accumsan porta.orem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec consequat lorem.                                     Maecenas elementum at diam consequat biben', '0', '1200', 'mathwise 3.jpg', 4, 'Featured'),
(5, 'Math Wise 2 ', 'r libero facilisis sit amet. Nunc ut aliquet metus. Praesent pulvinar justo sed                                     velit tempus bibendum. Quisque dictum lorem id mi viverra, in auctor justo laoreet.                                     Nam at massa malesuada, ullamcorper metus vel, consequat risus. Phasellus ultricies                                     velit vel accumsan porta.orem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec consequat lorem.                                     Maecenas elementum at diam consequat biben', '50', '1200', 'mathwise 2.jpg', 4, 'Featured'),
(6, 'Math Wise 1 ', 'r libero facilisis sit amet. Nunc ut aliquet metus. Praesent pulvinar justo sed                                     velit tempus bibendum. Quisque dictum lorem id mi viverra, in auctor justo laoreet.                                     Nam at massa malesuada, ullamcorper metus vel, consequat risus. Phasellus ultricies                                     velit vel accumsan porta.orem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec consequat lorem.                                     Maecenas elementum at diam consequat biben', '46', '1200', 'mathwise 1.jpg', 4, 'Featured'),
(7, 'Oxford Science Book 3 ', 'r libero facilisis sit amet. Nunc ut aliquet metus. Praesent pulvinar justo sed                                     velit tempus bibendum. Quisque dictum lorem id mi viverra, in auctor justo laoreet.                                     Nam at massa malesuada, ullamcorper metus vel, consequat risus. Phasellus ultricies                                     velit vel accumsan porta.orem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec consequat lorem.                                     Maecenas elementum at diam consequat biben', '50', '1200', 'science 3.jpg', 2, 'Simple'),
(16, 'Oxford Science Book 1 ', 'r libero facilisis sit amet. Nunc ut aliquet metus. Praesent pulvinar justo sed                                     velit tempus bibendum. Quisque dictum lorem id mi viverra, in auctor justo laoreet.                                     Nam at massa malesuada, ullamcorper metus vel, consequat risus. Phasellus ultricies                                     velit vel accumsan porta.orem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec consequat lorem.                                     Maecenas elementum at diam consequat biben', '44', '1200', 'science 1.jpg', 2, 'Featured'),
(20, 'Sahi Al Bukhari ', 'tihndjcbhnukdsjbcudbunuibuidbuibuewbcuewbcuewjuebcuiebue', '50', '1200', 'download.jpg', 5, 'Featured'),
(21, 'Jumuah ke Fazail', 'tihndjcbhnukdsjbcudbunuibuidbuibuewbcuewbcuewjuebcuiebuetihndjcbhnukdsjbcudbunuibuidbuibuewbcuewbcuewjuebcuiebuetihndjcbhnukdsjbcudbunuibuidbuibuewbcuewbcuewjuebcuiebuetihndjcbhnukdsjbcudbunuibuidbuibuewbcuewbcuewjuebcuiebue', '100', '1000', 'jumuah ke fazail.jpg', 5, 'Featured'),
(22, 'Khatm -e - nubuwat', 'tihndjcbhnukdsjbcudbunuibuidbuibuewbcuewbcuewjuebcuiebuetihndjcbhnukdsjbcudbunuibuidbuibuewbcuewbcuewjuebcuiebuetihndjcbhnukdsjbcudbunuibuidbuibuewbcuewbcuewjuebcuiebuetihndjcbhnukdsjbcudbunuibuidbuibuewbcuewbcuewjuebcuiebue', '50', '1200', 'khatme nubuwat.jpg', 5, 'Simple'),
(23, 'Namaz ka Tareeqa', 'tihndjcbhnukdsjbcudbunuibuidbuibuewbcuewbcuewjuebcuiebuetihndjcbhnukdsjbcudbunuibuidbuibuewbcuewbcuewjuebcuiebuetihndjcbhnukdsjbcudbunuibuidbuibuewbcuewbcuewjuebcuiebuetihndjcbhnukdsjbcudbunuibuidbuibuewbcuewbcuewjuebcuiebue', '25', '900', 'namaz ka tareeqa.jpg', 5, 'Featured');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(11) NOT NULL,
  `shipping_name` varchar(225) NOT NULL,
  `shipping_email` varchar(225) NOT NULL,
  `shipping_address` varchar(225) NOT NULL,
  `shipping_city` varchar(225) NOT NULL,
  `shipping_note` varchar(225) NOT NULL,
  `shipping_for` int(11) NOT NULL,
  `shipping_contact` varchar(225) NOT NULL,
  `od_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(50) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Last_Name` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `Name`, `Last_Name`, `Email`, `Pass`, `profile`) VALUES
(1, 'Abhijeet', 'Shrimali', 'abbi.shrimali@gmail.com', '1234', 'mypic.JPEG'),
(7, 'Abdul Ahad', 'Irfan', 'ahadirfan@gmail.com', '0331', ''),
(8, 'ahmed', 'farooq', 'ahmed@gmail.com', '0335', ''),
(9, 'Abhijeet', 'Shrimali', 'abc@gmail.com', '1234', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
