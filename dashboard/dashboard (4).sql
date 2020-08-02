-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 05:29 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `network`
--

CREATE TABLE `network` (
  `id` int(11) NOT NULL,
  `team` varchar(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `co_ordinator` varchar(100) NOT NULL,
  `mandays` int(50) NOT NULL DEFAULT '0',
  `start` date NOT NULL,
  `end` date DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `percentage` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `network`
--

INSERT INTO `network` (`id`, `team`, `name`, `co_ordinator`, `mandays`, `start`, `end`, `description`, `comment`, `status`, `percentage`) VALUES
(8, 'application', 'Enabling ATM Gateway to handle multiple networks', 'Mithun Kanty Dey', 298, '2018-12-15', '2019-10-09', NULL, 'GSD working for work-order', 'complete', 50),
(9, 'application', 'DMS Implementation', 'Mithun Kanty Dey & Zubair Abdullah', 251, '2019-01-01', NULL, NULL, 'Production server configuration on-going till 15th Oct\'19', 'on Progress', 40),
(10, 'csm', 'Call Centre - ITD (PCIDSS, E1, DR, UAT, Security by ISSM)', 'Zobair/Rashidul/Ashfaq/Zaman/Mojid', 135, '2019-01-01', NULL, 'To meet PCI DSS requirement & ITD Requirement.', 'On Process', 'On Progress', 50),
(11, 'infra', 'Backup Solution Upgradation', 'Moinul, Shuvo, Asraf, Rizvi', 151, '2019-01-01', NULL, 'Finincial Nego Going On', 'On Process', 'Initial', 10),
(12, 'infra', 'SQL Consolidation', 'Asraf, Shuvo, Utpal', 273, '2019-01-01', NULL, '7 DB migrated,Out of 9', 'On Process', 'On Progress', 10),
(13, 'issm', 'PCI DSS Renewal', 'Badrul Ahsan', 301, '2019-01-03', '2019-10-15', 'PCI-DSS Compliance Certificate states, businesses need to be reviewed annually to ensure compliance.', '\"On Process; Q1  & Q2 : Complied . Q3 Started   \"', 'complete', 100),
(14, 'issm', 'Mitigation Project  of Phase -1 IT security Risk Assessment & capacity planning', 'Badrul Ahsan', 86, '2019-02-15', NULL, 'This project is on assesing risk  of banks business critical systems. As per individual team commitment 40% of the pending gaps of Phase-1 need to be mitigated by June\'2019', '\"On Process i) Vulnerabilties shared with the related stakeholders on 04 May 2019. Teams are working, however there is no update to ISSM till today. \"', 'On Process', 40),
(16, 'software', 'Automation of Central Despatch Unit', 'none', 80, '2018-11-01', NULL, '\"To keep track of all the incoming and outgoing correspondences of UCB and outside entities. Timeline may be rescheduled.\"', 'UAT Done, Waiting for go-live from PMO', 'On Process', 95),
(17, 'software', 'LOPS Workflow', 'none', 90, '2018-09-18', NULL, '\"LOPS works with- - A/C opeing process tuning - DRU email with Branch & automatically - Workflow redistribution among team\"', '\"DRU email is done. Holted, Due to TD & RD Calculator Development\"', 'On Process', 95),
(18, 'network', 'F-5 Web Application Firewall', 'Uttam/Ehsan', 234, '2019-03-03', '2019-10-16', 'WO Placed & Imp. to be started from March', 'Planned Go-live  26/12/2019', 'complete', 100),
(19, 'network', 'IP Phone Upgradation', 'Mosharof/Naushad', 45, '2019-03-05', NULL, 'Procurement Process to be started on May', 'RFP will be float 26/09/2019', 'Initial', 5),
(20, 'network', 'Wireless Upgradation', 'Mosharof/Naushad', 45, '2019-04-03', NULL, 'Procurement Process to be started on May', 'RFP will be float 26/09/2019', 'Initial', 5),
(21, 'network', 'CISCO ACI', 'Naushad/Mosharof', 45, '2019-03-05', NULL, 'WO Placed & Imp. to be started from March', '\"Planned Go-live  31/08/2019 New Date: 16/09/2019\"', 'On Progress', 75),
(22, 'application', 'BACH-II Upgradation & Implementation', 'Md. Abu Rayhan Chowdhury', 116, '2018-10-01', NULL, 'SIT', 'Waiting for BB approval', 'on Progress', 70),
(23, 'application', 'FCUBS TD/RD Account Creation API Integration with Unet', 'Mithun Kanty Dey', 100, '2018-10-02', NULL, 'Development', 'Brain Station 23 under development. PMO will notify regarding deliver date.', 'on Progress', 30),
(24, 'application', 'FCUBS Excise Duty Deduction for TD/RD Account and CL Account', 'Tapon Kumar Bala', 162, '2018-11-01', NULL, 'Development', 'FS document signed by  Credit team. And shared to OFFS team.', 'on Progress', 30),
(25, 'application', 'Oracle Data Integrator (ODI) & Golden Gate Implementation for UCB Data Warehouse', 'Ronjon Kumar Ghosh', 259, '2018-09-01', NULL, 'Development', 'Project waiting for  live hardware. Test Simutation on going.', 'on Progress', 80),
(26, 'application', 'Customer On-board', 'none', 10, '2019-10-02', NULL, 'Initial', 'Product presentation on-going', 'Initial', 10),
(27, 'application', 'EKYC', 'Mithun Kanty Dey', 10, '2019-08-10', NULL, 'Implementation', 'UAT On-going', 'On Process', 80),
(28, 'csm', 'a2i Webservice', 'Mojid/Rashidul/Zobair', 10, '2019-02-17', NULL, 'We provided the service to a2i.', 'On Process', 'On Progress', 50),
(29, 'csm', 'UCB Credit Card Bill Payment through Ucash', 'Mojid/Rashidul', 0, '2019-03-03', NULL, 'Waiting for BRD for further technical analysis.', 'Initial', 'Initial', 10),
(30, 'csm', 'MFS Bulk KYC Upload', 'Mojid/Rashidul', 0, '2019-01-03', NULL, 'UAT Stage. Waiting for Business Feedback with BRD.', 'On Process', 'On Process', 20),
(31, 'csm', 'Zilla Police case fine Pay through UCash', 'Mojid/Rashidul', 90, '2019-03-03', NULL, 'We Want to complete all districts in year, 2019', 'On Process', 'On Process', 70),
(32, 'csm', 'BCB Ticket from Ucash', 'Mojid/Rashidul', 90, '2019-01-15', NULL, 'BCB Ticket From Ucash. Depends on Source Code handover to UCBL. Offer letter modified and send to Semicon for Board approval.', 'On Process', 'On Process', 70),
(33, 'network', 'Wireless Upgradation', 'Mosharof/Naushad', 22, '2019-10-09', '2019-10-16', 'Procurement Process to be started on May', 'RFP will be float 26/09/2019', 'complete', 100),
(34, 'csm', 'DMS Implementation', 'Badrul Ahsan', 142, '2019-10-02', NULL, 'any...', 'any..', 'on Progress', 80),
(35, 'network', 'Automation of Central Despatch Unit', 'Mojid/Rashidul', 10, '2019-10-10', NULL, 'any...', 'any..', 'On Process', 0),
(36, 'network', 'Atm', 'Mojid/Rashidul', 10, '2019-10-23', NULL, 'Procurement Process to be started on May', 'UAT Done, Waiting for go-live from PMO', 'initial', 0),
(37, 'infra', 'DMS Implementation', 'Mojid/Rashidul', 234, '2019-11-12', NULL, 'any...', 'any..', 'on going', 0);

-- --------------------------------------------------------

--
-- Table structure for table `network_details`
--

CREATE TABLE `network_details` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `team` varchar(50) NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `finish` date DEFAULT NULL,
  `predecessors` varchar(100) DEFAULT NULL,
  `resource_names` varchar(500) DEFAULT NULL,
  `complete` int(11) NOT NULL,
  `remarks` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `network_details`
--

INSERT INTO `network_details` (`id`, `project_id`, `team`, `duration`, `start`, `finish`, `predecessors`, `resource_names`, `complete`, `remarks`) VALUES
(43, 10, 'csm', 20, '2019-10-01', '2019-10-04', '2', 'any2', 110, 'Done'),
(44, 10, 'csm', 20, '2019-10-10', '2019-10-24', '2', 'any2', 100, 'Done'),
(46, 9, 'application', 10, '2019-10-02', '2019-10-04', '2', 'any2', 10, 'Done'),
(54, 33, 'network', 10, '2019-10-09', '2019-10-18', '2', 'any2', 10, 'Done'),
(55, 34, 'csm', 15, '2019-10-24', '2019-10-17', '2', 'any2', 30, 'new121'),
(56, 32, 'csm', 10, '2019-10-09', '2019-10-10', '2', 'any2', 10, 'new121'),
(57, 34, 'csm', 15, '2019-10-09', '2019-10-10', '2', 'any2', 20, 'new121'),
(58, 34, 'csm', 15, '2019-10-01', '2019-10-11', '2', 'any2', 70, 'new121'),
(59, 17, 'software', 2, '2019-10-02', '2019-10-10', '2', 'any2', 5, 'Done'),
(60, 33, 'network', 5, '2019-10-05', '2019-10-10', '2', 'any2', 50, 'new121'),
(65, 18, 'network', 10, '2019-10-15', '2019-10-24', '2', 'Ehsan Ul Barr', 1, 'Done'),
(66, 18, 'network', 10, '2019-10-15', '2019-10-24', '2', 'Ehsan Ul Barr', 1, 'Done'),
(67, 18, 'network', 10, '2019-10-15', '2019-10-24', '2', 'Ehsan Ul Barr', 1, 'Done'),
(68, 13, 'issm', 10, '2019-10-15', '2019-10-09', '2', 'Asma Ul Husna', 10, 'Done'),
(69, 13, 'issm', 10, '2019-10-09', '2019-10-31', '2', 'M Istiaque Jamil Avi', 40, 'Done'),
(70, 13, 'issm', 10, '2019-10-09', '2019-10-31', '2', 'M Istiaque Jamil Avi', 40, 'Done'),
(71, 18, 'network', 10, '2019-10-16', '2019-10-23', '2', 'A S M Naushad Alam', 4, 'Done'),
(72, 33, 'network', 20, '2019-10-16', '2019-10-31', '2', 'A S M Naushad Alam', 80, 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `project_name` varchar(300) NOT NULL,
  `project_coordinator` varchar(300) NOT NULL,
  `start_date` date NOT NULL,
  `mandays` int(11) NOT NULL,
  `status` varchar(300) NOT NULL,
  `team` varchar(600) NOT NULL,
  `percentage` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `project_coordinator`, `start_date`, `mandays`, `status`, `team`, `percentage`) VALUES
(22, 'Call Centre - ITD (PCIDSS, E1, DR, UAT, Security by ISSM)', 'Mojid/Rashidul', '2019-11-01', 150, 'procesing', 'application', 180),
(23, 'Call Centre - ITD (PCIDSS, E1, DR, UAT, Security by ISSM)', 'Mojid/Rashidul', '2019-11-01', 100, 'Completed', 'application', 100),
(24, 'Call Centre - ITD (PCIDSS, E1, DR, UAT, Security by ISSM)', 'Mojid/Rashidul', '2019-11-01', 100, 'Completed', 'network', 100),
(25, 'Call Centre - ITD (PCIDSS, E1, DR, UAT, Security by ISSM)', 'Badrul Ahsan', '2019-11-01', 100, 'Completed', 'csm', 100),
(26, 'DMS Implementation', 'Mojid/Rashidul', '2019-11-01', 150, 'Completed', 'infra', 100),
(27, 'Automation of Central Despatch Unit', 'Mithun Kanty Dey & Zubair Abdullah', '2019-11-15', 102, 'Completed', 'issm', 100),
(28, 'Wireless Upgradation', 'Badrul Ahsan', '2019-11-14', 65, 'initial', 'software', 0),
(29, 'Wireless Upgradation', 'Badrul Ahsan', '2019-11-14', 65, 'Completed', 'software', 100),
(30, 'DMS Implementation', 'Mojid/Rashidul', '2019-11-13', 120, 'Completed', 'network', 100);

-- --------------------------------------------------------

--
-- Table structure for table `resource_name`
--

CREATE TABLE `resource_name` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `team` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resource_name`
--

INSERT INTO `resource_name` (`id`, `name`, `team`) VALUES
(1, 'Ashfaqur Rahman', 'csm'),
(3, 'Kashef Rahman', 'csm'),
(5, 'Md Iqramul Kabir', 'csm'),
(6, 'Md Mustafizur Rahman Khan', 'csm'),
(7, 'Md. Abdul Mojid', 'csm'),
(8, 'Md. Badrul Alam Asif', 'csm'),
(9, 'Md. Hair uz Zaman', 'csm'),
(10, 'Md. Musfiq Hossain', 'csm'),
(11, 'Md. Rashidul  Hasan', 'csm'),
(12, 'Minhaz Ahmed Chowdhury', 'csm'),
(13, 'Najmus Sakib', 'csm'),
(14, 'Nigar Sultana Bristy', 'csm'),
(15, 'Sanaul Haque', 'csm'),
(16, 'Sharif uz Zaman', 'csm'),
(17, 'Syed Zobair Hossain', 'csm'),
(18, 'Asma Ul Husna', 'issm'),
(19, 'Badrul Ahsan', 'issm'),
(20, 'M Istiaque Jamil Avi', 'issm'),
(21, 'M Istiaque Jamil Avi', 'issm'),
(22, 'Minhajul Ahsan', 'issm'),
(23, 'Mohammad Al Mamun', 'issm'),
(24, 'Pankoj Kumar Mondal', 'issm'),
(25, 'S M Mahmudul Hasan Siddiqui', 'issm'),
(26, 'SK Hasan Imrose', 'issm'),
(27, 'Sourav Mitra', 'issm'),
(28, 'Syed Kamal Hossain', 'issm'),
(29, 'Thaminul Islam', 'issm'),
(30, 'A S M Naushad Alam', 'network'),
(31, 'Ehsan Ul Barr', 'network'),
(32, 'Md Ahsan Habib', 'network'),
(33, 'Md Mehedi Hasan', 'network'),
(34, 'Md Mosharof Hossain', 'network'),
(35, 'Md. Aslam  Jabed', 'network'),
(36, 'Md. Obaydul Hasan', 'network'),
(37, 'Uttam Kumar Das', 'network'),
(38, 'Mohd. Asaduzzaman', 'infra'),
(39, 'Utpal Basak', 'infra'),
(40, 'Md.Golam Kibria', 'infra'),
(41, 'Md. Rezaul Islam', 'infra'),
(42, 'Abdul Kuddus', 'infra'),
(43, 'Md Ahsanul Haque Chowdhury', 'infra'),
(44, 'Md Moin Uddin Rizvi', 'infra'),
(45, 'Md Moin Uddin Rizvi', 'infra'),
(46, 'Md Rakibul Hasan', 'infra'),
(47, 'Mir Asraf Hossain', 'infra'),
(48, 'S. M. Shahdat Hossain Chowdhury', 'infra'),
(49, 'Shah Mohammad Moinul Islam', 'infra'),
(50, 'Shahriar Alam Khan', 'infra'),
(51, 'Md Shariful Islam', 'infra'),
(52, 'Md. Shahey Alam Khan', 'infra'),
(53, 'Rupan Chandra Das', 'infra'),
(54, 'Ubaidullah Mahmud', 'infra'),
(55, 'Bishnu Pada Sarker', 'application'),
(56, 'Kashef Rahman', 'application'),
(57, 'Khaled Jamal Ahmed', 'application'),
(58, 'Md Abu Rayhan Chowdhury', 'application'),
(59, 'Md Waliul Islam', 'application'),
(60, 'Md. Sajjad  Hossain', 'application'),
(61, 'Md. Zubair  Abdullah', 'application'),
(62, 'Mithun Kanty Dey', 'application'),
(63, 'Monalisa Farhana', 'application'),
(64, 'Ronjon Kumar Ghosh', 'application'),
(65, 'Tapon Kumar Bala', 'application'),
(66, 'Ashraf Hossain Bhuiyan', 'software'),
(67, 'Dilnashida Islam', 'software'),
(68, 'Istiak Mahmud', 'software'),
(69, 'Linkan Halder', 'software'),
(70, 'M Jahidul Islam', 'software'),
(71, 'Md Safiul Alam', 'software'),
(72, 'Mohammad Nafiz Enam', 'software'),
(73, 'Mohammad Nure Alam Khan', 'software'),
(74, 'Navid Forhad', 'software'),
(75, 'Ovijit Adhikary', 'software'),
(76, 'Syed Hasan Afzal', 'software');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `task_name` varchar(60) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `percentage` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `comment` varchar(600) NOT NULL,
  `action` varchar(50) NOT NULL DEFAULT 'Not Complete'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `project_id`, `task_name`, `sdate`, `edate`, `percentage`, `status`, `comment`, `action`) VALUES
(1, 14, 'sourav', '2019-10-02', '2019-10-30', 1, 'initlal', 'stated', 'Not Complete'),
(2, 21, 'PCIDSS', '2019-11-01', '2019-11-01', 20, 'initlal', 'stated', 'Not Complete'),
(3, 22, 'PCIDSS', '2019-11-06', '2019-11-15', 20, 'initlal', 'stated', 'Complete'),
(4, 22, 'E1', '2019-11-15', '2019-11-21', 20, 'initlal', 'stated', 'Complete'),
(5, 22, 'DR', '2019-11-27', '2019-11-30', 20, 'initlal', 'stated', 'Complete'),
(6, 22, 'UAT', '2019-12-01', '2019-12-11', 40, 'Completed', 'Completed', 'Complete'),
(7, 23, 'PCIDSS', '2019-11-07', '2019-11-14', 10, 'initlal', 'stated', 'Complete'),
(8, 23, 'E1', '2019-11-07', '2019-11-14', 20, 'initlal', 'dsadsadsadas', 'Complete'),
(9, 23, 'Security by ISSM', '2019-11-21', '2019-11-29', 70, 'initlal', 'Completed', 'Complete'),
(10, 24, 'PCIDSS', '2019-11-01', '2019-11-22', 20, 'initlal', 'stated', 'Complete'),
(11, 24, 'DR', '2019-11-29', '2019-11-30', 80, 'initlal', 'stated', 'Complete'),
(12, 25, 'PCIDSS', '2019-11-01', '2019-11-12', 30, 'on going', 'stated', 'Complete'),
(13, 25, 'DR', '2019-11-22', '2019-11-30', 70, 'on going', 'stated', 'Complete'),
(14, 26, 'DR', '2019-11-14', '2019-11-16', 20, 'on going', 'stated', 'Complete'),
(15, 26, 'UAT', '2019-11-13', '2019-11-27', 80, 'on going', 'stated', 'Complete'),
(16, 27, 'UAT', '2019-11-15', '2019-11-23', 100, 'on going', 'stated', 'Complete'),
(17, 29, 'DR', '2019-11-14', '2019-11-15', 100, 'initlal', 'stated', 'Complete'),
(18, 30, 'DR', '2019-11-14', '2019-11-21', 20, 'initlal', 'stated', 'Complete'),
(19, 30, 'UAT', '2019-11-15', '2019-11-14', 80, 'initlal', 'stated', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', '123', 'admin'),
(2, 'nmsadmin', 'nms', 'network'),
(3, 'appadmin', 'app', 'application'),
(4, 'csmadmin', 'csm', 'csm'),
(5, 'infraadmin', 'infra', 'infra'),
(6, 'issmadmin', 'issm', 'issm'),
(7, 'softadmin', 'soft', 'software');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `network`
--
ALTER TABLE `network`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `network_details`
--
ALTER TABLE `network_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource_name`
--
ALTER TABLE `resource_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `network`
--
ALTER TABLE `network`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `network_details`
--
ALTER TABLE `network_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `resource_name`
--
ALTER TABLE `resource_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
