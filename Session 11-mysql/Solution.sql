CREATE DATABASE if not exists company_db;
 use company_db;
CREATE TABLE Employee (
    Fname VARCHAR(50),
    Lname VARCHAR(50),
    SSN CHAR(9) PRIMARY KEY,
    BDATE DATE,
    Address VARCHAR(255),
    Sex CHAR(1),
    Salary DECIMAL(10, 2),
    Superssn CHAR(9),
    Dno INT,
    FOREIGN KEY (Superssn) REFERENCES Employee(SSN),
    Foreign Key (Dno) REFERENCES Departments(Dnum)

);
 use company_db;

CREATE TABLE Departments (
    Dname VARCHAR(50),
    Dnum INT PRIMARY KEY,
    MGRSSN CHAR(9),
    MGRStartDate DATE,
    FOREIGN KEY (MGRSSN) REFERENCES Employee(SSN)
);
 use company_db;

CREATE TABLE Works_for (
    ESSN CHAR(9),
    Pno INT,
    Hours INT,
    FOREIGN KEY (ESSN) REFERENCES Employee(SSN),
    FOREIGN KEY (Pno) REFERENCES Project(Pnumber)
);
 use company_db;

CREATE TABLE Project (
    Pname VARCHAR(50),
    Pnumber INT PRIMARY KEY,
    Plocation VARCHAR(50),
    City VARCHAR(50),
    Dnum INT,
    FOREIGN KEY (Dnum) REFERENCES Departments(Dnum)
);
 use company_db;

CREATE TABLE Dependent (
    ESSN CHAR(9),
    Dependent_name VARCHAR(50),
    Sex CHAR(1),
    Bdate DATE,
    FOREIGN KEY (ESSN) REFERENCES Employee(SSN)
);


-- Display all the employees Data.
SELECT * FROM Employee;

-- Display the employee First name, last name, Salary and Department number.
SELECT Fname, Lname, Salary, Dno FROM Employee;

-- Display all the projects names, locations and the department which is responsible about it.
SELECT Pname, Plocation, Dnum FROM Project;

-- Display each employee full name and his annual commission in an ANNUAL COMM column (alias).
SELECT concat(Fname,Lname) AS Full_Name, (Salary * 12 * 0.10) AS ANNUAL_COMM FROM Employee;

-- Display the employees Id, name who earns more than 1000 LE monthly.
SELECT SSN, Fname, Lname FROM Employee WHERE Salary > 1000;

-- Display the employees Id, name who earns more than 10000 LE annually.
SELECT SSN, Fname, Lname FROM Employee WHERE Salary * 12 > 10000;

-- Display the names and salaries of the female employees.
SELECT Fname, Lname, Salary FROM Employee WHERE Sex = 'F';

-- Display each department id, name which managed by a manager with id equals 968574.
SELECT Dnum, Dname FROM Departments WHERE MGRSSN = '968574';

-- Display the employee number and name who has no dependent on him/her (use exists).
SELECT SSN, Fname, Lname FROM Employee e WHERE NOT EXISTS (
    SELECT 1 FROM Dependent d WHERE d.ESSN = e.SSN
);


-- Insert your personal data to the employee table as a new employee in department number 30, SSN = 102672, Superssn = 112233.
INSERT INTO Employee (Fname, Lname, SSN, BDATE, Address, Sex, Salary, Superssn, Dno) VALUES
('Menna', 'Abdelbaset', '102672', '2002-01-01', 'el sudanstreet', 'F', 2000, '112233', 30);


-- Insert another employee with personal data your friend as new employee in department number 30, SSN = 102660, but don’t enter any value for salary or manager number to him.
INSERT INTO Employee (Fname, Lname, SSN, BDATE, Address, Sex, Superssn, Dno) VALUES
('Amal', 'Said', '102660', '1990-02-02', '', 'F', NULL, 30);

-- In the department table insert new department called "DEPT IT" , with id 100, employee with SSN = 112233 as a manager for this department. The start date for this manager is '1-11-2006'
INSERT INTO Departments (Dname, Dnum, MGRSSN, MGRStartDate) 
VALUES ('DEPT IT', 100, '112233', '2006-11-01');

UPDATE Employee 
SET Dno = 20 
WHERE SSN = '112233';