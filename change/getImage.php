<?php

require 'db.php';

$key = $_POST['key'];

try{
//    $stmt = $conn->prepare("SELECT qr_link_location_id FROM qr WHERE qr_key = :qr_key");
    $stmt = $conn->prepare("SELECT location_logo_link FROM location WHERE location_id = 3");
//    $stmt->bindParam(':qr_key', $key);
    $stmt->execute();
    $row = $stmt->fetch();

    echo $row[0];

} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}