<?php

$servername = "localhost";
$username = "root";
$password = "limboda";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 
echo "Connected successfully";
$sql = "SELECT * FROM active_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
        echo $row["session_id"];
        echo "<br>":
        echo $row["image_id"];
        echo "<br>":
        echo $row["emotion_name"];
        echo "<br>":
        echo $row["image_name"];
        echo "<br>":
    
} else {
    echo "0 results";
}
$conn->close();

?>



