-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 09:17 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Vishwas', 'vishwasmoorjani02@gmail.com ', '$2y$10$Y76G1zryM8Bpzrp..XgjxOD0eA1.DogEWZwRqgqGaagPW2S/jtT7u', '2022-01-19 03:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `challenge`
--

CREATE TABLE `challenge` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `game` varchar(30) NOT NULL,
  `players` int(11) NOT NULL,
  `room` varchar(10) NOT NULL,
  `winning` int(11) NOT NULL,
  `bet_amount` int(11) NOT NULL,
  `bets` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challenge`
--

INSERT INTO `challenge` (`id`, `name`, `game`, `players`, `room`, `winning`, `bet_amount`, `bets`, `user`, `created_at`) VALUES
(1, '0', 'Ludo', 4, '987654321', 180, 20, 50, 1, '2022-01-19 03:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `picture` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `link`, `picture`, `cover`, `created_at`) VALUES
(1, 'Ludo', 'https://play.google.com/store/apps/details?id=com.ludo.king', 'ludo.png', 'ludocover.png', '2022-01-19 03:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `challenge` int(11) NOT NULL,
  `bet` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user`, `challenge`, `bet`, `status`, `created_at`) VALUES
(1, 1, 1, 1, 'win', '2022-01-19 03:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `monthly`
--

CREATE TABLE `monthly` (
  `id` int(11) NOT NULL,
  `newsletter` text NOT NULL,
  `global` text NOT NULL,
  `trf_club` text NOT NULL,
  `trf_member` text NOT NULL,
  `phe` text NOT NULL,
  `mphf` text NOT NULL,
  `maj` text NOT NULL,
  `aks` text NOT NULL,
  `asha` text NOT NULL,
  `new` text NOT NULL,
  `mem_term` text NOT NULL,
  `any` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthly`
--

INSERT INTO `monthly` (`id`, `newsletter`, `global`, `trf_club`, `trf_member`, `phe`, `mphf`, `maj`, `aks`, `asha`, `new`, `mem_term`, `any`, `status`) VALUES
(1, 'yes', 'dfgh', 'fdhsj', 'dfsf', 'sjdkfh', 'sdhkjfh', 'hfdskhf', 'sdfjksdh', 'fhsdkfhds', 'sdhfkjs', 'dshfksjd', 'hksdf', 0),
(2, 'yes', 'asjd', 'jsdhf', 'sdjkfh', 'sdjfh', 'sdkfhsk', 'asdjfksh', 'dhsfkj', 'sfchks', 'sdfkhj', 'sdfhkj', 'shdkj', 0);

-- --------------------------------------------------------

--
-- Table structure for table `proof`
--

CREATE TABLE `proof` (
  `id` int(11) NOT NULL,
  `challenge` int(11) NOT NULL,
  `proof` text NOT NULL,
  `user` int(11) NOT NULL,
  `winning` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proof`
--

INSERT INTO `proof` (`id`, `challenge`, `proof`, `user`, `winning`, `created_at`) VALUES
(1, 1, 'proof.png', 1, 180, '2022-01-19 03:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  `type` varchar(20) NOT NULL DEFAULT 'deposit',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user`, `amount`, `type`, `created_at`) VALUES
(1, 1, 0, 'deposit', '2022-01-19 03:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `club` text NOT NULL,
  `designation` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `doj` date NOT NULL,
  `user_id` text NOT NULL,
  `password` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `club`, `designation`, `phone`, `doj`, `user_id`, `password`, `status`) VALUES
(1, 'Vishwas Moorjani', 'Club 1', 'a', '+91987654321', '2021-08-23', 'info@buyyourmart.com', '$2y$10$Y76G1zryM8Bpzrp..XgjxOD0eA1.DogEWZwRqgqGaagPW2S/jtT7u', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `challenge`
--
ALTER TABLE `challenge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly`
--
ALTER TABLE `monthly`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proof`
--
ALTER TABLE `proof`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `challenge`
--
ALTER TABLE `challenge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `monthly`
--
ALTER TABLE `monthly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proof`
--
ALTER TABLE `proof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
