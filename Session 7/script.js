// // literal creation
// var mystr="Hello welcome to our demo day4"
// console.log(mystr.length);
// console.log(typeof(mystr));


// constructor
// var myNewStr = new String("Hello welcome to our demo day"); //H=>0
// console.log(myNewStr.length);
// console.log(typeof(String));
// console.log(typeof(myNewStr));
// console.log(myNewStr.charAt(5)); //space 
// console.log(myNewStr.charAt(6)); //char 
// console.log(myNewStr.charAt(5,6)); //char 
// console.log(myNewStr.charAt(myNewStr.length-1)); // to get last index
// console.log(myNewStr.charAt(-1));
// console.log(myNewStr.indexOf("H"));
// console.log(myNewStr.indexOf("He"));
// console.log(myNewStr.indexOf("ou"));
// console.log(myNewStr.indexOf("u"));
// console.log(myNewStr.indexOf("j"));
// console.log(myNewStr.indexOf("o"));//4 => in Hello
// console.log(myNewStr.lastIndexOf("o")); //24 => o in demo
// console.log(myNewStr.indexOf("co")); //9 => in welcome
// console.log(myNewStr.indexOf("ou")); //17 => using pattern
// console.log(myNewStr.indexOf("our")); //17
// console.log(myNewStr.charAt(-1));


// console.log(myNewStr.trim());
// console.log(myNewStr.split(" "));//remove all space 
// console.log(myNewStr.split("")); // split without specific pattern 
// console.log(myNewStr.substring(4,10));
// console.log(myNewStr.substring(5,10));

// var myNewStr = new String("Hello welcome to our demo day , helloooo"); //H=>0

// console.log(myNewStr.replace("o" , "_")); // replace  => global on string
// console.log(myNewStr.replaceAll("o" , "_")); // replace  => global on string
// console.log(myNewStr.replace(/o/g , "_"));
// console.log(myNewStr.replace(/h/i , "_"));
// console.log(myNewStr.replace("h" , "_"));
// console.log(myNewStr.replace("H" , "_"));


// literal array
// var fruits =["apple", "banana", "strawberry", "orange"];
// console.log(fruits.length); //4


// // constructor
// var newFruits = new Array("apple", "banana", "strawberry", "orange");
// console.log(newFruits.length); //4

// console.log(newFruits[2]); //strawberry
// console.log(newFruits[newFruits.length-1]);

// console.log(newFruits.toString());
// console.log(newFruits);

//constructor
// var newFruits = new Array();
// newFruits[0] = "apple";
// newFruits[1] = "banana";
// newFruits[2] = "strawberry";
// newFruits[3] = "orange";

// var newArr =[1,2,3,4,5,6,7,8,9,10,11,12];

// console.log(newArr.join("*_*")); // return string 
// console.log(newArr.push(156));  //print new length 
// console.log(newArr);

// console.log(newArr.pop()); // print removed ele
// console.log(newArr);

// // console.log(newArr.pop()); // print removed ele
// // console.log(newArr);

// console.log(newArr.unshift(156));  //print new length 
// console.log(newArr);

// console.log(newArr.shift()); // print removed ele
// console.log(newArr);

//  unshift          push  //add
//    |                |
// [... , array   , .....]
//   |                |
//  shift            pop  //remove


// var newArr = [1, 2, 3, 4, 5, 6, 7, 25, 89, 45, 33, 77, 8, 9, 10, 11, 12];

// console.log(newArr);
// // console.log(newArr.reverse());
// console.log(newArr.sort()); // [1,10,11,12,2,25,3,33,4,45,5,6,7,77,8,89,9]
// // to sort => in case of array => with numerical value => excution compersion => by sending as function 
// console.log(newArr.sort(function(a,b) {return a-b;})); //asc
// console.log(newArr.sort(function(a,b) {return b-a;}));  //desc


// function comparsion (a,b){
// return a-b;
// }

// console.log();


// ------------------------------
// constructor
// var date =new Date();
// console.log(date , "current time zone");


// var today =new Date();
// console.log(today , "current time zone");

// console.log(today.getDate()); //ONLY DAY
// console.log(today.getMonth()); //ONLY month
// console.log(today.getYear()); //ONLY year
// console.log(today.getFullYear()); //full year

// console.log(today.setDate(15)); //ONLY DAY
// console.log(today.setDate(15)); //ONLY DAY

// console.log(new Date().toISOString());
// console.log(new Date().toString());
// console.log(new Date().toLocaleString());
// console.log(new Date().toLocaleString());


// --------------

// var str=prompt(); =>  alert()
// var T =prompt(); => alert("Hello");
// eval(T);

// console.log(eval("2+2-5*10"));
// console.log(eval("2+5") === eval("17-10"));


// console.log(eval("let z = 50"));

// var x=50;
// var y =30;
// console.log(eval("x+y"));   



// -------------------------------------

// function SayHello(x) {
//     for (var i = 0; i < x; i++) {
//         if (i == 5) break; //end only loop
//         console.log("Hello", i);
//     }
//     console.log("after excute loop"); //print (excute reset of code after ending loop)
// }


// function SayHello(x) {
//     for (var i = 0; i < x; i++) {
//         if (i == 5) continue; //skip only this iteration 
//         console.log("Hello", i);
//     }
//     console.log("after excute loop"); //print (excute reset of code after ending loop)

// } 


// function SayHello(x) {
//     for (var i = 0; i < x; i++) {
//         if (i == 5) return; // return => end function 
//         console.log("Hello", i); 
//     }
//     console.log("after excute loop"); // will not be excuted 

// }


// SayHello(20);























// pattern => ([a-zA-z0-9_.+-]+)@[a-zA-z0-9_.+-]\.[a-zA-z0-9_.+-] //Nermeen99@gmail.com





