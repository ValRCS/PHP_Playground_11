<?php
require_once 'db.php';

//we prepare a statement and execute it
$stmt = $conn->prepare("SELECT * FROM tracks");
$stmt->execute();

// set the resulting array to associative
$isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);

//we store the results in memory, might not be best for large results
$allRows = $stmt->fetchAll();

$columnsPrinted = false;
foreach ($allRows as $row) {
    if (!$columnsPrinted) {
        foreach ($row as $key => $value) {
            echo "<span>KEY: $key </span>";
        }
        $columnsPrinted = true;
    }
    echo "<div>";
    echo "<span>Title: " . $row["title"] . "</span>";
    echo "</div>";
}
