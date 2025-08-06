-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2025 at 01:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backendproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `communitycookbook`
--

CREATE TABLE `communitycookbook` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `recipe_id` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `name`, `email`, `message`) VALUES
(1, 'Htay Aung', 'test@gmail.com', 'Hello world'),
(2, 'Htay Aung', 'test@gmail.com', 'Hello world'),
(3, 'Htay Aung', 'test@gmail.com', 'hi sppl'),
(4, 'Htay Aung', 'test@gmail.com', 'I wanna ask you about that recipe');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'Japan'),
(2, 'China');

-- --------------------------------------------------------

--
-- Table structure for table `difficulty`
--

CREATE TABLE `difficulty` (
  `id` int(11) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `difficulty`
--

INSERT INTO `difficulty` (`id`, `rank`, `name`) VALUES
(1, '1', 'Low'),
(2, '2', 'Medium'),
(3, '3', 'High');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `name`, `date`, `description`) VALUES
(1, 'Fusion Feast Festival', '2024-01-20', 'Experience the ultimate fusion of flavors with recipes from around the world.'),
(2, 'Chef’s Special Showcase', '2024-02-15', 'A live event featuring signature dishes by top chefs in the community.'),
(3, 'Global Recipe Day', '2024-03-10', 'Celebrate FoodFusion’s diverse recipe collection with exclusive new dishes.'),
(4, 'Cook & Connect', '2024-04-05', 'A community gathering to share recipes, tips, and culinary stories.'),
(5, 'FoodFusion Awards Night', '2024-05-25', 'Honoring the best recipes, videos, and contributors of the year.'),
(6, 'Cooking Workshop', '2025-02-01', 'Learn basic cooking skills'),
(7, 'Recipe Contest', '2025-03-15', 'Participate and win prizes'),
(8, 'Food Photography', '2025-04-10', 'Tips on food photography'),
(9, 'Vegan Cooking Demo', '2025-05-05', 'Vegan recipe demonstrations');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `ingre_id` int(11) NOT NULL,
  `ingre_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`ingre_id`, `ingre_name`) VALUES
(1, 'Rice'),
(2, 'Soy Sauce'),
(3, 'Wasabi'),
(4, 'Noodles'),
(5, 'Rice'),
(6, 'Soy Sauce'),
(7, 'Ginger'),
(8, 'Garlic'),
(9, 'Vegetables'),
(10, 'Rice'),
(11, 'Fish'),
(12, 'Seaweed'),
(13, 'Noodles'),
(14, 'Pork'),
(15, 'Eggs'),
(16, 'Shrimp'),
(17, 'Flour'),
(18, 'Cabbage'),
(19, 'Chicken'),
(20, 'Tofu'),
(21, 'Chili Peppers'),
(22, 'Soy Sauce'),
(23, 'Vinegar'),
(24, 'Ginger'),
(25, 'Garlic'),
(26, 'Sugar'),
(27, 'Scallions'),
(28, 'Duck'),
(29, 'Peanuts');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` int(11) NOT NULL,
  `recipe_name` varchar(255) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `recipe_img` varchar(255) DEFAULT NULL,
  `difficulty_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `recipe_name`, `country_id`, `recipe_img`, `difficulty_id`, `description`) VALUES
(1, 'Sushi', 1, 'sushi.jpg', 1, 'A traditional Japanese dish consisting of vinegared rice, raw fish, and other ingredients.'),
(2, 'Ramen', 1, 'ramen.jpg', 2, 'A Japanese noodle soup dish with a rich broth, noodles, and various toppings.'),
(3, 'Tempura', 1, 'tempura.jpg', 2, 'A Japanese dish of battered and deep-fried seafood or vegetables.'),
(4, 'Peking Duck', 2, 'peking_duck.jpg', 3, 'A famous Chinese dish known for its crispy skin and tender meat, served with pancakes.'),
(5, 'Sweet and Sour Pork', 2, 'sweet_sour_pork.jpg', 2, 'A popular Chinese dish featuring pork in a tangy, sweet, and sour sauce.'),
(6, 'Dumplings', 2, 'dumplings.jpg', 2, 'Chinese dumplings filled with a variety of meats and vegetables, often served with dipping sauces.'),
(7, 'Okonomiyaki', 1, 'okonomiyaki.jpg', 2, 'A Japanese savory pancake made with cabbage, meat, and various toppings.'),
(8, 'Takoyaki', 1, 'takoyaki.jpg', 1, 'A popular Japanese street food, small round balls filled with diced octopus and batter.'),
(9, 'Kung Pao Chicken', 2, 'kung_pao_chicken.jpg', 2, 'A classic Sichuan dish with spicy chicken, peanuts, and vegetables.'),
(10, 'Mapo Tofu', 2, 'mapo_tofu.jpg', 3, 'A spicy and flavorful tofu dish with minced meat and Sichuan peppercorn.');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_ingredient`
--

CREATE TABLE `recipe_ingredient` (
  `id` int(11) NOT NULL,
  `ingre_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe_ingredient`
--

INSERT INTO `recipe_ingredient` (`id`, `ingre_id`, `recipe_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 3),
(8, 8, 3),
(9, 19, 4),
(10, 13, 4),
(11, 15, 4),
(12, 5, 5),
(13, 14, 5),
(14, 17, 5),
(15, 8, 6),
(16, 5, 6),
(17, 16, 6),
(18, 8, 7),
(19, 9, 7),
(20, 6, 7),
(21, 8, 8),
(22, 6, 8),
(23, 7, 8),
(24, 10, 9),
(25, 20, 9),
(26, 12, 9),
(27, 11, 10),
(28, 12, 10),
(29, 13, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `failed_attempts` int(11) DEFAULT 0,
  `lockout_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `failed_attempts`, `lockout_time`) VALUES
(1, 'htay', 'aung', 'test@gmail.com', '3333333', 1, NULL),
(2, 'htay', 'aung', 'htaya2852003@gmail.com', '2222222', 4, '2025-01-21 09:50:12'),
(4, 'htay', 'htay', 'aung@gmail.com', 'yyyyyyy', 0, NULL),
(5, 'htay', 'gyi', 'ngwe@gmail.com', '$2y$10$1uD5dBaoei16fO5p7lWlje/BjCMJ3Ob6OHRACm.HaYMs5G3kxuiJC', 0, NULL),
(6, 'kyan', 'kyaung', 'kyan@gmail.com', '$2y$10$8XTJlrxgwRvGSmbKfq9ioeMpSeHSYmIVxnFUZ1V5uohRm9W8AMMRe', 0, NULL),
(7, 'Myo', 'Htet', 'myo@gmail.com', '$2y$10$/1MbyVL2Dt75tWCu8cIFYOYCX2sjdoI4T97WViyrG5aWAhfPDRMD6', 4, '2025-01-23 02:45:08'),
(10, 'Aung', 'Aung', 'aungaung@gmail.com', '$2y$10$QGuKrDaTQhjacs7p.Jn3FuYP6gwaMfyPJjPx2O/yVbZNAhQY3JGCG', 0, NULL),
(11, 'Willy', 'Yan', 'willy@gmail.com', '$2y$10$b3jLi/kuBzlsWDldk44O9.sp2uHgj6aelY/TzR8QDLYRlylnMc/Z6', 0, NULL),
(15, 'Min', 'Khant', 'min@gmail.com', '$2y$10$F9d7gNaSZ1rooXenT96QjudqsoW4XKOZo7c/rsuO8iJrwJkjpTwjW', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `recipe_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `communitycookbook`
--
ALTER TABLE `communitycookbook`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `difficulty`
--
ALTER TABLE `difficulty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`ingre_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `difficulty_id` (`difficulty_id`);

--
-- Indexes for table `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingre_id` (`ingre_id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `communitycookbook`
--
ALTER TABLE `communitycookbook`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `difficulty`
--
ALTER TABLE `difficulty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `ingre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `communitycookbook`
--
ALTER TABLE `communitycookbook`
  ADD CONSTRAINT `communitycookbook_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `communitycookbook_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`);

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `recipe_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `recipe_ibfk_2` FOREIGN KEY (`difficulty_id`) REFERENCES `difficulty` (`id`);

--
-- Constraints for table `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
  ADD CONSTRAINT `recipe_ingredient_ibfk_1` FOREIGN KEY (`ingre_id`) REFERENCES `ingredient` (`ingre_id`),
  ADD CONSTRAINT `recipe_ingredient_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`);

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
