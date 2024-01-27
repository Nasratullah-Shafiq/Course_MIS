-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 05:26 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `change`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `About_ID` int(11) NOT NULL,
  `Heading` varchar(225) NOT NULL,
  `Body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`About_ID`, `Heading`, `Body`) VALUES
(1, 'CHANGE English Language Center', 'CHANGE English Language Center is an international and standard system Through this system you can participate online Test of English Language Like TOEFL and IELTS Systems.'),
(3, 'Vision and Scope', 'I am Just Posting this for Testing \nI am Just Posting this for Testing \nI am Just Posting this for Testing'),
(4, 'jfjhgf', 'fgfhfkghg hg kg kj ggl jh \r\ng \r\n   ggkjgkjhgkjhg  k   gj  hkghfgf jf hj f jfhk \r\n\r\n cfjfgjfj fk'),
(5, 'This is Another testing', 'This is Another testing\r\nThis is Another testing\r\nThis is Another testing\r\nThis is Another testing\r\nThis is Another testing\r\nThis is Another testing\r\nThis is Another testing\r\nThis is Another testing\r\nThis is Another testing');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `Ad_ID` int(11) NOT NULL,
  `Heading` varchar(255) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`Ad_ID`, `Heading`, `Image`, `Status`) VALUES
(2, 'I am Just Posting this for Testing', '29600.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `Audio_ID` int(11) NOT NULL,
  `Audio` text NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer0` varchar(255) NOT NULL,
  `Answer1` varchar(255) NOT NULL,
  `Answer2` varchar(255) NOT NULL,
  `Answer3` varchar(255) NOT NULL,
  `Right_Answer` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Book_ID` int(11) DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`Audio_ID`, `Audio`, `Question`, `Answer0`, `Answer1`, `Answer2`, `Answer3`, `Right_Answer`, `Description`, `Book_ID`, `Status`) VALUES
(7, '15868.wma', '', '', '', '', '', 0, 'ghfhg', 8, 1),
(21, '3381.wma', 'Question', 'A', 'B', 'C', 'D', 2, 'lllll', 9, 1),
(23, '21192.mp3', 'Question', 'A', 'B', 'C', 'D', 2, 'jkkjhjk', NULL, 1),
(24, '7174.mp3', 'khgkjhgjhjgkjghkhg', 'jhkhkj', 'hjgjhg', 'hljkh', 'jhgkjhg', 1, 'gfdhgdjghjgh hk kg kjg', NULL, 1),
(25, '29383.wma', 'jhgkjhg', 'gfkhg', 'hgkjhg', 'hgjjh', 'hgjhg', 2, 'hjgjg', 9, 1),
(26, '16186.mp3', 'jhljkh', 'hgkhjg', 'hgkjhg', 'hgjjh', 'hgjhg', 4, 'tyrytf', NULL, 1),
(27, '19463.mp3', 'khgkjhgjhjgkjghkhg', 'gkhjg', 'About Something Else', 'About Nothing', 'jhkjhk', 1, 'this', 8, 1),
(28, '8940.mp3', 'khgkjhgjhjgkjghkhg', 'jhkhkj', 'sdadsad', 'dsadsa', 'headings change to match the new theme', 1, 'This is belongs to OPEN-UP', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Book_ID` int(11) NOT NULL,
  `Book_Name` varchar(50) NOT NULL,
  `Duration` varchar(25) NOT NULL,
  `Fees` varchar(25) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Status` varchar(25) NOT NULL DEFAULT 'Publish'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book_ID`, `Book_Name`, `Duration`, `Fees`, `Image`, `Status`) VALUES
(8, 'Open-Up', '35 Days', '1060', '2003.jpg', 'Publish'),
(9, 'ROUND-2', '26 DAYS', '1230', '29053.jpg', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `Carousel_ID` int(11) NOT NULL,
  `Heading` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`Carousel_ID`, `Heading`, `Image`, `Status`) VALUES
(1, 'Admit yousefl Today', '29074.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Contact_ID` int(11) NOT NULL,
  `Full_Name` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_No` int(11) NOT NULL,
  `Message` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Contact_ID`, `Full_Name`, `Email`, `Phone_No`, `Message`, `Date`, `Status`) VALUES
(1, 'Nasratullah', 'nasratullah.shafiq@gmail.com', 76898764, ' hi i am sending this for testing', '2022-01-12 22:47:34', NULL),
(2, 'Karim', 'karim@gmail.com', 78987675, ' hi i am sending this for testing', '2022-01-12 22:50:07', NULL),
(4, 'Mukhtar Ahmad', 'mukhtar.shafiq@gmail.com', 789876564, 'This is just for checking whether it is working or not', '2022-01-12 23:06:14', NULL),
(5, 'Lissa', 'lissa@gmail.com', 78987655, 'else if($Full_Name != &quot;&quot;', '2022-01-12 23:20:20', NULL),
(6, 'hamid', 'hakim@gmail.com', 789696978, 'public function getContact(){\n		$query = &quot;SELECT * from Contact_Us where Status = \'0\'&quot;;\n		mysqli_set_charset($this-&gt;db-&gt;link, \'UTF8\');\n		$getResult = $this-&gt;db-&gt;select($query);\n		$total =$getResult-&gt;num_rows;\n		return $total;\n	}', '2022-01-13 00:05:28', '1'),
(8, 'Mukhtar Ahmad', 'mukhtar.shafiq@gmail.com', 78987788, 'I am posting this just for checking whether it is working or not', '2022-01-24 05:53:39', '1');

-- --------------------------------------------------------

--
-- Table structure for table `grammer`
--

CREATE TABLE `grammer` (
  `Grammer_ID` int(11) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer0` varchar(255) NOT NULL,
  `Answer1` varchar(255) NOT NULL,
  `Answer2` varchar(255) NOT NULL,
  `Answer3` varchar(255) NOT NULL,
  `Right_Answer` int(11) NOT NULL,
  `Book_ID` int(11) DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `grammer`
--

INSERT INTO `grammer` (`Grammer_ID`, `Question`, `Answer0`, `Answer1`, `Answer2`, `Answer3`, `Right_Answer`, `Book_ID`, `Status`) VALUES
(2, 'What is noun?', 'jhkhkj', 'sdadsad', 'dsadsa', 'safdsd', 1, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `News_ID` int(11) NOT NULL,
  `Heading` varchar(355) NOT NULL,
  `Body` text NOT NULL,
  `Source` varchar(150) NOT NULL,
  `File` varchar(250) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Visits` int(11) NOT NULL DEFAULT '0',
  `Status` varchar(10) NOT NULL DEFAULT 'Publish'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`News_ID`, `Heading`, `Body`, `Source`, `File`, `Date`, `Visits`, `Status`) VALUES
(31, 'First News Heading', 'Example News Heading\r\nExample News Heading\r\nExample News Heading\r\nExample News Heading\r\nExample News Heading\r\nExample News Heading', 'Exp', '10361.jpg', '2022-02-09 10:16:43', 0, 'Publish'),
(32, 'Second News Heading', 'Example News Heading\r\nExample News Heading\r\nExample News Heading', 'Someone', '12608.jpg', '2022-02-09 10:18:37', 0, 'Publish'),
(33, 'First New News Heading', 'First New News Heading\r\nFirst New News Heading\r\nFirst New News Heading\r\nFirst New News Heading\r\nFirst New News Heading\r\nFirst New News Heading', 'hgfhgf', '27012.jpg', '2022-02-09 10:31:38', 0, 'Publish'),
(40, 'Second News Headings', 'Second News Headings', 'Second News Headings', '24822.jpg', '2022-02-09 11:10:44', 0, 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `reading`
--

CREATE TABLE `reading` (
  `Reading_ID` int(11) NOT NULL,
  `Body` text NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer0` varchar(255) NOT NULL,
  `Answer1` varchar(255) NOT NULL,
  `Answer2` varchar(255) NOT NULL,
  `Answer3` varchar(255) NOT NULL,
  `Right_Answer` int(11) NOT NULL,
  `Book_ID` int(11) DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `reading`
--

INSERT INTO `reading` (`Reading_ID`, `Body`, `Question`, `Answer0`, `Answer1`, `Answer2`, `Answer3`, `Right_Answer`, `Book_ID`, `Status`) VALUES
(1, 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.\r\nTo make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.\r\nThemes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.', 'What was this reading about?', 'your headings change to match the new theme.', 'your headings change to match the new theme.', 'your headings change to match the new theme.', 'your headings change to match the new theme.', 1, 8, 1),
(2, 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document. To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries. Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles', 'What this reading was about?', 'headings change to match the new theme', 'headings change to match the new theme', 'headings change to match the new theme', 'headings change to match the new theme', 4, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `Research_ID` int(11) NOT NULL,
  `Heading` text NOT NULL,
  `Body` text NOT NULL,
  `File` varchar(255) NOT NULL,
  `User` varchar(25) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`Research_ID`, `Heading`, `Body`, `File`, `User`, `Status`) VALUES
(2, 'This is Just for testing', 'This is Just for testing\r\nThis is Just for testing\r\nThis is Just for testing\r\nThis is Just for testing\r\nThis is Just for testing\r\nThis is Just for testing', '6571.jpg', '', 'Active'),
(3, 'This is the Second Research', 'Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.\nTo make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.\nThemes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.\nSave time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.\nReading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.\nVideo provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.\nTo make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.\nThemes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.\nSave time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.\nReading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.\nVideo provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.\nTo make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.\nThemes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.\nSave time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.\nReading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.', '7294.jpg', '', 'Active'),
(4, 'jhg hgkjhg kjgjh h', 'gfjkhfk kj kjg jhg jhg fhgfhf scgfch g cfhgd jh hgf j h', '10427.jpg', 'Ahmad', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Role_ID` int(11) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `Status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Role_ID`, `Role`, `Status`) VALUES
(1, 'Administrator', 'Active'),
(2, 'Student', 'Active'),
(3, 'Standard', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_ID` int(11) NOT NULL,
  `St_ID` varchar(50) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `Marks` int(11) NOT NULL,
  `Grade` varchar(15) NOT NULL,
  `Father_Name` varchar(50) NOT NULL,
  `Phone_No` int(11) NOT NULL,
  `Book_ID` int(11) DEFAULT NULL,
  `Status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_ID`, `St_ID`, `Full_Name`, `Marks`, `Grade`, `Father_Name`, `Phone_No`, `Book_ID`, `Status`) VALUES
(1, '001A', 'Sanaullah', 88, 'B+', 'Khan Mohammad', 7898765, NULL, 'Active'),
(2, '01CE', 'Hamid', 60, 'C', 'Samim', 8998, NULL, 'Active'),
(4, '002A', 'Jameel', 95, 'A+', 'Karim', 7898765, NULL, 'Active'),
(5, '002A', 'Karimullah', 82, 'B', 'Samiullah', 78987654, NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Full_Name` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `Phone_No` int(11) NOT NULL,
  `Image` text NOT NULL,
  `Role_ID` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Full_Name`, `Username`, `Password`, `Email`, `Gender`, `Phone_No`, `Image`, `Role_ID`, `Status`) VALUES
(1, 'Hezbullah', 'Hezbullah', '924c2a1866f0d4ee9b69e4d5af48243a', 'hezbullah.kamal@gmail.com', 'Male', 77898765, '087294.jpg', 1, 1),
(3, 'Samiullah', 'Samiullah', '02b68e8504da564a23388b829d7fcd94', 'samiullah@gmail.com', 'Male', 756543564, 'team2.jpg', 2, 1),
(4, 'Mohammad Amin', 'Amin ', '4124bc0a9335c27f086f24ba207a4912', 'a@gmail.com', 'Male', 897866, 'team7.jpg', 2, 1),
(5, 'Mohammad Karim', 'Karim', '2167a6ac80340b69f3b05b800417d6c7', 'as@gmail.com', 'Male', 897866, 'team12.jpg', 2, 1),
(6, 'Samantha', 'Samantha', '3691308f2a4c2f6983f2880d32e29c84', 'samantha@gmail.com', 'Female', 897866, 'team8.jpg', 2, 1),
(8, 'Ahmad', 'Ahmad', '61243c7b9a4022cb3f8dc3106767ed12', 'ahmad@gmail.com', 'Male', 7898754, 'FB_IMG_1589305083687.jpg', 1, 1),
(120, 'Liza', 'Liza', '24f6e3dc1bbc5a5dfb1e5c6481b94eb7', 'liza@gmail.com', 'Female', 8987765, '5817.jpg', 2, 1),
(136, 'Nasratullah', 'Nasratullah', '0f837ae5d0ed640dfd615c4ea21d5f5c', 'mukhtar.shafiq@gmail.com', 'Male', 89876576, '14208.jpg', 2, 1),
(137, 'Salim', 'Salim', '87095051a3f46ff0f438118c7da2824d', 'Salim@mail.com', 'Male', 78987577, '28079.jpg', 2, 1),
(138, 'sdgsdf', 'asdsd', '17946929196fe8db90453ec82d5f52e7', 'sdfsdf@gmail.com', 'Male', 96345887, '14875.jpg', 2, 1),
(139, 'dsfaf', 'gdgfdddd', '22155b9b01be62d1238051e2c15859ce', 'nasratullah.shafiq@gmail.com', 'Male', 78987766, '10168.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viw_audio`
-- (See below for the actual view)
--
CREATE TABLE `viw_audio` (
`Audio_ID` int(11)
,`Audio` text
,`Question` varchar(255)
,`Answer0` varchar(255)
,`Answer1` varchar(255)
,`Answer2` varchar(255)
,`Answer3` varchar(255)
,`Right_Answer` int(11)
,`Description` varchar(255)
,`Book_Name` varchar(50)
,`Status` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viw_grammer`
-- (See below for the actual view)
--
CREATE TABLE `viw_grammer` (
`Grammer_ID` int(11)
,`Question` varchar(255)
,`Answer0` varchar(255)
,`Answer1` varchar(255)
,`Answer2` varchar(255)
,`Answer3` varchar(255)
,`Right_Answer` int(11)
,`Book_Name` varchar(50)
,`Status` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viw_reading`
-- (See below for the actual view)
--
CREATE TABLE `viw_reading` (
`Reading_ID` int(11)
,`Body` text
,`Question` varchar(255)
,`Answer0` varchar(255)
,`Answer1` varchar(255)
,`Answer2` varchar(255)
,`Answer3` varchar(255)
,`Right_Answer` int(11)
,`Book_Name` varchar(50)
,`Status` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viw_research`
-- (See below for the actual view)
--
CREATE TABLE `viw_research` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viw_student`
-- (See below for the actual view)
--
CREATE TABLE `viw_student` (
`Student_ID` int(11)
,`St_ID` varchar(50)
,`Full_Name` varchar(50)
,`Father_Name` varchar(50)
,`Marks` int(11)
,`Grade` varchar(15)
,`Phone_No` int(11)
,`Book_Name` varchar(50)
,`Status` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viw_users`
-- (See below for the actual view)
--
CREATE TABLE `viw_users` (
`User_ID` int(11)
,`Full_Name` varchar(30)
,`Username` varchar(30)
,`Password` varchar(50)
,`Email` varchar(100)
,`Gender` varchar(25)
,`Phone_No` int(11)
,`Image` text
,`Role` varchar(20)
,`Status` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viw_vocabulary`
-- (See below for the actual view)
--
CREATE TABLE `viw_vocabulary` (
`Vocabulary_ID` int(11)
,`Word` varchar(50)
,`Answer0` varchar(50)
,`Answer1` varchar(50)
,`Answer2` varchar(50)
,`Answer3` varchar(50)
,`Right_Answer` int(11)
,`Book_Name` varchar(50)
,`Status` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `vocabulary`
--

CREATE TABLE `vocabulary` (
  `Vocabulary_ID` int(11) NOT NULL,
  `Word` varchar(50) NOT NULL,
  `Answer0` varchar(50) NOT NULL,
  `Answer1` varchar(50) NOT NULL,
  `Answer2` varchar(50) NOT NULL,
  `Answer3` varchar(50) NOT NULL,
  `Right_Answer` int(11) NOT NULL,
  `Book_ID` int(11) DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `vocabulary`
--

INSERT INTO `vocabulary` (`Vocabulary_ID`, `Word`, `Answer0`, `Answer1`, `Answer2`, `Answer3`, `Right_Answer`, `Book_ID`, `Status`) VALUES
(2, 'School', 'hfgdg', 'hjgjhg', 'hljkh', 'maktab', 1, 8, 1);

-- --------------------------------------------------------

--
-- Structure for view `viw_audio`
--
DROP TABLE IF EXISTS `viw_audio`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viw_audio`  AS  select `audio`.`Audio_ID` AS `Audio_ID`,`audio`.`Audio` AS `Audio`,`audio`.`Question` AS `Question`,`audio`.`Answer0` AS `Answer0`,`audio`.`Answer1` AS `Answer1`,`audio`.`Answer2` AS `Answer2`,`audio`.`Answer3` AS `Answer3`,`audio`.`Right_Answer` AS `Right_Answer`,`audio`.`Description` AS `Description`,`book`.`Book_Name` AS `Book_Name`,`audio`.`Status` AS `Status` from (`audio` join `book` on((`audio`.`Book_ID` = `book`.`Book_ID`))) ;

-- --------------------------------------------------------

--
-- Structure for view `viw_grammer`
--
DROP TABLE IF EXISTS `viw_grammer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viw_grammer`  AS  select `grammer`.`Grammer_ID` AS `Grammer_ID`,`grammer`.`Question` AS `Question`,`grammer`.`Answer0` AS `Answer0`,`grammer`.`Answer1` AS `Answer1`,`grammer`.`Answer2` AS `Answer2`,`grammer`.`Answer3` AS `Answer3`,`grammer`.`Right_Answer` AS `Right_Answer`,`book`.`Book_Name` AS `Book_Name`,`grammer`.`Status` AS `Status` from (`grammer` join `book` on((`grammer`.`Book_ID` = `book`.`Book_ID`))) ;

-- --------------------------------------------------------

--
-- Structure for view `viw_reading`
--
DROP TABLE IF EXISTS `viw_reading`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viw_reading`  AS  select `reading`.`Reading_ID` AS `Reading_ID`,`reading`.`Body` AS `Body`,`reading`.`Question` AS `Question`,`reading`.`Answer0` AS `Answer0`,`reading`.`Answer1` AS `Answer1`,`reading`.`Answer2` AS `Answer2`,`reading`.`Answer3` AS `Answer3`,`reading`.`Right_Answer` AS `Right_Answer`,`book`.`Book_Name` AS `Book_Name`,`reading`.`Status` AS `Status` from (`reading` join `book` on((`reading`.`Book_ID` = `book`.`Book_ID`))) ;

-- --------------------------------------------------------

--
-- Structure for view `viw_research`
--
DROP TABLE IF EXISTS `viw_research`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viw_research`  AS  select `research`.`Research_ID` AS `Research_ID`,`research`.`Heading` AS `Heading`,`research`.`Body` AS `Body`,`research`.`File` AS `File`,`users`.`Full_Name` AS `Full_Name`,`research`.`Status` AS `Status` from (`research` join `users` on((`research`.`User_ID` = `users`.`User_ID`))) ;

-- --------------------------------------------------------

--
-- Structure for view `viw_student`
--
DROP TABLE IF EXISTS `viw_student`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viw_student`  AS  select `student`.`Student_ID` AS `Student_ID`,`student`.`St_ID` AS `St_ID`,`student`.`Full_Name` AS `Full_Name`,`student`.`Father_Name` AS `Father_Name`,`student`.`Marks` AS `Marks`,`student`.`Grade` AS `Grade`,`student`.`Phone_No` AS `Phone_No`,`book`.`Book_Name` AS `Book_Name`,`student`.`Status` AS `Status` from (`student` join `book` on((`student`.`Book_ID` = `book`.`Book_ID`))) ;

-- --------------------------------------------------------

--
-- Structure for view `viw_users`
--
DROP TABLE IF EXISTS `viw_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viw_users`  AS  select `users`.`User_ID` AS `User_ID`,`users`.`Full_Name` AS `Full_Name`,`users`.`Username` AS `Username`,`users`.`Password` AS `Password`,`users`.`Email` AS `Email`,`users`.`Gender` AS `Gender`,`users`.`Phone_No` AS `Phone_No`,`users`.`Image` AS `Image`,`role`.`Role` AS `Role`,`users`.`Status` AS `Status` from (`users` join `role` on((`users`.`Role_ID` = `role`.`Role_ID`))) ;

-- --------------------------------------------------------

--
-- Structure for view `viw_vocabulary`
--
DROP TABLE IF EXISTS `viw_vocabulary`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viw_vocabulary`  AS  select `vocabulary`.`Vocabulary_ID` AS `Vocabulary_ID`,`vocabulary`.`Word` AS `Word`,`vocabulary`.`Answer0` AS `Answer0`,`vocabulary`.`Answer1` AS `Answer1`,`vocabulary`.`Answer2` AS `Answer2`,`vocabulary`.`Answer3` AS `Answer3`,`vocabulary`.`Right_Answer` AS `Right_Answer`,`book`.`Book_Name` AS `Book_Name`,`vocabulary`.`Status` AS `Status` from (`vocabulary` join `book` on((`vocabulary`.`Book_ID` = `book`.`Book_ID`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`About_ID`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`Ad_ID`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`Audio_ID`),
  ADD KEY `audio_ibfk_1` (`Book_ID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Book_ID`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`Carousel_ID`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Indexes for table `grammer`
--
ALTER TABLE `grammer`
  ADD PRIMARY KEY (`Grammer_ID`),
  ADD KEY `FK_Grammer_ID` (`Book_ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_ID`);

--
-- Indexes for table `reading`
--
ALTER TABLE `reading`
  ADD PRIMARY KEY (`Reading_ID`),
  ADD KEY `FK_Reading_ID` (`Book_ID`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`Research_ID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Role_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_ID`),
  ADD KEY `student_ibfk_1` (`Book_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`),
  ADD KEY `fk_Role_ID` (`Role_ID`);

--
-- Indexes for table `vocabulary`
--
ALTER TABLE `vocabulary`
  ADD PRIMARY KEY (`Vocabulary_ID`),
  ADD KEY `Book_ID` (`Book_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `About_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `Ad_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `Audio_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `Book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `Carousel_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Contact_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `grammer`
--
ALTER TABLE `grammer`
  MODIFY `Grammer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `reading`
--
ALTER TABLE `reading`
  MODIFY `Reading_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `Research_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Role_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `vocabulary`
--
ALTER TABLE `vocabulary`
  MODIFY `Vocabulary_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `audio`
--
ALTER TABLE `audio`
  ADD CONSTRAINT `audio_ibfk_1` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`Book_ID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `grammer`
--
ALTER TABLE `grammer`
  ADD CONSTRAINT `FK_Grammer_ID` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`Book_ID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `reading`
--
ALTER TABLE `reading`
  ADD CONSTRAINT `FK_Reading_ID` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`Book_ID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_R_ID` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`Book_ID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`Book_ID`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_Role_ID` FOREIGN KEY (`Role_ID`) REFERENCES `role` (`Role_ID`);

--
-- Constraints for table `vocabulary`
--
ALTER TABLE `vocabulary`
  ADD CONSTRAINT `F_K_VID` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`Book_ID`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
