// 2- On your page, show alert for the user that say “Welcome to my site”, then show him prompt ask him to enter his name and write to the page  “ welcome + his name”. (Remark what happen to the home page after writing welcome page).

alert("Welcome to my site");
let name =prompt("Enter your name");
document.write("Welcome " + name);
// 3- Make a function that takes today’s temperature as a parameter, prints: “HOT” if the entered temperature are more than or equals 30 and “Cold” if it’s less than 30 (use ternary conditional operator).
function temperature(temp){
    let result=temp>=30?"HOT":"Cold";
    console.log(result);
}
temperature(20) //cold
temperature(40) //hot

// 4-	Change the previous function to take 2 parameters: Temperature and Actual feel temperature to have 3 cases:
// a.	Prints normal if both of temperature and actualFeel between 25 and 30.
// b.	Prints Cold if both of temperature and actualFeel less than 25.
// c.	Prints Hot if both of temperature and actualFeel higher than 30.
// d.	Prints “Ambiguous, can’t detect”, in any different case.
// Can you use ternary conditional operator in previous example? Why?
// Can you use switch case in previous example? Why?

function temperatureV2(temp,actualFeel){
    if(temp>=25 && temp<=30 && actualFeel>=25 && actualFeel<=30){
        console.log("normal");
    }else if(temp<25 && actualFeel<25){
        console.log("Cold");
    }else if(temp>30 && actualFeel>30){
        console.log("Hot");
    }else{
        console.log("Ambiguous, can't detect");
    }
    //no because we have more then one case
    //no we cannot use switch as we have more then one value to check
}
temperatureV2(25,25) //normal
temperatureV2(20,15) //Cold
temperatureV2(45,40) //Hot

// 5-Make a function that takes Student faculty as a parameter, checks:
// a.	If the entered faculty: FCI, show message: “You’re eligible to Programing tracks”.
// b.	If the entered faculty: Engineering, show message: “You’re eligible to Network and Embedded tracks”.
// c.	If the entered faculty: Commerce, show message: “You’re eligible to ERP and Social media tracks”.
// d.	For any other faculty, show message: “You’re eligible to SW fundamentals track”.
// (Use switch(). And why it’s better in that case?).
function student(faculty){
    switch(faculty){
        case "FCI":
            console.log("You're eligible to Programing tracks");
            break;
        case "Engineering":
            console.log("You're eligible to Network and Embedded tracks");
            break;
        case "Commerce":
            console.log("You’re eligible to ERP and Social media tracks");
            break;
        default:
            console.log("You’re eligible to SW fundamentals track");
            break;
    }
    //it is better because we have only one value to check on and many cases
}
student("FCI");
student("Engineering");
student("Commerce");
student("Agriculture");  


