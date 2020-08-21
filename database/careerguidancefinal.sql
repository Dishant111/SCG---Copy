-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 03:51 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careerguidancefinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `fname`, `lname`, `email`, `password`, `contact`, `remember_token`, `created_at`, `updated_at`) VALUES
('admin', 'admin', 'admin', 'admin@example.com', '$2y$10$ED/R00WrOjgXVguVpK0AHueHXtuFlt4GrxQp8ABWtyQ4epsLWmZvy', NULL, NULL, '2020-05-10 08:59:40', '2020-05-10 08:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `careerfields`
--

CREATE TABLE `careerfields` (
  `careerfield_id` bigint(20) UNSIGNED NOT NULL,
  `field_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stream_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careerfields`
--

INSERT INTO `careerfields` (`careerfield_id`, `field_name`, `description`, `stream_id`, `created_at`, `updated_at`) VALUES
(1, 'Finance planner/ Advisor', '', 2, NULL, NULL),
(2, 'Accountant', '', 2, NULL, NULL),
(3, 'Administrator', '', 2, NULL, NULL),
(4, 'Banker', '', 2, NULL, NULL),
(5, 'Real estate agent', '', 2, NULL, NULL),
(6, 'Publishing', '', 2, NULL, NULL),
(7, 'Broker', '', 2, NULL, NULL),
(8, 'Event planner', '', 2, NULL, NULL),
(9, 'manager', '', 2, NULL, NULL),
(10, 'Working for or starting a non-profit', '', 2, NULL, NULL),
(11, 'Ministers', '', 2, NULL, NULL),
(12, 'Preschool and Childcare Center Directors', '', 2, NULL, NULL),
(13, 'Caretaking', '', 2, NULL, NULL),
(14, 'Human Resources', '', 2, NULL, NULL),
(15, ' Ministry Work', '', 2, NULL, NULL),
(16, 'CEO', '', 2, NULL, NULL),
(17, 'Entrepreneur', '', 2, NULL, NULL),
(18, 'Marketing director', '', 2, NULL, NULL),
(19, 'Advertising', '', 2, NULL, NULL),
(20, 'Social Media Manager', '', 2, NULL, NULL),
(21, 'Sales Person', '', 2, NULL, NULL),
(22, 'producer', '', 2, NULL, NULL),
(23, 'agent (sports, literary, entertainment, or otherwise)', '', 2, NULL, NULL),
(24, 'Environmental Planner', '', 2, NULL, NULL),
(26, 'Business manager ', '', 2, NULL, NULL),
(27, 'Lawyer', '', 2, NULL, NULL),
(28, 'Surgeon', '', 4, NULL, NULL),
(29, 'Biomedical engineering', '', 4, NULL, NULL),
(30, 'neurologist', '', 4, NULL, NULL),
(31, 'Dentist', '', 4, NULL, NULL),
(32, 'Nurse', '', 4, NULL, NULL),
(33, 'Veterinarian', '', 4, NULL, NULL),
(34, 'dermatologist', '', 4, NULL, NULL),
(35, 'Yoga instructor', '', 4, NULL, NULL),
(36, 'Therapist', '', 4, NULL, NULL),
(37, 'data analysts', '', 3, NULL, NULL),
(38, 'Biomedical engineering', '', 3, NULL, NULL),
(39, 'Automotive technician', '', 3, NULL, NULL),
(40, 'architect', '', 3, NULL, NULL),
(41, 'Engineer', '', 3, NULL, NULL),
(42, 'business analyst', '', 3, NULL, NULL),
(44, 'Administrator', '', 3, NULL, NULL),
(45, 'Auditor', '', 1, NULL, NULL),
(46, 'Editor', '', 1, NULL, NULL),
(47, 'Interior designer', '', 1, NULL, NULL),
(48, 'Content writing', '', 1, NULL, NULL),
(49, 'Administrator', '', 1, NULL, NULL),
(50, 'Caretaking', '', 1, NULL, NULL),
(51, 'psychiatrist', '', 1, NULL, NULL),
(52, 'Human Resource Managers', '', 1, NULL, NULL),
(53, 'Athletes and Sports Competitors', '', 1, NULL, NULL),
(54, 'Journalist', '', 1, NULL, NULL),
(55, 'Journalism', '', 1, NULL, NULL),
(56, 'Writer', '', 1, NULL, NULL),
(57, 'Psychotherapist', '', 1, NULL, NULL),
(58, 'Researcher', '', 1, NULL, NULL),
(59, 'Designer', '', 1, NULL, NULL),
(60, 'hair stylist', '', 1, NULL, NULL),
(61, 'tattoo artist', '', 1, NULL, NULL),
(62, 'Photography', '', 1, NULL, NULL),
(63, 'Actor/Musician', '', 1, NULL, NULL),
(64, 'Web developer', '', 1, NULL, NULL),
(65, 'Environmental Planner', '', 1, NULL, NULL),
(66, 'Occupational Health and Safety Specialists and Technicians', '', 1, NULL, NULL),
(67, 'Tour Guides', '', 1, NULL, NULL),
(68, 'Trainer', '', 1, NULL, NULL),
(69, 'Chef', '', 1, NULL, NULL),
(70, 'Healthcare\r\nAdministrator', '', 1, NULL, NULL),
(72, 'nutritionist', '', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `classes_id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stream_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`classes_id`, `class`, `stream_id`) VALUES
(5, '12', 1),
(6, '12', 2),
(7, '12', 4),
(8, '12', 3);

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `year` year(4) NOT NULL,
  `classes_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`classroom_id`, `year`, `classes_id`) VALUES
(21, 2020, 5),
(22, 2020, 6),
(23, 2020, 7),
(24, 2020, 8);

-- --------------------------------------------------------

--
-- Table structure for table `classroom_students`
--

CREATE TABLE `classroom_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classroom_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classroom_students`
--

INSERT INTO `classroom_students` (`id`, `student_id`, `classroom_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(5, '160090107056', 22, 'Dishant1234', '2020-06-09 03:22:42', '2020-06-09 03:22:42'),
(7, '160090107043', 22, 'Dishant1234', '2020-06-11 11:27:44', '2020-06-11 11:27:44'),
(8, 'test1', 22, 'Dishant1234', '2020-06-11 17:05:29', '2020-06-11 17:05:29'),
(9, '160090107002', 22, 'Dishant1234', '2020-06-12 01:11:19', '2020-06-12 01:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `final_career`
--

CREATE TABLE `final_career` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `careerfield_id` bigint(20) UNSIGNED NOT NULL,
  `personality_type_id` bigint(20) UNSIGNED NOT NULL,
  `success_rate` bigint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `final_career`
--

INSERT INTO `final_career` (`id`, `student_id`, `careerfield_id`, `personality_type_id`, `success_rate`, `created_at`, `updated_at`) VALUES
(21, '160090107056', 20, 4, 84, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(22, '160090107056', 19, 4, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(23, '160090107043', 24, 5, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(24, '160090107043', 27, 5, 84, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(25, 'test1', 3, 7, 63, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(26, 'test1', 5, 7, 50, '2020-06-12 00:24:50', '2020-06-12 00:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_01_24_062139_personality_type', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_09_061652_streams', 1),
(5, '2020_01_10_161850_parents', 1),
(6, '2020_01_10_162226_teachers', 1),
(7, '2020_01_10_171908_students', 1),
(8, '2020_01_10_173045_classes', 1),
(9, '2020_01_10_173045_classrooms', 1),
(10, '2020_01_10_173046_subjects', 1),
(11, '2020_01_10_173047_classroom_students', 1),
(12, '2020_01_10_179005_subject_results', 1),
(13, '2020_01_10_233916_test_types', 1),
(14, '2020_01_10_234507_careerfields', 1),
(15, '2020_01_10_234607_test_results', 1),
(16, '2020_02_11_052517_questions', 1),
(17, '2020_02_11_053240_question_options', 1),
(18, '2020_02_11_053838_tests_answers', 1),
(19, '2020_02_24_061051_subject_careerfields', 1),
(20, '2020_02_24_062703_final_careers', 1),
(21, '2020_03_02_153914_admin', 1),
(22, '2020_03_02_183132_create_sessions_table', 1),
(23, '2020_03_31_133516_personality_careerfields', 2);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` bigint(12) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parent_id`, `fname`, `lname`, `email`, `password`, `contact`, `created_at`, `updated_at`) VALUES
('mahesh777', 'mahesh', 'rana', 'mahesh777@gmail.com', '$2y$10$MXhtjwCjWSsIBdvVbLKRJOYi8hUtG2i4GE4CwMtMh836Xj0pdGg1O', 123456789, '2020-03-16 13:39:31', '2020-03-16 13:39:31'),
('parent1', 'parent 1', 'parent', 'parent@gmail.com', '$2y$10$5LQfbu/ylZqaHS2RiWTGp.x8LQDxQ1vuEllGWgjeN//VZNQnwyGLO', 9547863214, '2020-05-10 03:46:03', '2020-05-10 03:46:16'),
('pnt001', 'Manojbhai', 'Patil', 'pnt001@gmail.com', '$2y$10$Yjcrfz0gJIiuaWtXRECMfOnOEVbApafbqmjzbcWmOylsu9asCNTIe', 9876543215, '2020-06-12 01:08:58', '2020-06-12 01:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personality_careerfields`
--

CREATE TABLE `personality_careerfields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `careerfield_id` bigint(20) UNSIGNED NOT NULL,
  `personality_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personality_careerfields`
--

INSERT INTO `personality_careerfields` (`id`, `careerfield_id`, `personality_type_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-04-18 16:41:00', '2020-04-18 16:41:00'),
(2, 2, 1, '2020-04-18 16:41:00', '2020-04-18 16:41:00'),
(3, 3, 1, '2020-04-18 16:41:00', '2020-04-18 16:41:00'),
(4, 4, 1, '2020-04-18 16:41:00', '2020-04-18 16:41:00'),
(5, 5, 1, '2020-04-18 16:41:00', '2020-04-18 16:41:00'),
(6, 6, 1, '2020-04-18 16:41:00', '2020-04-18 16:41:00'),
(7, 7, 1, '2020-04-18 16:41:00', '2020-04-18 16:41:00'),
(8, 8, 1, '2020-04-18 16:41:00', '2020-04-18 16:41:00'),
(9, 9, 1, '2020-04-18 16:41:00', '2020-04-18 16:41:00'),
(10, 28, 1, '2020-04-18 16:41:00', '2020-04-18 16:41:00'),
(11, 29, 1, '2020-04-18 16:41:00', '2020-04-18 16:41:00'),
(12, 30, 1, '2020-04-18 16:45:34', '2020-04-18 16:45:34'),
(13, 31, 1, '2020-04-18 16:45:34', '2020-04-18 16:45:34'),
(14, 47, 1, '2020-04-18 16:45:34', '2020-04-18 16:45:34'),
(15, 70, 1, '2020-04-18 16:45:34', '2020-04-18 16:45:34'),
(16, 42, 1, '2020-04-18 16:45:34', '2020-04-18 16:45:34'),
(17, 27, 1, '2020-04-18 16:45:34', '2020-04-18 16:45:34'),
(18, 46, 1, '2020-04-18 16:45:34', '2020-04-18 16:45:34'),
(19, 48, 1, '2020-04-18 16:45:34', '2020-04-18 16:45:34'),
(20, 10, 2, '2020-04-18 16:52:41', '2020-04-18 16:52:41'),
(21, 11, 2, '2020-04-18 16:52:41', '2020-04-18 16:52:41'),
(22, 12, 2, '2020-04-18 16:52:41', '2020-04-18 16:52:41'),
(23, 50, 2, '2020-04-18 16:52:41', '2020-04-18 16:52:41'),
(24, 14, 2, '2020-04-18 16:52:41', '2020-04-18 16:52:41'),
(25, 15, 2, '2020-04-18 16:52:41', '2020-04-18 16:52:41'),
(26, 32, 2, '2020-04-18 16:52:41', '2020-04-18 16:52:41'),
(27, 38, 2, '2020-04-18 16:52:41', '2020-04-18 16:52:41'),
(28, 37, 2, '2020-04-18 16:52:41', '2020-04-18 16:52:41'),
(29, 49, 2, '2020-04-18 16:52:41', '2020-04-18 16:52:41'),
(30, 13, 2, '2020-04-18 16:52:41', '2020-04-18 16:52:41'),
(31, 51, 2, '2020-04-18 16:53:09', '2020-04-18 16:53:09'),
(32, 16, 3, '2020-04-18 17:00:02', '2020-04-18 17:00:02'),
(33, 17, 3, '2020-04-18 17:00:02', '2020-04-18 17:00:02'),
(34, 18, 3, '2020-04-18 17:00:02', '2020-04-18 17:00:02'),
(35, 52, 3, '2020-04-18 17:00:02', '2020-04-18 17:00:02'),
(36, 19, 3, '2020-04-18 17:00:02', '2020-04-18 17:00:02'),
(37, 20, 3, '2020-04-18 17:00:02', '2020-04-18 17:00:02'),
(38, 21, 3, '2020-04-18 17:00:02', '2020-04-18 17:00:02'),
(39, 23, 3, '2020-04-18 17:00:02', '2020-04-18 17:00:02'),
(40, 22, 3, '2020-04-18 17:00:02', '2020-04-18 17:00:02'),
(41, 53, 3, '2020-04-18 17:00:02', '2020-04-18 17:00:02'),
(42, 54, 3, '2020-04-18 17:00:02', '2020-04-18 17:00:02'),
(43, 55, 3, '2020-04-18 17:00:02', '2020-04-18 17:00:02'),
(44, 56, 3, '2020-04-18 17:00:02', '2020-04-18 17:00:02'),
(45, 39, 3, '2020-04-18 17:00:02', '2020-04-18 17:00:02'),
(46, 20, 4, '2020-04-18 17:03:18', '2020-04-18 17:03:18'),
(47, 19, 4, '2020-04-18 17:03:18', '2020-04-18 17:03:18'),
(48, 57, 4, '2020-04-18 17:03:18', '2020-04-18 17:03:18'),
(49, 54, 4, '2020-04-18 17:03:18', '2020-04-18 17:03:18'),
(50, 58, 4, '2020-04-18 17:03:18', '2020-04-18 17:03:18'),
(51, 59, 4, '2020-04-18 17:03:18', '2020-04-18 17:03:18'),
(52, 60, 4, '2020-04-18 17:03:18', '2020-04-18 17:03:18'),
(53, 61, 4, '2020-04-18 17:03:18', '2020-04-18 17:03:18'),
(54, 62, 4, '2020-04-18 17:03:18', '2020-04-18 17:03:18'),
(55, 63, 4, '2020-04-18 17:03:18', '2020-04-18 17:03:18'),
(56, 48, 4, '2020-04-18 17:03:18', '2020-04-18 17:03:18'),
(57, 40, 4, '2020-04-18 17:03:18', '2020-04-18 17:03:18'),
(58, 24, 5, '2020-04-18 17:10:12', '2020-04-18 17:10:12'),
(60, 41, 5, '2020-04-18 17:10:12', '2020-04-18 17:10:12'),
(61, 40, 5, '2020-04-18 17:10:12', '2020-04-18 17:10:12'),
(62, 39, 5, '2020-04-18 17:10:12', '2020-04-18 17:10:12'),
(63, 42, 5, '2020-04-18 17:10:12', '2020-04-18 17:10:12'),
(64, 37, 5, '2020-04-18 17:10:12', '2020-04-18 17:10:12'),
(65, 27, 5, '2020-04-18 17:10:12', '2020-04-18 17:10:12'),
(66, 34, 5, '2020-04-18 17:10:12', '2020-04-18 17:10:12'),
(67, 30, 5, '2020-04-18 17:10:12', '2020-04-18 17:10:12'),
(68, 33, 5, '2020-04-18 17:10:12', '2020-04-18 17:10:12'),
(69, 64, 5, '2020-04-18 17:10:12', '2020-04-18 17:10:12'),
(70, 58, 5, '2020-04-18 17:10:12', '2020-04-18 17:10:12'),
(71, 65, 5, '2020-04-18 17:10:12', '2020-04-18 17:10:12'),
(72, 48, 5, '2020-04-18 17:10:12', '2020-04-18 17:10:12'),
(73, 2, 6, '2020-04-18 17:15:49', '2020-04-18 17:15:49'),
(74, 1, 6, '2020-04-18 17:15:49', '2020-04-18 17:15:49'),
(75, 4, 6, '2020-04-18 17:15:49', '2020-04-18 17:15:49'),
(76, 26, 6, '2020-04-18 17:15:49', '2020-04-18 17:15:49'),
(77, 31, 6, '2020-04-18 17:15:49', '2020-04-18 17:15:49'),
(78, 34, 6, '2020-04-18 17:15:49', '2020-04-18 17:15:49'),
(79, 33, 6, '2020-04-18 17:15:49', '2020-04-18 17:15:49'),
(80, 49, 6, '2020-04-18 17:15:49', '2020-04-18 17:15:49'),
(81, 40, 6, '2020-04-18 17:15:49', '2020-04-18 17:15:49'),
(82, 42, 6, '2020-04-18 17:15:49', '2020-04-18 17:15:49'),
(83, 37, 6, '2020-04-18 17:15:49', '2020-04-18 17:15:49'),
(84, 66, 6, '2020-04-18 17:15:49', '2020-04-18 17:15:49'),
(85, 67, 7, '2020-04-18 17:18:22', '2020-04-18 17:18:22'),
(86, 68, 7, '2020-04-18 17:18:22', '2020-04-18 17:18:22'),
(87, 69, 7, '2020-04-18 17:18:22', '2020-04-18 17:18:22'),
(88, 62, 7, '2020-04-18 17:18:22', '2020-04-18 17:18:22'),
(89, 44, 7, '2020-04-18 17:18:22', '2020-04-18 17:18:22'),
(90, 1, 8, '2020-04-18 17:22:27', '2020-04-18 17:22:27'),
(91, 4, 8, '2020-04-18 17:22:27', '2020-04-18 17:22:27'),
(92, 8, 8, '2020-04-18 17:22:27', '2020-04-18 17:22:27'),
(93, 27, 8, '2020-04-18 17:22:27', '2020-04-18 17:22:27'),
(94, 70, 8, '2020-04-18 17:22:27', '2020-04-18 17:22:27'),
(95, 57, 8, '2020-04-18 17:22:27', '2020-04-18 17:22:27'),
(96, 54, 8, '2020-04-18 17:22:27', '2020-04-18 17:22:27'),
(97, 44, 8, '2020-04-18 17:22:27', '2020-04-18 17:22:27'),
(98, 42, 8, '2020-04-18 17:22:27', '2020-04-18 17:22:27'),
(99, 37, 8, '2020-04-18 17:22:27', '2020-04-18 17:22:27'),
(100, 35, 9, '2020-04-18 17:27:03', '2020-04-18 17:27:03'),
(101, 36, 9, '2020-04-18 17:27:03', '2020-04-18 17:27:03'),
(102, 29, 9, '2020-04-18 17:27:03', '2020-04-18 17:27:03'),
(103, 33, 9, '2020-04-18 17:27:03', '2020-04-18 17:27:03'),
(104, 52, 9, '2020-04-18 17:27:03', '2020-04-18 17:27:03'),
(105, 45, 1, NULL, NULL),
(106, 72, 6, NULL, NULL),
(107, 72, 9, NULL, NULL),
(108, 3, 7, NULL, NULL),
(109, 5, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personality_types`
--

CREATE TABLE `personality_types` (
  `personality_type_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personality_types`
--

INSERT INTO `personality_types` (`personality_type_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Reformer', '2020-03-18 17:11:36', '2020-03-18 17:11:36'),
(2, 'Helper', '2020-03-18 17:11:53', '2020-03-18 17:11:53'),
(3, 'Achiever', '2020-03-18 17:12:04', '2020-03-18 17:12:04'),
(4, 'Individualist', '2020-03-18 17:12:12', '2020-03-18 17:12:12'),
(5, 'Investigator', '2020-03-18 17:12:21', '2020-03-18 17:12:21'),
(6, 'Loyalist', '2020-03-18 17:12:29', '2020-03-18 17:12:29'),
(7, 'Enthusiast', '2020-03-18 17:12:37', '2020-03-18 17:12:37'),
(8, 'challenger', '2020-03-18 17:12:46', '2020-03-18 17:12:46'),
(9, 'Peace Maker', '2020-03-18 17:12:53', '2020-03-18 17:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test_type_id` bigint(20) UNSIGNED NOT NULL,
  `question_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `careerfield_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `test_type_id`, `question_text`, `question_description`, `careerfield_id`) VALUES
(11, 1, 'Which of the following suits you.', NULL, NULL),
(12, 1, 'Which of the following suits you.', NULL, NULL),
(13, 1, 'Which of the following suits you.', NULL, NULL),
(14, 1, 'Which of the following suits you.', NULL, NULL),
(15, 1, 'Which of the following suits you.', NULL, NULL),
(16, 1, 'Which of the following suits you.', NULL, NULL),
(17, 1, 'Which of the following suits you.', NULL, NULL),
(18, 1, 'Which of the following suits you.', NULL, NULL),
(19, 1, 'Which of the following suits you.', NULL, NULL),
(20, 1, 'Which of the following suits you.', NULL, NULL),
(21, 1, 'Which of the following suits you.', NULL, NULL),
(22, 1, 'Which of the following suits you.', NULL, NULL),
(23, 1, 'Which of the following suits you.', NULL, NULL),
(24, 1, 'Which of the following suits you.', NULL, NULL),
(25, 1, 'Which of the following suits you.', NULL, NULL),
(26, 1, 'Which of the following suits you.', NULL, NULL),
(27, 1, 'Which of the following suits you.', NULL, NULL),
(28, 1, 'Which of the following suits you.', NULL, NULL),
(29, 1, 'Which of the following suits you.', NULL, NULL),
(30, 1, 'Which of the following suits you.', NULL, NULL),
(31, 1, 'Which of the following suits you.', NULL, NULL),
(32, 1, 'Which of the following suits you.', NULL, NULL),
(33, 1, 'Which of the following suits you.', NULL, NULL),
(34, 1, 'Which of the following suits you.', NULL, NULL),
(35, 1, 'Which of the following suits you.', NULL, NULL),
(36, 1, 'Which of the following suits you.', NULL, NULL),
(37, 1, 'Which of the following suits you.', NULL, NULL),
(38, 1, 'Which of the following suits you.', NULL, NULL),
(39, 1, 'Which of the following suits you.', NULL, NULL),
(40, 1, 'Which of the following suits you.', NULL, NULL),
(41, 1, 'Which of the following suits you.', NULL, NULL),
(42, 1, 'Which of the following suits you.', NULL, NULL),
(43, 1, 'Which of the following suits you.', NULL, NULL),
(44, 1, 'Which of the following suits you.', NULL, NULL),
(45, 1, 'Which of the following suits you.', NULL, NULL),
(46, 1, 'Which of the following suits you.', NULL, NULL),
(48, 2, 'Skills and knowledge in programming languages', NULL, 64),
(50, 2, 'Use mathematics to solve problems', NULL, 64),
(52, 2, 'Up to date with the latest web technology trends and programming techniques', NULL, 64),
(54, 2, 'Handle whole web project from start to roll-out', NULL, 64),
(55, 2, 'You are familiar with more than one accounting applications.', NULL, 2),
(56, 2, 'You know the advantages and disadvantages of different accounting packages you have used.', NULL, 2),
(57, 2, 'you’ve developed or sought to improve an accounting process. ', NULL, 2),
(58, 2, 'you ensure that you don’t forget details and ensure accuracy.', NULL, 2),
(59, 2, 'You can reduce costs unexpectedly through your personal innovation or diligence.', NULL, 2),
(60, 2, 'You are familiar with different types of analysis and modeling techniques.', NULL, 42),
(61, 2, 'You know the steps that are necessary to turn an idea into a product.', NULL, 42),
(62, 2, 'You can capture and describe customer needs and convey technical information.', NULL, 42),
(63, 2, 'You can determine which Business Intelligence (BI) tools to use.', NULL, 42),
(64, 2, 'If two companies are merging,  you can explain what tasks should be implemented to make the merge successful.', NULL, 42),
(65, 2, 'You can define the diagrams that business analysts us.', NULL, 42),
(66, 2, 'You can accomplished a marketing activity on a tight budget.', NULL, 18),
(67, 2, 'How much familiar are you with our target market?', NULL, 18),
(68, 2, 'You can successfully change a customer\'s mind.', NULL, 18),
(69, 2, 'You can incorporate with online marketing tools.', NULL, 18),
(70, 2, 'You can coordinate and manage a diverse team of people to achieve deliverables.', NULL, 18),
(71, 2, 'You have a combination of creativity and the ability to communicate well to an audience.', NULL, 18),
(72, 2, 'You can handle a patient who complains constantly of pain.', NULL, 32),
(73, 2, 'You can respond well when family members ask for your personal diagnosis?', NULL, 32),
(74, 2, 'you can handle stress on the job.', NULL, 32),
(75, 2, 'Would you describe yourself as organized?', NULL, 32),
(76, 2, 'Are you a self-motivator?', NULL, 32),
(77, 2, 'You can deal with a family that isn\'t following care instructions.', NULL, 32),
(78, 2, 'You can keep in touch with your clients and give them updates periodically.', NULL, 7),
(79, 2, 'You can keep in touch with your clients and give them updates periodically.', NULL, 5),
(80, 2, 'You know dos and don’ts of buying and selling a property.', NULL, 7),
(81, 2, 'You know dos and don’ts of buying and selling a property.', NULL, 5),
(82, 2, 'You can use social media to promote properties.', NULL, 7),
(83, 2, 'You can use social media to promote properties.', NULL, 5),
(84, 2, 'You know what documents are required to close the deal.', NULL, 7),
(85, 2, 'You know what documents are required to close the deal.', NULL, 5),
(86, 2, 'You can manage your appointments?', NULL, 7),
(87, 2, 'You can manage your appointments?', NULL, 5),
(88, 2, 'You stay up-to-date with trends in the real estate market?', NULL, 7),
(89, 2, 'You stay up-to-date with trends in the real estate market?', NULL, 5),
(90, 2, 'you keep up with industry trends and news.', NULL, 8),
(91, 2, 'You can manage event promotion, including social media outreach and email campaigns.', NULL, 8),
(92, 2, 'You have a game plan for managing event budgets.', NULL, 8),
(93, 2, 'You can handle an event going over budget.', NULL, 8),
(94, 2, 'You can plan more than one event at a time.', NULL, 8),
(95, 2, 'You know the best way to choose an event venue.', NULL, 8),
(96, 2, 'Can you describe a simple audit?', NULL, 45),
(97, 2, 'You have developed systems for reducing the number of errors in your audits.', NULL, 45),
(98, 2, 'You have the ability to recall or find specific data quickly.', NULL, 45),
(99, 2, 'You can handle giving client feedback that might be difficult to hear.', NULL, 45),
(100, 2, 'You have expertise at using modern auditing software.', NULL, 45),
(101, 2, 'You have organizational skills.', NULL, 45),
(102, 2, 'You can evaluate an athlete\'s readiness to play in a game', NULL, 53),
(103, 2, 'You have experience in determining mental preparedness for opponents.', NULL, 53),
(104, 2, 'You have Knowledge of on-site triage.', NULL, 53),
(105, 2, 'You have Knowledge of injury-prevention techniques.', NULL, 53),
(106, 2, 'You have the Understanding of objective measurements.', NULL, 53),
(107, 2, 'You have full and accurate understanding of an administrator\'s responsibilities.', NULL, 3),
(108, 2, 'You have full and accurate understanding of an administrator\'s responsibilities.', NULL, 44),
(109, 2, 'You have full and accurate understanding of an administrator\'s responsibilities.', NULL, 49),
(110, 2, 'You have Willingness to work with a team.', NULL, 3),
(111, 2, 'You have Willingness to work with a team.', NULL, 44),
(112, 2, 'You have Willingness to work with a team.', NULL, 49),
(113, 2, 'You have Technical skill and technological expertise.', NULL, 3),
(114, 2, 'You have Technical skill and technological expertise.', NULL, 44),
(115, 2, 'You have Technical skill and technological expertise.', NULL, 49),
(116, 2, 'You have Technical skill and technological expertise.', NULL, 3),
(117, 2, 'You have Technical skill and technological expertise.', NULL, 44),
(118, 2, 'You have Technical skill and technological expertise.', NULL, 49),
(119, 2, 'You have Comprehensive awareness of the interrelated components of business operations.', NULL, 3),
(120, 2, 'You have Comprehensive awareness of the interrelated components of business operations.', NULL, 44),
(121, 2, 'You have Comprehensive awareness of the interrelated components of business operations.', NULL, 49),
(122, 2, 'You have Confident and eloquent speaking voice.', NULL, 3),
(123, 2, 'You have Confident and eloquent speaking voice.', NULL, 44),
(124, 2, 'You have Confident and eloquent speaking voice.', NULL, 49),
(125, 2, 'You have Friendly and engaging demeanor.', NULL, 3),
(126, 2, 'You have Friendly and engaging demeanor.', NULL, 44),
(127, 2, 'You have Friendly and engaging demeanor.', NULL, 49),
(128, 2, 'You have the skills listed in your job description.', NULL, 40),
(129, 2, 'You can give Practical and helpful suggestions to your clients.', NULL, 40),
(130, 2, 'You have Deep knowledge of architectural figure(s).', NULL, 40),
(131, 2, 'You have Understanding of the factors that contribute to project success.', NULL, 40),
(132, 2, 'You have Coverage of the basics.', NULL, 40),
(133, 2, 'You can maintain respect for customers.', NULL, 39),
(134, 2, 'You have Appropriate use of conflict resolution techniques.', NULL, 39),
(135, 2, 'You have Ability to recommend safe equipment at an appropriate price.', NULL, 39),
(136, 2, 'You have Knowledge of current product offerings.', NULL, 39),
(137, 2, 'You are Familiarity with the software/technology in the industry.', NULL, 39),
(138, 2, 'You have Recent training/experience with technology.', NULL, 39),
(139, 2, 'You can operate technology independently.', NULL, 39),
(140, 2, 'You outline a clear plan for delegating tasks.', NULL, 26),
(141, 2, 'you will be responsible for coaching less-experienced employees.', NULL, 26),
(142, 2, 'You have strong understanding of the business situation', NULL, 26),
(143, 2, 'You have an approach to leading business meetings to ensure that everything goes smoothly.', NULL, 26),
(144, 2, 'You are able to create a good team dynamic and ensure that organizational norms are carried out on a daily basis.', NULL, 26),
(145, 2, 'You have strong communication skills.', NULL, 26),
(146, 2, 'You understand the responsibilities of the position.', NULL, 4),
(147, 2, 'You are honest.', NULL, 4),
(148, 2, 'You can convince customers.', NULL, 4),
(149, 2, 'You have Ability to remain calm and patient.', NULL, 4),
(150, 2, 'You have good Communication skills.', NULL, 4),
(151, 2, 'You have patience and the ability to listen well while still selling a product.', NULL, 4),
(152, 2, 'You have Interpersonal skills.', NULL, 4),
(153, 2, 'You have Education or experience that is relevant to the position.', NULL, 29),
(154, 2, 'You have Education or experience that is relevant to the position.', NULL, 38),
(155, 2, 'You have Apprenticeship or work-study experience.', NULL, 29),
(156, 2, 'You have Apprenticeship or work-study experience.', NULL, 38),
(157, 2, 'You have The ability to learn quickly and listen to colleagues with more experience.', NULL, 29),
(158, 2, 'You have The ability to learn quickly and listen to colleagues with more experience.', NULL, 38),
(159, 2, 'You have Confidence in the steps needed to do the tasks.', NULL, 29),
(160, 2, 'You have Confidence in the steps needed to do the tasks.', NULL, 38),
(161, 2, 'You have An understanding of risk prevention and the implications for a business.', NULL, 29),
(162, 2, 'You have An understanding of risk prevention and the implications for a business.', NULL, 38),
(163, 2, 'You have, at some extent Medical training experience.', NULL, 50),
(164, 2, 'You have, at some extent Medical training experience.', NULL, 13),
(165, 2, 'You see yourself as compassionate and empathetic human.', NULL, 50),
(166, 2, 'You see yourself as compassionate and empathetic human.', NULL, 13),
(167, 2, 'You have Positive reinforcement techniques in handing special needs.', NULL, 50),
(168, 2, 'You have Positive reinforcement techniques in handing special needs.', NULL, 13),
(169, 2, 'You have Willingness to listen and encourage.', NULL, 50),
(170, 2, 'You have Willingness to listen and encourage.', NULL, 13),
(171, 2, 'You can give A spontaneous and unforced answer.', NULL, 50),
(172, 2, 'You can give A spontaneous and unforced answer.', NULL, 13),
(173, 2, 'You have Fitness for the specific caregiving skills,', NULL, 50),
(174, 2, 'You have Fitness for the specific caregiving skills,', NULL, 13),
(175, 2, 'You have a strong set of management philosophies.', NULL, 16),
(176, 2, 'You have a flexibility to consider new principles', NULL, 16),
(177, 2, 'You have approaches to make big-picture decisions.', NULL, 16),
(178, 2, 'You have skills you can use to carry out corporate change successfully.', NULL, 16),
(179, 2, 'You have a history of leading corporate transformation.', NULL, 16),
(180, 2, 'You have a well-conceived approach to setting goals.', NULL, 16),
(181, 2, 'You are able create an environment that makes talented people want to work for you.', NULL, 16),
(182, 2, 'Do you think your love for cooking can still be intact after cooking 8-10 hours a day?', NULL, 69),
(183, 2, 'You have a diverse culinary background.', NULL, 69),
(184, 2, 'You have an appropriate culinary training.', NULL, 69),
(185, 2, 'You have an Ability to work a flexible schedule.', NULL, 69),
(186, 2, 'You are Able to handle stress without burning out.', NULL, 69),
(187, 2, 'You maintain food safety standards.', NULL, 69),
(188, 2, 'You have Training in specific cuisines.', NULL, 69),
(189, 2, 'You have experience in in writing for the web.', NULL, 48),
(190, 2, 'You have SEO skills, which are integral for content writing.', NULL, 48),
(191, 2, 'You have English language education, including grammar.', NULL, 48),
(192, 2, 'You have Understanding of why targeting an audience is crucial to content.', NULL, 48),
(193, 2, 'You have Analytical skills for given raw data.', NULL, 48),
(194, 2, 'You have an idea of Factual information versus keyword stuffing.', NULL, 48),
(195, 2, 'You have Experience with newer technologies for exams and treatment.', NULL, 34),
(196, 2, 'You have Ability to adapt exam for specific ages/health concerns.', NULL, 34),
(197, 2, 'You have Capacity to keep patients comfortable.', NULL, 34),
(198, 2, 'You are able to switch tasks quickly.', NULL, 34),
(199, 2, 'You have Ability to verify patient allergies prior to choosing anesthetic.', NULL, 34),
(200, 2, 'You have Ability to systematically check all necessary oral health areas.', NULL, 31),
(201, 2, 'You have Capacity to keep patients comfortable', NULL, 31),
(202, 2, 'You have Ability to use X-rays only where clinically indicated', NULL, 31),
(203, 2, 'You have understanding of radiation shielding and safety.', NULL, 31),
(204, 2, 'You have Ability to verify patient allergies prior to choosing anesthetic.', NULL, 31),
(205, 2, 'You have Understanding of varied anesthesia types and methods.', NULL, 31),
(206, 2, 'you coach a pediatric patient through a tooth extraction or similar procedure.', NULL, 31),
(207, 2, 'you ensure that you are up to date with the latest trends.', NULL, 59),
(208, 2, 'you can explain complex engineering designs to your clients.', NULL, 59),
(209, 2, 'You have Excellent communication skills.', NULL, 59),
(210, 2, 'You have  Level of expertise in software mentioned.', NULL, 59),
(211, 2, 'You have Ability to think creatively.', NULL, 59),
(212, 2, 'You have Ability to see big picture.', NULL, 37),
(213, 2, 'You have Ability to identify variables/data segments.', NULL, 37),
(214, 2, 'You have Ability to communicate thought process.', NULL, 37),
(215, 2, 'You have Consideration of deadline.', NULL, 37),
(216, 2, 'You can use data to spot opportunities for preventative measures.', NULL, 37),
(217, 2, 'You have Practical ways the applicant used engineering skills to overcome adverse conditions.', NULL, 41),
(218, 2, 'You can present technical concepts to a nontechnical audience.', NULL, 41),
(219, 2, 'You have Ability to manage time throughout all parts of a project.', NULL, 41),
(220, 2, 'You have engineering resources do you use to stay on top of the latest news, technology and developments in the field.', NULL, 41),
(221, 2, 'You have Enthusiasm for learning more about the engineering field.', NULL, 41),
(222, 2, 'You have safeguards in place for double-checking your engineering work and ensuring that mistakes don\'t slip past you.', NULL, 41),
(223, 2, 'You have Knowledge of safety standards for the applicant\'s engineering specialization.', NULL, 41),
(224, 2, 'You have an Ability to translate data from relational database management systems.', NULL, 1),
(225, 2, 'You understand the importance of efficiency and accuracy.', NULL, 1),
(226, 2, 'You have Experience preparing financial documents with a tight deadline.', NULL, 1),
(227, 2, 'You have methods for avoiding errors when recording and examining financial documents.', NULL, 1),
(228, 2, 'You have a solid understanding of multiple financial documents.', NULL, 1),
(229, 2, 'You know the ins and outs of a plethora of different financial documents.', NULL, 1),
(230, 2, 'You have Ability to handle unforeseen and critical situations.', NULL, 70),
(231, 2, 'You have ability to display the cost modification required efficiently.', NULL, 70),
(232, 2, 'You have understanding of applying and explaining an analysis.', NULL, 70),
(233, 2, 'You have Ability to organize the work from most crucial to least.', NULL, 70),
(234, 2, 'You have Ability to handle problems between departments.', NULL, 70),
(235, 2, 'You have a Commitment to staying calm.', NULL, 70),
(236, 2, 'You have Ability for rational self-judgment.', NULL, 52),
(237, 2, 'You have Ability for rational self-judgment.', NULL, 14),
(238, 2, 'You can help lead the workplace culture..', NULL, 52),
(239, 2, 'You can help lead the workplace culture..', NULL, 14),
(240, 2, 'You stay current on issues of compliance with national labor laws..', NULL, 52),
(241, 2, 'You stay current on issues of compliance with national labor laws..', NULL, 14),
(242, 2, 'You have knowledge about finding the best and most qualified job applicants for any given position.', NULL, 52),
(243, 2, 'You have knowledge about finding the best and most qualified job applicants for any given position.', NULL, 14),
(244, 2, 'You can determine chosen applicant\'s success or failure in the position.', NULL, 52),
(245, 2, 'You can determine chosen applicant\'s success or failure in the position.', NULL, 14),
(246, 2, 'You know how to manage Level of comfort in an office environment.', NULL, 52),
(247, 2, 'You know how to manage Level of comfort in an office environment.', NULL, 14),
(248, 2, 'You can Focus on the client\'s budget and time constraints.', NULL, 47),
(249, 2, 'You are concise in your strategy while planning on working with a client.', NULL, 47),
(250, 2, 'You believe that aestheticism and functionality have a vital place in a home.', NULL, 47),
(251, 2, 'You have Flexibility regarding your own plans.', NULL, 47),
(252, 2, 'You have contingency plans in mind for most situations.', NULL, 47),
(253, 2, 'You might be able to overcome these potential challenges.', NULL, 47),
(254, 2, 'You also have room to share your own vision.', NULL, 47),
(255, 2, 'You have Background knowledge of legal principles.', NULL, 27),
(257, 2, 'You have Ability to quickly cite legal precedent.', NULL, 27),
(259, 2, 'You have Ability to articulate conflict-handling strategies.', NULL, 27),
(261, 2, 'You have Knowledge of choosing when to agree to disagree.', NULL, 27),
(263, 2, 'You have Resilience to deal with failure.', NULL, 27),
(265, 2, 'You have Passion for different areas of the law.', NULL, 27),
(267, 2, 'You have Public speaking experience regarding nutrition.', NULL, 72),
(268, 2, 'You have Internship experience in nutrition programs.', NULL, 72),
(269, 2, 'You have Ability to branch out and discuss advanced dieting techniques.', NULL, 72),
(270, 2, 'You have Adaptability regarding unique client approaches.', NULL, 72),
(271, 2, 'You can help clients adhere to new lifestyle routines.', NULL, 72),
(272, 2, 'You have Knowledge of fiber\'s role in the body.', NULL, 72),
(273, 2, 'You have Experience with a wide variety of neurological disorders.', NULL, 30),
(274, 2, 'You have Knowledge that is specific to your practice\'s specialty.', NULL, 30),
(275, 2, 'You have Experience with electronic health record systems.', NULL, 30),
(276, 2, 'You have Willingness to learn how to use electronic health record systems, if needed.', NULL, 30),
(277, 2, 'You have Up-to-date understanding of neurology.', NULL, 30),
(278, 2, 'You have Experience assisting families with in-home care arrangements.', NULL, 30),
(279, 2, 'You have Appropriate knowledge of the newest flea and tick products.', NULL, 33),
(280, 2, 'You have Ability to account for potential allergies or contraindications.', NULL, 33),
(281, 2, 'You take Consideration of the pet owner\'s medication preference.', NULL, 33),
(282, 2, 'You have Ability to include the client in the pet\'s treatment plan.', NULL, 33),
(283, 2, 'You have Familiarity with keeping pets calm and cooperative.', NULL, 33),
(284, 2, 'You have Ability to explain procedures to clients.', NULL, 33),
(285, 2, 'Understanding of the latest medications/psychotherapy approaches', NULL, 51),
(286, 2, 'You have Warm, positive approach to patient care.', NULL, 51),
(287, 2, 'You have Ability to be empathetic and professional.', NULL, 51),
(288, 2, 'you approach the care of patients who have multiple mental health issues.', NULL, 51),
(289, 2, 'You have Ability to prioritize the patient\'s most urgent needs.', NULL, 51),
(290, 2, 'You have Appropriate knowledge of conflict resolution strategies.', NULL, 51),
(291, 2, 'You have Dedication to patients with complex health needs.', NULL, 51),
(292, 2, 'You usually know the types of movies they prefer to produce.', NULL, 22),
(293, 2, 'You know the hiring process for director position.', NULL, 22),
(294, 2, 'You have Aptitude for financial management.', NULL, 22),
(295, 2, 'You have Effective communication and persuasion skills.', NULL, 22),
(296, 2, 'You can manage to set a deadline for a project and keep it on schedule.', NULL, 22),
(297, 2, 'You have a definite understanding of basic equipment requirements.', NULL, 62),
(298, 2, 'You have adaptability when it comes to using new gear.', NULL, 62),
(299, 2, 'You have Professionally traceable techniques in your portfolio.', NULL, 62),
(300, 2, 'You have Experience with photo editing software.', NULL, 62),
(301, 2, 'You have strong focus on lighting and arrangement.', NULL, 62),
(302, 2, 'You have Willingness to collaborate with the client on details.', NULL, 62),
(303, 2, 'you have A desire to protect patients\' best interests', NULL, 28),
(304, 2, 'You have Willingness to constantly update surgical knowledge.', NULL, 28),
(305, 2, 'You have Thorough understanding of surgical techniques.', NULL, 28),
(306, 2, 'You have the  Ability to calm agitated or aggressive patients.', NULL, 28),
(307, 2, 'You have Ability to clearly communicate suggestions to coworkers.', NULL, 28),
(308, 2, 'You have Understanding and empathy for patients.', NULL, 28),
(309, 2, 'You have Ability to handle disagreements maturely.', NULL, 28),
(310, 2, 'Reputation management is a top priority for you.', NULL, 20),
(311, 2, 'You Understand search engine optimization.', NULL, 20),
(312, 2, 'You Cultivate leads and uses lead scoring techniques.', NULL, 20),
(313, 2, 'You Keep brand consistent on all profiles.', NULL, 20),
(314, 2, 'You Convey the company message appropriately.', NULL, 20),
(315, 2, 'You Use tools that increase traffic to websites and social media accounts.', NULL, 20),
(316, 2, 'You have the skills necessary to create interesting content and follows steps to improve quality.', NULL, 20);

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personality_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`id`, `question_id`, `option`, `personality_type_id`, `created_at`, `updated_at`) VALUES
(11, 11, 'I\'ve been romantic and imaginative.', 4, '2020-03-23 13:20:31', '2020-03-23 13:20:31'),
(12, 11, 'I\'ve been pragmatic and down to earth.', 6, '2020-03-23 13:20:31', '2020-03-23 13:20:31'),
(13, 12, 'I have tended to take on confrontations.', 8, '2020-03-23 13:26:51', '2020-03-23 13:26:51'),
(14, 12, 'I have tended avoid confrontations.', 9, '2020-03-23 13:26:51', '2020-03-23 13:26:51'),
(15, 13, 'I have typically been diplomatic, charming, and ambitious.', 3, '2020-03-23 13:27:39', '2020-03-23 13:27:39'),
(16, 13, 'I have typically been direct, formal, and idealistic.', 1, '2020-03-23 13:27:39', '2020-03-23 13:27:39'),
(17, 14, 'I have tended to be focused and intense.', 5, '2020-03-23 13:28:35', '2020-03-23 13:28:35'),
(18, 14, 'I have tended to be spontaneous and fun-loving.', 7, '2020-03-23 13:28:35', '2020-03-23 13:28:35'),
(19, 15, 'I have been a hospitable person and have enjoyed welcoming new friends into my life.', 2, '2020-03-31 08:39:13', '2020-03-31 08:39:13'),
(20, 15, 'I have been a private person and have not mixed much with others.', 4, '2020-03-31 08:39:13', '2020-03-31 08:39:13'),
(21, 16, 'Generally, it\'s been easy to \"get a rise\" out of me.', 6, '2020-03-31 08:39:51', '2020-03-31 08:39:51'),
(22, 16, 'Generally, it\'s been difficult to \"get a rise\" out of me.', 9, '2020-03-31 08:39:51', '2020-03-31 08:39:51'),
(23, 17, 'I\'ve been more of a \"street-smart\" survivor.', 8, '2020-03-31 08:41:06', '2020-03-31 08:41:06'),
(24, 17, 'I\'ve been more of a \"high-minded\" idealist .', 1, '2020-03-31 08:41:06', '2020-03-31 08:41:06'),
(25, 18, 'I have needed to show affection to people.', 2, '2020-03-31 08:42:12', '2020-03-31 08:42:12'),
(26, 18, 'I have preferred to maintain a certain distance with people.', 5, '2020-03-31 08:42:12', '2020-03-31 08:42:12'),
(27, 19, 'When presented with a new experience, I\'ve usually asked myself if it would be useful to me.', 3, '2020-03-31 08:43:09', '2020-03-31 08:43:09'),
(28, 19, 'When presented with a new experience, I\'ve usually asked myself if it would be enjoyable.', 7, '2020-03-31 08:43:09', '2020-03-31 08:43:09'),
(29, 20, 'I have tended to focus too much on myself.', 4, '2020-03-31 08:44:17', '2020-03-31 08:44:17'),
(30, 20, 'I have tended to focus too much on others.', 9, '2020-03-31 08:44:17', '2020-03-31 08:44:17'),
(31, 21, 'Others have depended on my insight and knowledge.', 5, '2020-03-31 08:45:26', '2020-03-31 08:45:26'),
(32, 21, 'Others have depended on my strength and decisiveness.', 8, '2020-03-31 08:45:26', '2020-03-31 08:45:26'),
(33, 22, 'I have come across as being too unsure of myself.', 6, '2020-03-31 08:46:45', '2020-03-31 08:46:45'),
(34, 22, 'I have come across as being too sure of myself.', 1, '2020-03-31 08:46:45', '2020-03-31 08:46:45'),
(35, 23, 'I have been more relationship-oriented than goal-oriented.', 2, '2020-03-31 08:47:50', '2020-03-31 08:47:50'),
(36, 23, 'I have been more goal-oriented than relationship-oriented.', 3, '2020-03-31 08:47:50', '2020-03-31 08:47:50'),
(37, 24, 'I have not been able to speak up for myself very well.', 4, '2020-03-31 08:48:42', '2020-03-31 08:48:42'),
(38, 24, 'I have been outspoken—I\'ve said what others wished they had the nerve to say.', 7, '2020-03-31 08:48:42', '2020-03-31 08:48:42'),
(39, 25, 'It\'s been difficult for me to stop considering alternatives and do something definite.', 5, '2020-03-31 08:49:35', '2020-03-31 08:49:35'),
(40, 25, 'It\'s been difficult for me to take it easy and be more flexible.', 1, '2020-03-31 08:49:35', '2020-03-31 08:49:35'),
(41, 26, 'I have tended to be hesitant and procrastinating.', 6, '2020-03-31 08:50:40', '2020-03-31 08:50:40'),
(42, 26, 'I have tended to be bold and domineering.', 8, '2020-03-31 08:50:40', '2020-03-31 08:50:40'),
(43, 27, 'My reluctance to get too involved has gotten me into trouble with people.', 9, '2020-03-31 08:51:14', '2020-03-31 08:51:14'),
(44, 27, 'My eagerness to have people depend on me has gotten me into trouble with them.', 2, '2020-03-31 08:51:14', '2020-03-31 08:51:14'),
(45, 28, 'Usually, I have been able to put my feelings aside to get the job done.', 3, '2020-03-31 08:52:04', '2020-03-31 08:52:04'),
(46, 28, 'Usually, I have needed to work through my feelings before I could act.', 4, '2020-03-31 08:52:04', '2020-03-31 08:52:04'),
(47, 29, 'Generally, I have been methodical and cautious.', 6, '2020-03-31 08:52:48', '2020-03-31 08:52:48'),
(48, 29, 'Generally, I have been adventurous and taken risks.', 7, '2020-03-31 08:52:48', '2020-03-31 08:52:48'),
(49, 30, 'I have tended to be a supportive, giving person who enjoys the company of others.', 2, '2020-03-31 08:55:02', '2020-03-31 08:55:02'),
(50, 30, 'I have tended to be a serious, reserved person who likes discussing issues.', 1, '2020-03-31 08:55:02', '2020-03-31 08:55:02'),
(51, 31, 'I\'ve often felt the need to be a \"pillar of strength.\"', 8, '2020-03-31 08:55:47', '2020-03-31 08:55:47'),
(52, 31, 'I\'ve often felt the need to perform perfectly.', 3, '2020-03-31 08:55:47', '2020-03-31 08:55:47'),
(53, 32, 'I\'ve typically been interested in asking tough questions and maintaining my independence.', 5, '2020-03-31 08:56:28', '2020-03-31 08:56:28'),
(54, 32, 'I\'ve typically been interested in maintaining my stability and peace of mind.', 9, '2020-03-31 08:56:28', '2020-03-31 08:56:28'),
(55, 33, 'I\'ve been too hard-nosed and sceptical.', 6, '2020-03-31 08:57:07', '2020-03-31 08:57:07'),
(56, 33, 'I\'ve been too soft-hearted and sentimental.', 2, '2020-03-31 08:57:07', '2020-03-31 08:57:07'),
(57, 34, 'I\'ve often worried that I\'m missing out on something better.', 7, '2020-03-31 08:57:42', '2020-03-31 08:57:42'),
(58, 34, 'I\'ve often worried that if I let down my guard, someone will take advantage of me.', 8, '2020-03-31 08:57:42', '2020-03-31 08:57:42'),
(59, 35, 'My habit of being \"stand-offish\" has annoyed people.', 4, '2020-03-31 08:58:25', '2020-03-31 08:58:25'),
(60, 35, 'My habit of telling people what to do has annoyed people.', 1, '2020-03-31 08:58:25', '2020-03-31 08:58:25'),
(61, 36, 'Usually, when troubles have gotten to me, I have been able to \"tune them out.\"', 9, '2020-03-31 08:59:03', '2020-03-31 08:59:03'),
(62, 36, 'Usually, when troubles have gotten to me, I have treated myself to something I\'ve enjoyed.', 7, '2020-03-31 08:59:03', '2020-03-31 08:59:03'),
(63, 37, 'I have depended upon my friends and they have known that they can depend on me.', 6, '2020-03-31 08:59:35', '2020-03-31 08:59:35'),
(64, 37, 'I have not depended on people; I have done things on my own.', 3, '2020-03-31 08:59:35', '2020-03-31 08:59:35'),
(65, 38, 'I have tended to be detached and preoccupied.', 5, '2020-03-31 09:01:38', '2020-03-31 09:01:38'),
(66, 38, 'I have tended to be moody and self-absorbed.', 4, '2020-03-31 09:01:38', '2020-03-31 09:01:38'),
(67, 39, 'I have liked to challenge people and \"shake them up.\"', 8, '2020-03-31 09:02:19', '2020-03-31 09:02:19'),
(68, 39, 'I have liked to comfort people and calm them down.', 2, '2020-03-31 09:02:19', '2020-03-31 09:02:19'),
(69, 40, 'I have generally been an outgoing, sociable person.', 7, '2020-03-31 09:02:58', '2020-03-31 09:02:58'),
(70, 40, 'I have generally been an earnest, self-disciplined person.', 1, '2020-03-31 09:02:58', '2020-03-31 09:02:58'),
(71, 41, 'I\'ve usually been shy about showing my abilities.', 9, '2020-03-31 09:03:30', '2020-03-31 09:03:30'),
(72, 41, 'I\'ve usually liked to let people know what I can do well.', 3, '2020-03-31 09:03:30', '2020-03-31 09:03:30'),
(73, 42, 'Pursuing my personal interests has been more important to me than having comfort and security.', 5, '2020-03-31 09:04:04', '2020-03-31 09:04:04'),
(74, 42, 'Having comfort and security has been more important to me than pursuing my personal interests.', 6, '2020-03-31 09:04:04', '2020-03-31 09:04:04'),
(75, 43, 'When I\'ve had conflict with others, I\'ve tended to withdraw.', 4, '2020-03-31 09:04:54', '2020-03-31 09:04:54'),
(76, 43, 'When I\'ve had conflict with others, I\'ve tended to withdraw.', 5, '2020-03-31 09:04:54', '2020-03-31 09:04:54'),
(77, 44, 'I have given in too easily and let others push me around.', 9, '2020-03-31 09:05:27', '2020-03-31 09:05:27'),
(78, 44, 'I have been too uncompromising and demanding with others.', 4, '2020-03-31 09:05:27', '2020-03-31 09:05:27'),
(79, 45, 'I\'ve been appreciated for my unsinkable spirit and great sense of humour.', 7, '2020-03-31 09:06:05', '2020-03-31 09:06:05'),
(80, 45, 'I\'ve been appreciated for my quiet strength and exceptional generosity.', 2, '2020-03-31 09:06:05', '2020-03-31 09:06:05'),
(81, 46, 'Much of my success has been due to my talent for making a favourable impression.', 3, '2020-03-31 09:06:43', '2020-03-31 09:06:43'),
(82, 46, 'Much of my success has been achieved despite my lack of interest in developing \"interpersonal skills.\"', 5, '2020-03-31 09:06:43', '2020-03-31 09:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0SRNGcOAFM78pKXXSbbLtZ26xpFDtgIZTUoHLrlX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicTF6eDZkRnMwRWZyZkpyMTNGeHJ0VlV2OGpRdVJIRXVoN2RHRnRoMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1592820743),
('aN5NXtNBnNXJD78ehpWW48kp3zqKPdXIyr1SR4wQ', NULL, '192.168.43.1', 'Mozilla/5.0 (Linux; Android 8.1.0; Moto G (5) Plus) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.96 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUDJjcFBKQmI1dzJjd1U1QUlQZ3VBbzh0eU04ZWFSa2tmR3lHOGJEUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODc6Imh0dHA6Ly8xOTIuMTY4LjQzLjExNC9sYXJhdmVsL2Jvb3RzdHJhcFNDRy9TQ0clMjAtJTIwQ29weS9wdWJsaWMvc3R1ZGVudC9kYXNoYm9hcmQvc29udSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTQ6ImxvZ2luX3N0dWRlbnRfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7czoxMjoiMTYwMDkwMTA3MDU2Ijt9', 1592841303),
('viVw4R42TDUncyKDg4hfgdo7lyxLKYWm6vM1Goc1', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN2xaR0FPcjIzUXphQkw5Y0pyc3duTGRRSEJ6TTVJSTd0Sk1yaXBoTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODg6Imh0dHA6Ly9sb2NhbGhvc3QvbGFyYXZlbC9ib290c3RyYXBTQ0cvU0NHJTIwLSUyMENvcHkvcHVibGljL3N0dWRlbnQvcGVyc29uYWxpdHl0ZXN0L3NvbnUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU0OiJsb2dpbl9zdHVkZW50XzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO3M6MTI6IjE2MDA5MDEwNzA1NiI7fQ==', 1592840618),
('W6k7zxPmayauhLJuqtVnH21n2DX8Ifr0JAn8YcHo', NULL, '192.168.43.181', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.162 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQm9IRlM4Mndvclg2RFZOQmUzMDZySjNlZ3RlWXlZM0J3V1JUbzJ0OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTI6Imh0dHA6Ly8xOTIuMTY4LjQzLjExNC9sYXJhdmVsL2Jvb3RzdHJhcFNDRy9TQ0clMjAtJTIwQ29weS9wdWJsaWMvc3R1ZGVudC9yZWNvbW1hbmRhdGlvbi9zb251Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1NDoibG9naW5fc3R1ZGVudF81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtzOjEyOiIxNjAwOTAxMDcwNTYiO30=', 1592841183);

-- --------------------------------------------------------

--
-- Table structure for table `streams`
--

CREATE TABLE `streams` (
  `stream_id` bigint(20) UNSIGNED NOT NULL,
  `stream_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `streams`
--

INSERT INTO `streams` (`stream_id`, `stream_name`) VALUES
(1, 'Arts'),
(2, 'Commerce'),
(3, 'Science(Maths)'),
(4, 'Science(Bio)');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` date DEFAULT NULL,
  `contact` bigint(12) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `parent_id`, `fname`, `lname`, `email`, `password`, `DOB`, `contact`, `created_at`, `updated_at`) VALUES
('160090107002', 'pnt001', 'Fenil', 'Patil', 'Fenil@gmail.com', '$2y$10$5OHGDBVWoKtcBgw33RKFceqRuosgXZHTgvv8V9NQ.rqddhoV.bKSa', '2020-06-17', 9876543215, '2020-06-12 01:11:19', '2020-06-12 01:11:19'),
('160090107043', 'mahesh777', 'dishant', 'rana', 'dishant@gmail.com', '$2y$10$MxI5Hv1OmMPuvDRZOCvEB.NbzsN6W0U8x9O1dSfSw1cCnFm5f.cfS', '2020-06-08', 9876543215, '2020-06-11 11:27:44', '2020-06-11 11:27:44'),
('160090107056', 'mahesh777', 'sonu', 'rana', 'sonu@gmail.com', '$2y$10$mK1bSTWm1Y8SqvdrhEEj6uR777XgYeCAZmn15yT/k3UZN.NOYdHwy', '2020-01-28', 9876543215, '2020-06-09 03:22:42', '2020-06-09 03:22:42'),
('test1', 'mahesh777', 'test1', 'test1', 'test1@gmail.com', '$2y$10$tVa76YnGWKudulV5fUcP4uqunKAPYJ8Mnyy9bO8PeHMhMz0TuPaDi', '2019-12-30', 9234567890, '2020-06-11 17:05:29', '2020-06-11 17:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classes_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `name`, `classes_id`, `description`) VALUES
(2, 'English', 5, NULL),
(4, 'Computer', 5, NULL),
(6, 'Sociology', 5, NULL),
(8, 'History', 5, NULL),
(10, 'Political Science', 5, NULL),
(12, 'Psychology', 5, NULL),
(14, 'Economics', 5, NULL),
(16, 'Environment Education', 5, NULL),
(18, 'Public Administration', 5, NULL),
(20, 'Fine Arts', 5, NULL),
(22, 'English', 6, NULL),
(24, 'Computer', 6, NULL),
(26, 'Elements Of Accounts', 6, NULL),
(28, 'Statistics', 6, NULL),
(30, 'Economics', 6, NULL),
(32, 'Organization Of Commerce & Management', 6, NULL),
(34, ' COMMERCIAL CORRESPONDENCE AND SECRETARIAL', 6, NULL),
(36, 'Business Studies', 6, NULL),
(39, 'Computer', 7, NULL),
(40, 'Computer', 8, NULL),
(43, 'English', 7, NULL),
(44, 'English', 8, NULL),
(47, 'Physics', 7, NULL),
(48, 'Physics', 8, NULL),
(51, 'Chemistry', 7, NULL),
(52, 'Chemistry', 8, NULL),
(54, 'Biology', 7, NULL),
(56, 'Maths', 8, NULL),
(57, 'Language', 6, NULL),
(58, 'Geography', 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject_careerfields`
--

CREATE TABLE `subject_careerfields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `careerfield_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_careerfields`
--

INSERT INTO `subject_careerfields` (`id`, `subject_id`, `careerfield_id`) VALUES
(1, 26, 1),
(2, 26, 2),
(3, 26, 3),
(4, 26, 4),
(6, 36, 6),
(7, 36, 7),
(9, 30, 5),
(10, 30, 8),
(11, 30, 9),
(12, 54, 28),
(13, 54, 29),
(14, 54, 30),
(15, 54, 31),
(18, 20, 45),
(19, 20, 46),
(20, 20, 47),
(21, 57, 48),
(22, 30, 10),
(23, 30, 11),
(24, 30, 12),
(25, 30, 13),
(26, 30, 14),
(27, 30, 15),
(28, 54, 32),
(29, 56, 38),
(30, 56, 37),
(31, 12, 51),
(32, 12, 49),
(33, 12, 50),
(34, 36, 16),
(35, 36, 17),
(36, 36, 18),
(38, 36, 20),
(39, 36, 21),
(41, 30, 22),
(42, 30, 23),
(43, 30, 19),
(45, 12, 52),
(46, 12, 53),
(47, 8, 54),
(48, 8, 55),
(49, 8, 56),
(50, 56, 39),
(51, 12, 57),
(52, 8, 58),
(53, 20, 59),
(54, 20, 60),
(55, 20, 61),
(56, 20, 62),
(57, 20, 63),
(58, 56, 40),
(59, 30, 24),
(60, 56, 41),
(61, 54, 34),
(62, 54, 33),
(63, 4, 64),
(65, 58, 65),
(66, 36, 26),
(68, 56, 44),
(69, 12, 66),
(70, 8, 67),
(71, 20, 68),
(72, 20, 69),
(73, 30, 27),
(74, 12, 70),
(75, 54, 35),
(76, 54, 36);

-- --------------------------------------------------------

--
-- Table structure for table `subject_results`
--

CREATE TABLE `subject_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `marks` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_results`
--

INSERT INTO `subject_results` (`id`, `student_id`, `subject_id`, `marks`) VALUES
(31, '160090107056', 26, 80),
(32, '160090107056', 32, 70),
(33, '160090107056', 28, 65),
(34, '160090107056', 30, 75),
(35, '160090107056', 34, 65),
(36, '160090107056', 36, 80),
(37, '160090107056', 57, 70),
(38, '160090107056', 22, 80),
(39, '160090107056', 24, 65),
(40, '160090107043', 24, 80),
(41, '160090107043', 30, 70),
(42, '160090107043', 32, 75),
(43, '160090107043', 26, 50),
(44, '160090107043', 28, 59),
(45, '160090107043', 34, 63),
(46, '160090107043', 36, 54),
(47, '160090107043', 57, 71),
(48, 'test1', 26, 67),
(49, 'test1', 22, 80),
(50, 'test1', 24, 50),
(51, 'test1', 28, 75),
(52, 'test1', 30, 65),
(53, 'test1', 32, 59),
(54, 'test1', 34, 50),
(55, 'test1', 36, 55),
(56, 'test1', 57, 70),
(57, '160090107002', 26, 65),
(58, '160090107002', 30, 50),
(59, '160090107002', 22, 75),
(60, '160090107002', 24, 59),
(61, '160090107002', 28, 70),
(62, '160090107002', 34, 56),
(63, '160090107002', 36, 65),
(64, '160090107002', 32, 60),
(65, '160090107002', 57, 50);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` bigint(12) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `fname`, `lname`, `email`, `password`, `contact`, `created_at`, `updated_at`) VALUES
('Dishant123', 'Dishant', 'Rana', 'dishanat@gmail.com', '$2y$10$TopreuGrRZuVHwcQCaXkI.el5DraUCAcYJhGOKzE8C0vt2MgRosIq', 8140443145, '2020-05-21 01:16:59', '2020-05-21 01:16:59'),
('Dishant1234', 'Dishant', 'Rana', 'dishant@gmail.com', '$2y$10$tooqN3HeEf/COJ0OCreKoumoK8BMUxmXg8XGwGYE8rUZMbNJ.ktwu', 8140443145, '2020-05-21 01:11:57', '2020-05-21 01:11:57'),
('Nilam1234', 'Nilam', 'Surti', 'Nilam123@gmail.com', '$2y$10$JaCAaEv0qXUyAA/P48swJemlHocsQ1vxHFMBK4N5/.Qaw7uPPd8/C', 123456789, '2020-03-16 13:36:45', '2020-03-16 13:36:45'),
('Teacher1', 'Teacher1', 'abc', 'Teacher1@gmail.com', '$2y$10$FLdKPEp/b5rtmNr/tuKvFenGvF.MwMMH.QUCr9KZnge8zIIJ1mVSm', 9547863214, '2020-05-10 03:43:17', '2020-05-10 03:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `test_answers`
--

CREATE TABLE `test_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_type_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `option_id` bigint(20) UNSIGNED DEFAULT NULL,
  `std_answer` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_answers`
--

INSERT INTO `test_answers` (`id`, `student_id`, `test_type_id`, `question_id`, `option_id`, `std_answer`, `created_at`, `updated_at`) VALUES
(1794, '160090107056', 1, 11, 11, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1795, '160090107056', 1, 12, 14, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1796, '160090107056', 1, 13, 15, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1797, '160090107056', 1, 14, 18, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1798, '160090107056', 1, 15, 19, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1799, '160090107056', 1, 16, 21, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1800, '160090107056', 1, 17, 23, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1801, '160090107056', 1, 18, 26, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1802, '160090107056', 1, 19, 27, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1803, '160090107056', 1, 20, 30, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1804, '160090107056', 1, 21, 31, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1805, '160090107056', 1, 22, 34, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1806, '160090107056', 1, 23, 36, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1807, '160090107056', 1, 24, 37, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1808, '160090107056', 1, 25, 39, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1809, '160090107056', 1, 26, 42, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1810, '160090107056', 1, 27, 44, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1811, '160090107056', 1, 28, 46, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1812, '160090107056', 1, 29, 47, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1813, '160090107056', 1, 30, 50, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1814, '160090107056', 1, 31, 51, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1815, '160090107056', 1, 32, 53, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1816, '160090107056', 1, 33, 56, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1817, '160090107056', 1, 34, 58, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1818, '160090107056', 1, 35, 60, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1819, '160090107056', 1, 36, 62, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1820, '160090107056', 1, 37, 63, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1821, '160090107056', 1, 38, 66, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1822, '160090107056', 1, 39, 68, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1823, '160090107056', 1, 40, 70, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1824, '160090107056', 1, 41, 71, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1825, '160090107056', 1, 42, 73, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1826, '160090107056', 1, 43, 75, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1827, '160090107056', 1, 44, 78, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1828, '160090107056', 1, 45, 80, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(1829, '160090107056', 1, 46, 81, NULL, '2020-06-11 06:29:05', '2020-06-11 06:29:05'),
(2005, '160090107056', 2, 310, NULL, 9, '2020-06-11 08:04:17', '2020-06-11 08:04:17'),
(2006, '160090107056', 2, 311, NULL, 7, '2020-06-11 08:04:17', '2020-06-11 08:04:17'),
(2007, '160090107056', 2, 312, NULL, 8, '2020-06-11 08:04:17', '2020-06-11 08:04:17'),
(2008, '160090107056', 2, 313, NULL, 6, '2020-06-11 08:04:17', '2020-06-11 08:04:17'),
(2009, '160090107056', 2, 314, NULL, 9, '2020-06-11 08:04:17', '2020-06-11 08:04:17'),
(2010, '160090107056', 2, 315, NULL, 9, '2020-06-11 08:04:17', '2020-06-11 08:04:17'),
(2011, '160090107056', 2, 316, NULL, 10, '2020-06-11 08:04:17', '2020-06-11 08:04:17'),
(2048, '160090107043', 1, 11, 12, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2049, '160090107043', 1, 12, 13, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2050, '160090107043', 1, 13, 16, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2051, '160090107043', 1, 14, 17, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2052, '160090107043', 1, 15, 20, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2053, '160090107043', 1, 16, 22, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2054, '160090107043', 1, 17, 23, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2055, '160090107043', 1, 18, 26, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2056, '160090107043', 1, 19, 27, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2057, '160090107043', 1, 20, 30, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2058, '160090107043', 1, 21, 31, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2059, '160090107043', 1, 22, 34, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2060, '160090107043', 1, 23, 36, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2061, '160090107043', 1, 24, 38, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2062, '160090107043', 1, 25, 39, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2063, '160090107043', 1, 26, 42, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2064, '160090107043', 1, 27, 44, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2065, '160090107043', 1, 28, 45, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2066, '160090107043', 1, 29, 47, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2067, '160090107043', 1, 30, 49, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2068, '160090107043', 1, 31, 51, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2069, '160090107043', 1, 32, 53, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2070, '160090107043', 1, 33, 55, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2071, '160090107043', 1, 34, 58, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2072, '160090107043', 1, 35, 60, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2073, '160090107043', 1, 36, 62, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2074, '160090107043', 1, 37, 63, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2075, '160090107043', 1, 38, 66, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2076, '160090107043', 1, 39, 67, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2077, '160090107043', 1, 40, 70, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2078, '160090107043', 1, 41, 71, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2079, '160090107043', 1, 42, 74, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2080, '160090107043', 1, 43, 76, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2081, '160090107043', 1, 44, 77, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2082, '160090107043', 1, 45, 79, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2083, '160090107043', 1, 46, 82, NULL, '2020-06-11 11:50:54', '2020-06-11 11:50:54'),
(2276, '160090107043', 2, 255, NULL, 9, '2020-06-11 13:18:20', '2020-06-11 13:18:20'),
(2277, '160090107043', 2, 257, NULL, 9, '2020-06-11 13:18:20', '2020-06-11 13:18:20'),
(2278, '160090107043', 2, 259, NULL, 7, '2020-06-11 13:18:20', '2020-06-11 13:18:20'),
(2279, '160090107043', 2, 261, NULL, 8, '2020-06-11 13:18:20', '2020-06-11 13:18:20'),
(2280, '160090107043', 2, 263, NULL, 8, '2020-06-11 13:18:20', '2020-06-11 13:18:20'),
(2281, '160090107043', 2, 265, NULL, 6, '2020-06-11 13:18:20', '2020-06-11 13:18:20'),
(2282, 'test1', 1, 11, 11, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2283, 'test1', 1, 12, 13, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2284, 'test1', 1, 13, 15, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2285, 'test1', 1, 14, 18, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2286, 'test1', 1, 15, 19, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2287, 'test1', 1, 16, 22, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2288, 'test1', 1, 17, 24, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2289, 'test1', 1, 18, 25, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2290, 'test1', 1, 19, 28, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2291, 'test1', 1, 20, 29, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2292, 'test1', 1, 21, 31, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2293, 'test1', 1, 22, 34, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2294, 'test1', 1, 23, 36, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2295, 'test1', 1, 24, 37, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2296, 'test1', 1, 25, 39, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2297, 'test1', 1, 26, 42, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2298, 'test1', 1, 27, 44, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2299, 'test1', 1, 28, 46, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2300, 'test1', 1, 29, 48, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2301, 'test1', 1, 30, 49, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2302, 'test1', 1, 31, 51, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2303, 'test1', 1, 32, 54, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2304, 'test1', 1, 33, 56, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2305, 'test1', 1, 34, 57, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2306, 'test1', 1, 35, 60, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2307, 'test1', 1, 36, 62, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2308, 'test1', 1, 37, 63, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2309, 'test1', 1, 38, 66, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2310, 'test1', 1, 39, 67, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2311, 'test1', 1, 40, 69, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2312, 'test1', 1, 41, 71, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2313, 'test1', 1, 42, 74, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2314, 'test1', 1, 43, 76, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2315, 'test1', 1, 44, 78, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2316, 'test1', 1, 45, 79, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2317, 'test1', 1, 46, 81, NULL, '2020-06-12 00:24:50', '2020-06-12 00:24:50'),
(2344, 'test1', 2, 107, NULL, 7, '2020-06-12 00:33:04', '2020-06-12 00:33:04'),
(2345, 'test1', 2, 110, NULL, 8, '2020-06-12 00:33:04', '2020-06-12 00:33:04'),
(2346, 'test1', 2, 113, NULL, 5, '2020-06-12 00:33:04', '2020-06-12 00:33:04'),
(2347, 'test1', 2, 116, NULL, 7, '2020-06-12 00:33:04', '2020-06-12 00:33:04'),
(2348, 'test1', 2, 119, NULL, 6, '2020-06-12 00:33:04', '2020-06-12 00:33:04'),
(2349, 'test1', 2, 122, NULL, 7, '2020-06-12 00:33:04', '2020-06-12 00:33:04'),
(2350, 'test1', 2, 125, NULL, 6, '2020-06-12 00:33:04', '2020-06-12 00:33:04'),
(2351, 'test1', 2, 79, NULL, 8, '2020-06-12 00:33:04', '2020-06-12 00:33:04'),
(2352, 'test1', 2, 81, NULL, 7, '2020-06-12 00:33:04', '2020-06-12 00:33:04'),
(2353, 'test1', 2, 83, NULL, 5, '2020-06-12 00:33:04', '2020-06-12 00:33:04'),
(2354, 'test1', 2, 85, NULL, 7, '2020-06-12 00:33:04', '2020-06-12 00:33:04'),
(2355, 'test1', 2, 87, NULL, 6, '2020-06-12 00:33:04', '2020-06-12 00:33:04'),
(2356, 'test1', 2, 89, NULL, 6, '2020-06-12 00:33:04', '2020-06-12 00:33:04'),
(2357, '160090107002', 1, 11, 11, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2358, '160090107002', 1, 12, 14, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2359, '160090107002', 1, 13, 15, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2360, '160090107002', 1, 14, 18, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2361, '160090107002', 1, 15, 19, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2362, '160090107002', 1, 16, 22, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2363, '160090107002', 1, 17, 24, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2364, '160090107002', 1, 18, 25, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2365, '160090107002', 1, 19, 28, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2366, '160090107002', 1, 20, 30, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2367, '160090107002', 1, 21, 32, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2368, '160090107002', 1, 22, 34, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2369, '160090107002', 1, 23, 35, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2370, '160090107002', 1, 24, 38, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2371, '160090107002', 1, 25, 40, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2372, '160090107002', 1, 26, 42, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2373, '160090107002', 1, 27, 43, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2374, '160090107002', 1, 28, 46, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2375, '160090107002', 1, 29, 47, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2376, '160090107002', 1, 30, 49, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2377, '160090107002', 1, 31, 51, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2378, '160090107002', 1, 32, 53, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2379, '160090107002', 1, 33, 55, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2380, '160090107002', 1, 34, 57, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2381, '160090107002', 1, 35, 59, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2382, '160090107002', 1, 36, 61, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2383, '160090107002', 1, 37, 63, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2384, '160090107002', 1, 38, 65, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2385, '160090107002', 1, 39, 67, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2386, '160090107002', 1, 40, 69, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2387, '160090107002', 1, 41, 71, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2388, '160090107002', 1, 42, 74, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2389, '160090107002', 1, 43, 76, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2390, '160090107002', 1, 44, 77, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2391, '160090107002', 1, 45, 79, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00'),
(2392, '160090107002', 1, 46, 82, NULL, '2020-06-12 02:06:00', '2020-06-12 02:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `test_results`
--

CREATE TABLE `test_results` (
  `test_result_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_type_id` bigint(20) UNSIGNED NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `careerfield_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_results`
--

INSERT INTO `test_results` (`test_result_id`, `student_id`, `test_type_id`, `score`, `date`, `careerfield_id`, `created_at`, `updated_at`) VALUES
(35, '160090107056', 2, '41', NULL, 20, '2020-06-11 08:04:17', '2020-06-11 08:04:17'),
(68, '160090107043', 2, '39', NULL, 27, '2020-06-11 13:18:20', '2020-06-11 13:18:20'),
(73, 'test1', 2, '32', NULL, 3, '2020-06-12 00:33:04', '2020-06-12 00:33:04'),
(74, 'test1', 2, '32', NULL, 5, '2020-06-12 00:33:04', '2020-06-12 00:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `test_types`
--

CREATE TABLE `test_types` (
  `test_type_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_types`
--

INSERT INTO `test_types` (`test_type_id`, `name`, `discription`, `created_at`, `updated_at`) VALUES
(1, 'Personality Test', '', '2020-03-18 17:24:27', '2020-03-18 17:24:27'),
(2, 'Skill Test', '', '2020-03-18 17:24:27', '2020-03-18 17:24:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admins_admin_id_unique` (`admin_id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `careerfields`
--
ALTER TABLE `careerfields`
  ADD PRIMARY KEY (`careerfield_id`),
  ADD KEY `careerfields_stream_id_foreign` (`stream_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`classes_id`),
  ADD KEY `classes_stream_id_foreign` (`stream_id`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`classroom_id`),
  ADD KEY `classrooms_classes_id_foreign` (`classes_id`);

--
-- Indexes for table `classroom_students`
--
ALTER TABLE `classroom_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classroom_students_student_id_foreign` (`student_id`),
  ADD KEY `classroom_students_classroom_id_foreign` (`classroom_id`),
  ADD KEY `classroom_students_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_career`
--
ALTER TABLE `final_career`
  ADD PRIMARY KEY (`id`),
  ADD KEY `final_career_personality_type_id_foreign` (`personality_type_id`),
  ADD KEY `final_career_student_id_foreign` (`student_id`),
  ADD KEY `final_career_careerfield_id_foreign` (`careerfield_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parent_id`),
  ADD UNIQUE KEY `parents_parent_id_unique` (`parent_id`),
  ADD UNIQUE KEY `parents_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personality_careerfields`
--
ALTER TABLE `personality_careerfields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personality_careerfields_personality_type_id_foreign` (`personality_type_id`),
  ADD KEY `personality_careerfields_careerfield_id_foreign` (`careerfield_id`);

--
-- Indexes for table `personality_types`
--
ALTER TABLE `personality_types`
  ADD PRIMARY KEY (`personality_type_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_test_type_id_foreign` (`test_type_id`),
  ADD KEY `questions_careerfield_id_foreign` (`careerfield_id`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_options_question_id_foreign` (`question_id`),
  ADD KEY `question_options_personality_type_id_foreign` (`personality_type_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `streams`
--
ALTER TABLE `streams`
  ADD PRIMARY KEY (`stream_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `students_student_id_unique` (`student_id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD KEY `students_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `subjects_classes_id_foreign` (`classes_id`);

--
-- Indexes for table `subject_careerfields`
--
ALTER TABLE `subject_careerfields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_careerfields_subject_id_foreign` (`subject_id`),
  ADD KEY `subject_careerfields_careerfield_id_foreign` (`careerfield_id`);

--
-- Indexes for table `subject_results`
--
ALTER TABLE `subject_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_results_subject_id_foreign` (`subject_id`),
  ADD KEY `subject_results_student_id_foreign` (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `teachers_teacher_id_unique` (`teacher_id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

--
-- Indexes for table `test_answers`
--
ALTER TABLE `test_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_answers_test_type_id_foreign` (`test_type_id`),
  ADD KEY `test_answers_student_id_foreign` (`student_id`),
  ADD KEY `test_answers_question_id_foreign` (`question_id`),
  ADD KEY `test_answers_option_id_foreign` (`option_id`);

--
-- Indexes for table `test_results`
--
ALTER TABLE `test_results`
  ADD PRIMARY KEY (`test_result_id`),
  ADD KEY `test_results_test_type_id_foreign` (`test_type_id`),
  ADD KEY `test_results_student_id_foreign` (`student_id`),
  ADD KEY `test_results_careerfield_id_foreign` (`careerfield_id`);

--
-- Indexes for table `test_types`
--
ALTER TABLE `test_types`
  ADD PRIMARY KEY (`test_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careerfields`
--
ALTER TABLE `careerfields`
  MODIFY `careerfield_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `classes_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `classroom_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `classroom_students`
--
ALTER TABLE `classroom_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `final_career`
--
ALTER TABLE `final_career`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personality_careerfields`
--
ALTER TABLE `personality_careerfields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `personality_types`
--
ALTER TABLE `personality_types`
  MODIFY `personality_type_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;

--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `streams`
--
ALTER TABLE `streams`
  MODIFY `stream_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `subject_careerfields`
--
ALTER TABLE `subject_careerfields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `subject_results`
--
ALTER TABLE `subject_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `test_answers`
--
ALTER TABLE `test_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2393;

--
-- AUTO_INCREMENT for table `test_results`
--
ALTER TABLE `test_results`
  MODIFY `test_result_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `test_types`
--
ALTER TABLE `test_types`
  MODIFY `test_type_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `careerfields`
--
ALTER TABLE `careerfields`
  ADD CONSTRAINT `careerfields_stream_id_foreign` FOREIGN KEY (`stream_id`) REFERENCES `streams` (`stream_id`);

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_stream_id_foreign` FOREIGN KEY (`stream_id`) REFERENCES `streams` (`stream_id`);

--
-- Constraints for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD CONSTRAINT `classrooms_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`classes_id`);

--
-- Constraints for table `classroom_students`
--
ALTER TABLE `classroom_students`
  ADD CONSTRAINT `classroom_students_classroom_id_foreign` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`classroom_id`),
  ADD CONSTRAINT `classroom_students_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `classroom_students_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`teacher_id`) ON UPDATE CASCADE;

--
-- Constraints for table `final_career`
--
ALTER TABLE `final_career`
  ADD CONSTRAINT `final_career_careerfield_id_foreign` FOREIGN KEY (`careerfield_id`) REFERENCES `careerfields` (`careerfield_id`),
  ADD CONSTRAINT `final_career_personality_type_id_foreign` FOREIGN KEY (`personality_type_id`) REFERENCES `personality_types` (`personality_type_id`),
  ADD CONSTRAINT `final_career_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `personality_careerfields`
--
ALTER TABLE `personality_careerfields`
  ADD CONSTRAINT `personality_careerfields_careerfield_id_foreign` FOREIGN KEY (`careerfield_id`) REFERENCES `careerfields` (`careerfield_id`),
  ADD CONSTRAINT `personality_careerfields_personality_type_id_foreign` FOREIGN KEY (`personality_type_id`) REFERENCES `personality_types` (`personality_type_id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_careerfield_id_foreign` FOREIGN KEY (`careerfield_id`) REFERENCES `careerfields` (`careerfield_id`),
  ADD CONSTRAINT `questions_test_type_id_foreign` FOREIGN KEY (`test_type_id`) REFERENCES `test_types` (`test_type_id`);

--
-- Constraints for table `question_options`
--
ALTER TABLE `question_options`
  ADD CONSTRAINT `question_options_personality_type_id_foreign` FOREIGN KEY (`personality_type_id`) REFERENCES `personality_types` (`personality_type_id`),
  ADD CONSTRAINT `question_options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`parent_id`) ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_classes_id_foreign` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`classes_id`);

--
-- Constraints for table `subject_careerfields`
--
ALTER TABLE `subject_careerfields`
  ADD CONSTRAINT `subject_careerfields_careerfield_id_foreign` FOREIGN KEY (`careerfield_id`) REFERENCES `careerfields` (`careerfield_id`),
  ADD CONSTRAINT `subject_careerfields_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`);

--
-- Constraints for table `subject_results`
--
ALTER TABLE `subject_results`
  ADD CONSTRAINT `subject_results_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `subject_results_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`);

--
-- Constraints for table `test_answers`
--
ALTER TABLE `test_answers`
  ADD CONSTRAINT `test_answers_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `question_options` (`id`),
  ADD CONSTRAINT `test_answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `test_answers_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `test_answers_test_type_id_foreign` FOREIGN KEY (`test_type_id`) REFERENCES `test_types` (`test_type_id`);

--
-- Constraints for table `test_results`
--
ALTER TABLE `test_results`
  ADD CONSTRAINT `test_results_careerfield_id_foreign` FOREIGN KEY (`careerfield_id`) REFERENCES `careerfields` (`careerfield_id`),
  ADD CONSTRAINT `test_results_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `test_results_test_type_id_foreign` FOREIGN KEY (`test_type_id`) REFERENCES `test_types` (`test_type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
