-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 05, 2020 at 10:51 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weightcomplexity`
--

-- --------------------------------------------------------

--
-- Table structure for table `controlstructures`
--

DROP TABLE IF EXISTS `controlstructures`;
CREATE TABLE IF NOT EXISTS `controlstructures` (
  `ControlStructureID` int(200) NOT NULL AUTO_INCREMENT,
  `CSif` int(200) NOT NULL,
  `CSfor` int(200) NOT NULL,
  `CSswitch` int(200) NOT NULL,
  `CScase` int(200) NOT NULL,
  PRIMARY KEY (`ControlStructureID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `controlstructures`
--

INSERT INTO `controlstructures` (`ControlStructureID`, `CSif`, `CSfor`, `CSswitch`, `CScase`) VALUES
(1, 2, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `coupling`
--

DROP TABLE IF EXISTS `coupling`;
CREATE TABLE IF NOT EXISTS `coupling` (
  `CouplingID` int(200) NOT NULL AUTO_INCREMENT,
  `RecursiveCall` int(200) NOT NULL,
  `Column2` int(11) NOT NULL,
  `Column3` int(11) NOT NULL,
  `Column4` int(11) NOT NULL,
  `Column5` int(11) NOT NULL,
  `Column6` int(11) NOT NULL,
  `Column7` int(11) NOT NULL,
  `Column8` int(11) NOT NULL,
  `Column9` int(11) NOT NULL,
  `Column10` int(11) NOT NULL,
  `Column11` int(11) NOT NULL,
  `Column12` int(11) NOT NULL,
  `Column13` int(11) NOT NULL,
  PRIMARY KEY (`CouplingID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupling`
--

INSERT INTO `coupling` (`CouplingID`, `RecursiveCall`, `Column2`, `Column3`, `Column4`, `Column5`, `Column6`, `Column7`, `Column8`, `Column9`, `Column10`, `Column11`, `Column12`, `Column13`) VALUES
(1, 2, 2, 3, 3, 4, 4, 5, 3, 4, 1, 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `inheritance`
--

DROP TABLE IF EXISTS `inheritance`;
CREATE TABLE IF NOT EXISTS `inheritance` (
  `InheritanceID` int(200) NOT NULL AUTO_INCREMENT,
  `NoInheritance` int(200) NOT NULL,
  `One` int(200) NOT NULL,
  `Two` int(200) NOT NULL,
  `Three` int(200) NOT NULL,
  `MoreThree` int(200) NOT NULL,
  PRIMARY KEY (`InheritanceID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inheritance`
--

INSERT INTO `inheritance` (`InheritanceID`, `NoInheritance`, `One`, `Two`, `Three`, `MoreThree`) VALUES
(1, 0, 1, 2, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `methods`
--

DROP TABLE IF EXISTS `methods`;
CREATE TABLE IF NOT EXISTS `methods` (
  `MethodID` int(200) NOT NULL AUTO_INCREMENT,
  `PrimitiveReturnType` int(200) NOT NULL,
  `CompositeReturnType` int(200) NOT NULL,
  `VoidReturnType` int(200) NOT NULL,
  `PrimitiveParameter` int(200) NOT NULL,
  `CompositeParameter` int(200) NOT NULL,
  PRIMARY KEY (`MethodID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `methods`
--

INSERT INTO `methods` (`MethodID`, `PrimitiveReturnType`, `CompositeReturnType`, `VoidReturnType`, `PrimitiveParameter`, `CompositeParameter`) VALUES
(1, 1, 2, 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

DROP TABLE IF EXISTS `size`;
CREATE TABLE IF NOT EXISTS `size` (
  `SizeID` int(200) NOT NULL AUTO_INCREMENT,
  `Keyword` int(200) NOT NULL,
  `Identifier` int(200) NOT NULL,
  `Operator` int(200) NOT NULL,
  `NumericalValue` int(200) NOT NULL,
  `StringLiteral` int(200) NOT NULL,
  PRIMARY KEY (`SizeID`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`SizeID`, `Keyword`, `Identifier`, `Operator`, `NumericalValue`, `StringLiteral`) VALUES
(1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `variables`
--

DROP TABLE IF EXISTS `variables`;
CREATE TABLE IF NOT EXISTS `variables` (
  `VariableID` int(200) NOT NULL AUTO_INCREMENT,
  `GlobalVariable` int(200) NOT NULL,
  `LocalVariable` int(200) NOT NULL,
  `PrimitiveVariable` int(200) NOT NULL,
  `CompositeVariable` int(200) NOT NULL,
  PRIMARY KEY (`VariableID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `variables`
--

INSERT INTO `variables` (`VariableID`, `GlobalVariable`, `LocalVariable`, `PrimitiveVariable`, `CompositeVariable`) VALUES
(1, 2, 1, 1, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
