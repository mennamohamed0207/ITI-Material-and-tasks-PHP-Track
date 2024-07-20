<?php
    // $x = 10;
    // $X = 100;
    // echo $x; 
    // echo "<br>";
    // echo $X;
    // $fname = "Mona"; 
    // $lname = 'Ali';
    // $y = 10.5;
    // $boolVal = true;
    // $arr = [1,2,3,4];

    
    // echo gettype($x);
    // echo "<br>";
    // echo gettype($fname);
    // echo "<br>";
    // echo gettype($lname);
    // echo "<br>";
    // echo gettype($y);
    // echo "<br>";
    // echo gettype($boolVal);
    // echo "<br>";
    // echo gettype($arr);
    // echo "<br>";
    // settype($x, 'string');
    // echo gettype($x);

    // phpinfo();

    // scopes
    // 1-global scope
    $x = 10;
    $y = 100;
    // 2- local scope (prameter , inside fun)
    /*function add($x, $y) {
        $z = $x + $y; // var inside fun
        echo $x; // parmeter var
        echo "<br>";
        echo "z = $z";
        echo "<br>";
        echo "Hello from fun z = $z";
        echo "<br>";
        echo "x+y = " . $z;
        echo "x+y = ";
        echo $z;
    }

    add(1000, 20);
    */

    // 3- Constant var scope
    // define("PI", "3.14");
    // echo PI;

    // 4-Static Varible Scope
    // function _count() {
    //     static $x = 0;
    //     $x++;
    //     echo $x;
    // }

    // _count(); // x = 1;
    // _count(); // 2
    // _count();

    // 5- global inside fun
    // function _printX() {
    //     global $x;
    //     echo $x;
    // }

    // _printX();

    // 6- Super Global variables data typ acciotive array 
        
    // print_r
    // var_dump 
        // $arr = [1, 200, 3, "mo"]; //indexed array
        // $ass_arr = [ //acciotive array
        //     "id" => 1,
        //     "fname" => "mona",
        //     "lname" => "ali",
        //     'php', // 0
        //     '123'
        // ];
        // echo "<pre>";
        // print_r($ass_arr);
        // print_r($arr);
        // echo "</pre>";
        echo "<pre>";
        echo gettype($GLOBALS);
        echo "</pre>";
        //$_COOKIE
     //$_SESSION

     // get post put delete 
     // http://localhost/iti-php/variables.php?name=mona&pass=123&
     //$_GET
     //$_POST
     //$_REQUEST
     //$_FILES

     //$_SERVER
     //$_ENV
?>

<?php
    // echo $x;
    // echo PI;
    var_dump($_POST);
?>