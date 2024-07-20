<?php

// $str = "     Php track bb     ";
// echo gettype($str);
// echo "<br>";
// echo $str;
// echo "<br>";
// echo strlen($str);
// echo str_word_count($str);
// echo strpos($str, 'track');
// echo str_replace('bb', 'new pattern', $str);
//echo trim($str);
//echo htmlspecialchars($str);

$x = '';
// echo gettype($x);
// echo is_numeric($x);

// if condition // != !==
// if($x === 10) {
//     echo "x= 10";
// } elseif($x == 5 ) {
//     echo "x equal 5";
// } else {
//     echo "x not equal 10, 5";
// }

// empty isset
// if(!empty($x)){
//     echo $x;
// }

// loops 
$arr = [10, 20, 30];
// for($i = 0; $i < count($arr); $i++){
//     echo $arr[$i];
//     echo "<br>";
// }

// foreach // break continue exit die
foreach($arr as $val) {
    if($val == 20){
        die('exit');
    }
    echo $val;
}

echo "After foreach";
