drop database if exists talkFootball;
create database talkFootball;
use talkFootball;


  create table perdoruesi
  (
    perdoruesiId integer
    auto_increment,
emri varchar
    (25) not null,
mbiemri varchar
    (25) not null,
email varchar
    (30) not null,
passwordi varchar
    (25) not null,
dataELindjes date not null,
gjinia varchar
    (10),
primary key
    (perdoruesiId));

    