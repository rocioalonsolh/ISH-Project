-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 04:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medfiledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `username` varchar(50) NOT NULL,
  `full_name` text NOT NULL,
  `email` text NOT NULL,
  `specialty` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`username`, `full_name`, `email`, `password`, `specialty`) VALUES
('Dr. John', 'Smith', 'john.smith@example.com', 'password1', 'Cardiology', 'r1'),
  ('Dr. Mary', 'Johnson', 'mary.johnson@example.com', 'password2', 'Pediatrics', 'r2'),
  ('Dr. Anna', 'Taylor', 'anna.taylor@example.com', 'password3', 'Dermatology', 'r3'),
  ('Dr. Charles', 'Miller', 'charles.miller@example.com', 'password4', 'Gynecology', 'r4'),
  ('Dr. Laura', 'Lopez', 'laura.lopez@example.com', 'password5', 'Ophthalmology', 'r5'),
  ('Dr. George', 'Ramirez', 'george.ramirez@example.com', 'password6', 'Orthopedics', 'no'),
  ('Dr. Carmen', 'Fernandez', 'carmen.fernandez@example.com', 'password7', 'Psychiatry', 'r1'),
  ('Dr. Louise', 'Diaz', 'louise.diaz@example.com', 'password8', 'Neurology', 'r2'),
  ('Dr. Robert', 'Hernandez', 'robert.hernandez@example.com', 'password9', 'Oncology', 'r3'),
  ('Dr. Martha', 'Jimenez', 'martha.jimenez@example.com', 'password10', 'Endocrinology', 'r4');
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
