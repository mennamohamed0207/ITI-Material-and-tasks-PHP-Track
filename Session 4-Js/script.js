// // alert("Hello , welcome  to our Day 1 demo ");
// // var var = 5; not allowed => invalid var name

// var variableNum1 = 5; // valid
// var _variableNum2 = 7;// valid
// var $variableNum1 = 5;// valid
// var VariableNum2 = 7; // valid
// // var 123VariableNum2 = 7; not allowed => invalid var name

// var multiple = variableNum1*_variableNum2;
// var sum = variableNum1+_variableNum2 ;


// var multiple2 = $variableNum1*VariableNum2;
// var sum2 = $variableNum1+VariableNum2 ;
// console.log("sum", sum);
// console.log("multiple", multiple);

// console.log("sum2", sum2);
// console.log("multiple2", multiple2);


// var first_name="nermeen";
// var last_name="esmail";
// console.log("Full Name : " ,first_name + ' ' +  last_name );


var number = 4;
number++;
//  number => operand
console.log("increment", number);
console.log("decrement", number--);
// -----------------------------


// operators
var x = 5;
var y = 7;
var z;  //eq undefined

console.log("sum", x + y);
console.log("multiple", x * y);
console.log("divide", x % y); //remide
console.log("divide", x / y);//5
console.log("sub", x - y);
console.log("-------------------------------------");
console.log("eq", x = z); // x= z val =undefined
// console.log("eq",z=x);// z= x val = 5
console.log("divide", x %= y); //x+undefined = NaN //(not a number)
console.log("divide", x /= y);
console.log("sub", x -= y);
console.log("sub", x **= y);
console.log("-------------------------------------");
console.log("sum", x += y);
console.log("sum", x *= y);
console.log("-------------------------------------");
console.log("sum", x = +y);// x=y; // eq x= y * 1
console.log("sub", x = -y);// x=-y; //x= y * -1

console.log("sum", x += y);// x=x+y; x=old x  + y 
console.log("sub", x -= y);// x=x-y;  x=old x  - y 
// 
// isNaN
console.log(isNaN("hello")) // return true;               
console.log(isNaN(55)) // return false;                    
console.log(isNaN("")) // return false;
console.log(isNaN(false)) // return false;     
console.log(isNaN(true)) // return false;      
console.log(isNaN(0 / 0)) // return true;
console.log(isNaN(NaN)) // return true;
console.log(isNaN(null)) // return  false
console.log(isNaN(undefined)) // return true;
console.log(isNaN('NaN')) // return true;








