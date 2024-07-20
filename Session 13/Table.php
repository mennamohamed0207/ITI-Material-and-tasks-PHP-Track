<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container" style="padding-top: 50px;">

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
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>

      <?php
      //  read 
      $data_arr = file("data.txt");
      foreach ($data_arr as $index => $line) {
        $lineData = explode(',', trim($line)); // array

        echo  "<tr>";
        foreach ($lineData as $value) {
          if($value == "option1") $value = "Male";
          if($value == "option2") $value = "Female";
          echo  "<td>$value</td>";
        }
        echo "<td>
                <form method='POST' action='delete.php'>
                  <input type='hidden' name='index' value='$index'>
                  <button type='submit'>Delete</button>
                </form>
              </td>";

        echo "</tr>";
      } ?>
    </tbody>
  </table>
</body>

</html>
