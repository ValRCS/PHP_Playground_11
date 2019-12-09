<?php
require_once '../src/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //we need to add song to database
    $song_id = $_POST['update'];
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $length = $_POST['length'];

    // prepare and bind
    // UPDATE `tracks` SET `title` = 'Rinķi', `artist` = 'Bermudu Divstūris', `length` = '189' WHERE `tracks`.`id` = 6
    $stmt = $conn->prepare("UPDATE `tracks`
        SET `title` = (:title),
            `artist` = (:artist),
            `length` = (:length)
        WHERE `tracks`.`id` = (:songid)");

    $stmt->bindParam(':songid', $song_id);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':artist', $artist);
    $stmt->bindParam(':length', $length);

    $stmt->execute();
    //we go to our index.php or rather our root
    header('Location: /');
} else {
    echo "That was not a POST, most likely GET";
}
