<?php
require('connection.php');

// var_dump($_POST);

$username = $_POST['username'];
$password = $_POST['password'];


$msql = 'SELECT * FROM students where username = ? and password = ?';


$stmt = $connection->prepare($msql);
$stmt->bind_param('ss', $username, $password);
$stmt->execute();
// var_dump($stmt->get_result()->num_rows);
$stmt->execute();
$result= $stmt->get_result();
$item = $result->fetch_assoc();
if($result->num_rows != 0) {
    echo "login successfully";
    session_start();
    $_SESSION['first_name'] = $item['first_name'];
    $_SESSION['last_name'] = $item['last_name'];
    $_SESSION['full_name'] = $item['first_name'] . ' '.  $item['last_name'];

    header('location:Table.php');

}else{
    header('location:login.php');
}
