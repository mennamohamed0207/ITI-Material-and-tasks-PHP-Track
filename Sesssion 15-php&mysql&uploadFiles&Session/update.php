<?php
// 1 server name , username root, password , database
// $connection = new mysqli('localhost', 'root', '', 'php_iti');
require('connection.php');

if($connection->connect_error) {
    die ('connection failed');
}

var_dump($_REQUEST);
$first_name = $_REQUEST['fname'];
$last_name = $_REQUEST['lname'];
$address = $_REQUEST['address'];
$country = $_REQUEST['country'];
if(isset($_REQUEST['gender'])&& $_REQUEST['gender'] == "option1") {
    $Gender = "Male";
    
}else {
    $Gender = "Female";
}
$skills=array();
if(isset($_REQUEST['skill1']) && $_REQUEST['skill1'] == "on") { 
    array_push($skills,"PHP");
    echo "hereeeee";
} if(isset($_REQUEST['skill2']) && $_REQUEST['skill2'] == "on") {
    array_push($skills,"MySQL");
}
if(isset($_REQUEST['skill3']) && $_REQUEST['skill3'] == "on") {
    array_push($skills,"PostgreSQL");
}
if(isset($_REQUEST['skill4']) && $_REQUEST['skill4'] == "on") {
    array_push($skills,"J2SE");
}
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
// $department = $_REQUEST['department'];

$skills = implode(',', $skills);
echo $skills;



$mysql = "Update students set first_name = ? , last_name = ? , password = ? , address = ? , country = ? , gender = ? , skills = ? , username = ? , department = ? where id = ?";

// use mysqli-----------------------
$statement = $connection->prepare($mysql);
$statement->bind_param('ssssssssss', $first_name, $last_name, $password, $address, $country, $Gender, $skills, $username, $department, $_GET['id']);
$statement->execute();


header('location:Table.php');

?>

<a href="Table.php">List All Student</a>

