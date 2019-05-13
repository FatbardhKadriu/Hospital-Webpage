drop database if exists caremed ;

create database caremed;
use caremed;

create table patient(
id int(11) primary key auto_increment,
fullName varchar(255) not null,
username  varchar(20) not null,
address longtext not null,
city varchar(255) not null,
gender varchar(6) not null,
email varchar(255) not null,
password varchar(255) not null
);

insert into patient(fullName,username,address,city,gender,email,password)
values("Fatbardh Kadriu", 'bardhi','Hamdi Grajcefci','Fushe Kosove','M','fatbardh@gmail.com','123456');

select * from patient;

