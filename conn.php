<?php
// Define connection variables
$DBServer = "localhost"; 
$DBUser = "root";
$DBPass = "";
$DBName = "almostperfect";

// Create connection
$conn = mysqli_connect($DBServer, $DBUser, $DBPass, $DBName);


// Check connection
if ($conn->connect_error) {
    echo "Database connection failed: " . $conn->connect_error, E_USER_ERROR;
}

?>