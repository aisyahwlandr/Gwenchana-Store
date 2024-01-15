-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 04:49 PM
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
-- Database: `gwenchana`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category_id` int(2) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `title`, `category_id`, `photo`) VALUES
(1, 'VALORANT', 2, 'image/valo.jpg'),
(2, 'MOBILE LEGENDS', 1, 'image/ml.png'),
(3, 'GENSHIN IMPACT', 2, 'image/genshin.png'),
(4, 'CLASH OF CLANS', 1, 'image/coc.png'),
(5, 'PUBGM', 1, 'image/pubg.png'),
(6, 'APEX LEGENDS', 2, 'image/apexlegends.png'),
(7, 'ARENA OF VALOR', 1, 'image/arenaofvalor.jpg'),
(8, 'CODM', 1, 'image/callofduty.jpg'),
(9, 'CS:GO', 2, 'image/cs.jpg'),
(10, 'FIFA MOBILE', 1, 'image/fifa1.jpg'),
(11, 'FREE FIRE', 1, 'image/freefire.png'),
(12, 'HONKAI STAR RAIL', 2, 'image/honkaistarrail.jpg'),
(13, 'RAGNAROK ONLINE', 1, 'image/ragnarokonline.jpeg'),
(14, 'STUMBLE GUYS', 1, 'image/stumble.jpg'),
(15, 'TOWER OF FANTASY', 2, 'image/toweroffantasy.jpg'),
(16, 'WILD RIFT', 1, 'image/wildrift.jpg'),
(17, 'EGGY PARTY', 1, 'image/egg.jpeg'),
(18, 'STEAM WALLET', 3, 'image/steam.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `desc1` text NOT NULL,
  `desc2` text NOT NULL,
  `desc3` text NOT NULL,
  `desc4` text NOT NULL,
  `desc5` text NOT NULL,
  `desc6` text NOT NULL,
  `desc7` text NOT NULL,
  `price1` varchar(50) NOT NULL,
  `price2` varchar(50) NOT NULL,
  `price3` varchar(50) NOT NULL,
  `price4` varchar(50) NOT NULL,
  `price5` varchar(50) NOT NULL,
  `price6` varchar(50) NOT NULL,
  `price7` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id`, `title`, `desc1`, `desc2`, `desc3`, `desc4`, `desc5`, `desc6`, `desc7`, `price1`, `price2`, `price3`, `price4`, `price5`, `price6`, `price7`, `photo`) VALUES
(1, 'VALORANT', '125 Points', '420 points', '700 Points', '1375 Points', '2400 Points', '4000 Points', '8150 Points', 'Rp 15.000', 'Rp 50.000', 'Rp 80.000', 'Rp 150.000', 'Rp 250.000', 'Rp 400.000', 'Rp 800.000', 'image/valopoints.png'),
(2, 'MOBILE LEGENDS', '3 Diamonds', '11 Diamonds + 1 Bonus', '25 Diamonds + 3 Bonus', '53 Diamonds + 6 Bonus', '154 Diamonds + 16 Bonus', '256 Diamonds + 40 Bonus', '503 Diamonds + 65 Bonus', 'Rp 1.300', 'Rp 3.688', 'Rp 8.436', 'Rp 16.872', 'Rp 48.507', 'Rp 84.360', 'Rp 158.175', 'image/mldiamonds.png'),
(3, 'GENSHIN IMPACT', '60 Genesis Crystal', '300 + 30 Genesis Crystal', '980 + 110 Genesis Crystal', '1980 + 260 Genesis Crystal', '3280 + 600 Genesis Crystal', '6480 + 1600 Genesis Crystal', 'Blessing of the Welkin Moon', 'Rp 16.500', 'Rp 81.000', 'Rp 255.000', 'Rp 489.000', 'Rp 815.000', 'Rp 1.629.000', 'Rp 81.000', 'image/genshingc.png'),
(4, 'CLASH OF CLANS', '80 + 8 Gems', '500 + 50 Gems', '1200 + 120 Gems', '2500 + 250 Gems', '6500 + 650 Gems', '14000 + 1400 Gems', 'Gold Pass', 'Rp 16.000', 'Rp 79.000', 'Rp 159.000', 'Rp 329.000', 'Rp 799.000', 'Rp 1.600.000', 'Rp 109.000', 'image/cocgems.png'),
(5, 'PUBGM', '30 + 7 UC', '60 + 16 UC', '300 + 76 UC', '600 + 180 UC', '1500 + 650 UC', '3000 + 1000 UC', '6000 + 2400 UC', 'Rp 7.000', 'Rp 14.000', 'Rp 70.000', 'Rp 140.000', 'Rp 350.000', 'Rp 700.000', 'Rp 1.400.000', 'image/pubguc.png'),
(6, 'APEX LEGENDS', '1000 Coin', '2000 Coin', '4000 Coin', '6000 Coin', '8000 Coin', '10000 Coin', 'Battlepass', 'Rp 127.000', 'Rp 257.800', 'Rp 619.800', 'Rp 810.000', 'Rp 1.375.000', 'Rp 1.600.000', 'Rp 159.000', 'image/apexcoins.png'),
(7, 'ARENA OF VALOR', '40 Voucher', '90 Voucher', '230 Voucher', '470 Voucher', '950 Voucher', '1430 Voucher', '2390 Voucher', 'Rp 10.000', 'Rp 20.000', 'Rp 50.000', 'Rp 100.000', 'Rp 200.000', 'Rp 300.000', 'Rp 500.000', 'image/aovvc.png'),
(8, 'CODM', '31 CP', '62 CP', '127 CP', '320 CP', '645 CP', '800 CP', '1373 CP', 'Rp 5.000', 'Rp 10.000', 'Rp 20.000', 'Rp 50.000', 'Rp 100.000', 'Rp 120.000', 'Rp 200.000', 'image/codmcp.png'),
(9, 'CS:GO', 'Fracture Case', 'Prisma Case', 'DZone Case', 'Recoil Case', 'Clutch Case', 'Nightmare Case', 'Dream Case', 'Rp 1.500', 'Rp 1.500', 'Rp 1.500', 'Rp 7.000', 'Rp 3.500', 'Rp 5.000', 'Rp 5.000', 'image/csgocase.png'),
(10, 'FIFA MOBILE', '40 + 8 FC Point', '100 + 20 Fc Point', '520 + 104 Fc Point', '1070 + 214 Fc Point', '2200 + 440 Fc Point', '5750 + 1150 Fc Point', '12000 + 2400 Fc Point', 'Rp 6.200', 'Rp 15.200', 'Rp 75.000', 'Rp 151.000', 'Rp 312.000', 'Rp 759.000', '1.620.000', 'image/fcpoints.png'),
(11, 'FREE FIRE', '5 Diamond', '12 Diamond', '50 Diamond', '70 Diamond', '140 Diamond', '355 Diamond', '720 Diamond', 'Rp 1.000', 'Rp 2.000', 'Rp 8.000', 'Rp 10.000', 'Rp 20.000', 'Rp 50.000', 'Rp 100.000', 'image/ffdiamonds.png'),
(12, 'HONKAI STAR RAIL', '60 Shards', '300 + 30 Shards', '980 + 110 Shards', '1980 + 260 Shards', '3280 + 600 Shards', ' 6480 + 1600 Shards', 'Supply Pass', 'Rp 16.000', 'Rp 79.000', 'Rp 249.000', 'Rp 479.000', 'Rp 799.000', 'Rp 1.600.000', 'Rp 79.000', 'image/honkaios.png'),
(13, 'RAGNAROK ONLINE', '2310 Diamond', '4990 Diamond', '10300 Diamond', '15600 Diamond', '31200 Diamond', '51370 Diamond', '160000 Diamond', 'Rp 75.000', 'Rp 160.000', 'Rp 500.000', 'Rp 1.000.000', 'Rp 1.600.000', 'Rp 5.000.000', 'Rp 10.000.000', 'image/ragranokdiamonds.png'),
(14, 'STUMBLE GUYS', '250 Gems', '800 Gems', '1600 Gems', '5000 Gems', '120 Token', '1300 Token', '5000 Token', 'Rp 12.000', 'Rp 31.000', 'Rp 55.000', 'Rp 125.000', 'Rp 37.000', 'Rp 315.000', 'Rp 800.000', 'image/stumblegems.png'),
(15, 'TOWER OF FANTASY', '60 Tanium', '300 Tanium', '1980 Tanium', '3280 Tanium', '6480 Tanium', '9980 Tanium', '12980 Tanium', 'Rp 13.000', 'Rp 66.000', 'Rp 399.000', 'Rp 666.000', 'Rp 1.300.000', 'Rp 2.000.000', '2.600.000', 'image/toftanium.png'),
(16, 'WILD RIFT', '105 Cores', '350 Cores', '585 Cores', '1135 Cores', '1660 Cores', '3010 Cores', '6210 Cores', 'Rp 14.500', 'Rp 47.500', 'Rp 76.000', 'Rp 142.500', 'Rp 199.500', 'Rp 342.000', 'Rp 712.500', 'image/wildriftcores.png'),
(17, 'EGGY PARTY', '10 Eggy Coin', '60 + 3 Eggy Coin', '120 + 6 Eggy Coin', '300 + 24 Eggy Coin', '700 + 57 Eggy Coin', '1380 + 144 Eggy Coin', '2080 + 216 Eggy Coin', 'Rp 2.200', 'Rp 13.000', 'Rp 26.000', 'Rp 65.000', 'Rp 151.000', 'Rp 299.000', 'Rp 450.000', 'image/eggycoins.png'),
(18, 'STEAM WALLET', '12000 Steam Wallet', '45000 Steam Wallet', '60000 Steam Wallet', '90000 Steam Wallet', '120000 Steam Wallet', '250000 Steam Wallet', '400000 Steam Wallet', 'Rp 12.800', 'Rp 48.000', 'Rp 64.000', 'Rp 96.000', 'Rp 128.000', 'Rp 267.000', 'Rp 427.000', 'image/steam.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idplayer` varchar(50) NOT NULL,
  `item` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
