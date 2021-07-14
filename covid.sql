-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 02:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` varchar(4) NOT NULL,
  `dname` varchar(15) DEFAULT NULL,
  `Specialist` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dname`, `Specialist`) VALUES
('1001', 'Dr.Scott', 'Internists and Family Practitioners'),
('1002', 'Dr.Cruz', 'Pathologist'),
('1003', 'Dr.Racheal', 'Pathologist'),
('1004', 'Dr.Disha', 'Neurologists'),
('1005', 'Dr.Nelson', 'Pulmonologists, ENTs, Ophthalmologists'),
('1006', 'Dr.Shah', 'Internists and Family Practitioners');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` varchar(4) NOT NULL,
  `name` varchar(18) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `city` varchar(9) DEFAULT NULL,
  `state` varchar(5) DEFAULT NULL,
  `corona` varchar(6) DEFAULT NULL,
  `date_diagnosed` varchar(17) DEFAULT NULL,
  `pcondition` varchar(12) DEFAULT NULL,
  `hospitalize` varchar(11) DEFAULT NULL,
  `treatment` varchar(10) DEFAULT NULL,
  `doc_id` varchar(9) DEFAULT NULL,
  `room` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `name`, `age`, `gender`, `city`, `state`, `corona`, `date_diagnosed`, `pcondition`, `hospitalize`, `treatment`, `doc_id`, `room`) VALUES
('01', 'Sanjay Gandhi', 42, 'M', 'Surat', 'GJ', 'Yes', '15/06/2020', 'Mild', 'NO', 'Quarantine', '1001', ''),
('02', 'Mia Brown', 25, 'F', 'Surat', 'GJ', 'YES', '15/06/2020', 'MODERATE', 'YES', 'HCL', '1002', '101'),
('03', 'NAN SINGH', 30, 'M', 'MUMBAI', 'MH', 'NO', '16/06/2020', '', 'NO', 'Quarantine', '1002', ''),
('04', 'JESSICA BUBBURY', 36, 'F', 'CHENNAI', 'TN', 'NO', '16/06/2020', '', 'NO', 'Quarantine', '1003', ''),
('05', 'MICHELLE CARTER', 18, 'M', 'SURAT', 'GJ', 'YES', '16/06/2020', 'ASYMPTOMATIC', 'NO', 'Quarantine', '1003', ''),
('06', 'GERRY FRIEDMAN', 55, 'M', 'JAIPUR', 'RJ', 'YES', '16/06/2020', 'MILD', 'YES', 'GENERAL', '1002', '101'),
('07', 'MIKE GUILIANO', 60, 'M', 'UDAIPUR', 'RJ', 'YES', '17/06/2020', 'SEVEVERE', 'YES', 'PLASMA', '1003', '201'),
('08', 'AISHA SCOOT', 45, 'F', 'SURAT', 'GJ', 'YES', '17/06/2020', 'MODERATE', 'YES', 'PLASMA', '1004', '202'),
('09', 'NOAH VILLANUEVA', 15, 'F', 'SURAT', 'GJ', 'YES', '17/06/2020', 'Mild', 'NO', 'Quarantine', '1003', ''),
('10', 'EDWARD BUCK', 36, 'M', 'BANGALORE', 'KA', 'YES', '17/06/2020', 'MODERATE', 'NO', 'Quarantine', '1002', ''),
('11', 'LATIA COSTA', 15, 'F', 'KANNUR', 'KL', 'YES', '17/06/2020', 'MODERATE', 'YES', 'GENERAL', '1001', '102'),
('12', 'HOWARD MULLANEY', 25, 'M', 'SURAT', 'GJ', 'YES', '17/06/2020', 'MODERATE', 'YES', 'GENERAL', '1001', '102'),
('13', 'JASMINE ', 66, 'F', 'SURAT', 'GJ', 'YES', '17/06/2020', 'SEVEVERE', 'YES', 'PLASMA', '1005', '203'),
('14', 'SHARLENE TERRY', 70, 'F', 'SURAT', 'GJ', 'YES', '18/06/2020', 'SEVEVERE', 'YES', 'PLASMA', '1005', '204'),
('15', 'MAGGIE', 45, 'F', 'SURAT', 'GJ', 'YES', '18/06/2020', 'SEVEVERE', 'YES', 'HCL', '1006', '201'),
('16', 'JENNIFER', 41, 'F', 'SURAT', 'GJ', 'YES', '18/06/2020', 'ASYMPTOMATIC', 'NO', 'Quarantine', '1002', ''),
('17', 'KATIE ROPER', 38, 'F', 'SURAT', 'GJ', 'YES', '18/06/2020', 'MODERATE', 'YES', 'HCL', '1005', '103'),
('18', 'TAISHA ', 25, 'F', 'SURAT', 'GJ', 'YES', '18/06/2020', 'MODERATE', 'YES', 'HCL', '1006', '103'),
('19', 'DANIFF GOBLE', 25, 'M', 'MUMBAI', 'MH', 'NO', '18/06/2020', '', 'NO', 'Quarantine', '1006', ''),
('20', 'IVAN ROGERS', 36, 'M', 'MUMBAI', 'MH', 'NO', '18/06/2020', '', 'NO', 'Quarantine', '1001', ''),
('21', 'JASON SALTER', 49, 'M', 'MUMBAI', 'MH', 'NO', '18/06/2020', '', 'NO', 'Quarantine', '1002', ''),
('22', 'LORI ROBY', 41, 'F', 'MUMBAI', 'MH', 'YES', '18/06/2020', 'Mild', 'NO', 'Quarantine', '1003', ''),
('23', 'PETER MONROE', 31, 'M', 'MUMBAI', 'MH', 'NO', '18/06/2020', '', '', 'Quarantine', '1004', ''),
('24', 'ERIC DOUGALL', 75, 'M', 'MUMBAI', 'MH', 'Yes', '18/06/2020', 'Mild', 'NO', 'Quarantine', '1001', ''),
('25', 'LISA ', 66, 'F', 'MUMBAI', 'MH', 'NO', '18/06/2020', '', '', 'Quarantine', '1005', ''),
('26', 'JULIA', 60, 'F', 'NAGPUR', 'MH', 'Yes', '18/06/2020', 'MODERATE', 'YES', 'PLASMA', '1006', '301'),
('27', 'ANTHONY', 55, 'M', 'NAGPUR', 'MH', 'NO', '18/06/2020', '', '', 'Quarantine', '1002', ''),
('28', 'RICK CLAYTON', 53, 'M', 'NAGPUR', 'MH', 'NO', '19/06/2020', '', '', 'Quarantine', '1001', ''),
('29', 'NEVILLE TREDINNICK', 49, 'M', 'NAGPUR', 'MH', 'Yes', '19/06/2020', 'ASYMPTOMATIC', 'NO', 'Quarantine', '1003', ''),
('30', 'MICHAEL ALBERT', 12, 'M', 'NAGPUR', 'MH', 'Yes', '19/06/2020', 'ASYMPTOMATIC', 'NO', 'Quarantine', '1005', ''),
('31', 'JONATHAN ', 50, 'M', 'DELHI', 'DELHI', 'Yes', '19/06/2020', 'SEVEVERE', 'YES', 'PLASMA', '1006', '501'),
('32', 'WALTER', 64, 'M', 'DELHI', 'DELHI', 'NO', '20/06/2020', '', '', 'Quarantine', '1001', ''),
('33', 'KELLEY', 80, 'F', 'DELHI', 'DELHI', 'YES', '21/06/2020', 'SEVEVERE', 'YES', 'PLASMA', '1001', '503'),
('34', 'AMY DUNN', 84, 'F', 'DELHI', 'DELHI', 'Yes', '21/06/2020', 'Mild', 'NO', 'Quarantine', '1002', ''),
('35', 'ELIZABETH', 42, 'F', 'DELHI', 'DELHI', 'YES', '21/06/2020', 'Mild', 'NO', 'Quarantine', '1003', ''),
('36', 'CARL', 30, 'M', 'DELHI', 'DELHI', 'YES', '21/06/2020', 'SEVEVERE', 'YES', 'PLASMA', '1005', '202'),
('37', 'NILSON', 21, 'M', 'DELHI', 'DELHI', 'YES', '21/06/2020', 'MODERATE', 'YES', 'HCL', '1002', '103'),
('38', 'CHANDALLER', 26, 'M', 'SURAT', 'GJ', 'NO', '21/06/2020', '', '', 'Quarantine', '1002', ''),
('39', 'KARA HARRISON', 33, 'F', 'SURAT', 'GJ', 'NO', '22/06/2020', '', '', 'Quarantine', '1003', ''),
('40', 'EVELYN GIRIFALCO', 60, 'F', 'SURAT', 'GJ', 'Yes', '22/06/2020', 'Mild', 'NO', 'Quarantine', '1005', ''),
('41', 'LINDA ENDERSON', 90, 'F', 'SURAT', 'GJ', 'Yes', '22/06/2020', 'Mild', 'NO', 'Quarantine', '1001', ''),
('42', 'SEAN ', 18, 'M', 'BANGALORE', 'KA', 'Yes', '22/06/2020', 'ASYMPTOMATIC', 'NO', 'Quarantine', '1003', ''),
('43', 'ROSE IVEY', 55, 'F', 'JAIPUR', 'RJ', 'Yes', '22/06/2020', 'Mild', 'NO', 'Quarantine', '1005', ''),
('44', 'JOHN SCOTTER', 36, 'M', 'MUMBAI', 'MH', 'Yes', '22/06/2020', 'MODERATE', 'YES', 'HCL', '1002', '104');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomno` varchar(7) NOT NULL,
  `type` varchar(7) DEFAULT NULL,
  `bed occupancy` varchar(13) DEFAULT NULL,
  `oxygen support` varchar(13) DEFAULT NULL,
  `ventillators` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomno`, `type`, `bed occupancy`, `oxygen support`, `ventillators`) VALUES
('101', 'General', '5', 'NO', 'NO'),
('102', 'General', '5', 'NO', 'NO'),
('103', 'General', '5', 'YES', 'NO'),
('104', 'General', '4', 'YES', 'YES'),
('201', 'OTP', '2', 'YES', 'YES'),
('202', 'OTP', '2', 'YES', 'YES'),
('203', 'OTP', '2', 'YES', 'YES'),
('204', 'OTP', '2', 'YES', 'NO'),
('301', 'ICU', '1', 'YES', 'YES'),
('302', 'ICU', '1', 'YES', 'YES'),
('303', 'ICU', '1', 'YES', 'YES'),
('501', 'VIP', '1', 'YES', 'YES'),
('502', 'VIP', '1', 'YES', 'YES'),
('503', 'VIP', '1', 'YES', 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
