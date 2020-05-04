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
gjinia boolean,
primary key(perdoruesiId));

create table ligat(
ligaId integer auto_increment,
emriILiges varchar (25) not null,
shteti varchar (25) not null,
primary key (ligaId));

create table ekipet(
ekipiId integer auto_increment,
emriIEkipit varchar (25) not null,
ligaId integer not null,
primary key (ekipiId),
foreign key (ligaId) references ligat(ligaId) on delete cascade on update cascade);

create table piket(
ligaId integer not null,
ekipiId integer not null,
lojratELuajtura integer not null,
fitoret integer not null,
barazimet integer not null,
humbjet integer not null,
gollDiferenca integer not null,
piket integer not null,
foreign key (ligaId) references ligat(ligaId) on delete cascade on update cascade,
foreign key (ekipiId) references ekipet(ekipiId) on delete cascade on update cascade);







