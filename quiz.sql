-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2022 at 04:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `challenge`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawab`
--

CREATE TABLE `jawab` (
  `id` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `soal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawab`
--

INSERT INTO `jawab` (`id`, `jawaban`, `soal_id`, `user_id`) VALUES
(71, 'test normal', 1, 1),
(72, 'normal brop', 2, 1),
(73, 'nomrmal ga sih?', 1, 1),
(74, 'norml doang', 2, 1),
(75, 'anda', 1, 1),
(76, 'insert seklai lagi', 1, 1),
(77, 'asna', 1, 1),
(78, 'saa', 2, 1),
(79, 'asna', 1, 1),
(80, 'saa', 2, 1),
(81, 'matap', 1, 1),
(82, 'mantap', 2, 1),
(83, 'mantap', 1, 1),
(84, 'mapas', 2, 1),
(85, 'hasus', 1, 1),
(86, 'harusnya 40 ya', 2, 1),
(87, 'harusa 40', 1, 1),
(88, 'itupin jika masuk', 2, 1),
(89, 'harusa 40', 1, 1),
(90, 'oke fix poin to point', 2, 1),
(91, 'asak', 1, 1),
(92, 'sata', 2, 1),
(93, 'sas', 1, 1),
(94, 'kas', 2, 1),
(95, '70', 1, 1),
(96, 'harusnya ya', 2, 1),
(97, '70', 1, 1),
(98, 'harusnya ya', 2, 1),
(99, '70', 1, 1),
(100, 'harusnya ya', 2, 1),
(101, 'sala', 1, 1),
(102, 'as', 2, 1),
(103, 'sala', 1, 1),
(104, 'as', 2, 1),
(105, 'sala', 1, 1),
(106, 'as', 2, 1),
(107, 'asas', 1, 1),
(108, 'aas', 2, 1),
(109, 'asas', 1, 1),
(110, 'aas', 2, 1),
(111, 'asas', 1, 1),
(112, 'aas', 2, 1),
(113, 'as', 1, 1),
(114, 'aaa', 2, 1),
(115, 'sas', 1, 1),
(116, 'asas', 2, 1),
(117, 'sas', 1, 1),
(118, 'asas', 2, 1),
(119, 'sas', 1, 1),
(120, 'asas', 2, 1),
(121, 'sas', 1, 1),
(122, 'asas', 2, 1),
(123, 'Ir. Soekarno', 1, 1),
(124, 'antara', 2, 1),
(125, 'Ir. Soekarno', 1, 1),
(126, 'hausnya 80', 2, 1),
(127, 'Ir. Soekarno', 1, 1),
(128, 'hausnya 80', 2, 1),
(129, 'Ir. Soekarno', 1, 1),
(130, 'hausnya 80', 2, 1),
(131, 'Ir. Soekarno', 1, 1),
(132, 'hausnya 80', 2, 1),
(133, 'Ir. Soekarno', 1, 1),
(134, 'hausnya 80', 2, 1),
(135, 'Ir. Soekarno', 1, 1),
(136, 'harusnya 230', 2, 1),
(137, 'Ir. Soekarno', 1, 1),
(138, 'harusnya 260', 2, 1),
(139, 'Ir. Soekarno', 1, 1),
(140, 'harusanya 290', 2, 1),
(141, 'Ir. Soekarno', 1, 1),
(142, 'harusanya 290', 2, 1),
(143, 'Ir. Soekarno', 1, 1),
(144, 'harusnya 320', 2, 1),
(145, 'Ir. Soekarno', 1, 1),
(146, 'harusnya 320', 2, 1),
(147, 'Ir. Soekarno', 1, 1),
(148, 'harusanya 10', 2, 1),
(149, 'Ir. Soekarno', 1, 1),
(150, 'harusnya tetap 10', 2, 1),
(151, 'Tetap 10 kan ya', 1, 1),
(152, 'Moeh. Hatta', 2, 1),
(153, 'sata', 1, 1),
(154, 'asa', 2, 1),
(155, 'salah', 1, 1),
(156, 'ass', 1, 1),
(157, 'ass', 1, 1),
(158, 'as', 2, 1),
(159, 'ass', 1, 1),
(160, 'asas', 2, 1),
(161, 'harussa', 1, 1),
(162, 'nol ya', 2, 1),
(163, 'Ir. Soekarno', 1, 1),
(164, 'harusnya 10', 2, 1),
(165, 'Ir. Soekarno', 1, 1),
(166, 'Moeh. Hatta', 2, 1),
(167, 'harusanya null', 1, 1),
(168, 'salha semua', 2, 1),
(169, 'Ir. Soekarno', 1, 1),
(170, 'bener satua', 2, 1),
(171, 'Ir. Soekarno', 1, 1),
(172, 'Moeh. Hatta', 2, 1),
(173, 'Ir. Soekarno', 1, 1),
(174, 'Ir. Soekarno', 1, 1),
(175, 'Ir. Soekarno', 1, 1),
(176, 'Ir. Soekarno', 1, 1),
(177, 'Ir. Soekarno', 1, 1),
(178, 'Moeh. Hatta', 2, 1),
(179, 'Ir. Soekarno', 1, 1),
(180, 'Ir. Soekarno', 1, 1),
(181, 'salah', 1, 1),
(182, 'salah', 2, 1),
(183, 'salah', 1, 1),
(184, 'salah', 2, 1),
(185, 'Salah', 1, 1),
(186, 'Moeh. Hatta', 2, 1),
(187, 'Ir. Soekarno', 1, 1),
(188, 'Moeh. Hatta', 2, 1),
(189, 'Ir. Soekarno', 1, 1),
(190, 'Ir. Soekarno', 1, 1),
(191, 'Ir. Soekarno', 1, 1),
(192, 'haerusa 10', 1, 1),
(193, 'Moeh. Hatta', 2, 1),
(194, 'Ir. Soekarno', 1, 1),
(195, 'Moeh. Hatta', 2, 1),
(196, 'harusss 10', 1, 1),
(197, 'Moeh. Hatta', 2, 1),
(198, 'Ir. Soekarno', 1, 1),
(199, 'Ir. Soekarno', 1, 1),
(200, 'Moeh. Hatta', 2, 1),
(201, 'Ir. Soekarno', 1, 1),
(202, 'Moeh. Hatta', 2, 1),
(203, 'Ir. Soekarno', 1, 1),
(204, 'Moeh. Hatta', 2, 1),
(205, 'Ir. Soekarno', 1, 1),
(206, 'Moeh. Hatta', 2, 1),
(207, 'Ir. Soekarno', 1, 1),
(208, 'Moeh. Hatta', 2, 1),
(209, 'Ir. Soekarno', 1, 1),
(210, 'Moeh. Hatta', 2, 1),
(211, 'Ir. Soekarno', 1, 1),
(212, 'Moeh. Hatta', 2, 1),
(213, 'Ir. Soekarno', 1, 1),
(214, 'Moeh. Hatta', 2, 1),
(215, 'Ir. Soekarno', 1, 1),
(216, 'Moeh. Hatta', 2, 1),
(217, 'Ir. Soekarno', 1, 1),
(218, 'Moeh. Hatta', 2, 1),
(219, 'Ir. Soekarno', 1, 1),
(220, 'Moeh. Hatta', 2, 1),
(221, 'Ir. Soekarno', 1, 1),
(222, 'Moeh. Hatta', 2, 1),
(223, 'Ir. Soekarno', 1, 1),
(224, 'Moeh. Hatta', 2, 1),
(225, 'salah', 1, 1),
(226, 'haru nu;;', 2, 1),
(227, 'Ir. Soekarno', 1, 1),
(228, 'haaeus 10', 2, 1),
(229, 'Ir. Soekarno', 1, 1),
(230, 'Moeh. Hatta', 2, 1),
(231, 'Sakit', 1, 1),
(232, 'asas', 2, 1),
(233, '', 3, 1),
(234, 'Unggas ', 3, 1),
(235, 'qwo', 1, 1),
(236, 'asa', 2, 1),
(237, 'qwo', 1, 1),
(238, 'asa', 2, 1),
(239, 'Ir. Soekarno', 1, 1),
(240, 'Sasa', 2, 1),
(241, 'Ir. Soekarno', 1, 1),
(242, 'Sasa', 2, 1),
(243, 'as', 1, 1),
(244, 'as', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE `point` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `quis_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `point`
--

INSERT INTO `point` (`id`, `total`, `quis_id`, `user_id`) VALUES
(13, 0, 1, 1),
(14, 10, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quis`
--

CREATE TABLE `quis` (
  `id` int(11) NOT NULL,
  `judul` varchar(32) NOT NULL,
  `sub_judul` varchar(32) NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quis`
--

INSERT INTO `quis` (`id`, `judul`, `sub_judul`, `deskripsi`, `waktu`) VALUES
(1, 'Soal IPS', 'Soal ujian IPS', 'Soal unjian IPA semester 1', '21 Oct 2022'),
(2, 'Soal IPA', 'Soal ujian IPA', 'Soal unjian IPA semester 1', '22 Oct 2022');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `soal` text NOT NULL,
  `jawab` text NOT NULL,
  `poin` int(2) NOT NULL,
  `id_quis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `soal`, `jawab`, `poin`, `id_quis`) VALUES
(1, 'Siapakah nama proklamator indonesia', 'Ir. Soekarno', 10, 1),
(2, 'Siapakah nama wapres pertama indonesia', 'Moeh. Hatta', 10, 1),
(3, 'Bebek termasuk hewan?', 'Unggas', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(34) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawab`
--
ALTER TABLE `jawab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quis`
--
ALTER TABLE `quis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
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
-- AUTO_INCREMENT for table `jawab`
--
ALTER TABLE `jawab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `point`
--
ALTER TABLE `point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `quis`
--
ALTER TABLE `quis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
