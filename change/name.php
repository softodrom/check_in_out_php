<?php

require 'db.php';

$id = $_POST['id'];

try {
    $stmt = $conn->prepare("SELECT checkin_name FROM checkin WHERE checkin_id = :checkin_id");
    $stmt->bindParam(':checkin_id', $id);
    $stmt->execute();
    $row = $stmt->fetch();

    echo "Welcome " . $row[0];

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
