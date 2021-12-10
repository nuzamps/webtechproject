drop database if exists `hair_counsel`;

create database hair_counsel;
use hair_counsel;

create table users(
    u_id int NOT NULL,
    username varchar(100),
    email varchar(100),
    password varchar(20),
    primary key(u_id)
);

create table Person(
    personID int not null auto_increment,
    fname varchar(40),
    lname varchar(40),
    tel_no varchar(15) unique,
    email varchar(50) not null unique,
    primary key (personID)
);

create table Advisor(
    advisorID int not null auto_increment,
    personID int not null,
    primary key (advisorID),
    foreign key (personID) references Person(personID) on delete cascade
);

create table Receptionist (
    recID int not null auto_increment,
    personID int not null,
    primary key (recID),
    foreign key (personID) references Person(personID) on delete cascade
);


create table Clients(
clientID int not null auto_increment,
personID int not null,
-- advisorID int not null,
-- recID int not null,
-- typeID int not null,
primary key (clientID),
foreign key (personID) references Person(personID)  on delete cascade
-- foreign key (advisorID) references Advisor(advisorID) on delete cascade,
-- foreign key (recID) references Receptionist(recID) on delete cascade,
-- foreign key (typeID) references HairType(typeID) on delete cascade
);

create table Appointment(
    appt_id int not null auto_increment,
    fname varchar(40),
    lname varchar(40),
    email varchar(50) not null unique,
    tel_no varchar(15) unique,
    dob date,
    medHistory enum('yes','no'),
    appt_time enum('1pm','2pm','3pm','4pm','5pm'),
    appt_date date,
    primary key (appt_id)
);

create table Product(
productID int not null auto_increment,
pname varchar(80),
descrip varchar(30), 
cost decimal(5,2),
primary key(productID)
);


