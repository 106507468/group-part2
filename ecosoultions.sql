-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2026 at 11:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecosolutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_ref` varchar(10) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_des` text NOT NULL,
  `salary` varchar(50) NOT NULL,
  `reports_to` varchar(100) NOT NULL,
  `resp` text NOT NULL,
  `ess_req` text NOT NULL,
  `pref_req` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_ref`, `job_title`, `job_des`, `salary`, `reports_to`, `resp`, `ess_req`, `pref_req`) VALUES
(1, 'RE439', 'Renewable Energy Web Developer', 'Join our tech team as a Renewable Energy Web Developer to design, build and maintain digital platforms that promote clean energy solutions. You will work closely with engineers and designers to create accessible, responsive websites that communicate our mission of building a sustainable future through technology.', '$80,000 - $100,000', 'Senior Developer', 'Develop and maintain company websites. \r\nCollaborate with designers and engineers. \r\nEnsure accessibility and responsiveness.', 'Bachelor\'s or equivalent in the relevant field.\r\nAt least 2 years of relevant experience in Web Development.\r\nTeam collaboration skills.', 'Experience in renewable energy sector.\r\nUI/UX design knowledge.'),
(2, 'RE528', 'Digital Project Coordinator', 'As a Digital Project Coordinator at Ecosolutions you will play a key role in planning, coordinating and delivering digital projects that support our sustainable energy initiatives. You will act as the bridge between technical teams and stakeholders, ensuring projects are delivered on time, within scope and aligned with our environmental goals.', '$70,000 - $90,000', 'Project Manager', 'Manage project timelines.\r\nCommunicate with stakeholders.\r\nTrack project progress using tools like Jira.', '2-3 years\' experience in project coordination or project administration.\r\nConfidence working with stakeholders and cross functional internal teams.\r\nSound technical understanding.', 'Experience with Agile methodology.\r\nKnowledge of sustainability projects.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2026 at 11:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecosolutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `pages_worked_on` varchar(255) NOT NULL,
  `contribution` text NOT NULL,
  `quote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `student_id`, `pages_worked_on`, `contribution`, `quote`) VALUES
(1, 'Dharma', '106507468', 'index.html (shared) and apply.html', 'Built the home page layout and the job application form including all fields and validation.', 'Per aspra ad astra (Through hardship to the stars)'),
(2, 'Mehak', '106396417', 'about.html, index.html, and the shared navigation menu', 'Created the about page, contributed to the home page, and built the shared navigation used across all pages.', 'Every human has a gem hidden within, but the fog of doubt weakens it.'),
(3, 'Sreetoma', '106601739', 'Index.html and footer across the pages', 'Worked on the home page content and implemented the consistent footer used across all pages.', 'If no one responds to your call, then go your own way alone.');

-- --------------------------------------------------------

--
-- Table structure for table `eoi`
--

CREATE TABLE `eoi` (
  `EOInumber` int(11) NOT NULL,
  `job_reference` varchar(5) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `street_address` varchar(40) DEFAULT NULL,
  `suburb` varchar(40) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `postcode` varchar(4) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `communication` varchar(3) DEFAULT NULL,
  `teamwork` varchar(3) DEFAULT NULL,
  `problem` varchar(3) DEFAULT NULL,
  `timemanage` varchar(3) DEFAULT NULL,
  `organisation` varchar(3) DEFAULT NULL,
  `adaptability` varchar(3) DEFAULT NULL,
  `detailoriented` varchar(3) DEFAULT NULL,
  `reliability` varchar(3) DEFAULT NULL,
  `customerservice` varchar(3) DEFAULT NULL,
  `computerskills` varchar(3) DEFAULT NULL,
  `otherskills` text DEFAULT NULL,
  `status` enum('New','Current','Final') DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eoi`
--

INSERT INTO `eoi` (`EOInumber`, `job_reference`, `first_name`, `last_name`, `dob`, `gender`, `street_address`, `suburb`, `state`, `postcode`, `email`, `phone`, `communication`, `teamwork`, `problem`, `timemanage`, `organisation`, `adaptability`, `detailoriented`, `reliability`, `customerservice`, `computerskills`, `otherskills`, `status`) VALUES
(1, 'mehak', 'Mehak', 'Kothari', '1970-01-01', '', '26 Dablam street', 'clyde north', 'vic', '3978', 'kotharimehak07@gmail.com', '123456789', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'dehkfj', 'New'),
(2, 'mehak', 'Mehak', 'Kothari', '1970-01-01', 'female', '26 Dablam street', 'clyde north', 'vic', '3978', 'kotharimehak07@gmail.com', '123456789', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'dehkfj', 'New');

-- --------------------------------------------------------