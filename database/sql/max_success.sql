-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2023 at 07:43 AM
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
-- Database: `max_success`
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
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agent_lists`
--

INSERT INTO `agent_lists` (`id`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`, `agent_code`, `nrc`, `nrc_front`, `nrc_back`, `region_id`, `township_id`, `remark`, `add_user_id`, `join_date`, `photo`, `nrc_code`, `nrc_name`, `nrc_type`, `nrc_number`) VALUES
(1, 'Ko Kaung Htet San', 'phesin@gmail.com', '+959962205555', 'Yangon', '2023-04-03 22:44:00', '2023-04-25 23:50:16', 'NGW-SA-0001', '14/PaTaNa(N)214259', 'public/agents/kL4qxFhJVXt7bsssMc8P16Qngsf80fCNZzD8KJeZ.jpg', 'public/agents/Z3q6Wg7PR93ffHtUkt4Nqdd6cwlu44HpfYDvcyL9.jpg', '2', '47', 'Yangon', '1', '20.09.2022', '', '14', 'PaTaNa', '(N)', '214259'),
(2, 'Mg Mg', 'mgmg@gmail.com', '09555161776', 'Yangon', '2023-04-25 22:51:45', '2023-04-25 22:51:45', 'NGW-SA-0002', '1/KhaPhaNa(N)332334', '', '', '1', '3', 'Yangon Remark Test', '1', '1.1.2023', '', '1', 'KhaPhaNa', '(N)', '332334');

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
  `location` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authentication_log`
--

INSERT INTO `authentication_log` (`id`, `authenticatable_type`, `authenticatable_id`, `ip_address`, `user_agent`, `login_at`, `login_successful`, `logout_at`, `cleared_by_user`, `location`) VALUES
(1, 'App\\Models\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-13 22:47:46', 1, '2023-03-13 22:48:26', 0, '{\"ip\":\"127.0.0.0\",\"iso_code\":\"US\",\"country\":\"United States\",\"city\":\"New Haven\",\"state\":\"CT\",\"state_name\":\"Connecticut\",\"postal_code\":\"06510\",\"lat\":41.31,\"lon\":-72.92,\"timezone\":\"America\\/New_York\",\"continent\":\"NA\",\"currency\":\"USD\",\"default\":true,\"cached\":false}'),
(2, 'App\\Models\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-13 22:48:30', 1, NULL, 0, '{\"ip\":\"127.0.0.0\",\"iso_code\":\"US\",\"country\":\"United States\",\"city\":\"New Haven\",\"state\":\"CT\",\"state_name\":\"Connecticut\",\"postal_code\":\"06510\",\"lat\":41.31,\"lon\":-72.92,\"timezone\":\"America\\/New_York\",\"continent\":\"NA\",\"currency\":\"USD\",\"default\":true,\"cached\":false}'),
(3, 'App\\Models\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 00:17:54', 1, '2023-03-14 00:20:46', 0, '{\"ip\":\"127.0.0.0\",\"iso_code\":\"US\",\"country\":\"United States\",\"city\":\"New Haven\",\"state\":\"CT\",\"state_name\":\"Connecticut\",\"postal_code\":\"06510\",\"lat\":41.31,\"lon\":-72.92,\"timezone\":\"America\\/New_York\",\"continent\":\"NA\",\"currency\":\"USD\",\"default\":true,\"cached\":false}'),
(4, 'App\\Models\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 00:20:51', 1, '2023-03-14 00:21:20', 0, '{\"ip\":\"127.0.0.0\",\"iso_code\":\"US\",\"country\":\"United States\",\"city\":\"New Haven\",\"state\":\"CT\",\"state_name\":\"Connecticut\",\"postal_code\":\"06510\",\"lat\":41.31,\"lon\":-72.92,\"timezone\":\"America\\/New_York\",\"continent\":\"NA\",\"currency\":\"USD\",\"default\":true,\"cached\":false}'),
(5, 'App\\Models\\User', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 00:21:25', 1, NULL, 0, '{\"ip\":\"127.0.0.0\",\"iso_code\":\"US\",\"country\":\"United States\",\"city\":\"New Haven\",\"state\":\"CT\",\"state_name\":\"Connecticut\",\"postal_code\":\"06510\",\"lat\":41.31,\"lon\":-72.92,\"timezone\":\"America\\/New_York\",\"continent\":\"NA\",\"currency\":\"USD\",\"default\":true,\"cached\":false}'),
(6, 'App\\Models\\User', 1, '69.160.27.186', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, 0, '2023-03-14 00:30:47', 0, NULL),
(7, 'App\\Models\\User', 1, '69.160.27.186', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 00:30:53', 1, '2023-03-14 00:32:16', 0, '{\"ip\":\"69.160.27.186\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(8, 'App\\Models\\User', 1, '69.160.27.186', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 00:32:28', 1, '2023-03-14 00:34:11', 0, '{\"ip\":\"69.160.27.186\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(9, 'App\\Models\\User', 1, '69.160.27.186', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 00:34:30', 1, NULL, 0, '{\"ip\":\"69.160.27.186\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(10, 'App\\Models\\User', 1, '69.160.27.186', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 02:53:28', 1, NULL, 0, '{\"ip\":\"69.160.27.186\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(11, 'App\\Models\\User', 1, '103.61.8.40', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', NULL, 0, '2023-03-14 03:14:05', 0, NULL),
(12, 'App\\Models\\User', 1, '103.61.8.40', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 03:14:18', 1, NULL, 0, '{\"ip\":\"103.61.8.40\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(13, 'App\\Models\\User', 1, '69.160.27.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-14 03:14:51', 1, NULL, 0, '{\"ip\":\"69.160.27.186\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(14, 'App\\Models\\User', 1, '103.61.8.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.41', '2023-03-14 03:14:55', 1, NULL, 0, '{\"ip\":\"103.61.8.40\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(15, 'App\\Models\\User', 1, '103.61.8.40', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 03:15:30', 1, NULL, 0, '{\"ip\":\"103.61.8.40\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(16, 'App\\Models\\User', 1, '103.61.8.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-14 03:15:34', 1, NULL, 0, '{\"ip\":\"103.61.8.40\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(17, 'App\\Models\\User', 1, '104.28.219.156', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 03:16:06', 1, NULL, 0, '{\"ip\":\"104.28.219.156\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Mandalay\",\"state\":\"04\",\"state_name\":\"Mandalay Region\",\"postal_code\":\"\",\"lat\":21.9746999999999985675458447076380252838134765625,\"lon\":96.0836000000000041154635255225002765655517578125,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(18, 'App\\Models\\User', 1, '104.28.251.156', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 03:16:30', 1, NULL, 0, '{\"ip\":\"104.28.251.156\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Mandalay\",\"state\":\"04\",\"state_name\":\"Mandalay Region\",\"postal_code\":\"\",\"lat\":21.9746999999999985675458447076380252838134765625,\"lon\":96.0836000000000041154635255225002765655517578125,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(19, 'App\\Models\\User', 1, '104.28.251.154', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 03:17:10', 1, NULL, 0, '{\"ip\":\"104.28.251.154\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Mandalay\",\"state\":\"04\",\"state_name\":\"Mandalay Region\",\"postal_code\":\"\",\"lat\":21.9746999999999985675458447076380252838134765625,\"lon\":96.0836000000000041154635255225002765655517578125,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(20, 'App\\Models\\User', 1, '103.61.8.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.41', '2023-03-14 03:17:22', 1, NULL, 0, '{\"ip\":\"103.61.8.40\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(21, 'App\\Models\\User', 1, '69.160.27.186', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-14 03:17:37', 1, NULL, 0, '{\"ip\":\"69.160.27.186\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(22, 'App\\Models\\User', 1, '103.231.95.13', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Safari/605.1.15', '2023-03-14 04:45:03', 1, NULL, 0, '{\"ip\":\"103.231.95.13\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Mandalay\",\"state\":\"04\",\"state_name\":\"Mandalay Region\",\"postal_code\":\"\",\"lat\":21.9746999999999985675458447076380252838134765625,\"lon\":96.0836000000000041154635255225002765655517578125,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(23, 'App\\Models\\User', 1, '103.231.95.13', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36', '2023-03-14 04:55:06', 1, NULL, 0, '{\"ip\":\"103.231.95.13\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Mandalay\",\"state\":\"04\",\"state_name\":\"Mandalay Region\",\"postal_code\":\"\",\"lat\":21.9746999999999985675458447076380252838134765625,\"lon\":96.0836000000000041154635255225002765655517578125,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(24, 'App\\Models\\User', 1, '45.125.5.103', 'Mozilla/5.0 (Linux; Android 11; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Mobile Safari/537.36', '2023-03-14 06:59:27', 0, NULL, 0, '{\"ip\":\"45.125.5.103\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(25, 'App\\Models\\User', 1, '185.177.126.144', 'Mozilla/5.0 (Linux; Android 11; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Mobile Safari/537.36', '2023-03-14 06:59:58', 1, NULL, 0, '{\"ip\":\"185.177.126.144\",\"iso_code\":\"NL\",\"country\":\"Netherlands\",\"city\":\"Naaldwijk\",\"state\":\"ZH\",\"state_name\":\"South Holland\",\"postal_code\":\"2671\",\"lat\":51.99810000000000087538865045644342899322509765625,\"lon\":4.19800000000000039790393202565610408782958984375,\"timezone\":\"Europe\\/Amsterdam\",\"continent\":\"Unknown\",\"currency\":\"EUR\",\"default\":false}'),
(26, 'App\\Models\\User', 1, '45.125.5.103', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/110.0.5481.114 Mobile/15E148 Safari/604.1', '2023-03-14 07:00:29', 1, NULL, 0, '{\"ip\":\"45.125.5.103\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(27, 'App\\Models\\User', 1, '45.125.5.103', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/110.0.5481.114 Mobile/15E148 Safari/604.1', '2023-03-14 07:01:05', 0, NULL, 0, '{\"ip\":\"45.125.5.103\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(28, 'App\\Models\\User', 1, '45.125.5.103', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/110.0.5481.114 Mobile/15E148 Safari/604.1', '2023-03-14 07:01:12', 1, '2023-03-14 07:01:29', 0, '{\"ip\":\"45.125.5.103\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(29, 'App\\Models\\User', 1, '185.177.126.144', 'Mozilla/5.0 (Linux; Android 11; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Mobile Safari/537.36', '2023-03-14 07:01:31', 1, NULL, 0, '{\"ip\":\"185.177.126.144\",\"iso_code\":\"NL\",\"country\":\"Netherlands\",\"city\":\"Naaldwijk\",\"state\":\"ZH\",\"state_name\":\"South Holland\",\"postal_code\":\"2671\",\"lat\":51.99810000000000087538865045644342899322509765625,\"lon\":4.19800000000000039790393202565610408782958984375,\"timezone\":\"Europe\\/Amsterdam\",\"continent\":\"Unknown\",\"currency\":\"EUR\",\"default\":false}'),
(30, 'App\\Models\\User', 1, '45.125.5.103', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/110.0.5481.114 Mobile/15E148 Safari/604.1', '2023-03-14 07:01:38', 1, '2023-03-14 07:01:45', 0, '{\"ip\":\"45.125.5.103\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(31, 'App\\Models\\User', 1, '45.125.5.103', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/110.0.5481.114 Mobile/15E148 Safari/604.1', '2023-03-14 07:02:08', 1, '2023-03-14 07:02:15', 0, '{\"ip\":\"45.125.5.103\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(32, 'App\\Models\\User', 1, '116.202.97.186', 'Mozilla/5.0 (Linux; Android 10; Redmi Note 9 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Mobile Safari/537.36', '2023-03-14 07:07:04', 1, NULL, 0, '{\"ip\":\"116.202.97.186\",\"iso_code\":\"DE\",\"country\":\"Germany\",\"city\":\"Falkenstein\",\"state\":\"SN\",\"state_name\":\"Saxony\",\"postal_code\":\"08223\",\"lat\":50.47500000000000142108547152020037174224853515625,\"lon\":12.3650000000000002131628207280300557613372802734375,\"timezone\":\"Europe\\/Berlin\",\"continent\":\"Unknown\",\"currency\":\"EUR\",\"default\":false}'),
(33, 'App\\Models\\User', 1, '103.231.95.13', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Safari/605.1.15', '2023-03-14 07:26:21', 1, NULL, 0, '{\"ip\":\"103.231.95.13\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Mandalay\",\"state\":\"04\",\"state_name\":\"Mandalay Region\",\"postal_code\":\"\",\"lat\":21.9746999999999985675458447076380252838134765625,\"lon\":96.0836000000000041154635255225002765655517578125,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(34, 'App\\Models\\User', 1, '45.125.5.180', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-15 19:44:50', 1, NULL, 0, '{\"ip\":\"45.125.5.180\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(35, 'App\\Models\\User', 1, '45.125.5.180', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-15 22:31:47', 1, NULL, 0, '{\"ip\":\"45.125.5.180\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(36, 'App\\Models\\User', 1, '103.231.95.11', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Safari/605.1.15', '2023-03-17 07:49:37', 1, NULL, 0, '{\"ip\":\"103.231.95.11\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Mandalay\",\"state\":\"04\",\"state_name\":\"Mandalay Region\",\"postal_code\":\"\",\"lat\":21.9746999999999985675458447076380252838134765625,\"lon\":96.0836000000000041154635255225002765655517578125,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(37, 'App\\Models\\User', 1, '104.28.251.156', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.44', '2023-03-20 00:41:11', 1, NULL, 0, '{\"ip\":\"104.28.251.156\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Mandalay\",\"state\":\"04\",\"state_name\":\"Mandalay Region\",\"postal_code\":\"\",\"lat\":21.9746999999999985675458447076380252838134765625,\"lon\":96.0836000000000041154635255225002765655517578125,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(38, 'App\\Models\\User', 1, '45.125.5.208', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-23 22:27:11', 1, NULL, 0, '{\"ip\":\"45.125.5.208\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(39, 'App\\Models\\User', 1, '45.125.5.208', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-23 22:27:32', 1, NULL, 0, '{\"ip\":\"45.125.5.208\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(40, 'App\\Models\\User', 1, '45.125.5.208', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-23 22:39:26', 1, NULL, 0, '{\"ip\":\"45.125.5.208\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(41, 'App\\Models\\User', 1, '136.228.172.190', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/111.0.5563.72 Mobile/15E148 Safari/604.1', '2023-03-24 04:36:44', 1, NULL, 0, '{\"ip\":\"136.228.172.190\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(42, 'App\\Models\\User', 1, '104.28.219.154', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.51', '2023-03-24 21:33:13', 1, NULL, 0, '{\"ip\":\"104.28.219.154\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Mandalay\",\"state\":\"04\",\"state_name\":\"Mandalay Region\",\"postal_code\":\"\",\"lat\":21.9746999999999985675458447076380252838134765625,\"lon\":96.0836000000000041154635255225002765655517578125,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(43, 'App\\Models\\User', 1, '45.125.4.131', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-26 05:45:57', 1, NULL, 0, '{\"ip\":\"45.125.4.131\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(44, 'App\\Models\\User', 1, '104.28.251.156', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.54', '2023-03-26 20:37:38', 1, NULL, 0, '{\"ip\":\"104.28.251.156\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Mandalay\",\"state\":\"04\",\"state_name\":\"Mandalay Region\",\"postal_code\":\"\",\"lat\":21.9746999999999985675458447076380252838134765625,\"lon\":96.0836000000000041154635255225002765655517578125,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(45, 'App\\Models\\User', 1, '103.61.8.43', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.54', '2023-03-27 06:02:51', 1, NULL, 0, '{\"ip\":\"103.61.8.43\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(46, 'App\\Models\\User', 1, '103.61.8.43', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 Edg/111.0.1661.54', '2023-03-27 07:57:10', 1, NULL, 0, '{\"ip\":\"103.61.8.43\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(47, 'App\\Models\\User', 1, '104.28.219.149', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-27 08:01:22', 1, NULL, 0, '{\"ip\":\"104.28.219.149\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Mandalay\",\"state\":\"04\",\"state_name\":\"Mandalay Region\",\"postal_code\":\"\",\"lat\":21.9746999999999985675458447076380252838134765625,\"lon\":96.0836000000000041154635255225002765655517578125,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(48, 'App\\Models\\User', 1, '69.160.27.221', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-27 21:49:49', 1, NULL, 0, '{\"ip\":\"69.160.27.221\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(49, 'App\\Models\\User', 1, '74.50.211.248', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Safari/605.1.15', '2023-03-29 03:42:17', 1, NULL, 0, '{\"ip\":\"74.50.211.248\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Mandalay\",\"state\":\"04\",\"state_name\":\"Mandalay Region\",\"postal_code\":\"\",\"lat\":21.9746999999999985675458447076380252838134765625,\"lon\":96.0836000000000041154635255225002765655517578125,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(50, 'App\\Models\\User', 1, '136.228.172.95', 'Mozilla/5.0 (Linux; Android 11; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Mobile Safari/537.36', '2023-03-29 04:05:30', 1, NULL, 0, '{\"ip\":\"136.228.172.95\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(51, 'App\\Models\\User', 1, '136.228.172.95', 'Mozilla/5.0 (Linux; Android 11; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Mobile Safari/537.36', '2023-03-29 04:06:07', 0, NULL, 0, '{\"ip\":\"136.228.172.95\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(52, 'App\\Models\\User', 1, '136.228.172.95', 'Mozilla/5.0 (Linux; Android 11; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Mobile Safari/537.36', '2023-03-29 04:06:13', 1, NULL, 0, '{\"ip\":\"136.228.172.95\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(53, 'App\\Models\\User', 1, '103.231.95.26', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-29 06:48:19', 1, NULL, 0, '{\"ip\":\"103.231.95.26\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Mandalay\",\"state\":\"04\",\"state_name\":\"Mandalay Region\",\"postal_code\":\"\",\"lat\":21.9746999999999985675458447076380252838134765625,\"lon\":96.0836000000000041154635255225002765655517578125,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(54, 'App\\Models\\User', 1, '103.231.95.26', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Safari/605.1.15', '2023-03-29 06:49:32', 1, NULL, 0, '{\"ip\":\"103.231.95.26\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Mandalay\",\"state\":\"04\",\"state_name\":\"Mandalay Region\",\"postal_code\":\"\",\"lat\":21.9746999999999985675458447076380252838134765625,\"lon\":96.0836000000000041154635255225002765655517578125,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(55, 'App\\Models\\User', 1, '103.176.152.43', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko)', '2023-03-29 07:00:21', 1, NULL, 0, '{\"ip\":\"103.176.152.43\",\"iso_code\":\"TH\",\"country\":\"Thailand\",\"city\":\"Bangkok\",\"state\":\"10\",\"state_name\":\"Bangkok\",\"postal_code\":\"\",\"lat\":13.756299999999999528199623455293476581573486328125,\"lon\":100.501699999999999590727384202182292938232421875,\"timezone\":\"Asia\\/Bangkok\",\"continent\":\"Unknown\",\"currency\":\"THB\",\"default\":false}'),
(56, 'App\\Models\\User', 1, '136.228.172.14', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_1_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.1 Mobile/15E148 Safari/604.1', '2023-03-29 07:01:54', 1, NULL, 0, '{\"ip\":\"136.228.172.14\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(57, 'App\\Models\\User', 1, '169.150.218.36', 'Mozilla/5.0 (Linux; Android 11; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Mobile Safari/537.36', '2023-03-29 09:06:47', 1, NULL, 0, '{\"ip\":\"169.150.218.36\",\"iso_code\":\"NL\",\"country\":\"Netherlands\",\"city\":\"Amsterdam\",\"state\":\"NH\",\"state_name\":\"North Holland\",\"postal_code\":\"1012\",\"lat\":52.3759000000000014551915228366851806640625,\"lon\":4.89749999999999996447286321199499070644378662109375,\"timezone\":\"Europe\\/Amsterdam\",\"continent\":\"Unknown\",\"currency\":\"EUR\",\"default\":false}'),
(58, 'App\\Models\\User', 1, '45.125.5.187', 'Mozilla/5.0 (Linux; Android 11; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Mobile Safari/537.36', '2023-03-29 09:07:56', 0, NULL, 0, '{\"ip\":\"45.125.5.187\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(59, 'App\\Models\\User', 1, '45.125.5.187', 'Mozilla/5.0 (Linux; Android 11; Mi A3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Mobile Safari/537.36', '2023-03-29 09:08:06', 1, NULL, 0, '{\"ip\":\"45.125.5.187\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}'),
(60, 'App\\Models\\User', 1, '69.160.14.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '2023-03-29 21:42:23', 1, NULL, 0, '{\"ip\":\"69.160.14.164\",\"iso_code\":\"MM\",\"country\":\"Myanmar\",\"city\":\"Yangon\",\"state\":\"06\",\"state_name\":\"Yangon\",\"postal_code\":\"\",\"lat\":16.79639999999999844249032321386039257049560546875,\"lon\":96.1667000000000058435034588910639286041259765625,\"timezone\":\"Asia\\/Yangon\",\"continent\":\"Unknown\",\"currency\":\"MMK\",\"default\":false}');

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

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_format` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `title`, `created_at`, `updated_at`, `image`, `currency_format`) VALUES
(1, 'Thailand', '2023-01-30 10:38:22', '2023-04-29 03:32:14', 'public/images/SrZnG8BeXf5NocabbYs2G4qDXyESv2THaX0kTmyU.png', 'Thai Baht'),
(2, 'Malaysia', '2023-02-06 11:41:27', '2023-04-29 03:32:25', 'public/images/hRUWIpFkxojT4wvA3Cw4JsoLtYS2mXXeJ4R3gwka.png', 'Ringgit'),
(3, 'Japan', '2023-02-06 11:41:32', '2023-04-29 03:32:32', 'public/images/rqZOBlQ5mJC5eaH9pSRvnnYN0y8P9rvao4807ZCk.png', 'Yen'),
(4, 'Singapore', '2023-04-23 01:41:08', '2023-04-29 03:32:36', 'public/images/ziHjqC5FBoRMzHX4AmETAXXyTeIEX7urWOobgEks.png', 'SGD');

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
(1, '1', '2', '1', '10', '10', '2023-04-29', NULL, NULL, NULL, '2023-04-29 03:48:01', '2023-04-29 03:48:01', 'new_demand', NULL, NULL, 'Construction', '900');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submit_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `location`, `phone`, `created_at`, `updated_at`, `remark`, `submit_date`) VALUES
(1, 'Shwe Bon San Medical Centre', 'No.142/154,1st Floor, Between Hman Ya Wai Street and East Baho Street, U Chit Maung Road,Bahan Township,Yangon.', '+959422244667', '2023-04-03 21:59:02', '2023-04-03 21:59:02', NULL, '25.09.2022'),
(2, 'Kone Baung Specialist Health Care Center', 'No.303 Shwebontha Street(Upper Block) Yangon', '018383609', '2023-04-03 22:04:00', '2023-04-03 22:04:00', NULL, '25.09.2022'),
(3, 'A Hospital', 'Yangon', '09666171665', '2023-04-22 23:40:07', '2023-04-22 23:48:03', 'A Hospital in Yangon', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hospital_files`
--

CREATE TABLE `hospital_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(52, '2023_03_14_050059_create_authentication_log_table', 43),
(53, '2023_03_24_000916_add_fields_v1_to_hospitals_table', 44),
(54, '2023_03_24_001024_create_hospital_files_table', 44),
(55, '2023_03_24_010319_add_nrc_fields_to_agent_lists_table', 45),
(56, '2023_03_24_011543_add_nrc_fields_to_passports_table', 46),
(57, '2023_03_24_013938_add_dob_fields_to_passports_table', 47),
(58, '2023_04_23_055007_add_countrie_id_to_users_table', 48),
(59, '2023_04_23_080920_add_image_to_countries_table', 49),
(60, '2023_04_29_095918_add_currency_format_to_countries_table', 50);

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
(1, 'Max Success Co.,Ltd', NULL, NULL, NULL);

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
(1, 'SMC AUTOMATION Sdn Bhd', 'Electrical Accessories', '+60 3-56350590', 'sales@smcmy.com.my', 'Lot 36~37, Jalan Delima 1/1, Subang Hi-Tech Industrial Park,47500 Subang Jaya,Selangor,Malaysia.', '2', '2023-04-03 22:17:26', '2023-04-23 03:48:37', 'Mgsw', 'Test'),
(2, 'ABC Co.,Ltd', 'Construction Company', '09555161776', 'abc@gmail.com', 'Malaysia', '2', '2023-04-23 03:19:44', '2023-04-23 03:48:20', 'U Dawsia', 'Construction Company'),
(3, 'Thailand Company', NULL, NULL, NULL, 'Thailand Company', '2', '2023-04-23 03:20:37', '2023-04-23 03:20:37', NULL, NULL);

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
  `leader` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrc_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob_year` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob_month` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob_day` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `passports`
--

INSERT INTO `passports` (`id`, `name`, `father_name`, `nrc`, `date_of_birth`, `passport`, `passport_date`, `local_agent_name`, `phone`, `address`, `gender`, `remark`, `created_at`, `updated_at`, `join_date`, `owic`, `owic_date`, `reject_status`, `reject_date`, `reject_reason`, `place_of_passport`, `agent_list_id`, `mother_name`, `go_date`, `go_reason`, `entry_date`, `nation_religion`, `region_state`, `labour_code`, `age`, `photo`, `nrc_front`, `nrc_back`, `passport_expiry_date`, `qualification`, `weight`, `height`, `tatto`, `smoking`, `alcohol`, `prominent_sign`, `working_experience`, `selected_country`, `labour_card_no`, `issue_of_labour_date`, `identification_card`, `issue_date_of_id_card`, `son`, `son_age`, `daughter`, `daughter_age`, `address_line_one`, `phone_family`, `name_of_heir`, `relative`, `nrc_of_heir`, `passport_cost`, `car_charges`, `passport_register_status`, `user_id`, `marital_status`, `leader`, `nrc_code`, `nrc_name`, `nrc_type`, `nrc_number`, `dob_year`, `dob_month`, `dob_day`) VALUES
(1, 'NYEIN NYEIN EI SOE', 'U HLA THAUNG', '2/KhaMaNa(A)109103', '2011.4.3', 'MG454177', '10.09.2022', '', '09666096045', 'ဆင်မတောင်ရွာ၊ဆင်ပေါက်ဝဲမြို့', 'male', 'Remark Test', '2023-04-03 23:20:15', '2023-04-18 20:09:51', '2023-04-19', '', '', NULL, NULL, NULL, 'Yangon', 1, 'Daw Tin Hla', NULL, 'အလုပ်လုပ်ကိုင်ရန်', NULL, 'BURMESE,BUDDHA', NULL, 'NGW-LB-000001', '27yrs', '', '', '', '09.09.2027', NULL, '(lb)(lb)(lb)(lb)(lb)(lb)(lb)(lb)(lb)(lb)', '(kg)(kg)(kg)(kg)(kg)(kg)(kg)(kg)(kg)(kg)', 'No', 'No', 'No', NULL, NULL, '2', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, '1', 'Single', NULL, '2', 'KhaMaNa', '(A)', '109103', '2011', '4', '3'),
(2, 'AYE YU NAING Soe', 'U THAN NAING', '8/AhLaNa(N)262310', '1931.2.3', 'MG552674', '27.09.2022', '', '890924213', 'မောင်းမလှုပ်ရွာ၊အောင်လံမြို့။', 'female', NULL, '2023-04-04 06:50:02', '2023-04-18 20:10:20', '2023-04-19', '', '', NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, 'အလုပ်လုပ်ရန်', '15.10.2021', 'BURMESE,BUDDHA', NULL, 'NGW-LB-000002', '18yrs', '', '', '', '26.09.2027', NULL, '(lb)(lb)(lb)(lb)(lb)(lb)(lb)(lb)(lb)(lb)(lb)(lb)(lb)', '5\'2\"(kg)(kg)(kg)(kg)(kg)(kg)(kg)(kg)(kg)(kg)(kg)(kg)(kg)', 'No', 'No', 'No', 'လည်ပင်းမှည့်ရှိ', NULL, '2', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, '1', 'Single', NULL, '8', 'AhLaNa', '(N)', '262310', '1931', '2', '3'),
(3, 'MAY THUZAR HTUN', 'U THAN HTAY', '12/AhSaNa(N)241211', '2000.3.16', 'MG097147', '30.06.2022', '', '943933321', 'မာဃလုလင်လမ်း၊စော်ဘွားကြီးကုန်းရပ်ကွက်၊အင်းစိန်၊ရန်ကုန်။', 'female', NULL, '2023-04-04 07:00:44', '2023-04-04 07:00:44', '2023-04-04', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW SAN SAN KYU', NULL, 'အလုပ်လုပ်ရန်', '17.10.2022', 'BURMESE,BUDDHA', NULL, 'NGW-LB-000003', '22Yrs', '', '', '', '29.06.2027', NULL, '(lb)', '5\'2\"(kg)', 'No', 'No', 'No', 'လည်ပင်းမှည့်ရှိ', NULL, '2', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Single', NULL, '12', 'AhSaNa', '(N)', '241211', '2000', '3', '16'),
(4, 'WAI WAI LWIN', 'U AUNG PITE', '8/AhLaNa(N)252009', '2002.11.8', 'MF770139', '02.04.2022', '', '680373220', 'လက်ပန်တုန်းကျေးရွာ၊ကျောက်ပန်းတောင်းကျေးရွာအုပ်စု၊အောင်လံမြို့နယ်၊မကွေးတိုင်း။', 'female', NULL, '2023-04-04 07:10:09', '2023-04-04 07:10:09', '2023-04-04', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW KYI THAN', NULL, 'အလုပ်လုပ်ရန်', '15.10.2022', 'BURMESE,BUDDHA', NULL, 'NGW-LB-000004', '20Yrs', '', '', '', '01.04.2027', NULL, '(lb)', '5\'2\"(kg)', 'No', 'No', 'No', 'အောက်နှုတ်ခမ်းမှဲ့ရှိ', NULL, '2', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Single', NULL, '8', 'AhLaNa', '(N)', '252009', '2002', '11', '8'),
(5, 'SWE MOE OO', 'U THAN NAING', '8/AhLaNa(N)261942', '2004.5.9', 'MG552872', '27.09.2022', '', '890924213', 'မောင်းမလှုပ်ကျေးရွာ၊သမ္ဘလကျေးရွာအုပ်စု၊အောင်လံမြို့၊မကွေးတိုင်း။', 'female', NULL, '2023-04-04 07:17:44', '2023-04-04 07:17:44', '2023-04-04', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW YI YI NAING', NULL, 'အလုပ်လုပ်ရန်', '15.10.2022', 'BURMESE,BUDDHA', NULL, 'NGW-LB-000005', '18Yrs', '', '', '', '26.09.2027', NULL, '(lb)', '5\'(kg)', 'No', 'No', 'No', 'ဝဲပါးအမှတ်ရှိ', NULL, '3', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Single', NULL, '8', 'AhLaNa', '(N)', '261942', '2004', '5', '9'),
(6, 'HNIN HNIN KHAING', 'U THAN HTWE', '8/AhLaNa(N)140349', '1989.3.30', 'MF770140', '02.04.2022', '', '685453215', 'လက်ပံတုန်းကျေးရွာ၊ကျောက်ပန်းတောင်းကျေးရွာအုပ်စု၊အောင်လံမြို့၊အကွေးတိုင်း။', 'female', NULL, '2023-04-04 07:36:17', '2023-04-04 07:36:17', '2023-04-04', '', '', NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, 'အလုပ်လုပ်ရန်', '15.10.2022', 'BURMESE,BUDDHA', NULL, 'NGW-LB-000006', '33Yrs', '', '', '', '01.04.2027', NULL, '(lb)', '5\'(kg)', 'No', 'No', 'No', 'ဝဲပါးမှဲ့ရှိ', NULL, '3', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Single', NULL, '8', 'AhLaNa', '(N)', '140349', '1989', '3', '30'),
(7, 'OHNMAR SHWE', 'U AUNG PITE', '8/AhLaNa(N)136461', '1990.8.21', 'MF983571', '03.06.2022', '', '671801315', 'လက်ပံတုန်းကျေးရွာ၊ကျောက်ပန်းတောင်းကျေးရွာအုပ်စု၊အောင်လံမြို့နယ်၊မကွေးတိုင်း။', 'female', NULL, '2023-04-04 08:14:16', '2023-04-04 08:14:16', '2023-04-04', '', '', NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, 'အလုပ်လုပ်ရန်', '15.10.2022', 'BURMESE,BUDDHA', NULL, 'NGW-LB-000007', '32Yrs', '', '', '', '02.06.2027', NULL, '(lb)', '5\'2\"(kg)', 'No', 'No', 'No', 'မေးစေ့မှည့်ရှိ', NULL, '2', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Single', NULL, '8', 'AhLaNa', '(N)', '136461', '1990', '8', '21'),
(8, 'HLA MYO KHAING', 'U SOE MYINT', '8/AhLaNa(N)136393', '1991.4.17', 'MG566029', '30.09.2022', '', '450965494', 'လက်ပန်တုန်းရွာ၊အောင်လံမြို့၊မကွေးတိုင်း။', 'female', NULL, '2023-04-05 00:01:28', '2023-04-06 00:09:55', '2023-04-05', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, 'DAW TIN HLA', NULL, 'အလုပ်လုပ်ကိုင်ရန်', NULL, 'BURMESE,BUDDHA', NULL, 'NGW-LB-000008', '31Yrs', '', '', '', '29.09.2027', NULL, '(lb)', '5\'2\"(kg)', 'No', 'No', 'No', 'နှာခေါင်းထိပ်မှဲ့ရှိ', NULL, '3', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Single', NULL, '8', 'AhLaNa', '(N)', '136393', '1991', '4', '17'),
(9, 'WIA WIA LWIN', 'U HLA WAI', '8/AhLaNa(N)198924', '1995.4.12', 'MG 439491', '07.09.2022', '', '953809586', NULL, 'female', NULL, '2023-04-06 00:50:12', '2023-04-06 00:50:12', '2023-04-06', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW MYA KYI', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '15.10.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000009', '27Yar', '', '', '', '06.09.2027', NULL, '(lb)', '4\'11\"(kg)', 'No', 'No', 'No', 'လည်ပင်းအမှတ်ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'တပုလိုင်းကျေးရွာ၊အောင်လံမြို့၊မကွေးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '8', 'AhLaNa', '(N)', '198924', '1995', '4', '12'),
(11, 'SHWE AU', 'U MAR DIN', '8/AhLaNa(N)198194', '1999.7.9', 'MG 932444', '18.05.2022', '', '687204915', NULL, 'female', NULL, '2023-04-06 01:04:35', '2023-04-06 01:04:35', '2023-04-06', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW OHMMAR', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '15.10.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000010', '23Yar', '', '', '', '17.05.2027', NULL, '(lb)', '4\'9\"(kg)', 'No', 'No', 'No', 'ယာနားထင်မှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'လက်ပန်းတုန်းရွာ၊ အောင်လံမြို့၊ မကွေးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '8', 'AhLaNa', '(N)', '198194', '1999', '7', '9'),
(12, 'MAY THU TUN', 'U KYI HLAING', '8/AhLaNa(N)237285', '2000.5.15', 'MG 451169', '09.09.2022', '', '457116804', NULL, 'female', NULL, '2023-04-06 01:17:16', '2023-04-06 01:17:16', '2023-04-06', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW AYE NAING', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '15.10.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000011', '22Yar', '', '', '', '08.09.2027', NULL, '(lb)', '5\'1\"(kg)', 'No', 'No', 'No', 'မေးမှဲရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'မောင်းမလှုပ်ရွာ၊အောင်လံမြို့၊မကွေးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '8', 'AhLaNa', '(N)', '237285', '2000', '5', '15'),
(13, 'THEINT THEINT NYEIN', 'U THAN HTAY', '9/PaBaNa(N)190447', '1990.4.28', 'MG 974980', '01.06.2022', '', '694653197', NULL, 'female', NULL, '2023-04-06 01:32:58', '2023-04-06 01:32:58', '2023-04-06', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW MYINT SEIN', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '15.10.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000012', '32', '', '', '', '31.05.2027', NULL, '(lb)', '5\'(kg)', 'No', 'No', 'No', 'နဖူးအမာရွာတ်ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ရန်အောင်ကျေးရွာ၊ ပျော်ဘွယ်မြို့၊ မန္တလေးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '9', 'PaBaNa', '(N)', '190447', '1990', '4', '28'),
(14, 'NAW THAY EH PHAW', 'U SAW AUNG TUN', '7/KaTaKha(N)208889', '1999.6.1', 'MG 498306', '14.09.2022', '', '954756971', NULL, 'female', NULL, '2023-04-06 01:44:55', '2023-04-06 01:44:55', '2023-04-06', '', '', NULL, NULL, NULL, NULL, 1, 'DAW NAW AE MAY', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '15.10.2022', 'KAYIN', NULL, 'NGW-LB-000013', NULL, '', '', '', '13.09.2027', NULL, '(lb)', '(kg)', 'No', 'No', 'No', 'ယာမျက်ခုံးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'အထက်ဘုန်းမဲဇာကျေးရွာ၊ ကျောက်တံခါးမြို့၊ ပဲခူးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '7', 'KaTaKha', '(N)', '208889', '1999', '6', '1'),
(15, 'ZON LAY PHYU', 'U THAN AUNG', '8/SaPaWa(N)099721', '1992.1.12', 'MG 600935', '08.10.2022', '', '400729248အပ်', NULL, 'female', NULL, '2023-04-07 21:02:16', '2023-04-07 21:02:16', '2023-04-08', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW KYU KYU WIN', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '18.10.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000014', '30Yar', '', '', '', '07.10.2022', NULL, '(lb)', '4\'10\"(kg)', 'No', 'No', 'No', 'မေးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ကျောက်ချက်ရွာ၊ဆင်ပေါင်ဝဲမြို့၊မကွေးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '8', 'SaPaWa', '(N)', '099721', '1992', '1', '12'),
(16, 'ZIN MAR THET', 'U TIN TUN', '9/PaBaTha(N)018504', '2003.9.1', 'MG115268', '05.07.2022', '', '695165574', 'ကျောင်းစုညောင်လူးအုပ်စု၊ပုဗ္ဗသီရိမြို့', 'female', NULL, '2023-04-07 21:11:07', '2023-04-07 21:21:36', '2023-04-08', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, 'DAW HLA PU', NULL, 'အလုပ်လုပ်ကိုင်ရန်', NULL, 'BURMESE,BUDDHA', 'နေပြည်တော်', 'NGW-LB-000015', '19Yrs', '', '', '', '04.07.2027', NULL, '(lb)', '5\'1\"(kg)', 'No', 'No', 'No', 'BURMESE,BUDDHA', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '9', 'PaBaTha', '(N)', '018504', '2003', '9', '1'),
(17, 'HNIN NU HTWE', 'U NYUNT KHIN', '9/KaSaNa(N)211154', 'year.month.day', 'MG339885', '22.08.2022', '', '791329920', NULL, 'female', NULL, '2023-04-07 21:18:48', '2023-04-07 21:18:48', '2023-04-08', '', '', NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, 'အလုပ်လုပ်ကိုင်ရန်', '03.09.2022', 'BUMESE,BUDDHA', NULL, 'NGW-LB-000016', '24Yrs', '', '', '', '21.08.2027', NULL, '(lb)', '5\'2\"(kg)', 'No', 'No', 'No', 'ဝဲပါးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ရဲဘော်ကြီးရွာ၊ကျောက်ဆည်မြို့၊မန္တလေးတိုင်း။', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '9', 'KaSaNa', '(N)', '211154', 'year', 'month', 'day'),
(18, 'SU SU MAR', 'U AUNG YI', '9/KaSaNa(N)194120', '1986.7.18', 'MG340254', '22.08.2022', '', '784190812', NULL, 'female', NULL, '2023-04-07 21:29:05', '2023-04-07 21:29:05', '2023-04-08', '', '', NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, 'အလုပ်လုပ်ကိုင်ရန်', '03.09.2022', 'BURMESE.BUDDHA', NULL, 'NGW-LB-000017', '37Yrs', '', '', '', '21.08.2027', NULL, '(lb)', '5\'3\"(kg)', 'No', 'No', 'No', 'ယာပါ့းမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ရဲဘော်ကြီးကျေးရွာ၊ကျောက်ဆည်မြို့၊မန္တလေးတိုင်း။', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '9', 'KaSaNa', '(N)', '194120', '1986', '7', '18'),
(19, 'THAN THAN SINT', 'U TIN SAUNG', '9/KaSaNa(N)148809', '1987.6.30', 'MG340248', '22.08.2022', '', '784085927', NULL, 'female', NULL, '2023-04-07 21:38:45', '2023-04-07 21:38:45', '2023-04-08', '', '', NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, 'အလုပ်လုပ်ကိုင်ရန်', '03.09.2022', 'BURMESE,BUDDHA', NULL, 'NGW-LB-000018', '36Yrs', '', '', '', '21.08.2027', NULL, '(lb)', '5\'3\"(kg)', 'No', 'No', 'No', 'လည်ပင်းမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'မြင်စိုင်း(အလယ်ရပ်)၊ကျောက်ဆည်။', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '9', 'KaSaNa', '(N)', '148809', '1987', '6', '30'),
(20, 'MYO MYO SAN', 'U MYA YAN', '9/KaSaNa(N)211507', '1995.4.21', 'MG339894', '22.08.2022', '', '789709051', NULL, 'female', NULL, '2023-04-07 21:45:15', '2023-04-07 21:45:15', '2023-04-08', '', '', NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, 'အလုပ်လုပ်ကိုင်ရန်', '03.09.2022', 'BURMESE,BUDDHA', NULL, 'NGW-LB-000019', '28Yrs', '', '', '', '21.08.2027', NULL, '(lb)', '5\'(kg)', 'No', 'No', 'No', 'နှာတံဝဲဘေးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'သပြေဝန်းရွာ၊ကျောက်ဆည်', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '9', 'KaSaNa', '(N)', '211507', '1995', '4', '21'),
(21, 'KYI KYI THIN', 'U KYAW SINT', '9/KaSaNa(N)211207', '1999.2.15', 'MG 340266', '22.08.2022', '', '740996056', NULL, 'female', NULL, '2023-04-07 21:56:49', '2023-04-07 21:56:49', '2023-04-08', '', '', NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, 'အလုပ်လုပ်ကိုင်ရန်', '03.09.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000020', '24Yar', '', '', '', '21.08.2027', NULL, '(lb)', '5\'3\"(kg)', 'No', 'No', 'No', 'ယာပါးမှဲရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'သပြေဝန်းရွာ၊ကျော်ဆည်မြို့၊စစ်ကိုင်းတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '9', 'KaSaNa', '(N)', '211207', '1999', '2', '15'),
(22, 'THIRI WAI', 'U MAUNG MYINT', '8/AhLaNa(N)226244', '2001.2.15', 'MG 571778', '01.10.2022', '', '892175366', NULL, 'female', NULL, '2023-04-07 22:07:45', '2023-04-07 22:07:45', '2023-04-08', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW SAN SAN WAI', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '26.10.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000021', '21Yar', '', '', '', '30.09.2027', NULL, '(lb)', '5\'1\"(kg)', 'No', 'No', 'No', 'ယာမေးရိုးမှဲရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'သိုက်ရုံကျေးရွာ၊ အောင်လံမြို့၊မကွေးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '8', 'AhLaNa', '(N)', '226244', '2001', '2', '15'),
(23, 'NAN EI EI MOE', 'U AUNG THEIN', '7/DaOuNa(N)147145', '1995.5.8', 'MG 370017', '29.08.2022', '', '688023929', NULL, 'female', NULL, '2023-04-07 22:22:09', '2023-04-07 22:22:09', '2023-04-08', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW THEIN YI', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '28.10.2022', 'PAOHH/BUDDHA', NULL, 'NGW-LB-000022', '27Yar', '', '', '', '28.08.2027', NULL, '(lb)', '5\'(kg)', 'No', 'No', 'No', 'မေးစေ့အမာရွတ်ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ရွာဝိုက်ကြီးကျေးရွာ၊ဒိုက်ဦးမြို့၊ပဲခူးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '7', 'DaOuNa', '(N)', '147145', '1995', '5', '8'),
(24, 'KHAING SHWE OO', 'U SAN MYINT', '7/PaKhaNa(N)320492', '1991.9.23', 'MG 757513', '29.03.2022', '', '975424780', NULL, 'female', NULL, '2023-04-07 23:01:43', '2023-04-07 23:01:43', '2023-04-08', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW SAN AYE', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '28.10.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000023', '31Yar', '', '', '', '28.03.2027', NULL, '(lb)', '5\'(kg)', 'No', 'No', 'No', 'နှာဖူးအမှတ်ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ကလိကျေးရွာ၊ပဲခူးမြို့၊ပဲခူးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '7', 'PaKhaNa', '(N)', '320492', '1991', '9', '23'),
(25, 'NAN SAM SAM MON', 'U AUNG KHIN', '7/DaOuNa(N)111256', '1988.8.28', 'MG 055502', '20.06.2022', '', '402333693', NULL, 'female', NULL, '2023-04-07 23:09:58', '2023-04-07 23:09:58', '2023-04-08', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW PAN KYI', NULL, NULL, '28.10.2022', 'PAOHH/ BUDDHA', NULL, 'NGW-LB-000024', '34Yar', '', '', '', '19.06.2027', NULL, '(lb)', '5\'4\"(kg)', 'No', 'No', 'No', 'မေးစေ့မှဲရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ရွာဝိုင်းကြီးကျေးရွာ၊ဒိုက်ဦးမြို့၊ပဲခူးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '7', 'DaOuNa', '(N)', '111256', '1988', '8', '28'),
(26, 'THET PHOO WAI', 'U MAUNG MYINT', '8/AhLaNa(N)233719', '2004.3.4', 'MG 571779', '01.10.2022', '', '458175922', NULL, 'female', NULL, '2023-04-07 23:18:18', '2023-04-07 23:18:18', '2023-04-08', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW SAN SAN WAI', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '26.10.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000025', '18Yar', '', '', '', '30.09.2027', NULL, '(lb)', '5\'4\"(kg)', 'No', 'No', 'No', 'ယာမေးရိုးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'သိုက်ရုံကျေးရွာ၊အောင်လံမြို့၊မကွေးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '8', 'AhLaNa', '(N)', '233719', '2004', '3', '4'),
(27, 'KYAWT KYAWT THEIN', 'U TIN THEIN', '12/DaGaTa(N)065864', '1988.2.5', 'MG 865218', '29.04.2022', '', '981887588', NULL, 'female', NULL, '2023-04-09 08:04:18', '2023-04-09 08:04:18', '2023-04-09', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW YE YE PYON', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '31.10.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000026', '34Yar', '', '', '', '28.04.2027', NULL, '(lb)', '5\'1\"(kg)', 'No', 'No', 'No', 'ယာနှုတ်ခမ်းပေါ်မှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, '၁၆၄၉/သီတာလမ်း၊(၁၈)ရပ်ကွက်၊ဒဂုံမြို့သစ်တောင်ပိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '12', 'DaGaTa', '(N)', '065864', '1988', '2', '5'),
(28, 'LWIN LWIN AYE', 'U MYINT LWIN', '7/PaKhaNa(N)381628', '1995.1.4', 'MG757514', '29.03.2022', '', '754724780', NULL, 'female', NULL, '2023-04-09 08:27:35', '2023-04-09 08:27:35', '2023-04-09', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW NAN', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '11.11.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000027', '27Yar', '', '', '', '28.03.2027', NULL, '(lb)', '5\'1\"(kg)', 'No', 'No', 'No', 'ယာလက်မောင်းအမှတ်ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ကတိကျေးရွာ၊ပဲခူးမြို့၊ပဲခူးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '7', 'PaKhaNa', '(N)', '381628', '1995', '1', '4'),
(29, 'THWET THWET SAN', 'U SAN MAUNG', '12/TaMaNa(N)107990', '1992.6.26', 'MG 386365', '30.08.2022', '', '774934078', NULL, 'female', NULL, '2023-04-09 08:38:30', '2023-04-09 08:38:30', '2023-04-09', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW AYE AYE MAO', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '09.11.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000028', '30Yar', '', '', '', '29.08.2027', NULL, '(lb)', '5\'2\"(kg)', 'No', 'No', 'No', 'လည်ပင်းမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, '၁၁၃၇၊မာလာနွယ်လမ်း၊တာမွေမြို့၊ရန်ကုန်တိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '12', 'TaMaNa', '(N)', '107990', '1992', '6', '26'),
(30, 'EI THIDAR WIN TUN', 'U KYAW WIN', '7/PaTaTa(N)108876', '1990.4.15', 'MG 780237', '04.11.2022', '', '781994410', NULL, 'female', NULL, '2023-04-09 08:51:46', '2023-04-09 08:51:46', '2023-04-09', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW KYU KYU', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '09.11.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000029', '32Yar', '', '', '', '03.11.2027', NULL, '(lb)', '5\'1\"(kg)', 'No', 'No', 'No', 'ယာပါးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'အုတ်ရှစ်ကုန်းကျေးရွာ၊ပေါင်းတည်မြို့၊ပဲခူးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '7', 'PaTaTa', '(N)', '108876', '1990', '4', '15'),
(31, 'EI THU', 'U NYO LAY', '7/HtaTaPa(N)140289', '2004.1.13', 'MG 704724', '04.03.2022', '', '671676839', NULL, 'female', NULL, '2023-04-09 08:59:48', '2023-04-09 08:59:48', '2023-04-09', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW KYU KYU', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '15.08.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000030', '18Yar', '', '', '', '03.03.2027', NULL, '(lb)', '5\'1\"(kg)', 'No', 'No', 'No', 'လည်ပင်းမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'သပြေကုန်းကျေးရွာ၊ထန်းတပင်မြို့၊ပဲခူးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '7', 'HtaTaPa', '(N)', '140289', '2004', '1', '13'),
(32, 'NAN SEIN', 'U MYO MYINT', '7/HtaTaPa(N)110451', '1999.3.1', 'MF 707183', '04.03.2022', '', '662236911', 'သပြေကုန်းရွာ၊ထန်းတပင်မြို့', 'female', NULL, '2023-04-09 12:59:15', '2023-04-10 07:54:34', '2023-04-09', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, 'အလုပ်လုပ်ကိုင်ရန်', '2022-08-15', 'BURMESE/BUDDHA', 'ပဲခူးတိုင်း', 'NGW-LB-000031', '23Yar', '', '', '', '03.03.2027', NULL, '(lb)', '5\'4\"(kg)', 'No', 'No', 'No', 'ယာပါးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'သပြေကုန်းရွာ၊ထန်းတပင်မြို့၊ပဲခူးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '7', 'HtaTaPa', '(N)', '110451', '1999', '3', '1'),
(33, 'KHIN HNIN WAI', 'U CHIT TUN', '10/ThaHtaNa(N)215098', '1992.8.19', 'MG 553969', '27.09.2022', '', '767153957', NULL, 'female', NULL, '2023-04-09 13:12:27', '2023-04-09 13:12:27', '2023-04-09', '', '', NULL, NULL, NULL, 'YANGON', 1, NULL, NULL, 'အလုပ်လုပ်ကိုင်ရန်', '28.10.2022', 'KAYIN/BUDDHA', NULL, 'NGW-LB-000032', '30Yar', '', '', '', '26.09.2027', NULL, '(lb)', '5\'(kg)', 'No', 'No', 'No', 'ဝဲပါးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'အင်းနီကျေးရွာ၊သထုံမြို့၊မွန်တိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '10', 'ThaHtaNa', '(N)', '215098', '1992', '8', '19'),
(34, 'WIN WIN KYAW', 'U KYAW THU', '12/LaMaNa(N)175907', '2001.8.1', 'MG 346895', '24.08.2022', '', '975648254', NULL, 'female', NULL, '2023-04-09 13:22:11', '2023-04-09 13:22:11', '2023-04-09', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW SAN MYINT', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '24.10.2022', 'BURMESE/ BUDDHA', NULL, 'NGW-LB-000033', '21Yar', '', '', '', '23.08.2027', NULL, '(lb)', '5\'(kg)', 'No', 'No', 'No', 'ယာပါးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, '၇၈၉၊သမိန်ဗရမ်းလမ်း၊၅၅ ရပ်ကွက်၊ ဒဂုံမြို့သစ်တောင်ပိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '12', 'LaMaNa', '(N)', '175907', '2001', '8', '1'),
(35, 'MYAT NO THU', 'U AUNG KHET LWIN', '7/HtaTaPa(N)090315', '1989.10.7', 'MF 688494', '25.02.2022', '', '264948287', 'တင်ပွန်းချုံကျေးရွာ၊ထန်းတပင်မြို့၊', 'female', NULL, '2023-04-10 07:29:40', '2023-04-10 07:51:52', '2023-04-10', NULL, NULL, NULL, NULL, NULL, 'YANGON', 1, 'DAW SAN SAN WIN', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '2022-10-24', 'MON/BUDDHA', 'ပဲခူးတိုင်း', 'NGW-LB-000034', '33Yar', '', '', '', '24.02.2027', NULL, '(lb)', '5\'3\"(kg)', 'No', 'No', 'No', 'ယာပါးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ကင်ပွန်းချုံကျေးရွာ၊ထန်းတပင်မြို့၊ပဲခူးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '7', 'HtaTaPa', '(N)', '090315', '1989', '10', '7'),
(36, 'NI NI NAING MOE', 'U KYI SEIN', '7/YaTaYa(N)147844', '1988.9.17', 'MG 496870', '14.09.2022', '', '770895797', NULL, 'female', NULL, '2023-04-10 07:46:26', '2023-04-10 07:46:26', '2023-04-10', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAE THAN THAN', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '03.10.2022', 'BURMESE/ BUDDHA', NULL, 'NGW-LB-000035', '34Yar', '', '', '', '13.09.2027', NULL, '(lb)', '5\'2\"(kg)', 'No', 'No', 'No', 'ယာပါးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ဇလုပ်ကြီးကျေးရွာ၊ ရေတာရှည်မြို့၊ပဲခူးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '7', 'YaTaYa', '(N)', '147844', '1988', '9', '17'),
(37, 'MAY ZULY MOY NWE', 'UT TIN MYO', '9/PaBaTha(N)037376', '1996.7.11', 'MG 692020', '26.10.2022', '', '963963208', NULL, 'female', NULL, '2023-04-10 08:07:52', '2023-04-10 08:07:52', '2023-04-10', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW YE', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '02.11.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000036', '26Yar', '', '', '', '25.10.2027', NULL, '(lb)', '5\'(kg)', 'No', 'No', 'No', 'လည်ပင်းမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, '၃၃-၄၀/၅၉(ဆ)၊ပြည်ကြီးတံခွန်မြို့၊မန္တလေးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '9', 'PaBaTha', '(N)', '037376', '1996', '7', '11'),
(38, 'THAZIN HTAY', 'U THEIN HTAY', '9/MaKhaNa(N)191797', '1986.4.3', 'MG 508047', '16.09.2022', '', '260335891', NULL, 'female', NULL, '2023-04-10 08:27:08', '2023-04-10 08:27:08', '2023-04-10', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW SWAR KYI', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '04.10.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000037', '36Yar', '', '', '', '15.09.2027', NULL, '(lb)', '5\'(kg)', 'No', 'No', 'No', 'ဝဲပါးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ကနောက်တိုင်ကျေးရွာ၊မြင်းခြံမြို့၊မန္တလေးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '9', 'MaKhaNa', '(N)', '191797', '1986', '4', '3'),
(39, 'LWIN LWIN AUNG', 'U TIN AUNG', '12/MaYaKa(N)178550', '1994.7.10', 'MG 426638', '05.09.2022', '', '770895797', NULL, 'female', NULL, '2023-04-11 21:03:35', '2023-04-11 21:03:35', '2023-04-12', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW AYE SAN', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '03.10.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000038', '28Yar', '', '', '', '04.09.2027', NULL, '(lb)', '5\'3\"(kg)', 'No', 'No', 'No', 'နဖူးအမာရွတ်ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ဥပုသ်တော်ရပ်ကွက်၊ ပြည့်မြို့၊မန္တလေးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '12', 'MaYaKa', '(N)', '178550', '1994', '7', '10'),
(40, 'WAR WAR TUN', 'U KYAW OO SWE', '12/DaGaTa(N)096010', '1997.12.3', 'MF 713756', '09.03.2022', '', '773795022', NULL, 'female', NULL, '2023-04-11 21:19:06', '2023-04-11 21:19:06', '2023-04-12', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW WIN WIN MAW', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '22.10.2022', 'BURMESE/ BUDDHA', NULL, 'NGW-LB-000039', '24Yar', '', '', '', '08.03.2027', NULL, '(lb)', '5\'3\"(kg)', 'No', 'No', 'No', 'လည်ပင်းမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'တိုက် ၂၄/၃၀၁.ဗန္ဓုလအိမ်ယာ၊ ၁၇ရပ်ကွက်၊ဒဂုံတောင် ၊ ရန်ကုန်တိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '12', 'DaGaTa', '(N)', '096010', '1997', '12', '3'),
(41, 'TIN ZAR LWIN', 'U THAUNG LWIN', '7/LaPATa(N)162442', '1994.5.7', 'MF 044898', '12.02.2020', '', '888357459', NULL, 'female', NULL, '2023-04-11 21:31:43', '2023-04-11 21:31:43', '2023-04-12', '', '', NULL, NULL, NULL, 'LETPANDAN', 1, 'DAW KHIN SAN WIN', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '22.10.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000040', '28Yar', '', '', '', '11.02.2025', NULL, '(lb)', '4\'11\"(kg)', 'No', 'No', 'No', 'မျက်ခုံးနှစ်ခုကြားမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ဇိးဖြူကုန်းကျေးရွာ၊လက်ပဲတန်းမြို့၊ပဲခူးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '7', 'LaPATa', '(N)', '162442', '1994', '5', '7'),
(42, 'THU ZAR KHAING', 'U AYE THAN', '7/LaPATa(N)180407', '1993.12.3', 'MG 363843', '27.08.2022', '', '964829137', NULL, 'female', NULL, '2023-04-11 21:41:14', '2023-04-11 21:41:14', '2023-04-12', '', '', NULL, NULL, NULL, 'LETPANDAN', 1, NULL, NULL, 'အလုပ်လုပ်ကိုင်ရန်', '22.10.2022', 'BURMESE/BUDDHA', NULL, 'NGW-LB-000041', '28Yar', '', '', '', '26.08.2027', NULL, '(lb)', '5\'1\"(kg)', 'No', 'No', 'No', 'နှုတ်ခမ်းထောင့်စွန်းမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ဇီးဖြူကုန်းကျေးရွာ၊လက်ပံတန်းမြို့၊ပဲခူးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '7', 'LaPATa', '(N)', '180407', '1993', '12', '3'),
(43, 'HNIN THANDAR', 'U THAN AYE', '12/DaSaKa(N)032200', '1993.4.13', 'MG 035022', '14.06.2022', '', '962959626', NULL, 'female', NULL, '2023-04-11 21:54:43', '2023-04-11 21:54:43', '2023-04-12', '', '', NULL, NULL, NULL, 'YANGON', 1, 'DAW KYIN AYE', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '22.10.2022', 'BURMESE/ BUDDHA', NULL, 'NGW-LB-000042', '29Yar', '', '', '', '13.06.2027', NULL, '(lb)', '5\'3\"(kg)', 'No', 'No', 'No', 'နှာတံမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ညောင်ပင်ကျေးရွာ၊ ဒဂုံ ဆိပ်ကမ်း မြို့၊ ရန်ကုန်တိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '12', 'DaSaKa', '(N)', '032200', '1993', '4', '13'),
(44, 'AYE AYE AUNG', 'U MIN ZAW', '9/KaPaTa(N)320436', '1998.7.1', 'MF 713757', '09.03.2022', '', '251807225', NULL, 'female', NULL, '2023-04-11 22:03:21', '2023-04-11 22:03:21', '2023-04-12', '', '', NULL, NULL, NULL, 'KYAUKPADAUNG', 1, NULL, NULL, 'အလုပ်လုပ်ကို်ရန်', '22.10.2022', 'BURMESE/ BUDDHA', NULL, 'NGW-LB-000043', '24Yar', '', '', '', '08.03.2027', NULL, '(lb)', '5\'(kg)', 'No', 'No', 'No', 'နဖူးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ခင်မွန်ကျေးရွာ၊ ကျောက်ပန်းတောင်းမြို့၊ မန္တလေးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '9', 'KaPaTa', '(N)', '320436', '1998', '7', '1'),
(45, 'KHAING KHAING AYE', 'U MYO WIN', '7/LaPATa(N)157403', '1990.7.31', 'MG 347410', '24.08.2022', '', '894535326', NULL, 'female', NULL, '2023-04-11 22:09:47', '2023-04-11 22:09:47', '2023-04-12', '', '', NULL, NULL, NULL, 'LETPANDAN', 1, NULL, NULL, 'အလုပ်လုပ်ကိုင်ရန်', '22.10.2022', 'BURMESE/ BUDDHA', NULL, 'NGW-LB-000044', '32Yar', '', '', '', '23.08.2027', NULL, '(lb)', '5\'(kg)', 'No', 'No', 'No', 'ပါးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'ဇီးဖြူကုန်းကျေးရွာ၊လက်ပံတန်းမြို့၊ပဲခူးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '7', 'LaPATa', '(N)', '157403', '1990', '7', '31'),
(46, 'ZIN MAR HLAING', 'U AUNG PITE', '8/AhLaNa(N)241781', '2001.12.21', 'MF 771391', '02.04.2022', '', '895995925', NULL, 'female', NULL, '2023-04-11 22:27:59', '2023-04-11 22:27:59', '2023-04-12', '', '', NULL, NULL, NULL, 'AUNGLAN', 1, 'DAW KYI THEN', NULL, 'အလုပ်လုပ်ကိုင်ရန်', '15.10.2022', 'BURMESE/ BUDDHA', NULL, 'NGW-LB-000045', '20Yar', '', '', '', '01.04.2027', NULL, '(lb)', '5\'1\"(kg)', 'No', 'No', 'No', 'အောက်နှုတ်ခမ်းမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'လက်ပန်ကုန်းကျေးရွာ၊ ကျောက်ပန်းတောင်းမြို့၊မကွေးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '8', 'AhLaNa', '(N)', '241781', '2001', '12', '21'),
(47, 'NAN SEIN', 'U MYO MYINT', '7/HtaTaPa(N)110451', '1999.3.1', 'MF 707183', '04.03.2022', '', '662236911', NULL, 'female', NULL, '2023-04-11 22:37:16', '2023-04-11 22:37:16', '2023-04-12', '', '', NULL, NULL, NULL, 'HTANTAPIN', 1, NULL, NULL, 'အလုပ်လုပ်ကိုင်ရန်', '15.08.2022', 'BURMESE/ BUDDHA', NULL, 'NGW-LB-000046', '23Yar', '', '', '', '03.03.2027', NULL, '(lb)', '5\'4\"(kg)', 'No', 'No', 'No', 'ယာပါးမှဲ့ရှိ', NULL, '1', NULL, NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'သပြေကုန်းရွာ၊ ထန်းတပင်မြို့၊ပဲခူးတိုင်း', NULL, NULL, NULL, NULL, NULL, NULL, 'အပ်', '1', 'Single', NULL, '7', 'HtaTaPa', '(N)', '110451', '1999', '3', '1'),
(49, 'Daw Soe', 'U Mg Mg', '1/BaMaNa(N)223445', '1994-04-15', 'ME00092', '2023-04-27', '', '777161554', 'Yangon', 'female', 'Remark Testing', '2023-04-26 21:30:02', '2023-04-28 21:10:58', '2023-04-29', '', '', NULL, NULL, NULL, '2027-04-27', 2, 'Daw Aye', '-', 'အလုပ်လုပ်ကိုင်ရန်', '2023-04-27', 'Burmese / Buddhism', NULL, 'MS-LB-000047', '28', '', '', '', '2027-04-27', '10', '100(lb)', '100(cm)', 'No', 'No', 'No', 'No', '5', '1', '-', NULL, NULL, NULL, 'No', NULL, 'No', NULL, 'Yangon, Myanmar', '777181776', 'no', 'no', 'no', NULL, NULL, 'Yes', '1', 'Single', NULL, '1', 'AhGaYa', '(N)', '223445', NULL, NULL, NULL);

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

--
-- Dumping data for table `passport_payments`
--

INSERT INTO `passport_payments` (`id`, `deposit`, `deposit_date`, `passport_id`, `user_id`, `created_at`, `updated_at`, `remark`, `payment_reason`) VALUES
(1, '0', '2023-04-04', 1, 1, '2023-04-03 23:20:15', '2023-04-03 23:20:15', NULL, NULL),
(2, '0', '2023-04-04', 2, 1, '2023-04-04 06:50:02', '2023-04-04 06:50:02', NULL, NULL),
(3, '0', '2023-04-04', 3, 1, '2023-04-04 07:00:44', '2023-04-04 07:00:44', NULL, NULL),
(4, '0', '2023-04-04', 4, 1, '2023-04-04 07:10:09', '2023-04-04 07:10:09', NULL, NULL),
(5, '0', '2023-04-04', 5, 1, '2023-04-04 07:17:44', '2023-04-04 07:17:44', NULL, NULL),
(6, '0', '2023-04-04', 6, 1, '2023-04-04 07:36:17', '2023-04-04 07:36:17', NULL, NULL),
(7, '0', '2023-04-04', 7, 1, '2023-04-04 08:14:16', '2023-04-04 08:14:16', NULL, NULL),
(8, '0', '2023-04-05', 8, 1, '2023-04-05 00:01:28', '2023-04-05 00:01:28', NULL, NULL),
(9, '0', '2023-04-06', 9, 1, '2023-04-06 00:50:12', '2023-04-06 00:50:12', NULL, NULL),
(10, '0', '2023-04-06', 10, 1, '2023-04-06 00:50:12', '2023-04-06 00:50:12', NULL, NULL),
(11, '0', '2023-04-06', 11, 1, '2023-04-06 01:04:35', '2023-04-06 01:04:35', NULL, NULL),
(12, '0', '2023-04-06', 12, 1, '2023-04-06 01:17:16', '2023-04-06 01:17:16', NULL, NULL),
(13, '0', '2023-04-06', 13, 1, '2023-04-06 01:32:58', '2023-04-06 01:32:58', NULL, NULL),
(14, '0', '2023-04-06', 14, 1, '2023-04-06 01:44:55', '2023-04-06 01:44:55', NULL, NULL),
(15, '0', '2023-04-08', 15, 1, '2023-04-07 21:02:16', '2023-04-07 21:02:16', NULL, NULL),
(16, '0', '2023-04-08', 16, 1, '2023-04-07 21:11:07', '2023-04-07 21:11:07', NULL, NULL),
(17, '0', '2023-04-08', 17, 1, '2023-04-07 21:18:48', '2023-04-07 21:18:48', NULL, NULL),
(18, '0', '2023-04-08', 18, 1, '2023-04-07 21:29:05', '2023-04-07 21:29:05', NULL, NULL),
(19, '0', '2023-04-08', 19, 1, '2023-04-07 21:38:45', '2023-04-07 21:38:45', NULL, NULL),
(20, '0', '2023-04-08', 20, 1, '2023-04-07 21:45:15', '2023-04-07 21:45:15', NULL, NULL),
(21, '0', '2023-04-08', 21, 1, '2023-04-07 21:56:49', '2023-04-07 21:56:49', NULL, NULL),
(22, '0', '2023-04-08', 22, 1, '2023-04-07 22:07:45', '2023-04-07 22:07:45', NULL, NULL),
(23, '0', '2023-04-08', 23, 1, '2023-04-07 22:22:09', '2023-04-07 22:22:09', NULL, NULL),
(24, '0', '2023-04-08', 24, 1, '2023-04-07 23:01:43', '2023-04-07 23:01:43', NULL, NULL),
(25, '0', '2023-04-08', 25, 1, '2023-04-07 23:09:58', '2023-04-07 23:09:58', NULL, NULL),
(26, '0', '2023-04-08', 26, 1, '2023-04-07 23:18:18', '2023-04-07 23:18:18', NULL, NULL),
(27, '0', '2023-04-09', 27, 1, '2023-04-09 08:04:18', '2023-04-09 08:04:18', NULL, NULL),
(28, '0', '2023-04-09', 28, 1, '2023-04-09 08:27:35', '2023-04-09 08:27:35', NULL, NULL),
(29, '0', '2023-04-09', 29, 1, '2023-04-09 08:38:30', '2023-04-09 08:38:30', NULL, NULL),
(30, '0', '2023-04-09', 30, 1, '2023-04-09 08:51:46', '2023-04-09 08:51:46', NULL, NULL),
(31, '0', '2023-04-09', 31, 1, '2023-04-09 08:59:48', '2023-04-09 08:59:48', NULL, NULL),
(32, '0', '2023-04-09', 32, 1, '2023-04-09 12:59:15', '2023-04-09 12:59:15', NULL, NULL),
(33, '0', '2023-04-09', 33, 1, '2023-04-09 13:12:27', '2023-04-09 13:12:27', NULL, NULL),
(34, '0', '2023-04-09', 34, 1, '2023-04-09 13:22:11', '2023-04-09 13:22:11', NULL, NULL),
(35, '0', '2023-04-10', 35, 1, '2023-04-10 07:29:40', '2023-04-10 07:29:40', NULL, NULL),
(36, '0', '2023-04-10', 36, 1, '2023-04-10 07:46:26', '2023-04-10 07:46:26', NULL, NULL),
(37, '0', '2023-04-10', 37, 1, '2023-04-10 08:07:52', '2023-04-10 08:07:52', NULL, NULL),
(38, '0', '2023-04-10', 38, 1, '2023-04-10 08:27:08', '2023-04-10 08:27:08', NULL, NULL),
(39, '0', '2023-04-12', 39, 1, '2023-04-11 21:03:35', '2023-04-11 21:03:35', NULL, NULL),
(40, '0', '2023-04-12', 40, 1, '2023-04-11 21:19:06', '2023-04-11 21:19:06', NULL, NULL),
(41, '0', '2023-04-12', 41, 1, '2023-04-11 21:31:43', '2023-04-11 21:31:43', NULL, NULL),
(42, '0', '2023-04-12', 42, 1, '2023-04-11 21:41:14', '2023-04-11 21:41:14', NULL, NULL),
(43, '0', '2023-04-12', 43, 1, '2023-04-11 21:54:43', '2023-04-11 21:54:43', NULL, NULL),
(44, '0', '2023-04-12', 44, 1, '2023-04-11 22:03:21', '2023-04-11 22:03:21', NULL, NULL),
(45, '0', '2023-04-12', 45, 1, '2023-04-11 22:09:47', '2023-04-11 22:09:47', NULL, NULL),
(46, '0', '2023-04-12', 46, 1, '2023-04-11 22:27:59', '2023-04-11 22:27:59', NULL, NULL),
(47, '0', '2023-04-12', 47, 1, '2023-04-11 22:37:16', '2023-04-11 22:37:16', NULL, NULL);

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
  `passport_photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countrie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `join_date`, `remember_token`, `created_at`, `updated_at`, `employee_id`, `nrc_number`, `gender`, `passport_photo`, `countrie_id`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$Le4a7vAtroc7NGRRAbESu.Tpuz2KF4e.CjYDmU3wiRNOtpCj/WiAG', '09444161997', 'Yangon', '2023-03-07 01:51 PM', NULL, '2023-01-29 22:34:39', '2023-04-22 23:25:04', 'EMP-00001', '1/abc(N)009221', 'male', NULL, 3),
(2, 'User', 'user@gmail.com', NULL, '$2y$10$.vQP72TfB9e6QdPF9e8ZruQ0S/QeFwRfiSEixisaYjQlRP1mK2R0u', '09123123123', 'Yangon', '2023-03-07 01:55 PM', NULL, '2023-01-30 10:16:30', '2023-04-22 23:26:34', 'EMP-00002', '1/abc(N)009112', 'male', 'public/images/DV75BxaQGxgaOpguuFdVlP7P7PBcOL4waEn3Vr2R.jpg', 1),
(3, 'Mg Mg', 'mgmg@gmail.com', NULL, '$2y$10$WsBifexGEuyuZiVkjAAKFet3bK261AM3h/azLzy34cRgOk/srYcbq', '0912312313', 'Yangon', '1.1.2022', NULL, '2023-01-30 10:19:28', '2023-04-22 23:26:37', 'EMP-00003', '1/abc(N)009112', 'male', 'public/images/XUOPxomMX70QtUoGfAEx8j2EyznKFYTqfWTUrLzr.jpg', 1),
(4, 'Mg Mg Soe', 'mgmgsoe@gmail.com', NULL, '$2y$10$c/mvJDBrG5tJ4cZ6l0plk.PULk9VW69iitQ11ncx5dgANFoIb2Ch2', '09123123122', '11223344', '2023-03-07 01:49 PM', NULL, '2023-03-07 00:50:16', '2023-04-22 23:26:41', 'U-000004', '1/abc(N)009221', 'male', '', 2),
(5, 'Mg Mg Soe', 'mgmgsoetoe@gmail.com', NULL, '$2y$10$Hx/EudpSzcS55YkEf60Bru1mcMTQwiUWMA4caWpfjeLZcj0bbLbRq', '09555161776', 'Yangon', '1.1.2023', NULL, '2023-04-22 22:38:36', '2023-04-22 23:26:47', 'U-000005', '3/abc(N)009221', 'female', 'public/images/K1oR5Zxwtbr9Gn8TY8C0RGBupK3Yhek36qXiUVMC.jpg', 3);

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
-- Indexes for table `hospital_files`
--
ALTER TABLE `hospital_files`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `demands`
--
ALTER TABLE `demands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `hospital_files`
--
ALTER TABLE `hospital_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interviews`
--
ALTER TABLE `interviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interview_labours`
--
ALTER TABLE `interview_labours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labour_docs`
--
ALTER TABLE `labour_docs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labour_management`
--
ALTER TABLE `labour_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_tests`
--
ALTER TABLE `medical_tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_test_temp_lists`
--
ALTER TABLE `medical_test_temp_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members_lists`
--
ALTER TABLE `members_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `passports`
--
ALTER TABLE `passports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `passport_payments`
--
ALTER TABLE `passport_payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `townships`
--
ALTER TABLE `townships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
