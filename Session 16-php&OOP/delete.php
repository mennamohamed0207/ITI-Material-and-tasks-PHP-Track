<?php
// $connection = new mysqli('localhost', 'root', '', 'php_iti');
require('connectionClass.php');

$id = $_GET['id'];

echo $id ;

// $sql = "DELETE FROM students where id= ?";

// mysqli
// $sqlStm = $connection->prepare($sql);
// $sqlStm->bind_param('s', $id);
// $sqlStm->execute();
//  echo "<html><head><script> alert('Deleted Successfully'); </script></head></html>";
$conn=new db();

$item=($conn->delete('students','id ='.$id));

header('location:Table.php');