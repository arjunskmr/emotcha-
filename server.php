<?php
echo "check";
$servername = "localhost";
$username = "root";
$password = "limboda";

// Create connection
$conn = new mysqli($servername, $username, $password);
echo "wtf1";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "wtf";
} 
echo "Connected successfully";
echo "wtf2";
?>



