-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2017 at 06:38 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shinearly`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions_logs`
--

CREATE TABLE `actions_logs` (
  `actions_logs_id` int(11) NOT NULL,
  `email_login` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  `note` text,
  `url` varchar(255) DEFAULT NULL,
  `actions` varchar(255) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actions_logs`
--

INSERT INTO `actions_logs` (`actions_logs_id`, `email_login`, `user_agent`, `ip_address`, `note`, `url`, `actions`, `timestamp_create`) VALUES
(1, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'save on [admin/settings/update]', 'http://localhost/shinearly/admin/settings/update', 'save', '2017-08-25 23:22:36'),
(2, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'save on [admin/settings/update]', 'http://localhost/shinearly/admin/settings/update', 'save', '2017-08-25 23:35:25'),
(3, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'save on [admin/settings/update]', 'http://localhost/shinearly/admin/settings/update', 'save', '2017-08-25 23:36:09'),
(4, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'save on [admin/settings/update]', 'http://localhost/shinearly/admin/settings/update', 'save', '2017-08-30 23:32:43'),
(5, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'save on [admin/settings/update]', 'http://localhost/shinearly/admin/settings/update', 'save', '2017-08-30 23:33:05'),
(6, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'save on [admin/settings/update]', 'http://localhost/shinearly/admin/settings/update', 'save', '2017-08-31 22:08:49'),
(7, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'save on [admin/upgrade/clearAllCache]', 'http://localhost/shinearly/admin/upgrade/clearAllCache', 'save', '2017-08-31 22:13:22'),
(8, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'delete on [admin/upgrade/clearAllSession]', 'http://localhost/shinearly/admin/upgrade/clearAllSession', 'delete', '2017-08-31 22:13:38'),
(9, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'delete on [admin/student/delete/12]', 'http://localhost/shinearly/admin/student/delete/12', 'delete', '2017-08-31 22:59:01'),
(10, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'delete on [admin/student/delete/11]', 'http://localhost/shinearly/admin/student/delete/11', 'delete', '2017-08-31 22:59:09'),
(11, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'save on [admin/student/new/add]', 'http://localhost/shinearly/admin/student/new/add', 'save', '2017-08-31 23:09:44'),
(12, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'save on [admin/student/new/add]', 'http://localhost/shinearly/admin/student/new/add', 'save', '2017-08-31 23:10:03'),
(13, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'save on [admin/student/edited/15]', 'http://localhost/shinearly/admin/student/edited/15', 'save', '2017-08-31 23:10:30'),
(14, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'save on [admin/student/new/add]', 'http://localhost/shinearly/admin/student/new/add', 'save', '2017-08-31 23:10:56'),
(15, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'save on [admin/student/new/add]', 'http://localhost/shinearly/admin/student/new/add', 'save', '2017-08-31 23:11:18'),
(16, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'save on [admin/student/new/add]', 'http://localhost/shinearly/admin/student/new/add', 'save', '2017-08-31 23:20:44'),
(17, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'delete on [admin/student/delete/17]', 'http://localhost/shinearly/admin/student/delete/17', 'delete', '2017-08-31 23:20:58'),
(18, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'save on [admin/users/edited/1]', 'http://localhost/shinearly/admin/users/edited/1', 'save', '2017-08-31 23:33:36'),
(19, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'delete on [admin/teacher/delete/15]', 'http://localhost/shinearly/admin/teacher/delete/15', 'delete', '2017-09-02 14:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `article_db`
--

CREATE TABLE `article_db` (
  `article_db_id` int(11) NOT NULL,
  `url_rewrite` varchar(255) DEFAULT NULL,
  `is_category` int(11) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `main_cat_id` int(11) DEFAULT NULL,
  `main_picture` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `short_desc` varchar(255) DEFAULT NULL,
  `content` text,
  `user_admin_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `lang_iso` varchar(10) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `fb_comment_active` int(11) DEFAULT NULL,
  `fb_comment_limit` int(11) DEFAULT NULL,
  `fb_comment_sort` varchar(20) DEFAULT NULL,
  `arrange` int(11) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `banner_mgt`
--

CREATE TABLE `banner_mgt` (
  `banner_mgt_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `width` int(5) DEFAULT NULL,
  `height` int(5) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `nofollow` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `note` text,
  `timestamp_create` datetime DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `banner_statistic`
--

CREATE TABLE `banner_statistic` (
  `banner_statistic_id` int(11) NOT NULL,
  `banner_mgt_id` int(11) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blacklist_ip`
--

CREATE TABLE `blacklist_ip` (
  `blacklist_ip_id` int(11) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `note` text,
  `timestamp_create` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `email_logs`
--

CREATE TABLE `email_logs` (
  `email_logs_id` int(11) NOT NULL,
  `to_email` varchar(255) DEFAULT NULL,
  `from_email` varchar(255) DEFAULT NULL,
  `from_name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  `email_result` text,
  `user_agent` varchar(255) DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `footer_social`
--

CREATE TABLE `footer_social` (
  `footer_social_id` int(11) NOT NULL,
  `social_name` varchar(255) DEFAULT NULL,
  `social_url` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_social`
--

INSERT INTO `footer_social` (`footer_social_id`, `social_name`, `social_url`, `active`, `timestamp_update`) VALUES
(1, 'twitter', '', 0, '2016-05-06 15:50:59'),
(2, 'facebook', '', 0, '2016-05-06 15:50:59'),
(3, 'linkedin', '', 0, '2016-05-06 15:50:59'),
(4, 'youtube', '', 0, '2016-05-06 15:50:59'),
(5, 'google', '', 0, '2016-05-06 15:50:59'),
(6, 'pinterest', '', 0, '2016-05-06 15:50:59'),
(7, 'foursquare', '', 0, '2016-05-06 15:50:59'),
(8, 'myspace', '', 0, '2016-05-06 15:50:59'),
(9, 'soundcloud', '', 0, '2016-05-06 15:50:59'),
(10, 'spotify', '', 0, '2016-05-06 15:50:59'),
(11, 'lastfm', '', 0, '2016-05-06 15:50:59'),
(12, 'vimeo', '', 0, '2016-05-06 15:50:59'),
(13, 'dailymotion', '', 0, '2016-05-06 15:50:59'),
(14, 'vine', '', 0, '2016-05-06 15:50:59'),
(15, 'flickr', '', 0, '2016-05-06 15:50:59'),
(16, 'instagram', '', 0, '2016-05-06 15:50:59'),
(17, 'tumblr', '', 0, '2016-05-06 15:50:59'),
(18, 'reddit', '', 0, '2016-05-06 15:50:59'),
(19, 'envato', '', 0, '2016-05-06 15:50:59'),
(20, 'github', '', 0, '2016-05-06 15:50:59'),
(21, 'tripadvisor', '', 0, '2016-05-06 15:50:59'),
(22, 'stackoverflow', '', 0, '2016-05-06 15:50:59'),
(23, 'persona', '', 0, '2016-05-06 15:50:59'),
(24, 'odnoklassniki', '', 0, '2016-05-06 15:50:59'),
(25, 'vk', '', 0, '2016-05-06 15:50:59'),
(26, 'gitlab', '', 0, '2016-05-06 15:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `form_contactus_en`
--

CREATE TABLE `form_contactus_en` (
  `form_contactus_en_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_type` varchar(255) DEFAULT NULL,
  `message` text,
  `ip_address` varchar(255) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `form_field`
--

CREATE TABLE `form_field` (
  `form_field_id` int(11) NOT NULL,
  `form_main_id` int(11) DEFAULT NULL,
  `field_type` varchar(100) DEFAULT NULL,
  `field_name` varchar(255) DEFAULT NULL,
  `field_id` varchar(255) DEFAULT NULL,
  `field_class` varchar(255) DEFAULT NULL,
  `field_placeholder` varchar(255) DEFAULT NULL,
  `field_value` varchar(255) DEFAULT NULL,
  `field_label` varchar(255) DEFAULT NULL,
  `sel_option_val` text,
  `field_required` int(11) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_field`
--

INSERT INTO `form_field` (`form_field_id`, `form_main_id`, `field_type`, `field_name`, `field_id`, `field_class`, `field_placeholder`, `field_value`, `field_label`, `sel_option_val`, `field_required`, `timestamp_create`, `timestamp_update`) VALUES
(1, 1, 'text', 'name', 'name', 'form-control', '', '', 'Name', '', 1, '2016-05-02 19:15:50', '2016-05-02 19:15:50'),
(2, 1, 'email', 'email', 'email', 'form-control', '', '', 'Email Address', '', 1, '2016-05-02 19:15:50', '2016-05-02 19:15:50'),
(3, 1, 'selectbox', 'contact_type', 'contact_type', 'form-control', '-- Choose Type --', '', 'Contact Type', 'question=>Question, contact us=>Contact Us, service=>Service', 1, '2016-05-02 19:15:50', '2016-05-02 19:15:50'),
(4, 1, 'textarea', 'message', 'message', 'form-control', '', '', 'Message', '', 1, '2016-05-02 19:15:50', '2016-05-02 19:15:50'),
(5, 1, 'submit', 'submit', 'submit', 'btn btn-primary', '', 'Send now', '', '', 0, '2016-05-02 19:15:50', '2016-05-02 19:15:50'),
(6, 1, 'reset', 'reset', 'reset', 'btn btn-default', '', 'Reset', '', '', 0, '2016-05-02 19:15:50', '2016-05-02 19:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `form_main`
--

CREATE TABLE `form_main` (
  `form_main_id` int(11) NOT NULL,
  `form_name` varchar(255) DEFAULT NULL,
  `form_enctype` varchar(255) DEFAULT NULL,
  `form_method` varchar(255) DEFAULT NULL,
  `success_txt` varchar(255) DEFAULT NULL,
  `captchaerror_txt` varchar(255) DEFAULT NULL,
  `error_txt` varchar(255) DEFAULT NULL,
  `sendmail` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `send_to_visitor` int(11) DEFAULT NULL,
  `email_field_id` int(11) DEFAULT NULL,
  `visitor_subject` varchar(255) DEFAULT NULL,
  `visitor_body` text,
  `active` int(11) DEFAULT NULL,
  `captcha` int(11) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_main`
--

INSERT INTO `form_main` (`form_main_id`, `form_name`, `form_enctype`, `form_method`, `success_txt`, `captchaerror_txt`, `error_txt`, `sendmail`, `email`, `subject`, `send_to_visitor`, `email_field_id`, `visitor_subject`, `visitor_body`, `active`, `captcha`, `timestamp_create`, `timestamp_update`) VALUES
(1, 'contactus_en', '', 'post', 'Successfully!', 'The Security Check was not input correctly. Please try again.', 'Error! Please try again.', 1, '', 'Contact us from the SLA-CMS website', 0, 0, '', '', 1, 1, '2016-05-02 19:15:50', '2016-05-02 19:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_db`
--

CREATE TABLE `gallery_db` (
  `gallery_db_id` int(11) NOT NULL,
  `album_name` varchar(255) DEFAULT NULL,
  `url_rewrite` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `short_desc` text,
  `lang_iso` varchar(10) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `arrange` int(11) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_picture`
--

CREATE TABLE `gallery_picture` (
  `gallery_picture_id` int(11) NOT NULL,
  `gallery_db_id` int(11) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `arrange` int(11) DEFAULT NULL,
  `gallery_type` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `general_label`
--

CREATE TABLE `general_label` (
  `general_label_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `remark` text,
  `lang_en` text,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general_label`
--

INSERT INTO `general_label` (`general_label_id`, `name`, `remark`, `lang_en`, `timestamp_update`) VALUES
(1, 'login_heading', 'For member login Header text', 'Member Login', '2016-07-04 11:43:18'),
(2, 'login_incorrect', 'For member login incorrect', 'Email address/Password is incorrect', '2016-07-04 11:44:09'),
(3, 'captcha_wrong', 'For member login when wrong captcha', 'The Security Check was not input correctly. Please try again.', '2016-07-04 11:44:39'),
(4, 'login_email', 'For email address label', 'Email Address', '2016-06-23 23:34:45'),
(5, 'login_password', 'For password label', 'Your Password', '2016-06-23 23:35:22'),
(6, 'login_signin', 'For member login button', 'Log in', '2016-06-23 23:35:53'),
(7, 'login_forgetpwd', 'For member forget password button', 'Forgot Password', '2016-06-23 23:37:02'),
(8, 'login_register', 'For member register label', 'Register', '2016-06-24 16:41:07'),
(9, 'mamber_firstname', 'For member firstname label', 'First Name', '2016-06-24 16:58:09'),
(10, 'member_lastname', 'For member lastname label', 'Last Name', '2016-06-24 16:58:09'),
(11, 'member_address', 'For member address label', 'Address', '2016-06-24 16:58:09'),
(12, 'confirm_password', 'For confirm password label', 'Confirm Password', '2016-06-24 16:58:09'),
(13, 'member_forgot_complete', 'For forget password is successfully', 'Successfully! Your password has been reset', '2016-06-24 16:58:09'),
(14, 'member_reset_btn', 'For reset button', 'Reset', '2016-06-24 17:48:32'),
(15, 'member_forget_chkmail', 'For reset text email to inbox', 'Please check your email inbox and click the link to reset your password.', '2016-06-24 17:48:32'),
(16, 'email_reset_subject', 'For email subject when member forget password', 'Reset your member password', '2016-06-26 15:43:39'),
(17, 'email_reset_message', 'For email message when member forget password', 'Please click the link below within 30 minutes to reset your password.', '2016-06-26 15:43:39'),
(18, 'email_dear', 'For email header', 'Dear ', '2016-06-26 15:43:39'),
(19, 'email_footer', 'For email footer', 'Regards,', '2016-06-26 15:43:39'),
(20, 'email_check', 'For email does not exist text', 'This email address does not exist', '2016-06-26 15:47:01'),
(21, 'btn_cancel', 'For cancel button', 'Cancel', '2016-06-26 15:52:28'),
(22, 'btn_back', 'For back button', 'Back', '2016-06-26 15:53:59'),
(23, 'email_already', 'For email has already', 'This email address has already', '2016-06-26 21:31:20'),
(24, 'email_confirm_subject', 'For email confirm subject text', 'Confirm your mamber register', '2016-06-27 18:00:10'),
(25, 'email_confirm_message', 'For email confirm message', 'Please click the link below within 30 minutes to confirm your member.', '2016-06-28 10:28:20'),
(26, 'log_out', 'For log out text', 'Log out', '2016-07-01 16:25:24'),
(27, 'backend_system', 'For back-end system text', 'Admin System', '2016-07-01 16:25:24'),
(28, 'edit_profile', 'For edit profile text', 'Edit Profile', '2016-07-01 16:25:24'),
(29, 'member_dashboard_text', 'For member dashboard text', 'Welcome to Member Dashboard!', '2016-07-01 16:25:24'),
(30, 'your_profile', 'For your profile text', 'Your Profile', '2016-07-01 16:29:30'),
(31, 'member_menu', 'For member menu text', 'Member Menu', '2016-07-01 16:37:37'),
(32, 'display_name', 'For display name text', 'Display Name', '2016-07-01 16:45:41'),
(33, 'email_address', 'For email address text', 'Email Address', '2016-07-01 16:45:41'),
(34, 'user_type', 'For permission type text', 'Permission Type', '2016-07-01 16:45:41'),
(35, 'first_name', 'For first name text', 'First Name', '2016-07-01 16:45:41'),
(36, 'last_name', 'For last name text', 'Last Name', '2016-07-01 16:45:41'),
(37, 'birthday', 'For birthday text', 'Birth Day', '2016-07-01 16:45:41'),
(38, 'gender', 'For gender text', 'Gender', '2016-07-01 16:45:41'),
(39, 'phone', 'For phone text', 'Phone', '2016-07-01 16:45:41'),
(40, 'address', 'For address text', 'Address', '2016-07-01 16:45:41'),
(41, 'new_password', 'For new password text', 'New Password', '2016-07-02 18:01:57'),
(42, 'change_password', 'For change password text', 'Change Password', '2016-07-02 18:04:49'),
(43, 'picture', 'For picture text', 'Picture', '2016-07-02 18:18:58'),
(44, 'save_btn', 'For save button text', 'Save', '2016-07-02 18:35:11'),
(45, 'cancel_btn', 'For cancel button text', 'Cancel', '2016-07-02 18:35:11'),
(46, 'article_index_header', 'For article index page', 'List of Article', '2016-07-12 17:08:16'),
(47, 'article_category_menu', 'For category of article text', 'Category', '2016-07-12 17:23:40'),
(48, 'article_readmore_text', 'For read more button of article text', 'Read More', '2016-07-12 17:23:40'),
(49, 'article_not_found', 'For article not found text', 'Article not found!', '2016-07-12 17:33:20'),
(50, 'article_cat_not_found', 'For category of article not found text', 'Category not found!', '2016-07-12 17:54:29'),
(51, 'article_postdate', 'For date time of article text', 'Posted date', '2016-07-13 13:56:02'),
(52, 'article_postby', 'For post by text', 'Posted by', '2016-07-13 13:56:02'),
(53, 'gallery_header', 'For gallery header text', 'Gallery', '2016-07-15 13:47:17'),
(54, 'gallery_albumlist', 'For album list text', 'List of Album', '2016-07-15 13:47:17'),
(55, 'total_txt', 'For total text', 'Total:', '2016-07-15 15:24:11'),
(56, 'records_txt', 'For records text', 'Records', '2016-07-15 15:23:54'),
(57, 'gallery_not_found', 'for gallery not found text', 'Gallery not found!', '2016-07-15 15:33:35'),
(58, 'picture_not_found', 'For picture not found text', 'Picture not found!', '2016-07-15 15:35:40'),
(59, 'gellery_view_btn', 'For gallery view button', 'View Gallery', '2016-07-15 15:41:19'),
(60, 'article_archive', 'For article archive text', 'Archive', '2016-07-21 10:39:19'),
(61, 'article_updatedate', 'For article updatetime text', 'Updated date', '2016-07-21 10:39:19'),
(62, 'article_search_txt', 'For article search text', 'Article Search', '2016-09-26 10:53:09'),
(63, 'pm_txt', 'For private message header text', 'Private Message', '2017-02-27 10:53:09'),
(64, 'pm_to_txt', 'For private message (To) text', 'To', '2017-02-27 10:53:09'),
(65, 'pm_from_txt', 'For private message (From) text', 'From', '2017-02-27 10:53:09'),
(66, 'pm_subject_txt', 'For private message subject text', 'Subject', '2017-02-27 10:53:09'),
(67, 'pm_msg_txt', 'For private message text', 'Message', '2017-02-27 10:53:09'),
(68, 'pm_send_txt', 'For private message send text', 'Send', '2017-02-27 10:53:09'),
(69, 'pm_delete_txt', 'For private message delete text', 'Delete', '2017-02-27 10:53:09'),
(70, 'pm_inbox_txt', 'For private message inbox text', 'Inbox', '2017-02-27 10:53:09'),
(71, 'pm_newmsg_txt', 'For private message new message text', 'New Message', '2017-02-27 10:53:09'),
(72, 'users_list_txt', 'For users list text', 'Users List', '2017-02-28 10:53:09'),
(73, 'pm_datetime_txt', 'For date time text', 'Date/Time', '2017-02-28 10:53:09'),
(74, 'not_permission_txt', 'For not have permission text', 'You might not have permission to access this section!', '2017-02-28 10:53:09'),
(75, 'success_txt', 'For success text', 'Successfully!', '2017-03-02 10:53:09'),
(76, 'error_txt', 'For error text', 'Data not found! / Error! Please try again.', '2017-03-02 10:53:09'),
(77, 'plugin_member_menu', 'For plugin member menu text', 'Plugins Menu', '2017-03-02 10:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `lang_iso`
--

CREATE TABLE `lang_iso` (
  `lang_iso_id` int(11) NOT NULL,
  `lang_name` varchar(255) DEFAULT NULL,
  `lang_iso` varchar(10) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `country_iso` varchar(10) DEFAULT NULL,
  `active` int(2) DEFAULT NULL,
  `arrange` int(11) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Language ISO';

--
-- Dumping data for table `lang_iso`
--

INSERT INTO `lang_iso` (`lang_iso_id`, `lang_name`, `lang_iso`, `country`, `country_iso`, `active`, `arrange`, `timestamp_create`, `timestamp_update`) VALUES
(1, 'English', 'en', 'United Kingdom', 'gb', 1, 1, '2016-03-29 15:16:23', '2016-03-31 15:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `link_statistic`
--

CREATE TABLE `link_statistic` (
  `link_statistic_id` int(11) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `link_stat_mgt`
--

CREATE TABLE `link_stat_mgt` (
  `link_stat_mgt_id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `login_logs_id` int(11) NOT NULL,
  `email_login` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  `note` text,
  `result` varchar(255) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`login_logs_id`, `email_login`, `user_agent`, `ip_address`, `note`, `result`, `timestamp_create`) VALUES
(1, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Backend Login Successful!', 'SUCCESS', '2017-08-25 22:43:56'),
(2, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Backend Login Successful!', 'SUCCESS', '2017-08-25 23:18:38'),
(3, 'sdasdas@gmail.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-27 23:38:02'),
(4, 'sample3@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-27 23:46:36'),
(5, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-27 23:58:34'),
(6, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Backend Login Successful!', 'SUCCESS', '2017-08-28 00:05:13'),
(7, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-28 00:07:45'),
(8, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-28 00:08:29'),
(9, 'sample6@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 00:11:31'),
(10, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-28 00:15:08'),
(11, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-28 00:22:38'),
(12, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-28 00:29:02'),
(13, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-28 00:37:35'),
(14, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 00:43:02'),
(15, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 00:58:00'),
(16, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 00:58:59'),
(17, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 00:59:43'),
(18, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 01:00:34'),
(19, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 01:01:39'),
(20, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 01:03:08'),
(21, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 01:03:44'),
(22, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 13:14:46'),
(23, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 14:22:26'),
(24, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 14:34:31'),
(25, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 15:01:40'),
(26, 'sample6@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 16:04:11'),
(27, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 16:09:48'),
(28, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 16:10:22'),
(29, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 16:12:29'),
(30, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.101 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-28 22:17:47'),
(31, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-29 21:03:58'),
(32, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-30 21:15:12'),
(33, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-30 22:49:28'),
(34, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-30 22:50:51'),
(35, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'SUCCESS', '2017-08-30 23:00:19'),
(36, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'SUCCESS', '2017-08-30 23:01:04'),
(37, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Backend Login Invalid!', 'STUDENT', '2017-08-30 23:14:56'),
(38, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Backend Login Invalid!', 'STUDENT', '2017-08-30 23:30:10'),
(39, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Backend Login Invalid!', 'INVALID', '2017-08-30 23:52:32'),
(40, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-30 23:54:51'),
(41, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-30 23:56:07'),
(42, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-30 23:56:17'),
(43, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-30 23:56:24'),
(44, '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-30 23:58:20'),
(45, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-30 23:58:32'),
(46, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 00:00:46'),
(47, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 00:02:26'),
(48, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 00:02:28'),
(49, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 00:02:29'),
(50, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 00:02:30'),
(51, '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 00:02:35'),
(52, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 00:02:43'),
(53, '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 00:05:40'),
(54, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 00:05:49'),
(55, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-31 00:06:00'),
(56, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-31 00:09:54'),
(57, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 00:10:15'),
(58, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 00:10:19'),
(59, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 00:10:24'),
(60, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 00:10:29'),
(61, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 00:12:31'),
(62, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Automatic add this IP from brute force', 'IP_BANNED', '2017-08-31 00:12:37'),
(63, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-31 21:26:05'),
(64, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-08-31 21:32:19'),
(65, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-31 21:33:27'),
(66, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-08-31 21:41:22'),
(67, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Backend Login Successful!', 'SUCCESS', '2017-08-31 21:52:20'),
(68, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Backend Login Successful!', 'SUCCESS', '2017-08-31 22:13:49'),
(69, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-01 07:34:57'),
(70, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-01 07:35:27'),
(71, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Backend Login Successful!', 'SUCCESS', '2017-09-01 07:36:20'),
(72, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-01 07:42:50'),
(73, 'teacher@teacher.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-01 07:43:03'),
(74, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-01 23:36:42'),
(75, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-02 13:26:30'),
(76, 'demo@slacms.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Backend Login Successful!', 'SUCCESS', '2017-09-02 13:40:35'),
(77, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-02 14:44:21'),
(78, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-02 16:40:24'),
(79, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-03 07:22:35'),
(80, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-03 13:03:02'),
(81, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-03 14:45:41'),
(82, 'sample4@gmail.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Invalid!', 'INVALID', '2017-09-03 15:26:34'),
(83, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-03 15:27:53'),
(84, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-03 21:46:28'),
(85, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-04 12:47:38'),
(86, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-04 22:23:53'),
(87, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-05 21:59:53'),
(88, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-05 22:45:26'),
(89, 'sample4@sample.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36', '::1', 'Frontend Login Successful!', 'SUCCESS', '2017-09-05 22:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `login_security_config`
--

CREATE TABLE `login_security_config` (
  `login_security_config_id` int(11) NOT NULL,
  `bf_protect_period` int(11) DEFAULT NULL,
  `max_failure` int(11) DEFAULT NULL,
  `bf_private_key` varchar(255) DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_security_config`
--

INSERT INTO `login_security_config` (`login_security_config_id`, `bf_protect_period`, `max_failure`, `bf_private_key`, `timestamp_update`) VALUES
(1, 60, 20, '', '2017-08-25 22:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pages_id` int(11) NOT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `page_url` varchar(255) DEFAULT NULL,
  `lang_iso` varchar(10) DEFAULT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `page_keywords` varchar(255) DEFAULT NULL,
  `page_desc` text,
  `content` text,
  `custom_css` text,
  `custom_js` text,
  `active` int(11) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pages_id`, `page_name`, `page_url`, `lang_iso`, `page_title`, `page_keywords`, `page_desc`, `content`, `custom_css`, `custom_js`, `active`, `timestamp_create`, `timestamp_update`) VALUES
(1, 'Home', 'home', 'en', 'SLA Home', 'CMS, Contact Management System, HTML, CSS, JS, JavaScript, framework, bootstrap, web development, thai, english, homepage', 'SHINEARLY Template for Bootstrap with SLA-CMS', '<header id="myCarousel" class="carousel slide">\r\n<ol class="carousel-indicators">\r\n<li data-target="#myCarousel" data-slide-to="0" class="active"></li>\r\n<li data-target="#myCarousel" data-slide-to="1"></li>\r\n<li data-target="#myCarousel" data-slide-to="2"></li>\r\n</ol>\r\n<!-- Wrapper for slides -->\r\n<div class="carousel-inner">\r\n<div class="item active">\r\n<div class="fill"><img src="http://placehold.it/1900x540&text=Slide One" class="img-responsive" width="100%"></div>\r\n<div class="carousel-caption">\r\n<h2>Caption 1</h2>\r\n</div>\r\n</div>\r\n<div class="item">\r\n<div class="fill"><img src="http://placehold.it/1900x540&text=Slide Two" class="img-responsive" width="100%"></div>\r\n<div class="carousel-caption">\r\n<h2>Caption 2</h2>\r\n</div>\r\n</div>\r\n<div class="item">\r\n<div class="fill"><img src="http://placehold.it/1900x540&text=Slide Three" class="img-responsive" width="100%"></div>\r\n<div class="carousel-caption">\r\n<h2>Caption 3</h2>\r\n</div>\r\n</div>\r\n</div>\r\n<!-- Controls --> <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="icon-next"></span> </a></header><!-- Start Jumbotron -->\r\n<div class="jumbotron">\r\n<div class="container">\r\n<h1>Hello, world!</h1>\r\n<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>\r\n<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>\r\n</div>\r\n</div>\r\n<div class="container">\r\n<div class="row">\r\n<div class="col-md-4">\r\n<h2>Heading</h2>\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n<p><a class="btn btn-default" href="#" role="button">View details »</a></p>\r\n</div>\r\n<div class="col-md-4">\r\n<h2>Heading</h2>\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n<p><a class="btn btn-default" href="#" role="button">View details »</a></p>\r\n</div>\r\n<div class="col-md-4">\r\n<h2>Heading</h2>\r\n<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\r\n<p><a class="btn btn-default" href="#" role="button">View details »</a></p>\r\n</div>\r\n</div>\r\n</div>\r\n<!-- /container -->', '', '', 1, '2016-03-08 10:12:56', '2016-05-09 11:00:51'),
(2, 'About Us', 'about-us', 'en', 'SLA-CMS About Us', 'CMS, Contact Management System, HTML, CSS, JS, JavaScript, framework, bootstrap, web development, thai, aboutus', 'SHINEARLY Template for Bootstrap with SLA-CMS', '<div class="jumbotron">\r\n<div class="container">\r\n<h1>About Us!</h1>\r\n<p>SHINEARLY Template for Bootstrap with SLA-CMS. SLA-CMS build by SHINEARLY.</p>\r\n<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>\r\n</div>\r\n</div>\r\n<div class="container">\r\n<div class="row">\r\n<div class="col-md-6">\r\n<div class="panel panel-default">\r\n<div class="panel-heading">Panel heading</div>\r\n<div class="panel-body">\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="col-md-6">\r\n<div class="panel panel-default">\r\n<div class="panel-heading">Panel heading</div>\r\n<div class="panel-body">\r\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="container"></div>\r\n<p></p>', '', '', 1, '2016-04-11 15:17:18', '2016-05-01 15:16:13'),
(3, 'Contact Us', 'contact-us', 'en', 'SLA-CMS Contact us', 'CMS, Contact Management System, HTML, CSS, JS, JavaScript, framework, bootstrap, web development, thai, contact us', 'SHINEARLY Template for Bootstrap with SLA-CMS', '<div class="jumbotron">\r\n<div class="container">\r\n<h1>Contact us!</h1>\r\n<p>If you want to contact us please use this form below. Or send the email to <a href="mailto:info@slacms.com">info[at]slacms.com</a></p>\r\n</div>\r\n</div>\r\n<div class="container"></div>\r\n<div class="container">\r\n<div class="row">\r\n<div class="col-md-6">\r\n<h2>Google Map</h2>\r\n<p><iframe width="100%" height="315" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.168282092751!2d98.37285931425068!3d7.877454308128998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0x0!2zN8KwNTInMzguOCJOIDk4wrAyMiczMC4yIkU!5e0!3m2!1sen!2sth!4v1462104596003" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>\r\n</div>\r\n<div class="col-md-6">\r\n<h2>Contact Form</h2>\r\n<p>If you have any question please send this from.</p>\r\n<p>[?]{=forms:contactus_en}[?]</p>\r\n</div>\r\n</div>\r\n</div>\r\n<p></p>\r\n<p></p>', '', '', 1, '2016-04-30 16:57:16', '2016-05-12 17:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_menu`
--

CREATE TABLE `page_menu` (
  `page_menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `lang_iso` varchar(10) DEFAULT NULL,
  `pages_id` int(11) DEFAULT NULL,
  `other_link` varchar(512) DEFAULT NULL,
  `plugin_menu` varchar(255) DEFAULT NULL,
  `drop_menu` int(11) DEFAULT NULL,
  `drop_page_menu_id` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `new_windows` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `arrange` int(11) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page_menu`
--

INSERT INTO `page_menu` (`page_menu_id`, `menu_name`, `lang_iso`, `pages_id`, `other_link`, `plugin_menu`, `drop_menu`, `drop_page_menu_id`, `position`, `new_windows`, `active`, `arrange`, `timestamp_create`, `timestamp_update`) VALUES
(1, 'Home', 'en', 1, '', '', 0, 0, 0, 0, 1, 1, '2016-03-25 13:00:08', '2016-04-30 16:58:07'),
(2, 'About Us', 'en', 2, '', '', 0, 0, 0, 0, 1, 2, '2016-04-11 15:01:03', '2016-04-30 16:58:07'),
(3, 'Contact Us', 'en', 3, '', '', 0, 0, 0, 0, 1, 3, '2016-04-30 16:58:02', '2016-04-30 16:58:07'),
(4, 'Drop Menu', 'en', 0, '', '', 1, 0, 0, 0, 1, 4, '2016-03-27 15:54:15', '2016-04-30 16:58:07'),
(5, 'SLA CMS Website', 'en', 0, 'https://www.slacms.com', '', 0, 4, 0, 1, 1, 1, '2016-03-28 15:22:12', '2016-04-30 16:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `plugin_manager`
--

CREATE TABLE `plugin_manager` (
  `plugin_manager_id` int(11) NOT NULL,
  `plugin_config_filename` varchar(255) DEFAULT NULL,
  `plugin_active` int(11) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plugin_manager`
--

INSERT INTO `plugin_manager` (`plugin_manager_id`, `plugin_config_filename`, `plugin_active`, `timestamp_create`, `timestamp_update`) VALUES
(1, 'article', 1, '2017-08-25 22:42:41', '2017-08-25 22:42:41'),
(2, 'gallery', 1, '2017-08-25 22:42:41', '2017-08-25 22:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `save_formdraft`
--

CREATE TABLE `save_formdraft` (
  `id` int(11) NOT NULL,
  `form_url` text,
  `submit_array` text,
  `user_admin_id` int(11) DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `fbapp_id` varchar(255) DEFAULT NULL,
  `site_footer` text,
  `default_email` varchar(255) DEFAULT NULL,
  `keywords` text,
  `themes_config` varchar(255) DEFAULT NULL,
  `admin_lang` varchar(255) DEFAULT NULL,
  `additional_js` text,
  `additional_metatag` text,
  `googlecapt_active` int(11) DEFAULT NULL,
  `googlecapt_sitekey` varchar(255) DEFAULT NULL,
  `googlecapt_secretkey` varchar(255) DEFAULT NULL,
  `pagecache_time` int(3) DEFAULT NULL,
  `email_protocal` varchar(20) DEFAULT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_user` varchar(255) DEFAULT NULL,
  `smtp_pass` varchar(255) DEFAULT NULL,
  `smtp_port` varchar(5) DEFAULT NULL,
  `sendmail_path` varchar(255) DEFAULT NULL,
  `member_confirm_enable` int(11) DEFAULT NULL,
  `member_close_regist` int(11) DEFAULT NULL,
  `gmaps_key` varchar(255) DEFAULT NULL,
  `gmaps_lat` varchar(100) DEFAULT NULL,
  `gmaps_lng` varchar(100) DEFAULT NULL,
  `ga_client_id` varchar(255) DEFAULT NULL,
  `ga_view_id` varchar(255) DEFAULT NULL,
  `gsearch_active` int(11) DEFAULT NULL,
  `gsearch_cxid` varchar(255) DEFAULT NULL,
  `maintenance_active` int(11) DEFAULT NULL,
  `html_optimize_disable` int(11) DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `site_name`, `site_logo`, `og_image`, `fbapp_id`, `site_footer`, `default_email`, `keywords`, `themes_config`, `admin_lang`, `additional_js`, `additional_metatag`, `googlecapt_active`, `googlecapt_sitekey`, `googlecapt_secretkey`, `pagecache_time`, `email_protocal`, `smtp_host`, `smtp_user`, `smtp_pass`, `smtp_port`, `sendmail_path`, `member_confirm_enable`, `member_close_regist`, `gmaps_key`, `gmaps_lat`, `gmaps_lng`, `ga_client_id`, `ga_view_id`, `gsearch_active`, `gsearch_cxid`, `maintenance_active`, `html_optimize_disable`, `timestamp_update`) VALUES
(1, 'Shinearly Learning Academy', '', '', '', '&copy; %YEAR Shinearly Learning Academy', 'demo@slacms.com', '', 'shinearly', 'english', '', '', NULL, '', '', 0, 'mail', '', '', '', '', '', NULL, NULL, '', '-28.621975', '150.689082', '', '', NULL, '', NULL, NULL, '2017-08-31 22:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `student_sched`
--

CREATE TABLE `student_sched` (
  `id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_sched`
--

INSERT INTO `student_sched` (`id`, `time_id`, `student_id`, `instructor_id`, `time`, `status`) VALUES
(1, 1, 14, 14, '800', 1),
(2, 2, 14, 14, '820', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_sched`
--

CREATE TABLE `teacher_sched` (
  `id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_sched`
--

INSERT INTO `teacher_sched` (`id`, `time`, `status`) VALUES
(1, '8:00', 1),
(2, '8:20', 1),
(3, '8:40', 1),
(4, '9:00', 1),
(5, '9:20', 1),
(6, '9:40', 1),
(7, '10:00', 1),
(8, '10:20', 1),
(9, '10:40', 1),
(10, '11:00', 1),
(11, '11:20', 1),
(12, '11:40', 1),
(13, '12:00', 1),
(14, '12:20', 1),
(15, '12:40', 1),
(16, '13:00', 1),
(17, '13:20', 1),
(18, '13:40', 1),
(19, '14:00', 1),
(20, '14:20', 1),
(21, '14:40', 1),
(22, '15:00', 1),
(23, '15:20', 1),
(24, '15:40', 1),
(25, '16:00', 1),
(26, '16:20', 1),
(27, '16:40', 1),
(28, '17:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `upload_file`
--

CREATE TABLE `upload_file` (
  `upload_file_id` int(11) NOT NULL,
  `year` varchar(10) DEFAULT NULL,
  `file_upload` varchar(255) DEFAULT NULL,
  `remark` text,
  `timestamp_create` datetime DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `user_admin_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` text,
  `phone` varchar(100) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `md5_hash` varchar(255) DEFAULT NULL,
  `md5_lasttime` datetime DEFAULT NULL,
  `timestamp_create` datetime DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`user_admin_id`, `name`, `email`, `password`, `user_type`, `first_name`, `last_name`, `birthday`, `gender`, `address`, `phone`, `picture`, `active`, `session_id`, `md5_hash`, `md5_lasttime`, `timestamp_create`, `timestamp_update`) VALUES
(1, 'Admin Sins', 'demo@slacms.com', '1c2300ba0a4a734b077db99ab04b1afdd8211187d9dc89e5af03c379f7cf361d26c93a2a7eaadb469dbe6ef3a1d3257802ac6990435db2892e3f2c172ec6e83a', 'admin', '', '', '0000-00-00', '', '', '', '2017/1504193616_1-org.jpg', 1, 'g0pvfq7hppssuksn4mlkqhflmdohup30', '11fbf7460f6c7e9d03602195b88f54b1', '2017-08-25 22:42:41', '2017-08-25 22:42:41', '2017-08-31 23:33:36'),
(8, 'dasdasd', 'adadadad@gmail.com', 'e0203008ad7d4bcb51500f7cf6e4e72624b16c9521697359fc7d9ecf5726a0b9de98d9b79aeb61de877e80c990a8370e2dd2c08151f769334912a5c83b8aff45', 'student', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'cf839dbe924796f75b60ef07241cf6ab', '2017-08-27 22:56:30', '2017-08-27 22:56:30', '2017-08-27 22:56:30'),
(7, 'dsdasdas', 'sdasda@sample.com', '2c382fb56792ecac6084c800530ad5a9f3db38ff42a647175fbba9e1043768f6ab511a1e1e3dc55ce7f86b32e8cd967fb202a7d8213480c3ac23bbbf0dabb9d2', 'student', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'e382246ac08803cb5c5e5cf3e2abcdd3', '2017-08-27 22:51:34', '2017-08-27 22:51:34', '2017-08-27 22:51:34'),
(6, 'Dummy Sins', 'sample4@sample.com', '1c2300ba0a4a734b077db99ab04b1afdd8211187d9dc89e5af03c379f7cf361d26c93a2a7eaadb469dbe6ef3a1d3257802ac6990435db2892e3f2c172ec6e83a', 'student', 'Sir Noel', 'Hernandez', '1992-10-11', 'male', 'San Marcelino Zambales', '9982912553', '2017/1504014747_1-org.jpg', 1, 'elrkthti6t0hf5eva0g4tdn4511g6ri2', 'b49cf5d62b423cf5cf3344b67ef2d0a7', '2017-08-27 22:44:45', '2017-08-27 22:44:45', '2017-08-30 21:16:40'),
(5, 'Sample Student Name 21', 'sample3@sample.com', '1c2300ba0a4a734b077db99ab04b1afdd8211187d9dc89e5af03c379f7cf361d26c93a2a7eaadb469dbe6ef3a1d3257802ac6990435db2892e3f2c172ec6e83a', 'student', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '26bfcdbafedaf90919495b2ae1a808dd', '2017-08-27 22:41:38', '2017-08-27 22:41:38', '2017-08-27 22:41:38'),
(9, 'fsdfsf', 'fassf@sample.com', '1c2300ba0a4a734b077db99ab04b1afdd8211187d9dc89e5af03c379f7cf361d26c93a2a7eaadb469dbe6ef3a1d3257802ac6990435db2892e3f2c172ec6e83a', 'student', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '7248f900041a0d741834ed9f3244bc92', '2017-08-27 23:08:24', '2017-08-27 23:08:24', '2017-08-27 23:08:24'),
(10, 'dasdd', 'dsds@sample.com', '1c2300ba0a4a734b077db99ab04b1afdd8211187d9dc89e5af03c379f7cf361d26c93a2a7eaadb469dbe6ef3a1d3257802ac6990435db2892e3f2c172ec6e83a', 'student', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'af5c3e00c94f600354899e64a98e74ca', '2017-08-27 23:09:01', '2017-08-27 23:09:01', '2017-08-27 23:09:01'),
(16, 'dasdasd111', 'asdd@gmail.com', '1c2300ba0a4a734b077db99ab04b1afdd8211187d9dc89e5af03c379f7cf361d26c93a2a7eaadb469dbe6ef3a1d3257802ac6990435db2892e3f2c172ec6e83a', 'teacher', '', '', '0000-00-00', '', '', '', '', 1, NULL, '6a5003d1482581c70e258a733a5bafba', '2017-08-31 23:11:18', '2017-08-31 23:11:18', '2017-08-31 23:11:18'),
(13, 'Sample Student Name', 'sample6@sample.com', '1c2300ba0a4a734b077db99ab04b1afdd8211187d9dc89e5af03c379f7cf361d26c93a2a7eaadb469dbe6ef3a1d3257802ac6990435db2892e3f2c172ec6e83a', 'teacher', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'l3dku6kknptd5oaem79aggm30agu3vjb', '9f14ae081eb1164a77633fdd7fb992cb', '2017-08-28 00:11:24', '2017-08-28 00:11:24', '2017-08-28 00:11:24'),
(14, 'Dumy Teacher', 'teacher@teacher.com', '1c2300ba0a4a734b077db99ab04b1afdd8211187d9dc89e5af03c379f7cf361d26c93a2a7eaadb469dbe6ef3a1d3257802ac6990435db2892e3f2c172ec6e83a', 'teacher', 'Sample Teacher', '', '0000-00-00', '', '', '', '', 1, 'je9cj3lqcvnjbd2qjkqokckip6hruan1', '212e5c744b188f39e9a2ea26d47cc29f', '2017-08-30 22:38:14', '2017-08-30 22:38:14', '2017-08-31 21:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `user_groups_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`user_groups_id`, `name`, `definition`) VALUES
(1, 'Admin', 'Super Admin Group'),
(2, 'Editor', 'Editor Access Group'),
(3, 'Public', 'Public Access Group'),
(4, 'Guest', 'Guest Access Group');

-- --------------------------------------------------------

--
-- Table structure for table `user_perms`
--

CREATE TABLE `user_perms` (
  `user_perms_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text,
  `permstype` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_perms`
--

INSERT INTO `user_perms` (`user_perms_id`, `name`, `definition`, `permstype`) VALUES
(1, 'save', 'For save permission on backend', 'backend'),
(2, 'delete', 'For delete permission on backend', 'backend'),
(3, 'analytics', 'For analytics access permission on backend', 'backend'),
(4, 'forms builder', 'For forms builder access permission', 'backend'),
(5, 'plugin widget', 'For plugin widget access permission on backend', 'backend'),
(6, 'file upload', 'For file upload access permission on backend', 'backend'),
(7, 'pages content', 'For pages content access permission on backend', 'backend'),
(8, 'navigation', 'For navigation access permission on backend', 'backend'),
(9, 'linkstats', 'For statistic for links access permission on backend', 'backend'),
(10, 'language', 'For language access permission on backend', 'backend'),
(11, 'general label', 'For general label access permission on backend', 'backend'),
(12, 'site settings', 'For site settings access permission on backend', 'backend'),
(13, 'maintenance', 'For maintenance system access permission on backend', 'backend'),
(14, 'plugin manager', 'For plugin manager access permission on backend', 'backend'),
(15, 'admin users', 'For admin users access permission on backend', 'backend'),
(16, 'member users', 'For member users access permission on backend', 'backend'),
(17, 'user groups', 'For user groups access permission on backend', 'backend'),
(18, 'email logs', 'For email logs access permission on backend', 'backend'),
(19, 'login logs', 'For login logs access permission on backend', 'backend'),
(20, 'protection settings', 'For protection settings access permission on backend', 'backend'),
(21, 'gallery', 'For gallery plugin access permission on backend', 'backend'),
(22, 'article', 'For article plugin access permission on backend', 'backend'),
(23, 'social', 'For social settings access permission on backend', 'backend'),
(24, 'profile save', 'For user profile save permission on frontend', 'frontend'),
(25, 'pm', 'For private message access permission on frontend', 'frontend'),
(26, 'banner', 'For banner manager access permission on backend', 'backend');

-- --------------------------------------------------------

--
-- Table structure for table `user_perm_to_group`
--

CREATE TABLE `user_perm_to_group` (
  `user_perms_id` int(11) NOT NULL,
  `user_groups_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_perm_to_group`
--

INSERT INTO `user_perm_to_group` (`user_perms_id`, `user_groups_id`) VALUES
(1, 2),
(3, 2),
(3, 4),
(4, 2),
(4, 4),
(5, 2),
(5, 4),
(6, 2),
(6, 4),
(7, 2),
(7, 4),
(8, 2),
(8, 4),
(9, 2),
(9, 4),
(10, 2),
(10, 4),
(11, 2),
(11, 4),
(12, 4),
(13, 2),
(13, 4),
(14, 4),
(21, 2),
(21, 4),
(22, 2),
(22, 4),
(23, 2),
(23, 4),
(24, 2),
(24, 3),
(25, 2),
(25, 3),
(25, 4),
(26, 2),
(26, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_pms`
--

CREATE TABLE `user_pms` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` text,
  `date_sent` datetime DEFAULT NULL,
  `date_read` datetime DEFAULT NULL,
  `pm_deleted_sender` int(1) DEFAULT NULL,
  `pm_deleted_receiver` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_to_group`
--

CREATE TABLE `user_to_group` (
  `user_admin_id` int(11) NOT NULL,
  `user_groups_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_to_group`
--

INSERT INTO `user_to_group` (`user_admin_id`, `user_groups_id`) VALUES
(1, 1),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(13, 3),
(14, 3),
(16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `whitelist_ip`
--

CREATE TABLE `whitelist_ip` (
  `whitelist_ip_id` int(11) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `note` text,
  `timestamp_create` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `widget_xml`
--

CREATE TABLE `widget_xml` (
  `widget_xml_id` int(11) NOT NULL,
  `widget_name` varchar(255) DEFAULT NULL,
  `xml_url` varchar(255) DEFAULT NULL,
  `limit_view` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `widget_open` text,
  `widget_content` text,
  `widget_seemore` text,
  `widget_close` text,
  `timestamp_create` datetime DEFAULT NULL,
  `timestamp_update` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions_logs`
--
ALTER TABLE `actions_logs`
  ADD PRIMARY KEY (`actions_logs_id`);

--
-- Indexes for table `article_db`
--
ALTER TABLE `article_db`
  ADD PRIMARY KEY (`article_db_id`),
  ADD KEY `url_rewrite` (`url_rewrite`);

--
-- Indexes for table `banner_mgt`
--
ALTER TABLE `banner_mgt`
  ADD PRIMARY KEY (`banner_mgt_id`),
  ADD KEY `link` (`link`);

--
-- Indexes for table `banner_statistic`
--
ALTER TABLE `banner_statistic`
  ADD PRIMARY KEY (`banner_statistic_id`),
  ADD KEY `banner_mgt_id` (`banner_mgt_id`);

--
-- Indexes for table `blacklist_ip`
--
ALTER TABLE `blacklist_ip`
  ADD PRIMARY KEY (`blacklist_ip_id`);

--
-- Indexes for table `email_logs`
--
ALTER TABLE `email_logs`
  ADD PRIMARY KEY (`email_logs_id`);

--
-- Indexes for table `footer_social`
--
ALTER TABLE `footer_social`
  ADD PRIMARY KEY (`footer_social_id`);

--
-- Indexes for table `form_contactus_en`
--
ALTER TABLE `form_contactus_en`
  ADD PRIMARY KEY (`form_contactus_en_id`);

--
-- Indexes for table `form_field`
--
ALTER TABLE `form_field`
  ADD PRIMARY KEY (`form_field_id`);

--
-- Indexes for table `form_main`
--
ALTER TABLE `form_main`
  ADD PRIMARY KEY (`form_main_id`),
  ADD KEY `form_name` (`form_name`);

--
-- Indexes for table `gallery_db`
--
ALTER TABLE `gallery_db`
  ADD PRIMARY KEY (`gallery_db_id`),
  ADD KEY `url_rewrite` (`url_rewrite`);

--
-- Indexes for table `gallery_picture`
--
ALTER TABLE `gallery_picture`
  ADD PRIMARY KEY (`gallery_picture_id`);

--
-- Indexes for table `general_label`
--
ALTER TABLE `general_label`
  ADD PRIMARY KEY (`general_label_id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `lang_iso`
--
ALTER TABLE `lang_iso`
  ADD PRIMARY KEY (`lang_iso_id`);

--
-- Indexes for table `link_statistic`
--
ALTER TABLE `link_statistic`
  ADD PRIMARY KEY (`link_statistic_id`),
  ADD KEY `link` (`link`);

--
-- Indexes for table `link_stat_mgt`
--
ALTER TABLE `link_stat_mgt`
  ADD PRIMARY KEY (`link_stat_mgt_id`),
  ADD KEY `url` (`url`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`login_logs_id`);

--
-- Indexes for table `login_security_config`
--
ALTER TABLE `login_security_config`
  ADD PRIMARY KEY (`login_security_config_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pages_id`),
  ADD KEY `page_url` (`page_url`);

--
-- Indexes for table `page_menu`
--
ALTER TABLE `page_menu`
  ADD PRIMARY KEY (`page_menu_id`);

--
-- Indexes for table `plugin_manager`
--
ALTER TABLE `plugin_manager`
  ADD PRIMARY KEY (`plugin_manager_id`);

--
-- Indexes for table `save_formdraft`
--
ALTER TABLE `save_formdraft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `student_sched`
--
ALTER TABLE `student_sched`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_sched`
--
ALTER TABLE `teacher_sched`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_file`
--
ALTER TABLE `upload_file`
  ADD PRIMARY KEY (`upload_file_id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`user_admin_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`user_groups_id`);

--
-- Indexes for table `user_perms`
--
ALTER TABLE `user_perms`
  ADD PRIMARY KEY (`user_perms_id`);

--
-- Indexes for table `user_perm_to_group`
--
ALTER TABLE `user_perm_to_group`
  ADD PRIMARY KEY (`user_perms_id`,`user_groups_id`);

--
-- Indexes for table `user_pms`
--
ALTER TABLE `user_pms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `full_index` (`id`,`sender_id`,`receiver_id`,`date_read`);

--
-- Indexes for table `user_to_group`
--
ALTER TABLE `user_to_group`
  ADD PRIMARY KEY (`user_admin_id`,`user_groups_id`);

--
-- Indexes for table `whitelist_ip`
--
ALTER TABLE `whitelist_ip`
  ADD PRIMARY KEY (`whitelist_ip_id`);

--
-- Indexes for table `widget_xml`
--
ALTER TABLE `widget_xml`
  ADD PRIMARY KEY (`widget_xml_id`),
  ADD KEY `widget_name` (`widget_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions_logs`
--
ALTER TABLE `actions_logs`
  MODIFY `actions_logs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `article_db`
--
ALTER TABLE `article_db`
  MODIFY `article_db_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banner_mgt`
--
ALTER TABLE `banner_mgt`
  MODIFY `banner_mgt_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banner_statistic`
--
ALTER TABLE `banner_statistic`
  MODIFY `banner_statistic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blacklist_ip`
--
ALTER TABLE `blacklist_ip`
  MODIFY `blacklist_ip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `email_logs`
--
ALTER TABLE `email_logs`
  MODIFY `email_logs_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `footer_social`
--
ALTER TABLE `footer_social`
  MODIFY `footer_social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `form_contactus_en`
--
ALTER TABLE `form_contactus_en`
  MODIFY `form_contactus_en_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `form_field`
--
ALTER TABLE `form_field`
  MODIFY `form_field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `form_main`
--
ALTER TABLE `form_main`
  MODIFY `form_main_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery_db`
--
ALTER TABLE `gallery_db`
  MODIFY `gallery_db_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery_picture`
--
ALTER TABLE `gallery_picture`
  MODIFY `gallery_picture_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `general_label`
--
ALTER TABLE `general_label`
  MODIFY `general_label_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `lang_iso`
--
ALTER TABLE `lang_iso`
  MODIFY `lang_iso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `link_statistic`
--
ALTER TABLE `link_statistic`
  MODIFY `link_statistic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `link_stat_mgt`
--
ALTER TABLE `link_stat_mgt`
  MODIFY `link_stat_mgt_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `login_logs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `login_security_config`
--
ALTER TABLE `login_security_config`
  MODIFY `login_security_config_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `page_menu`
--
ALTER TABLE `page_menu`
  MODIFY `page_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `plugin_manager`
--
ALTER TABLE `plugin_manager`
  MODIFY `plugin_manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `save_formdraft`
--
ALTER TABLE `save_formdraft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_sched`
--
ALTER TABLE `student_sched`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teacher_sched`
--
ALTER TABLE `teacher_sched`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `upload_file`
--
ALTER TABLE `upload_file`
  MODIFY `upload_file_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `user_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `user_groups_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_perms`
--
ALTER TABLE `user_perms`
  MODIFY `user_perms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user_pms`
--
ALTER TABLE `user_pms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `whitelist_ip`
--
ALTER TABLE `whitelist_ip`
  MODIFY `whitelist_ip_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `widget_xml`
--
ALTER TABLE `widget_xml`
  MODIFY `widget_xml_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
