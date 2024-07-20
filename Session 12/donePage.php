<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for applying</title>
</head>

<body>

    <p>
        Thank you <?php if ($_REQUEST['gridRadios'] == "option1")  echo "Mr.";
                    else echo "Ms.";
                    echo $_REQUEST['fname']." ".$_REQUEST['lname']; ?>
                     for applying for the job position at ITI. Your application has been submitted successfully.
        Please review your application and contact you if we have any questions or concerns.
        <br><br>
        <?php 
        echo "Name :".$_REQUEST['fname']." ".$_REQUEST['lname'];
        echo "<br/>";
        echo "Address : ". $_REQUEST['address']." , ".$_REQUEST['country'];
        echo "<br/>";
        echo "Your Skills <br/>";
        if(isset($_REQUEST['skill1'])&&$_REQUEST['skill1'] == "on") echo "<br/>PHP";
        if(isset($_REQUEST['skill2'])&&$_REQUEST['skill2'] == "on") echo "<br/>MySQL";
        if(isset($_REQUEST['skill3'])&&$_REQUEST['skill3'] == "on") echo "<br/>PostgreSQL";
        if(isset($_REQUEST['skill4'])&&$_REQUEST['skill4'] == "on") echo "<br/>J2SE<br/>";
        echo "Department : opensource <br/>";
        ?>
        If you have any further questions, please don't hesitate to ask.
        <br><br>

    </p>

</body>

</html>