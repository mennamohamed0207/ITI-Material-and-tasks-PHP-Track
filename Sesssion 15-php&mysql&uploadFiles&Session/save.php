<?php
// 1 server name , username root, password , database
// $connection = new mysqli('localhost', 'root', '', 'php_iti');
require('connection.php');

if ($connection->connect_error) {
    die('connection failed');
}
var_dump($_FILES);

function validate($data)
{
    $data = trim($data);
    $data = addslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
move_uploaded_file($_FILES['image']['tmp_name'], './images/' . $_FILES['image']['name']);
$first_name = validate($_POST['fname']);
$last_name = validate($_POST['lname']);
$address = validate($_POST['address']);
$country = validate($_POST['country']);
$image = $_FILES['image']['name'];
if (isset($_POST['gender']) && $_POST['gender'] == "option1") {
    $Gender = "Male";
} else {
    $Gender = "Female";
}
$skills = array();
if (isset($_POST['skill1']) && $_POST['skill1'] == "on") {
    array_push($skills, "PHP");
    echo "hereeeee";
}
if (isset($_POST['skill2']) && $_POST['skill2'] == "on") {
    array_push($skills, "MySQL");
}
if (isset($_POST['skill3']) && $_POST['skill3'] == "on") {
    array_push($skills, "PostgreSQL");
}
if (isset($_POST['skill4']) && $_POST['skill4'] == "on") {
    array_push($skills, "J2SE");
}
$username = validate($_POST['username']);
$password = validate($_POST['password']);
$department = validate($_POST['department']);

//Validations
$errors = [];
if (strlen($first_name) < 2) {
    $errors['fname'] = "Please enter valid first name";
}
if (strlen($last_name) < 2) {
    $errors['lname'] = "Please enter valid last name";
}
if (strlen($address) < 2) {
    $errors['address'] = "Please enter valid address";
}
if (($country) == "Choose...") {
    $errors['country'] = "Please enter valid country";
}
if (strlen($username) < 2) {
    $errors['username'] = "Please enter valid username";
}
if (strlen($password) < 2) {
    $errors['password'] = "Please enter valid password";
}
if (strlen($department) < 2) {
    $errors['department'] = "Please enter valid department";
}

if (count($errors) > 0) {
    $url = http_build_query($errors);
    header("location:applicationForm.php?$url");
    exit();
}
$skills = implode(',', $skills);
echo $skills;

$mysql = "INSERT INTO students (first_name, last_name, address, country, gender, skills, username, password, department,image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?)";

// use mysqli-----------------------
$statement = $connection->prepare($mysql);
$statement->bind_param('ssssssssss', $first_name, $last_name, $address, $country, $Gender, $skills, $username, $password, $department, $image);
$statement->execute();

session_start();
$_SESSION['first_name'] = $item['first_name'];
$_SESSION['last_name'] = $item['last_name'];
$_SESSION['full_name'] = $item['first_name'] . ' ' .  $item['last_name'];
header('location:Table.php');

?>

<!-- <a href="list.php">List All Student</a> -->