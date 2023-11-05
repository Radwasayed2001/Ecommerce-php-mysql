-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 08:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `product_qty`, `created_at`) VALUES
(16, 7, 14, 1, '2023-11-04'),
(18, 7, 23, 1, '2023-11-04'),
(28, 7, 36, 1, '2023-11-04'),
(37, 10, 18, 1, '2023-11-04'),
(38, 10, 41, 4, '2023-11-04'),
(39, 10, 17, 6, '2023-11-04'),
(40, 10, 36, 3, '2023-11-04'),
(41, 10, 38, 10, '2023-11-04'),
(42, 10, 39, 3, '2023-11-04'),
(43, 10, 40, 10, '2023-11-04'),
(66, 8, 9, 6, '2023-11-05'),
(67, 8, 11, 5, '2023-11-05'),
(69, 8, 14, 4, '2023-11-05'),
(75, 8, 34, 3, '2023-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` mediumtext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `popular` tinyint(4) NOT NULL,
  `image` varchar(191) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(55, 'home_decoration', 'this is the slug of category home_decoration', ' value=\"this is the description of category home_decoration\"', 1, 1, '1698818832.jpg', 'this is the meta_title of category home_decoration', ' value=\"this is the meta_description of category home_decoration\"', ' value=\"this is the meta_keywords of category home_decoration\"', '2023-11-01'),
(56, 'Labtops', 'this is the slug of category Labtops', ' value=\"this is the description of category Labtops\"', 1, 1, '1698818927.jpg', 'this is the meta_title of category Labtops', ' value=\"this is the meta_description of category Labtops\"', ' value=\"this is the meta_keywords of category Labtops\"', '2023-11-01'),
(57, 'skin_care', 'this is the slug of category skin_care', ' value=\" value=\"this is the slug of description skin_care\"\"', 1, 1, '1698818994.jpg', 'this is the slug of meta_title skin_care', ' value=\" value=\"this is the slug of meta_description skin_care\"\"', ' value=\" value=\"this is the slug of meta_keywords skin_care\"\"', '2023-11-01'),
(59, 'fragrances', 'fragrances', ' value=\" value=\" value=\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!\"\"\"', 1, 0, '1698927318.webp', 'fragrances', ' value=\" value=\" value=\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!\"\"\"', ' value=\" value=\" value=\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!\"\"\"', '2023-11-02'),
(60, 'smartphones', 'smartphones', ' value=\" value=\" value=\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!\"\"\"', 1, 1, '1698927365.jpg', 'smartphones', ' value=\" value=\" value=\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!\"\"\"', ' value=\" value=\" value=\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!\"\"\"', '2023-11-02'),
(61, 'groceries', 'groceries', ' value=\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!\"', 1, 0, '1698927421.png', 'groceries', ' value=\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!\"', ' value=\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!\"', '2023-11-02'),
(62, 'headphone', 'headphone', ' value=\" value=\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!\"\"', 0, 0, '1698929157.png', 'headphone', ' value=\" value=\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!\"\"', ' value=\" value=\"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!\"\"', '2023-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `slug` varchar(191) NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `trending` tinyint(4) NOT NULL DEFAULT 0,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `small_description`, `slug`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`, `description`) VALUES
(9, 56, 'Samsung Galaxy Book', 'Samsung Galaxy Book S (2020) Laptop With Intel Lakefield Chip, 8GB of RAM Launched', 'Samsung Galaxy Book', 1499, 1399, '1698820137.jpg', 61, 1, 1, 'Samsung Galaxy Book', 'Samsung Galaxy Book S (2020) Laptop With Intel Lakefield Chip, 8GB of RAM Launched', 'Samsung Galaxy Book S (2020) Laptop With Intel Lakefield Chip, 8GB of RAM Launched', '2023-11-01', '2023-11-03', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(11, 56, 'Infinix INBOOK', 'Infinix Inbook X1 Ci3 10th 8GB 256GB 14 Win10 Grey – 1 Year Warranty', 'Infinix INBOOK', 1099, 999, '1698820571.jpg', 123, 1, 0, 'Infinix INBOOK', 'Infinix Inbook X1 Ci3 10th 8GB 256GB 14 Win10 Grey – 1 Year Warranty', 'Infinix Inbook X1 Ci3 10th 8GB 256GB 14 Win10 Grey – 1 Year Warranty', '2023-11-01', '2023-11-03', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(13, 59, 'perfume Oil', 'Mega Discount, Impression of Acqua Di Gio by GiorgioArmani concentrated attar perfume Oil', 'perfume Oil', 13, 13, '1698820896.jpg', 56, 1, 1, 'perfume Oil', 'Mega Discount, Impression of Acqua Di Gio by GiorgioArmani concentrated attar perfume Oil', 'Mega Discount, Impression of Acqua Di Gio by GiorgioArmani concentrated attar perfume Oil', '2023-11-01', '2023-11-03', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(14, 57, 'Hyaluronic Acid Serum', 'L\'OrÃ©al Paris introduces Hyaluron Expert Replumping Serum formulated with 1.5% Hyaluronic Acid', 'Hyaluronic Acid Serum', 19, 18, '1698821030.jpg', 40, 1, 1, 'Hyaluronic Acid Serum', 'L\'OrÃ©al Paris introduces Hyaluron Expert Replumping Serum formulated with 1.5% Hyaluronic Acid', 'L\'OrÃ©al Paris introduces Hyaluron Expert Replumping Serum formulated with 1.5% Hyaluronic Acid', '2023-11-01', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(15, 57, 'Tree Oil 30ml', 'Tea tree oil contains a number of compounds, including terpinen-4-ol, that have been shown to kill certain bacteria,', 'Tree Oil 30ml', 12, 12, '1698821128.jpg', 12, 1, 1, 'Tree Oil 30ml', 'Tea tree oil contains a number of compounds, including terpinen-4-ol, that have been shown to kill certain bacteria,', 'Tea tree oil contains a number of compounds, including terpinen-4-ol, that have been shown to kill certain bacteria,', '2023-11-01', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(17, 61, 'Elbow Macaroni - 400 gm', 'Product details of Bake Parlor Big Elbow Macaroni - 400 gm', 'Elbow Macaroni - 400 gm', 14, 14, '1698821341.jpg', 54, 1, 1, 'Elbow Macaroni - 400 gm', 'Product details of Bake Parlor Big Elbow Macaroni - 400 gm', 'Product details of Bake Parlor Big Elbow Macaroni - 400 gm', '2023-11-01', '2023-11-03', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(18, 55, 'Plant Hanger For Home', 'Boho Decor Plant Hanger For Home Wall Decoration Macrame Wall Hanging Shelf', 'Plant Hanger For Home', 41, 38, '1698824740.jpg', 39, 1, 1, 'Plant Hanger For Home', 'Boho Decor Plant Hanger For Home Wall Decoration Macrame Wall Hanging Shelf', 'Boho Decor Plant Hanger For Home Wall Decoration Macrame Wall Hanging Shelf', '2023-11-01', '2023-11-02', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(19, 60, 'oppo f19', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!', 'oppo f19', 340, 323, '1698928157.jpg', 33, 1, 1, 'oppo f19', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!', '2023-11-02', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(20, 62, 'headphone', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!', 'headphone', 12, 12, '1698929251.png', 3, 0, 1, 'headphone', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!', '2023-11-02', '2023-11-03', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(21, 60, 'iPhone 9', 'An apple mobile which is nothing like apple', 'iPhone 9', 549, 512, '1699015083.jpg', 10, 1, 1, 'iPhone 9', 'An apple mobile which is nothing like apple', 'An apple mobile which is nothing like apple', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(22, 60, 'iPhone X', 'SIM-Free, Model A19211 6.5-inch Super Retina HD display with OLED technology A12 Bionic chip with ...', 'iPhone X', 899, 811, '1699015213.jpg', 11, 1, 1, 'iPhone X', 'SIM-Free, Model A19211 6.5-inch Super Retina HD display with OLED technology A12 Bionic chip with ...', 'SIM-Free, Model A19211 6.5-inch Super Retina HD display with OLED technology A12 Bionic chip with ...', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(23, 60, 'Samsung Universe 9', 'Samsung\'s new variant which goes beyond Galaxy to the Universe', 'Samsung Universe 9', 1249, 1199, '1699015327.jpg', 12, 1, 1, 'Samsung Universe 9', 'Samsung\'s new variant which goes beyond Galaxy to the Universe', 'Samsung\'s new variant which goes beyond Galaxy to the Universe', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(24, 60, 'Huawei P30', 'Huawei’s re-badged P30 Pro New Edition was officially unveiled yesterday in Germany and now the device has made its way to the UK.', 'Huawei P30', 499, 449, '1699015405.jpg', 13, 1, 1, 'Huawei P30', 'Huawei’s re-badged P30 Pro New Edition was officially unveiled yesterday in Germany and now the device has made its way to the UK.', 'Huawei’s re-badged P30 Pro New Edition was officially unveiled yesterday in Germany and now the device has made its way to the UK.', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(25, 56, 'MacBook Pro', 'MacBook Pro 2021 with mini-LED display may launch between September, November', 'MacBook Pro', 1749, 1699, '1699015488.jpg', 14, 1, 1, 'MacBook Pro', 'MacBook Pro 2021 with mini-LED display may launch between September, November', 'MacBook Pro 2021 with mini-LED display may launch between September, November', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(27, 56, 'Microsoft Surface Laptop 4', 'Style and speed. Stand out on HD video calls backed by Studio Mics. Capture ideas on the vibrant touchscreen. ', 'Microsoft Surface Laptop 4', 1499, 1399, '1699015790.jpg', 16, 1, 0, 'Microsoft Surface Laptop 4', 'Style and speed. Stand out on HD video calls backed by Studio Mics. Capture ideas on the vibrant touchscreen.', 'Style and speed. Stand out on HD video calls backed by Studio Mics. Capture ideas on the vibrant touchscreen.', '2023-11-03', '2023-11-03', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(28, 56, 'HP Pavilion 15-DK1056WM', 'HP Pavilion 15-DK1056WM Gaming Laptop 10th Gen Core i5, 8GB, 256GB SSD, GTX 1650 4GB, Windows 10', 'HP Pavilion 15-DK1056WM', 1099, 999, '1699015906.jpg', 17, 1, 0, 'HP Pavilion 15-DK1056WM', 'HP Pavilion 15-DK1056WM Gaming Laptop 10th Gen Core i5, 8GB, 256GB SSD, GTX 1650 4GB, Windows 10', 'HP Pavilion 15-DK1056WM Gaming Laptop 10th Gen Core i5, 8GB, 256GB SSD, GTX 1650 4GB, Windows 10', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(29, 59, 'Brown Perfume', 'Royal_Mirage Sport Brown Perfume for Men & Women - 120ml', 'Brown Perfume', 40, 39, '1699016463.jpg', 17, 1, 0, 'Brown Perfume', 'Royal_Mirage Sport Brown Perfume for Men & Women - 120ml', 'Royal_Mirage Sport Brown Perfume for Men & Women - 120ml', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(30, 59, 'Fog Scent Xpressio Perfume', 'Product details of Best Fog Scent Xpressio Perfume 100ml For Men cool long lasting perfumes for Men', 'Fog Scent Xpressio Perfume', 13, 13, '1699016628.jpg', 18, 1, 1, 'Fog Scent Xpressio Perfume', 'Product details of Best Fog Scent Xpressio Perfume 100ml For Men cool long lasting perfumes for Men', 'Product details of Best Fog Scent Xpressio Perfume 100ml For Men cool long lasting perfumes for Men', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(31, 59, 'Non-Alcoholic Concentrated Perfume Oil', 'Original Al Munakh® by Mahal Al Musk | Our Impression of Climate | 6ml Non-Alcoholic Concentrated Perfume Oil', 'Non-Alcoholic Concentrated Perfume Oil', 120, 114, '1699016758.jpg', 19, 1, 1, 'Non-Alcoholic Concentrated Perfume Oil', 'Original Al Munakh® by Mahal Al Musk | Our Impression of Climate | 6ml Non-Alcoholic Concentrated Perfume Oil', 'Original Al Munakh® by Mahal Al Musk | Our Impression of Climate | 6ml Non-Alcoholic Concentrated Perfume Oil', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(32, 59, 'Eau De Perfume Spray', 'Genuine  Al-Rehab spray perfume from UAE/Saudi Arabia/Yemen High Quality', 'Eau De Perfume Spray', 30, 30, '1699016849.jpg', 20, 1, 1, 'Eau De Perfume Spray', 'Genuine  Al-Rehab spray perfume from UAE/Saudi Arabia/Yemen High Quality', 'Genuine  Al-Rehab spray perfume from UAE/Saudi Arabia/Yemen High Quality', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(33, 57, 'Oil Free Moisturizer 100ml', 'Dermive Oil Free Moisturizer with SPF 20 is specifically formulated with ceramides, hyaluronic acid & sunscreen.', 'Oil Free Moisturizer 100ml', 40, 38, '1699017054.jpg', 21, 1, 1, 'Oil Free Moisturizer 100ml', 'Dermive Oil Free Moisturizer with SPF 20 is specifically formulated with ceramides, hyaluronic acid & sunscreen.', 'Dermive Oil Free Moisturizer with SPF 20 is specifically formulated with ceramides, hyaluronic acid & sunscreen.', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(34, 57, 'Skin Beauty Serum.', 'Product name: rorec collagen hyaluronic acid white face serum riceNet weight: 15 m', 'Skin Beauty Serum.', 46, 42, '1699017132.jpg', 22, 1, 0, 'Skin Beauty Serum.', 'Product name: rorec collagen hyaluronic acid white face serum riceNet weight: 15 m', 'Product name: rorec collagen hyaluronic acid white face serum riceNet weight: 15 m', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(35, 57, 'Freckle Treatment Cream- 15gm', 'Fair & Clear is Pakistan\'s only pure Freckle cream which helpsfade Freckles, Darkspots and pigments. Mercury level is 0%, so there are no side effects.', 'Freckle Treatment Cream- 15gm', 70, 66, '1699017266.jpg', 23, 1, 1, 'Freckle Treatment Cream- 15gm', 'Fair & Clear is Pakistan\'s only pure Freckle cream which helpsfade Freckles, Darkspots and pigments. Mercury level is 0%, so there are no side effects.', 'Fair & Clear is Pakistan\'s only pure Freckle cream which helpsfade Freckles, Darkspots and pigments. Mercury level is 0%, so there are no side effects.', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(36, 61, '- Daal Masoor 500 grams', 'Fine quality Branded Product Keep in a cool and dry place', '- Daal Masoor 500 grams', 20, 20, '1699017348.png', 24, 1, 0, '- Daal Masoor 500 grams', 'Fine quality Branded Product Keep in a cool and dry place', 'Fine quality Branded Product Keep in a cool and dry place', '2023-11-03', '2023-11-03', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(38, 61, 'Orange Essence Food Flavou', 'Specifications of Orange Essence Food Flavour For Cakes and Baking Food Item', 'Orange Essence Food Flavou', 14, 13, '1699017527.jpg', 25, 1, 1, 'Orange Essence Food Flavou', 'Specifications of Orange Essence Food Flavour For Cakes and Baking Food Item', 'Specifications of Orange Essence Food Flavour For Cakes and Baking Food Item', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(39, 61, 'cereals muesli fruit nuts', 'original fauji cereal muesli 250gm box pack original fauji cereals muesli fruit nuts flakes breakfast cereal break fast faujicereals cerels cerel foji fouji', 'cereals muesli fruit nuts', 46, 39, '1699017663.jpg', 26, 1, 1, 'cereals muesli fruit nuts', 'original fauji cereal muesli 250gm box pack original fauji cereals muesli fruit nuts flakes breakfast cereal break fast faujicereals cerels cerel foji fouji', 'original fauji cereal muesli 250gm box pack original fauji cereals muesli fruit nuts flakes breakfast cereal break fast faujicereals cerels cerel foji fouji', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(40, 61, 'Gulab Powder 50 Gram', 'Dry Rose Flower Powder Gulab Powder 50 Gram • Treats Wounds', 'Gulab Powder 50 Gram', 70, 66, '1699017786.png', 27, 1, 1, 'Gulab Powder 50 Gram', 'Dry Rose Flower Powder Gulab Powder 50 Gram • Treats Wounds', 'Dry Rose Flower Powder Gulab Powder 50 Gram • Treats Wounds', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(41, 55, 'Flying Wooden Bird', 'Package Include 6 Birds with Adhesive Tape Shape: 3D Shaped Wooden Birds Material: Wooden MDF, Laminated 3.5mm', 'Flying Wooden Bird', 51, 49, '1699018030.jpg', 28, 1, 0, 'Flying Wooden Bird', 'Package Include 6 Birds with Adhesive Tape Shape: 3D Shaped Wooden Birds Material: Wooden MDF, Laminated 3.5mm', 'Package Include 6 Birds with Adhesive Tape Shape: 3D Shaped Wooden Birds Material: Wooden MDF, Laminated 3.5mm', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(42, 55, '3D Embellishment Art Lamp', '3D led lamp sticker Wall sticker 3d wall art light on/off button  cell operated (included)', '3D Embellishment Art Lamp', 20, 20, '1699018132.jpg', 29, 1, 1, '3D Embellishment Art Lamp', '3D led lamp sticker Wall sticker 3d wall art light on/off button  cell operated (included)', '3D led lamp sticker Wall sticker 3d wall art light on/off button  cell operated (included)', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(43, 55, 'Handcraft Chinese style', 'Handcraft Chinese style art luxury palace hotel villa mansion home decor ceramic vase with brass fruit plate', 'Handcraft Chinese style', 60, 56, '1699018219.jpg', 30, 1, 1, 'Handcraft Chinese style', 'Handcraft Chinese style art luxury palace hotel villa mansion home decor ceramic vase with brass fruit plate', 'Handcraft Chinese style art luxury palace hotel villa mansion home decor ceramic vase with brass fruit plate', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!'),
(44, 55, 'Key Holder', 'Attractive DesignMetallic materialFour key hooksReliable & DurablePremium Quality', 'Key Holder', 30, 30, '1699018332.jpg', 32, 1, 0, 'Key Holder', 'Attractive DesignMetallic materialFour key hooksReliable & DurablePremium Quality', 'Attractive DesignMetallic materialFour key hooksReliable & DurablePremium Quality', '2023-11-03', '0000-00-00', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nostrum ipsam soluta eveniet minima nihil aut iure molestiae, velit dolores accusantium qui, magnam animi dicta. Officia reprehenderit ex architecto suscipit!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `role_as` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `created_at`, `role_as`) VALUES
(7, 'Radwabergas27', '01101332094', 'radwabergas27@gmail.com', 'Radwabergas27', '2023-10-29', 0),
(8, 'Radwasayed771', '01101332094', 'Radwasayed771@gmail.com', 'Radwasayed771', '2023-10-29', 1),
(10, 'radwasayed728', '01115026471', 'radwasayed728@gmail.com', 'radwasayed728', '2023-10-30', 0),
(11, 'newUser', '01115026471', 'newUser@gmail.com', 'newUser', '2023-11-02', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
