-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 10:02 AM
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
-- Database: `clatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `registrationnumber` varchar(255) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `registrationcard` varchar(255) DEFAULT NULL,
  `gml(10,2)` decimal(8,2) NOT NULL DEFAULT 1.00,
  `cml(10,2)` decimal(8,2) NOT NULL DEFAULT 1.00,
  `hml(10,2)` decimal(8,2) NOT NULL DEFAULT 1.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contactperson` varchar(255) DEFAULT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `company_id`, `name`, `contactperson`, `contactnumber`, `address`, `logo`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hilal', 'Tom', '01516154210', '2no gate Chattogram.', '8331700380173.jpg', 1, 1, '2023-11-19 01:18:53', '2023-11-19 03:01:24'),
(2, 1, 'Rams', 'Thor', '12054120', 'Halishahor Chottogram', '4131700380504.jpg', 1, 1, '2023-11-19 01:30:06', '2023-11-19 01:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contactperson` varchar(255) DEFAULT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contractnumber` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `chargetype` varchar(255) NOT NULL,
  `amount(10,2)` decimal(8,2) NOT NULL DEFAULT 0.00,
  `startdate` date DEFAULT NULL,
  `finishdate` date DEFAULT NULL,
  `collectform` varchar(255) DEFAULT NULL,
  `deliveredto` varchar(255) DEFAULT NULL,
  `totalweight(10,2)` decimal(8,2) DEFAULT NULL,
  `totaldistance(10,2)` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contactperson` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loads`
--

CREATE TABLE `loads` (
  `integer` bigint(20) UNSIGNED NOT NULL,
  `contract_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `asset_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `startdate` date DEFAULT NULL,
  `finishdate` date DEFAULT NULL,
  `starttime` time DEFAULT NULL,
  `finishtime` time DEFAULT NULL,
  `totalweight(10,2)` decimal(8,2) DEFAULT NULL,
  `totaldistance(10,2)` decimal(8,2) DEFAULT NULL,
  `chargetype` varchar(255) NOT NULL,
  `amount(10,2)` decimal(8,2) NOT NULL DEFAULT 1.00,
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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_09_062426_create_companies_table', 1),
(3, '2023_11_09_062453_create_branches_table', 1),
(4, '2023_11_09_062513_create_roles_table', 1),
(5, '2023_11_09_062701_create_product_types_table', 1),
(6, '2023_11_09_064251_create_units_table', 1),
(7, '2023_11_09_064440_create_products_table', 1),
(8, '2023_11_09_070019_create_assets_table', 1),
(9, '2023_11_11_031518_create_customers_table', 1),
(10, '2023_11_11_032107_create_contracts_table', 1),
(11, '2023_11_11_035816_create_loads_table', 1),
(12, '2023_11_11_043945_create_users_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(20) NOT NULL,
  `identity` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `type`, `identity`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', '2023-11-15 22:29:35', NULL),
(2, 'Admin', 'admin', '2023-11-15 22:29:35', NULL),
(3, 'Sales Manager', 'salesmanager', '2023-11-15 22:29:35', NULL),
(4, 'Sales Man', 'salesman', '2023-11-15 22:29:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `contact_no_en` varchar(255) NOT NULL,
  `contact_no_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `image` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `brunch_id` int(11) DEFAULT NULL,
  `full_access` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>yes 0=>no',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 active 0 inactive',
  `remember_token` varchar(100) DEFAULT NULL,
  `access_block` text DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_en`, `name_bn`, `contact_no_en`, `contact_no_bn`, `email`, `role_id`, `password`, `language`, `image`, `company_id`, `brunch_id`, `full_access`, `status`, `remember_token`, `access_block`, `token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Helofira', 'হেলোফিরা', '01537005004', '০১৫৩৭০০৫০০৫', 'helofira@gmail.com', 1, '$2y$12$0N8kBQsEebARNORqrjKtiuWnh2z5Gy5uSt9Gf/RULiI2Dk3derEia', 'en', '7791700292052.jpg', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, '2023-11-15 22:31:41', '2023-11-18 01:20:52'),
(7, 'Freg', 'ফারেগ', '0181', '০১৮১', 'freg@gmail.com', 2, '$2y$12$SNeGtc4XySTW.bMWwh.V4.AmrReixIc4VAbL8bXODUEr8IkMBP/3W', 'en', '9091700291650.jpg', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, '2023-11-18 01:14:10', '2023-11-18 01:14:10'),
(8, 'Istiak', 'ইসতিয়াক', '0154152', '০১৫৪১৫২', 'istiak@gmail.com', 3, '$2y$12$ZMDBHVy.IeqdACeJJxZkfOF//JLAZvJQfOIH3Aky5LTw9T1.wkAIa', 'en', '7231700370049.jpg', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, '2023-11-18 01:51:29', '2023-11-18 23:00:49'),
(9, 'Moinul', 'মইনুল', '01815122938', '০১৮১৫১২২৯৩৮', 'moinul@gmail.com', 4, '$2y$12$/RoKbDUBv3cGTrYUIVQiGOGARK58DStWcX.M5HlRFcZ3ohPfEzC1S', 'en', '8241700370185.jpg', NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, '2023-11-18 23:03:05', '2023-11-18 23:03:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_contactnumber_unique` (`contactnumber`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `loads`
--
ALTER TABLE `loads`
  ADD PRIMARY KEY (`integer`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_type_unique` (`type`),
  ADD UNIQUE KEY `roles_identity_unique` (`identity`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_contact_no_en_unique` (`contact_no_en`),
  ADD UNIQUE KEY `users_contactnumber_bn_unique` (`contact_no_bn`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loads`
--
ALTER TABLE `loads`
  MODIFY `integer` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
