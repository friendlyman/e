-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2013 at 03:57 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elp`
--
CREATE DATABASE IF NOT EXISTS `elp` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `elp`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(30) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `location`) VALUES
(1, 'English Book For Grade 1', 'e1'),
(2, 'English Book For Grade 7', 'e7'),
(3, 'English Book For Grade 12', 'e12'),
(4, 'Mathematics Book For Grade 12', 'm12'),
(5, 'Art Book For Grade 12', 'a12'),
(6, 'History Book For Grade 12', 'h12'),
(7, 'Mathematics Book For Grade 7', 'm7');

-- --------------------------------------------------------

--
-- Table structure for table `entity_logo`
--

CREATE TABLE IF NOT EXISTS `entity_logo` (
  `id` int(30) NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `entity_logo`
--

INSERT INTO `entity_logo` (`id`, `logo`, `title`) VALUES
(1, '/logo/Rashid School Logo', 'Al-Rashid School'),
(2, '/logo/logo', 'Ministry of Education');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `id` int(30) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `name`) VALUES
(1, '1st'),
(2, '2nd'),
(3, '3rd'),
(4, '4th'),
(5, '5th'),
(6, '6th'),
(7, '7th'),
(8, '8th'),
(9, '9th'),
(10, '10th'),
(11, '11th'),
(12, '12th');

-- --------------------------------------------------------

--
-- Table structure for table `grade_subject`
--

CREATE TABLE IF NOT EXISTS `grade_subject` (
  `grade_id` int(30) NOT NULL,
  `subject_id` int(30) NOT NULL,
  `book_id` int(30) NOT NULL,
  PRIMARY KEY (`grade_id`,`subject_id`,`book_id`),
  KEY `subject_id` (`subject_id`),
  KEY `book_id` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grade_subject`
--

INSERT INTO `grade_subject` (`grade_id`, `subject_id`, `book_id`) VALUES
(1, 1, 1),
(7, 1, 2),
(12, 1, 3),
(7, 2, 7),
(12, 2, 4),
(12, 6, 5),
(12, 7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `gsvideo`
--

CREATE TABLE IF NOT EXISTS `gsvideo` (
  `gid` int(30) NOT NULL,
  `sid` int(30) NOT NULL,
  `vid` int(30) NOT NULL,
  PRIMARY KEY (`gid`,`sid`,`vid`),
  KEY `sid` (`sid`),
  KEY `vid` (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gsvideo`
--

INSERT INTO `gsvideo` (`gid`, `sid`, `vid`) VALUES
(1, 1, 1),
(7, 1, 4),
(12, 1, 2),
(12, 6, 3),
(12, 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `listitem`
--

CREATE TABLE IF NOT EXISTS `listitem` (
  `useridfk` int(20) NOT NULL,
  `id` int(30) NOT NULL,
  `idname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `imgsrc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`useridfk`,`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `listitem`
--

INSERT INTO `listitem` (`useridfk`, `id`, `idname`, `imgsrc`, `label`) VALUES
(14, 9, 'admission', 'Admin Page/Admission', 'Admission'),
(14, 10, 'certificate_management', 'Admin Page/Certificate Management', 'Certificate Management'),
(14, 11, 'fee_collection', 'Admin Page/Fee Collection', 'Fee Collection'),
(14, 12, 'parent_teacher_association', 'Admin Page/Parent Teacher Association', 'Parent Teacher Association'),
(14, 13, 'scholarship', 'Admin Page/Scholarship', 'Scholarship'),
(14, 14, 'student_attandance', 'Admin Page/Student Attandance', 'Student Attandance'),
(14, 15, 'transport', 'Admin Page/Transport', 'Transport'),
(14, 16, 'update_student_details', 'Admin Page/Update Student Details', 'Update Student Details'),
(15, 5, 'dicussion', 'Parent Page/Dicussion', 'Dicussion'),
(15, 6, 'latest_happenings', 'Parent Page/Latest Happenings', 'Latest Happenings'),
(15, 7, 'notification', 'Parent Page/Notification', 'Notification'),
(15, 8, 'parent_teacher', 'Parent Page/Parent Teacher', 'Parent Teacher'),
(15, 17, 'sms_alert', 'Parent Page/Sms Alert', 'Sms Alert'),
(15, 18, 'student_mark_report', 'Parent Page/Student Mark Report', 'Student Mark Report'),
(15, 19, 'task', 'Parent Page/Task', 'Task'),
(15, 20, 'updates', 'Parent Page/Updates', 'Updates'),
(16, 1, 'academic_calender', 'Student Page/Academic Calender', 'Academic Calender'),
(16, 2, 'assignment', 'Student Page/Assignment', 'Assignment'),
(16, 3, 'blog', 'Student Page/Blog', 'Blog'),
(16, 4, 'classes', 'Student Page/Classes', 'Classes'),
(16, 21, 'compliant_box', 'Student Page/Compliant Box', 'Compliant Box'),
(16, 22, 'file_report', 'Student Page/File Report', 'File Report'),
(16, 23, 'hostel', 'Student Page/Hostel', 'Hostel'),
(16, 24, 'inbox', 'Student Page/Inbox', 'Inbox'),
(16, 25, 'library', 'Student Page/Library', 'Library'),
(16, 26, 'marks_report', 'Student Page/Marks Report', 'Marks Report'),
(16, 27, 'my_profile', 'Student Page/My Profile', 'My Profile'),
(16, 28, 'news', 'Student Page/News', 'News'),
(16, 29, 'reminder', 'Student Page/Reminder', 'Reminder'),
(16, 30, 'teacher_rating', 'Student Page/Teacher Rating', 'Teacher Rating'),
(16, 31, 'transport', 'Student Page\\Transport', 'Transport'),
(17, 31, 'certificate_management', 'Staff Page/Certificate Management', 'Certificate Management'),
(17, 32, 'inbox', 'Staff Page/Inbox', 'Inbox'),
(17, 33, 'latest_happenings', 'Staff Page/Latest Happenings', 'Latest Happenings'),
(17, 34, 'my_profile', 'Staff Page/My Profile', 'My Profile'),
(17, 35, 'news', 'Staff Page/News', 'News'),
(17, 36, 'notifications', 'Staff Page/Notifications', 'Notifications'),
(17, 37, 'registration', 'Staff Page/Registration', 'Registration'),
(17, 38, 'reports', 'Staff Page/Reports', 'Reports'),
(18, 39, 'by_school', 'MOE Page/By School', 'By School'),
(18, 40, 'uae', 'MOE Page/UAE', 'UAE'),
(18, 41, 'zonal', 'MOE Page/Zonal', 'Zonal');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(30) NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'English'),
(2, 'Mathematics'),
(3, 'Religious Education'),
(4, 'Science'),
(5, 'Geography'),
(6, 'Art'),
(7, 'History'),
(8, 'Arabic');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `entity_id` int(30) NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userid`,`entity_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `userid` (`userid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `image`, `entity_id`, `password`, `salt`) VALUES
(14, 'admin', 'khaled-attia@hotmail.com', 'user/admin', 2, '2RgfT/d801warEzT7dfvTPwWaYRqr+ra', 'CWSuDwKP5j63tMch603JOdcd0jqxpX7t'),
(15, 'parent', 'friendlyman2011@gmail.com', 'user/parent', 1, 'qplHI3/eHlNOU32RIp7f6vpAHJmEI5xQ', 's0f5RQ6zknQjAmrAcmLw2g53A80TdsG+'),
(16, 'student', 'khaledi@alahligroup.com', 'user/student', 1, 'pwCwA/5n/SEebbzyamRUhUAN1seBIYYr', '6STnSZ+UwTiIiuPXeHAck84KJbN+e2dd'),
(17, 'staff', 'muddana.m@gmail.com', 'user/staff', 1, 'wYY3gUUKRNKAB6IijjAxxOeQE5XJZFBC', 'lSWDQnI8uU7jYE8f5X2G2kXvXQIhymeH'),
(18, 'moe', 'mallikarjuna@alahligroup.com', 'user/moe', 2, 'H7a9JwhUONZyrUVTSQAHtPR7mhxbgqNM', 'GUDYXXQ2UaWWwxoDbUISIJCJMrST77N0');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(30) NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `location`) VALUES
(1, 'English Video for Grade 1', 'a'),
(2, 'English Video for Grade 12', 'b'),
(3, 'Art Video for Grade 12', 'c'),
(4, 'English Video for Grade 7', 'd'),
(5, 'History Video for Grade 12', 'e');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grade_subject`
--
ALTER TABLE `grade_subject`
  ADD CONSTRAINT `grade_subject_ibfk_1` FOREIGN KEY (`grade_id`) REFERENCES `grade` (`id`),
  ADD CONSTRAINT `grade_subject_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `grade_subject_ibfk_3` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`);

--
-- Constraints for table `gsvideo`
--
ALTER TABLE `gsvideo`
  ADD CONSTRAINT `gsvideo_ibfk_1` FOREIGN KEY (`gid`) REFERENCES `grade_subject` (`grade_id`),
  ADD CONSTRAINT `gsvideo_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `grade_subject` (`subject_id`),
  ADD CONSTRAINT `gsvideo_ibfk_3` FOREIGN KEY (`vid`) REFERENCES `videos` (`id`);

--
-- Constraints for table `listitem`
--
ALTER TABLE `listitem`
  ADD CONSTRAINT `listitem_ibfk_1` FOREIGN KEY (`useridfk`) REFERENCES `users` (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
