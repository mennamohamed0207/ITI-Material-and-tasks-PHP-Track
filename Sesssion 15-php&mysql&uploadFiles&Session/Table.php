<?php
    require('connection.php');
    $connection = new mysqli('localhost', 'root', '', 'php_iti');
    $result = $connection->query('SELECT * FROM students');
    //  var_dump($result);

?>
<?php
    // echo "<pre>";
    // var_dump($_GET);
    // echo "</pre>";
    session_start();
    if(! isset($_SESSION['full_name'])) {
        header('location:login.php');
    }
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container" style="padding-top: 50px;">
<button  class="btn btn-primary" ><a href="applicationForm.php" style="color:white">Add New Student</a></button>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Address</th>
        <th scope="col">Country</th>
        <th scope="col">Gender</th>
        <th scope="col">Skills</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Department</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
        <th scope="col">Show</th>
      </tr>
    </thead>
    <tbody>
<?php
    while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><img src='images/{$row['image']}' width='50' height='50'></td>";
                echo "<td>{$row['first_name']}</td>";
                echo "<td>{$row['last_name']}</td>";
                echo "<td>{$row['address']}</td>";
                echo "<td>{$row['country']}</td>";
                echo "<td>{$row['gender']}</td>";
                echo "<td>{$row['skills']}</td>";
                echo "<td>{$row['username']}</td>";
                echo "<td>{$row['password']}</td>";
                echo "<td>{$row['department']}</td>";
                echo "<td><a href='updateForm.php?id={$row['id']}&first_name={$row['first_name']}&last_name={$row['last_name']}&password={$row['password']}&gender={$row['gender']}&skills={$row['skills']}&country={$row['country']}&department={$row['department']}&username={$row['username']}&address={$row['address']}' class='btn btn-warning'>Update</a></td>";
                echo "<td><a href='delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a></td>";
                echo "<td><a href='show.php?id={$row['id']}' class='btn btn-success'>Show</a></td>";
                echo "</tr>";
                }
                ?>
    </tbody>
  </table>
</body>

</html>
