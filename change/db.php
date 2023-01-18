<?php
$servername = "mysql67.unoeuro.com:3306";
$username = "d_d_s_dk";
$password = "ddsudvikling2016";

$conn = new PDO("mysql:host=$servername;dbname=d_d_s_dk_db_time_track", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);