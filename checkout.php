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
//    $stmt = $conn->prepare("UPDATE checkin SET checkin_end=NOW() WHERE checkin_name = $name AND checkin_phone = $phone");
//    $stmt = $conn->prepare("INSERT INTO checkin (checkin_end) VALUES NOW() WHERE checkin_name = $name");
//    $safeOff = $conn->prepare("SET SQL_SAFE_UPDATES = 0");
//    $safeOn = $conn->prepare("SET SQL_SAFE_UPDATES = 1");
//    $sql ="
//    SET SQL_SAFE_UPDATES = 0;
//    UPDATE checkin SET checkin_end = NOW() WHERE checkin_name = $name;
//    SET SQL_SAFE_UPDATES = 1;
//    ";
//    $stmt = $conn->prepare("UPDATE checkin SET checkin_end = NOW() WHERE checkin_name = '$name'");
    $stmt = $conn->prepare("SET SQL_SAFE_UPDATES = 0;
    UPDATE checkin SET checkin_end = NOW() WHERE checkin_name = '$name';
    SET SQL_SAFE_UPDATES = 1;");
//    $stmt->bindParam(':checkin_name', $name);
//    $stmt->bindParam(':checkin_phone', $phone);
//    $stmt->bindParam(':checkin_start', $checkin_start);
//    $safeOff->execute();
    $stmt->execute();
//    $safeOn->execute();
    //echo "Connected successfully";


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
