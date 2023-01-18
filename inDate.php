<?php
//echo "ID: " . $_GET['id'];


$servername = "mysql67.unoeuro.com:3306";
$username = "d_d_s_dk";
$password = "ddsudvikling2016";

$id = $_POST['id'];

try{
    $conn = new PDO("mysql:host=$servername;dbname=d_d_s_dk_db_time_track", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT checkin_start FROM checkin WHERE checkin_id = '$id'");
    $stmt->execute();
    $row = $stmt->fetch();

//    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "Check-in: " . $row[0];

} catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
?>