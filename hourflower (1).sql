-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2019 at 10:25 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hourflower`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `imagename` text NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `category`, `imagename`, `price`, `discount`) VALUES
(1, 'Pretty Secrets', 'When a bunch of 10 ravishing Red Roses come together in such beautiful wrapping, it defines prettiness! And as Red Roses in million little ways reveal the deepest secrets, this bouquet is sure to reveal yours. Perfect for occasions such as Date Night, Birthday, Valentine\'s, Anniversaries, Mother\'s Day and more to spread love.', 'Roses', 'r1.jpg', 400, 0),
(2, 'Bundle Of Joys', 'This bouquet contains beautifully packed bunch of 12 Roses comprising of red, white and yellow color. This beautiful amalgamation represents joy and spreads smiles all around..', 'Roses', 'r2.jpg', 390, 0),
(3, 'Marvelous beauty', 'When it comes to expressing the true love for your beloved one, nothing comes before than a bunch of beautiful and red roses. If you really want to do take your relationship to the next level, this aesthetic gift will really help you.', 'Roses', 'r5.jpg', 250, 5),
(4, 'Pretty Secrets', 'When a bunch of 10 ravishing Red Roses come together in such beautiful wrapping, it defines prettiness! And as Red Roses in million little ways reveal the deepest secrets, this bouquet is sure to reveal yours. Perfect for occasions such as Date Night, Birthday, Valentine\'s, Anniversaries, Mother\'s Day and more to spread love.', 'Roses', 'r1.jpg', 400, 0),
(5, 'Bundle Of Joys', 'This bouquet contains beautifully packed bunch of 12 Roses comprising of red, white and yellow color. This beautiful amalgamation represents joy and spreads smiles all around..', 'Roses', 'r2.jpg', 390, 0),
(6, 'Marvelous beauty', 'When it comes to expressing the true love for your beloved one, nothing comes before than a bunch of beautiful and red roses. If you really want to do take your relationship to the next level, this aesthetic gift will really help you.', 'Roses', 'r5.jpg', 250, 5),
(7, 'Pretty Secrets', 'When a bunch of 10 ravishing Red Roses come together in such beautiful wrapping, it defines prettiness! And as Red Roses in million little ways reveal the deepest secrets, this bouquet is sure to reveal yours. Perfect for occasions such as Date Night, Birthday, Valentine\'s, Anniversaries, Mother\'s Day and more to spread love.', 'Roses', 'r1.jpg', 400, 0),
(8, 'Bundle Of Joys', 'This bouquet contains beautifully packed bunch of 12 Roses comprising of red, white and yellow color. This beautiful amalgamation represents joy and spreads smiles all around..', 'Roses', 'r2.jpg', 390, 0),
(9, 'Marvelous beauty', 'When it comes to expressing the true love for your beloved one, nothing comes before than a bunch of beautiful and red roses. If you really want to do take your relationship to the next level, this aesthetic gift will really help you.', 'Roses', 'r5.jpg', 250, 5),
(10, 'Pretty Secrets', 'When a bunch of 10 ravishing Red Roses come together in such beautiful wrapping, it defines prettiness! And as Red Roses in million little ways reveal the deepest secrets, this bouquet is sure to reveal yours. Perfect for occasions such as Date Night, Birthday, Valentine\'s, Anniversaries, Mother\'s Day and more to spread love.', 'Roses', 'r1.jpg', 400, 0),
(11, 'Bundle Of Joys', 'This bouquet contains beautifully packed bunch of 12 Roses comprising of red, white and yellow color. This beautiful amalgamation represents joy and spreads smiles all around..', 'Roses', 'r2.jpg', 390, 0),
(12, 'Marvelous beauty', 'When it comes to expressing the true love for your beloved one, nothing comes before than a bunch of beautiful and red roses. If you really want to do take your relationship to the next level, this aesthetic gift will really help you.', 'Roses', 'r5.jpg', 250, 5),
(13, 'Pretty Secrets', 'When a bunch of 10 ravishing Red Roses come together in such beautiful wrapping, it defines prettiness! And as Red Roses in million little ways reveal the deepest secrets, this bouquet is sure to reveal yours. Perfect for occasions such as Date Night, Birthday, Valentine\'s, Anniversaries, Mother\'s Day and more to spread love.', 'Roses', 'r1.jpg', 400, 0),
(14, 'Bundle Of Joys', 'This bouquet contains beautifully packed bunch of 12 Roses comprising of red, white and yellow color. This beautiful amalgamation represents joy and spreads smiles all around..', 'Roses', 'r2.jpg', 390, 0),
(15, 'Marvelous beauty', 'When it comes to expressing the true love for your beloved one, nothing comes before than a bunch of beautiful and red roses. If you really want to do take your relationship to the next level, this aesthetic gift will really help you.', 'Roses', 'r5.jpg', 250, 5),
(16, 'Pretty Secrets', 'When a bunch of 10 ravishing Red Roses come together in such beautiful wrapping, it defines prettiness! And as Red Roses in million little ways reveal the deepest secrets, this bouquet is sure to reveal yours. Perfect for occasions such as Date Night, Birthday, Valentine\'s, Anniversaries, Mother\'s Day and more to spread love.', 'Roses', 'r1.jpg', 400, 0),
(17, 'Bundle Of Joys', 'This bouquet contains beautifully packed bunch of 12 Roses comprising of red, white and yellow color. This beautiful amalgamation represents joy and spreads smiles all around..', 'Roses', 'r2.jpg', 390, 0),
(18, 'Marvelous beauty', 'When it comes to expressing the true love for your beloved one, nothing comes before than a bunch of beautiful and red roses. If you really want to do take your relationship to the next level, this aesthetic gift will really help you.', 'Roses', 'r5.jpg', 250, 5),
(19, 'Pretty Secrets', 'When a bunch of 10 ravishing Red Roses come together in such beautiful wrapping, it defines prettiness! And as Red Roses in million little ways reveal the deepest secrets, this bouquet is sure to reveal yours. Perfect for occasions such as Date Night, Birthday, Valentine\'s, Anniversaries, Mother\'s Day and more to spread love.', 'Roses', 'r1.jpg', 400, 0),
(20, 'Bundle Of Joys', 'This bouquet contains beautifully packed bunch of 12 Roses comprising of red, white and yellow color. This beautiful amalgamation represents joy and spreads smiles all around..', 'Roses', 'r2.jpg', 390, 0),
(21, 'Marvelous beauty', 'When it comes to expressing the true love for your beloved one, nothing comes before than a bunch of beautiful and red roses. If you really want to do take your relationship to the next level, this aesthetic gift will really help you.', 'Roses', 'r5.jpg', 250, 5),
(22, 'Pretty Secrets', 'When a bunch of 10 ravishing Red Roses come together in such beautiful wrapping, it defines prettiness! And as Red Roses in million little ways reveal the deepest secrets, this bouquet is sure to reveal yours. Perfect for occasions such as Date Night, Birthday, Valentine\'s, Anniversaries, Mother\'s Day and more to spread love.', 'Roses', 'r1.jpg', 400, 0),
(23, 'Bundle Of Joys', 'This bouquet contains beautifully packed bunch of 12 Roses comprising of red, white and yellow color. This beautiful amalgamation represents joy and spreads smiles all around..', 'Roses', 'r2.jpg', 390, 0),
(24, 'Marvelous beauty', 'When it comes to expressing the true love for your beloved one, nothing comes before than a bunch of beautiful and red roses. If you really want to do take your relationship to the next level, this aesthetic gift will really help you.', 'Roses', 'r5.jpg', 250, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `name`, `email`, `password`) VALUES
(1, 1, 'Vivek', 'vivek78643@gmail.com', '803f3685a579c43e447c3d3fa47ce97c'),
(2, 0, 'qwerty', 'qwerty@gmail.com', '178901254108747c2a3047ee5579fd54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
