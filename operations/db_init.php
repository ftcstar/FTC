<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ftc_star";
// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    echo ("Connection failed: " . $conn->connect_error);
    //TODO:tasks to be done when db initialization is failed 
}  else {
	echo ("Connected successfully");
}
?>