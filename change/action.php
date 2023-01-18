<?php

require 'db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];

try {
    $stmt = $conn->prepare("INSERT INTO checkin (checkin_name, checkin_phone, checkin_start) VALUES (:checkin_name, :checkin_phone, NOW())");
    $stmt->bindParam(':checkin_name', $name);
    $stmt->bindParam(':checkin_phone', $phone);

    $stmt->execute();

    $last_id = $conn->lastInsertId();
    echo $last_id;

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
