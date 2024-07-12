// * Ask the user to enter his Email, and use function strings (Don’t use RegExp) to check if the Email contains @, and not in the first or last index.

function checkEmail(email){
    let index=email.indexOf("@");
    if(index == -1 || index == 0 || index == email.length-1){
        document.write("Invalid Email");
    }else{
        document.write("your email is valid "+email);
    }
}
var email=prompt("Enter your Email");
checkEmail(email);

// *	Create an array of objects that hold student name along with his degree (Each element of the array is an object has 2 properties: Name and Degree).
let students = [
    {
        name:"Menna",
        degree:88
    },{
        name:"Ahmed",
        degree:50
    },{
        name:"Fatma",
        degree:90
    }
]
// a.	Find student Name, who got degree between 90 and 100 [Use find()].
var student=students.find((student)=>student.degree>=90 && student.degree<=100);
console.log(student);
console.log("-------------------");
// b.	Print students names, who got a degree less than 60 [Use filter()].
var names=students.filter((student)=>student.degree<60);
console.log(names);
console.log("-------------------");
// c.	Add a new student to the array [Use push()],()], and then use for…in to print all elements of the array.
students.push({
    name:"Hana",
    degree:100
});
for(let property in students){
    console.log(students[property]);
}
console.log("-------------------");

// d.	Remove the last student of the array [Use pop()], and then use for…of to print all elements of the array.
students.pop();
for(let student of students){
    console.log(student);
}
console.log("-------------------");
// e.	Sort the array alphabetically based on the student name.
console.log(students.sort(function(a,b){
    if(a.name>b.name){
        return 1;
    }else if(a.name<b.name){
        return -1;
    }else{
        return 0;
    }
}) )


