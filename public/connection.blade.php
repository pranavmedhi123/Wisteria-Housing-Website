<?php
//Connect to MySQL Database
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "test";

$con = mysqli_connect($hostname, $username, $password, $database);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
//   echo "Connected successfully";
?>