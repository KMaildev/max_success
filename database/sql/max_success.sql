-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2023 at 04:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `account_classifications`
--

CREATE TABLE `account_classifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `ac_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_classifications`
--

INSERT INTO `account_classifications` (`id`, `name`, `ac_code`, `created_at`, `updated_at`) VALUES
(1, 'Assets', '1-000', '2022-02-10 18:16:11', '2022-02-10 18:16:11'),
(2, 'Equity', '3-000', '2022-02-10 18:16:39', '2022-02-10 18:16:39'),
(3, 'Revenue', '4-000', '2022-02-10 18:16:52', '2022-02-10 18:16:52'),
(4, 'COGS', '5-000', '2022-02-10 18:17:03', '2022-02-10 18:17:03'),
(5, 'Other Income', '4-100', '2022-02-10 18:17:15', '2022-02-10 18:17:15'),
(6, 'Operation Expenses', '5-100', '2022-02-10 18:17:26', '2022-02-10 18:17:26'),
(7, 'Administration Expenses', '6-100', '2022-02-10 18:17:37', '2022-02-10 18:17:37'),
(8, 'Marketing Expenses', '6-200', '2022-02-10 18:17:47', '2022-04-14 23:40:51'),
(9, 'Finance Costs', '6-300', '2022-02-10 18:17:56', '2022-02-10 18:17:56'),
(10, 'Other Expenses', '6-400', '2022-02-10 18:18:06', '2023-05-05 00:38:33'),
(11, 'Liabilities', '2-000', '2022-02-10 18:16:25', '2022-02-10 18:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

CREATE TABLE `account_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `account_classification_id` varchar(255) NOT NULL,
  `financial_statement` enum('BalanceSheet','IncomeStatement') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_types`
--

INSERT INTO `account_types` (`id`, `number`, `description`, `account_classification_id`, `financial_statement`, `created_at`, `updated_at`) VALUES
(1, '1-010', 'Cash', '1', 'BalanceSheet', '2022-02-13 15:05:53', '2022-02-13 15:05:53'),
(2, '1-100', 'Bank', '1', 'BalanceSheet', '2022-02-13 15:06:16', '2022-02-13 15:06:16'),
(3, '1-200', 'Account Receivable', '1', 'BalanceSheet', '2022-02-13 15:06:32', '2022-02-13 15:06:32'),
(4, '1-300', 'Prepaid Expenses', '1', 'BalanceSheet', '2022-02-13 15:06:51', '2022-02-13 15:06:51'),
(5, '1-400', 'Inventory', '1', 'BalanceSheet', '2022-02-13 15:07:40', '2022-02-13 15:07:40'),
(6, '1-500', 'Non Current Assets', '1', 'BalanceSheet', '2022-02-13 15:07:51', '2022-02-13 15:07:51'),
(7, '1-600', 'Accumulated Depreciation', '1', 'BalanceSheet', '2022-02-13 15:08:07', '2022-02-13 15:08:07'),
(8, '1-700', 'Other Assets', '1', 'BalanceSheet', '2022-03-25 17:32:21', '2022-03-25 17:32:21'),
(9, '1-800', 'Advance Tax', '1', 'BalanceSheet', '2022-03-25 17:34:01', '2022-03-25 17:34:01'),
(10, '1-900', 'Advance Custom Duty', '1', 'BalanceSheet', '2022-03-25 17:35:12', '2022-03-25 17:35:12'),
(11, '2-100', 'Account Payable', '11', 'BalanceSheet', '2022-03-25 17:36:39', '2022-03-25 17:36:39'),
(12, '2-200', 'Accrued Liabilities', '11', 'BalanceSheet', '2022-03-25 17:37:29', '2022-03-25 17:37:29'),
(13, '2-300', 'Tax Payable', '11', 'BalanceSheet', '2022-03-25 17:39:51', '2022-03-25 17:39:51'),
(14, '2-400', 'Payroll Payable', '11', 'BalanceSheet', '2022-03-25 17:40:59', '2022-03-25 17:40:59'),
(15, '2-500', 'Other Payable', '11', 'BalanceSheet', '2022-03-25 17:41:46', '2022-03-25 17:41:46'),
(16, '2-600', 'Suspense Account', '11', 'BalanceSheet', '2022-03-25 17:42:52', '2022-03-25 17:42:52'),
(17, '2-700', 'Payable Custom Duty', '11', 'BalanceSheet', '2022-03-25 17:43:32', '2022-03-25 17:43:32'),
(18, '2-800', 'Long Term Loan', '11', 'BalanceSheet', '2022-03-25 17:44:32', '2022-03-25 17:44:32'),
(19, '3-100', 'Capital ( Common Stock )', '2', 'BalanceSheet', '2022-03-25 17:47:43', '2022-03-25 17:47:43'),
(20, '3-200', 'Additional Paid in Capital', '2', 'BalanceSheet', '2022-03-25 17:51:55', '2022-03-25 17:51:55'),
(21, '3-300', 'Dividend', '2', 'BalanceSheet', '2022-03-25 17:52:36', '2022-03-25 17:52:36'),
(22, '3-400', 'Retained Earning', '2', 'BalanceSheet', '2022-03-25 17:53:38', '2022-03-25 17:53:38'),
(23, '4-000', 'Revenue', '3', 'IncomeStatement', '2022-03-25 17:54:09', '2022-03-25 17:54:09'),
(24, '4-010', 'Sales Return and Allowance', '3', 'IncomeStatement', '2022-03-25 17:55:07', '2022-03-25 17:55:07'),
(25, '4-100', 'Other Income', '3', 'IncomeStatement', '2022-03-25 17:57:47', '2022-03-25 17:57:47'),
(26, '5-000', 'Cost of Good Sold', '4', 'IncomeStatement', '2022-03-25 18:18:10', '2022-03-25 18:18:10'),
(27, '5-100', 'Operation Expenses', '6', 'IncomeStatement', '2022-03-25 18:19:11', '2022-03-25 18:19:11'),
(28, '6-100', 'Administration Expenses', '7', 'IncomeStatement', '2022-03-25 18:20:06', '2022-03-25 18:20:06'),
(29, '6-200', 'Marketing Expenses', '8', 'IncomeStatement', '2022-03-25 18:21:21', '2022-04-14 23:41:46'),
(30, '6-300', 'Finance Costs', '9', 'IncomeStatement', '2022-03-25 18:21:57', '2022-03-25 18:21:57'),
(31, '6-400', 'Other Expenses', '10', 'IncomeStatement', '2022-03-25 18:22:56', '2022-03-25 18:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `agent_lists`
--

CREATE TABLE `agent_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agent_code` text DEFAULT NULL,
  `nrc` text DEFAULT NULL,
  `nrc_front` text DEFAULT NULL,
  `nrc_back` text DEFAULT NULL,
  `region_id` text DEFAULT NULL,
  `township_id` text DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `add_user_id` text DEFAULT NULL,
  `join_date` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `nrc_code` text DEFAULT NULL,
  `nrc_name` text DEFAULT NULL,
  `nrc_type` text DEFAULT NULL,
  `nrc_number` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `attendance_date` text DEFAULT NULL,
  `on_duty` text DEFAULT NULL,
  `off_duty` text DEFAULT NULL,
  `clock_in` text DEFAULT NULL,
  `clock_out` text DEFAULT NULL,
  `late` text DEFAULT NULL,
  `early` text DEFAULT NULL,
  `absent` text DEFAULT NULL,
  `ot_time` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `authentication_log`
--

CREATE TABLE `authentication_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authenticatable_type` varchar(255) NOT NULL,
  `authenticatable_id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `login_at` timestamp NULL DEFAULT NULL,
  `login_successful` tinyint(1) NOT NULL DEFAULT 0,
  `logout_at` timestamp NULL DEFAULT NULL,
  `cleared_by_user` tinyint(1) NOT NULL DEFAULT 0,
  `location` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cash_books`
--

CREATE TABLE `cash_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cash_book_date` text DEFAULT NULL,
  `entry_day` text DEFAULT NULL,
  `entry_month` text DEFAULT NULL,
  `entry_year` text DEFAULT NULL,
  `reference` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `income` text DEFAULT NULL,
  `expense` text DEFAULT NULL,
  `tax` text DEFAULT NULL,
  `chartof_account_id` text DEFAULT NULL,
  `bank_cash_id` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `demand_invoice_id` int(11) DEFAULT NULL,
  `passport_id` text DEFAULT NULL,
  `passport_payment_id` text DEFAULT NULL,
  `taxe_id` int(11) DEFAULT NULL,
  `tax_computation` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chartof_accounts`
--

CREATE TABLE `chartof_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `coa_number` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `account_type_id` int(11) DEFAULT NULL,
  `account_classification_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub_or_main_account` text DEFAULT NULL,
  `chartof_account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chartof_accounts`
--

INSERT INTO `chartof_accounts` (`id`, `coa_number`, `description`, `account_type_id`, `account_classification_id`, `created_at`, `updated_at`, `sub_or_main_account`, `chartof_account_id`) VALUES
(1, '1-010', 'Cash', 1, 1, '2022-03-28 01:59:51', '2022-03-28 01:59:51', 'main_account', NULL),
(2, '1-100', 'Bank', 2, 1, '2022-03-28 02:00:59', '2022-03-28 02:00:59', 'main_account', NULL),
(3, '1-200', 'Account Receivable', 3, 1, '2022-03-28 02:01:42', '2022-03-28 02:01:42', 'main_account', NULL),
(4, '1-202', 'Trade Receivable', 3, 1, '2022-03-28 02:02:41', '2023-06-13 23:43:25', 'main_account', NULL),
(13, '1-304', 'Other Receivable', 4, 1, '2022-03-28 02:09:52', '2022-03-28 02:09:52', 'main_account', NULL),
(29, '1-500', 'Non Current Assets', 6, 1, '2022-03-28 02:23:46', '2022-03-28 02:23:46', 'main_account', NULL),
(30, '1-501', 'Computer & Accessories', 6, 1, '2022-03-28 02:24:26', '2022-03-28 02:24:26', 'main_account', NULL),
(31, '1-502', 'Furniture', 6, 1, '2022-03-28 02:24:51', '2022-03-28 02:24:51', 'main_account', NULL),
(32, '1-503', 'Office Equipment', 6, 1, '2022-03-28 02:25:31', '2022-03-28 02:25:31', 'main_account', NULL),
(34, '1-600', 'Accumulated Depreciation', 7, 1, '2022-03-28 02:27:02', '2022-03-28 02:27:02', 'main_account', NULL),
(35, '1-601', 'Accumulated Depreciation of Computer & Accessories', 7, 1, '2022-03-28 02:27:51', '2022-03-28 02:27:51', 'main_account', NULL),
(36, '1-602', 'Accumulated Depreciation of Furniture', 7, 1, '2022-03-28 02:28:49', '2022-03-28 02:28:49', 'main_account', NULL),
(37, '1-603', 'Accumulated Depreciation of Office Equipment', 7, 1, '2022-03-28 02:29:50', '2022-03-28 02:29:50', 'main_account', NULL),
(38, '1-604', 'Accumulated Depreciation', 7, 1, '2022-03-28 02:30:34', '2023-06-13 23:50:05', 'main_account', NULL),
(39, '1-700', 'Other Assets', 8, 1, '2022-03-28 02:31:07', '2022-03-28 02:31:07', 'main_account', NULL),
(40, '1-800', 'Advance Tax', 9, 1, '2022-03-28 02:31:33', '2022-03-28 02:31:33', 'main_account', NULL),
(46, '2-100', 'Account Payable', 11, 11, '2022-03-28 15:08:26', '2022-03-28 15:08:26', 'main_account', NULL),
(50, '2-104', 'Trade Payable', 11, 11, '2022-03-28 15:10:48', '2022-03-28 15:10:48', 'main_account', NULL),
(58, '2-203', 'Advanced Received', 12, 11, '2022-03-28 15:17:32', '2022-03-28 15:17:32', 'main_account', NULL),
(59, '2-300', 'Tax Payable', 13, 11, '2022-03-28 15:17:59', '2022-03-28 15:17:59', 'main_account', NULL),
(61, '2-500', 'Other Payable', 15, 11, '2022-03-28 15:19:00', '2022-03-28 15:19:00', 'main_account', NULL),
(68, '3-100', 'Capital ( Common Stock )', 19, 2, '2022-03-28 15:23:22', '2022-03-28 15:23:22', 'main_account', NULL),
(70, '3-300', 'Dividend', 21, 2, '2022-03-28 15:25:20', '2022-03-28 15:25:20', 'main_account', NULL),
(71, '3-400', 'Retained Earning', 22, 2, '2022-03-28 15:26:04', '2022-03-28 15:26:04', 'main_account', NULL),
(72, '4-000', 'Revenue', 23, 3, '2022-03-28 15:26:32', '2022-03-28 15:26:32', 'main_account', NULL),
(86, '4-100', 'Other Income', 25, 3, '2022-03-28 15:38:30', '2022-03-28 15:38:30', 'main_account', NULL),
(103, '5-004', 'Purchase', 26, 4, '2022-03-28 15:48:22', '2023-06-13 23:50:22', 'main_account', NULL),
(118, '5-019', 'Oversea Charges', 26, 4, '2022-03-28 15:58:57', '2022-03-28 15:58:57', 'main_account', NULL),
(155, '6-100', 'Administration Expenses', 28, 7, '2022-03-28 17:20:48', '2022-03-28 17:20:48', 'main_account', NULL),
(156, '6-101', 'Company Registration', 28, 7, '2022-03-28 17:21:46', '2022-03-28 17:21:46', 'main_account', NULL),
(158, '6-103', 'Decoration &  Renovation  Expenses', 28, 7, '2022-03-28 17:25:07', '2022-03-28 17:25:07', 'main_account', NULL),
(159, '6-104', 'Depreciation for Computer & Accessories', 28, 7, '2022-03-28 17:25:56', '2022-03-28 17:25:56', 'main_account', NULL),
(160, '6-105', 'Depreciation for Furniture', 28, 7, '2022-03-28 17:26:24', '2022-03-28 17:26:24', 'main_account', NULL),
(161, '6-106', 'Depreciation for Motor Vehicle', 28, 7, '2022-03-28 17:27:12', '2022-03-28 17:27:12', 'main_account', NULL),
(162, '6-107', 'Depreciation for Office Equipment', 28, 7, '2022-03-28 17:27:45', '2022-03-28 17:27:45', 'main_account', NULL),
(163, '6-108', 'Director Expense', 28, 7, '2022-03-28 17:31:25', '2022-03-28 17:31:25', 'main_account', NULL),
(167, '6-112', 'General Expenses', 28, 7, '2022-03-28 17:34:07', '2022-03-28 17:34:07', 'main_account', NULL),
(169, '6-114', 'Internet Charges', 28, 7, '2022-03-28 17:35:29', '2022-03-28 17:35:29', 'main_account', NULL),
(173, '6-118', 'Medical Allowance', 28, 7, '2022-03-28 17:37:41', '2022-03-28 17:37:41', 'main_account', NULL),
(174, '6-119', 'Office Expenses', 28, 7, '2022-03-28 17:38:04', '2022-03-28 17:38:04', 'main_account', NULL),
(175, '6-120', 'Overtime', 28, 7, '2022-03-28 17:38:31', '2022-03-28 17:38:31', 'main_account', NULL),
(176, '6-121', 'Phone Bill', 28, 7, '2022-03-28 17:38:52', '2022-03-28 17:38:52', 'main_account', NULL),
(179, '6-124', 'Printing and Stationary', 28, 7, '2022-03-28 17:40:17', '2022-03-28 17:40:17', 'main_account', NULL),
(186, '6-131', 'Staff Uniform', 28, 7, '2022-03-28 17:43:51', '2022-03-28 17:43:51', 'main_account', NULL),
(188, '6-133', 'Travelling Expenses', 28, 7, '2022-03-28 17:44:43', '2022-03-28 17:44:43', 'main_account', NULL),
(190, '6-135', 'Wages', 28, 7, '2022-03-28 17:45:21', '2022-03-28 17:45:21', 'main_account', NULL),
(200, '6-400', 'Other Expenses', 31, 10, '2022-03-28 17:50:10', '2022-03-28 17:50:10', 'main_account', NULL),
(201, '1-100-1', 'AYA Saving MMK-0092202010055139/20021829943', 2, 1, '2023-07-06 20:50:42', '2023-07-06 21:05:26', 'sub_account', 2),
(202, '1-100-2', 'AYA Current MMK-0092102010003865/10003821978', 2, 1, '2023-07-06 21:09:18', '2023-07-06 21:09:46', 'sub_account', 2),
(203, '1-100-3', 'AYA USD-10004060570', 2, 1, '2023-07-06 21:09:31', '2023-07-06 21:09:31', 'sub_account', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(10) UNSIGNED NOT NULL,
  `contract_date` text DEFAULT NULL,
  `contract_male` int(11) DEFAULT NULL,
  `contract_female` int(11) DEFAULT NULL,
  `remark` text DEFAULT NULL,
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
  `title` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text DEFAULT NULL,
  `currency_format` text DEFAULT NULL,
  `standard_cost` text DEFAULT NULL,
  `standard_cost_mmk` text DEFAULT NULL,
  `exchange_rate` text DEFAULT NULL,
  `total_amount_mmk` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `title`, `created_at`, `updated_at`, `image`, `currency_format`, `standard_cost`, `standard_cost_mmk`, `exchange_rate`, `total_amount_mmk`) VALUES
(1, 'Thailand', '2023-01-30 10:38:22', '2023-05-29 05:26:50', 'public/images/SrZnG8BeXf5NocabbYs2G4qDXyESv2THaX0kTmyU.png', 'Thai Baht', '3000', '0', '60.43', '181290'),
(2, 'Malaysia', '2023-02-06 11:41:27', '2023-06-06 11:09:26', 'public/images/hRUWIpFkxojT4wvA3Cw4JsoLtYS2mXXeJ4R3gwka.png', 'Ringgit', '5000', '0', '456.11', '2280550'),
(3, 'Japan', '2023-02-06 11:41:32', '2023-04-29 03:32:32', 'public/images/rqZOBlQ5mJC5eaH9pSRvnnYN0y8P9rvao4807ZCk.png', 'Yen', NULL, NULL, NULL, NULL),
(4, 'Singapore', '2023-04-23 01:41:08', '2023-04-29 03:32:36', 'public/images/ziHjqC5FBoRMzHX4AmETAXXyTeIEX7urWOobgEks.png', 'SGD', NULL, NULL, NULL, NULL),
(5, 'UAE', '2023-05-29 04:55:52', '2023-05-29 05:25:24', 'public/images/1ykKL6oIVESEYJvqehTu67n1Kdzl8kFa13J2zl5Y.png', 'AED', '6000', '0', '600', '3600000');

-- --------------------------------------------------------

--
-- Table structure for table `demands`
--

CREATE TABLE `demands` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` text DEFAULT NULL,
  `countrie_id` text DEFAULT NULL,
  `overseas_agencie_id` text DEFAULT NULL,
  `male` text DEFAULT NULL,
  `female` text DEFAULT NULL,
  `demand_date` text DEFAULT NULL,
  `cabinet_date` text DEFAULT NULL,
  `issue_date` text DEFAULT NULL,
  `issue_number` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `demand_status` text DEFAULT NULL,
  `demand_id` text DEFAULT NULL,
  `demand_number` text DEFAULT NULL,
  `job` text DEFAULT NULL,
  `salary` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demand_invoices`
--

CREATE TABLE `demand_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `submit_date` text DEFAULT NULL,
  `overseas_agencie_id` text DEFAULT NULL,
  `demand_id` text DEFAULT NULL,
  `amount` text DEFAULT NULL,
  `total_labour` text DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `invoice_no` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file_management`
--

CREATE TABLE `file_management` (
  `id` int(10) UNSIGNED NOT NULL,
  `overseas_agencie_id` text DEFAULT NULL,
  `demand_id` text DEFAULT NULL,
  `contract_id` text DEFAULT NULL,
  `sending_id` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `file_name` text DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `upload_date` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `submit_date` text DEFAULT NULL
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
  `file_name` text DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `upload_date` text DEFAULT NULL,
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
  `interview_title` text DEFAULT NULL,
  `interview_date` text DEFAULT NULL,
  `interview_male` text DEFAULT NULL,
  `interview_female` text DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `demand_id` text DEFAULT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `passport` text DEFAULT NULL,
  `overseas_agencie_id` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `labour_docs`
--

CREATE TABLE `labour_docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_name` text DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `upload_date` text DEFAULT NULL,
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
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `nrc` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `passport_date` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `place_of_passport` text DEFAULT NULL,
  `owic` text DEFAULT NULL,
  `owic_date` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sending_id` text DEFAULT NULL,
  `passport_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_tests`
--

CREATE TABLE `medical_tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `medical_test_date` text DEFAULT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `passport_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `failed_or_pass` text DEFAULT NULL,
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
  `agent_name` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `passport` text DEFAULT NULL,
  `nrc` text DEFAULT NULL,
  `passport_id` int(11) DEFAULT NULL,
  `session_id` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `agent_list_id` int(11) DEFAULT NULL,
  `types` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members_lists`
--

CREATE TABLE `members_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_path` text DEFAULT NULL,
  `file_name` text DEFAULT NULL,
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
  `migration` varchar(255) NOT NULL,
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
(60, '2023_04_29_095918_add_currency_format_to_countries_table', 50),
(61, '2023_05_01_072001_add_fields_v1_to_interview_labours_table', 51),
(62, '2023_05_04_153954_add_agent_fields_to_overseas_agencies_table', 52),
(63, '2023_05_05_064853_create_account_classifications_table', 53),
(64, '2023_05_05_072427_create_account_types_table', 54),
(65, '2023_05_25_172244_create_chartof_accounts_table', 55),
(66, '2023_05_29_112043_add_standard_cost_to_countries_table', 56),
(67, '2023_05_29_144706_create_cash_books_table', 57),
(68, '2023_06_02_105559_create_demand_invoices_table', 58),
(69, '2023_06_06_091715_add_invoice_no_to_demand_invoices_table', 59),
(70, '2023_06_06_093208_add_labour_cust_to_passports_table', 60),
(71, '2023_06_06_155949_add_demand_invoice_id_to_cash_books_table', 61),
(72, '2023_06_21_071154_add_received_amount_exchange_to__table', 62),
(73, '2023_06_21_101821_add_passport_id_passport_payment_id_to_cash_books_table', 63),
(74, '2023_07_07_030643_add_sub_or_main_account_to_chartof_accounts_table', 64),
(75, '2023_07_08_192853_create_taxes_table', 65),
(76, '2023_07_08_203113_add_taxi_id_to_cash_books_table', 66),
(77, '2023_07_09_080131_add_tax_type_to_taxes_table', 67),
(78, '2023_07_11_031051_create_attendances_table', 68);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(4, 'App\\Models\\User', 1),
(5, 'App\\Models\\User', 6),
(6, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Table structure for table `nrcs`
--

CREATE TABLE `nrcs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` text DEFAULT NULL,
  `name_mm` text DEFAULT NULL,
  `nrc_code` text DEFAULT NULL,
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
  `name` text DEFAULT NULL,
  `location` text DEFAULT NULL,
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
  `company_name` text DEFAULT NULL,
  `type_of_company` text DEFAULT NULL,
  `company_phone` text DEFAULT NULL,
  `company_email` text DEFAULT NULL,
  `company_address` text DEFAULT NULL,
  `countrie_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contact` text DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `agent_company_name` text DEFAULT NULL,
  `agent_contact_person` text DEFAULT NULL,
  `agent_phone` text DEFAULT NULL,
  `agent_email` text DEFAULT NULL,
  `agent_address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `passports`
--

CREATE TABLE `passports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `nrc` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `passport_date` varchar(255) DEFAULT NULL,
  `local_agent_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `join_date` varchar(255) DEFAULT NULL,
  `owic` text DEFAULT NULL,
  `owic_date` text DEFAULT NULL,
  `reject_status` text DEFAULT NULL,
  `reject_date` text DEFAULT NULL,
  `reject_reason` text DEFAULT NULL,
  `place_of_passport` text DEFAULT NULL,
  `agent_list_id` int(11) DEFAULT NULL,
  `mother_name` text DEFAULT NULL,
  `go_date` text DEFAULT NULL,
  `go_reason` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `nation_religion` text DEFAULT NULL,
  `region_state` text DEFAULT NULL,
  `labour_code` text DEFAULT NULL,
  `age` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `nrc_front` text DEFAULT NULL,
  `nrc_back` text DEFAULT NULL,
  `passport_expiry_date` text DEFAULT NULL,
  `qualification` text DEFAULT NULL,
  `weight` text DEFAULT NULL,
  `height` text DEFAULT NULL,
  `tatto` text DEFAULT NULL,
  `smoking` text DEFAULT NULL,
  `alcohol` text DEFAULT NULL,
  `prominent_sign` text DEFAULT NULL,
  `working_experience` text DEFAULT NULL,
  `selected_country` text DEFAULT NULL,
  `labour_card_no` text DEFAULT NULL,
  `issue_of_labour_date` text DEFAULT NULL,
  `identification_card` text DEFAULT NULL,
  `issue_date_of_id_card` text DEFAULT NULL,
  `son` text DEFAULT NULL,
  `son_age` text DEFAULT NULL,
  `daughter` text DEFAULT NULL,
  `daughter_age` text DEFAULT NULL,
  `address_line_one` text DEFAULT NULL,
  `phone_family` text DEFAULT NULL,
  `name_of_heir` text DEFAULT NULL,
  `relative` text DEFAULT NULL,
  `nrc_of_heir` text DEFAULT NULL,
  `passport_cost` text DEFAULT NULL,
  `car_charges` text DEFAULT NULL,
  `passport_register_status` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `marital_status` text DEFAULT NULL,
  `leader` text DEFAULT NULL,
  `nrc_code` text DEFAULT NULL,
  `nrc_name` text DEFAULT NULL,
  `nrc_type` text DEFAULT NULL,
  `nrc_number` text DEFAULT NULL,
  `dob_year` text DEFAULT NULL,
  `dob_month` text DEFAULT NULL,
  `dob_day` text DEFAULT NULL,
  `total_amount_mmk` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `passport_payments`
--

CREATE TABLE `passport_payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `deposit` text DEFAULT NULL,
  `deposit_date` text DEFAULT NULL,
  `passport_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `payment_reason` text DEFAULT NULL,
  `received_amount` text DEFAULT NULL,
  `exchange_rate` text DEFAULT NULL,
  `currency_format` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `passport_payment_files`
--

CREATE TABLE `passport_payment_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `deposit_file_name` text DEFAULT NULL,
  `deposit_file_path` text DEFAULT NULL,
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
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`, `status`) VALUES
(10, 'Thailand', 'web', '2023-07-11 19:23:59', '2023-07-11 19:30:49', 'module'),
(11, 'Malaysia', 'web', '2023-07-11 19:24:06', '2023-07-11 19:30:56', 'module'),
(12, 'Japan', 'web', '2023-07-11 19:24:11', '2023-07-11 19:31:02', 'module'),
(13, 'Singapore', 'web', '2023-07-11 19:24:14', '2023-07-11 19:31:09', 'module'),
(14, 'uae', 'web', '2023-07-11 19:24:18', '2023-07-11 19:24:18', 'module'),
(15, 'accounting', 'web', '2023-07-11 19:24:21', '2023-07-11 19:24:21', 'module'),
(16, 'hr', 'web', '2023-07-11 19:24:23', '2023-07-11 19:24:23', 'module');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `region` text DEFAULT NULL,
  `region_mm` text DEFAULT NULL,
  `status` text DEFAULT NULL,
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
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(4, 'Admin', 'web', '2023-07-11 19:24:37', '2023-07-11 19:24:37'),
(5, 'Accounting', 'web', '2023-07-11 19:24:43', '2023-07-11 19:24:43'),
(6, 'Operation', 'web', '2023-07-11 19:25:00', '2023-07-11 19:25:00');

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
(10, 4),
(10, 6),
(11, 4),
(11, 6),
(12, 4),
(12, 6),
(13, 4),
(13, 6),
(14, 4),
(14, 6),
(15, 4),
(15, 5),
(16, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sendings`
--

CREATE TABLE `sendings` (
  `id` int(10) UNSIGNED NOT NULL,
  `sending_date` text DEFAULT NULL,
  `sending_male` int(11) DEFAULT NULL,
  `sending_female` int(11) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `demand_id` int(11) DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `tax_computation` text DEFAULT NULL,
  `amount` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tax_type` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `tax_name`, `description`, `tax_computation`, `amount`, `status`, `created_at`, `updated_at`, `tax_type`) VALUES
(1, '1000', '1000', 'fixed', '1000', 'Active', '2023-07-08 13:04:47', '2023-07-09 02:12:21', 'sale'),
(2, '5 %', '5 %', 'percent', '5', 'Active', '2023-07-08 13:22:34', '2023-07-09 01:36:21', 'purchase'),
(3, '10 %', '10 %', 'percent', '10', 'Active', '2023-07-08 13:22:47', '2023-07-09 01:34:28', 'sale');

-- --------------------------------------------------------

--
-- Table structure for table `townships`
--

CREATE TABLE `townships` (
  `id` int(10) UNSIGNED NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `township` text DEFAULT NULL,
  `townships_mm` text DEFAULT NULL,
  `status` text DEFAULT NULL,
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
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `join_date` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employee_id` text DEFAULT NULL,
  `nrc_number` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `passport_photo` text DEFAULT NULL,
  `countrie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `join_date`, `remember_token`, `created_at`, `updated_at`, `employee_id`, `nrc_number`, `gender`, `passport_photo`, `countrie_id`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$Le4a7vAtroc7NGRRAbESu.Tpuz2KF4e.CjYDmU3wiRNOtpCj/WiAG', '09444161997', 'Yangon', '2023-03-07 01:51 PM', NULL, '2023-01-29 22:34:39', '2023-04-22 23:25:04', 'EMP-00001', '1/abc(N)009221', 'male', NULL, 3),
(6, 'Accounting', 'account@gmail.com', NULL, '$2y$10$YCbx9r9cNepWywWHj1tfGORMcisQlXAIaPIBGJcx4EMBQAzRmEraa', '000000', 'YGN', '2023-07-12', NULL, '2023-07-11 19:26:49', '2023-07-11 19:26:49', 'EMP-00002', '-', 'male', '', 1),
(7, 'Operation', 'operation@gmail.com', NULL, '$2y$10$ZK9HV9dTd6u1Y14oRvKwveC2qKcwRV/ZWZ86qHNqffKBvwetO34U2', '000001', 'YGN', '2023-07-12', NULL, '2023-07-11 19:27:30', '2023-07-11 19:27:30', 'EMP-00003', '-', 'male', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_classifications`
--
ALTER TABLE `account_classifications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_classifications_ac_code_unique` (`ac_code`);

--
-- Indexes for table `account_types`
--
ALTER TABLE `account_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_types_number_unique` (`number`);

--
-- Indexes for table `agent_lists`
--
ALTER TABLE `agent_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authentication_log`
--
ALTER TABLE `authentication_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authentication_log_authenticatable_type_authenticatable_id_index` (`authenticatable_type`,`authenticatable_id`);

--
-- Indexes for table `cash_books`
--
ALTER TABLE `cash_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chartof_accounts`
--
ALTER TABLE `chartof_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chartof_accounts_coa_number_unique` (`coa_number`);

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
-- Indexes for table `demand_invoices`
--
ALTER TABLE `demand_invoices`
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
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
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
-- AUTO_INCREMENT for table `account_classifications`
--
ALTER TABLE `account_classifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `account_types`
--
ALTER TABLE `account_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `agent_lists`
--
ALTER TABLE `agent_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `authentication_log`
--
ALTER TABLE `authentication_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cash_books`
--
ALTER TABLE `cash_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chartof_accounts`
--
ALTER TABLE `chartof_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `demands`
--
ALTER TABLE `demands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demand_invoices`
--
ALTER TABLE `demand_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_management`
--
ALTER TABLE `file_management`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `passports`
--
ALTER TABLE `passports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sendings`
--
ALTER TABLE `sendings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `townships`
--
ALTER TABLE `townships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
