-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2015 at 03:49 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myscore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_score`
--

CREATE TABLE IF NOT EXISTS `tb_score` (
  `id` int(10) NOT NULL,
  `time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `team1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `score` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `team2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `status` enum('ยังไม่เริ่มแข่งขัน','กำลังแข่งขัน','จบการแข่งขัน') COLLATE utf8_unicode_ci NOT NULL,
  `tv` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_score`
--

INSERT INTO `tb_score` (`id`, `time`, `date`, `team1`, `score`, `team2`, `comment`, `status`, `tv`) VALUES
(1, '18.45', '19-09-2015', 'เชลซี', '2 - 0', 'อาร์เซน่อล', 'ทีเด็ดอาร์เซเฮแน่', 'จบการแข่งขัน', 'CTH STADIUM 4'),
(2, '21.00', '19-09-2015', 'แอสตัน วิลล่า', '0 - 1', 'เวสต์ บรอม', 'ทีเด็ดวิลล่ามาแน่', 'จบการแข่งขัน', 'CTH STADIUM 2'),
(3, '21.00', '19-09-2015', 'สวอนซี ซิตี้', '0 - 0', 'เอฟเวอร์ตัน', 'ทีเด็ดสวอนซีมีดี', 'จบการแข่งขัน', 'CTH STADIUM 1'),
(4, '21.00', '19-09-2015', 'นิวคาสเซิ่ล', '1 - 2', 'วัดฟอร์ด', 'ทีเด็ดนิวคาสเซิ่ลเก็บชัย', 'จบการแข่งขัน', 'CTH STADIUM 3'),
(5, '21.00', '19-09-2015', 'สโต๊ค ซิตี้', '2 - 2', 'เลสเตอร์ ซิตี้', 'ทีเด็ดเลสเตอร์เจอชัย', 'จบการแข่งขัน', 'CTH STADIUM 5'),
(6, '21.00', '19-09-2015', 'บอร์นมัธ', '2 - 0', 'ซันเดอร์แลนด์', 'ทีเด็ดบอร์นมัธซัดกระจาย', 'จบการแข่งขัน', 'CTH STADIUM 4'),
(7, '23.30', '19-09-2015', 'แมน.ซิตี้', '1 - 2', 'เวสต์แฮม', 'ทีเด็ดแมนซิตี้ดีแน่', 'จบการแข่งขัน', 'CTH STADIUM 4, PPTV HD'),
(8, '18.45', '26-09-2015', 'ท็อตแน่ม ฮ็อตสเปอร์ ', 'VS', 'แมนเชสเตอร์ ซิตี้', '.', 'ยังไม่เริ่มแข่งขัน', 'CTH STADIUM 5'),
(9, '21.00', '26-09-2015', 'เลสเตอร์ ซิตี้ ', 'VS', ' อาร์เซน่อล', '.', 'ยังไม่เริ่มแข่งขัน', 'CTH STADIUM 3'),
(10, '21.00', '26-09-2015', 'ลิเวอร์พูล', 'VS', ' แอสตัน วิลล่า', '.', 'ยังไม่เริ่มแข่งขัน', 'CTH STADIUM 2'),
(11, '21.00', '26-09-2015', 'แมนเชสเตอร์ ยูไนเต็ด ', 'VS', ' ซันเดอร์แลนด์', '.', 'ยังไม่เริ่มแข่งขัน', 'CTH STADIUM 1'),
(12, '21.00', '26-09-2015', 'เซาธ์แฮมป์ตัน ', 'VS', ' สวอนซี ซิตี้', '.', 'ยังไม่เริ่มแข่งขัน', 'CTH STADIUM 4'),
(13, '21.00', '26-09-2015', 'สโต๊ค ซิตี้ ', 'VS', ' บอร์นมัธ', '.', 'ยังไม่เริ่มแข่งขัน', 'CTH STADIUM X'),
(14, '21.00', '26-09-2015', 'เวสต์แฮม ยูไนเต็ด ', 'VS', ' นอริช ซิตี้', '.', 'ยังไม่เริ่มแข่งขัน', 'CTH STADIUM 5'),
(15, '23.30', '26-09-2015', 'นิวคาสเซิล ยูไนเต็ด ', 'VS', ' เชลซี', '.', 'ยังไม่เริ่มแข่งขัน', 'CTH STADIUM 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_score`
--
ALTER TABLE `tb_score`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_score`
--
ALTER TABLE `tb_score`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
