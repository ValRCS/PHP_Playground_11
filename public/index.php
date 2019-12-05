<?php
require_once '../config/config.php';

require_once '../src/classes/House.php';
require_once '../src/templates/head.php';

try {
    //if we needed to set port it would come after $SERVER;port=3307;dbname=$DB
    $conn = new PDO("mysql:host=$SERVER;dbname=$DB;charset=utf8", USER, PW);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully<br>";
} catch (PDOException $e) {
    //we would deal with broken connection here
    echo "Connection failed: " . $e->getMessage();
}

//we prepare a statement and execute it
$stmt = $conn->prepare("SELECT * FROM tracks");
$stmt->execute();

// set the resulting array to associative
$isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);
var_dump($isFetchModeSet);

//we store the results in memory, might not be best for large results
$allRows = $stmt->fetchAll();
// foreach ($allRows as $key => $value) {
//     echo "<hr>";
//     echo "KEY: ";
//     var_dump($key);
//     echo "<br>";
//     var_dump($value);
// }
// $stmt = $conn->prepare("SELECT * FROM tracks");
// $stmt->execute();
// $rs = $conn->query('SELECT * FROM tracks LIMIT 0');
// for ($i = 0; $i < $rs->columnCount(); $i++) {
//     $col = $rs->getColumnMeta($i);
//     $columns[] = $col['name'];
// }
// print_r($columns);

$columnsPrinted = false;
foreach ($allRows as $row) {
    if (!$columnsPrinted) {
        foreach ($row as $key => $value) {
            echo "KEY: $key <br>";
        }
        $columnsPrinted = true;
    }
    echo "<div>";
    echo "<span>Title: " . $row["title"] . "</span>";
    echo "</div>";
}

require_once '../src/templates/foot.php';
// echo "<hr>My favorite city is " . House::MYFAVORITE;
