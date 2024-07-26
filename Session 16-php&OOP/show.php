<?php 
// $connection = new mysqli('localhost', 'root', '', 'php_iti');
include('connectionClass.php');
$id = $_GET['id'];

// $sql = 'SELECT * FROM students where id = ?';

// // mysqli ---------------
// $sqlStm = $connection->prepare($sql);
// $sqlStm->bind_param('s', $id);
// $sqlStm->execute();
// $result= $sqlStm->get_result();
// $item = $result->fetch_assoc();
$conn=new db();
$item=($conn->select('students','id ='.$id))->fetch_assoc();
// var_dump($item);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Show</title>
</head>
<body class="container" style="margin: 100px;">

    <div class="card" style="width: 18rem; height: 36rem">
  <div class="card-body text-center">
    <h5 class="card-title"><?php echo "Full Name: ".$item['first_name'].' '.$item['last_name'] ?></h5>
    <p class="card-text"><?php echo "Address: ".$item['address'] ?></p>
    <p class="card-text"><?php echo "country: ".$item['country'] ?></p>
    <p class="card-text"><?php echo "Gender: ".$item['gender'] ?></p>
    <p class="card-text"><?php echo "skills: ".$item['skills'] ?></p>
    <p class="card-text"><?php echo "username: ".$item['username'] ?></p>
    <p class="card-text"><?php echo "Password: ".$item['password'] ?></p>
    <p class="card-text"><?php echo "department: ".$item['department'] ?></p>
  </div>
  <!-- <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div> -->
</div>
</body>
</html>
