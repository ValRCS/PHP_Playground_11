<?php
require_once 'House.php';
echo "Testing classes<hr>";

$myHouse = new House("green", 10000, 50000);
$friendsHouse = new House("red", 20000, 90000);
//we can make as many as we wish
echo "My house is $myHouse->color <br>";
echo "My friendsHouse cost $friendsHouse->price <br>";
//in classical OOP we avoid changing properties directly
$friendsHouse->price = 200000;
echo "Wait, actually my friendsHouse cost $friendsHouse->price <br>";
echo "My house is still cheap $myHouse->price <br>";
$myHouse->printHello();
$myHouse->printPrice();
$friendsHouse->printPrice();
//we can not get private properties directly echo $myHouse->topPrice;
$friendsHouse->getTopPrice();

echo $friendsHouse->strongText("hmmmmmm");
