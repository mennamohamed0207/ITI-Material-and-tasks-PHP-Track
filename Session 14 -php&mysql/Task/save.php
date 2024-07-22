<?php
// 1 server name , username root, password , database
// $connection = new mysqli('localhost', 'root', '', 'php_iti');
require('connection.php');

if ($connection->connect_error) {
    die('connection failed');
}

var_dump($_POST);
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$address = $_POST['address'];
$country = $_POST['country'];
if(isset($_POST['gender'])&& $_POST['gender'] == "option1") {
    $Gender = "Male";
    
}else {
    $Gender = "Female";
}
$skills=array();
if(isset($_POST['skill1']) && $_POST['skill1'] == "on") { 
    array_push($skills,"PHP");
    echo "hereeeee";
} if(isset($_POST['skill2']) && $_POST['skill2'] == "on") {
    array_push($skills,"MySQL");
}
if(isset($_POST['skill3']) && $_POST['skill3'] == "on") {
    array_push($skills,"PostgreSQL");
}
if(isset($_POST['skill4']) && $_POST['skill4'] == "on") {
    array_push($skills,"J2SE");
}
$username = $_POST['username'];
$password = $_POST['password'];
$department = $_POST['department'];

$skills = implode(',', $skills);
echo $skills;

$mysql = "INSERT INTO students (first_name, last_name, address, country, gender, skills, username, password, department) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

// use mysqli-----------------------
$statement = $connection->prepare($mysql);
$statement->bind_param('sssssssss', $first_name, $last_name, $address, $country, $Gender, $skills, $username, $password, $department);
$statement->execute();

header('location:Table.php');

?>

<a href="list.php">List All Student</a>