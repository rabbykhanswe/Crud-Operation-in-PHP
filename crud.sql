create database crud;
use crud;

create table info(

    id int auto_increment primary key,
    name varchar(20),
    email varchar(20),
    passwd varchar(20)
);