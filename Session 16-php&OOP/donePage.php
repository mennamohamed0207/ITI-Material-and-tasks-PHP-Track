<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for applying</title>
</head>

<body>

    <p>
        Thank you <?php
        if ($_REQUEST['gridRadios'] == "option1")  {echo "Mr."; $Gender="Male";}
                    else {echo "Ms.";  $Gender="Female"; }
                    echo $_REQUEST['fname'] . " " . $_REQUEST['lname']; ?>
        for applying for the job position at ITI. Your application has been submitted successfully.
        Please review your application and contact you if we have any questions or concerns.
        <br><br>
        <?php
        echo "Name :" . $_REQUEST['fname'] . " " . $_REQUEST['lname'];
        echo "<br/>";
        echo "Address : " . $_REQUEST['address'] . " , " . $_REQUEST['country'];
        echo "<br/>";
        echo "Your Skills <br/>";
        $skills = array();
        if (isset($_REQUEST['skill1']) && $_REQUEST['skill1'] == "on") {echo "<br/>PHP"; array_push($skills,"PHP");}
        if (isset($_REQUEST['skill2']) && $_REQUEST['skill2'] == "on") {echo "<br/>MySQL"; array_push($skills,"MySQL");}
        if (isset($_REQUEST['skill3']) && $_REQUEST['skill3'] == "on") {echo "<br/>PostgreSQL"; array_push($skills,"PostgreSQL");}
        if (isset($_REQUEST['skill4']) && $_REQUEST['skill4'] == "on") {echo "<br/>J2SE<br/>";  array_push($skills,"J2SE");}
        echo "Department : opensource <br/>";
        ?>
        If you have any further questions, please don't hesitate to ask.
        <br><br>

    </p>

    <?php
    $skills_string= implode(' ', $skills); // string
    $data_append= $_REQUEST['fname'].','.$_REQUEST['lname'].','.$_REQUEST['address'].','.$_REQUEST['country'].','.$Gender.','.$skills_string.','.$_REQUEST['username'].','.$_REQUEST['password'];
    // $date = implode(',' ,$data_append); // string 
    // echo ($date);

    file_put_contents('data.txt', $data_append . "\n", FILE_APPEND);

    ?>
    <button onclick="Table.php"><a href="Table.php">Show All Data</a></button>

</body>

</html>