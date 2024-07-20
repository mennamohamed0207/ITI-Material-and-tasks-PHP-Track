<?php
    // types
    // 1- indexed array
    // $array = array(100, 200, 300); // count($array) // 3
    // $array2 = [10, 20 , 30];
    // $arr = range(1,20); 
    // range('a', 'z')
    // echo "<pre>";
    // print_r($arr);
    // // var_dump($array);
    // // print_r($array2);
    // echo "</pre>";

    // loops
    // echo $array[0]."<br>";
    // echo $array[1]."<br>";
    // echo $array[2]."<br>";

    // for(start; end; step) - foreach
    /*for($i=0; $i <ul count($array); $i++) {
        echo $i. "=>". $array[$i]."<br>";
    }

    foreach($array2 as $value){
        echo $value."<br>";
    }*/

    // 2- associative array
    // [1, "Ahmed", "php"]
    // array
    // $ass_arr = [
    //     "id" => 1,
    //     "name" => "Ahmed",
    //     "track" => "Php",
    // ];

    // var_dump($ass_arr);
    // echo $ass_arr['name'];

    // foreach($ass_arr as $key => $value) {
    //     echo $key . "=>" . $value;
    //     echo "<br>";
    // }

    // Compact
    // $id = 100;
    // $name = "Ali";
    // $track = "php";
    // $compact_arr = compact("id", "name", "track"); //[]
    
    // echo "<pre>";
    // print_r($compact_arr);
    // echo "</pre>";


    // 3- multidimensional array
    // $multi_arr = [
    //     'ahmed' => [
    //         'id' => 1,
    //         'email' => 'ah@gmail.com'
    //     ],

    //     'ali' => [
    //         'id' => 2,
    //         'email' => 'ali@gmail.com'
    //     ],

    //     [1, 2, 3],
    // ];

    
    // echo "<pre>";
    // print_r($multi_arr);
    // print_r($multi_arr['ahmed']['email']);
    // echo "</pre>";

    // foreach($multi_arr as $key => $row){
    //     echo $key;
    //     foreach($row as $value) {
    //         echo $value;
    //         echo "<br>";
    //     }
    // }

    // foreach($multi_arr as $key => $row){
    //     echo "<ul>";
    //     echo $key;
    //     foreach($row as $value) {
    //         echo "<li>$value</li>";
    //         echo "<br>";
    //     }
    //     echo "</ul>";
    // }

    // functions
    $array1 = [100, 200 , 300, 400, "Ali"]; // "100,200,300,400"
    $array2 = [10, 20 , 30];

    // count() - sizeof
    // echo count($array1);
    // echo sizeof($array2);

    // explode
    // $string = "1,Ahmed,php|20";
    // $arr = explode(',', $string); // array
    // var_dump($arr);

    //implode
    // $str = implode('::', $array1); // string
    // var_dump($str);

    // in_array  ternary operator ->  condition ? true : false
    //echo in_array('Ali', $array1) ? 'Ali exist' : "not exit" // true , false

    // array_merge
    var_dump(array_merge($array1, $array2));
?>
