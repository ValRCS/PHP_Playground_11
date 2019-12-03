<?php

require_once 'config.php';
require_once 'util.php';
require 'head.php';
// require_once 'nosuch.php';
// include_once 'nosuch.php';
// require 'config.php';
// include 'afdafdfad.php';
// echo $_GET['link'];
// echo $_SERVER['QUERY_STRING'];
echo $_SERVER['REQUEST_URI'];
// var_dump($_SERVER);

for ($i = 1; $i < MAX; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        printFizzBuzz("FizzBuzz");
    } else if ($i % 3 == 0) {
        printFizzBuzz("Fizz");
    } else if ($i % 5 == 0) {
        printFizzBuzz("Buzz");
    } else {
        printFizzBuzz($i);
        // //double quotes will use $ to print the variable value
        // echo "<div>$i</div>";
        // // so to pring $ you need to escape it
        // echo "<div>\$i</div>";
        // echo "<div>" . $i . "</div>";
        // //single quotes will print exactly what is given
        // echo '<div>$i</div>';
    }
}
require 'foot.php';
