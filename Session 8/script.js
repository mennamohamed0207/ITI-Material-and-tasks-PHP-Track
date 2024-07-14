// function openWin() {
//     win = open("childWin.html", "", "width = 200, height = 200");
// }


// function closeWin() {
//     win.close();
// }

// function MoveWindow() {
//     win.moveBy(80,100);
//     // win.moveTo(80,100);
//     win.focus(); //
// }

// // resizeTo(x,y) | resizeBy(x,y)
// // scrollTo(x,y) | scrollBy(x,y)
// function moveWinEvery2sec() {
//     timer = setInterval(function () { MoveWindow() }, 2000);
// }

// moveWinEvery2sec()

// // function openWin2(){
// //     win2=open("child2.html" ,"",height="150" ,width="350");
// // }


// // function closeWin2(){
// //     win2.close();
// // }

// // --------------------------------

// // function openAlert(){
// //     timer = setInterval(function(){ console.log("Hello world"); } , 2000);
// // }
// // openAlert();

// // // function closeAlert(){
// // //     timer = clearInterval(timer);
// // // }

// // function closeAlert(){
// //     timer = clearTimeout(timer);
// // }

// // function startlog(){
// //     timer = setTimeout(function(){ console.log("welcome in JS world"); } , 2000);
// // }

// // startlog();


// // ----------------------------------
// // function confirmDelete() {
// //     return confirm("Are you sure you want to delete");
// // }

// // confirmDelete();


// ----------------------------
// history object => prop 
// history.length => returns num of urls in the history => current tap
// methods  => history.back()
// history.forward() 
// history.go()


// function goTOHistory() {
//     // history.go(0);  // => refresh current page
//     console.log(history.length) // 3

//     // history.back(); // back  => first page 
//     // history.forward(); // last page
//     history.go(-2); // 2 pages back
// }
// -----------------------------

// console.log(location);

// function updateLocation(){
//     console.log(location);
//     location.replace("https://www.google.com/") // => replace old location by new one => 
// }

// ------------------------------------

// navigator object 
// => information about browser => lang / types / versions


// console.log(navigator);

// --------------------------------------
// collections => document.forms
            //    => documents.images
            // document.links

// document.forms[name]

// function validateForm(){
//     var myfirstName= document.forms["myform"]["fname"].value;
//     if (myfirstName==null || myfirstName=="") {
//         alert("First name must be filled out");
//         return false;
//     }
// }

// ---------------------------