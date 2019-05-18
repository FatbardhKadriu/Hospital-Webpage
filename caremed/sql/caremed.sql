drop database if exists caremed;

create database caremed;

use caremed;

SET time_zone = "+01:00";

CREATE TABLE admin (
  id int(11) NOT NULL primary key,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  updationDate varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO admin (id, username, password, updationDate) VALUES
(1, 'bardhi', 'bardhi123', '18-05-2019 11:42:05 AM');

CREATE TABLE appointment(
  id int(11) NOT NULL primary key,
  doctorSpecialization varchar(255) NOT NULL,
  doctorId int(11) NOT NULL,
 userId int(11) NOT NULL,
  consultancyFees int(11) NOT NULL,
  appointmentDate varchar(255) NOT NULL,
  appointmentTime varchar(255) NOT NULL,
  postingDate timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  userStatus int(11) NOT NULL,
  doctorStatus int(11) NOT NULL,
  updationDate varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(1, 'Dentist', 1, 1, 500, '2019-05-31', '09:25', '2019-05-31 00:29:02', 1, 0, ''),
(2, 'Homeopath', 4, 5, 700, '2019-05-25', '14:10', '2019-05-25 08:02:58', 0, 1, '');

CREATE TABLE IF NOT EXISTS doctors (
  id int(11) NOT NULL primary key,
  specilization varchar(255) NOT NULL,
  doctorName varchar(255) NOT NULL,
  address longtext NOT NULL,
  docFees varchar(255) NOT NULL,
  contactno bigint(11) NOT NULL,
  docEmail varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  creationDate timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updationDate varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `updationDate`) VALUES
(1, 'Dentist', 'Doctor 1', 'Address 1', '500', 045111222, 'doc1@gmail.com', '123456', ''),
(2, 'Homeopath', 'Doctor 2', 'Address 2', '600', 045333444, 'doc2@gmail.com', '123456', ''),
(3, 'General Physician', 'Doctor 3', 'Address 3', '1200', 045323123, 'doc3@gmail.com', '123456', ''),
(4, 'Homeopath', 'Doctor 4', 'Address 4', '700', 045123211, 'doc4@gmail.com', '123456', ''),
(5, 'Ayurveda', 'Sanjeev', 'Doctor 5', 'Address 5', 045444111, 'doc5@gmail.com', '123456', ''),
(6, 'General Physician', 'Doctor 6', 'Address 6', '2500', 044191919, 'doc6@gmail.com', '123456', '');

CREATE TABLE doctorslog (
  id int(11) NOT NULL primary key,
  uid int(11) NOT NULL,
  username varchar(255) NOT NULL,
  userip binary(16) NOT NULL,
  loginTime timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  logout timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  status int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO doctorslog (`id`, `uid`, `username`, `userip`, `status`) VALUES
(1, 2, 'doc1@gmail.com', 0x30000000000000000000000000000000,  1),
(2, 0, 'doc2@gmail.com', 0x3a3a3100000000000000000000000000,  0),
(3, 2, 'doc3@gmail.com', 0x3a3a3100000000000000000000000000,  1),
(4, 2, 'doc4@gmail.com', 0x3a3a3100000000000000000000000000,  1),
(5, 2, 'doc5@gmail.com', 0x3a3a3100000000000000000000000000,  1),
(6, 0, 'doc6@gmail.com', 0x3a3a3100000000000000000000000000,  0);

CREATE TABLE doctorspecilization (
  id int(11) NOT NULL primary key,
  specilization varchar(255) NOT NULL,
  creationDate timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updationDate timestamp NOT NULL default current_timestamp
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO doctorspecilization (`id`, `specilization`) VALUES
(1, 'Gynecologist/Obstetrician' ),
(2, 'General Physician' ),
(3, 'Dermatologist'),
(4, 'Homeopath'),
(5, 'Ayurveda' ),
(6, 'Dentist'),
(7, 'Ear-Nose-Throat (Ent) Specialist'),
(9, 'Demo test'),
(10, 'Bones Specialist demo');

CREATE TABLE userlog (
  id int(11) NOT NULL primary key,
  uid int(11) NOT NULL,
  username varchar(255) NOT NULL,
  userip binary(16) NOT NULL,
  loginTime timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  logout timestamp NOT NULL default current_timestamp,
  status int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO userlog (`id`, `uid`, `username`, `userip`, `status`) VALUES
(6, 1, 'fatbardh.kadriu@gmail.com', 0x3a3a3100000000000000000000000000, 1),
(7, 1, 'test@gmail.com', 0x3a3a3100000000000000000000000000,  1);

CREATE TABLE users (
  id int(11) NOT NULL primary key,
  fullName varchar(255) NOT NULL,
  address longtext NOT NULL,
  city varchar(255) NOT NULL,
  gender varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  regDate timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updationDate timestamp NOT NULL default current_timestamp
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`) VALUES
(6, 'Fatbardh Kadriu', 'Hamdi Grajcevci', 'Fushe Kosove', 'Males', 'fatbardh.kadriu@gmail.com', '123456'),
(7, 'Fatbardh Gashi', 'Gashi', 'Podujeve', 'Males', 'test@gmail.com', '123456');

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

