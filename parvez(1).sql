-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 06:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parvez`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cell` varchar(15) DEFAULT NULL,
  `roll` varchar(5) DEFAULT NULL,
  `location` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `cell`, `roll`, `location`, `gender`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(78, 'Hudai khali', 'hudaikahli@habibialbi.com', '01715353923', '17', 'Uttara', 'Male', 'deee152f055aa955889a79c2d90b6b6a.jpg', 'active', '2024-01-01 16:38:24', NULL),
(82, 'love', 'love@sorobindu.com', '01458712457', '25', 'Badda', 'Female', '07265128ab6bc668d011ec131127f5c2.jpg', 'active', '2024-01-01 17:18:37', NULL),
(85, 'hug', 'hug@habibialbi.com', '01542879665', '12', 'Uttara', 'Female', 'd2ca2ce5d531985bf215e69f1a5a41ed.jpg', 'active', '2024-01-01 17:47:57', NULL),
(87, 'samim', 'shamim@habibialbi.com', '013125487', '54', 'Mohammadpur', 'Female', '507a1a2f5424753981da8257bca96eca.jpg', 'active', '2024-01-01 19:07:52', NULL),
(88, 'Amena Akter (Ety)', 'amena@habibialbi.com', '01345879458', '02', 'Uttara', 'Female', '8f0056d99d99f907a5fc1661218e6ec2.png', 'active', '2024-01-01 19:18:46', NULL),
(89, 'Amena Akter Ety', 'amenaakterety@habibialbi.com', '01712222222', '02', 'Mohammadpur', 'Female', '059a6af99b86956d1686b49733f033fa.jpg', 'active', '2024-01-01 20:37:06', NULL),
(91, 'samim43dddd', 'shamim22222@habibialbi.com', '01312548732232', '16666', 'Gualshan', 'Male', 'b490db79c46ac125c2f5237f28e05bee.jpg', 'active', '2024-01-01 21:57:18', NULL),
(92, 'Lavlysss', 'lavlyakter@sorobindu.com', '017122335566', '10', 'Mirpur', 'Female', '6cac58313ce8216d1a802c394622e0df.jpg', 'active', '2024-01-01 23:33:04', NULL),
(93, 'Lina Apa', 'linaapa@sorobindu.com', '0141519191', '51', 'Banani', 'Female', '7891249810cde4e39fe7273a83b207dc.png', 'active', '2024-01-02 00:00:03', NULL),
(94, 'Dina Boina', 'dinaboina@habibialbi.com', '0154879648', '12', 'Banani', 'Male', '17064efccd09dc4492abb97ed053ce48.jpg', 'active', '2024-01-02 00:00:52', NULL),
(95, 'Ruma Jaman', 'rumajaman@habibialbi.com', '0154879645', '14', 'Banani', 'Female', '2f5c0e5fbceee2e08018fedc29d452a9.jpg', 'active', '2024-01-02 00:01:48', NULL),
(96, 'Belayet Hossain 4', 'belayet@sorobindu.com', '015847963', '51', 'Gualshan', 'Female', '8e4d18018fed0d2b28587c4f2a11963a.png', 'active', '2024-01-02 00:02:40', NULL),
(97, 'Firoz Hasan', 'firoz@sorobindu.com', '015489796644', '12', 'Uttara', 'Male', '52d1811e9de6854b329641308b6a57aa.png', 'active', '2024-01-02 00:03:28', NULL),
(99, 'amina', 'porita@habibialbi.com', '013125457487', '54', 'Mohammadpur', 'Female', '12d729ce947b4d3f528b219dcf627ca0.png', 'active', '2024-01-02 00:38:15', NULL),
(100, 'samim', 'amina1111@sorobindu.com', '01548', '54', 'Uttara', 'Female', 'f434730bbd92e047f8d5d759bdf18782.png', 'active', '2024-01-02 00:41:28', NULL),
(101, 'alysha1111', 'amina1@sorobindu.com', '013125457487', '12', 'Uttara', 'Female', '1f5895e218aa85d110c9f70989e2d830.png', 'active', '2024-01-02 01:06:03', NULL),
(102, 'samim', 'shamim444@habibialbi.com', '013125457487', '12', 'Gualshan', 'Female', '24c9a9e72abcb71a5aab44b320ba9a44.jpg', 'active', '2024-01-02 01:29:33', NULL),
(103, 'samim', 'ssssshamim@habibialbi.com', '013125457487', '12', 'Uttara', 'Female', 'ed6d7e9d456385887f733ee9bc26218c.jpg', 'active', '2024-01-02 01:37:28', NULL),
(104, 'sdfkjahffah', 'sdfkjahffah@habibialbi.com', '013125457487', '02', 'Banani', 'Female', '95e0b47b0b062082442c2206ddedaa4d.jpg', 'active', '2024-01-02 01:39:51', NULL),
(105, 'samim', '43234@habibialbi.com', '0143143', '1', 'Gualshan', 'Female', 'e06b7cba33746843b5cf2a00883a3ea3.jpg', 'active', '2024-01-02 01:42:24', NULL),
(106, 'samim', 'shamim1111111111@habibialbi.com', '013125457487', '02', 'Gualshan', 'Female', '07aa61260cec7b088203091c006ea5da.jpg', 'active', '2024-01-02 01:46:35', NULL),
(107, 'samim', 'shamim222222222@habibialbi.com', '013125457487', '1', 'Mohammadpur', 'Male', '05ca0a65856df2ff8e2cd6a77569b818.pdf', 'active', '2024-01-02 01:47:55', NULL),
(108, 'samimSSSS', 'shamim7777@habibialbi.com', '013125487', '02', 'Uttara', 'Female', 'e383e1124b4ae4edc0f7374fec4d2370.jpg', 'active', '2024-01-02 01:49:16', NULL),
(109, 'amina', 'shamim121212@habibialbi.com', '013125457487', '02', 'Gualshan', 'Female', '65700ede7726446ff4cd8a5519af1bef.jpg', 'active', '2024-01-02 01:50:03', NULL),
(110, 'samimSSSS', 'shamim00000@habibialbi.com', '013125457487', '02', 'Mirpur', 'Female', 'f9505290b4000fe323c34ae17575e343.jpg', 'active', '2024-01-02 01:58:28', NULL),
(111, 'samim', 'shamim2222222222@habibialbi.com', '013125457487', '1', 'Banani', 'Female', 'ae6a86eeaca7d8a50b51a6eec524b9fd.jpg', 'active', '2024-01-02 01:59:37', NULL),
(112, 'samim', 'shamim11@habibialbi.com', '013125457487', '20', 'Mirpur', 'Female', 'fefb58dc8bc869bd21a1c83a97600842.jpg', 'active', '2024-01-02 02:09:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
