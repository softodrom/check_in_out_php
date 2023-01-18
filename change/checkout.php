<?php

require 'db.php';

$id = $_POST['id'];

try {
    $stmt = $conn->prepare("UPDATE checkin SET checkin_end = NOW() WHERE checkin_id = :checkin_id");
    $stmt->bindParam(':checkin_id', $id);
    $stmt->execute();

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
