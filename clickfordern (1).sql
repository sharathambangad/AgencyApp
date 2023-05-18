-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 09:56 AM
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
-- Database: `clickfordern`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fb_url` varchar(255) NOT NULL,
  `ig_url` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `name`, `designation`, `image`, `email`, `fb_url`, `ig_url`, `linkedin`, `twitter`) VALUES
(47, 'MOHAMMED SHAMEEM P V', 'SOFTWARE ENGINEER', '1684391630.jpg', 'pvshameem77@gmail.com', 'https://www.facebook.com/profile.php?id=100010591689227', 'https://www.instagram.com/shameem.p.v', 'https://www.linkedin.com/in/mohammedshameempv/', 'https://twitter.com/PvShameem77');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(10) NOT NULL,
  `about_desc` text NOT NULL,
  `mobile1` varchar(255) NOT NULL,
  `mobile2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `pintrest` varchar(255) NOT NULL,
  `discord` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `about_desc`, `mobile1`, `mobile2`, `email`, `address`, `twitter`, `facebook`, `linkedin`, `pintrest`, `discord`, `google`) VALUES
(1, '      We generate more than just creative work and successful commercial outcomes. We produce thoughts, dialogue, and deeds that improve lives and bind communities. We also promise to collaborate with partners that share our commitment to bringing about positive change.', '9447430743', '9645818220', 'clickfordern@gmail.com', 'Chanjal, chattipparamba, 676504', 'https://twitter.com/shuhaibmp75?t=wnc6TORmYvRQm30ognmBPA&s=09', 'https://www.facebook.com/profile.php?id=100075950964799', 'https://www.linkedin.com/in/clickfordern-r-18b44b228/', 'https://in.pinterest.com/clickfordern/', 'https://discord.gg/hnvrMFHE', 'clickfordern@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('Admin@clifod.com', 'e3afed0047b08059d0fada10f400c1e5');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `blog_db_image` varchar(255) NOT NULL,
  `blog_db_date` date NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_db_image`, `blog_db_date`, `blog_title`, `description`) VALUES
(1, '1684239532.jpg', '2023-05-17', 'Brand Strategy', 'Work closely with clients to understand their brand values, target audience, and business objectives. Develop a comprehensive brand strategy that aligns with their goals and differentiates them from competitors'),
(3, '1684301062.jpg', '2023-05-17', 'Creative Concept Development', 'Generate innovative and unique ideas for advertising campaigns. Brainstorm concepts, themes, and messaging that effectively communicate the client\'s brand and resonate with the target audience'),
(4, '1684301102.jpg', '2023-05-17', 'Visual Design', 'Collaborate with graphic designers, illustrators, and other visual artists to develop visually appealing and impactful content. Create eye-catching visuals, including logos, layouts, images, and videos that capture attention and communicate the brand\'s essence'),
(5, '1684301152.jpg', '2023-05-17', 'Video Production', 'Produce high-quality video content, including commercials, promotional videos, and brand stories. Coordinate the entire production process, from scriptwriting and storyboarding to shooting, editing, and post-production'),
(6, '1684302037.jpg', '2023-05-17', 'Digital Marketing', 'Develop digital marketing strategies and content for online platforms, such as websites, social media, email marketing, and search engine advertising. Optimize content for search engines and create engaging social media posts to generate brand awareness and drive traffic'),
(7, '1684302069.jpg', '2023-05-17', 'Market Research and Analysis', 'Conduct market research to gain insights into consumer behavior, market trends, and competitors. Analyze campaign performance and adjust strategies based on data and feedback to optimize results'),
(8, '1684302346.jpg', '2023-05-17', 'Campaign Analytics and Reporting', 'Track the performance of advertising campaigns and provide clients with detailed analytics and reports. Analyze data to gain insights and make data-driven decisions for future campaigns'),
(9, '1684302723.jpg', '2023-05-17', 'Digital Advertising', 'Design and create digital advertising assets such as web banners, social media graphics, email newsletters, and online advertisements. Optimize the content for different platforms and screen sizes to maximize reach and engagement'),
(10, '1684302748.jpg', '2023-05-17', 'Print Production', 'Coordinate the printing process for various marketing materials, ensuring high-quality output and timely delivery. Work with printers to select appropriate paper stock, finishes, and printing techniques to enhance the visual appeal of the materials'),
(11, '1684302773.jpg', '2023-05-18', 'Logo and Branding', 'Develop unique and memorable logos that represent your clients\' brand identity. Ensure consistency in branding across all advertising materials to create a cohesive and recognizable brand image'),
(12, '1684302804.jpg', '2023-05-17', 'Graphic Design', 'Create visually stunning designs for various advertising materials, including brochures, flyers, posters, banners, business cards, packaging, and more. Your designs should align with the client\'s brand identity and effectively capture attention');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `post`, `post_image`, `post_date`) VALUES
(9, 'WEB DEVELOPER ', '1684391715.jpg', '2023-05-18'),
(10, 'GRAPHIC DESIGNER', '1684391752.jpg', '2023-05-18'),
(11, 'DIGITAL MARKETING SPECIALISTS', '1684391852.jpg', '2023-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `view_status` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `client_name`, `client_image`) VALUES
(21, 'BMW', '1684299737.jpg'),
(22, 'benz', '1684300723.jpg'),
(23, 'tata', '1684300734.jpg'),
(24, 'AUDI', '1684300748.jpg'),
(25, 'JAGUAR', '1684300767.jpg'),
(26, 'SUZUKI', '1684300874.jpg'),
(27, 'YAMAHA', '1684300888.jpg'),
(28, 'MAHINDRA', '1684300901.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recent_works`
--

CREATE TABLE `recent_works` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recent_works`
--

INSERT INTO `recent_works` (`id`, `image`) VALUES
(1, '1684304500.jpg'),
(2, '6.jpg'),
(3, '7.jpg'),
(4, '1684396411.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_image` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `seo_keywords` varchar(255) NOT NULL,
  `icon_svg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_name`, `service_image`, `short_desc`, `description`, `seo_keywords`, `icon_svg`) VALUES
(7, 'Graphic Design', '1684389943.jpg', 'Create visually stunning designs for various advertising materials', '                                                                                                                                                                                                                        Create visually stunning designs for various advertising materials, including brochures, flyers, posters, banners, business cards, packaging, and more. Your designs should align with the client\'s brand identity and effectively capture attention                                                                                                                                                                                                                        ', 'graphics,graphic design,design,designing', '                                                                                                            <svg fill = \"white\" width=\"40px\" height=\"40px\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\">\r\n    <path d=\"m 7.886719 0.00390625 c -2.109375 0.03124995 -4.945313 0.80078175 -4.898438 3.27734375 c 0.050781 2.589844 2.921875 1.664062 3.15625 2.71875 c 0.035157 -0.042969 0.085938 -0.082031 0.121094 -0.125 c 0.199219 -0.210938 0.394531 -0.386719 0.59375 -0.59375 c 0.3125 -0.351562 0.636719 -0.675781 0.964844 -1.03125 c 1.109375 -1.175781 1.15625 -1.25 3.800781 -3.25 c -1.035156 -0.617188 -2.261719 -0.9609375 -3.300781 -0.99609375 c -0.132813 -0.00390625 -0.292969 -0.00390625 -0.4375 0 z m 6.144531 0 c -1.796875 1.29687475 -4.203125 3.30078175 -6.113281 5.33203175 c -0.171875 0.183593 -0.339844 0.363281 -0.503907 0.546874 c -0.101562 0.109376 -0.210937 0.195313 -0.3125 0.308594 c -0.066406 0.078125 -0.128906 0.160156 -0.191406 0.238282 c -1.300781 1.4375 -2.582031 3.128906 -3.648437 4.683593 c -0.308594 -0.15625 -0.699219 -0.171875 -1.117188 0.101563 c -0.753906 0.496094 -0.597656 2.285156 -2.14843725 2.285156 c 0.14843725 0.601562 1.73437525 0.59375 2.80859425 0.324219 c 1.011718 -0.253907 1.324218 -1.140625 1.132812 -1.886719 c -0.03125 -0.105469 -0.078125 -0.210938 -0.144531 -0.320312 c 1.984375 -1.640626 3.386719 -3.003907 4.34375 -4.023438 c 0.242187 -0.246094 0.53125 -0.566406 0.851562 -0.925781 c 1.207031 -1.332031 2.925781 -3.433594 5.042969 -6.66406275 z m -8.042969 1.52734375 c 0.824219 0 1.492188 0.671875 1.492188 1.5 c 0 0.832031 -0.667969 1.5 -1.492188 1.5 c -0.828125 0 -1.5 -0.667969 -1.5 -1.5 c 0 -0.828125 0.671875 -1.5 1.5 -1.5 z m 7.265625 0.664062 c -1.417968 2.234376 -2.367187 3.554688 -3.367187 4.585938 c -0.640625 0.660156 -1.164063 1.3125 -1.625 1.78125 c -0.835938 0.890625 -1.9375 1.941406 -3.148438 3.09375 c 0.0625 1.46875 0.808594 2.746094 3.242188 3.21875 c 3.898437 0.757812 8.027343 -1.824219 7.613281 -7.0625 c -0.179688 -2.246094 -1.40625 -4.28125 -2.714844 -5.617188 z m 0.34375 3.804688 c 0.546875 0 0.996094 0.449219 0.996094 1 c 0 0.554688 -0.449219 1 -0.996094 1 s -0.996094 -0.445312 -0.996094 -1 c 0 -0.550781 0.449219 -1 0.996094 -1 z m -0.625 3 c 0.546875 0 0.996094 0.449219 0.996094 1 c 0 0.554688 -0.449219 1 -0.996094 1 s -0.996094 -0.445312 -0.996094 -1 c 0 -0.550781 0.449219 -1 0.996094 -1 z m -4.992187 2 c 0.550781 0 1 0.449219 1 1 s -0.449219 1 -1 1 c -0.546875 0 -0.996094 -0.449219 -0.996094 -1 s 0.449219 -1 0.996094 -1 z m 2.996093 0 c 0.546876 0 1 0.449219 1 1 s -0.453124 1 -1 1 c -0.546874 0 -0.996093 -0.449219 -0.996093 -1 s 0.449219 -1 0.996093 -1 z m 0 0\" fill=\"#2e3436\"/>\r\n</svg>                                                                                                            '),
(8, 'Video Production', '1684390083.jpg', 'Produce high-quality video content, including commercials, promotional videos, and brand stories', '                                                                                                            Produce high-quality video content, including commercials, promotional videos, and brand stories. Coordinate the entire production process, from scriptwriting and storyboarding to shooting, editing, and post-production                                                                                                            ', 'video content,commercials, promotional videos, and brand stories', '                                                                        <svg width=\"40px\" height=\"40px\" viewBox=\"0 0 15 15\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\r\n  <path\r\n    fill-rule=\"evenodd\"\r\n    clip-rule=\"evenodd\"\r\n    d=\"M4.76447 3.12199C5.63151 3.04859 6.56082 3 7.5 3C8.43918 3 9.36849 3.04859 10.2355 3.12199C11.2796 3.21037 11.9553 3.27008 12.472 3.39203C12.9425 3.50304 13.2048 3.64976 13.4306 3.88086C13.4553 3.90618 13.4902 3.94414 13.5133 3.97092C13.7126 4.20149 13.8435 4.4887 13.918 5.03283C13.9978 5.6156 14 6.37644 14 7.52493C14 8.66026 13.9978 9.41019 13.9181 9.98538C13.8439 10.5206 13.7137 10.8061 13.5125 11.0387C13.4896 11.0651 13.4541 11.1038 13.4296 11.1287C13.2009 11.3625 12.9406 11.5076 12.4818 11.6164C11.9752 11.7365 11.3143 11.7942 10.2878 11.8797C9.41948 11.9521 8.47566 12 7.5 12C6.52434 12 5.58052 11.9521 4.7122 11.8797C3.68572 11.7942 3.02477 11.7365 2.51816 11.6164C2.05936 11.5076 1.7991 11.3625 1.57037 11.1287C1.54593 11.1038 1.51035 11.0651 1.48748 11.0387C1.28628 10.8061 1.15612 10.5206 1.08193 9.98538C1.00221 9.41019 1 8.66026 1 7.52493C1 6.37644 1.00216 5.6156 1.082 5.03283C1.15654 4.4887 1.28744 4.20149 1.48666 3.97092C1.5098 3.94414 1.54468 3.90618 1.56942 3.88086C1.7952 3.64976 2.05752 3.50304 2.52796 3.39203C3.04473 3.27008 3.7204 3.21037 4.76447 3.12199ZM0 7.52493C0 5.28296 0 4.16198 0.729985 3.31713C0.766457 3.27491 0.815139 3.22194 0.854123 3.18204C1.63439 2.38339 2.64963 2.29744 4.68012 2.12555C5.56923 2.05028 6.52724 2 7.5 2C8.47276 2 9.43077 2.05028 10.3199 2.12555C12.3504 2.29744 13.3656 2.38339 14.1459 3.18204C14.1849 3.22194 14.2335 3.27491 14.27 3.31713C15 4.16198 15 5.28296 15 7.52493C15 9.74012 15 10.8477 14.2688 11.6929C14.2326 11.7348 14.1832 11.7885 14.1444 11.8281C13.3629 12.6269 12.3655 12.71 10.3709 12.8763C9.47971 12.9505 8.50782 13 7.5 13C6.49218 13 5.52028 12.9505 4.62915 12.8763C2.63446 12.71 1.63712 12.6269 0.855558 11.8281C0.816844 11.7885 0.767442 11.7348 0.731221 11.6929C0 10.8477 0 9.74012 0 7.52493ZM5.25 5.38264C5.25 5.20225 5.43522 5.08124 5.60041 5.15369L10.428 7.27105C10.6274 7.35853 10.6274 7.64147 10.428 7.72895L5.60041 9.84631C5.43522 9.91876 5.25 9.79775 5.25 9.61736V5.38264Z\"\r\n    fill=\"#000000\"\r\n  />\r\n</svg>                                                                        '),
(9, 'Digital Marketing', '1684390279.jpg', 'Develop digital marketing strategies and content for online platforms', '                                                                                                            Develop digital marketing strategies and content for online platforms, such as websites, social media, email marketing, and search engine advertising. Optimize content for search engines and create engaging social media posts to generate brand awareness and drive traffic                                                                                                            ', ' digital marketing,marketing,online marketing,digital', '                                                                        <svg width=\"40px\" height=\"40px\" viewBox=\"0 0 32 32\" id=\"OBJECT\" xmlns=\"http://www.w3.org/2000/svg\"><defs><style>.cls-1{fill:#b2b2b2;}</style></defs><title/><path class=\"cls-1\" d=\"M8,23H6a5,5,0,0,0-5,5v2a1,1,0,0,0,1,1H12a1,1,0,0,0,1-1V28A5,5,0,0,0,8,23Z\"/><path class=\"cls-1\" d=\"M26,23H24a5,5,0,0,0-5,5v2a1,1,0,0,0,1,1H30a1,1,0,0,0,1-1V28A5,5,0,0,0,26,23Z\"/><circle cx=\"7\" cy=\"21.5\" r=\"3.5\"/><circle cx=\"25\" cy=\"21.5\" r=\"3.5\"/><path d=\"M17,21H15a5,5,0,0,0-5,5v5H22V26A5,5,0,0,0,17,21Z\"/><rect class=\"cls-1\" height=\"12\" rx=\"2\" ry=\"2\" width=\"18\" x=\"7\" y=\"1\"/><circle class=\"cls-1\" cx=\"16\" cy=\"19\" r=\"4\"/><path d=\"M12.25,8h-.5a1,1,0,0,1,0-2h.5a1,1,0,0,1,0,2Z\"/><path d=\"M16.25,8h-.5a1,1,0,0,1,0-2h.5a1,1,0,0,1,0,2Z\"/><path d=\"M20.25,8h-.5a1,1,0,0,1,0-2h.5a1,1,0,0,1,0,2Z\"/></svg>                                                                        '),
(10, 'Digital Advertising ', '1684390502.jpg', 'Design and create digital advertising assets', '                                                                                                                                                                                                                        Design and create digital advertising assets such as web banners, social media graphics, email newsletters, and online advertisements. Optimize the content for different platforms and screen sizes to maximize reach and engagement                                                                                                                                                                                                                        ', 'Design,digital advertising, web banners, social media graphics, email newsletters, and online advertisements', '                                                                                                            <svg  height = \"40px\" width = \"40px\" version=\"1.1\" id=\"Icons\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" \r\n	 viewBox=\"0 0 32 32\" xml:space=\"preserve\">\r\n<style type=\"text/css\">\r\n	.st0{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}\r\n	.st1{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;}\r\n	.st2{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:5.2066,0;}\r\n</style>\r\n<path class=\"st0\" d=\"M3,6v15c0,1.1,0.9,2,2,2h22c1.1,0,2-0.9,2-2V6c0-1.1-0.9-2-2-2H5C3.9,4,3,4.9,3,6z\"/>\r\n<line class=\"st0\" x1=\"9\" y1=\"29\" x2=\"23\" y2=\"29\"/>\r\n<path class=\"st0\" d=\"M13,23c0,2.1-0.7,4.6-1.8,6\"/>\r\n<path class=\"st0\" d=\"M20.8,29c-1.1-1.4-1.8-3.9-1.8-6\"/>\r\n<path class=\"st0\" d=\"M12.5,9.6L12.5,9.6c-1.4,0-2.5,1.2-2.5,2.6v0c0,1.4,1.1,2.6,2.5,2.6h0c2.2,0,4.4,0.5,6.4,1.5l2,1v-5.8V7l-2,1\r\n	C17,9,14.8,9.6,12.5,9.6z\"/>\r\n<polyline class=\"st0\" points=\"11,14.2 13.4,19 15.9,19 15.9,9.6 \"/>\r\n</svg>                                                                                                            '),
(11, 'Print Production ', '1684390592.jpg', 'Coordinate the printing process for various marketing materials', '                                                                                                            Coordinate the printing process for various marketing materials, ensuring high-quality output and timely delivery. Work with printers to select appropriate paper stock, finishes, and printing techniques to enhance the visual appeal of the materials                                                                                                            ', 'printing,production,marketing,printers,paper print,flex print', '                                                                        <svg width=\"40px\" height=\"40px\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\">\r\n\r\n  <g style=\"fill:#888888;stroke:#000000;stroke-width:1px;\">\r\n    <path style=\"fill:#EBEBDA\" d=\"M 19,44 19,3 81,3 81,44\"/>\r\n    <path style=\"stroke-width:2px;\" d=\"M 26 10 L 74 10 L 26 10 z M 26 17 L 74 17 L 26 17 z M 26 24 L 74 24 L 26 24 z M 26 31 L 46 31 L 26 31 z M 26 39 L 74 39 L 26 39 z \"/>\r\n\r\n    <path style=\"fill:#444444\" d=\"m 5,89 c 0,4 -1,7 4,7 0,0 79,0 82,0 3,0 4,-1 4,-7\"/>\r\n    <path d=\"m 4,54 5,-10 81,0 6,10\"/>\r\n    <path d=\"m 9,53 c -6,0 -7,1 -7,6 l 0,24 c 0,4 0,6 5,6 l 84,0 c 4,0 7,0 7,-5 l 0,-27 c 0,-2 -1,-4 -6,-4 z\"/>\r\n    <path style=\"fill:#666666\" d=\"m 14,57 c -4,0 -5,1 -5,5 0,2 -1,6 4,6 l 66,0 c 4,0 5,-1 5,-6 0,-4 -1,-5 -5,-5 z\"/>\r\n    <ellipse cx=\"16\" cy=\"62.5\" rx=\"3\" ry=\"3\" style=\"fill:#00BC02;stroke:#111111\"/>\r\n  </g>\r\n\r\n</svg>                                                                        '),
(12, 'Web Development ', '1684390648.jpg', 'Web development refers to the process of creating and maintaining websites and web applications', '                                                                                                            Web development refers to the process of creating and maintaining websites and web applications. It involves designing the visual layout, writing code, and implementing functionality to ensure the website or application functions properly across different web browsers and devices. Web development encompasses various technologies such as HTML, CSS, JavaScript, and backend programming languages like Python, PHP, or Ruby. It also includes tasks like database management, security implementation, and optimization for performance and user experience. Overall, web development is the foundation for building and delivering content and services on the internet.                                                                                                            ', 'webdevelopment,website,clickfordern', '                                                                        <svg width=\"40px\" height=\"40px\" viewBox=\"0 0 24 24\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">\r\n\r\n<title/>\r\n\r\n<g fill=\"none\" fill-rule=\"evenodd\" id=\"??-1\" stroke=\"none\" stroke-width=\"1\">\r\n\r\n<g id=\"????\" stroke=\"#212121\" stroke-width=\"1.5\" transform=\"translate(-177.000000, -334.000000)\">\r\n\r\n<g id=\"????\" transform=\"translate(177.000000, 334.000000)\">\r\n\r\n<g id=\"??\" transform=\"translate(3.000000, 4.000000)\">\r\n\r\n<rect height=\"4.5\" id=\"??\" stroke-linecap=\"round\" stroke-linejoin=\"round\" width=\"5\" x=\"7\" y=\"12\"/>\r\n\r\n<rect height=\"12\" id=\"??\" rx=\"1\" width=\"19\" x=\"0\" y=\"0\"/>\r\n\r\n<line id=\"??\" stroke-linecap=\"round\" stroke-linejoin=\"round\" x1=\"8.5\" x2=\"10.5\" y1=\"9.5\" y2=\"9.5\"/>\r\n\r\n<line id=\"??\" stroke-linecap=\"round\" stroke-linejoin=\"round\" x1=\"4.5\" x2=\"14.5\" y1=\"16.5\" y2=\"16.5\"/>\r\n\r\n</g>\r\n\r\n</g>\r\n\r\n</g>\r\n\r\n</g>\r\n\r\n</svg>                                                                        ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_works`
--
ALTER TABLE `recent_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `recent_works`
--
ALTER TABLE `recent_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
