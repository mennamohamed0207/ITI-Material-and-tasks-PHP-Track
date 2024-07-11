// On contact page prompt user to enter his name,
// make sure that name is string, and let the user enter his birth year and make sure that it is a number,
//and it is less than 2010, and then calculate his age.
//For each prompt if user input valid show him next prompt, 
//if not valid show him the same prompt again until user enters it correctly (use loops). 
//And after validating user input, write all user input on the page in that format:
// Name: ahmed
// Birth year: 1981
// Age: 30
var name, birthYear, age;
do {
   name = prompt("Enter your name");
} while (!isNaN(name) || name == "");

do {
   birthYear = prompt("Enter your birth year");
   age = 2024 - birthYear;
} while (isNaN(birthYear) || birthYear > 2010);
if(name !=null || birthYear !=null || age !=null)
document.write("Name: " + name + "<br/>" + "Birth year: " + birthYear + "<br/>" + "Age: " + age);
else 
document.write("You have not filled your data");


