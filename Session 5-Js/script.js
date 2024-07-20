// var x= 1;
// var y = -6;
// var z = 3;
// var a = 4;
// var b;
// var c;


// console.log(+x);  //1
// console.log(+y); //-6
// console.log(+"");  //0 
// console.log(+true); //1
// console.log(+false); //0
// console.log(+"5"); //5
// console.log(+"Hello world"); //NaN
// console.log(x**y); //1
// console.log(z**a); // 81

// // -----------------------------------
// console.log(x+=y);
// console.log(x-=y);
// console.log(x/=y);
// console.log(x%=y);
// console.log(x*=y);
// console.log(x**=y);
// console.log(x=b); // undefinied
// console.log(c=y); //-6

// ---------------------------

// console.log(x, y, x==y);  // false
// console.log(x, y, x>y);  // true
// console.log(x, y, x<y);  // false
// console.log(x, y, x<=y); //   false
// console.log( x, y, x>=y);  // true
// console.log(x, y, x!=y); // true
// console.log(x, b, x!==b); // false true
// console.log(c, y, c===y); // false 
// console.log(x!=="5"); // true
// console.log(x==="5"); // false
// console.log(x!==5); 


// --------------------------------------------------

// var x = 1;
// var y = -6;
// var z = 3;
// var a = 4;
// var b;
// var c;
// var string ="";
// var number = 5;
// console.log(x > y && y > z);  //false
// console.log(x > y || y > z); //true

// if (x > y && y > z) { // cond => true  & cond => true
//     console.log("And op (success cond)"); 
// }else{
//     console.log("And op with false (failure cond)");//print  => cond => false & cond => true  || cond => true & cond => false  ||  cond => false & cond => false

// }

// if (x > y || y > z) { //cond => false & cond => true  || cond => true & cond => false  || cond => true & cond => true
//     console.log("OR op success cond ");//print
// }else{
//     console.log("OR op failure cond"); // cond => false & cond => false

// }

// console.log(!typeof(x) == typeof(string)); // f
// console.log(!typeof(x) == typeof(number));  //   
// console.log(!(typeof(x) == typeof(string))); // t
// console.log(!(typeof(x) == typeof(number)));  //  

// console.log(!true); //=> f
// console.log(!false); // t
// console.log(!""); // "" is false val => !""  returns t
// console.log(!"Cat");  //  "Cat" is t => !"Cat" returns f
// console.log(!9); //false 
// console.log(!0); //true

// console.log(!!9); // true 


// console.log(x=y , y-z); // true 

// console.log( x=== string ? "success" : "failure" );


// -----------------------------------------------------

// var marwan = 25;
// var mahmoud = 23;
// var toqa = 20;
// var youssef = 27;


// if( marwan < mahmoud){ //false
//     console.log("marwan < mahmoud");
// }

// if( marwan > mahmoud){ //true
//     console.log("marwan > mahmoud");
// }
// -----------
// if( marwan < mahmoud){
//     console.log("marwan < mahmoud");
// }else{
//     console.log("marwan > mahmoud");

// }


// if( marwan > youssef){
//     console.log("marwan > youssef");
// }else if (youssef < toqa){
//     console.log("youssef > toqa");
// }else if (mahmoud > marwan){
//     console.log("mahmoud > marwan");
// }else{
//     console.log("youssef is older one ");
// }

// console.log("the end of file");


// if( marwan < youssef){ //cond1 true
//     console.log("marwan < youssef"); // did it 
//     if(marwan > toqa){ // true
//         console.log("marwan > toqa"); // did it 
//         if(youssef < toqa){ // false
//             console.log("youssef < toqa"); 
//         }else{
//             console.log("toqa < youssef"); // did it 
//         }
//     }else{
//         console.log("toqa > marwan");
//     }
// }else{
//     console.log("marwan is older one ");
// }


// --------------------------------
// var marwan = 25;
// var mahmoud = 23;
// var toqa = 20;
// var youssef = 27;
// var hossam = 22;

// switch(hossam > youssef){
//     case true:
//         console.log("hossam > youssef");
//         break;
//     case false:
//         console.log("hossam < youssef");
//         break; 
//     default:
//         console.log("youssef and hossem have same age  ");
// }

var favColor = "green";

// switch (favColor) {
//     case "red":
//         console.log("My Fav color is red");
//         break;
//     case "blue":
//     case "lightBlue":
//     case "darkBlue":
//         console.log("My Fav color is blue" , favColor);
//         break;
//     default:
//         console.log("My Fav color is not green");
// }

// var favColor;
// var flag =1;

// switch (flag) {
//     case 1:
//     case "red":
//         favColor="Red";
//         break;
//     case 2:
//         favColor="green";
//         break;
//     default:
//         flag= 0;
//         console.log("try again");
// }

// if(flag){
//     document.write("your fav color " + favColor );
// }
// ----------------------------------

// var firstName = prompt("what's your first name  ?");
// if (firstName) {
//     var lastName = prompt("what's your last name  ?");
//     if (lastName) {
//         var age = prompt("what's age  ?");
//         if(age){
//             document.write("welcome to our Demo" + firstName + ' ' + lastName);
//             document.write("<br/>my age is" + age);
//         }else{
//             document.write("plz fill your Data ");
//         }
//     }else{
//         document.write("you missed enter your last name");
//     }

// }else{

//     document.write("plz refresh your browser and enter your Data " )
// }


// alert("welcom to our Demo");


// confirm("Do you want to repeat ?");
