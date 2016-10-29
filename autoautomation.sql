-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2016 at 07:50 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoautomation`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL,
  `locked` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`, `updated_at`, `created_at`, `locked`) VALUES
(1, 'Contact US', '<p>&nbsp;</p>\r\n\r\n<p><strong>EMAIL</strong><br />\r\nAccounting :&nbsp;<a href="mailto:accounting@autoautomation.com">accounting@autoautomation.com</a><br />\r\nCustomer Service:&nbsp;<a href="mailto:customer.service@telcoautomation.com">customer.service@ autoautomation.com </a><br />\r\nSales:&nbsp;sales@ autoautomation.com<br />\r\nTechnical Support:&nbsp;<a href="mailto:technical.support@telcoautomation.com">support@ autoautomation.com </a><br />\r\n<br />\r\n<strong>TELEPHONE</strong><br />\r\nCorporate Office Toll Free: 844-656-8800&nbsp;<br />\r\nLocal Fax: 831-656-8844<br />\r\n<br />\r\n<strong>ADDRESS</strong><br />\r\nCorporate Address:<br />\r\n2460 Garden Road<br />\r\nSuite B<br />\r\nMonterey, CA 93940<br />\r\n<br />\r\nMailing address:<br />\r\nPost Office Box 2599<br />\r\nMonterey, CA 93942-2599</p>\r\n', '2016-06-01 10:36:42', '2016-05-26 13:01:51', 'no'),
(2, 'Telco Automation, Inc. Privacy Policy', '<p>&nbsp;</p>\r\n\r\n<p>This privacy policy discloses the privacy practices for telcoautomation.com. This privacy policy applies solely to information collected by Telco Automation, Inc.</p>\r\n\r\n<p><br />\r\nThe security procedures in place to protect the misuse of your information.<br />\r\nInformation Collection and Use is limited to the information you provide during program execution.&nbsp; Namely your name, phone number and email address.&nbsp; Date and time of the desired equipment maintenance appointment.<br />\r\nWe are the sole owners of the information collected on this site. We only have access to/collect information that you voluntarily give us via email or other direct contact from you. We will not sell or rent this information to anyone other than your specified dealership.<br />\r\nWe will use your information to respond to you, regarding the reason you contacted us. We will not share your information with any third party outside of our organization, other than as necessary to fulfill your request, e.g. to book service appointment.<br />\r\nYour Access to and Control Over Information&nbsp;<br />\r\nYou may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address or phone number given on our website:<br />\r\n&nbsp;&nbsp; &bull; See what data we have about you, if any.<br />\r\n&nbsp;&nbsp; &bull; Change/correct any data we have about you.<br />\r\n&nbsp;&nbsp; &bull; Have us delete any data we have about you.<br />\r\n&nbsp;&nbsp; &bull; Express any concern you have about our use of your data.</p>\r\n\r\n<p>Security&nbsp;<br />\r\nWe take precautions to protect your information. When you submit sensitive information via the website, your information is protected both online and offline.</p>\r\n\r\n<p>Wherever we collect any information (such as name, phone number and email address), that information is encrypted and transmitted to us in a secure way. You can verify this by looking for a closed lock icon at the bottom of your web browser, or looking for &quot;https&quot; at the beginning of the address of the web page.</p>\r\n\r\n<p>Updates<br />\r\nOur Privacy Policy may change from time to time and all updates will be posted on this page.<br />\r\nIf you feel that we are not abiding by this privacy policy, you should contact us immediately via telephone at 831-656- or via email to <a href="mailto:sales@telcoautomation.com">sales@telcoautomation.com</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-06-01 10:37:35', '2016-05-26 13:04:51', 'no'),
(3, 'Telco Automation, Inc. Refund Policy', '<p>Our Refund Policy may change from time to time and all updates will be posted on this page.</p>\r\n\r\n<p>In that we bill for products post facto (after the fact and after delivery), we offer no refunds whatsoever.</p>\r\n', '2016-06-01 10:38:06', '2016-05-26 13:57:23', 'no'),
(4, 'test page', '<p>This is my textarea to be replaced with CKEditor.</p>\r\n', '2016-05-30 06:14:30', '2016-05-30 05:59:51', 'no'),
(5, 'test page1', '<p>This is my textarea to be replaced with CKEditor. asdf</p>\r\n', '2016-05-30 09:02:42', '2016-05-30 06:26:20', 'yes'),
(6, 'test page2', '<p>This is my textarea to be replaced with CKEditor.</p>\r\n', '2016-05-30 09:03:54', '2016-05-30 09:03:25', 'no'),
(7, 'test page3', '<p>This is my textarea to be replaced with CKEditor.</p>\r\n', '2016-05-30 09:04:15', '2016-05-30 09:04:15', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shoukat.telcoautomation@nxvt.com', '259ba8a73e6a31fdf6120d69108ab73d1e6bae812697c22dc624187e87c153cf', '2016-05-26 03:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shoukat hayat', 'shoukat.telcoautomation@nxvt.com', '$2y$10$ZwmytHU1oXzOFXYRtilM9.Suy9hornO1q1PiAHJm1NvawayJMUz8a', 'w5rQiaAXg5XUWB4Unb6zvBTJZeakpQ13IFcCNqqtyiRPjFbQxuWM1OjEQoS2', '2016-05-26 01:50:57', '2016-05-30 02:24:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
