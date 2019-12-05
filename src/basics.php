<?php
echo "Hi RCS!";
print("Second Line");

if (2 * 2 == 4) {
    echo "Math works";
}
echo "<hr>";
//variables are case sensitive!
$a = 4;
$A = 5;
$b = 3.14;
$myname = "Valdis";
$truth = false;

define("GREETING", "Hello World");
define("HR", "<hr>");
const MIN_VALUE = 770.0;

if ($a == $A) {
    echo "Strange Universe";
} else {
    echo "Whew, I was worried for a second";
}
echo "<hr>";
var_dump($a, $A, $b, $myname, $truth, MIN_VALUE, null);
echo HR;
echo MIN_VALUE;
