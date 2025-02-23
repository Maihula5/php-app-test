-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 09:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `doctor_speciality` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `appdate` varchar(255) NOT NULL,
  `apptime` time NOT NULL,
  `symptoms` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patient_no`, `doctor_speciality`, `doctor_name`, `appdate`, `apptime`, `symptoms`) VALUES
(10, 'RAK234', 'Surgery', 'Dr Abdurrahman Maihula', '24/5/2019', '06:20:00', 'ggggg'),
(11, 'RAK234', 'Surgery', 'Dr Santhini John', '23/5/2019', '18:30:00', 'Dizzy');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `fullname`, `speciality`, `email`, `phone_number`, `profile`, `password`, `image`) VALUES
(1, 'Dr Abdurrahman Maihula', 'Cardiology', 'waleedmaihula@gmail.com', 563037724, 'A specialised doctor with 10 years of experience', '12345', 'images/pi_image1_19959598.png'),
(2, 'Dr Santhini John', 'Dentist', 'snt@yahoo.com', 23455677, '10 years of experience', '1234', 'images/Dr-Santhini-John.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `barcode` int(11) NOT NULL,
  `insured` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Registered_By` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`id`, `name`, `barcode`, `insured`, `status`, `price`, `quantity`, `Registered_By`, `date`) VALUES
(1, 'Panadol', 223344, '', 'Available', 200, 300, '0', '2019-05-09'),
(2, 'Amoxil', 33333, '', 'Available', 230, 400, 'Aisha Salisu', '2019-05-09'),
(3, 'VitaminC', 4444455, 'No', 'Available', 30, 500, 'Halima Alliyu', '2019-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `rak_no` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `rak_no`, `fullname`, `phone_number`, `email`, `address`, `gender`) VALUES
(1, 'RAK123', 'Musa Nuhu', 2147483647, 'aam@gmail.com', 'Rak', 'Male'),
(5, 'RAK444', 'John Maxwell', 222222444, 'aj@yahoo.com', 'Nigeria', 'Male'),
(6, 'RAK234', 'Aliyu Hamisu', 223344, 'aas@gmail.com', 'KD', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`id`, `fullname`, `phone_number`, `email`, `password`) VALUES
(1, 'Aisha Salisu', 234998822, 'aas@yahoo.com', '1234'),
(2, 'Halima Alliyu', 22334455, 'ahh@gmail.com', '1234'),
(3, 'Ahmad Khairi', 563680, 'ghu@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `psyc_status` varchar(255) NOT NULL,
  `chronic_disease` varchar(255) NOT NULL,
  `medications` varchar(255) NOT NULL,
  `advice` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `patient_no`, `doctor_name`, `diagnosis`, `psyc_status`, `chronic_disease`, `medications`, `advice`, `date`) VALUES
(1, 'RAK234', 'Dr Abdurrahman Maihula', 'Frequent Eating', 'Cooperative', 'None', 'Panadol, DOSAGE 100ml', 'Sleep Properly', '2019-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'RAK123', 'b59c67bf196a4758191e42f76670ceba', 'aam@gmail.com'),
(2, 'RAK444', 'def7924e3199be5e18060bb3e1d547a7', 'aj@yahoo.com'),
(3, 'RAK234', '81dc9bdb52d04dc20036dbd8313ed055', 'aas@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pat_no` (`rak_no`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
