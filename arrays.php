<?php
require 'head.php';
echo "Testing Arrays!";
$cars = ['Volvo', 'Zhiguli', 'Zaporozhec'];
var_dump($cars);

$supermarkets = [
    "highend" => "Stockmann",
    "midmarket" => ['Rimi', 'Maxima'],
    "lowend" => "Lidl",
    33 => "Topins",
];

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
//we decode the string and then cast the result object to array
$myarr = (array) json_decode($json);
echo "<hr>";
var_dump($myarr);

echo "<hr>";
var_dump($supermarkets);
echo "<hr>";

print_r($supermarkets);
echo "<hr>";
array_push($cars, "VW", "BMW");
var_dump($cars);
echo "<hr>";
// echo $cars[2];
echo "<ul>";
foreach ($cars as $car) {
    echo "<li>This is my auto:" . $car . "</li>";
}
echo "</ul>";
echo "<ol>";

for ($i = 0; $i < sizeof($cars); $i++) {
    echo "<li>Car Number $i is $cars[$i]</li>";
}
echo "</ol>";

require 'foot.php';
