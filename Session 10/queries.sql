
Create DATABASE iti;
-- create Table
USE iti;
CREATE TABLE SalesOffice ( Office_Number INT PRIMARY KEY, Location VARCHAR(100) );


--drop table
use iti;
drop table SalesOffice;


--use alter

use iti;
ALTER TABLE SalesOffice
ADD Phone_Number VARCHAR(15);


--show current date
SELECT CURRENT_DATE;

--show databases
SHOW DATABASES;


--show versions
SELECT VERSION();



