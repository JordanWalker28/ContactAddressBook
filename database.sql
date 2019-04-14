create database projectTest;

use projectTest;

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL,
  `contactType` enum('Employee','Organisation','','') NOT NULL,
  `businessName` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;



INSERT INTO `contacts` (`id`, `contactType`, `businessName`, `name`, `phone`, `email`) VALUES
(0, 'Employee', 'Heriot Watt', 'Jordan', '0122845146', 'jw31@hw.ac.uk'),
(1, 'Organisation', 'Heriot Watt', 'Heriot Watt', '0122841211', 'hw@hw.ac.uk'),
(2, 'Organisation', 'KFC', 'KFC', '0122812342', 'kfc@kfc.com'),
(3, 'Employee', 'KFC', 'Kevin', '', 'kevin@kfc.com'),
(4, 'Employee', 'KFC', 'Stacy', '', 'Stacy@kfc.com');


ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;