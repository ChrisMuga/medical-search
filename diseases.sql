-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 02:07 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical-search`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` varchar(250) NOT NULL,
  `disease_name` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `symptoms` text NOT NULL,
  `prescription` text NOT NULL,
  `comments` text NOT NULL,
  `timestamp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `disease_name`, `category`, `symptoms`, `prescription`, `comments`, `timestamp`) VALUES
('2587', 'Gonorrhea', 'STD', 'burning while urinating, discharge from the penis or vagina, swollen testicals in men (uncommon), bleeding between periods in women, rectal discharge, anal itching, soreness, bleeding, painful bowel movements', 'Ceftriaxone injection and oral azithromycin or doxycycline. Doxycycline should be avoided in pregnancy.', 'In sexually active gay men, bisexual men, and other men who have sex with men (MSM) screening for gonorrhea is recommended at least once a year.', '02-12-2018 12:44:26pm'),
('3991', 'chlamydia ', 'STD', 'discharge from penis, burning urination, testicular pain and swelling, vaginal discharge, rectal pain, discharge, bleeding', 'Azithromycin/Doxycycline', 'The USPSTF recommends screening for chlamydia in sexually active women age 24 years and younger, in older women who are at increased risk for infection, and in pregnancy. All sexually active gay, bisexual, and other men who have sex with men (MSM) should be screened annually for chlamydia. MSM with multiple partners may need to be screened at 3- to 6-month intervals, according to CDC.', '02-12-2018 12:38:17pm'),
('7440', 'Human papillomavirus (HPV)', 'STD', 'genital warts, cervical cancer, oropharyngeal cancer (cancer of the throat)', 'Human papillomavirus (HPV) Vaccination', 'Cancers may not be caught until screening. Genital warts can be treated with locally applied medications that destroy the tissue, freezing (cryotherapy), or surgery removal.', '02-12-2018 12:41:01pm'),
('9661', 'Syphilis', 'STD', 'painless sore (chancre) - usually on the penis or vagina - in the mouth or around the bottom, glands near the sore (in the neck, groin or armpit) may get bigger,a rash on your body - often on the palms of your hands or soles of your feet, a fever or headache, have hair loss, weight loss, skin growths around the vulva (area around the vagina) in women and around the anus (bottom) in both men and women.', 'parenteral penicillin G for all stages of syphilis', 'Syphilis during pregnancy can be passed on to the baby if left untreated. It can also lead to serious complications with the pregnancy, including increasing the risk of miscarriage, stillbirth, or the newborn dying within a few days after birth.', '02-12-2018 12:54:17pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
