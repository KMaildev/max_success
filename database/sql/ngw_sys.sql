-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2023 at 07:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngw_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent_lists`
--

CREATE TABLE `agent_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agent_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_front` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_back` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `township_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agent_lists`
--

INSERT INTO `agent_lists` (`id`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`, `agent_code`, `nrc`, `nrc_front`, `nrc_back`, `region_id`, `township_id`, `remark`, `add_user_id`, `join_date`, `photo`) VALUES
(1, 'KO KYAW KYAW', 'kokyaw@gmail.com', '09666171887', 'Yangon', '2023-03-11 10:20:05', '2023-03-11 10:20:05', 'A000001', '1/BaMaNa223443', 'public/agents/Bt5978KUJ6DlfsNHGJuGUSvJRKPv5Pyos7n1YIjW.jpg', 'public/agents/MaNheV37ZNplALT8uh0TpDm6AmHY6MOELTQfVoQI.jpg', '1', '1', 'No Remark', '1', '2023-03-11 11:15 PM', 'public/agents/UYC01S9geFXWPKi1ORdfPnItjU6jZbtGMjwDIuQb.jpg'),
(2, 'Ko Aung Soe', 'koaung@gmail.com', '09666171887', 'Yangon', '2023-03-11 10:20:05', '2023-03-11 10:20:05', 'A000001', '1/BaMaNa223443', 'public/agents/Bt5978KUJ6DlfsNHGJuGUSvJRKPv5Pyos7n1YIjW.jpg', 'public/agents/MaNheV37ZNplALT8uh0TpDm6AmHY6MOELTQfVoQI.jpg', '1', '1', 'No Remark', '1', '2023-03-11 11:15 PM', 'public/agents/UYC01S9geFXWPKi1ORdfPnItjU6jZbtGMjwDIuQb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `authentication_log`
--

CREATE TABLE `authentication_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authenticatable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authenticatable_id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_at` timestamp NULL DEFAULT NULL,
  `login_successful` tinyint(1) NOT NULL DEFAULT 0,
  `logout_at` timestamp NULL DEFAULT NULL,
  `cleared_by_user` tinyint(1) NOT NULL DEFAULT 0,
  `location` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`location`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authentication_log`
--

INSERT INTO `authentication_log` (`id`, `authenticatable_type`, `authenticatable_id`, `ip_address`, `user_agent`, `login_at`, `login_successful`, `logout_at`, `cleared_by_user`, `location`) VALUES
(1, 'App\\Models\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-13 22:47:46', 1, '2023-03-13 22:48:26', 0, '{\"ip\":\"127.0.0.0\",\"iso_code\":\"US\",\"country\":\"United States\",\"city\":\"New Haven\",\"state\":\"CT\",\"state_name\":\"Connecticut\",\"postal_code\":\"06510\",\"lat\":41.31,\"lon\":-72.92,\"timezone\":\"America\\/New_York\",\"continent\":\"NA\",\"currency\":\"USD\",\"default\":true,\"cached\":false}'),
(2, 'App\\Models\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-13 22:48:30', 1, NULL, 0, '{\"ip\":\"127.0.0.0\",\"iso_code\":\"US\",\"country\":\"United States\",\"city\":\"New Haven\",\"state\":\"CT\",\"state_name\":\"Connecticut\",\"postal_code\":\"06510\",\"lat\":41.31,\"lon\":-72.92,\"timezone\":\"America\\/New_York\",\"continent\":\"NA\",\"currency\":\"USD\",\"default\":true,\"cached\":false}'),
(3, 'App\\Models\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 00:17:54', 1, '2023-03-14 00:20:46', 0, '{\"ip\":\"127.0.0.0\",\"iso_code\":\"US\",\"country\":\"United States\",\"city\":\"New Haven\",\"state\":\"CT\",\"state_name\":\"Connecticut\",\"postal_code\":\"06510\",\"lat\":41.31,\"lon\":-72.92,\"timezone\":\"America\\/New_York\",\"continent\":\"NA\",\"currency\":\"USD\",\"default\":true,\"cached\":false}'),
(4, 'App\\Models\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 00:20:51', 1, '2023-03-14 00:21:20', 0, '{\"ip\":\"127.0.0.0\",\"iso_code\":\"US\",\"country\":\"United States\",\"city\":\"New Haven\",\"state\":\"CT\",\"state_name\":\"Connecticut\",\"postal_code\":\"06510\",\"lat\":41.31,\"lon\":-72.92,\"timezone\":\"America\\/New_York\",\"continent\":\"NA\",\"currency\":\"USD\",\"default\":true,\"cached\":false}'),
(5, 'App\\Models\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 00:21:25', 1, NULL, 0, '{\"ip\":\"127.0.0.0\",\"iso_code\":\"US\",\"country\":\"United States\",\"city\":\"New Haven\",\"state\":\"CT\",\"state_name\":\"Connecticut\",\"postal_code\":\"06510\",\"lat\":41.31,\"lon\":-72.92,\"timezone\":\"America\\/New_York\",\"continent\":\"NA\",\"currency\":\"USD\",\"default\":true,\"cached\":false}');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(10) UNSIGNED NOT NULL,
  `contract_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_male` int(11) DEFAULT NULL,
  `contract_female` int(11) DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `contract_date`, `contract_male`, `contract_female`, `remark`, `demand_id`, `created_at`, `updated_at`) VALUES
(1, '21.3.2022', 2, 2, 'Contract Remark', 1, '2023-03-13 01:38:37', '2023-03-13 21:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Thailand', '2023-01-30 10:38:22', '2023-01-30 10:39:38'),
(2, 'Malaysia', '2023-02-06 11:41:27', '2023-02-06 11:41:27'),
(3, 'Japan', '2023-02-06 11:41:32', '2023-02-06 11:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `demands`
--

CREATE TABLE `demands` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countrie_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overseas_agencie_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `male` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `female` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demand_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cabinet_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `demand_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demand_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demand_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demands`
--

INSERT INTO `demands` (`id`, `company_name`, `countrie_id`, `overseas_agencie_id`, `male`, `female`, `demand_date`, `cabinet_date`, `issue_date`, `issue_number`, `created_at`, `updated_at`, `demand_status`, `demand_id`, `demand_number`, `job`, `salary`) VALUES
(1, '1', '1', '1', '100', '100', '21.3.2022', '6.4.2022', '30.5.2022', 'စာအမှတ်၊၃/၂၇/အလည(ရွှေ့ပြောင်း)၂၀၂၂(၁၃၁၀၉)', '2023-03-12 21:09:22', '2023-03-12 21:09:22', 'new_demand', NULL, 'DOE0001', 'Construction', '350'),
(2, '1', '1', '1', '100', '20', '21.3.2022', '6.4.2022', '30.5.2022', 'စာအမှတ်၊၃/၂၇/အလည(ရွှေ့ပြောင်း)၂၀၂၂(၁၃၁10)', '2023-03-12 21:13:06', '2023-03-12 21:13:06', 'new_demand', NULL, 'DOE00002', 'Car Factory', '300');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file_management`
--

CREATE TABLE `file_management` (
  `id` int(10) UNSIGNED NOT NULL,
  `overseas_agencie_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demand_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sending_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `location`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'A Hospital', 'Yangon', '09777181716', '2023-03-11 11:01:22', '2023-03-11 11:05:06'),
(2, 'B Hospital', 'Yangon', NULL, '2023-03-11 11:01:37', '2023-03-11 11:01:37'),
(3, 'C Hospital', 'Yangon', NULL, '2023-03-11 11:01:42', '2023-03-11 11:01:42');

-- --------------------------------------------------------

--
-- Table structure for table `interviews`
--

CREATE TABLE `interviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `interview_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_male` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_female` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demand_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interviews`
--

INSERT INTO `interviews` (`id`, `interview_title`, `interview_date`, `interview_male`, `interview_female`, `remark`, `demand_id`, `created_at`, `updated_at`) VALUES
(1, 'First Interview', '2023-03-13', '50', '50', 'First Interview Edit', '1', '2023-03-12 22:18:38', '2023-03-12 22:34:36'),
(2, 'First Interview', '2023-03-13', '100', '0', 'First Interview', '2', '2023-03-12 22:25:41', '2023-03-12 22:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `interview_labours`
--

CREATE TABLE `interview_labours` (
  `id` int(10) UNSIGNED NOT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `interview_id` int(11) DEFAULT NULL,
  `passport_id` int(11) DEFAULT NULL,
  `agent_list_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interview_labours`
--

INSERT INTO `interview_labours` (`id`, `demand_id`, `interview_id`, `passport_id`, `agent_list_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4, 2, 1, '2023-03-13 00:57:39', '2023-03-13 00:57:39'),
(2, 1, 1, 3, 2, 1, '2023-03-13 00:57:39', '2023-03-13 00:57:39'),
(3, 1, 1, 2, 2, 1, '2023-03-13 00:57:39', '2023-03-13 00:57:39'),
(4, 1, 1, 1, 2, 1, '2023-03-13 00:57:39', '2023-03-13 00:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `labour_docs`
--

CREATE TABLE `labour_docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `passport_id` int(11) DEFAULT NULL,
  `online_form_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `labour_management`
--

CREATE TABLE `labour_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `overseas_agencies_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_passport` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owic_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sending_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labour_management`
--

INSERT INTO `labour_management` (`id`, `demand_id`, `contract_id`, `overseas_agencies_id`, `name`, `father_name`, `nrc`, `date_of_birth`, `passport`, `passport_date`, `phone`, `address`, `gender`, `remark`, `place_of_passport`, `owic`, `owic_date`, `created_at`, `updated_at`, `sending_id`, `passport_id`) VALUES
(2, 1, 1, 1, 'MIN TIN', NULL, NULL, NULL, 'MG 786769', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-13 21:15:41', '2023-03-13 21:19:24', '1', 3),
(3, 1, 1, 1, 'CHAN NYEIN AUNG', NULL, NULL, NULL, 'MG 784551', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-13 21:18:05', '2023-03-13 21:19:24', '1', 2),
(4, 1, 1, 1, 'YU YA WINT CHAL', NULL, NULL, NULL, 'MG 108457', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-13 21:18:19', '2023-03-13 21:19:24', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medical_tests`
--

CREATE TABLE `medical_tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `medical_test_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `passport_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `failed_or_pass` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agent_list_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_tests`
--

INSERT INTO `medical_tests` (`id`, `medical_test_date`, `hospital_id`, `passport_id`, `user_id`, `failed_or_pass`, `created_at`, `updated_at`, `agent_list_id`) VALUES
(1, '2023-03-13 12:13 PM', 1, 112, 1, 'Pass', '2023-03-12 23:13:17', '2023-03-13 02:38:44', 1),
(2, '2023-03-13 12:13 PM', 1, 111, 1, 'Pass', '2023-03-12 23:13:17', '2023-03-12 23:13:25', 2),
(3, '2023-03-13 12:13 PM', 1, 110, 1, 'Pass', '2023-03-12 23:13:17', '2023-03-12 23:13:25', 1),
(4, '2023-03-13 12:13 PM', 1, 107, 1, 'Pass', '2023-03-12 23:13:17', '2023-03-12 23:13:26', 1),
(5, '2023-03-13 12:13 PM', 1, 106, 1, 'Failed', '2023-03-12 23:13:17', '2023-03-12 23:13:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medical_test_temp_lists`
--

CREATE TABLE `medical_test_temp_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `agent_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_id` int(11) DEFAULT NULL,
  `session_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agent_list_id` int(11) DEFAULT NULL,
  `types` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_test_temp_lists`
--

INSERT INTO `medical_test_temp_lists` (`id`, `agent_name`, `name`, `passport`, `nrc`, `passport_id`, `session_id`, `user_id`, `created_at`, `updated_at`, `agent_list_id`, `types`) VALUES
(5, 'KO KYAW KYAW', 'HTAY HTAY WIN', 'MG 150043', '10/KA HTA NA (N) 140423', 100, 'C6tBDy7qzDG8NZpia3zaQE2avKxVTF6gpzAipKm2', 1, '2023-03-13 00:43:18', '2023-03-13 00:43:18', 1, 'medical_test'),
(6, 'KO KYAW KYAW', 'MYO MYINT NAING', 'MG 420019', '10/KA HTA NA (N) 178442', 99, 'C6tBDy7qzDG8NZpia3zaQE2avKxVTF6gpzAipKm2', 1, '2023-03-13 00:43:19', '2023-03-13 00:43:19', 1, 'medical_test'),
(7, 'KO KYAW KYAW', 'ZIN MIN AUNG', 'MG 419760', '10/KA HTA NA (N) 187856', 98, 'C6tBDy7qzDG8NZpia3zaQE2avKxVTF6gpzAipKm2', 1, '2023-03-13 00:43:19', '2023-03-13 00:43:19', 1, 'medical_test'),
(8, 'KO KYAW KYAW', 'NAING ZIN', 'MG 042018', '10/KA HTA NA (N) 196883', 97, 'C6tBDy7qzDG8NZpia3zaQE2avKxVTF6gpzAipKm2', 1, '2023-03-13 00:43:20', '2023-03-13 00:43:20', 1, 'medical_test'),
(9, 'KO KYAW KYAW', 'THA PYAY AUNG', 'MG 038972', '10/KA HTA NA (N) 164751', 96, 'C6tBDy7qzDG8NZpia3zaQE2avKxVTF6gpzAipKm2', 1, '2023-03-13 00:43:20', '2023-03-13 00:43:20', 1, 'medical_test'),
(18, 'Ko Aung Soe', 'HEIN THU AUNG', 'MG 496802', '', 4, 'C6tBDy7qzDG8NZpia3zaQE2avKxVTF6gpzAipKm2', 1, '2023-03-13 02:39:09', '2023-03-13 02:39:09', 2, 'interview_labour'),
(19, 'Ko Aung Soe', 'MIN TIN', 'MG 786769', '', 3, 'C6tBDy7qzDG8NZpia3zaQE2avKxVTF6gpzAipKm2', 1, '2023-03-13 02:39:10', '2023-03-13 02:39:10', 2, 'interview_labour'),
(20, 'Ko Aung Soe', 'CHAN NYEIN AUNG', 'MG 784551', '', 2, 'C6tBDy7qzDG8NZpia3zaQE2avKxVTF6gpzAipKm2', 1, '2023-03-13 02:39:10', '2023-03-13 02:39:10', 2, 'interview_labour'),
(21, 'Ko Aung Soe', 'YU YA WINT CHAL', 'MG 108457', '14/NGA PA TA (N) 240503', 1, 'C6tBDy7qzDG8NZpia3zaQE2avKxVTF6gpzAipKm2', 1, '2023-03-13 02:39:11', '2023-03-13 02:39:11', 2, 'interview_labour');

-- --------------------------------------------------------

--
-- Table structure for table `members_lists`
--

CREATE TABLE `members_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_list_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members_lists`
--

INSERT INTO `members_lists` (`id`, `file_path`, `file_name`, `agent_list_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'public/members_lists/KV5phAUYkeqqToqBi55X1WWWSY9kj8T3PZYdU3fz.jpg', 'house.jpeg', 1, 1, '2023-03-11 10:20:05', '2023-03-11 10:20:05');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_30_162400_add_fields_to_users_table', 2),
(6, '2023_01_30_170326_create_countries_table', 3),
(7, '2023_01_30_171039_create_agent_lists_table', 4),
(8, '2023_01_30_173319_create_overseas_agencies_table', 5),
(9, '2023_02_06_040420_create_passports_table', 6),
(10, '2023_02_06_122630_create_demands_table', 7),
(11, '2023_02_06_123519_create_offices_table', 8),
(12, '2023_02_06_134425_create_contracts_table', 9),
(13, '2023_02_06_142050_add_demand_id_to_demands_table', 10),
(14, '2023_02_06_162003_create_labour_management_table', 11),
(15, '2023_02_14_034640_create_sendings_table', 12),
(16, '2023_02_14_053450_add_sending_id_to_labour_management_table', 13),
(17, '2023_02_15_051629_add_demand_number_to_demands_table', 14),
(19, '2023_02_17_025621_add_more_fields_to_passports_table', 15),
(20, '2023_02_17_031305_add_more_fields_v1_to_passports_table', 16),
(21, '2023_02_20_104651_create_regions_table', 17),
(22, '2023_02_20_122130_create_townships_table', 18),
(24, '2023_02_20_123953_add_more_field_v1_to_agent_lists_table', 19),
(25, '2023_02_20_125432_add_more_field_v2_to_agent_lists_table', 20),
(26, '2023_02_20_125823_create_members_lists_table', 20),
(27, '2023_02_22_020736_add_fields_v2_to_passports_table', 21),
(28, '2023_03_05_104609_add_add_fields_v2_to_passports_table', 22),
(29, '2023_03_05_121835_add_fields_v3_to_passports_table', 23),
(30, '2023_03_05_122052_create_passport_payments_table', 23),
(31, '2023_03_05_122503_create_passport_payment_files_table', 23),
(32, '2023_03_06_053459_add_marital_status_to_passports_table', 24),
(33, '2023_03_06_062402_add_leader_to_passports_table', 25),
(34, '2023_03_06_111830_create_file_management_table', 26),
(35, '2023_03_06_120405_add_fields_v1_to_demands_table', 27),
(36, '2023_03_07_031519_create_labour_docs_table', 28),
(37, '2023_03_07_043254_add_fields_v1_to_passport_payments_table', 29),
(38, '2023_03_07_055442_create_permission_tables', 30),
(39, '2023_03_07_060842_add_status_to_permissions_table', 31),
(40, '2023_03_11_080639_add_remark_to_overseas_agencies_table', 32),
(41, '2023_03_11_084011_create_nrcs_table', 33),
(42, '2023_03_11_171320_create_hospitals_table', 34),
(44, '2023_03_12_143332_create_medical_test_temp_lists_table', 35),
(45, '2023_03_12_162652_create_medical_tests_table', 36),
(46, '2023_03_13_044335_create_interviews_table', 37),
(47, '2023_03_13_053937_add_agent_list_id_to_medical_tests_table', 38),
(48, '2023_03_13_054121_add_agent_list_id_to_medical_test_temp_lists_table', 39),
(49, '2023_03_13_070135_create_interview_labours_table', 40),
(50, '2023_03_13_070715_add_types_to_medical_test_temp_lists_table', 41),
(51, '2023_03_14_030313_add_passport_id_to_labour_management_table', 42),
(52, '2023_03_14_050059_create_authentication_log_table', 43);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nrcs`
--

CREATE TABLE `nrcs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_mm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nrcs`
--

INSERT INTO `nrcs` (`id`, `name_en`, `name_mm`, `nrc_code`, `created_at`, `updated_at`) VALUES
(1, 'AhGaYa', '(အဂယ) အင်ဂျန်းယန်', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(2, 'BaMaNa', '(ဗမန) ဗန်းမော်', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(3, 'KhaPhaNa', '(ခဖန) ချီဖွေ', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(4, 'DaPhaYa', '(ဒဖယ) ဒေါ့ဖုန်းယန်', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(5, 'HaPaNa', '(ဟပန) ဟိုပင်', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(6, 'KaMaNa', '(ကမန) ကာမီ', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:05'),
(7, 'KhaLaPha', '(ခလဖ) ခေါင်လန်ဖူး', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(8, 'LaGaNa', '(လဂန) လွယ်ဂျယ်', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(9, 'MaKhaBa', '(မခဘ) မချမ်းဘော', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(10, 'MaSaNa', '(မစန) မံစီ', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:05'),
(11, 'MaNyaNa', '(မညန) မိုးညင်း', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(12, 'MaKaTa', '(မကတ) မိုးကောင်း', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(13, 'MaMaNa', '(မမန) မိုးမောက်', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(14, 'MaKaNa', '(မကန) မြစ်ကြီးနား', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(15, 'NaMaNa', '(နမန) နောင်မွန်း', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(16, 'PhaKaNa', '(ဖကန) ဖားကန့်', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(17, 'PaTaAh', '(ပတအ) ပူတာအို', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:05'),
(18, 'YaKaNa', '(ရကန) ရွှေကူ', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(19, 'SaBaNa', '(ဆဘန) ဆင်ဘို', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(20, 'SaLaNa', '(ဆလန) ဆော့လော', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(21, 'SaPaBa', '(ဆပဘ) ဆွမ်ပရာဘွမ်', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(22, 'TaNaNa', '(တနန) တနိုင်း', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(23, 'WaMaNa', '(ဝမန) ဝင်းမော်', '1', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(24, 'BaLaKha', '(ဘလခ) ဘော်လခဲ', '2', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(25, 'DaMaSa', '(ဒမဆ) ဒီမောဆိုး', '2', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(26, 'LaKaNa', '(လကန) လွိုင်ကော်', '2', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(27, 'MaSaNa', '(မဆန) မယ်ဆည်နန်', '2', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(28, 'PhaSaNa', '(ဖဆန) ဖားဆောင်း', '2', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(29, 'PhaYaSa', '(ဖရဆ) ဖရူးဆိုး', '2', '2019-01-31 07:03:05', '2019-01-31 07:03:05'),
(30, 'YaTaNa', '(ရတန) ရှားတော်', '2', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(31, 'LaBaNa', '(လဘန) လှိုင်းဘွဲ့', '3', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(32, 'KaKaYa', '(ကကရ) ကော့ကရိတ်', '3', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(33, 'KaSaKa', '(ကဆက) ကြာအင်းဆိပ်ကြီး', '3', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(34, 'KaDaNa', '(ကဒန) ကျုံဒိုး', '3', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(35, 'MaWaTa', '(မဝတ) မြဝတီ', '3', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(36, 'PhaAhNa', '(ဖအန) ဖားအံ', '3', '2019-01-31 07:03:05', '2019-01-31 07:03:05'),
(37, 'BaAhNa', '(ဘအန) ဘားအံ', '3', '2019-01-31 07:03:05', '2019-01-31 07:03:05'),
(38, 'PhaPaNa', '(ဖပန) ဖျာပွန်', '3', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(39, 'ThaTaNa', '(သတန) သံတောင်', '3', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(40, 'HaKhaNa', '(ဟခန) ဟားခါး', '4', '2019-01-31 07:03:05', '2019-01-31 07:03:05'),
(41, 'HtaTaLa', '(ထတလ) ထန်တလန်', '4', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(42, 'KaPaLa', '(ကပလ) ကန်ပက်လက်', '4', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(43, 'MaTaPa', '(မတပ) မတူပီ', '4', '2019-01-31 07:03:05', '2019-01-31 07:03:05'),
(44, 'MaTaNa', '(မတန) မင်းတပ်', '4', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(45, 'PhaLaNa', '(ဖလန) ဖလမ်း', '4', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(46, 'PaLaWa', '(ပလဝ) ပလက်ဝ', '4', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(47, 'TaTaNa', '(တတန) တီးတိန်', '4', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(48, 'TaZaNa', '(တဇန) တွန်းဇံ', '4', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(49, 'AhYaTa', '(အရတ) အရာတော်', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(50, 'BaMaNa', '(ဗမန) ဗန်းမောက်', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(51, 'BaTaLa', '(ဘတလ) ဘုတလင်', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(52, 'KhaOuNa', '(ခဥန) ချောင်းဦး', '5', '2019-01-31 07:03:05', '2020-11-25 10:37:39'),
(53, 'DaPaYa', '(ဒပယ) ဒီပဲယင်း', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(54, 'HaMaLa', '(ဟမလ) ဟုမ္မလင်း', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(55, 'HtaKhaNa', '(ထခန) ထီးချိုင့်', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(56, 'AhTaNa', '(အတန) အင်းတော်', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(57, 'KaNaNa', '(ကနန) ကနီ', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:05'),
(58, 'KaThaNa', '(ကသန) ကသာ', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:05'),
(59, 'KaLaHta', '(ကလထ) ကလေး', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(60, 'KaLaWa', '(ကလဝ) ကလေးဝ', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(61, 'KaBaLa', '(ကဘန) ကန့်ဘလူ', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(62, 'KaLaTa', '(ကလတ) ကောလင်း', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(63, 'KhaTaNa', '(ခတန) ခန္တီး', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(64, 'KhaOuTa', '(ခဥတ) ခင်ဦး', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(65, 'KaLaNa', '(ကလန) ကျွန်းလှ', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(66, 'MaLaNa', '(မလန) မော်လိုက်', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(67, 'MaKaNa', '(မကန) မင်းကင်း', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(68, 'MaYaNa', '(မရန) မုံရွာ', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(69, 'MaMaNa', '(မမန) မြောင်', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(70, 'NaYaNa', '(နယန) နန်းယွန်း', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(71, 'NgaZaNa', '(ငဇန) ငါးန်ဇွန်', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(72, 'PaLaNa', '(ပလန) ပုလဲ', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:05'),
(73, 'PhaPaNa', '(ဖပန) ဖောင်ပျင်း', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(74, 'PaLanBa', '(ပလဘ) ပင်လယ်ဘူး', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(75, 'SaKaNa', '(စကန) စစ်ကိုင်း', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(76, 'SaLaKa', '(ဆလက) ဆားလင်းကြီး', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(77, 'YaBaNa', '(ရဘန) ရွှေဘို', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(78, 'TaMaNa', '(တမန) တမူး', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:05'),
(79, 'TaSaNa', '(တဆန) တန့်ဆည်', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(80, 'WaLaNa', '(ဝလန) ဝက်လက်', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(81, 'WaThaNa', '(ဝသန) ဝမ်းသို', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(82, 'YaOuNa', '(ရဥန) ရေဦး', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(83, 'YaMaPa', '(ယမပ) ယင်းမာပင်', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(84, 'YaThaKa', '(ရသက) ရွာသစ်ကြီး', '5', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(85, 'BaPaNa', '(ဘပန) ဘုတ်ပြင်း', '6', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(86, 'HtaWaNa', '(ထဝန) ထားဝယ်', '6', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(87, 'KaThaNa', '(ကသန) ကော့သောင်း', '6', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(88, 'KaSaNa', '(ကစန) ကျွန်းစု', '6', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(89, 'LaLaNa', '(လလန) လောင်းလုံ', '6', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(90, 'MaMaNa', '(မမန) မြိတ်', '6', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(91, 'MaAhYa', '(မအရ) မြိတ်အရှေ့', '6', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(92, 'NgaYaKa', '(ငရက) ငရုတ်ကောင်း', '6', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(93, 'PaLaNa', '(ပလန) ပုလော', '6', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(94, 'TaNaTha', '(တနသ) တနသာၤရီ', '6', '2019-01-31 07:03:05', '2019-01-31 07:03:05'),
(95, 'TaThaYa', '(တသရ) တနသာၤရီ', '6', '2019-01-31 07:03:05', '2019-01-31 07:03:05'),
(96, 'ThaYaKha', '(သရခ) သရက်ချောင်း', '6', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(97, 'YaPhaNa', '(ရဖန) ရေဖြူ', '6', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(98, 'AhPhaNa', '(အဖန) အုတ်ဖို', '7', '2019-01-31 07:03:05', '2019-01-31 07:03:24'),
(99, 'AhPhaNa', '(အဖန) အုတ်ဖြတ်', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(100, 'AhTaNa', '(အတန) အုတ်တွင်း', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(101, 'DaOuNa', '(ဒဥန) ဒိုက်ဦး', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(102, 'HtaTaPa', '(ထတပ) ထန်းတပင်', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(103, 'KaTaTa', '(ကတတ) ကေတုမတီ', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(104, 'KaPaKa', '(ကပက) ကြို့ပင်ကောက်', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(105, 'KaKaNa', '(ကကန) ကျောက်ကြီး', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(106, 'KaTaKha', '(ကတခ) ကျောက်တံခါး', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(107, 'KaKaNa', '(ကကန) ကျောက်ကုန်း', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(108, 'MaDaNa', '(မဒန) မဒေါက်', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(109, 'MaLaNa', '(မလန) မင်းလှ', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(110, 'MaNyaNa', '(မညန) မိုးညို', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(111, 'NaTaLa', '(နတလ) နတ်တလင်း', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(112, 'NyaLaPa', '(ညလပ) ညောင်လေးပင်', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(113, 'PaNaKa', '(ပနက) ပဲနွယ်ကုန်း', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(114, 'PaKhaNa', '(ပခန) ပဲခူး', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:06'),
(115, 'PaTaNa', '(ပတန) ပန်တောင်း', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(116, 'PaKhaTa', '(ပခန) ပေါက်ခေါင်း', '7', '2019-01-31 07:03:06', '2020-12-11 11:06:22'),
(117, 'PaTaTa', '(ပတတ) ပေါင်းတည်', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(118, 'PhaMaNa', '(ဖမန) ဖြူး', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(119, 'PaMaNa', '(ပမန) ပြည်', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(120, 'PaTaSa', '(ပတစ) ပြွန်တဆာ', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(121, 'YaKaNa', '(ရကန) ရွှေကျင်', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(122, 'YaTaNa', '(ရတန) ရွှေတောင်', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(123, 'TaNgaNa', '(တငန) တောင်ငူ', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(124, 'ThaNaPa', '(သနပ) သနပ်ပင်', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(125, 'ThaKaNa', '(သကန) သဲကုန်း', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(126, 'ThaWaTa', '(သဝတ) သာယာဝတီ', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:06'),
(127, 'ThaSaNa', '(သဆန) သုံးဆယ်', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(128, 'WaMaNa', '(ဝမန) ဝေါ', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(129, 'YaTaYa', '(ရတရ) ရေတာရှည်', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(130, 'ZaKaNa', '(ဇကန) ဇီးကုန်း', '7', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(131, 'AhLaNa', '(အလန) အောင်လံ', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(132, 'KhaMaNa', '(ခမန) ချောက်', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(133, 'GaGaNa', '(ဂဂန) ဂန့်ဂေါ', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(134, 'SaPhaNa', '(ဆဖန) ဆိပ်ဖြူ', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(135, 'SaPaWa', '(ဆပဝ) ဆင်ပေါင်ဝဲ', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(136, 'HtaLaNa', '(ထလန) ထီးလင်း', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(137, 'KaMaNa', '(ကမန) ကံမ', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:06'),
(138, 'MaKaNa', '(မကန) မကွေး', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(139, 'MaBaNa', '(မဘန) မင်းဘူး', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(140, 'MaLaNa', '(မလန) မင်းလှ', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(141, 'MaTaNa', '(မတန) မင်းတုန်း', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(142, 'MaMaNa', '(မမန) မြိုင်', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(143, 'MaHtaNa', '(မထန) မြေထဲ', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(144, 'MaThaNa', '(မသန) မြို့သစ်', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(145, 'NaMaNa', '(နမန) နတ်မောက်', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(146, 'NgaPhaNa', '(ငဖန) ငါးဖယ်', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(147, 'PaKhaKa', '(ပခက) ပခုက္ကူ', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(148, 'PaMaNa', '(ပမန) ပေါက်', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(149, 'PaPhaNa', '(ပဖန) ပွင့်ဖြူ', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(150, 'SaLaNa', '(စလန) စလင်း', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(151, 'SaTaYa', '(စတရ) စေတုတ္တရာ', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(152, 'SaKaNa', '(စကန) စကု', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:06'),
(153, 'TaTaKa', '(တတက) တောင်တွင်းကြီး', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(154, 'ThaYaNa', '(သရန) သရက်', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(155, 'SaMaNa', '(ဆမန) ဆော', '8', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(156, 'YaNaKha', '(ရနခ) ရေနံချောင်း', '8', '2019-01-31 07:03:06', '2020-11-25 10:49:33'),
(157, 'YaSaKa', '(ရစက) ရေစကြို', '8', '2019-01-31 07:03:06', '2021-01-25 04:22:00'),
(158, 'DaKhaTha', '(ဒခသ) ဒက္ခိဏသီရိ', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(159, 'LaWaNa', '(လဝန) လယ်ဝေး', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(160, 'OuTaTha', '(ဥတသ) ဥတ္တရသီရိ', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(161, 'PaBaTha', '(ပဗသ) ပုဗ္ဗသီရိ', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(162, 'PaMaNa', '(ပမန) ပျဉ်းမနား', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(163, 'TaKaNa', '(တကန) တပ်ကုန်း', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(164, 'ZaBaTha', '(ဇဗသ) ဇမ္ဗူသီရိ', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(165, 'ZaYaTha', '(ဇယသ) ဇေယျာသီရိ', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(166, 'AhMaYa', '(အမရ) အမရပူရ', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:06'),
(167, 'AhMaZa', '(အမဇ) အောင်မြေသာဇံ', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(168, 'KhaAhZa', '(ခအစ) ချမ်းအေးသာစည်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(169, 'KhaMaSa', '(ခမစ) ချမ်းမြသာစည်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(170, 'KaPaTa', '(ကပတ) ကျောက်ပန်းတောင်း', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(171, 'KaSaNa', '(ကဆန) ကျောက်ဆည်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(172, 'MaLaNa', '(မလန) မလိူင်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(173, 'MaHaMa', '(မဟမ) မဟာအောင်မြေ', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(174, 'MaNaMa', '(မနမ) မန်းနောက်မြောက်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(175, 'MaNaTa', '(မနတ) မန်းနောက်တောင်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(176, 'MaYaMa', '(မရမ) မန်းရှေ့မြောက်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(177, 'MaYaTa', '(မရတ) မန်းရှေ့တောင်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(178, 'MaTaYa', '(မတရ) မတ္တရာ', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(179, 'MaMaNa', '(မမန) မေမြို့', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(180, 'MaHtaLa', '(မထလ) မိတ္ထီလာ', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(181, 'MaKaNa', '(မကန) မိုးကုတ်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(182, 'MaKhaNa', '(မခန) မြင်းခြံ', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(183, 'MaThaNa', '(မသန) မြစ်သား', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(184, 'NaHtaKa', '(နထက) နွားထိုးကြီး', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(185, 'NgaTaYa', '(ငသရ) င့ါသရောက်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(186, 'NyaOuNa', '(ညဥန) ညောင်ဦး', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(187, 'PaLaNa', '(ပလန) ပုလိပ်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(188, 'PaThaKa', '(ပသက) ပုသိမ်ကြီး', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(189, 'PaBaNa', '(ပဖန) ပျော်ဖွယ်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(190, 'PaKaKha', '(ပကခ) ပြည်ကြီးတံခွန်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(191, 'PaOuLa', '(ပဥလ) ပြင်ဦးလွင်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(192, 'PaMaNa', '(ပမန) ပျဉ်းမနား', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(193, 'SaKaTa', '(စကတ) စဉ့်ကိုင်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(194, 'SaKaNa', '(ဆကန) စဉ့်ကူး', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(195, 'TaKaNa', '(တကန) တကောင်း', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(196, 'TaTaOu', '(တတဥ) တံတားဦး', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(197, 'TaThaNa', '(တသန) တောင်သာ', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(198, 'ThaPaKa', '(သပက) သပိတ်ကျင်း', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(199, 'ThaSaNa', '(သစန) သာစည်', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(200, 'WaTaNa', '(ဝတန) ဝမ်းတွင်း', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(201, 'YaMaTha', '(ရမသ) ရမည်းသင်း', '9', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(202, 'BaLaNa', '(ဘလန) ဘီးလင်း', '10', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(203, 'KhaSaNa', '(ခဆန) ချောင်းဆုံ', '10', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(204, 'KaMaYa', '(ကမရ) ကျိုက်မရော', '10', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(205, 'KaHtaNa', '(ကထန) ကျိုက်ထို', '10', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(206, 'MaLaMa', '(မလမ) မော်လမြိုင်', '10', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(207, 'MaDaNa', '(မဒန) မုဒုံ', '10', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(208, 'PaMaNa', '(ပမန) ပေါင်', '10', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(209, 'ThaPhaYa', '(သဖရ) သံဖြူဇရပ်', '10', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(210, 'ThaHtaNa', '(သထန) သထုံ', '10', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(211, 'KhaZaNa', '(ခဇန) ခေါဇာ', '10', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(212, 'LaMaNa', '(လမန) လမိုင်း', '10', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(213, 'YaMaNa', '(ရမန) ရေး', '10', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(214, 'AaMaNa', '(အမန) အမ်း', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(215, 'BaThaTa', '(ဘသတ) ဘူးသီးတောင်', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(216, 'GaMaNa', '(ဂမန) ဂွ', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(217, 'KaPhaNa', '(ကဖန) ကျောက်ဖြူ', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(218, 'KaTaNa', '(ကတန) ကျောက်တော်', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(219, 'MaAhNa', '(မအန) မာန်အောင်', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(220, 'MaTaNa', '(မတန) မောင်းတော', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(221, 'MaPaNa', '(မပန) မင်းပြား', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(222, 'MaOuNa', '(မဥန) မြောက်ဦး', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(223, 'MaPaTa', '(မပတ) မြေပုံ', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(224, 'PaTaNa', '(ပတန) ပေါက်တော', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(225, 'PaNaKa', '(ပဏက) ပုဏ္ဏကျွန်း', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(226, 'SaTaNa', '(စတန) စစ်တွေ', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(227, 'TaKaNa', '(တကန) တောင်ကုတ်', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(228, 'ThaTaNa', '(သတန) သံတွဲ', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(229, 'YaBaNa', '(ရဗန) ရမ်းဗြဲ', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(230, 'YaThaTa', '(ရသတ) ရသေ့တောင်', '11', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(231, 'AaLaNa', '(အလန) အလုံ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:06'),
(232, 'BaHaNa', '(ဗဟန) ဗဟန်း', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(233, 'BaTaHta', '(ဗတထ) ဗိုလ်တထောင်', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(234, 'KaKaKa', '(ကကက) ကိုကိုးကျွန်း', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(235, 'DaGaNa', '(ဒဂန) ဒဂုံ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:06'),
(236, 'DaGaYa', '(ဒဂရ) ဒဂုံမြို့သစ်(အရှေ့ပိုင်း)', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(237, 'DaGaMa', '(ဒဂမ) ဒဂုံမြို့သစ်(မြောက်ပိုင်း)', '12', '2019-01-31 07:03:06', '2019-02-14 10:53:07'),
(238, 'DaSaKa', '(ဒဆက) ဒဂုံမြို့သစ်ဆိပ်ကမ်း', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(239, 'DaGaTa', '(ဒဂတ) ဒဂုံမြို့သစ်(တောင်ပိုင်း)', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(240, 'DaLaNa', '(ဒလန) ဒလ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:06'),
(241, 'DaPaNa', '(ဒပန) ဒေါပုံ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(242, 'LaMaNa', '(လမန) လှိုင်', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(243, 'LaThaYa', '(လသယ) လှိုင်သာယာ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(244, 'LaKaNa', '(လကန) လှည်းကူး', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(245, 'MaBaNa', '(မဘန) မှော်ဘီ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(246, 'HtaTaPa', '(ထတပ) ထန်းတပင်', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(247, 'AhSaNa', '(အစန) အင်းစိန်', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(248, 'KaMaYa', '(ကမရ) ကမာရွတ်', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(249, 'KaMaNa', '(ကမန) ကော့မှုုး', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(250, 'KhaYaNa', '(ခရန) ခရမ်း', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(251, 'KaKhaKa', '(ကခက) ကွမ်းခြံကုန်း', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(252, 'KaTaTa', '(ကတတ) ကျောက်တံတား', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(253, 'KaTaNa', '(ကတန) ကျောက်တန်း', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(254, 'KaMaTa', '(ကမတ) ကြည့်မြင်တိုင်', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(255, 'LaMata', '(လမတ) လမ်းမတော်', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(256, 'LaThaNa', '(လသန) လသာ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:06'),
(257, 'MaYaKa', '(မရက) မရမ်းကုန်း', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(258, 'MaGaTa', '(မဂတ) မင်္ဂလာတောင်ညွှန့်', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(259, 'MaGaDa', '(မဂဒ) မင်္ဂလာဒုံ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(260, 'OuKaMa', '(ဥကမ) မြောက်ဥက္ကလာပ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(261, 'PaBaTa', '(ပဘတ) ပန်းဘဲတန်း', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(262, 'PaZaDa', '(ပဇတ) ပုဇွန်တောင်', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(263, 'SaKhaNa', '(စခန) စမ်းချောင်း', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(264, 'SaKakha', '(ဆကခ) ဆိပ်ကြီးခနောင်တို', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(265, 'SaKaNa', '(ဆကန) ဆိပ်ကမ်း', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(266, 'YaPaKa', '(ရပက) ရွှေပေါက်ကံ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(267, 'YaPaTha', '(ရပသ) ရွှေပြည်သာ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(268, 'OuKaTa', '(ဥကတ) တောင်ဥက္ကလာပ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(269, 'TaKaNa', '(တကန) တိုက်ကြီး', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(270, 'TaMaNa', '(တမန) တာမွေ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(271, 'ThaKaTa', '(သကတ) သာကေတ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(272, 'ThaLaNa', '(သလန) သန်လျင်', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(273, 'ThaGaKa', '(သဃက) သင်္ဃန်းကျွန်း', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(274, 'ThaKhaNa', '(သခန) သုံးခွ', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(275, 'TaTaNa', '(တတန) တွံတေး', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(276, 'YaKaNa', '(ရကန) ရန်ကင်း', '12', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(277, 'KhaYaHa', '(ခရဟ) ချင်းရွှေဟော် မြို့နယ်ခွဲ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(278, 'HaPaTa', '(ဟပတ) ဟိုပန်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(279, 'HaPaNa', '(ဟပန) ဟိုပုံး', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:06'),
(280, 'KaLaNa', '(ကလန) ကလော', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(281, 'KaLaTa', '(ကလတ) ကွမ်းလုံ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(282, 'KaHaNa', '(ကဟန) ကွန်ဟိန်း', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(283, 'KaThaNa', '(ကသန) ကျေးသီး', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(284, 'KaTaTa', '(ကတတ) ကျိုင်းတောင်း', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(285, 'KaTaNa', '(ကတန) ကျိုင်းတုံ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(286, 'KaMaNa', '(ကမန) ကျောက်မဲ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(287, 'KaKhaNa', '(ကခန) ကွတ်ခိုင်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(288, 'LaYaNa', '(လရန) လားရှိုး', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(289, 'LaKaNa', '(လကန) လောက်ကိုင်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(290, 'LaKhaTa', '(လခတ) လဲချား', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(291, 'LaKhaNa', '(လခန) လင်းခေး', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(292, 'LaLaNa', '(လလန) လွိုင်လင်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(293, 'MaBaNa', '(မဘန) မဘိမ်း', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(294, 'MaKaNa', '(မကန) မိုင်းကိုင်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(295, 'MaKhaNa', '(မခန) မိုင်းခတ်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(296, 'MaPHaNa', '(မဖန) မိုင်းဖြတ်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(297, 'MaPaTa', '(မပတ) မိုင်းပြင်း', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(298, 'MaSaNa', '(မဆန) မိုင်းဆတ်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(299, 'MaYaNa', '(မရန) မိုင်းရှုး', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(300, 'MaYaTa', '(မရတ) မိုင်းရယ်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(301, 'MaTaTa', '(မတတ) မန်တုန်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(302, 'MaMaTa', '(မမတ) မိုးမိတ်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(303, 'MaNaNa', '(မနန) မိုးနဲ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:06'),
(304, 'MaKaNa', '(မကန) မုန်းကိုး', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(305, 'MaSaTa', '(မဆတ) မူဆယ်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(306, 'NaMaTa', '(နမတ) နမ့်မတူ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(307, 'NaKhaNa', '(နခန) နမ့်ခမ်း', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(308, 'NaSaNa', '(နဆန) နမ့်ဆန်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(309, 'NaPaNa', '(နဖန) နမ့်ဖိုင်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(310, 'NaKhaTa', '(နခတ) နောင်ချို', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(311, 'NyaYaNa', '(ညရန) ညောင်ရွှေ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(312, 'PhaKhaNa', '(ဖခန) ဖယ်ခုံ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(313, 'PaLaNa', '(ပလန) ပင်လုံ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(314, 'PaTaYa', '(ပတရ) ပင်းတယ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(315, 'SaSaNa', '(ဆဆန) ဆီဆိုင်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(316, 'YaNyaNa', '(ရညန) ရွှေညောင်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(317, 'TaYaNa', '(တယန) တန့်ယန်း', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(318, 'TaMaNya', '(တမည) တာမိုးညဲ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:06'),
(319, 'TaKhaLa', '(တခလ) တာချီလိတ်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(320, 'TaLaNa', '(တလန) တာလေ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(321, 'TaKaNa', '(တကန) တောင်ကြီး', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(322, 'ThaNaNa', '(သနန) သိန္နီ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(323, 'ThaPaNa', '(သပန) သီပေါ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(324, 'YaNgaNa', '(ရငန) ရွာငံ', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(325, 'YaSaNa', '(ရစန) ရပ်စောက်', '13', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(326, 'BaKaLa', '(ဘကလ) ဘိုကလေး', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(327, 'DaNaPha', '(ဓနဖ) ဓနုဖြူ', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(328, 'DaDaYa', '(ဒဒရ) ဒေးဒရဲ', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(329, 'PaThaYa', '(ပသရ) ပုသိမ်(အရှေ့)', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(330, 'AhMaNa', '(အမန) အိမ်မဲ', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(331, 'HaKaKa', '(ဟကက) ဟိုင်းကြီးကျွန်း', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(332, 'HaThaTa', '(ဟသတ) ဟင်္သာတ', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(333, 'AhGaPa', '(အဂပ) အင်္ဂပူ', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(334, 'KaNaNa', '(ခနန) ခနောင်', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(335, 'KaLaNa', '(ကလန) ကျိုက်လတ်', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(336, 'KaKhaNa', '(ကခန) ကြံခင်း', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(337, 'KaKaNa', '(ကကန) ကျောင်းကုန်း', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(338, 'KaPaNa', '(ကပန) ကျုံပျော်', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(339, 'LaPaTa', '(လပတ) လပွတ္တာ', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(340, 'LaMaNa', '(လမန) လေးမျက်နှာ', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(341, 'MaAhPa', '(မအပ) မအူပင်', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(342, 'MaMaKa', '(မမက) မော်လမြိုင်ကျွန်း', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(343, 'MaAhaNa', '(မအန) မြန်အောင်', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(344, 'MaMaNa', '(မမန) မြောင်းမြ', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(345, 'NgaPaTa', '(ငပတ) ငပုတော', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(346, 'NgaThaKha', '(ငသခ) ငါးသိုင်းချောင်း', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(347, 'NyaTaNa', '(ညတန) ညောင်တုန်း', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(348, 'PaTaNa', '(ပတန) ပန်းတနော်', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(349, 'PhaPaNa', '(ဖပန) ဖျာပုံ', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(350, 'ThaPaNa', '(သပန) သာပေါင်း', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(351, 'WaKhaMa', '(ဝခမ) ဝါးခယ်မ', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(352, 'PaThaNa', '(ပသန) ပုသိမ်(အနောက်)', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(353, 'YaKaNa', '(ရကန) ရေကြည်', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(354, 'ZaLaNa', '(ဇလန) ဇလွန်', '14', '2019-01-31 07:03:06', '2019-01-31 07:03:24'),
(355, 'KaKaHta', '(ကကထ) ကန်ကြီးထောင့်', '14', '2020-11-17 09:17:53', '2020-11-17 09:32:46'),
(356, 'KhaMaKa', 'ခမက (ခမောက်ကြီး )', '6', '2020-11-23 08:19:29', '2020-11-23 08:20:35'),
(357, 'KaMaTa', '(ကမတ) ကာမိုင်း', '1', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(358, 'KaPaTa', '(ကပတ) ကန်ပိုက်တီ', '1', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(359, 'MaLaNa', '(မလန) မြို့လှ', '1', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(360, 'PaNaDa', '(ပနဒ) ပန်နန်းဒင်', '1', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(361, 'PaWaNa', '(ပဝန) ပန်ဝါ', '1', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(362, 'SaDaNa', '(ဆဒန) ဆဒုံး', '1', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(363, 'YaBaYa', '(ရဘယ) ရှင်ဘွေယန်', '1', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(364, 'MaSaNa', '(မစန) မယ်စဲ့', '2', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(365, 'YaThaNa', '(ရသန) ရွာသစ်', '2', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(366, 'BaGaLa', '(ဘဂလ) ဘောဂလိ', '3', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(367, 'BaThaSa', '(ဘသဆ) ဘုရားသုံးဆူ', '3', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(368, 'KaMaMa', '(ကမမ) ကမမောင်း', '3', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(369, 'LaThaNa', '(လသန) လိပ်သို', '3', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(370, 'SaKaLa', '(စကလ) စုကလိ', '3', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(371, 'ThaTaKa', '(သတက) သံတောင်ကြီး', '3', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(372, 'WaLaMa', '(ဝလမ) ဝေါလေမြိုင်', '3', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(373, 'YaYaTha', '(ရရသ) ရှမ်းရွာသစ်', '3', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(374, 'KaKhaNa', '(ကခန) ကျီခါး', '4', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(375, 'SaMaNa', '(ဆမန) ဆမီး', '4', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(376, 'YaKhaDa', '(ရခဒ) ရိဒ်ခေါဒါရ်', '4', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(377, 'YaZaNa', '(ရဇန) ရေဇွာ', '4', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(378, 'DaHaNa', '(ဒဟန) ဒုံဟီး', '5', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(379, 'SaMaYa', '(ဆမရ) ဆွမ္မရာ', '5', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(380, 'HtaPaKha', '(ထပခ) ထန်ပါခွေ', '5', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(381, 'KaMaNa', '(ကမန) ကျောက်မြောင်း', '5', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(382, 'KhaPaNa', '(ခပန) ခမ်းပတ်', '5', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(383, 'LaHaNa', '(လဟန) လဟယ်', '5', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(384, 'LaYaNa', '(လရန) လေရှီး', '5', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(385, 'MaMaNa', '(မမတ) မြင်းမူ', '5', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(386, 'MaPaLa', '(မပလ) မိုပိုင်းလွတ်', '5', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(387, 'MaThaNa', '(မသန) မြို့သစ်', '5', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(388, 'PaSaNa', '(ပဆန) ပန်ဆောင်', '5', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(389, 'KaLaAh', '(ကလအ) ကလိန်အောင်', '6', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(390, 'KaYaYa', '(ကရရ) ကရသူရိ', '6', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(391, 'MaAhNa', '(မအန) မြိတ်အနောက်', '6', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(392, 'PaKaMa', '(ပကမ) ပြည်ကြီးမဏ္ဍိုင်', '6', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(393, 'PaLaTa', '(ပလတ) ပလောက်', '6', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(394, 'KaWaNa', '(ကဝန) ကဝ', '7', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(395, 'LaPATa', '(လပတ) လက်ပံတန်း', '7', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(396, 'PaTaLa', '(ပတလ) ပေါင်းတလည်', '7', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(397, 'KaHtaNa', '(ကထန) ကျောက်ထု', '8', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(398, 'NgaZaNa', '(ငဇန) ငါန်းဇွန်', '9', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(399, 'PaBaNa', '(ပဘန) ပျော်ဘွယ်', '9', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(400, 'OoTaYa', '(ဥတသ) ဥတ္တရသီရိ', '9', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(401, 'KaKhaMa', '(ကခမ) ကျိုက္ခမီ', '10', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(402, 'KaTaLa', '(ကတလ) ကျိန္တလီ', '11', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(403, 'MaAhTa', '(မအတ) မအီ', '11', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(404, 'TaPaWa', '(တပဝ) တောင်ပြိုလက်ဝဲ', '11', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(405, 'AhPaNa', '(အပန) အောင်ပန်း', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(406, 'AhTaNa', '(အတန) အင်တော', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(407, 'AhTaYa', '(အသယ) အေးသာယာ', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(408, 'HaHaNa', '(ဟဟန) ဟဲဟိုး', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(409, 'HaMaNa', '(ဟမန) ဟိုမိန်း', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(410, 'KaLaHta', '(ကလထ) ကျိူင်းလပ်', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(411, 'KaLaNa', '(ခလန) ခိုလမ်', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(412, 'MaHtaNa', '(မထန) မော်ထိုက်', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(413, 'MaKhaTa', '(မခတ) မိုင်းခုတ်', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(414, 'MaNgaNa', '(မငန) မိုင်းငေါ့', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(415, 'MaPhaHta', '(မဖထ) မိုင်းဖျန်', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(416, 'NaTaYa', '(နတရ) နောင်တရား', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(417, 'PaPaKa', '(ပပက) ပုံပါကျင်', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(418, 'PaWaNa', '(ပဝန) ပန်ဝိုင်', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(419, 'TaTaNa', '(တတန) တုံတာ', '13', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(420, 'AhMaTa', '(အမတ) အမာ', '14', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(421, 'NgaYaKa', '(ငရက) ငရုတ်ကောင်း', '14', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(422, 'PaSaLa', '(ပစလ) ပြင်စလူ', '14', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(423, 'YaThaYa', '(ရသယ) ရွှေသောင်ယံ', '14', '2020-11-25 16:54:12', '2020-11-25 16:54:12'),
(424, 'KhAaHsa', '(ခအဇ) ချမ်းအေးသာစံ', '9', '2020-12-21 09:39:30', '2020-12-21 09:39:30'),
(426, 'TaTaHta', 'တတထ (တံတား)', '12', '2020-12-31 08:30:10', '2020-12-31 08:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `name`, `location`, `created_at`, `updated_at`) VALUES
(1, 'New Golden Way Co.,Ltd', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `overseas_agencies`
--

CREATE TABLE `overseas_agencies` (
  `id` int(11) NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_company` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countrie_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overseas_agencies`
--

INSERT INTO `overseas_agencies` (`id`, `company_name`, `type_of_company`, `company_phone`, `company_email`, `company_address`, `countrie_id`, `created_at`, `updated_at`, `contact`, `remark`) VALUES
(1, 'SSK Kolakarn Co.,Ltd (14741)', 'ကားအပိုပစ္စည်းများထုတ်လုပ်ခြင်းလုပ်ငန်း', '0966171665', 'skk@gmail.com', 'Samutprakan', '1', '2023-03-11 01:44:56', '2023-03-11 01:46:15', 'Choose N Matchs', 'ကားအပိုပစ္စည်းများထုတ်လုပ်ခြင်းလုပ်ငန်း Company');

-- --------------------------------------------------------

--
-- Table structure for table `passports`
--

CREATE TABLE `passports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_agent_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `join_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owic_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reject_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reject_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reject_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_passport` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_list_id` int(11) DEFAULT NULL,
  `mother_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `go_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `go_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nation_religion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_state` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labour_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_front` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_back` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_expiry_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tatto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smoking` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prominent_sign` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_experience` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selected_country` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labour_card_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_of_labour_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identification_card` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_date_of_id_card` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `son` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `son_age` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daughter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daughter_age` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line_one` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_family` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_of_heir` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relative` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_of_heir` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_cost` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_charges` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_register_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leader` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `passports`
--

INSERT INTO `passports` (`id`, `name`, `father_name`, `nrc`, `date_of_birth`, `passport`, `passport_date`, `local_agent_name`, `phone`, `address`, `gender`, `remark`, `created_at`, `updated_at`, `join_date`, `owic`, `owic_date`, `reject_status`, `reject_date`, `reject_reason`, `place_of_passport`, `agent_list_id`, `mother_name`, `go_date`, `go_reason`, `entry_date`, `nation_religion`, `region_state`, `labour_code`, `age`, `photo`, `nrc_front`, `nrc_back`, `passport_expiry_date`, `qualification`, `weight`, `height`, `tatto`, `smoking`, `alcohol`, `prominent_sign`, `working_experience`, `selected_country`, `labour_card_no`, `issue_of_labour_date`, `identification_card`, `issue_date_of_id_card`, `son`, `son_age`, `daughter`, `daughter_age`, `address_line_one`, `phone_family`, `name_of_heir`, `relative`, `nrc_of_heir`, `passport_cost`, `car_charges`, `passport_register_status`, `user_id`, `marital_status`, `leader`) VALUES
(1, 'YU YA WINT CHAL', 'U WIN NAING', '14/NGA PA TA (N) 240503', '3.3.1999', 'MG 108457', '4.7.2022', NULL, '-', 'NGAPUTAW TSP', 'female', 'NEW', '2022-01-01 12:47:33', '2023-01-18 12:47:33', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'MYAWADDY', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'CHAN NYEIN AUNG', NULL, NULL, '30.9.1996', 'MG 784551', '5.11.2022', '', '-', 'KYAUNGKONE TSP', 'male', 'NEW', '2023-01-18 12:49:02', '2023-03-13 21:57:23', '2023-01-19', NULL, NULL, NULL, '', '', 'YANGON', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'MIN TIN', NULL, NULL, '16.12.1999', 'MG 786769', '5.11.2022', NULL, '-', 'PATHEINGYEE TSP', 'male', 'NEW', '2023-01-18 12:51:00', '2023-01-18 12:52:59', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'HEIN THU AUNG', NULL, NULL, NULL, 'MG 496802', '14.9.2022', NULL, '-', 'KAWLIN TSP', 'male', 'NEW', '2023-02-02 12:55:14', '2023-01-18 12:55:14', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'SAW MYO LIN TUN', NULL, NULL, NULL, 'MG 784559', '5.11.2022', NULL, '-', 'SHWEGYIN TSP', 'male', 'NEW', '2023-01-18 12:58:03', '2023-01-18 12:58:03', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'KHIN YAWAY TUN', 'U TUN TUN SOE', '14/NGA PA TA (N) 230755', '9.1.1999', 'MG 233290', '4.8.2022', NULL, '-', 'NGAPUTAW TSP', 'female', 'NEW', '2023-01-18 13:00:13', '2023-01-18 13:00:13', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'PATHEIN', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'THAE HSU MON', 'U THEIN OO', '14/LA PA TA (N) 230526', '9.7.1999', 'MG 234640', '4.8.2022', NULL, '-', 'NGAPUTAW TSP', 'female', 'NEW', '2023-01-18 13:01:58', '2023-01-18 13:01:58', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'PATHEIN', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'THET PHYO AUNG', 'U WIN NAING', '14/NGA PA TA (N) 283214', '11.3.2001', 'MG 233292', '4.8.2022', NULL, '-', 'NGAPUTAW TSP', 'male', 'NEW', '2023-01-18 13:04:18', '2023-01-18 13:04:18', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'PATHEIN', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'AUNG THU YA TUN', 'U TUN TUN', '14/NGA PA TA (N) 280968', '25.6.2003', 'MG 234639', '4.8.2022', NULL, '-', 'NGAPUTAW TSP', 'male', 'NEW', '2023-01-18 13:05:58', '2023-01-18 13:05:58', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'PATHEIN', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'ZAW ZAW', NULL, NULL, '1.1.1996', 'MG 784554', '5.11.2022', NULL, '-', 'TAUNGTHA TSP', 'male', 'NEW', '2023-01-18 13:09:24', '2023-01-18 13:09:24', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'AUNG AUNG', NULL, NULL, '15.6.1986', 'MG 784553', '5.11.2022', NULL, '-', 'MYINGYAN TSP', 'male', 'NEW', '2023-01-18 13:10:19', '2023-01-18 13:13:01', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'AUNG PIKE', NULL, NULL, '2.1.1978', 'MG 784550', '5.11.2022', NULL, '-', 'TAUNGTHA TSP', 'male', 'NEW', '2023-01-18 13:11:19', '2023-01-18 13:13:51', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'MIN MIN OO', NULL, NULL, '18.12.1987', 'MG 786767', '5.11.2022', NULL, '-', 'MAHLAING TSP', 'male', 'NEW', '2023-01-18 13:12:25', '2023-01-18 13:12:25', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'BO GYI', NULL, NULL, '15.5.1987', 'MG 786651', '5.11.2022', NULL, '-', 'TAUNGTHA TSP', 'male', 'NEW', '2023-01-18 13:15:54', '2023-01-18 13:15:54', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'HTET LIN', NULL, NULL, '8.7.2003', 'MG 784548', '5.11.2022', NULL, '-', 'TAUNGTHA TSP', 'male', 'NEW', '2023-01-18 13:16:52', '2023-01-18 13:16:52', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'SI THU MOE', NULL, NULL, '10.3.1998', 'MG 784555', '5.11.2022', NULL, '-', 'KYAUKSE TSP', 'male', 'NEW', '2023-01-18 13:18:00', '2023-01-18 13:18:00', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'THAN ZAW WIN', NULL, NULL, '16.10.1992', 'MG 784556', '5.11.2022', NULL, '-', 'TAUNGTHA TSP', 'male', 'NEW', '2023-01-18 13:19:19', '2023-01-18 13:19:19', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'KHAING ZIN PHYO', NULL, NULL, '25.3.1998', 'MG 786768', '5.11.2022', NULL, '-', 'TAUNNGTHA TSP', 'male', 'NEW', '2023-01-18 13:20:24', '2023-01-18 13:20:24', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'THEIN MIN OO', NULL, NULL, '19.12.1982', 'MG 784547', '5.11.2022', NULL, '-', 'TAUNGTHA TSP', 'male', 'NEW', '2023-01-18 13:23:20', '2023-01-18 13:23:20', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'WIN THAN OO', NULL, NULL, '18.12.1996', 'MG 784557', '5.11.2022', NULL, '-', 'TAUNGTHA TSP', 'male', 'NEW', '2023-01-18 13:24:55', '2023-01-18 13:24:55', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'HTET OO', NULL, NULL, '12.2.1994', 'MG 784549', '5.11.2022', NULL, '-', 'TAUNGTHA TSP', 'male', 'NEW', '2023-01-18 13:25:51', '2023-01-18 13:25:51', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'SHIN THANT THU', 'U MYINT THU', '14/LA BU TA (N) 321761', '28.2.2004', 'MG 568647', '30.9.2022', NULL, '-', 'LABUTA', 'male', 'NEW', '2023-01-18 13:37:25', '2023-01-18 13:37:25', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'AUNG MOE MIN', NULL, NULL, '12.1.2997', 'MG 054615', '20.6.2022', NULL, '-', 'NGAPE TSP', 'male', 'NEW', '2023-01-18 13:40:12', '2023-01-18 13:40:12', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'MAGWAY', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'KHANT HMUE KO', 'U AYE KO', '7/NYA LA PA (N) 172108', '3.3.1997', 'MH 029455', '29.12.2022', NULL, '-', 'NYAUNGLEBIN TSP', 'male', 'NEW', '2023-01-18 14:14:19', '2023-01-18 14:14:19', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'CHIT PWAR', 'U TUN THEIN', '7/YA KA NA (N) 089999', '21.12.2998', 'MH 029504', '29.12.2022', NULL, '-', 'SHWEGYIN TSP', 'male', 'NEW', '2023-01-18 14:15:49', '2023-01-18 14:15:49', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'AYE MYAT MOE', 'U SHWE HLA WIN', '7/YA KA NA (N) 066860', '25.4.1994', 'MH 029446', '29.12.2022', NULL, '-', 'SHWEGYIN TSP', 'female', 'NEW', '2023-01-18 14:18:59', '2023-01-18 14:18:59', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'KHIN YADANAR OO', 'U SAW TO TO', '7/YA KA NA (N) 081379', '24.4.2003', 'MH 029440', '29.12.2022', NULL, '-', 'SHWEGYIN TSP', 'female', 'NEW', '2023-01-18 14:27:14', '2023-01-18 14:27:14', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'MAY MYAAT NOE', 'U KO KO MAUNG', '7/YA KA NA (N) 081518', '27.8.2022', 'MH 029437', '29.12.2022', NULL, '-', 'SHWEGYIN TSP', 'female', 'NEW', '2023-01-18 14:29:35', '2023-01-18 14:29:35', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'NANDAR SOE', 'U TUN TUN WIN', '7/YA KA NA (N) 081514', '4.8.2004', 'MH 029435', '29.12.2022', NULL, '-', 'SHWEGYIN TSP', 'female', 'NEW', '2023-01-18 14:52:41', '2023-01-18 14:52:41', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'PHYU', 'PHYU HLAING WAI', NULL, '4.7.1993', 'MG 909702', '30.11.2022', NULL, '-', 'NYAUNGLEBIN TSP', 'female', 'NEW', '2023-01-18 14:54:50', '2023-01-18 14:54:50', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'WIN WIN', NULL, NULL, '10.9.1983', 'MG 848572', '17.11.2022', NULL, '-', 'SHWEGYIN TSP', 'male', 'NEW', '2023-01-18 14:57:35', '2023-01-18 14:57:35', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'MYA SU MON', NULL, NULL, '4.3.2004', 'MG 909700', '30.11.2022', NULL, '-', 'SHWEGYIN TSP', 'female', 'NEW', '2023-01-18 14:59:39', '2023-01-18 14:59:39', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'ZAR CHI MOE', NULL, NULL, '26.11.1995', 'MG 909701', '30.11.2022', NULL, '-', 'SHWEGYIN TSP', 'female', 'NEW', '2023-01-18 15:01:49', '2023-01-18 15:01:49', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'WIN PA PA HLAING', NULL, NULL, '5.7.2000', 'MG 909703', '30.11.2022', NULL, '-', 'YANGON TSP', 'female', 'NEW', '2023-01-18 15:02:55', '2023-01-18 15:02:55', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'KYI PYAR LIN', NULL, NULL, '23.3.1993', 'MG 909704', '30.11.2022', NULL, '-', 'SHWEGYIN TSP', 'female', 'NEW', '2023-01-18 15:04:21', '2023-01-18 15:04:21', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'KYAW SAN', NULL, NULL, '2.10.1982', 'MG 568646', '30.9.2022', NULL, '-', 'SHWEGYIN TSP', 'male', 'NEW', '2023-01-18 15:05:26', '2023-01-18 15:05:26', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'CHIT HTOO SAN', NULL, NULL, '22.9.2001', 'MG 568637', '30.9.2022', NULL, '-', 'SHWEGYIN TSP', 'male', 'NEW', '2023-01-18 15:09:26', '2023-01-18 15:09:26', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'KHAING NAN KYI', NULL, NULL, '6.3.1998', 'MG 568638', '30.9.2022', NULL, '-', 'SHWEGYIN TSP', 'female', 'NEW', '2023-01-18 15:17:13', '2023-01-18 15:17:13', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'PYAE PHYO AUNG', NULL, NULL, '5.3.2003', 'MG 568644', '30.9.2022', NULL, '-', 'NYAUNGLEBIN TSP', 'male', 'NEW', '2023-01-18 15:18:16', '2023-01-18 15:18:16', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'KHAING THIN GYI', NULL, NULL, '3.5.1993', 'MG 568648', '30.9.2022', NULL, '-', 'SHWEGYIN TSP', 'female', 'NEW', '2023-01-18 15:19:24', '2023-01-18 15:19:24', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'HTOO MAY PHAW', NULL, NULL, '8.11.1989', 'MG 784546', '5.11.2022', NULL, '-', 'SHWEGYIN TSP', 'female', 'NEW', '2023-01-18 15:20:48', '2023-01-18 15:20:48', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'LWIN LWIN HTWE', NULL, NULL, '5.10.1994', 'MG 786770', '5.11.2022', NULL, '-', 'SHWEGYIN TSP', 'female', 'NEW', '2023-01-18 15:22:07', '2023-01-18 15:22:07', '2023-01-19', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'ZAW NAING WIN', 'U TUN HLA AYE', '11/KA TA NA (N) 160133', '14.1.1997', 'ME 913856', '11.1.2020', NULL, '-', 'KYAUKTAW TSP', 'male', 'OLD', '2023-01-19 07:04:08', '2023-01-19 07:04:08', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'NU NU WAI', 'U KHIN THEIN', '7/KA WA NA (N) 140302', '25.10.1992', 'MD 782519', '6.12.2018', NULL, '-', 'KAWA TSP', 'female', 'OLD', '2023-01-19 07:06:02', '2023-01-19 07:06:02', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'ZAR ZAR AYE', 'U SEIN HTUN', '14/PA MA NA (N) 3167576', '11.12.1997', 'MD 804566', '14.12.2018', NULL, '-', 'MYAUNGMYA TSP', 'female', 'OLD', '2023-01-19 07:07:41', '2023-01-19 07:07:41', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'AUNG SAN WIN', 'U MYA HAN', '12/KHA YA NA (N) 136441', '4.5.1989', 'MD 909139', '24.1.2019', NULL, '-', 'KHAYAN TSP', 'male', 'REACH THAI', '2023-01-19 07:10:09', '2023-01-19 07:10:09', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'PHYO PHYO WAI', 'U HAN WIN ZAW', '12/LHA YA NA (N) 162397', '3.3.1995', 'MD 909147', '24.1.2019', NULL, '-', 'KHAYAN TSP', 'female', 'OLD', '2023-01-19 07:11:37', '2023-01-19 07:11:37', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'AUNG MYO THAN', 'U THAN TUN HLA', '11/KA HTA NA (N) 159007', '21.12.1997', 'ME 913855', '11.1.2020', NULL, '-', 'KYAUKTAW TSP', 'male', 'OLD', '2023-01-19 07:26:21', '2023-01-19 07:26:21', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'YE LIN AUNG', NULL, NULL, '7.12.2002', 'MF 962781', '27.5.2022', NULL, '-', 'TAUNGTHA TSP', 'male', 'NEW', '2023-01-19 07:27:54', '2023-01-19 07:27:54', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'AUNG MYO OO', NULL, NULL, '11.2.1980', 'MG 077435', '27.6.2022', NULL, '-', 'KYAUNGKONE TSP', 'male', 'NEW', '2023-01-19 07:29:36', '2023-01-19 07:29:36', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'PATHEIN TSP', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'NI NI LWIN', NULL, NULL, '7.9.1996', 'MF 496505', '16.12.2021', NULL, '-', 'KYAUNGKONE TSP', 'female', 'NEW', '2023-01-19 07:31:16', '2023-01-19 07:31:16', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'PATHEIN', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'TUN WIN HLAING', 'U SOE THEIN', '14/KA KA NA (N) 120923', '9.1.1995', 'MH 029573', '29.12.2022', NULL, '-', 'KANGYIDAUNT TSP', 'male', 'NEW', '2023-01-19 07:33:35', '2023-01-19 07:33:35', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'ZAW LAT', 'U THAN WIN', '14/KA KA NA (N) 10552', '17.8.1983', 'MH 029578', '29.12.2022', NULL, '-', 'KYAUNGKONE TSP', 'male', 'NEW', '2023-01-19 07:35:19', '2023-01-19 07:35:19', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'ZA', 'ZAW TUN OO', '14/KA KA NA (N) 124238', '17.12.1984', 'MH 029582', '29.12.2022', NULL, '-', 'KYAUNGKONE TSP', 'male', 'NEW', '2023-01-19 07:37:00', '2023-01-19 07:37:00', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'MYO KO OO', 'U MYO AUNG', '14/PA THA NA (N) 316190', '7.6.2022', 'MH 029590', '29.12.2022', NULL, '-', 'PATHEIN TSP', 'male', 'NEW', '2023-01-19 07:38:59', '2023-01-19 07:38:59', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'WIN KO KO TUN', 'U SHWE OO', '14/THA PA NA (N) 124567', '7.12.1994', 'MH 029574', '29.12.2022', NULL, '-', 'THARBAUNG TSP', 'male', 'NEW', '2023-01-19 07:40:43', '2023-01-19 07:40:43', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'KYAW ZIN PHYO', 'U SOE WIN', '14.KA KA NA (N) 120901', '6.8.1995', 'MH 029584', '29.12.2022', NULL, '-', 'KYAUNGKONE TSP', 'male', 'NEW', '2023-01-19 07:43:15', '2023-01-19 07:43:15', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'PYAW HPYO AUNG', 'U KI NYUNT', '14/KA KA NA (N) 144792', '13.12.2000', 'MH 029587', '29.12.2022', NULL, '-', 'KYAUNGKONE TSP', 'male', 'NEW', '2023-01-19 07:45:28', '2023-01-19 07:45:28', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'THU ZAR MYINT', 'U SOE MYINT', '7/AH TA NA (N) 119402', '27.11.1987', 'MH 029596', '29.12.2022', NULL, '-', 'OKTWIN TSP', 'female', 'NEW', '2023-01-19 07:47:33', '2023-01-19 07:47:33', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'PHYO WAI AUNG', 'U ZAW MOE LWIN', '14/KA KA NA (N) 173388', '15.1.2003', 'MG 616343', '12.10.2022', NULL, '-', 'KYAUNGKONE TSP', 'male', 'NEW', '2023-01-19 07:50:25', '2023-01-19 07:50:25', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'TAY ZAR AUNG', 'U TUN LWIN', '12/KHA YA NA (N) 164849', '6.9.2001', 'MG 651440', '15.10.2022', NULL, '-', 'KHAYAN TSP', 'male', 'NEW', '2023-01-19 07:52:44', '2023-01-19 07:52:44', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'HTET LIN AUNG', 'U TUN LWIN', '12/KHA YA NA (N) 130907', '7.9.1996', 'MG 651441', '15.10.2022', NULL, '-', 'KHAYAN TSP', 'male', 'NEW', '2023-01-19 07:54:55', '2023-01-19 07:54:55', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'SOE MIN HTET', 'U ZAW MIN OO', '14/KA KA NA (N) 190309', '2.6.1999', 'MG 616341', '12.10.2022', NULL, '-', 'KYAUNGKONE TSP', 'male', 'NEW', '2023-01-19 07:56:46', '2023-01-19 07:56:46', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'SOE MIN HTET', 'U ZAW MIN OO', '14/KA KA NA (N) 190309', '2.6.1999', 'MG 616341', '12.10.2022', NULL, '-', 'KYAUNGKONE TSP', 'male', 'NEW', '2023-01-19 07:58:40', '2023-01-19 07:58:40', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'ZAW YE', 'U THAN WIN', '14/KA KA NA (N) 161402', '27.1.1992', 'MG 616340', '12.10.1992', NULL, '-', 'KYAUNGKONE TSP', 'male', 'NEW', '2023-01-19 08:08:15', '2023-01-19 08:08:15', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'PHYO WAI SOE', NULL, NULL, '18.8.1997', 'MG 909694', '30.11.2022', NULL, '-', 'KYAUNGKONE TSP', 'male', 'NEW', '2023-01-19 08:11:42', '2023-01-19 08:11:42', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'PHYO WAI AUNG', NULL, NULL, '16.4.1996', 'MG 909714', '30.11.2022', NULL, '-', 'KYAUNGKONE TSP', 'male', 'NEW', '2023-01-19 08:14:26', '2023-01-19 08:14:26', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'THET WAI', NULL, NULL, '26.11.1998', 'MG 848563', '17.11.2022', NULL, '-', 'MAUBIN TSP', 'male', 'NEW', '2023-01-19 08:17:05', '2023-01-19 08:17:05', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'LIN PHYO MAUNG', NULL, NULL, '26.2.2003', 'MG 909695', '30.11.2022', NULL, '-', 'KYAUNGKONE TSP', 'male', 'NEW', '2023-01-19 08:18:13', '2023-01-19 08:18:13', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'THU MAUNG', 'U TUN KYINE', '14/DA NA PHA (N) 158275', '2.1.1990', 'MG 506252', '16.9.2022', NULL, '-', 'DANUBYU TSP', 'male', 'NEW', '2023-01-19 08:20:36', '2023-01-19 08:20:36', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'AUNG PYAR PHYO KYAW', 'U KYAW MOE', '14/DA NA PHA (N) 226222', '31.7.2004', 'MG 506253', '16.9.2022', NULL, '-', 'DANUBYU TSP', 'male', 'NEW', '2023-01-19 08:22:21', '2023-01-19 08:22:21', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'YE YINT KYAW', 'U KYAW HTAY', '14/HA THA TA (N) 253569', '9.5.1995', 'MH 029475', '29.12.2022', NULL, '-', 'HINTHADA TSP', 'male', 'NEW', '2023-01-19 08:30:35', '2023-01-19 08:30:35', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'AUNG PYAE PHYO WIN', 'U AUNG MYINT THEIN', '14/HA THA TA (N) 406948', '31.7.2003', 'MH 029438', '29.12.2022', NULL, '-', 'HINTHADA TSP', 'male', 'NEW', '2023-01-19 08:32:50', '2023-01-19 08:32:50', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'KYAW THET', 'U AUNG SHANE', '8/AH LA NA (N) 238932', '10.6.2022', 'MH 029601', '29.12.2022', NULL, '-', 'AUNGLAN TSP', 'male', 'NEW', '2023-01-19 08:34:25', '2023-01-19 08:34:25', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'AUNG THET PAING', 'U MYO LWIN', '8/AH LA NA (N) 259814', '4.7.2004', 'MH 029480', '29.12.2022', NULL, '-', 'AUNGLAN TSP', 'male', 'NEW', '2023-01-19 08:36:37', '2023-01-19 08:36:37', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'KYAW THU HTET', 'U KHIN MAUNG ZAW', '8/AH LA NA (N) 238852', '1.4.2022', 'MH 029507', '29.12.2022', NULL, '-', 'AUNGLAN TSP', 'male', 'NEW', '2023-01-19 08:38:42', '2023-01-19 08:38:42', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'PA PA SOE', 'U KYI SOE', '8/AH LA NA (N) 241775', '2.12.2998', 'MD 941606', '2.2.2019', NULL, '-', 'AUNGLAN TSP', 'female', 'NEW', '2023-01-19 08:40:23', '2023-01-19 08:40:23', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'THET AUNG', NULL, NULL, '31.5.2985', 'MD 520244', '18.8.2018', NULL, '-', 'AUNGLAN TSP', 'male', 'NEW', '2023-01-19 08:42:49', '2023-01-19 08:42:49', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'AUNG KO WIN', NULL, NULL, '21.9.1985', 'MC 984412', '31.1.2018', NULL, '-', 'AUNGLAN TSP', 'male', 'NEW', '2023-01-19 08:45:35', '2023-01-19 08:45:35', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'ZAR ZAR SOE', 'U KYI SOE', '8/AH LA NA (N) 169612', '19.4.1988', 'MD 941607', '2.2.2019', NULL, '-', 'AUNGLAN TSP', 'female', 'NEW', '2023-01-19 08:47:02', '2023-01-19 08:47:02', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'NWE MAR WIN', 'U TIN HLAING', '8/AH LA NA (N) 163844', '6.8.1995', 'MG 145052', '13.7.2022', NULL, '-', 'AUNGLAN TSP', 'female', 'NEW', '2023-01-19 08:48:58', '2023-01-19 08:48:58', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'MU MU LWIN', 'U MYINT LWIN', '8/AH LA NA (N) 201506', '22.9.1988', 'MF 965834', '28.5.2022', NULL, '-', 'AUNGLAN TSP', 'female', 'NEW', '2023-01-19 08:50:17', '2023-01-19 08:50:55', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'KHIN KYU SWE', 'U TUN LWIN', '8/AH LA NA (N) 224163', '4.5.2000', 'MG 271588', '10.8.2022', NULL, '-', 'AUNGLAN TSP', 'female', 'NEW', '2023-01-19 08:52:42', '2023-01-19 08:52:42', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'THET WAI PHYO', 'U THAN LWIN', '8/AH LA NA (N) 161774', '15.7.1995', 'MG 651430', '15.1.2022', NULL, '-', 'AUNGLAN TSP', 'female', 'NEW', '2023-01-19 08:53:52', '2023-01-19 08:53:52', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'HAN MYO TUN', 'U SEIN TINT', '5/KA LA NA (N) 069553', '28.6.1995', 'MF 932497', '18.5.2022', NULL, '-', 'KYUNHLA TSP', 'male', 'NEW', '2023-01-19 08:58:34', '2023-01-19 08:58:34', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'PHOE LA PYAE', 'U SEIN HLA NGWE', '8/AH LA NA (N) 144124', '7.10.1987', 'MG 145064', '13.7.2022', NULL, '-', 'AUNGLAN TSP', 'male', 'NEW', '2023-01-19 08:59:56', '2023-01-19 08:59:56', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'SOE MOE WIN', 'U HLA TIN', '10/KA HTA NA (N) 177589', '3.8.2000', 'MG 420018', '2.9.2022', NULL, '-', 'KYAIKHTO TSP', 'female', 'NEW', '2023-01-19 09:07:52', '2023-01-19 09:07:52', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'SU MAR', NULL, NULL, '27.2.1993', 'MG 447421', '9.9.2022', NULL, '-', 'KYAIKHTO TSP', 'female', 'NEW', '2023-01-19 09:09:39', '2023-01-19 09:09:39', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'THET MAR WIN', 'U HLA WIN', '10/KA HTA NA (N) 185338', '6.3.2003', 'MG 420017', '2.9.2022', NULL, '-', 'KYAIKHTO TSP', 'female', 'NEW', '2023-01-19 09:10:52', '2023-01-19 09:10:52', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'THAN THAN MOE', 'U HTAY LWIN', '10/BA LA NA (N) 138073', '7.3.1997', 'MG 423491', '3.9.2022', NULL, '-', 'BILIN TSP', 'female', 'NEW', '2023-01-19 09:46:51', '2023-01-19 09:46:51', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'SANDAR KHAING', 'U KYAW SAN', '10/KA HTA NA (N) 179276', '7.10.2003', 'MG 420021', '2.9.2022', NULL, '-', 'KYAIKHTO TSP', 'female', 'NEW', '2023-01-19 09:52:16', '2023-01-19 09:52:16', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'ZIN MI MI ZAW', 'U ZAW WIN', '10/BA LA NA (N) 163968', '13.8.2002', 'MG 423492', '3.9.2022', NULL, '-', 'BILIN TSP', 'female', 'NEW', '2023-01-19 09:55:43', '2023-01-19 09:55:43', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'MA HTWE', 'U MAUNG WIN', '10/KA HTA NA (N) 190290', '18.11.1996', 'MG 423631', '3.9.2022', NULL, '-', 'KYAIKHTO TSP', 'female', 'NEW', '2023-01-19 09:59:00', '2023-01-19 09:59:00', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'WIN ZAW OO', 'U WIN KYAING', '14/NYA TA NA (N) 162178', '2.3.1994', 'MG 412915', '1.9.2022', NULL, '-', 'NYAUNGDON TSP', 'male', 'NEW', '2023-01-19 10:00:56', '2023-01-19 10:03:36', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'AUNG NAING WIN', NULL, NULL, '14.4.1990', 'MG 447423', '9.9.2022', NULL, '-', 'KYAIKHTO TSP', 'male', 'NEW', '2023-01-19 10:07:42', '2023-01-19 10:07:42', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'THA PYAY AUNG', 'U THEIN SINE', '10/KA HTA NA (N) 164751', '11.7.2022', 'MG 038972', '15.6.2022', NULL, '-', 'KYAILHTO TSP', 'male', 'NEW', '2023-01-19 10:09:50', '2023-01-19 10:09:50', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'NAING ZIN', 'U HTUN NYUNT', '10/KA HTA NA (N) 196883', '11.11.1997', 'MG 042018', '16.6.2022', NULL, '-', 'KYAIKHTO TSP', 'male', 'NEW', '2023-01-19 10:13:44', '2023-01-19 10:13:44', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'ZIN MIN AUNG', 'U AUNG NAING WIN', '10/KA HTA NA (N) 187856', '25.5.2003', 'MG 419760', '2.9.2022', NULL, '-', 'KYAIKHTO TSP', 'male', 'NEW', '2023-01-19 10:16:04', '2023-01-19 10:16:04', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'MYO MYINT NAING', 'U KYAW MIN NAING', '10/KA HTA NA (N) 178442', '27.12.2001', 'MG 420019', '2.9.2022', NULL, '-', 'KYAIKHTO TSP', 'male', 'NEW', '2023-01-19 10:20:13', '2023-01-19 10:20:13', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'HTAY HTAY WIN', 'U MYINT THEIN', '10/KA HTA NA (N) 140423', '5.4.1997', 'MG 150043', '14.7.2022', NULL, '-', 'KYAIKHTO TSP', 'female', 'NEW', '2023-01-19 10:26:32', '2023-01-19 10:26:32', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'TOKE LOE KO', 'U TIN THEIN', '10/BA LA NA (N) 2204392', '23.8.1992', 'ME 425460', '19.7.2019', NULL, '-', 'BILIN TSP', 'male', 'NEW', '2023-01-19 10:28:39', '2023-01-19 10:28:39', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'AYE MYA OO', NULL, NULL, '17.8.2003', 'MG 447422', '9.9.2022', NULL, '-', 'KYAIKHTO TSP', 'female', 'NEW', '2023-01-19 15:02:42', '2023-01-19 15:02:42', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'PO PO CHIT', 'U CHIT NGWE', '10/KA HTA NA (N) 178856', '29.7.2022', 'MG 420013', '2.9.2022', NULL, '-', 'KYAIKHTO TSP', 'female', 'NEW', '2023-01-19 15:04:01', '2023-01-19 15:04:01', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGION', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `passports` (`id`, `name`, `father_name`, `nrc`, `date_of_birth`, `passport`, `passport_date`, `local_agent_name`, `phone`, `address`, `gender`, `remark`, `created_at`, `updated_at`, `join_date`, `owic`, `owic_date`, `reject_status`, `reject_date`, `reject_reason`, `place_of_passport`, `agent_list_id`, `mother_name`, `go_date`, `go_reason`, `entry_date`, `nation_religion`, `region_state`, `labour_code`, `age`, `photo`, `nrc_front`, `nrc_back`, `passport_expiry_date`, `qualification`, `weight`, `height`, `tatto`, `smoking`, `alcohol`, `prominent_sign`, `working_experience`, `selected_country`, `labour_card_no`, `issue_of_labour_date`, `identification_card`, `issue_date_of_id_card`, `son`, `son_age`, `daughter`, `daughter_age`, `address_line_one`, `phone_family`, `name_of_heir`, `relative`, `nrc_of_heir`, `passport_cost`, `car_charges`, `passport_register_status`, `user_id`, `marital_status`, `leader`) VALUES
(104, 'AYE AYE MYINT', 'U TIN OO', '10/KA HTA NA (N) 154240', '23.8.1999', 'MG 038968', '15.6.2022', NULL, '-', 'KYAIKHTO TSP', 'female', 'NEW', '2023-01-19 15:05:29', '2023-01-19 15:05:29', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'AYE CHAN MAY', 'U MYA SOE', '10/KA HTA NA (N) 164661', '4.5.2000', 'MG 420016', '2.9.2022', NULL, '-', 'KYAIKHTO TSP', 'female', 'NEW', '2023-01-19 15:06:45', '2023-01-19 15:06:45', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'SANDAR LIN', 'U KYAW MYINT', '10/KA HTA NA (N) 148564', '4.6.1998', 'MG 145050', '13.7.2022', NULL, '-', 'KYAIKHTO TSP', 'female', 'NEW', '2023-01-19 15:08:07', '2023-01-19 15:08:07', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'WIN ZAW OO', 'U WIN KYAING', '14/NYA TA NA (N) 162178', '1.3.2994', 'MG 412915', '1.9.2022', NULL, '-', 'NYAUNGDON TSP', 'male', 'NEW', '2023-01-19 15:19:27', '2023-01-19 15:19:27', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'AUNG NAING WIN', NULL, NULL, '14.4.1990', 'MG 447423', '9.9.2022', NULL, '-', 'KYAIKHTO TSP', 'male', 'NEW', '2023-01-19 15:21:02', '2023-01-19 15:21:02', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'THA PYAY AUNG', NULL, NULL, '11.7.2003', 'MG 038972', '15.6.2022', NULL, '-', 'KYAIKHTO TSP', 'male', 'NEW', '2023-01-19 15:26:13', '2023-01-19 15:26:13', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'NAING ZIN', 'U TUN NYUNT', '10/KA HTA NA (N) 196883', '11.10.1997', 'MG 042018', '16.6.2022', NULL, '-', 'KYAIKHTO TSP', 'male', 'NEW', '2023-01-19 15:27:48', '2023-01-19 15:27:48', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'ZIN MIN AUNG', 'U AUNG NAING WIN', '10/KA HTA NA (N) 187856', '25.5.2003', 'MG 419760', 'YANGON', NULL, '-', 'KYAIKHTO TSP', 'male', 'NEW', '2023-01-19 15:29:33', '2023-01-19 15:29:33', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'MYO MYINT NAING', 'U KYAW MIN NAING', '10/KA HTA NA (N) 178442', '27.12.2001', 'MG 420019', '2.9.2022', NULL, '-', 'KYAIKHTO TSP', 'male', 'NEW', '2023-01-19 15:30:58', '2023-01-19 15:30:58', '2023-01-20', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `passport_payments`
--

CREATE TABLE `passport_payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `deposit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `passport_payment_files`
--

CREATE TABLE `passport_payment_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `deposit_file_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_file_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_payment_id` int(11) DEFAULT NULL,
  `passport_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`, `status`) VALUES
(1, 'agent_lists', 'web', '2023-03-06 23:41:34', '2023-03-06 23:42:11', 'module'),
(2, 'labour_manage', 'web', '2023-03-07 00:38:00', '2023-03-07 00:38:00', 'module'),
(3, 'labour_payment', 'web', '2023-03-07 00:38:08', '2023-03-07 00:38:08', 'module'),
(4, 'demand', 'web', '2023-03-07 00:38:13', '2023-03-07 00:38:13', 'module'),
(5, 'contract', 'web', '2023-03-07 00:38:17', '2023-03-07 00:38:17', 'module'),
(6, 'sending', 'web', '2023-03-07 00:38:21', '2023-03-07 00:38:21', 'module'),
(7, 'file_manager', 'web', '2023-03-07 00:54:20', '2023-03-07 00:54:20', 'module'),
(8, 'overseas_agent', 'web', '2023-03-07 00:56:50', '2023-03-07 00:56:50', 'module');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `region` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_mm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `region`, `region_mm`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Yangon Region', 'ရန်ကုန်', '1', NULL, NULL),
(2, 'Mandalay Region', 'မန္တလေးတိုင်းဒေသကြီး', '1', NULL, NULL),
(3, 'Nay Pyi Taw', 'နေပြည်တော်', '1', NULL, NULL),
(4, 'Bago Region', 'ပဲခူးတိုင်းဒေသကြီး', '1', NULL, NULL),
(5, 'Ayeyarwady Region', 'ဧရာဝတီတိုင်းဒေသကြီး', '1', NULL, NULL),
(6, 'Magway Region', 'မကွေးတိုင်းဒေသကြီး', '1', NULL, NULL),
(7, 'Sagaing Region', 'စစ်ကိုင်းတိုင်းဒေသကြီ', '1', NULL, NULL),
(8, 'Tanintharyi Region', 'တနင်္သာရီတိုင်းဒေသကြီ', '1', NULL, NULL),
(9, 'Shan State', 'ရှမ်းပြည်နယ်', '1', NULL, NULL),
(10, 'Kayin State', 'ကရင်ပြည်နယ်', '1', NULL, NULL),
(11, 'Mon State', 'မွန်ပြည်နယ်', '1', NULL, NULL),
(12, 'Rakhine State', 'ရခိုင်ပြည်နယ်', '1', NULL, NULL),
(13, 'Chin State', 'ချင်းပြည်နယ်', '1', NULL, NULL),
(14, 'Kachin State', 'ကချင်ပြည်နယ်', '1', NULL, NULL),
(15, 'Kayah State', 'ကယားပြည်နယ်', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-03-07 00:41:00', '2023-03-07 00:42:03'),
(2, 'Labour Entry', 'web', '2023-03-07 00:42:30', '2023-03-07 00:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sendings`
--

CREATE TABLE `sendings` (
  `id` int(10) UNSIGNED NOT NULL,
  `sending_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sending_male` int(11) DEFAULT NULL,
  `sending_female` int(11) DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sendings`
--

INSERT INTO `sendings` (`id`, `sending_date`, `sending_male`, `sending_female`, `remark`, `demand_id`, `contract_id`, `created_at`, `updated_at`) VALUES
(1, '21.3.2022', 2, 2, 'First Sending', 1, 1, '2023-03-13 21:19:24', '2023-03-13 21:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `townships`
--

CREATE TABLE `townships` (
  `id` int(10) UNSIGNED NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `township` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `townships_mm` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `townships`
--

INSERT INTO `townships` (`id`, `region_id`, `township`, `townships_mm`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lanmadaw', 'လမ်းမတော်', '1', NULL, NULL),
(2, 1, 'Latha', 'လသာ', '1', NULL, NULL),
(3, 1, 'Kyauktada', 'ကျောက်တံတား', '1', NULL, NULL),
(4, 1, 'Pabedan', 'ပန်းပဲတန်း', '1', NULL, NULL),
(5, 1, 'Pazundaung', 'ပုဇွန်တောင်', '1', NULL, NULL),
(6, 1, 'Ahlone', 'အလုံ', '1', NULL, NULL),
(7, 1, 'Kyeemyindaing', 'ကြည့်မြင်တိုင်', '1', NULL, NULL),
(8, 1, 'Sanchaung', 'စမ်းချောင်း', '1', NULL, NULL),
(9, 1, 'Bahan', 'ဗဟန်း', '1', NULL, NULL),
(10, 1, 'Botahtaung', 'ဗိုလ်တထောင်', '1', NULL, NULL),
(11, 1, 'Mingalartaungnyunt', 'မင်္ဂလာတောင်ညွန့်', '1', NULL, NULL),
(12, 1, 'Tamwe', 'တာမွေ', '1', NULL, NULL),
(13, 1, 'Yankin', 'ရန်ကင်း', '1', NULL, NULL),
(14, 1, 'Dagon', 'ဒဂုံ', '1', NULL, NULL),
(15, 1, 'East Dagon', 'ဒဂုံမြို့သစ် အရှေ့ပိုင်း', '1', NULL, NULL),
(16, 1, 'North Dagon', 'ဒဂုံမြို့သစ် မြောက်ပိုင်း', '1', NULL, NULL),
(17, 1, 'South Dagon', 'ဒဂုံမြို့သစ် တောင်ပိုင်း', '1', NULL, NULL),
(18, 1, 'Dagon Seikkan', 'ဒဂုံမြို့သစ် ဆိပ်ကမ်း', '1', NULL, NULL),
(19, 1, 'Kamaryut', 'ကမာရွတ်', '1', NULL, NULL),
(20, 1, 'Insein', 'အင်းစိန်', '1', NULL, NULL),
(21, 1, 'Hlaing', 'လှိုင်', '1', NULL, NULL),
(22, 1, 'Hlaingtharya', 'လှိုင်သာယာ', '1', NULL, NULL),
(23, 1, 'Mayangone', 'မရမ်းကုန်း', '1', NULL, NULL),
(24, 1, 'Mingaladon', 'မင်္ဂလာဒုံ', '1', NULL, NULL),
(25, 1, 'North Okkalapa', 'မြောက်ဥက္ကလာပ', '1', NULL, NULL),
(26, 1, 'South Okkalapa', 'တောင်ဥက္ကလာပ', '1', NULL, NULL),
(27, 1, 'Thingangyun', 'သင်္ဃန်းကျွန်း', '1', NULL, NULL),
(28, 1, 'Thaketa', 'သာကေတ', '1', NULL, NULL),
(29, 1, 'Thanlyin', 'သံလျင်', '1', NULL, NULL),
(30, 1, 'Dala', 'ဒလ', '1', NULL, NULL),
(31, 1, 'Dawbon', 'ဒေါပုံ', '1', NULL, NULL),
(32, 1, 'Hmawbi', 'မှော်ဘီ', '1', NULL, NULL),
(33, 1, 'Hlegu', 'လှည်းကူး', '1', NULL, NULL),
(34, 1, 'Htantabin', 'ထန်းတပင်', '1', NULL, NULL),
(35, 1, 'Kawhmu', 'ကော့မှူး', '1', NULL, NULL),
(36, 1, 'Kayan', 'ခရမ်း', '1', NULL, NULL),
(37, 1, 'Kungyangon', 'ကွမ်းခြံကုန်း', '1', NULL, NULL),
(38, 1, 'Shwepyithar', 'ရွှေပြည်သာ', '1', NULL, NULL),
(39, 1, 'Taikkyi', 'တိုက်ကြီး', '1', NULL, NULL),
(40, 1, 'Thongwa', 'သုံးခွ', '1', NULL, NULL),
(41, 1, 'Twantay', 'တွံ့တေး', '1', NULL, NULL),
(42, 1, 'Kyauktan', 'ကျောက်တန်း', '1', NULL, NULL),
(43, 1, 'Seikgyikanaungto', 'ဆိပ်ကြီးခနောင်တို', '1', NULL, NULL),
(44, 1, 'Palae Myothit', 'ပုလဲမြို့သစ်', '1', NULL, NULL),
(45, 2, 'Aung Myay Thar Zan', 'အောင်မြေသာဇံ', '1', NULL, NULL),
(46, 2, 'Chan Aye Thar Zan', 'ချမ်းအေးသာဇံ', '1', NULL, NULL),
(47, 2, 'Mahar Aung Myay', 'မဟာအောင်မြေ', '1', NULL, NULL),
(48, 2, 'Chan Mya Thar Si', 'ချမ်းမြသာစည်', '1', NULL, NULL),
(49, 2, 'Pyi Gyi Tan Kon', 'ပြည်ကြီးတံခွန်', '1', NULL, NULL),
(50, 2, 'Amarapura', 'အမရပူရ', '1', NULL, NULL),
(51, 2, 'Pa Thein Gyi', 'ပုသိမ်ကြီး', '1', NULL, NULL),
(52, 2, 'Pyin Oo Lwin', 'ပြင်ဦးလွင်', '1', NULL, NULL),
(53, 2, 'Madaya', 'မတ္တရာ', '1', NULL, NULL),
(54, 2, 'Singu', 'စဉ့်ကူး', '1', NULL, NULL),
(55, 2, 'Thabeikkyin', 'Thabeikkyin', '1', NULL, NULL),
(56, 2, 'Mogok', 'မိုးကုတ်', '1', NULL, NULL),
(57, 2, 'Kyaukpadaung', 'ကျောက်ပန်းတောင်း', '1', NULL, NULL),
(58, 2, 'Kyaukse', 'ကျောက်ဆည်', '1', NULL, NULL),
(59, 2, 'Sintgaing', 'စဉ့်ကိုင်', '1', NULL, NULL),
(60, 2, 'Myittha', 'မြစ်သား', '1', NULL, NULL),
(61, 2, 'Tada-U', 'တံတားဦး', '1', NULL, NULL),
(62, 2, 'Myingyan', 'မြင်းခြံ', '1', NULL, NULL),
(63, 2, 'Thaungtha', 'တောင်သာ', '1', NULL, NULL),
(64, 2, 'Natogyi', 'နွားထိုးကြီး', '1', NULL, NULL),
(65, 2, 'Nyaung-U', 'ညောင်ဦး', '1', NULL, NULL),
(66, 2, 'Meiktila', 'မိတ္ထီလာ', '1', NULL, NULL),
(67, 2, 'Mahlaing', 'မလှိုင်', '1', NULL, NULL),
(68, 2, 'Thazi', 'သာစည်', '1', NULL, NULL),
(69, 2, 'Wundwin', 'ဝမ်းတွင်း', '1', NULL, NULL),
(70, 2, 'Pyawbwe', 'ပျော်ဘွယ်', '1', NULL, NULL),
(71, 2, 'Yamethin', 'ရမည်းသင်း', '1', NULL, NULL),
(72, 3, 'Pyinmana', 'ပျဉ်းမနား', '1', NULL, NULL),
(73, 3, 'Tatkon', 'တပ်ကုန်း', '1', NULL, NULL),
(74, 3, 'Lewe', 'လယ်ဝေး', '1', NULL, NULL),
(75, 3, 'Dekkhinathiri', 'ဒက္ခိဏသီရိ', '1', NULL, NULL),
(76, 3, 'Ottarathiri', 'ဥတ္တရသီရိ', '1', NULL, NULL),
(77, 3, 'Pobbathiri', 'ပုပ္ဗသီရိ', '1', NULL, NULL),
(78, 3, 'Zabuthiri', 'ဇမ္မူသီရိ', '1', NULL, NULL),
(79, 3, 'Zeyathiri', 'ဇေယျာသီရိ', '1', NULL, NULL),
(80, 4, 'Bago', 'ပဲခူး', '1', NULL, NULL),
(81, 4, 'Daik-U', 'ဒိုက်ဦး', '1', NULL, NULL),
(82, 4, 'Kawa', 'ကဝ', '1', NULL, NULL),
(83, 4, 'Thanatpin', 'သနပ်ပင်', '1', NULL, NULL),
(84, 4, 'Waw', 'ဝေါ', '1', NULL, NULL),
(85, 4, 'Nyaunglebin', 'ညောင်လေးပင်', '1', NULL, NULL),
(86, 4, 'Shwegyin', 'ရွှေကျင်', '1', NULL, NULL),
(87, 4, 'Pyay', 'ပြည်', '1', NULL, NULL),
(88, 4, 'Paukkaung', 'ပေါက်ခေါင်း', '1', NULL, NULL),
(89, 4, 'Thegon', 'သဲကုန်း', '1', NULL, NULL),
(90, 4, 'Shwedaung', 'ရွှေတောင်', '1', NULL, NULL),
(91, 4, 'Padaung', 'ပန်းတောင်း', '1', NULL, NULL),
(92, 4, 'Paungde', 'ပေါင်းတည်', '1', NULL, NULL),
(93, 4, 'Nattalin', 'နတ်တလင်း', '1', NULL, NULL),
(94, 4, 'Zigon', 'ဇီးကုန်း', '1', NULL, NULL),
(95, 4, 'Tharrawaddy', 'သာယာဝတီ', '1', NULL, NULL),
(96, 4, 'Gyobingauk', 'ကြို့ပင်ကောက်', '1', NULL, NULL),
(97, 4, 'Letpadan', 'လက်ပံတန်း', '1', NULL, NULL),
(98, 4, 'Minhla', 'မင်းလှ', '1', NULL, NULL),
(99, 4, 'Monyo', 'မိုးညို', '1', NULL, NULL),
(100, 4, 'Okpho', 'အုတ်ဖို', '1', NULL, NULL),
(101, 4, 'Taungoo', 'တောင်ငူ', '1', NULL, NULL),
(102, 4, 'Oktwin', 'အုတ်တွင်း', '1', NULL, NULL),
(103, 4, 'Tantabin', 'ထန်းတပင်', '1', NULL, NULL),
(104, 4, 'Yedashe', 'ရေတာရှည်', '1', NULL, NULL),
(105, 4, 'Pyu', 'ဖြူ း', '1', NULL, NULL),
(106, 4, 'Kyauktaga', 'ကျောက်တံခါး', '1', NULL, NULL),
(107, 4, 'Kyaukkyi', 'ကျောက်ကြီး', '1', NULL, NULL),
(108, 4, 'Hpa Yar Gyi', 'ဘုရားကြီး', '1', NULL, NULL),
(109, 5, 'Bogale', 'ဘိုကလေး', '1', NULL, NULL),
(110, 5, 'Danubyu', 'ဓနုဖြူ', '1', NULL, NULL),
(111, 5, 'Einme', 'အိမ်မဲ', '1', NULL, NULL),
(112, 5, 'Hinthada', 'ဟင်္သာတ', '1', NULL, NULL),
(113, 5, 'Ingapu', 'အင်္ဂပူ', '1', NULL, NULL),
(114, 5, 'Kangyidaunt', 'ကန်ကြီးထောင့်', '1', NULL, NULL),
(115, 5, 'Kyaiklat', 'ကျိုက်လတ်', '1', NULL, NULL),
(116, 5, 'Kyangin', 'ကြံခင်း', '1', NULL, NULL),
(117, 5, 'Kyaunggon', 'ကျောင်းကုန်း', '1', NULL, NULL),
(118, 5, 'Kyonpyaw', 'ကျုံပျော်', '1', NULL, NULL),
(119, 5, 'Labutta', 'လပွတ္တာ', '1', NULL, NULL),
(120, 5, 'Lemyethna', 'လေးမျက်နှာ', '1', NULL, NULL),
(121, 5, 'Maubin', 'မအူပင်', '1', NULL, NULL),
(122, 5, 'Mawlamyinegyun', 'မော်လမြိုင်ကျွန်း', '1', NULL, NULL),
(123, 5, 'Myanaung', 'မြန်အောင်', '1', NULL, NULL),
(124, 5, 'Myaungmya', 'မြောင်းမြ', '1', NULL, NULL),
(125, 5, 'Ngapudaw', 'ငပုတော', '1', NULL, NULL),
(126, 5, 'Nyaungdon', 'ညောင်တုန်း', '1', NULL, NULL),
(127, 5, 'Pantanaw', 'ပန်းတနော်', '1', NULL, NULL),
(128, 5, 'Pathein', 'ပုသိမ်', '1', NULL, NULL),
(129, 5, 'Pyapon', 'ဖျာပုံ', '1', NULL, NULL),
(130, 5, 'Thabaung', 'သာပေါင်း', '1', NULL, NULL),
(131, 5, 'Wakema', 'ဝါးခယ်မ', '1', NULL, NULL),
(132, 5, 'Yegyi', 'ရေကြည်', '1', NULL, NULL),
(133, 5, 'Zalun', 'ဇလွန်', '1', NULL, NULL),
(134, 6, 'Aunglan', 'အောင်လံ', '1', NULL, NULL),
(135, 6, 'Chauk', 'ချောက်', '1', NULL, NULL),
(136, 6, 'Gangaw', 'ဂန့်ဂေါ', '1', NULL, NULL),
(137, 6, 'Kamma', 'ကံမ', '1', NULL, NULL),
(138, 6, 'Magway', 'မကွေး', '1', NULL, NULL),
(139, 6, 'Minbu', 'မင်းဘူး', '1', NULL, NULL),
(140, 6, 'Mindon', 'မင်းတုန်း', '1', NULL, NULL),
(141, 6, 'Minhla', 'မင်းလှ', '1', NULL, NULL),
(142, 6, 'Myaing', 'မြိုင်', '1', NULL, NULL),
(143, 6, 'Myothit', 'မြို့သစ်', '1', NULL, NULL),
(144, 6, 'Natmauk', 'နတ်မောက်', '1', NULL, NULL),
(145, 6, 'Ngape', 'ငဖဲ', '1', NULL, NULL),
(146, 6, 'Pakokku', 'ပခုက္ကူ', '1', NULL, NULL),
(147, 6, 'Pauk', 'ပေါက်', '1', NULL, NULL),
(148, 6, 'Pwintbyu', 'ပွင့်ဖြူ', '1', NULL, NULL),
(149, 6, 'Salin', 'စလင်း', '1', NULL, NULL),
(150, 6, 'Saw', 'ဆော', '1', NULL, NULL),
(151, 6, 'Seikphyu', 'ဆိပ်ဖြူ', '1', NULL, NULL),
(152, 6, 'Sidoktaya', 'စေတုတ္တရာ', '1', NULL, NULL),
(153, 6, 'Sinbaungwe', 'ဆင်ပေါင်ဝဲ', '1', NULL, NULL),
(154, 6, 'Taungdwingyi', 'တောင်တွင်းကြီး', '1', NULL, NULL),
(155, 6, 'Thayet', 'သရပ်', '1', NULL, NULL),
(156, 6, 'Tilin', 'ထီးလင်း', '1', NULL, NULL),
(157, 6, 'Yenangyaung', 'ရေနံချောင်း', '1', NULL, NULL),
(158, 6, 'Yesagyo', 'ရေစကြို', '1', NULL, NULL),
(159, 7, 'Sagaing', 'စစ်ကိုင်း', '1', NULL, NULL),
(160, 7, 'Monywa', 'မုံရွာ', '1', NULL, NULL),
(161, 7, 'Shwebo', 'ရွှေဘို', '1', NULL, NULL),
(162, 7, 'Tabayin', 'ဒီပဲယင်း', '1', NULL, NULL),
(163, 7, 'Katha', 'ကသာ', '1', NULL, NULL),
(164, 7, 'Ayadaw', 'အရာတော်', '1', NULL, NULL),
(165, 7, 'Banmauk', 'ဗန်းမောက်', '1', NULL, NULL),
(166, 7, 'Budalin', 'မုတလင်', '1', NULL, NULL),
(167, 7, 'Chaung-U', 'ချောင်ဦး', '1', NULL, NULL),
(168, 7, 'Hkamti', 'ခန္တီး', '1', NULL, NULL),
(169, 7, 'Homalin', 'ဟုမ္မလင်း', '1', NULL, NULL),
(170, 7, 'Indaw', 'အင်းတော်', '1', NULL, NULL),
(171, 7, 'Kale', 'ကလေး', '1', NULL, NULL),
(172, 7, 'Kalewa', 'ကလေးဝ', '1', NULL, NULL),
(173, 7, 'kanbalu', 'ကန့်ဘလူ', '1', NULL, NULL),
(174, 7, 'Kani', 'ကနီး', '1', NULL, NULL),
(175, 7, 'Kawlin', 'ကောလင်း', '1', NULL, NULL),
(176, 7, 'Khin-U', 'ခင်ဦး', '1', NULL, NULL),
(177, 7, 'Kyunhla', 'ကျွန်းလှ', '1', NULL, NULL),
(178, 7, 'Lahe', 'လဟယ်', '1', NULL, NULL),
(179, 7, 'Mawlaik', 'မော်လိုက်', '1', NULL, NULL),
(180, 7, 'Mingin', 'မင်းကင်း', '1', NULL, NULL),
(181, 7, 'Myaung', 'မြိုင်', '1', NULL, NULL),
(182, 7, 'Myinmu', 'မြင်းမူ', '1', NULL, NULL),
(183, 7, 'Nanyun', 'နန်းယွန်း', '1', NULL, NULL),
(184, 7, 'Pale', 'ပုလဲ', '1', NULL, NULL),
(185, 7, 'Paungbyin', 'ဖောင်းပြင်', '1', NULL, NULL),
(186, 7, 'Pinlebu', 'ပင်လယ်ဘူး', '1', NULL, NULL),
(187, 7, 'Salingyi', 'ဆားလင်းကြီး', '1', NULL, NULL),
(188, 7, 'Tamu', 'တမူး', '1', NULL, NULL),
(189, 7, 'Taze', 'တန့်ဆည်', '1', NULL, NULL),
(190, 7, 'Tigyaing', 'ထီးချိုင့်', '1', NULL, NULL),
(191, 7, 'Wetlet', 'ဝက်လက်', '1', NULL, NULL),
(192, 7, 'Wuntho', 'ဝန်းသို', '1', NULL, NULL),
(193, 7, 'Ye-U', 'ရေဦး', '1', NULL, NULL),
(194, 7, 'Yinmabin', 'ယင်းမာပင်', '1', NULL, NULL),
(195, 8, 'Dawei', 'ထားဝယ်', '1', NULL, NULL),
(196, 8, 'Kawthoung', 'ကော့သောင်း', '1', NULL, NULL),
(197, 8, 'Myeik', 'မြိတ်', '1', NULL, NULL),
(198, 8, 'Bokpyin', 'ဘုတ်ပြင်း', '1', NULL, NULL),
(199, 8, 'Kyunsu', 'ကျွန်းစု', '1', NULL, NULL),
(200, 8, 'Palaw', 'ပူလော', '1', NULL, NULL),
(201, 8, 'Tanintharyi', 'တနင်္သာရီ', '1', NULL, NULL),
(202, 8, 'Thayetchaung', 'သရက်ချောင်း', '1', NULL, NULL),
(203, 8, 'Yebyu', 'ရေဖြူ', '1', NULL, NULL),
(204, 9, 'Taunggyi', 'တောင်ကြီး', '1', NULL, NULL),
(205, 9, 'Kalaw', 'ကလော', '1', NULL, NULL),
(206, 9, 'Aung Ban', 'အောင်ပန်း', '1', NULL, NULL),
(207, 9, 'Kengtung', 'ကျိုင်းတုံ', '1', NULL, NULL),
(208, 9, 'Tachileik', 'တာချီလိတ်', '1', NULL, NULL),
(209, 9, 'Hsipaw', 'သီပေါ', '1', NULL, NULL),
(210, 9, 'Kyuakme', 'ကျောက်မဲ', '1', NULL, NULL),
(211, 9, 'Lashio', 'လားရှိုး', '1', NULL, NULL),
(212, 9, 'Muse', 'မူဆယ်', '1', NULL, NULL),
(213, 9, 'Nawnghkio', 'နောင်ချို', '1', NULL, NULL),
(214, 9, 'Hopong', 'ဟိုပုံး', '1', NULL, NULL),
(215, 9, 'Loilen', 'လွိုင်လင်', '1', NULL, NULL),
(216, 9, 'Nyaungshwe', 'ညောင်ရွှေ', '1', NULL, NULL),
(217, 9, 'Pindaya', 'ပင်းတယ', '1', NULL, NULL),
(218, 9, 'Pinlaung', 'ပင်လောင်း', '1', NULL, NULL),
(219, 9, 'Matman', 'မက်မန်း', '1', NULL, NULL),
(220, 9, 'Monghpyak', 'မိုင်းဖြတ်', '1', NULL, NULL),
(221, 9, 'Monghsat', 'မိုင်းဆတ်', '1', NULL, NULL),
(222, 9, 'Mongkhet', 'မိုင်းခတ်', '1', NULL, NULL),
(223, 9, 'Mongla', 'မိုင်းလား', '1', NULL, NULL),
(224, 9, 'Mongping', 'မိုင်းပြင်း', '1', NULL, NULL),
(225, 9, 'Mongton', 'မိုင်းတုန်း', '1', NULL, NULL),
(226, 9, 'Mongyang', 'မိုင်းယန်း', '1', NULL, NULL),
(227, 9, 'Mongyawng', 'မိုင်းယောင်း', '1', NULL, NULL),
(228, 9, 'Hopang', 'ဟိုပန်', '1', NULL, NULL),
(229, 9, 'Hseni', 'သိန္နီ', '1', NULL, NULL),
(230, 9, 'Konkyan', 'ကုန်းကြမ်း', '1', NULL, NULL),
(231, 9, 'Kunlong', 'ကွမ်းလုံ', '1', NULL, NULL),
(232, 9, 'Kutkai', 'ကွတ်ခိုင်', '1', NULL, NULL),
(233, 9, 'Laukkaing', 'လောက်ကိုင်', '1', NULL, NULL),
(234, 9, 'Mabein', 'မဘိန်း', '1', NULL, NULL),
(235, 9, 'Mongmao', 'မိုင်းမော', '1', NULL, NULL),
(236, 9, 'Mongmit', 'မိုးမိတ်', '1', NULL, NULL),
(237, 9, 'Mongyai', 'မိုင်းရယ်', '1', NULL, NULL),
(238, 9, 'Namhsan', 'နမ့်ဆန်', '1', NULL, NULL),
(239, 9, 'Namtu', 'နမ္မတူ', '1', NULL, NULL),
(240, 9, 'Nanhkan', 'နမ့်ခမ်း', '1', NULL, NULL),
(241, 9, 'Pangsang', 'ပန်ဆန်း', '1', NULL, NULL),
(242, 9, 'Pangwaun', 'ပန်ဝိုင်', '1', NULL, NULL),
(243, 9, 'Tangyan', 'တန့်ယန်း', '1', NULL, NULL),
(244, 9, 'Hsihseng', 'ဆီဆိုင်', '1', NULL, NULL),
(245, 9, 'Kunhing', 'ကွန်ဟိန်း', '1', NULL, NULL),
(246, 9, 'Kyethi', 'ကျေးသီး', '1', NULL, NULL),
(247, 9, 'Laihka', 'လဲချား', '1', NULL, NULL),
(248, 9, 'Langkho', 'လင်းခေး', '1', NULL, NULL),
(249, 9, 'Lawksawk', 'ရပ်စောက်', '1', NULL, NULL),
(250, 9, 'Mawkmai', 'မောက်မယ်', '1', NULL, NULL),
(251, 9, 'Monghsu', 'မိုင်းရှုး', '1', NULL, NULL),
(252, 9, 'Mongkaung', 'မိုင်းကောင်း', '1', NULL, NULL),
(253, 9, 'Mongnai', 'မိုးနဲ', '1', NULL, NULL),
(254, 9, 'Mongpan', 'မိုင်းပန်', '1', NULL, NULL),
(255, 9, 'Nansang', 'နမ့်စန်', '1', NULL, NULL),
(256, 9, 'Pekon', 'ဖယ်ခုံ', '1', NULL, NULL),
(257, 9, 'Ywangan', 'ရွာငံ', '1', NULL, NULL),
(258, 10, 'Hpa-An', 'ဘားအံ', '1', NULL, NULL),
(259, 10, 'Kawkareik', 'ကော့ကရိတ်', '1', NULL, NULL),
(260, 10, 'Myawaddy', 'မြဝတီ', '1', NULL, NULL),
(261, 10, 'Thandaung', 'သံတောင်', '1', NULL, NULL),
(262, 10, 'Hlaingbwe', 'လှိုင်းဘွဲ့', '1', NULL, NULL),
(263, 10, 'Hpapun', 'ဖာပွန်', '1', NULL, NULL),
(264, 10, 'Kyain Seikgyi', 'ကြာအင်းဆိပ်ကြီး', '1', NULL, NULL),
(265, 11, 'Kyaikto', 'ကျိုက်ထို', '1', NULL, NULL),
(266, 11, 'Mawlamyine', 'မော်လမြိုင်', '1', NULL, NULL),
(267, 11, 'Thaton', 'သထုံ', '1', NULL, NULL),
(268, 11, 'Bilin', 'ဘီးလင်း', '1', NULL, NULL),
(269, 11, 'Chaungzon', 'ချောင်းဆုံ', '1', NULL, NULL),
(270, 11, 'Kyaikmaraw', 'ကျိုက်မရော', '1', NULL, NULL),
(271, 11, 'Mudon', 'မုဒုံ', '1', NULL, NULL),
(272, 11, 'Paung', 'ပေါင်', '1', NULL, NULL),
(273, 11, 'Thanbyuzayat', 'သံဖြူဇရပ်', '1', NULL, NULL),
(274, 11, 'Ye', 'ရေး', '1', NULL, NULL),
(275, 12, 'Sittwe', 'စစ်တွေ', '1', NULL, NULL),
(276, 12, 'Thandwe', 'သံတွဲ', '1', NULL, NULL),
(277, 12, 'Toungup', 'တောင်ကုတ်', '1', NULL, NULL),
(278, 12, 'Ann', 'အမ်း', '1', NULL, NULL),
(279, 12, 'Buthidaung', 'ဘူးသီးတောင်', '1', NULL, NULL),
(280, 12, 'Gwa', 'ဂွ', '1', NULL, NULL),
(281, 12, 'Kyaukpyu', 'ကျောက်ဖြူ', '1', NULL, NULL),
(282, 12, 'Kyauktaw', 'ကျောက်တော်', '1', NULL, NULL),
(283, 12, 'Maungdaw', 'မောင်တော', '1', NULL, NULL),
(284, 12, 'Minbya', 'မင်းပြား', '1', NULL, NULL),
(285, 12, 'Mrauk-U', 'မြောက်ဦး', '1', NULL, NULL),
(286, 12, 'Munaung', 'မာန်အောင်', '1', NULL, NULL),
(287, 12, 'Myebon', 'မြေပုံ', '1', NULL, NULL),
(288, 12, 'Pauktaw', 'ပေါက်တော', '1', NULL, NULL),
(289, 12, 'Ponnagyun', 'ပုဏ္ဏားကျွန်း', '1', NULL, NULL),
(290, 12, 'Ramree', 'ရမ်းဗြဲ', '1', NULL, NULL),
(291, 12, 'Rathedaung', 'ရသေ့တောင်', '1', NULL, NULL),
(292, 13, 'Hakha', 'ဟားခါး', '1', NULL, NULL),
(293, 13, 'Mindat', 'မင်းတပ်', '1', NULL, NULL),
(294, 13, 'Falam', 'ဖလန်း', '1', NULL, NULL),
(295, 13, 'Htantlang', 'ထန်တလန်', '1', NULL, NULL),
(296, 13, 'Kanpetlet', 'ကန်ပက်လက်', '1', NULL, NULL),
(297, 13, 'Madupi', 'မတူပီ', '1', NULL, NULL),
(298, 13, 'Paletwa', 'ပလက်ဝ', '1', NULL, NULL),
(299, 13, 'Tiddim', 'တီးတိန်', '1', NULL, NULL),
(300, 13, 'Tonzang', 'တွမ်းဇံ', '1', NULL, NULL),
(301, 14, 'Myitkyina', 'မြစ်ကြီးနား', '1', NULL, NULL),
(302, 14, 'Puta-O', 'ပူတာအို', '1', NULL, NULL),
(303, 14, 'Bhamo', 'ဗန်းမော်', '1', NULL, NULL),
(304, 14, 'Hpakan', 'ဖားကန့်', '1', NULL, NULL),
(305, 14, 'Mogaung', 'မိုးကောင်း', '1', NULL, NULL),
(306, 14, 'Mohnyin', 'မိုးညှင်း', '1', NULL, NULL),
(307, 14, 'Momauk', 'မိုးမောက်', '1', NULL, NULL),
(308, 14, 'Shwegu', 'ရွှေကူ', '1', NULL, NULL),
(309, 14, 'Injangyang', 'အင်ဂျန်းယန်', '1', NULL, NULL),
(310, 14, 'Kawnglanghpu', 'ခေါင်လံဖူး', '1', NULL, NULL),
(311, 14, 'Machanbaw', 'မချမ်းဘော', '1', NULL, NULL),
(312, 14, 'Mansi', 'မံစီ', '1', NULL, NULL),
(313, 14, 'Nogmung', 'နောင်မွန်း', '1', NULL, NULL),
(314, 14, 'Sumprabum', 'ဆွမ်ပရာဘွမ်', '1', NULL, NULL),
(315, 14, 'Tanai', 'တနိုင်း', '1', NULL, NULL),
(316, 14, 'Tsawlaw', 'ဆော့လော်', '1', NULL, NULL),
(317, 14, 'Waingmaw', 'ဝိုင်းမော်', '1', NULL, NULL),
(318, 15, 'Loikaw', 'လွိုင်ကော်', '1', NULL, NULL),
(319, 15, 'Bawlakhe', 'ဘောလခဲ', '1', NULL, NULL),
(320, 15, 'Demoso', 'ဒီမောဆို', '1', NULL, NULL),
(321, 15, 'Hpasawng', 'ဖားဆောင်း', '1', NULL, NULL),
(322, 15, 'Hpruso', 'ဖရှုးဆိုး', '1', NULL, NULL),
(323, 15, 'Mese', 'မယ်ဆဲ့', '1', NULL, NULL),
(324, 15, 'Shadaw', 'ရှားတော', '1', NULL, NULL),
(325, 1, 'Thuwana', 'သုဝဏ္ဏ', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `join_date`, `remember_token`, `created_at`, `updated_at`, `employee_id`, `nrc_number`, `gender`, `passport_photo`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$Le4a7vAtroc7NGRRAbESu.Tpuz2KF4e.CjYDmU3wiRNOtpCj/WiAG', '09444161997', 'Yangon', '2023-03-07 01:51 PM', NULL, '2023-01-29 22:34:39', '2023-03-07 00:51:08', 'EMP-00001', '1/abc(N)009221', 'male', NULL),
(2, 'User', 'user@gmail.com', NULL, '$2y$10$.vQP72TfB9e6QdPF9e8ZruQ0S/QeFwRfiSEixisaYjQlRP1mK2R0u', '09123123123', 'Yangon', '2023-03-07 01:55 PM', NULL, '2023-01-30 10:16:30', '2023-03-07 00:55:30', 'EMP-00002', '1/abc(N)009112', 'male', 'public/images/YXikmMIGdTWpjKSefrLF91Mdedk0YXU0lfrp4Nfa.png'),
(3, 'Mg Mg', 'mgmg@gmail.com', NULL, '$2y$10$WsBifexGEuyuZiVkjAAKFet3bK261AM3h/azLzy34cRgOk/srYcbq', '0912312313', 'Yangon', '1.1.2022', NULL, '2023-01-30 10:19:28', '2023-01-30 10:19:28', 'EMP-00003', '1/abc(N)009112', 'male', 'public/images/xVI3Z7akPvMAIwhnwvzcnKZtNIOiafM4aww9I0Sv.png'),
(4, 'Mg Mg Soe', 'mgmgsoe@gmail.com', NULL, '$2y$10$c/mvJDBrG5tJ4cZ6l0plk.PULk9VW69iitQ11ncx5dgANFoIb2Ch2', '09123123122', '11223344', '2023-03-07 01:49 PM', NULL, '2023-03-07 00:50:16', '2023-03-07 00:50:16', 'U-000004', '1/abc(N)009221', 'male', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_lists`
--
ALTER TABLE `agent_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authentication_log`
--
ALTER TABLE `authentication_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authentication_log_authenticatable_type_authenticatable_id_index` (`authenticatable_type`,`authenticatable_id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demands`
--
ALTER TABLE `demands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `file_management`
--
ALTER TABLE `file_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interviews`
--
ALTER TABLE `interviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview_labours`
--
ALTER TABLE `interview_labours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labour_docs`
--
ALTER TABLE `labour_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labour_management`
--
ALTER TABLE `labour_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_tests`
--
ALTER TABLE `medical_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_test_temp_lists`
--
ALTER TABLE `medical_test_temp_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_lists`
--
ALTER TABLE `members_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `nrcs`
--
ALTER TABLE `nrcs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overseas_agencies`
--
ALTER TABLE `overseas_agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passports`
--
ALTER TABLE `passports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passport_payments`
--
ALTER TABLE `passport_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passport_payment_files`
--
ALTER TABLE `passport_payment_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sendings`
--
ALTER TABLE `sendings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `townships`
--
ALTER TABLE `townships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent_lists`
--
ALTER TABLE `agent_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `authentication_log`
--
ALTER TABLE `authentication_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `demands`
--
ALTER TABLE `demands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_management`
--
ALTER TABLE `file_management`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `interview_labours`
--
ALTER TABLE `interview_labours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `labour_docs`
--
ALTER TABLE `labour_docs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labour_management`
--
ALTER TABLE `labour_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medical_tests`
--
ALTER TABLE `medical_tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medical_test_temp_lists`
--
ALTER TABLE `medical_test_temp_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `members_lists`
--
ALTER TABLE `members_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `nrcs`
--
ALTER TABLE `nrcs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=427;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `overseas_agencies`
--
ALTER TABLE `overseas_agencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passports`
--
ALTER TABLE `passports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `passport_payments`
--
ALTER TABLE `passport_payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `passport_payment_files`
--
ALTER TABLE `passport_payment_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sendings`
--
ALTER TABLE `sendings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `townships`
--
ALTER TABLE `townships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
