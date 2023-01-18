<?php

$servername = "mysql67.unoeuro.com:3306";
$username = "d_d_s_dk";
$password = "ddsudvikling2016";

$name = $_POST['name'];
$phone = $_POST['phone'];
//$checkin_start =  ("Y j  m  h:i:s A");



try {
    $conn = new PDO("mysql:host=$servername;dbname=d_d_s_dk_db_time_track", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

////    $stmt = $conn->prepare("SELECT company_id, company_name, company_contact_email FROM company");
////    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO checkin (checkin_name, checkin_phone, checkin_start) VALUES (:checkin_name, :checkin_phone, NOW())");
    $stmt->bindParam(':checkin_name', $name);
    $stmt->bindParam(':checkin_phone', $phone);
//    $stmt->bindParam(':checkin_start', $checkin_start);

    $stmt->execute();

    $last_id = $conn->lastInsertId();
    echo $last_id;
    //echo "Connected successfully";


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
