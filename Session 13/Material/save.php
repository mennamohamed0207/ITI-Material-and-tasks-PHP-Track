<?php
echo "<pre>";
// var_dump($_POST); // return array
$date = implode(',', $_POST); // string 
// echo($date);

file_put_contents('data.txt', "\n".$date, FILE_APPEND);

// echo "<pre>";

?>

<a href="list.php">List All Student</a>