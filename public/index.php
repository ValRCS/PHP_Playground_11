<?php
require_once '../config/config.php';

try {
    //if we needed to set port it would come after $SERVER;port=3307;dbname=$DB
    $conn = new PDO("mysql:host=$SERVER;dbname=$DB", USER, PW);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
