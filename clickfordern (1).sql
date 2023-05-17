-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 11:26 AM
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
  `ig_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
-- Table structure for table `flickr_images`
--

CREATE TABLE `flickr_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flickr_images`
--

INSERT INTO `flickr_images` (`id`, `image`) VALUES
(1, '1684304500.jpg'),
(2, '6.jpg'),
(3, '7.jpg'),
(4, '8.jpg');

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
(7, 'Graphic Design', '1684259145.jpg', 'Create visually stunning designs for various advertising materials', '                                    Create visually stunning designs for various advertising materials, including brochures, flyers, posters, banners, business cards, packaging, and more. Your designs should align with the client\'s brand identity and effectively capture attention                                    ', 'graphics,graphic design,design,designing', '                                                                                                                                                                               <svg fill=\"#000000\" width=\"40px\" height=\"40px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" id=\"Self_x5F_improvement\" version=\"1.1\" xml:space=\"preserve\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">\r\n  <g>\r\n    <path d=\"M380.417,258.812c-1.904-41.328-25.76-76.918-60.197-95.363c-2.717-1.48-5.514-2.838-8.369-4.074   c-13.947-6.061-29.33-9.426-45.504-9.426c-60.75,0-110.34,47.453-113.891,107.328l0.044-0.004v0.201   c0,2.209-0.122,12.92-0.122,12.92l-20.393,56.073c-2.006,5.557,2.082,11.033,7.99,11.033h12.291l-0.092,64.488   c0,12.537,10.162,23.512,22.699,23.512H217.5v57.376c0,9.301,7.309,16.624,16.61,16.624h104.432   c9.301,0,15.958-7.323,15.958-16.624V364.118c0-16.357,4.8-32.328,12.44-46.793c7.984-15.111,12.905-32.229,13.339-50.406   c0.02-0.912,0.148-1.844,0.148-2.775C380.428,262.358,380.499,260.575,380.417,258.812z M305.614,272.5H223.03   c-20.684,0-37.451-16.52-37.451-37.206s16.768-37.329,37.451-37.329c3.531,0,6.932,0.587,10.168,1.5   c5.379-14.092,18.984-24.088,34.965-24.088c15.496,0,28.793,9.429,34.488,22.847c0.98-0.076,1.963-0.142,2.963-0.142   c20.686,0,37.455,16.524,37.455,37.209S326.3,272.5,305.614,272.5z\"/>\r\n    <path d=\"M326.093,114.5h8.407v7.737c0,3.416,2.084,6.188,5.5,6.188s5.5-2.771,5.5-6.188V114.5h9.243c3.416,0,6.188-3.084,6.188-6.5   s-2.771-6.5-6.188-6.5H345.5v-7.915c0-3.418-2.084-6.188-5.5-6.188s-5.5,2.77-5.5,6.188v7.915h-8.407   c-3.418,0-6.188,3.084-6.188,6.5S322.675,114.5,326.093,114.5z\"/>\r\n    <path d=\"M188.245,40.5h6.255v8.142c0,3.416,3.584,6.188,7,6.188s7-2.771,7-6.188V40.5h8.397c3.416,0,6.188-3.084,6.188-6.5   s-2.771-6.5-6.188-6.5H208.5v-7.511c0-3.416-3.584-6.188-7-6.188s-7,2.771-7,6.188V27.5h-6.255c-3.418,0-6.188,3.084-6.188,6.5   S184.827,40.5,188.245,40.5z\"/>\r\n    <rect height=\"27\" width=\"27\" x=\"203.5\" y=\"220.5\"/>\r\n    <polygon points=\"248.75,245.5 282.513,245.5 265.63,219.754  \"/>\r\n    <circle cx=\"313.101\" cy=\"233.486\" r=\"14.181\"/>\r\n    <path d=\"M259.745,126.11c1.02,0.975,2.328,1.459,3.635,1.459c1.311,0,2.619-0.488,3.637-1.461l19.479-18.609   c1.564-1.492,2.057-3.218,1.25-5.23c-0.803-2.008-2.723-2.769-4.887-2.769h-13.313l-0.07-40.361   c-0.006-3.414-2.775-7.639-6.188-7.639c-0.004,0-0.006,0-0.012,0c-3.416,3-6.182,4.242-6.176,7.66l0.07,40.34h-13.27   c-2.164,0-4.084,0.761-4.889,2.771s-0.314,4.003,1.25,5.5L259.745,126.11z\"/>\r\n    <path d=\"M262.5,40.503c3.416,0,7-2.77,7-6.188V19.64c0-3.416-3.584-6.188-7-6.188s-7,2.771-7,6.188v14.676   C255.5,37.733,259.084,40.503,262.5,40.503z\"/>\r\n  </g>\r\n</svg>                                                                                                                                                                                    '),
(8, 'VIDEO PRODUCTION', '1684263147.jpg', 'Produce high-quality video content, including commercials, promotional videos, and brand stories', 'Produce high-quality video content, including commercials, promotional videos, and brand stories. Coordinate the entire production process, from scriptwriting and storyboarding to shooting, editing, and post-production', 'video content,commercials, promotional videos, and brand stories', '                                                                                                                                                                                                                                                                                           <svg fill=\"#000000\" width=\"40px\" height=\"40px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" id=\"Self_x5F_improvement\" version=\"1.1\" xml:space=\"preserve\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">   <g>     <path d=\"M380.417,258.812c-1.904-41.328-25.76-76.918-60.197-95.363c-2.717-1.48-5.514-2.838-8.369-4.074   c-13.947-6.061-29.33-9.426-45.504-9.426c-60.75,0-110.34,47.453-113.891,107.328l0.044-0.004v0.201   c0,2.209-0.122,12.92-0.122,12.92l-20.393,56.073c-2.006,5.557,2.082,11.033,7.99,11.033h12.291l-0.092,64.488   c0,12.537,10.162,23.512,22.699,23.512H217.5v57.376c0,9.301,7.309,16.624,16.61,16.624h104.432   c9.301,0,15.958-7.323,15.958-16.624V364.118c0-16.357,4.8-32.328,12.44-46.793c7.984-15.111,12.905-32.229,13.339-50.406   c0.02-0.912,0.148-1.844,0.148-2.775C380.428,262.358,380.499,260.575,380.417,258.812z M305.614,272.5H223.03   c-20.684,0-37.451-16.52-37.451-37.206s16.768-37.329,37.451-37.329c3.531,0,6.932,0.587,10.168,1.5   c5.379-14.092,18.984-24.088,34.965-24.088c15.496,0,28.793,9.429,34.488,22.847c0.98-0.076,1.963-0.142,2.963-0.142   c20.686,0,37.455,16.524,37.455,37.209S326.3,272.5,305.614,272.5z\"/>     <path d=\"M326.093,114.5h8.407v7.737c0,3.416,2.084,6.188,5.5,6.188s5.5-2.771,5.5-6.188V114.5h9.243c3.416,0,6.188-3.084,6.188-6.5   s-2.771-6.5-6.188-6.5H345.5v-7.915c0-3.418-2.084-6.188-5.5-6.188s-5.5,2.77-5.5,6.188v7.915h-8.407   c-3.418,0-6.188,3.084-6.188,6.5S322.675,114.5,326.093,114.5z\"/>     <path d=\"M188.245,40.5h6.255v8.142c0,3.416,3.584,6.188,7,6.188s7-2.771,7-6.188V40.5h8.397c3.416,0,6.188-3.084,6.188-6.5   s-2.771-6.5-6.188-6.5H208.5v-7.511c0-3.416-3.584-6.188-7-6.188s-7,2.771-7,6.188V27.5h-6.255c-3.418,0-6.188,3.084-6.188,6.5   S184.827,40.5,188.245,40.5z\"/>     <rect height=\"27\" width=\"27\" x=\"203.5\" y=\"220.5\"/>     <polygon points=\"248.75,245.5 282.513,245.5 265.63,219.754  \"/>     <circle cx=\"313.101\" cy=\"233.486\" r=\"14.181\"/>     <path d=\"M259.745,126.11c1.02,0.975,2.328,1.459,3.635,1.459c1.311,0,2.619-0.488,3.637-1.461l19.479-18.609   c1.564-1.492,2.057-3.218,1.25-5.23c-0.803-2.008-2.723-2.769-4.887-2.769h-13.313l-0.07-40.361   c-0.006-3.414-2.775-7.639-6.188-7.639c-0.004,0-0.006,0-0.012,0c-3.416,3-6.182,4.242-6.176,7.66l0.07,40.34h-13.27   c-2.164,0-4.084,0.761-4.889,2.771s-0.314,4.003,1.25,5.5L259.745,126.11z\"/>     <path d=\"M262.5,40.503c3.416,0,7-2.77,7-6.188V19.64c0-3.416-3.584-6.188-7-6.188s-7,2.771-7,6.188v14.676   C255.5,37.733,259.084,40.503,262.5,40.503z\"/>   </g> </svg>                                                                                                                                                                                    '),
(9, 'DIGITAL MARKETING', '1684263184.jpg', 'Develop digital marketing strategies and content for online platforms', 'Develop digital marketing strategies and content for online platforms, such as websites, social media, email marketing, and search engine advertising. Optimize content for search engines and create engaging social media posts to generate brand awareness and drive traffic', ' digital marketing,marketing,online marketing,digital', '                                    <svg fill=\"#000000\" width=\"40px\" height=\"40px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" id=\"Self_x5F_improvement\" version=\"1.1\" xml:space=\"preserve\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">   <g>     <path d=\"M380.417,258.812c-1.904-41.328-25.76-76.918-60.197-95.363c-2.717-1.48-5.514-2.838-8.369-4.074   c-13.947-6.061-29.33-9.426-45.504-9.426c-60.75,0-110.34,47.453-113.891,107.328l0.044-0.004v0.201   c0,2.209-0.122,12.92-0.122,12.92l-20.393,56.073c-2.006,5.557,2.082,11.033,7.99,11.033h12.291l-0.092,64.488   c0,12.537,10.162,23.512,22.699,23.512H217.5v57.376c0,9.301,7.309,16.624,16.61,16.624h104.432   c9.301,0,15.958-7.323,15.958-16.624V364.118c0-16.357,4.8-32.328,12.44-46.793c7.984-15.111,12.905-32.229,13.339-50.406   c0.02-0.912,0.148-1.844,0.148-2.775C380.428,262.358,380.499,260.575,380.417,258.812z M305.614,272.5H223.03   c-20.684,0-37.451-16.52-37.451-37.206s16.768-37.329,37.451-37.329c3.531,0,6.932,0.587,10.168,1.5   c5.379-14.092,18.984-24.088,34.965-24.088c15.496,0,28.793,9.429,34.488,22.847c0.98-0.076,1.963-0.142,2.963-0.142   c20.686,0,37.455,16.524,37.455,37.209S326.3,272.5,305.614,272.5z\"/>     <path d=\"M326.093,114.5h8.407v7.737c0,3.416,2.084,6.188,5.5,6.188s5.5-2.771,5.5-6.188V114.5h9.243c3.416,0,6.188-3.084,6.188-6.5   s-2.771-6.5-6.188-6.5H345.5v-7.915c0-3.418-2.084-6.188-5.5-6.188s-5.5,2.77-5.5,6.188v7.915h-8.407   c-3.418,0-6.188,3.084-6.188,6.5S322.675,114.5,326.093,114.5z\"/>     <path d=\"M188.245,40.5h6.255v8.142c0,3.416,3.584,6.188,7,6.188s7-2.771,7-6.188V40.5h8.397c3.416,0,6.188-3.084,6.188-6.5   s-2.771-6.5-6.188-6.5H208.5v-7.511c0-3.416-3.584-6.188-7-6.188s-7,2.771-7,6.188V27.5h-6.255c-3.418,0-6.188,3.084-6.188,6.5   S184.827,40.5,188.245,40.5z\"/>     <rect height=\"27\" width=\"27\" x=\"203.5\" y=\"220.5\"/>     <polygon points=\"248.75,245.5 282.513,245.5 265.63,219.754  \"/>     <circle cx=\"313.101\" cy=\"233.486\" r=\"14.181\"/>     <path d=\"M259.745,126.11c1.02,0.975,2.328,1.459,3.635,1.459c1.311,0,2.619-0.488,3.637-1.461l19.479-18.609   c1.564-1.492,2.057-3.218,1.25-5.23c-0.803-2.008-2.723-2.769-4.887-2.769h-13.313l-0.07-40.361   c-0.006-3.414-2.775-7.639-6.188-7.639c-0.004,0-0.006,0-0.012,0c-3.416,3-6.182,4.242-6.176,7.66l0.07,40.34h-13.27   c-2.164,0-4.084,0.761-4.889,2.771s-0.314,4.003,1.25,5.5L259.745,126.11z\"/>     <path d=\"M262.5,40.503c3.416,0,7-2.77,7-6.188V19.64c0-3.416-3.584-6.188-7-6.188s-7,2.771-7,6.188v14.676   C255.5,37.733,259.084,40.503,262.5,40.503z\"/>   </g> </svg>                                     '),
(10, 'DIGITAL ADVERTISING', '1684263292.jpg', 'Design and create digital advertising assets', 'Design and create digital advertising assets such as web banners, social media graphics, email newsletters, and online advertisements. Optimize the content for different platforms and screen sizes to maximize reach and engagement', 'Design,digital advertising, web banners, social media graphics, email newsletters, and online advertisements', '                                    <svg fill=\"#000000\" width=\"40px\" height=\"40px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" id=\"Self_x5F_improvement\" version=\"1.1\" xml:space=\"preserve\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">   <g>     <path d=\"M380.417,258.812c-1.904-41.328-25.76-76.918-60.197-95.363c-2.717-1.48-5.514-2.838-8.369-4.074   c-13.947-6.061-29.33-9.426-45.504-9.426c-60.75,0-110.34,47.453-113.891,107.328l0.044-0.004v0.201   c0,2.209-0.122,12.92-0.122,12.92l-20.393,56.073c-2.006,5.557,2.082,11.033,7.99,11.033h12.291l-0.092,64.488   c0,12.537,10.162,23.512,22.699,23.512H217.5v57.376c0,9.301,7.309,16.624,16.61,16.624h104.432   c9.301,0,15.958-7.323,15.958-16.624V364.118c0-16.357,4.8-32.328,12.44-46.793c7.984-15.111,12.905-32.229,13.339-50.406   c0.02-0.912,0.148-1.844,0.148-2.775C380.428,262.358,380.499,260.575,380.417,258.812z M305.614,272.5H223.03   c-20.684,0-37.451-16.52-37.451-37.206s16.768-37.329,37.451-37.329c3.531,0,6.932,0.587,10.168,1.5   c5.379-14.092,18.984-24.088,34.965-24.088c15.496,0,28.793,9.429,34.488,22.847c0.98-0.076,1.963-0.142,2.963-0.142   c20.686,0,37.455,16.524,37.455,37.209S326.3,272.5,305.614,272.5z\"/>     <path d=\"M326.093,114.5h8.407v7.737c0,3.416,2.084,6.188,5.5,6.188s5.5-2.771,5.5-6.188V114.5h9.243c3.416,0,6.188-3.084,6.188-6.5   s-2.771-6.5-6.188-6.5H345.5v-7.915c0-3.418-2.084-6.188-5.5-6.188s-5.5,2.77-5.5,6.188v7.915h-8.407   c-3.418,0-6.188,3.084-6.188,6.5S322.675,114.5,326.093,114.5z\"/>     <path d=\"M188.245,40.5h6.255v8.142c0,3.416,3.584,6.188,7,6.188s7-2.771,7-6.188V40.5h8.397c3.416,0,6.188-3.084,6.188-6.5   s-2.771-6.5-6.188-6.5H208.5v-7.511c0-3.416-3.584-6.188-7-6.188s-7,2.771-7,6.188V27.5h-6.255c-3.418,0-6.188,3.084-6.188,6.5   S184.827,40.5,188.245,40.5z\"/>     <rect height=\"27\" width=\"27\" x=\"203.5\" y=\"220.5\"/>     <polygon points=\"248.75,245.5 282.513,245.5 265.63,219.754  \"/>     <circle cx=\"313.101\" cy=\"233.486\" r=\"14.181\"/>     <path d=\"M259.745,126.11c1.02,0.975,2.328,1.459,3.635,1.459c1.311,0,2.619-0.488,3.637-1.461l19.479-18.609   c1.564-1.492,2.057-3.218,1.25-5.23c-0.803-2.008-2.723-2.769-4.887-2.769h-13.313l-0.07-40.361   c-0.006-3.414-2.775-7.639-6.188-7.639c-0.004,0-0.006,0-0.012,0c-3.416,3-6.182,4.242-6.176,7.66l0.07,40.34h-13.27   c-2.164,0-4.084,0.761-4.889,2.771s-0.314,4.003,1.25,5.5L259.745,126.11z\"/>     <path d=\"M262.5,40.503c3.416,0,7-2.77,7-6.188V19.64c0-3.416-3.584-6.188-7-6.188s-7,2.771-7,6.188v14.676   C255.5,37.733,259.084,40.503,262.5,40.503z\"/>   </g> </svg>                                                                                                                                                '),
(11, 'PRINT PRODUCTION', '1684263320.jpg', 'Coordinate the printing process for various marketing materials', 'Coordinate the printing process for various marketing materials, ensuring high-quality output and timely delivery. Work with printers to select appropriate paper stock, finishes, and printing techniques to enhance the visual appeal of the materials', 'printing,production,marketing,printers,paper print,flex print', '                                    <svg fill=\"#000000\" width=\"40px\" height=\"40px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" id=\"Self_x5F_improvement\" version=\"1.1\" xml:space=\"preserve\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">   <g>     <path d=\"M380.417,258.812c-1.904-41.328-25.76-76.918-60.197-95.363c-2.717-1.48-5.514-2.838-8.369-4.074   c-13.947-6.061-29.33-9.426-45.504-9.426c-60.75,0-110.34,47.453-113.891,107.328l0.044-0.004v0.201   c0,2.209-0.122,12.92-0.122,12.92l-20.393,56.073c-2.006,5.557,2.082,11.033,7.99,11.033h12.291l-0.092,64.488   c0,12.537,10.162,23.512,22.699,23.512H217.5v57.376c0,9.301,7.309,16.624,16.61,16.624h104.432   c9.301,0,15.958-7.323,15.958-16.624V364.118c0-16.357,4.8-32.328,12.44-46.793c7.984-15.111,12.905-32.229,13.339-50.406   c0.02-0.912,0.148-1.844,0.148-2.775C380.428,262.358,380.499,260.575,380.417,258.812z M305.614,272.5H223.03   c-20.684,0-37.451-16.52-37.451-37.206s16.768-37.329,37.451-37.329c3.531,0,6.932,0.587,10.168,1.5   c5.379-14.092,18.984-24.088,34.965-24.088c15.496,0,28.793,9.429,34.488,22.847c0.98-0.076,1.963-0.142,2.963-0.142   c20.686,0,37.455,16.524,37.455,37.209S326.3,272.5,305.614,272.5z\"/>     <path d=\"M326.093,114.5h8.407v7.737c0,3.416,2.084,6.188,5.5,6.188s5.5-2.771,5.5-6.188V114.5h9.243c3.416,0,6.188-3.084,6.188-6.5   s-2.771-6.5-6.188-6.5H345.5v-7.915c0-3.418-2.084-6.188-5.5-6.188s-5.5,2.77-5.5,6.188v7.915h-8.407   c-3.418,0-6.188,3.084-6.188,6.5S322.675,114.5,326.093,114.5z\"/>     <path d=\"M188.245,40.5h6.255v8.142c0,3.416,3.584,6.188,7,6.188s7-2.771,7-6.188V40.5h8.397c3.416,0,6.188-3.084,6.188-6.5   s-2.771-6.5-6.188-6.5H208.5v-7.511c0-3.416-3.584-6.188-7-6.188s-7,2.771-7,6.188V27.5h-6.255c-3.418,0-6.188,3.084-6.188,6.5   S184.827,40.5,188.245,40.5z\"/>     <rect height=\"27\" width=\"27\" x=\"203.5\" y=\"220.5\"/>     <polygon points=\"248.75,245.5 282.513,245.5 265.63,219.754  \"/>     <circle cx=\"313.101\" cy=\"233.486\" r=\"14.181\"/>     <path d=\"M259.745,126.11c1.02,0.975,2.328,1.459,3.635,1.459c1.311,0,2.619-0.488,3.637-1.461l19.479-18.609   c1.564-1.492,2.057-3.218,1.25-5.23c-0.803-2.008-2.723-2.769-4.887-2.769h-13.313l-0.07-40.361   c-0.006-3.414-2.775-7.639-6.188-7.639c-0.004,0-0.006,0-0.012,0c-3.416,3-6.182,4.242-6.176,7.66l0.07,40.34h-13.27   c-2.164,0-4.084,0.761-4.889,2.771s-0.314,4.003,1.25,5.5L259.745,126.11z\"/>     <path d=\"M262.5,40.503c3.416,0,7-2.77,7-6.188V19.64c0-3.416-3.584-6.188-7-6.188s-7,2.771-7,6.188v14.676   C255.5,37.733,259.084,40.503,262.5,40.503z\"/>   </g> </svg>                                                                                                                                                ');

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
-- Indexes for table `flickr_images`
--
ALTER TABLE `flickr_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `flickr_images`
--
ALTER TABLE `flickr_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
