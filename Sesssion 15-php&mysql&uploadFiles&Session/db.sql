Create Database php_iti;

use php_iti;

Create Table students (id Int AUTO_INCREMENT Primary Key,
 first_name VARCHAR(100),
  last_name VARCHAR(100),
  address VARCHAR(100),
   country VARCHAR(100),
   gender VARCHAR(100),
   skills VARCHAR(100),
   username VARCHAR(100),
    password VARCHAR(50),
    department VARCHAR(100));

INSERT INTO `students`(`id`, `first_name`, `last_name`, `address`, `country`, `gender`, `skills`, `username`, `password`, `department`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')



