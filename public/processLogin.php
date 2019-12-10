<?php
require_once '../src/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // prepare and bind
    $stmt = $conn->prepare("SELECT hash FROM users
            WHERE (username = :username)");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $isFetchModeSet = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //we store the results in memory, might not be best for large results
    $allRows = $stmt->fetchAll();
    // var_dump($allRows);
    // print_r(count($allRows));
    if (count($allRows) > 0) {
        $hash = $allRows[0]['hash'];
        // print_r($hash);

        if (password_verify($password, $hash)) {
            echo "<br>Login Worked!";
        } else {
            echo "<br>Login Failed";
        }
    }

    die("For now!");

}