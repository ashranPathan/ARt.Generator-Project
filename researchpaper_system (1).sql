-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2022 at 07:39 PM
-- Server version: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `researchpaper_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `author_name_1` varchar(255) NOT NULL,
  `author_name_2` varchar(255) NOT NULL,
  `author_name_3` varchar(255) NOT NULL,
  `author_name_4` varchar(255) NOT NULL,
  `abstract` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `introduction` varchar(255) NOT NULL,
  `parposed_system` varchar(255) NOT NULL,
  `conclusion` varchar(255) NOT NULL,
  `acknowledgment` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `review_of_related_work` varchar(255) NOT NULL,
  `figures` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `u_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `project_title`, `author_name_1`, `author_name_2`, `author_name_3`, `author_name_4`, `abstract`, `keyword`, `introduction`, `parposed_system`, `conclusion`, `acknowledgment`, `reference`, `review_of_related_work`, `figures`, `date_time`, `u_id`) VALUES
(1, 'Hierarchical Clustering of WWW Image Search Results\nUsing Visual, Textual and Link Information', 'Deng Cai', 'Xiaofei He', 'Wei-Ying Ma', 'Ji-Rong Wen', 'We consider the problem of clustering Web image search results.\nGenerally, the image search results returned by an image search\nengine contain multiple topics. Organizing the results into different semantic clusters facilitates users’ browsing. In this ', 'Web Image Search, Vision Based Page Segmentation, Spectral\r\nAnalysis, Image Clustering, Graph Model, Link Analysis, Search\r\nResult Organization', 'Existing web image search engines such as Google [12] and\r\nAltaVista [1] return a large quantity of search results, ranked by\r\ntheir relevance to the given query. Web users have to go through\r\nthe list and look for the desired ones. This is a time consumi', 'Most previous work on image clustering use visual features [10]\r\n[14][22]. They are usually based on small and static image databases (compared to the Internet). It is still a open problem to learn\r\nthe semantic meaning of an image from low level visual f', 'In this paper, we described a method to organize WWW image\r\nsearch results. Based on the web context, we proposed three representations for web image, i.e. representation based on visual\r\nfeature, representation based on textual feature and representation', 'The example query in the previous section illustrates the potential\r\nof the techniques described in this paper. In order to develop a\r\nmore detailed knowledge of the strengths and robustness of our\r\ntechniques, a more thorough experimental evaluation of o', '[1] AltaVista image search, http://www.altavista.com/image/\r\n[2] R. Baeza-Yates and B. Ribeiro-Neto, Modern Information\r\nRetrieval, Addison Wesley Longman 1999.\r\n[3] M. Belkin and P. Niyogi, “Laplacian eigenmaps and spectral\r\ntechniques for embedding and ', 'In this section we use an example query to illustrate the potential\r\nof the techniques described in this paper. The purpose of this\r\nsection is to provide people with an intuition on how our system\r\nworks based on the techniques we described previously. ', '', '2022-02-06 06:19:06', '1'),
(2, 'Towards a Relevant and Diverse Search of Social Images', 'Meng Wang', 'Member, IEEE', ', Xian-Sheng Hua', ' Hong-Jiang Zhang', 'Recent years have witnessed the great success of social\r\nmedia websites. Tag-based image search is an important approach\r\nto accessing the image content on these websites. However, the existing ranking methods for tag-based image search frequently return ', 'Diversity, social image search, tag', 'T HERE is an explosion of community-contributed multimedia content available online, such as Youtube, Flickr,\r\nand Zooomr. Such media repositories promote users to collaboratively create, evaluate, and distribute media information. They\r\nalso allow users ', 'According to the introduction in Sections III and IV, we\r\ncan see that the computational costs of relevance estimation,\r\nsemantic similarity computation, and the DRR algorithm all\r\nscale as . However, the relevance and similarity estimation can be accompl', '\r\nThis paper proposes a DRR scheme for social image search,\r\nwhich is able to simultaneously take relevance and diversity into\r\naccount. It leverages both visual information of images and the\r\nsemantic information of tags. The ranking algorithm optimizes\r', '\r\nWe have also conducted user study with the same 30 participants and the process introduced in Section V. Table VII illustrates the mean and standard deviations of the rating scores as\r\nwell as the ANOVA test results. From the numbers we can see\r\nthat th', '\r\n[1] D. Cai, X. He, Z. Li, W. C. Ma, and J. C. Wen, “Hierarchical clustering\r\nof WWW image search results using visual, textual and link information,” in Proc. ACM Multimedia Conf., 2004, pp. 952–959.\r\n[2] J. Carbonell and J. Goldstein, “The use of MMR, ', '\r\nThe parameter in (24) is empirically set to 100 for all\r\nqueries. We compare the results before and after reranking.\r\nFigs. 9 and 10 illustrate the top 20 results of two typical queries,\r\nand Fig. 11 illustrates the AP and ADP comparison. Previously\r\nwe', '140418.png', '2022-01-28 09:05:21', '3'),
(3, 'a', 'aAa', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '140418.png', '2022-01-28 09:04:23', '3'),
(4, 'test', 'test', 'test', 'test', 'test', 'hiiiiii', 'test', 'hi introduction', '', '', '', '', '', '', '2022-01-28 12:27:03', '6'),
(6, 'tets', 'test', 'test', 'test', 'test', 'testtt', 'testsetttetestettetst', 'etesttestqewr;ljhgfweasrgtyhjklhgfdsadfg', 'WDFGHJKNBVCXZaserdtfgyhjk,mnb vcxzasdf', 'gfdsawertyhujkmnbvcxsaswertyhjkm,nbvasdfghjk', 'lfdsaedrtyuklmnbvcxzsdftryjkl,mnbvcxzasd', 'fghjkl,mnbvcxzsdrtyuil;., asderftyujkl./', 'awertyuikl,mnbvcxaASDFGHJK', '', '2022-03-09 06:30:57', '3'),
(7, 'tygg', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-04-21 08:38:56', ''),
(8, 'Online Research Paper Generation System', 'Farheena Memon', 'Ashran Pathan', 'Taher Talwala', 'Sakshi Agale', 'In this project, we are going to build software that will generate automated research papers of different formats like IEEE, Elsevier, etc. The main aim of this software is to make research papers of different formats quicker and save the time of manually', '', '', 'Taking into consideration all of these, the solution is to make an automated research paper generation \r\nsystem that allows the user/researcher to simply add all the information to the form in the website and generates the entire paper in the chosen forma', '', '', '', '', '', '2022-04-22 00:11:33', '15'),
(9, 'Online Research Paper Generation System', 'Farheena Memon', 'Ashran Pathan', 'Taher Talwala', 'Sakshi Agale', 'abc', 'def', 'ghi', 'lmn', 'opq', 'rst', 'uvw', 'xyz', '', '2022-04-22 07:53:21', '15'),
(10, 'Online Research Paper Generation System', 'Farheena Memon', 'Ashran Pathan', 'Taher Talwala', 'Sakshi Agale', ',mnfd,h.mnb', '', '', '', '', '', '', '', '', '2022-04-22 08:04:43', '15'),
(11, 'abc', 'as', 'ads', 'dfe', '', '', '', '', '', '', '', '', '', '', '2022-05-14 02:08:12', '15');

-- --------------------------------------------------------

--
-- Table structure for table `elsevier_content`
--

CREATE TABLE `elsevier_content` (
  `id` bigint(20) NOT NULL,
  `u_id` varchar(255) DEFAULT NULL,
  `project_title` varchar(255) DEFAULT NULL,
  `author_name_1` varchar(255) DEFAULT NULL,
  `author_name_2` varchar(255) DEFAULT NULL,
  `author_name_3` varchar(255) DEFAULT NULL,
  `author_name_4` varchar(255) DEFAULT NULL,
  `abstract` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `background` text DEFAULT NULL,
  `implementation` text DEFAULT NULL,
  `result` text DEFAULT NULL,
  `conclusion` text DEFAULT NULL,
  `methods` text DEFAULT NULL,
  `requirement` text DEFAULT NULL,
  `authors_contribution` text DEFAULT NULL,
  `acknowldgment` text DEFAULT NULL,
  `reference` text DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `figures` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `elsevier_content`
--

INSERT INTO `elsevier_content` (`id`, `u_id`, `project_title`, `author_name_1`, `author_name_2`, `author_name_3`, `author_name_4`, `abstract`, `keyword`, `background`, `implementation`, `result`, `conclusion`, `methods`, `requirement`, `authors_contribution`, `acknowldgment`, `reference`, `date_time`, `figures`) VALUES
(1, '1', 'Automated Online College Admission Management System\n', 'Mehul Gupta', 'Assistant Profess', 'Kartik Iye', 'A.K.Kada', 'Automated Online College Admission Management System is software developed to work on web-platform to manage the\ncomplete admission procedures of various departments of an institution like, Finance Section Administration, Student section\nand many more sec', '- PRN(Personal Registration Number),CMS(Content Management System),JAVA\n', 'The main aim of our project is to advance the application\nwhich will be useful in college admission system. As\nAutomated Online College Admission Management\nSystem Project comprises The need of this system is to maintain a proper userfriendly communication. The scheme, which is created,\nnow generates all the details that are recalled manually.\nOnce the details are saved into the system there is no need\nfor numerous persons to deal with distinct sections. Only a\nparticular person is enough to preserve all the reports. The\nhaven can also be g', 'Admission is done manually through hands by ink\nand paper, which take large amount of time and causes\nstrain and struggle for the administration. It is important\nand needed to Design an online Student Admission\nmanagement System, to pace up the work and make it easy\nway to use system By shrinking those drawbacks we create\na web based application for handling the admission of the\nstudents. This is an online system which includes firstly the\nadmission of new student and by giving their preferred\nbranch according to their CET rank and by verifying and\nvalidating students documents and by continuing it to\nfurther process by generating the fee payment receipts,\ndocuments and saving it with the scanning and uploading\nthe student’s permanent unique id provided.', 'It is an online system for our college of the university. It\ncomprises of admin and student units. Each subunit of\noffice is a great helping hand for providing the actual\nprocesses for student like student and account. Executed\noutcome result of our College student\'s admission will be\ndone online and by verifying and validating the documents\nof the scanned copy by each of the student online by admin\nauthorities. Each and every process comprises of the', 'By this project we are making to heighten and implement\nthe improvements in college counselling system, which is\ngood and an easy way for reduce in hand work and making\nless handwork necessary. Students’ database can be\nretrieved within quick interval of time proper maintaining\nof records can be achieved. Our system presently aims on\ncreation of an good management system for the college\nuniversities. system will solve the problem of seat status by\nshowing dynamic display of the seat status after every\nsession of counselling, so that student can select their seat\npreference accordingly in an hassle freeway which will\nmake a clear impact for selecting their desired branch in an\nquick interval of time. This online counselling management\nsystem will do the best for the needful who are at very\nlarge distance and will clear information about the process\nso that counselling', 'Why we making this online system is to reduce the work\nload and easy the process and to give the desired\nfunctionality ingesting of time during the keeping the\nrecords of college admission procedure\nThe main objective in online Examination is main\nCounselling system is to offer an approach for easy and\nfertile management of all components included in\ncounselling. As developers We have perceived the ', 'haven can also be given as per the implementing needs of\nthe user and those needs are: big volumes of data can be\nstored with easy.. Records stored are modified with much\nease without taking numerous efforts. Stored data and\nprocedures can be easily modified .smooth calculations are\ndone, and the Main important benefit from this system is it\nprovides a good way of managing the thing in an better\nimplemented way and large amo', 'can be implemented in an smooth way and by reducing the\nefforts and by increasing the efficiency in the college work\nprocess', 'When the compilation of research paper comes to an end,\nthe time comes to acknowledge all the persons who have\nmade its success possible. It gives us immense pleasure to\nexpress our gratitude to each individual associated directly\nor indirectly with the successful compilation of the research\npaper. Our deepest gratitude is to our guide, Prof. A.K.\nKadam for his valued support and guidance. We will\nforever remain grateful for his valuable help and\ninspiration. The valuable discussion we had with him, the\npenetrating questions he had put to us, has all let to\ndevelopment for this Research paper. We are also grateful\nto Prof. Naveen Kumar for his upkeep and guidance that\nhave helped us to reach our horizons of thought and\nexpression. we wish to thank Head of Department, ', '[1] HuixiaWang,HuiZan “methodologies of student information management system.” 2010 report on college information processing.978-0-7695- 4196-9/10 IEEE. [2] Zhi-gang YUE, You JIN, “The development and design of the student management system based on the network stratergies”,2010 International Conference on management system , 978-0- 7695- 4136-5/10 2010 IEEE. [3] N. F. Col, (2007). Using Internet technology to improve and simplify counseling about university: The WISDOM website. Maturitas , 57, 95-99. [4] M.A. Norasiah and A. Norhayati. “Intelligent student information system”.4th International conference on computer technology proceduress, Shah Alam, singapore, 0-7803-7773-7/03 2003 IEEE. [5] Qiu Chang-li 2 Li Jing 3. “The developing procedures of student information counselling system based on B/S architecture”. 978-1- 4577- 1415-3/12 2012IEEE [6] S.R.Bharamagoudar1, Geeta R.B.2, S.G.Totad3 “Student online counselling system International Journal of Advanced Research in Computer Engineering Vol. 2, Issue 6, June 2013. ', '2022-03-03 05:08:35', 'https://researchpaper.mycloudspace.in/ie/image/elsevier_img/dfd3.PNG'),
(2, '1', 'rtyh', 'tyyy', 'hh', 'hhj', 'hh', 'hh', 'hh', 'hhh', 'hhh', 'hh', 'hh', 'hh', 'hh', 'hh', 'hh', 'hh', '2022-04-21 08:21:44', '979553.png'),
(3, '15', 'Online Research Paper Generation System', 'Farheena Memon', 'Ashran Pathan', 'Taher Talwala', 'Sakshi Agale', 'abc', 'def', 'ghi', 'jkl', 'mno', 'pqr', 'stu', 'vwx', 'xyz', 'hiofe', 'bgiu', '2022-04-22 07:54:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`) VALUES
(1, 'shivani', 's@gmail.com', '1234'),
(2, '', '', ''),
(3, 'xyz', 'xyz@gmail.com', 'xyz'),
(6, 'test', 'test@gmail.com', 'asd123!@#'),
(7, 'test', 'test@test.com', 'asd123!@#'),
(8, 'sam', 'sandesh.calibers@gmail.com', 'asd123!@#'),
(9, 'mayura', 'mayura.calibers@gmail.com', '123456'),
(10, 'Mayura', 'mayura.calibers@gmail.com', '123456'),
(15, 'Fari', 'farigmail.com', '#fari'),
(16, 'Fari', 'fari@gmail.com', '#fari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elsevier_content`
--
ALTER TABLE `elsevier_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `elsevier_content`
--
ALTER TABLE `elsevier_content`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
