// var number = 1;
// while (number < 5) {
//     document.write('<br/> numnber =', number );
//     // number++;
//     number+=1;
// }

// var num = 0;
// var sum = 0;
// while (num >= 0) {
//     sum += num;

//     num = parseInt(prompt("plz enter your num ......"));
// }

// console.log(`the sum is ${sum}`);



// var number = 1;
// do {
//     document.write('<br/> numnber =', number );
//     // number++;
//     number-=1;
// }while(number > 0) ;


// var num = 0;
// var sum = 0;
// do {
//     sum += num;

//     num = parseInt(prompt("plz enter your num ......"));
// }while (num >= 0);

// console.log(`the sum is ${sum}`);



// for(var i=0; i < 6 ; i++){ //cond => true
//     console.log(`number is ${i}`);

// }

// console.log(`hellooooooooooooooo`);

// // lastindex=length-1
// var fruits =["apple" , "banana" , "strawberry"];
// // fruits.length = 3

// // fruits[i] =>fruits[0] => value of index  in fruits 
// for(let i =0; i < fruits.length; i++ ){
//     console.log(`fruits ${i} ${fruits[i]}`);
// }

// // i  =>refer to  index  =>

// for(var i in fruits){
//     console.log(i , fruits[i]);
// }


// fruits.forEach((ele)=> console.log(ele));

// console.log(parseInt("abc101")); // NaN  => start with char =>string
// console.log(parseInt("101aba")); // 101 
// console.log(parseInt("101.545aba")); //101 => . => char 

// console.log(parseFloat("abc101")); // NaN  => start with char =>string
// console.log(parseFloat("101aba")); // 101
// console.log(parseFloat("101.545aba"));//101.545

// console.log(isFinite("abc101")); //false
// console.log(isFinite("101aba")); //false
// console.log(isFinite("101.545aba"));//false
// console.log(isFinite("101"));// true
// console.log(isFinite(101));// true


// console.log(isNaN("abc101")); //true  
// console.log(isNaN("101aba")); //true 
// console.log(isNaN("101.545aba"));//true
// console.log(isNaN("101"));// false
// console.log(isNaN(101));// false

// console.log(isNaN("101") + isFinite("101")  - 50);
// console.log(isNaN("101" -10));


// var uri = "http://127.0.0.1:5500/demo%20%201.html";

// var uriDecoded = decodeURI(uri);
// var uriEncoded = encodeURI(uri);


// console.log(uriDecoded , "decoded");
// console.log(uriEncoded , "encoded");


// function sum(num1 ,num2){
//     console.log("in fun");
//     var sum =0;
//     sum = num1 + num2;
//     return sum;
// }


var nameInput=prompt("plz enter your name");

function greetings (name){
    if(name !=""){

        document.write(` Hello  ${name} <br/>`);
    }else{
        document.write(` Hello Mahmoud <br/>`);

    }

}

greetings(nameInput);


function displayFullName (fname , lname=""){
    document.write(`<br/> Hello ${fname} ${lname} <br/>`);

}


displayFullName("John" , "Doe");
displayFullName(nameInput);
displayFullName("Nermeen");






