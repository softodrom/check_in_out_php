<?php

require 'db.php';

$id = $_POST['id'];

try {
    $stmt = $conn->prepare("SELECT date_format(checkin_end,'%k:%i:%s %d/%m/%Y') FROM checkin WHERE checkin_id = :checkin_id");
    $stmt->bindParam(':checkin_id', $id);
    $stmt->execute();

//    $stmt = $conn->prepare("SELECT checkin_end FROM checkin WHERE checkin_id = '$id'");
//    $stmt->execute();
    $row = $stmt->fetch();

    echo $row[0];

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
