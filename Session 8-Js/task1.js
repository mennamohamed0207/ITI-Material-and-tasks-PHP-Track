function MoveWindow() {
    win.moveBy(500,0);
    win.focus(); 
}
function moveWinEvery2sec() {
    timer = setInterval(function () { MoveWindow() }, 2000);
}
//scroll by 80,100

function scrollWindow() {
    win.scrollBy(0,135);
    win.focus(); 
}
function scrollWinEvery2sec() {
    timer = setInterval(function () { scrollWindow() }, 2000);
}
function openWin() {
    win = open("window.html", "", "width = 200, height = 200");
}


function closeWin() {
    win.close();
}
moveWinEvery2sec();
 scrollWinEvery2sec();