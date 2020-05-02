drop database if exists talkFootball;
create database talkFootball;
use talkFootball;

create table lajmet (
lajmiId integer auto_increment,
titulli varchar(50) not null,
paragrafi1 varchar (1500) not null,
paragrafi2 varchar(1500),
paragrafi3 varchar(1500),
paragrafi4 varchar(1500),
paragrafi5 varchar(1500),
paragrafi6 varchar(1500),
paragrafi7 varchar(1500),
paragrafi8 varchar(1500),
paragrafi9 varchar(1500),
dataEPostimit datetime not null,
primary key(lajmiId));

create table perdoruesi(
perdoruesiId integer auto_increment,
emri varchar (25) not null,
mbiemri varchar (25) not null,
email varchar (30) not null,
passwordi varchar (25) not null,
dataELindjes date not null,
gjinia boolean);







