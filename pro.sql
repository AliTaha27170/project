-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2022 at 03:14 PM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u440455561_definition`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `about_title`, `about`, `goal`, `created_at`, `updated_at`) VALUES
(1, 'من نحن', '<p>جمعية تعاونية مختصة في الجودة والسلامة الغذائية وهي الأولى من نوعها على مستوى المملكة وهذا ما سيجعلها كيانا متميزا وفريدا من نوعه بين مختلف الجمعيات على الساحة التعاونية كما انها تضم بين اروقتها العديد من الأهداف والنشاطات التي تحقق رؤية المملكة 2030 تعبيرا عن حسها الوطني بالمساهمة في تقديم الخدمات الاجتماعية للفرد والمجتمع .</p>\r\n<div id=\"mouseposition-extension-element-full-container\" style=\"position: fixed; inset: 0px; pointer-events: none; z-index: 2147483647; font-weight: 400;\">\r\n<div id=\"mouseposition-extension-element-rect-display\" style=\"display: none; position: absolute; background: rgba(255, 255, 255, 0.7); outline: black solid 1px; font-size: 12px; z-index: 2147483647; justify-content: center; align-items: center; user-select: none; cursor: default; color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; width: 0px; height: 0px;\">\r\n<pre style=\"flex: 1 1 0%; text-align: center; background-color: rgba(255, 255, 255, 0.7); color: #000000; min-width: 42px; min-height: 12px; transition: all 1s ease 0s;\">&nbsp;</pre>\r\n</div>\r\n<pre id=\"mouseposition-extension-element-coordinate-display\" style=\"position: absolute; display: none; background: #ffffff; font-size: 12px; line-height: 14px; border-radius: 3px; border-width: 1px; border-color: #222222 black #333333; border-style: solid; padding: 3px; z-index: 2147483647; color: #222222; user-select: none; cursor: default; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">&nbsp;</pre>\r\n</div>', '<p><span style=\"background-color: #ffffff; color: #333333;\">تشمل منطقة عمل الجمعیة مكة المكرمة-مدینة مكة المكرمة. كما یكون مركزھا في مدینة مكة المكرمة</span></p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(5, 'تسجيل الجمعية في المنصة الوطنية للعمل التطوعي', '<p>تم تسجيل الجمعية في المنصة الوطنية للعمل التطوعي التابعة لوزارة الموارد البشرية والتنمية الاجتماعية وذلك دعمًا للعمل التطوعي ومشاركة المتطوعين في أعمال الجمعية.</p>', 'activity/MDYcEGzB9Z2xIRztsOSoIpAGgdaIHR6D1xqHZtxN.jpg', '2022-04-24 17:12:21', '2022-04-24 17:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `activity_main`
--

CREATE TABLE `activity_main` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `act1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `actmains`
--

CREATE TABLE `actmains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actmains`
--

INSERT INTO `actmains` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(7, 'مبادرة الجمعية', 'اطلقت الجمعية التعاونية للجودة والسلامة الغذائية مبادرة تشمل 3 مكونات وهي ( السلة الرمضانية - وجبة إفطار صائم - سقيا الماء ) وذلك مقابل 200 ريال', 'actmain/EDmZSKCH3rJFO7VbJZ1qAqdwRE4P1ymhlFJ4NYv2.png', '2022-04-16 21:01:39', '2022-04-16 21:01:39'),
(9, 'تسجيل الجمعية في المنصة الوطنية للعمل التطوعي', 'تم تسجيل الجمعية في المنصة الوطنية للعمل التطوعي التابعة لوزارة الموارد البشرية والتنمية الاجتماعية وذلك دعمًا للعمل التطوعي ومشاركة المتطوعين في أعمال الجمعية.', 'actmain/V0VTpnmxA7SWtxwMR9jxQCvoym6ucyInknj5bpwx.jpg', '2022-04-24 17:17:15', '2022-04-24 17:17:15'),
(10, 'اتفاقية تعاون مع إدارة التعليم بمكة المكرمة', 'تم إبرام اتفاقية تعاون مع إدارة التعليم بمكة المكرمة لإنجاح مبادرة (مقصف مدرستي) التي تهدف إلى تحسين مستوى الخدمات الغذائية وتحقيق الجودة والسلامة الغذائية في المقاصف المدرسية', 'actmain/caFM71ipFqPEMCuORbFQyTrklZqqd7XH1PhdBXuw.jpg', '2022-04-24 17:40:54', '2022-04-24 17:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Abdulrhman', 'abed@admin.com', '$2y$10$OREVaP7U5QdqbnTp5N2dqOfc3LBk.1hxWFyqqTawGpOZ58tdaFFBq', '2022-02-07 22:18:18', '2022-02-08 23:27:45'),
(3, 'Hasan Ahmad', 'hasan@admin.com', '$2a$12$rBJNZSUdU9EWkTu/AkYLk.WTmlf5D8VShW6YfjEPXq2bLU1Yemevq', NULL, NULL),
(4, 'mohamed', 'harbi@admin.com', '$2y$10$XVh1VnV9bRHAUimASzxFyOh.Ionf779tuNOc4RTqEErkfnbVQW1f.', '2022-02-09 17:03:44', '2022-02-09 17:03:44'),
(5, 'محمد الحربي', 'alharbi.mohammad.r@gmail.com', '$2y$10$ueYVT3i7KIqgIKmgn7lXmeMAy2P8evi/4u/pTa4adnzGGcvnsjqL.', '2022-03-25 20:41:16', '2022-03-31 20:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstaccount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondaccount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thiredaccount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_accounts`
--

INSERT INTO `bank_accounts` (`id`, `firstaccount`, `secondaccount`, `thiredaccount`, `created_at`, `updated_at`) VALUES
(1, 'بنك الرياض  SA3920000001871546009940 1871546009940', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `boss_speech`
--

CREATE TABLE `boss_speech` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `speach` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ضع نص هنا',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boss_speech`
--

INSERT INTO `boss_speech` (`id`, `speach`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align: center;\"><strong>بسم الله الرحمن الرحيم , الحمد لله رب العالمين , والصلاة والسلام على أشرف الأنبياء والمرسلين , نبينا محمد وعلى آله وصحبه أجمعين</strong></p>\r\n<p style=\"text-align: center;\"><strong>تعد الجمعيات التعاونية في العصر الحاضر أحد قنوات التعاون التي حث عليها ديننا الحنيف بقول الله تعالى (وتعاونوا على البر والتقوى ولا تعاونوا على الإثم والعدوان واتقوا الله إن الله شديد العقاب) سورة المائدة آية 2</strong></p>\r\n<p style=\"text-align: center;\"><strong>حيث تهدف الجمعيات التعاونية إلى التلاحم بين أفرادها والعمل بروح الفريق الواحد لتحقيق أهداف اقتصادية واجتماعية وثقافية تعود بالنفع على أعضائها المساهمين وعلى طبقات المجتمع بشكل عام , وفي هذا الصدد فقد انتشر الفكر التعاوني في شتى أنحاء العالم فهناك أكثر من مليار شخص في 96 بلداً حول العالم أصبحوا أعضاء في جمعية تعاونية واحدة على الأقل مما استدعى الأمر إلى وجود مبادئ أساسية للتعاون أقرها مؤتمر الحلف التعاوني الدولي الذي انعقد في مانشستر من عام 1995م وهي سبعة مبادئ تشكل الخطوط التوجيهية التي تتيح للتعاونيات وضع قيمها موضع التطبيق العملي.</strong></p>\r\n<p style=\"text-align: center;\"><strong>وقد اهتمت قيادتنا الرشيدة بالقطاع التعاوني أشد الاهتمام وأنشأت مجلسًا خاصًا يعنى بشئون الجمعيات التعاونية وهو مجلس الجمعيات التعاونية السعودية الذي تأسس عام 2008م , وجعلت من وزارة الموارد البشرية والتنمية الاجتماعية مظلة رسمية لجميع الجمعيات التعاونية التي خصصت لها العديد من الإعانات والمزايا والتسهيلات التي تتقدم فيها على جميع الدول الأخرى , لتنهض بالعمل التعاوني وتجعله أحد الركائز الأساسية في رؤية المملكة 2030, حيث يوجد في المملكة أكثر من 170 ألف مساهم في القطاع التعاوني يضخون أكثر من 1.5 مليار ريال سنويًا من الناتج المحلي.</strong></p>\r\n<p style=\"text-align: center;\"><strong>وفي ظل اهتمام المملكة وحكومتها الرشيدة بصحة أفراد المجتمع والعوامل التي تساهم في تعزيز هذه الصحة والتي من أهمها التغذية السليمة وما يتطلبه ذلك من تطبيق أعلى معايير الجودة والسلامة الغذائية عند تصنيع وإعداد المأكولات والمشروبات فقد تمت الموافقة على تأسيس الجمعية التعاونية للجودة والسلامة الغذائية وتسجيلها رسميًا في&nbsp; 29/01/1443هـ لتكن بذلك السباقة والأولى من نوعها على مستوى المملكة المتخصصة في مجال الجودة والسلامة الغذائية وهذا ما سيجعلها كيانًا متميزًا وفريدًا من نوعه بين مختلف الجمعيات في الساحة التعاونية لما تمتلكه من كفاءات وكوادر بشرية يتم عن طريقهم نشر الوعي الغذائي بين أوساط المجتمع وكياناته والارتقاء بالمستوى الغذائي إلى مستويات نحافظ فيه على صحة أفراد المجتمع وذلك بتطبيق معايير جودة وسلامة متميزة حيث أن هناك أكثر من 200 مرض على مستوى العالم مرتبطة بتلوث الغذاء.</strong></p>\r\n<p style=\"text-align: center;\"><strong>وفي الختام لا يسعني إلا التوجه بالدعاء إلى المولى عز وجل بأن يحفظ بلادنا وأن يديم عليها الأمن والأمان والاستمرار في الرقي لتلامس عنان السماء.</strong></p>\r\n<p style=\"text-align: center;\"><strong>رئيس مجلس الإدارة</strong></p>\r\n<p style=\"text-align: center;\"><strong>وائل طلعت أبو راشد</strong></p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `goal_mains`
--

CREATE TABLE `goal_mains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goal_mains`
--

INSERT INTO `goal_mains` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(15, 'عقد شراكات مع وزارة التعليم لتحسين الحالة الصحية لطلاب المدارس ورفع مستوى الرضا لدى المستهلكين من خلال تقديم منتجات امنة وجيدة صحيا .', '.', '2022-02-09 16:40:49', '2022-02-10 15:05:30'),
(16, 'تدريب وتهيئة أهالي المنطقة من المساهمين وغيرهم في السلامة الغذائية والصحية لرفع مستوى الثقافة المجتمعية .', '.', '2022-02-10 14:46:26', '2022-02-10 15:05:49'),
(17, 'انشاء مركز لتأهيل ومنح المنشآت الغذائية شهادات تطبيق معايير الجودة والسلامة العالمية .', '.', '2022-02-10 14:48:00', '2022-02-15 16:37:20'),
(18, 'تسويق أدوات ومعدات ومواد السلامة الغذائية بأسعار تنافسية .', '.', '2022-02-10 14:48:23', '2022-02-15 16:35:38'),
(19, 'تشغيل ما لا يقل عن 50% من المقاصف من قبل الأعضاء في المنطقة من خلال تقديم الوجبات الغذائية الآمنة صحيا والسليمة غذائيا .', '.', '2022-02-10 14:48:35', '2022-02-10 15:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `initiatives`
--

CREATE TABLE `initiatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mini_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `initiatives`
--

INSERT INTO `initiatives` (`id`, `title`, `mini_des`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'مبادرة الجمعية', '( السلة الرمضانية - وجبة إفطار صائم - سقيا الماء )', '<div class=\"heading\">\r\n<p><strong>اطلقت الجمعية التعاونية للجودة والسلامة الغذائية مبادرة تشمل 3 مكونات وهي ( السلة الرمضانية - وجبة إفطار صائم - سقيا الماء ) وذلك مقابل 200 ريال</strong></p>\r\n</div>\r\n<footer>\r\n<div class=\"container\">&nbsp;</div>\r\n</footer>', 'init/WeHl779r5ru7eW83Kq2H2dseajqp04P8jZjDlMGc.png', '2022-04-13 19:21:53', '2022-04-16 21:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r1` enum('normal','abnormal') COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2021_09_15_101159_create_activities_table', 1),
(6, '2021_09_19_100049_create_abouts_table', 1),
(7, '2021_09_21_084342_create_reports_table', 1),
(8, '2021_09_22_094436_create_staff_table', 1),
(9, '2021_09_27_083740_create_visitors_table', 1),
(10, '2022_01_16_000903_create_news_table', 1),
(11, '2022_01_16_000931_create_meetings_table', 1),
(12, '2022_01_16_001955_create_workschedules_table', 1),
(13, '2022_01_16_002131_create_orgpolicies_table', 1),
(14, '2022_01_16_002148_create_orgcharts_table', 1),
(15, '2022_01_17_150552_create_activity_main_table', 1),
(16, '2022_01_17_203603_create_yearly_reports_table', 1),
(17, '2022_01_18_142902_create_admins_table', 1),
(18, '2022_01_18_161746_create_contact_us_table', 1),
(19, '2022_01_18_163552_create_actmains_table', 1),
(20, '2022_01_18_170206_create_goals_table', 1),
(21, '2022_01_18_170225_create_goal_mains_table', 1),
(22, '2022_01_18_175229_create_sliders_table', 1),
(23, '2022_02_01_181946_create_boss_speech_table', 1),
(24, '2022_02_01_191823_create_bank_accounts_table', 1),
(25, '2022_02_03_015657_create_socila_media_table', 1),
(26, '2022_02_03_023643_create_vision_message_worth_table', 1),
(27, '2022_02_08_164628_create_popup_table', 2),
(28, '2022_02_08_194239_create_aboutus_table', 3),
(29, '2022_02_09_003114_create_partners_table', 4),
(30, '2022_04_13_173044_create_supporters_table', 5),
(31, '2022_04_13_181054_create_initiatives_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mini_des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orgcharts`
--

CREATE TABLE `orgcharts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orgcharts`
--

INSERT INTO `orgcharts` (`id`, `image`, `created_at`, `updated_at`) VALUES
(4, 'orgchart/3PjoyVhVPIOPgtFQfHmmc3ddbCTKuWgiYZf8dcYH.jpg', '2022-02-10 22:17:24', '2022-02-10 22:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `orgpolicies`
--

CREATE TABLE `orgpolicies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orgpolicies`
--

INSERT INTO `orgpolicies` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(8, 'اللائحة الأساسية للجمعية', 'orgpolicy/اللائحة الأساسية للجمعية.pdf', '2022-04-12 17:20:36', '2022-04-12 17:20:36'),
(9, 'الحوكمة في الجمعيات التعاونية', 'orgpolicy/الحوكمة في الجمعيات التعاونية.pdf', '2022-04-12 17:20:51', '2022-04-12 17:20:51'),
(10, 'اللائحة التنفيذية للجمعيات التعاونية', 'orgpolicy/اللائحة التنفيذية للجمعيات التعاونية.pdf', '2022-04-12 17:21:04', '2022-04-12 17:21:04'),
(11, 'حوكمة العمليات المالية في الجمعيات التعاونية', 'orgpolicy/حوكمة العمليات المالية في الجمعيات التعاونية.pdf', '2022-04-12 17:21:18', '2022-04-12 17:21:18'),
(12, 'نظام الجمعيات التعاونية', 'orgpolicy/نظام الجمعيات التعاونية.pdf', '2022-04-12 17:21:35', '2022-04-12 17:21:35'),
(13, 'نموذج حوكمة عمل ودليل الإرشادات للجمعيات التعاونية - قطاع الاستهلاكي', 'orgpolicy/نموذج حوكمة عمل ودليل الإرشادات للجمعيات التعاونية - قطاع الاستهلاكي.pdf', '2022-04-12 17:21:50', '2022-04-12 17:21:50'),
(14, 'نموذج حوكمة عمل ودليل الإرشادات للجمعيات التعاونية- القطاع العام', 'orgpolicy/نموذج حوكمة عمل ودليل الإرشادات للجمعيات التعاونية القطاع العام.pdf', '2022-04-12 17:22:43', '2022-04-12 17:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `popup`
--

CREATE TABLE `popup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popup`
--

INSERT INTO `popup` (`id`, `title`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'اعلان', 'مطلوب موظف تقني للجمعية', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(20, '<p>عنوان الوهخمي</p>', '<p>عنوان الوهخمي رعنوان الوهخميعنوان الوهخميعنوان الوهخميعنوان الوهخميعنوان الوهخميعنوان الوهخميعنوان الوهخميعنوان الوهخميعنوان الوهخميعنوان الوهخميعنوان الوهخميعنوان الوهخميعنوان الوهخمي</p>', 'slider/E3qBa0fbVEQG4Xyka8fIjIcsXa9c2s45bL1gkj2O.jpg', '2022-04-25 11:52:53', '2022-04-25 11:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `socila_media`
--

CREATE TABLE `socila_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socila_media`
--

INSERT INTO `socila_media` (`id`, `facebook`, `instagram`, `twitter`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com', 'https://www.instagram.com', 'https://twitter.com/qfs_sa', 'https://www.youtube.com/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r1` enum('director','creator') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `image`, `description`, `r1`, `created_at`, `updated_at`) VALUES
(28, 'الاستاذ وائل طلعت أبو راشد', 'staffs/c1vO2MqeWEdrcyRiD4iS6DQcp6nzb6CwzuiMfQl0.png', '<h6 style=\"text-align: center;\"><strong>(رئيس مجلس الإدارة)</strong></h6>\r\n<p style=\"text-align: justify;\">حاصل على شهادة البكالوريوس في علوم الأغذية والتغذية من جامعة الملك سعود بالرياض , عمل بعدها مسئولًا عن الحفلات المقامة بفندق الشهداء بمكة المكرمة عام 1424هـ والتحق بعدها بجامعة أم القرى ليعمل فيها مشرفًا على الصالة الطلابية حتى عام 1429هـ إلى أن تم نقل خدماته إلى مديرية الشئون الصحية بمكة المكرمة حتى الآن ليبدأ حينها مسيرة عمل متنوعة تقلد فيها العديد من المناصب ابتدأت بمستشفى أجياد للطوارئ ثم رئيسًا لقسم التغذية بمستشفى حراء العام ثم رئيسًا لقسم الخدمات الغذائية بإدارة التغذية ثم نائبًا لرئيس قسم التغذية بمستشفى شرق عرفات ثم انتقل بعد ذلك إلى إدارة التغذية بالتجمع الصحي بمكة المكرمة تخللت تلك الفترة العديد من المشاركات الإعلامية في صحيفة عكاظ &ndash; القناة السعودية الرياضية &ndash; إذاعة MBC FM &ndash; إذاعة الرياض &ndash; إذاعة نداء الإسلام.</p>\r\n<p style=\"text-align: justify;\">برع في مجال التدريب حيث أدار قسم التدريب بمؤسسة الأنامل المضيئة للخدمات العلمية والمهنية من عام 1437هـ وأصبح مدربًا معتمدًا من العديد من الجهات الداخلية والخارجية وهي (إدارة التدريب والابتعاث بصحة مكة المكرمة - المؤسسة العامة للتدريب التقني والمهني - المركز العالمي الكندي - مركز APTT البريطاني) , كما برز في تدريب برنامج سلامة الغذاء الهاسب (HACCP) وأصبح مفتشًا دوليًا في سلامة الغذاء وأكد ذلك بحصوله على شهادة الماجستير المهني في هذا البرنامج , كما حصل خلال مسيرته المهنية على أكثر من 70 دورة مختلفة في (المجال الإداري والتطوير السلوكي &ndash; التدريب &ndash; الخدمات الغذائية &ndash; التغذية العلاجية &ndash; التثقيف التغذوي &ndash; أنظمة الجودة والسلامة الغذائية &ndash; المؤتمرات الدولية) ومحاضر لأكثر من 10 دورات تدريبية مختلفة ومنظم لأكثر من 20 دورة تدريبية أخرى مما رشحه للحصول على شهادات شكر وتقدير من جهات مختلفة داخل وخارج المملكة (جامعة الباحة &ndash; جامعة أم القرى &ndash; وزارة الصحة &ndash; شركة ماكسيموس &ndash; الهلال الأحمر &ndash; معهد بحوث تكنولوجيا الأغذية).</p>\r\n<p style=\"text-align: justify;\">وعلى الصعيد التعاوني فقد شارك في تأسيس أول جمعية تعاونية استهلاكية بمنطقة مكة المكرمة عام 1437هـ ليكن أحد أعضاء مجلس إدارتها , وفي عام 1443هـ قام بتأسيس الجمعية التعاونية الأولى في المملكة المتخصصة في الجودة والسلامة الغذائية وتولى حينها منصب رئيس مجلس إدارتها.</p>\r\n<p style=\"text-align: justify;\">من أبرز مهاراته حصوله على الرخصة الدولية لقيادة الحاسب الآلي , كما برز أيضًا في تقديمه للعديد من الفعاليات والمناسبات العلمية داخل صحة مكة المكرمة وخارجها.</p>', 'director', '2022-04-16 20:51:20', '2022-04-16 20:52:47'),
(29, 'الاستاذة نجلاء يعقوب قستي', 'staffs/ZduDTxyaAxqy961XfSCYqsOsLq1Sla0D58NqT2ys.png', '<h6 style=\"text-align: center;\"><strong>(نائب رئيس مجلس الإدارة)</strong></h6>\r\n<p style=\"text-align: justify;\">حاصلة على درجة البكالوريوس في التغذية وعلوم الأطعمة من جامعة أم القرى بمكة المكرمة عام 1422هـ , عملت بعدها كأخصائية تغذية بمستشفى الولادة والأطفال حتى عام 1425هـ وحصلت حينها على درجة الماجستير في التغذية من جامعة الملك عبد العزيز بجدة عام&nbsp; 1425هـ مما ساهم في تكليفها كمساعدة لرئيس قسم التغذية واستمرت حتى عام 1428هـ , كما تم انتقالها بعد ذلك لتشغل منصب رئيسة قسم التغذية بمستشفى حراء العام من عام 1428هـ وحتى عام 1433هـ , شاركت في تأسيس قسم التوعية والتثقيف التغذوي بإدارة التغذية بالشئون الصحية بمكة المكرمة ويتم تعيينها مساعدة لرئيسة القسم من عام 1433هـ حتى عام 1439هـ لتتولى بعدها زمام العمل كرئيسة للقسم من عام 1439هـ.</p>\r\n<p style=\"text-align: justify;\">في خلال سنواتها الوظيفية ساهمت في حصول مستشفى حراء العام على شهادة JCI العالمية كما تم تكليفها بالعمل كمنسقة لمرضى السيلياك بمنطقة مكة المكرمة , ومنسقة للجودة وسلامة المرضى , ومنسقة للرضاعة الطبيعية.</p>\r\n<p style=\"text-align: justify;\">وبحكم عملها بقسم التوعية والتثقيف التغذوي بإدارة التغذية فقد برزت في مجال التدريب من خلال اعتمادها كمدربة معتمدة من المؤسسة العامة للتدريب التقني والمهني , ومنسقة للتدريب والتعليم , ومحاضرة للعديد من الدورات والمؤتمرات ومنظمة للكثير من الفعاليات والمناسبات العلمية والأنشطة التطوعية , وحضرت العديد من الدورات التدريبية في مجالات مختلفة (جودة وسلامة غذاء &ndash; أيزو 22000 &ndash; الهاسب &ndash; تغذية المرضى بكافة مجالاتها &ndash; التدريب للمدربين &ndash; إعداد الحقائب التدريبية &ndash; الاحتياجات التدريبية &ndash; التسويق والإعلام &ndash; التصاميم &ndash; برامج التوعية والتثقيف التغذوي).</p>\r\n<p style=\"text-align: justify;\">وفي مجال المهارات الشخصية فهي تمتلك العديد من المهارات المتعددة مثل (الحاسب الآلي &ndash; اللغة الانجليزية &ndash; التدريب &ndash; وضع الخطط &ndash; كتابة التقارير &ndash; عمل الإحصائيات &ndash; تصميم استمارات انفوجرافيك وفيديو).</p>', 'director', '2022-04-16 20:53:38', '2022-04-16 20:53:58'),
(30, 'الاستاذة فاطمة إسماعيل سيد أحمد', 'staffs/pT3UGORv7rvA2xWXTr45QTzoKfPw7HhgY238lasF.png', '<h6 style=\"text-align: center;\"><strong>(أمين مال مجلس الإدارة)</strong></h6>\r\n<p style=\"text-align: justify;\">حاصلة على درجة البكالوريوس في التغذية وعلوم الأطعمة من جامعة أم القرى بمكة المكرمة , بدأت مشوارها الوظيفي كأخصائية تغذية بمستشفى الأهلي السعودي منذ عام 1427هـ وحتى عام 1429هـ انتقلت بعدها لتعمل رئيسة لقسم التغذية ببيت الطفل لرعاية الأيتام بجمعية أم القرى الخيرية حتى عام 1431هـ والتي دخلت بعدها المجال الصحي لتعمل فنية تغذية بمستشفى الملك فيصل بمكة المكرمة , وفي فترة قصيرة قامت بتطوير مهاراتها الوظيفية لتصبح أول أخصائية جودة وسلامة غذاء بمكة المكرمة واستمرت في ذلك حتى عام 1437هـ وأول مدربة سعودية بمكة المكرمة تدرب على برنامج سلامة الغذاء (HACCP) بلغة الأردو , كما حصلت على شهادة الماجستير المهني في نفس البرنامج , وتم تكليفها بالعمل كمديرة مشروع التغذية بشركة الخليج للتموين بمستشفى الملك فيصل بمكة المكرمة منذ عام 1437هـ وحتى الآن , خلال هذه الفترة حصلت على 7 شهادات شكر وتقدير من جهات متعددة داخل المملكة , وشاركت في العديد الفعاليات والمناسبات العلمية والتطوعية ومنظمة للعديد منها والتي تجاوزت 12 فعالية , كما حضرت العديد من الدورات التدريبية في مجالات مختلفة (جودة وسلامة غذاء &ndash; أيزو 22000 &ndash; الهاسب &ndash; تغذية المرضى بكافة مجالاتها &ndash; التنمية البشرية والتطوير السلوكي &ndash; إدارة الأزمات والكوارث &ndash; تحسين الجودة &ndash; المجال الإداري وعلاقات العملاء&nbsp; - إدارة المشاريع - برامج التوعية والتثقيف التغذوي)</p>', 'director', '2022-04-16 20:55:17', '2022-04-16 20:55:17'),
(31, 'الاستاذة نجلاء سليمان العمران', 'staffs/DPxnCDEQW4ZSujgD1FUxiPuPoqhiXs0zk7uB9NAH.png', '<h6 style=\"text-align: center;\"><strong>(أمين عام مجلس الإدارة)</strong></h6>\r\n<p>حاصلة على درجة الماجستير في التغذية الاكلينيكية من جامعة كلية لندن في بريطانيا (University College London) , وحاصلة على درجة البكالوريوس في التغذية وعلوم الأطعمة من جامعة الملك عبد العزيز، بدأت مشوارها الوظيفي كأخصائية تغذية بمستشفى الملك فيصل بمكة المكرمة منذ عام ١٤٢٥هـ ، وفي عام ١٤٣٢هـ تم تكليفها كمساعدة لرئيس قسم التغذية بالمستشفى ثم كرئيسة للقسم في نفس العام.</p>\r\n<p style=\"text-align: justify;\">تقلدت خلال مشوارها الوظيفي العديد من المناصب والمسؤوليات والتي من أبرزها منسقة برنامج جودة وسلامة الغذاء لقسم التغذية بمستشفى الملك فيصل بمكة المكرمة من عام ١٤٢٧هـ والذي ساهم بشكل مباشر في حصول القسم على اعتماد (HACCP) , كما كلفت كمنسقة للجودة مما ساهم أيضًا في اعتماد المستشفى من المجلس السعودي لاعتماد المنشآت الصحية (CBAHI) , ومن أبرز أعمالها المشاركة في إعداد الدليل السعودي للتغذية الأنبوبية لمستشفيات وزارة الصحة.</p>\r\n<p style=\"text-align: justify;\">عملت خلال دراستها في بريطانيا كأخصائية تغذية اكلينيكية بمستشفى جامعة كلية لندن للعديد من أقسام المستشفى ، كذلك عملت كمتطوعة في بنك الغذاء ودور رعاية المسنين في بريطانيا , وشاركت خلالها في العديد من البحوث والمنشورات العلمية وورش العمل.</p>\r\n<p style=\"text-align: justify;\">بعد حصولها على درجة الماجستير تم تكليفها كمساعد لرئيس قسم التغذية الاكلينيكية بإدارة التغذية بصحة مكة المكرمة في عام ١٤٣٩هـ لتتولى بعدها رئاسة قسم التغذية الاكلينيكية في عام ١٤٤١هـ حصلت خلال على عضوية العديد من اللجان الخاصة بعمل سياسات وإجراءات العمل بالتغذية العلاجية بوزارة الصحة منذ عام ١٤٣٩هـ ، وعضو لجنة الخبراء الاستشاريين بقسم التغذية الاكلينيكية بجامعة أم القرى منذ عام ١٤٤١هـ ، وعضو نادي مجلة التغذية الوريدية منذ عام ١٤٤٠هـ , وغيرها من العضويات الخاصة بالمنضمات العالمية بمجال التغذية الاكلينيكية.</p>\r\n<p style=\"text-align: justify;\">في المجال التدريبي فهي حاصلة على شهادة الماجستير المهني في مجال جودة وسلامة الغذاء , ومدربة تغذية معتمدة من الأكاديمية الوطنية للطب الرياضي ((NASM , وحضرت العديد من الدورات و ورش العمل في مجالات مختلفة (الأبحاث الاكلينيكية ، التغذية الاكلينيكية بمختلف تخصصاتها ، صعوبات الأكل والأمراض النفسية المصاحبة لها ، سلامة المرضى ، خدمات التغذية ، أنظمة الجودة و السلامة الغذائية ، تطوير الذات ، القيادة في المؤسسات الصحية ، الجودة في المؤسسات الصحية).</p>\r\n<p style=\"text-align: justify;\">في مجال المهارات الشخصية فهي تملك العديد من المهارات مثل (إجادة اللغة الإنجليزية - الحاسب الالي &ndash; القيادة والابتكار- التخطيط الاستراتيجي وإعداد السياسات وإجراءات العمل &ndash; إدارة المشاريع وفرق العمل).</p>', 'director', '2022-04-16 20:56:04', '2022-04-16 20:56:04'),
(32, 'الاستاذة شروق زكي حكيم', 'staffs/WviWCJROok76Ra5BLPyiYG2FzyOULKfNGd8E12TQ.png', '<h6 style=\"text-align: center;\"><strong>(عضو مجلس الإدارة)</strong></h6>\r\n<p style=\"text-align: justify;\">حاصلة على درجة البكالوريوس في التغذية وعلوم الأطعمة من جامعة الملك عبد العزيز بجدة , وتدرس درجة الماجستير في قسم إدارة الأعمال بكلية الفيصل جامعة الأمير سلطان الإدارية , بدأت مشوارها الوظيفي كنائبة مدير مشروع التغذية بمدينة الملك عبد الله الطبية بمكة المكرمة وتعددت المجالات الوظيفية والخبرات العملية التي عملت بها فعملت سكرتيرة ومنسقة بشركة إعلامية بجدة ثم مشرفة إنتاج بشركة المراعي ثم خدمة عملاء بشركة (أفون) بجدة ثم مديرة مبيعات بنفس الشركة إلى أن أصبحت مثقفة طبية بشركة نستلة , تميزت خلال مسيرتها الوظيفية بتكوين العلاقات العملية مع الفرق الطبية في المراكز والمستشفيات وحصلت خلالها على شهادات شراكات مجتمعية من وزارة الصحة , كما حصلت على دورات متعددة في مجال جودة وسلامة الغذاء (أيزو 22000 والهاسب HACCP) , كذلك الحصول على شهادات للغة الانجليزية من المجلس الثقافي البريطاني بجدة واستخدام جميع برامج الحاسب الآلي Microsoft Office.</p>', 'director', '2022-04-16 20:57:04', '2022-04-16 20:57:04'),
(33, 'الاستاذة ريم عبده القادري', 'staffs/uNr801GgyRVea9Ce8KesS2HXLvE40LZbwtRkm7LB.png', '<h6 style=\"text-align: center;\"><strong>(عضو مجلس الإدارة)</strong></h6>\r\n<p style=\"text-align: justify;\">حاصلة على درجة البكالوريوس في التغذية وعلوم الأطعمة من كلية التربية سابقا (جامعة الملك عبد العزيز بجدة)، بدأت مشوارها الوظيفي كأخصائية تغذية بمستشفى الولادة والأطفال بجدة عام 2004م , ثم عملت كمديرة مشروع للتغذية بمستشفى الولادة والأطفال بجدة حتى عام 2010م , انتقلت بعدها إلى مدينة الملك عبدالله الطبية بمكة المكرمة للعمل كمشرفة تغذية حتى عام 2017م.</p>\r\n<p style=\"text-align: justify;\">تنوعت مجالات العمل الوظيفية لها فقد عملت بمجال التغذية وعملت كمثقف صحي ومجتمعي وعملت في إدارة التطوع الصحي بالتجمع الصحي بمكة المكرمة حتى تاريخه وحصلت خلالها على العديد من شهادات الشكر والتقدير من عدة جهات.</p>\r\n<p style=\"text-align: justify;\">حصلت على برامج تدريبية في مجال جودة وسلامة الغذاء والتي كانت آخرها برنامج الماجستير المهني في جودة وسلامة الغذاء.</p>', 'director', '2022-04-16 20:57:57', '2022-04-16 20:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `supporters`
--

CREATE TABLE `supporters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `role` enum('super_admin','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$FpZ38hfHDjkj6wL01Ikik.WUvvhFfYda.f/kYPdnZ4WAfnUDJb7ue', 'super_admin', NULL, '2022-02-03 02:48:57', '2022-02-03 02:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `vision_message_worth`
--

CREATE TABLE `vision_message_worth` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vision` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `worth` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vision_message_worth`
--

INSERT INTO `vision_message_worth` (`id`, `vision`, `message`, `worth`, `created_at`, `updated_at`) VALUES
(1, '<p>أن تكون جمعية تعاونية رائدة&nbsp;ومرجعية في استشارات الجودة والسلامة الغذائية</p>\r\n<p>&nbsp;</p>\r\n<div id=\"mouseposition-extension-element-rect-display\" style=\"display: none; position: absolute; background: rgba(255, 255, 255, 0.7); outline: black solid 1px; font-size: 12px; z-index: 2147483647; justify-content: center; align-items: center; user-select: none; cursor: default; color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; width: 0px; height: 0px;\">\r\n<pre style=\"flex: 1 1 0%; text-align: center; background-color: rgba(255, 255, 255, 0.7); color: #000000; min-width: 42px; min-height: 12px; transition: all 1s ease 0s;\">&nbsp;</pre>\r\n</div>\r\n<pre id=\"mouseposition-extension-element-coordinate-display\" style=\"position: absolute; display: none; background: #ffffff; font-size: 12px; line-height: 14px; border-radius: 3px; border-width: 1px; border-color: #222222 black #333333; border-style: solid; padding: 3px; z-index: 2147483647; color: #222222; user-select: none; cursor: default; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">&nbsp;</pre>', '<p>تأهيل جميع فئات المجتمع للانطلاق&nbsp;نحو تطبيق مفاهيم صحية في التعاملمع الأغذية التي تعزز من صحتهم بطريقة&nbsp;سليمة وآمنة</p>\r\n<p>&nbsp;</p>\r\n<div id=\"mouseposition-extension-element-rect-display\" style=\"display: none; position: absolute; background: rgba(255, 255, 255, 0.7); outline: black solid 1px; font-size: 12px; z-index: 2147483647; justify-content: center; align-items: center; user-select: none; cursor: default; color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; width: 0px; height: 0px;\">\r\n<pre style=\"flex: 1 1 0%; text-align: center; background-color: rgba(255, 255, 255, 0.7); color: #000000; min-width: 42px; min-height: 12px; transition: all 1s ease 0s;\">&nbsp;</pre>\r\n</div>\r\n<pre id=\"mouseposition-extension-element-coordinate-display\" style=\"position: absolute; display: none; background: #ffffff; font-size: 12px; line-height: 14px; border-radius: 3px; border-width: 1px; border-color: #222222 black #333333; border-style: solid; padding: 3px; z-index: 2147483647; color: #222222; user-select: none; cursor: default; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">&nbsp;</pre>', '<ol>\r\n<li>التعاون الذي يدعم العمل الجماعي ويحقق الطموح</li>\r\n<li>الابتكار المتجدد في الأداء الذي يوصل إلى&nbsp;التميز</li>\r\n<li>الإلتزام&nbsp;النابع من الإخلاص في العمل والمرونة في التنفيذ</li>\r\n<li>الشفافية والمصداقية التي تكسب ثقة العميل</li>\r\n<li id=\"mouseposition-extension-element-rect-display\" style=\"display: none; position: absolute; background: rgba(255, 255, 255, 0.7); outline: black solid 1px; font-size: 12px; z-index: 2147483647; justify-content: center; align-items: center; user-select: none; cursor: default; color: #000000; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; width: 0px; height: 0px;\">\r\n<pre style=\"flex: 1 1 0%; text-align: center; background-color: rgba(255, 255, 255, 0.7); color: #000000; min-width: 42px; min-height: 12px; transition: all 1s ease 0s;\">&nbsp;</pre>\r\n</li>\r\n<li id=\"mouseposition-extension-element-coordinate-display\" style=\"position: absolute; display: none; background: #ffffff; font-size: 12px; line-height: 14px; border-radius: 3px; border-width: 1px; border-color: #222222 black #333333; border-style: solid; padding: 3px; z-index: 2147483647; color: #222222; user-select: none; cursor: default; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif;\">&nbsp;</li>\r\n</ol>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workschedules`
--

CREATE TABLE `workschedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yearly_reports`
--

CREATE TABLE `yearly_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_main`
--
ALTER TABLE `activity_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `actmains`
--
ALTER TABLE `actmains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boss_speech`
--
ALTER TABLE `boss_speech`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goal_mains`
--
ALTER TABLE `goal_mains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `initiatives`
--
ALTER TABLE `initiatives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orgcharts`
--
ALTER TABLE `orgcharts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orgpolicies`
--
ALTER TABLE `orgpolicies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socila_media`
--
ALTER TABLE `socila_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supporters`
--
ALTER TABLE `supporters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vision_message_worth`
--
ALTER TABLE `vision_message_worth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workschedules`
--
ALTER TABLE `workschedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearly_reports`
--
ALTER TABLE `yearly_reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `activity_main`
--
ALTER TABLE `activity_main`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `actmains`
--
ALTER TABLE `actmains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `boss_speech`
--
ALTER TABLE `boss_speech`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_mains`
--
ALTER TABLE `goal_mains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `initiatives`
--
ALTER TABLE `initiatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orgcharts`
--
ALTER TABLE `orgcharts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orgpolicies`
--
ALTER TABLE `orgpolicies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popup`
--
ALTER TABLE `popup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `socila_media`
--
ALTER TABLE `socila_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `supporters`
--
ALTER TABLE `supporters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vision_message_worth`
--
ALTER TABLE `vision_message_worth`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workschedules`
--
ALTER TABLE `workschedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `yearly_reports`
--
ALTER TABLE `yearly_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
