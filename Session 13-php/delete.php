<?php
    $index = $_POST['index'];
    $data_arr = file("data.txt");

    if (isset($data_arr[$index])) {
        unset($data_arr[$index]);

        // Save the remaining data back to the file
        file_put_contents("data.txt", implode("", $data_arr));
    }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Data</title>
    </head>
    <body>
        <script >
            alert("Data deleted successfully");
            </script>
    </body>
</html>
