-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 18, 2020 at 06:30 PM
-- Server version: 5.7.25
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Remenko`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bouwjaar`
--

CREATE TABLE `Bouwjaar` (
  `Bouwjaarcode` int(11) NOT NULL,
  `Bouwjaar` varchar(30) NOT NULL,
  `Typecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Bouwjaar`
--

INSERT INTO `Bouwjaar` (`Bouwjaarcode`, `Bouwjaar`, `Typecode`) VALUES
(1, '2020', 1),
(2, '2019', 1),
(3, '2018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Merk`
--

CREATE TABLE `Merk` (
  `Merkcode` int(11) NOT NULL,
  `Merknaam` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Merk`
--

INSERT INTO `Merk` (`Merkcode`, `Merknaam`) VALUES
(1, 'Audi'),
(2, 'Toyota'),
(3, 'Mazda');

-- --------------------------------------------------------

--
-- Table structure for table `Model`
--

CREATE TABLE `Model` (
  `Modelcode` int(11) NOT NULL,
  `Modelnaam` varchar(30) NOT NULL,
  `Merkcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Model`
--

INSERT INTO `Model` (`Modelcode`, `Modelnaam`, `Merkcode`) VALUES
(1, 'A1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Type`
--

CREATE TABLE `Type` (
  `Typecode` int(11) NOT NULL,
  `Typenaam` varchar(30) NOT NULL,
  `Modelcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Type`
--

INSERT INTO `Type` (`Typecode`, `Typenaam`, `Modelcode`) VALUES
(1, 'Sportback', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bouwjaar`
--
ALTER TABLE `Bouwjaar`
  ADD PRIMARY KEY (`Bouwjaarcode`,`Typecode`),
  ADD KEY `Bouwjaarcode` (`Bouwjaarcode`,`Typecode`),
  ADD KEY `Typecode` (`Typecode`);

--
-- Indexes for table `Merk`
--
ALTER TABLE `Merk`
  ADD PRIMARY KEY (`Merkcode`),
  ADD KEY `Merkcode` (`Merkcode`);

--
-- Indexes for table `Model`
--
ALTER TABLE `Model`
  ADD PRIMARY KEY (`Modelcode`,`Merkcode`),
  ADD KEY `Modelcode` (`Modelcode`,`Merkcode`),
  ADD KEY `Merkcode` (`Merkcode`);

--
-- Indexes for table `Type`
--
ALTER TABLE `Type`
  ADD PRIMARY KEY (`Typecode`,`Modelcode`),
  ADD KEY `Typecode` (`Typecode`,`Modelcode`),
  ADD KEY `Modelcode` (`Modelcode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bouwjaar`
--
ALTER TABLE `Bouwjaar`
  MODIFY `Bouwjaarcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Merk`
--
ALTER TABLE `Merk`
  MODIFY `Merkcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Model`
--
ALTER TABLE `Model`
  MODIFY `Modelcode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Type`
--
ALTER TABLE `Type`
  MODIFY `Typecode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Bouwjaar`
--
ALTER TABLE `Bouwjaar`
  ADD CONSTRAINT `bouwjaar_ibfk_1` FOREIGN KEY (`Typecode`) REFERENCES `Type` (`Typecode`);

--
-- Constraints for table `Model`
--
ALTER TABLE `Model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`Merkcode`) REFERENCES `Merk` (`Merkcode`);

--
-- Constraints for table `Type`
--
ALTER TABLE `Type`
  ADD CONSTRAINT `type_ibfk_1` FOREIGN KEY (`Modelcode`) REFERENCES `Model` (`Modelcode`);
