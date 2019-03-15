<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
else {
	//echo "Connected Successfully";
	}

$sql = "CREATE DATABASE sharefood";

if ($conn->query($sql) === TRUE) {
	//echo "Database created";
	}
else {
	//echo "die" . $conn->error;
	}
mysqli_select_db($conn,"sharefood");
?>
