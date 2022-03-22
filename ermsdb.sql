-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 07:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ermsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `facdetails`
--

CREATE TABLE `facdetails` (
  `ID` int(11) NOT NULL,
  `Ffname` varchar(50) NOT NULL,
  `Flname` varchar(50) NOT NULL,
  `Fac_no` varchar(16) NOT NULL,
  `Fgender` enum('Male','Female','','') NOT NULL,
  `Femail` varchar(50) NOT NULL,
  `Fpassword` varchar(100) NOT NULL,
  `Fcontact_no` bigint(10) NOT NULL,
  `Fjoining_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facdetails`
--

INSERT INTO `facdetails` (`ID`, `Ffname`, `Flname`, `Fac_no`, `Fgender`, `Femail`, `Fpassword`, `Fcontact_no`, `Fjoining_date`) VALUES
(1, 'Vijay', 'Ghore', '987654321', 'Male', 'vijay@gmail.com', '22222', 1111111111, '0000-00-00'),
(2, 'Shubham', 'Sakhare', '777777777', 'Male', 'shubham@gmail.com', '11111', 222222222, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `facexperience`
--

CREATE TABLE `facexperience` (
  `ID` int(11) NOT NULL,
  `EmpID` int(11) DEFAULT NULL,
  `Fac_no` varchar(16) DEFAULT NULL,
  `Experience` varchar(200) DEFAULT NULL,
  `Department` varchar(50) DEFAULT 'No',
  `College_Mail_ID` varchar(50) DEFAULT NULL,
  `Full_Name` varchar(100) DEFAULT NULL,
  `Date_Of_Birth` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Blood_Group` varchar(10) DEFAULT NULL,
  `Qualification` varchar(30) DEFAULT NULL,
  `Designation` varchar(50) DEFAULT NULL,
  `Mobile_No` varchar(10) DEFAULT NULL,
  `PEID` varchar(50) NOT NULL,
  `Parents_Mob_No` varchar(10) DEFAULT NULL,
  `Residential_Address` varchar(100) DEFAULT NULL,
  `Telephpne_No` varchar(15) DEFAULT NULL,
  `State` varchar(20) DEFAULT NULL,
  `District` varchar(20) DEFAULT NULL,
  `Joining_Date` varchar(20) DEFAULT NULL,
  `Pin_Code` int(15) DEFAULT NULL,
  `Permenant_Address` varchar(100) DEFAULT NULL,
  `Father_Name` varchar(50) DEFAULT NULL,
  `Father_Occupation` varchar(30) DEFAULT NULL,
  `Mother_Name` varchar(20) DEFAULT NULL,
  `Mother_Occupation` varchar(20) DEFAULT NULL,
  `Mob_No` varchar(10) DEFAULT NULL,
  `Family_Income` varchar(20) DEFAULT NULL,
  `Achievements_1` varchar(300) DEFAULT NULL,
  `Achievements_2` varchar(300) DEFAULT NULL,
  `Achievements_3` varchar(300) DEFAULT NULL,
  `Achievements_4` varchar(300) DEFAULT NULL,
  `Achievements_5` varchar(300) DEFAULT NULL,
  `Femail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facexperience`
--

INSERT INTO `facexperience` (`ID`, `EmpID`, `Fac_no`, `Experience`, `Department`, `College_Mail_ID`, `Full_Name`, `Date_Of_Birth`, `Gender`, `Blood_Group`, `Qualification`, `Designation`, `Mobile_No`, `PEID`, `Parents_Mob_No`, `Residential_Address`, `Telephpne_No`, `State`, `District`, `Joining_Date`, `Pin_Code`, `Permenant_Address`, `Father_Name`, `Father_Occupation`, `Mother_Name`, `Mother_Occupation`, `Mob_No`, `Family_Income`, `Achievements_1`, `Achievements_2`, `Achievements_3`, `Achievements_4`, `Achievements_5`, `Femail`) VALUES
(1, 1, '987654321', '3', 'MCA', 'vijay@ves.ac.in', 'Vijay E GHore', '1/2/21', 'Male', 'A +ve', 'MCA', 'Professer', '1111111111', 'vijayghore@gmail.com', '2222222222', '', '', '', '', '01/02/2021', 444444, '', '', '', '', '', '', '', '5', '6', '7', '8', '9', 'vijay@gmail.com'),
(2, 2, '777777777', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '00', '11', '22', '33', '44', 'shubham@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `steducation`
--

CREATE TABLE `steducation` (
  `Id` int(11) NOT NULL,
  `EmpID` int(11) NOT NULL,
  `CoursePG` varchar(45) DEFAULT NULL,
  `SchoolCollegePG` varchar(45) DEFAULT NULL,
  `YearOfAdmission` varchar(45) DEFAULT NULL,
  `PercentagePG` varchar(4) DEFAULT NULL,
  `CourseGra` varchar(45) DEFAULT NULL,
  `SchoolCollegeGra` varchar(45) DEFAULT NULL,
  `YearPassingGra` varchar(45) DEFAULT NULL,
  `PercentageGra` varchar(4) DEFAULT NULL,
  `CourseSSC` varchar(45) DEFAULT NULL,
  `SchoolCollegeSSC` varchar(45) DEFAULT NULL,
  `YearPassingSSC` varchar(45) DEFAULT NULL,
  `PercentageSSC` varchar(4) DEFAULT NULL,
  `CourseHSC` varchar(45) DEFAULT NULL,
  `SchoolCollegeHSC` varchar(45) DEFAULT NULL,
  `YearPassingHSC` varchar(45) DEFAULT NULL,
  `PercentageHSC` varchar(4) DEFAULT NULL,
  `SEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `steducation`
--

INSERT INTO `steducation` (`Id`, `EmpID`, `CoursePG`, `SchoolCollegePG`, `YearOfAdmission`, `PercentagePG`, `CourseGra`, `SchoolCollegeGra`, `YearPassingGra`, `PercentageGra`, `CourseSSC`, `SchoolCollegeSSC`, `YearPassingSSC`, `PercentageSSC`, `CourseHSC`, `SchoolCollegeHSC`, `YearPassingHSC`, `PercentageHSC`, `SEmail`) VALUES
(1, 1, 'MCA', '', '2017', '', 'BCA', 'DCPE, HVPM, Amravati', '2017', '60', '', 'Ramkrushna', '2011', '62', '', 'ACS College', '2013', '60', 'akshay@gmail.com'),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'shubham@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stexperience`
--

CREATE TABLE `stexperience` (
  `ID` int(11) NOT NULL,
  `EmpID` varchar(500) DEFAULT NULL,
  `PRN_No` varchar(16) DEFAULT NULL,
  `Admission_Date` varchar(20) DEFAULT NULL,
  `Course` varchar(50) DEFAULT 'No',
  `College_Mail_ID` varchar(50) DEFAULT NULL,
  `Full_Name` varchar(100) DEFAULT NULL,
  `Date_Of_Birth` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Blood_Group` varchar(10) DEFAULT NULL,
  `Religion` varchar(20) DEFAULT NULL,
  `Category` varchar(10) DEFAULT NULL,
  `Mobile_No` varchar(10) DEFAULT NULL,
  `Parents_Mob_No` varchar(10) DEFAULT NULL,
  `Residential_Address` varchar(100) DEFAULT NULL,
  `Telephpne_No` varchar(15) DEFAULT NULL,
  `State` varchar(20) DEFAULT NULL,
  `District` varchar(20) DEFAULT NULL,
  `Taluka` varchar(20) DEFAULT NULL,
  `Pin_Code` int(15) DEFAULT NULL,
  `Permenant_Address` varchar(100) DEFAULT NULL,
  `Father_Name` varchar(50) DEFAULT NULL,
  `Father_Occupation` varchar(30) DEFAULT NULL,
  `Mother_Name` varchar(20) DEFAULT NULL,
  `Mother_Occupation` varchar(20) DEFAULT NULL,
  `Mob_No` varchar(10) DEFAULT NULL,
  `Family_Income` varchar(20) DEFAULT NULL,
  `Achievements_1` varchar(300) DEFAULT NULL,
  `Achievements_2` varchar(300) DEFAULT NULL,
  `Achievements_3` varchar(300) DEFAULT NULL,
  `Achievements_4` varchar(300) DEFAULT NULL,
  `Achievements_5` varchar(300) DEFAULT NULL,
  `SEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stexperience`
--

INSERT INTO `stexperience` (`ID`, `EmpID`, `PRN_No`, `Admission_Date`, `Course`, `College_Mail_ID`, `Full_Name`, `Date_Of_Birth`, `Gender`, `Blood_Group`, `Religion`, `Category`, `Mobile_No`, `Parents_Mob_No`, `Residential_Address`, `Telephpne_No`, `State`, `District`, `Taluka`, `Pin_Code`, `Permenant_Address`, `Father_Name`, `Father_Occupation`, `Mother_Name`, `Mother_Occupation`, `Mob_No`, `Family_Income`, `Achievements_1`, `Achievements_2`, `Achievements_3`, `Achievements_4`, `Achievements_5`, `SEmail`) VALUES
(1, '1', '', '06 July 2017', 'MCA', '2017akshay.ingole@ves.ac.in', 'Akshay N Ingole', 'Dec 1995', 'Male', 'O +ve', 'Hindu', 'OBC', '1111111111', '2222222222', 'Amravati', '123456', 'Maharashtra', 'Amravati', 'Amravati', 14141, 'Amravati', 'N Ingole', 'Retired Teacher', 'Mamta', 'Housewife', '3333333333', '12345', '1', '2', '3', '4', '6', 'akshay@gmail.com'),
(2, '2', '9876543210', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'shubham@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetail`
--

CREATE TABLE `studentdetail` (
  `ID` int(11) NOT NULL,
  `SFname` varchar(50) DEFAULT NULL,
  `SLName` varchar(50) DEFAULT NULL,
  `PRN_No` varchar(16) DEFAULT NULL,
  `StudentDept` varchar(50) DEFAULT NULL,
  `YOS` varchar(20) DEFAULT NULL,
  `ContactNo` bigint(10) DEFAULT NULL,
  `SGender` enum('Male','Female') DEFAULT NULL,
  `SEmail` varchar(50) DEFAULT NULL,
  `EmpPassword` varchar(100) DEFAULT NULL,
  `SJoingdate` date DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetail`
--

INSERT INTO `studentdetail` (`ID`, `SFname`, `SLName`, `PRN_No`, `StudentDept`, `YOS`, `ContactNo`, `SGender`, `SEmail`, `EmpPassword`, `SJoingdate`, `PostingDate`) VALUES
(1, 'Akshay', 'Ingole', '1234567890', 'MCA', '', 0, 'Female', 'akshay@gmail.com', '12345', '0000-00-00', '2021-05-30 13:02:05'),
(2, 'Shubham', 'Sakhare', '9876543210', NULL, NULL, NULL, NULL, 'shubham@gmail.com', '11111', NULL, '2021-05-30 18:31:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(50) DEFAULT NULL,
  `AdminuserName` varchar(50) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'Admin', '123456', '2019-02-07 16:52:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facdetails`
--
ALTER TABLE `facdetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `facexperience`
--
ALTER TABLE `facexperience`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `steducation`
--
ALTER TABLE `steducation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `stexperience`
--
ALTER TABLE `stexperience`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentdetail`
--
ALTER TABLE `studentdetail`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EmpCode` (`PRN_No`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facdetails`
--
ALTER TABLE `facdetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facexperience`
--
ALTER TABLE `facexperience`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `steducation`
--
ALTER TABLE `steducation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stexperience`
--
ALTER TABLE `stexperience`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentdetail`
--
ALTER TABLE `studentdetail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
