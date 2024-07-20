<?php
// write
    // 1- open
    // w -> write - r -> read - a -> append
    // w+ write+read - r+ read+write - a+
    $file = fopen('data.txt', 'a+'); // resource

    // 2- write
    fwrite($file, "PHP"."\n");
    readfile("data.txt");

    // fwrite($file, "Hello"."\n");
    // fwrite($file, "World");
    //file_put_contents('data.txt', 'Use file put content', FILE_APPEND);

    // 3- close
    fclose($file);

// read
    // 1- open
    //$file = fopen('data.txt', 'r');

    // 2- read
    // echo fgets($file);
    // echo fgets($file);
    // echo fgets($file);

    //feof($file) // find end of file
    // while(!feof($file)) {
    //     echo fgets($file);
    //     echo "<b";
    // }

    // $data = file_get_contents("data.txt"); // string
    // var_dump($data);


    // $data = file("data.txt"); // indexed array
    // var_dump($data);
    // echo "<ul>";
    // foreach($data as $line) {
    //     echo "<li>$line</li>";
    // }
    // echo "<ul>";


    // readfile("data.txt");

    // 3- close
    // fclose($file);

    // write
        // 1- fwrite  3 steps
        // 2- file_put_contents  1 step
        
    // read
        // 1- fgets -> 3 steps
        // 2- file_get_contents -> step return string
        // 3- file => array
        // 4- readfile read+print
        // 5- fgetscsv()

    // filesize();
    // file_exists();
    // filetype();
    // rewind($file); 
?>