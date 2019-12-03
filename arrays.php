<?php
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
