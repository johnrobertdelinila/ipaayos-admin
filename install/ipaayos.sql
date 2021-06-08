-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2021 at 10:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipaayos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1 COMMENT '1. active 0. inactive',
  `role` int(11) NOT NULL DEFAULT 1 COMMENT '1. Manager 0. Super Admin',
  `created_on` varchar(50) NOT NULL,
  `updated_on` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `status`, `role`, `created_on`, `updated_on`) VALUES
(1, 'Admin', 'erickadmin@gmail.com', '123456', 1, 1, '1614095535', '1614095535');

-- --------------------------------------------------------

--
-- Table structure for table `applied_job`
--

CREATE TABLE `applied_job` (
  `aj_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `job_id` varchar(6) NOT NULL,
  `price` varchar(10) NOT NULL DEFAULT '100',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1 = confirm , 2 = complete, 3 =reject ,4=delete by user 5. in process',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(10) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `date_string` varchar(50) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_timestamp` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0. Pending 1. Accepted 2. Rejected 3. Completed 4. Decline 5. In process',
  `timezone` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 1,
  `description` text NOT NULL,
  `about_us` text NOT NULL,
  `skills` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `completion_rate` varchar(25) NOT NULL DEFAULT '0',
  `featured` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = no, 1 = yes',
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `bio` varchar(250) NOT NULL,
  `longitude` double NOT NULL DEFAULT 75.897542,
  `latitude` double NOT NULL DEFAULT 22.749753,
  `location` varchar(250) CHARACTER SET utf8mb4 NOT NULL,
  `live_lat` double NOT NULL DEFAULT 22.749753,
  `live_long` double NOT NULL DEFAULT 75.897542,
  `city` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `video_url` text NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `booking_flag` int(11) NOT NULL DEFAULT 0 COMMENT '0. available 1. busy ',
  `artist_commission_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0. Hourly 1. Flat',
  `is_online` int(11) NOT NULL DEFAULT 1 COMMENT '1. Online 0. Offline',
  `gender` int(11) NOT NULL DEFAULT 0 COMMENT '0. female 1. male',
  `preference` int(11) NOT NULL DEFAULT 0 COMMENT '0. professionally trained 1. self thought',
  `update_profile` int(11) NOT NULL DEFAULT 0 COMMENT '0. Not Updated 1. Updated',
  `banner_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artist_booking`
--

CREATE TABLE `artist_booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `booking_time` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `duration` text NOT NULL,
  `service_id` varchar(2000) NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `category_price` varchar(20) NOT NULL,
  `booking_date` varchar(50) NOT NULL,
  `end_time` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `booking_flag` int(11) NOT NULL DEFAULT 0 COMMENT '0. Pending 1. accept 2.decline 3. in_process 4. completed',
  `decline_by` varchar(20) NOT NULL COMMENT '1. artist 2. customer',
  `time_zone` varchar(50) NOT NULL,
  `decline_reason` text NOT NULL,
  `booking_timestamp` varchar(20) NOT NULL,
  `commission_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0. Category 1. Flat',
  `booking_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0. Real Time 1. Appointment 2.Job 3. Product',
  `flat_type` tinyint(4) NOT NULL DEFAULT 2 COMMENT '1.Percentage 2. Flat Cost',
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `job_id` varchar(200) NOT NULL DEFAULT '0',
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_amount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artist_wallet`
--

CREATE TABLE `artist_wallet` (
  `id` int(11) NOT NULL,
  `artist_id` bigint(20) NOT NULL,
  `amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_invoice`
--

CREATE TABLE `booking_invoice` (
  `id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `invoice_id` varchar(25) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `working_min` varchar(10) NOT NULL,
  `total_amount` varchar(20) NOT NULL DEFAULT '0',
  `artist_amount` varchar(20) NOT NULL DEFAULT '0',
  `tax` varchar(20) NOT NULL,
  `currency_type` varchar(20) NOT NULL,
  `coupon_code` varchar(50) NOT NULL DEFAULT '',
  `payment_status` varchar(50) NOT NULL DEFAULT '2' COMMENT '2. no-action 0. fail 1. success',
  `category_amount` varchar(50) NOT NULL DEFAULT '0',
  `final_amount` varchar(50) NOT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:pending,1:paid',
  `created_at` varchar(20) NOT NULL,
  `payment_type` int(11) NOT NULL DEFAULT 2 COMMENT '1. Cash 0. Online 2. Wallet',
  `commission_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0. Category 1. Flat',
  `flat_type` tinyint(4) NOT NULL DEFAULT 2 COMMENT '1.Percentage 2. Flat Cost',
  `updated_at` varchar(20) NOT NULL,
  `referral_amount` double NOT NULL,
  `referral_percentage` double NOT NULL,
  `to_referral_user_id` bigint(20) NOT NULL,
  `discount_amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1 COMMENT '1. Active 0. Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `cat_name`, `image`, `price`, `created_at`, `updated_at`, `status`) VALUES
(130, 0, 'Technician', 'fitur_h_20210527222546.jpg', '100', '1622076336', '1622147146', 1),
(131, 0, 'Cellphone Technician', 'fitur_h_20210529150913.png', '10', '1622293753', '1622293753', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` bigint(20) NOT NULL,
  `message` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(20) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `send_by` varchar(200) NOT NULL,
  `send_at` varchar(20) NOT NULL,
  `chat_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = text , 2 = image',
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_new`
--

CREATE TABLE `chat_new` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `send_by` varchar(200) NOT NULL,
  `send_at` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `chat_type` int(11) NOT NULL COMMENT '1 = text , 2 = image'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commission_setting`
--

CREATE TABLE `commission_setting` (
  `id` int(11) NOT NULL,
  `commission_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0. Category 1. Flat',
  `flat_amount` varchar(50) NOT NULL,
  `flat_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1.Percentage 2. Flat Cost',
  `updated_at` bigint(20) NOT NULL DEFAULT 1531978644
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commission_setting`
--

INSERT INTO `commission_setting` (`id`, `commission_type`, `flat_amount`, `flat_type`, `updated_at`) VALUES
(1, 1, '10', 1, 1531978644);

-- --------------------------------------------------------

--
-- Table structure for table `currency_setting`
--

CREATE TABLE `currency_setting` (
  `id` int(11) NOT NULL,
  `currency_symbol` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_name` varchar(150) NOT NULL,
  `code` varchar(20) NOT NULL,
  `status` varchar(150) NOT NULL DEFAULT '0' COMMENT '1. current Active 0. Default'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency_setting`
--

INSERT INTO `currency_setting` (`id`, `currency_symbol`, `currency_name`, `code`, `status`) VALUES
(2, '$', 'USD', 'USD', '0'),
(3, '₱', 'PHP', 'PHP', '1'),
(4, 'Af', 'AFN', 'AFN', '2'),
(5, 'Դ', 'AMD', 'AMD', '3'),
(6, 'AOA', 'Kz', 'Kz', '0'),
(7, '$', 'ARS', 'ARS', '0'),
(8, '$', 'AUD', 'AUD', '6'),
(9, 'ƒ', 'AWG', 'AWG', '7'),
(10, 'ман', 'AZN', 'AZN', '0'),
(11, 'КМ', 'BAM', 'BAM', '9'),
(12, '$', 'BBD', 'BBD', '0'),
(13, 'лв', 'BGN', 'BGN', '11'),
(14, '₣', 'BIF', 'BIF', '0'),
(15, '$', 'BMD', 'BMD', '13'),
(16, '$', 'BND', 'BND', '0'),
(17, 'Bs.', 'BOB', 'BOB', '0'),
(18, 'R$', 'BRL', 'BRL', '0'),
(19, '$', 'BSD', 'BSD', '17'),
(20, '$', 'CAD', 'CAD', '18'),
(21, '₣', 'CDF', 'CDF', '19'),
(22, '$', 'CLP', 'CLP', '20'),
(23, '¥', 'CNY', 'CNY', '21'),
(24, '£', 'EGP', 'EGP', '0'),
(25, '€', 'EUR', 'EUR', '0'),
(26, '₨', 'PKR', 'PKR', '0'),
(27, '₨', 'LKR', 'LKR', '25'),
(28, '৳', 'BDT', 'BDT', '0'),
(29, '₨', 'NPR', 'NPR', '27'),
(30, '$', 'NZD', 'NZD', '28'),
(31, 'S/.', 'PEN', 'PEN', '29'),
(32, 'р.', 'RUB', 'RUB', '30'),
(33, '₣', 'XAF', 'XAF', '0'),
(34, '$', 'XCD', 'XCD', '32'),
(35, '$', 'ZWL', 'ZWL', '33'),
(36, '₫', 'VND', 'VND', '0'),
(37, '₴', 'UAH', 'UAH', '35'),
(38, '₤', 'TRY', 'TRY', '0'),
(39, 'L', 'SZL', 'SZL', '0'),
(40, '฿', 'THB', 'THB', '39'),
(41, '₱', 'PHP', 'PHP', '0'),
(42, 'zł', 'PLN', 'PLN', '41'),
(43, '₦', 'NGN', 'NGN', '0'),
(44, 'RM', 'MYR', 'MYR', '43'),
(45, '₮', 'MNT', 'MNT', '0');

-- --------------------------------------------------------

--
-- Table structure for table `discount_coupon`
--

CREATE TABLE `discount_coupon` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `discount_type` int(11) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '1',
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount_coupon`
--

INSERT INTO `discount_coupon` (`id`, `coupon_code`, `description`, `discount_type`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'MARK01', 'discount', 1, '10', '1', '1599684626', '1599684626');

-- --------------------------------------------------------

--
-- Table structure for table `discount_wallet`
--

CREATE TABLE `discount_wallet` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `document` varchar(250) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `fav_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`fav_id`, `user_id`, `artist_id`, `created_at`) VALUES
(2, 5, 11, '2020-06-28 11:08:24'),
(3, 5, 38, '2020-09-28 08:03:44'),
(4, 5, 125, '2020-11-05 16:34:56'),
(5, 5, 208, '2020-12-14 16:38:00'),
(6, 5, 209, '2021-03-07 01:50:05'),
(7, 5, 225, '2021-03-08 07:21:06'),
(8, 5, 303, '2021-03-08 15:10:31'),
(10, 5, 6, '2021-04-17 13:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `firebase_keys`
--

CREATE TABLE `firebase_keys` (
  `id` int(11) NOT NULL,
  `artist_key` text NOT NULL,
  `customer_key` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firebase_keys`
--

INSERT INTO `firebase_keys` (`id`, `artist_key`, `customer_key`) VALUES
(1, 'AAAA0ewfw0E:APA91bG_qTeQ9WAnlwcRrhLreGyR0s7ZWaRV8oSwqqj3DXLt2YjdDrX36vO3ot2rVBuJL2TWzBN9f7oF8r5dBiAgd9ZDJLMUQ1b92DYjAl5qBkczAloZwb5JmoA4qiqoL_l3b-7hgKPm', 'AAAA0ewfw0E:APA91bG_qTeQ9WAnlwcRrhLreGyR0s7ZWaRV8oSwqqj3DXLt2YjdDrX36vO3ot2rVBuJL2TWzBN9f7oF8r5dBiAgd9ZDJLMUQ1b92DYjAl5qBkczAloZwb5JmoA4qiqoL_l3b-7hgKPm');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `user_id`, `image`, `created_at`, `updated_at`) VALUES
(8, 417, '', '1622082733', '1622082733'),
(9, 417, '', '1622082745', '1622082745');

-- --------------------------------------------------------

--
-- Table structure for table `mail_settings`
--

CREATE TABLE `mail_settings` (
  `id` int(11) NOT NULL,
  `register` mediumtext NOT NULL,
  `forgetpassword` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail_settings`
--

INSERT INTO `mail_settings` (`id`, `register`, `forgetpassword`) VALUES
(1, '<p>Thanks for signing up! Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below. Please click</p>', '<p>Your updated password is</p>');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT 0,
  `title` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL DEFAULT 'Individual',
  `msg` text NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `subscription_type` varchar(100) NOT NULL COMMENT '0. free 1. monthly 2. quarterly 3. halfyearly 4. yearly',
  `status` int(10) NOT NULL DEFAULT 1 COMMENT '1 = active; 0 = deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymenthistory`
--

CREATE TABLE `paymenthistory` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `currency_type` varchar(10) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `description` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_success`
--

CREATE TABLE `payment_success` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `invoice_id` bigint(20) NOT NULL,
  `created_at` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paypal_deatils`
--

CREATE TABLE `paypal_deatils` (
  `id` int(11) NOT NULL,
  `artist_id` bigint(20) NOT NULL,
  `business_name` text COLLATE utf8_unicode_ci NOT NULL,
  `paypal_id` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paypal_setting`
--

CREATE TABLE `paypal_setting` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `paypal_id` text NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1. sendbox 2. live'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paypal_setting`
--

INSERT INTO `paypal_setting` (`id`, `name`, `paypal_id`, `type`) VALUES
(1, 'Paypal', 'paypal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_job`
--

CREATE TABLE `post_job` (
  `id` bigint(20) NOT NULL,
  `job_id` varchar(6) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1 = confirm , 2 = complete, 3 =reject, 4= deactive',
  `avtar` varchar(250) NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(10) NOT NULL DEFAULT '100',
  `lati` varchar(50) NOT NULL,
  `longi` varchar(50) NOT NULL,
  `job_date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `job_timestamp` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(11) NOT NULL,
  `privacy` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `privacy`) VALUES
(1, '<h1>Terms and conditions</h1>\r\n<p>These terms and conditions (\"Terms\", \"Agreement\") are an agreement between Mobile Application Developer (\"Mobile Application Developer\", \"us\", \"we\" or \"our\") and you (\"User\", \"you\" or \"your\"). This Agreement sets forth the general terms and conditions of your use of the Servicce app mobile application and any of its products or services (collectively, \"Mobile Application\" or \"Services\").</p>\r\n<h2>Accounts and membership</h2>\r\n<p>If you create an account in the Mobile Application, you are responsible for maintaining the security of your account and you are fully responsible for all activities that occur under the account and any other actions taken in connection with it. We may monitor and review new accounts before you may sign in and use our Services. Providing false contact information of any kind may result in the termination of your account. You must immediately notify us of any unauthorized uses of your account or any other breaches of security. We will not be liable for any acts or omissions by you, including any damages of any kind incurred as a result of such acts or omissions. We may suspend, disable, or delete your account (or any part thereof) if we determine that you have violated any provision of this Agreement or that your conduct or content would tend to damage our reputation and goodwill. If we delete your account for the foregoing reasons, you may not re-register for our Services. We may block your email address and Internet protocol address to prevent further registration.</p>\r\n<h2>User content</h2>\r\n<p>We do not own any data, information or material (\"Content\") that you submit in the Mobile Application in the course of using the Service. You shall have sole responsibility for the accuracy, quality, integrity, legality, reliability, appropriateness, and intellectual property ownership or right to use of all submitted Content. We may monitor and review Content in the Mobile Application submitted or created using our Services by you. You grant us permission to access, copy, distribute, store, transmit, reformat, display and perform the Content of your user account solely as required for the purpose of providing the Services to you. Without limiting any of those representations or warranties, we have the right, though not the obligation, to, in our own sole discretion, refuse or remove any Content that, in our reasonable opinion, violates any of our policies or is in any way harmful or objectionable. You also grant us the license to use, reproduce, adapt, modify, publish or distribute the Content created by you or stored in your user account for commercial, marketing or any similar purpose.</p>\r\n<h2>Backups</h2>\r\n<p>We perform regular backups of the Content and will do our best to ensure completeness and accuracy of these backups. In the event of the hardware failure or data loss we will restore backups automatically to minimize the impact and downtime.</p>\r\n<h2>Links to other mobile applications</h2>\r\n<p>Although this Mobile Application may link to other mobile applications, we are not, directly or indirectly, implying any approval, association, sponsorship, endorsement, or affiliation with any linked mobile application, unless specifically stated herein. We are not responsible for examining or evaluating, and we do not warrant the offerings of, any businesses or individuals or the content of their mobile applications. We do not assume any responsibility or liability for the actions, products, services, and content of any other third parties. You should carefully review the legal statements and other conditions of use of any mobile application which you access through a link from this Mobile Application. Your linking to any other off-site mobile applications is at your own risk.</p>\r\n<h2>Intellectual property rights</h2>\r\n<p>\"Intellectual Property Rights\" means all present and future rights conferred by statute, common law or equity in or in relation to any copyright and related rights, trademarks, designs, patents, inventions, goodwill and the right to sue for passing off, rights to inventions, rights to use, and all other intellectual property rights, in each case whether registered or unregistered and including all applications and rights to apply for and be granted, rights to claim priority from, such rights and all similar or equivalent rights or forms of protection and any other results of intellectual activity which subsist or will subsist now or in the future in any part of the world. This Agreement does not transfer to you any intellectual property owned by Mobile Application Developer or third parties, and all rights, titles, and interests in and to such property will remain (as between the parties) solely with Mobile Application Developer. All trademarks, service marks, graphics and logos used in connection with the Mobile Application or Services, are trademarks or registered trademarks of Mobile Application Developer or Mobile Application Developer licensors. Other trademarks, service marks, graphics and logos used in connection with the Mobile Application or Services may be the trademarks of other third parties. Your use of the Mobile Application and Services grants you no right or license to reproduce or otherwise use any Mobile Application Developer or third party trademarks.</p>\r\n<h2>Changes and amendments</h2>\r\n<p>We reserve the right to modify this Agreement or its policies relating to the Mobile Application or Services at any time, effective upon posting of an updated version of this Agreement in the Mobile Application. When we do, we will post a notification in our Mobile Application. Continued use of the Mobile Application after any such changes shall constitute your consent to such changes. </p>\r\n<h2>Acceptance of these terms</h2>\r\n<p>You acknowledge that you have read this Agreement and agree to all its terms and conditions. By using the Mobile Application or its Services you agree to be bound by this Agreement. If you do not agree to abide by the terms of this Agreement, you are not authorized to use or access the Mobile Application and its Services.</p>\r\n<h2>Contacting us</h2>\r\n<p>If you would like to contact us to understand more about this Agreement or wish to contact us concerning any matter relating to it, you may send an email to support@yourwebsite.com</p>\r\n<p>This document was last updated on June 29, 2020</p>');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(150) NOT NULL,
  `price` varchar(10) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `product_name`, `product_image`, `price`, `created_at`, `updated_at`) VALUES
(1, 24, 'the', 'assets/images/1597850427.jpg', '25', '1597850427', '1597850427'),
(3, 38, 'Car Chalana', 'assets/images/1598550255.jpg', '100', '1598550255', '1598550255'),
(4, 44, 'Nahi', 'assets/images/1598887559.jpg', '500', '1598887559', '1598887559'),
(5, 48, 'ac repairs', 'assets/images/1598961973.jpg', '20', '1598961973', '1598961973'),
(6, 134, 'simple suit', 'assets/images/1601834905.jpg', '300', '1601834905', '1601834905'),
(7, 134, 'aster suit', 'assets/images/1601834955.jpg', '400', '1601834955', '1601834955'),
(9, 6, 'computer reparinig', 'assets/images/1602347267.jpg', '250', '1602347267', '1602347267'),
(11, 6, 'Mobile Car Wash', 'assets/images/1603236773.jpg', '50', '1603236773', '1603236773'),
(12, 208, 'paint', 'assets/images/1605678965.jpg', '650', '1605678965', '1605678965'),
(13, 208, 'wall, painting', 'assets/images/1605679685.jpg', '600', '1605679685', '1605679685'),
(14, 208, 'Art work sq ft', 'assets/images/1605679777.jpg', '250', '1605679777', '1605679777'),
(15, 6, 'make up artist', 'assets/images/1605886442.jpg', '2500', '1605886442', '1605886442'),
(19, 217, 'hair cut', 'assets/images/1605904380.jpg', '200', '1605904380', '1605904380'),
(20, 6, 'agriculture service', 'assets/images/1608391089.jpg', '700', '1608391090', '1608391090'),
(22, 6, 'TEST', 'assets/images/1615130441.jpg', '10', '1615130441', '1615130441'),
(23, 358, '8', 'assets/images/1617619111.jpg', '55', '1617619111', '1617619111');

-- --------------------------------------------------------

--
-- Table structure for table `product_basket`
--

CREATE TABLE `product_basket` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(250) CHARACTER SET utf8 NOT NULL,
  `created_at` bigint(20) NOT NULL DEFAULT 1531822764,
  `status` int(2) NOT NULL DEFAULT 1,
  `booking_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `razorpayment`
--

CREATE TABLE `razorpayment` (
  `id` int(11) NOT NULL,
  `razorpay_payment_id` varchar(255) NOT NULL,
  `userId` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `invoiceId` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `razorpayment`
--

INSERT INTO `razorpayment` (`id`, `razorpay_payment_id`, `userId`, `amount`, `invoiceId`, `created_at`) VALUES
(1, 'pay_000000000', 48, '1000', '879', '2018-11-29 10:34:59');

-- --------------------------------------------------------

--
-- Table structure for table `razor_setting`
--

CREATE TABLE `razor_setting` (
  `id` int(11) NOT NULL,
  `keyId` varchar(100) NOT NULL,
  `keySecret` varchar(100) NOT NULL,
  `displayCurrency` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `razor_setting`
--

INSERT INTO `razor_setting` (`id`, `keyId`, `keySecret`, `displayCurrency`) VALUES
(1, 'rzp_test_WOxaDFygibUoSf', 'hHFe8Vcys3osKBqjaglYRK6L', 'INR');

-- --------------------------------------------------------

--
-- Table structure for table `referral_setting`
--

CREATE TABLE `referral_setting` (
  `id` int(11) NOT NULL,
  `no_of_usages` text NOT NULL,
  `amount` text NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referral_setting`
--

INSERT INTO `referral_setting` (`id`, `no_of_usages`, `amount`, `type`) VALUES
(1, '50', '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `referral_usages`
--

CREATE TABLE `referral_usages` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `referral_code` text NOT NULL,
  `redeem` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0. Not 1 Credit '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referral_usages`
--

INSERT INTO `referral_usages` (`id`, `user_id`, `referral_code`, `redeem`) VALUES
(4, 18, 'RIN502', 1),
(5, 19, 'RIN502', 1),
(6, 20, 'RIN502', 1),
(7, 21, 'RIN502', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL COMMENT '0. admin 1. artist 2. customer',
  `status` int(2) NOT NULL COMMENT '1. active 0. deactive',
  `created_on` varchar(15) NOT NULL,
  `updated_on` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `set_discount`
--

CREATE TABLE `set_discount` (
  `id` int(11) NOT NULL,
  `discount` double NOT NULL DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_discount`
--

INSERT INTO `set_discount` (`id`, `discount`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`) VALUES
(9, 'Slider 1', 'slider5.jpeg'),
(11, 'Slider 2', 'slider1.jpeg'),
(14, 'Photography', 'slider2.jpeg'),
(18, 'ggggg', 'slider3.jpeg'),
(19, 'Ff', 'slider0.png'),
(21, 'Johny', 'slider5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `smtp_setting`
--

CREATE TABLE `smtp_setting` (
  `id` int(11) NOT NULL,
  `email_id` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `url` varchar(50000) NOT NULL,
  `port` varchar(9999) NOT NULL,
  `set_from` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smtp_setting`
--

INSERT INTO `smtp_setting` (`id`, `email_id`, `password`, `url`, `port`, `set_from`) VALUES
(1, 'janrickbersalona1@gmail.com', 'forme12345', 'ssl://smtp.gmail.com', '465', 'Ipaayos Mo Service App');

-- --------------------------------------------------------

--
-- Table structure for table `stripe_keys`
--

CREATE TABLE `stripe_keys` (
  `id` int(11) NOT NULL,
  `api_key` text NOT NULL,
  `publishable_key` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stripe_keys`
--

INSERT INTO `stripe_keys` (`id`, `api_key`, `publishable_key`) VALUES
(1, 's', 's');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1. Active 0. Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_history`
--

CREATE TABLE `subscription_history` (
  `currency_type` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `txn_id` varchar(50) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `subscription_type` varchar(100) NOT NULL,
  `subscription_start_date` varchar(100) NOT NULL,
  `subscription_end_date` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `terms` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `terms`) VALUES
(1, '<h1>Terms and conditions</h1>\r\n<p>These terms and conditions (\"Terms\", \"Agreement\") are an agreement between Mobile Application Developer (\"Mobile Application Developer\", \"us\", \"we\" or \"our\") and you (\"User\", \"you\" or \"your\"). This Agreement sets forth the general terms and conditions of your use of the Servicce app mobile application and any of its products or services (collectively, \"Mobile Application\" or \"Services\").</p>\r\n<h2>Accounts and membership</h2>\r\n<p>If you create an account in the Mobile Application, you are responsible for maintaining the security of your account and you are fully responsible for all activities that occur under the account and any other actions taken in connection with it. We may monitor and review new accounts before you may sign in and use our Services. Providing false contact information of any kind may result in the termination of your account. You must immediately notify us of any unauthorized uses of your account or any other breaches of security. We will not be liable for any acts or omissions by you, including any damages of any kind incurred as a result of such acts or omissions. We may suspend, disable, or delete your account (or any part thereof) if we determine that you have violated any provision of this Agreement or that your conduct or content would tend to damage our reputation and goodwill. If we delete your account for the foregoing reasons, you may not re-register for our Services. We may block your email address and Internet protocol address to prevent further registration.</p>\r\n<h2>User content</h2>\r\n<p>We do not own any data, information or material (\"Content\") that you submit in the Mobile Application in the course of using the Service. You shall have sole responsibility for the accuracy, quality, integrity, legality, reliability, appropriateness, and intellectual property ownership or right to use of all submitted Content. We may monitor and review Content in the Mobile Application submitted or created using our Services by you. You grant us permission to access, copy, distribute, store, transmit, reformat, display and perform the Content of your user account solely as required for the purpose of providing the Services to you. Without limiting any of those representations or warranties, we have the right, though not the obligation, to, in our own sole discretion, refuse or remove any Content that, in our reasonable opinion, violates any of our policies or is in any way harmful or objectionable. You also grant us the license to use, reproduce, adapt, modify, publish or distribute the Content created by you or stored in your user account for commercial, marketing or any similar purpose.</p>\r\n<h2>Backups</h2>\r\n<p>We perform regular backups of the Content and will do our best to ensure completeness and accuracy of these backups. In the event of the hardware failure or data loss we will restore backups automatically to minimize the impact and downtime.</p>\r\n<h2>Links to other mobile applications</h2>\r\n<p>Although this Mobile Application may link to other mobile applications, we are not, directly or indirectly, implying any approval, association, sponsorship, endorsement, or affiliation with any linked mobile application, unless specifically stated herein. We are not responsible for examining or evaluating, and we do not warrant the offerings of, any businesses or individuals or the content of their mobile applications. We do not assume any responsibility or liability for the actions, products, services, and content of any other third parties. You should carefully review the legal statements and other conditions of use of any mobile application which you access through a link from this Mobile Application. Your linking to any other off-site mobile applications is at your own risk.</p>\r\n<h2>Intellectual property rights</h2>\r\n<p>\"Intellectual Property Rights\" means all present and future rights conferred by statute, common law or equity in or in relation to any copyright and related rights, trademarks, designs, patents, inventions, goodwill and the right to sue for passing off, rights to inventions, rights to use, and all other intellectual property rights, in each case whether registered or unregistered and including all applications and rights to apply for and be granted, rights to claim priority from, such rights and all similar or equivalent rights or forms of protection and any other results of intellectual activity which subsist or will subsist now or in the future in any part of the world. This Agreement does not transfer to you any intellectual property owned by Mobile Application Developer or third parties, and all rights, titles, and interests in and to such property will remain (as between the parties) solely with Mobile Application Developer. All trademarks, service marks, graphics and logos used in connection with the Mobile Application or Services, are trademarks or registered trademarks of Mobile Application Developer or Mobile Application Developer licensors. Other trademarks, service marks, graphics and logos used in connection with the Mobile Application or Services may be the trademarks of other third parties. Your use of the Mobile Application and Services grants you no right or license to reproduce or otherwise use any Mobile Application Developer or third party trademarks.</p>\r\n<h2>Changes and amendments</h2>\r\n<p>We reserve the right to modify this Agreement or its policies relating to the Mobile Application or Services at any time, effective upon posting of an updated version of this Agreement in the Mobile Application. When we do, we will post a notification in our Mobile Application. Continued use of the Mobile Application after any such changes shall constitute your consent to such changes.</p>\r\n<h2>Acceptance of these terms</h2>\r\n<p>You acknowledge that you have read this Agreement and agree to all its terms and conditions. By using the Mobile Application or its Services you agree to be bound by this Agreement. If you do not agree to abide by the terms of this Agreement, you are not authorized to use or access the Mobile Application and its Services.</p>\r\n<h2>Contacting us</h2>\r\n<p>If you would like to contact us to understand more about this Agreement or wish to contact us concerning any matter relating to it, you may send an email to support@yourwebsite.com</p>\r\n<p>This document was last updated on June 29, 2020</p>');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0. Pending 1. Solve 2. Close',
  `craeted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_comments`
--

CREATE TABLE `ticket_comments` (
  `id` bigint(20) NOT NULL,
  `ticket_id` bigint(20) NOT NULL,
  `comment` text NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1. user 0. Admin',
  `user_id` bigint(20) NOT NULL DEFAULT 0 COMMENT '0. Admin',
  `created_at` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `image` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL,
  `office_address` varchar(250) NOT NULL,
  `live_lat` double NOT NULL,
  `live_long` double NOT NULL,
  `role` int(2) NOT NULL COMMENT '1 Artist 2. User',
  `status` int(2) NOT NULL DEFAULT 1 COMMENT '1. Active 0. Deactive',
  `approval_status` int(2) NOT NULL DEFAULT 1 COMMENT '1. Approve 0. Decline',
  `created_at` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `referral_code` varchar(20) NOT NULL,
  `user_referral_code` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `device_type` varchar(200) NOT NULL,
  `device_id` varchar(200) NOT NULL,
  `device_token` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `i_card` text NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `bank_name` text NOT NULL,
  `account_no` text NOT NULL,
  `ifsc_code` text NOT NULL,
  `account_holder_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_session`
--

CREATE TABLE `user_session` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_key` varchar(250) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_subscription`
--

CREATE TABLE `user_subscription` (
  `currency_type` varchar(250) NOT NULL,
  `subsciption_id` int(11) NOT NULL,
  `txn_id` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `subscription_type` varchar(500) NOT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT 2 COMMENT '0. Pending 1. Paid 2. No Action',
  `subscription_start_date` varchar(500) NOT NULL,
  `subscription_end_date` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_warning`
--

CREATE TABLE `user_warning` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_warning`
--

INSERT INTO `user_warning` (`id`, `user_id`, `created_at`) VALUES
(82, 415, 1622146977);

-- --------------------------------------------------------

--
-- Table structure for table `wallet_history`
--

CREATE TABLE `wallet_history` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `description` varchar(250) NOT NULL DEFAULT 'Add money',
  `amount` double NOT NULL,
  `invoice_id` text NOT NULL,
  `currency_type` varchar(20) CHARACTER SET utf8mb4 NOT NULL DEFAULT '$',
  `type` tinyint(4) NOT NULL COMMENT '0. discount 1. add money 2. booking 4. referral',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0. credit 1. Debit ',
  `order_id` text NOT NULL,
  `created_at` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet_history`
--

INSERT INTO `wallet_history` (`id`, `user_id`, `description`, `amount`, `invoice_id`, `currency_type`, `type`, `status`, `order_id`, `created_at`) VALUES
(157, 417, 'Booking invoice', -20, 'AJP7GK6WBENR', '₱', 2, 1, '1622097291', 1622097291),
(158, 417, 'Booking invoice', 20, 'AJP7GK6WBENR', '₱', 2, 1, '1622097300', 1622097300),
(159, 417, 'Booking invoice', 20, 'AJP7GK6WBENR', '₱', 2, 1, '1622097366', 1622097366),
(160, 417, 'Booking invoice', 35, '8SUKNVUNSJN3', '₱', 2, 1, '1622293376', 1622293376);

-- --------------------------------------------------------

--
-- Table structure for table `wallet_request`
--

CREATE TABLE `wallet_request` (
  `id` bigint(20) NOT NULL,
  `artist_id` bigint(20) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0. Pending 1. Paid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_job`
--
ALTER TABLE `applied_job`
  ADD PRIMARY KEY (`aj_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist_booking`
--
ALTER TABLE `artist_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist_wallet`
--
ALTER TABLE `artist_wallet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_invoice`
--
ALTER TABLE `booking_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `chat_new`
--
ALTER TABLE `chat_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission_setting`
--
ALTER TABLE `commission_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency_setting`
--
ALTER TABLE `currency_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_coupon`
--
ALTER TABLE `discount_coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_wallet`
--
ALTER TABLE `discount_wallet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`fav_id`);

--
-- Indexes for table `firebase_keys`
--
ALTER TABLE `firebase_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_settings`
--
ALTER TABLE `mail_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_success`
--
ALTER TABLE `payment_success`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paypal_deatils`
--
ALTER TABLE `paypal_deatils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paypal_setting`
--
ALTER TABLE `paypal_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_job`
--
ALTER TABLE `post_job`
  ADD PRIMARY KEY (`job_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_basket`
--
ALTER TABLE `product_basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `razorpayment`
--
ALTER TABLE `razorpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `razor_setting`
--
ALTER TABLE `razor_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral_setting`
--
ALTER TABLE `referral_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral_usages`
--
ALTER TABLE `referral_usages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_discount`
--
ALTER TABLE `set_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp_setting`
--
ALTER TABLE `smtp_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stripe_keys`
--
ALTER TABLE `stripe_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_history`
--
ALTER TABLE `subscription_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_comments`
--
ALTER TABLE `ticket_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_session`
--
ALTER TABLE `user_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_subscription`
--
ALTER TABLE `user_subscription`
  ADD PRIMARY KEY (`subsciption_id`),
  ADD UNIQUE KEY `subsciption_id` (`subsciption_id`),
  ADD UNIQUE KEY `email_id` (`user_id`);

--
-- Indexes for table `user_warning`
--
ALTER TABLE `user_warning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet_history`
--
ALTER TABLE `wallet_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet_request`
--
ALTER TABLE `wallet_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applied_job`
--
ALTER TABLE `applied_job`
  MODIFY `aj_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artist_booking`
--
ALTER TABLE `artist_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artist_wallet`
--
ALTER TABLE `artist_wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_invoice`
--
ALTER TABLE `booking_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_new`
--
ALTER TABLE `chat_new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commission_setting`
--
ALTER TABLE `commission_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `currency_setting`
--
ALTER TABLE `currency_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `discount_coupon`
--
ALTER TABLE `discount_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `discount_wallet`
--
ALTER TABLE `discount_wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `firebase_keys`
--
ALTER TABLE `firebase_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mail_settings`
--
ALTER TABLE `mail_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_success`
--
ALTER TABLE `payment_success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paypal_deatils`
--
ALTER TABLE `paypal_deatils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paypal_setting`
--
ALTER TABLE `paypal_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_job`
--
ALTER TABLE `post_job`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_basket`
--
ALTER TABLE `product_basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `razorpayment`
--
ALTER TABLE `razorpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `razor_setting`
--
ALTER TABLE `razor_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `referral_setting`
--
ALTER TABLE `referral_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `referral_usages`
--
ALTER TABLE `referral_usages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `set_discount`
--
ALTER TABLE `set_discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `smtp_setting`
--
ALTER TABLE `smtp_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stripe_keys`
--
ALTER TABLE `stripe_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscription_history`
--
ALTER TABLE `subscription_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_comments`
--
ALTER TABLE `ticket_comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_session`
--
ALTER TABLE `user_session`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_subscription`
--
ALTER TABLE `user_subscription`
  MODIFY `subsciption_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_warning`
--
ALTER TABLE `user_warning`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `wallet_history`
--
ALTER TABLE `wallet_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `wallet_request`
--
ALTER TABLE `wallet_request`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
