-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Server: 127.0.0.1
-- Generation Time: 15-01-2024 at 18:36:47
-- Server version: 10.4.27-MariaDB
-- PHP version: 8.2.0

-- Set SQL mode and start the transaction
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Database structure for `medfiledb`

-- Table structure for the `doctors` table
CREATE TABLE `doctors` (
  `username` varchar(50) NOT NULL,
  `full_name` text NOT NULL,
  `email` text NOT NULL,
  `specialty` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data for the `doctors` table
INSERT INTO `doctors` (`username`, `full_name`, `email`, `password`, `specialty`) VALUES
('Dr. John', 'Smith', 'john.smith@example.com', 'password1', 'Cardiology', 'r1'),
('Dr. Mary', 'Johnson', 'mary.johnson@example.com', 'password2', 'Pediatrics', 'r2'),
-- ... (additional entries)
('Dr. Martha', 'Jimenez', 'martha.jimenez@example.com', 'password10', 'Endocrinology', 'r4');
COMMIT;

-- Table structure for the `patients` table
CREATE TABLE `patients` (
  `patient_id` INT(11) NOT NULL AUTO_INCREMENT,
  `patient_name` VARCHAR(255) DEFAULT NULL,
  `age` INT(3) DEFAULT NULL,
  `gender` ENUM('M', 'F') NOT NULL,
  `date_of_birth` DATE DEFAULT NULL,
  `diagnosis` TEXT DEFAULT NULL,
  `prescriptions` TEXT DEFAULT NULL,
  `allergies` TEXT DEFAULT NULL,
  `primary_care_physician` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data for the `patients` table
INSERT INTO `patients` (`patient_name`, `age`, `gender`, `date_of_birth`, `diagnosis`, `prescriptions`, `allergies`, `primary_care_physician`)
VALUES
('John Doe', 35, 'M', '1987-05-15', 'Hypertension', 'Lisinopril, Amlodipine', 'None', 'Dr. Smith'),
-- ... (additional entries)
('Sophia White', 48, 'F', '1973-06-20', 'Rheumatoid Arthritis', 'Methotrexate', 'None', 'Dr. Miller');

-- Indexes for dumped tables

-- Indices for the `patients` table
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

-- AUTO_INCREMENT for dumped tables

-- AUTO_INCREMENT for the `patients` table
ALTER TABLE `patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
