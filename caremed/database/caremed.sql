drop database if exists caremed;

create database caremed;

use caremed;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL primary key,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'bardhi', 'bardhi', '');

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL primary key,
  `doctorSpecialization` varchar(255) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `consultancyFees` int(11) NOT NULL,
  `appointmentDate` varchar(255) NOT NULL,
  `appointmentTime` varchar(255) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userStatus` int(11) NOT NULL,
  `doctorStatus` int(11) NOT NULL
  )ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL primary key,
  `specilization` varchar(255) NOT NULL,
  `doctorName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `docFees` varchar(255) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `docEmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`,`gender`, `address`, `docFees`, `contactno`, `docEmail`, `password`) VALUES
(1, 'Dentist', 'Fatbardh Kadriu','male', 'Address 1', '40', 045111222, 'bardhi@gmail.com', 'de321153d721ffdc5cb5bcf648813fd4'),
(2, 'physiotherapist', 'Fortesa Hysenaj','female', 'Address 2', '50', 045333444, 'fortesa@gmail.com', 'de321153d721ffdc5cb5bcf648813fd4'),
(3, 'General Physician', 'Fatbardh Gashi', 'male','Address 3', '60', 045323123, 'fatbardh@gmail.com', 'de321153d721ffdc5cb5bcf648813fd4'),
(4, 'Othorino-laringologist', 'Albin Qerimi','male', 'Address 4', '20', 045123211, 'albin@gmail.com', 'de321153d721ffdc5cb5bcf648813fd4'),
(5, 'Dermatologist', 'Jakup Dobranja', 'male','Address 5', '35', 045444111, 'jakupdobranja@gmail.com', 'de321153d721ffdc5cb5bcf648813fd4'),
(6,'Ophthalmologist', 'Laura Tupeci','female', 'Address 6','100', 044123456, 'laura@gmail.com','de321153d721ffdc5cb5bcf648813fd4');


CREATE TABLE `doctorslog` (
  `id` int(11) NOT NULL primary key,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL primary key,
  `specilization` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO `doctorspecilization` (`id`, `specilization`) VALUES
(1, 'Gynecologist/Obstetrician' ),
(2, 'Dermatologist'),
(3, 'Dentist'),
(4, 'Othorino-laringologist' ),
(5, 'Ophthalmologist' );

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL primary key,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;


CREATE TABLE `users` (
  `id` int(11) NOT NULL primary key,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `vkey` varchar(225) NOT NULL,
  `verified` tinyint(1) DEFAULT 0,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
  ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `name`,`surname`, `address`, `city`, `gender`, `email`, `password`,`vkey`,`verified`) VALUES
(6, 'Patient', '1', 'Address 1', 'City 1', 'male', 'pat1@gmail.com', 'a3dc060137b711a2736bebc5a72edc77','d06cb96ede48add563fe8d90ab8b408d','1'),
(7, 'Patient', '2','Address 2', 'City 2', 'female', 'pat2@gmail.com', 'a3dc060137b711a2736bebc5a72edc77','d8d2d2b2a62c733d4ba6c4561cd6d55c','1');

create table `contact`(
`id` int(10) primary key auto_increment,
`name` varchar(40),
`email` varchar(40),
`subject` varchar(255),
`message` varchar(1000));

CREATE TABLE `medicines`(
	`id` int primary key auto_increment,
    `m_name` varchar(100) not null,
    `qty` varchar(100) not null
    );

INSERT INTO `medicines`(`m_name`, `qty`) VALUES ('medicine1', 10);
INSERT INTO `medicines`(`m_name`, `qty`) VALUES ('medicine2', 70);



ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;

ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;

ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;

ALTER TABLE `doctorslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;

ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;

ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;

