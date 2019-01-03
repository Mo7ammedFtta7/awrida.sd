-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2019 at 10:08 PM
-- Server version: 10.1.27-MariaDB
-- PHP Version: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cl51-awrida`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE IF NOT EXISTS `activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'OZvBXwMbixk2O86fMY9J38EYa8AVHLAe', 1, '2018-11-23 18:08:22', '2018-11-23 18:08:22', '2018-11-23 18:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `blog__categories`
--

CREATE TABLE IF NOT EXISTS `blog__categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blog__categories`
--

INSERT INTO `blog__categories` (`id`, `created_at`, `updated_at`) VALUES
(2, '2018-11-24 13:53:46', '2018-11-24 13:53:46'),
(3, '2018-11-24 15:21:24', '2018-11-24 15:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `blog__category_translations`
--

CREATE TABLE IF NOT EXISTS `blog__category_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blog__category_translations_category_id_locale_unique` (`category_id`,`locale`),
  KEY `blog__category_translations_locale_index` (`locale`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `blog__category_translations`
--

INSERT INTO `blog__category_translations` (`id`, `name`, `slug`, `category_id`, `locale`) VALUES
(3, 'news', 'news', 2, 'en'),
(4, 'news', 'news', 2, 'ar'),
(6, 'project', 'project', 3, 'en'),
(7, 'مشاريع', 'project', 3, 'ar');

-- --------------------------------------------------------

--
-- Table structure for table `blog__posts`
--

CREATE TABLE IF NOT EXISTS `blog__posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog__posts_category_id_index` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `blog__posts`
--

INSERT INTO `blog__posts` (`id`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 2, '2018-11-24 15:16:44', '2018-11-24 15:16:44'),
(8, 2, 2, '2018-11-24 15:29:15', '2018-11-24 17:41:03'),
(9, 3, 2, '2018-11-24 17:43:11', '2018-11-25 11:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `blog__post_translations`
--

CREATE TABLE IF NOT EXISTS `blog__post_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blog__post_translations_post_id_locale_unique` (`post_id`,`locale`),
  KEY `blog__post_translations_locale_index` (`locale`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `blog__post_translations`
--

INSERT INTO `blog__post_translations` (`id`, `post_id`, `locale`, `title`, `slug`, `content`) VALUES
(6, 3, 'en', 'مجال الصحة', 'health', '<ul>\n	<li><strong>مخميات العيون المجانية:</strong></li>\n</ul>\n\n<p>نفذت المنظمة 36 مخيماً للعيون بمختلف ولايات السودان , استطاعت من خلالها الكشف والتطبيب علر 600000 مريض ,واجراء 4500 عملية عيون مختلفة , تمكن المستفيدين منها من استعاد نعمة البصر والرجوع لسوق العمل والانتاج . وذلك بالشراكة مع ديوان الزكاة</p>\n\n<ul>\n	<li><strong>مخيمات السماعات الطبية المجانية:</strong></li>\n</ul>\n\n<p>​تمكنت المنظمة من توزيع 3000 سماعة طبية لضعافا السمع بمختلف ولايات السودان بالتعاون مع ديوان الزكاة ومنظمة كتيرا البرطانية&nbsp;</p>\n'),
(7, 3, 'ar', 'مجال الصحة', 'health', '<ul>\n	<li><strong>مخميات العيون المجانية:</strong></li>\n</ul>\n\n<p>نفذت المنظمة 36 مخيماً للعيون بمختلف ولايات السودان , استطاعت من خلالها الكشف والتطبيب علر 600000 مريض ,واجراء 4500 عملية عيون مختلفة , تمكن المستفيدين منها من استعاد نعمة البصر والرجوع لسوق العمل والانتاج . وذلك بالشراكة مع ديوان الزكاة</p>\n\n<ul>\n	<li><strong>مخيمات السماعات الطبية المجانية:</strong></li>\n</ul>\n\n<p>​تمكنت المنظمة من توزيع 3000 سماعة طبية لضعافا السمع بمختلف ولايات السودان بالتعاون مع ديوان الزكاة ومنظمة كتيرا البرطانية&nbsp;</p>\n'),
(9, 8, 'en', 'مجال المياه', 'water', '<p>تنفيذ 13 بئر بولايات النيل الابيض وجنوب كردفان , ساهمت في توفي الماء لاكثر من 300000 مستفيد</p>'),
(10, 8, 'ar', 'مجال المياه', 'water', '<p>تنفيذ 13 بئر بولايات النيل الابيض وجنوب كردفان , ساهمت في توفي الماء لاكثر من 300000 مستفيد</p>'),
(12, 9, 'en', 'مجال التوعية', 'awareness', '<p>تم تنفيذ عدد من البرامج التوعوية التي تتصل بأفاق الاتنمية الانسانية منها :</p>\n\n<ol>\n	<li>ندوة الصراعات القبلية واثرها على التنمية 2010م.</li>\n	<li>ندوة مستقبل التنمية فيظل الوحدة أو الانفصال 2010م.</li>\n	<li>ندوة الانتخابات السودانية وأستحقاق التنمية 2010م.</li>\n	<li>ورشة الاضطرابات الانمائية لاطفال التوحد 2013م.</li>\n	<li>ورشة احتياجات الاطفال في مناطق الصراعات 2015م.</li>\n	<li>مؤتمر التوحد الاول 2015م.</li>\n	<li>المشاركة في اعداد وتنفيذ اليوم العالمي للتوحد 2014م.</li>\n</ol>'),
(13, 9, 'ar', 'مجال التوعية', 'awareness', '<p>تم تنفيذ عدد من البرامج التوعوية التي تتصل بأفاق الاتنمية الانسانية منها :</p>\n\n<ol>\n	<li>ندوة الصراعات القبلية واثرها على التنمية 2010م.</li>\n	<li>ندوة مستقبل التنمية فيظل الوحدة أو الانفصال 2010م.</li>\n	<li>ندوة الانتخابات السودانية وأستحقاق التنمية 2010م.</li>\n	<li>ورشة الاضطرابات الانمائية لاطفال التوحد 2013م.</li>\n	<li>ورشة احتياجات الاطفال في مناطق الصراعات 2015م.</li>\n	<li>مؤتمر التوحد الاول 2015م.</li>\n	<li>المشاركة في اعداد وتنفيذ اليوم العالمي للتوحد 2014م.</li>\n</ol>');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard__widgets`
--

CREATE TABLE IF NOT EXISTS `dashboard__widgets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `widgets` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dashboard__widgets_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media__files`
--

CREATE TABLE IF NOT EXISTS `media__files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `is_folder` tinyint(1) NOT NULL DEFAULT '0',
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mimetype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filesize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folder_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `media__files`
--

INSERT INTO `media__files` (`id`, `is_folder`, `filename`, `path`, `extension`, `mimetype`, `filesize`, `folder_id`, `created_at`, `updated_at`) VALUES
(1, 0, 'dsc-0090.jpg', '/assets/media/dsc-0090.jpg', 'jpg', 'image/jpeg', '61160', '0', '2018-11-24 15:18:33', '2018-11-24 15:18:33'),
(2, 0, 'dsc-0076.jpg', '/assets/media/dsc-0076.jpg', 'jpg', 'image/jpeg', '90090', '0', '2018-11-24 15:18:40', '2018-11-24 15:18:40'),
(3, 0, 'dsc-0082.jpg', '/assets/media/dsc-0082.jpg', 'jpg', 'image/jpeg', '35890', '0', '2018-11-24 15:18:45', '2018-11-24 15:18:45'),
(4, 0, 'dsc-0090.jpg', '/assets/media/dsc-0090.jpg', 'jpg', 'image/jpeg', '13193', '0', '2018-11-24 17:43:01', '2018-11-24 17:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `media__file_translations`
--

CREATE TABLE IF NOT EXISTS `media__file_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_id` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_attribute` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `media__file_translations_file_id_locale_unique` (`file_id`,`locale`),
  KEY `media__file_translations_locale_index` (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media__imageables`
--

CREATE TABLE IF NOT EXISTS `media__imageables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_id` int(11) NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `media__imageables`
--

INSERT INTO `media__imageables` (`id`, `file_id`, `imageable_id`, `imageable_type`, `zone`, `order`, `created_at`, `updated_at`) VALUES
(1, 3, 3, 'Modules\\Blog\\Entities\\Post', 'thumbnail', NULL, '2018-11-24 15:18:55', '2018-11-24 15:18:55'),
(2, 1, 8, 'Modules\\Blog\\Entities\\Post', 'thumbnail', NULL, '2018-11-24 17:33:25', '2018-11-24 17:41:03'),
(3, 2, 2, 'Modules\\Blog\\Entities\\Post', 'thumbnail', NULL, '2018-11-24 17:41:14', '2018-11-24 17:41:14'),
(4, 4, 9, 'Modules\\Blog\\Entities\\Post', 'thumbnail', NULL, '2018-11-24 17:43:12', '2018-11-25 18:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `menu__menuitems`
--

CREATE TABLE IF NOT EXISTS `menu__menuitems` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned NOT NULL,
  `page_id` int(10) unsigned DEFAULT NULL,
  `position` int(10) unsigned NOT NULL DEFAULT '0',
  `target` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'page',
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `module_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_root` tinyint(1) NOT NULL DEFAULT '0',
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu__menuitems_menu_id_foreign` (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `menu__menuitems`
--

INSERT INTO `menu__menuitems` (`id`, `menu_id`, `page_id`, `position`, `target`, `link_type`, `class`, `module_name`, `parent_id`, `lft`, `rgt`, `depth`, `created_at`, `updated_at`, `is_root`, `icon`) VALUES
(3, 2, NULL, 0, NULL, 'page', '', NULL, NULL, NULL, NULL, NULL, '2018-11-23 18:37:53', '2018-11-23 18:37:53', 1, NULL),
(4, 2, 1, 0, '_self', 'page', NULL, NULL, 3, NULL, NULL, NULL, '2018-11-23 18:38:44', '2018-11-23 18:55:24', 0, 'icon-users'),
(5, 2, 2, 4, '_self', 'page', NULL, NULL, 3, NULL, NULL, NULL, '2018-11-23 18:39:25', '2018-11-25 17:07:14', 0, NULL),
(6, 2, 3, 3, '_self', 'internal', NULL, NULL, 3, NULL, NULL, NULL, '2018-11-24 12:50:25', '2018-11-25 17:48:10', 0, NULL),
(8, 2, NULL, 2, '_self', 'internal', NULL, NULL, 3, NULL, NULL, NULL, '2018-11-25 16:58:48', '2018-11-25 17:07:14', 0, NULL),
(9, 2, 3, 1, '_self', 'page', NULL, NULL, 3, NULL, NULL, NULL, '2018-11-25 17:03:19', '2018-11-25 17:11:41', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu__menuitem_translations`
--

CREATE TABLE IF NOT EXISTS `menu__menuitem_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menuitem_id` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menu__menuitem_translations_menuitem_id_locale_unique` (`menuitem_id`,`locale`),
  KEY `menu__menuitem_translations_locale_index` (`locale`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `menu__menuitem_translations`
--

INSERT INTO `menu__menuitem_translations` (`id`, `menuitem_id`, `locale`, `status`, `title`, `url`, `uri`, `created_at`, `updated_at`) VALUES
(3, 3, 'en', 0, 'root', NULL, NULL, '2018-11-23 18:37:53', '2018-11-23 18:37:53'),
(4, 4, 'en', 1, 'home', NULL, 'home', '2018-11-23 18:38:44', '2018-11-23 18:55:24'),
(5, 5, 'en', 1, 'about us', NULL, 'about_us', '2018-11-23 18:39:25', '2018-11-24 12:49:49'),
(6, 4, 'ar', 1, 'الرئيسية', NULL, 'home', '2018-11-23 18:43:50', '2018-11-23 18:55:24'),
(7, 5, 'ar', 1, 'عنا', NULL, 'about_us', '2018-11-23 18:44:13', '2018-11-23 18:55:12'),
(8, 6, 'en', 1, 'news', NULL, 'blog/news/posts', '2018-11-24 12:50:25', '2018-11-25 17:48:11'),
(9, 6, 'ar', 1, 'الاخبار', NULL, 'blog/news/posts', '2018-11-24 12:50:25', '2018-11-25 17:48:11'),
(13, 8, 'en', 1, 'projects', NULL, 'blog/projects/posts', '2018-11-25 16:58:48', '2018-11-25 17:00:12'),
(14, 8, 'ar', 1, 'المشاريع', NULL, 'blog/projects/posts', '2018-11-25 16:58:48', '2018-11-25 17:00:12'),
(15, 8, 'fr', 1, 'projects', NULL, 'blog/projects/posts', '2018-11-25 16:58:48', '2018-11-25 17:00:12'),
(16, 9, 'en', 1, 'Advisory Board', NULL, 'advisory_board', '2018-11-25 17:03:19', '2018-11-25 17:11:41'),
(17, 9, 'ar', 1, 'المجلس الاستشاري', NULL, 'advisory_board', '2018-11-25 17:03:19', '2018-11-25 17:11:41'),
(18, 9, 'fr', 0, 'Advisory Board', NULL, 'advisory_board', '2018-11-25 17:03:19', '2018-11-25 17:11:41'),
(19, 6, 'fr', 0, NULL, NULL, NULL, '2018-11-25 17:48:11', '2018-11-25 17:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `menu__menus`
--

CREATE TABLE IF NOT EXISTS `menu__menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menu__menus`
--

INSERT INTO `menu__menus` (`id`, `name`, `primary`, `created_at`, `updated_at`) VALUES
(2, 'main', 0, '2018-11-23 18:37:53', '2018-11-23 18:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `menu__menu_translations`
--

CREATE TABLE IF NOT EXISTS `menu__menu_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menu__menu_translations_menu_id_locale_unique` (`menu_id`,`locale`),
  KEY `menu__menu_translations_locale_index` (`locale`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `menu__menu_translations`
--

INSERT INTO `menu__menu_translations` (`id`, `menu_id`, `locale`, `status`, `title`, `created_at`, `updated_at`) VALUES
(2, 2, 'en', 1, 'main::add', '2018-11-23 18:37:53', '2018-11-23 18:38:53'),
(3, 2, 'ar', 1, 'main::add', '2018-11-23 18:45:10', '2018-11-23 18:48:05'),
(4, 2, 'fr', 0, NULL, '2018-11-24 15:57:58', '2018-11-24 15:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(2, '2016_06_24_193447_create_user_tokens_table', 1),
(3, '2014_10_14_200250_create_settings_table', 2),
(4, '2014_10_15_191204_create_setting_translations_table', 2),
(5, '2015_06_18_170048_make_settings_value_text_field', 2),
(6, '2015_10_22_130947_make_settings_name_unique', 2),
(7, '2017_09_17_164631_make_setting_value_nullable', 2),
(8, '2014_11_03_160015_create_menus_table', 3),
(9, '2014_11_03_160138_create_menu-translations_table', 3),
(10, '2014_11_03_160753_create_menuitems_table', 3),
(11, '2014_11_03_160804_create_menuitem_translation_table', 3),
(12, '2014_12_17_185301_add_root_column_to_menus_table', 3),
(13, '2015_09_05_100142_add_icon_column_to_menuitems_table', 3),
(14, '2016_01_26_102307_update_icon_column_on_menuitems_table', 3),
(15, '2016_08_01_142345_add_link_type_colymn_to_menuitems_table', 3),
(16, '2016_08_01_143130_add_class_column_to_menuitems_table', 3),
(17, '2017_09_18_192639_make_title_field_nullable_menu_table', 3),
(18, '2014_10_26_162751_create_files_table', 4),
(19, '2014_10_26_162811_create_file_translations_table', 4),
(20, '2015_02_27_105241_create_image_links_table', 4),
(21, '2015_12_19_143643_add_sortable', 4),
(22, '2017_09_20_144631_add_folders_columns_on_files_table', 4),
(23, '2014_11_30_191858_create_pages_tables', 5),
(24, '2017_10_13_103344_make_status_field_nullable_on_page_translations_table', 5),
(25, '2018_05_23_145242_edit_body_column_nullable', 5),
(26, '2015_04_02_184200_create_widgets_table', 6),
(27, '2013_04_09_062329_create_revisions_table', 7),
(28, '2015_11_20_184604486385_create_translation_translations_table', 7),
(29, '2015_11_20_184604743083_create_translation_translation_translations_table', 7),
(30, '2015_12_01_094031_update_translation_translations_table_with_index', 7),
(31, '2016_07_12_181155032011_create_tag_tags_table', 8),
(32, '2016_07_12_181155289444_create_tag_tag_translations_table', 8),
(33, '2014_09_27_170107_create_posts_table', 9),
(34, '2014_09_27_175411_create_post_translations_table', 9),
(35, '2014_09_27_175736_create_categories_table', 9),
(36, '2014_09_27_175804_create_category_translations_table', 9),
(37, '2015_05_29_180714_add_status_column_to_post_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `page__pages`
--

CREATE TABLE IF NOT EXISTS `page__pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `is_home` tinyint(1) NOT NULL DEFAULT '0',
  `template` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `page__pages`
--

INSERT INTO `page__pages` (`id`, `is_home`, `template`, `created_at`, `updated_at`) VALUES
(1, 1, 'home', '2018-11-23 18:08:46', '2018-11-23 18:08:46'),
(2, 0, 'default', '2018-11-23 18:34:25', '2018-11-23 18:34:25'),
(3, 0, 'default', '2018-11-25 17:06:58', '2018-11-25 17:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `page__page_translations`
--

CREATE TABLE IF NOT EXISTS `page__page_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `body` text COLLATE utf8mb4_unicode_ci,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page__page_translations_page_id_locale_unique` (`page_id`,`locale`),
  KEY `page__page_translations_locale_index` (`locale`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `page__page_translations`
--

INSERT INTO `page__page_translations` (`id`, `page_id`, `locale`, `title`, `slug`, `status`, `body`, `meta_title`, `meta_description`, `og_title`, `og_description`, `og_image`, `og_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Home page', 'home', '1', '<section class="page--content--section pt--80 pb--20"> <div class="container"> <div class="row row--vc-md"> <div class="col-md-5 col-sm-6 pb--60"> <div class="page--content-img" data-scroll-reveal="left" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateX(0) scale(1); opacity: 1;transform: translateX(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "> <img src="img/about-img/01.jpg" alt="" data-rjs="2"> </div></div><div class="col-md-7 col-sm-6 pb--60"> <div class="page--content-inner" data-scroll-reveal="right" data-sr-id="3" style="; visibility: visible;  -webkit-transform: translateX(0) scale(1); opacity: 1;transform: translateX(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "> <div class="title"> <h2 class="h1">Why Choose Us</h2> </div><div class="sub-title"> <h3 class="h3">Few Company Information</h3> </div><div class="desc"> <h4>Our Mission</h4> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div><div class="desc"> <h4>Our Vission</h4> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div><div class="desc"> <h4>Our Strategy</h4> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div></div></div></div></div></section>', 'Home page', NULL, NULL, NULL, NULL, NULL, '2018-11-23 18:08:47', '2018-11-25 14:45:53'),
(2, 2, 'en', 'About us', 'about_us', '1', '\n<div dir="rtl">\n<p align="center" style="margin-bottom: 0.14in"><font face="Arial"> <span>منظمة\nأوردة للتنمية الانسانية</span></font></p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>مقدمة\n</span></font>:</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>إنشأت\nمنظمة أوردة للتنمية الانسانية فى اغسطس\nعام </span></font>2008<font face="Arial"> <span>م\nوفقا لقانون العمل الطوعى والانسانى\nبالسودان</span></font>.</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>يتمثل\nالدور الاساسى للمنظمة فى إشاعة قيم\nالاعتماد على الذات وزيادة معدلات الانتاج\nللفئات المستهدفة ،والاسهام فى تقليل\nنسبة الاعالة على الاسرة</span></font>. <font face="Arial"> <span>وذلك\nوفقالبرامج مدروسة تحقق اهداف المنظمة</span></font>.<font face="Arial"> <span>وترتبط\nالمنظمة بشبكة منالعلاقات داخل وخارج\nالسودان، ولها عضوية قوامها </span></font>(350)\n<font face="Arial"> <span>شخص </span></font>.</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>الرؤية\n</span></font>:</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>أن\nتتميز المنظمة فى القيام بمسئولياتها\nنحو الفئات المستهدفة ، وان تؤسس لمراكز\nعالمية فى توفير الخدمات التى تمكن\nالمستفيدين من العودة لدائرة العمل\nوالانتاج </span></font>.</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>الرسالة\n</span></font>:</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>تعمل\nالمنظمة على توظيف الموارد المتاحة\nبكلمسئولية وعلمية وشفافية، لمساعدة\nالمستهدفين دوناعتبار أوتمييز للجنس أو\nالعرق أو الدين </span></font>.</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>الاهداف\n</span></font>:</p>\n<ul>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>تثوير\n	الفكروتجذير الوعى بقضايا التنمية\n	الانسانية </span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>المساهمة\n	فى بناء القدرات والمهارات البشرية\n	للافراد والجماعات</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>تعزيز\n	قيم الاعتماد على الذات وزيادة الانتاج</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>المساهمة\n	فى أكساب المستفيذين انماط صحية وتعليمية\n	وتقنية داعمة لتحقيق مستوى حياة افضل </span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>تقليل\n	نسبة الاعالة فى الاسرة </span></font>.</p>\n</ul>\n<p style="margin-left: 0.5in; margin-bottom: 0.14in"><br/>\n<br/>\n\n</p>\n<p style="margin-left: 0.5in; margin-bottom: 0.14in"><font face="Arial"> <span>الوسائل\n</span></font>:</p>\n<ul>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>اعداد\n	وتنفيذ البرامج والمشروعات والخطط\n	والدراسات والبحوث والمسوحات الميدانية\n	وجمع  المعلومات</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>اقامة\n	ورش العمل والندوات وتنظيم المؤتمرات\n	السمنارات والدورات التدريبية </span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>اقامة\n	المخيمات العلاجية المتجولة للانسان\n	والحيوان </span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>تأسيس\n	المشروعات والمنشآت الخدمية والتنموية\n	الخيرية</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>الشراكات\n	واتفاقيات التفاهم مع المنظمات والهيئات\n	ذات الصلة </span></font>.</p>\n</ul>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>الهيكل\nالادارى </span></font>:</p>\n<ul>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>الجمعية\n	العمومية </span></font>: <font face="Arial"> <span>وتمثل\n	السلطة العليا للمنظمة ، وقد درجت على\n	الانعقاد كل عام لمراجعة لمراجعة وتقويم\n	الاداء واقرار الخطط والسياسات</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>اللجنة\n	التنفيذية </span></font>: <font face="Arial"> <span>وهى\n	الجهاز المسئول عن ترجمة الخطط والسياسات\n	الى ارض الواقع وتمثيل المنظمة داخل\n	وخارج السودان </span></font>. <font face="Arial"> <span>ويتكون\n	من </span></font>(6) <font face="Arial"> <span>اشخاص</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>المجلس\n	الاستشارى </span></font>: <font face="Arial"> <span>ويمثل\n	الكيان الداعم لخطط وبرامج المنظمة\n	وتوجيه سياساتها واستقطاب الدعم للبرامج\n	والمشروعات ويتكون من </span></font>(13) <font face="Arial"> <span>عضوا\n	</span></font>.</p>\n</ul>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>النظام\nالمالى والادارى </span></font>:</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>يقوم\nالنظام المالى والادارى على الاسس الادارية\nوالمالية والمحاسبية المعتمدة والمتعارف\nعليها</span></font>. <font face="Arial"> <span>ويتم\nسنويا مراجعة قائمة المركز المالى للمنظمة\nبواسطة مراجع قانونى </span></font>.</p>\n<p style="margin-bottom: 0.14in"><br/>\n<br/>\n\n</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>بعض\nالبرامج والمشروعات المنفذة </span></font>:</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>مجال\nالتوعية </span></font>:</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>تم\nتنفيذ عدد من البرامج التوعوية التى تتصل\nبأفاق التنمية الانسانية منها </span></font>:</p>\n<ul>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>ندوة\n	الصراعات القبلية واثرها على التنمية</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>ندوة\n	مستقبل التنمية فى ظل الوحدة أوالانفصال\n	</span></font>.2010</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>ندوة\n	الانتخابات السودانية واستحقاقات التنمية\n	</span></font>.2010<font face="Arial"> <span>م</span></font></p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>ورشة\n	الاضطرابات الانمائية لاطفال التوحد\n	</span></font>.2013<font face="Arial"> <span>م</span></font></p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>ورشة\n	احتياجات الاطفال فى مناطق الصراعات</span></font>2015.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>موتمرالتوحد\n	الاول</span></font>2015 <font face="Arial"> <span>م</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>المشاركة\n	فى اعداد وتنفيذ اليوم العالمى للتوحد\n	</span></font>.</p>\n</ul>\n<p style="margin-left: 0.5in; margin-bottom: 0.14in"><br/>\n<br/>\n\n</p>\n<p style="margin-left: 0.5in; margin-bottom: 0.14in"><font face="Arial"> <span>مشروعات\nالمياه </span></font>:</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>تنفيذ\n</span></font>(13) <font face="Arial"> <span>بئر\nبولايات  النيل الابيض وجنوب كردفان ،\nساهمت فى توفير الماء لاكثر من </span></font>(300000)\n<font face="Arial"> <span>مستفيد </span></font>.</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>مشاروعات\nالصحة </span></font>:</p>\n<ul>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>مخيمات\n	العيون المجانية </span></font>: <font face="Arial"> <span>نفذت\n	المنظمة </span></font>(20) <font face="Arial"> <span>مخيما\n	للعيون بمختلف ولايات السودان ، استطاعت\n	من خلالها الكشف والتطبيب على </span></font>(60000)<font face="Arial"> <span>مريض\n	، واجراء </span></font>(3500) <font face="Arial"> <span>عملية\n	عيون مختلفة ، تمكن المستفيدون منها من\n	استعادة نعمة البصر والرجوع لسوق العمل\n	والانتاج </span></font>. <font face="Arial"> <span>وذلك\n	بالشراكة مع ديوان الزكاة </span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>مخيمات\n	السماعات الطبية المجانية </span></font>: <font face="Arial"> <span>تمكنت\n	المنظمة من توزيع </span></font>(3000) <font face="Arial"> <span>سماعة\n	طبية لضعافالسمع بمختلف ولايات السودان\n	بالتعاون مع ديوان الزكاة ومنظمة كتيرا\n	البريطانية </span></font>.2008.</p>\n</ul>\n<p style="margin-bottom: 0.14in"><br/>\n<br/>\n\n</p>\n<ul>\n	<li/>\n<p style="margin-bottom: 0.14in">.</p>\n</ul>\n<p style="margin-bottom: 0.14in"> \n</p>\n<p style="margin-bottom: 0.14in"><br/>\n<br/>\n\n</p>\n</div>\n', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-23 18:34:25', '2018-11-23 18:34:25'),
(3, 1, 'ar', 'الرئيسية', 'home', '1', '<section class="page--content--section pt--80 pb--20">\n<div class="container">\n<div class="row row--vc-md">\n<div class="col-md-5 col-sm-6 pb--60">\n<div class="page--content-img" data-scroll-reveal="left" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateX(0) scale(1); opacity: 1;transform: translateX(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "><img alt="" data-rjs="2" src="../../../assets/img/about-img/01.jpg" /></div>\n</div>\n\n<div class="col-md-7 col-sm-6 pb--60">\n<div class="page--content-inner" data-scroll-reveal="right" data-sr-id="3" style="; visibility: visible;  -webkit-transform: translateX(0) scale(1); opacity: 1;transform: translateX(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.8s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; ">\n<div class="title">\n<h2 class="h1">عن المنظمة</h2>\n</div>\n\n<div class="sub-title">\n<h3 class="h3">منظمة اوردة للتنمية الانسانية</h3>\n\n<h3 class="h3">مقدمة&nbsp;</h3>\n</div>\n\n<div class="desc">\n<p>إنشأت منظمة أوردة للتنمية الانسانية فى اغسطس عام 2008م وفقا لقانون العمل الطوعى والانسانى بالسودان.\nيتمثل الدور الاساسى للمنظمة فى إشاعة قيم الاعتماد على الذات وزيادة معدلات الانتاج للفئات المستهدفة ،والاسهام فى تقليل نسبة الاعالة على الاسرة. وذلك وفقالبرامج مدروسة تحقق اهداف المنظمة.وترتبط المنظمة بشبكة منالعلاقات داخل وخارج السودان، ولها عضوية قوامها (350) شخص .</p>\n</div>\n\n<div class="desc">\n<h4>الرؤية</h4>\n\n<p>أن تتميز المنظمة فى القيام بمسئولياتها نحو الفئات المستهدفة ، وان تؤسس لمراكز عالمية فى توفير الخدمات التى تمكن المستفيدين من العودة لدائرة العمل والانتاج .</p>\n</div>\n\n<div class="desc">\n<h4>الرسالة</h4>\n\n<p>تعمل المنظمة على توظيف الموارد المتاحة بكلمسئولية وعلمية وشفافية، لمساعدة المستهدفين دوناعتبار أوتمييز للجنس أو العرق أو الدين .</p>\n</div>\n</div>\n</div>\n</div>\n</div>\n</section>\n', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-23 18:53:12', '2018-11-25 14:52:28'),
(4, 2, 'ar', 'عنا', 'about_us', '1', '\n<div dir="rtl">\n<p align="center" style="margin-bottom: 0.14in"><font face="Arial"> <span>منظمة\nأوردة للتنمية الانسانية</span></font></p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>مقدمة\n</span></font>:</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>إنشأت\nمنظمة أوردة للتنمية الانسانية فى اغسطس\nعام </span></font>2008<font face="Arial"> <span>م\nوفقا لقانون العمل الطوعى والانسانى\nبالسودان</span></font>.</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>يتمثل\nالدور الاساسى للمنظمة فى إشاعة قيم\nالاعتماد على الذات وزيادة معدلات الانتاج\nللفئات المستهدفة ،والاسهام فى تقليل\nنسبة الاعالة على الاسرة</span></font>. <font face="Arial"> <span>وذلك\nوفقالبرامج مدروسة تحقق اهداف المنظمة</span></font>.<font face="Arial"> <span>وترتبط\nالمنظمة بشبكة منالعلاقات داخل وخارج\nالسودان، ولها عضوية قوامها </span></font>(350)\n<font face="Arial"> <span>شخص </span></font>.</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>الرؤية\n</span></font>:</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>أن\nتتميز المنظمة فى القيام بمسئولياتها\nنحو الفئات المستهدفة ، وان تؤسس لمراكز\nعالمية فى توفير الخدمات التى تمكن\nالمستفيدين من العودة لدائرة العمل\nوالانتاج </span></font>.</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>الرسالة\n</span></font>:</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>تعمل\nالمنظمة على توظيف الموارد المتاحة\nبكلمسئولية وعلمية وشفافية، لمساعدة\nالمستهدفين دوناعتبار أوتمييز للجنس أو\nالعرق أو الدين </span></font>.</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>الاهداف\n</span></font>:</p>\n<ul>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>تثوير\n	الفكروتجذير الوعى بقضايا التنمية\n	الانسانية </span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>المساهمة\n	فى بناء القدرات والمهارات البشرية\n	للافراد والجماعات</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>تعزيز\n	قيم الاعتماد على الذات وزيادة الانتاج</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>المساهمة\n	فى أكساب المستفيذين انماط صحية وتعليمية\n	وتقنية داعمة لتحقيق مستوى حياة افضل </span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>تقليل\n	نسبة الاعالة فى الاسرة </span></font>.</p>\n</ul>\n<p style="margin-left: 0.5in; margin-bottom: 0.14in"><br/>\n<br/>\n\n</p>\n<p style="margin-left: 0.5in; margin-bottom: 0.14in"><font face="Arial"> <span>الوسائل\n</span></font>:</p>\n<ul>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>اعداد\n	وتنفيذ البرامج والمشروعات والخطط\n	والدراسات والبحوث والمسوحات الميدانية\n	وجمع  المعلومات</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>اقامة\n	ورش العمل والندوات وتنظيم المؤتمرات\n	السمنارات والدورات التدريبية </span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>اقامة\n	المخيمات العلاجية المتجولة للانسان\n	والحيوان </span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>تأسيس\n	المشروعات والمنشآت الخدمية والتنموية\n	الخيرية</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>الشراكات\n	واتفاقيات التفاهم مع المنظمات والهيئات\n	ذات الصلة </span></font>.</p>\n</ul>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>الهيكل\nالادارى </span></font>:</p>\n<ul>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>الجمعية\n	العمومية </span></font>: <font face="Arial"> <span>وتمثل\n	السلطة العليا للمنظمة ، وقد درجت على\n	الانعقاد كل عام لمراجعة لمراجعة وتقويم\n	الاداء واقرار الخطط والسياسات</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>اللجنة\n	التنفيذية </span></font>: <font face="Arial"> <span>وهى\n	الجهاز المسئول عن ترجمة الخطط والسياسات\n	الى ارض الواقع وتمثيل المنظمة داخل\n	وخارج السودان </span></font>. <font face="Arial"> <span>ويتكون\n	من </span></font>(6) <font face="Arial"> <span>اشخاص</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>المجلس\n	الاستشارى </span></font>: <font face="Arial"> <span>ويمثل\n	الكيان الداعم لخطط وبرامج المنظمة\n	وتوجيه سياساتها واستقطاب الدعم للبرامج\n	والمشروعات ويتكون من </span></font>(13) <font face="Arial"> <span>عضوا\n	</span></font>.</p>\n</ul>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>النظام\nالمالى والادارى </span></font>:</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>يقوم\nالنظام المالى والادارى على الاسس الادارية\nوالمالية والمحاسبية المعتمدة والمتعارف\nعليها</span></font>. <font face="Arial"> <span>ويتم\nسنويا مراجعة قائمة المركز المالى للمنظمة\nبواسطة مراجع قانونى </span></font>.</p>\n<p style="margin-bottom: 0.14in"><br/>\n<br/>\n\n</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>بعض\nالبرامج والمشروعات المنفذة </span></font>:</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>مجال\nالتوعية </span></font>:</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>تم\nتنفيذ عدد من البرامج التوعوية التى تتصل\nبأفاق التنمية الانسانية منها </span></font>:</p>\n<ul>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>ندوة\n	الصراعات القبلية واثرها على التنمية</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>ندوة\n	مستقبل التنمية فى ظل الوحدة أوالانفصال\n	</span></font>.2010</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>ندوة\n	الانتخابات السودانية واستحقاقات التنمية\n	</span></font>.2010<font face="Arial"> <span>م</span></font></p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>ورشة\n	الاضطرابات الانمائية لاطفال التوحد\n	</span></font>.2013<font face="Arial"> <span>م</span></font></p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>ورشة\n	احتياجات الاطفال فى مناطق الصراعات</span></font>2015.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>موتمرالتوحد\n	الاول</span></font>2015 <font face="Arial"> <span>م</span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>المشاركة\n	فى اعداد وتنفيذ اليوم العالمى للتوحد\n	</span></font>.</p>\n</ul>\n<p style="margin-left: 0.5in; margin-bottom: 0.14in"><br/>\n<br/>\n\n</p>\n<p style="margin-left: 0.5in; margin-bottom: 0.14in"><font face="Arial"> <span>مشروعات\nالمياه </span></font>:</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>تنفيذ\n</span></font>(13) <font face="Arial"> <span>بئر\nبولايات  النيل الابيض وجنوب كردفان ،\nساهمت فى توفير الماء لاكثر من </span></font>(300000)\n<font face="Arial"> <span>مستفيد </span></font>.</p>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>مشاروعات\nالصحة </span></font>:</p>\n<ul>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>مخيمات\n	العيون المجانية </span></font>: <font face="Arial"> <span>نفذت\n	المنظمة </span></font>(20) <font face="Arial"> <span>مخيما\n	للعيون بمختلف ولايات السودان ، استطاعت\n	من خلالها الكشف والتطبيب على </span></font>(60000)<font face="Arial"> <span>مريض\n	، واجراء </span></font>(3500) <font face="Arial"> <span>عملية\n	عيون مختلفة ، تمكن المستفيدون منها من\n	استعادة نعمة البصر والرجوع لسوق العمل\n	والانتاج </span></font>. <font face="Arial"> <span>وذلك\n	بالشراكة مع ديوان الزكاة </span></font>.</p>\n	<li/>\n<p style="margin-bottom: 0.14in"><font face="Arial"> <span>مخيمات\n	السماعات الطبية المجانية </span></font>: <font face="Arial"> <span>تمكنت\n	المنظمة من توزيع </span></font>(3000) <font face="Arial"> <span>سماعة\n	طبية لضعافالسمع بمختلف ولايات السودان\n	بالتعاون مع ديوان الزكاة ومنظمة كتيرا\n	البريطانية </span></font>.2008.</p>\n</ul>\n<p style="margin-bottom: 0.14in"><br/>\n<br/>\n\n</p>\n<ul>\n	<li/>\n<p style="margin-bottom: 0.14in">.</p>\n</ul>\n<p style="margin-bottom: 0.14in"> \n</p>\n<p style="margin-bottom: 0.14in"><br/>\n<br/>\n\n</p>\n</div>\n', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-23 18:54:16', '2018-11-23 18:54:16'),
(5, 1, 'fr', 'cccc', 'home', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-25 14:36:59', '2018-11-25 14:36:59'),
(6, 3, 'en', 'Advisory Board', 'advisory_board', '1', '<section>\n<table dir="rtl" class="table table-striped  table-bordered center" style="width:50%;margin: 0 auto;">\n<thead style="color: #d5ac63;">\n    <tr>\n        <th  style="text-align: right;">الرقم</th>\n        <th style="text-align: right;">الاسم</th>\n        <th style="text-align: right;">الصفة</th>\n        <th style="text-align: right;">العنوان</th>\n    </tr>\n</thead>\n	<tbody>\n	\n		<tr>\n			<td>1</td>\n			<td> بروفسيور /حسن أبوعائشة</td>\n			<td> رئيس المجلس </td>\n			<td>جامعة المغتربين</td>\n		</tr>\n		<tr>\n			<td>2</td>\n			<td>محمد عيسى عليو د/</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 منظمة المسار \n			</td>\n		</tr>\n		<tr><td>3\n			</td>\n		<td>\n			 بروفيسور  /  عبداللطيف عشميق \n			</td>\n			<td>\n			 عضواَ \n			</td>\n			<td>\n			 جامعة الرباط\n			</td>\n		</tr>\n		<tr  >\n			<td >\n	4\n			</td>\n		<td>\n			 الاستاذ  /  آدم جماع ادم\n			</td>\n			<td>\n	\n			</td>\n			<td>\n			 ولاية كسلا\n			</td>\n		</tr>\n		<tr  >\n			<td >\n		5\n			</td>\n		<td>\n			 السفير   /  عبدالله الشيخ نورالدين \n			</td>\n			<td>\n			 عضواَ \n			</td>\n			<td>\n			 دبلوماسى\n			</td>\n		</tr>\n		<tr>\n			<td >\n6			</td>\n		<td>\n			 الاستاذ  /  النور احمد النور  \n			</td>\n			<td>\n			 عضواَ \n			</td>\n			<td >\n			 صحيفة الأخبار\n			</td>\n		</tr>\n		<tr  >\n			<td >\n7			</td>\n		<td>\n			 الاستاذ   / موسى احمد  \n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 الامم المتحدة\n			</td>\n		</tr>\n		<tr  >\n			<td >\n8\n			</td>\n		<td>\n			 د  . محمد أحمد السنارى\n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 جامعة الرباط\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			9</p>\n			</td>\n		<td>\n			 الاستاذ  /  المهل عبدالقادر احمد\n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 ديوان الزكاة سابقا\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			10</p>\n			</td>\n		<td>\n			 الاستاذ  /  عماد الدين عبدالرحيم\n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 الهلال الاحمر السودانى\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			11</p>\n			</td>\n		<td>\n			 أ  . د  /  أبشر حسين\n			</td>\n			<td>\n			 عضواَ \n			</td>\n			<td>\n			 شخصيةعامة\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			12</p>\n			</td>\n		<td>\n			 د  .  محمود إبراهيم أحمد\n			</td>\n			<td>\n			 مقرراً\n			</td>\n			<td>\n			 منظمة أوردة\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			13</p>\n			</td>\n		<td>\n			 الاستاذ حسن السيد\n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 الشركة السودانية للتأمين\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			14</p>\n			</td>\n		<td>\n			 د  .  سمية حامد مختار\n			</td>\n			<td>\n			 عضواً\n			</td>\n			<td>\n			 جامعة السودان للعلوم والتكنولوجيا\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			16</p>\n			</td>\n		<td>\n			 الاستاذ  / الصادق الرزيقى\n			</td>\n			<td>\n			 عضواً\n			</td>\n			<td>\n			 صحيفة الانتباهة\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			17</p>\n			</td>\n		<td>\n			 أ  . د عبدالله الزبير\n			</td>\n			<td>\n			 عضوا\n			</td>\n			<td>\n			 مجمع الفقه الاسلامى\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			18</p>\n			</td>\n		<td>\n			 د  .  عثمان الهادى ابراهيم\n			</td>\n			<td>\n			 عضوا\n			</td>\n			<td>\n			 شركة التامينات\n			</td>\n		</tr>\n	</tbody>\n</table>\n</div>\n</section>\n     ', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-25 17:06:58', '2018-11-25 17:06:58'),
(7, 3, 'ar', 'المجلس الاستشاري', 'advisory_board', '1', '<section>\n<table dir="rtl" class="table table-striped  table-bordered center" style="width:50%;margin: 0 auto;">\n<thead style="color: #d5ac63;">\n    <tr>\n        <th  style="text-align: right;">الرقم</th>\n        <th style="text-align: right;">الاسم</th>\n        <th style="text-align: right;">الصفة</th>\n        <th style="text-align: right;">العنوان</th>\n    </tr>\n</thead>\n	<tbody>\n	\n		<tr>\n			<td>1</td>\n			<td> بروفسيور /حسن أبوعائشة</td>\n			<td> رئيس المجلس </td>\n			<td>جامعة المغتربين</td>\n		</tr>\n		<tr>\n			<td>2</td>\n			<td>محمد عيسى عليو د/</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 منظمة المسار \n			</td>\n		</tr>\n		<tr><td>3\n			</td>\n		<td>\n			 بروفيسور  /  عبداللطيف عشميق \n			</td>\n			<td>\n			 عضواَ \n			</td>\n			<td>\n			 جامعة الرباط\n			</td>\n		</tr>\n		<tr  >\n			<td >\n	4\n			</td>\n		<td>\n			 الاستاذ  /  آدم جماع ادم\n			</td>\n			<td>\n	\n			</td>\n			<td>\n			 ولاية كسلا\n			</td>\n		</tr>\n		<tr  >\n			<td >\n		5\n			</td>\n		<td>\n			 السفير   /  عبدالله الشيخ نورالدين \n			</td>\n			<td>\n			 عضواَ \n			</td>\n			<td>\n			 دبلوماسى\n			</td>\n		</tr>\n		<tr>\n			<td >\n6			</td>\n		<td>\n			 الاستاذ  /  النور احمد النور  \n			</td>\n			<td>\n			 عضواَ \n			</td>\n			<td >\n			 صحيفة الأخبار\n			</td>\n		</tr>\n		<tr  >\n			<td >\n7			</td>\n		<td>\n			 الاستاذ   / موسى احمد  \n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 الامم المتحدة\n			</td>\n		</tr>\n		<tr  >\n			<td >\n8\n			</td>\n		<td>\n			 د  . محمد أحمد السنارى\n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 جامعة الرباط\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			9</p>\n			</td>\n		<td>\n			 الاستاذ  /  المهل عبدالقادر احمد\n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 ديوان الزكاة سابقا\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			10</p>\n			</td>\n		<td>\n			 الاستاذ  /  عماد الدين عبدالرحيم\n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 الهلال الاحمر السودانى\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			11</p>\n			</td>\n		<td>\n			 أ  . د  /  أبشر حسين\n			</td>\n			<td>\n			 عضواَ \n			</td>\n			<td>\n			 شخصيةعامة\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			12</p>\n			</td>\n		<td>\n			 د  .  محمود إبراهيم أحمد\n			</td>\n			<td>\n			 مقرراً\n			</td>\n			<td>\n			 منظمة أوردة\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			13</p>\n			</td>\n		<td>\n			 الاستاذ حسن السيد\n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 الشركة السودانية للتأمين\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			14</p>\n			</td>\n		<td>\n			 د  .  سمية حامد مختار\n			</td>\n			<td>\n			 عضواً\n			</td>\n			<td>\n			 جامعة السودان للعلوم والتكنولوجيا\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			16</p>\n			</td>\n		<td>\n			 الاستاذ  / الصادق الرزيقى\n			</td>\n			<td>\n			 عضواً\n			</td>\n			<td>\n			 صحيفة الانتباهة\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			17</p>\n			</td>\n		<td>\n			 أ  . د عبدالله الزبير\n			</td>\n			<td>\n			 عضوا\n			</td>\n			<td>\n			 مجمع الفقه الاسلامى\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			18</p>\n			</td>\n		<td>\n			 د  .  عثمان الهادى ابراهيم\n			</td>\n			<td>\n			 عضوا\n			</td>\n			<td>\n			 شركة التامينات\n			</td>\n		</tr>\n	</tbody>\n</table>\n</div>\n</section>\n     ', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-25 17:06:58', '2018-11-25 17:06:58'),
(8, 3, 'fr', 'advisory_board', 'advisory_board', '1', '<section>\n<table dir="rtl" class="table table-striped  table-bordered center" style="width:50%;margin: 0 auto;">\n<thead style="color: #d5ac63;">\n    <tr>\n        <th  style="text-align: right;">الرقم</th>\n        <th style="text-align: right;">الاسم</th>\n        <th style="text-align: right;">الصفة</th>\n        <th style="text-align: right;">العنوان</th>\n    </tr>\n</thead>\n	<tbody>\n	\n		<tr>\n			<td>1</td>\n			<td> بروفسيور /حسن أبوعائشة</td>\n			<td> رئيس المجلس </td>\n			<td>جامعة المغتربين</td>\n		</tr>\n		<tr>\n			<td>2</td>\n			<td>محمد عيسى عليو د/</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 منظمة المسار \n			</td>\n		</tr>\n		<tr><td>3\n			</td>\n		<td>\n			 بروفيسور  /  عبداللطيف عشميق \n			</td>\n			<td>\n			 عضواَ \n			</td>\n			<td>\n			 جامعة الرباط\n			</td>\n		</tr>\n		<tr  >\n			<td >\n	4\n			</td>\n		<td>\n			 الاستاذ  /  آدم جماع ادم\n			</td>\n			<td>\n	\n			</td>\n			<td>\n			 ولاية كسلا\n			</td>\n		</tr>\n		<tr  >\n			<td >\n		5\n			</td>\n		<td>\n			 السفير   /  عبدالله الشيخ نورالدين \n			</td>\n			<td>\n			 عضواَ \n			</td>\n			<td>\n			 دبلوماسى\n			</td>\n		</tr>\n		<tr>\n			<td >\n6			</td>\n		<td>\n			 الاستاذ  /  النور احمد النور  \n			</td>\n			<td>\n			 عضواَ \n			</td>\n			<td >\n			 صحيفة الأخبار\n			</td>\n		</tr>\n		<tr  >\n			<td >\n7			</td>\n		<td>\n			 الاستاذ   / موسى احمد  \n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 الامم المتحدة\n			</td>\n		</tr>\n		<tr  >\n			<td >\n8\n			</td>\n		<td>\n			 د  . محمد أحمد السنارى\n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 جامعة الرباط\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			9</p>\n			</td>\n		<td>\n			 الاستاذ  /  المهل عبدالقادر احمد\n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 ديوان الزكاة سابقا\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			10</p>\n			</td>\n		<td>\n			 الاستاذ  /  عماد الدين عبدالرحيم\n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 الهلال الاحمر السودانى\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			11</p>\n			</td>\n		<td>\n			 أ  . د  /  أبشر حسين\n			</td>\n			<td>\n			 عضواَ \n			</td>\n			<td>\n			 شخصيةعامة\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			12</p>\n			</td>\n		<td>\n			 د  .  محمود إبراهيم أحمد\n			</td>\n			<td>\n			 مقرراً\n			</td>\n			<td>\n			 منظمة أوردة\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			13</p>\n			</td>\n		<td>\n			 الاستاذ حسن السيد\n			</td>\n			<td>\n			 عضواَ\n			</td>\n			<td>\n			 الشركة السودانية للتأمين\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			14</p>\n			</td>\n		<td>\n			 د  .  سمية حامد مختار\n			</td>\n			<td>\n			 عضواً\n			</td>\n			<td>\n			 جامعة السودان للعلوم والتكنولوجيا\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			16</p>\n			</td>\n		<td>\n			 الاستاذ  / الصادق الرزيقى\n			</td>\n			<td>\n			 عضواً\n			</td>\n			<td>\n			 صحيفة الانتباهة\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			17</p>\n			</td>\n		<td>\n			 أ  . د عبدالله الزبير\n			</td>\n			<td>\n			 عضوا\n			</td>\n			<td>\n			 مجمع الفقه الاسلامى\n			</td>\n		</tr>\n		<tr  >\n			<td >\n			18</p>\n			</td>\n		<td>\n			 د  .  عثمان الهادى ابراهيم\n			</td>\n			<td>\n			 عضوا\n			</td>\n			<td>\n			 شركة التامينات\n			</td>\n		</tr>\n	</tbody>\n</table>\n</div>\n</section>\n     ', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-25 17:06:58', '2018-11-25 17:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE IF NOT EXISTS `persistences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `persistences_code_unique` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=199 ;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, '2LNiinkP3aypWZTETyn2Ha1IFye9XS2G', '2018-11-23 18:17:08', '2018-11-23 18:17:08'),
(2, 1, 'JkPV2FqLQ8enkIUtKtoCM22qQrDY7UQX', '2018-11-23 18:33:32', '2018-11-23 18:33:32'),
(3, 1, 'MbvrAJfViK5dtdJAjS33k3Y9CFihiVhX', '2018-11-23 18:33:36', '2018-11-23 18:33:36'),
(4, 1, 'dh9kGhtmT9V4x8ulMJQ2YfOdx9wozT0a', '2018-11-23 18:34:25', '2018-11-23 18:34:25'),
(5, 1, 'mSa1TLYVTC2GI8AEYyTlpx1EZvMuqAEu', '2018-11-23 18:34:25', '2018-11-23 18:34:25'),
(6, 1, 'YLFwPA7lbzbNTLZkeGUmiFDbPu8GIS2B', '2018-11-23 18:39:38', '2018-11-23 18:39:38'),
(7, 1, 'PPU3TttBg0oXv6HQEPdQdU8c53KNp1DB', '2018-11-23 18:39:43', '2018-11-23 18:39:43'),
(8, 1, '8ABJKffrJT0zFMjW7oSJSyWZoRLjRJkW', '2018-11-23 18:39:45', '2018-11-23 18:39:45'),
(9, 1, 'BrdvziUqpyN38pGoZemwmpBCtHKH1CKL', '2018-11-23 18:39:47', '2018-11-23 18:39:47'),
(10, 1, 'R8lNNoj5ajzrxB2cLvCgk8V7xOR3Bak4', '2018-11-23 18:40:42', '2018-11-23 18:40:42'),
(11, 1, 'iEfgpOaohMvvezjM0HiCvB3XK6PBh55k', '2018-11-23 18:43:14', '2018-11-23 18:43:14'),
(12, 1, 'T9jrnr8RnLAE6nXRTlCKPO75EZw5F0in', '2018-11-23 18:46:27', '2018-11-23 18:46:27'),
(13, 1, 'dpmndhqiHQQZcI2pFAB5plcuBbBXQt5p', '2018-11-23 18:48:31', '2018-11-23 18:48:31'),
(14, 1, '92n0fWiEC0xdNyIuFZnrCTTE0y6eGa21', '2018-11-23 18:49:40', '2018-11-23 18:49:40'),
(15, 1, 'JqdyO5bljPwwEtvf9BzyCmgz8QNv3CEj', '2018-11-23 18:49:40', '2018-11-23 18:49:40'),
(16, 1, 'vZz5VIv6wuOikxgFTyb6J0H5Oco89fWo', '2018-11-23 18:49:40', '2018-11-23 18:49:40'),
(17, 1, 'q1OWNSrO7jZTDPeWgHLQddyihvyNvIkw', '2018-11-23 18:52:39', '2018-11-23 18:52:39'),
(18, 1, 'lTZd6xipgR6hKSYntdCKIbyz6y11Dgkp', '2018-11-23 18:52:46', '2018-11-23 18:52:46'),
(19, 1, 'vMEtlOlOHKg4YVB48AYHLvUU4uaOlvxv', '2018-11-23 18:52:46', '2018-11-23 18:52:46'),
(20, 1, 'VnXJW64WJJeKlHLAaozKR82YOHAXOUIt', '2018-11-23 18:52:46', '2018-11-23 18:52:46'),
(21, 1, 'FdYomgrId5deuBIlT7PrnOfol519R6lc', '2018-11-23 18:53:12', '2018-11-23 18:53:12'),
(22, 1, 'HuB6M2Cb1PD8HxRqJV3HP73NUHQwUVkN', '2018-11-23 18:53:12', '2018-11-23 18:53:12'),
(23, 1, 'RhVMAA80xZ4JBMjE1Uj5dT5UqT0ofqTW', '2018-11-23 18:53:18', '2018-11-23 18:53:18'),
(24, 1, 'HOX58BJFgz30e5W853uB0sJltmkRsm6K', '2018-11-23 18:53:18', '2018-11-23 18:53:18'),
(25, 1, 'HbofFKF0vuSy4q4wRGozNXc7yBOV5moL', '2018-11-23 18:53:19', '2018-11-23 18:53:19'),
(26, 1, 'pgvGEnF004TYFTH8wtdUm9i6YweWDq0g', '2018-11-23 18:53:43', '2018-11-23 18:53:43'),
(27, 1, 'Xr3E5nQJNdXwILex0LJiw6uaJDDMhjpr', '2018-11-23 18:53:43', '2018-11-23 18:53:43'),
(28, 1, 'uoBglzWqZREZx8YRFZkAgNkBKo7KgsWK', '2018-11-23 18:53:50', '2018-11-23 18:53:50'),
(29, 1, 'w220vYf0ri4rE1U0rDcqPmAsitZXawD7', '2018-11-23 18:53:50', '2018-11-23 18:53:50'),
(30, 1, 'Z1kww7uMgroW7R3lvJyHLkNKVObNUO0I', '2018-11-23 18:53:51', '2018-11-23 18:53:51'),
(31, 1, 'sbzo0cwdtLJjPlIDNRo7YMHYK1cbUp0y', '2018-11-23 18:54:16', '2018-11-23 18:54:16'),
(32, 1, 'pSHV5oCdkcVuOsR3RN4raOcbTkhObliO', '2018-11-23 18:54:17', '2018-11-23 18:54:17'),
(33, 1, '2LTrDcfIAAMn7jlwWJY4IXqtDAxMrRA7', '2018-11-23 18:54:19', '2018-11-23 18:54:19'),
(34, 1, '8zcFHF4Hy8mkBeLzmSOAfP4sEhc70gAU', '2018-11-23 18:54:19', '2018-11-23 18:54:19'),
(35, 1, 'JMNLHZrvJvgRiZsEdFeOujULvQD9vwjH', '2018-11-23 18:54:19', '2018-11-23 18:54:19'),
(36, 1, 'G4wryS5MQ7ahexEtk0h3PztKhEKy1NaI', '2018-11-23 18:54:23', '2018-11-23 18:54:23'),
(37, 1, 'LnFjf3hHh1Fx9xOnIW3awSCBfKc2XIgs', '2018-11-23 18:54:23', '2018-11-23 18:54:23'),
(38, 1, '6fAS0wEYyctD9J7kslOFIQlk8a6rHySv', '2018-11-23 18:54:34', '2018-11-23 18:54:34'),
(39, 1, 'Zy21XJ5X1dTNQbGRFbQpeJvWWBKNJZja', '2018-11-23 18:54:34', '2018-11-23 18:54:34'),
(40, 1, 'G0ZOHwBHkCsEiCNpnMFuQ2sjpikkSJ5a', '2018-11-23 18:54:34', '2018-11-23 18:54:34'),
(41, 1, 'ndRJKbYNBJhSixhuiDtLfg8KWZMNkEN6', '2018-11-23 18:54:43', '2018-11-23 18:54:43'),
(42, 1, '9F4R5sbyxzw8u69MpjWoZmMixbx830dw', '2018-11-24 12:17:58', '2018-11-24 12:17:58'),
(43, 1, 'upjmUHoFK58vSr3NHBHbNllT0onTE6Ex', '2018-11-24 12:18:22', '2018-11-24 12:18:22'),
(44, 1, 'XIqBjptNHBJI2DHDuleFKt5hlzNK8Tnp', '2018-11-24 12:45:05', '2018-11-24 12:45:05'),
(45, 1, 'dAxUYTBBvi5707QZYLkoAJPyFLOgNnjg', '2018-11-24 12:45:09', '2018-11-24 12:45:09'),
(46, 1, 'ctsEqIx07eRrKnMfAm7Zc9uJbzGY3lEi', '2018-11-24 12:45:09', '2018-11-24 12:45:09'),
(47, 1, 'c2E853rRLuLuvsKsi8QpkA5LPPyPkvlD', '2018-11-24 12:45:34', '2018-11-24 12:45:34'),
(48, 1, 'PynM2304ng2RxmLbuhqBKpCrHefwFiNM', '2018-11-24 12:45:34', '2018-11-24 12:45:34'),
(49, 1, 'U4LNaJiSWOBttlkLvVvmV1Pn31FOqZV4', '2018-11-24 12:45:50', '2018-11-24 12:45:50'),
(50, 1, '8LIbcLsk2dyLIvB2ix94QNiLN2Ghvjf9', '2018-11-24 12:45:58', '2018-11-24 12:45:58'),
(51, 1, '3hUVtbjOPbPvefzdsrTQ3Vc6pOESy0rG', '2018-11-24 12:45:59', '2018-11-24 12:45:59'),
(52, 1, 'bP8VazFvAsH6f2GSnZPaQQSYfTuDX1P6', '2018-11-24 12:48:20', '2018-11-24 12:48:20'),
(53, 1, '1aHAGrNmlGDiLDaekLZkgD8tno0TRa0y', '2018-11-24 12:48:23', '2018-11-24 12:48:23'),
(54, 1, 'MU25hvQjk7MMBJfxpxC70V4MfHAxOPZ6', '2018-11-24 12:49:19', '2018-11-24 12:49:19'),
(55, 1, '8qWs69PtTbpgG4OmbvX6m9jk4hgZ8OUH', '2018-11-24 12:49:20', '2018-11-24 12:49:20'),
(56, 1, 'uKDKLKMOubcZdnkx11H3caQ6dgkfecXN', '2018-11-24 13:16:09', '2018-11-24 13:16:09'),
(57, 1, 'X9sO3jtTKKxeX9MQjt3UK7Etr2ZN2q4t', '2018-11-24 13:16:12', '2018-11-24 13:16:12'),
(58, 1, '6KIpIkkY6RFQF9C09DknivQdghYyp9Cu', '2018-11-24 13:16:12', '2018-11-24 13:16:12'),
(59, 1, 'erILTBRPALdCHTr97pJYuYMihuxy4ox2', '2018-11-24 13:16:13', '2018-11-24 13:16:13'),
(60, 1, 'cIrkOPz5mpCmjRNsshiJg5biezh02Fpm', '2018-11-24 13:17:40', '2018-11-24 13:17:40'),
(61, 1, 'NhDzhgBdNqEJcA9wGmN0xFNWak9ziWmj', '2018-11-24 13:17:40', '2018-11-24 13:17:40'),
(62, 1, 'Azr8rVdvVPNANrkgWijSLdnbeczNDCpo', '2018-11-24 13:18:00', '2018-11-24 13:18:00'),
(63, 1, '3WiAqFwG7Ct4yYvnkzi8FJR3VMvZBvK6', '2018-11-24 13:18:00', '2018-11-24 13:18:00'),
(64, 1, 'Pbz8Pyf8JFvbPnhc9lO52Ah77hA3uqw6', '2018-11-24 13:18:01', '2018-11-24 13:18:01'),
(65, 1, 'JVlhYyKUFD3j3ToVraG2XncfqFhvUBPF', '2018-11-24 13:18:16', '2018-11-24 13:18:16'),
(66, 1, 'me4whjbi2WiOaAr08Pahc97vbY0wg8oT', '2018-11-24 13:18:18', '2018-11-24 13:18:18'),
(67, 1, '5NKclbvbjHVAq4X1lqcdYiV720E55yce', '2018-11-24 13:18:18', '2018-11-24 13:18:18'),
(68, 1, 'uRCAKyfBNDQvtLIZkbGx4aQrfKAOVQ8e', '2018-11-24 13:18:19', '2018-11-24 13:18:19'),
(69, 1, 'PtsfAhanVT0WThaqm91Z2A3eY1mFJowC', '2018-11-24 13:18:57', '2018-11-24 13:18:57'),
(70, 1, '25aur9uPpEMq6sqTVtzRyFublNtRdVpU', '2018-11-24 13:18:58', '2018-11-24 13:18:58'),
(71, 1, 'S8XxjZsdEamPz4mLCdJJ9L2ZFmn2Stxa', '2018-11-24 13:19:16', '2018-11-24 13:19:16'),
(72, 1, 'o4MJY2Qn72UKR0Ksrfc5Hs3YWM5NkAMy', '2018-11-24 13:19:16', '2018-11-24 13:19:16'),
(73, 1, 'YDYlCLILKCa9AwDSVoHGxOIKICp10Bzr', '2018-11-24 13:19:16', '2018-11-24 13:19:16'),
(74, 1, 'jDw3zcee0NWNUMguvt0lUFl1GXH1GRVk', '2018-11-24 13:19:23', '2018-11-24 13:19:23'),
(75, 1, 'iMCmnE43C8NV8rjPsy1rvE43RizwnD8j', '2018-11-24 13:19:23', '2018-11-24 13:19:23'),
(76, 1, 'KqeAdASI5kCDTmu8jbQ97ZStbRRx4llD', '2018-11-24 13:19:23', '2018-11-24 13:19:23'),
(77, 1, 'Wwqt6ioLBsAVM3smo59JXj8gyZppyNQa', '2018-11-24 13:20:08', '2018-11-24 13:20:08'),
(78, 1, 'F4xKbPHpccKMjS9CoY8q1jXUC9QwMT4Y', '2018-11-24 13:20:09', '2018-11-24 13:20:09'),
(79, 1, '3rXeUhJt9vGonYUAdfUWVdsxnYqY4B6r', '2018-11-24 13:22:50', '2018-11-24 13:22:50'),
(80, 1, 'icP0THPuAwEiAjW5WEQW4JVbfS8RmQoE', '2018-11-24 13:22:50', '2018-11-24 13:22:50'),
(81, 1, 'LllaIrXLtPW3PznzvwJd84TEw7xqTpbP', '2018-11-24 13:22:50', '2018-11-24 13:22:50'),
(82, 1, 'y8SR7iwGGVe7QLxt83PBX4rgmebKNERW', '2018-11-24 13:22:56', '2018-11-24 13:22:56'),
(83, 1, 'YKJLCw9LX9HzyIIUAjvfdbU0xHatAkaw', '2018-11-24 13:22:56', '2018-11-24 13:22:56'),
(84, 1, 'tFEUqyX2ksDaetfZvgbTAfEsXbJkb79e', '2018-11-24 13:22:56', '2018-11-24 13:22:56'),
(85, 1, 'VsmwkvKvVQTpThMU6KgfBX1PHMG9o4QS', '2018-11-24 13:23:59', '2018-11-24 13:23:59'),
(86, 1, 'A7nYL0OtKPrLqFRn9ALavjpGCHu3tQ9Q', '2018-11-24 13:23:59', '2018-11-24 13:23:59'),
(87, 1, 'wY9099GaAQ0gvic76mYee0gdw2DPQBFO', '2018-11-24 13:24:30', '2018-11-24 13:24:30'),
(88, 1, 'WNHbqWEKcVxePlG6nMDZWoiVxBE5kR26', '2018-11-24 13:24:30', '2018-11-24 13:24:30'),
(89, 1, 'vv8SonwnOspCM3pqmpwIchCPyP7qtzYd', '2018-11-24 13:24:30', '2018-11-24 13:24:30'),
(90, 1, '6Z7imI9qY4w2ks8Fbj2M1BmNxiPALvAN', '2018-11-24 13:24:40', '2018-11-24 13:24:40'),
(91, 1, 'hcudZmzLOgbio6mRxFTNJLDPkAyfSIrL', '2018-11-24 13:24:40', '2018-11-24 13:24:40'),
(92, 1, '4m9pTmJxDTQu9YCu5zkSUPqe78ILr2CZ', '2018-11-24 13:24:40', '2018-11-24 13:24:40'),
(93, 1, 'VjEqL64i7RyqWknSipd3oCnZGZDkOuty', '2018-11-24 13:25:21', '2018-11-24 13:25:21'),
(94, 1, 'mYoL2hOEk1QrPyokAyCBSOkSNsJZlSbu', '2018-11-24 13:25:21', '2018-11-24 13:25:21'),
(95, 1, 'Pk7HvviFca4frylAi7rmlpdQ2G1CwuQl', '2018-11-24 13:26:10', '2018-11-24 13:26:10'),
(96, 1, '6umtt14ULzsqNUiMq73ksZa2RQLER9yV', '2018-11-24 13:26:10', '2018-11-24 13:26:10'),
(97, 1, 'lLcfk1colClEV7CI2RGK9EEPiUMNU0lb', '2018-11-24 13:26:10', '2018-11-24 13:26:10'),
(98, 1, '3KeYK2loPSkusVqjMjtpqASwzx1H3MOx', '2018-11-24 13:26:17', '2018-11-24 13:26:17'),
(99, 1, 'c6VGm8X3ZCqhuuY0UIibbn8XypSVH1y4', '2018-11-24 13:26:17', '2018-11-24 13:26:17'),
(100, 1, 'j70W8p5xyeKmGvhSqeh6EEWGmDPwtbRb', '2018-11-24 13:26:17', '2018-11-24 13:26:17'),
(101, 1, 'QGlOzTMJEG3HDTPJXtjJlW2S1HVPcihf', '2018-11-24 13:27:03', '2018-11-24 13:27:03'),
(102, 1, 'PQbHUJ3UWzXxhK0ovmpaUYVLNPVGbOhb', '2018-11-24 13:27:03', '2018-11-24 13:27:03'),
(103, 1, 'HONRXFG9jmCkZCRncgAy4PQWaK9Ize9R', '2018-11-24 13:27:15', '2018-11-24 13:27:15'),
(104, 1, 'eQWY3oeMCutZvIpjN21kDvUpqKqdC0fC', '2018-11-24 13:27:16', '2018-11-24 13:27:16'),
(105, 1, 'qFffF5ZUJXHCmUqzKctqtRDbQMcgsul2', '2018-11-24 13:27:16', '2018-11-24 13:27:16'),
(106, 1, 'gvqROZSRZBKxMGyx86hN3NKGd7qgKDb9', '2018-11-24 13:27:20', '2018-11-24 13:27:20'),
(107, 1, '6qcLEhUAJrPfJ0o9H94bAsyUUHGVWbA7', '2018-11-24 13:27:21', '2018-11-24 13:27:21'),
(108, 1, 'c9q7n6KjoXfA6ODl2VvLi9ePaEm9Obbk', '2018-11-24 13:27:21', '2018-11-24 13:27:21'),
(109, 1, 'GBjgplDjZYlFFpGamO9EfWrMgRloh1tt', '2018-11-24 13:28:09', '2018-11-24 13:28:09'),
(110, 1, 'mcAwTGJic4D38KgV7ddZXGTRjBMsxiEh', '2018-11-24 13:28:10', '2018-11-24 13:28:10'),
(111, 1, 'VMEzceGtlRcvge75J5MEaYXxJ9kViMPV', '2018-11-24 13:41:54', '2018-11-24 13:41:54'),
(112, 1, 'zImjSS2F4z3wfSRZJrs1QbxSAMqqpPd3', '2018-11-24 13:41:54', '2018-11-24 13:41:54'),
(113, 1, 'N1h8luDf1N5LuNOlrBI0785nHChuHjiS', '2018-11-24 13:42:01', '2018-11-24 13:42:01'),
(114, 1, 'mISPwmloVW5vkwADxFQKwrJFfIGf5Eat', '2018-11-24 13:42:01', '2018-11-24 13:42:01'),
(115, 1, 'VH6sHMcPGSK5pHZ8u08M2tT9wHew5c5t', '2018-11-24 13:52:45', '2018-11-24 13:52:45'),
(116, 1, 'LGWXVl9WowKzLhUOf85ZerC7F3N2b4BO', '2018-11-24 13:52:49', '2018-11-24 13:52:49'),
(117, 1, 'mga2d4khzpZa4UcLK4SHR5btQYKcr0Cl', '2018-11-24 15:18:33', '2018-11-24 15:18:33'),
(118, 1, '9IQULAPFuMjiyO4iadHJXZtr0CY19WAk', '2018-11-24 15:18:40', '2018-11-24 15:18:40'),
(119, 1, 'a6KtFUqeNRHftzkEY20Vp7hXnGY5NTxS', '2018-11-24 15:18:45', '2018-11-24 15:18:45'),
(120, 1, 'CesE78cqFVsX4uW1aHb5tsUDM600H1I8', '2018-11-24 15:57:54', '2018-11-24 15:57:54'),
(121, 1, '7CEbolgcTlDciHIBQDx4IB7wbwl9QnCi', '2018-11-24 16:00:47', '2018-11-24 16:00:47'),
(122, 1, '6zEpykjb2WHDL6HhHMb6xn6SgaIi91Sl', '2018-11-24 17:43:00', '2018-11-24 17:43:00'),
(123, 1, 'jjwju7D1NaMI6SAawVzD0MlMhWwxE503', '2018-11-24 22:13:43', '2018-11-24 22:13:43'),
(124, 1, 'RWLc0cBk62ZwIzuxGGS3NmrZPeI3COE2', '2018-11-24 22:23:34', '2018-11-24 22:23:34'),
(125, 1, 'YreWfEzoRuU7O9v0T3wamKbD7PD9F4ds', '2018-11-24 23:19:43', '2018-11-24 23:19:43'),
(126, 1, 'gRvrFB5Rb7zMq9LotzEiTpgz6ZiQ347c', '2018-11-24 23:19:46', '2018-11-24 23:19:46'),
(127, 1, 'PC7JgwhUEaQWvN3P9cXrlNcORCpA21Bu', '2018-11-24 23:19:49', '2018-11-24 23:19:49'),
(128, 1, 'EucHzBszqZdMGBzZCN6KInbsqQDEwkAp', '2018-11-25 06:28:40', '2018-11-25 06:28:40'),
(129, 1, 'zIK5OrEDaxMypVIQyZari84u1QGocH1q', '2018-11-25 06:28:42', '2018-11-25 06:28:42'),
(130, 1, 'rejKADJajq1itp6mlHAUBVfcM3lz5qHe', '2018-11-25 06:28:51', '2018-11-25 06:28:51'),
(131, 1, 'hJzXiHSjGX3JkgQOPTsI0ZHEHducYMee', '2018-11-25 06:28:54', '2018-11-25 06:28:54'),
(132, 1, '4hhiRxsYoKTMSBBW3zHWqbzAlQasARO3', '2018-11-25 06:28:55', '2018-11-25 06:28:55'),
(133, 1, 'DNjDix8mtsgflJbxN2XTtP0lUuI2JbBk', '2018-11-25 06:30:52', '2018-11-25 06:30:52'),
(134, 1, '9674XXg7OoBvpmM3o9pjPY86Y0JYm3Mf', '2018-11-25 06:30:52', '2018-11-25 06:30:52'),
(135, 1, '6bmShGIHpFRH2XbLnTrrnCfL18fdk57B', '2018-11-25 06:44:05', '2018-11-25 06:44:05'),
(136, 1, 'EMtKwjjFSm0yCjN7ntOyNGsYZKWVVJyh', '2018-11-25 07:21:42', '2018-11-25 07:21:42'),
(137, 1, 'OEYR0pMc0P1QMxnLJBbFgoQUfdmoCCoP', '2018-11-25 14:35:37', '2018-11-25 14:35:37'),
(138, 1, 'D2zp7mtTxg839iuEpfhJY3Mv7pY2y0hQ', '2018-11-25 14:35:51', '2018-11-25 14:35:51'),
(139, 1, 'DUil7g98XW8TU8RfxrjyXIMQkpsmpP1f', '2018-11-25 14:35:54', '2018-11-25 14:35:54'),
(140, 1, 'PRCeNeByYjggYWs47LCrbtZq4e37jRlM', '2018-11-25 14:35:54', '2018-11-25 14:35:54'),
(141, 1, 'vmYWHdAOFlLPawDf6t0nvBEIDZfRAuoL', '2018-11-25 14:35:54', '2018-11-25 14:35:54'),
(142, 1, 'AcUkcrzLQQP0hJbqCj2FERA14LNssYgn', '2018-11-25 14:36:39', '2018-11-25 14:36:39'),
(143, 1, 'fMDl8IpsHM2k1yeGVETnsk9gLM3SeIRR', '2018-11-25 14:36:59', '2018-11-25 14:36:59'),
(144, 1, '90RnQD00R5conaYRX0BMVKIRUwQsFNoZ', '2018-11-25 14:36:59', '2018-11-25 14:36:59'),
(145, 1, '6Di0nWXo3eYC4ZjUex5ATBqkcZ9JQbVp', '2018-11-25 14:41:35', '2018-11-25 14:41:35'),
(146, 1, 'J1FycBEblIQR8JhlyZJESVMF2rmSn6Nk', '2018-11-25 14:41:35', '2018-11-25 14:41:35'),
(147, 1, 'dxDydqelqHbmTcQMgzXPERpUAPEXdmjz', '2018-11-25 14:41:35', '2018-11-25 14:41:35'),
(148, 1, 'pHBjgSiS9ieFPIoO2vL9csDp6thTs1oi', '2018-11-25 14:41:43', '2018-11-25 14:41:43'),
(149, 1, 'YS4AXs49kev5lnxrDMsLOzS4UfJ3doq2', '2018-11-25 14:41:43', '2018-11-25 14:41:43'),
(150, 1, 'QsLKytVptBvJ8jyYE6obacktJOhGwiFB', '2018-11-25 14:41:43', '2018-11-25 14:41:43'),
(151, 1, 's7bINnw4r0JgvK23Kt8z9bJySgC3SOfk', '2018-11-25 14:42:57', '2018-11-25 14:42:57'),
(152, 1, 'HtfB2OxqHRxDsx1wSv0Rmudra4e3kzQW', '2018-11-25 14:42:57', '2018-11-25 14:42:57'),
(153, 1, 'XqeMRG5RM7iM9Y0WH6tDuOlvFSNeGjzM', '2018-11-25 14:42:57', '2018-11-25 14:42:57'),
(154, 1, 'HUVGrLhqXOiU1rV44rV8meiZ9yfCmOa7', '2018-11-25 14:45:52', '2018-11-25 14:45:52'),
(155, 1, 'XsDANB8XTOTEiS1OSoSLMxvMUoNrkVAh', '2018-11-25 14:45:53', '2018-11-25 14:45:53'),
(156, 1, '73MVhcvG49TZannmgpxo3NdFcmLikLZI', '2018-11-25 14:48:04', '2018-11-25 14:48:04'),
(157, 1, '6VUc2Jpc3KqLytWX4R3gWdPNQXrUcG12', '2018-11-25 14:48:04', '2018-11-25 14:48:04'),
(158, 1, 'oU4T1x6bK6GbEHTtwYOdBx3YBonN0WtP', '2018-11-25 14:48:04', '2018-11-25 14:48:04'),
(159, 1, '1J9n19JbrVrYAmFViGgaC46ys3vqaieU', '2018-11-25 14:48:13', '2018-11-25 14:48:13'),
(160, 1, 'm9bAT831yPb54LtFx4WwF7h3cBbcAuiZ', '2018-11-25 14:48:13', '2018-11-25 14:48:13'),
(161, 1, 'IGi2sZjjjmRvCB92mIGiiCPsXDtxct6C', '2018-11-25 14:48:13', '2018-11-25 14:48:13'),
(162, 1, 'R4mfIFioLoStNHnFPcVckvaT66okij3J', '2018-11-25 14:52:28', '2018-11-25 14:52:28'),
(163, 1, '82NahW4CG37GQt696z3OGWgCU9zHrRuQ', '2018-11-25 14:52:28', '2018-11-25 14:52:28'),
(164, 1, '9jw1rFKV70ycO6eUFMDwWvUu3mFzyDNJ', '2018-11-25 14:52:45', '2018-11-25 14:52:45'),
(165, 1, 'qOBE9NawfJqcZiHSFh5zPoCRGdBNsWVU', '2018-11-25 14:52:45', '2018-11-25 14:52:45'),
(166, 1, 'sqnlOlq5hZLIz9ystsuajRAf8rZ8Xo5M', '2018-11-25 14:52:46', '2018-11-25 14:52:46'),
(167, 1, '7m1Hzd8BbyJCKqRrb8FL32IlxWdkLHLc', '2018-11-25 14:52:50', '2018-11-25 14:52:50'),
(168, 1, 'HVuOpnVIOpTa9qbgedyS48tU2VQSeXGi', '2018-11-25 14:52:50', '2018-11-25 14:52:50'),
(169, 1, '6Jz3j8TRkiagcL3CwBmpn5k82pBD3Geb', '2018-11-25 14:52:50', '2018-11-25 14:52:50'),
(170, 1, 'SWQcp2kDdm2VbDHX3OGquEz1cHK9b0YR', '2018-11-25 14:54:57', '2018-11-25 14:54:57'),
(171, 1, 'RE4bxf4M5DRksLqZd5854N8Ehr2yy5ZR', '2018-11-25 14:54:57', '2018-11-25 14:54:57'),
(172, 1, 'FjSeulk6EzWkWOqez6ZrJf7cmOyZNOrS', '2018-11-25 14:55:29', '2018-11-25 14:55:29'),
(173, 1, '5PHbRaFsgZjjVkPMX38IDp699TcDgxQi', '2018-11-25 14:55:29', '2018-11-25 14:55:29'),
(174, 1, 'NXvYTPH2E4x1Kmkbq6GUEREaw4MZeQGk', '2018-11-25 14:55:30', '2018-11-25 14:55:30'),
(175, 1, 'AHacFLq0zrVH5qSknFKAEzaGuXy22oUw', '2018-11-25 14:55:34', '2018-11-25 14:55:34'),
(176, 1, '8y5rCJaaanEj2wjuVRWuXc2AHIhgM2DL', '2018-11-25 14:55:34', '2018-11-25 14:55:34'),
(177, 1, 'C2eVoJUSfnzLYuwzPlXw0CVIwdL2aypC', '2018-11-25 14:55:34', '2018-11-25 14:55:34'),
(178, 1, 'b0oHvoBjWF2jXvtAv5XXfHKHHe85NNgt', '2018-11-25 14:56:13', '2018-11-25 14:56:13'),
(179, 1, 'W5LblpiEQjXlFDjM8fq266pjPSzJFcFJ', '2018-11-25 14:56:13', '2018-11-25 14:56:13'),
(180, 1, 'jovJwt2JOigjAboXYU3BH0F8tRu53Tho', '2018-11-25 14:56:13', '2018-11-25 14:56:13'),
(181, 1, 'AmWjipOzADBNrNaFUPap2vEfhzyDXFbV', '2018-11-25 16:59:43', '2018-11-25 16:59:43'),
(182, 1, 'CgZIIoHY99ia8xjBOZaT1w7yHqpSslck', '2018-11-25 17:00:55', '2018-11-25 17:00:55'),
(183, 1, 'tmB1xZ4bZJnkknyxvQ4zqNXc7GYQVnvo', '2018-11-25 17:04:33', '2018-11-25 17:04:33'),
(184, 1, '34J7fdftatTU2y9cxJ0w2PMz9fJUJws8', '2018-11-25 17:04:36', '2018-11-25 17:04:36'),
(185, 1, 'UNJtimS4TSvyRIg2TQiZcmNBc4Ak1Yhb', '2018-11-25 17:06:58', '2018-11-25 17:06:58'),
(186, 1, '0xTCS6zpxkGsGFlO5Zg5aSxWG8YqOThR', '2018-11-25 17:06:58', '2018-11-25 17:06:58'),
(187, 1, 'ikfApod8DsQrwb01lyGgP4IHpWy6NaIB', '2018-11-25 17:07:14', '2018-11-25 17:07:14'),
(188, 1, 'VjMprS58CXSECfotLFiAvZFBJmduHOeR', '2018-11-25 17:07:52', '2018-11-25 17:07:52'),
(189, 1, 'ZSnYPMuIaUBap5oLA8ZpN8q6Ve7Zmoxv', '2018-11-25 17:07:56', '2018-11-25 17:07:56'),
(190, 1, 'BvyFKoTL735jfvqZWPoFALW9egYECAtE', '2018-11-25 17:07:57', '2018-11-25 17:07:57'),
(191, 1, 'P3OsNd333ISOTP6iZR7vDF0DVPCntBx5', '2018-11-25 17:07:57', '2018-11-25 17:07:57'),
(192, 1, 'm2KixvyEZSV6Xm90xpGS4jTNzbA4Ir3Q', '2018-11-25 17:10:51', '2018-11-25 17:10:51'),
(193, 1, 'XiTbbGIlhfCjGREguE68qnejvwbtArXy', '2018-11-25 17:10:51', '2018-11-25 17:10:51'),
(194, 1, 'MGvVRnL3n9mGXknu8oK8SONiAtCkGqys', '2018-11-25 17:11:15', '2018-11-25 17:11:15'),
(195, 1, '1w2t4LYudRjiS1cTR5cwN6URX6m2BcZm', '2018-11-25 18:35:03', '2018-11-25 18:35:03'),
(196, 1, 'ZG4dfwA5Jp0n2XO6mKfOv7nvAqxP56Yg', '2018-11-26 08:49:06', '2018-11-26 08:49:06'),
(197, 1, 'XjTdBx0mioCP5XH4Dt4I8ncclSlZjaoU', '2018-11-26 09:48:09', '2018-11-26 09:48:09'),
(198, 1, 'LZXPFBb5cFaF0sppj6Tr5im5SLofhZdI', '2018-12-23 12:11:11', '2018-12-23 12:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE IF NOT EXISTS `reminders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `revisions`
--

CREATE TABLE IF NOT EXISTS `revisions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `revisionable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisionable_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_value` text COLLATE utf8mb4_unicode_ci,
  `new_value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `revisions_revisionable_id_revisionable_type_index` (`revisionable_id`,`revisionable_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `revisions`
--

INSERT INTO `revisions` (`id`, `revisionable_type`, `revisionable_id`, `user_id`, `key`, `old_value`, `new_value`, `created_at`, `updated_at`) VALUES
(1, 'Modules\\Translation\\Entities\\TranslationTranslation', 1, 1, 'created_at', NULL, NULL, '2018-11-24 13:41:55', '2018-11-24 13:41:55'),
(2, 'Modules\\Translation\\Entities\\TranslationTranslation', 2, 1, 'created_at', NULL, NULL, '2018-11-24 13:42:01', '2018-11-24 13:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '{"blog.posts.index":true,"blog.posts.create":true,"blog.posts.edit":true,"blog.posts.destroy":true,"blog.categories.index":true,"blog.categories.create":true,"blog.categories.edit":true,"blog.categories.destroy":true,"core.sidebar.group":true,"dashboard.index":true,"dashboard.update":true,"dashboard.reset":true,"media.medias.index":true,"media.medias.create":true,"media.medias.edit":true,"media.medias.destroy":true,"media.folders.index":true,"media.folders.create":true,"media.folders.edit":true,"media.folders.destroy":true,"menu.menus.index":true,"menu.menus.create":true,"menu.menus.edit":true,"menu.menus.destroy":true,"menu.menuitems.index":true,"menu.menuitems.create":true,"menu.menuitems.edit":true,"menu.menuitems.destroy":true,"page.pages.index":true,"page.pages.create":true,"page.pages.edit":true,"page.pages.destroy":true,"setting.settings.index":true,"setting.settings.edit":true,"tag.tags.index":true,"tag.tags.create":true,"tag.tags.edit":true,"tag.tags.destroy":true,"translation.translations.index":true,"translation.translations.edit":true,"translation.translations.import":true,"translation.translations.export":true,"user.users.index":true,"user.users.create":true,"user.users.edit":true,"user.users.destroy":true,"user.roles.index":true,"user.roles.create":true,"user.roles.edit":true,"user.roles.destroy":true,"account.api-keys.index":true,"account.api-keys.create":true,"account.api-keys.destroy":true,"workshop.sidebar.group":true,"workshop.modules.index":true,"workshop.modules.show":true,"workshop.modules.update":true,"workshop.modules.disable":true,"workshop.modules.enable":true,"workshop.modules.publish":true,"workshop.themes.index":true,"workshop.themes.show":true,"workshop.themes.publish":true}', '2018-11-23 18:07:59', '2018-11-24 12:45:34'),
(2, 'user', 'User', NULL, '2018-11-23 18:07:59', '2018-11-23 18:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE IF NOT EXISTS `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-11-23 18:08:22', '2018-11-23 18:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `setting__settings`
--

CREATE TABLE IF NOT EXISTS `setting__settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plainValue` text COLLATE utf8mb4_unicode_ci,
  `isTranslatable` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting__settings_name_unique` (`name`),
  KEY `setting__settings_name_index` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `setting__settings`
--

INSERT INTO `setting__settings` (`id`, `name`, `plainValue`, `isTranslatable`, `created_at`, `updated_at`) VALUES
(1, 'core::template', 'Flatly', 0, '2018-11-23 18:08:46', '2018-11-23 18:08:46'),
(2, 'core::locales', '["en","ar","fr"]', 0, '2018-11-23 18:08:46', '2018-11-24 13:43:26'),
(3, 'blog::posts-per-page', NULL, 1, '2018-11-23 18:41:14', '2018-11-23 18:41:14'),
(4, 'blog::latest-posts-amount', NULL, 1, '2018-11-23 18:41:15', '2018-11-23 18:41:15'),
(5, 'blog::widget-posts-amount', NULL, 1, '2018-11-23 18:41:15', '2018-11-23 18:41:15'),
(6, 'core::site-name', NULL, 1, '2018-11-23 18:41:45', '2018-11-23 18:41:45'),
(7, 'core::site-name-mini', NULL, 1, '2018-11-23 18:41:45', '2018-11-23 18:41:45'),
(8, 'core::site-description', NULL, 1, '2018-11-23 18:41:45', '2018-11-23 18:41:45'),
(9, 'core::analytics-script', NULL, 0, '2018-11-23 18:41:45', '2018-11-23 18:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `setting__setting_translations`
--

CREATE TABLE IF NOT EXISTS `setting__setting_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `setting_id` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting__setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  KEY `setting__setting_translations_locale_index` (`locale`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `setting__setting_translations`
--

INSERT INTO `setting__setting_translations` (`id`, `setting_id`, `locale`, `value`, `description`) VALUES
(1, 3, 'en', '5', NULL),
(2, 4, 'en', '5', NULL),
(3, 5, 'en', '5', NULL),
(4, 6, 'en', 'awrida', NULL),
(5, 7, 'en', 'awrida', NULL),
(6, 8, 'en', NULL, NULL),
(7, 6, 'ar', 'منظمة اوردة للتنمية الانسانية', NULL),
(8, 7, 'ar', 'اوردة', NULL),
(9, 8, 'ar', NULL, NULL),
(10, 3, 'ar', '5', NULL),
(11, 4, 'ar', '5', NULL),
(12, 5, 'ar', '5', NULL),
(13, 3, 'fr', '5', NULL),
(14, 4, 'fr', '5', NULL),
(15, 5, 'fr', '5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tag__tagged`
--

CREATE TABLE IF NOT EXISTS `tag__tagged` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `taggable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taggable_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tag__tagged_taggable_type_taggable_id_index` (`taggable_type`,`taggable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tag__tags`
--

CREATE TABLE IF NOT EXISTS `tag__tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namespace` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tag__tag_translations`
--

CREATE TABLE IF NOT EXISTS `tag__tag_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tag__tag_translations_tag_id_locale_unique` (`tag_id`,`locale`),
  KEY `tag__tag_translations_locale_index` (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2018-11-25 06:28:25', '2018-11-25 06:28:25'),
(2, NULL, 'ip', '127.0.0.1', '2018-11-25 06:28:25', '2018-11-25 06:28:25'),
(3, 1, 'user', NULL, '2018-11-25 06:28:25', '2018-11-25 06:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `translation__translations`
--

CREATE TABLE IF NOT EXISTS `translation__translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `translation__translations_key_index` (`key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `translation__translations`
--

INSERT INTO `translation__translations` (`id`, `key`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'blog::category.button.create category', '2018-11-24 13:41:54', '2018-11-24 13:41:54', NULL),
(2, 'blog::blog.title', '2018-11-24 13:42:01', '2018-11-24 13:42:01', NULL),
(3, 'titel::subtitel', '2018-11-24 13:42:01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `translation__translation_translations`
--

CREATE TABLE IF NOT EXISTS `translation__translation_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `translation_id` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_trans_id_locale_unique` (`translation_id`,`locale`),
  KEY `translation__translation_translations_locale_index` (`locale`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `translation__translation_translations`
--

INSERT INTO `translation__translation_translations` (`id`, `value`, `translation_id`, `locale`) VALUES
(1, 'فئة جديدة', 1, 'ar'),
(2, 'مدونة', 2, 'ar'),
(3, 'العنوان الجانبي', 3, 'ar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'm@m.com', '$2y$10$ehWcT8q2p.H/ehKXdy99V.u7etrTsvZwqmJb2MZly7f9AT1JtqhEW', NULL, '2018-12-23 12:11:11', 'hohammed', 'fttah', '2018-11-23 18:08:22', '2018-12-23 12:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `access_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_tokens_access_token_unique` (`access_token`),
  KEY `user_tokens_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_tokens`
--

INSERT INTO `user_tokens` (`id`, `user_id`, `access_token`, `created_at`, `updated_at`) VALUES
(1, 1, '15c96d36-8618-43ab-94c8-dda4c1a77c17', '2018-11-23 18:08:22', '2018-11-23 18:08:22');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog__category_translations`
--
ALTER TABLE `blog__category_translations`
  ADD CONSTRAINT `blog__category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `blog__categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog__post_translations`
--
ALTER TABLE `blog__post_translations`
  ADD CONSTRAINT `blog__post_translations_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `blog__posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dashboard__widgets`
--
ALTER TABLE `dashboard__widgets`
  ADD CONSTRAINT `dashboard__widgets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `media__file_translations`
--
ALTER TABLE `media__file_translations`
  ADD CONSTRAINT `media__file_translations_file_id_foreign` FOREIGN KEY (`file_id`) REFERENCES `media__files` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu__menuitems`
--
ALTER TABLE `menu__menuitems`
  ADD CONSTRAINT `menu__menuitems_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu__menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu__menuitem_translations`
--
ALTER TABLE `menu__menuitem_translations`
  ADD CONSTRAINT `menu__menuitem_translations_menuitem_id_foreign` FOREIGN KEY (`menuitem_id`) REFERENCES `menu__menuitems` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu__menu_translations`
--
ALTER TABLE `menu__menu_translations`
  ADD CONSTRAINT `menu__menu_translations_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu__menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page__page_translations`
--
ALTER TABLE `page__page_translations`
  ADD CONSTRAINT `page__page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `page__pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting__setting_translations`
--
ALTER TABLE `setting__setting_translations`
  ADD CONSTRAINT `setting__setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `setting__settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tag__tag_translations`
--
ALTER TABLE `tag__tag_translations`
  ADD CONSTRAINT `tag__tag_translations_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tag__tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `translation__translation_translations`
--
ALTER TABLE `translation__translation_translations`
  ADD CONSTRAINT `translation__translation_translations_translation_id_foreign` FOREIGN KEY (`translation_id`) REFERENCES `translation__translations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
