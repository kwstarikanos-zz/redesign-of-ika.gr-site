-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 14 Ιαν 2018 στις 17:38:29
-- Έκδοση διακομιστή: 10.1.13-MariaDB
-- Έκδοση PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `sdi1400081`
--
CREATE DATABASE IF NOT EXISTS `sdi1400081` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `sdi1400081`;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `announcements`
--

CREATE TABLE `announcements` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `content`, `tag`, `created_at`, `updated_at`) VALUES
(35, 'Sed porttitor lectus nibh. ', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', '#episkeptes', '2018-01-14 14:36:02', NULL),
(36, 'accumsan tincidunt', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(37, 'lacinia eget consectetur', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(38, 'Cras ultricies', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(39, 'luctus et ultrices posuer', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(40, 'elit, eget tincid', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(41, 'ante ipsum primis ', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(42, 'porttitor lectus', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(43, 'sit amet, consectetur adipiscin', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(44, 'malesuada feugiat. ', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(45, 'Nulla porttitor accumsan', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(46, 'ectus nibh.', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(47, 'porttitor lectus nibh.', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(48, 'lacinia in, elementum id enim', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(49, 'Mauris blandit', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(50, 'faucibus orci luctus', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(51, 'sorttitorfg lectus nibh.', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(52, 'Quisque velit nisi', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(53, 'accumsan tincidunt.', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(54, 'porttitor', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(55, 'amet aliquam vel', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL),
(56, 'Nulla quis lorem u', 'pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Sed porttitor lectus nibh.', 'episkeptes', '2018-01-14 14:36:02', NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `employers`
--

CREATE TABLE `employers` (
  `e_id` int(10) UNSIGNED NOT NULL,
  `business` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_afm` bigint(20) DEFAULT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `employers`
--

INSERT INTO `employers` (`e_id`, `business`, `business_afm`, `name`, `surname`) VALUES
(17, 'ΑΒ Βασιλόπουλος ΑΕ', 123456789, 'Γιάννης', 'Ιωάννου'),
(18, NULL, NULL, NULL, NULL),
(19, 'InfoSyntax', 567890123, 'Κώστας', 'Χατζόπουλος');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hirings`
--

CREATE TABLE `hirings` (
  `h_e_id` int(10) UNSIGNED NOT NULL,
  `hire_date` date NOT NULL,
  `insured_afm` bigint(20) NOT NULL,
  `insured_amka` bigint(20) NOT NULL,
  `insured_ama` bigint(20) NOT NULL,
  `jobtitle` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_expiry` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `hirings`
--

INSERT INTO `hirings` (`h_e_id`, `hire_date`, `insured_afm`, `insured_amka`, `insured_ama`, `jobtitle`, `contract_expiry`) VALUES
(17, '2016-10-21', 789012345, 78901234567, 7890123, 'Ταμείο', '2016-12-22'),
(17, '2017-05-10', 234567890, 23456789012, 2345678, 'Εξυπηρέτηση Πελατών', NULL),
(17, '2017-08-08', 345678901, 34567890123, 3456789, 'Ταμείο', '2018-06-18'),
(17, '2018-01-14', 456789012, 45678901234, 4567890, 'Καθαρισμός Εγκαταστάσεων', NULL),
(19, '2017-06-06', 789012345, 78901234567, 7890123, 'Web Developer', NULL),
(19, '2018-01-14', 678901234, 67890123456, 6789012, 'Junior SW Developer', NULL),
(19, '2018-01-14', 890123456, 89012345678, 8901234, 'Πρακτική Άσκηση', '2018-04-06');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `indirectly_insured`
--

CREATE TABLE `indirectly_insured` (
  `amka` bigint(20) NOT NULL,
  `name` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `surname` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `birthdate` date NOT NULL,
  `insured_afm` bigint(20) NOT NULL,
  `insured_amka` bigint(20) NOT NULL,
  `insured_ama` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `indirectly_insured`
--

INSERT INTO `indirectly_insured` (`amka`, `name`, `surname`, `birthdate`, `insured_afm`, `insured_amka`, `insured_ama`) VALUES
(91234567890, 'Νίκος', 'Μιχαλόπουλος', '2006-04-06', 234567890, 23456789012, 2345678),
(98765432109, 'Βασιλική', 'Μιχαλοπούλου', '2010-10-22', 234567890, 23456789012, 2345678);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `insured`
--

CREATE TABLE `insured` (
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `afm` bigint(20) NOT NULL,
  `amka` bigint(20) NOT NULL,
  `ama` bigint(20) NOT NULL,
  `retired` tinyint(1) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `insured`
--

INSERT INTO `insured` (`users_id`, `afm`, `amka`, `ama`, `retired`, `name`, `surname`) VALUES
(NULL, 234567890, 23456789012, 2345678, 0, 'Μιχάλης', 'Μιχαλόπουλος'),
(NULL, 345678901, 34567890123, 3456789, 0, 'Αντώνης', 'Αντωνόπουλος'),
(NULL, 456789012, 45678901234, 4567890, 0, 'Μαρία', 'Μάρου'),
(NULL, 678901234, 67890123456, 6789012, 0, 'Σωτήρης', 'Σωτηρόπουλος'),
(20, 789012345, 78901234567, 7890123, 0, 'Δημήτρης', 'Κρικώνης'),
(21, 876543210, 87654321098, 8765432, 0, NULL, NULL),
(NULL, 890123456, 89012345678, 8901234, 0, 'Κατερίνα', 'Παπαδοπούλου'),
(NULL, 901234567, 90123456789, 9012345, 1, 'Θωμάς', 'Αποστόλου');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `stamps`
--

CREATE TABLE `stamps` (
  `s_id` int(10) UNSIGNED NOT NULL,
  `value` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `hirings_h_e_id` int(10) UNSIGNED NOT NULL,
  `hirings_hire_date` date NOT NULL,
  `hirings_insured_afm` bigint(20) NOT NULL,
  `hirings_insured_amka` bigint(20) NOT NULL,
  `hirings_insured_ama` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `stamps`
--

INSERT INTO `stamps` (`s_id`, `value`, `date`, `hirings_h_e_id`, `hirings_hire_date`, `hirings_insured_afm`, `hirings_insured_amka`, `hirings_insured_ama`) VALUES
(21, 150, '2017-06-10', 17, '2017-05-10', 234567890, 23456789012, 2345678),
(22, 180, '2017-07-10', 17, '2017-05-10', 234567890, 23456789012, 2345678),
(23, 160, '2017-08-10', 17, '2017-05-10', 234567890, 23456789012, 2345678),
(24, 190, '2017-09-10', 17, '2017-05-10', 234567890, 23456789012, 2345678),
(25, 210, '2017-10-10', 17, '2017-05-10', 234567890, 23456789012, 2345678),
(26, 230, '2017-11-10', 17, '2017-05-10', 234567890, 23456789012, 2345678),
(27, 220, '2017-12-10', 17, '2017-05-10', 234567890, 23456789012, 2345678),
(29, 100, '2017-09-08', 17, '2017-08-08', 345678901, 34567890123, 3456789),
(30, 130, '2017-10-08', 17, '2017-08-08', 345678901, 34567890123, 3456789),
(31, 170, '2017-11-08', 17, '2017-08-08', 345678901, 34567890123, 3456789),
(32, 160, '2017-12-08', 17, '2017-08-08', 345678901, 34567890123, 3456789),
(33, 350, '2017-07-06', 19, '2017-06-06', 789012345, 78901234567, 7890123),
(34, 390, '2017-08-06', 19, '2017-06-06', 789012345, 78901234567, 7890123),
(35, 430, '2017-09-06', 19, '2017-06-06', 789012345, 78901234567, 7890123),
(36, 450, '2017-10-06', 19, '2017-06-06', 789012345, 78901234567, 7890123),
(37, 490, '2017-11-06', 19, '2017-06-06', 789012345, 78901234567, 7890123),
(38, 480, '2017-12-06', 19, '2017-06-06', 789012345, 78901234567, 7890123);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(17, 'giannis', 'giannis@giannis.gr', '$2y$10$sCzh85JYhLktMj2bCSyxGub2sBMSlaXCXvy9EE.oJgKcwiJJHOA.2', 'kEdkakUmwRTK3hPWqTfOLxPMhiqLjMjxkrM1J7emtolXE3dCCDY02kIUDilD', '2018-01-14 12:52:54', '2018-01-14 12:52:54'),
(18, 'giorgos', 'giorgos@giorgos.gr', '$2y$10$i4wNAustM/uuKOCbFCn/ce59fxrmOtmwgdsL6xWndIDjGyp08/sby', '81THr7Br20EVQypMD0M4GOx5ZNM9t5LJANe9YmOyjaUBMmvBqQf6UyVOZwKk', '2018-01-14 13:09:58', '2018-01-14 13:09:58'),
(19, 'kwstarikanos', 'kwstarikanos@gmail.com', '$2y$10$YUx4z1OFcAx.4WBIGLvitO..Sw/6WHm2Qh62PemlDvCCvJk22Q/zW', 'heQdS6iwj5VKfzwGzuKyHrAcP43kLkAIV9OSSY6pxreeBrDBSiB6vNj14bcZ', '2018-01-14 13:11:34', '2018-01-14 13:11:34'),
(20, 'dimitris', 'dimitris@dimitris.gr', '$2y$10$md9vcD9BLdkYiDpQ.FTmNuB0uWrgpI7tVheKmujJMyE4nK7789l3e', 'JLCDCPp2brISvJkHZQjiPM8GUwHmT7Bjcv585X3W3JEEFa3NLQHHwVZy8Mk1', '2018-01-14 13:34:22', '2018-01-14 13:34:22'),
(21, 'marianna', 'marianna@marianna.gr', '$2y$10$N1ENzjuBlkHLzTMpkU8dpuqDCGJ6E12BS2yj1oDqb76niTf3wcEH2', NULL, '2018-01-14 13:51:34', '2018-01-14 13:51:34');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `announcements_title_unique` (`title`);

--
-- Ευρετήρια για πίνακα `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`e_id`),
  ADD UNIQUE KEY `e_id_UNIQUE` (`e_id`),
  ADD UNIQUE KEY `employers_business_unique` (`business`),
  ADD UNIQUE KEY `employers_businessafm_unique` (`business_afm`),
  ADD KEY `fk_employers_users1_idx` (`e_id`);

--
-- Ευρετήρια για πίνακα `hirings`
--
ALTER TABLE `hirings`
  ADD PRIMARY KEY (`h_e_id`,`hire_date`,`insured_afm`,`insured_amka`,`insured_ama`),
  ADD KEY `fk_em_in_employers1_idx` (`h_e_id`),
  ADD KEY `fk_hirings_insured1_idx` (`insured_afm`,`insured_amka`,`insured_ama`);

--
-- Ευρετήρια για πίνακα `indirectly_insured`
--
ALTER TABLE `indirectly_insured`
  ADD PRIMARY KEY (`amka`),
  ADD KEY `fk_indirectly_insured_insured1_idx` (`insured_afm`,`insured_amka`,`insured_ama`);

--
-- Ευρετήρια για πίνακα `insured`
--
ALTER TABLE `insured`
  ADD PRIMARY KEY (`afm`,`amka`,`ama`),
  ADD UNIQUE KEY `insured_afm_unique` (`afm`),
  ADD UNIQUE KEY `insured_amka_unique` (`amka`),
  ADD UNIQUE KEY `insured_ama_unique` (`ama`),
  ADD KEY `fk_insured_users_idx` (`users_id`);

--
-- Ευρετήρια για πίνακα `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Ευρετήρια για πίνακα `stamps`
--
ALTER TABLE `stamps`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `fk_stamps_hirings1_idx` (`hirings_h_e_id`,`hirings_hire_date`,`hirings_insured_afm`,`hirings_insured_amka`,`hirings_insured_ama`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT για πίνακα `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT για πίνακα `stamps`
--
ALTER TABLE `stamps`
  MODIFY `s_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `employers`
--
ALTER TABLE `employers`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`e_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `hirings`
--
ALTER TABLE `hirings`
  ADD CONSTRAINT `fk_em_in_employers1` FOREIGN KEY (`h_e_id`) REFERENCES `employers` (`e_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_hirings_insured1` FOREIGN KEY (`insured_afm`,`insured_amka`,`insured_ama`) REFERENCES `insured` (`afm`, `amka`, `ama`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `indirectly_insured`
--
ALTER TABLE `indirectly_insured`
  ADD CONSTRAINT `fk_indirectly_insured_insured1` FOREIGN KEY (`insured_afm`,`insured_amka`,`insured_ama`) REFERENCES `insured` (`afm`, `amka`, `ama`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `insured`
--
ALTER TABLE `insured`
  ADD CONSTRAINT `fk_insured_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `stamps`
--
ALTER TABLE `stamps`
  ADD CONSTRAINT `fk_stamps_hirings1` FOREIGN KEY (`hirings_h_e_id`,`hirings_hire_date`,`hirings_insured_afm`,`hirings_insured_amka`,`hirings_insured_ama`) REFERENCES `hirings` (`h_e_id`, `hire_date`, `insured_afm`, `insured_amka`, `insured_ama`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
