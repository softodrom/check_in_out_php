<?php

require 'db.php';

$id = $_POST['id'];

try{
//    $stmt = $conn->prepare("SELECT checkin_start('%d/%m/%Y %k:%i:%s') FROM checkin WHERE checkin_id = :checkin_id");
//    $stmt->bindParam(':checkin_id', $id);

    $stmt = $conn->prepare("SELECT date_format(checkin_start,'%k:%i:%s %d/%m/%Y') FROM checkin WHERE checkin_id = :checkin_id");
    $stmt->bindParam(':checkin_id', $id);
    $stmt->execute();
    $row = $stmt->fetch();

    echo "Check-in: " . $row[0];

} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
