CREATE DATABASE employees;
USE employees;


CREATE TABLE employees (
id int auto_increment ,
firstname varchar(30),
surname varchar(30),
dateofbirth date,
salary decimal(10,2),
primary key(id)
);



INSERT INTO employees (firstname, surname, dateofbirth, salary) VALUES
('joe', 'bloggs', '2002-01-01', 40000.00);