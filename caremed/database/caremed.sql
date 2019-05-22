drop database if exists caremed;

create database caremed;

use caremed;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:00";

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
  `address` longtext NOT NULL,
  `docFees` varchar(255) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `docEmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `updationDate`) VALUES
(1, 'Dentist', 'Doctor 1', 'Address 1', '500', 045111222, 'doc1@gmail.com', '123456', ''),
(2, 'physiotherapist', 'Doctor 2', 'Address 2', '600', 045333444, 'doc2@gmail.com', '123456', ''),
(3, 'General Physician', 'Doctor 3', 'Address 3', '1200', 045323123, 'doc3@gmail.com', '123456', ''),
(4, 'Othorino-laringologist', 'Doctor 4', 'Address 4', '700', 045123211, 'doc4@gmail.com', '123456', ''),
(5, 'Dermatologist', 'Sanjeev', 'Doctor 5', 'Address 5', 045444111, 'doc5@gmail.com', '123456', ''),
(6, 'General Physician', 'Doctor 6', 'Address 6', '2500', 044191919, 'doc6@gmail.com', '123456', '');

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
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO `doctorspecilization` (`id`, `specilization`) VALUES
(1, 'Gynecologist/Obstetrician' ),
(2, 'General Physician' ),
(3, 'Dermatologist'),
(4, 'Dentist'),
(5, 'Othorino-laringologist' );

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
  `fullName` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`) VALUES
(6, 'Patient1', 'Address 1', 'City 1', 'Males', 'pat1@gmail.com', '123456'),
(7, 'Patient2', 'Address 2', 'City 2', 'Females', 'pat2@gmail.com', '123456');


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

