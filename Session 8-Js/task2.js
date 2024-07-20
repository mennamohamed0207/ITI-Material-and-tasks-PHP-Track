//make confirm
function takeConfirm()
{
    let result = confirm("Are you sure?");
    if(result)
    {
        document.getElementById("confirmid").style.backgroundColor = "red";
    }
    else
    {   
        document.getElementById("confirmid").style.backgroundColor = "green";
    }
}
takeConfirm();