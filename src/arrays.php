<?php
require_once 'config/config.php';
require 'head.php';
echo "Testing Arrays!";
$cars = ['Volvo', 'Zhiguli', 'Zaporozhec', 'ķēms', 'Āzis'];
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

foreach ($myarr as $key => $value) {
    echo "<p>My key $key has value $value</p>";
}

echo "<hr>";
var_dump($supermarkets);
echo "<hr>";

print_r($supermarkets);
echo "<hr>";
array_push($cars, "VW", "BMW");
$cars[23] = "Nissan";
var_dump($cars);
echo "<hr>";
// echo $cars[2];
echo "<ul>";
foreach ($cars as $car) {
    echo "<li>This is my auto:" . $car . "</li>";
}
foreach ($cars as $carnum => $car) {
    echo "<li>This is my auto no.$carnum:" . $car . "</li>";
}
echo "</ul>";
echo "<ol>";
echo array_key_exists(23, $cars);
echo isset($cars[23]);
echo "<br>";
echo "Lonely car " . array_pop($cars) . "<br>";
echo array_key_exists(23, $cars);
if (isset($cars[23])) {
    echo "we have this" . $cars[23];
} else {
    echo "no such car!";
}
echo isset($cars[23]);
echo "<br>";
for ($i = 0; $i < sizeof($cars); $i++) {
    echo "<li>Car Number $i is $cars[$i]</li>";
}
echo "</ol>";
//sort returns TRUE on successful sort so this is INPLACE sort!
//FIXME check locale settings why Ā comes after Z ?
setlocale(LC_ALL, 'lv_LV');
var_dump(sort($cars));
var_dump($cars);

require 'foot.php';
